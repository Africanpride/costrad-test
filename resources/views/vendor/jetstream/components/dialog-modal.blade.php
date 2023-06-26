@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        <div class="text-lg">
            {{ $title }}
        </div>

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-between items-center px-6 py-4 bg-gray-100 dark:bg-slate-900 text-center">
        {{ $footer }}
    </div>
</x-jet-modal>
