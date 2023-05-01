<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('title') - {{ config('app.name') }}</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('landwind/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landwind/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landwind/favicon/favicon-16x16.png') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('flowbite-admin-dashboard/app.css') }}">
        <link rel="stylesheet" href="{{ asset('landwind/css/output.css') }}">

        @stack('styles')
        
        <!-- Scripts -->
        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>

        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body>
        <!-- Start header -->
        @include('front_office.partials.header')
        <!-- End header -->
    
        @yield('section')

        <!-- Start footer -->
        @include('front_office.partials.footer')
        <!-- End footer -->
        
        <!-- Scripts -->
        <script src="{{ asset('flowbite-admin-dashboard/app.bundle.js') }}"></script>
        
        @stack('scripts')
    </body=>
</html>