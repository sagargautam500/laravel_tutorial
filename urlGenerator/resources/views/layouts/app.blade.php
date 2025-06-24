<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Laravel App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <header>
        @includeif('navbar')
        <h1 class="text-3xl font-bold text-center my-4 text-blue-700">Welcome to My Laravel Application</h1>
    </header>

    <main class="flex-1 container mx-auto px-4">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-6 mt-8">
        <div class="container mx-auto text-center space-y-2">
            <p class="text-sm">&copy; {{ date('Y') }} My Laravel Application. All rights reserved.</p>
            <p class="text-xs">Powered by <span class="font-semibold">Laravel</span></p>
            <p class="text-xs">Version: <span class="font-mono">{{ app()->version() }}</span></p>
        </div>
    </footer>
</body>
</html>
