@extends('layouts.app')

@section('title', 'Dashboard - MotorCare')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="h4 mb-0 fw-bold text-primary">Dashboard</h2>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-cog me-1"></i> Settings
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        Welcome back, <strong>{{ Auth::user()->name }}</strong>! You're logged in.
                    </div>

                    <div class="row g-4 mt-2">
                        <!-- Quick Stats -->
                        <div class="col-md-4">
                            <div class="card border-0 rounded-3 shadow-sm h-100">
                                <div class="card-body text-center p-4">
                                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fas fa-car text-primary fs-4"></i>
                                    </div>
                                    <h5 class="card-title mb-1">My Vehicles</h5>
                                    <p class="text-muted small mb-3">Manage your vehicles</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary rounded-pill px-3">View All</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 rounded-3 shadow-sm h-100">
                                <div class="card-body text-center p-4">
                                    <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fas fa-calendar-check text-success fs-4"></i>
                                    </div>
                                    <h5 class="card-title mb-1">Upcoming Services</h5>
                                    <p class="text-muted small mb-3">View scheduled services</p>
                                    <a href="#" class="btn btn-sm btn-outline-success rounded-pill px-3">View Schedule</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 rounded-3 shadow-sm h-100">
                                <div class="card-body text-center p-4">
                                    <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fas fa-history text-warning fs-4"></i>
                                    </div>
                                    <h5 class="card-title mb-1">Service History</h5>
                                    <p class="text-muted small mb-3">Past services & records</p>
                                    <a href="#" class="btn btn-sm btn-outline-warning rounded-pill px-3">View History</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="mt-5">
                        <h5 class="fw-bold mb-3">Recent Activity</h5>
                        <div class="card border-0 rounded-3 shadow-sm">
                            <div class="card-body p-0">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item border-0 py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                <i class="fas fa-check-circle text-primary"></i>
                                            </div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 fw-medium">Successfully logged in</h6>
                                                <p class="text-muted small mb-0">Just now</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item border-0 py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                <i class="fas fa-info-circle text-info"></i>
                                            </div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 fw-medium">Welcome to MotorCare</h6>
                                                <p class="text-muted small mb-0">We're excited to have you on board!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
