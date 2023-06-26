<div>
    <form id="password_form" wire:submit.prevent="updatePassword">
        <div class="mb-4">
            <label for="current_password" class="block font-medium text-gray-700">{{ __('Current Password') }}</label>
            <input id="current_password" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" wire:model.defer="state.current_password" autocomplete="current-password">
            @error('state.current_password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="password" class="block font-medium text-gray-700">{{ __('New Password') }}</label>
                <input id="password" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" wire:model.defer="state.password" autocomplete="new-password">
                @error('state.password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" wire:model.defer="state.password_confirmation" autocomplete="new-password">
                @error('state.password_confirmation') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="flex items-center justify-end">
            <button type="submit" class="cursor-pointer w-full px-6 py-2 bg-firefly-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-firefly-700 hover:shadow-lg focus:bg-firefly-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-firefly-800 active:shadow-lg transition duration-150 ease-in-out mt-2 mr-2 text-[10px]">Save Password</button>
            <x-jet-action-message class="ml-3" on="saved">
                <div class="max-w-xs bg-white border rounded-md shadow-lg">
                    <div class="flex p-4">
                        <svg class="flex-shrink-0 h-4 w-4 text-green-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16 9a7 7 0 1 1-14 0A7 7 0 0 1 16 9zm-9.293 3.293a1 1 0 0 1-1.414-1.414l3-3a1 1 0 0 1 1.414 0l3 3a1 1 0 1 1-1.414 1.414L10 10.414l-2.293 2.293z" clip-rule="evenodd" />
                        </svg>
                        <p class="ml-3 text-sm text-gray-700">Successfully Saved.</p>
                    </div>
                </div>
            </x-jet-action-message>
        </div>
    </form>


</div>
