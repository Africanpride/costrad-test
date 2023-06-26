<x-front-layout>

    <section class="relative z-20 overflow-hidden p-6 pt-24 pb-12 ">
        <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[920px] text-center lg:mb-20 space-y-3">
                <x-top-title>
                    COSTrAD: Begin the Journey in Earnest
                    <x-slot name="icon">
                        <x-lucide-trending-up class="dark:text-white  w-5 h-5 " />
                    </x-slot>


                    <x-slot name="paragraph">
                        The College of Sustainable Transformation and Development (<a href="{{ url('costrad') }}"
                            class=" bg-clip-text bg-gradient-to-l from-firefly-600 to-violet-500 text-transparent dark:from-firefly-400 dark:to-violet-400 font-bold">COSTrAD</a>)
                        is an initiative of the Logos-Rhema Foundation for Leadership Resource Development, a
                        Non-Governmental Foundation registered in Ghana.
                    </x-slot>

                </x-top-title>
            </div>
        </div>
        <!-- vision -->

        <!-- End vision -->

        <div class="absolute bottom-0 right-0 z-[-1] opacity-10">
            <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none" xmlns="http://www.w3.org/2000/svg">
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

        <nav class="flex justify-center items-center  space-x-4" aria-label="Tabs" role="tablist">
            <div class="border-b border-firefly-200  dark:border-firefly-700 max-w-xl font-extrabold">
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-firefly-600 hs-tab-active:text-firefly-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-md whitespace-nowrap text-gray-500 hover:text-firefly-500 active"
                    id="basic-tabs-item-1" data-hs-tab="#basic-tabs-1" aria-controls="basic-tabs-1" role="tab">
                    All Topics
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-firefly-600 hs-tab-active:text-firefly-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-md whitespace-nowrap text-gray-500 hover:text-firefly-500"
                    id="basic-tabs-item-2" data-hs-tab="#basic-tabs-2" aria-controls="basic-tabs-2" role="tab">
                    Family
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-firefly-600 hs-tab-active:text-firefly-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-md whitespace-nowrap text-gray-500 hover:text-firefly-500"
                    id="basic-tabs-item-3" data-hs-tab="#basic-tabs-3" aria-controls="basic-tabs-3" role="tab">
                    Mindset
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-firefly-600 hs-tab-active:text-firefly-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-md whitespace-nowrap text-gray-500 hover:text-firefly-500"
                    id="basic-tabs-item-3" data-hs-tab="#basic-tabs-4" aria-controls="basic-tabs-4" role="tab">
                    Economy
                </button>
            </div>
        </nav>
        <div class="mx-auto">
            <div class="container mx-auto">

                <div class="mt-3 p-4">
                    <div id="basic-tabs-1" role="tabpanel" aria-labelledby="basic-tabs-item-1">
                        <div class="grid grid-cols-2  lg:grid-cols-6 gap-4">

                            <div
                                class="inline-flex justify-start rounded-2xl items-center gap-2 p-4
                            w-auto border dark:bg-firefly-900 dark:border-firefly-600/20  ">
                                <span>
                                    <x-lucide-globe class="text-slate-400 w-8 h-8" />
                                </span>
                                <div><span class="text-xs">Title</span>
                                    <p class="text-[9px]">Details</p>
                                </div>
                            </div>
                            <div
                                class="inline-flex justify-start rounded-2xl items-center gap-2 p-4
                            w-auto border bg-slate-900/10 dark:border-slate-500/20  ">
                                <span>
                                    <x-lucide-globe class="text-slate-400 w-8 h-8" />
                                </span>
                                <div><span class="text-xs">Title</span>
                                    <p class="text-[9px]">Details</p>
                                </div>
                            </div>
                            <div
                                class="inline-flex justify-start rounded-2xl items-center gap-2 p-4
                            w-auto border bg-slate-900/10 dark:border-slate-500/20  ">
                                <span>
                                    <x-lucide-globe class="text-slate-400 w-8 h-8" />
                                </span>
                                <div><span class="text-xs">Title</span>
                                    <p class="text-[9px]">Details</p>
                                </div>
                            </div>
                            <div
                                class="inline-flex justify-start rounded-2xl items-center gap-2 p-4
                            w-auto border bg-slate-900/10 dark:border-slate-500/20  ">
                                <span>
                                    <x-lucide-globe class="text-slate-400 w-8 h-8" />
                                </span>
                                <div><span class="text-xs">Title</span>
                                    <p class="text-[9px]">Details</p>
                                </div>
                            </div>
                            <div
                                class="inline-flex justify-start rounded-2xl items-center gap-2 p-4
                            w-auto border bg-slate-900/10 dark:border-slate-500/20  ">
                                <span>
                                    <x-lucide-globe class="text-slate-400 w-8 h-8" />
                                </span>
                                <div><span class="text-xs">Title</span>
                                    <p class="text-[9px]">Details</p>
                                </div>
                            </div>
                            <div
                                class="inline-flex justify-start rounded-2xl items-center gap-2 p-4
                            w-auto border bg-slate-900/10 dark:border-slate-500/20  ">
                                <span>
                                    <x-lucide-globe class="text-slate-400 w-8 h-8" />
                                </span>
                                <div><span class="text-xs">Title</span>
                                    <p class="text-[9px]">Details</p>
                                </div>
                            </div>
                            <div
                                class="inline-flex justify-start rounded-2xl items-center gap-2 p-4
                            w-auto border bg-slate-900/10 dark:border-slate-500/20  ">
                                <span>
                                    <x-lucide-globe class="text-slate-400 w-8 h-8" />
                                </span>
                                <div><span class="text-xs">Title</span>
                                    <p class="text-[9px]">Details</p>
                                </div>
                            </div>
                            <div
                                class="inline-flex justify-start rounded-2xl items-center gap-2 p-4
                            w-auto border bg-slate-900/10 dark:border-slate-500/20  ">
                                <span>
                                    <x-lucide-globe class="text-slate-400 w-8 h-8" />
                                </span>
                                <div><span class="text-xs">Title</span>
                                    <p class="text-[9px]">Details</p>
                                </div>
                            </div>
                            <div
                                class="inline-flex justify-start rounded-2xl items-center gap-2 p-4
                            w-auto border bg-slate-900/10 dark:border-slate-500/20  ">
                                <span>
                                    <x-lucide-globe class="text-slate-400 w-8 h-8" />
                                </span>
                                <div><span class="text-xs">Title</span>
                                    <p class="text-[9px]">Details</p>
                                </div>
                            </div>
                            <div
                                class="inline-flex justify-start rounded-2xl items-center gap-2 p-4
                            w-auto border bg-slate-900/10 dark:border-slate-500/20  ">
                                <span>
                                    <x-lucide-globe class="text-slate-400 w-8 h-8" />
                                </span>
                                <div><span class="text-xs">Title</span>
                                    <p class="text-[9px]">Details</p>
                                </div>
                            </div>
                            <div
                                class="inline-flex justify-start rounded-2xl items-center gap-2 p-4
                            w-auto border bg-slate-900/10 dark:border-slate-500/20  ">
                                <span>
                                    <x-lucide-globe class="text-slate-400 w-8 h-8" />
                                </span>
                                <div><span class="text-xs">Title</span>
                                    <p class="text-[9px]">Details</p>
                                </div>
                            </div>
                            <div
                                class="inline-flex justify-start rounded-2xl items-center gap-2 p-4
                            w-auto border bg-slate-900/10 dark:border-slate-500/20  ">
                                <span>
                                    <x-lucide-globe class="text-slate-400 w-8 h-8" />
                                </span>
                                <div><span class="text-xs">Title</span>
                                    <p class="text-[9px]">Details</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="basic-tabs-2" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-2">
                        <p class="text-gray-500 dark:text-gray-400">
                            This is the <em class="font-semibold text-gray-800 dark:text-gray-200">second</em> item's
                            tab
                            body.
                        </p>
                    </div>
                    <div id="basic-tabs-3" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-3">
                        <p class="text-gray-500 dark:text-gray-400">
                            This is the <em class="font-semibold text-gray-800 dark:text-gray-200">third</em> item's
                            tab
                            body.
                        </p>
                    </div>
                    <div id="basic-tabs-4" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-4">
                        <p class="text-gray-500 dark:text-gray-400">
                            4th This is the <em class="font-semibold text-gray-800 dark:text-gray-200">4th</em> item's
                            tab
                            body.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <livewire:subscribe />
</x-front-layout>
