@extends('layouts.app')

@section('title', 'Our Services - MotorCare')

@section('full_width_content')
    <div class="bg-primary text-white py-5 mb-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Our Services</h1>
            <p class="lead mb-0">Professional Automotive Care for Your Vehicle</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
        <!-- Oil Change Service -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-4 bg-light d-flex align-items-center justify-content-center p-3">
                        <i class="fas fa-oil-can fa-4x text-primary"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="h4 card-title text-primary">Oil Change Service</h3>
                            <p class="card-text text-muted">
                                Keep your engine running smoothly with our premium oil change service. We use only high-quality synthetic oils and genuine filters.
                            </p>
                            <a href="{{ url('/contact') }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Brake Service -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-4 bg-light d-flex align-items-center justify-content-center p-3">
                        <i class="fas fa-brake-system fa-4x text-primary"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="h4 card-title text-primary">Brake Service</h3>
                            <p class="card-text text-muted">
                                Ensure your safety with our comprehensive brake inspection and repair services. We use only top-quality brake pads and components.
                            </p>
                            <a href="{{ url('/contact') }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Engine Diagnostics -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-4 bg-light d-flex align-items-center justify-content-center p-3">
                        <i class="fas fa-engine-warning fa-4x text-primary"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="h4 card-title text-primary">Engine Diagnostics</h3>
                            <p class="card-text text-muted">
                                Advanced diagnostics to identify and resolve engine issues. Our state-of-the-art equipment ensures accurate problem detection.
                            </p>
                            <a href="{{ url('/contact') }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tire Service -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-4 bg-light d-flex align-items-center justify-content-center p-3">
                        <i class="fas fa-tire fa-4x text-primary"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="h4 card-title text-primary">Tire Service</h3>
                            <p class="card-text text-muted">
                                Complete tire services including rotation, balancing, alignment, and replacement. We carry all major tire brands.
                            </p>
                            <a href="{{ url('/contact') }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center mb-4">
            <h2 class="fw-bold text-primary">Why Choose Our Services?</h2>
            <p class="lead text-muted">Experience the MotorCare difference</p>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px; margin: 0 auto;">
                        <i class="fas fa-award fa-2x text-primary"></i>
                    </div>
                    <h4 class="h5">Certified Technicians</h4>
                    <p class="text-muted mb-0">Our team consists of factory-trained and certified professionals.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px; margin: 0 auto;">
                        <i class="fas fa-shield-alt fa-2x text-primary"></i>
                    </div>
                    <h4 class="h5">12-Month Warranty</h4>
                    <p class="text-muted mb-0">All our services come with a 12-month warranty for your peace of mind.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px; margin: 0 auto;">
                        <i class="fas fa-tools fa-2x text-primary"></i>
                    </div>
                    <h4 class="h5">Modern Equipment</h4>
                    <p class="text-muted mb-0">We use the latest diagnostic tools and equipment for accurate service.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light rounded-4 p-5 mt-5 text-center">
        <h2 class="fw-bold text-primary mb-3">Need Help With Your Vehicle?</h2>
        <p class="lead text-muted mb-4">Our expert technicians are ready to assist you with all your automotive needs.</p>
        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg rounded-pill px-4">Contact Us Today</a>
    </div>
@endsection