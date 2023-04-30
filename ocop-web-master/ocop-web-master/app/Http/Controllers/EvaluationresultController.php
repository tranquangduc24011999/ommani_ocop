<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\MarkRepositoryInterface;
use App\Repositories\Eloquents\MarkRepository;
use App\Repositories\Contracts\CouncilRepositoryInterface;
use App\Repositories\Eloquents\CouncilRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Contracts\EvaluationRepositoryInterface;
use App\Repositories\Eloquents\EvaluationRepository;
use App\Repositories\Contracts\ProductTypeRepositoryInterface;
use App\Repositories\Eloquents\ProductTypeRepository;
use Auth;
use Illuminate\Http\Request;
use App\Models\ProductRank;

class EvaluationresultController extends Controller
{
	private $markRepository;
    private $productRepository;
	private $productTypeRepository;
    private $councilRepository;
	private $evaluationRepository;

    public function __construct(
	    MarkRepositoryInterface $markRepository,
        CouncilRepositoryInterface $councilRepository,
        ProductRepositoryInterface $productRepository,
		ProductTypeRepositoryInterface $productTypeRepository,
		EvaluationRepositoryInterface $evaluationRepository
	)
    {
		$this->markRepository = $markRepository;
        $this->councilRepository = $councilRepository;
        $this->productRepository = $productRepository;
		$this->productTypeRepository = $productTypeRepository;
		$this->evaluationRepository = $evaluationRepository;
    }

    public function index(){
		if(Auth()->guard('web')->check()){
			$productTypes = $this->productTypeRepository->all('');
			return view('evaluationresult.index', compact('productTypes'));
		}else{
			return redirect()->route('getlogin');
		}

	}

	public function getProductByStatus(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$userId = $request->user_id;
				$limit = $request->limit;
				$offset = $request->page;
				$status = $request->status;
				//$products = $this->productRepository->getProductsByStatus($user,$status,$limit,$offset);
				$products = $this->productRepository->getFileOfCouncilByUserId($user,$status,$limit,$offset);
				return response()->json($products);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getMembersMarked(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$productId = $request->product_id;
				$councilId = $request->council_id;
				$members = $this->evaluationRepository->getMembersMarkedByProductId($productId,$councilId, $user->level);
				return response()->json($members);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function evaluateFileResult(Request $request){
		if(Auth()->guard('web')->check()){
			$user = Auth::user();
			$product = $this->productRepository->getProductByProductId($request->product_id);
			//$members = $this->evaluationRepository->getMembersMarkedByProductId($request->product_id, $user->level);
			return view('evaluationresult.evaluatefileresult', compact('product'));
			
		}else{
			return redirect()->route('getlogin');
		}
		
	}

	public function setProductRank(Request $request){
		if(Auth()->guard('web')->check()){
			$user = Auth::user();
			$data = $request->all();
			$productId = $data["product_id"];
			$level = $user->level;
			$averagePoint = $data["average_point"];
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
			return 'success';
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getFilterData(Request $request){
        if(Auth()->guard('web')->check()){
            if($request->ajax()){
                $data = [
                    'user'     => Auth::user(),
                    'product'  => $request->product,
                    'council'   => $request->council,
                    'rank'     => $request->rank != 0 ? $request->rank : null,
                    'status'   => $request->status,
					'product_type' =>$request->productType,
                    'province' => $request->province,
                    'district' => $request->district
                ];
                $products = $this->productRepository->filterFileOfCouncilByUserId(json_decode(json_encode($data)));
                return response()->json($products);
            }
        }
        else{
            return redirect()->route('getlogin');
        }
    }
}
