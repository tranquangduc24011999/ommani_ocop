<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquents\UserRepository;
use Illuminate\Http\Request;
use Auth;
use App\Models\District;
use App\Models\Province;
use App\Models\UserAddress;
use App\Models\UserRole;
use App\Models\Ward;
use Hash;

class UserController extends Controller
{
	private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function index(){
		if(Auth()->guard('web')->check()){
			return view('user.index');
		}else{
			return redirect()->route('getlogin');
		}

	}

	public function updateAccount(Request $request){
		if(Auth()->guard('web')->check()){
			$data = $request->all();
			$address = $data["address"];
			$user = Auth::user();
			$user->name = $data["name"];
			$user->phone = $data["phone"];
			if(isset($data["avatar"])){
				$user->avatar = $data["avatar"];
			}
			/*
			if ($address["province_id"] != null && $address["province_id"] != "NA" && $address["province_id"] != "") {
				$province = Province::find($address["province_id"]);
				$user->address()->update([
					'province_id' => $province->id,
					'province' =>$province->name
				  ]);
			}
			if ($address["district"] != null && $address["district"] != "NA" && $address["district"] != "") {
				$district = District::find($address["district_id"]);
				$user->address()->update([
					'district_id' => $district->id,
					'district' =>$district->name,
					'district_prefix' => $district->prefix
				  ]);
			}
			if ($address["ward"] != null && $address["ward"] != "NA" && $address["ward"] != "" ) {
				$ward = Ward::find($address["ward_id"]);
				$user->address()->update([
					'ward_id' => $ward->id,
					'ward' =>$ward->name,
					'ward_prefix' => $ward->prefix
				  ]);
			}
			*/
			if($address["street"] != null && $address["street"] != "NA" && $address["street"] != ""){
				$user->address()->update([
					'street' => $address["street"]
				]);
			}

			$user->save();
			return 'success';

		}else{
			return redirect()->route('getlogin');
		}
	}

	private function saveUserAddress($userId, $provinceId, $districtId, $wardId)
    {
        $userAddress = new UserAddress();
        $userAddress->user_id = $userId;
        $userAddress->created_at = now()->timestamp;
        $userAddress->updated_at = now()->timestamp;
        if ($provinceId != null) {
            $province = Province::find($provinceId);
            $userAddress->province_id = $provinceId;
            $userAddress->province = $province->name;
        }
        if ($districtId != null) {
            $district = District::find($districtId);
            $userAddress->district_id = $districtId;
            $userAddress->district = $district->name;
        }
        if ($wardId != null) {
            $ward = Ward::find($wardId);
            $userAddress->ward_id = $wardId;
            $userAddress->ward = $ward->name;
        }
        $userAddress->save();
    }

	public function changePassword(Request $request){
		$data = $request->all();

		if (!(Hash::check($data["old_pass"], Auth::user()->password))) {
			$response = (object)[
				"status" => 'error',
				"message" => 'Mật khẩu hiện tại của bạn không khớp với mật khẩu bạn cung cấp. Vui lòng thử lại.'
			];
			return response()->json($response);
					
        }
        if(strcmp($data["old_pass"], $data["new_pass"]) == 0){
            //Current password and new password are same
			$response = (object)[
				"status" => 'error',
				"message" => 'Mật khẩu mới không được giống với mật khẩu hiện tại của bạn. Vui lòng chọn mật khẩu khác'
			];
			return response()->json($response);
        }
		if(strcmp($data["confirm_pass"], $data["new_pass"]) != 0){
            //Current password and new password are same
			$response = (object)[
				"status" => 'error',
				"message" => 'Mật khẩu mới không khớp'
			];
			return response()->json($response);
        }

        $user = Auth::user();
        $user->password = bcrypt($data["new_pass"]);
        $user->save();

		$response = (object)[
			"status" => 'success',
			"message" => 'Cập nhật mật khẩu thành công'
		];
		return response()->json($response);
	}
}
