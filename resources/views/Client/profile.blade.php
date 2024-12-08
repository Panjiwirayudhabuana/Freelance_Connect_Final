@extends('client.layout')

@section('konten')

<div class=>
    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:gray-900">Profile</h2>

    @if(session('success'))
        <div class="mb-4 text-green-600">{{ session('success') }}</div>
    @endif

    <form action="{{ route('client.profile.update') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>

        <div class="mb-4">
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Company</label>
            <input type="text" name="company" id="company" value="{{ old('company', $client->company) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>

        <div class="mb-4">
            <label for="bio" class="block mb-2 text-sm font-medium text-gray-900">Bio</label>
            <textarea name="bio" id="bio" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>{{ old('bio', $client->bio) }}</textarea>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Save Changes</button>
    </form>
</div>

@endsection