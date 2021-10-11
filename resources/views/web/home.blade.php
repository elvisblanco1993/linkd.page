<x-guest-layout>
    <div class="max-w-7xl mx-auto">
        <div class="w-full flex items-center justify-between py-4 px-4 sm:px-6 lg:px-8">
            <div class="">
                <div class="text-lg font-light tracking-wide">linkd</div>
            </div>

            <div class="">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>
