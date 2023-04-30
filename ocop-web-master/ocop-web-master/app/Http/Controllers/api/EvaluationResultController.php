<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Contracts\MarkRepositoryInterface;
use App\Repositories\Eloquents\MarkRepository;
use App\Repositories\Contracts\CouncilRepositoryInterface;
use App\Repositories\Eloquents\CouncilRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Contracts\EvaluationRepositoryInterface;
use App\Repositories\Eloquents\EvaluationRepository;

use App\Models\ProductRank;


class EvaluationResultController extends Controller
{
    private $markRepository;
    private $productRepository;
    private $councilRepository;
	private $evaluationRepository;

    public function __construct(
	    MarkRepositoryInterface $markRepository,
        CouncilRepositoryInterface $councilRepository,
        ProductRepositoryInterface $productRepository,
		EvaluationRepositoryInterface $evaluationRepository
	)
    {
		$this->markRepository = $markRepository;
        $this->councilRepository = $councilRepository;
        $this->productRepository = $productRepository;
		$this->evaluationRepository = $evaluationRepository;
    }

    private function getMembersMarked($productId,$councilId){
        $user = auth('api')->user();
        $members = $this->evaluationRepository->getMembersMarkedByProductId($productId, $councilId, $user->level);
        return $members;
	}

    public function getMembersMarkedApi(Request $request){
        $user = auth('api')->user();
        $productId = $request->product_id;
        $councilId = $request->council_id;
        $members = $this->evaluationRepository->getMembersMarkedByProductId($productId,$councilId, $user->level);
        $response = (object)[
			"data" => $members
		];
        return response()->json($response);
	}

    private function getProductById($productId){
		$product = $this->productRepository->getProductByProductId($productId);
        return $product;
    }

    private function getCouncilByIdV2($councilId){
        $user = auth('api')->user();
        $councils = $this->councilRepository->getCouncilById($councilId);
        return $councils[0];
	}

    public function setProductRank(Request $request){
        $user = auth('api')->user();
        $data = $request->all();
        $productId = $data["product_id"];
        $councilId = $data["council_id"];
        $level = $user->level;
        $product = $this->getProductById($productId);
        $isCompleted = false;
        if(isset($product)){
            if($product->status == 'SUBMITTING' || $product->status == 'PREPARING'){
                $error = (object)[
                    "status" => 'error',
                    "message" => 'Duyệt kết quả chỉ áp dụng cho bộ hồ sơ đã gửi kết quả!'
                ];
                return response()->json([
                    'error' => $error,
                ], 400);
            }
            if ($product->status == 'RANKED') {
                $isCompleted = true;
            } else if ($user->level == 2 && ($product->status == 'DISTRICTRANKED' || $product->status == 'PROVINCERANKED')) {
                $isCompleted = true;
            } else if ($user->level == 1 && $product->status == 'PROVINCERANKED') {
                $isCompleted = true;
            } else if($product->status == 'TWRANKED'){
                $isCompleted = true;
            }

            if($isCompleted){
                $error = (object)[
                    "status" => 'error',
                    "message" => 'Bộ hồ sơ đã được duyệt kết quả!'
                ];
                return response()->json([
                    'error' => $error,
                ], 400);
            }
        }
        $membersMarked = $this->getMembersMarked($productId);
        $council = $this->getCouncilByIdV2($councilId);
        $averagePoint = 0;
        if(isset($membersMarked) && isset($council)){
            if($council->member_count - 1 != count($membersMarked)){
                $error = (object)[
                    "status" => 'error',
                    "message" => 'Chưa đủ kết quả chấm của toàn bộ thành viên trong hội đồng chấm!'
                ];
                return response()->json([
                    'error' => $error,
                ], 400);
            }
            $arrayPoints = array();
            foreach($membersMarked as $item){
                $arrayPoints[] = $item->point;
            }
            $total = $arrayPoints->reduce(function ($carry, $item) {
                return $carry + $item;
            });
            $averagePoint = round($total/count($arrayPoints),2);

            $minPoint = min($arrayPoints);
            $maxPoint = max($arrayPoints);
            if($maxPoint - $minPoint >= 10){
                $error = (object)[
                    "status" => 'error',
                    "message" => 'Chênh lệch điểm trong hội đồng!'
                ];
                return response()->json([
                    'error' => $error,
                ], 400);
            }
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Chưa đủ kết quả chấm của toàn bộ thành viên trong hội đồng chấm!'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }

        $productRank = new ProductRank;
        $productRank->product_id = $productId;
        $productRank->level = $level;
        $productRank->average_point = $averagePoint;
        $productRank->save();

        $product = $this->productRepository->getProductById($productId);
        if(isset($product)){
            if($level == 3){
                $product->status = 'DISTRICTRANKED';
            }else if($level == 2){
                $product->status = 'PROVINCERANKED';
            }else if($level == 1){
                $product->status = 'TWRANKED';
            }
            $product->save();
        }
        return response()->json([
            'data' => 'success'
        ]);
	}

    public function getFileMarked(Request $request){
        $user = auth('api')->user();
        $limit = $request->size;
        $offset = $request->page;
        $status = "";

        $products = $this->productRepository->getFileOfCouncilByUserId($user,$status,$limit,$offset);
        $response = (object)[
			"data" => $products
		];
        return response()->json($response);
	}
}
