@extends('admin.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Create Applicant</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('applicant.index') }}" class="text-decoration-none">Applicants</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Applicant</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('applicant.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-1"></i> Back to Applicants
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <!-- Applicant Creation Card -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0 py-3">
                    <div class="d-flex align-items-center">
                        <div class="icon-circle me-3">
                            <i class="bi bi-person-plus"></i>
                        </div>
                        <h5 class="card-title mb-0">Applicant Information</h5>
                    </div>
                </div>
                <div class="card-body p-4">
                    <!-- Create Form -->
                    <form enctype="multipart/form-data" action="{{ route('applicant.store') }}" method="post">
                        @csrf

                        <!-- Personal Information Section -->
                        <div class="mb-4">
                            <h6 class="text-uppercase fw-semibold mb-3 border-bottom pb-2">Personal Information</h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label small fw-semibold text-muted">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-person"></i>
                                        </span>
                                        <input
                                            type="text"
                                            id="name"
                                            name="name"
                                            value="{{ old('name') }}"
                                            class="form-control border-0 bg-light @error('name') is-invalid @enderror"
                                            required
                                            placeholder="Enter applicant's full name"
                                        >
                                    </div>
                                    @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label small fw-semibold text-muted">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-envelope"></i>
                                        </span>
                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            value="{{ old('email') }}"
                                            class="form-control border-0 bg-light @error('email') is-invalid @enderror"
                                            required
                                            placeholder="Enter email address"
                                        >
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label small fw-semibold text-muted">Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-telephone"></i>
                                        </span>
                                        <input
                                            type="text"
                                            id="phone"
                                            name="phone"
                                            value="{{ old('phone') }}"
                                            class="form-control border-0 bg-light @error('phone') is-invalid @enderror"
                                            required
                                            placeholder="Enter phone number"
                                        >
                                    </div>
                                    @error('phone')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="address" class="form-label small fw-semibold text-muted">Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-geo-alt"></i>
                                        </span>
                                        <input
                                            type="text"
                                            id="address"
                                            name="address"
                                            value="{{ old('address') }}"
                                            class="form-control border-0 bg-light @error('address') is-invalid @enderror"
                                            required
                                            placeholder="Enter address"
                                        >
                                    </div>
                                    @error('address')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Professional Information Section -->
                        <div class="mb-4">
                            <h6 class="text-uppercase fw-semibold mb-3 border-bottom pb-2">Professional Information</h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="position" class="form-label small fw-semibold text-muted">Position Applied For</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-briefcase"></i>
                                        </span>
                                        <input
                                            type="text"
                                            id="position"
                                            name="position"
                                            value="{{ old('position') }}"
                                            class="form-control border-0 bg-light @error('position') is-invalid @enderror"
                                            required
                                            placeholder="Enter position"
                                        >
                                    </div>
                                    @error('position')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="exp_years" class="form-label small fw-semibold text-muted">Years of Experience</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-calendar-check"></i>
                                        </span>
                                        <input
                                            type="number"
                                            id="exp_years"
                                            name="exp_years"
                                            value="{{ old('exp_years') }}"
                                            class="form-control border-0 bg-light @error('exp_years') is-invalid @enderror"
                                            required
                                            min="0"
                                            step="0.5"
                                            placeholder="Enter years of experience"
                                        >
                                    </div>
                                    @error('exp_years')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="education" class="form-label small fw-semibold text-muted">Education</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-mortarboard"></i>
                                        </span>
                                        <input
                                            type="text"
                                            id="education"
                                            name="education"
                                            value="{{ old('education') }}"
                                            class="form-control border-0 bg-light @error('education') is-invalid @enderror"
                                            required
                                            placeholder="Enter highest education"
                                        >
                                    </div>
                                    @error('education')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="linkedIn" class="form-label small fw-semibold text-muted">LinkedIn Profile</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-linkedin"></i>
                                        </span>
                                        <input
                                            type="url"
                                            id="linkedIn"
                                            name="linkedIn"
                                            value="{{ old('linkedIn') }}"
                                            class="form-control border-0 bg-light @error('linkedIn') is-invalid @enderror"
                                            placeholder="Enter LinkedIn URL"
                                        >
                                    </div>
                                    @error('linkedIn')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="cv" class="form-label small fw-semibold text-muted">CV/Resume</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-file-earmark-pdf"></i>
                                        </span>
                                        <input
                                            type="file"
                                            id="cv"
                                            name="cv"
                                            class="form-control border-0 bg-light @error('cv') is-invalid @enderror"
                                            required
                                            accept=".pdf,.doc,.docx"
                                        >
                                    </div>
                                    @error('cv')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">Accepted formats: PDF, DOC, DOCX. Max size: 5MB</div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Notes Section -->
                        {{-- <div class="mb-4">
                            <h6 class="text-uppercase fw-semibold mb-3 border-bottom pb-2">Additional Notes</h6>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="notes" class="form-label small fw-semibold text-muted">Notes</label>
                                    <textarea
                                        id="notes"
                                        name="notes"
                                        class="form-control border-0 bg-light @error('notes') is-invalid @enderror"
                                        rows="3"
                                        placeholder="Enter any additional notes about the applicant"
                                    >{{ old('notes') }}</textarea>
                                    @error('notes')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div> --}}

                        <div class="d-flex justify-content-between mt-5">
                            <button type="reset" class="btn btn-outline-secondary px-4">
                                <i class="bi bi-arrow-counterclockwise me-2"></i> Reset
                            </button>
                            <button type="submit" class="btn btn-primary px-5">
                                <i class="bi bi-save me-2"></i> Save Applicant
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Custom styles for applicant creation page */
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

.card {
    transition: all 0.2s ease;
}

.form-text {
    font-size: 0.75rem;
    color: #6c757d;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .col-lg-10.mx-auto {
        padding: 0;
    }
}
</style>
@endsection
