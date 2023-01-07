@extends('layouts.template')

@section('content')
    <div class="container p-5">
        <div class="col">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('storage/'. $place->image) }}" class="card-img-top rounded" alt="..." 
                    style="width: 900px; height: 500px;">
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="d-flex align-items-center section-header mb-3">
                    <h1 class="ms-5">{{ $place->name }}</h1>
                    <div class="ms-5">
                        @can('admin')
                        <div class="d-flex align-items-center">
                            <a href="/places/{{ $place->id }}/edit" style="color: black;">
                                <i class="bi bi-pencil-square" style="font-size: 2rem"></i>
                            </a>
                            <form action="/places/{{ $place->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-link" onclick="return confirm('Are you sure ?')" 
                                style="color: red">
                                    <i class="bi bi-trash" style="font-size: 2rem"></i>
                                </button>
                            </form>
                        </div>
                        @endcan
                        
                        @can('user')
                        @if ( App\Models\Wishlist::where('user_id', Auth::user()->id)
                                                ->where('place_id', $place->id)->first())

                            <button type="button" class="btn btn-primary">
                                Added to Wishlist
                                <i class="bi bi-check"></i>
                            </button>

                        @else
                            <form action="/wishlist" method="post">
                                @csrf
                                <input type="hidden" name="place_id" value="{{ $place->id }}">
                                <input type="hidden" name="place_name" value="{{ $place->name }}">
                                <button type="submit" class="btn btn-primary">
                                    Add to Wishlist
                                    <i class="bi bi-plus"></i>
                                </button>
                            </form>
                        @endif
                        @endcan
                    </div>
                </div>
                <table class="table table-borderless place-detail">
                    <tbody>
                        <tr>
                            <th>
                                {{-- <i class="bi bi-geo-alt-fill"></i> --}}
                                Location
                            </th>
                            <td>
                                {{ $place->location }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{-- <i class="bi bi-journal-text"></i> --}}
                                Description
                            </th>
                            <td>
                                {{ $place->description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{-- <i class="bi bi-cash"></i> --}}
                                Cost Est.
                            </th>
                            <td>
                                {{ '~ IDR ' . $place->price }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection