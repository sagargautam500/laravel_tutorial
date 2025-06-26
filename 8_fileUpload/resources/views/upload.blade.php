@extends('layouts.app')
@section('title', 'File Upload')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        h1 {
            color: #343a40;
            text-align: center;
        }

        p {
            text-align: center;
            color: #6c757d;
        }

        .form-control {
            width: 300px;
        }

        .btn {
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 0.5rem;
        }

        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div>
        <h1>File Upload</h1>
        <p> {{ session('success') }}</p>
        <form action="upload" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="file">Select file to upload:</label>
                <input type="file" name="file" id="file" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>


    <div>
        <h1>Multiple File Upload</h1>
        <form action="multiple-upload" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="files">Select files to upload:</label>
                <input type="file" name="images[]" id="files" class="form-control" multiple required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
@endsection
