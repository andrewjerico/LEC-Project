<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    //
    public function policy(){
        return view('policy/policyPrivacy');
    }

    public function terms(){
        return view('policy/terms');
    }
}
