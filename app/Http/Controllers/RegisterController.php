<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register');
    }
    public function check(Request $request){
        $data = $request->validate([
            'username'=>'required|min:5|unique:users,username',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|confirmed|alpha_num',
            'password_confirmation'=>'required',
            'phone' => 'required|min:5|max:13'
        ]);

        User::create([
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'isAdmin' => false,
            'phone' => $data['phone']
        ]);
        
        return redirect('/login');
    }
}
