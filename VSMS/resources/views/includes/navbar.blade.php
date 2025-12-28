<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top py-2">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
      <img src="{{ asset('images/MotorCare.png') }}" alt="MotorCare Logo" height="50" class="me-2">
      <div class="d-flex flex-column">
        <span class="fw-bold text-primary fs-4">MotorCare</span>
        <small class="text-muted fst-italic d-none d-md-block" style="font-size: 0.7rem;">Reliable Vehicle Service & Maintenance</small>
      </div>
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-3 mb-lg-0 align-items-lg-center gap-2 justify-content-center">
        <li class="nav-item">
          <a class="nav-link position-relative px-3 py-2 fw-medium text-dark" aria-current="page" href="{{ url('/') }}">
            <i class="fas fa-home me-1 d-lg-none"></i> Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link position-relative px-3 py-2 fw-medium text-dark" href="{{ route('services') }}">
            <i class="fas fa-tools me-1 d-lg-none"></i> Services
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link position-relative px-3 py-2 fw-medium text-dark" href="{{ route('about') }}">
            <i class="fas fa-info-circle me-1 d-lg-none"></i> About Us
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link position-relative px-3 py-2 fw-medium text-dark" href="{{ route('contact') }}">
            <i class="fas fa-envelope me-1 d-lg-none"></i> Contact
          </a>
        </li>
      </ul>

      <!-- Buttons -->
      <div class="d-flex flex-column flex-lg-row gap-3 align-items-center">
        <a href="{{ route('login') }}" class="btn btn-outline-primary px-4 rounded-pill fw-medium w-100 w-lg-auto">
          <i class="fas fa-sign-in-alt me-2"></i>Sign In
        </a>
      </div>
    </div>
  </div>
</nav>