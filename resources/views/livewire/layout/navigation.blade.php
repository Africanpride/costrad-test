<div id="application-sidebar"
    class="soft-scrollbar overflow-x-auto hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  duration-300 transform hidden fixed top-0 left-0 bottom-0 z-[60] md:w-2/12 bg-white border-r  pt-5 pb-10 overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0 dark:scrollbar-y dark:bg-black dark:border-slate-800 scrollbar-thin
    scrollbar-thumb-firefly-800 scrollbar-track-gray-300 overflow-x-hidden">
    <div class="px-4">
        <a class="flex-none text-xl font-semibold dark:text-white" href="{{ url('/') }}"
            aria-label="Brand">{{ config('app.name') }}</a>
    </div>

    <nav class="hs-accordion-group p-4 w-full flex flex-col flex-wrap " data-hs-accordion-always-open>
        <ul class="space-y-1.5">

            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ url(Auth::user()?->dashboard()) }}">
                    <span class="flex ">
                        <x-heroicon-o-building-office-2 class="w-6 h-6 text-current" />
                    </span>
                    <span class=" capitalize">Dashboard</span>
                </a>
            </li>
            @can('isParticipant')
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                        href="{{ url('admin/institutes/') }}">
                        <span class="flex ">
                            <x-lucide-book-open-check class="w-6 h-6 text-current" />

                        </span>
                        <span class=" capitalize">{{ __('Next Institute') }}</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                        href="{{ url('profile') }}">
                        <span class="flex ">
                            <x-lucide-contact class="w-6 h-6 text-current" />
                        </span>
                        <span class=" capitalize">{{ __('Profile') }}</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                        href="{{ route('invoices') }}">
                        <span class="flex ">
                            <x-lucide-layers class="w-6 h-6 text-current" />
                        </span>
                        <span class=" capitalize">{{ __('Invoices') }}</span>
                    </a>
                </li>
            @endcan

            @can('isAdmin')
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                        href="{{ route('staff') }}">
                        <span class="flex ">
                            <x-heroicon-o-user-circle class="w-6 h-6 text-current" />
                        </span>
                        <span class="capitalize">Staff</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                        href="{{ route('admin.analytics') }}">
                        <span class="flex ">
                            <x-lucide-activity class="w-6 h-6 text-current" />
                        </span>
                        <span class="capitalize">{{ __('Analytics') }}</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                        href="{{ url('admin/institutes/') }}">
                        <span class="flex ">
                            <x-lucide-book-open-check class="w-6 h-6 text-current" />

                        </span>
                        <span class=" capitalize">{{ __('Institutes') }}</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                        href="{{ route('transactions.index') }}">
                        <span class="flex ">
                            <x-lucide-layers class="w-6 h-6 text-current" />

                        </span>
                        <span class=" capitalize">{{ __('Transactions') }}</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                        href="{{ route('admin.participants') }}">
                        <span class="flex ">
                            <x-lucide-scan-face class="w-6 h-6 text-current" />

                        </span>
                        <span class=" capitalize">{{ __('Participants') }}</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                        href="{{ route('announcements.index') }}">
                        <span class="flex ">
                            <x-lucide-bell-ring class="w-6 h-6 text-current" />

                        </span>
                        <span class=" capitalize">{{ __('Announcements') }}</span>
                    </a>
                </li>

                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                        href="{{ route('newsroom.index') }}">
                        <span class="flex ">
                            <x-lucide-newspaper class="w-6 h-6 text-current" />

                        </span>
                        <span class=" capitalize">{{ __('Newsroom') }}</span>
                    </a>
                </li>


            </ul>

            <hr class="my-6 border-firefly-100 dark:border-slate-900/60" />

            <ul>
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                        href="{{ route('roles') }}">
                        <span class="flex ">
                            <x-heroicon-o-document-check class="w-6 h-6 text-current" />


                        </span>
                        <span class=" capitalize">Roles & Permissions</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-500 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                        href="{{ route('logs') }}">
                        <span class="flex ">
                            <x-heroicon-o-finger-print class="w-6 h-6 text-current" />


                        </span>
                        <span class=" capitalize">Authentication Logs</span>
                    </a>
                </li>
            @endcan
        </ul>
    </nav>

    <livewire:admin.nav-icons />

</div>
