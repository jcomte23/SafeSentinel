<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @keyframes rotateGradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 30%, rgba(0, 212, 255, 1) 100%);
            background-size: 800% 800%;
            animation: rotateGradient 15s ease infinite;
        }
    </style>
</head>

<body class="font-sans bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 antialiased">
    <div
        class="min-h-screen flex justify-center items-center bg-dots-darker bg-center dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-red-500 focus:rounded-sm">{{ __('Dashboard') }}</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-red-500 focus:rounded-sm">{{ __('Log in') }}</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-red-500 focus:rounded-sm">{{ __('Register') }}</a>
                    @endif
                @endauth
            </div>
        @endif

        <div x-data="{ visible: false }" x-init="setTimeout(() => { visible = true }, 500)" class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center items-center flex-col">
                <center>
                    <a href="{{ route('welcomeGuest') }}" x-show="visible"
                        x-transition:enter="transition ease-out duration-500 transform"
                        x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300 transform"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-50">
                        <img src="{{ asset('img/logoAPP.png') }}" alt="Logo Application" class="w-1/4">
                    </a>
                </center>
                <h1 class="text-5xl font-bold mt-6 text-center" x-show="visible"
                    x-transition:enter="transition ease-out duration-500 transform"
                    x-transition:enter-start="opacity-0 translate-y-8"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    style="text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);">
                    <span class="text-blue-500"
                        style="-webkit-text-stroke: 1px black; -webkit-text-fill-color: white;">Safe</span>
                    <span class="text-gray-900 dark:text-white"
                        style="-webkit-text-stroke: 1px white; -webkit-text-fill-color: #000000;">Sentinel</span>
                </h1>
            </div>
        </div>
    </div>
</body>

{{-- {{ $slot }} --}}

</html>
