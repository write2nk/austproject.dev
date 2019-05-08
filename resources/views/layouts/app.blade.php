<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AUST Login') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

    @include('layouts.nav')

    <img src="{{ asset('images/h_bar.png') }}" alt="Vertical Bar" class="h-1 w-full">

    <main class="py-4">
        @yield('content')
    </main>

    <img src="{{ asset('images/h_bar.png') }}" alt="Vertical Bar" class="h-1 w-full">

</div>
</body>
</html>
