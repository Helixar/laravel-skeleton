<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('storage/assets/images/logo/ls-indigo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased">
<div class="relative min-h-screen flex flex-col">
    <div class="min-h-screen bg-blue-gray-900 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        @yield('content')
    </div>
</div>
</body>
</html>
