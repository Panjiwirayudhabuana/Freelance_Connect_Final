@extends('layout')

@section('konten')
<div class="relative flex items-center justify-center min-h-screen bg-cover bg-center" style="background-image: url('path/to/your/background-image.jpg');">
    <!-- Overlay Blur -->
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <!-- Kontainer Form dan Gambar -->
    <div class="relative z-10 flex w-full max-w-4xl bg-white bg-opacity-80 backdrop-blur-md rounded-lg shadow-lg">
        <!-- Bagian Gambar -->
        <div class="hidden md:block w-1/2">
            <img src="path/to/your/image.jpg" alt="Deskripsi Gambar" class="object-cover h-full w-full rounded-l-lg">
        </div>
        <!-- Bagian Form -->
        <div class="w-full md:w-1/2 p-8">
            <form action="{{ route('freelancer_info') }}" method="POST">
                @csrf
                <h1 class="mb-9 text-2xl font-bold text-center">Register Freelancer</h1>
                
                <div class="mb-5">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                    <input name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                
                <div class="mb-5">
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                    <input name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                
                <div class="mb-5">
                    <label for="experience" class="block mb-2 text-sm font-medium text-gray-900">Experience</label>
                    <input name="experience" id="experience" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                
                <div class="mb-5">
                    <label for="rekening" class="block mb-2 text-sm font-medium text-gray-900">Rekening</label>
                    <input name="rekening" id="rekening" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                
                <div class="mb-5">
                    <label for="bio" class="block mb-2 text-sm font-medium text-gray-900">Your Bio</label>
                    <textarea name="bio" id="bio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>
                </div>
                
                <div class="mb-5">
                    <label for="skills" class="block mb-2 text-sm font-medium text-gray-900">Your Skills</label>
                    <textarea name="skills" id="skills" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger mb-4">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li class="text-red-600">{{ $item }}</li>    
                        @endforeach
                    </ul>
                </div>
                @endif

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Save Data</button>
            </form>
        </div>
    </div>
</div>
@endsection