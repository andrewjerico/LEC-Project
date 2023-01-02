<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit(User $user)
    {   
        return view('profile.edit', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   

        $data = $request->validate([
            'username' => 'required',
            'email' => 'required|email:dns',
            'phone' => 'required|min:5|max:13'
        ]);

        User::where('id', $id)->update($data);

        return back();
    }
}
