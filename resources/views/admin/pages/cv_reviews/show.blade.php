@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <!-- Page Title -->
        <div class="mb-4">
            <h1 class="text-2xl font-bold text-gray-800">Applicant Details</h1>
            <nav class="mt-2">
                <ol class="flex items-center space-x-2 text-sm text-gray-500">
                    <li><a href="index.html" class="hover:text-blue-600">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li>Applicants</li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-blue-600">Applicant #{{ $review->id }}</li>
                </ol>
            </nav>
        </div>

        <section>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Success Message -->
                @if (Session::has('done'))
                    <div class="p-4 bg-green-100 text-green-700 border-l-4 border-green-500">
                        {{ Session::get('done') }}
                    </div>
                @endif

                <!-- Card Header -->
                <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-gray-800">Applicant Information</h2>
                    <a href="{{ route('applicant.create') }}"
                       class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Create New
                    </a>
                </div>

                <!-- Applicant Details -->
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div>
                                <h4 class="text-sm font-medium text-gray-600">Name</h4>
                                <p class="text-lg text-gray-800">{{ $review->applicant->user->name }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-600">Email</h4>
                                <p class="text-lg text-gray-800">{{ $review->applicant->user->email }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-600">Years of Experience</h4>
                                <p class="text-lg text-gray-800">{{ $review->applicant->exp_years }}</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <h4 class="text-sm font-medium text-gray-600">Address</h4>
                                <p class="text-lg text-gray-800">{{ $review->applicant->address }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-600">Phone</h4>
                                <p class="text-lg text-gray-800">{{ $review->applicant->phone }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-600">Education</h4>
                                <p class="text-lg text-gray-800">{{ $review->applicant->education }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-600">LinkedIn</h4>
                                <a href="{{ $review->applicant->linkedIn }}"
                                   class="text-blue-600 hover:text-blue-800 font-medium" target="_blank">View Profile</a>
                            </div>
                        </div>
                    </div>

                    <!-- Create Interview Button -->
                    <div class="mt-6 text-center">
                        <div class="row">
                            <div class="col-md-6 mx-auto">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-success my-3 px-4 py-2 text-white rounded-md hover:bg-green-800 transition-colors animate-pulse"
                                            data-bs-toggle="modal" data-bs-target="#interviewModal">
                                        <svg class="w-5 h-5 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Create Interview
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="interviewModal" tabindex="-1" aria-labelledby="interviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="interviewModalLabel">Create Interview for {{ $review->applicant->user->name }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('interview.store', $review->id) }}">
                        @csrf
                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Interview Status</label>
                            <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                <option value="" disabled selected>Select Status</option>
                                <option value="noAction">No Action</option>
                                <option value="ABS">Absent</option>
                                <option value="Late">Late</option>
                                <option value="Scheduled">Scheduled</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="interview_date" class="block text-sm font-medium text-gray-700">Interview Date</label>
                            <input type="datetime-local" name="interview_date" id="interview_date"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors !bg-blue-600 !text-white">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Send Interview Date
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 transition-colors"
                            data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .modal-content {
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .rounded-lg {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .grid > div > div {
            transition: all 0.2s ease;
        }
        .grid > div > div:hover {
            transform: translateY(-2px);
        }
        .btn-success.animate-pulse {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        /* Ensure Send Interview Date button is visible */
        .modal-body button[type="submit"] {
            background-color: #2563eb !important;
            color: #ffffff !important;
            border: none !important;
        }
    </style>

    <!-- Note: Ensure Bootstrap CSS and JS are included in your admin.layouts.app for modals and buttons to work -->
@endsection
