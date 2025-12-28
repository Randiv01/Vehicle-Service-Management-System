@extends('layouts.app')

@section('title', 'Contact Us - MotorCare')

@section('full_width_content')
    <div class="bg-primary text-white py-5 mb-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Contact Us</h1>
            <p class="lead mb-0">We'd love to hear from you. Reach out to us today.</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <!-- Contact Form -->
        <div class="col-lg-7 mb-5">
            <div class="card shadow-sm border-0 rounded-4 h-100">
                <div class="card-body p-4 p-md-5">
                    <h3 class="fw-bold text-primary mb-4">Send us a Message</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control rounded-3" id="contactName"
                                        placeholder="Your Name">
                                    <label for="contactName">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control rounded-3" id="contactEmail"
                                        placeholder="name@example.com">
                                    <label for="contactEmail">Email Address</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="contactSubject" placeholder="Subject">
                            <label for="contactSubject">Subject</label>
                        </div>

                        <div class="form-floating mb-4">
                            <textarea class="form-control rounded-3" placeholder="Leave a message here" id="contactMessage"
                                style="height: 150px"></textarea>
                            <label for="contactMessage">Message</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill fw-bold">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="col-lg-5 mb-5">
            <div class="card text-dark border-0 rounded-4 shadow-sm h-100">
                <div class="card-body p-4 p-md-5 d-flex flex-column justify-content-center">
                    <h3 class="fw-bold mb-4">Contact Information</h3>

                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-primary rounded-circle p-3 me-3 d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px;">
                            <i class="fas fa-map-marker-alt fa-lg text-white"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Our Location</h5>
                            <p class="text-dark mb-0">No. 245, Galle Road,Colombo 03,Sri Lanka</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-primary rounded-circle p-3 me-3 d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px;">
                            <i class="fas fa-phone-alt fa-lg text-white"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Phone Number</h5>
                            <p class="text-dark mb-0">+94 77478513</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-primary rounded-circle p-3 me-3 d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px;">
                            <i class="fas fa-envelope fa-lg text-white"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Email Address</h5>
                            <p class="text-dark mb-0">contact@motorcare.com</p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5 class="fw-bold mb-3">Follow Us</h5>
                        <div class="d-flex gap-3">
                            <a href="https://www.facebook.com" target="_blank" class="btn btn-outline-dark rounded-circle"
                                style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com" target="_blank" class="btn btn-outline-dark rounded-circle"
                                style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com" target="_blank" class="btn btn-outline-dark rounded-circle"
                                style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Google Map -->
        <div>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0558054952076!2d79.86061389999999!3d6.8839189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bc5b891a4b5%3A0xdd5a5c72230c1edf!2s245%2C%203%20Galle%20Rd%2C%20Colombo%2000500!5e0!3m2!1sen!2slk!4v1766921433263!5m2!1sen!2slk" 
                width="100%" 
                height="450"
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
@endsection