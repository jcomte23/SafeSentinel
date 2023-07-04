<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Official website of occupational health and safety management systems" />
    <meta name="keywords"
        content="security,safety,health,workplace,management,system,monitoring,tracking,compliance,risk,prevention,incident,reporting,analytics,employee,wellness,occupational,ergonomics,protocols,alerts,notifications,dashboard,integration,API,modules,documentation,support,updates,version" />
    <meta name="sitedomain" content="https://safesentinel.javiercombita.com" />
    <meta name="organization" content="jcomte23" />
    <meta name="author" content="Javier Cómbita Téllez" />
    <meta name="designer" content="Javier Cómbita Téllez" />
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="revisit-after" content="15days" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen w-full bg-gray-100 dark:bg-gray-900 ">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
