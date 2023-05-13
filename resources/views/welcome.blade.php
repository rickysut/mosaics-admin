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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body class="fixed overflow-hidden w-full min-h-full flex text-gray-900 dark:text-white bg-white">
    <section class="w-full min-h-screen px-3 antialiased bg-gradient-to-r from-indigo-500 to-blue-500 lg:px-6"
        data-primary="indigo-500" data-tails-scripts="//unpkg.com/alpinejs">
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
    
                <div class="w-full space-y-5 md:w-3/5 md:pr-16 hidden md:block">
                    <h2 class="text-2xl font-extrabold leading-none sm:text-3xl md:text-4xl text-white">
                        Bina Group
                    </h2>
                    <p class="text-xl text-gray-200 md:pr-16 text-justify">Bina Group was established to provide the International Air and Ocean Freight Forwarding service between Indonesia to Worldwide countries. Bina Group is an aggressive company which have been well known and market reputable in the line of this main business. Our Company is well managed and supported By a professional teamwork, experienced staffs in order to serve and meet all the requirements of our clients in any aspects and offer reasonable rate and flexible sailing schedule to our customer as have good relationship between our company and carriers. It is an honor for us to be act as your exclusive partner is this industry and looking forward to serve your prompt reply in a good and timely order at the near future.</p>
                </div>
    
                <div class="w-full mt-16 md:mt-0 md:w-2/5">
                    
                    <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                        <h3 class="mb-6 text-2xl font-medium text-center">Track your shipment</h3>
                        <form action="{{ route('track') }}" method="POST">
                            @csrf
                            
                            <input type="text" name="track_no" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" data-rounded="rounded-lg" data-primary="blue-500" placeholder="M B/L or H B/L" required>
                            {{-- <input type="text" name="mbl" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" data-rounded="rounded-lg" data-primary="blue-500" placeholder="M B/L"> --}}
                            {{-- <input type="text" name="hbl"  class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" data-rounded="rounded-lg" data-primary="blue-500" placeholder="H B/L"> --}}
                            <div class="block">
                                <button class="w-full px-3 py-4 font-medium text-white bg-blue-600 hover:bg-blue-400 rounded-lg" data-primary="blue-600" data-rounded="rounded-lg">Track</button>
                            </div>
                                
                            
                        </form>
                        
                    </div>
                </div>
    
            </div>
        </div>
    </section>

    <!-- AlpineJS Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

</body>

</html>
