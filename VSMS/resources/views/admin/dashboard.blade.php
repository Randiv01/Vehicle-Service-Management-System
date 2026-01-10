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
                    <h2 class="mb-0 fw-bold">{{ $stats['total_bookings'] }}</h2>
                    <small class="text-muted"><i class="fas fa-calendar me-1"></i>All time</small>
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
                    <h2 class="mb-0 fw-bold">LKR {{ number_format($stats['total_revenue']) }}</h2>
                    <small class="text-muted"><i class="fas fa-chart-line me-1"></i>Estimated</small>
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
                    <h2 class="mb-0 fw-bold">{{ $stats['pending_bookings'] }}</h2>
                    <small class="text-warning"><i class="fas fa-hourglass-half me-1"></i>Awaiting confirmation</small>
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
                    <h2 class="mb-0 fw-bold">{{ $stats['total_customers'] }}</h2>
                    <small class="text-muted"><i class="fas fa-user-check me-1"></i>Registered users</small>
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
                    @forelse($recentBookings as $booking)
                        <tr>
                            <td class="ps-4 fw-bold">#BK{{ str_pad($booking->id, 5, '0', STR_PAD_LEFT) }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">
                                        {{ strtoupper(substr($booking->customer_name, 0, 2)) }}
                                    </div>
                                    <div>
                                        <div class="fw-bold">{{ $booking->customer_name }}</div>
                                        <small class="text-muted">{{ $booking->vehicle_make ?? 'N/A' }} {{ $booking->vehicle_model ?? '' }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $booking->service_type }}</td>
                            <td>{{ $booking->service_date->format('M d, Y') }}</td>
                            <td>
                                @if($booking->status === 'pending')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @elseif($booking->status === 'confirmed')
                                    <span class="badge bg-success">Confirmed</span>
                                @elseif($booking->status === 'completed')
                                    <span class="badge bg-info">Completed</span>
                                @else
                                    <span class="badge bg-danger">Cancelled</span>
                                @endif
                            </td>
                            <td class="text-end pe-4">
                                <a href="{{ route('admin.bookings') }}" class="btn btn-sm btn-light"><i class="fas fa-eye text-primary"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <i class="fas fa-inbox fa-3x mb-3 d-block"></i>
                                <p class="mb-0">No bookings yet</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
