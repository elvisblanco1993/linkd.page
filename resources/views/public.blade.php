<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $page->name ?? $page->handler }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        {{-- Custom Styling --}}
        <style>
            #site {
                {{$pagebg}};
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                color: {{$page->textcolor}}
            }
            .preview-btn {
                background-color: {{$page->btnbg}};
                color: {{$page->btnfg}};
                border-color: {{$page->btnbg}}
            }
            .preview-btn:hover {
                background-color: transparent;
                color: {{$page->btnbg}};
                /* border-color: {{$page->btnbg}} */
            }
        </style>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        @livewireStyles

    </head>
    <body class="min-h-screen" id="site">
        <div class="font-sans antialiased">
            <div class="max-w-lg mx-auto mt-8 text-center p-4">
                <img src="{{asset('storage/avatars/'.$page->avatar)}}" alt="" class="rounded-full w-24 sm:w-32 h-24 sm:h-32 shadow mt-2 mb-2 mx-auto object-cover">
                <p class="mt-3 font-semibold text-base">{{$page->name}}</p>
                <p class="mt-1 text-sm">{{$page->handler}}</p>
                <p class="mt-2 mb-4 text-sm">{{$page->bio}}</p>

                @livewire('public.page', [
                    'page' => $page,
                ])
            </div>
        </div>
        @livewireScripts
    </body>
</html>
