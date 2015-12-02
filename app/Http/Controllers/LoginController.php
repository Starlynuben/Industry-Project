<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view("login");
    }

    public function processLogin(Request $request, Guard $auth ){

        $credential = $request->only("username","password");

        if($auth->attempt($credential)){
            //can Login
            return redirect("home");
        }else{

        	//return \Hash::make("admin");
            return redirect("login")->with("message","Try again");
        }
    }

    public function logout(Guard $auth){

        $auth->logout();
        return redirect("login");
    }
}
