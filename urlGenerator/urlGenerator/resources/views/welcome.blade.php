<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Tailwind CSS -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
        <h1 class="text-4xl text-center text-blue-600">Welcome to Laravel</h1>
    </body>
</html>