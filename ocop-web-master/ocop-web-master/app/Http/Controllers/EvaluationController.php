<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\EvaluationRepositoryInterface;
use App\Repositories\Eloquents\EvaluationRepository;
use App\Repositories\Contracts\ProofRepositoryInterface;
use App\Repositories\Eloquents\ProofRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Contracts\QARepositoryInterface;
use App\Repositories\Eloquents\QARepository;
use App\Repositories\Contracts\ProductTypeRepositoryInterface;
use App\Repositories\Eloquents\ProductTypeRepository;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquents\UserRepository;

use Illuminate\Http\Request;
use Auth;
use App\Models\TotalMark;

class EvaluationController extends Controller
{
	private $evaluationRepository;
	private $proofRepository;
	private $productRepository;
	private $productTypeRepository;
	private $qaRepository;

    public function __construct(
		EvaluationRepositoryInterface $evaluationRepository,
		ProofRepositoryInterface $proofRepository, 
		ProductRepositoryInterface $productRepository,
		ProductTypeRepositoryInterface $productTypeRepository,
		QARepositoryInterface $qaRepository,
		UserRepositoryInterface $userRepository
		)
    {
        $this->evaluationRepository = $evaluationRepository;
		$this->proofRepository = $proofRepository;
		$this->productRepository = $productRepository;
		$this->qaRepository = $qaRepository;
		$this->productTypeRepository = $productTypeRepository;
		$this->userRepository = $userRepository;
    }

    public function index(){
		if(Auth()->guard('web')->check()){
			$productTypes = $this->productTypeRepository->all('');
			return view('evaluation.index',compact('productTypes'));
		}else{
			return redirect()->route('getlogin');
		}

	}

	public function getPendingEvaluateProducts(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$products = $this->evaluationRepository->getProductsEvaluation($user);
				return response()->json($products);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getPendingEvaluateProductsHelpTeam(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$products = $this->evaluationRepository->getProductHelpTeam($user, $request->limit, $request->page);
				return response()->json($products);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function evaluationset(Request $request){
		if(Auth()->guard('web')->check()){
			//$proofs = $this->proofRepository->all('');
			$product = $this->productRepository->getProductById($request->product_id);
			$product2 = $this->productRepository->getProductByProductId($request->product_id);
			$entity = null;
			foreach($product->entities as $e) {
				if($e->id == $product->entity_id && $e->user_id == $request->created_userid) {
					$entity = $e;
					break;
				}
			}

			$user = Auth::user();
			$proofs = $this->proofRepository->getProofsByProductId($request->product_id);
			list($qaresults, $totalA, $totalB, $totalC) = $this->qaRepository->getQuestionAnswers($request->product_type,$user->id, $request->product_id);
			$groupA = array();
			$groupB = array();
			$groupC = array();
			foreach($qaresults as $items){
				if($items[0]->groupId == 1){
					array_push($groupA, $items);
				}
				if($items[0]->groupId == 2){
					array_push($groupB, $items);
				}
				if($items[0]->groupId == 3){
					array_push($groupC, $items);
				}
			}

			$totalMark = TotalMark::where(['council_id'=>$request->council_id, 'product_id'=>$request->product_id,'level'=>$user->level])->first();
			return view('evaluation.evaluationset', compact('proofs','product','product2','entity', 'groupA','groupB','groupC', 'totalA', 'totalB', 'totalC','totalMark'));
			//return view('proof.submitproof', compact('proofs','product','entity', 'groupA','groupB','groupC', 'totalA', 'totalB', 'totalC'));
		}else{
			return redirect()->route('getlogin');
		}

	}

	public function evaluationsetHelpTeam(Request $request){
		if(Auth()->guard('web')->check()){
			//$proofs = $this->proofRepository->all('');
			$product = $this->productRepository->getProductById($request->product_id);
			$product2 = $this->productRepository->getProductByProductId($request->product_id);
			$entity = null;
			foreach($product->entities as $e) {
				if($e->id == $product->entity_id && $e->user_id == $request->created_userid) {
					$entity = $e;
					break;
				}
			}

			$user = Auth::user();
			$proofs = $this->proofRepository->getProofsByProductId($request->product_id);
			list($qaresults, $totalA, $totalB, $totalC) = $this->qaRepository->getQuestionAnswers($request->product_type,$request->created_userid, $request->product_id);
			$groupA = array();
			$groupB = array();
			$groupC = array();
			foreach($qaresults as $items){
				if($items[0]->groupId == 1){
					array_push($groupA, $items);
				}
				if($items[0]->groupId == 2){
					array_push($groupB, $items);
				}
				if($items[0]->groupId == 3){
					array_push($groupC, $items);
				}
			}
			return view('evaluation.evaluationsethelpteam', compact('proofs','product','product2','entity', 'groupA','groupB','groupC', 'totalA', 'totalB', 'totalC'));
		}else{
			return redirect()->route('getlogin');
		}

	}

	public function evaluationHelpTeam(){
		if(Auth()->guard('web')->check()){
			return view('evaluation.evaluationhelpteam');
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function filterProductsEvaluation(Request $request){
        if(Auth()->guard('web')->check()){
            if($request->ajax()){
                $data = [
                    'user'     => Auth::user(),
                    'product'  => $request->product,
                    'status'   => $request->status,
					'product_type' =>$request->productType,
                    'province' => $request->province,
                    'district' => $request->district
                ];
                $products = $this->evaluationRepository->filterProductsEvaluation(json_decode(json_encode($data)));
                return response()->json($products);
            }
        }
        else{
            return redirect()->route('getlogin');
        }
    }

	public function viewMarkedByUser(Request $request){
		if(Auth()->guard('web')->check()){
			$product = $this->productRepository->getProductById($request->product_id);
			$product2 = $this->productRepository->getProductByProductId($request->product_id);
			$entity = null;
			foreach($product->entities as $e) {
				if($e->id == $product->entity_id && $e->user_id == $request->created_userid) {
					$entity = $e;
					break;
				}
			}

			list($qaresults, $totalA, $totalB, $totalC) = $this->qaRepository->getQuestionAnswers($request->product_type,$request->user_mark_id, $request->product_id);
			$groupA = array();
			$groupB = array();
			$groupC = array();
			foreach($qaresults as $items){
				if($items[0]->groupId == 1){
					array_push($groupA, $items);
				}
				if($items[0]->groupId == 2){
					array_push($groupB, $items);
				}
				if($items[0]->groupId == 3){
					array_push($groupC, $items);
				}
			}
			$user = $this->userRepository->find($request->user_mark_id);
			$totalMark = TotalMark::where(['council_id'=>$request->council_id, 'product_id'=>$request->product_id,'level'=>$user->level])->first();
			return view('evaluationresult.viewmarkedbyuser', compact('user','product','product2','entity', 'groupA','groupB','groupC', 'totalA', 'totalB', 'totalC','totalMark'));
		}else{
			return redirect()->route('getlogin');
		}

	}

}
