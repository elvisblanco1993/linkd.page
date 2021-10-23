<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">

            @if (auth()->user()->onTrial())
                <div class="w-full bg-yellow-200">
                    <div class="max-w-7xl mx-auto text-center py-1 text-sm text-yellow-800 px-4 sm:px-6 lg:px-8 flex items-center gap-2">
                        <span>
                            Your trial will expire in {{ \Carbon\Carbon::now()->diffInDays(auth()->user()->trialEndsAt()) }} days. Subscribe now to continue to continue using <span class="text-indigo-500 font-bold">linkd</span>.
                        </span>
                        <a href="{{route('pricing')}}" class="flex items-center px-2 py-1 text-xs font-medium tracking-wider gap-2 rounded bg-indigo-400 text-white shadow">
                            Subscribe
                        </a>
                    </div>
                </div>
            @endif

            @livewire('navigation-menu')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

        {{-- Copy linkd to clipboard --}}
        <script>
            const copyToClipboard = () => {
                const text = document.getElementById('linkdpageurl').innerHTML;
                navigator.clipboard
                    .writeText(text)
                    .then(() => {
                        document.getElementById('linkdpagebtn').innerText = 'Copied!'
                    })
                    .catch((err) => {
                    console.error(`Error copying linkd url to clipboard: ${err}`);
                });
            };
        </script>
    </body>
</html>
