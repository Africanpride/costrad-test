<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $pageTitle ?? ' ' }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon_io/site.webmanifest') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:ital,wght@0,400;0,900;1,400;1,900&family=Montserrat:wght@100;400&family=Open+Sans&family=Roboto:wght@300&family=Source+Sans+Pro&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<html class="h-full">

<body class="dark:bg-slate-900 bg-gray-100 relative">


    <div class="grid grid-cols-1 md:grid-cols-3  h-screen ">

        <div class="col-span-1 min-h-[450px] md:min-h-screen relative px-8 ">

            <a href="{{  route('home') }}"
            class="z-20 absolute top-4 right-4 cursor-pointer bg-gray-400/20 rounded-full
            flex justify-between items-center "> <span class="text-white pl-3 pr-1 text-[11px] font-bold">Home</span>
                <x-heroicon-o-x-circle class="w-8 h-8 text-firefly-500 dark:text-firefly-600  hover:p-0.5 transition-[padding] ease-in-out delay-150 duration-500"  />
            </a>

            <img src="{{ asset('/images/main/login.jpg') }}" alt="Image Description"
                class="absolute inset-0 h-full w-full object-cover">
            <div class="absolute inset-0 bg-black/80 "></div>
            <div class="flex flex-col justify-center items-start h-full relative  space-y-5 ">
                <div>
                    <x-jet-authentication-card-logo />
                </div>
                <div class="z-10 text-xl space-y-2 divide-y divide-slate-100">

                    <article class="prose">
                        <h2 class="text-white font-[inter] text-3xl ">College of Sustainable Transformation And
                            Development</h2>
                        <h3 class="text-firefly-200">
                            By signing in to your COSTrAD account, you can fully utilize all of our services and enhance
                            your experience with COSTrAD by personalizing it and accessing your most important
                            information from anywhere.
                        </h3>

                        <!-- ... -->
                    </article>
                </div>

            </div>
        </div>
        <div class="col-span-2 h-full flex flex-col justify-center items-center dark:bg-slate-900 bg-gray-100">
            <main class="w-full max-w-lg mx-auto p-6">



                {{ $slot }}
            </main>
        </div>

    </div>

    <fc:scripts />

</body>

</html>
