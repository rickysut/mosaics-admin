<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bina Group</title>
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>   
<div id="app">
    <section class="w-full min-h-screen px-3 antialiased bg-gradient-to-r from-indigo-500 to-blue-500 lg:px-6" data-primary="indigo-500"  data-tails-scripts="//unpkg.com/alpinejs">
        <div class="mx-auto max-w-7xl">
            <nav class="flex items-center w-full h-24 select-none" x-data="{ showMenu: false }">
                <div
                    class="relative flex flex-wrap items-center justify-between w-full h-24 mx-auto font-medium md:justify-center">
                    <div class="flex items-center">
                        <a href="#_" class="flex items-center py-4 pl-6 pr-4 md:pl-4 md:py-0">
                          <img src="{{ asset('images/bgt-logo-white.png') }}" class="w-10 h-10">
                          <span class="ml-2 text-lg font-black leading-none text-white select-none">Bina Group</span>
                        </a>
                      </div>
                    
                        <div class="fixed top-0 left-0 z-40 items-center hidden w-full h-full p-3 text-xl bg-gray-900 bg-opacity-50 md:text-sm lg:text-base md:w-3/4 md:bg-transparent md:p-0 md:relative md:flex"
                            :class="{ 'flex': showMenu, 'hidden': !showMenu }">
                            <div
                                class="flex-col w-full h-auto h-full overflow-hidden bg-white rounded-lg select-none md:bg-transparent md:rounded-none md:relative md:flex md:flex-row md:overflow-auto">


                            </div>
                        </div>
                        {{-- <div @click="showMenu = !showMenu"
                            class="absolute right-0 z-50 flex flex-col items-end w-10 h-10 p-2 mr-4 rounded-full cursor-pointer md:hidden hover:bg-gray-900 hover:bg-opacity-10"
                            :class="{ 'text-gray-400': showMenu, 'text-gray-100': !showMenu }">
                            <svg class="w-6 h-6" x-show="!showMenu" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                                x-cloak>
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <svg class="w-6 h-6" x-show="showMenu" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" x-cloak>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div> --}}
                </div>
            </nav>
        </div>
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col items-center md:flex-row">
    
                {{-- <main class="py-4 px-2"> --}}
                    @yield('content')
                    
                {{-- </main> --}}
            </div>
        </div>
    </section>
    <!-- AlpineJS Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</div>


@yield('scripts')
</body>
</html>