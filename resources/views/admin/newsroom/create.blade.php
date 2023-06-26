<x-app-layout>
    <x-admin.pageheader model-name="Institutes " description="Edit Instititues <br />& College" add-button="false"
        class="mx-4">
        <x-heroicon-o-user-group class="w-5 h-5 text-current" />
        </x-admin-pageheader>

        <div class="p-4 space-y-4">
            <div class="bg-slate-500/10 border border-gray-300/20 p-8 rounded-xl">

                <form method="POST" action="{{ route('newsroom.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-4">

                        <div class="py-2">
                            <x-jet-label for="overview" value="{{ __('Publication Title') }}" />
                            <x-jet-input id="title" type="text" name="title" value=" {{ old('title') }}"
                                class="mt-1 block w-full dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                autocomplete placeholder="{{ old('title') }}" required />

                            <x-jet-input-error for="title" class="mt-2" />
                        </div>
                        <div class="flex justify-between py-8 items-center gap-8">
                            <div class="w-2/4">
                                <label for="category_id" class="block text-sm font-medium text-gray-700">
                                    Select Category
                                </label>
                                <select id="category_id" name="category_id" aria-label="Category"
                                    class="form-select mt-1 block w-full rounded-md bg-gray-100 border-transparent
                                        focus:border-blue-500 focus:bg-white focus:ring-0 dark:bg-slate-900 dark:border-gray-700
                                        dark:text-gray-400">
                                    <option value="" selected disabled hidden>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>

                                <x-jet-input-error for="category_id" class="mt-2" />
                            </div>

                            <div class="border border-gray-400/20 p-4  rounded-lg w-2/4">
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5 mt-1">
                                        <input id="hs-checkbox-delete" name="active" type="checkbox"
                                            class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                            aria-describedby="hs-checkbox-delete-description" checked>
                                    </div>
                                    <label for="hs-checkbox-delete" class="ml-3">
                                        <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300">Make
                                            Publication Active/Inactive</span>
                                        <span id="hs-checkbox-delete-description"
                                            class="block text-sm text-gray-600 dark:text-gray-500">Tick to make News
                                            Item Available to public.</span>
                                    </label>
                                </div>

                                <x-jet-input-error for="active" class="mt-2" />

                            </div>
                        </div>
                        <div class="py-8">
                            <x-jet-label for="overview" value="{{ __('Featured Image') }}" />

                            <input type="file" name="featured_image" id="large-file-input"
                                class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                            file:bg-transparent file:border-0
                            file:bg-gray-100 file:mr-4
                            file:py-3 file:px-4 file:sm:py-5
                            dark:file:bg-gray-700 dark:file:text-gray-400">


                            <x-jet-input-error for="featured_image" class="mt-2" />
                        </div>
                        <div class="">
                            <x-jet-label for="overview" value="{{ __('Overview') }}" />
                            <textarea name="overview" id="overview" spellcheck="true"
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="{{ __('News Overview') }}">{{ old('overview') }}</textarea>

                            <x-jet-input-error for="overview" class="mt-2" />
                        </div>

                        <div class="">
                            <textarea name="body" id="open-source-plugins" spellcheck="true"
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="{{ __('News Content') }}">{{ old('body') }}</textarea>


                            <x-jet-input-error for="body" class="mt-2" />
                        </div>

                    </div>

                    <div class="py-8">
                        <x-jet-button>{{ __('Submit') }}</x-jet-button>
                    </div>
                </form>
            </div>
        </div>



</x-app-layout>

@livewire('tinymce-dark-mode-script-and-style')
