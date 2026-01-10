@extends('layouts.app')

@section('title', 'Pricing Plans - MotorCare')

@section('full_width_content')
    <div class="text-white py-5 mb-5" style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Service Packages & Pricing</h1>
            <p class="lead mb-0">Affordable packages designed to keep your vehicle in perfect condition</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row g-4 justify-content-center mb-5">
        <!-- Basic Package -->
        <div class="col-lg-4">
            <div class="card pricing-card shadow-sm h-100 border-0 rounded-4 overflow-hidden">
                <div class="text-center p-4 text-white"
                    style="background: linear-gradient(135deg, #00bcd4 0%, #00acc1 100%);">
                    <h3 class="fw-bold mb-3">Basic Care</h3>
                    <div class="display-4 fw-bold mb-2">LKR 30,000</div>
                    <p class="mb-0 opacity-90">Per Visit</p>
                </div>
                <div class="card-body p-4">
                    <ul class="list-unstyled">
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Oil Change & Filter
                        </li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Tire Pressure Check
                        </li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Fluid Top-Up</li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Visual Inspection</li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Battery Test</li>
                        <li class="py-3 border-bottom text-muted"><i class="fas fa-times me-2"></i> Full Diagnostics</li>
                        <li class="py-3 text-muted"><i class="fas fa-times me-2"></i> Brake Inspection</li>
                    </ul>
                    <div class="d-grid mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg rounded-pill">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Premium Package (Featured) -->
        <div class="col-lg-4">
            <div class="card pricing-card featured shadow-lg h-100 border-3 border-primary rounded-4 overflow-hidden position-relative"
                style="transform: scale(1.05);">
                <div class="position-absolute top-0 start-50 translate-middle">
                    <span class="badge bg-warning text-dark px-4 py-2 fw-bold">MOST POPULAR</span>
                </div>
                <div class="text-center p-4 text-white"
                    style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
                    <h3 class="fw-bold mb-3">Premium Care</h3>
                    <div class="display-4 fw-bold mb-2">LKR 60,000</div>
                    <p class="mb-0 opacity-90">Per Visit</p>
                </div>
                <div class="card-body p-4">
                    <ul class="list-unstyled">
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Everything in Basic
                        </li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Full Computer
                            Diagnostics</li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Brake Inspection &
                            Service</li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Tire Rotation</li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Alignment Check</li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> AC Performance Test
                        </li>
                        <li class="py-3"><i class="fas fa-check text-success me-2"></i> 6-Month Warranty</li>
                    </ul>
                    <div class="d-grid mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg rounded-pill">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ultimate Package -->
        <div class="col-lg-4">
            <div class="card pricing-card shadow-sm h-100 border-0 rounded-4 overflow-hidden">
                <div class="text-center p-4 text-white"
                    style="background: linear-gradient(135deg, #0d47a1 0%, #1565c0 100%);">
                    <h3 class="fw-bold mb-3">Ultimate Care</h3>
                    <div class="display-4 fw-bold mb-2">LKR 100,000</div>
                    <p class="mb-0 opacity-90">Annual Plan</p>
                </div>
                <div class="card-body p-4">
                    <ul class="list-unstyled">
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Everything in Premium
                        </li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> 4 Services Per Year
                        </li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Priority Scheduling
                        </li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> Free Pickup & Drop-off
                        </li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> 24/7 Roadside
                            Assistance</li>
                        <li class="py-3 border-bottom"><i class="fas fa-check text-success me-2"></i> 15% Off All Repairs
                        </li>
                        <li class="py-3"><i class="fas fa-check text-success me-2"></i> 12-Month Warranty</li>
                    </ul>
                    <div class="d-grid mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg rounded-pill">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Package Comparison -->
    <div class="mt-5 pt-5">
        <h2 class="text-center fw-bold mb-5">Compare Our Packages</h2>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th class="p-3">Features</th>
                        <th class="text-center p-3">Basic Care</th>
                        <th class="text-center p-3">Premium Care</th>
                        <th class="text-center p-3">Ultimate Care</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-3">Oil Change & Filter</td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="p-3">Tire Pressure & Fluids</td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="p-3">Visual Inspection</td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="p-3">Battery Test</td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="p-3">Computer Diagnostics</td>
                        <td class="text-center p-3"><i class="fas fa-times text-muted"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="p-3">Brake Service</td>
                        <td class="text-center p-3"><i class="fas fa-times text-muted"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="p-3">Tire Rotation</td>
                        <td class="text-center p-3"><i class="fas fa-times text-muted"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="p-3">Priority Scheduling</td>
                        <td class="text-center p-3"><i class="fas fa-times text-muted"></i></td>
                        <td class="text-center p-3"><i class="fas fa-times text-muted"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="p-3">Free Pickup/Drop-off</td>
                        <td class="text-center p-3"><i class="fas fa-times text-muted"></i></td>
                        <td class="text-center p-3"><i class="fas fa-times text-muted"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="p-3">24/7 Roadside Assistance</td>
                        <td class="text-center p-3"><i class="fas fa-times text-muted"></i></td>
                        <td class="text-center p-3"><i class="fas fa-times text-muted"></i></td>
                        <td class="text-center p-3"><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td class="p-3">Discount on Additional Repairs</td>
                        <td class="text-center p-3">-</td>
                        <td class="text-center p-3">10%</td>
                        <td class="text-center p-3">15%</td>
                    </tr>
                    <tr class="table-light">
                        <td class="p-3 fw-bold">Warranty Coverage</td>
                        <td class="text-center p-3 fw-bold">3 Months</td>
                        <td class="text-center p-3 fw-bold">6 Months</td>
                        <td class="text-center p-3 fw-bold">12 Months</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="rounded-4 p-5 mt-5 text-center text-white"
        style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
        <h3 class="fw-bold mb-3">Ready to Choose Your Package?</h3>
        <p class="lead mb-4">Contact us today to get started with the perfect service package for your vehicle</p>
        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
            <a href="{{ route('contact') }}" class="btn btn-warning btn-lg rounded-pill px-5 text-dark fw-bold">
                <i class="fas fa-envelope me-2"></i>Contact Us
            </a>
            <a href="{{ route('home') }}#book-service" class="btn btn-outline-light btn-lg rounded-pill px-5">
                <i class="fas fa-calendar-check me-2"></i>Book Service
            </a>
        </div>
    </div>
@endsection