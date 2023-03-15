<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthContoller extends Controller
{
    function login(){
        return view("auth.login");
    }

    function post_login(){
        $validation=request()->validate([
            "email"=>"required",
            "password"=>"required"
        ]);
        if($validation){
            $auth=Auth::attempt(["email"=>$validation['email'],'password'=>$validation['password']]);
            if($auth){
                return redirect()->route('index');
            }else{                
                return back()->with('error','Login Failed!');
            }
        }else{
            return back()->withErrors($validation);
        }
    }

    function register(){
        return view("auth.register");
    }

    function post_register(){
        $validation=request()->validate([
            "username"=>"required",
            "email"=>"required",
            "password"=>"required||min:8",
        ]);
        if($validation){
            $user=new User();
            $password=$validation['password'];
            $user->username=$validation['username'];
            $user->email=$validation['email'];
            $user->password=Hash::make($password);
            $user->save();
            if(Auth::attempt(["email"=>$validation['email'],'password'=>$validation['password']])){
                return redirect()->route('index');
            }
        }else{
            return back()->withErrors($validation,'message');
        }
    }
    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
