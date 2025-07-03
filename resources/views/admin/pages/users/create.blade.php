@extends('admin.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Create New User</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}" class="text-decoration-none">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create User</li>
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
            <!-- User Creation Card -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0 py-3">
                    <div class="d-flex align-items-center">
                        <div class="icon-circle me-3">
                            <i class="bi bi-person-plus"></i>
                        </div>
                        <h5 class="card-title mb-0">User Information</h5>
                    </div>
                </div>
                <div class="card-body p-4">
                    <!-- Create Form -->
                    <form action="{{ route('user.store') }}" method="post">
                        @csrf

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
                                    value="{{ old('name') }}"
                                    class="form-control form-control-lg border-0 bg-light @error('name') is-invalid @enderror"
                                    required
                                    placeholder="Enter user's full name"
                                >
                            </div>
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Enter the user's full name as it will appear in the system.</div>
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
                                    value="{{ old('email') }}"
                                    class="form-control form-control-lg border-0 bg-light @error('email') is-invalid @enderror"
                                    required
                                    placeholder="Enter user's email address"
                                >
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            <div class="form-text">This email will be used for login and notifications.</div>
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
                                    <option value="" disabled selected>Select user type</option>
                                    <option value="HR" {{ old('type') == 'HR' ? 'selected' : '' }}>HR</option>
                                    <option value="admin" {{ old('type') == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="applicant" {{ old('type') == 'applicant' ? 'selected' : '' }}>Applicant</option>
                                </select>
                            </div>
                            @error('type')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            <div class="form-text">The user type determines access permissions in the system.</div>
                        </div>

                        {{-- <div class="mb-4">
                            <label for="password" class="form-label text-uppercase small fw-semibold text-muted">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="bi bi-key"></i>
                                </span>
                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    class="form-control form-control-lg border-0 bg-light @error('password') is-invalid @enderror"
                                    required
                                    placeholder="Enter password"
                                >
                                <button class="btn btn-light border-0" type="button" id="togglePassword">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Password must be at least 8 characters long.</div>
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
                                    required
                                    placeholder="Confirm password"
                                >
                            </div>
                        </div> --}}

                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="sendWelcomeEmail" name="send_welcome_email" checked>
                                <label class="form-check-label" for="sendWelcomeEmail">
                                    Send welcome email with login instructions
                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-5">
                            <button type="reset" class="btn btn-outline-secondary btn-lg px-4">
                                <i class="bi bi-arrow-counterclockwise me-2"></i> Reset
                            </button>
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="bi bi-person-plus me-2"></i> Create User
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Quick Tips Card -->
            {{-- <div class="card border-0 shadow-sm mt-4">
                <div class="card-header bg-transparent border-0 py-3">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-lightbulb me-2 text-warning"></i> Quick Tips
                    </h5>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tip-item mb-3">
                                <h6 class="fw-bold"><i class="bi bi-check-circle text-success me-2"></i> Strong Passwords</h6>
                                <p class="text-muted small mb-0">Use a combination of letters, numbers, and special characters.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tip-item mb-3">
                                <h6 class="fw-bold"><i class="bi bi-check-circle text-success me-2"></i> User Types</h6>
                                <p class="text-muted small mb-0">Assign appropriate user type based on job responsibilities.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tip-item">
                                <h6 class="fw-bold"><i class="bi bi-check-circle text-success me-2"></i> Email Verification</h6>
                                <p class="text-muted small mb-0">Ensure the email address is correct for account verification.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tip-item">
                                <h6 class="fw-bold"><i class="bi bi-check-circle text-success me-2"></i> Bulk Creation</h6>
                                <p class="text-muted small mb-0">Need to add multiple users? Use the import feature.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<style>
/* Custom styles for user creation page */
.icon-circle {
    width: 40px;
    height: 40px;
    background-color: rgba(13, 110, 253, 0.1);
    color: #0d6efd;
    font-size: 1.25rem;
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

.form-text {
    font-size: 0.75rem;
    color: #6c757d;
}

.tip-item {
    padding: 0.5rem;
    border-radius: 0.25rem;
    transition: all 0.2s ease;
}

.tip-item:hover {
    background-color: rgba(0, 0, 0, 0.02);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .col-lg-8.mx-auto {
        padding: 0;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // Toggle eye icon
        this.querySelector('i').classList.toggle('bi-eye');
        this.querySelector('i').classList.toggle('bi-eye-slash');
    });
});
</script>
@endsection
