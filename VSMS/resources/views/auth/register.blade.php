@extends('layouts.app')

@section('title', 'Register - MotorCare')

@section('content')
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-md-7 col-lg-6 col-xl-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <img src="{{ asset('MotorCare_logo.png') }}" alt="MotorCare" height="60" class="mb-3">
                        <h3 class="fw-bold text-primary">Create Account</h3>
                        <p class="text-muted">Join MotorCare for premium vehicle management</p>
                    </div>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="name" name="name" placeholder="John Doe"
                                required>
                            <label for="name">Full Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="email" name="email"
                                placeholder="name@example.com" required>
                            <label for="email">Email Address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="password" name="password"
                                placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" class="form-control rounded-3" id="password_confirmation"
                                name="password_confirmation" placeholder="Confirm Password" required>
                            <label for="password_confirmation">Confirm Password</label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill fw-bold shadow-sm">
                                Register
                            </button>
                        </div>

                        <div class="text-center mt-4 text-muted small">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-decoration-none fw-bold">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection