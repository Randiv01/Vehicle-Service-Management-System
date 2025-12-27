<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
      <img src="{{ asset('MotorCare_logo.png') }}" alt="MotorCare Logo" height="50"
        class="d-inline-block align-text-top me-2">
      <span class="fw-bold text-primary">MotorCare</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-semibold" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold" href="#">Contact</a>
        </li>
      </ul>
      <div class="d-flex ms-lg-3 gap-2">
        <a href="{{ route('login') }}" class="btn btn-outline-primary px-4 rounded-pill">Sign In</a>
      </div>
    </div>
  </div>
</nav>