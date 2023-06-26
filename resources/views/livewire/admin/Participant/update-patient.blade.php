<div
    class="bg-white border-l dark:bg-gray-800 dark:border-gray-700  text-gray-800 dark:text-white
transition-all duration-300 transform w-full md:max-w-lg h-screen">

    <div class="flex items-center justify-between border-b py-3 px-4 dark:border-gray-700/50">
        <div class="font-bold">
            Edit Participant: <span class="">{{ $participant->full_name }}</span>
        </div>

        <x-lucide-x-circle class="w-5 h-5  text-red-500 cursor-pointer " wire:click="$emit('closeSlideover')" />
    </div>

    <form method="POST" wire:submit.prevent="updateParticipant">
        @csrf
        <div
            class="m-2 mr-4 p-2 overflow-x-hidden overflow-y-scroll max-h-screen scrollbar-thin
    scrollbar-thumb-firefly-800 scrollbar-track-gray-300">

            <div class="mb-12 pb-6">

                <div class=" w-full text-sm dark:text-white space-y-3 p-4">
                    <div>
                        <x-jet-label for="dateOfBirth"
                            value="{{ \Carbon\Carbon::create($dateOfBirth)->toFormattedDateString() ?? 'Date of Birth' }}"
                            class="text-[0.6rem] flex justify-start" />

                        <x-jet-input wire:model="dateOfBirth" id="dob" type="date"
                            value="{!! $dateOfBirth !!}" class="mt-1 block w-full dark:text-white"
                            aria-placeholder="{!! $dateOfBirth !!}" />
                    </div>
                    @error('dateOfBirth')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    {{-- <div class="italic ">{{__('Note: Staff would be sent an email to reset their password')}}</div> --}}
                    <div class="grid space-y-3">
                        <div class="relative flex items-start">
                            <div class="flex items-center h-5">
                                <input id="hs-checkbox-delete" name="hs-checkbox-delete" type="checkbox"
                                    wire:model='insured'
                                    class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    aria-describedby="hs-checkbox-delete-description"
                                    @if ($participant->insured) checked @endif>
                            </div>
                            <label for="hs-checkbox-delete" class="ml-3">
                                <span class="block text-sm font-semibold text-gray-800 dark:text-white">
                                    Participant Has Insurance?</span>
                                <span id="hs-checkbox-delete-description"
                                    class="block text-sm text-gray-600 dark:text-gray-500 italic ">
                                    {{ $insured ? 'Participant is Insured' : 'Tick here to indicate Participant has insurance' }}
                                </span>
                            </label>
                        </div>
                        @error('insured')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="relative flex items-start">
                            <div class="flex items-center h-5">
                                <input id="hs-checkbox-archive" name="hs-checkbox-archive" type="checkbox"
                                    wire:model='active'
                                    class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    aria-describedby="hs-checkbox-archive-description"
                                    @if ($participant->active) checked @endif>
                            </div>
                            <label for="hs-checkbox-archive" class="ml-3">
                                <span class="block text-sm font-semibold text-gray-800 dark:text-white">
                                    Pre-Activate this Participant account
                                </span>
                                <span id="hs-checkbox-archive-description"
                                    class="block text-sm text-gray-600 dark:text-gray-500 italic ">
                                    {{ $active ? 'Participant Account would be pre-activated.' : 'Tick here to make Participant Account Active' }}</span>
                            </label>
                        </div>
                        @error('active')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        @if ($insured)

                            <div class="space-y-3">
                                <div class="relative" wire:model="insurance_id">
                                    <select
                                        class="py-2 px-10 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        id="select2">
                                        <option>Select Insurance</option>
                                        @foreach ($insuranceOptions as $key => $insurance)
                                            <option @if ($participant->insurance_id == $insurance->id) @selected(true) @endif
                                                value="{{ $insurance->id }}">
                                                {{ $insurance->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <div
                                        class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                        <x-lucide-umbrella class="w-4 h-4  text-gray-400 text-xs" />
                                    </div>
                                </div>
                                {{-- </wire:ignore=> --}}
                                @error('insurance_id')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <div>
                                    <x-jet-label for="insuranceNumber" value="{{ __('Insurance Number') }}"
                                        class="text-[0.6rem] flex justify-start" />
                                    <x-jet-input wire:model="insuranceNumber" id="insuranceNumber" type="text"
                                        placeholder="{{ __('Insurance Number') }}" class="mt-1 block w-full" />
                                </div>
                            </div>
                        @endif
                    </div>

                    <div>
                        <div class="relative">
                            <select wire:model="title"
                                class="py-2 px-10 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                <option selected>Select Participant Title</option>
                                @foreach ($titleOptions as $option)
                                    <option value="{{ $option }}">{{ $option }}</option>
                                @endforeach
                            </select>

                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                <x-lucide-contact class="w-4 h-4  text-gray-400 text-xs" />
                            </div>
                        </div>
                        @error('title')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <div class="relative">
                            <select wire:model="gender"
                                class="py-2 px-10 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                <option selected>Select Participant Gender</option>
                                @foreach ($genderOptions as $gender)
                                    <option value="{{ $gender }}">{{ $gender }}</option>
                                @endforeach
                            </select>

                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                <x-lucide-smile class="w-4 h-4  text-gray-400 text-xs" />
                            </div>
                        </div>
                        @error('gender')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-x-2">

                        <div>
                            <x-jet-input wire:model="firstName" type="text" placeholder="First Name"
                                class="" />
                            @error('firstName')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror

                        </div>
                        <div>
                            <x-jet-input wire:model="lastName" type="text" placeholder="Last Name" class="" />
                            @error('lastName')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror

                        </div>

                    </div>
                    <div>
                        <div class="relative">
                            <x-jet-input wire:model="email" type="text" aria-placeholder="{{ $participant->email }}"
                                id="hs-leading-icon" name="hs-leading-icon" class="pl-11" />
                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                <x-lucide-at-sign class="w-4 h-4 text-gray-400 text-xs" />
                            </div>

                        </div>
                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <div class="relative">
                            <x-jet-input wire:model="address_1" type="text" placeholder="Address "
                                class="pl-11 block w-full" />


                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                <x-lucide-map-pin class="w-4 h-4  text-gray-400 text-xs" />

                            </div>
                        </div>
                        @error('address_1')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <div class="relative">
                                <x-jet-input wire:model="address_2" type="text" placeholder="Apt#"
                                    class="pl-11 block w-full" />


                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                    <x-lucide-map-pin class="w-4 h-4  text-gray-400 text-xs" />
                                </div>
                            </div>
                            @error('address_2')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <div>
                                <x-jet-input wire:model="zipcode" type="text" placeholder="zipcode"
                                    class=" block w-full" />
                                <x-jet-input-error for="zipcode" class="mt-2" />

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="relative">
                            <x-jet-input wire:model="state" type="text" placeholder="State "
                                class="pl-11 block w-full" />


                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                <x-lucide-map-pin class="w-4 h-4  text-gray-400 text-xs" />

                            </div>
                        </div>
                        @error('state')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 gap-2">

                        <div>
                            <x-jet-input wire:model="country" type="text" placeholder="Country"
                                class="mt-1 block w-full" />
                            <x-jet-input-error for="country" class="mt-2" />

                        </div>
                        <div>
                            <x-jet-input wire:model="city" type="text" placeholder="city"
                                class="mt-1 block w-full" />
                            <x-jet-input-error for="city" class="mt-2" />

                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">

                        <div>
                            <input wire:model="nationality" id="country" type="text"
                                class="py-2 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Participant Nationality">
                            @error('nationality')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror

                        </div>
                        <div>
                            <input wire:model="telephone" id="telephone" type="tel"
                                class="py-2 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Telephone">
                            @error('telephone')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="flex flex-row justify-between items-center gap-4">
                        @if ($avatar)
                            <div>
                                <img class="inline-block aspect-square w-12 rounded-full ring-2 ring-white dark:ring-firefly-900"
                                    src={{ $avatar->temporaryUrl() }} alt="{{ $participant->full_name }}">
                            </div>
                        @else
                            <div>
                                <img class="inline-block aspect-square w-12 rounded-full ring-2 ring-white dark:ring-firefly-900"
                                    src={{ $participant->participant_avatar }} alt="{{ $participant->full_name }}">
                            </div>
                        @endif


                        <input wire:model="avatar" type="file"
                            class="block w-[100%] border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                        file:bg-transparent file:border-0
                        file:bg-gray-100 file:mr-4
                        file:py-2 file:px-4
                        dark:file:bg-gray-700 dark:file:text-gray-400">
                        @error('avatar')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror


                    </div>

                    <div>
                        <div class="relative">
                            <input wire:model="emergencyContactName" type="text" id="hs-leading-icon"
                                name="hs-leading-icon"
                                class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Emergency Contact Name" required autocomplete="name">

                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                            </div>
                        </div>
                        @error('emergencyContactName')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <div class="relative">
                            <input wire:model="emergencyContactTelephone" type="tel" id="hs-leading-icon"
                                name="hs-leading-icon"
                                class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Emergency Contact Number" required autocomplete="tel">

                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                            </div>
                        </div>
                        @error('emergencyContactTelephone')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="border-t dark:border-gray-700/50 gap-4 grid grid-cols-2 mr-2 pr-2 py-2">

                    <x-admin.reset-button type="cancel" class="bg-red-700 rounded"
                        wire:click="$emit('closeSlideover')">Cancel</x-admin.reset-button>
                    <x-admin.submit-button type="submit" wire:click="updateParticipant" class="rounded">Save
                    </x-admin.submit-button>

                </div>

            </div>
        </div>
    </form>
</div>


<script>
    flatpickr("#dob", {
        altFormat: "dd-mm-YYYY",
        defaultDate: {!! json_encode(Carbon\Carbon::parse($participant->dateOfBirth)) !!}
    });
</script>
