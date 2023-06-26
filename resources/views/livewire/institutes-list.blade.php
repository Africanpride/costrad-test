<div
    class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] py-3 md:py-4">
    <span type="button"
        class=" flex items-center w-full text-gray-500 hover:text-gray-400 text-md  dark:text-gray-400 dark:hover:text-gray-500">
        <svg class="block w-4 h-4 md:hidden mr-3 " xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z">
            </path>
            <path
                d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z">
            </path>
        </svg>
        <span
            class="font-bold text-firefly-700 dark:text-firefly-200 hover:text-firefly-500 hover:dark:text-firefly-300">
            <a href="{{ url('institutes') }}">{{ __('Institutes') }}</a>
        </span>
        <svg class="ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor"
                stroke-width="2" stroke-linecap="round"></path>
        </svg>
    </span>

    <div
        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 top-full right-0 md:w-[1200px] min-w-[15rem] bg-white md:shadow-2xl md:px-4 dark:bg-gray-800 dark:divide-gray-700 before:absolute before:-top-5 before:left-0 before:w-full before:h-5 ">
        <div class="mt-5 md:mt-0">
            <div class="md:grid  md:grid-cols-3 gap-x-2 ">

                <div class="flex flex-col mx-1 md:mx-0 py-2">

                    @foreach ($firstFour as $firstFourInstitutes)
                        <a class="group flex gap-x-5 text-gray-800 hover:bg-gray-50 rounded-md p-4 dark:text-gray-200 dark:hover:bg-gray-900"
                            href="{{ route('institute.show', $firstFourInstitutes->slug) }}">
                            <img src="{{ $firstFourInstitutes->institute_logo }}" alt=""
                                class="flex-shrink-0 w-12 h-12 mt-1">
                            <div class="grow">
                                <p class="text-md  text-gray-800 dark:text-gray-200 capitalize">
                                    {{ $firstFourInstitutes->name }} <br/>
                                    <span
                                        class="text-md  text-gray-500 group-hover:text-gray-800 dark:group-hover:text-gray-200 uppercase">
                                        ({{ $firstFourInstitutes->acronym }})
                                        <span class="text-gradient__teal">{{ $firstFourInstitutes->duration }},
                                            {{ now()->format('Y') }}</span>
                                    </span>
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="flex flex-col mx-1 md:mx-0 py-2">
                    @foreach ($lastFour as $lastFourInstitutes)
                        <a class="group flex items-center gap-x-5 text-gray-800 hover:bg-gray-50 rounded-md p-4 dark:text-gray-200 dark:hover:bg-gray-900"
                            href="{{ route('institute.show', $lastFourInstitutes->slug) }}">

                            <img src="{{ $lastFourInstitutes->institute_logo }}" alt=""
                                class="flex-shrink-0 w-12 h-12 mt-1">
                            <div class="grow">
                                <p class="text-md  text-gray-800 dark:text-gray-200 capitalize">
                                    {{ $lastFourInstitutes->name }}
                                    <span
                                        class="text-md  text-gray-500 group-hover:text-gray-800 dark:group-hover:text-gray-200 uppercase">
                                        ({{ $lastFourInstitutes->acronym }})
                                        <span class="text-gradient__teal">{{ $lastFourInstitutes->duration }},
                                            {{ now()->format('Y') }}</span>
                                    </span>
                                </p>
                            </div>
                        </a>
                    @endforeach

                </div>

                <div class="aspect-w-16 aspect-h-9 md:relative">
                    <img class="w-full object-cover md:absolute h-full "
                        src="{{ $nextInstituteBanner->featured_image ?? asset('images/main/lecture.jpg') }}"
                        alt="Image Description">
                </div>

            </div>
        </div>

    </div>
</div>
