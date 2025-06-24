<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div>
           <h3> {{URL::current()}}</h3>
            <h3> {{URL::full()}}</h3>
            <h3> {{URL::previous()}}</h3>
            <h2>{{url()->current()}}</h2>
            <h2>{{url()->full()}}</h2>
          <a href="{{ url('/about') }}" class="text-blue-500 hover:underline">Go to About Page</a>
          <a href="{{ URL::to('/contact') }}" class="text-blue-500 hover:underline">Go to Contact Page</a>
         </div>
        <div class="flex flex-col items-center justify-center min-h-[60vh]">
            <x-Header msg="This is Home Page" />
            <h1 class="text-5xl bg-gradient-to-r from-amber-400 to-yellow-300 font-extrabold text-center m-6 p-4 rounded-lg shadow-lg">
                Welcome to Laravel
            </h1>
            <p class="text-lg text-gray-700 mt-4 mb-8 max-w-xl text-center">
                Build modern web applications with ease using Laravel and Tailwind CSS. Start your journey with a beautiful, responsive layout!
            </p>
            <a href="/about" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-full shadow hover:bg-blue-700 transition">
                Learn More
            </a>
        </div>
    @endsection
</body>

</html>
