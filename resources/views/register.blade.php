@extends('welcome')

@section("title", "Log In")

@section("content")

<body   class="register_body">

    <div class="register_background">
        <div class="register_shape"></div>
        <div class="register_shape"></div>
    </div>
    <div class="register_background2">
        <div class="register_shape2"></div>
        <div class="register_shape2"></div>
    </div>

            <form   class="register_inputs" method="POST" action="{{ route('register') }}">
                @csrf

                    <!-- Name -->
                <div    class="input-group">
                    <x-label for="name" :value="__('Név')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                    <!-- Email Address -->
                <div class="mt-4 input-group">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4 input-group">
                    <x-label for="telephone" :value="__('Telefonszám')" />

                    <x-input id="telephone" class="block mt-1 w-full" type="tel" name="telephone" :value="old('telephone')" required />
                </div>

                    <!-- Password -->
                <div class="mt-4 input-group">
                    <x-label for="password" :value="__('Jelszó')" />

                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>

                    <!-- Confirm Password -->
                <div class="mt-4 input-group">
                    <x-label for="password_confirmation" :value="__('Jelszó megerősítése')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Már van fiókod?') }}
                    </a>

                    <div class="asdf">
                        <x-button class="register_ml-4 input-group_register">
                            {{ __('Regisztráció') }}
                        </x-button>
                    </div>
</body>
@endsection
