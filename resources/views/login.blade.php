@extends('layouts.template')

@section('content')
    <div class="bg-dark opacity-75 d-flex flex-column justify-content-center align-items-center" style="height:500px">   
        <form action="/login-check" method="POST" class="d-flex flex-column align-items-center">
            @csrf
            
            <h1 class="h3 mb-5 fw-normal text-white">Hello, Welcome back to HORIZONS</h1>

            @if($message = Session::get('failed'))
                <div class="alert alert-danger">{{ $message }}</div>   
            @endif

            <div class="form-floating mb-2">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" style="width: 500px" value="{{ Cookie::get('ecookie') !== null ? Cookie::get('ecookie'): "" }}" required value="{{ old('email') }}">
            <label for="floatingInput">Email address</label>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror 
            </div>

            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" style="width: 500px" value="{{ Cookie::get('pcookie') !== null ? Cookie::get('pcookie'): "" }}" required>  
            <label for="floatingPassword">Password</label>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror 
            </div>
        
            <div class="checkbox mb-3">
            <label >
                <input type="checkbox" value="remember" name="remember" id="cek" checked={{ Cookie::get('ecookie') !== null }}> 
                <label for="cek" class="text-white p-1">Remember me</label> 
            </label>
            </div>
            <button class="btn btn-lg btn-light" type="submit" style="width: 400px">Log in</button>
        </form>
        <div class="text-light pt-3">
            Dont have account yet? <a href="/register" class="text-decoration-none" style="color: #7D8DA6">Register Now !</a>
        </div>
    </div>
@endsection