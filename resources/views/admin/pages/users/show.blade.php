@extends('admin.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">User Details</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}" class="text-decoration-none">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Details</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-1"></i> Back to List
            </a>
        </div>
    </div>

    <div class="row">
        <!-- User Profile Card -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body text-center p-4">
                    <div class="user-avatar mb-3 mx-auto">
                        <div class="avatar-circle">
                            {{ strtoupper(substr($user->name, 0, 2)) }}
                        </div>
                    </div>
                    <h4 class="mb-1">{{ $user->name }}</h4>
                    <p class="text-muted mb-3">{{ $user->email }}</p>

                    <div class="d-flex justify-content-center mb-3">
                        <span class="badge rounded-pill
                            @if($user->type == 'admin')
                                bg-primary-subtle text-primary
                            @elseif($user->type == 'editor')
                                bg-success-subtle text-success
                            @else
                                bg-secondary-subtle text-secondary
                            @endif
                            px-3 py-2">
                            {{ ucfirst($user->type) }}
                        </span>
                    </div>

                    <div class="d-flex justify-content-center gap-2 mt-4">
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">
                            <i class="bi bi-pencil me-1"></i> Edit
                        </a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">
                                <i class="bi bi-trash me-1"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Details Card -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0 py-3">
                    <h5 class="card-title mb-0">User Information</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="detail-item">
                                <h6 class="text-uppercase text-muted fw-semibold small mb-2">Full Name</h6>
                                <p class="mb-0 fs-5">{{ $user->name }}</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="detail-item">
                                <h6 class="text-uppercase text-muted fw-semibold small mb-2">Email Address</h6>
                                <p class="mb-0 fs-5">{{ $user->email }}</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="detail-item">
                                <h6 class="text-uppercase text-muted fw-semibold small mb-2">User Type</h6>
                                <p class="mb-0 fs-5">{{ ucfirst($user->type) }}</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="detail-item">
                                <h6 class="text-uppercase text-muted fw-semibold small mb-2">Created At</h6>
                                <p class="mb-0 fs-5">{{ $user->created_at->format('d M Y, h:i A') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-top pt-4 mt-2">
                        <h6 class="text-uppercase text-muted fw-semibold small mb-3">Account Activity</h6>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="activity-stat p-3 bg-light rounded">
                                    <h2 class="mb-1 fw-bold">{{ rand(5, 50) }}</h2>
                                    <p class="text-muted mb-0 small">Total Logins</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="activity-stat p-3 bg-light rounded">
                                    <h2 class="mb-1 fw-bold">{{ rand(1, 20) }}</h2>
                                    <p class="text-muted mb-0 small">Actions Today</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="activity-stat p-3 bg-light rounded">
                                    <h2 class="mb-1 fw-bold">{{ rand(1, 30) }} days</h2>
                                    <p class="text-muted mb-0 small">Last Active</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Custom styles for user details page */
.avatar-circle {
    width: 100px;
    height: 100px;
    background-color: rgba(13, 110, 253, 0.1);
    color: #0d6efd;
    font-size: 2.5rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    margin: 0 auto;
}

.bg-primary-subtle {
    background-color: rgba(13, 110, 253, 0.1);
}

.bg-success-subtle {
    background-color: rgba(25, 135, 84, 0.1);
}

.bg-secondary-subtle {
    background-color: rgba(108, 117, 125, 0.1);
}

.text-primary {
    color: #0d6efd !important;
}

.text-success {
    color: #198754 !important;
}

.text-secondary {
    color: #6c757d !important;
}

.card {
    transition: all 0.2s ease;
}

.badge.rounded-pill {
    font-weight: 500;
}

.detail-item {
    padding: 0.5rem 0;
}

.activity-stat {
    transition: all 0.2s ease;
}

.activity-stat:hover {
    transform: translateY(-2px);
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
}
</style>
@endsection
