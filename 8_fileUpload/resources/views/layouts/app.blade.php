<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>

    {{-- Tailwind CSS (compiled using Laravel Mix or Vite) --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Remove CDN to avoid conflicts --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

{{-- Use flexbox on the body to push the footer down --}}
<body class="flex flex-col min-h-screen bg-gray-500 text-gray-900 font-sans">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main Content - flex-grow makes this section take up available space --}}
    <main class="flex-grow container mx-auto p-6 bg-white shadow rounded mt-6">
        @yield('content')
    </main>

    {{-- Sticky Footer - mt-auto pushes it to the bottom in a flex container --}}
    <footer class="bg-gray-800 text-white text-center py-4 mt-auto relative bottom-0 w-full">
        {{-- Use Tailwind's utility classes for styling --}}
        {{-- Use flexbox for better alignment --}}
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 px-4">
            <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-300 hover:text-white">Privacy Policy</a>
                <a href="#" class="text-gray-300 hover:text-white">Terms</a>
                <a href="#" class="text-gray-300 hover:text-white">Contact</a>
            </div>
        </div>
    </footer>

</body>

</html>
