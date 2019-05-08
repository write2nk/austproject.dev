<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AUST Login') }}</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">


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
<!-- Footer -->
<div class="flex flex-col sticky pin-b">
    <img src="{{ asset('images/h_bar.png') }}" alt="Vertical Bar" class="h-1 w-full">
    <div class="flex items-center justify-center mt-3">
        <a class="no-underline" href="https://aust.edu.ng/">AUST Home Page</a>
        <a class="no-underline ml-5" href="https://aust.edu.ng/admission/regular-m-sc-phd/eligibility-for-admission">Eligibility for Admission</a>
    </div>
</div>
</body>
</html>
