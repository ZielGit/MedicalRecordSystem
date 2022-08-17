<x-guest-layout>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <x-jet-authentication-card>
                <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                    {{ __('Forgot password') }}
                </h1>

                <div class="mb-4 text-sm text-gray-700 dark:text-gray-400">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
        
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
        
                <x-jet-validation-errors class="mb-4" />
        
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
        
                    <div class="block">
                        <x-jet-label class="text-gray-700 dark:text-gray-400" for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="flex items-center justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            {{ __('Email Password Reset Link') }}
                        </x-jet-button>
                    </div>
                </form>
            </x-jet-authentication-card>
        </div>
    </div>
</x-guest-layout>
