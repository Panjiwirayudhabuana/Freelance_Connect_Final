@extends('freelancer.layout')

@section('konten')
<h2 class="mb-6 text-2xl font-extrabold text-gray-900 dark:text-white">On-Going Projects</h2>
<div class="relative overflow-x-auto shadow-lg rounded-lg">
    <table class="w-full text-sm text-left text-gray-300 dark:text-gray-500">
        <thead class="text-xs text-white uppercase bg-gradient-to-r from-green-500 via-teal-500 to-blue-600 dark:from-gray-700 dark:via-gray-800 dark:to-gray-900">
            <tr>
                <th scope="col" class="px-6 py-4">Title</th>
                <th scope="col" class="px-6 py-4">Budget</th>
                <th scope="col" class="px-6 py-4">Deadline</th>
                <th scope="col" class="px-6 py-4 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ongoingProjects as $ongoing)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                    <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $ongoing->project->title }}</td>
                    <td class="px-6 py-4 text-green-700 dark:text-green-400 font-bold">Rp{{ number_format($ongoing->project->budget, 0, ',', '.') }}</td>
                    <td class="px-6 py-4 text-blue-600 dark:text-blue-400">{{ \Carbon\Carbon::parse($ongoing->project->deadline)->format('d M Y, H:i') }}</td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('freelancer.detail_ongoing', $ongoing->id) }}" 
                           class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-teal-500 to-blue-600 rounded-lg shadow-md hover:from-teal-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m4 4H9m4-8H9m8 8a9.003 9.003 0 00-9-9 9.003 9.003 0 00-9 9 9.003 9.003 0 009 9 9.003 9.003 0 009-9z" />
                            </svg>
                            Detail
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">No ongoing projects found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection