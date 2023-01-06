@extends('layouts.template')

@section('content')
    <div class="bg-dark" style="border-bottom: 5px solid white">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex flex-column align-items-center text-light">
                        <i class="bi bi-person-circle" style="font-size: 9rem"></i>
                        <div class="text-center">
                            <h4>{{ $user->username }}</h4>
                            <h5 class="text-muted">{{ $user->email }}</h5>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-8">
                    <h2 class="text-white mb-4">Update Profile</h2>
                    <form action="/profile/{{ $user->id }}" method="post" class="mb-5" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        {{-- username --}}
                        <div class="input-group has-validation d-flex mb-3">
                            <span class="input-group-text">Username</span>
                            <input type="text" id="username" name="username" placeholder="Username"
                            class="form-control @error('username') is-invalid @enderror" 
                            value="{{ $user->username }}">

                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group has-validation d-flex mb-3">
                            <span class="input-group-text">Email</span>
                            <input type="text" id="email" name="email" placeholder="Email"
                            class="form-control @error('email') is-invalid @enderror" 
                            value="{{ $user->email }}">

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
    
                        <div class="input-group has-validation d-flex mb-3">
                            <span class="input-group-text">Phone</span>
                            <input type="text" id="phone" name="phone" placeholder="Phone"
                            class="form-control @error('phone') is-invalid @enderror" 
                            value="{{ $user->phone }}">

                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        
                        <button type="submit" class="btn w-100 text-light" style="background-color: var(--blue)">Save Changes</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
   
@endsection