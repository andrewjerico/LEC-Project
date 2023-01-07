@extends('layouts.template')

@section('content')
    <div class="form-canvas">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="form-card">

            <div class="form-card-left p-5 text-light">
                <h4 class="mb-3">Welcome to HORIZONS</h4>
                <small class="text-center mb-4">
                    Don't have an account yet ? Make one by clicking the button below
                </small>
                <a href="/register" class="btn btn-lg w-50 custom-form-button cfb-left" 
                style="background-color: #eee">
                    REGISTER
                </a>
            </div>

            <div class="form-card-right p-5">

                <form action="/login" method="POST" class="d-flex flex-column align-items-center">
                @csrf

                <h1 class="mb-5 fw-bold" style="color: var(--dblue)">LOGIN</h1>

                <div class="form-floating mb-2 w-100">
                    <input type="email" class="form-control custom-form-input
                    @error('email') is-invalid @enderror" placeholder="Email Address"
                    name="email" value="{{ Cookie::get('ecookie') }}">

                    <label class="custom-floating-label">
                        <i class="bi bi-envelope-fill"></i>
                        Email Address
                    </label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror 
                </div>
                
                <div class="form-floating mb-2 w-100">
                    <input type="password" class="form-control custom-form-input
                    @error('password') is-invalid @enderror" placeholder="Password"
                    name="password" value="{{ Cookie::get('pcookie') }}">

                    <label class="custom-floating-label">
                        <i class="bi bi-key-fill"></i>
                        Password
                    </label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror 
                </div>

                <div class="form-check align-self-baseline">
                    <input class="form-check-input" type="checkbox" id="remember"
                    name="remember">
                    <label class="form-check-label" for="remember">
                        Remember Me
                    </label>
                </div>
                    
                <button class="btn btn-lg text-light mt-4 w-50 custom-form-button" 
                style="background-color: var(--blue)" type="submit">
                    LOGIN
                </button>
            
            </form>

            </div>
        </div>
    </div>
@endsection