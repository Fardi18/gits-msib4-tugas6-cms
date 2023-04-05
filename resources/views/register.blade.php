@extends('layouts.auth')

@section('title', 'register')

@section('content')
    <div class="row min-vh-100 align-items-center">
        <div class="col-md-4 mx-auto my-5">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <h1 class="fw-bold">Sign Up</h1>
                        <p class="text-muted">Welcome to Wars!</p>
                    </div>
                    <form action="{{ route('do.register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" aria-describedby="nameHelp" placeholder="Enter your Name">
                            @error('name')
                                <div id="nameHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" aria-describedby="emailHelp" placeholder="Enter your Email">
                            @error('email')
                                <div id="emailHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Enter your Password">
                            @error('password')
                                <div id="passwordHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Password Confirmation</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" id="password_confirmation" placeholder="Enter your Password">
                            @error('password_confirmation')
                                <div id="passwordConfirmationHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-4">Register</button>
                        <p class="text-center mt-2">
                            Already have an account?
                            <a href="{{ route('login') }}" class="fw-bold text-primary text-decoration-none">Please
                                Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
