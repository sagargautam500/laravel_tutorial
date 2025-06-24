<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">
    <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md">
        <h1 class="text-xl font-bold text-center text-blue-500">Hello Tailwind</h1>
    </div>

    <h1 class="mt-6 text-2xl font-semibold text-gray-800">Welcome to Laravel</h1>
    <a href="/user-form"
        class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Go to User
        Form</a>
</body>

</html>
