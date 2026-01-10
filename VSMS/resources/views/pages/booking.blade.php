@extends('layouts.app')

@section('title', 'Book a Service - MotorCare')

@section('full_width_content')
    <!-- Hero Section for Booking -->
    <div class="position-relative overflow-hidden py-6"
        style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bold mb-3">Book Your Service</h1>
                <p class="lead opacity-90">Schedule your vehicle maintenance in just a few clicks</p>
            </div>
        </div>
    </div>

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
                                                <input type="text" class="form-control" required id="customerName" value="{{ auth()->user()->name ?? '' }}">
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
                                            <input type="email" class="form-control" required id="customerEmail" value="{{ auth()->user()->email ?? '' }}">
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
                                                <input type="text" class="form-control" placeholder="e.g., Corolla"
                                                    id="vehicleModel">
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
                                                <input type="date" class="form-control" required id="serviceDate"
                                                    min="{{ date('Y-m-d') }}">
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
@endsection

@push('styles')
    <style>
        .section-divider {
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, #0d47a1, #1976d2);
            margin: 1rem auto;
            border-radius: 2px;
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

        @keyframes pulse {
            0% {
                transform: scale(0.95);
                opacity: 0.7;
            }

            50% {
                transform: scale(1.05);
                opacity: 1;
            }

            100% {
                transform: scale(0.95);
                opacity: 0.7;
            }
        }

        .hover-grow {
            transition: transform 0.3s ease;
        }

        .hover-grow:hover {
            transform: translateY(-5px) scale(1.05);
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const service = urlParams.get('service');
            if (service) {
                const serviceTypeSelect = document.getElementById('serviceType');
                if (serviceTypeSelect) {
                    serviceTypeSelect.value = service;
                }
            }
        });

        // Handle form submission (same as home page but on this dedicated page)
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Booking confirmed! We will contact you soon.');
            this.reset();
        });
    </script>
@endpush