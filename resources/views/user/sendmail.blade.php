<x-app-layout>
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="flex flex-wrap justify-between gap-3 p-4">
            <p class="text-[#0e141b] tracking-light text-[32px] font-bold leading-tight min-w-72">
                Send Mail
            </p>
        </div>
        <form method="POST" action="{{ route('send.mail') }}">
            @csrf
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#0e141b] text-base font-medium leading-normal pb-2">
                        Email Template
                    </p>
                    <select name="template"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e141b] focus:outline-0 focus:ring-0 border border-[#d0dbe7] bg-slate-50 focus:border-[#d0dbe7] h-14 placeholder:text-[#4e7097] p-[15px] text-base font-normal leading-normal">
                        <option value="giveaway">Giveaway</option>
                        <option value="airdrop">Airdrop</option>
                        <option value="refund">Refund</option>
                    </select>
                </label>
            </div>
            @error('template')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#0e141b] text-base font-medium leading-normal pb-2">
                        Recipient Email
                    </p>
                    <input name="recipient_email" placeholder="Enter email address"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e141b] focus:outline-0 focus:ring-0 border border-[#d0dbe7] bg-slate-50 focus:border-[#d0dbe7] h-14 placeholder:text-[#4e7097] p-[15px] text-base font-normal leading-normal"
                        value="" />
                </label>
            </div>
            @error('recipient_email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#0e141b] text-base font-medium leading-normal pb-2">
                        Crypto Type
                    </p>
                    <select name="crypto_type"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e141b] focus:outline-0 focus:ring-0 border border-[#d0dbe7] bg-slate-50 focus:border-[#d0dbe7] h-14 placeholder:text-[#4e7097] p-[15px] text-base font-normal leading-normal">
                        <option value="BTC">BTC</option>
                        <option value="USDT">USDT</option>
                        <option value="ETH">ETH</option>
                        <option value="BNB">BNB</option>
                        <option value="XRP">XRP</option>
                        <option value="ADA">ADA</option>
                        <option value="SOL">SOL</option>
                        <option value="DOGE">DOGE</option>
                        <option value="DOT">DOT</option>
                        <option value="AVAX">AVAX</option>
                        <option value="SHIB">SHIB</option>
                        <option value="LINK">LINK</option>
                    </select>
                </label>
            </div>
            @error('crypto_type')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#0e141b] text-base font-medium leading-normal pb-2">
                        Quantity
                    </p>
                    <input name="quantity" placeholder="Enter quantity" type="number" step="0.00000001"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e141b] focus:outline-0 focus:ring-0 border border-[#d0dbe7] bg-slate-50 focus:border-[#d0dbe7] h-14 placeholder:text-[#4e7097] p-[15px] text-base font-normal leading-normal"
                        value="" />
                </label>
            </div>
            @error('quantity')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            <div class="flex px-4 py-3 justify-start">
                <button type="submit"
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#1978e5] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Send Mail</span>
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
