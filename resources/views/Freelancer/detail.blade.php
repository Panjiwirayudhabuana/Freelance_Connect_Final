@extends('freelancer.layout')

@section('konten')
<div class="  p-6 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:text-gray-300">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">{{ $project->title }}</h2>
    <div class="border-b border-gray-200 dark:border-gray-700 pb-4 mb-4">
        <p class="text-gray-600 dark:text-gray-400">{{ $project->description }}</p>
    </div>
    
    <div class="grid grid-cols-2 gap-6 mb-6">
        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Budget</h3>
            <p class="text-xl font-bold text-green-500">Rp {{ number_format($project->budget) }}</p>
        </div>
        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Deadline</h3>
            <p class="text-xl text-gray-600 dark:text-gray-300">
                {{ \Carbon\Carbon::parse($project->deadline)->format('d M Y, H:i') }}
            </p>
        </div>
    </div>

    <div class="mb-6">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Status Proyek</h3>
        @if ($project->status === 'completed')
            <span class="inline-block px-4 py-2 bg-green-100 text-green-700 font-medium rounded-lg dark:bg-green-700 dark:text-white">
                Selesai
            </span>
        @elseif ($project->status === 'in_progress')
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 font-medium rounded-lg dark:bg-blue-700 dark:text-white">
                Sedang Berlangsung
            </span>
        @else
            <span class="inline-block px-4 py-2 bg-gray-100 text-gray-700 font-medium rounded-lg dark:bg-gray-700 dark:text-white">
                Belum Dimulai
            </span>
        @endif
    </div>

    <a href="{{ route('freelancer.show') }}" class="inline-block mt-4 px-6 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
        Kembali ke Daftar Proyek
    </a>
</div>
@endsection