@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <!-- Page Title -->
        <div class="mb-4">
            <h1 class="text-2xl font-bold text-gray-800">Interviews</h1>
            <nav class="mt-2">
                <ol class="flex items-center space-x-2 text-sm text-gray-500">
                    <li><a href="#" class="hover:text-blue-600">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-blue-600">Interviews</li>
                </ol>
            </nav>
        </div>

        <section>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Card Header -->
                <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-gray-800">All Interviews</h2>
                    <div class="text-end">
                        {{-- <a href="{{ route('interview.create') }}"
                           class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            Create Interview
                        </a> --}}
                    </div>
                </div>

                <!-- Table -->
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left table-auto">
                            <thead class="bg-gray-50">
                                <tr class="text-sm font-medium text-gray-600 uppercase">
                                    <th class="px-6 py-3">Interview ID</th>
                                    <th class="px-6 py-3">CV Review ID</th>
                                    <th class="px-6 py-3">Status</th>
                                    <th class="px-6 py-3">Interview Date</th>
                                    <th class="px-6 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach($interviews as $interview)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4 text-sm text-gray-800">{{ $interview->id }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-800">{{ $interview->cv_review_id }}</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full
                                                {{ $interview->status == 'Scheduled' ? 'bg-green-100 text-green-800' :
                                                   ($interview->status == 'Late' ? 'bg-red-100 text-red-800' :
                                                   ($interview->status == 'ABS' ? 'bg-gray-100 text-gray-800' :
                                                   ($interview->status == 'noAction' ? 'bg-yellow-100 text-yellow-800' :
                                                   'bg-blue-100 text-blue-800'))) }}">
                                                {{ $interview->status }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-800">{{ $interview->interview_date }}</td>
                                        <td class="px-6 py-4 flex items-center space-x-3">
                                            <a href="{{ route('interview.edit', $interview->id) }}"
                                               class="edit-button inline-flex items-center px-2 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition-colors">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15.828l-5.657-5.657a2 2 0 112.828-2.828l2.828 2.828"></path>
                                                </svg>
                                                Edit
                                            </a>
                                            <form action="{{ route('interview.destroy', $interview->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex items-center px-2 py-1 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4M9 7v12m6-12v12"></path>
                                                    </svg>
                                                    Delete
                                                </button>
                                            </form>
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
        .flex.items-center.space-x-3 {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        .edit-button {
            background-color: #eab308 !important; /* bg-yellow-500 */
            color: #ffffff !important;
            opacity: 1 !important;
        }
    </style>
@endsection
