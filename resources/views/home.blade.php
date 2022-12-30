@extends('layouts.template')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner" style="width:100%;height:600px;"> 
            @foreach ($banners as $b)
                <div class="carousel-item active" style="width:100%;height:600px;">
                    <img src="{{ asset('storage/' . $b->image) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $b->name }}</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="pt-3">
            <div class="text-black fs-4">
                <i class="bi bi-fire"></i> Popular
            </div>
            <div class="row pt-2">
                @foreach ($populars as $p)
                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('storage/' . $p->image) }}" class="card-img-top" alt="..." style="height: 200px">
                        <div class="card-body">
                            <h5 class="card-title" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">
                                {{ $p->name }}
                            </h5>
                            <p class="card-text" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">
                                <i class="bi bi-geo-alt-fill"></i> 
                                {{ $p->province->province_name }}
                            </p>
                            <p class="card-text" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">
                                {{ $p->description }}
                            </p>
                            <a href="/places/{{ $p->id }}" class="btn btn-dark">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="pt-3">
            <div class="text-black fs-4 mb-2">
                <i class="bi bi-airplane"></i> Place
            </div>
            <div class="row">
                @foreach ($places as $p)
                    <div class="col-md-3 mb-3">
                        <div class="card" style="width: 100%;">
                            <img src="{{ asset('storage/'. $p->image) }}" class="card-img-top" alt="..." style="height: 200px">
                            <div class="card-body">
                                <h5 class="card-title" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">
                                    {{ $p->name }}
                                </h5>
                                <p class="card-text" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">
                                    <i class="bi bi-geo-alt-fill"></i> 
                                    {{ $p->province->province_name }}
                                </p>
                                <p class="card-text" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">
                                    {{ $p->description }}
                                </p>
                                <a href="/places/{{ $p->id }}" class="btn btn-dark">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-end mb-3">
            <a href="/place" class="btn btn-danger align-right" style="width: 200px">Show More</a>  
        </div>   
    </div>
@endsection