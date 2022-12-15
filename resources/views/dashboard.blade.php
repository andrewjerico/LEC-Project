@extends('layouts.template')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="width:100%;height:600px;"> 
            <div class="carousel-item active" style="width:100%;height:600px;">
                <img src="{{ asset('img/test.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" style="width:100%;height:600px;">
                <img src="{{ asset('img/test.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" style="width:100%;height:600px;">
                <img src="{{ asset('img/test.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
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
                @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3">                  
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('img/bromo.jpg') }}" class="card-img-top" alt="..." style="height: 200px">
                        <div class="card-body">
                          <h5 class="card-title" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">Card title</h5>
                          <p class="card-text" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;"><i class="bi bi-geo-alt-fill"></i> Dimana mana</p>
                          <p class="card-text" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="/" class="btn btn-dark">Detail</a>
                        </div>
                    </div>                    
                </div>
                @endfor
            </div>
        </div>
        <div class="pt-3">
            <div class="text-black fs-4">
                <i class="bi bi-airplane"></i> Place
            </div>
        </div>
    </div>
@endsection