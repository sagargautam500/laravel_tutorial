<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'My Laravel App')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> 
</head>
<body class="flex flex-col min-h-screen"> {{-- Use flexbox to push footer down --}}

    @include('partials.navbar') {{-- Include your navbar partial --}}

    <main class="flex-grow"> {{-- Main content area that will grow --}}
        <div class="container mx-auto px-4 py-8"> {{-- Basic container and padding --}}
            @yield('content') {{-- Content from child views will be injected here --}}
        </div>
    </main>

    @include('partials.footer') {{-- Include your footer partial --}}

   
</body>
</html>