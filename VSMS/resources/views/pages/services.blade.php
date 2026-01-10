@extends('layouts.app')

@section('title', 'Our Services - MotorCare')

@section('full_width_content')
    <div class="text-white py-5 mb-5" style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Our Services</h1>
            <p class="lead mb-0">Professional Automotive Care for Your Vehicle</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row g-4 mb-5">
        <!-- Oil Change Service -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 text-center">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-4 mx-auto bg-primary bg-opacity-10 text-primary"
                         style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="fas fa-oil-can"></i>
                    </div>
                    <h4 class="mb-3">Oil Change & Filter</h4>
                    <p class="text-muted mb-3">Regular oil changes extend engine life and improve performance with premium
                        synthetic oils and genuine filters.</p>
                    <div class="text-primary fw-bold mb-3">From $49.99</div>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill px-4">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Brake Service -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 text-center">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-4 mx-auto bg-danger bg-opacity-10 text-danger"
                         style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="fas fa-car-burst"></i>
                    </div>
                    <h4 class="mb-3">Brake Service & Repair</h4>
                    <p class="text-muted mb-3">Complete brake inspection, pad replacement, rotor resurfacing, and complete
                        brake system repairs.</p>
                    <div class="text-primary fw-bold mb-3">From $89.99</div>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill px-4">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Engine Diagnostics -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 text-center">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-4 mx-auto bg-warning bg-opacity-10 text-warning"
                         style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="fas fa-laptop-medical"></i>
                    </div>
                    <h4 class="mb-3">Engine Diagnostics</h4>
                    <p class="text-muted mb-3">Advanced computer diagnostics using state-of-the-art equipment to identify
                        and fix engine problems quickly.</p>
                    <div class="text-primary fw-bold mb-3">From $79.99</div>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill px-4">Book Now</a>
                </div>
            </div>
        </div>

        <!-- AC Service -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 text-center">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-4 mx-auto bg-info bg-opacity-10 text-info"
                         style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="fas fa-wind"></i>
                    </div>
                    <h4 class="mb-3">AC Service & Repair</h4>
                    <p class="text-muted mb-3">Keep cool with our AC recharge, leak detection, compressor repair, and
                        complete AC system services.</p>
                    <div class="text-primary fw-bold mb-3">From $99.99</div>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill px-4">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Tire Service -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 text-center">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-4 mx-auto bg-success bg-opacity-10 text-success"
                         style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="fas fa-compact-disc"></i>
                    </div>
                    <h4 class="mb-3">Tire Service</h4>
                    <p class="text-muted mb-3">Rotation, balancing, alignment, and puncture repair services with top-quality tire brands.</p>
                    <div class="text-primary fw-bold mb-3">From $39.99</div>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill px-4">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Battery Service -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 text-center">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-4 mx-auto bg-secondary bg-opacity-10 text-secondary"
                         style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="fas fa-car-battery"></i>
                    </div>
                    <h4 class="mb-3">Battery Service</h4>
                    <p class="text-muted mb-3">Battery testing, replacement, charging system inspection, and terminal
                        cleaning services.</p>
                    <div class="text-primary fw-bold mb-3">From $69.99</div>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill px-4">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Transmission Service -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 text-center">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-4 mx-auto bg-primary bg-opacity-10 text-primary"
                         style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="fas fa-gears"></i>
                    </div>
                    <h4 class="mb-3">Transmission Service</h4>
                    <p class="text-muted mb-3">Fluid changes, filter replacement, complete transmission diagnostics and
                        comprehensive repairs.</p>
                    <div class="text-primary fw-bold mb-3">From $149.99</div>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill px-4">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Suspension Repair -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 text-center">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-4 mx-auto bg-danger bg-opacity-10 text-danger"
                         style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="fas fa-car-side"></i>
                    </div>
                    <h4 class="mb-3">Suspension Repair</h4>
                    <p class="text-muted mb-3">Shock and strut replacement, alignment correction for a smooth and
                        comfortable ride.</p>
                    <div class="text-primary fw-bold mb-3">From $199.99</div>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill px-4">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Electrical System -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 text-center">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-4 mx-auto bg-warning bg-opacity-10 text-warning"
                         style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h4 class="mb-3">Electrical System</h4>
                    <p class="text-muted mb-3">Electrical diagnostics, wiring repairs, alternator replacement, and component
                        services.</p>
                    <div class="text-primary fw-bold mb-3">From $89.99</div>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill px-4">Book Now</a>
                </div>
            </div>
        </div>

        <!-- General Maintenance -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 text-center">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-4 mx-auto bg-secondary bg-opacity-10 text-secondary"
                         style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="fas fa-screwdriver-wrench"></i>
                    </div>
                    <h4 class="mb-3">General Maintenance</h4>
                    <p class="text-muted mb-3">Comprehensive vehicle inspection and preventative maintenance services.</p>
                    <div class="text-primary fw-bold mb-3">From $59.99</div>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill px-4">Book Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Our Services -->
    <div class="row mt-5 pt-5">
        <div class="col-12 text-center mb-5">
            <h2 class="fw-bold text-primary">Why Choose Our Services?</h2>
            <p class="lead text-muted">Experience the MotorCare difference</p>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-3 mx-auto bg-primary text-white"
                         style="width: 60px; height: 60px; font-size: 1.5rem;">
                        <i class="fas fa-award"></i>
                    </div>
                    <h4 class="h5">Certified Technicians</h4>
                    <p class="text-muted mb-0">Our team consists of factory-trained and ASE-certified professionals with
                        years of experience.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-3 mx-auto bg-success text-white"
                         style="width: 60px; height: 60px; font-size: 1.5rem;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="h5">12-Month Warranty</h4>
                    <p class="text-muted mb-0">All our services come with a comprehensive 12-month warranty for your peace
                        of mind.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="d-flex align-items-center justify-content-center rounded-circle mb-3 mx-auto bg-warning text-dark"
                         style="width: 60px; height: 60px; font-size: 1.5rem;">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h4 class="h5">Modern Equipment</h4>
                    <p class="text-muted mb-0">We use the latest diagnostic tools and equipment for accurate and efficient
                        service.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="rounded-4 p-5 mt-5 text-center text-white"
        style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
        <h2 class="fw-bold mb-3">Need Help With Your Vehicle?</h2>
        <p class="lead mb-4">Our expert technicians are ready to assist you with all your automotive needs.</p>
        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
            <a href="{{ route('contact') }}" class="btn btn-warning btn-lg rounded-pill px-5 text-dark fw-bold">Contact Us
                Today</a>
            <a href="{{ route('home') }}#book-service" class="btn btn-outline-light btn-lg rounded-pill px-5">Book Service
                Online</a>
        </div>
    </div>
@endsection