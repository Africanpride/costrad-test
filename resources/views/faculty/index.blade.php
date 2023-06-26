<x-app-layout>

    <div class="gap-4 grid grid-cols-12 p-4">

        <div class="col-span-12 md:col-span-9  xl:col-span-8 space-y-4">
            <livewire:admin.welcome-faculty />
            <div
                class="flex h-8 items-center justify-between text-base font-medium tracking-wide text-slate-700  dark:text-gray-100">
                <h2 class="">
                    Faculty List
                </h2>
                <a href="#"
                    class="border-b border-dotted border-current pb-0.5 text-xs font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">View
                    All</a>
            </div>

            <div class="col-span-12 space-y-4">
                <div class=" grid grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-5">
                    <div
                        class=" md:aspect-square flex flex-col justify-between rounded-lg bg-gray-200 dark:bg-gray-900 p-4 text-firefly-8 00 dark:text-white space-y-3">
                        <div class="flex items-center space-x-4">
                            <div class="avatar">
                                <img class="rounded-full w-10 h-10 " src="{{ Auth::user()?->profile_photo_url }}"
                                    alt="image">
                            </div>
                            <div>
                                <h3 class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                    Travis Fuller 123
                                </h3>
                                <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                    Scaling
                                </p>
                            </div>
                        </div>
                        <div>
                            <p>Thu, 26 March</p>
                            <p class="text-sm font-medium text-slate-700 dark:text-navy-100">
                                08:00
                            </p>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex space-x-2">
                                <button
                                    class="btn h-6 w-6 rounded-full bg-firefly-100 dark:bg-green-500/25 p-0 text-green  grid place-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="green">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </button>
                                <button
                                    class="btn  h-6 w-6 rounded-full bg-red-400/25 p-0 text-error hover:bg-red-100/20 focus:bg-red-100/20 active:bg-red-100/25  grid place-items-center ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <button
                                class="btn  h65 w-6 rounded-full bg-gray-300 p-0 font-medium text-slate-800 hover:bg-slate-200 hover:shadow-lg hover:shadow-slate-200/50 focus:bg-slate-200 focus:shadow-lg focus:shadow-slate-200/50 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:hover:shadow-navy-450/50 dark:focus:bg-navy-450 dark:focus:shadow-navy-450/50 dark:active:bg-navy-450/90  grid place-items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class=" md:aspect-square flex flex-col justify-between rounded-lg bg-gray-200 dark:bg-gray-900 p-4 text-firefly-8 00 dark:text-white space-y-3">
                        <div class="flex items-center space-x-4">
                            <div class="avatar">
                                <img class="rounded-full w-10 h-10 " src="{{ Auth::user()?->profile_photo_url }}"
                                    alt="image">
                            </div>
                            <div>
                                <h3 class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                    Travis Fuller
                                </h3>
                                <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                    Scaling
                                </p>
                            </div>
                        </div>
                        <div>
                            <p>Thu, 26 March</p>
                            <p class="text-sm font-medium text-slate-700 dark:text-navy-100">
                                08:00
                            </p>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex space-x-2">
                                <button
                                    class="btn h-6 w-6 rounded-full bg-firefly-100 dark:bg-green-500/25 p-0 text-green  grid place-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="green">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </button>
                                <button
                                    class="btn  h-6 w-6 rounded-full bg-red-400/25 p-0 text-error hover:bg-red-100/20 focus:bg-red-100/20 active:bg-red-100/25  grid place-items-center ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <button
                                class="btn  h65 w-6 rounded-full bg-gray-300 p-0 font-medium text-slate-800 hover:bg-slate-200 hover:shadow-lg hover:shadow-slate-200/50 focus:bg-slate-200 focus:shadow-lg focus:shadow-slate-200/50 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:hover:shadow-navy-450/50 dark:focus:bg-navy-450 dark:focus:shadow-navy-450/50 dark:active:bg-navy-450/90  grid place-items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class=" md:aspect-square flex flex-col justify-between rounded-lg bg-gray-200 dark:bg-gray-900 p-4 text-firefly-8 00 dark:text-white space-y-3">
                        <div class="flex items-center space-x-4">
                            <div class="avatar">
                                <img class="rounded-full w-10 h-10 " src="{{ Auth::user()?->profile_photo_url }}"
                                    alt="image">
                            </div>
                            <div>
                                <h3 class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                    Travis Fuller
                                </h3>
                                <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                    Scaling
                                </p>
                            </div>
                        </div>
                        <div>
                            <p>Thu, 26 March</p>
                            <p class="text-sm font-medium text-slate-700 dark:text-navy-100">
                                08:00
                            </p>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex space-x-2">
                                <button
                                    class="btn h-6 w-6 rounded-full bg-firefly-100 dark:bg-green-500/25 p-0 text-green  grid place-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="green">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </button>
                                <button
                                    class="btn  h-6 w-6 rounded-full bg-red-400/25 p-0 text-error hover:bg-red-100/20 focus:bg-red-100/20 active:bg-red-100/25  grid place-items-center ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <button
                                class="btn  h65 w-6 rounded-full bg-gray-300 p-0 font-medium text-slate-800 hover:bg-slate-200 hover:shadow-lg hover:shadow-slate-200/50 focus:bg-slate-200 focus:shadow-lg focus:shadow-slate-200/50 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:hover:shadow-navy-450/50 dark:focus:bg-navy-450 dark:focus:shadow-navy-450/50 dark:active:bg-navy-450/90  grid place-items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>



                    <livewire:admin.faculty-table />


            </div>
        </div>



        <div class="col-span-12 md:col-span-3  xl:col-span-4 space-y-4">

            <div class="space-y-4">
                {{-- <div class="rounded-lg bg-gray-200 dark:bg-gray-900 p-4 text-firefly-8 00 dark:text-white space-y-3">

                    <div class="flex justify-between items-center">
                        <div>Latest Member</div>
                        <div>
                            <button type="button"
                                class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full
                    font-medium bg-white text-firefly-800 align-middle hover:bg-firefly-100 focus:outline-none focus:ring-2
                     focus:ring-firefly-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs dark:bg-black
                      dark:hover:bg-slate-800 dark:text-firefly-400 dark:hover:text-white dark:focus:ring-firefly-700 dark:focus:ring-offset-firefly-900">
                                <x-heroicon-o-ellipsis-horizontal class="w-5 h-5 text-current" />
                            </button>
                        </div>
                    </div>

                    <div class="flex justify-between items-center text-sm">
                        <img src="{{ Auth::user()?->profile_photo_url }}" alt="{{ Auth::user()?->full_name }}"
                            class="w-10 h-10 rounded-full">
                        <div class="flex flex-col">
                            <span>Today</span>
                            <span>15:00</span>
                        </div>
                    </div>
                    <div class="flex justify-start items-center">

                        <div class="flex flex-col">
                            <span>{{ Auth::user()?->full_name }}</span>
                            <span class="text-xs text-slate-400 dark:text-navy-300">Checkup</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div>D.O.B</div>
                        <div class="flex flex-col">
                            <span class="text-xs text-slate-400 dark:text-navy-300">12-Sept. - 1981</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div>Weight</div>
                        <div class="flex flex-col">
                            <span class="text-xs text-slate-400 dark:text-navy-300">73 KG</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div>Height</div>
                        <div class="flex flex-col">
                            <span class="text-xs text-slate-400 dark:text-navy-300">173 cm</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div>Last Appointment</div>
                        <div class="flex flex-col">
                            <span class="text-xs text-slate-400 dark:text-navy-300">3rd January 2023</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div>Registration Date</div>
                        <div class="flex flex-col">
                            <span class="text-xs text-slate-400 dark:text-navy-300">3rd January 2021</span>
                        </div>
                    </div>
                </div> --}}
                <livewire:admin.appointment-overview />
                <livewire:admin.mini-calender />

            </div>
        </div>

    </div>


</x-app-layout>
