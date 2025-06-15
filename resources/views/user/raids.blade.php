<x-app-layout>
    
    <!-- Main Content -->
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="flex flex-wrap justify-between gap-3 p-4">
            <p class="text-[#0e141b] tracking-light text-[32px] font-bold leading-tight min-w-72">Raids</p>
        </div>
        <div class="px-4 py-3 @container">
            <div class="flex overflow-hidden rounded-lg border border-[#d0dbe7] bg-slate-50">
                <table class="flex-1">
                    <thead>
                        <tr class="bg-slate-50">
                            <th
                                class="table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-120 px-4 py-3 text-left text-[#0e141b] w-[400px] text-sm font-medium leading-normal">
                                Date</th>
                            <th
                                class="table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-240 px-4 py-3 text-left text-[#0e141b] w-[400px] text-sm font-medium leading-normal">
                                Recipient
                            </th>

                            <th
                                class="table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-480 px-4 py-3 text-left text-[#0e141b] w-[400px] text-sm font-medium leading-normal">
                                Crypto Type
                            </th>

                            <th
                                class="table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-720 px-4 py-3 text-left text-[#0e141b] w-[400px] text-sm font-medium leading-normal">
                                Wallet Type
                            </th>
                            <th
                                class="table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-840 px-4 py-3 text-left text-[#0e141b] w-[400px] text-sm font-medium leading-normal">
                                Masked 12-Word
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="border-t border-t-[#d0dbe7]">
                            <td
                                class="table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-120 h-[72px] px-4 py-2 w-[400px] text-[#4e7097] text-sm font-normal leading-normal">
                                2024-01-19
                            </td>
                            <td
                                class="table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7097] text-sm font-normal leading-normal">
                                recipient5@example.com
                            </td>

                            <td
                                class="table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7097] text-sm font-normal leading-normal">
                                Ethereum
                            </td>


                            <td
                                class="table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-720 h-[72px] px-4 py-2 w-[400px] text-[#4e7097] text-sm font-normal leading-normal">
                                MetaMask
                            </td>
                            <td
                                class="table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-840 h-[72px] px-4 py-2 w-[400px] text-[#4e7097] text-sm font-normal leading-normal">
                                masked_words_5
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <style>
                @container(max-width:120px)

                    {
                    .table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-120 {
                        display: none;
                    }
                }

                @container(max-width:240px)

                    {
                    .table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-240 {
                        display: none;
                    }
                }

                @container(max-width:360px)

                    {
                    .table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-360 {
                        display: none;
                    }
                }

                @container(max-width:480px)

                    {
                    .table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-480 {
                        display: none;
                    }
                }

                @container(max-width:600px)

                    {
                    .table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-600 {
                        display: none;
                    }
                }

                @container(max-width:720px)

                    {
                    .table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-720 {
                        display: none;
                    }
                }

                @container(max-width:840px)

                    {
                    .table-bbcce024-cc00-450b-8a0c-ffce14bb00d7-column-840 {
                        display: none;
                    }
                }
            </style>
        </div>
    </div>
</x-app-layout>
