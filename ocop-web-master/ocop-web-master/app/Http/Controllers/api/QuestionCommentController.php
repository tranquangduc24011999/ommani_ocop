<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\QuestionCommentRepositoryInterface;
use App\Repositories\Eloquents\QuestionCommentRepository;
use App\Repositories\Contracts\PushNotificationInterface;
use App\Repositories\Eloquents\PushNotificationRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use App\Models\QuestionComment;
use Illuminate\Support\Facades\Auth;
use App\Events\SendNotificationToMultipleDevice;

class QuestionCommentController extends Controller
{
    private $questionCommentRepository;
    private $pushNotificationRepository;
    private $productRepository;

    public function __construct(
	    QuestionCommentRepositoryInterface $questionCommentRepository,
        PushNotificationInterface $pushNotificationRepository,
        ProductRepositoryInterface $productRepository
	)
    {
		$this->questionCommentRepository = $questionCommentRepository;
        $this->pushNotificationRepository = $pushNotificationRepository;
        $this->productRepository = $productRepository;
    }

    public function getCommentByQuestionIdAndProductId(Request $request){
        $user = auth('api')->user();
        $productId = $request->product_id;
        $questionId = $request->question_id;
        $notes = $this->questionCommentRepository->getNoteByQuestionIdAndProductId($productId,$questionId);
        $response = (object)[
			"data" => $notes
		];
		return response()->json($response);
    }

    public function saveComment(Request $request){
        $user = auth('api')->user();

        $data = $request->json()->all();
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
            $product = $this->productRepository->find($productId);
            if($user->id != $product->user_id){
                //Không gửi cho chính người comment
                $deviceTokens = $this->pushNotificationRepository->getDeviceTokens([$product->user_id]);
                if(isset($deviceTokens)){
                    $json = json_encode(array('type' => 'note','product_type'=>$product->product_type,'entity_id'=>$product->entity_id, 'product_id' => (int)$productId, 'question_id' =>(int)$questionId));
                    event(new SendNotificationToMultipleDevice($deviceTokens,"Có ghi chú mới cho sản phẩm: ".$product->name,$note,$json,"note"));
                }
            }

        }
        return response()->json([
            'data' => 'success'
        ]);
    }
}
