@extends('layouts.app')
@section('title', 'Add Student')
@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md"> {{-- Added some container styling --}}
    <h1 class="text-2xl font-bold mb-6 text-center">Add New Student</h1> {{-- Centered heading --}}

    {{-- Success Message --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4 border border-green-400"> {{-- Added border --}}
            {{ session('success') }}
        </div>
    @endif

    {{-- Validation Errors --}}
    @if($errors->any())
        <div class="bg-red-100 text-red-800 p-4 rounded mb-4 border border-red-400"> {{-- Added border --}}
            <ul class="list-disc list-inside"> {{-- Added list styling --}}
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Student Form --}}
    <form action="student" method="POST" class="space-y-4"> {{-- Added spacing between form elements --}}
        @csrf {{-- CSRF token for security --}}

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone:</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        <div>
            <label for="batch" class="block text-sm font-medium text-gray-700">Batch:</label>
            <input type="text" name="batch" id="batch" value="{{ old('batch') }}"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
            <input type="password" name="password" id="password" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div>
            <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Add Student
            </button>
        </div>
    </form>
</div>
@endsection