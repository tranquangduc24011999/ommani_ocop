<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\EvaluationRepositoryInterface;
use App\Repositories\Eloquents\EvaluationRepository;
use App\Repositories\Contracts\ProofRepositoryInterface;
use App\Repositories\Eloquents\ProofRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Contracts\QARepositoryInterface;
use App\Repositories\Eloquents\QARepository;
use App\Repositories\Contracts\LocationRepositoryInterface;
use App\Repositories\Eloquents\LocationRepository;
use Auth;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{

	private $evaluationRepository;
	private $proofRepository;
	private $productRepository;
	private $qaRepository;
    private $locationRepository;

	public function __construct(
		EvaluationRepositoryInterface $evaluationRepository,
		ProofRepositoryInterface $proofRepository,
		ProductRepositoryInterface $productRepository,
		QARepositoryInterface $qaRepository,
        LocationRepositoryInterface $locationRepository
		)
    {
		$this->evaluationRepository = $evaluationRepository;
		$this->proofRepository = $proofRepository;
		$this->productRepository = $productRepository;
		$this->qaRepository = $qaRepository;
        $this->locationRepository = $locationRepository;
    }

    public function index(){
		if(Auth()->guard('web')->check()){
            $provinces = $this->locationRepository->all('');
            $briefStt = config('apps.general.briefStt');
            $user = Auth::user();
			return view('file.list', compact('provinces', 'briefStt', 'user'));
		}else{
			return redirect()->route('getlogin');
		}

	}

    public function getProofManagement(){
		if(Auth()->guard('web')->check()){
			return view('file.proofmanagement');
		}else{
			return redirect()->route('getlogin');
		}

	}

    public function detailFile(Request $request){
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
			$scoreA = $this->getScore($groupA);
			$scoreB = $this->getScore($groupB);
			$scoreC = $this->getScore($groupC);
			$totalScore = $scoreA + $scoreB + $scoreC;
			return view('file.detail', compact('proofs','product','product2','entity', 'groupA','groupB','groupC', 'totalA', 'totalB', 'totalC', 'scoreA', 'scoreB', 'scoreC', 'totalScore'));
			//return view('proof.submitproof', compact('proofs','product','entity', 'groupA','groupB','groupC', 'totalA', 'totalB', 'totalC'));
		}else{
			return redirect()->route('getlogin');
		}
    }

    public function getScore($data){
	    $score = 0;
	    foreach ($data as $grQuestion){
	        foreach ($grQuestion as $question){
				if(isset($question->answers)){
					foreach ($question->answers as $answer){
						if ($answer->answer != 0){
							$score = $score + $answer->point;
						}
					}
				}

            }
        }
	    return $score;
    }

    public function viewEvaluateFileResult(){
        if(Auth()->guard('web')->check()){
			return view('file.ketquacham');
		}else{
			return redirect()->route('getlogin');
		}
    }

	public function getProductsByLevelPaging(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$productId = $request->product_id;
				$proofId = $request->proof_id;
				$userId = $request->user_id;
				$limit = $request->limit;
				$offset = $request->page;
				$products = $this->productRepository->getProductByLevelPaging($user,$limit,$offset);
				return response()->json($products);
			}

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
                    'entity'   => $request->entity,
                    'rank'     => $request->rank != 0 ? $request->rank : null,
                    'from'     => $request->dateFrom != null ? date('Y-m-d H:i:s', strtotime($request->dateFrom)) : date('Y-m-d 00:00:00'),
                    'to'       => $request->dateTo != null ? date('Y-m-d H:i:s', strtotime($request->dateTo)) : date('Y-m-d 23:59:59'),
                    'status'   => $request->status != null ? $this->genMultipleData($request->status) : null,
                    'province' => $request->province != null ? $this->genMultipleData($request->province) : null,
                    'district' => $request->district != null ? $this->genMultipleData($request->district) : null,
                    'ward'     => $request->ward != null ? $this->genMultipleData($request->ward) : null,
                    'cboDate'  => $request->cboDate
                ];
                $products = $this->productRepository->getFilterProduct(json_decode(json_encode($data)));
                return response()->json($products);
            }
        }
        else{
            return redirect()->route('getlogin');
        }
    }

    function genMultipleData($data){
        $res = [];
        foreach ($data as $val){
            array_push($res, $val);
        }
        return $res;
    }
}
