<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\QuestionCommentRepositoryInterface;
use App\Repositories\Eloquents\QuestionCommentRepository;
use App\Repositories\Contracts\PushNotificationInterface;
use App\Repositories\Eloquents\PushNotificationRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use Illuminate\Http\Request;
use Auth;
use App\Models\QuestionComment;
use App\Events\SendNotificationToMultipleDevice;


class QuestionCommentController extends Controller
{
    private $questionCommentRepository;
    private $pushNotificationRepository;
    private $productRepository;

    private $apiConfig;

    public function __construct(
	    QuestionCommentRepositoryInterface $questionCommentRepository,
      PushNotificationInterface $pushNotificationRepository,
      ProductRepositoryInterface $productRepository

	)
    {
      $this->questionCommentRepository = $questionCommentRepository;
      $this->pushNotificationRepository = $pushNotificationRepository;
      $this->productRepository = $productRepository;

      $this->apiConfig = [
        'url' => config('firebase.push_url'),
        'server_key' => config('firebase.server_key'),
        'device_type' => config('firebase.device_type')
    ];

    }

    public function getNoteByQuestionIdAndProductId(Request $request){
      if(Auth()->guard('web')->check()){
          $user = Auth::user();
          $productId = $request->product_id;
          $questionId = $request->question_id;
          $notes = $this->questionCommentRepository->getNoteByQuestionIdAndProductId($productId,$questionId);
          return response()->json($notes);
      }else{
        return redirect()->route('getlogin');
      }
    }

    public function saveNote(Request $request){
        if(Auth()->guard('web')->check()){
			      $user = Auth::user();

            $data = $request->all();
            $productId = $data['product_id'];
            $questionId = $data['question_id'];
            $note = $data['note'];
            
            $comment = new QuestionComment;
            $comment->product_id = $productId;
            $comment->question_id = $questionId;
            $comment->user_id = $user->id;
            $comment->note = $note;
            $comment->save();
            $product = $this->productRepository->find($productId);
            $userIds = $this->questionCommentRepository->getUserIdsByQuestionIdAndProductId($productId,$questionId,$user->id);
            if(isset($userIds)){
                $deviceTokens = $this->pushNotificationRepository->getDeviceTokens($userIds);
                if(isset($deviceTokens)){
                    $json = json_encode(array('type' => 'note','product_type'=>$product->product_type,'entity_id'=>$product->entity_id, 'product_id' => (int)$productId, 'question_id' =>(int)$questionId));
                    event(new SendNotificationToMultipleDevice($deviceTokens,"Có ghi chú mới cho sản phẩm: ".$product->name,$note,$json,"note"));
                    
                }
            }else{
              if($user->id != $product->user_id){
                  //Không gửi cho chính người comment
                  $deviceTokens = $this->pushNotificationRepository->getDeviceTokens([$product->user_id]);
                  if(isset($deviceTokens)){
                      $json = json_encode(array('type' => 'note','product_type'=>$product->product_type,'entity_id'=>$product->entity_id,'product_id' => (int)$productId, 'question_id' =>(int)$questionId));
                      event(new SendNotificationToMultipleDevice($deviceTokens,"Có ghi chú mới cho sản phẩm: ".$product->name,$note,$json,"note"));
                  }
              }
            }
            return 'success';
        }else{
          return redirect()->route('getlogin');
        }
    }
}
