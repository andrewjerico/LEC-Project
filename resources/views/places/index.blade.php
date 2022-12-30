@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between m-2 mb-2">
            <div style="color: #475B74">
                <h1>Place</h1>
            </div>
            <div class="mt-2 d-flex">
                <form action="/places">
                    @csrf
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search" name="place" value="{{ request('place') }}">
                    </div>
                </form>
                {{-- @can('admin') --}}
                    <div class="d-flex justify-content-end mb-1">
                        <a href="/places/create" class="btn btn-dark text-decoration-none" style="height: 37px">Add&nbsp;Place</a>
                    </div>
                {{-- @endcan --}}
            </div>
        </div>
        <div class="d-flex mb-2">
            <h5 class="mt-1">Sort By Location : </h5>
            <form action="/places" class="">
                @csrf
                <div class="d-flex">
                    <select class="form-control" id="province_id" name="province_id" value="{{ old('province_id') }}">
                        <option value="" disabled selected hidden>--Open this select menu--</option>
                        @foreach ($provinces as $province)
                            {{-- @if ($province->id = old('province_id'))
                                <option value="{{ $province->id }}" selected>{{ $province->province_name }}</option>
                            @else
                                <option value="{{ $province->id }}">{{ $province->province_name }}</option>
                            @endif --}}
                            <option value="{{ $province->id }}">{{ $province->province_name }}</option>
                        @endforeach
                    </select>
                    <div class="">
                        <button type="submit" class="btn btn-dark col">Search</button>
                    </div>
                </div>
                
            </form>
        </div>
        <div class="row">
            @foreach ($places as $place)
                <div class="col-md-3 mb-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('storage/'.$place->image) }}" class="card-img-top" alt="..." style="height: 200px">
                        <div class="card-body">
                          <h5 class="card-title" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">{{ $place->name }}</h5>
                          <p class="card-text" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;"><i class="bi bi-geo-alt-fill"></i> {{ $place->province->province_name }}</p>
                          <p class="card-text" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">{{ $place->description }}</p>
                          <a href="/places/{{ $place->id }}" class="btn btn-dark">Detail</a>
                          @auth
                            @if (App\Models\Wishlist::where('user_id', Auth::user()->id)->where('place_id', $place->id)->first())
                                <p>added to wishlist</p>
                            @else
                                <form action="/wishlist" method="post">
                                    @csrf
                                    <input type="hidden" name="place_id" value="{{ $place->id }}">
                                    <input type="hidden" name="place_name" value="{{ $place->name }}">
                                    <button type="submit" class="btn btn-primary">+</button>
                                </form>
                            @endif
                            
                          @endauth
                          
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection