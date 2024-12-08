@extends('Freelancer.layout')

@section('konten')
<h2 class="mb-4 text-xl font-bold text-gray-900 dark:gray-900">Project</h2>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Budget</th>
                <th scope="col" class="px-6 py-3">Deadline</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4">{{ $project->title }}</td>
                <td class="px-6 py-4">{{ $project->budget }}</td>
                <td class="px-6 py-4">{{ $project->deadline }}</td>
                <td class="px-6 py-4">
                    <a href="{{ route('freelancer.show', $project->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


