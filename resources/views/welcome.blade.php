<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Connect</title>
    @vite('resources/css/app.css')
    <style>
        .carousel-items {
            transform: translateX(0);
            transition: transform 0.5s ease-out;
        }
        
        .indicator.active {
            background-color: white;
            transform: scale(1.2);
        }
    </style>
</head>
<body class="antialiased transition-colors duration-300 dark:bg-gray-900">
    {{-- Theme Toggle Button --}}
    <button id="theme-toggle" class="fixed z-50 bottom-5 left-5 p-2 rounded-full bg-gray-200 dark:bg-gray-700 transition-all duration-300 hover:scale-110">
        {{-- Sun Icon --}}
        <svg id="theme-toggle-light-icon" class="hidden w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"/>
        </svg>
        {{-- Moon Icon --}}
        <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
        </svg>
    </button>

    {{-- Navbar --}}
    <nav class="fixed w-full z-40 backdrop-blur-lg bg-white/80 dark:bg-gray-900/80 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="{{route('welcome')}}" class="flex items-center space-x-2">
                        <img src="storage\app\public\icon\letter-f.png" class="h-8 w-auto" alt="Logo">
                        <span class="text-xl font-bold text-blue-600 dark:text-blue-400">Freelance Connect</span>
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{route('login')}}" class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                        Login
                    </a>
                    <div class="relative group">
                        <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600 transition-all duration-300">
                            Register
                            <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute right-0 w-48 mt-2 py-2 bg-white dark:bg-gray-800 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <a href="{{route('register_client')}}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Client Register</a>
                            <a href="{{route('register_freelancer')}}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Freelancer Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-50 via-white to-blue-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
        {{-- Animated Background Elements --}}
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute animate-blob1 opacity-30 -top-40 -left-40 w-96 h-96 bg-blue-400 dark:bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl"></div>
            <div class="absolute animate-blob2 opacity-30 top-40 -right-40 w-96 h-96 bg-purple-400 dark:bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl"></div>
            <div class="absolute animate-blob3 opacity-30 bottom-40 left-1/2 w-96 h-96 bg-pink-400 dark:bg-pink-600 rounded-full mix-blend-multiply filter blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8 text-center lg:text-left">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 dark:text-white animate-fade-in-down">
                        Find The Perfect
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400">
                            Freelance Services
                        </span>
                    </h1>
                    <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 animate-fade-in">
                        Connect with talented freelancers and get your projects done with excellence.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start animate-fade-in-up">
                        <a href="{{route('register_client')}}" class="group inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300 transform hover:scale-105">
                            Hire a Freelancer
                            <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="{{route('register_freelancer')}}" class="group inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300 transform hover:scale-105">
                            Become a Freelancer
                            <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block animate-float">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" 
                         class="w-full max-w-lg mx-auto transform transition-all duration-300 hover:scale-105 hover:rotate-2" 
                         alt="Hero Image">
                </div>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="py-20 bg-white dark:bg-gray-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl animate-on-scroll">
                    Why Choose Us
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-300 animate-on-scroll">
                    Get your work done with confidence
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Quality Work Card --}}
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative px-7 py-6 bg-white dark:bg-gray-900 ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div class="space-y-2">
                            <p class="text-slate-800 dark:text-white font-semibold">Quality Work</p>
                            <p class="text-slate-600 dark:text-slate-400">Get high-quality work from proven professionals</p>
                        </div>
                    </div>
                </div>

                {{-- Secure Payment Card --}}
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative px-7 py-6 bg-white dark:bg-gray-900 ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        <div class="space-y-2">
                            <p class="text-slate-800 dark:text-white font-semibold">Secure Payments</p>
                            <p class="text-slate-600 dark:text-slate-400">Safe and secure payment processing for all transactions</p>
                        </div>
                    </div>
                </div>

                {{-- 24/7 Support Card --}}
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative px-7 py-6 bg-white dark:bg-gray-900 ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                        </svg>
                        <div class="space-y-2">
                            <p class="text-slate-800 dark:text-white font-semibold">24/7 Support</p>
                            <p class="text-slate-600 dark:text-slate-400">Round-the-clock assistance for any concerns</p>
                        </div>
                    </div>
                </div>

                {{-- Verified Freelancers Card --}}
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative px-7 py-6 bg-white dark:bg-gray-900 ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                        <div class="space-y-2">
                            <p class="text-slate-800 dark:text-white font-semibold">Verified Freelancers</p>
                            <p class="text-slate-600 dark:text-slate-400">All freelancers are verified and skilled professionals</p>
                        </div>
                    </div>
                </div>

                {{-- Flexible Hiring Card --}}
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative px-7 py-6 bg-white dark:bg-gray-900 ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div class="space-y-2">
                            <p class="text-slate-800 dark:text-white font-semibold">Flexible Hiring</p>
                            <p class="text-slate-600 dark:text-slate-400">Hire for short-term or long-term projects with ease</p>
                        </div>
                    </div>
                </div>

                {{-- Global Talent Card --}}
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative px-7 py-6 bg-white dark:bg-gray-900 ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div class="space-y-2">
                            <p class="text-slate-800 dark:text-white font-semibold">Global Talent</p>
                            <p class="text-slate-600 dark:text-slate-400">Access to talented freelancers from around the world</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Setelah Features Section, tambahkan Carousel Section --}}
    <section class="py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl animate-on-scroll">
                    Our Featured Projects
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-300 animate-on-scroll">
                    Discover amazing work from our talented freelancers
                </p>
            </div>

            {{-- Carousel Container --}}
            <div class="relative w-full overflow-hidden rounded-xl shadow-xl">
                <div id="carousel" class="relative w-full">
                    {{-- Carousel Items --}}
                    <div class="carousel-items flex transition-transform duration-500 ease-out">
                        {{-- Slide 1 --}}
                        <div class="w-full flex-none relative">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&h=600&q=80" 
                                 alt="Web Development" 
                                 class="w-full h-[400px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent">
                                <div class="absolute bottom-8 left-8 z-10">
                                    <h3 class="text-2xl font-bold mb-2 text-white drop-shadow-lg">Web Development</h3>
                                    <p class="text-gray-200 drop-shadow-lg">Custom websites and web applications</p>
                                </div>
                            </div>
                        </div>

                        {{-- Slide 2 --}}
                        <div class="w-full flex-none relative">
                            <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&h=600&q=80" 
                                 alt="Graphic Design" 
                                 class="w-full h-[400px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent">
                                <div class="absolute bottom-8 left-8 z-10">
                                    <h3 class="text-2xl font-bold mb-2 text-white drop-shadow-lg">Graphic Design</h3>
                                    <p class="text-gray-200 drop-shadow-lg">Creative visual solutions</p>
                                </div>
                            </div>
                        </div>

                        {{-- Slide 3 --}}
                        <div class="w-full flex-none relative">
                            <img src="https://images.unsplash.com/photo-1533750516457-a7f992034fec?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&h=600&q=80" 
                                 alt="Digital Marketing" 
                                 class="w-full h-[400px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent">
                                <div class="absolute bottom-8 left-8 z-10">
                                    <h3 class="text-2xl font-bold mb-2 text-white drop-shadow-lg">Digital Marketing</h3>
                                    <p class="text-gray-200 drop-shadow-lg">Strategic online marketing campaigns</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Carousel Controls --}}
                    <button class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center rounded-full bg-white/30 backdrop-blur-sm text-white hover:bg-white/50 transition-all duration-300" id="prevBtn">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center rounded-full bg-white/30 backdrop-blur-sm text-white hover:bg-white/50 transition-all duration-300" id="nextBtn">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>

                    {{-- Carousel Indicators --}}
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                        <button class="w-2 h-2 rounded-full bg-white/50 hover:bg-white transition-all duration-300 indicator active"></button>
                        <button class="w-2 h-2 rounded-full bg-white/50 hover:bg-white transition-all duration-300 indicator"></button>
                        <button class="w-2 h-2 rounded-full bg-white/50 hover:bg-white transition-all duration-300 indicator"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Section --}}
    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 px-4 py-16 lg:grid-cols-2">
                {{-- Company Info --}}
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <img src="storage\app\public\icon\letter-f.png" class="h-8 w-auto" alt="Logo">
                        <span class="text-xl font-bold text-blue-600 dark:text-blue-400">Freelance Connect</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 max-w-xs">
                        Connecting talented freelancers with amazing projects. Your success is our priority.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-500 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Newsletter --}}
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Stay Updated</h2>
                    <p class="mb-4 text-gray-600 dark:text-gray-400">Subscribe to our newsletter for the latest updates.</p>
                    <form class="space-y-4">
                        <div>
                            <input type="email" 
                                   class="w-full px-4 py-2 text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white" 
                                   placeholder="Enter your email">
                        </div>
                        <button type="submit" 
                                class="w-full px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600 transition-colors duration-300">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>

            {{-- Bottom Footer --}}
            <div class="py-6 text-center border-t border-gray-200 dark:border-gray-700">
                <p class="text-gray-600 dark:text-gray-400">
                    © 2024 Freelance Connect. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    {{-- Add Dark Mode Toggle Script --}}
    <script>
        // Theme Toggle Functionality
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        const themeToggleBtn = document.getElementById('theme-toggle');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
            document.documentElement.classList.add('dark');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
            document.documentElement.classList.remove('dark');
        }

        themeToggleBtn.addEventListener('click', function() {
            // Toggle icons
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // If is set in localStorage
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        });

        // Scroll Animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '50px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach((el) => {
            el.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700');
            observer.observe(el);
        });
    </script>

    {{-- Tambahkan script carousel sebelum closing body tag --}}
    <script>
        // Carousel functionality
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel-items');
            const items = carousel.children;
            const indicators = document.querySelectorAll('.indicator');
            const totalItems = items.length;
            let currentIndex = 0;
            let isAnimating = false;

            // Initialize first indicator
            updateIndicators();

            // Auto slide every 5 seconds
            let autoSlide = setInterval(nextSlide, 5000);

            document.getElementById('prevBtn').addEventListener('click', () => {
                if (isAnimating) return;
                clearInterval(autoSlide);
                prevSlide();
                autoSlide = setInterval(nextSlide, 5000);
            });

            document.getElementById('nextBtn').addEventListener('click', () => {
                if (isAnimating) return;
                clearInterval(autoSlide);
                nextSlide();
                autoSlide = setInterval(nextSlide, 5000);
            });

            // Add click events to indicators
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    if (isAnimating || currentIndex === index) return;
                    clearInterval(autoSlide);
                    goToSlide(index);
                    autoSlide = setInterval(nextSlide, 5000);
                });
            });

            function updateIndicators() {
                indicators.forEach((indicator, index) => {
                    indicator.classList.toggle('bg-white', index === currentIndex);
                    indicator.classList.toggle('bg-white/50', index !== currentIndex);
                });
            }

            function goToSlide(index) {
                if (isAnimating) return;
                isAnimating = true;
                carousel.style.transform = `translateX(-${index * 100}%)`;
                currentIndex = index;
                updateIndicators();
                setTimeout(() => {
                    isAnimating = false;
                }, 500);
            }

            function nextSlide() {
                goToSlide((currentIndex + 1) % totalItems);
            }

            function prevSlide() {
                goToSlide((currentIndex - 1 + totalItems) % totalItems);
            }

            // Touch events for mobile swipe
            let touchStartX = 0;
            let touchEndX = 0;

            carousel.addEventListener('touchstart', e => {
                touchStartX = e.changedTouches[0].screenX;
            }, false);

            carousel.addEventListener('touchend', e => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            }, false);

            function handleSwipe() {
                const swipeThreshold = 50;
                const difference = touchStartX - touchEndX;

                if (Math.abs(difference) > swipeThreshold) {
                    clearInterval(autoSlide);
                    if (difference > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                    autoSlide = setInterval(nextSlide, 5000);
                }
            }
        });
    </script>
</body>
</html>