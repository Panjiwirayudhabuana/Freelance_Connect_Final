@extends('freelancer.layout') {{-- Pastikan Anda memiliki layout dasar --}}

@section('konten')
<div class="container px-6 py-12">
    <h1 class="text-3xl font-semibold text-center text-indigo-600 mb-8">Edit Profile</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        @csrf
        @method('PUT') {{-- Menggunakan metode PUT untuk update data --}}

        <div class="mb-6">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Name:</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-3 border rounded-md text-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-6">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-3 border rounded-md text-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-6">
            <label for="password" class="block text-gray-700 font-semibold mb-2">New Password:</label>
            <input type="password" id="password" name="password" class="w-full px-4 py-3 border rounded-md text-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter new password">
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-3 border rounded-md text-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Confirm new password">
        </div>

        <!-- Button Section -->
        <div class="flex justify-center gap-6">
            <!-- Save Changes Button -->
            <button type="submit" class="flex items-center gap-2 px-6 py-3 bg-blue-600 text-white font-semibold rounded-full shadow-lg hover:bg-blue-700 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                </svg>
                Save Changes
            </button>

            <!-- Cancel Button -->
            <a href="{{ route('user.profile') }}" class="flex items-center gap-2 px-6 py-3 bg-blue-600 text-white font-semibold rounded-full shadow-lg hover:bg-blue-700 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l-7-7 7-7M5 12h14"></path>
                </svg>
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection