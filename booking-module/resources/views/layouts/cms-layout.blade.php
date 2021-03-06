<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IBE</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/myCss.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ed601ea99b.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/myJs.js') }}" /></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    

    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>

<body>


    <div>
        <nav class="bg-indigo-600">
            <div class="max-w-7xl sm:px-6 lg:px-8 px-4 mx-auto">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="w-8 h-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-300.svg" alt="Workflow">
                </div>
                <div class="md:block hidden">
                    <div class="flex items-baseline ml-10 space-x-4">
                    <!-- Current: "bg-indigo-700 text-white", Default: "text-white hover:bg-indigo-500 hover:bg-opacity-75" -->
                    <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-indigo-700 rounded-md">Dashboard</a>

                    <a href="#" class="hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 text-sm font-medium text-white rounded-md">Team</a>

                    <a href="#" class="hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 text-sm font-medium text-white rounded-md">Projects</a>

                    <a href="#" class="hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 text-sm font-medium text-white rounded-md">Calendar</a>

                    <a href="#" class="hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 text-sm font-medium text-white rounded-md">Reports</a>
                    </div>
                </div>
                </div>
                <div class="md:block hidden">
                <div class="md:ml-6 flex items-center ml-4">
                    <button class="hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white p-1 text-indigo-200 bg-indigo-600 rounded-full">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: bell -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div x-data="{ open: false }" class="relative ml-3">
                        <div>
                            <button @click="open = true" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white flex items-center max-w-xs text-sm text-white bg-indigo-600 rounded-full" id="user-menu" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="../images/profile.png" alt="">
                            </button>
                        </div>
                    <!--
                        Profile dropdown panel, show/hide based on dropdown state.

                        Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                        Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                        <div x-show.transition.duration.100ms="open" @click.away="open = false" class="ring-1 ring-black ring-opacity-5 absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a href="#" class="hover:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem">Your Profilem</a>

                            <a href="#" class="hover:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem">Settings</a>

                            <a href="#" class="hover:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem">Sign out</a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="md:hidden flex -mr-2">
                <!-- Mobile menu button -->
                <button class="hover:text-white hover:bg-indigo-500 hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white inline-flex items-center justify-center p-2 text-indigo-200 bg-indigo-600 rounded-md">
                    <span class="sr-only">Open main menu</span>
                    <!--
                    Heroicon name: menu

                    Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                    Heroicon name: x

                    Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                </div>
            </div>
            </div>

            <!--
            Mobile menu, toggle classes based on menu state.

            Open: "block", closed: "hidden"
            -->
            <div class="md:hidden hidden">
            <div class="sm:px-3 px-2 pt-2 pb-3 space-y-1">
                <!-- Current: "bg-indigo-700 text-white", Default: "text-white hover:bg-indigo-500 hover:bg-opacity-75" -->
                <a href="#" class="block px-3 py-2 text-base font-medium text-white bg-indigo-700 rounded-md">Dashboard</a>

                <a href="#" class="hover:bg-indigo-500 hover:bg-opacity-75 block px-3 py-2 text-base font-medium text-white rounded-md">Team</a>

                <a href="#" class="hover:bg-indigo-500 hover:bg-opacity-75 block px-3 py-2 text-base font-medium text-white rounded-md">Projects</a>

                <a href="#" class="hover:bg-indigo-500 hover:bg-opacity-75 block px-3 py-2 text-base font-medium text-white rounded-md">Calendar</a>

                <a href="#" class="hover:bg-indigo-500 hover:bg-opacity-75 block px-3 py-2 text-base font-medium text-white rounded-md">Reports</a>
            </div>
            <div class="pt-4 pb-3 border-t border-indigo-700">
                <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-white">Tom Cook</div>
                    <div class="text-sm font-medium text-indigo-300">tom@example.com</div>
                </div>
                <button @click="open = true" class="hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white flex-shrink-0 p-1 ml-auto text-indigo-200 bg-indigo-600 border-2 border-transparent rounded-full">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: bell -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
                </div>
                <div class="px-2 mt-3 space-y-1">
                <a href="#" class="hover:bg-indigo-500 hover:bg-opacity-75 block px-3 py-2 text-base font-medium text-white rounded-md">Your Profileq</a>

                <a href="#" class="hover:bg-indigo-500 hover:bg-opacity-75 block px-3 py-2 text-base font-medium text-white rounded-md">Settings</a>

                <a href="#" class="hover:bg-indigo-500 hover:bg-opacity-75 block px-3 py-2 text-base font-medium text-white rounded-md">Sign out</a>
                </div>
            </div>
            </div>
        </nav>

        <header class="bg-gray-100 shadow">
            
            @yield ('top-section')

        </header>

        <main class="bg-gray-100">
            <div class="max-w-7xl sm:px-6 lg:px-8 py-6 mx-auto">
            <!-- Replace with your content -->
            <div class="sm:px-0 px-4 py-4">
                <div class="h-96 border-4 border-gray-200 border-dashed rounded-lg"></div>
            </div>
            <!-- /End replace -->
            </div>
        </main>
    </div>

    @livewireScripts 
</body>


</html>