@extends('admin.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}" class="text-decoration-none">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-1"></i> Back to Users
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- User Edit Card -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0 py-3">
                    <div class="d-flex align-items-center">
                        <div class="avatar-circle-sm me-3">
                            {{ strtoupper(substr($user->name, 0, 2)) }}
                        </div>
                        <h5 class="card-title mb-0">Edit User Information</h5>
                    </div>
                </div>
                <div class="card-body p-4">
                    <!-- Edit Form -->
                    <form method="POST" action="{{ route('user.update', $user->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="form-label text-uppercase small fw-semibold text-muted">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name', $user->name) }}"
                                    class="form-control form-control-lg border-0 bg-light @error('name') is-invalid @enderror"
                                    required
                                    placeholder="Enter user's full name"
                                >
                            </div>
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label text-uppercase small fw-semibold text-muted">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email', $user->email) }}"
                                    class="form-control form-control-lg border-0 bg-light @error('email') is-invalid @enderror"
                                    required
                                    placeholder="Enter user's email address"
                                >
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="type" class="form-label text-uppercase small fw-semibold text-muted">User Type</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="bi bi-shield-lock"></i>
                                </span>
                                <select
                                    id="type"
                                    name="type"
                                    class="form-select form-select-lg border-0 bg-light @error('type') is-invalid @enderror"
                                    required
                                >
                                    <option value="" disabled>Select user type</option>
                                    <option value="admin" {{ $user->type == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="HR" {{ $user->type == 'HR' ? 'selected' : '' }}>HR</option>
                                    <option value="applicant" {{ $user->type == 'applicant' ? 'selected' : '' }}>applicant</option>
                                    {{-- <option value="viewer" {{ $user->type == 'viewer' ? 'selected' : '' }}>Viewer</option> --}}
                                </select>
                            </div>
                            @error('type')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
{{--
                        <div class="mb-4">
                            <label for="password" class="form-label text-uppercase small fw-semibold text-muted">Password <span class="text-muted">(Leave blank to keep current password)</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="bi bi-key"></i>
                                </span>
                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    class="form-control form-control-lg border-0 bg-light @error('password') is-invalid @enderror"
                                    placeholder="Enter new password"
                                >
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        {{-- <div class="mb-4">
                            <label for="password_confirmation" class="form-label text-uppercase small fw-semibold text-muted">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="bi bi-key-fill"></i>
                                </span>
                                <input
                                    type="password"
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    class="form-control form-control-lg border-0 bg-light"
                                    placeholder="Confirm new password"
                                >
                            </div>
                        </div> --}}

                        <div class="d-flex justify-content-between mt-5">
                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-outline-secondary btn-lg px-4">
                                Cancel
                            </a>
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="bi bi-check-circle me-2"></i> Update User
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Additional Options Card -->
            {{-- <div class="card border-0 shadow-sm mt-4">
                <div class="card-header bg-transparent border-0 py-3">
                    <h5 class="card-title mb-0">Additional Options</h5>
                </div> --}}
                {{-- <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-grid">
                                <button class="btn btn-outline-warning btn-lg">
                                    <i class="bi bi-arrow-clockwise me-2"></i> Reset Password
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-grid">
                                <button class="btn btn-outline-danger btn-lg">
                                    <i class="bi bi-shield-lock me-2"></i> Disable Account
                                </button>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Custom styles for user edit page */
.avatar-circle-sm {
    width: 40px;
    height: 40px;
    background-color: rgba(13, 110, 253, 0.1);
    color: #0d6efd;
    font-size: 1rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}

.form-control-lg, .form-select-lg, .input-group-text {
    padding: 0.75rem 1rem;
    font-size: 1rem;
}

.input-group-text {
    color: #6c757d;
}

.form-control:focus, .form-select:focus {
    border-color: #86b7fe;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.invalid-feedback {
    font-size: 0.875rem;
    margin-top: 0.25rem;
}

.btn-lg {
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
}

.card {
    transition: all 0.2s ease;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .col-lg-8.mx-auto {
        padding: 0;
    }
}
</style>
@endsection
