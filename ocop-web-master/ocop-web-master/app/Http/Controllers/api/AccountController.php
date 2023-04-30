<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquents\UserRepository;
use App\Models\District;
use App\Models\Province;
use App\Models\UserAddress;
use App\Models\UserRole;
use App\Models\Ward;
use Hash;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function updateAccount(Request $request){
        $data = $request->json()->all();

        $address = $data["address"];
        $user = auth('api')->user();
        $user->name = $data["name"];
        $user->phone = $data["phone"];

        if(isset($data["avatar"])){
            $user->avatar = $data["avatar"];
        }

        if ($address["province_id"] != null) {
            $province = Province::find($address["province_id"]);
            $user->address()->update([
                'province_id' => $province->id,
                'province' =>$province->name
              ]);
        }
        if ($address["district_id"] != null) {
            $district = District::find($address["district_id"]);
            $user->address()->update([
                'district_id' => $district->id,
                'district' =>$district->name,
                'district_prefix' => $district->prefix
              ]);
        }
        if ($address["ward_id"] != null) {
            $ward = Ward::find($address["ward_id"]);
            $user->address()->update([
                'ward_id' => $ward->id,
                'ward' =>$ward->name,
                'ward_prefix' => $ward->prefix
              ]);
        }

        if($address["street"] != null){
            $user->address()->update([
                'street' => $address["street"]
            ]);
        }

        $user->save();
        return response()->json([
            'data' => 'success'
        ]);
	}

    public function getAccountInfo(){
        $user = auth('api')->user();
        $user->address;
        $user->roles;
        $response = (object)[
			"data" => $user
		];
        return response()->json($response);
	}

    public function changePassword(Request $request){
		$data = $request->json()->all();
        $user = auth('api')->user();
		if (!(Hash::check($data["old_pass"], $user->password))) {

            $error = (object)[
                "status" => 'error',
                "message" => 'Mật khẩu hiện tại của bạn không khớp với mật khẩu bạn cung cấp. Vui lòng thử lại.'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
					
        }
        if(strcmp($data["old_pass"], $data["new_pass"]) == 0){
            //Current password and new password are same
            $error = (object)[
                "status" => 'error',
                "message" => 'Mật khẩu mới không được giống với mật khẩu hiện tại của bạn. Vui lòng chọn mật khẩu khác'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
		if(strcmp($data["confirm_pass"], $data["new_pass"]) != 0){
            //Current password and new password are same
            $error = (object)[
                "status" => 'error',
                "message" => 'Mật khẩu mới không khớp'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }

        $user = auth('api')->user();
        $user->password = bcrypt($data["new_pass"]);
        $user->save();

		$response = (object)[
			"data" => 'success'
		];
		return response()->json($response);
	}

    public function updateMemberStatus(Request $request){
        $user = auth('api')->user();
        $data = $request->all();
        $userId = $data["id"];
        $status = $data["status"];
        $userUpdate = $this->userRepository->find($userId);
        if(isset($userUpdate)){
            $userUpdate->status = $status;
            $userUpdate->save();
            $response = (object)[
                "data" => 'success'
            ];
            return response()->json($response);
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Cập nhật trạng thái thất bại'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
        
	}

    public function getMembersPaging(Request $request){
        $user = auth('api')->user();
        $limit = $request->size;
        $offset = $request->page;
        $members = $this->userRepository->getMembers($user,$limit,$offset);
        $response = (object)[
			"data" => $members
		];
        return response()->json($response);
    
	}
}
