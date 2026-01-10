@extends('layouts.app')

@section('title', 'Home - MotorCare')

@section('full_width_content')
    <div class="position-relative overflow-hidden" style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
        <div class="container py-3 position-relative" style="z-index: 2;">
            <div class="row align-items-center" style="min-height: 75vh;">
                <div class="col-lg-6 text-white py-5">
                    <div>
                        <span class="badge bg-white text-primary mb-3 px-3 py-2 rounded-pill shadow-sm">
                            <i class="fas fa-star me-1"></i> Trusted by 50,000+ Customers
                        </span>
                        <h1 class="display-4 fw-bold mb-4">Expert Vehicle Care You Can Trust</h1>
                        <p class="lead mb-5 text-white opacity-75">
                            Professional maintenance and repair services to keep your vehicle running smoothly.
                            Our certified technicians provide top-quality service with a 12-month warranty on all repairs.
                        </p>

                        <div class="d-flex flex-column flex-sm-row gap-3 mb-5">
                            <a href="{{ route('booking') }}" class="btn btn-warning btn-lg rounded-pill px-5 fw-bold text-dark shadow">
                                <i class="fas fa-calendar-check me-2"></i>Book Service Now
                            </a>
                            <a href="{{ route('services') }}" class="btn btn-outline-light btn-lg rounded-pill px-5">
                                <i class="fas fa-tools me-2"></i>Our Services
                            </a>
                        </div>

                        <div class="row g-3 mt-4">
                            <div class="col-sm-4">
                                <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-pill px-3 py-2 border border-white border-opacity-25" 
                                     style="backdrop-filter: blur(10px);">
                                    <div class="bg-warning text-dark rounded-circle me-2 d-flex align-items-center justify-content-center flex-shrink-0"
                                         style="width: 40px; height: 40px;">
                                        <i class="fas fa-check fw-bold"></i>
                                    </div>
                                    <span class="fw-semibold small">Same-day service</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-pill px-3 py-2 border border-white border-opacity-25"
                                     style="backdrop-filter: blur(10px);">
                                    <div class="bg-warning text-dark rounded-circle me-2 d-flex align-items-center justify-content-center flex-shrink-0"
                                         style="width: 40px; height: 40px;">
                                        <i class="fas fa-check fw-bold"></i>
                                    </div>
                                    <span class="fw-semibold small">Free diagnostics</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-pill px-3 py-2 border border-white border-opacity-25"
                                     style="backdrop-filter: blur(10px);">
                                    <div class="bg-warning text-dark rounded-circle me-2 d-flex align-items-center justify-content-center flex-shrink-0"
                                         style="width: 40px; height: 40px;">
                                        <i class="fas fa-check fw-bold"></i>
                                    </div>
                                    <span class="fw-semibold small">12-month warranty</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-lg-block">
                    <div class="position-relative p-4">
                        <img src="{{ asset('hero 3.jpg') }}" alt="Professional Car Service"
                            class="img-fluid rounded-4 shadow-lg border border-4 border-white border-opacity-10">
                        
                        <div class="position-absolute bg-white text-dark p-4 rounded-4 shadow-lg"
                            style="bottom: 40px; right: 40px; max-width: 280px;">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                    style="width: 50px; height: 50px;">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <div class="small fw-bold text-uppercase text-muted">24/7 Emergency</div>
                                    <h5 class="mb-0 text-primary fw-bold text-nowrap">+94 77 478 513</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-light py-5 border-bottom">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="p-3">
                        <div class="display-5 fw-bold text-primary mb-1">15+</div>
                        <div class="text-muted fw-medium small text-uppercase ls-1">Years Experience</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-3">
                        <div class="display-5 fw-bold text-primary mb-1">50K+</div>
                        <div class="text-muted fw-medium small text-uppercase ls-1">Vehicles Serviced</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-3">
                        <div class="display-5 fw-bold text-primary mb-1">98%</div>
                        <div class="text-muted fw-medium small text-uppercase ls-1">Customer Satisfaction</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-3">
                        <div class="display-5 fw-bold text-primary mb-1">24/7</div>
                        <div class="text-muted fw-medium small text-uppercase ls-1">Roadside Assistance</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <span class="text-primary fw-bold text-uppercase small bg-primary bg-opacity-10 px-3 py-1 rounded-pill">Our Services</span>
                <h2 class="display-5 fw-bold mt-3 mb-3">Professional Auto Care</h2>
                <hr class="border border-primary border-3 opacity-100 mx-auto rounded-pill" style="width: 60px;">
                <p class="text-muted lead">Comprehensive automotive solutions for all your vehicle needs</p>
            </div>

            <div class="row g-4 mb-5">
                @foreach([
                    ['icon' => 'fa-oil-can', 'title' => 'Oil Change & Filter', 'desc' => 'Regular oil changes extend engine life and improve performance.', 'price' => 'LKR 15,000', 'color' => 'primary'],
                    ['icon' => 'fa-car-burst', 'title' => 'Brake Service', 'desc' => 'Complete brake inspection, pad replacement, and rotor resurfacing.', 'price' => 'LKR 27,000', 'color' => 'danger'],
                    ['icon' => 'fa-laptop-medical', 'title' => 'Engine Diagnostics', 'desc' => 'Advanced computer diagnostics to identify and fix engine problems.', 'price' => 'LKR 24,000', 'color' => 'warning'],
                    ['icon' => 'fa-wind', 'title' => 'AC Service', 'desc' => 'Keep cool with our AC recharge, leak detection, and repair services.', 'price' => 'LKR 30,000', 'color' => 'info']
                ] as $index => $service)
                <div class="col-md-6 col-lg-3" data-service-index="{{ $index }}">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4 text-center">
                            <div class="d-flex align-items-center justify-content-center rounded-circle mb-4 mx-auto bg-{{ $service['color'] }} bg-opacity-10 text-{{ $service['color'] }}"
                                 style="width: 80px; height: 80px; font-size: 2rem;">
                                <i class="fas {{ $service['icon'] }}"></i>
                            </div>
                            <h4 class="h5 mb-3 fw-bold">{{ $service['title'] }}</h4>
                            <p class="text-muted mb-3 small">{{ $service['desc'] }}</p>
                            <div class="text-primary fw-bold fs-5">From {{ $service['price'] }}</div>
                            <a href="{{ route('booking') }}" class="btn btn-sm btn-outline-primary mt-3 rounded-pill px-4">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('services') }}" class="btn btn-primary btn-lg rounded-pill px-5 shadow">
                    View All Services <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <span class="text-primary fw-bold text-uppercase small bg-white px-3 py-1 rounded-pill shadow-sm">Why Choose Us</span>
                <h2 class="display-5 fw-bold mt-3 mb-3">Your Trusted Auto Partner</h2>
                <hr class="border border-primary border-3 opacity-100 mx-auto rounded-pill" style="width: 60px;">
                <p class="text-muted lead">Committed to providing the highest quality automotive repair services</p>
            </div>

            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6">
                    <img src="{{ asset('hero 2.jpg') }}" 
                         alt="Professional Auto Service" class="img-fluid rounded-4 shadow-lg w-100" style="object-fit: cover; height: 350px;">
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <h3 class="fw-bold mb-4">Excellence in Every Service</h3>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                 style="width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fw-bold">State-of-the-Art Equipment</h5>
                                <p class="text-muted mb-0">We use the latest diagnostic tools and equipment for accurate and efficient service.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                 style="width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fw-bold">Genuine Parts Guarantee</h5>
                                <p class="text-muted mb-0">We use only genuine or high-quality OEM-equivalent parts for all repairs.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                 style="width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fw-bold">Digital Service Records</h5>
                                <p class="text-muted mb-0">Access your complete service history through our online customer portal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                @foreach([
                    ['icon' => 'fa-award', 'title' => 'ASE Certified', 'desc' => 'Highly trained technicians with years of experience', 'color' => 'primary'],
                    ['icon' => 'fa-dollar-sign', 'title' => 'Fair Pricing', 'desc' => 'Transparent pricing with no hidden fees', 'color' => 'success'],
                    ['icon' => 'fa-clock', 'title' => 'Fast Service', 'desc' => 'Most services completed same-day', 'color' => 'warning'],
                    ['icon' => 'fa-shield-alt', 'title' => '12-Month Warranty', 'desc' => 'All repairs backed by coverage', 'color' => 'danger'],
                    ['icon' => 'fa-calendar', 'title' => 'Flexible Scheduling', 'desc' => 'Book online 24/7 at your convenience', 'color' => 'info'],
                    ['icon' => 'fa-car', 'title' => 'Free Pickup', 'desc' => 'We pick up and deliver your vehicle', 'color' => 'secondary']
                ] as $feature)
                <div class="col-6 col-md-4">
                    <div class="card border-0 shadow-sm h-100 text-center p-3 p-lg-4">
                        <div class="mx-auto mb-3 bg-{{ $feature['color'] }} text-white rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; font-size: 1.5rem;">
                            <i class="fas {{ $feature['icon'] }}"></i>
                        </div>
                        <h4 class="h6 fw-bold mb-2">{{ $feature['title'] }}</h4>
                        <p class="text-muted mb-0 small">{{ $feature['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5 bg-white border-top">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="fw-bold mb-3">Brands We Service</h3>
                <p class="text-muted">We work with all major vehicle brands</p>
            </div>
            <div class="row g-4 justify-content-center align-items-center opacity-75">
                @foreach(['Toyota', 'Honda', 'Nissan', 'Mitsubishi', 'BMW', 'Mercedes', 'Audi', 'Ford', 'Hyundai', 'Kia', 'Suzuki', 'Isuzu'] as $brand)
                <div class="col-4 col-md-2 text-center">
                    <div class="p-3">
                        <i class="fas fa-car text-secondary fa-2x mb-2"></i>
                        <div class="fw-bold text-dark small">{{ $brand }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <span class="text-primary fw-bold text-uppercase small bg-white px-3 py-1 rounded-pill shadow-sm">Testimonials</span>
                <h2 class="display-5 fw-bold mt-3 mb-3">What Our Customers Say</h2>
                <hr class="border border-primary border-3 opacity-100 mx-auto rounded-pill" style="width: 60px;">
                <p class="text-muted lead">Don't just take our word for it - hear from our satisfied customers</p>
            </div>

            <div class="row g-4" id="testimonials-carousel">
                @foreach([
                    ['name' => 'Kasun Perera', 'car' => 'Honda Civic', 'rating' => 5, 'comment' => 'Exceptional service! The team was professional, transparent about pricing, and my car runs better than ever.'],
                    ['name' => 'Nimal Silva', 'car' => 'Toyota Corolla', 'rating' => 5, 'comment' => 'Best auto service in Colombo! They fixed my brake issue quickly and at a fair price.'],
                    ['name' => 'Chaminda Fernando', 'car' => 'Nissan Navara', 'rating' => 5, 'comment' => 'I\'ve been bringing my car here for 3 years now. Consistently excellent service, honest pricing, and friendly staff.'],
                ] as $testimonial)
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 p-4 rounded-3">
                        <div class="text-warning mb-3">
                            @for($i = 0; $i < $testimonial['rating']; $i++)
                            <i class="fas fa-star"></i>
                            @endfor
                        </div>
                        <p class="mb-4 text-muted fst-italic">"{{ $testimonial['comment'] }}"</p>
                        <div class="d-flex align-items-center mt-auto">
                            <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 50px; height: 50px;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">{{ $testimonial['name'] }}</h6>
                                <small class="text-muted">{{ $testimonial['car'] }} Owner</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-lg overflow-hidden rounded-4">
                        <div class="card-body p-0">
                            <div class="ratio ratio-16x9">
                                <video autoplay muted loop playsinline controls class="object-fit-cover">
                                    <source src="{{ asset('video/MotorCareVido.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="p-4 text-center bg-white">
                                <h5 class="fw-bold mb-1">Company Introduction</h5>
                                <p class="text-muted mb-0 small">Learn a little about our company and services</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 text-white" style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
        <div class="container py-4">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mb-4">Ready to Experience the Best Auto Service?</h2>
                    <p class="lead mb-5 text-white opacity-75">Join thousands of satisfied customers who trust us with their vehicles.</p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                        <a href="tel:+94774785132" class="btn btn-warning btn-lg text-dark fw-bold rounded-pill px-5 shadow">
                            <i class="fas fa-phone-alt me-2"></i> Call Now
                        </a>
                        <a href="{{ route('booking') }}" class="btn btn-outline-light btn-lg rounded-pill px-5">
                            <i class="fas fa-calendar-check me-2"></i> Book Online
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg rounded-pill px-5 text-primary">
                            <i class="fas fa-map-marker-alt me-2"></i> Visit Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{-- @vite('resources/js/home.js') --}}
@endpush