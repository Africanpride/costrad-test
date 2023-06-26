<header
    class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-md  py-4 bg-white backdrop-blur-md
md:backdrop-blur-none dark:bg-gray-900 text-sm  sticky top-0 inset-x-0  sm:justify-start sm:flex-nowrap
 border-b  sm:py-0  dark:border-gray-700/50">

    <nav class="max-w-[85rem] flex flex-wrap basis-full items-center w-full mx-auto px-4 sm:px-6 lg:px-8 py-3"
        aria-label="Global">
        <a class="flex-none" href="{{ url('/') }}">
            <x-admin.branding />
        </a>

        <div class="flex items-center gap-x-3 ml-auto md:pl-3 md:order-3">
            <div
                class="pl-4 flex justify-between items-center gap-4   md:before:w-px md:before:h-4 before:bg-gray-300 dark:before:bg-gray-700">
                <a class="pl-3" href="https://www.youtube.com/@costrad6590" target="_blank">
                    <img class="h-4" src="{{ asset('images/main/youtube.png') }}" /></a>
                <x-admin.dark-switch />
                <livewire:main-auth-indicator />
            </div>




            <div class="md:hidden">
                <button type="button"
                    class="hs-collapse-toggle p-2.5 inline-flex justify-center items-center gap-2 rounded-md border text-md  bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-firefly-600 transition text-md  dark:bg-gray-900 dark:hover:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800 open"
                    data-hs-collapse="#docs-navbar" aria-controls="docs-navbar" aria-label="Toggle navigation">

                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                        </path>
                    </svg>
                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="docs-navbar"
            class="hs-collapse overflow-hidden transition-all duration-300 basis-full grow ml-auto md:block md:w-auto md:basis-auto md:order-2 open  tracking-wide	"
            style="">
            <div
                class="  font-bold flex flex-col gap-4 mb-5 md:mb-0 md:flex-row md:items-center md:justify-end md:mt-0 md:pl-5 mt-5">



                <div class="text-firefly-700 dark:text-firefly-200 flex justify-start items-center gap-2">
                    <svg class="block w-4 h-4 md:hidden" xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z">
                        </path>
                        <path
                            d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z">
                        </path>
                    </svg>
                    <a href="{{ url('/') }}"
                        class=" text-firefly-700 dark:text-firefly-200 hover:text-firefly-500
                         hover:dark:text-firefly-300
    {{ Request::is('home') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }} ">
                        Home

                    </a>
                </div>
                <div class="text-firefly-700 dark:text-firefly-200 flex justify-start items-center gap-2">
                    <svg class="block w-4 h-4 md:hidden" xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z">
                        </path>
                        <path
                            d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z">
                        </path>
                    </svg>
                    <a href="{{ url('about') }}"
                        class=" text-firefly-700 dark:text-firefly-200 hover:text-firefly-500 hover:dark:text-firefly-300
    {{ Request::is('about') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }} ">
                        About

                    </a>
                </div>


                <livewire:institutes-list />

                <a href="{{ route('news') }}"
                    class="  text-firefly-700 dark:text-firefly-200 hover:text-firefly-500 hover:dark:text-firefly-300
{{ Request::is('news') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }} ">
                    {{-- <svg class="block w-4 h-4 md:hidden" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.81533 12.5C7.81533 13.5989 6.91234 14.5 5.78901 14.5C4.66568 14.5 3.7627 13.5989 3.7627 12.5C3.7627 11.4011 4.66568 10.5 5.78901 10.5H7.81533V12.5Z"
                            stroke="currentColor"></path>
                        <path
                            d="M3.7627 7.5C3.7627 6.40107 4.66568 5.5 5.78901 5.5H7.81533V9.5H5.78901C4.66568 9.5 3.7627 8.59893 3.7627 7.5Z"
                            stroke="currentColor"></path>
                        <path
                            d="M3.7627 2.5C3.7627 1.40107 4.66568 0.5 5.78901 0.5H7.81533V4.5H5.78901C4.66568 4.5 3.7627 3.59893 3.7627 2.5Z"
                            stroke="currentColor"></path>
                        <path
                            d="M8.81543 0.5H10.8417C11.9651 0.5 12.8681 1.40107 12.8681 2.5C12.8681 3.59893 11.9651 4.5 10.8417 4.5H8.81543V0.5Z"
                            stroke="currentColor"></path>
                        <path
                            d="M12.8681 7.5C12.8681 8.59893 11.9651 9.5 10.8417 9.5C9.71841 9.5 8.81543 8.59894 8.81543 7.5C8.81543 6.40106 9.71841 5.5 10.8417 5.5C11.9651 5.5 12.8681 6.40107 12.8681 7.5Z"
                            stroke="currentColor"></path>
                    </svg> --}}
                    {{ __('News') }}
                </a>
                <a href="{{ route('institute.show', [$costrad->slug]) }}"
                    class="  text-firefly-700 dark:text-firefly-200 hover:text-firefly-500 hover:dark:text-firefly-300
{{ Request::is('costrad') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }} ">
                    {{-- <svg class="block w-4 h-4 md:hidden" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.81533 12.5C7.81533 13.5989 6.91234 14.5 5.78901 14.5C4.66568 14.5 3.7627 13.5989 3.7627 12.5C3.7627 11.4011 4.66568 10.5 5.78901 10.5H7.81533V12.5Z"
                            stroke="currentColor"></path>
                        <path
                            d="M3.7627 7.5C3.7627 6.40107 4.66568 5.5 5.78901 5.5H7.81533V9.5H5.78901C4.66568 9.5 3.7627 8.59893 3.7627 7.5Z"
                            stroke="currentColor"></path>
                        <path
                            d="M3.7627 2.5C3.7627 1.40107 4.66568 0.5 5.78901 0.5H7.81533V4.5H5.78901C4.66568 4.5 3.7627 3.59893 3.7627 2.5Z"
                            stroke="currentColor"></path>
                        <path
                            d="M8.81543 0.5H10.8417C11.9651 0.5 12.8681 1.40107 12.8681 2.5C12.8681 3.59893 11.9651 4.5 10.8417 4.5H8.81543V0.5Z"
                            stroke="currentColor"></path>
                        <path
                            d="M12.8681 7.5C12.8681 8.59893 11.9651 9.5 10.8417 9.5C9.71841 9.5 8.81543 8.59894 8.81543 7.5C8.81543 6.40106 9.71841 5.5 10.8417 5.5C11.9651 5.5 12.8681 6.40107 12.8681 7.5Z"
                            stroke="currentColor"></path>
                    </svg> --}}
                    {{ __('COSTrAD') }}
                </a>

                <a href="{{ url('donate') }}">
                    <span
                        class="inline bg-firefly-50 border border-firefly-300 text-firefly-600 text-[.6125rem] leading-4 uppercase rounded-full py-1 px-3 dark:bg-firefly-900/[.75] dark:border-firefly-700 dark:text-firefly-500">{{ __('Donate') }}</span>
                </a>
            </div>
        </div>
    </nav>

</header>
