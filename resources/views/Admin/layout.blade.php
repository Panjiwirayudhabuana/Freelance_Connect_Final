<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freelance Connnect | Client</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>
            <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Freelance Connect</span>
            </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                <div>
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    <span class="sr-only">Open user menu</span>
                    </button>
                </div>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                    <div class="px-4 py-3" role="none">
                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                        Neil Sims
                    </p>
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                        neil.sims@flowbite.com
                    </p>
                    </div>
                    <ul class="py-1" role="none">
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        </div>
    </nav>
    {{-- Side Bar --}}
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
            <li>
                <a href="{{route('listproject')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-blue-700 group {{ request()->routeIs('listproject') ? 'bg-blue-700 dark:bg-blue-700' : '' }}">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7l-2-2H4Zm0 2h7.586L13 7.414V18H4V6Zm14 12V8h2v10h-2Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Project</span>
                </a>
                
                <script>
                    // Optional: Add event listener for dynamic behavior if necessary
                    document.querySelectorAll('a').forEach(link => {
                        link.addEventListener('click', function () {
                            document.querySelectorAll('a').forEach(el => el.classList.remove('bg-blue-700', 'dark:bg-blue-700'));
                            this.classList.add('bg-blue-700', 'dark:bg-blue-700');
                        });
                    });
                </script>
                
            </li>                
            <li>
                <a href="{{route('listfreelancer')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-blue-700 group {{ request()->routeIs('listfreelancer') ? 'bg-blue-700 dark:bg-blue-700' : '' }}">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm-7 8a7 7 0 0 1 14 0H5Z"/>
                    </svg>
                    <span class="ms-3">Freelancer</span>
                </a>
                
                <script>
                    // Optional: Add event listener for dynamic behavior if necessary
                    document.querySelectorAll('a').forEach(link => {
                        link.addEventListener('click', function () {
                            document.querySelectorAll('a').forEach(el => el.classList.remove('bg-blue-700', 'dark:bg-blue-700'));
                            this.classList.add('bg-blue-700', 'dark:bg-blue-700');
                        });
                    });
                </script>                
            </li>
            <li>
                <a href="{{route('listclient')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-blue-700 group {{ request()->routeIs('listclient') ? 'bg-blue-700 dark:bg-blue-700' : '' }}">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10 2a1 1 0 0 0-1 1v1H6a4 4 0 0 0-4 4v11a4 4 0 0 0 4 4h12a4 4 0 0 0 4-4V8a4 4 0 0 0-4-4h-3V3a1 1 0 0 0-1-1h-4Zm1 2h2v1h-2V4ZM4 8h16a2 2 0 0 1 2 2v2H2v-2a2 2 0 0 1 2-2Zm-2 5h20v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-6Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Client</span>
                </a>
                
                <script>
                    // Optional: Add event listener for dynamic behavior if necessary
                    document.querySelectorAll('a').forEach(link => {
                        link.addEventListener('click', function () {
                            document.querySelectorAll('a').forEach(el => el.classList.remove('bg-blue-700', 'dark:bg-blue-700'));
                            this.classList.add('bg-blue-700', 'dark:bg-blue-700');
                        });
                    });
                </script>                
            </li>
            <a href="{{route('logout')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-red-500 dark:hover:bg-red-500 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
            </a>
            
            <script>
                // Optional: Add event listener for dynamic behavior if necessary
                document.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', function () {
                        document.querySelectorAll('a').forEach(el => el.classList.remove('bg-blue-700', 'dark:bg-blue-700'));
                        this.classList.add('bg-blue-700', 'dark:bg-blue-700');
                    });
                });
            </script>
            </li>
            </ul>
        </div>
    </aside>
    
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            @yield('konten')  
        </div>
    </div>  
</body>
</html>