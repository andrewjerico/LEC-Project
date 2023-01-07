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

    public function authenticate(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        
        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            if($request->remember){
                Cookie::queue('ecookie', $request->email, 120);
                Cookie::queue('pcookie', $request->password, 120);
                return redirect()->intended('/');
            }
            else{
                $cookie[] =Cookie::forget('ecookie');
                $cookie[] =Cookie::forget('pcookie');
                return redirect()->intended('/')->withCookies($cookie);
            }

        }

        return back()->with('failed', 'Login failed, incorrect Email or Password');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
