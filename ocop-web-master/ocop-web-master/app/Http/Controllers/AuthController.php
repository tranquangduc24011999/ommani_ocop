<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Province;
use App\Models\UserAddress;
use App\Models\UserRole;
use App\Models\Ward;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Hash;
use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquents\UserRepository;
use App\Http\Requests\RegisterEntityRequest;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{

    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getLogin()
    {
        if (Auth()->guard('web')->check()) {
            return redirect('/');
        }
        return view('login.index');
    }

    public function postlogin(Request $request)
    {
        if ($request->ajax()) {
            try {
                $data = $request->all();
                $email = $data['email'];
                $password = $data['password'];

                $credential = ['email' => $email, 'password' => $password];

                if (Auth()->guard('web')->attempt($credential)) {
                    $user = Auth::user();
                    if($user->status == 1){
                        $user->roles;
                        $data = (object)[
                            "status" => 'success',
                            "data" => $user
                        ];
                        return response()->json($data);
                    }else{
                        $data = (object)[
                            "status" => 'error',
                            "message" => 'Tài khoản chưa được xét duyệt hoặc không tồn tại',
                            "data" => null
                        ];
                        return response()->json($data);
                    }

                    // if($user->hasRole('MEMBER')){
                    // 	return redirect()->route('entities');
                    // }else if($user->hasRole('MANAGER')){
                    // 	return redirect()->route('getDashboard');
                    // }

                } else {
                    $data = (object)[
                        "status" => 'error',
                        "data" => null
                    ];
                    return response()->json($data);
                }
            } catch (\Exception $e) {
                $data = (object)[
                    "status" => 'error',
                    "message" => $e->getMessage(),
                    "data" => null
                ];
                return response()->json($data);
            }
        }

        // $credential = ['email' => $request->email, 'password' => $request->password ];

        // if(Auth()->guard('web')->attempt($credential)){
        //     $user = Auth::user();

        //     if($user->hasRole('MEMBER')){
        //         return redirect()->route('entities');
        //     }else if($user->hasRole('MANAGER')){
        //         return redirect()->route('getDashboard');
        //     }

        // }else{
        // 	return redirect()->route('getlogin')
        // 			->withErrors(['errors', 'Đăng nhập thất bại'])
        // 			->withInput();
        // }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('getlogin'); //->with('error', 'ajahaha')
    }

    public function register()
    {
        $provinces = Province::all();
        $departments = config('apps.general.departments');
        $workUnitDistrictLevel = config('apps.general.workUnitDistrictLevel');
        $workUnitProvinceLevel = config('apps.general.workUnitProvinceLevel');
        return view('account.registernew', compact('provinces', 'departments',
            'workUnitDistrictLevel', 'workUnitProvinceLevel'));
    }

    public function registerAccount(Request $request, $api = false)
    {
        $body = $request->all();
        // check email
        $userEmail = User::where('email', $body['email'])->count();
        $userPhone = User::where('phone', $body['phone'])->count();
        if ($userEmail > 0 ) {
            return back()->with('error', 'Email đã được sử dụng');
        }
        if ($userPhone > 0 ) {
            return back()->with('error', 'Số điện thoại đã được sử dụng');
        }
        // save user
        $user = new User();
        $user->name = $body['fullname'];
        $user->email = $body['email'];
        $user->phone = $body['phone'];
        $user->level = $body['level'] != null ? $body['level'] : 0;
        $user->departments = $request->departments;
        $user->work_unit = $request->work_unit;
        if(isset($request->work_unit_id_district)){
            $user->work_unit_id = $request->work_unit_id_district;
        }else if(isset($request->work_unit_id_province)){
            $user->work_unit_id = $request->work_unit_id_province;
        }
        $user->position = $request->position;
        $user->created_at = now()->timestamp;
        $user->updated_at = now()->timestamp;
        $user->password = bcrypt($body['password']);
        $user->status = 1;
        try {
            DB::beginTransaction();
            $user->save();
            // save user address
            $this->saveUserAddress($user->id, $request->province_id, $request->district_id, $request->ward_id);
            // save role
            $this->saveUserRoles($user->id, $request->type);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            if ($api) {
                return $e;
            }
            return back()->with('error', 'Đăng ký thất bại');
        }
        if ($api) {
            return $user;
        }
        return redirect()->route('getlogin')->with('success', 'Đăng ký thành công');
    }

    private function saveUserRoles($userId, $role)
    {
        $roleId = null;
        switch ($role) {
            case 'Member':
                $roleId = 1;
                break;
            case 'manager':
                $roleId = 2;
                break;
            case 'helpteam':
                $roleId = 3;
                break;
            case 'examiner':
                $roleId = 4;
                break;
        }
        $userRole = new UserRole();
        $userRole->user_id = $userId;
        $userRole->role_id = $roleId;
        $userRole->create_date = now()->timestamp;
        $userRole->update_date = now()->timestamp;
        $userRole->save();
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

    public function postRegisterEntity(RegisterEntityRequest $request)
    {

        $user = new User;
        $user->name = $user->txtFullName;
        $user->txtPhone = strip_tags($request->phone);
        $user->txtEmail = strip_tags($request->email);
        $user->txtPass = bcrypt($request->password);
        $user->active = false;

        $this->userRepository->create($user);

        $credential = ['email' => $request->email, 'password' => $request->password];
        if (Auth()->guard('web')->attempt($credential)) {
            //return view('shop.user.registersuccess');
            return redirect()->route('getlogin');
        } else {
            return redirect()->route('getlogin')
                ->withErrors(['errors', 'Đăng nhập thất bại'])
                ->withInput();
        }

    }


}
