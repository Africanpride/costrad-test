<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 pl-2 pr-3 ']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title ?? '' }}</x-slot>
        <x-slot name="description">{{ $description ?? '' }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 md:col-span-3 ">
        <div class="px-4 py-5 sm:p-8 bg-white sm:rounded-lg
         dark:text-white dark:bg-slate-900  ">
            {{ $content }}
        </div>
    </div>
</div>
