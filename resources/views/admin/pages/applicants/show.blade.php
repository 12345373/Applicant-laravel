@extends('admin.layouts.app')



@section('content')
    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @if (Session::has('done'))
                    <div class="alert alert-success">
                        {{ Session::get('done') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Show Applicants {{ $applicant->id }}
                            <a class=" float-end btn btn-info" href="{{ route('applicant.create') }}">Create New</a>
                        </h5>
                        <div class="text-center">
                            <h4 class="card-title">Name : {{ $applicant->user->name }}</h4>
                            <hr>
                            <h4 class="card-title">Email : {{ $applicant->user->email }}</h4>
                            <hr>
                            <h4 class="card-title">exp_years : {{ $applicant->exp_years }}</h4>
                            <hr>
                            <h4 class="card-title">address : {{ $applicant->address }}</h4>
                            <hr>
                            <h4 class="card-title">phone : {{ $applicant->phone }}</h4>
                            <hr>
                            <h4 class="card-title">education : {{ $applicant->education }}</h4>
                            <hr>
                            <h4 class="card-title">linkedIn : <a href="{{ $applicant->linkedIn }}">LinkedIn</a> </h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-grid">
                                        <a href="{{ route('applicant.download', $applicant->id) }}"
                                            class="btn btn-success my-3">
                                            Download File From Here
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Create Cv_ReView
                                        </button>
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





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Review For {{ $applicant->user->name }} </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('cv_review.store', $applicant->id) }}">
                    @csrf
                    <div class="form-group">
                        <select name="status" class="form-control" id="">
                            <option disabled selected> -- Select Status -- </option>
                            <option value="accepted">accepted</option>
                            <option value="waiting">waiting</option>
                            <option value="rejected">rejected</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="notes" placeholder="Your Notes">
                    </div>
                    <div class="d-grid my-3">
                        <button type="submit" class="btn btn-info">Send Review</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
