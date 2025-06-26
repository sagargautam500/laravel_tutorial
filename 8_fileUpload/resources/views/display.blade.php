@extends('layouts.app')
@section('title', 'File Upload Success')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
        }

        img {
            width: 200px;
            height: 300px;
            margin-top: 20px;
        }
    </style>

    @if (isset($uploadedImages) && count($uploadedImages) > 0)
        <div>
            <h2>Uploaded Images</h2>
            @foreach ($uploadedImages as $image)
                <div>
                    <p>File Name: {{ $image['fileName'] }}</p>
                    <p>File Path: {{ $image['path'] }}</p>
                    <p>File URL: <a href="{{ $image['url'] }}" target="_blank">{{ $image['url'] }}</a></p>
                    <div class="mt-3">
                        <img src="{{ $image['url'] }}" alt="Uploaded File">
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div>
            <h1>File Upload Successful</h1>
            <p>File Name: {{ $fileName }}</p>
            <p>File Path: {{ $path }}</p>
            <p>File URL: <a href="{{ $url }}" target="_blank">{{ $url }}</a></p>
            <div class="mt-3">
                <img src="{{ $url }}" alt="Uploaded File">
            </div>

        </div>
    @endif
@endsection
