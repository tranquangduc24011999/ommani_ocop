<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proof;
use App\Models\ProofInformation;
use App\Models\ProofFile;
use App\Models\Mark;
use App\Repositories\Contracts\ProofRepositoryInterface;
use App\Repositories\Eloquents\ProofRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Contracts\QARepositoryInterface;
use App\Repositories\Eloquents\QARepository;
use App\Repositories\Contracts\MarkRepositoryInterface;
use App\Repositories\Eloquents\MarkRepository;
use App\Repositories\Contracts\CouncilRepositoryInterface;
use App\Repositories\Eloquents\CouncilRepository;
use App\Models\TotalMark;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class ProofController extends Controller
{
    private $proofRepository;
	private $productRepository;
	private $qaRepository;
    private $markRepository;
    private $councilRepository;

    public function __construct(
		ProofRepositoryInterface $proofRepository,
		ProductRepositoryInterface $productRepository,
		QARepositoryInterface $qaRepository,
        MarkRepositoryInterface $markRepository,
        CouncilRepositoryInterface $councilRepository
		)
    {
        $this->proofRepository = $proofRepository;
		$this->productRepository = $productRepository;
		$this->qaRepository = $qaRepository;
        $this->markRepository = $markRepository;
        $this->councilRepository = $councilRepository;
    }

    public function getProofs(Request $request){
        $product = $this->productRepository->getProductById($request->product_id);
        $productRanks = $this->productRepository->getProductRankByProductId($request->product_id);
        $entity = null;
        $id = auth('api')->user()->id;
        foreach($product->entities as $e) {
            if($e->id == $product->entity_id /*&& $e->user_id == $id*/) { //Tạo thời bỏ && $e->user_id == $id
                $entity = $e;
                break;
            }
        }
        $proofs = $this->proofRepository->getProofsByProductId($request->product_id);

        $response = (object)[
			"product" => $product,
			"product_rank" => $productRanks,
            "entity" => $entity,
            "proofs" => $proofs
		];
		return response()->json($response);
    }

    public function postProofInformation(Request $request){
        try {

            $data = $request->json()->all();

            $user = auth('api')->user();
            $productId = $data['product_id'];
            $proofId = $data['proof_id'];
            $productType = $data['product_type'];
            $description = $data['description'];
            $images = $data['images'];

            $product = $this->productRepository->getProductById($productId);
            if($product->user_id == $user->id){
                $error = (object)[
                    "status" => 'error',
                    "message" => 'Bạn không có quyền nộp minh chứng cho sản phẩm này'
                ];
                return response()->json([
                    'error' => $error,
                ], 400);
            }
            $proofInformation = $this->proofRepository->getProofInformationsByProductIdAndProofId($productId, $proofId);
            if(!isset($proofInformation)){

                DB::beginTransaction();
                $proofInformation = new ProofInformation;
                $proofInformation->product_id = $productId;
                $proofInformation->user_id = $user->id;
                $proofInformation->user_name = $user->name;
                $proofInformation->proof_id = $proofId;
                $proofInformation->description = $description;
                $proofInformation->save();

                foreach($images as $image){
                    $proofFile = new ProofFile;
                    $proofFile->data = $image->url;
                    $proofFile->prinformation_id = $proofInformation->id;
                    $proofFile->name_file = basename($image->url);
                    $proofFile->save();

                }

                if(isset($product)){
                    $product->status = 'SUBMITTING';
                    $product->save();
                }
                DB::commit();
            }else{
                DB::beginTransaction();
                foreach($images as $image){
                    $proofFile = new ProofFile;
                    $proofFile->data = $image['url'];
                    $proofFile->prinformation_id = $proofInformation->id;
                    $proofFile->name_file = basename($image['url']);
                    $proofFile->save();
                }
                if(isset($product)){
                    $product->status = 'SUBMITTING';
                    $product->save();
                }
                DB::commit();
            }
            //$proofInformation->prooffiles()->attach($proofFiles);
            return response()->json([
                'data' => 'success'
            ]);
            //return $images[0]['dataName'];
        } catch (\Exception $e) {
            DB::rollback();
            $error = (object)[
                "status" => 'error',
                "message" => 'Nộp minh chứng thất bại'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
            //return $e->getMessage();
        }
	}

    public function postProofStatus(Request $request){
        $data = $request->json()->all();
        $productId = $data['product_id'];
        $status = $data['status']; //DONE
        $result = $this->proofRepository->checkProductProofDone($productId);
        if($result){
            try {
                $product = $this->productRepository->getProductById($productId);
                $product->status = $status;
                $product->save();
                return response()->json([
                    'data' => 'success'
                ]);

            } catch (\Exception $e) {
                $error = (object)[
                    "status" => 'error',
                    "message" => 'Hoàn thành minh chứng thất bại'
                ];
                return response()->json([
                    'error' => $error,
                ], 400);
            }
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Sản phẩm không tồn tại'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }

	}

    public function getProofFiles(Request $request){
        $data = $request->json()->all();
        $productId = $data['product_id'];
        $proofId = $data['proof_id'];
        $userId = $data['user_id'];
        $files = $this->proofRepository->getProofFilesByProductIdAndUserId($productId,$proofId,$userId);
        return response()->json([
            'files'=>$files
        ]);
	}

    public function updateProofInformation(Request $request){
        $data = $request->json()->all();
        $user = auth('api')->user();
        $description = $data['description'];
        $id = $data['proof_information_id'];
        $proofInformation = $this->proofRepository->getProofInformationById($id);
        if($user->id == $proofInformation->user_id){
            $proofInformation->description = $description;
            $proofInformation->save();
            return response()->json([
                'data' => 'success'
            ]);
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Bạn không có quyền'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
	}

    public function deleteFileProof(Request $request,$id){
        $user = auth('api')->user();
        $proofFile = $this->proofRepository->getProofFile($id);
        $proofInformation = $this->proofRepository->getProofInformationById($proofFile->prinformation_id);
        if($user->id == $proofInformation->user_id){
            $proofFile->delete();
            return response()->json([
                'data' => 'success'
            ]);
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Bạn không có quyền'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
	}

    public function updateMark(Request $request){
        $user = auth('api')->user();
        $data = $request->json()->all();
        $productId = $data['product_id'];
        $questionid = $data['question_id'];
        $answerId = $data["answer_id"];
        $point = $data["point"];
        $type = $data["type"];
        $councilId = $data["council_id"];

        if($data['check'] == "true"){
            $marks = $this->proofRepository->getMarkByUserIdAndQuestionId($productId,$user->id, $questionid,$councilId);
            if(isset($marks)){
                if(count($marks) == 1){
                    $mark = $marks[0];
                    $mark->answer_id = $answerId;
                    $mark->point = $point;
                    $mark->save();
                    return response()->json([
                        'data' => 'success'
                    ]);
                }else{
                    $marks->each->delete();
                    $mark = new Mark;
                    $mark->product_id = $productId;
                    if(isset($councilId)){
                        $mark->council_id = $councilId;
                    }else{
                        $mark->council_id = 0;
                    }
                    $mark->question_id = $questionid;
                    $mark->answer_id = $answerId;
                    $mark->user_mark_id = $user->id;
                    $mark->point = $point;
                    $mark->type = $type;
                    $mark->level = $user->level;
                    $mark->save();
                    if($mark->id != null){
                        return response()->json([
                            'data' => 'success'
                        ]);
                    }else{
                        $error = (object)[
                            "status" => 'error',
                            "message" => 'Chấm điểm thất bại'
                        ];
                        return response()->json([
                            'error' => $error,
                        ], 400);
                    }
                }


            }else{
                $mark = new Mark;
                $mark->product_id = $productId;
                if(isset($councilId)){
                    $mark->council_id = $councilId;
                }else{
                    $mark->council_id = 0;
                }
                $mark->question_id = $questionid;
                $mark->answer_id = $answerId;
                $mark->user_mark_id = $user->id;
                $mark->point = $point;
                $mark->type = $type;
                $mark->level = $user->level;
                $mark->save();
                if($mark->id != null){
                    return response()->json([
                        'data' => 'success'
                    ]);
                }else{
                    $error = (object)[
                        "status" => 'error',
                        "message" => 'Chấm điểm thất bại'
                    ];
                    return response()->json([
                        'error' => $error,
                    ], 400);
                }
            }

        }else{
            $marks = $this->proofRepository->getMarkByUserIdAndQuestionId($request->product_id,$user->id, $request->question_id,$councilId);
            if(isset($marks)){
                $marks->each->delete();
            }
            return response()->json([
                'data' => 'success'
            ]);
        }
	}

    public function saveTotalmark(Request $request){
        $data = $request->json()->all();

        $user = auth('api')->user();
        $productId = $data["product_id"];
        $point = $data["point"];
        $councilId = isset($data["council_id"]) && $data["council_id"] != null ? $request->council_id : 0;
        $type = $data["type"];

        try {
            DB::beginTransaction();
            $totalMarkExist = $this->markRepository->getTotalMarkByProductIdAndUserId($productId,$user->id);
            if(isset($totalMarkExist)){
                $totalMarkExist->point = $point;
                $totalMarkExist->save();
            }else{
                $totalMark = new TotalMark;
                $totalMark->product_id = $productId;
                $totalMark->council_id = $councilId;
                $totalMark->user_mark_id = $user->id;
                $totalMark->point = $point;
                $totalMark->status = $type;
                $totalMark->type = $type;
                $user = User::find($user->id);
                $totalMark->level = $user->level;
                $totalMark->save();
            }
            $countMember = $this->councilRepository->getMemberCountOfCouncilByProductIdAndLevel($productId, $user->level);
            $countMarkProduct = $this->markRepository->getCountMarkProductByProductIdAndLevel($productId, $user->level);
            $product = $this->productRepository->find($productId);
            if(isset($countMember) && isset($countMarkProduct)){
                $countM = $countMember[0]->count;
                $countMarkP = $countMarkProduct[0]->count;
                if($countM - 1 == $countMarkP){ // -1 vì trừ thư ký không được chấm
                    if(isset($product)){
                        //Chấm xong: trạng thái hoàn thành
                        $product->status = 'DONE';
                    }
                }else{
                    //Trạng thái chờ chấm
                    $product->status = 'WAITTING';
                }
            }else{
                $product->status = 'WAITTING';
            }
            DB::commit();
            return response()->json([
                'data' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            $error = (object)[
                "status" => 'error',
                "message" => 'Có lỗi xảy ra. Xin vui lòng thử lại'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
    }

}
