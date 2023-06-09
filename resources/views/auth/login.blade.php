<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
            {{ __('Sign in to platform ') }}
        </h2>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
            @csrf

            <div>
                <x-front.label for="email" value="{{ __('Email') }}" />
                <x-front.input id="email" type="email" name="email" :value="old('email')" placeholder="user@gmail.com" required autofocus />
            </div>

            <div class="mt-4">
                <x-front.label for="password" value="{{ __('Password') }}" />
                <x-front.input id="password" type="password" name="password" placeholder="***************" required autocomplete="current-password" />
            </div>

            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <x-jet-checkbox class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" id="remember_me" name="remember" />
                </div>
                <div class="ml-3 text-sm">
                    <label for="remember" class="font-medium text-gray-900 dark:text-white">{{ __('Remember me') }}</label>
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500">
                        {{ __('Lost Password?') }}
                    </a>
                @endif
            </div>
            <x-front.button class="w-full text-base sm:w-auto py-3">
                {{ __('Login to your account') }}
            </x-front.button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                {{ __('Not registered?') }} <a class="text-primary-700 hover:underline dark:text-primary-500">{{ __('Create account') }}</a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
