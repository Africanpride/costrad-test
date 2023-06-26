<x-front-layout>

    <div>
        <div class="pb-5">
            <livewire:article :newsroom="$news" />
        </div>

        <div class="max-w-3xl mx-auto">
            <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
                <ul class="space-y-4">

                    @foreach ($latestNews as $latest)
                        <li>
                            <!-- component -->
                            <div
                                class="bg-gray-100/50 dark:bg-gray-800 p-2 max-w-3xl sm:w-full sm:p-3 h-auto sm:h-48 rounded-2xl shadow-md flex flex-col sm:flex-row gap-4 select-none">
                                <a href="{{ route('news.show', $latest) }}" class="h-auto w-auto aspect-video rounded-md object-cover">
                                    <img alt="Home"
                                        src="{{ $latest->getFirstMediaUrl('featured_image') ? $latest->getFirstMediaUrl('featured_image') : $latest->featured_image }}&auto=format&fit=crop&w=1770&q=80"
                                        class="h-auto w-auto aspect-video rounded-md object-cover" />
                                </a>
                                <div class="flex flex-col justify-between p-1 sm:flex-1 space-y-2">
                                    <h1 class="text-lg sm:text-md font-semibold dark:text-gray-300  text-gray-600">
                                        {{ $latest->title }}
                                    </h1>
                                    <div class="text-gray-500 dark:text-white text-[12px] line-clamp-4">
                                        {!! $latest->body !!}
                                    </div>

                                    <div>
                                        <a href="{{ route('news.show', $latest->slug) }}"
                                            class="bg-firefly-700 w-auto px-2 text-white text-sm uppercase">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>

                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</x-front-layout>
