<div>

    <div class="text-sm flex items-center justify-between w-full ">
        <span class="font-semibold">Faculty Members ({{ App\Models\User::faculty()->count() }})</span>
        <a href="#" class="text-accent-400 font-medium text-sm">View all</a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4  ">


        <div class="aspect-square rounded-2xl  bg-gray-200 dark:bg-slate-900 text-gray-500 hover:ring-2 hover:ring-gray-300 hover:dark:ring-gray-700 flex justify-center items-center flex-col text-accent-400 text-sm
        hover:shadow hover:text-accent-500 hover:font-medium group cursor-pointer "
            wire:click='$emit("openModal", "admin.faculty.add-faculty")'>
            <span
                class="bg-firefly-50 dark:bg-black rounded-full group-hover:text-accent-500  text-accent-400 p-2.5
            border border-current hover:border-secondary-focus  border-dashed mb-3">
                <label for="my-modal-3" class="cursor-pointer ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-current" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </label>
            </span>
            <label for="my-modal-3" class="cursor-pointer ">
                <div class="dark:text-white">Add New</div>
            </label>
        </div>


        @forelse ($facultys as $faculty)
            {{-- @if ($loop->first) @continue  @endif --}}
            {{-- Exclude Current faculty from Faculty list --}}
            {{-- @if ($faculty->id === Auth::faculty()->id)
                @continue
            @endif --}}

            <div
                class="aspect-square rounded-2xl  bg-gray-200 dark:bg-slate-900 text-gray-500 hover:ring-2 hover:ring-gray-300 hover:dark:ring-gray-700 flex justify-center items-center flex-col text-accent-400 text-sm
                hover:shadow hover:text-accent-500 hover:font-medium group relative ">

                <div class="absolute top-2 right-2 cursor-pointer" onclick="Livewire.emit('openModal', 'admin.faculty.delete-faculty', {{ json_encode([$faculty->id]) }})">
                    <div
                        class="cursor-pointer delay-200  duration-500 bg-red-50 dark:bg-red-500/10 transition-colors dark:hover:bg-red-500/20  hover:bg-red-100  grid h-8 place-items-center rounded-full w-8">
                        <x-heroicon-o-x-circle class="w-6 h-6 text-red-500"  />
                    </div>
                </div>
                <span class="relative">

                    <img src="{{ $faculty->profile_photo_url }}" class="w-14 h-14 rounded-full mb-3"
                        alt="{{ $faculty->full_name }}" srcset="">

                    @if ($faculty->isOnline())
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-3 w-3  fill-green-500 stroke-white stroke-2 absolute bottom-3 right-1"
                            viewBox="0 0 24 24">
                            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z">
                            </path>
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-3 w-3  fill-red-500 stroke-white stroke-2 absolute bottom-3 right-1"
                            viewBox="0 0 24 24">
                            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z">
                            </path>
                        </svg>
                    @endif
                </span>

                <div class="text-gray-500 dark:text-white">{{ $faculty->full_name }}</div>
                <div class="flex gap-2 items-center justify-center">
                    <div class="text-xxs text-firefly-400 mt-1  cursor-pointer "
                        onclick="Livewire.emit('openModal', 'admin.faculty.update-faculty', {{ json_encode([$faculty->id]) }})">
                        <span
                            class="inline bg-blue-50 border border-blue-300 text-blue-600 text-[.6125rem] leading-4  rounded-full py-0.5 px-2 dark:bg-blue-900/[.75] dark:border-blue-700 dark:text-white">Edit
                            Faculty</span>
                    </div>
                    <div class="text-xxs text-firefly-400 mt-1  ">
                        @if ($faculty->active == 1)
                        <span
                        class="inline bg-green-50 border border-green-500 text-green-600 text-[.6125rem] leading-4  rounded-full py-0.5 px-2 dark:bg-green-900/[.75] dark:border-green-700 dark:text-white">Active
                        Active</span>
                        @else
                            <span
                                class="inline bg-red-100 dark:bg-black  border border-red-600 text-red-600 text-[.6125rem] leading-4  rounded-full py-0.5 px-2
                                  dark:border-red-700 dark:text-white">
                                {{ __('Inactive') }}
                            </span>
                        @endif

                    </div>
                </div>
            </div>

        @empty

            {{ __('Account is Currently Empty') }}
        @endforelse
    </div>
    <div class="py-5 ">
        {{ $facultys->links() }}
    </div>


</div>
