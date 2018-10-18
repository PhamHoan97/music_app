<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mail;
use App\User;

class SendEmail extends Controller
{
    public function redirectSendEmail(){
        return view('auth.passwords.email');
    }

    public function adminSendEmail(Request $request){
        $email = Input::get('email');
        $status = null;
        $check = User::where('email', $email)->first();
        if($check){
            Mail::send('contentmail',['email'=>$email], function ($message){
               $message->to(Input::get('email'),'Roses')->subject('Reset PassWord');
            });
            $status= "Kiểm tra gmail để lấy lại mật khẩu";
            return redirect('/')->with('status', $status);

        }else{
            $status = "Tài khoản gmail này chưa được đăng kí";
            return redirect()->route('resetpassword')->with('status', $status);
        }
    }
}
