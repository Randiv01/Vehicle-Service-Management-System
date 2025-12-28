<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top py-2">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
      <img src="{{ asset('images/MotorCare.png') }}" alt="MotorCare Logo" height="50" class="me-2">
      <div class="d-flex flex-column">
        <span class="fw-bold text-primary fs-4">MotorCare</span>
        <small class="text-muted fst-italic d-none d-md-block" style="font-size: 0.7rem;">Reliable Vehicle Service &
          Maintenance</small>
      </div>
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
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
        <li class="nav-item">
          <a class="nav-link position-relative px-3 py-2 fw-medium text-dark" href="{{ route('faq') }}">
            <i class="fas fa-question-circle me-1 d-lg-none"></i> FAQ
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link position-relative px-3 py-2 fw-medium text-dark" href="{{ route('pricing') }}">
            <i class="fas fa-tags me-1 d-lg-none"></i> Pricing
          </a>
        </li>
      </ul>

      <!-- Auth Buttons -->
      <div class="d-flex flex-column flex-lg-row gap-3 align-items-center">
        @auth
          <div class="dropdown">
            <button class="btn btn-light rounded-pill px-3 d-flex align-items-center gap-2" type="button"
              id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
              <i class="fas fa-user-circle text-primary fs-4"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-3" aria-labelledby="userDropdown">
              <li><span class="dropdown-item fw-medium">{{ Auth::user()->name }}</span></li>
              <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i class="fas fa-user me-2"></i>Profile</a>
              </li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item text-danger">
                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                  </button>
                </form>
              </li>
            </ul>
          </div>
        @else
          <a href="{{ route('login') }}" class="btn btn-outline-primary px-4 rounded-pill fw-medium w-100 w-lg-auto">
            <i class="fas fa-sign-in-alt me-2"></i>Sign In
          </a>
        @endauth
      </div>
    </div>
  </div>
</nav>