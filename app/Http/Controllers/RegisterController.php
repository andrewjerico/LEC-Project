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

    public function store(Request $request){

        $data = $request->validate([
            'username'=>['required', 'min:5', 'unique:users,username'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6', 'alpha_num'],
            'password_confirmation' => ['required', 'same:password'],
            'phone' => ['required', 'min:10', 'max:13']
        ]);

        $data['password'] = Hash::make($data['password']);
        unset($data['password_confirmation']);

        User::create($data);
        
        return redirect('/login')->with('success', 'Registration success! Please login');
    }
}
