@extends('layouts.admin')

@section('title', 'Admin Management')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold text-dark mb-0">Admins</h2>
            <p class="text-muted mb-0">Manage system administrators</p>
        </div>
        <button type="button" class="btn btn-primary d-flex align-items-center gap-2 w-100 w-md-auto justify-content-center" data-bs-toggle="modal" data-bs-target="#addAdminModal">
            <i class="fas fa-user-shield"></i>
            <span>Add Admin</span>
        </button>
    </div>

    <!-- Search Bar -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <form action="{{ route('admin.admins') }}" method="GET">
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-end-0"><i class="fas fa-search text-muted"></i></span>
                    <input type="text" name="search" class="form-control border-start-0" placeholder="Search admins by name or email..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 py-3">Admin</th>
                            <th class="py-3">Email</th>
                            <th class="py-3">Status</th>
                            <th class="py-3">Joined On</th>
                            <th class="text-end pe-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($admins as $admin)
                            <tr>
                                <td class="ps-4">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3 fw-bold" style="width: 40px; height: 40px;">
                                            {{ strtoupper(substr($admin->name, 0, 2)) }}
                                        </div>
                                        <div>
                                            <div class="fw-bold">{{ $admin->name }}</div>
                                            <small class="text-muted">Administrator</small>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $admin->email }}</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>{{ $admin->created_at->format('M d, Y') }}</td>
                                <td class="text-end pe-4">
                                    <button type="button" class="btn btn-sm btn-light me-1" data-bs-toggle="modal" data-bs-target="#editAdminModal{{ $admin->id }}">
                                        <i class="fas fa-edit text-secondary"></i>
                                    </button>
                                    @if(auth()->id() !== $admin->id)
                                        <form action="{{ route('admin.admins.delete', $admin) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this admin?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-light" title="Delete Admin">
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    @else
                                        <button type="button" class="btn btn-sm btn-light" disabled title="You cannot delete yourself">
                                            <i class="fas fa-trash text-muted"></i>
                                        </button>
                                    @endif
                                </td>
                            </tr>

                            <!-- Edit Admin Modal -->
                            <div class="modal fade" id="editAdminModal{{ $admin->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Admin</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <form action="{{ route('admin.admins.update', $admin) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name" value="{{ $admin->name }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" name="email" value="{{ $admin->email }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">New Password</label>
                                                    <input type="password" class="form-control" name="password" minlength="8">
                                                    <small class="text-muted">Leave blank to keep current password</small>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-dark">Update Admin</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-5 text-muted">
                                    <i class="fas fa-user-shield fa-3x mb-3 d-block"></i>
                                    <p class="mb-0">No admins found</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="p-3 border-top d-flex justify-content-end">
                {{ $admins->links() }}
            </div>
        </div>
    </div>

    <!-- Add Admin Modal -->
    <div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAdminModalLabel">Add New Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.admins.create') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" required placeholder="Full Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" required placeholder="email@example.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" required minlength="8">
                            <small class="text-muted">Minimum 8 characters</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create Admin Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
