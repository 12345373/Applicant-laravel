@extends('admin.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Data Tables</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item text-muted">Tables</li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Alert Message -->
    @if (Session::has('done'))
    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
        <div class="d-flex align-items-center">
            <i class="bi bi-check-circle-fill me-2"></i>
            <strong>Success!</strong> {{ Session::get('done') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Data Table Card -->
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center py-3">
            <h5 class="card-title mb-0">Users List</h5>
            <a href="{{ route('user.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i> Create New
            </a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table datatable table-hover align-middle">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td class="ps-4">{{ $loop->iteration }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm me-2 bg-primary-subtle rounded-circle">
                                        {{ substr($item->name, 0, 2) }}
                                    </div>
                                    <span>{{ $item->name }}</span>
                                </div>
                            </td>
                            <td>{{ $item->email }}</td>
                            <td>
                                @if($item->type == 'admin')
                                <span class="badge bg-primary-subtle text-primary rounded-pill">Admin</span>
                                @elseif($item->type == 'editor')
                                <span class="badge bg-success-subtle text-success rounded-pill">Editor</span>
                                @else
                                <span class="badge bg-secondary-subtle text-secondary rounded-pill">{{ $item->type }}</span>
                                @endif
                            </td>
                            <td class="text-end pe-4">
                                <a href="{{ route('user.show', $item->id) }}" class="btn btn-sm btn-light">
                                    <i class="bi bi-eye"></i> View
                                </a>
                                {{-- <a href="#" class="btn btn-sm btn-light">
                                    <i class="bi bi-pencil"></i> Edit
                                </a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-transparent border-0 text-center py-3">
            <small class="text-muted">Showing {{ count($users) }} users</small>
        </div>
    </div>
</div>

<style>
/* Custom styles for the data table */
.avatar {
    width: 2rem;
    height: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 0.75rem;
}

.avatar-sm {
    width: 1.75rem;
    height: 1.75rem;
    font-size: 0.7rem;
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

.table th {
    font-weight: 600;
    color: #495057;
}

.badge.rounded-pill {
    padding: 0.35em 0.65em;
    font-weight: 500;
}

.btn-light {
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-light:hover {
    background-color: #e9ecef;
    border-color: #e9ecef;
}

/* Datatable customization */
.datatable thead th {
    border-bottom: 2px solid #e9ecef;
}

.datatable tbody tr:hover {
    background-color: rgba(0, 0, 0, 0.02);
}
</style>
@endsection
