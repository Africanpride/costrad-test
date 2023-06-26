<div class="w-full h-auto rounded-lg bg-gray-200 dark:bg-gray-900 text-firefly-8 00 dark:text-white">

        <div class="p-4 h-full space-y-4">
            <div class="flex justify-between items-center">
                <div class="dark:text-white font-bold">Today's Appointments</div>
                <button type="button"
                class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full
                font-medium bg-white text-firefly-800 align-middle hover:bg-firefly-100 focus:outline-none focus:ring-2
                 focus:ring-firefly-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs dark:bg-black
                  dark:hover:bg-slate-800 dark:text-firefly-400 dark:hover:text-white dark:focus:ring-firefly-700 dark:focus:ring-offset-firefly-900">
                <x-heroicon-o-ellipsis-horizontal class="w-5 h-5 text-current" />
            </button>
            </div>
            <div class="py-5" x-data="{ circumference: 100 * 2 * Math.PI, percent: 60 }">
               <div class="flex items-center justify-center -m-6 overflow-hidden  rounded-full relative">
                 <svg class="w-64 h-64 transform translate-x-1 translate-y-1" x-cloak aria-hidden="true">

                   <circle
                     class="text-gray-300"
                     stroke-width="15"
                     stroke="currentColor"
                     fill="transparent"
                     r="100"
                     cx="120"
                     cy="120"
                     />
                   <circle
                     class="text-firefly-800"
                     stroke-width="17"
                     :stroke-dasharray="circumference"
                     :stroke-dashoffset="circumference - percent / 100 * circumference"
                     stroke-linecap="round"
                     stroke="currentColor"
                     fill="transparent"
                     r="100"
                     cx="120"
                     cy="120"
                    />
                 </svg>
                 <span class="absolute text-bold text-5xl text-firefly-800" x-text="`${percent}%`"></span>
               </div>

            </div>

        </div>

</div>
