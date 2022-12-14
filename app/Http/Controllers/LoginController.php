<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function check(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        
        if(Auth::attempt($credentials)){
           
            if($request->remember){
                Cookie::queue('ecookie',$request->email,120);
                Cookie::queue('pcookie',$request->password,120);
              return redirect('/');
            }else{
               
                $cookie[] =Cookie::forget('ecookie');
                $cookie[] =Cookie::forget('pcookie');
                return redirect('/')->withCookies($cookie);
            }
           
        }
        return redirect('/login')->with('failed','Incorrect Email or Password');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');

    }
}
