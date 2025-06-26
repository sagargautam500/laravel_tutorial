{{-- filepath: c:\Users\SAGAR GAUTAM\Desktop\laravel app\8_fileUpload\resources\views\gallery.blade.php --}}
@extends('layouts.app')
@section('title', 'Image Gallery')
@section('content')

    <style>
        /* Basic styling for the body and heading - might be overridden by app.blade.php */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4; /* Consider removing if app.blade.php sets body background */
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Image Gallery Container */
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Space between cards */
            justify-content: center; /* Center the cards */
            padding: 20px; /* Add some padding around the gallery */
        }

        /* Individual Image Card */
        .image-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Enhanced shadow */
            overflow: hidden; /* Ensures image corners are rounded with the card */
            width: 280px; /* Slightly wider card */
            display: flex; /* Use flexbox for internal layout */
            flex-direction: column; /* Stack content vertically */
            transition: transform 0.3s ease-in-out; /* Smooth hover effect */
        }

        .image-card:hover {
            transform: translateY(-5px); /* Lift card on hover */
            box-shadow: 0 6px 12px rgba(0,0,0,0.15); /* More pronounced shadow on hover */
        }

        .image-card img {
            width: 100%; /* Image fills the card width */
            height: 200px; /* Fixed height for images */
            object-fit: cover; /* Cover the area without distorting aspect ratio */
            display: block; /* Remove extra space below image */
        }

        .image-card .card-content {
            padding: 15px; /* Padding inside the card below the image */
            text-align: center;
            flex-grow: 1; /* Allow content area to grow */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Space out content and button */
        }

        .image-card p {
            font-size: 14px;
            font-weight: 500; /* Slightly bolder text */
            color: #555;
            margin: 0 0 10px 0; /* Add margin below text */
            word-break: break-all; /* Break long URLs */
        }

        /* Delete Button Styling */
        .delete-form {
            margin-top: 10px; /* Space above the button */
        }

        .delete-button {
            background-color: #dc3545; /* Red background */
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
            width: 100%; /* Make button full width of card content area */
        }

        .delete-button:hover {
            background-color: #c82333; /* Darker red on hover */
        }

        /* Message Styling */
        .message {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 4px;
        }

        .message.success {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }

        .message.error {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }

    </style>

    {{-- Display success or error messages --}}
    @if(session('success'))
        <div class="message success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="message error">
            {{ session('error') }}
        </div>
    @endif

    <h1>Image Gallery</h1>

    <div class="image-gallery">
        {{-- Assuming $imageUrls is an array of URLs passed from the controller --}}
        @forelse($images as $image)
            <div class="image-card">
                <img src="{{ $image['url'] }}" alt="Uploaded Image">
                <div class="card-content">
                    <p><strong>Image URL:</strong> {{ $image['url'] }}</p>
                    <p><strong>Path:</strong> {{ $image['path'] }}</p>
                    <form action="delete-image" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="image_url" value="{{ $image['path'] }}">
                        <button type="submit" class="delete-button" onclick="return confirm('Delete this image?');">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p>No images found in the gallery.</p>
        @endforelse
    </div>

@endsection
