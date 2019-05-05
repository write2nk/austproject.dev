<nav class="flex items-center justify-center flex-wrap p-6">
    <div class="flex items-center flex-no-shrink text-white mr-6">
        <img class="mr-2" src="{{ asset('images/aust-logo.png') }}" alt="AUST Logo">
        <img src="{{ asset('images/v_bar.png') }}" alt="Vertical Bar" class="w-2 h-16">
        <span class="text-4xl font-black text-red-dark ml-5">ADMISSIONS</span>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <!-- Main Menu -->
    {{--<div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">--}}
        {{--<div class="text-sm lg:flex-grow">--}}
            {{--<a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">--}}
                {{--Docs--}}
            {{--</a>--}}
            {{--<a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">--}}
                {{--Examples--}}
            {{--</a>--}}
            {{--<a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">--}}
                {{--Blog--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0">Download</a>--}}
        {{--</div>--}}
    {{--</div>--}}
</nav>

<!-- Bootstrap Nav -->
{{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
    {{--<div class="container">--}}
        {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
            {{--{{ config('app.name', 'AUST Application') }}--}}
        {{--</a>--}}
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
            {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}
        {{----}}
        {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
            {{--<!-- Left Side Of Navbar -->--}}
            {{--<ul class="navbar-nav mr-auto">--}}
            {{----}}
            {{--</ul>--}}
            {{----}}
            {{--<!-- Right Side Of Navbar -->--}}
            {{--<ul class="navbar-nav ml-auto">--}}
                {{--<!-- Authentication Links -->--}}
                {{--@guest--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                    {{--</li>--}}
                    {{--@if (Route::has('register'))--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                        {{--</li>--}}
                    {{--@endif--}}
                    {{--@else--}}
                        {{--<li class="nav-item dropdown">--}}
                            {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                            {{--</a>--}}
                            {{----}}
                            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                   {{--onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
                                    {{--{{ __('Logout') }}--}}
                                {{--</a>--}}
                                {{----}}
                                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                    {{--@csrf--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--@endguest--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}