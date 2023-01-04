<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $places = Place::with('province');
        $provinces = Province::all();

        if(request('search_place')){
            $places = $places->where('name','LIKE', '%'. request('search_place') .'%');
        }
        
        if(request('filter_province') && request('filter_province') != 'none'){
            $places = $places->where('province_id', request('filter_province'));
        }

        $places = $places->paginate(4);

        return view('places.index', compact('provinces', 'places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $provinces = Province::all();
        return view('places.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:5',
            'description' => 'required|min:10',
            'location' => 'required|min:5',
            'province_id' => 'required',
            'price' => 'required|integer|min:5000',
            'image' => 'required|image|file|max:2024'
        ]);

        if($request->file('image')){
            $data['image'] = $request->file('image')->store('place-image');
        }

        Place::create($data);

        return redirect('/places')->with('message', 'New tourist destination has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {   
        return view('places.show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        $provinces = Province::all();
        return view('places.edit', compact('place', 'provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $data = $request->validate([
            'name' => 'required|min:5',
            'description' => 'required|min:10',
            'location' => 'required|min:5',
            'province_id' => 'required',
            'price' => 'required|integer|min:5000',
            'image' => 'image|file|max:2024'
        ]);


        if($request->file('image')){
            if($request->old_image){
                Storage::delete($request->old_image);
            }
            $data['image'] = $request->file('image')->store('place-image');
        }

        Place::where('id', $place->id)->update($data);

        return redirect('/places/'. $place->id)->with('message', 'Information has been updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {

        if($place->image){
            Storage::delete($place->image);
        }

        Place::destroy($place->id);

        return redirect('/places')->with('message', $place->name . ' has been removed from database!');
    }
}
