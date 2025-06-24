@extends('layouts.app')
@section('content')
<div>
    <div class="max-w-xl mx-auto my-10 p-6 bg-gray-100 rounded-lg shadow text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">About Us</h1>
        <p class="text-gray-600 text-lg">Welcome to our application! This page provides information about our team and mission.</p>
    </div>
</div>
<div class="max-w-2xl mx-auto my-10 p-6 bg-white rounded-lg shadow">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h2>
    <p class="text-gray-700 mb-4">We aim to provide the best user experience through innovative solutions and dedicated support.</p>
    
    <h3 class="text-xl font-semibold text-gray-800 mb-2">Meet Our Team</h3>
    <ul class="list-disc list-inside text-gray-700">
        @if(isset($name))
            <li class="font-semibold bg-blue-500 text-amber-50 ">{{ $name }} - CEO</li>
        @endif
        <li class="font-semibold">John Doe - Lead Developer</li>
        <li class="font-semibold">Jane Smith - Project Manager</li>
        <li class="font-semibold">Emily Johnson - UX Designer</li>
    </ul>
    
    <p class="mt-4 text-gray-600">Thank you for visiting our application. We hope you find it useful and enjoyable!</p>
</div>
@endsection
