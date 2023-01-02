@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <div class="col">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('storage/'.$place->image) }}" class="card-img-top" alt="..." style="width: 900px; height: 500px;">
                </div>
            </div>
            <div>
                @can('admin')
                    <a href="/places/{{ $place->id }}/edit" style="color: black;"><i class="bi bi-pencil-square"></i></a>
                    <form action="/places/{{ $place->id }}" method="post" class="d-inline mt-1">
                        @method('delete')
                        @csrf
                        <button class="btn btn-link" onclick="return confirm('Are you sure?')" style="color: red"><i class="bi bi-trash"></i></button>
                    </form>
                @endcan
            </div>
            <div class="row mt-2 mb-3">
                <h1>{{ $place->name }}</h1>
                <div class="d-flex mb-3">
                    <i class="bi bi-geo-alt-fill"></i> {{ $place->location}}</p>
                </div>               
                <p>{{ $place->description }}</p>
                <h4>Tiket Price : Rp.{{ $place->price }}</h4>
            </div>
        </div>
    </div>
@endsection