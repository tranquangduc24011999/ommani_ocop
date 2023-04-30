<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proof;
use App\Models\ProofInformation;
use App\Models\ProofFile;
use App\Models\Mark;
use App\Models\ProofLink;
use App\Repositories\Contracts\ProofRepositoryInterface;
use App\Repositories\Eloquents\ProofRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Contracts\QARepositoryInterface;
use App\Repositories\Eloquents\QARepository;
use Auth;
use DB;

class SubmitProofController extends Controller
{
	private $proofRepository;
	private $productRepository;
	private $qaRepository;

    public function __construct(
		ProofRepositoryInterface $proofRepository,
		ProductRepositoryInterface $productRepository,
		QARepositoryInterface $qaRepository
		)
    {
        $this->proofRepository = $proofRepository;
		$this->productRepository = $productRepository;
		$this->qaRepository = $qaRepository;
    }
    //insert dữ liệu
    public function insert_json(){
        $prduct_type_id=28;
        $listQuestion=DB::SELECT("SELECT id from questions where product_type_id=?",[$prduct_type_id]);
        foreach($listQuestion as $value){
            $questionID=$value->id;
            $id_answer = DB::table('questions as q')
                ->join('answers as a', 'a.question_id', '=', 'q.id')
                ->select('q.id', 'q.question', 'a.id', 'a.content')
                ->where('q.id', $questionID)
                ->get()
                ->pluck('id')
                ->toArray();
            $json=array(
                1=>array(),
                2=>array(),
                3=>array(),
                4=>array(),
                5=>array()
            );
            if(count($id_answer)>0){
                for ($i=0;$i<count($id_answer);$i++){
                    $json[1][]=$id_answer[$i];
                    $json[2][]=$id_answer[$i];
                    $json[3][]=$id_answer[$i];
                    $json[4][]=$id_answer[$i];
                    $json[5][]=$id_answer[$i];
                }
            }

            $json_data = json_encode($json);
            DB::update("update questions set rank = '$json_data' where id =?",[$questionID]);
        }
    }
//    public function insertDB()
//    {
//        $idOld=58;
//        $idNew=59;
//        DB::insert('insert into sections (product_type,name,group_id,created_at,updated_at,slug,tick)
//        select '.$idNew.',s.name,s.group_id,s.created_at,s.updated_at,s.slug,26
//        from sections as s where product_type='.$idOld);
//        DB::insert('insert into questions (question,section_id,parent_id,type,note,created_at,updated_at,product_type_id,tick)
//        select question,section_id,parent_id,type,note,created_at,updated_at,'.$idNew.',26
//        from questions as s where product_type_id='.$idOld);
//        $sectionIdOld= DB::table('questions')->where('product_type_id',$idOld)->groupBy('section_id')->pluck('section_id')->toArray();
//        $sectionIdNew = DB::table('sections')->where('product_type',$idNew)->pluck('id')->toArray();
//        for($i=0;$i<count($sectionIdNew);$i++){
//            DB::table('questions')->whereRaw('product_type_id='.$idNew.' and section_id='.$sectionIdOld[$i])->update(['section_id'=>$sectionIdNew[$i]]);
//        }
//        $answersOld = DB::table('questions')->where("product_type_id",$idOld)->pluck('id')->toArray();
//        $answersNew = DB::table('questions')->where("product_type_id",$idNew)->pluck('id')->toArray();
//        $listAnswers = DB::table('answers')->groupBy('question_id')->pluck('question_id')->toArray();
//        for ($i = 0; $i < count($answersOld); $i++) {
//            if (!in_array($answersNew[$i], $listAnswers)) {
//                DB::insert('INSERT INTO answers (content, question_id, point, created_at, updated_at,tick)
//                SELECT content, ? , point, created_at, updated_at,26
//                FROM answers WHERE question_id =?', [$answersNew[$i],$answersOld[$i]]);
//            }
//        }
//    }
    public function index(Request $request){

		if(Auth()->guard('web')->check()){
			//$proofs = $this->proofRepository->all('');
			$product = $this->productRepository->getProductById($request->product_id);
			$product2 = $this->productRepository->getProductByProductId($request->product_id);
			$productRanks = $this->productRepository->getProductRankByProductId($request->product_id);
			$entity = null;
			foreach($product->entities as $e) {
				if($e->id == $product->entity_id && $e->user_id == Auth::user()->id) {
					$entity = $e;
					break;
				}
			}
			// foreach($proofs as $item){
			// 	$proofCount = $this->proofRepository->getProofInformationsByProductIdAndProofId($product->id,$item->id);
			// 	$item->count_file = $proofCount;
			// }
			$user = Auth::user();
			$proofs = $this->proofRepository->getProofsByProductId($request->product_id);
			//dd($proofs);
			$questions = $this->qaRepository->getQuestions2($request->product_type);
			$idUserTotalMark = $this->qaRepository->getUserMark($request->product_type);
//            [$level1, $level2, $level3, $level4, $level5] = array_fill(0, 5, []);
            $levels = [1 => [],2 => [],3 => [],4 => [],5 => [],];
            foreach ($idUserTotalMark as $value) {
                $convertJson = json_decode($value, true);
                for ($i = 1; $i <= 5; $i++) {
                    $levels[$i] = array_merge($levels[$i], $convertJson[$i]);
                }
            }
            list(1=>$level1, 2=>$level2, 3=>$level3, 4=>$level4, 5=>$level5) = $levels;
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
			return view('proof.submitproof', compact('proofs','questions','product','product2','entity', 'groupA','groupB','groupC', 'totalA', 'totalB', 'totalC', 'level1','level2','level3','level4','level5'));
		}else{
			return redirect()->route('getlogin');
		}

	}

