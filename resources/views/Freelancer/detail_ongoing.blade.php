@extends('freelancer.layout')

@section('konten')
<div class="p-6 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:text-gray-300">
    <!-- Menampilkan Pesan -->
    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">{{ $project->title }}</h2>
    <div class="border-b border-gray-200 dark:border-gray-700 pb-4 mb-4">
        <p class="text-gray-600 dark:text-gray-400">{{ $project->description }}</p>
    </div>

    <div class="grid grid-cols-2 gap-6 mb-6">
        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Budget</h3>
            <p class="text-xl font-bold text-green-500">Rp {{ number_format($project->budget, 0, ',', '.') }}</p>
        </div>
        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Deadline</h3>
            <p class="text-xl text-gray-600 dark:text-gray-300">
                {{ \Carbon\Carbon::parse($project->deadline)->format('d M Y, H:i') }}
            </p>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-6 mb-6">
        <div>
            <p class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Submission File:</p>
            @if($detailProject->submission)
                <div class="mb-4">
                    <p class="text-gray-600 dark:text-gray-400 mb-2">File yang sudah disubmit:</p>
                    <a href="{{ route('freelancer.download_submission', $detailProject->id) }}"
                       class="inline-block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                        Download File Submission
                    </a>
                </div>
                <div class="flex flex-col">
                    <input type="file" name="submission"
                           class="block px-2 py-2 text-sm text-gray-800 border rounded-lg cursor-pointer dark:bg-gray-700 dark:text-white"
                           accept=".zip,.rar,.7zip,.pdf,.doc,.docx">
                    <p class="text-sm text-gray-500 mt-1">Format yang diizinkan: ZIP, RAR, 7ZIP, PDF, DOC, DOCX</p>
                </div>
            @endif
        </div>
    </div>

    

    <div class="mt-4 flex gap-4">
        <!-- Tombol Kembali ke On-Going Projects -->
        <a href="{{ route('freelancer.ongoing_projects') }}" class="inline-block mt-4 px-6 py-2 text-white bg-blue-800 rounded-lg hover:bg-blue-900">
            Kembali ke Daftar On-Going Project
        </a>
        
        <!-- Tombol Cancel Project -->
        <form action="{{ route('freelancer.reopen_project', $project->id) }}" method="POST">
            @csrf
            <button type="submit" class="inline-block px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                Cancel Project
            </button>
        </form>
    </div>
    <div>
        <!-- Tombol Done (dengan ml-auto untuk dorong ke kanan) -->
    <form action="{{ route('freelancer.submit_done', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <button type="submit" class="inline-block mt-4 px-6 py-2 text-white bg-green-500 rounded-lg hover:bg-green-700 ml-auto">
            Done
        </button>
    </form>
    </div>
    
    
</div>
@endsection
