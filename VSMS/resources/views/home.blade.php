@extends('layouts.app')

@section('title', 'Home - MotorCare')

@section('full_width_content')
    <!-- Hero Section (Carousel) -->
    <div id="heroCarousel" class="carousel slide shadow-sm overflow-hidden" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <!-- Slide 1: Maintenance -->
            <div class="carousel-item active" style="height: calc(100vh - 76px);">
                <img src="{{ asset('hero 1.jpg') }}" class="d-block w-100 h-100"
                    style="object-fit: cover; filter: brightness(0.6);" alt="Car Maintenance">
                <div class="carousel-caption d-none d-md-block text-start mb-5 pb-5 container">
                    <h1 class="display-3 fw-bold">Keep Your Engine Running Smoothly</h1>
                    <p class="lead fs-4">Top-tier periodic maintenance to ensure your vehicle's longevity.</p>
                    <button class="btn btn-primary btn-lg rounded-pill px-5 mt-3 shadow">Book Service</button>
                </div>
            </div>
            <!-- Slide 2: Diagnostics -->
            <div class="carousel-item" style="height: calc(100vh - 76px);">
                <img src="{{ asset('hero 2.jpg') }}" class="d-block w-100 h-100"
                    style="object-fit: cover; filter: brightness(0.6);" alt="Car Diagnostics">
                <div class="carousel-caption d-none d-md-block text-start mb-5 pb-5 container">
                    <h1 class="display-3 fw-bold">Pinpoint Issues with Precision</h1>
                    <p class="lead fs-4">Advanced computer diagnostics to identify problems accurately.</p>
                    <button class="btn btn-primary btn-lg rounded-pill px-5 mt-3 shadow">Book Service</button>
                </div>
            </div>
            <!-- Slide 3: Repairs -->
            <div class="carousel-item" style="height: calc(100vh - 76px);">
                <img src="{{ asset('hero 3.jpg') }}" class="d-block w-100 h-100"
                    style="object-fit: cover; filter: brightness(0.6);" alt="Expert Repairs">
                <div class="carousel-caption d-none d-md-block text-start mb-5 pb-5 container">
                    <h1 class="display-3 fw-bold">Expert Repairs You Can Trust</h1>
                    <p class="lead fs-4">Certified mechanics handling everything from brakes to transmission.</p>
                    <button class="btn btn-primary btn-lg rounded-pill px-5 mt-3 shadow">Book Service</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection

@section('content')

    <!-- Our Services Section -->
    <div class="row mb-5 text-center">
        <div class="col-12 mb-4">
            <h2 class="fw-bold text-primary">Our Professional Services</h2>
            <p class="text-muted">Comprehensive solutions for all your vehicle needs</p>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                <div class="card-body p-4">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-tools fa-3x"></i>
                    </div>
                    <h5 class="card-title fw-bold">Periodic Maintenance</h5>
                    <p class="card-text text-muted small">Oil changes, filter replacements, and scheduled check-ups to keep
                        your engine healthy.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                <div class="card-body p-4">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-laptop-medical fa-3x"></i>
                    </div>
                    <h5 class="card-title fw-bold">Diagnostics</h5>
                    <p class="card-text text-muted small">Advanced computer diagnostics to accurately identify and
                        troubleshoot issues.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                <div class="card-body p-4">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-cogs fa-3x"></i>
                    </div>
                    <h5 class="card-title fw-bold">Mechanical Repairs</h5>
                    <p class="card-text text-muted small">Expert repairs for brakes, suspension, transmission, and engine
                        components.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                <div class="card-body p-4">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-pump-soap fa-3x"></i>
                    </div>
                    <h5 class="card-title fw-bold">Auto Detailing</h5>
                    <p class="card-text text-muted small">Interior deep cleaning and exterior polishing to make your car
                        look brand new.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="row align-items-center py-5 bg-white rounded-3 shadow-sm my-5">
        <div class="col-lg-6 p-4">
            <h2 class="fw-bold mb-4">Why Choose <span class="text-primary">MotorCare</span>?</h2>
            <div class="d-flex mb-4">
                <div class="flex-shrink-0 text-primary">
                    <i class="fas fa-check-circle fa-2x"></i>
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="fw-bold">Certified Mechanics</h5>
                    <p class="text-muted mb-0">Our team consists of highly trained and certified professionals.</p>
                </div>
            </div>
            <div class="d-flex mb-4">
                <div class="flex-shrink-0 text-primary">
                    <i class="fas fa-check-circle fa-2x"></i>
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="fw-bold">Genuine Parts</h5>
                    <p class="text-muted mb-0">We use only authentic manufacturer parts for all repairs.</p>
                </div>
            </div>
            <div class="d-flex mb-4">
                <div class="flex-shrink-0 text-primary">
                    <i class="fas fa-check-circle fa-2x"></i>
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="fw-bold">Transparent Pricing</h5>
                    <p class="text-muted mb-0">No hidden costs. You pay exactly what we quote by the standard.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 text-center">
            <!-- Placeholder for a mechanic image or garage scene -->
            <div class="p-5 bg-light rounded-3">
                <i class="fas fa-user-cog fa-10x text-primary opacity-25"></i>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="row text-center py-5">
        <div class="col-lg-8 mx-auto">
            <h2 class="fw-bold mb-3">Ready to give your car the care it deserves?</h2>
            <p class="lead text-muted mb-4">Book your appointment today and experience the difference.</p>
            <button class="btn btn-primary btn-lg rounded-pill px-5 shadow">Schedule Service</button>
        </div>
    </div>

    <style>
        .hover-shadow:hover {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
        }

        .transition-all {
            transition: all 0.3s ease;
        }
    </style>
@endsection