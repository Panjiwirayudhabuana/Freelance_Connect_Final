@extends('Freelancer.layout')

@section('konten')
<h2 class="mb-4 text-xl font-bold text-gray-900 dark:gray-900">Project</h2>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-gradient-to-r from-green-500 via-teal-500 to-blue-600 dark:from-gray-700 dark:via-gray-800 dark:to-gray-900">
            <tr>
                <th scope="col" class="px-6 py-4">Title</th>
                <th scope="col" class="px-6 py-4">Budget</th>
                <th scope="col" class="px-6 py-4">Deadline</th>
                <th scope="col" class="px-6 py-4 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4">{{ $project->title }}</td>
                <td class="px-6 py-4">{{ $project->budget }}</td>
                <td class="px-6 py-4">{{ $project->deadline }}</td>
                <td class="px-6 py-4">
                    <a href="{{ route('freelancer.project', $project->id) }}" 
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-teal-500 to-blue-600 rounded-lg shadow-md hover:from-teal-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
                         <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m4 4H9m4-8H9m8 8a9.003 9.003 0 00-9-9 9.003 9.003 0 00-9 9 9.003 9.003 0 009 9 9.003 9.003 0 009-9z" />
                         </svg>
                         Detail
                     </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


