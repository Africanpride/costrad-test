<x-admin.permission-modal formAction="updatePermission">
    <x-slot name="title">

        <div class="absolute top-2 right-2 cursor-pointer"   wire:click="$emit('closeModal')" >
            <div
                class="cursor-pointer delay-200  duration-500 bg-red-50 dark:bg-red-500/10 transition-colors dark:hover:bg-red-500/20  hover:bg-red-100  grid h-8 place-items-center rounded-full w-8">
                <x-heroicon-o-x-circle class="w-6 h-6 text-red-500"  />
            </div>
        </div>

        <div class="uppercase pb-2">Update or delete </div>
        <hr class="pb-2">
        <span class="text-gray-400 capitalize">"{{ $name }}"</span>
    </x-slot>

    <x-slot name="content">
<div>
    <p class="dark:text-white">Permissions are fundamental and would be assigned to Roles. A Permission should do one of the following: (CREATE, READ, UPDATE AND DELETE). E.g. Update Invoice Record, Delete Customer record etc.</p>
</div>
        <input wire:model="name" id="name" type="text"
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
            placeholder="Permission Name">
        @error('name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <textarea wire:model.defer="description" id="description"
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
            rows="3" placeholder="Permission Description"></textarea>
        @error('description')
            <span class="text-red-500">{{ $message }}</span>
        @enderror


    </x-slot>

    <x-slot name="buttons">

        <button type="reset" wire:click="$emit('closeModal')"
            class="py-2.5 px-4 inline-flex w-full justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
            Cancel
        </button>

        <x-admin.submit-button>Save Permission</x-admin.submit-button>

    </x-slot>
</x-admin.permission-modal>
