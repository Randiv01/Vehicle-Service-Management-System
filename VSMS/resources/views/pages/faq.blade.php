@extends('layouts.app')

@section('title', 'FAQ - Frequently Asked Questions - MotorCare')

@section('full_width_content')
    <div class="text-white py-5 mb-5" style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Frequently Asked Questions</h1>
            <p class="lead mb-0">Got questions? We've got answers</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="accordion" id="faqAccordion">
                <!-- FAQ 1 -->
                <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq1">
                            <i class="fas fa-question-circle me-3 text-primary"></i>
                            How long does a typical service take?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Most standard services like oil changes take 30-45 minutes. More complex repairs may take 2-4
                            hours. We offer same-day service for most repairs and will give you an accurate time estimate
                            when you book.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                            <i class="fas fa-question-circle me-3 text-primary"></i>
                            Do you offer warranties on repairs?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes! All our repairs come with a comprehensive 12-month warranty. This covers both parts and
                            labor, giving you complete peace of mind. If you experience any issues with the repaired
                            component within 12 months, we'll fix it free of charge.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq3">
                            <i class="fas fa-question-circle me-3 text-primary"></i>
                            What payment methods do you accept?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We accept cash, all major credit and debit cards (Visa, MasterCard, American Express), and bank
                            transfers. We also offer flexible payment plans for larger repairs. Contact us to discuss
                            payment options that work for you.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq4">
                            <i class="fas fa-question-circle me-3 text-primary"></i>
                            Do you provide loaner vehicles?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we offer complimentary loaner vehicles for repairs that take longer than 4 hours (subject
                            to availability). We also provide free pickup and drop-off services within Colombo metropolitan
                            area (10km radius) for our Ultimate Care package members.
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq5">
                            <i class="fas fa-question-circle me-3 text-primary"></i>
                            How do I schedule an appointment?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can schedule an appointment in three easy ways:
                            <ul class="mt-2 mb-0">
                                <li>Fill out our online booking form on the home page</li>
                                <li>Call us at +94 77 478 513 (available 24/7)</li>
                                <li>Visit our location at No. 245, Galle Road, Colombo 03</li>
                            </ul>
                            We're open 7 days a week for your convenience!
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq6">
                            <i class="fas fa-question-circle me-3 text-primary"></i>
                            What areas do you serve?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We're based in Colombo 03 and serve the entire Colombo metropolitan area and surrounding
                            regions. We offer free pickup and drop-off services for our Ultimate Care package members within
                            a 10km radius of our facility.
                        </div>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq7">
                            <i class="fas fa-question-circle me-3 text-primary"></i>
                            Do you work on all vehicle makes and models?
                        </button>
                    </h2>
                    <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes! Our certified technicians are trained to work on all makes and models, both domestic and
                            imported. We have experience with Japanese, European, American, and Korean vehicles. Our
                            state-of-the-art diagnostic equipment is compatible with all modern vehicles.
                        </div>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq8">
                            <i class="fas fa-question-circle me-3 text-primary"></i>
                            What if I need emergency roadside assistance?
                        </button>
                    </h2>
                    <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We offer 24/7 roadside assistance for all our customers. Call us immediately at +94 77 478 513
                            if you experience: breakdown, flat tire, dead battery, or lockout. Our technicians will arrive
                            promptly to help get you back on the road. Ultimate Care package members receive priority
                            service.
                        </div>
                    </div>
                </div>

                <!-- FAQ 9 -->
                <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq9">
                            <i class="fas fa-question-circle me-3 text-primary"></i>
                            Can I wait while my vehicle is being serviced?
                        </button>
                    </h2>
                    <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Absolutely! We have a comfortable waiting area with complimentary Wi-Fi, refreshments, and
                            entertainment. Many customers choose to wait for quick services like oil changes or inspections.
                            For longer repairs, we recommend using our loaner vehicle service or free pickup/drop-off.
                        </div>
                    </div>
                </div>

                <!-- FAQ 10 -->
                <div class="accordion-item border-0 rounded-3 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq10">
                            <i class="fas fa-question-circle me-3 text-primary"></i>
                            What types of parts do you use?
                        </button>
                    </h2>
                    <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We use only premium OEM (Original Equipment Manufacturer) parts and high-quality aftermarket
                            parts from trusted manufacturers. We never use cheap, low-quality parts that could compromise
                            your vehicle's performance or safety. All parts come with their own manufacturer warranties in
                            addition to our 12-month service warranty.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Still Have Questions -->
            <div class="rounded-4 p-5 mt-5 text-center text-white"
                style="background: linear-gradient(135deg, #0d47a1 0%, #1976d2 100%);">
                <h3 class="fw-bold mb-3">Still Have Questions?</h3>
                <p class="lead mb-4">Our friendly customer service team is here to help!</p>
                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-warning btn-lg rounded-pill px-5 text-dark fw-bold">
                        <i class="fas fa-envelope me-2"></i>Contact Us
                    </a>
                    <a href="tel:+94774785132" class="btn btn-outline-light btn-lg rounded-pill px-5">
                        <i class="fas fa-phone-alt me-2"></i>Call Now
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection