<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- front scripts --}}

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon_io/site.webmanifest') }}">

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
    <!-- Font -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:ital,wght@0,400;0,900;1,400;1,900&family=Montserrat:wght@100;400&family=Open+Sans&family=Roboto:wght@300&family=Source+Sans+Pro&display=swap" rel="stylesheet"> --}}


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>


    @livewireStyles

    <!-- Required Meta Tags Always Come First -->
    @stack('scripts')
</head>

<body
    class="bg-firefly-100 dark:bg-slate-900  scrollbar-thin
scrollbar-thumb-firefly-800 dark:scrollbar-thumb-firefly-900 scrollbar-track-gray-300 overflow-y-scroll overflow-x-hidden">
    <livewire:cookie />
    <x-up-next />
    <!-- ========== HEADER ========== -->
    <livewire:layout.main.header />
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="bg-gray-50 dark:bg-slate-900 dark:text-gray-50 md:min-h-screen">
        {{ $slot }}

    </main>

    <!-- Footer -->
    <livewire:layout.footer />
    <!-- End Footer -->
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- JS Implementing Plugins -->
    {{-- <script src="./assets/vendor/preline/dist/preline.js"></script> --}}
    <fc:scripts />
    @livewireScripts

</body>

</html>
