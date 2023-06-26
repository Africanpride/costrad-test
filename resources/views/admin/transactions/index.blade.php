<x-app-layout>
    <x-admin.pageheader model-name="Transactions " description="Transaction Details" add-button="false"
        class="mx-4">
        <x-heroicon-o-user-group class="w-5 h-5 text-current" />
    </x-admin-pageheader>


    <section class="relative">
            <p class="text-lg font-normal text-gray-500 lg:text-xl  dark:text-gray-200 px-6">Payment List for all Institutes</p>
            <!-- Jumbotron -->
            <div class="p-6 shadow  bg-gray-100 dark:bg-slate-900/10 dark:text-white ">



                <div class=" border dark:border-0 overflow-hidden ">
                    <div class="overflow-x-auto">
                        <div class="align-middle inline-block min-w-full">
                            <table class="min-w-full border-secondary-300 rounded-md dark:border-secondary-900">
                                <thead>
                                    <tr
                                        class=" bg-gray-200 dark:border-secondary-900 dark:bg-secondary-900 text-secondary-900  dark:text-secondary-400">
                                        <th scope="col"
                                            class="px-3  py-2  text-left text-[11px] leading-4 font-medium  uppercase tracking-wider dark:text-secondary-400">
                                            <span class="lg:pl-2">Institute</span>
                                        </th>
                                        <th scope="col"
                                            class="py-2  text-left text-[11px] leading-4 font-medium  uppercase tracking-wider dark:text-secondary-400 ">
                                            <span class="lg:pl-2">Participant</span>

                                        </th>
                                        <th scope="col"
                                            class="px-3  py-2   uppercase tracking-wider  hidden md:table-cell text-left text-[11px] leading-4 font-medium ">
                                            Payment Reference
                                        </th>

                                        <th scope="col"
                                            class="px-2 py-2  text-[11px] leading-4 whitespace-nowrap font-medium  uppercase tracking-wider  hidden md:table-cell text-left">
                                            Invoice
                                        </th>

                                    </tr>
                                </thead>
                                <tbody
                                    class="divide-y divide-secondary-100 bg-white dark:bg-secondary-800 dark:divide-secondary-900"
                                    x-max="1">
                                    @if ($transactions->count() > 0)
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td
                                                    class="hidden md:table-cell px-3  py-2  whitespace-no-wrap text-sm leading-5 font-medium text-secondary-900 dark:text-white">
                                                    <div class="flex items-center">
                                                        <div class="shrink-0 h-12 w-12">
                                                            <img class="h-12 w-12 rounded-full"
                                                                src="{{ $transaction->institute->institute_logo }}"
                                                                alt="User avatar">
                                                        </div>
                                                        <div class="ml-3">
                                                            <div
                                                                class="text-sm capitalize leading-5 font-medium whitespace-nowrap">
                                                                {{ $transaction->institute->name }}
                                                            </div>
                                                            <div
                                                                class="text-sm capitalize leading-5 font-medium whitespace-nowrap">
                                                                {{ $transaction->institute->duration }}, {{ now()->format('Y') }}
                                                            </div>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="py-2  whitespace-no-wrap text-[12px] leading-5 ">
                                                    <div class="grid grid-cols-1 gap-1">

                                                        <div
                                                            class=" leading-5  text-firefly-500 whitespace-nowrap flex gap-x-2 justify-start items-center">

                                                            <x-lucide-shield-check class="w-4 h-4 text-green-500" />
                                                            <span class="capitalize">
                                                                {{ $transaction->participant->full_name }}</span>
                                                        </div>

                                                        <div
                                                            class=" leading-5 dark:text-white whitespace-nowrap flex gap-x-2 items-center">
                                                            <x-lucide-at-sign class="w-4 h-4 text-green-500" />
                                                            <span class="capitalize">{{ $transaction->participant->email }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-3  py-2  text-sm leading-5 ">
                                                    <div class="flex items-center">

                                                        <span
                                                            class="ml-1.5 whitespace-no-wrap text-secondary-500 dark:text-secondary-400">{{ $transaction->reference }}</span>
                                                    </div>
                                                    <div class="ml-1.5 whitespace-no-wrap ">
                                                        GHS {{ number_format($transaction->amount / 100, 2) }}</div>
                                                </td>

                                                <td
                                                    class="hidden md:table-cell px-3 w-8 py-2  whitespace-no-wrap text-sm leading-5  text-left">
                                                    <div class="md:truncate text-secondary-500 dark:text-secondary-400">
                                                        {{ $transaction->id }}</div>
                                                    <div class="text-sm leading-5  dark:text-white whitespace-nowrap">
                                                        <time datetime="{{ Auth::user()->created_at }}"
                                                            class="capitalize">{{ $transaction->created_at->format('l jS \of F Y h:i:s A') }}
                                                        </time>
                                                    </div>
                                                </td>



                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="flex items-center justify-between px-3  py-3 sm:px-6 border-t border-secondary-200 rounded-b-md bg-white dark:bg-secondary-800 dark:border-secondary-900">
                            <div class="flex-1 flex justify-between sm:hidden">

                            </div>
                            <div class=" sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-sm leading-5 text-secondary-900 dark:text-secondary-400">
                                        Showing
                                        <span class="font-medium">1</span>
                                        to
                                        <span class="font-medium">1</span>
                                        of
                                        <span class="font-medium"> 1</span>
                                        results
                                    </p>
                                </div>
                                <div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->



        </section>

</x-app-layout>
