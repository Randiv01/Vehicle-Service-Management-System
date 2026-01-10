@extends($user->role === 'admin' ? 'layouts.admin' : 'layouts.app')

@section('title', 'My Profile')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="card-body p-4 p-md-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="h4 mb-0 fw-bold text-primary">Edit Profile</h2>
                        <a href="{{ $user->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                            <i class="fas fa-arrow-left me-1"></i> Back to Dashboard
                        </a>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

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

                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="text-center mb-5">
                            <div class="position-relative d-inline-block">
                                <img id="avatar-preview" src="{{ $user->avatar ? asset('storage/' . $user->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&background=0D6EFD&color=fff&size=128' }}" 
                                     alt="Profile Picture" class="rounded-circle shadow" style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #fff;">
                                <label for="avatar" class="position-absolute bottom-0 end-0 bg-primary text-white rounded-circle p-2 cursor-pointer shadow-sm" style="width: 40px; height: 40px; transform: translate(10%, 10%);">
                                    <i class="fas fa-camera"></i>
                                    <input type="file" id="avatar" name="avatar" class="d-none" accept="image/*" onchange="previewImage(this)">
                                </label>
                            </div>
                            <p class="text-muted mt-3 small">Allowed types: png, jpg, jpeg. Max 2MB.</p>
                        </div>

                        <div class="row g-4">
                            <!-- Basic Information Section -->
                            <div class="col-12 border-bottom pb-2 mb-2">
                                <h5 class="fw-bold text-dark"><i class="fas fa-info-circle me-2 text-primary"></i>Basic Information</h5>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fas fa-user text-muted"></i></span>
                                    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fas fa-envelope text-muted"></i></span>
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fas fa-phone text-muted"></i></span>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}" placeholder="+1 (555) 000-0000">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fas fa-map-marker-alt text-muted"></i></span>
                                    <textarea name="address" class="form-control" rows="2" placeholder="Your street address...">{{ old('address', $user->address) }}</textarea>
                                </div>
                            </div>

                            <!-- Password Section -->
                            <div class="col-12 border-bottom pb-2 mt-5 mb-2">
                                <h5 class="fw-bold text-dark"><i class="fas fa-key me-2 text-primary"></i>Security Defaults</h5>
                                <p class="text-muted small">Only fill if you want to change your password</p>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Current Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fas fa-lock text-muted"></i></span>
                                    <input type="password" name="current_password" class="form-control" placeholder="Enter current password...">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">New Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fas fa-shield-alt text-muted"></i></span>
                                    <input type="password" name="new_password" class="form-control" placeholder="Minimum 8 characters">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Confirm New Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fas fa-check-double text-muted"></i></span>
                                    <input type="password" name="new_password_confirmation" class="form-control" placeholder="Re-type new password">
                                </div>
                            </div>

                            <div class="col-12 mt-5">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary px-5 py-2 fw-bold rounded-pill">
                                        <i class="fas fa-save me-2"></i>Save Profile Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('avatar-preview').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<style>
.cursor-pointer {
    cursor: pointer;
}
.btn-primary {
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
}
.form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.1);
}
</style>
@endsection
