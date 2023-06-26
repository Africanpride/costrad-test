<x-app-layout>
    <x-admin.pageheader model-name="Participants" description="Participants Management" add-button="false"
        class="mx-4">
        <x-heroicon-o-user-group class="w-5 h-5 text-current" />
        </x-admin-pageheader>

        <div class="p-4 space-y-4">



        </div>
        <section class="p-6 bg-white  relative z-0 dark:bg-gray-900 bg-hero-pattern  dark:bg-hero-pattern-dark bg-no-repeat">
            {{-- <img src="{{ asset('images/main/hero-pattern-dark.svg') }}" class="dark:absolute " alt=""> --}}
            <div class="max-w-screen-xl mx-auto relative text-left z-10">

                <h2 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Participant List & CRM ({{ $participants->count() }})</h2>

                <p class="mb-2 text-lg font-normal text-gray-500 lg:text-xl  dark:text-gray-200">
                    These are participants of <b>{{ config('app.name') }}</b> with Administrator Privileges in the
                    organization. You may create new roles and permissions here.
                </p>


            <div class="py-8 space-y-2">
                <livewire:users-table />

            </div>
        </section>

    </x-admin.pageheader>
