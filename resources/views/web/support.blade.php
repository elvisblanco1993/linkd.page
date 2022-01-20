<x-guest-layout>
    <div class="max-w-7xl mx-auto">
        <div class="w-full flex items-center justify-between py-4 px-4 sm:px-6 lg:px-8 mb-12">
            <div class="">
                <a href="/" class="text-xl font-base tracking-wide text-indigo-600">linkd</a>
            </div>

            <div class="">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('pricing') }}" class="text-sm text-gray-700 dark:text-gray-500">Pricing</a>

                        <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-green-700 rounded-lg border border-green-200 dark:text-gray-500 capitalize px-4 py-1 bg-green-100">Get started</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>

        <div class="w-full grid grid-cols-2 gap-8 py-4 px-4 sm:px-6 lg:px-8 items-center">
            <div class="col-span-2 w-full text-center">
                <div class="text-4xl font-extrabold">
                    Get Support
                </div>
                <div class="text-xl mt-4">
                    Checkout these screencasts on how linkd works.
                </div>
            </div>

            {{-- Bio and social --}}
            <div class="col-span-2 md:col-span-1 flex items-center">
                <div class="w-1/6">
                    <div class="w-10 h-10 rounded-full inline-flex items-center justify-center bg-black text-white font-semibold text-lg">1</div>
                </div>
                <div class="w-5/6">
                    <h3 class="text-2xl font-semibold">Bio & Social</h3>
                    <p>Configure your bio information and add some social media buttons to your linkd.</p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-1 p-4">
                <iframe id="lbry-iframe" class="w-full h-[315px] rounded-lg shadow" src="https://lbry.tv/$/embed/bio_and_social/b6dc3b293f12e1f1bdd85bbad77adbba42f0f494?r=Hxo6nzdMwzhLZjDJ9EsbJyweNsLW7imL" allowfullscreen></iframe>
            </div>

            {{-- Adding Links --}}
            <div class="col-span-2 md:col-span-1 flex items-center">
                <div class="w-1/6">
                    <div class="w-10 h-10 rounded-full inline-flex items-center justify-center bg-black text-white font-semibold text-lg">2</div>
                </div>
                <div class="w-5/6">
                    <h3 class="text-2xl font-semibold">Links</h3>
                    <p>Easily add links to your linkd.</p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-1 p-4">
                <iframe id="lbry-iframe" class="w-full h-[315px] " src="https://lbry.tv/$/embed/toyota-thinks-they-own-your-car./57e4b1c88e1628819a65f9826b8ad17dcb1b35c7?r=Hxo6nzdMwzhLZjDJ9EsbJyweNsLW7imL" allowfullscreen></iframe>
            </div>

            {{-- Appearance --}}
            <div class="col-span-2 md:col-span-1 flex items-center">
                <div class="w-1/6">
                    <div class="w-10 h-10 rounded-full inline-flex items-center justify-center bg-black text-white font-semibold text-lg">3</div>
                </div>
                <div class="w-5/6">
                    <h3 class="text-2xl font-semibold">Appearance</h3>
                    <p>Make your linkd yours with custom styling that fits your brand.</p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-1 p-4">
                <iframe id="lbry-iframe" class="w-full h-[315px] " src="https://lbry.tv/$/embed/toyota-thinks-they-own-your-car./57e4b1c88e1628819a65f9826b8ad17dcb1b35c7?r=Hxo6nzdMwzhLZjDJ9EsbJyweNsLW7imL" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</x-guest-layout>
