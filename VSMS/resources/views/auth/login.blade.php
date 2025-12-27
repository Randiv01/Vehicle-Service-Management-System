@extends('layouts.app')

@section('title', 'Sign In - MotorCare')

@section('content')
    <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="col-md-6 col-lg-5 col-xl-4">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <img src="{{ asset('MotorCare_logo.png') }}" alt="MotorCare" height="60" class="mb-3">
                        <h3 class="fw-bold text-primary">Welcome Back</h3>
                        <p class="text-muted">Sign in to manage your vehicle services</p>
                    </div>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="email" name="email"
                                placeholder="name@example.com" required autofocus>
                            <label for="email">Email Address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="password" name="password"
                                placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label text-muted" for="remember">
                                    Remember me
                                </label>
                            </div>
                            <a href="#" class="text-decoration-none small fw-semibold">Forgot Password?</a>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill fw-bold shadow-sm">
                                Sign In
                            </button>
                        </div>

                        <div class="text-center mt-4 text-muted small">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="text-decoration-none fw-bold">Create Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection