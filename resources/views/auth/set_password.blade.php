<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon_io/site.webmanifest') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:ital,wght@0,400;0,900;1,400;1,900&family=Montserrat:wght@100;400&family=Open+Sans&family=Roboto:wght@300&family=Source+Sans+Pro&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

</head>

<body
    class="bg-gray-100 dark:black scrollbar-thin w-full h-screen overflow-hidden
scrollbar-thumb-firefly-800 scrollbar-track-gray-300 overflow-x-hidden overflow-y-scroll ">

<div class="max-w-lg p-8 mx-auto h-screen grid place-items-center">

    <livewire:admin.create-new-password />
</div>



@livewireScripts
</body>

</html>
