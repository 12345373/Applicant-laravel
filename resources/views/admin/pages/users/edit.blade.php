@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Edit User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
                <li class="breadcrumb-item active">Edit User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit User Information</h5>

                        <!-- Edit Form -->
                        <form method="POST" action="{{ route('user.update', $user->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label fw-bold">Name</label>
                                    <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Email</label>
                                    <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">User Type</label>
                                    <select name="type" class="form-control" required>
                                        <option value="admin" {{ $user->type == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="HR" {{ $user->type == 'HR' ? 'selected' : '' }}>HR</option>
                                        <!-- أضف أنواع إضافية لو عندك -->
                                    </select>
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{ route('user.index') }}" class="btn btn-secondary">Back to List</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
