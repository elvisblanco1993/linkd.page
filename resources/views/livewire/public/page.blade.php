<div>
    {{-- Social media buttons at top --}}
    @if ($page->socpos == 'top')
        <div class="w-full">
            @forelse ($socials as $link)
                <a  href="{{$link->url}}"
                    class="inline-block w-6 h-6 text-center bg-center mx-2"
                    target="_blank"
                    wire:click="$emit('socialClicked', '{{$link->uuid}}', '{{$page->id}}')"
                >
                    @if ($page->soccolor == 'black')
                        <img src="{{asset("assets/$link->type.svg")}}" alt="{{$link->type}} icon" class="inline-block w-6 h-6 transform hover:-translate-y-1 hover:scale-110 transition"/>
                    @else
                        <img src="{{asset("assets/$link->type-white.svg")}}" alt="{{$link->type}} icon" class="inline-block w-6 h-6 transform hover:-translate-y-1 hover:scale-110 transition"/>
                    @endif
                </a>
            @empty
            @endforelse
        </div>
    @endif

    {{-- Links --}}
    <div class="w-full flex flex-col my-4">
        @forelse ($links as $link)
            @if (\Carbon\Carbon::now() <= $link->expirates_at || !$link->expirates_at)
                <a
                href="{{$link->url}}"
                class="w-full {{$page->btnstyle}} text-sm text-center font-semibold px-4 py-3 mb-4 transition preview-btn border hover:bg-opacity-25"
                target="_blank"
                wire:click="$emit('linkClicked', '{{$link->uuid}}', '{{$page->id}}')"
                >{{$link->title}}</a>
            @endif
        @empty
        @endforelse
    </div>

    {{-- Social media buttons at bottom --}}
    @if ($page->socpos == 'bottom')
        <div class="w-full">
            @forelse ($socials as $link)
                <a  href="{{$link->url}}"
                    class="inline-block w-6 h-6 text-center bg-center mx-2"
                    target="_blank"
                    wire:click="$emit('socialClicked', '{{$link->uuid}}', '{{$page->id}}')"
                >
                    @if ($page->soccolor == 'black')
                        <img src="{{asset("assets/$link->type.svg")}}" alt="{{$link->type}} icon" class="inline-block w-6 h-6 transform hover:-translate-y-1 hover:scale-110 transition"/>
                    @else
                        <img src="{{asset("assets/$link->type-white.svg")}}" alt="{{$link->type}} icon" class="inline-block w-6 h-6 transform hover:-translate-y-1 hover:scale-110 transition"/>
                    @endif
                </a>
            @empty
            @endforelse
        </div>
    @endif
</div>
