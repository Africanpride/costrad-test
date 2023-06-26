<x-front-layout>

    <section class="max-w-8xl p-4 md:px-8 md:pr-10 mx-auto h-auto  ">
        <div class="{{ $isMobile ? '' : 'kenburns' }} min-h-[55vh] bg-center bg-cover bg-no-repeat relative rounded-3xl md:min-h-[85vh]"
            style="background-image: url('{{ asset('images/main/un2.jpg') }}');">


            <div
                class="absolute bottom-0 left-0 right-0 max-w-md text-center mx-auto p-6 md:left-auto md:text-left md:mx-0">
                <!-- Card -->
                <div class="bg-white dark:bg-gray-900 flex-col gap-4 inline-flex justify-between md:p-4 px-2 rounded-2xl shadow-2xl">
                    <div class="hidden md:block">
                        <h3 class=" font-bold text-gray-800 text-sm dark:text-gray-200"> COSTrAD: A Critical Mandate.
                        </h3>
                        <p class="mt-2 text-gray-800 dark:text-gray-200 text-xs text-left">The College of Sustainable
                            Transformation and Development (COSTrAD) and the various institutes are committed to the
                            restoration, transformation and development of all spheres of society.</p>
                    </div>

                    <div class="inline-flex">
                        <a class="p-2 md:p-0 flex items-center gap-2 text-xs text-gray-800 hover:text-gray-500 dark:text-white dark:hover:text-gray-400"
                            href="#">
                            <svg class="w-4 h-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path
                                    d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z">
                                </path>
                            </svg>
                            Watch our AudioVisual
                        </a>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </section>

    <section class="w-full items-center flex flex-col justify-center py-8">
        <svg width="317" height="120" viewBox="0 0 317 120" fill="none">
            <path transform="translate(-36,0)" d="m197.32283 25.03412l-0 100.48032" stroke="gray" stroke-opacity="0.2">
            </path>
            <path transform="translate(-36,0)" d="m197.32283 25.03412l-0 100.48032" stroke="url(#pulse-1)"
                stroke-linecap="round" stroke-width="2"></path>
            <path d="m197.32283 25.03412-0 20" stroke="gray"
                style="transform: translateX(-36px) translateY(118.724px); transform-origin: 197.323px 35.0341px;"
                transform-origin="197.3228302001953px 35.034119606018066px"></path>
        </svg>
        <h2
            class="mt-4 max-w-5xl text-slate-900 text-xl md:text-5xl tracking-tight font-bold  font-['inter'] uppercase prominent-titles">
            ...doing the seemingly impossible.
        </h2>
        {{-- <h2
            class=" text-slate-800 px-5 text-gradient1 inline-block mt-5 text-3xl md:text-4xl font-extrabold  bg-clip-text bg-gradient-to-l from-firefly-600 to-violet-500 text-transparent dark:from-firefly-400 dark:to-violet-400 uppercase">
            ...doing the seemingly impossible.
        </h2> --}}
        <span class="text-lg text-gray-400 text-center mt-2 px-6 sm:px-0">
            Explore what COSTrAD can help you achieve.
        </span>
    </section>
    <!-- component -->
    <section class="max-w-8xl p-4 md:px-8 md:pr-10 mx-auto h-auto">
        <div
            class="py-10 bg-gray-200/50 dark:bg-transparent dark:border-gray-500/20 dark:border  sm:py-16 lg:py-24 rounded-3xl">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-stretch gap-y-10 md:grid-cols-2 md:gap-x-8">
                    <div class="relative grid grid-cols-2 gap-4 mt-10 md:mt-0">
                        <div class="overflow-hidden aspect-w-3 aspect-h-4 rounded-2xl">
                            <img class="object-cover object-top origin-top scale-150 "
                                src="{{ asset('images/main/leader2.jpg') }}" alt="" />
                        </div>

                        <div class="relative">
                            <div class="h-full overflow-hidden aspect-w-3 aspect-h-4 rounded-2xl">
                                <img class="object-cover object-top origin-top scale-150"
                                    src="{{ asset('images/main/leader4.jpg') }}" alt="" />
                            </div>

                        </div>

                        <div class="absolute -translate-x-1/2 left-1/2 -top-16 ">
                            <img class="w-32 h-32 rotating" src="{{ asset('images/main/round-text-costrad.png') }}"
                                alt="" />
                        </div>
                    </div>

                    <div class="flex flex-col items-start justify-between md:px-8 space-y-3">

                        <h2
                            class="uppercase  text-slate-800 text-gradient1 inline-block mt-5 text-2xl md:text-3xl font-extrabold  bg-clip-text bg-gradient-to-l from-firefly-600 to-violet-500 text-transparent dark:from-firefly-400 dark:to-violet-400 ">
                            The Vital Role of Leadership Training Today
                        </h2>
                        <p class="hidden">
                            At COSTrAD, You would find out more reasons why leadership training is essential and how
                            leadership impacts family, governance, economy and every aspect of society. We teach you
                            the necessary skills and qualities to effectively lead and manage people, organizations,
                            and systems. Leaders must possess strong communication, decision-making, and
                            problem-solving skills, as well as the ability to inspire and motivate others.

                        </p>
                        <p>
                            Effective leadership involves being able to adapt to changing circumstances and make
                            difficult decisions when necessary. Through COSTrAD and it's various Institutes,
                            individuals, business leader and political leaders can gain the knowledge and skills
                            necessary to navigate complex political and social environments, build strong teams, and
                            create positive change within their
                            communities. Do you want to acquire what it takes to make a mark in your area of
                            operation? Book your seat early as space could fill up quickly.
                        </p>


                        <div class=" w-full mx-auto pt-3">
                            <a href="{{ url('about') }}">
                                <button class="cbutton !py-1 font-bold" style="width:50%;">Learn More About
                                    costrad</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="max-w-8xl p-4 md:px-8 md:pr-10 mx-auto h-auto">

        <div
            class=" min-h-[600px] mx-auto rounded-2xl border  border-gray-300/10 text-center space-y-5
         bg-slate-500/10 dark:bg-black py-16 dark:bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))]
          from-slate-900 to-gray-900">
            <livewire:what-is-costrad />

        </div>
    </section>

    <section class="max-w-8xl p-4 md:px-8 md:pr-10 mx-auto h-auto">

        <div
            class=" min-h-[600px] mx-auto rounded-2xl border  border-gray-300/10 text-center space-y-5
         bg-slate-500/10 dark:bg-black py-16 dark:bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))]
          from-slate-900 to-gray-900">
            <livewire:institutes-card />

        </div>

    </section>

    <section class="max-w-8xl p-4 md:px-8 md:pr-10 mx-auto h-auto">
        <div
            class=" min-h-[600px] mx-auto rounded-2xl border  border-gray-300/10 text-center space-y-5 p-8
         bg-slate-500/10 dark:bg-black py-16 dark:bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))]
          from-slate-900 to-gray-900">
            <div class="lg:px-8 max-w-8xl md:my-16 mx-auto px-4 space-y-5 text-center">
                <h2
                    class="  text-slate-900 text-3xl sm:text-5xl tracking-tight font-bold  font-['inter'] uppercase prominent-titles">
                    News & Publications</h2>
                <p class="my-2 text-2xl font-bold
                text-slate-800 px-5 dark:text-white">
                    Providing valuable resources for researchers and analysts keen on staying up-to-date with the latest
                    developments in the 8-spheres of society.
                </p>
                <p class="text-lg leading-6 font-semibold text-sky-500 "><span>
                        <a href="{{ route('news') }}">More News & Publications</a></span> </p>
            </div>

            <div class="grid gap-4 md:grid-cols-4 sm:mx-auto md:max-w-full">
                @if ($latest->count() > 0)

                    @foreach ($latest as $article)
                        <!-- Card -->
                        <a class="group block" href="{{ route('news.show', [$article]) }}">
                            <div
                                class="flex-shrink-0 relative w-full rounded-xl overflow-hidden h-[200px] before:absolute before:inset-x-0 before:w-full before:h-full before:bg-gradient-to-t before:from-gray-900/[.7] before:z-[1]">
                                <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out w-full h-full absolute top-0 left-0 object-cover rounded-xl"
                                    src="{{ $article->getFirstMediaUrl('featured_image') ? $article->getFirstMediaUrl('featured_image') : $article->featured_image }}&auto=format&fit=crop&w=1062&q=80"
                                    alt="{{ $article->title }}">
                            </div>

                            <h3
                                class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-gray-300 dark:group-hover:text-white">
                                {{ $article->title }}
                            </h3>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                {{ $article->created_at->format('d M Y') }}
                            </p>
                        </a>
                        <!-- End Card -->
                    @endforeach

                @endif

            </div>
        </div>
    </section>

    <section class="max-w-8xl p-4 md:px-8 md:pr-10 mx-auto h-auto  ">
        <div class="{{ $isMobile ? '' : 'kenburns' }} min-h-[55vh] bg-center bg-cover bg-no-repeat relative rounded-3xl md:min-h-[85vh]"
            style="background-image: url('{{ asset('images/main/quarterglobe.jpg') }}');">

            <div class="bottom-0 left-0 md:left-auto md:mx-0 md:text-left mx-auto p-6 right-0 text-center">
                <!-- Card -->
                <div
                    class="min-h-[35vh]  bg-center bg-cover bg-no-repeat relative  md:min-h-[85vh] h-full text-center flex justify-center items-center  ">
                    <h1 class=" max-w-6xl md:text-3xl uppercase font-['anton'] text-3xl lg:text-4xl text-gray-100 ">
                        We invite you to partner with us in developing leaders who have the capacity and vision to
                        create
                        lasting and positive change in all domains of life.
                    </h1>

                </div>
                <!-- End Card -->
            </div>
        </div>
    </section>




    <!-- Hero -->
    <div class="relative overflow-hidden hidden">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            {{-- <div class="max-w-2xl text-center mx-auto">
                <h1 class="dark:title-gradient ">Designed for

                </h1>
                <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Build your business here. Take it anywhere.</p>
            </div> --}}

            <div class="mt-10 relative max-w-5xl mx-auto">

                {{-- <div
                    class="w-full object-cover h-96 sm:h-[480px]
                     bg-[url({{ asset('/storage/files/986bcb09-ec3c-4975-8302-d979b4f28608/quarterglobe.jpeg') }})] bg-no-repeat bg-center bg-cover rounded-xl"> --}}
                <div class="w-full object-cover h-96 sm:h-[480px]
                     bg-no-repeat bg-center bg-cover rounded-xl"
                    style="background-image: url('{{ asset('images/main/quarterglobe.jpg') }}');">
                </div>

                <div class="absolute inset-0 w-full h-full">
                    <div class="flex flex-col justify-center items-center w-full h-full">
                        <a class="inline-flex justify-center items-center gap-x-1.5 text-center  bg-white text-gray-800 hover:text-gray-600 rounded-full transition focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white  py-3 px-4 dark:bg-black dark:text-gray-200 dark:hover:text-gray-400 dark:focus:ring-offset-black"
                            href="#">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
                            </svg>
                            Play the overview
                        </a>
                    </div>
                </div>

                <div
                    class="absolute bottom-12 -left-20 -z-[1] w-48 h-48 bg-gradient-to-b from-orange-500 to-white p-px rounded-lg dark:to-slate-900">
                    <div class="bg-white w-48 h-48 rounded-lg dark:bg-slate-900"></div>
                </div>

                <div
                    class="absolute -top-12 -right-20 -z-[1] w-48 h-48 bg-gradient-to-t from-blue-600 to-cyan-400 p-px rounded-full">
                    <div class="bg-white w-48 h-48 rounded-full dark:bg-slate-900"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->



    <div class="absolute bottom-0 right-0 z-[-1]">
        <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5"
                d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                fill="url(#paint0_linear)"></path>
            <defs>
                <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#3056D3" stop-opacity="0.36"></stop>
                    <stop offset="1" stop-color="#F5F2FD" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144"></stop>
                </linearGradient>
            </defs>
        </svg>
    </div>

    <livewire:subscribe />
</x-front-layout>
