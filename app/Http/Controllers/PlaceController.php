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
        if(request('place')){
            $places = Place::where('name','LIKE',"%".request('place')."%")->get();
        }
        else{
            $places = Place::all();
        }
        
        $provinces = Province::all();

        // $prov = null;
        // $prov['id'] = 0;
        // $prov['province_name'] = null;
        // dd(request('province_id'));
        // $prov_id = null;
        // $prov_id = request('province_id');
        if(request('province_id')){
            // $prov = Province::where('id','=',request('province_id'))->first();
           
            $places = Place::where('province_id','=',request('province_id'))->get();
        }

        return view('places.index',[
            'places' => $places,
            'provinces' => $provinces,
            // 'prov_id' => $prov_id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $provinces = Province::all();
        return view('places.create',[
            'provinces' => $provinces
        ]);
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

        return redirect('/places');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {   
        return view('places.show',[
            'place' => $place
        ]);
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
        return view('places.edit',[
            'provinces' => $provinces,
            'place' => $place
        ]);
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
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data['image'] = $request->file('image')->store('place-image');
        }

        Place::where('id', $place->id)->update($data);

        return redirect()->to('/places/'. $place->id);
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

        return redirect('/places');
    }
}
