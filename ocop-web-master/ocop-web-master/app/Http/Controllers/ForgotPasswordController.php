<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; 
use Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;
use DB;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function getForgotPassword(){
        return view('account.forgotpassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);

        Mail::send('email.forgotpassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Lấy lại mật khẩu');
        });

        return back()->with('message', 'Chúng tôi đã gửi cho bạn một liên kết lấy lại mật khẩu vào email!');
    }

          /**
       * Write code on Method
       *
       * @return response()
       */
      public function showResetPasswordForm($token) { 
        return view('account.forgetpasswordlink', ['token' => $token]);
     }
 
     /**
      * Write code on Method
      *
      * @return response()
      */
     public function submitResetPasswordForm(Request $request)
     {
         $request->validate([
             'email' => 'required|email|exists:users',
             'password' => 'required|string|min:6|confirmed',
             'password_confirmation' => 'required'
         ]);
         $updatePassword = DB::table('password_resets')
                             ->where([
                               'email' => $request->email, 
                               'token' => $request->token
                             ])
                             ->first();                    
         if(!$updatePassword){
             return back()->withInput()->with('error', 'Token không hợp lệ!');
         }
 
         $user = User::where('email', $request->email)
                     ->update(['password' => Hash::make($request->password)]);

         DB::table('password_resets')->where(['email'=> $request->email])->delete();
 
         return redirect('/login')->with('message', 'Mật khẩu của bạn đã được thay đổi!');
     }


}
