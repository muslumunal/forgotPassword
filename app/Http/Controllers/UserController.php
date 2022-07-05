<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showForgotPassword(){
        return view('user.forgot_password');
    }
    public function forgotPassword(Request $request){

        $user = User::where('email',$request['email']);

        if($user){
            $forgot_unique = md5($request->email).time();
            $user->update(['forgot_unique' => $forgot_unique]);
            return("Başarılı");
        }
        else{
            return ("Başarısız");
        }
    }
}
