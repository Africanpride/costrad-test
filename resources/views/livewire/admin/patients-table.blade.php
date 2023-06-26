<div class="  px-4 md:px-8">
    <x-admin.pageheader model-name="PAtients" description="Maintain <br /> Patients" add-button="false" class="px-4">
        <x-lucide-heart-pulse class="w-6 h-6 text-current" />
        </x-admin-pageheader>

        <div class="grid grid-cols-1 md:grid-cols-12 py-8 gap-4 place-content-center ">
            <div class="grid grid-cols-12 gap-4 col-span-12 md:col-span-9  ">
                <div class="relative md:col-span-6 col-span-12 ">
                    <input type="text" wire:model="search" id="hs-search-box-with-loading-1"
                        name="hs-search-box-with-loading-1"
                        class=" py-2 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500/10 focus:ring-blue-500/20 dark:bg-transparent dark:border-gray-800 dark:text-gray-400"
                        placeholder="Patient search ">

                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-4">
                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </div>
                </div>


            </div>
<div wire:click="$emit('openModal', 'admin.patient.add-patient')">
    Hello
</div>
            <button type="reset"
                class=" md:col-span-3 col-span-12  cursor-pointer md:w-auto px-6 py-2 bg-firefly-600 text-white
                font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-firefly-700 hover:shadow-lg
                 focus:bg-firefly-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-firefly-800 active:shadow-lg transition duration-150 ease-in-out"
                 data-mdb-ripple-color="light"
                 onclick="Livewire.emit('openModal', 'admin.patient.add-patient')" data-mdb-ripple="true">

                <span class="flex items-center justify-center gap-2">

                    <x-lucide-user-plus class="w-5 h-5 text-yellow-500 text-xs" />
                    Add Patient
                </span>
            </button>

        </div>
        <table class="w-full text-left text-sm">
            <thead>

                <tr class="text-gray-400 font-bold">
                    <th class="font-bold px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800">Patient</th>
                    <th
                        class="font-bold px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800 hidden md:table-cell">
                        Description</th>
                    <th
                        class="font-bold px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800  hidden md:table-cell">
                        Insured</th>
                    <th
                        class="font-bold px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800 sm:text-gray-400 text-white  hidden md:table-cell">
                        Last Visit</th>
                    <th
                        class="font-bold text-right md:text-justify  px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800 sm:text-gray-400 text-white">
                        Action</th>

                </tr>
            </thead>
            <tbody class="text-gray-600 dark:text-gray-100">
                @forelse ($patients as $patient)
                    <tr>

                        <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                            <div class="flex items-center gap-4 cursor-pointer"
                                onclick="Livewire.emit('openModal', 'admin.patient.update-patient', {{ json_encode([$patient->id]) }})">
                                <img class="inline-block w-12 aspect-square rounded-full ring-2 ring-white dark:ring-firefly-900"
                                    src="{{ $patient->avatar }}" alt="{{ $patient->full_name }}">
                                <div> {{ $patient->full_name }}<br> <span>{{ $patient->email }}</span>
                                </div>

                            </div>
                        </td>
                        <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800 md:table-cell hidden">
                            Subscription renewal</td>
                        <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800 hidden md:table-cell">

                            @if ($patient->insured)
                                <span
                                    class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                    <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                        </path>
                                    </svg>
                                    {{ __('Insured') }}
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
                                    <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                        </path>
                                    </svg>
                                    {{ __('Uninsured') }}
                                </span>
                            @endif
                        </td>
                        <td
                            class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800  hidden md:table-cell">
                            <div class="flex items-center">
                                <div class="sm:flex hidden flex-col">
                                    24.12.2020
                                    <div class="text-gray-400 text-xs">11:16 AM</div>
                                </div>
                            </div>
                        </td>
                        <td class=" md:px-4 py-2 border-b border-gray-200 dark:border-gray-800 text-left">
                            <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                                <button
                                    class="w-8 h-8  text-gray-400 shadow dark:text-gray-400 rounded-full flex items-center justify-center border border-gray-200 dark:border-gray-700">
                                    <svg viewBox="0 0 24 24" class="w-4" stroke="currentColor" stroke-width="2"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>

                                <div class="hs-dropdown-menu w-auto transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                                    aria-labelledby="hs-split-dropdown">
                                    <span
                                        class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300  cursor-pointer "
                                        onclick="Livewire.emit('openModal', 'admin.patient.update-patient', {{ json_encode([$patient->id]) }})">
                                        View
                                    </span>
                                    <span
                                        class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer "
                                        onclick="Livewire.emit('openModal', 'admin.patient.update-patient', {{ json_encode([$patient->id]) }})">
                                        Update
                                    </span>
                                    <span
                                        class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer "
                                        onclick="Livewire.emit('openModal', 'admin.patient.delete-patient', {{ json_encode([$patient->id]) }})">
                                        Delete
                                    </span>


                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <div class="gap-4 flex justify-start items-center">
                        <x-admin.nothing-here />
                        <div>Sorry Nothing Here. </div>
                    </div>
                @endforelse

            </tbody>
        </table>
        <div class="py-5">

            {{ $patients->onEachSide(1)->links() }}
        </div>
</div>
