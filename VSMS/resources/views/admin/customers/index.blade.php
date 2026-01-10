@extends('layouts.admin')

@section('title', 'Customer Management')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold text-dark mb-0">Customers</h2>
            <p class="text-muted mb-0">View registered customers</p>
        </div>
        <button class="btn btn-primary d-flex align-items-center gap-2 w-100 w-md-auto justify-content-center">
            <i class="fas fa-user-plus"></i>
            <span>Add Customer</span>
        </button>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 py-3">Customer</th>
                            <th class="py-3">Email</th>
                            <th class="py-3">Phone</th>
                            <th class="py-3">Registered On</th>
                            <th class="py-3">Status</th>
                            <th class="text-end pe-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($customers as $customer)
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 fw-bold" style="width: 40px; height: 40px;">
                                        {{ strtoupper(substr($customer->name, 0, 2)) }}
                                    </div>
                                    <div>
                                        <div class="fw-bold">{{ $customer->name }}</div>
                                        <small class="text-muted">Customer ID: #{{ str_pad($customer->id, 4, '0', STR_PAD_LEFT) }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone ?? 'N/A' }}</td>
                            <td>{{ $customer->created_at->format('M d, Y') }}</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td class="text-end pe-4">
                                <button class="btn btn-sm btn-light me-1"><i class="fas fa-envelope text-primary"></i></button>
                                <button class="btn btn-sm btn-light"><i class="fas fa-edit text-secondary"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <i class="fas fa-users fa-3x mb-3 d-block"></i>
                                <p class="mb-0">No customers found</p>
                            </td>
                        </tr>
                    @endforelse
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
