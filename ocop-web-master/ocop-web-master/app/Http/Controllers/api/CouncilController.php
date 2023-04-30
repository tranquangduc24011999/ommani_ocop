<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
use DB;
use Illuminate\Support\Facades\Auth;

class CouncilController extends Controller
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
    public function getProductsByLevel(Request $request){
        $user = auth('api')->user();
        $limit = $request->size;
        $offset = $request->page;
        $members = $this->productRepository->getProductByLevelPaging($user, $limit,$offset);
        $response = (object)[
			"data" => $members
		];
        return response()->json($response);
	}

    public function getCouncilsByLevel(Request $request){
        $user = auth('api')->user();
        $councils = $this->councilRepository->getCouncilsByLevel($user);
        $response = (object)[
			"data" => $councils
		];
        return response()->json($response);
	}

    public function getCouncilById(Request $request,$id){
        $user = auth('api')->user();
        $council = $this->councilRepository->find($id);
        $helpteamId = $this->councilRepository->getHelpTeamByCouncilId($id);
        $council['help_team_id'] = $helpteamId;
        $response = (object)[
			"data" => $council
		];
        return response()->json($response);
	}

    public function getMembersByCouncil(Request $request,$id){
        $members = $this->councilRepository->getMembersByCouncil($id);
        $response = (object)[
			"data" => $members
		];
        return response()->json($response);
	}

    public function getProductsByCouncil(Request $request, $id){
        $products = $this->productRepository->getProductsByCouncil($id);
        $response = (object)[
			"data" => $products
		];
        return response()->json($response);
	}

    public function getMemberByLevel(Request $request){
        $user = auth('api')->user();
        $members = $this->userRepository->getMemberByLevel($user);
        $response = (object)[
			"data" => $members
		];
        return response()->json($response);
	}

    public function getExaminerByLevel(Request $request){
        $user = auth('api')->user();
        $members = $this->userRepository->getMemberExaminerByLevel($user);
        $response = (object)[
			"data" => $members
		];
        return response()->json($response);
	}

    public function getSearchExaminerByLevel(Request $request){
        $user = auth('api')->user();
        $members = $this->userRepository->getSearchMemberExaminerByLevel($user, $request->keyword);
        $response = (object)[
			"data" => $members
		];
        return response()->json($response);
	}

    public function saveCounCil(Request $request){
        $user = auth('api')->user();

        $data = $request->json()->all();

        if($user->hasRole('MANAGER')){
            try {
                DB::beginTransaction();
                $council = $data['council'];
                $helpTeam = $data['help_team'];

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
                return response()->json([
                    'data' => 'success'
                ]);
            } catch (\Exception $e) {
                DB::rollback();
                //return $e->getMessage();
                $error = (object)[
                    "status" => 'error',
                    "message" => 'Tạo hội đồng thất bại'
                ];
                return response()->json([
                    'error' => $error,
                ], 400);
            }
            

        }
	}

    public function addMemberCouncil(Request $request){
        $user = auth('api')->user();
        $data = $request->json()->all();
        $members = $data['members'];
        $id = $data['id'];
        $result = $this->councilRepository->addMemberCouncil($members,$id);
        if($result === 'success'){
            return response()->json([
                'data' => 'success'
            ]);
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Thêm thành viên hội đồng thất bại'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
    
	}

    public function addMemberHelpteam(Request $request){
        $user = auth('api')->user();
        $data = $request->json()->all();
        $members = $data['members'];
        $id = $data['id'];
        $result = $this->councilRepository->addMemberHelpTeam($members,$id);
        if($result === 'success'){
            return response()->json([
                'data' => 'success'
            ]);
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Thêm thành viên tổ tư vấn thất bại'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
	}

    public function getMembersHelpTeam(Request $request){
        $id = $request->id;
        $members = $this->councilRepository->getMembersHelpTeamById($id);
        $response = (object)[
            "data" => $members
        ];
        return response()->json($response);
	}

    public function addProductToCouncil(Request $request){
        $data = $request->json()->all();
        $id = $data["id"];
        $products = $data['products'];
        $result = $this->councilRepository->updateProductCouncil($products,$id);
        if($result === 'success'){
            return response()->json([
                'data' => 'success'
            ]);
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Thêm hồ sơ vào hội đồng thất bại'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
    }

    public function updateMemberCouncil(Request $request){
        $user = auth('api')->user();
        $data = $request->json()->all();
        $councilId = $data["council_id"];
        $userId = $data["user_id"];
        $role = $data["role"];
        $council = $this->councilRepository->find($councilId);
        if($user->id == $council->user_id){
            if($role == "chairman" || $role == "secretary"){
                $this->councilRepository->updateMemberCouncilByRole($userId,strtolower($role));
                return response()->json([
                    'data' => 'success'
                ]);
            }else{
                $error = (object)[
                    "status" => 'error',
                    "message" => 'Bạn không có quyền sửa thành viên hội đồng này'
                ];
                return response()->json([
                    'error' => $error,
                ], 400);
            }

        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Bạn không có quyền sửa thành viên hội đồng này'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }

    }

    public function updateMemberHelpTeam(Request $request){
        $user = auth('api')->user();
        $data = $request->json()->all();
        $councilId = $data["council_id"];
        $teamId = $data["team_id"];
        $userId = $data["user_id"];
        $role = $data["role"];

        $council = $this->councilRepository->find($councilId);
        if($user->id == $council->user_id){

            if($role == "leader" || $role == "viceleader"){
                $this->councilRepository->updateMemberHelpTeamByRole($userId,strtolower($role));
                return response()->json([
                    'data' => 'success'
                ]);
            }else{
                $error = (object)[
                    "status" => 'error',
                    "message" => 'Bạn không có quyền sửa thành viên tổ tư vấn này'
                ];
                return response()->json([
                    'error' => $error,
                ], 400);
            }
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Bạn không có quyền sửa thành viên tổ tư vấn này'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }

    }

    public function deleteMemberCouncil(Request $request){
        $user = auth('api')->user();
        $data = $request->json()->all();
        $councilId = $data["council_id"];
        $userId = $data["user_id"];
        $council = $this->councilRepository->find($councilId);
        if($user->id == $council->user_id){
            $member = $this->councilRepository->getMemberOfCouncilByUserIdAndCouncilId($userId,$councilId);
            if(isset($member)){
                if($member->type == 'member'){
                    DB::table('member_councils')
                    ->where('id',$member->id)
                    ->delete();
                    return response()->json([
                        'data' => 'success'
                    ]);
                }else{
                    $error = (object)[
                        "status" => 'error',
                        "message" => 'Bạn không có quyền xóa thành viên này'
                    ];
                    return response()->json([
                        'error' => $error,
                    ], 400);
                }
            }else{
                $error = (object)[
                    "status" => 'error',
                    "message" => 'Thành viên không tồn tại trong hội đồng'
                ];
                return response()->json([
                    'error' => $error,
                ], 400);
            }
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Bạn không có quyền xóa thành viên hội đồng này'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }

    }

    public function deleteFileOfCouncil(Request $request){
        $user = auth('api')->user();
        $data = $request->json()->all();
        $councilId = $data["council_id"];
        $productId = $data["product_id"];
        $council = $this->councilRepository->find($councilId);

        if($user->id == $council->user_id){
            $product = $this->councilRepository->getFileOfCouncilByProductIdAndCouncilId($productId,$councilId);
            DB::table('product_councils')
            ->where('id',$product->id)
            ->delete();
            return response()->json([
                'data' => 'success'
            ]);
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Bạn không có quyền xóa hồ sơ hội đồng này'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
    }

    public function deleteMemberHelpTeam(Request $request){
        $user = auth('api')->user();
        $data = $request->json()->all();
        $councilId = $data["council_id"];
        $teamId = $data["team_id"];
        $userId = $data["user_id"];
        $council = $this->councilRepository->find($councilId);
        if($user->id == $council->user_id){
            $memberHelpTeam = $this->councilRepository->getMemberHelpTeamByTeamIdAndUserId($userId,$teamId);
            if(isset($memberHelpTeam)){
                if($memberHelpTeam->type == 'member'){
                    DB::table('member_help_teams')
                    ->where('id',$memberHelpTeam->id)
                    ->delete();
                    return response()->json([
                        'data' => 'success'
                    ]);
                }else{
                    $error = (object)[
                        "status" => 'error',
                        "message" => 'Bạn không có quyền xóa thành viên này'
                    ];
                    return response()->json([
                        'error' => $error,
                    ], 400);
                }
            }else{
                $error = (object)[
                    "status" => 'error',
                    "message" => 'Thành viên không tồn tại trong tổ tư vấn'
                ];
                return response()->json([
                    'error' => $error,
                ], 400);
            }
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Bạn không có quyền xóa thành viên tổ tư vấn này'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }

    }

}
