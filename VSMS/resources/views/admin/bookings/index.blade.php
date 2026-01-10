@extends('layouts.admin')

@section('title', 'Bookings Management')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold text-dark mb-0">Bookings</h2>
            <p class="text-muted mb-0">View and manage customer appointments</p>
        </div>
        <div class="d-flex gap-2 w-100 w-md-auto">
            <div class="dropdown">
                <button class="btn btn-outline-secondary d-flex align-items-center gap-2 flex-fill justify-content-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-filter"></i>
                    <span>Filter</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('admin.bookings') }}">All Bookings</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.bookings', ['status' => 'pending']) }}">Pending</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.bookings', ['status' => 'confirmed']) }}">Confirmed</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.bookings', ['status' => 'completed']) }}">Completed</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.bookings', ['status' => 'cancelled']) }}">Cancelled</a></li>
                </ul>
            </div>
            <button type="button" class="btn btn-primary d-flex align-items-center gap-2 flex-fill justify-content-center" data-bs-toggle="modal" data-bs-target="#newBookingModal">
                <i class="fas fa-plus"></i>
                <span>New Booking</span>
            </button>
        </div>
    </div>

    <!-- Stats Row -->
    <div class="row g-4 mb-4">
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm text-center py-3">
                <div class="text-primary fw-bold display-6">{{ $bookings->total() }}</div>
                <div class="text-muted small text-uppercase">Total</div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm text-center py-3">
                <div class="text-warning fw-bold display-6">{{ \App\Models\Booking::where('status', 'pending')->count() }}</div>
                <div class="text-muted small text-uppercase">Pending</div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm text-center py-3">
                <div class="text-success fw-bold display-6">{{ \App\Models\Booking::where('status', 'confirmed')->count() }}</div>
                <div class="text-muted small text-uppercase">Confirmed</div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm text-center py-3">
                <div class="text-danger fw-bold display-6">{{ \App\Models\Booking::where('status', 'cancelled')->count() }}</div>
                <div class="text-muted small text-uppercase">Cancelled</div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <form action="{{ route('admin.bookings') }}" method="GET">
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-end-0"><i class="fas fa-search text-muted"></i></span>
                    <input type="text" name="search" class="form-control border-start-0" placeholder="Search bookings by ID, customer name, or vehicle..." value="{{ request('search') }}">
                    @if(request('status'))
                        <input type="hidden" name="status" value="{{ request('status') }}">
                    @endif
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 py-3">Booking ID</th>
                            <th class="py-3">Customer</th>
                            <th class="py-3">Vehicle</th>
                            <th class="py-3">Service</th>
                            <th class="py-3">Date & Time</th>
                            <th class="py-3">Status</th>
                            <th class="text-end pe-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bookings as $booking)
                            <tr>
                                <td class="ps-4 fw-bold text-primary">#BK{{ str_pad($booking->id, 5, '0', STR_PAD_LEFT) }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle text-dark d-flex align-items-center justify-content-center me-2 fw-bold" style="width: 32px; height: 32px;">
                                            {{ strtoupper(substr($booking->customer_name, 0, 2)) }}
                                        </div>
                                        <span>{{ $booking->customer_name }}</span>
                                    </div>
                                </td>
                                <td>
                                    @if($booking->vehicle_make && $booking->vehicle_model)
                                        {{ $booking->vehicle_make }} {{ $booking->vehicle_model }}
                                    @else
                                        <span class="text-muted">N/A</span>
                                    @endif
                                </td>
                                <td>{{ $booking->service_type }}</td>
                                <td>{{ $booking->service_date->format('M d, Y') }}, {{ date('h:i A', strtotime($booking->service_time)) }}</td>
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
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow">
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2 text-primary"></i>View Details</a></li>
                                            @if($booking->status === 'pending')
                                                <li>
                                                    <form action="{{ route('admin.bookings.updateStatus', $booking) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="status" value="confirmed">
                                                        <button type="submit" class="dropdown-item"><i class="fas fa-check me-2 text-success"></i>Confirm</button>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="{{ route('admin.bookings.updateStatus', $booking) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="status" value="cancelled">
                                                        <button type="submit" class="dropdown-item"><i class="fas fa-times me-2 text-danger"></i>Cancel</button>
                                                    </form>
                                                </li>
                                            @elseif($booking->status === 'confirmed')
                                                <li>
                                                    <form action="{{ route('admin.bookings.updateStatus', $booking) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="status" value="completed">
                                                        <button type="submit" class="dropdown-item"><i class="fas fa-check-double me-2 text-success"></i>Mark Completed</button>
                                                    </form>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5 text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3 d-block"></i>
                                    <p class="mb-0">No bookings found</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="p-3 border-top d-flex justify-content-end">
                {{ $bookings->links() }}
            </div>
        </div>
    </div>

    <!-- New Booking Modal -->
    <div class="modal fade" id="newBookingModal" tabindex="-1" aria-labelledby="newBookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newBookingModalLabel">Create New Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.bookings.create') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Customer Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="customer_name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="customer_phone" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="customer_email" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Vehicle Make</label>
                                <input type="text" class="form-control" name="vehicle_make" placeholder="e.g., Toyota">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Vehicle Model</label>
                                <input type="text" class="form-control" name="vehicle_model" placeholder="e.g., Corolla">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Service Type <span class="text-danger">*</span></label>
                                <select class="form-select" name="service_type" required>
                                    <option value="">Select Service</option>
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
                            <div class="col-md-6">
                                <label class="form-label">Service Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="service_date" required min="{{ date('Y-m-d') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Service Time <span class="text-danger">*</span></label>
                                <select class="form-select" name="service_time" required>
                                    <option value="">Select Time</option>
                                    <option value="09:00">9:00 AM</option>
                                    <option value="10:00">10:00 AM</option>
                                    <option value="11:00">11:00 AM</option>
                                    <option value="13:00">1:00 PM</option>
                                    <option value="14:00">2:00 PM</option>
                                    <option value="15:00">3:00 PM</option>
                                    <option value="16:00">4:00 PM</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                <select class="form-select" name="status" required>
                                    <option value="pending">Pending</option>
                                    <option value="confirmed" selected>Confirmed</option>
                                    <option value="completed">Completed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Additional Notes</label>
                                <textarea class="form-control" name="additional_notes" rows="3" placeholder="Any special requests or notes..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create Booking</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
