@extends('freelancer.layout') {{-- Pastikan Anda memiliki layout dasar --}}

@section('konten')
<div class="container">
    <h1 class="text-3xl font-semibold text-center text-indigo-600 mb-6">User Profile</h1>
        <div class="">
            <!-- Avatar & User Info -->
            <div class="justify-center bg-gray-200 p-8 space-y-6 flex flex-col items-center text-center">
                <p class="text-lg font-semibold">Username:</p>
                <h3 class="text-3xl font-bold text-black mt-4">{{ $user->name }}</h3>
                <p class="text-lg text-black">{{ $user->email }}</p>
    
                <!-- Badge for Role -->
                <span class="inline-block mt-2 px-4 py-1 text-sm font-medium text-black bg-green-600 rounded-full">
                    {{ ucfirst($user->role) }}
                </span>
            </div>
    
            <!-- Profile Details -->
            <div class="bg-gray-200 p-8 space-y-6 flex flex-col items-center text-center">
                <!-- Joined Date -->
                <div class="text-gray-700">
                    <p class="text-lg font-semibold">Joined:</p>
                    <p class="text-black">{{ $user->created_at->format('d M Y') }}</p>
                </div>
            
                <!-- Email -->
                <div class="text-gray-700">
                    <p class="text-lg font-semibold">Email:</p>
                    <p class="text-black">{{ $user->email }}</p>
                </div>
            </div>
    
            <!-- Display client info if user has related client -->
            @if($user->client)
            <hr class="my-6">
            <div class="space-y-4">
                <h4 class="text-xl font-semibold text-indigo-600">Client Details</h4>
                <div class="space-y-2 text-gray-700">
                    <p><strong>Company Name:</strong> {{ $user->client->company_name }}</p>
                    <p><strong>Phone:</strong> {{ $user->client->phone }}</p>
                    <p><strong>Address:</strong> {{ $user->client->address }}</p>
                </div>
            </div>
            @endif
    
            <!-- Edit Profile Button -->
            <div class="bg-gray-200 p-4 text-center">
                <a href="{{ route('user.edit', $user->id) }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full text-lg font-semibold hover:bg-blue-700 transition duration-300">
                    Edit Profile
                </a>
            </div>
        </div>
</div>
@endsection