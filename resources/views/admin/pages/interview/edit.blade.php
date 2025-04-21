@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Edit Interview</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('interview.index') }}">Interviews</a></li>
                <li class="breadcrumb-item active">Edit Interview</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Interview</h5>

                        <form action="{{ route('interview.update', $interview->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="cv_review_id" class="form-label">CV Review ID</label>
                                <input type="text" class="form-control" name="cv_review_id" value="{{ $interview->cv_review_id }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="noaction" {{ $interview->status == 'noaction' ? 'selected' : '' }}>noaction</option>
                                    <option value="ABS" {{ $interview->status == 'ABS' ? 'selected' : '' }}>ABS</option>
                                    <option value="late" {{ $interview->status == 'late' ? 'selected' : '' }}>Late</option>
                                    <!-- هنا يمكنك إضافة المزيد من القيم إذا لزم الأمر -->
                                </select>
                                <!-- إضافة النص مع الـ label -->
                                <small class="form-text text-muted">
                                    The status can be either "ABS" or "Late" or "no action".
                                </small>
                            </div>

                            <div class="mb-3">
                                <label for="interview_date" class="form-label">Interview Date</label>
                                <input type="datetime-local" class="form-control" name="interview_date" value="{{ \Carbon\Carbon::parse($interview->interview_date)->format('Y-m-d\TH:i') }}" required>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
