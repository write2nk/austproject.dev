@extends('layouts.app')

@section('content')
<div class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
          method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-grey-darker text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>
        
            <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-darker leading-tight focus:outline-none focus:shadow-outline" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">

            @error('email')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block text-grey-darker text-sm font-bold mb-2">{{ __('Password') }}</label>
            
            <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" required autocomplete="current-password" placeholder="******************">

            @error('password')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>

        <div class="md:flex md:items-center mb-6">
            <label class="md:w-2/3 block text-grey font-bold" for="remember">
            <input class="mr-2 leading-tight" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="text-sm">
                    {{ __('Remember Me') }}
                </span>
            </label>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
    <p class="text-center text-grey text-xs">
        ©2019 African University of Science and Technology. All rights reserved.
    </p>
</div>
@endsection
