<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mail;

class SendEmail extends Controller
{
    public function adminSendEmail(Request $request){
        $email = Input::get('email');
        $status = "1";
        if($email){
            Mail::send('contentmail',['email'=>$email], function ($message){
               $message->to(Input::get('email'),'Roses')->subject('Reset PassWord');
            });
            $status= "Send to mail";
        }

        return view('auth/passwords/email')->with('status', $status);
    }
}
