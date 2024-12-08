@extends('client.layout')

@section('konten')

<h2 class="mb-4 text-xl font-bold text-gray-900 dark:gray-900">Edit Project</h2>
<form action="{{ route('client.updateproject', $project->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
        <div class="sm:col-span-2">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Title</label>
            <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$project->title}}" placeholder="" required="">
        </div>
        <div class=" w-full">
            <label for="budget" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Budget</label>
            <input type="number" name="budget" id="budget" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$project->budget}}" placeholder="Rupiah" required="">
        </div>
        <div class="mb-5">
            <label for="deadline" class="block mb-2 text-sm font-medium text-gray-900">Deadline</label>
            <input type="datetime-local" name="deadline" id="deadline" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$project->deadline}}" required />
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload file</label>
            <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" aria-describedby="file_input_help" id="file_input" type="file" name="detail">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF, ZIP, RAR.</p>
        </div>
        
        @if(isset($uploadedFile))
            <div class="mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-900">File yang telah diunggah:</label>
                <a href="{{ asset('storage/' . $uploadedFile) }}" class="text-blue-600 hover:underline" target="_blank">{{ basename($uploadedFile) }}</a>
            </div>
        @endif
        <div>
            <div class="mb-5">
                <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Select Role</label>
                <select name="role" id="role" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                    <option value="{{$project->status}}">{{$project->status}}</option>
                    <option value="open">Open</option>
                    <option value="in progress">In progress</option>
                    <option value="done">Done</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
        </div>
        
        
        <div class="sm:col-span-2">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Description</label>
            <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write a product description here..." required>{{$project->description}}</textarea>
        </div>
    </div>
    <div class="flex items-center space-x-4">
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Edit Project</button>
    </div>
</form>

@endsection