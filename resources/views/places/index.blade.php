@extends('layouts.template')

@section('content')
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="section-header p-3">
                <h4 class="ms-4">Tourist Destinations</h4>
            </div>
            <div class="w-25">
                <form action="/places">
                    @csrf
                    <div class="input-group" class="w-100">
                        <input type="search" class="form-control" placeholder="Search" name="search_place" 
                        value="{{ request('search_place') }}">
                    </div>
                </form>
                @can('admin')
                    <div class="d-flex justify-content-end mb-1">
                        <a href="/places/create" class="btn btn-dark text-decoration-none" style="height: 37px">
                            Add Place
                        </a>
                    </div>
                @endcan
            </div>
        </div>
        <div class="d-flex mb-4">
            <h5 class="mt-1">
                <i class="bi bi-funnel-fill"></i>
                Sort By Location : 
            </h5>
            <form action="/places" id="filter_province" class="ms-3">
                @csrf
                <select class="form-control" name="filter_province" onchange="submit()">
                    <option value="none" selected>
                        none
                    </option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}" @if (request('filter_province') == $province->id) selected @endif>
                            {{ $province->province_name }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>
        @if ($places->count() != 0)
            <div class="row">
                @foreach ($places as $place)
                    <div class="col-md-3 mb-3">
                        <div class="card" style="width: 100%;">
                            <img src="{{ asset('storage/'.$place->image) }}" class="card-img-top" alt="..." style="height: 200px">
                            <div class="card-body">
                                <h5 class="card-title" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">
                                    {{ $place->name }}
                                </h5>
                                <p class="card-text" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">
                                    <i class="bi bi-geo-alt-fill"></i> 
                                    {{ $place->province->province_name }}
                                </p>
                                <p class="card-text" style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">
                                    {{ $place->description }}
                                </p>
                                <div class="d-flex justify-content-between">
                                    <a href="/places/{{ $place->id }}" class="btn btn-dark">Detail</a>
                                    @can('user')
                                    @if ( App\Models\Wishlist::where('user_id', Auth::user()->id)
                                                            ->where('place_id', $place->id)->first())

                                        <button type="button" class="btn btn-primary">
                                            <i class="bi bi-check"></i>
                                        </button>

                                    @else
                                        <form action="/wishlist" method="post">
                                            @csrf
                                            <input type="hidden" name="place_id" value="{{ $place->id }}">
                                            <input type="hidden" name="place_name" value="{{ $place->name }}">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-plus"></i>
                                            </button>
                                        </form>
                                    @endif
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="pagination-links mt-5 d-flex justify-content-between">
                <p class="text-muted">
                    Showing {{ $places->firstItem() }} to {{ $places->lastItem() }}
                    of total {{$places->total()}} entries
                </p>
                {{ $places->withQueryString()->links() }}
            </div>
        @else
            <div class="no-result text-muted">
                <i class="bi bi-emoji-frown" style="font-size: 10rem"></i>
                <h4>No Results Found</h4>
            </div>
        @endif
    </div>

    <script>
        const submit = function(){
            const filter_province = document.getElementById('filter_province');
            filter_province.submit();
        }
    </script>
@endsection