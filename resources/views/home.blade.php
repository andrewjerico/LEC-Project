@extends('layouts.template')
@section('content')

    {{-- hero --}}
    <div id="hero" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            @foreach ($banners as $b)
            <div class="carousel-item @if($loop->first) active @endif" data-bs-interval="5000">
                <div class="position-relative">
                    <div class="my-overlay">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="fw-bold">{{ $b->name }}</h4>
                            <p>{{ $b->province->province_name }}</p>
                        </div> 
                    </div>
                    <img src="{{ asset('storage/' . $b->image) }}" class="d-block w-100" alt="...">
                </div>
            </div>
            @endforeach
        </div>
    </div>


    {{-- popular --}}
    <div class="container">
        <div class="mt-5">
            <div class="text-black mb-4 p-3 section-header">
                <h4 class="ms-2">
                    <i class="bi bi-fire"></i> 
                    Popular Tourist Attraction
                </h4>
            </div>
            <div class="row">
                @foreach ($populars as $p)
                <div class="col-md-3">
                    <div class="custom-card">
                        <div class="card__side card__side--front">

                            <img src="{{ asset('storage/' . $p->image) }}" class="card-img-top" alt="..." style="height: 75%;">
                            <div class="card-body text-dark d-flex justify-content-center align-items-center"
                            style="height: 25%;">
                                <h5 class="card-title text-truncate px-5">{{ $p->name }}</>
                            </div>

                        </div>

                        <div class="card__side card__side--back p-3 d-flex flex-column align-items-center">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>
                                            <i class="bi bi-map-fill"></i>
                                        </th>
                                        <td>
                                            {{ $p->province->province_name }}
                                        </td>
                                    </tr>
                                    <tr >
                                        <th>
                                            <i class="bi bi-geo-alt-fill"></i>
                                        </th>
                                        <td class="truncate-overflow">
                                            {{ $p->location }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-cash">
                                        </th>
                                        <td>
                                            {{ 'IDR ' . $p->price }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href="/places/{{ $p->id }}" class="custom-btn btn--white">DETAIL</a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-5">
            <div class="text-black mb-4 p-3 section-header">
                <h4 class="ms-2">
                    <i class="bi bi-airplane-fill"></i> 
                    Destinations You Might Like
                </h4>
            </div>
            <div class="row">
                @foreach ($places as $p)
                    <div class="col-md-3 mb-4">
                        <div class="custom-card">
                            <div class="card__side card__side--front">

                                <img src="{{ asset('storage/' . $p->image) }}" class="card-img-top" alt="..." style="height: 75%;">
                                <div class="card-body text-dark d-flex justify-content-center align-items-center"
                                style="height: 25%;">
                                    <h5 class="card-title text-truncate px-5">{{ $p->name }}</>
                                </div>

                            </div>

                            <div class="card__side card__side--back p-3 d-flex flex-column align-items-center">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <i class="bi bi-map-fill"></i>
                                            </th>
                                            <td>
                                                {{ $p->province->province_name }}
                                            </td>
                                        </tr>
                                        <tr >
                                            <th>
                                                <i class="bi bi-geo-alt-fill"></i>
                                            </th>
                                            <td class="truncate-overflow">
                                                {{ $p->location }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <i class="bi bi-cash">
                                            </th>
                                            <td>
                                                {{ 'IDR ' . $p->price }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <a href="/places/{{ $p->id }}" class="custom-btn btn--white">DETAIL</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex justify-content-end my-4">
            <a href="/places" class="btn btn-danger" style="width: 200px">Show More</a>  
        </div>   
    </div>

@endsection