<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - MotorCare Admin</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }
        
        #sidebar-wrapper {
            width: 15rem;
            min-height: 100vh;
            margin-left: -15rem;
            transition: margin .25s ease-out;
            background-color: #343a40;
            color: #fff;
            position: fixed;
            z-index: 1000;
            top: 0;
            bottom: 0;
        }
        
        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
            font-weight: bold;
        }
        
        #sidebar-wrapper .list-group {
            width: 15rem;
        }
        
        #page-content-wrapper {
            min-width: 100vw;
            width: 100%;
            transition: margin .25s ease-out;
        }
        
        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }
        
        .sidebar-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            padding: 10px 20px;
            display: block;
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }
        
        .sidebar-link:hover, .sidebar-link.active {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
            border-left-color: #0d6efd;
        }
        
        .sidebar-link i {
            width: 25px;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }
            
            #page-content-wrapper {
                min-width: 0;
                width: 100%;
                margin-left: 15rem;
            }
            
            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }

            #wrapper.toggled #page-content-wrapper {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="border-end" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom border-secondary d-flex align-items-center justify-content-center py-3">
                <img src="{{ asset('images/MotorCare.png') }}" alt="MotorCare Logo" height="40" class="me-2">
                <span class="fw-bold">MotorCare</span>
            </div>
            <div class="list-group list-group-flush py-3">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a href="{{ route('admin.bookings') }}" class="sidebar-link {{ request()->routeIs('admin.bookings*') ? 'active' : '' }}">
                    <i class="fas fa-calendar-check"></i> Bookings
                </a>
                <a href="{{ route('admin.services') }}" class="sidebar-link {{ request()->routeIs('admin.services*') ? 'active' : '' }}">
                    <i class="fas fa-cogs"></i> Services
                </a>
                <a href="{{ route('admin.customers') }}" class="sidebar-link {{ request()->routeIs('admin.customers*') ? 'active' : '' }}">
                    <i class="fas fa-users"></i> Customers
                </a>
                <a href="{{ route('admin.admins') }}" class="sidebar-link {{ request()->routeIs('admin.admins*') ? 'active' : '' }}">
                    <i class="fas fa-user-shield"></i> Admins
                </a>
                <div class="mt-4 border-top border-secondary pt-3">
                    <a href="{{ url('/') }}" class="sidebar-link" target="_blank">
                        <i class="fas fa-external-link-alt"></i> Visit Site
                    </a>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm px-4">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i></button>
                    
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle d-flex align-items-center gap-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <span class="d-none d-sm-inline">{{ auth()->user()->name }}</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user-cog me-2"></i>Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
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
                </div>
            </nav>

            <div class="container-fluid px-4 py-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>
