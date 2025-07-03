@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <!-- Page Title -->
        <div class="mb-4">
            <h1 class="text-2xl font-bold text-gray-800">Edit Interview</h1>
            <nav class="mt-2">
                <ol class="flex items-center space-x-2 text-sm text-gray-500">
                    <li><a href="#" class="hover:text-blue-600">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li><a href="{{ route('interview.index') }}" class="hover:text-blue-600">Interviews</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-blue-600">Edit Interview</li>
                </ol>
            </nav>
        </div>

        <section>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Card Header -->
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800">Edit Interview Details</h2>
                </div>

                <!-- Form -->
                <div class="p-6">
                    <form action="{{ route('interview.update', $interview->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="cv_review_id" class="block text-sm font-medium text-gray-700">CV Review ID</label>
                            <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                   name="cv_review_id" id="cv_review_id" value="{{ $interview->cv_review_id }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="noAction" {{ $interview->status == 'noAction' ? 'selected' : '' }}>No Action</option>
                                <option value="ABS" {{ $interview->status == 'ABS' ? 'selected' : '' }}>Absent</option>
                                <option value="Late" {{ $interview->status == 'Late' ? 'selected' : '' }}>Late</option>
                            </select>
                            <small class="mt-1 block text-sm text-gray-500">
                                The status can be either "Absent", "Late", or "No Action".
                            </small>
                        </div>

                        <div class="mb-4">
                            <label for="interview_date" class="block text-sm font-medium text-gray-700">Interview Date</label>
                            <input type="datetime-local" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                   name="interview_date" id="interview_date" value="{{ \Carbon\Carbon::parse($interview->interview_date)->format('Y-m-d\TH:i') }}" required>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="save-button inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .rounded-lg {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
        }
        .form-control, select {
            transition: all 0.2s ease;
        }
        .form-control:hover, select:hover {
            border-color: #3b82f6;
        }
        button[type="submit"] {
            transition: all 0.2s ease;
        }
        button[type="submit"]:hover {
            transform: translateY(-1px);
        }
        .save-button {
            background-color: #2563eb !important; /* bg-blue-600 */
            color: #ffffff !important;
            opacity: 1 !important;
        }
    </style>
@endsection
