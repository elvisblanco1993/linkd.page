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
                border-color: {{$page->btnfg}}
            }
            .preview-btn:hover {
                background-color: {{$page->btnfg}};
                color: {{$page->btnbg}};
                border-color: {{$page->btnbg}}
            }
        </style>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="min-h-screen" id="site">
        <div class="font-sans antialiased">
            <div class="max-w-lg mx-auto mt-8 text-center p-4">
                <img src="{{asset('storage/avatars/'.$page->avatar)}}" alt="" class="rounded-full w-24 sm:w-32 h-24 sm:h-32 shadow mt-2 mb-2 mx-auto object-cover">
                <p class="mt-3 font-semibold text-base">{{$page->name}}</p>
                <p class="mt-1 text-sm">{{$page->handler}}</p>
                <p class="mt-2 mb-4 text-sm">{{$page->bio}}</p>

                {{-- Social media buttons at top --}}
                @if ($page->socpos == 'top')
                    <div class="grid grid-cols-6 gap-4 mb-4">
                        @foreach ($socials as $social)
                            <a href="{{$social->url}}" class="col-span-1 text-center w-6 h-6 transform hover:-translate-y-1 hover:scale-110 transition">
                                @if ($page->soccolor == 'black')
                                    <img src="{{asset("assets/$social->type.svg")}}" alt="tiktok icon"/>
                                @else
                                    <img src="{{asset("assets/$social->type-white.svg")}}" alt="tiktok icon"/>
                                @endif
                            </a>
                        @endforeach
                    </div>
                @endif

                {{-- Links --}}
                <div class="w-full flex flex-col my-4">
                    @forelse ($links as $link)
                        <a  href="{{$link->url}}"
                            wire:click="Hello"
                            class="w-full text-center font-semibold px-4 py-2 mb-4 border-2 transition preview-btn"
                            >{{$link->title}}</a>
                    @empty
                    @endforelse
                </div>

                {{-- Social media buttons at bottom --}}
                @if ($page->socpos == 'bottom')
                    <div class="flex items-center justify-center gap-4 mb-4">
                        @foreach ($socials as $social)
                            <a href="{{$social->url}}" class="w-1/5 text-center transform hover:-translate-y-1 hover:scale-110 transition">
                                @if ($page->soccolor == 'black')
                                    <img src="{{asset("assets/$social->type.svg")}}" alt="tiktok icon" class="w-6 h-6 mx-auto"/>
                                @else
                                    <img src="{{asset("assets/$social->type-white.svg")}}" alt="tiktok icon" class="w-6 h-6 mx-auto"/>
                                @endif
                            </a>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </body>
</html>
