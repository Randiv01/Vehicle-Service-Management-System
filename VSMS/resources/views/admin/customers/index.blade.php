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
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=John+Doe&background=random" class="rounded-circle me-3" width="40" height="40">
                                    <div>
                                        <div class="fw-bold">John Doe</div>
                                        <small class="text-muted">Toyota Prius</small>
                                    </div>
                                </div>
                            </td>
                            <td>john@example.com</td>
                            <td>+94 77 123 4567</td>
                            <td>Jan 10, 2024</td>
                            <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                            <td class="text-end pe-4">
                                <button class="btn btn-sm btn-outline-primary rounded-circle"><i class="fas fa-envelope"></i></button>
                                <button class="btn btn-sm btn-outline-secondary rounded-circle ms-1"><i class="fas fa-edit"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Alice+Smith&background=random" class="rounded-circle me-3" width="40" height="40">
                                    <div>
                                        <div class="fw-bold">Alice Smith</div>
                                        <small class="text-muted">Honda Civic</small>
                                    </div>
                                </div>
                            </td>
                            <td>alice@example.com</td>
                            <td>+94 71 987 6543</td>
                            <td>Jan 12, 2024</td>
                            <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                            <td class="text-end pe-4">
                                <button class="btn btn-sm btn-outline-primary rounded-circle"><i class="fas fa-envelope"></i></button>
                                <button class="btn btn-sm btn-outline-secondary rounded-circle ms-1"><i class="fas fa-edit"></i></button>
                            </td>
                        </tr>
                        <!-- More rows... -->
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
