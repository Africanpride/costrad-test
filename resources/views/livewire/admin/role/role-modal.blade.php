<x-admin.roles-modal formAction="saveRole">
    <x-slot name="title">
        Add New Role
    </x-slot>

    <x-slot name="content">

        <input wire:model="name" id="name" type="text"
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
            placeholder="Role Name">
        @error('name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <textarea wire:model="description" id="description"
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
            rows="3" placeholder="Role Description"></textarea>
        @error('description')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

    </x-slot>

    <x-slot name="buttons">
        <x-admin.reset-button wire:click="$emit('closeModal')">Cancel</x-admin.reset-button>

        <x-admin.submit-button>Submit</x-admin.submit-button>

    </x-slot>
</x-admin.roles-modal>
