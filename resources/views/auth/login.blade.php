@extends('welcome')

@section("title", "Log In")

@section("content")

<div class="register_screen_register_div">
    <h1 class="register_screen_register_h1">Belépés</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="input-group">
  	            <label>Felhasználónév</label>
                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="input-group">
  	            <label>Jelszó</label>

                <x-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="input-group_register">
                    {{ __('Log in') }}
                </x-button>
            </div>
            <p>
                Nincs fiókod? <a href="/register">Regisztrálj!</a>
            </p>
        </form>
</div>

@endsection
