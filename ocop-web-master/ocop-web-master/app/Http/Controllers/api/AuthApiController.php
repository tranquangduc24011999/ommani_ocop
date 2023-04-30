<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Exception;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\DB;
use Hash;

use App\Models\District;
use App\Models\Province;
use App\Models\UserAddress;
use App\Models\UserRole;
use App\Models\Ward;
use App\Models\User;
use App\Models\PasswordReset;
use App\Models\Platform;
use App\Notifications\UserResetPasswordNotification;
use Illuminate\Support\Str;

class AuthApiController extends Controller
{
    protected $authController;

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct(AuthController $authController) {
        $this->authController = $authController;
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validate fails',
                'status' => 'fails',
                'data' => $validator->errors()
            ], 422);
        }
        if (! $token = auth()->guard('api')->attempt($validator->validated())) {
            return response()->json([
                'message' => 'Unauthorized',
                'status' => 'fails',
                'errors' => ["Unauthorized"]
            ], 401);
        }
        $user = auth('api')->user();
        if($user->status == 1){
            JWTAuth::setToken($token);
            return response()->json($this->createNewToken($token), 200);
        }else{
            $error = (object)[
                "status" => 'error',
                "message" => 'Tài khoản chưa được xét duyệt hoặc không tồn tại'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }

    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
            'level' => 'required',
            'departments' => 'required',
            'work_unit_id' => 'required',
            'type' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->errors(),
                'status' => 'fails',
                'data' => null
            ], 400);
        }
        return $this->registerAccount($request, true);
    }

    public function registerAccount(Request $request)
    {
        $body = $request->all();
        // check email
        $userEmail = User::where('email', $body['email'])->count();
        $userPhone = User::where('phone', $body['phone'])->count();
        if ($userEmail > 0 ) {
            $error = (object)[
                "status" => 'error',
                "message" => 'Email đã được sử dụng'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
        if ($userPhone > 0 ) {
           
            $error = (object)[
                "status" => 'error',
                "message" => 'Số điện thoại đã được sử dụng'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        }
        // save user
        $user = new User();
        $user->name = $body['fullname'];
        $user->email = $body['email'];
        $user->phone = $body['phone'];
        $user->level = $body['level'] != null ? $body['level'] : 0;
        $user->departments = $request->departments;
        $user->work_unit = $request->work_unit;
        $user->work_unit_id = $request->work_unit_id;
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
            return response()->json($user, 201);
        } catch (\Exception $e) {
            DB::rollback();
            $error = (object)[
                "status" => 'error',
                "message" => 'Đăng ký thất bại'
            ];
            return response()->json([
                'error' => $error,
            ], 400);
        } 
    }


    private function saveUserRoles($userId, $role)
    {
        $roleId = null;
        switch ($role) {
            case 'MEMBER':
                $roleId = 1;
                break;
            case 'MANAGER':
                $roleId = 2;
                break;
            case 'HELPTEAM':
                $roleId = 3;
                break;
            case 'EXAMINER':
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


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        try {
            $token = JWTAuth::getToken();
            JWTAuth::setToken($token)->invalidate();

            return response()->json(['message' => 'User successfully signed out']);
        } catch (Exception $exception) {
            return response()->json([
                'message' => 'Token not exists',
                'status' => 'fails',
                'data' => null,
            ], 400);
        }

    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        $token = JWTAuth::getToken();
        if(!$token){
            return response()->json([
                'message' => 'Token not provided',
                'status' => 'fails',
                'data' => null,
            ], 400);
        }
        try{
            $token = JWTAuth::refresh($token);
        }catch(TokenInvalidException $e){
            return response()->json([
                'message' => 'The token is invalid',
                'status' => 'fails',
                'data' => null,
            ], 401);
        }
        return response()->json(['token'=>$token]);
    }

    public function refresh2(Request $request) {
        
        $data = $request->json()->all();
        $token = $data["token"];
        if(!$token){
            return response()->json([
                'message' => 'Token not provided',
                'status' => 'fails',
                'data' => null,
            ], 400);
        }
        try{
            JWTAuth::setToken($token);
            $token = JWTAuth::refresh($token);
        }catch(TokenInvalidException $e){
            return response()->json([
                'message' => 'The token is invalid',
                'status' => 'fails',
                'data' => null,
            ], 401);
        }
        return response()->json(['token'=>$token]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile() {
        $user = auth()->user();
        $user->address;
        $user->roles;
        return response()->json([
            'user' => $user
        ]);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' =>  auth('api')->factory()->getTTL(),
            'user' => JWTAuth::authenticate($token)
        ]);
    }

    public function changePassWord(Request $request) {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string|min:6',
            'new_password' => 'required|string|confirmed|min:6',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $userId = auth()->user()->id;

        $user = User::where('id', $userId)->update(
            ['password' => bcrypt($request->new_password)]
        );

        return response()->json([
            'message' => 'User successfully changed password',
            'user' => $user,
        ], 201);
    }

    public function forgotPassword(Request $request){
        $rules = array(
                       'email' => 'required|email'
                       );
        $messages = array(
                          'email.required' => '1008',
                          'email.email' => '1009'
                          );
        $validator = Validator::make( $request->all(), $rules, $messages );
        
        if ($validator->fails()) {


            $error = (object)[
            "status" => 'error',
            "message" => 'Địa chỉ email không đúng'
            ];
            return response()->json([
                'error' => $error,
            ], 400);                      
        }
        $exists = User::where('email', $request->email)->get()->first();
        if (is_null($exists)) {
            $error = (object) [
            "status" => 'error',
            'message' =>'Địa chỉ email không tồn tại'
            ];
            return response()->json([
                'error' => $error,
            ], 400);  
        }else{
            $passwordReset = PasswordReset::updateOrCreate(
                                                           ['email' => $exists->email],
                                                           [
                                                           'email' => $exists->email,
                                                           'token' => Str::random(60)
                                                           ]
                                                           );
            if ($passwordReset) {
                $exists->notify(new UserResetPasswordNotification($passwordReset->token));
            }
            
            return response()->json([
                                    'status' => 'success',
                                    'message' => 'Chúng tôi đã gửi một link lấy lại mật khẩu tới email của bạn.'
                                    ]);
        }
        
        
    }

    public function deviceToken(Request $request){

        $platforms = Platform::where([
            'user_id' => $request->user_id,
            'device_id' => $request->device_id,
            'device_token' => $request->device_token
        ])->get();

        if(count($platforms) == 0){
            $platform = new Platform;
            $platform->user_id = $request->user_id;
            $platform->device_id = $request->device_id;
            $platform->device_token = $request->device_token;
            $platform->platform_type = $request->platform_type;
            
            $platform->save();
            return response()->json([
                'status' => 'success'
                ]);
        }else{
            return response()->json([
                'status' => 'success',
                'message' => 'Token đã tồn tại'
                ]);
        }


    }

}
