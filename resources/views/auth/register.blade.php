@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('register') }}">
                @csrf
                
                <div class="mb-4">
                    <label for="name" class="block text-grey-darker text-sm font-bold mb-2">{{ __('Name') }}</label>
                    
                    <input id="name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-darker leading-tight focus:outline-none focus:shadow-outline" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                    
                    @error('name')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block text-grey-darker text-sm font-bold mb-2">{{ __('E-Mail') }}</label>
                    
                    <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-darker leading-tight focus:outline-none focus:shadow-outline" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    
                    @error('email')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="password" class="block text-grey-darker text-sm font-bold mb-2">{{ __('Password') }}</label>
                    
                    <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" required autocomplete="new-password" placeholder="******************">
                    
                    @error('password')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="password-confirm" class="block text-grey-darker text-sm font-bold mb-2">{{ __('Confirm Password') }}</label>
                    
                    <input id="password-confirm" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" required autocomplete="new-password" placeholder="******************">
                </div>
                
                <div class="">
                    <button type="submit" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        {{ __('Create Account') }}
                    </button>
                </div>
            </form>
            <p class="text-center text-grey text-xs">
                ©2019 African University of Science and Technology. All rights reserved.
            </p>
        </div>
    </div>
@endsection
