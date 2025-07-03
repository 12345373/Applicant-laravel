@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-2 text-gray-800">Applicant Details</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('applicant.index') }}">Applicants</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile #{{ $applicant->id }}</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('applicant.index') }}" class="btn btn-outline-secondary me-2">
                <i class="bi bi-arrow-left"></i> Back to List
            </a>
            <a href="{{ route('applicant.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Add New Applicant
            </a>
        </div>
    </div>

    <!-- Alert Message -->
    @if (Session::has('done'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            {{ Session::get('done') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <!-- Applicant Profile Card -->
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h5 class="card-title m-0 font-weight-bold">
                        <i class="bi bi-person-badge me-2"></i>Applicant Information
                    </h5>
                    <span class="badge bg-primary">ID: {{ $applicant->id }}</span>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <div class="avatar-lg mx-auto mb-3">
                            <span class="avatar-title rounded-circle bg-light text-primary fs-1">
                                {{ substr($applicant->user->name, 0, 1) }}
                            </span>
                        </div>
                        <h3>{{ $applicant->user->name }}</h3>
                        <p class="text-muted mb-0">{{ $applicant->user->email }}</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="profile-info-card p-3 border rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-briefcase me-2 text-primary"></i>
                                    <h6 class="mb-0">Experience</h6>
                                </div>
                                <p class="mb-0">{{ $applicant->exp_years }} Years</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-info-card p-3 border rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-telephone me-2 text-primary"></i>
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <p class="mb-0">{{ $applicant->phone }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-info-card p-3 border rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-geo-alt me-2 text-primary"></i>
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <p class="mb-0">{{ $applicant->address }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-info-card p-3 border rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-mortarboard me-2 text-primary"></i>
                                    <h6 class="mb-0">Education</h6>
                                </div>
                                <p class="mb-0">{{ $applicant->education }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="profile-info-card p-3 border rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-linkedin me-2 text-primary"></i>
                                    <h6 class="mb-0">LinkedIn Profile</h6>
                                </div>
                                <a href="{{ $applicant->linkedIn }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-box-arrow-up-right me-1"></i>View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions Sidebar -->
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="card-title m-0 font-weight-bold">
                        <i class="bi bi-file-earmark-text me-2"></i>Resume
                    </h5>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <i class="bi bi-file-earmark-pdf text-danger" style="font-size: 4rem;"></i>
                        <h5 class="mt-3">Applicant CV</h5>
                        <p class="text-muted small">Review the applicant's resume to evaluate their qualifications</p>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="{{ route('applicant.download', $applicant->id) }}" class="btn btn-success">
                            <i class="bi bi-download me-1"></i>Download Resume
                        </a>
                    </div>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-header py-3">
                    <h5 class="card-title m-0 font-weight-bold">
                        <i class="bi bi-chat-square-text me-2"></i>Application Review
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-3">Add your evaluation and feedback for this applicant</p>
                    @if(Auth::user()->type == 'HR') <!-- التحقق من نوع المستخدم -->
                        <div class="d-grid">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-clipboard-check me-1"></i>Submit Review
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Review Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="bi bi-clipboard-check me-2"></i>Review Application: {{ $applicant->user->name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('cv_review.store', $applicant->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="status" class="form-label">Application Status</label>
                        <select name="status" class="form-select" id="status" required>
                            <option value="" disabled selected>-- Select Application Status --</option>
                            <option value="accepted">Accepted</option>
                            <option value="waiting">Under Review</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="notes" class="form-label">Feedback Notes</label>
                        <textarea class="form-control" name="notes" id="notes" rows="4" placeholder="Enter your feedback and comments here..."></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-send me-1"></i>Submit Review
                        </button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('styles')
<style>
    .avatar-lg {
        height: 5rem;
        width: 5rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .avatar-title {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .profile-info-card {
        transition: all 0.3s ease;
    }

    .profile-info-card:hover {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        transform: translateY(-2px);
    }
</style>
@endsection
