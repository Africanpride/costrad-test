<div class=" grid md:grid-cols-12 py-4 gap-x-4 px-4">

    <div
        class="shadow-md w-full md:col-span-8 bg-firefly-100 dark:bg-firefly-800 py-6 px-6 rounded-3xl text-firefly-800 dark:text-white">
        <div class="flex justify-between  items-center mb-8">
            <p class="text-2xl font-bold">Admin Dashboard</p>
            <p class="">{{ now()->format('D, d, F, Y') }}</p>
        </div>
        <div class="flex flex-wrap justify-between items-center pb-8">
            <div class="flex flex-wrap ">
                <div class="pr-10">
                    <div class="text-2xl font-bold">{{ App\Models\User::Staff()->count() }}</div>
                    <div class="">Staff</div>
                </div>
                <div class="pr-10">
                    <div class="text-2xl font-bold font-['lato']">{{ $this->InstitutePercentage() . '%' }}</div>
                    <div class="">Outstanding Institutes</div>
                </div>
                <div>
                    <div class="text-2xl font-bold">{{ App\Models\Institute::count() }}</div>
                    <div class="">Institutes & College</div>
                </div>
            </div>
            <div class="flex items-center mt-4 md:mt-0">
                <button class="dark:text-white bg-transparent" title="List View">
                    <x-heroicon-o-list-bullet class=" flex-shrink-0 w-8 h-8 text-gray-800 dark:text-gray-200" />
                </button>
                <button class="text-white dark:bg-slate-900 bg-firefly-700 p-2 ml-2" title="Grid View">
                    <x-heroicon-o-squares-2x2 class=" flex-shrink-0 w-6 h-6 text-white dark:text-white" />
                </button>
            </div>
        </div>

        <div class="flex flex-wrap">
            @foreach (App\Models\Institute::all() as $institute)
                <div class="w-full md:w-4/12">
                    <div class="p-2">
                        <div class="p-2 rounded-3xl bg-navy-400 ">
                            <div class="flex items-center justify-b">
                                <span
                                    class="text-sm">{{ \Carbon\Carbon::parse($institute->startDate)->format('D, d, F, Y') }}</span>
                            </div>
                            <div class="text-center mb-4 mt-5">
                                <p class="text-base font-bold opacity-70 uppercase">{{ $institute->acronym }}</p>
                                <p class="text-sm opacity-70 mt-2">{{ $institute->name }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-bold m-0">Progress</p>
                                <div class="w-full h-1 rounded-md overflow-hidden bg-white my-2 mx-0"><span
                                        class="block h-1 rounded-md bg-yellow-700 w-6/12"></span></div>
                                <p class="text-right m-0 text-sm font-bold">60%</p>
                            </div>
                            <div class="flex justify-between pt-4 relative">
                                <div class="flex items-center">
                                    <img class="w-5 h-5 rounded-full overflow-hidden object-cover"
                                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;q=80"
                                        alt="participant1"><img
                                        class="w-5 h-5 rounded-full overflow-hidden object-cover"
                                        src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1hbnxlbnwwfHwwfA%3D%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=900&amp;q=60"
                                        alt="participant2"><button
                                        class="w-5 h-5 rounded-full border-none ml-3 p-0 flex justify-center items-center bg-white"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <path d="M12 5v14M5 12h14"></path>
                                        </svg></button>
                                </div>
                                <div class="text-sm rounded-lg flex flex-shrink-0 py-2 px-4 font-bold text-yellow-600">
                                    2 Days Left</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div class=" w-full h-auto md:col-span-4 ">
        <div class="shadow-md dark:bg-gray-900 bg-gray-800 rounded-3xl px-6 pt-6 pb-6 h-full">
            <div class="flex justify-between items-center text-white text-2xl pb-6 font-bold">
                <p>New User Registration</p>
                <button class="text-white dark:bg-slate-900 bg-gray-700 p-2 ml-2" title="Grid View">
                    <x-heroicon-o-queue-list class=" flex-shrink-0 w-6 h-6 text-white dark:text-white" />
                </button>
            </div>
            <div>

                @forelse ($latest as $registrant)
                    <div class="border-t solid border-gray-700 p-4 flex 2xl:items-start w-full hover:bg-gray-700">
                        <img src="{{ $registrant->profile_photo_url }}" alt="profile image"
                            class="object-cover w-10 h-10 rounded-full">
                        <div class="pl-4 w-full">
                            <div class="flex items-center justify-between w-full">
                                <div class="text-white font-medium">{{ $registrant->name }}</div>
                                <div class="flex justify-center items-center cursor-pointer h-7 w-7"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    </svg></div>
                            </div>
                            <p class="my-2 text-sm text-gray-400">{{ $registrant->profile?->bio }}</p>
                            <p class="text-right text-gray-400 text-sm">{{ $registrant->created_at->format('F d, Y') }}
                            </p>
                        </div>
                    </div>

                @empty

                    <div>
                        No Data
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
