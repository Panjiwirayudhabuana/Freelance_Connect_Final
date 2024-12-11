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
            <form action="" method="POST">
                @csrf
                <h1 class="mb-9 text-2xl font-bold text-center">Register Freelancer</h1>
                
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                    <input name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                
                <div class="mb-5 relative">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                        <button type="button" class="absolute right-2 top-1/2 transform -translate-y-1/2" onclick="togglePassword('password')">
                            <svg id="eyeIconPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="mb-5 relative">
                    <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900">Repeat Password</label>
                    <div class="relative">
                        <input type="password" name="repeat-password" id="repeat-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                        <button type="button" class="absolute right-2 top-1/2 transform -translate-y-1/2" onclick="togglePassword('repeat-password')">
                            <svg id="eyeIconRepeat" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
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

                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
                    </div>
                    <label for="terms" class="ml-2 text-sm font-medium text-gray-900">I agree with the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a></label>
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Register New Account</button>
            </form>
        </div>
    </div>
</div>

<script>
function togglePassword(inputId) {
    const passwordInput = document.getElementById(inputId);
    const eyeIcon = document.getElementById(inputId === 'password' ? 'eyeIconPassword' : 'eyeIconRepeat');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
        `;
    } else {
        passwordInput.type = 'password';
        eyeIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        `;
    }
}
</script>
@endsection