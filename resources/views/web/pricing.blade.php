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
                    One price fits all
                </div>
                <div class="text-xl mt-4">
                    With our all-inclusive plan, you get all the features for the most affordable price in the market.
                </div>
            </div>

            <div class="col-span-2 sm:col-span-1">
                <div class="w-full p-4 border rounded-lg">
                    <div class="text-lg font-bold">
                        $2 per month
                    </div>
                    <div class="mt-2 border-t pt-2">
                        <div class="mt-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Single page (You will soon be able to add more pages at no extra cost).
                        </div>
                        <div class="mt-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Fully customize your page.
                        </div>
                        <div class="mt-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Use predetermined backgrounds or use your own.
                        </div>
                        <div class="mt-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Analytics dashboard with useful insights about your page.
                        </div>
                        <div class="mt-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Social media buttons.
                        </div>
                        <div class="mt-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Share with offline customers via QR codes.
                        </div>
                    </div>

                    @auth
                        @if (auth()->user()->onTrial())
                            <div class="mt-2 border-t">
                                <a  href="{{route('subscribe.monthly')}}"
                                    class="mt-4 w-full inline-flex items-center justify-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                                >Pay Monthly</a>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <div class="w-full p-4 border rounded-lg">
                    <div class="flex items-center justify-between">
                        <div class="text-lg font-bold">$20 per year</div>
                        <div class="text-xs px-2 py-1 -my-1 bg-green-200 border border-green-400 rounded-lg text-green-800">Save 16.67%</div>
                    </div>
                    <div class="mt-2 border-t pt-2">
                        <div class="mt-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Single page (You will soon be able to add more pages at no extra cost).</div>
                        <div class="mt-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Fully customize your page.</div>
                        <div class="mt-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Use predetermined backgrounds or use your own.</div>
                        <div class="mt-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Analytics dashboard with useful insights about your page.</div>
                        <div class="mt-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Social media buttons.</div>
                        <div class="mt-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Share with offline customers via QR codes.</div>
                    </div>

                    @auth
                        @if (auth()->user()->onTrial())
                            <div class="mt-2 border-t">
                                <a  href="{{route('subscribe.yearly')}}"
                                    class="mt-4 w-full inline-flex items-center justify-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                                >Pay Yearly</a>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>


        </div>
    </div>
</x-guest-layout>
