@extends('layouts.admin')

@section('title', 'Services Management')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold text-dark mb-0">Services</h2>
            <p class="text-muted mb-0">Manage your service offerings</p>
        </div>
        <button type="button" class="btn btn-primary d-flex align-items-center gap-2 w-100 w-md-auto flex-fill justify-content-center" data-bs-toggle="modal" data-bs-target="#addServiceModal">
            <i class="fas fa-plus"></i>
            <span>Add Service</span>
        </button>
    </div>

    <!-- Search Bar -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <form action="{{ route('admin.services') }}" method="GET">
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-end-0"><i class="fas fa-search text-muted"></i></span>
                    <input type="text" name="search" class="form-control border-start-0" placeholder="Search services by name or description..." value="{{ request('search') }}">
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
                            <th class="ps-4 py-3">Service Name</th>
                            <th class="py-3">Description</th>
                            <th class="py-3">Price (LKR)</th>
                            <th class="py-3">Estimated Time</th>
                            <th class="text-end pe-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($services as $service)
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded p-2 me-3">
                                        <i class="{{ $service->icon ?? 'fas fa-wrench' }} fa-lg"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold">{{ $service->name }}</div>
                                        <small class="text-muted">{{ Str::limit($service->description, 50) }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>LKR {{ number_format($service->price) }}</td>
                            <td>{{ $service->estimated_time ?? 'N/A' }}</td>
                            <td class="text-end pe-4">
                                <button type="button" class="btn btn-sm btn-light me-1" data-bs-toggle="modal" data-bs-target="#editServiceModal{{ $service->id }}">
                                    <i class="fas fa-edit text-secondary"></i>
                                </button>
                                <form action="{{ route('admin.services.delete', $service) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this service?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-light">
                                        <i class="fas fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Edit Service Modal -->
                        <div class="modal fade" id="editServiceModal{{ $service->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Service</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <form action="{{ route('admin.services.update', $service) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Service Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="name" value="{{ $service->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="description" rows="3" required>{{ $service->description }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Price (LKR) <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="price" value="{{ $service->price }}" required min="0">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Icon Class</label>
                                                <input type="text" class="form-control" name="icon" value="{{ $service->icon }}" placeholder="e.g., fas fa-oil-can">
                                                <small class="text-muted">FontAwesome icon class</small>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Estimated Time</label>
                                                <input type="text" class="form-control" name="estimated_time" value="{{ $service->estimated_time }}" placeholder="e.g., 30 minutes">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update Service</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-5 text-muted">
                                <i class="fas fa-tools fa-3x mb-3 d-block"></i>
                                <p class="mb-0">No services found</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
                </table>
            </div>
            
            <div class="p-3 border-top d-flex justify-content-end">
                {{ $services->links() }}
            </div>
        </div>
    </div>

    <!-- Add Service Modal -->
    <div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addServiceModalLabel">Add New Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.services.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Service Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" required placeholder="e.g., Oil Change & Filter">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description" rows="3" required placeholder="Describe the service..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price (LKR) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="price" required min="0" placeholder="e.g., 5000">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Icon Class</label>
                            <input type="text" class="form-control" name="icon" placeholder="e.g., fas fa-oil-can">
                            <small class="text-muted">FontAwesome icon class (optional)</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Estimated Time</label>
                            <input type="text" class="form-control" name="estimated_time" placeholder="e.g., 30 minutes">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
