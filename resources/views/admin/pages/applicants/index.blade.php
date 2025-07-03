@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-2 text-gray-800">Applicants Management</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Management</li>
                    <li class="breadcrumb-item active" aria-current="page">Applicants</li>
                </ol>
            </nav>
        </div>
        <a href="{{ route('applicant.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>Add New Applicant
        </a>
    </div>

    <!-- Alert Message -->
    @if (Session::has('done'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            {{ Session::get('done') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Main Content Card -->
    <div class="card shadow">
        <div class="card-header py-3 bg-light">
            <h5 class="card-title m-0 font-weight-bold">Applicants Directory</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle" id="applicantsTable">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Position</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applicants as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-light rounded-circle text-center me-2">
                                            <span class="text-primary">{{ substr($item->user->name, 0, 1) }}</span>
                                        </div>
                                        <span>{{ $item->user->name }}</span>
                                    </div>
                                </td>
                                <td>{{ $item->user->email }}</td>
                                <td><span class="badge bg-info">{{ $item->position }}</span></td>
                                <td>
                                    @if($item->status == 'pending')
                                        <span class="badge bg-warning">Pending</span>
                                    @elseif($item->status == 'approved')
                                        <span class="badge bg-success">Approved</span>
                                    @elseif($item->status == 'rejected')
                                        <span class="badge bg-danger">Rejected</span>
                                    @else
                                        <span class="badge bg-secondary">Under Review</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('applicant.show', $item->id) }}" class="btn btn-sm btn-primary">
                                            <i class="bi bi-eye"></i> View
                                        </a>
                                        {{-- <a href="{{ route('', $item->id) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a> --}}
                                        {{-- <form action="{{ route('', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this applicant?')">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#applicantsTable').DataTable({
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search applicants...",
            },
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
@endsection
