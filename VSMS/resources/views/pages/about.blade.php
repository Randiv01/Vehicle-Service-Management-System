@extends('layouts.app')

@section('title', 'About Us - MotorCare')

@section('full_width_content')
    <div class="bg-primary text-white py-5 mb-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">About MotorCare</h1>
            <p class="lead mb-0">Driving Excellence in Vehicle Maintenance Since 2010</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row align-items-stretch mb-5">
        <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-4 d-flex flex-column">
            <div>
                <h2 class="fw-bold text-primary mb-3">Who We Are</h2>
                <p class="lead text-muted">
                    MotorCare is a premier vehicle service management solution dedicated to keeping your vehicle in peak
                    condition with our state-of-the-art service centers and expert technicians.
                </p>
                <div class="mb-4">
                    <h5 class="fw-bold text-dark">Our Expertise</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Comprehensive vehicle diagnostics and maintenance</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Factory-trained and certified technicians</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Genuine parts and advanced equipment</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Customer-focused service experience</li>
                    </ul>
                </div>
                <p class="mb-4">
                    Founded with a passion for automotive excellence in 2010, we have grown into a trusted network of service centers across the region. 
                    Our team of certified mechanics and customer service experts work tirelessly to ensure every ride is safe, smooth, and enjoyable.
                </p>
                <div class="bg-light p-4 rounded-4 mb-4">
                    <h5 class="fw-bold text-dark">Our Commitment</h5>
                    <p class="mb-0">
                        At MotorCare, we don't just service vehicles – we build lasting relationships with our customers through trust, 
                        exceptional service, and a commitment to getting you back on the road quickly and safely.
                    </p>
                </div>
                <div class="mt-auto pt-3">
                    <a href="{{ url('/contact') }}" class="btn btn-primary rounded-pill px-4 me-2">Schedule Service</a>
                    <a href="{{ url('/services') }}" class="btn btn-outline-primary rounded-pill px-4">Our Services</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 h-100">
            <div class="h-100 d-flex align-items-center">
                <div class="rounded-4 overflow-hidden shadow-sm w-100" style="height: 100%;">
                    <img src="{{ asset('images/team.png') }}" alt="Our Team at Work" class="img-fluid h-100 w-100" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5 py-4 bg-light rounded-4">
        <div class="col-12 mb-4 text-center">
            <h2 class="fw-bold text-primary">Our Vision & Mission</h2>
            <p class="text-muted">Driving the future of automotive care</p>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-eye fa-2x text-primary me-3"></i>
                        <h3 class="h4 mb-0">Our Vision</h3>
                    </div>
                    <p class="card-text text-muted">
                        To be the most trusted and innovative vehicle service provider, setting the standard for excellence in automotive care and customer satisfaction across the region.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-bullseye fa-2x text-primary me-3"></i>
                        <h3 class="h4 mb-0">Our Mission</h3>
                    </div>
                    <p class="card-text text-muted">
                        To provide exceptional vehicle maintenance services through skilled professionals, cutting-edge technology, and genuine parts, ensuring every customer enjoys a safe, reliable, and smooth driving experience.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12 text-center mb-5">
            <h2 class="fw-bold text-primary">Leadership Team</h2>
            <p class="lead text-muted">Meet the visionaries driving MotorCare forward</p>
        </div>
        
        <!-- CEO -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="text-center p-4">
                    <div class="mb-3" style="width: 200px; height: 200px; margin: 0 auto; overflow: hidden; border-radius: 50%; border: 3px solid #e9ecef;">
                        <img src="{{ asset('images/ceo.jpg') }}" alt="Johnathan R. Smith - CEO" class="img-fluid h-100 w-100" style="object-fit: cover;">
                    </div>
                    <h4 class="mb-1">Johnathan R. Smith</h4>
                    <p class="text-primary fw-bold mb-3">Founder & CEO</p>
                    <p class="text-muted">
                        With over 20 years in the automotive industry, Johnathan's vision and leadership have been instrumental in shaping MotorCare's success and commitment to excellence.
                    </p>
                    <div class="mt-3">
                        <a href="https://lk.linkedin.com/" target = "_blank" class="text-primary me-2"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="https://mail.google.com/" target = "_blank" class="text-primary"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTO -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="text-center p-4">
                    <div class="mb-3" style="width: 200px; height: 200px; margin: 0 auto; overflow: hidden; border-radius: 50%; border: 3px solid #e9ecef;">
                        <img src="{{ asset('images/cto.jpg') }}" alt="Sarah K. Johnson - CTO" class="img-fluid h-100 w-100" style="object-fit: cover;">
                    </div>
                    <h4 class="mb-1">Sarah K. Johnson</h4>
                    <p class="text-primary fw-bold mb-3">Chief Technology Officer</p>
                    <p class="text-muted">
                        Tech innovator with 15+ years in automotive software solutions, Sarah leads our digital transformation and technology strategy.
                    </p>
                    <div class="mt-3">
                        <a href="https://lk.linkedin.com/" target = "_blank" class="text-primary me-2"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="https://mail.google.com/" target = "_blank" class="text-primary"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- COO -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="text-center p-4">
                    <div class="mb-3" style="width: 200px; height: 200px; margin: 0 auto; overflow: hidden; border-radius: 50%; border: 3px solid #e9ecef;">
                        <img src="{{ asset('images/coo.jpg') }}" alt="Michael T. Williams - COO" class="img-fluid h-100 w-100" style="object-fit: cover;">
                    </div>
                    <h4 class="mb-1">Michael T. Williams</h4>
                    <p class="text-primary fw-bold mb-3">Chief Operations Officer</p>
                    <p class="text-muted">
                        Operations expert with a track record of optimizing service delivery and ensuring operational excellence across all our locations.
                    </p>
                    <div class="mt-3">
                        <a href="https://lk.linkedin.com/" target = "_blank" class="text-primary me-2"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="https://mail.google.com/" target = "_blank" class="text-primary"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center mb-5">
        <div class="col-12 mb-4">
            <h2 class="fw-bold text-dark">Why Choose Us</h2>
            <p class="text-muted">We deliver results you can trust.</p>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100 py-4">
                <div class="card-body">
                    <i class="fas fa-wrench fa-3x text-primary mb-3"></i>
                    <h4 class="card-title fw-bold">Expert Mechanics</h4>
                    <p class="card-text text-muted">Certified professionals with years of experience handling all vehicle
                        types.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100 py-4">
                <div class="card-body">
                    <i class="fas fa-clock fa-3x text-primary mb-3"></i>
                    <h4 class="card-title fw-bold">Fast Service</h4>
                    <p class="card-text text-muted">We respect your time. Efficient diagnostics and repairs to get you back
                        on the road.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100 py-4">
                <div class="card-body">
                    <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                    <h4 class="card-title fw-bold">Quality Parts</h4>
                    <p class="card-text text-muted">We use only genuine and high-quality aftermarket parts for durability
                        and safety.</p>
                </div>
            </div>
        </div>
    </div>
@endsection