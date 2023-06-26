<x-admin.permission-modal formAction="addPermission">
    <x-slot name="title">
        Add New Permission
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

        <textarea wire:model="description" id="description"
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
            rows="3" placeholder="Permission Description"></textarea>
        @error('description')
            <span class="text-red-500">{{ $message }}</span>
        @enderror


    </x-slot>

    <x-slot name="buttons">
        <button wire:click="$emit('closeModal')"
            class="py-2.5 px-4 inline-flex w-full  justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
            >
            Cancel
        </button>
        <button type="submit"
            class="py-2.5 px-4 inline-flex w-full justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
            Save Permission
        </button>
    </x-slot>
</x-admin.permission-modal>
