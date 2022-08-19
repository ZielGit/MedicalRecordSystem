<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - {{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Windmill -->
        <link rel="stylesheet" href="{{ asset('windmill/css/tailwind.output.css') }}" />
        
        <!-- Styles -->
        @livewireStyles
        
        @stack('styles')

        {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
        <script src="{{ asset('windmill/js/init-alpine.js') }}"></script>
    </head>
    <body>
        <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
            @include('layouts.sidebar')

            <div class="flex flex-col flex-1 w-full">
                @include('layouts.header')

                <main class="h-full overflow-y-auto">
                    @yield('content')
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
