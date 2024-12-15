@extends('freelancer.layout')

@section('konten')
<div class="p-6 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:text-gray-300">
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
            @endif

            <form action="{{ route('freelancer.submit_project', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="submission" 
                       class="block px-2 py-2 text-sm text-gray-800 border rounded-lg cursor-pointer dark:bg-gray-700 dark:text-white"
                       accept=".zip,.rar,.7zip,.pdf,.doc,.docx">
                <p class="text-sm text-gray-500 mt-1">Format yang diizinkan: ZIP, RAR, 7ZIP, PDF, DOC, DOCX</p>
                <button type="submit" class="inline-block mt-4 px-6 py-2 text-white bg-green-500 rounded-lg hover:bg-green-700">
                    {{ $detailProject->submission ? 'Update File' : 'Submit File' }}
                </button>
            </form>
        </div>
        <div>
            <form action="{{ route('freelancer.update_status', $detailProject->id) }}" method="POST">
                @csrf
                @method('POST')
                <label for="status" class="block text-sm font-medium text-gray-700">Update Status</label>
                <select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 text-gray-900" onchange="changeTextColor()">
                    <option value="in progress" class="text-yellow-500" {{ $detailProject->status == 'in progress' ? 'selected' : '' }}>In Progress!</option>
                    <option value="done" class="text-green-500" {{ $detailProject->status == 'done' ? 'selected' : '' }}>Done!</option>
                    <option value="cancelled" class="text-red-500" {{ $detailProject->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
                <button type="submit" class="mt-3 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update</button>
            </form>
        </div>
    </div>

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

    <a href="{{ route('freelancer.ongoing_projects') }}" class="inline-block mt-4 px-6 py-2 text-white bg-blue-800 rounded-lg hover:bg-blue-900">
        Kembali ke Daftar On-Going Proyek
    </a>
</div>

<script>
    function changeTextColor() {
        var select = document.getElementById("status");
        var selectedOption = select.options[select.selectedIndex];
        
        select.classList.remove('text-yellow-500', 'text-green-500', 'text-red-500');

        if (selectedOption.classList.contains('text-yellow-500')) {
            select.classList.add('text-yellow-500');
        } else if (selectedOption.classList.contains('text-green-500')) {
            select.classList.add('text-green-500');
        } else if (selectedOption.classList.contains('text-red-500')) {
            select.classList.add('text-red-500');
        }
    }

    // Run the function on page load to ensure the correct text color is set
    window.onload = changeTextColor;
</script>
@endsection