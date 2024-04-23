<?php
#app\Http\Controllers\Auth\ForgotPasswordController.php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Mail;
use Hash;
use Illuminate\Support\Str;


class ForgotPasswordController extends Controller
{
    /*
        |--------------------------------------------------------------------------
        | Password Reset Controller
        |--------------------------------------------------------------------------
        |
        | This controller is responsible for handling password reset emails and
        | includes a trait which assists in sending these notifications from
        | your application to your users. Feel free to explore this trait.
        |
        */
    
        use SendsPasswordResetEmails;
    
        public function ForgetPassword() {
            return view('administrator.auth.forget-password');
        }
    
        public function ForgetPasswordStore(Request $request) {
            $request->validate([
                'email' => 'required|email|exists:users'
            ]);
    
            $token = Str::random(64);
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
    
            Mail::send('administrator.auth.forget-password-email', ['token' => $token], function($message) use($request){
                $message->to($request->email);
                $message->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
                $message->subject('Reset Password');
            });
    
            return back()->with('message', 'We have emailed your password reset link!');
        }
    
        public function ResetPassword($token) {
            $update = DB::table('password_resets')->where(['token' => $token])->first();
            return view('administrator.auth.forget-password-link', ['token' => $token, 'user'=> $update]);
        }
        
        public function ResetPasswordStore(Request $request) {
            $request->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation' => 'required'
            ]);
    
            $update = DB::table('password_resets')->where(['email' => $request->email, 'token' => $request->token])->first();
    
            if(!$update){
                return back()->withInput()->with('error', 'Invalid token!');
            }
    
            $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
    
            // Delete users record
            DB::table('password_resets')->where(['email'=> $request->email])->delete();
    
            return redirect('/admin/login')->with('message', 'Your password has been successfully changed!');
        }
    
}
