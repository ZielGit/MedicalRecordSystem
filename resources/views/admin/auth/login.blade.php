<x-guest-layout>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <x-jet-authentication-card>
                <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                    {{ __('Login Admin') }}
                </h1>

                <x-jet-validation-errors class="mb-4" />
        
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
        
                <form method="POST" action="{{ url($guard.'/login') }}">
                    @csrf
        
                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1 text-sm form-input" type="email" name="email" :value="old('email')" placeholder="user@gmail.com" required autofocus />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block w-full mt-1 text-sm form-input" type="password" name="password" placeholder="***************" required autocomplete="current-password" />
                    </div>
                    
                    <x-jet-button class="flex items-center justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 transition-colors duration-150 border border-transparent rounded-lg">
                        {{ __('Log in') }}
                    </x-jet-button>

                    <div class="flex flex-row items-center justify-end mt-4">
                        <div class="basis-1/2 mt-2">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-700 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="basis-1/2 mt-2">
                            @if (Route::has('password.request'))
                                <a class="ml-6 text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </x-jet-authentication-card>
        </div>
    </div>
</x-guest-layout>
