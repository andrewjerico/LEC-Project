@extends('layouts.template')
@section('content')

<div class="container mb-3 p-5">
    <div class="section-header d-flex align-items-center mb-4">
        <h1 style="color: var(--lblue)" class="ms-5">Create Place</h1>
    </div>
    <div class="col">
        <form action="/places" method="post" enctype="multipart/form-data">
            @csrf
            
            {{-- Nama --}}
            <div class="mb-3">
                <label for="name" class="form-label fs-4">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                id="name" name="name"
                value="{{ old('name') }}">
                
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Province --}}
            <div class="mb-3">
                <label for="province_id" class="form-label fs-4">Province</label>
                <select class="form-control @error('province_id') is-invalid @enderror" 
                id="province_id" name="province_id">
                    <option value="">-- Open this select menu --</option>

                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">
                            {{ $province->province_name }}
                        </option>
                    @endforeach

                </select>
                
                @error('province_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Location --}}
            <div class="mb-3">
                <label for="location" class="form-label fs-4">Location</label>
                <input type="text" class="form-control @error('location') is-invalid @enderror" 
                id="location" name="location" 
                value="{{ old('location') }}">
                
                @error('location')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Description --}}
            <div class="mb-3">
                <label for="description" class="form-label fs-4">Description</label>
                <textarea rows="5" cols="173" class="form-control @error('description') is-invalid @enderror" 
                id="description" name="description">{{ old('description') }}</textarea>

                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Ticket Price --}}
            <div class="mb-3">
                <label for="price" class="form-label fs-4">Ticket Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" 
                value="{{ old('price') }}">
                
                @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Image --}}
            <div class="mb-5">
                <label for="image" class="form-label fs-4">Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" 
                id="image" name="image">

                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror  
            </div>

            <button type="submit" class="btn btn-dark w-100">Create</button>

        </form>
    </div>
</div>

@endsection