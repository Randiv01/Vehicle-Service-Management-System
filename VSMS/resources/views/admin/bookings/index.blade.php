@extends('layouts.admin')

@section('title', 'Bookings Management')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold text-dark mb-0">Bookings</h2>
            <p class="text-muted mb-0">View and manage customer appointments</p>
        </div>
        <div class="d-flex gap-2 w-100 w-md-auto">
            <button class="btn btn-outline-secondary d-flex align-items-center gap-2 flex-fill justify-content-center">
                <i class="fas fa-filter"></i>
                <span>Filter</span>
            </button>
            <button class="btn btn-primary d-flex align-items-center gap-2 flex-fill justify-content-center">
                <i class="fas fa-plus"></i>
                <span>New Booking</span>
            </button>
        </div>
    </div>

    <!-- Stats Row -->
    <div class="row g-4 mb-4">
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm text-center py-3">
                <div class="text-primary fw-bold display-6">128</div>
                <div class="text-muted small text-uppercase">Total</div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm text-center py-3">
                <div class="text-warning fw-bold display-6">14</div>
                <div class="text-muted small text-uppercase">Pending</div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm text-center py-3">
                <div class="text-success fw-bold display-6">98</div>
                <div class="text-muted small text-uppercase">Confirmed</div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm text-center py-3">
                <div class="text-danger fw-bold display-6">16</div>
                <div class="text-muted small text-uppercase">Cancelled</div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <div class="input-group">
                <span class="input-group-text bg-transparent border-end-0"><i class="fas fa-search text-muted"></i></span>
                <input type="text" class="form-control border-start-0" placeholder="Search bookings by ID, customer name, or vehicle...">
            </div>
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
                        <tr>
                            <td class="ps-4 fw-bold text-primary">#BK00124</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="bg-light rounded-circle text-dark d-flex align-items-center justify-content-center me-2 fw-bold" style="width: 32px; height: 32px;">JD</div>
                                    <span>John Doe</span>
                                </div>
                            </td>
                            <td>Toyota Prius <span class="badge bg-secondary ms-1">CAL-1234</span></td>
                            <td>Oil Change</td>
                            <td>Oct 24, 10:00 AM</td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                            <td class="text-end pe-4">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-light" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2 text-primary"></i>View Details</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-check me-2 text-success"></i>Confirm</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-times me-2 text-danger"></i>Cancel</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold text-primary">#BK00123</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="bg-light rounded-circle text-dark d-flex align-items-center justify-content-center me-2 fw-bold" style="width: 32px; height: 32px;">AS</div>
                                    <span>Alice Smith</span>
                                </div>
                            </td>
                            <td>Honda Civic <span class="badge bg-secondary ms-1">KBL-5678</span></td>
                            <td>Brake Service</td>
                            <td>Oct 24, 02:00 PM</td>
                            <td><span class="badge bg-success">Confirmed</span></td>
                            <td class="text-end pe-4">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-light" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2 text-primary"></i>View Details</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-check-double me-2 text-success"></i>Mark Completed</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <!-- More rows can be added here -->
                    </tbody>
                </table>
            </div>
            <div class="p-3 border-top d-flex justify-content-end">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
