<x-app-layout>
    <div class="p-8">
        <div class="relative w-24 h-24 grid place-items-center" x-data="{ circumference: 40 * 2 * Math.PI, percent: 50 }">
            <svg class="w-24 h-24 transform translate-x-1 translate-y-1" x-cloak aria-hidden="true">
                <circle class="text-gray-300/80" stroke-width="8" stroke="currentColor" fill="transparent" r="40" cx="45" cy="45" />
                <circle class="text-custom-color" stroke-width="7" :stroke-dasharray="circumference"
                    :stroke-dashoffset="circumference - percent / 100 * circumference" stroke-linecap="round"
                    stroke="currentColor" fill="transparent" r="40" cx="45" cy="45" />
            </svg>
            <span class="absolute text-3xl text-lime-600 font-['anton']" x-text="`${percent}%`"></span>
        </div>


        <div class="relative w-24 h-24 grid place-items-center" x-data="{ circumference: 40 * 2 * Math.PI, percent: 50 }">
            <svg class="w-24 h-24 transform translate-x-1 translate-y-1" x-cloak aria-hidden="true">
                <circle class="text-gray-300/80" stroke-width="9" stroke="currentColor" fill="transparent" r="40" cx="45" cy="45" />
                <circle class="text-firefly-600" stroke-width="10" :stroke-dasharray="circumference"
                    :stroke-dashoffset="circumference - percent / 100 * circumference" stroke-linecap="round"
                    stroke="currentColor" fill="transparent" r="40" cx="45" cy="45" />
            </svg>
            <span class="absolute text-xl text-firefly-600 font-['anton']" x-text="`${percent}%`"></span>
        </div>





    </div>

</x-app-layout>
