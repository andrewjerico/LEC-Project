<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {   
        $users = User::find($request->id);

        if(Auth::user()->id != $users->id){
            abort(403);
        }

        return view('profile/index',[
            'user' => $users
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $user = User::find($request->id);

        // if($request->file('image')){
        //     $data = $request->validate([
        //         'image' => 'required|image|file'
        //     ]);

        //     if($request->oldImage){
        //         Storage::delete($request->oldImage);
        //     }
        //     $user->image = $request->file('image')->store('profile-images');
        // }
        // else{
        //     $data = $request->validate([
        //         'username' => 'required',
        //         'email' => 'required|email:dns',
        //         'DOB' => 'required',
        //         'phone' => 'required|min:5|max:13'
        //     ]);
    
        //     $date =  date($request->DOB);
    
        //     $user->username = $data['username'];
        //     $user->email = $data['email'];
        //     $user->DOB = $date;
        //     $user->phone = $data['phone'];
        // }
        // $user->save();

        return redirect()->to('/profile/'.$user->id);
    }
}
