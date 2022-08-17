<x-guest-layout>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <x-jet-authentication-card>
                <div class="mb-4 text-sm text-gray-700 dark:text-gray-400">
                    {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>
        
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                    </div>
                @endif
        
                <div class="mt-4">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
        
                        <div class="flex items-center justify-end mt-4">
                            <x-jet-button class="justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit">
                                {{ __('Resend Verification Email') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
                <div class="flex flex-row justify-between mt-4">
                    <div>
                        <a
                            href="{{ route('profile.show') }}"
                            class="basis-1/2 ml-4 text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                        >
                        {{ __('Edit Profile') }}</a>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('logout') }}" class="basis-1/2 inline">
                            @csrf
        
                            <button type="submit" class="mr-4 text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </x-jet-authentication-card>
        </div>
    </div>
</x-guest-layout>
