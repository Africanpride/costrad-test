<div class="w-full">
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <div class="p-4 sm:p-7">
            <div class="text-center flex flex-col justify-center items-center space-y-4 ">
                <img class=" h-16 w-16 rounded-full ring-2 ring-white dark:ring-gray-800"
                    src="{{ Auth::user()?->profile_photo_url }}" alt="Image Description">

                <h1 class="block text-xl font-bold text-gray-800 dark:text-white">Set New password!
                    {{ Auth::user()?->firstName }}.</h1>
            </div>

            <div class="mt-5">
                <form wire:submit.prevent="savePassword">
                    @csrf
                    <div class="grid gap-y-2">
                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input wire:model="password"  class="block mt-1 w-full" type="password" />
                        </div>
                        <div>
                            <x-jet-input-error for="password" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-jet-input wire:model="password_confirmation"  class="block mt-1 w-full" type="password" />
                        </div>
                        <div>
                            <x-jet-input-error for="password_confirmation" class="mt-2" />
                        </div>
                        <x-jet-button>
                            {{ __('Create New Password') }}
                        </x-jet-button>

                    </div>
                </form>

                <span class="text-center  text-gray-800 dark:text-white text-sm my-4 flex justify-center items-center gap-2">
                    <x-lucide-reply class="w-5 h-5 text-current" />
                    <a
                        href="{{ url('/') }}">
                        Back To Website
                    </a>
                </span>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>
