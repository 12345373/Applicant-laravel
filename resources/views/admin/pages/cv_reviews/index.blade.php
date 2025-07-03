@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <!-- Page Title -->
        <div class="mb-4">
            <h1 class="text-2xl font-bold text-gray-800">Applicants Management</h1>
            <nav class="mt-2">
                <ol class="flex items-center space-x-2 text-sm text-gray-500">
                    <li><a href="index.html" class="hover:text-blue-600">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li>Tables</li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-blue-600">Applicants</li>
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
                    <h2 class="text-xl font-semibold text-gray-800">Applicants List</h2>
                    <a href="{{ route('applicant.create') }}"
                       class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Create New
                    </a>
                </div>

                <!-- Table -->
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left table-auto">
                            <thead class="bg-gray-50">
                                <tr class="text-sm font-medium text-gray-600 uppercase">
                                    <th class="px-6 py-3">ID</th>
                                    <th class="px-6 py-3">Name</th>
                                    <th class="px-6 py-3">Status</th>
                                    <th class="px-6 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($reviews as $item)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4 text-sm text-gray-800">{{ $item->id }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-800">{{ $item->applicant->user->name }}</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full
                                                {{ $item->status == 'Approved' ? 'bg-green-100 text-green-800' :
                                                   ($item->status == 'Rejected' ? 'bg-red-100 text-red-800' :
                                                   'bg-yellow-100 text-yellow-800') }}">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('cv_review.show', $item->id) }}"
                                               class="text-blue-600 hover:text-blue-800 font-medium">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .table-auto th, .table-auto td {
            transition: all 0.2s ease;
        }
        .table-auto tr:hover {
            transform: translateY(-1px);
        }
        .rounded-lg {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
    </style>
@endsection
