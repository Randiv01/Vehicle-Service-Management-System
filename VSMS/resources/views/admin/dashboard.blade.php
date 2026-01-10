@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="fw-bold text-dark">Dashboard Overview</h2>
            <p class="text-muted">Welcome back, Admin! Here's what's happening today.</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 border-start border-4 border-primary">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="text-muted small text-uppercase fw-bold">Total Bookings</div>
                        <div class="bg-primary bg-opacity-10 text-primary rounded px-2 py-1">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                    </div>
                    <h2 class="mb-0 fw-bold">128</h2>
                    <small class="text-success"><i class="fas fa-arrow-up me-1"></i>12% from last week</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 border-start border-4 border-success">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="text-muted small text-uppercase fw-bold">Revenue</div>
                        <div class="bg-success bg-opacity-10 text-success rounded px-2 py-1">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                    <h2 class="mb-0 fw-bold">LKR 450K</h2>
                    <small class="text-success"><i class="fas fa-arrow-up me-1"></i>8% from last month</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 border-start border-4 border-warning">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="text-muted small text-uppercase fw-bold">Pending Services</div>
                        <div class="bg-warning bg-opacity-10 text-warning rounded px-2 py-1">
                            <i class="fas fa-clock"></i>
                        </div>
                    </div>
                    <h2 class="mb-0 fw-bold">14</h2>
                    <small class="text-warning"><i class="fas fa-minus me-1"></i>Same as yesterday</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 border-start border-4 border-info">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="text-muted small text-uppercase fw-bold">Total Customers</div>
                        <div class="bg-info bg-opacity-10 text-info rounded px-2 py-1">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <h2 class="mb-0 fw-bold">856</h2>
                    <small class="text-success"><i class="fas fa-user-plus me-1"></i>5 new today</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Bookings Table -->
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold">Recent Bookings</h5>
            <a href="{{ route('admin.bookings') }}" class="btn btn-sm btn-outline-primary">View All</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>Customer</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="text-end pe-4">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-4 fw-bold">#BK00124</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">JD</div>
                                <div>
                                    <div class="fw-bold">John Doe</div>
                                    <small class="text-muted">Toyota Prius</small>
                                </div>
                            </div>
                        </td>
                        <td>Oil Change & Filter</td>
                        <td>Oct 24, 2024</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                        <td class="text-end pe-4">
                            <button class="btn btn-sm btn-light"><i class="fas fa-eye text-primary"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="ps-4 fw-bold">#BK00123</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">AS</div>
                                <div>
                                    <div class="fw-bold">Alice Smith</div>
                                    <small class="text-muted">Honda Civic</small>
                                </div>
                            </div>
                        </td>
                        <td>Brake Service</td>
                        <td>Oct 24, 2024</td>
                        <td><span class="badge bg-success">Confirmed</span></td>
                        <td class="text-end pe-4">
                            <button class="btn btn-sm btn-light"><i class="fas fa-eye text-primary"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="ps-4 fw-bold">#BK00122</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">RJ</div>
                                <div>
                                    <div class="fw-bold">Robert Johnson</div>
                                    <small class="text-muted">Nissan Leaf</small>
                                </div>
                            </div>
                        </td>
                        <td>Detailed Inspection</td>
                        <td>Oct 23, 2024</td>
                        <td><span class="badge bg-danger">Cancelled</span></td>
                        <td class="text-end pe-4">
                            <button class="btn btn-sm btn-light"><i class="fas fa-eye text-primary"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="ps-4 fw-bold">#BK00121</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">MK</div>
                                <div>
                                    <div class="fw-bold">Maria Kate</div>
                                    <small class="text-muted">BMW 320i</small>
                                </div>
                            </div>
                        </td>
                        <td>Engine Diagnostics</td>
                        <td>Oct 23, 2024</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td class="text-end pe-4">
                            <button class="btn btn-sm btn-light"><i class="fas fa-eye text-primary"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
