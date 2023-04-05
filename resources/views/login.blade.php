@extends('layouts.auth')

@section('title', 'login')

@section('content')
    <div class="row min-vh-100 align-items-center">
        <div class="col-md-4 mx-auto my-5">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <h1 class="fw-bold">Login</h1>
                        <p class="text-muted">Welcome back to Wars, please enter your data to continue</p>
                    </div>
                    <form action="{{ route('do.login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" aria-describedby="emailHelp" placeholder="Enter your email">
                            @error('email')
                                <div id="emailHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Enter your password">
                            @error('password')
                                <div id="passwordHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-4">Login</button>
                        <p class="text-center mt-2">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="fw-bold text-primary text-decoration-none">Sign Up
                                now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
