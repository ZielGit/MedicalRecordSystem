@section('title')
    {{ __('User Profile') }}
@endsection
<x-app-layout>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="max-w-screen-2xl mx-auto">
            <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
                @include('front_office.partials.sidebar')

                <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
                    <main>
                        <div class="px-4 py-6">
                            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                <div>
                                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                            @livewire('profile.update-profile-information-form')
                                
                                            <x-jet-section-border />
                                        @endif
                                
                                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.update-password-form')
                                            </div>
                                
                                            <x-jet-section-border />
                                        @endif
                                
                                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.two-factor-authentication-form')
                                            </div>
                                
                                            <x-jet-section-border />
                                        @endif
                                
                                        <div class="mt-10 sm:mt-0">
                                            @livewire('profile.logout-other-browser-sessions-form')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>