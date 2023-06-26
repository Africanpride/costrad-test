<x-app-layout>
    <x-admin.pageheader model-name="Invoices" description="{{ __('My Invoices') }}" add-button="false" class="mx-4">
        <x-heroicon-o-finger-print class="w-6 h-6 text-current" />
    </x-admin.pageheader>
    <!-- user/invoices.blade.php -->

    <div class="container mx-auto px-4 sm:px-4">
        <div>

            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto ">
                <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                    @if ($myInvoices->count() > 0)

                        <table class="min-w-full leading-normal dark:bg-black dark:text-white">
                            <thead>
                                <tr class="bg-gray-200 dark:bg-gray-950 dark:text-white border-b-2 border-gray-200/10">
                                    <th
                                        class="px-5 py-3  text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Institute / Invoice
                                    </th>
                                    <th
                                        class="px-5 py-3  text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Amount
                                    </th>
                                    <th
                                        class="px-5 py-3  text-left text-xs font-semibold text-gray-700 uppercase tracking-wider whitespace-no-wrap">
                                        Issued
                                    </th>
                                    <th
                                        class="px-5 py-3  text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Reference
                                    </th>
                                    <th
                                        class="px-5 py-3  text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th
                                        class="px-5 py-3  text-right text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Action
                                    </th>
                                    <th class="px-5 py-3 "></th>
                                </tr>
                            </thead>
                            <tbody class="border dark:border-gray-900/50">
                                @foreach ($myInvoices as $invoice)
                                    <tr>
                                        <td class="px-5 py-5 text-sm">
                                            <div class="flex">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full"
                                                        src="{{ $invoice->transaction->institute->institute_logo }}"
                                                        alt="" />
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-700 dark:text-white whitespace-nowrap font-bold">
                                                        {{ $invoice->transaction->institute->name }}
                                                    </p>
                                                    <p class="text-gray-500 whitespace-no-wrap">
                                                        {{ $invoice->transaction->institute->duration }},
                                                        {{ now()->format('Y') }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 text-sm">
                                            <p class="text-gray-600 whitespace-nowrap font-bold">GHC
                                                {{ number_format($invoice->transaction->amount / 100, 2, '.', ',') }}
                                            </p>
                                            <p class="text-gray-600 whitespace-nowrap">USD
                                                {{ $invoice->transaction->institute->price }}</p>
                                        </td>
                                        <td class="px-5 py-5 text-sm whitespace-no-wrap">
                                            <div class="text-gray-600 whitespace-no-wrap font-bold whitespace-nowrap	 ">
                                                {{ $invoice->created_at->format('d M, Y') }}</div>
                                        </td>
                                        <td class="px-5 py-5 text-sm">

                                            <div>{{ $invoice->transaction->reference }}</div>

                                        </td>
                                        <td class="px-5 py-5 text-sm">


                                            <div
                                                class="uppercase  inline-flex items-center py-1 px-3 rounded-full text-xs font-medium {{ $invoice->status == 'pending' ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">
                                                {{ $invoice->status }}</div>
                                        </td>
                                        <td class="px-5 py-5 text-sm text-right">
                                           <a href="http://" class="font-bold text-blue-600"> {{ __('View') }}</a>
                                            {{-- <button type="button"
                                                class="inline-block text-gray-500 hover:text-gray-700">
                                                <svg class="inline-block h-4 w-4 fill-current" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                                </svg>
                                            </button> --}}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @else
                        <div class="p-5">
                            <livewire:admin.nothing-here />
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
