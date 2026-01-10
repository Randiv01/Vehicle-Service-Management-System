@extends('layouts.admin')

@section('title', 'Customer Management')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold text-dark mb-0">Customers</h2>
            <p class="text-muted mb-0">View registered customers</p>
        </div>
        <button type="button" class="btn btn-primary d-flex align-items-center gap-2 w-100 w-md-auto justify-content-center" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
            <i class="fas fa-user-plus"></i>
            <span>Add Customer</span>
        </button>
    </div>

    <!-- Search Bar -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <form action="{{ route('admin.customers') }}" method="GET">
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-end-0"><i class="fas fa-search text-muted"></i></span>
                    <input type="text" name="search" class="form-control border-start-0" placeholder="Search customers by name or email..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
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
                                <button type="button" class="btn btn-sm btn-light me-1" data-bs-toggle="modal" data-bs-target="#editCustomerModal{{ $customer->id }}">
                                    <i class="fas fa-edit text-secondary"></i>
                                </button>
                                <form action="{{ route('admin.customers.delete', $customer) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this customer?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-light">
                                        <i class="fas fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Edit Customer Modal -->
                        <div class="modal fade" id="editCustomerModal{{ $customer->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Customer</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <form action="{{ route('admin.customers.update', $customer) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" name="email" value="{{ $customer->email }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">New Password</label>
                                                <input type="password" class="form-control" name="password" minlength="8">
                                                <small class="text-muted">Leave blank to keep current password</small>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update Customer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                {{ $customers->links() }}
            </div>
        </div>
    </div>

    <!-- Add Customer Modal -->
    <div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCustomerModalLabel">Add New Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.customers.create') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" required minlength="8">
                            <small class="text-muted">Minimum 8 characters</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create Customer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
