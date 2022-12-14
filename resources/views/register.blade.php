@extends('layouts.template')

@section('content')
    <div class="bg-dark opacity-75 d-flex flex-column justify-content-center align-items-center" style="height:600px">
        <form action="/register-check" method="POST" class="d-flex flex-column align-items-center">
            @csrf
            <h1 class="h3 mb-5 fw-normal text-white">Hello, Welcome to HORIZONS</h1>
            
            <div class="form-floating mb-2">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Username" name="username" style="width: 500px" required value="{{ old('username') }}">
                <label for="floatingInput">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror 
            </div>

            {{-- Phone --}}
            <div class="form-floating mb-2">
                <input type="number" class="form-control @error('phone') is-invalid @enderror" id="floatingInput" placeholder="Phone" name="phone" style="width: 500px" required value="{{ old('phone') }}">
                <label for="floatingInput">Phone</label>
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror  
            </div>

            <div class="form-floating mb-2">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" style="width: 500px" required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror 
            </div>
            
            <div class="form-floating mb-2">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" style="width: 500px" required>
                <label for="floatingPassword">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror 
            </div>
                
            <div class="form-floating mb-2">
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password_confirmation" style="width: 500px" required>
                <label for="floatingPassword">Confirm Password</label>
                @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror 
            </div>
                
            <button class="btn btn-lg btn-light mt-4" type="submit" style="width: 400px">Register</button>
        
        </form>
        <div class="text-light pt-3">
            Already have an account? <a href="/login" class="text-decoration-none" style="color: #7D8DA6">Login Now !</a>
        </div>
    </div>
@endsection