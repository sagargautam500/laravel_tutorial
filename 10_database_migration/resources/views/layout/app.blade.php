<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
</head>
<body>
    <header>
        @include('partial.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partial.footer')
    </footer>
</body>
</html>
