<div id="dismiss-alert"
    class="hs-removing:easeOut hs-removing:opacity-0 transition duration-500 relative isolate flex items-center gap-x-4
     overflow-hidden bg-gray-50 dark:bg-black py-2.5 px-6 sm:px-3.5 sm:before:flex-1">
    <svg viewBox="0 0 577 310" aria-hidden="true"
        class="absolute top-1/2 left-[max(-7rem,calc(50%-52rem))] -z-10 w-[36.0625rem] -translate-y-1/2 transform-gpu blur-2xl">
        <path id="1d77c128-3ec1-4660-a7f6-26c7006705ad" fill="url(#49a52b64-16c6-4eb9-931b-8e24bf34e053)" fill-opacity=".3"
            d="m142.787 168.697-75.331 62.132L.016 88.702l142.771 79.995 135.671-111.9c-16.495 64.083-23.088 173.257 82.496 97.291C492.935 59.13 494.936-54.366 549.339 30.385c43.523 67.8 24.892 159.548 10.136 196.946l-128.493-95.28-36.628 177.599-251.567-140.953Z" />
        <defs>
            <linearGradient id="49a52b64-16c6-4eb9-931b-8e24bf34e053" x1="614.778" x2="-42.453" y1="26.617"
                y2="96.115" gradientUnits="userSpaceOnUse">
                <stop stop-color="#9089FC" />
                <stop offset="1" stop-color="#FF80B5" />
            </linearGradient>
        </defs>
    </svg>
    <svg viewBox="0 0 577 310" aria-hidden="true"
        class="absolute top-1/2 left-[max(45rem,calc(50%+8rem))] -z-10 w-[36.0625rem] -translate-y-1/2 transform-gpu blur-2xl">
        <use href="#1d77c128-3ec1-4660-a7f6-26c7006705ad" />
    </svg>
    <div class="flex flex-wrap items-center gap-y-2 gap-x-4">
        <p class="text-sm md:leading-6 text-gray-900 dark:text-white">
            <strong class="font-semibold">{{ $upcomingInstitute->name }} <span
                    class="uppercase">({{ $upcomingInstitute->acronym }})</span>
                <span class="hidden md:inline-flex">{{ Carbon\Carbon::parse($upcomingInstitute->startDate)->year }}</span></strong>
            <svg viewBox="0 0 2 2" class="mx-2 hidden md:inline h-0.5 w-0.5 fill-current" aria-hidden="true">
                <circle cx="1" cy="1" r="1" />
            </svg>

            <span class="md:hidden "><br /></span> Join us in <b>Accra</b> from <span
                class="font-bold">{{ Carbon\Carbon::parse($upcomingInstitute->startDate)->format('M d') }} –
                {{ Carbon\Carbon::parse($upcomingInstitute->endDate)->format('M d') }}</span> for this Special edition.

            <a href="{{ route('institute.show', $upcomingInstitute) }}"
                class="inline-flex gap-2 justify-center items-center rounded-full bg-firefly-800 ml-2 py px-3 text-[10px] font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900"><span>About
                    <span class="uppercase">({{ $upcomingInstitute->acronym }} )</span></span>
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </p>
    </div>
    <div class="flex flex-1 justify-end ">
        <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]"
            data-hs-remove-element="#dismiss-alert">
            <span class="sr-only">Dismiss</span>
            <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path
                    d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
            </svg>
        </button>
    </div>
</div>