	public function getQA(Request $request){
		$questions = $this->qaRepository->getQuestions2($request->product_type);
		return $questions;
	}

	public function getSupDoc(Request $request){
        if(Auth()->guard('web')->check()){
            if($request->ajax()){
                $sup = $this->proofRepository->getSupProof($request->supId);
                return response()->json($sup);
            }
        }
        else{
            return redirect()->route('getlogin');
        }
    }

	public function postProofInformation(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				try {
					$user = Auth::user();
					$productId = $request->product_id;
					$proofId = $request->proof_id;
					$productType = $request->product_type;
					$description = $request->description;
					$images = $request->images;
					$links = $request->link;

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
						//$proofFiles = array();
						foreach($request->images as $image){
							$proofFile = new ProofFile;
							$proofFile->data = $image['dataName'];
							$proofFile->prinformation_id = $proofInformation->id;
							$proofFile->name_file = $image['name'];
							$proofFile->description = $description;
							$proofFile->save();
							//$proofFiles[] = $proofFile;
							if(isset($links)){
								foreach($links as $link){
									$proofLink = new ProofLink;
									$proofLink->question_id = $link;
									$proofLink->prinformation_id = $proofInformation->id;
									$proofLink->product_id = $productId;
									$proofLink->proof_file_id = $proofFile->id;
									$proofLink->save();
								}
							}
						}

						$product = $this->productRepository->getProductById($productId);
						if(isset($product)){
							$product->status = 'SUBMITTING';
							$product->save();
						}
						DB::commit();
					}else{

						DB::beginTransaction();
						foreach($request->images as $image){
							$proofFile = new ProofFile;
							$proofFile->data = $image['dataName'];
							$proofFile->prinformation_id = $proofInformation->id;
							$proofFile->name_file = $image['name'];
							$proofFile->description = $description;
							$proofFile->save();
							//$proofFiles[] = $proofFile;
							if(isset($links)){
								foreach($links as $link){
									$proofLink = new ProofLink;
									$proofLink->question_id = $link;
									$proofLink->prinformation_id = $proofInformation->id;
									$proofLink->product_id = $productId;
									$proofLink->proof_file_id = $proofFile->id;
									$proofLink->save();
								}
							}

						}
						$product = $this->productRepository->getProductById($productId);
						if(isset($product)){
							$product->status = 'SUBMITTING';
							$product->save();
						}
						DB::commit();
					}
					//$proofInformation->prooffiles()->attach($proofFiles);
					return 'success';
					//return $images[0]['dataName'];
				} catch (\Exception $e) {
					DB::rollback();
					return $e->getMessage();
				}


			}
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function postProofDone(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$productId = $request->product_id;
				$result = $this->proofRepository->checkProductProofDone($productId);
				if($result){
					try {
						$product = $this->productRepository->getProductById($request->product_id);
						$product->status = 'DONE';
						$product->save();
						return 'success';
					} catch (\Exception $e) {
						return 'fail';
					}
				}else{
					return 'notdone';
				}
			}

		}else{
			return redirect()->route('getlogin');
		}

	}

	public function getProofFileById(Request $request){
		$file = $this->proofRepository->getProofFile($request->id);
		$prooflinks = $this->proofRepository->getLinksByProofFileId($request->id);
		$file['links'] = $prooflinks;
		return response()->json($file);
    }

	public function getProofFile(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$productId = $request->product_id;
				$proofId = $request->proof_id;
				$userId = $request->user_id;
				$files = $this->proofRepository->getProofFilesByProductIdAndUserId($productId,$proofId,$userId);
				return response()->json($files);
			}

		}else{
			return redirect()->route('getlogin');
		}
	}

	public function updateProofInformation(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$description = $request->description;
				$id = $request->proof_information_id;
				$proofInformation = $this->proofRepository->getProofInformationById($id);
				if($user->id == $proofInformation->user_id){
					$proofInformation->description = $description;
					$proofInformation->save();
					return 'success';
				}else{
					return 'fail';
				}


			}

		}else{
			return redirect()->route('getlogin');
		}
	}

	public function updateProofFile(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$description = $request->description;
				$id = $request->proof_information_id;
				$proofFileId = $request->proof_file_id;
				$productId = $request->product_id;
				$links = $request->link;
				$proofInformation = $this->proofRepository->getProofInformationById($id);
				$proofFile = $this->proofRepository->getProofFile($proofFileId);
				$proofLinks = $this->proofRepository->getLinksByProofFileId($proofFileId);
				if($user->id == $proofInformation->user_id){
					try {
						DB::beginTransaction();
						$proofFile->description = $description;
						$proofFile->save();
						if(isset($links)){
							foreach($links as $link){
								if(isset($proofLinks)){
									//Check xem Link đã tồn tại chưa
									$result = $this->checkLinkExist($link, $proofLinks);
									if(!$result){
										//Nếu chưa tồn tại thì insert vào
										$proofLink = new ProofLink;
										$proofLink->question_id = $link;
										$proofLink->prinformation_id = $proofInformation->id;
										$proofLink->product_id = $productId;
										$proofLink->proof_file_id = $proofFile->id;
										$proofLink->save();
									}
								}else{
									$proofLink = new ProofLink;
									$proofLink->question_id = $link;
									$proofLink->prinformation_id = $proofInformation->id;
									$proofLink->product_id = $productId;
									$proofLink->proof_file_id = $proofFile->id;
									$proofLink->save();
								}

							}

							$proofLinksAfterUpdate = $this->proofRepository->getLinksByProofFileId($proofFileId);
							$newArray = [];
							foreach($proofLinksAfterUpdate as $item){
								array_push($newArray, $item->question_id);
							}
							$diff = array_diff($newArray, $links);
							if(isset($diff)){
								ProofLink::where('proof_file_id',$proofFileId)->whereIn('question_id',$diff)->delete();
							}
						}
						DB::commit();
						return 'success';

					} catch (\Exception $e) {
						DB::rollback();
						return 'fail';
					}
				}else{
					dd('Không có quyền');
					return 'fail';
				}


			}

		}else{
			return redirect()->route('getlogin');
		}
	}

	public function deleteFileProof(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$id = $request->id;
				$proofFile = $this->proofRepository->getProofFile($id);
				$proofInformation = $this->proofRepository->getProofInformationById($proofFile->prinformation_id);
				if($user->id == $proofInformation->user_id){
					$proofFile->delete();
					return 'success';
				}else{
					return 'fail';
				}
			}

		}else{
			return redirect()->route('getlogin');
		}
	}

	public function updateMark(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$councilId = 0;
				if(isset($request->council_id)){
					$councilId = $request->council_id;
				}
				$user = Auth::user();
				if($request->check == "true"){
					try {
						DB::beginTransaction();
						$marks = $this->proofRepository->getMarkByUserIdAndQuestionId($request->product_id,$user->id, $request->question_id, $councilId);
						if(isset($marks)){
							if(count($marks) == 1){
								$mark = $marks[0];
								$mark->answer_id = $request->answer_id;
								$mark->point = $request->point;
								$mark->save();
								DB::commit();
								return 'success';
							}else{
								$marks->each->delete();
								$mark = new Mark;
								$mark->product_id = $request->product_id;
								if(isset($request->council_id)){
									$mark->council_id = $request->council_id;
								}else{
									$mark->council_id = 0;
								}
								$mark->question_id = $request->question_id;
								$mark->answer_id = $request->answer_id;
								$mark->user_mark_id = $user->id;
								$mark->point = $request->point;
								$mark->type = $request->type;
								$mark->level = $user->level;
								$mark->save();
								DB::commit();
								if($mark->id != null){
									return 'success';
								}else{
									return 'fail';
								}
							}

						}else{
							$mark = new Mark;
							$mark->product_id = $request->product_id;
							if(isset($request->council_id)){
								$mark->council_id = $request->council_id;
							}else{
								$mark->council_id = 0;
							}
							$mark->question_id = $request->question_id;
							$mark->answer_id = $request->answer_id;
							$mark->user_mark_id = $user->id;
							$mark->point = $request->point;
							$mark->type = $request->type;
							$mark->level = $user->level;
							$mark->save();
							DB::commit();
							if($mark->id != null){
								return 'success';
							}else{
								return 'fail';
							}
						}
					} catch (\Exception $e) {
						DB::rollback();
						return 'fail';
					}
				}else{
					$marks = $this->proofRepository->getMarkByUserIdAndQuestionId($request->product_id,$user->id, $request->question_id,$councilId);
					if(isset($marks)){
						$marks->each->delete();
					}
					return 'success';
				}
			}

		}else{
			return redirect()->route('getlogin');
		}
	}

	private function checkLinkExist($link, $links){
		$result = false;
		foreach($links as $item){
			if($item->question_id == $link){
				$result = true;
				break;
			}
		}
		return $result;
	}

	public function getGuideQuestion(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$productType = $request->product_type;
				$groups = $this->qaRepository->getGuideQuestions($productType);
				return response()->json($groups);
			}

		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getProofFilesByQuestionIdAndProductId(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$questionId = $request->question_id;
				$productId = $request->product_id;
				$proofFiles = $this->proofRepository->getProofFilesByQuestionIdAndProductId($questionId, $productId);
				return response()->json($proofFiles);
			}
		}
	}


}
