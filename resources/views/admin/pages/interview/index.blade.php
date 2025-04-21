@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Interviews</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Interviews</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Interviews</h5>

                        <div class="text-end">
                            {{-- <a href="{{ route('interview.store') }}" class="btn btn-primary">Create Interview</a> --}}
                        </div>

                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>CV Review ID</th>
                                    <th>Status</th>
                                    <th>Interview Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($interviews as $interview)
                                    <tr>
                                        <td>{{ $interview->id }}</td>
                                        <td>{{ $interview->cv_review_id }}</td>
                                        <td>{{ $interview->status }}</td>
                                        <td>{{ $interview->interview_date }}</td>
                                        <td>
                                            <a href="{{ route('interview.edit', $interview->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('interview.destroy', $interview->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                {{-- <button type="submit" class="btn btn-danger"')">Delete</button> --}}
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
