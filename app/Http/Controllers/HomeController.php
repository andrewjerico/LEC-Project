<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $temp = Place::with('province');

        $banners = $temp->get()->random(3);
        $populars = $temp->orderBy('popularity', 'desc')->take(4)->get();
        $places = $temp->take(8)->get();

        return view('home', compact('banners', 'populars', 'places'));
    }
}
