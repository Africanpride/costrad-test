<div class="relative">
    <div class="absolute top-3 right-3 cursor-pointer">
        <x-heroicon-o-x-circle class="w-6 h-6 text-red-500" wire:click="$emit('closeModal')" />
    </div>

    <div class="aspect-w-16 aspect-h-8">
        <img class="w-full object-cover rounded-t-xl"
            src="{{ $media->getUrl() }}"
            alt="Image Description">
    </div>


    <div class="p-8 ">
        <div class="grid grid-cols-2 gap-4 w-5/8 mx-auto">
            <x-jet-button wire:click="$emit('setFeaturedImage')">Make Featured Image</x-jet-button>
            <x-jet-button wire:click="$emit('sortUp')">Move Up</x-jet-button>
            <x-jet-button class="bg-red-500 hover:bg-red-600" wire:click="$emit('deleteMedia')">Delete Image</x-jet-button>
        </div>
    </div>

</div>
