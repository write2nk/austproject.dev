@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('password.update') }}">
            @csrf
    
            <input type="hidden" name="token" value="{{ $token }}">
    
            <div class="mb-4">
                <label for="email" class="block text-grey-darker text-sm font-bold mb-2">{{ __('E-Mail') }}</label>
    
                <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>
    
            <div class="mb-4">
                <label for="password" class="block text-grey-darker text-sm font-bold mb-2">{{ __('Password') }}</label>
    
                <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" required autocomplete="new-password">

                @error('password')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>
    
            <div class="mb-4">
                <label for="password-confirm" class="block text-grey-darker text-sm font-bold mb-2">{{ __('Confirm Password') }}</label>
    
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
    
            <div class="">
                <button type="submit" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
