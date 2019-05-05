<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>{{ config('app.name', 'Application Login') }}</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}

                        {{--@if (Route::has('register'))--}}
                            {{--<a href="{{ route('register') }}">Register</a>--}}
                        {{--@endif--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}
        {{----}}
        {{--<div class="content">--}}
            {{--<div class="title m-b-md">--}}
                {{--AUST Application--}}
            {{--</div>--}}
        {{--</div>--}}
        {{----}}
        {{--<div class = "app_guideline">--}}
            {{--<p>welcome to AUST Application System</p>--}}
            {{--<p> This page provides you with the basic information you would need for your application--}}
            {{--We strongly recommend that you have the following information ready as at your time of application</p>--}}
            {{--<ul>--}}
                {{--<li><b>Statement of purpose:</b> You are expected to provide a one page summary of your reason for selecting the course for which--}}
                {{--you are applying for. You should include your interest and experience in this subject area, your reason for choosing the particular--}}
                {{--course and AUST, your aim/career plan and how the course of study connects your future plan</li>--}}
                {{--<li> Statement of Results</li>--}}
                {{--<li>Academic Transcript</li>--}}
                {{--<li>Passport photograph: It must not be more than 1MB and must be in jpg or jpeg format</li>--}}
                {{--<li>Research Proposal: for PhD candidates only</li>--}}
                {{--<li>Atleast 2 Reference </li>--}}
            {{--</ul>--}}
    {{----}}
        {{--</div>--}}
        <div class="container">
            
            <div class="flex items-center h-32">
                <img src="{{ asset('images/aust-logo.png') }}" alt="AUST Logo">
                <img src="{{ asset('images/vertical_bar.png') }}" alt="Vertical Bar" class="w-2 h-16">
                <span class="text-5xl font-black text-red-dark ml-5">ADMISSIONS</span>
            </div>
            
            
        </div>
    </body>
</html>
