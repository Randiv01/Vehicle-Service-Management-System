@extends('layouts.app')

@section('title', 'Home - MotorCare - Professional Vehicle Service & Maintenance')

@section('full_width_content')
    <!-- Hero Section -->
    <div class="position-relative overflow-hidden" style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
        <div class="container py-8 py-lg-10 position-relative" style="z-index: 2;">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-6 text-white py-5">
                    <div class="animate-fade-in-up">
                        <span class="badge bg-white text-primary mb-3 px-3 py-2 animate-bounce">
                            <i class="fas fa-star me-1"></i> Trusted by 50,000+ Customers
                        </span>
                        <h1 class="display-3 fw-bold mb-4">Expert Vehicle Care You Can Trust</h1>
                        <p class="lead mb-5 opacity-90">
                            Professional maintenance and repair services to keep your vehicle running smoothly.
                            Our certified technicians provide top-quality service with a 12-month warranty on all repairs.
                        </p>

                        <div class="d-flex flex-column flex-sm-row gap-3 mb-5">
                            <a href="#book-service" class="btn btn-warning btn-lg rounded-pill px-5 fw-bold text-dark hover-grow">
                                <i class="fas fa-calendar-check me-2"></i>Book Service Now
                            </a>
                            <a href="{{ route('services') }}" class="btn btn-outline-light btn-lg rounded-pill px-5 hover-grow">
                                <i class="fas fa-tools me-2"></i>Our Services
                            </a>
                        </div>

                        <div class="row g-3 mt-4">
                            <div class="col-sm-4">
                                <div class="d-flex align-items-center feature-badge">
                                    <div class="bg-warning text-dark rounded-circle me-2 d-flex align-items-center justify-content-center"
                                        style="width: 32px; height: 32px;">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span class="small">Same-day service</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="d-flex align-items-center feature-badge">
                                    <div class="bg-warning text-dark rounded-circle me-2 d-flex align-items-center justify-content-center"
                                        style="width: 32px; height: 32px;">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span class="small">Free diagnostics</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="d-flex align-items-center feature-badge">
                                    <div class="bg-warning text-dark rounded-circle me-2 d-flex align-items-center justify-content-center"
                                        style="width: 32px; height: 32px;">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span class="small">12-month warranty</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-lg-block">
                    <div class="position-relative animate-fade-in delay-2">
                        <img src="{{ asset('hero 3.jpg') }}" alt="Professional Car Service"
                            class="img-fluid rounded-3 shadow-lg hover-scale" style="border-radius: 20px !important;">
                        <div class="position-absolute bg-white text-dark p-4 rounded-3 shadow-lg floating-card"
                            style="bottom: 30px; right: 30px; max-width: 280px;">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary text-white rounded-circle p-3 me-3 d-flex align-items-center justify-content-center"
                                    style="width: 50px; height: 50px;">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <div class="small fw-bold">24/7 Emergency Service</div>
                                    <h5 class="mb-0 text-primary">+94 77 478 513</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Divider -->
        <div class="position-absolute bottom-0 start-0 w-100 overflow-hidden">
            <svg class="w-100" style="fill: white;" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512,50,583,67.8c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z">
                </path>
            </svg>
        </div>
    </div>

    <!-- Trust Badges / Stats -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="animate-scale-in delay-1">
                        <div class="display-4 fw-bold text-primary mb-2 counter" data-target="15">0+</div>
                        <div class="text-muted fw-medium">Years Experience</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="animate-scale-in delay-2">
                        <div class="display-4 fw-bold text-primary mb-2 counter" data-target="50">0K+</div>
                        <div class="text-muted fw-medium">Vehicles Serviced</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="animate-scale-in delay-3">
                        <div class="display-4 fw-bold text-primary mb-2 counter" data-target="98">0%</div>
                        <div class="text-muted fw-medium">Customer Satisfaction</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="animate-scale-in delay-4">
                        <div class="display-4 fw-bold text-primary mb-2">24/7</div>
                        <div class="text-muted fw-medium">Roadside Assistance</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="py-7 bg-white">
        <div class="container">
            <div class="text-center mb-6">
                <span class="text-primary fw-bold text-uppercase small">Our Services</span>
                <div class="section-divider"></div>
                <h2 class="display-5 fw-bold mb-3">Professional Auto Care Services</h2>
                <p class="text-muted lead">Comprehensive automotive solutions for all your vehicle needs</p>
            </div>

            <div class="row g-4 mb-5">
                @foreach([
                    ['icon' => 'fa-oil-can', 'title' => 'Oil Change & Filter', 'desc' => 'Regular oil changes extend engine life and improve performance.', 'price' => '$49.99', 'color' => 'primary'],
                    ['icon' => 'fa-car-burst', 'title' => 'Brake Service', 'desc' => 'Complete brake inspection, pad replacement, and rotor resurfacing.', 'price' => '$89.99', 'color' => 'danger'],
                    ['icon' => 'fa-laptop-medical', 'title' => 'Engine Diagnostics', 'desc' => 'Advanced computer diagnostics to identify and fix engine problems.', 'price' => '$79.99', 'color' => 'warning'],
                    ['icon' => 'fa-wind', 'title' => 'AC Service', 'desc' => 'Keep cool with our AC recharge, leak detection, and repair services.', 'price' => '$99.99', 'color' => 'info'],
                    ['icon' => 'fa-battery-full', 'title' => 'Battery Service', 'desc' => 'Battery testing, replacement, and electrical system diagnostics.', 'price' => '$69.99', 'color' => 'success'],
                    ['icon' => 'fa-tire', 'title' => 'Tire Service', 'desc' => 'Tire rotation, balancing, alignment, and puncture repair services.', 'price' => '$39.99', 'color' => 'dark'],
                    ['icon' => 'fa-oil-well', 'title' => 'Transmission Service', 'desc' => 'Fluid changes, repairs, and maintenance for automatic & manual transmissions.', 'price' => '$149.99', 'color' => 'secondary'],
                    ['icon' => 'fa-screwdriver-wrench', 'title' => 'General Maintenance', 'desc' => 'Comprehensive vehicle inspection and preventative maintenance.', 'price' => '$59.99', 'color' => 'primary']
                ] as $index => $service)
                <div class="col-md-6 col-lg-3" data-service-index="{{ $index }}">
                    <div class="card service-card border-0 shadow-sm h-100 hover-lift">
                        <div class="card-body p-4 text-center">
                            <div class="icon-xl bg-{{ $service['color'] }} bg-opacity-10 text-{{ $service['color'] }} rounded-circle mb-4 mx-auto">
                                <i class="fas {{ $service['icon'] }}"></i>
                            </div>
                            <h4 class="h5 mb-3">{{ $service['title'] }}</h4>
                            <p class="text-muted mb-3 small">{{ $service['desc'] }}</p>
                            <div class="text-primary fw-bold">From {{ $service['price'] }}</div>
                            <button class="btn btn-sm btn-outline-primary mt-3 quick-book-btn" data-service="{{ $service['title'] }}">
                                Quick Book
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('services') }}" class="btn btn-primary btn-lg rounded-pill px-5 hover-grow">
                    View All Services <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-7 bg-light">
        <div class="container">
            <div class="text-center mb-6">
                <span class="text-primary fw-bold text-uppercase small">Why Choose Us</span>
                <div class="section-divider"></div>
                <h2 class="display-5 fw-bold mb-3">Your Trusted Auto Service Partner</h2>
                <p class="text-muted lead">We're committed to providing the highest quality automotive repair services</p>
            </div>

            <div class="row g-4 align-items-center mb-6">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Professional Auto Service" class="img-fluid rounded-3 shadow-lg hover-scale">
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-5">
                        <h3 class="fw-bold mb-4">Excellence in Every Service</h3>
                        <div class="mb-4">
                            <div class="d-flex align-items-start mb-3">
                                <div class="icon-sm bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">State-of-the-Art Equipment</h5>
                                    <p class="text-muted mb-0">We use the latest diagnostic tools and equipment for accurate and efficient service.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <div class="icon-sm bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Genuine Parts Guarantee</h5>
                                    <p class="text-muted mb-0">We use only genuine or high-quality OEM-equivalent parts for all repairs.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <div class="icon-sm bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Digital Service Records</h5>
                                    <p class="text-muted mb-0">Access your complete service history through our online customer portal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                @foreach([
                    ['icon' => 'fa-award', 'title' => 'ASE Certified', 'desc' => 'Highly trained technicians with years of experience', 'color' => 'primary'],
                    ['icon' => 'fa-dollar-sign', 'title' => 'Fair Pricing', 'desc' => 'Transparent pricing with no hidden fees or surprises', 'color' => 'success'],
                    ['icon' => 'fa-clock', 'title' => 'Fast Service', 'desc' => 'Most services completed same-day for your convenience', 'color' => 'warning'],
                    ['icon' => 'fa-shield-alt', 'title' => '12-Month Warranty', 'desc' => 'All repairs backed by comprehensive warranty coverage', 'color' => 'danger'],
                    ['icon' => 'fa-calendar', 'title' => 'Flexible Scheduling', 'desc' => 'Book appointments online 24/7 at your convenience', 'color' => 'info'],
                    ['icon' => 'fa-car', 'title' => 'Free Pickup & Drop', 'desc' => 'We pick up and deliver your vehicle for added convenience', 'color' => 'secondary']
                ] as $feature)
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 text-center p-4 hover-lift">
                        <div class="icon-lg bg-{{ $feature['color'] }} text-white rounded-circle mx-auto mb-3">
                            <i class="fas {{ $feature['icon'] }}"></i>
                        </div>
                        <h4 class="h5 mb-2">{{ $feature['title'] }}</h4>
                        <p class="text-muted mb-0 small">{{ $feature['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Brands We Service -->
    <section class="py-6 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="fw-bold mb-3">Brands We Service</h3>
                <p class="text-muted">We work with all major vehicle brands</p>
            </div>
            <div class="row g-4 justify-content-center align-items-center">
                @foreach(['Toyota', 'Honda', 'Nissan', 'Mitsubishi', 'BMW', 'Mercedes', 'Audi', 'Ford', 'Hyundai', 'Kia', 'Suzuki', 'Isuzu'] as $brand)
                <div class="col-4 col-md-2 text-center">
                    <div class="brand-logo p-3">
                        <i class="fas fa-car text-muted fa-2x mb-2"></i>
                        <div class="fw-medium">{{ $brand }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-7 bg-light">
        <div class="container">
            <div class="text-center mb-6">
                <span class="text-primary fw-bold text-uppercase small">Testimonials</span>
                <div class="section-divider"></div>
                <h2 class="display-5 fw-bold mb-3">What Our Customers Say</h2>
                <p class="text-muted lead">Don't just take our word for it - hear from our satisfied customers</p>
            </div>

            <div class="row g-4" id="testimonials-carousel">
                @foreach([
                    ['name' => 'Kasun Perera', 'car' => 'Honda Civic', 'rating' => 5, 'comment' => 'Exceptional service! The team was professional, transparent about pricing, and my car runs better than ever. Highly recommended!'],
                    ['name' => 'Nimal Silva', 'car' => 'Toyota Corolla', 'rating' => 5, 'comment' => 'Best auto service in Colombo! They fixed my brake issue quickly and at a fair price. The waiting area was comfortable too.'],
                    ['name' => 'Chaminda Fernando', 'car' => 'Nissan Navara', 'rating' => 5, 'comment' => 'I\'ve been bringing my car here for 3 years now. Consistently excellent service, honest pricing, and friendly staff. They treat you like family!'],
                    ['name' => 'Samantha Jayasekara', 'car' => 'Toyota Prius', 'rating' => 5, 'comment' => 'As a female driver, I always feel respected and well-informed here. They explain everything clearly and never push unnecessary repairs.'],
                    ['name' => 'Rajiv Kumar', 'car' => 'BMW 3 Series', 'rating' => 5, 'comment' => 'Expert service for European cars! They know exactly what they\'re doing and the prices are much better than dealership service centers.']
                ] as $testimonial)
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card h-100">
                        <div class="star-rating mb-3">
                            @for($i = 0; $i < $testimonial['rating']; $i++)
                            <i class="fas fa-star text-warning"></i>
                            @endfor
                        </div>
                        <p class="mb-4">{{ $testimonial['comment'] }}</p>
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">{{ $testimonial['name'] }}</h6>
                                <small class="text-muted">{{ $testimonial['car'] }} Owner</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Video Testimonial -->
            <div class="row mt-6">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-lg overflow-hidden rounded-3">
                        <div class="card-body p-0">
                            <div class="ratio ratio-16x9">
                                <div class="bg-dark d-flex align-items-center justify-content-center">
                                    <button class="btn btn-warning btn-lg rounded-circle play-video-btn" 
                                            style="width: 80px; height: 80px;">
                                        <i class="fas fa-play fa-2x"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <h5 class="fw-bold mb-2">Customer Experience Video</h5>
                                <p class="text-muted mb-0">See what our customers have to say about their experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Process -->
    <section class="py-7 bg-white">
        <div class="container">
            <div class="text-center mb-6">
                <span class="text-primary fw-bold text-uppercase small">How It Works</span>
                <div class="section-divider"></div>
                <h2 class="display-5 fw-bold mb-3">Our Service Process</h2>
                <p class="text-muted lead">Simple and transparent process from booking to completion</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="text-center process-step">
                        <div class="process-number">1</div>
                        <h4 class="h5 mb-3">Book Appointment</h4>
                        <p class="text-muted mb-0">Book online or call us to schedule your service at your convenience</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center process-step">
                        <div class="process-number">2</div>
                        <h4 class="h5 mb-3">Free Diagnostic</h4>
                        <p class="text-muted mb-0">Our experts perform a comprehensive inspection of your vehicle</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center process-step">
                        <div class="process-number">3</div>
                        <h4 class="h5 mb-3">Approval & Service</h4>
                        <p class="text-muted mb-0">We provide a detailed quote and begin work after your approval</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center process-step">
                        <div class="process-number">4</div>
                        <h4 class="h5 mb-3">Quality Check & Delivery</h4>
                        <p class="text-muted mb-0">Final quality inspection and vehicle delivery with warranty</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Service Section -->
    <section id="book-service" class="py-7 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-5 d-none d-md-block"
                                style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
                                <div class="h-100 p-5 text-white d-flex flex-column justify-content-center">
                                    <h3 class="fw-bold mb-4">Schedule Your Service Today</h3>
                                    <p class="mb-4">Fill out the form and we'll get back to you within 24 hours to confirm
                                        your appointment.</p>

                                    <div class="mb-3">
                                        <i class="fas fa-check-circle me-2"></i> Fast Response Time
                                    </div>
                                    <div class="mb-3">
                                        <i class="fas fa-check-circle me-2"></i> Flexible Scheduling
                                    </div>
                                    <div class="mb-3">
                                        <i class="fas fa-check-circle me-2"></i> Expert Technicians
                                    </div>
                                    <div class="mb-3">
                                        <i class="fas fa-check-circle me-2"></i> Transparent Pricing
                                    </div>

                                    <div class="mt-4 pt-3 border-top border-white border-opacity-25">
                                        <p class="small mb-2">Need immediate assistance?</p>
                                        <h5 class="mb-0"><i class="fas fa-phone-alt me-2"></i>+94 77 478 513</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body p-4 p-lg-5">
                                    <h3 class="fw-bold mb-4">Book Your Service</h3>
                                    <form id="bookingForm">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Full Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" required id="customerName">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Phone Number <span
                                                        class="text-danger">*</span></label>
                                                <input type="tel" class="form-control" required id="customerPhone">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Email Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" required id="customerEmail">
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Vehicle Make</label>
                                                <select class="form-select" id="vehicleMake">
                                                    <option value="" selected>Select Make</option>
                                                    <option value="Toyota">Toyota</option>
                                                    <option value="Honda">Honda</option>
                                                    <option value="Nissan">Nissan</option>
                                                    <option value="BMW">BMW</option>
                                                    <option value="Mercedes">Mercedes</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Model</label>
                                                <input type="text" class="form-control" placeholder="e.g., Corolla" id="vehicleModel">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Service Type <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" required id="serviceType">
                                                <option value="" selected>Select Service</option>
                                                <option value="Oil Change & Filter">Oil Change & Filter</option>
                                                <option value="Brake Service">Brake Service</option>
                                                <option value="Engine Diagnostics">Engine Diagnostics</option>
                                                <option value="AC Service">AC Service</option>
                                                <option value="Tire Service">Tire Service</option>
                                                <option value="Battery Service">Battery Service</option>
                                                <option value="General Maintenance">General Maintenance</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Preferred Date <span
                                                        class="text-danger">*</span></label>
                                                <input type="date" class="form-control" required id="serviceDate" min="{{ date('Y-m-d') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Preferred Time <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" required id="serviceTime">
                                                    <option value="" selected>Select Time</option>
                                                    <option value="09:00">9:00 AM</option>
                                                    <option value="10:00">10:00 AM</option>
                                                    <option value="11:00">11:00 AM</option>
                                                    <option value="13:00">1:00 PM</option>
                                                    <option value="14:00">2:00 PM</option>
                                                    <option value="15:00">3:00 PM</option>
                                                    <option value="16:00">4:00 PM</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label">Additional Notes</label>
                                            <textarea class="form-control" rows="3" id="additionalNotes"
                                                placeholder="Please describe any issues or special requests..."></textarea>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-lg rounded-pill hover-grow">
                                                <i class="fas fa-calendar-check me-2"></i>Confirm Booking
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-7 bg-white">
        <div class="container">
            <div class="text-center mb-6">
                <span class="text-primary fw-bold text-uppercase small">FAQs</span>
                <div class="section-divider"></div>
                <h2 class="display-5 fw-bold mb-3">Frequently Asked Questions</h2>
                <p class="text-muted lead">Get answers to common questions about our services</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        @foreach([
                            ['q' => 'How long does a typical oil change service take?', 'a' => 'A standard oil change takes about 30-45 minutes. However, we recommend allowing 60-90 minutes for the complete service including vehicle inspection and tire pressure check.'],
                            ['q' => 'Do I need an appointment for service?', 'a' => 'While appointments are recommended to ensure prompt service, we do accept walk-ins based on availability. Booking online guarantees your preferred time slot.'],
                            ['q' => 'What is your warranty policy?', 'a' => 'All our repairs come with a 12-month/12,000-mile warranty, whichever comes first. This covers both parts and labor for the repaired components.'],
                            ['q' => 'Do you provide loaner cars or shuttle service?', 'a' => 'Yes, we offer free shuttle service within a 5-mile radius. For longer repairs, loaner cars are available on request for a small daily fee.'],
                            ['q' => 'Can you service all vehicle makes and models?', 'a' => 'Yes, our certified technicians are trained to service all major brands including European, Asian, and American vehicles. We use manufacturer-specific diagnostic tools.'],
                            ['q' => 'How do I know what services my car needs?', 'a' => 'We provide a free multi-point inspection with every service. Our technicians will recommend services based on your vehicle\'s mileage, age, and manufacturer guidelines.']
                        ] as $index => $faq)
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed {{ $index === 0 ? '' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $index }}">
                                    {{ $faq['q'] }}
                                </button>
                            </h2>
                            <div id="faq{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{ $faq['a'] }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-7 text-white" style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mb-4">Ready to Experience the Best Auto Service?</h2>
                    <p class="lead mb-5 opacity-90">Join thousands of satisfied customers who trust us with their vehicles.
                    </p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                        <a href="tel:+94774785132" class="btn btn-warning btn-lg text-dark fw-bold rounded-pill px-5 hover-grow">
                            <i class="fas fa-phone-alt me-2"></i> Call Now
                        </a>
                        <a href="#book-service" class="btn btn-outline-light btn-lg rounded-pill px-5 hover-grow">
                            <i class="fas fa-calendar-check me-2"></i> Book Online
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg rounded-pill px-5 hover-grow">
                            <i class="fas fa-map-marker-alt me-2"></i> Visit Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Live Chat Widget -->
    <div class="live-chat-widget">
        <button class="chat-toggle-btn btn btn-warning rounded-pill shadow-lg" id="chatToggle">
            <i class="fas fa-comments me-2"></i>Live Chat
        </button>
        <div class="chat-window" id="chatWindow">
            <div class="chat-header">
                <h6 class="mb-0">MotorCare Support</h6>
                <button class="btn-close" id="closeChat"></button>
            </div>
            <div class="chat-body" id="chatBody">
                <div class="message received">
                    <div class="message-text">Hello! How can I help you today?</div>
                </div>
            </div>
            <div class="chat-footer">
                <input type="text" class="form-control" placeholder="Type your message..." id="chatInput">
                <button class="btn btn-primary" id="sendMessage">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    /* Animation Classes */
    .animate-bounce {
        animation: bounce 2s infinite;
    }

    .hover-grow {
        transition: transform 0.3s ease;
    }

    .hover-grow:hover {
        transform: translateY(-5px) scale(1.05);
    }

    .hover-scale {
        transition: transform 0.3s ease;
    }

    .hover-scale:hover {
        transform: scale(1.03);
    }

    .floating-card {
        animation: float 6s ease-in-out infinite;
    }

    .service-card {
        transition: all 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
    }

    .testimonial-card {
        background: white;
        border-radius: 10px;
        padding: 2rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
    }

    .process-step {
        position: relative;
    }

    .process-number {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #0d47a1, #1976d2);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: bold;
        margin: 0 auto 1.5rem;
        position: relative;
    }

    .process-number::after {
        content: '';
        position: absolute;
        width: 70px;
        height: 70px;
        border: 2px dashed #0d47a1;
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    .star-rating {
        color: #ffc107;
    }

    .feature-badge {
        transition: all 0.3s ease;
        padding: 8px;
        border-radius: 8px;
    }

    .feature-badge:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateX(5px);
    }

    .icon-xl {
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
    }

    .icon-lg {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }

    .icon-sm {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
    }

    .section-divider {
        width: 60px;
        height: 3px;
        background: linear-gradient(to right, #0d47a1, #1976d2);
        margin: 1rem auto;
        border-radius: 2px;
    }

    /* Live Chat Widget */
    .live-chat-widget {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }

    .chat-toggle-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1001;
        padding: 12px 24px;
    }

    .chat-window {
        position: fixed;
        bottom: 80px;
        right: 20px;
        width: 350px;
        height: 400px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.2);
        display: none;
        flex-direction: column;
        z-index: 1000;
    }

    .chat-window.show {
        display: flex;
    }

    .chat-header {
        background: linear-gradient(135deg, #0d47a1, #1976d2);
        color: white;
        padding: 15px;
        border-radius: 10px 10px 0 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .chat-body {
        flex: 1;
        padding: 15px;
        overflow-y: auto;
    }

    .message {
        margin-bottom: 10px;
        max-width: 80%;
    }

    .message.received {
        margin-right: auto;
    }

    .message.sent {
        margin-left: auto;
    }

    .message-text {
        padding: 10px 15px;
        border-radius: 18px;
        background: #f0f0f0;
    }

    .message.sent .message-text {
        background: #0d47a1;
        color: white;
    }

    .chat-footer {
        padding: 15px;
        border-top: 1px solid #eee;
        display: flex;
        gap: 10px;
    }

    /* Animations */
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes pulse {
        0% { transform: scale(0.95); opacity: 0.7; }
        50% { transform: scale(1.05); opacity: 1; }
        100% { transform: scale(0.95); opacity: 0.7; }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 1s ease-out;
    }

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .animate-scale-in {
        animation: scaleIn 0.5s ease-out;
    }

    .delay-1 { animation-delay: 0.2s; }
    .delay-2 { animation-delay: 0.4s; }
    .delay-3 { animation-delay: 0.6s; }
    .delay-4 { animation-delay: 0.8s; }

    /* Responsive */
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2.5rem;
        }
        
        .chat-window {
            width: calc(100vw - 40px);
            height: 50vh;
        }
        
        .chat-toggle-btn {
            padding: 10px 20px;
            font-size: 0.9rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Counter Animation
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-target'));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            if (element.textContent.includes('K')) {
                element.textContent = Math.floor(current) + 'K+';
            } else if (element.textContent.includes('%')) {
                element.textContent = Math.floor(current) + '%';
            } else {
                element.textContent = Math.floor(current) + '+';
            }
        }, 16);
    }

    // Initialize counters when in viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target.querySelector('.counter');
                if (counter) {
                    animateCounter(counter);
                }
            }
        });
    });

    document.querySelectorAll('.animate-scale-in').forEach(el => {
        observer.observe(el);
    });

    // Quick Book Service
    document.querySelectorAll('.quick-book-btn').forEach(button => {
        button.addEventListener('click', function() {
            const serviceName = this.getAttribute('data-service');
            document.getElementById('serviceType').value = serviceName;
            
            // Scroll to booking form
            document.getElementById('book-service').scrollIntoView({
                behavior: 'smooth'
            });
            
            // Highlight the selected service
            const serviceInput = document.getElementById('serviceType');
            serviceInput.focus();
            serviceInput.classList.add('border', 'border-warning', 'border-3');
            setTimeout(() => {
                serviceInput.classList.remove('border', 'border-warning', 'border-3');
            }, 2000);
        });
    });

    // Booking Form Submission
    document.getElementById('bookingForm')?.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Collect form data
        const formData = {
            name: document.getElementById('customerName').value,
            phone: document.getElementById('customerPhone').value,
            email: document.getElementById('customerEmail').value,
            make: document.getElementById('vehicleMake').value,
            model: document.getElementById('vehicleModel').value,
            service: document.getElementById('serviceType').value,
            date: document.getElementById('serviceDate').value,
            time: document.getElementById('serviceTime').value,
            notes: document.getElementById('additionalNotes').value
        };
        
        // Simple validation
        if (!formData.name || !formData.phone || !formData.email || !formData.service || !formData.date || !formData.time) {
            alert('Please fill in all required fields.');
            return;
        }
        
        // Simulate API call
        const bookingModal = new bootstrap.Modal(document.getElementById('bookingModal') || createBookingModal());
        bookingModal.show();
        
        // Reset form
        this.reset();
    });

    // Create booking confirmation modal
    function createBookingModal() {
        const modalHTML = `
            <div class="modal fade" id="bookingModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h5 class="modal-title text-success">
                                <i class="fas fa-check-circle me-2"></i>Booking Confirmed!
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-center py-4">
                            <div class="icon-xl bg-success bg-opacity-10 text-success rounded-circle mb-4 mx-auto">
                                <i class="fas fa-calendar-check fa-2x"></i>
                            </div>
                            <h4 class="mb-3">Thank You for Booking!</h4>
                            <p class="text-muted mb-4">
                                Your service appointment has been scheduled. We'll send a confirmation email shortly 
                                and call you to confirm the details.
                            </p>
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>
                                Please arrive 10 minutes before your scheduled time.
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">
                                Done
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        document.body.insertAdjacentHTML('beforeend', modalHTML);
        return document.getElementById('bookingModal');
    }

    // Live Chat
    const chatToggle = document.getElementById('chatToggle');
    const chatWindow = document.getElementById('chatWindow');
    const closeChat = document.getElementById('closeChat');
    const sendMessage = document.getElementById('sendMessage');
    const chatInput = document.getElementById('chatInput');
    const chatBody = document.getElementById('chatBody');

    chatToggle?.addEventListener('click', () => {
        chatWindow.classList.toggle('show');
    });

    closeChat?.addEventListener('click', () => {
        chatWindow.classList.remove('show');
    });

    sendMessage?.addEventListener('click', sendChatMessage);
    chatInput?.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') sendChatMessage();
    });

    function sendChatMessage() {
        const message = chatInput.value.trim();
        if (message) {
            // Add user message
            const userMessage = document.createElement('div');
            userMessage.className = 'message sent';
            userMessage.innerHTML = `<div class="message-text">${message}</div>`;
            chatBody.appendChild(userMessage);
            
            // Clear input
            chatInput.value = '';
            
            // Scroll to bottom
            chatBody.scrollTop = chatBody.scrollHeight;
            
            // Auto-reply after 1 second
            setTimeout(() => {
                const replies = [
                    "Thanks for your message! Our team will respond shortly.",
                    "Would you like to schedule a service appointment?",
                    "Can you provide more details about your vehicle issue?",
                    "Our customer service hours are 8 AM - 6 PM daily."
                ];
                const reply = replies[Math.floor(Math.random() * replies.length)];
                
                const botMessage = document.createElement('div');
                botMessage.className = 'message received';
                botMessage.innerHTML = `<div class="message-text">${reply}</div>`;
                chatBody.appendChild(botMessage);
                
                chatBody.scrollTop = chatBody.scrollHeight;
            }, 1000);
        }
    }

    // Set minimum date for booking
    document.getElementById('serviceDate').min = new Date().toISOString().split('T')[0];

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // Video play button
    document.querySelector('.play-video-btn')?.addEventListener('click', function() {
        // In a real implementation, this would play a video
        alert('Video playback would start here. In production, implement video player functionality.');
    });

    // Add scroll animation to elements
    const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
            }
        });
    }, {
        threshold: 0.1
    });

    // Observe service cards and testimonials
    document.querySelectorAll('.service-card, .testimonial-card, .process-step').forEach(el => {
        scrollObserver.observe(el);
    });
</script>
@endpush