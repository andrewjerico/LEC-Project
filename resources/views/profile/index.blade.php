@extends('layouts.template')

@section('content')
    <div class="bg-dark">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-4 mt-5">
                    <div class="mt-5">
                        <div class="d-flex justify-content-center">
                            <h2 class="text-white">My Profile</h2>
                        </div>
                        
                        <div class="d-flex flex-column justify-content-center align-items-center mt-5">
                            {{-- <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                @if ($user->image)
                                    <img src="{{ asset('storage/'.$user->image) }}" alt="" class="rounded-circle" style="height: 200px; width: 200px">
                                @else
                                    <img src="{{ asset('img/profile.png') }}" alt="" class="rounded-circle" style="height: 200px; width: 200px">
                                @endif
                            </button> --}}
                            <h4 class="mt-1 text-white">{{ $user->username }}</h4>
                            <h5 class="text-muted mt-1 text-white">{{ $user->email }}</h5>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-8">
                    <h2 class="text-white">Update Profile</h2>
                    <form action="/profile" method="post" class="mb-5" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <input type="hidden" name="oldImage" value="{{ $user->image }}">
                        {{-- Username --}}
                        <div class="mb-3">
                            <label for="username" class="form-label text-white">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username',$user->username) }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror  
                        </div>
                        
                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label text-white">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email',$user->email) }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror  
                        </div>
    
                        {{-- Phone --}}
                        <div class="mb-3">
                            <label for="phone" class="form-label text-white">Phone</label>
                            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" required value="{{ old('phone',$user->phone) }}">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror  
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-light col">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
@endsection