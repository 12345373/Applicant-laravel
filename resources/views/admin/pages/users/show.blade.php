@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>User Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">User Details</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Information</h5>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">User Details</h5>

                                <!-- User Details -->
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="profile-info-item">
                                            <label class="form-label fw-bold">Admin Name</label>
                                            <div class="form-control bg-light">{{ $user->name }}</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="profile-info-item">
                                            <label class="form-label fw-bold">Email</label>
                                            <div class="form-control bg-light">{{ $user->email }}</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="profile-info-item">
                                            <label class="form-label fw-bold">User Type</label>
                                            <div class="form-control bg-light">{{ $user->type }}</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="profile-info-item">
                                            <label class="form-label fw-bold">Created At</label>
                                            <div class="form-control bg-light">{{ $user->created_at->format('d M Y, h:i A') }}</div>
                                        </div>
                                    </div>

                                    <div class="text-center mt-4">
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('user.index') }}" class="btn btn-secondary">Back to List</a>

                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"')">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
