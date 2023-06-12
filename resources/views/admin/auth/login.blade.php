<x-guest-admin-layout>
    <x-admin.authentication-card>
        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
            {{ __('Login') }}
        </h1>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ url($guard.'/login') }}">
            @csrf

            <x-admin.label for="email" value="{{ __('Email') }}" />
            <x-admin.input id="email" name="email" :value="old('email')" placeholder="user@gmail.com" required autofocus />

            <x-admin.label for="password" class="mt-4" value="{{ __('Password') }}" />
            <x-admin.input id="password" type="password" name="password" placeholder="***************" required autocomplete="current-password" />
            
            <x-admin.button class="w-full mt-4">
                {{ __('Log in') }}
            </x-admin.button>

            <div class="flex flex-row items-center justify-end mt-4">
                <div class="basis-1/2 mt-2">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-700 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="basis-1/2 mt-2 text-right">
                    @if (Route::has('password.request'))
                        <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </div>  
        </form>
    </x-admin.authentication-card>
</x-guest-admin-layout>