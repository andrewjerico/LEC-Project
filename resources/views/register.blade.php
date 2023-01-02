@extends('layouts.template')

@section('content')
    <div class="form-canvas">

        
        <div class="form-card">

            <div class="form-card-left p-5 text-light">
                <h4 class="mb-3">Welcome to HORIZONS</h4>
                <small class="text-center mb-4">
                    To stay connected with us, please login with your account
                </small>
                <a href="/login" class="btn btn-lg w-50 custom-form-button cfb-left" 
                style="background-color: #eee">
                    LOGIN
                </a>
            </div>

            <div class="form-card-right p-5">

                <form action="/register" method="POST" class="d-flex flex-column align-items-center">
                @csrf

                <h1 class="mb-5 fw-bold" style="color: var(--dblue)">CREATE ACCOUNT</h1>
                
                <div class="form-floating mb-2 w-100 w-100">
                    <input type="text" class="form-control custom-form-input 
                    @error('username') is-invalid @enderror" placeholder="Username"
                    name="username" value="{{ old('username') }}">

                    <label class="custom-floating-label">
                        <i class="bi bi-person-fill"></i>
                        Username
                    </label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror 
                </div>

                <div class="form-floating mb-2 w-100">
                    <input type="text" class="form-control custom-form-input 
                    @error('phone') is-invalid @enderror"  placeholder="Phone"
                    name="phone" value="{{ old('phone') }}">
                    
                    <label class="custom-floating-label">
                        <i class="bi bi-telephone-fill"></i>
                        Phone
                    </label>
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror  
                </div>

                <div class="form-floating mb-2 w-100">
                    <input type="email" class="form-control custom-form-input
                    @error('email') is-invalid @enderror" placeholder="Email Address"
                    name="email" value="{{ old('email') }}">

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
                    name="password">

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
                    
                <div class="form-floating mb-2 w-100">
                    <input type="password" class="form-control custom-form-input
                    @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password"
                    name="password_confirmation">

                    <label class="custom-floating-label">
                        <i class="bi bi-key-fill"></i>
                        Confirm Password
                    </label>
                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror 
                </div>
                    
                <button class="btn btn-lg text-light mt-4 w-50 custom-form-button" 
                style="background-color: var(--blue)" type="submit">
                    REGISTER
                </button>
            
            </form>

            </div>
        </div>
    </div>
@endsection