<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('css/tailwind.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
<nav class="bg-blue-500 p-4 shadow-md">
    <div class="container mx-auto">
        <a href="{{ url('/') }}" class="text-white text-2xl font-bold">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>
</nav>
<div class="container mx-auto py-8">
    @yield('content')
</div>
<footer class="bg-blue-500 p-4 mt-8 text-center text-white">
    &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
</footer>
</body>
</html>
