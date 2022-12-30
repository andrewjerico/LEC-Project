<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    //
    public function index(){
        $wishlist = Wishlist::where('user_id', auth()->user()->id)
                            ->get();

        return view('wishlist', compact('wishlist'));
    }

    public function store(Request $request){
        Wishlist::create([
            'user_id' => auth()->user()->id,
            'place_id' => $request->place_id
        ]);

        Place::find($request->place_id)->increment('popularity', 1);

        return back();
    }

    public function destroy($id){
        Wishlist::destroy($id);
        return back();
    }
}
