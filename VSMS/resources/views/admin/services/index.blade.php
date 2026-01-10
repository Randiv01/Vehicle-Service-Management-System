@extends('layouts.admin')

@section('title', 'Services Management')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold text-dark mb-0">Services</h2>
            <p class="text-muted mb-0">Manage your service offerings</p>
        </div>
        <button class="btn btn-primary d-flex align-items-center gap-2 w-100 w-md-auto justify-content-center">
            <i class="fas fa-plus"></i>
            <span>Add Service</span>
        </button>
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
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fas fa-oil-can"></i>
                                    </div>
                                    <span class="fw-bold">Oil Change & Filter</span>
                                </div>
                            </td>
                            <td>Regular oil changes extend engine life...</td>
                            <td class="fw-bold">15,000</td>
                            <td>45 mins</td>
                            <td class="text-end pe-4">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fas fa-car-burst"></i>
                                    </div>
                                    <span class="fw-bold">Brake Service</span>
                                </div>
                            </td>
                            <td>Complete brake inspection, pad repla...</td>
                            <td class="fw-bold">27,000</td>
                            <td>2 hours</td>
                            <td class="text-end pe-4">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fas fa-laptop-medical"></i>
                                    </div>
                                    <span class="fw-bold">Engine Diagnostics</span>
                                </div>
                            </td>
                            <td>Advanced computer diagnostics...</td>
                            <td class="fw-bold">24,000</td>
                            <td>1 hour</td>
                            <td class="text-end pe-4">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-info bg-opacity-10 text-info rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                    <span class="fw-bold">AC Service</span>
                                </div>
                            </td>
                            <td>AC recharge, leak detection...</td>
                            <td class="fw-bold">30,000</td>
                            <td>1.5 hours</td>
                            <td class="text-end pe-4">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="p-3 border-top d-flex justify-content-between align-items-center">
                <span class="text-muted small">Showing 1 to 4 of 12 entries</span>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
