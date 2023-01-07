<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    //
    public function index(){
        $wishlist = Wishlist::with('place')
                        ->where('user_id', auth()->user()->id)
                        ->paginate(4);

        return view('wishlist', compact('wishlist'));
    }

    public function store(Request $request){
        Wishlist::create([
            'user_id' => auth()->user()->id,
            'place_id' => $request->place_id
        ]);

        Place::find($request->place_id)->increment('popularity', 1);

        return back()->with('message', $request->place_name . ' has been added to wishlist!');
    }

    public function destroy(Request $request, $id){
        Wishlist::destroy($id);
        return redirect('/wishlist')->with('message', $request->place_name . ' has been removed from wishlist!');
    }
}
