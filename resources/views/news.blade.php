<x-front-layout>

    <section class="isolate relative z-20 overflow-hidden p-4 md:p-6 pt-24 pb-6 ">
        <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[920px] text-center lg:mb-20 space-y-3">
                <x-top-title>
                    COSTrAD: News, Articles & publications
                    <x-slot name="icon">
                        <x-lucide-trending-up class="dark:text-white  w-5 h-5 " />
                    </x-slot>

                    <x-slot name="paragraph">
                        The College of Sustainable Transformation and Development (<a href="{{ url('costrad') }}"
                            class=" bg-clip-text bg-gradient-to-l from-firefly-600 to-violet-500 text-transparent dark:from-firefly-400 dark:to-violet-400 font-bold">COSTrAD</a>)
                        is an initiative of the Logos-Rhema Foundation for Leadership Resource Development, a
                        Non-Governmental Foundation registered in Ghana.
                    </x-slot>

                </x-top-title>
            </div>
        </div>
        <!-- vision -->

        <!-- End vision -->

        <div class="absolute bottom-0 right-0 z-[-1] opacity-10">
            <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5"
                    d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                    fill="url(#paint0_linear)"></path>
                <defs>
                    <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.36"></stop>
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0"></stop>
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto space-y-6 ">
            <div class="block md:flex md:space-x-2  lg:p-0">
                <a class="mb-2 md:mb-0 w-full md:w-2/3 relative rounded-2xl inline-block" style="height: 24em;"
                    href="{{ route('news.show', [$firstLatest]) }}" >
                    <div class="absolute left-0 bottom-0 w-full h-full z-10 rounded-xl"
                        style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                    <img src="{{ $firstLatest->getFirstMediaUrl('featured_image') ? $firstLatest->getFirstMediaUrl('featured_image') : $firstLatest->featured_image }}&auto=format&fit=crop&w=900&q=60"
                        class="absolute left-0 top-0 w-full h-full  z-0 object-cover rounded-xl">
                    <div class="p-4 absolute bottom-0 left-0 z-20">
                        <span
                            class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{ $firstLatest->category->title }}</span>
                        <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                            {{ $firstLatest->title }}
                        </h2>
                        <div class="flex mt-3">
                            <img src="{{ $firstLatest->author->profile_photo_url }}"
                                class="h-10 w-10 rounded-full mr-2 object-cover">
                            <div>
                                <p class="font-semibold text-gray-200 text-sm"> {{ $firstLatest->author->full_name }}
                                </p>
                                <p class="font-semibold text-gray-400 text-xs">
                                    {{ $firstLatest->updated_at->format('d-M') }} </p>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="w-full md:w-1/3 relative rounded" style="height: 24em;"
                    href="{{ route('news.show', $secondLatest) }}">
                    <div class="absolute left-0 top-0 w-full h-full z-10  rounded-xl"
                        style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                    <img src="{{ $secondLatest->getFirstMediaUrl('featured_image') ? $secondLatest->getFirstMediaUrl('featured_image') : $secondLatest->featured_image }}&auto=format&fit=crop&w=900&q=60"
                        class="absolute left-0 top-0 w-full h-full  z-0 object-cover rounded-xl">
                    <div class="p-4 absolute bottom-0 left-0 z-20">
                        <span
                            class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{ $secondLatest->category->title }}</span>
                        <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                            {{ $secondLatest->title }}
                        </h2>
                        <div class="flex mt-3">
                            <img src="{{ $secondLatest->author->profile_photo_url }}"
                                class="h-10 w-10 rounded-full mr-2 object-cover">
                            <div>
                                <p class="font-semibold text-gray-200 text-sm"> {{ $secondLatest->author->full_name }}
                                </p>
                                <p class="font-semibold text-gray-400 text-xs">
                                    {{ $secondLatest->updated_at->format('d-M') }} </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse ($news as $article)
                    <article class="flex bg-white transition hover:shadow-xl dark:bg-gray-800 dark:shadow-gray-800/25 shadow-lg">
                        <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                            <time datetime="{{ $article->created_at }}"
                                class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900 dark:text-white">
                                <span class=" text-gray-500/70">{{ __('Published ') }}</span>
                                <span class="w-px flex-1 bg-gray-900/10 dark:bg-white/10"></span>
                                <span>{{ $article->created_at->format('M d, Y') }}</span>
                            </time>
                        </div>

                        <div class="hidden sm:block sm:basis-1/3">
                            <img alt="Guitar"
                            src="{{ $article->getFirstMediaUrl('featured_image') ? $article->getFirstMediaUrl('featured_image') : $article->featured_image }}&auto=format&fit=crop&w=1740&q=80"
                                class="aspect-square h-full w-full object-cover" />
                        </div>

                        <div class="flex flex-1 flex-col justify-between">
                            <div
                                class="border-l border-gray-900/10 p-4 dark:border-white/10 sm:!border-l-transparent ">
                                <a href="{{ route('news.show', [$article]) }}">
                                    <h3 class="font-bold uppercase text-gray-900 dark:text-white text-[13px]">
                                        {{ $article->title }}
                                    </h3>
                                </a>

                                <div class="mt-2 !text-[12px] leading-relaxed text-gray-700 line-clamp-4 dark:text-gray-200">
                                    {!! $article->body !!}
                                </div>
                            </div>

                            <div class="sm:flex sm:items-end sm:justify-end">
                                <a href="{{ route('news.show', [$article]) }}"
                                    class="block bg-firefly-500 px-5 py-2 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-firefly-400">
                                    Read Article
                                </a>
                            </div>
                        </div>
                    </article>

                @empty
                @endforelse
            </div>
            <div class="py-6">{{ $news->links() }}</div>

        </div>

    </section>


    <livewire:subscribe />
</x-front-layout>
