<div>
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
            <a
                href="{{$link->url}}"
                class="w-full rounded-lg text-center font-semibold px-4 py-2 mb-4 transition preview-btn shadow-lg"
                target="_blank"
                wire:click="$emit('linkClicked', '{{$link->uuid}}')"
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
