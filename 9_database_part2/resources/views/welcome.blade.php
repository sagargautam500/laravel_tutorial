@extends('layouts.app')
@section('title', 'Welcome Page')
@section('content')


    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                background-color: #f4f4f4;
                /* Light background for better contrast */
            }

            h1 {
                color: #333;
                text-align: center;
            }

            p {
                font-size: 18px;
                color: #555;
                text-align: center;
            }
        </style>

    </head>

    <body>
        <h1>Welcome to Laravel</h1>
        <p>This is a simple Laravel application.</p>
        <p>Current Nepali time: {{ now()->setTimezone('Asia/Kathmandu')->format('H:i') }}</p>
        <p>Current Nepali date: {{ now()->setTimezone('Asia/Kathmandu')->toDateString() }}</p>

    </body>

    </html>
@endsection
