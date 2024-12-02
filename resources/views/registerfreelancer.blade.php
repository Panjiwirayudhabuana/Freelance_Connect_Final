@extends('layout')

@section('konten')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <form class="w-full bg-white shadow-lg rounded-lg p-8" action="" method="POST">
        @csrf
        <h1 class="text-center text-2xl font-bold mb-6">Register Freelancer</h1>
        <div class='flex'>
            <!-- Left Column: Personal Information -->
            <div class="w-full md:w-1/2 p-2" >
                <h2 class="mb-4 text-lg font-semibold">Personal Information</h2>
                
                <div class="mb-5">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                    <input name="first_name" id="first_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                    <input name="last_name" id="last_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                    <label for="experience" class="block mb-2 text-sm font-medium text-gray-900">Experience</label>
                    <input name="experience" id="experience" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                    <label for="rekening" class="block mb-2 text-sm font-medium text-gray-900">Rekening</label>
                    <input name="rekening" id="rekening" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                    <label for="bio" class="block mb-2 text-sm font-medium text-gray-900">Your Bio</label>
                    <textarea name="bio" id="bio" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>
                </div>
            </div>

            <!-- Right Column: Account Information -->
            <div class="w-full md:w-1/2 p-2">
                <h2 class="mb-4 text-lg font-semibold">Account Information</h2>
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                    <input name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
                    <input name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your Password</label>
                    <input type="password" name="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                    <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900">Repeat Password</label>
                    <input name="repeat-password" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                    <label for="skills" class="block mb-2 text-sm font-medium text-gray-900">Your Skills</label>
                    <textarea name="skills" id="skills" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>
                </div>
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
                <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
            </div>
            <label for="terms" class="ml-2 text-sm font-medium text-gray-900">I agree with the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a></label>
        </div>
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Register New Account</button>
    </form>
</div>
@endsection