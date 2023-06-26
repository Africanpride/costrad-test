<div>
    <style>
        .image-input-button {
            position: relative;
            display: inline-block;
            overflow: hidden;
            cursor: pointer;
        }

        .image-input-button input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .image-input-button img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    <div class="inline-flex items-center gap-5  py-5">
        <div>
            <div>

                @if ($photo)
                    <div class="relative inline-block">
                        <img class="inline-block h-[4.875rem] w-[4.875rem] rounded-full ring-2 ring-white dark:ring-gray-800"
                            src="{{ $photo->temporaryUrl() }}" alt="Image Description">
                    </div>
                @else
                    <div class="relative inline-block">
                        <img class="inline-block h-[4.875rem] w-[4.875rem] rounded-full ring-2 ring-white dark:ring-gray-800"
                            src="{{ $this->user->profile_photo_url }}" alt="Image Description">
                    </div>
                @endif

            </div>
        </div>
        <div class="inline-flex gap-4 items-center">

            <div>
                <label for="photo" class="image-input-button">
                    <input type="file" wire:model="photo" id="photo" accept="image/*" class="hidden" />

                <x-jet-button class=" text-[10px]" type="button">
                    {{ __('Select Photo') }}
                </x-jet-button>
                </label>
            </div>
            <div>
                <x-jet-secondary-button type="button" class=" text-[10px]" wire:click="removeProfilePhoto">
                    {{ __('Remove Photo') }}
                </x-jet-secondary-button>

            </div>
        </div>
    </div>

</div>
