<div>
    <x-admin.institute-modal formAction="AddFeature">

        <x-slot name="title">
            <div class="absolute top-3 right-3 cursor-pointer">
                <x-heroicon-o-x-circle class="w-6 h-6 text-red-500" wire:click="$emit('closeModal')" />
            </div>
            <div class=" text-md ">Update Features For <span
                    class="uppercase text-gray-500">{{ $institute->acronym }}</span></div>
        </x-slot>

        <x-slot name="content">

            <div class="space-y-4">

                <div>
                    <label class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">
                        Feature Title</label>
                    <input wire:model="title" id="title" type="text"
                        class="py-2 px-4 pl-9 pr-16 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700
                                        dark:text-gray-400"
                        placeholder="{{ __('eg. Access to COSTrAD Member resources
                        .') }}">
                    @error('title')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="block">
                    <label
                        class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">
                        Feature/Service description</label>
                    <textarea wire:model="description"
                        class=" placeholder:py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                        rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </x-slot>

        <x-slot name="buttons">
            <x-admin.reset-button type="reset" class="rounded bg-red-500" wire:click="$emit('closeModal')">Cancel
            </x-admin.reset-button>


            <x-admin.submit-button class="rounded">Submit</x-admin.submit-button>

        </x-slot>

    </x-admin.institute-modal>

</div>
