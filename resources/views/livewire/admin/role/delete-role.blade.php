<x-admin.roles-modal formAction="deleteRole">
    <x-slot name="title">
        Delete Confirmation
    </x-slot>

    <x-slot name="content">
<div class="text-current dark:text-white text-md">
    Are you sure you want to delete <span class="text-red-500 text-bold"> {{ $role->name }}</span>?

</div>

    </x-slot>

    <x-slot name="buttons">
        <x-admin.reset-button wire:click="$emit('closeModal')" type='reset' >Cancel</x-admin.reset-button>

        <x-admin.delete-button>Delete</x-admin.delete-button>



    </x-slot>
</x-admin.roles-modal>
