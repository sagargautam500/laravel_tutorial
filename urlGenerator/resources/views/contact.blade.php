@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
            <h1 class="text-3xl font-bold mb-4 text-center">Contact Us</h1>
            <p class="text-gray-600 mb-6 text-center">We would love to hear from you! Please fill out the form below to get
                in touch with us.</p>
        </div>
        <div>
            @if (session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4 text-center border border-green-300 shadow-lg font-semibold animate-bounce">
                {{ session('success') }}
            </div>
            @endif
        </div>
        <div>
            <form class="max-w-md mx-auto bg-white p-8 rounded shadow" method="POST" action="submit-contact">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="name">Name</label>
                    <input class="w-full px-3 py-2 border rounded focus:outline-none focus:ring" type="text"
                        id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="email">Email</label>
                    <input class="w-full px-3 py-2 border rounded focus:outline-none focus:ring" type="email"
                        id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="message">Message</label>
                    <textarea class="w-full px-3 py-2 border rounded focus:outline-none focus:ring" id="message" name="message"
                        rows="4">{{ old('message') }}</textarea>
                    @error('message')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition"
                    type="submit">Send</button>
            </form>

        </div>
    </div>
@endsection
