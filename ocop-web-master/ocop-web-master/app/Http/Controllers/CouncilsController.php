<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Arr;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquents\UserRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Contracts\CouncilRepositoryInterface;
use App\Repositories\Eloquents\CouncilRepository;
use App\Models\Council;
use App\Models\HelpTeam;
use App\Models\MemberCouncil;
use App\Models\MemberHelpTeam;
use App\Models\ProductCouncil;
use App\Models\Mark;
use App\Models\TotalMark;
use DB;

class CouncilsController extends Controller
{
	private $userRepository;
	private $productRepository;
	private $councilRepository;

    public function __construct(
		UserRepositoryInterface $userRepository, 
		ProductRepositoryInterface $productRepository,
		CouncilRepositoryInterface $councilRepository
		)
    {
        $this->userRepository = $userRepository;
		$this->productRepository = $productRepository;
		$this->councilRepository = $councilRepository;
    }

    public function index(){
		if(Auth()->guard('web')->check()){
			return view('councils.index');
		}else{
			return redirect()->route('getlogin');
		}
	}

    public function detail(Request $request){
		if(Auth()->guard('web')->check()){

			$id = $request->id;
			$products = $this->productRepository->getProductsByCouncil($id);
			return view('councils.detail', compact('products'));
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getMemberByLevel(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$members = $this->userRepository->getMemberByLevel($user);
				return response()->json($members);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getSearchMemberByLevel(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$members = $this->userRepository->getSearchMemberByLevel($user, $request->keyword);
				return response()->json($members);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getExaminerByLevel(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$members = $this->userRepository->getMemberExaminerByLevel($user);
				return response()->json($members);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getExaminerOtherByLevel(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$councilId = $request->id;
				$members = $this->userRepository->getMemberExaminerOtherByLevel($user, $councilId);
				return response()->json($members);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getSearchExaminerOtherByLevel(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$councilId = $request->id;
				$members = $this->userRepository->getSearchMemberExaminerOtherByLevel($user, $request->keyword, $councilId);
				return response()->json($members);
			}	
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getSearchExaminerByLevel(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$members = $this->userRepository->getSearchMemberExaminerByLevel($user, $request->keyword);
				return response()->json($members);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getProductsByLevel(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$members = $this->productRepository->getProductByLevel($user);
				return response()->json($members);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function saveCounCil(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				if($user->hasRole('MANAGER')){
					try {
						DB::beginTransaction();
						$council = $request->council;
						$helpTeam = $request->help_team;
	
						$councilModel = new Council;
						$councilModel->name = $council["name_council"];
						$councilModel->user_id = $user->id;
						$councilModel->expired = $council["deadline"];
						$councilModel->save();
						$membersCouncil = $council["members"];
						foreach($membersCouncil as $item){
							$memberCouncilModel = new MemberCouncil;
							$memberCouncilModel->council_id = $councilModel->id;
							$memberCouncilModel->user_id = $item["id"];
							$memberCouncilModel->type = $item["type"];
							$memberCouncilModel->save();
						}

						$productsId = $council["product_info"];
						foreach($productsId as $item){
							$productCouncil = new ProductCouncil;
							$productCouncil->council_id = $councilModel->id;
							$productCouncil->product_id = $item;
							$productCouncil->level = $user->level;
							$productCouncil->save();
						}
						
						$helpTeamModel = new HelpTeam;
						$helpTeamModel->council_id = $councilModel->id;
						$helpTeamModel->name = $helpTeam["name_help_team"];
						$helpTeamModel->save();

						$memberHelpTeam = $helpTeam["members"];
						foreach($memberHelpTeam as $item){
							$memberHelpTeamModel = new MemberHelpTeam;
							$memberHelpTeamModel->team_id = $helpTeamModel->id;
							$memberHelpTeamModel->user_id = $item["id"];
							$memberHelpTeamModel->type = $item["type"];
							$memberHelpTeamModel->save();
						}

						DB::commit();
						return 'success';
					} catch (\Exception $e) {
						DB::rollback();
						return $e->getMessage();
					}
					

				}
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getCouncilsByLevel(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$councils = $this->councilRepository->getCouncilsByLevel($user);
				return response()->json($councils);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getMembersByCouncil(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$id = $request->id;
				$members = $this->councilRepository->getMembersByCouncil($id);
				return response()->json($members);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getProductsByCouncil(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$id = $request->id;
				$products = $this->productRepository->getProductsByCouncil($id);
				return response()->json($products);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getCouncilById(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$id = $request->id;
				$council = $this->councilRepository->find($id);
				return response()->json($council);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function addMemberCouncil(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$members = $request->members;
				$id = $request->id;
				$result = $this->councilRepository->addMemberCouncil($members,$id);
				return response()->json($result);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function updateMemberCouncil(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$userId = $request->user_id;
				$userUpdateId = $request->user_update_id;
				$councilId = $request->council_id;

				$result = $this->councilRepository->updateMemberCouncil($userUpdateId,$userId, $councilId);

				if($result > 0){
					return 'success';
				}else{
					return 'fail';
				}
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getProductsOtherByCouncil(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$id = $request->id;
				$products = $this->productRepository->getProductsOtherByCouncil($user, $id);
				return response()->json($products);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function searchProductsOtherByCouncil(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$id = $request->id;
				$products = $this->productRepository->searchProductsOtherByCouncil($user, $id, $request->keyword);
				return response()->json($products);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function updateProductCouncil(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$products = $request->products;
				$id = $request->id;
				$result = $this->councilRepository->updateProductCouncil($products,$id, $user->level);
				return response()->json($result);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getCouncilByIdV2(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$id = $request->id;
				$councils = $this->councilRepository->getCouncilById($id);
				return response()->json($councils[0]);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function deleteProductCouncil(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$councilId = $request->council_id;
				$productId = $request->product_id;
				$councils = $this->councilRepository->deleteProductCouncil($councilId,$productId);
				return 'success';
			}
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getHelpTeam(Request $request){
		if(Auth()->guard('web')->check()){
			return view('councils.helpteam');
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getMembersHelpTeam(Request $request){
		if(Auth()->guard('web')->check()){
			$councilId = $request->council_id;
			$id = $request->id;
			$members = $this->councilRepository->getMembersHelpTeamById($id);
			return response()->json($members);
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function addMemberHelpteam(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$members = $request->members;
				$id = $request->id;
				$result = $this->councilRepository->addMemberHelpTeam($members,$id);
				return response()->json($result);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getMemberHelpTeamOtherByLevel(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$teamId = $request->id;
				$members = $this->userRepository->getMemberHelpTeamOtherByLevel($user, $teamId);
				return response()->json($members);
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function deleteMemberCouncil(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$userId = $request->user_id;
				$councilId = $request->council_id;
				$council = $this->councilRepository->find($councilId);
				if($user->id == $council->user_id){
					$member = $this->councilRepository->getMemberOfCouncilByUserIdAndCouncilId($userId,$councilId);
					if(isset($member)){
						if($member->type == 'member'){
							DB::table('member_councils')
							->where('id',$member->id)
							->delete();
							return 'success';
						}else{
							return 'fail';
						}
					}else{
						return 'fail';
					}
				}else{
					return 'fail';
				}
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function updateMemberHelpTeam(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$userId = $request->user_id;
				$userUpdateId = $request->user_update_id;
				$teamId = $request->team_id;

				$result = $this->councilRepository->updateMemberHelpTeam($userUpdateId,$userId, $teamId);

				if($result > 0){
					return 'success';
				}else{
					return 'fail';
				}
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function deleteMemberHelpTeam(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$userId = $request->user_id;
				$teamId = $request->team_id;
		
				$member = $this->councilRepository->getMemberHelpTeamByTeamIdAndUserId($userId,$teamId);
				if(isset($member)){
					if($member->type == 'member'){
						DB::table('member_help_teams')
						->where('id',$member->id)
						->delete();
						return 'success';
					}else{
						return 'fail';
					}
				}else{
					return 'fail';
				}
			}
			
		}else{
			return redirect()->route('getlogin');
		}
	}

	public function copyMark(Request $request){
		try {
			$data = $request->all();
			$councilId = $data["council_id"];
			$product_origin_id = $data["product_origin_id"];
			$product_id = $data["product_id"];
			$productCouncil = ProductCouncil::where(['council_id'=>$councilId, 'product_id'=>$product_id])->first();
			if(isset($productCouncil)){
				DB::beginTransaction();
				$level = $productCouncil->level;
				$marks = Mark::where(['council_id'=>$councilId, 'product_id'=>$product_origin_id,'level'=>$level])->get();
	
				if(isset($marks)){
					if(isset($product_id)){
						foreach($marks as $item){
							unset($item["id"]); // Loại bỏ id
							$item->product_id = intval($product_id);
						}
						Mark::where(['council_id'=>$councilId, 'product_id'=>$product_id,'level'=>$level])->delete();
						Mark::insert($marks->toArray());
					}else{
						DB::rollback();
						return 'fail';
					}

				}
	
				$totalMarks = TotalMark::where(['council_id'=>$councilId, 'product_id'=>$product_origin_id,'level'=>$level])->get();
				if(isset($totalMarks)){
					foreach($totalMarks as $item){
						unset($item["id"]);
						$item->product_id = intval($product_id);
					}
					TotalMark::where(['council_id'=>$councilId, 'product_id'=>$product_id,'level'=>$level])->delete();
					TotalMark::insert($totalMarks->toArray());
				}else{
					DB::rollback();
					return 'fail';
				}
				DB::commit();
				return 'success';
			}
		} catch (\Exception $th) {
			DB::rollback();
			return 'fail';
		}
	}
}
