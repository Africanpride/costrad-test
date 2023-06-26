@props(['submit'])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-1 md:gap-2 space-y-4 px-4']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title ?? '' }}</x-slot>
        <x-slot name="description">{{ $description ?? ' ' }}</x-slot>
    </x-jet-section-title>

    <div class="">
        <form wire:submit.prevent="{{ $submit }}">
            <div class=" {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="w-full space-y-6">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))

                <div class="flex flex-col items-center space-y-3  py-6 ">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
