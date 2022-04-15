@extends('welcome')

@section("title", "Log In")

@section("content")

<body   class="login_body">

    <div class="login_background">
        <div class="login_shape"></div>
        <div class="login_shape"></div>
    </div>
    <div class="login_background2">
        <div class="login_shape2"></div>
        <div class="login_shape2"></div>
    </div>


            <form   class="login_inputs" method="POST" action="{{ route('login') }}">
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
                <div class="block_login mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded_login border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2_login text-sm text-gray-600">{{ __('Emlékezz rám!') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Elfelejtetted a jelszavad?') }}
                        </a>
                    @endif

                    <x-button class="input-group_register">
                        {{ __('Belépés') }}
                    </x-button>
                </div>
                <p  class="move_to_register">
                    Nincs fiókod? <a href="/registration">Regisztrálj!</a>
                </p>
            </form>

</body>

@endsection
