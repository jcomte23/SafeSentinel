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
</head>

<body class="font-sans bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 antialiased">
    <div class="background-image rotate-animation">
        <img src="{{ asset('img/fondoRotativo.webp') }}" alt="Descripción de la imagen"
            class="w-full sm:w-3/4 md:w-1/2 lg:w-3/4">
    </div>
    {{ $slot }}
</body>

</html>
