<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function showForgotPassword(){
        return view('user.forgot_password');
    }

    public function forgotPassword(Request $request){

        $mail = $request['email'];
        $user = User::where('email',$mail)->first();
        if($user != null){
            $forgot_unique = md5($mail).time();
            $user->update(['forgot_unique' => $forgot_unique]);
            Mail::send('emails.forgotPassword',['forgot_unique' => $forgot_unique], function ($message) use($mail) {
                $message->to($mail);
                $message->subject('Şifre Sıfırlama Linki');
            });
            return ("Başarılı");
        }
        else{
            return ("Başarısız");
        }
    }

    public function showResetPassword(Request $request){

        return view('user.reset_password',['forgot_unique' => $request->input('forgot_unique')]);
    }

    public function resetPassword(Request $request,$forgot_unique){

        $user = User::where('forgot_unique',$forgot_unique)->first();
        if($user != null){
            $user->update([
                'password'=>md5($request['password']),
                'forgot_unique' =>''
                ]);
            return("Başarılı");
        }else{
            return ("Başarısız");
        }

    }
}
