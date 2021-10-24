<div>
    <div class="py-12 max-w-7xl mx-auto px-4">
        <div class="md:flex gap-8 space-y-8 sm:space-y-0">
            <div class="w-full md:w-2/3 xl:col-span-5">
                <div class="w-full overflow-auto">
                    <div class="px-4" x-data="{ expanded: false }">
                        <form wire:submit.prevent="saveProfile" class="p-4 bg-white rounded-lg shadow">
                            <div class="text-left mb-2">
                                <div class="grid grid-cols-2 items-center">
                                    <div class="col-span-2 md:col-span-1 mb-1 md:mb-0">
                                        <label for="handler" class="block">Handler</label>
                                        <small class="text-gray-600">Changing your handler will affect your linkd url.</small>
                                    </div>
                                    <div class="col-span-2 md:col-span-1 mb-1 md:mb-0">
                                        <input type="text" wire:model.defer="handler" placeholder="@yourhandler">
                                        @error('handler') <span class="text-red-600">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-left mb-2">
                                <div class="grid grid-cols-2 items-center">
                                    <label for="name" class="col-span-2 md:col-span-1 mb-1 md:mb-0">Your Name</label>
                                    <div class="col-span-2 md:col-span-1 mb-1 md:mb-0">
                                        <input type="text" wire:model.defer="name" placeholder="Your Name">
                                        @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-left mb-2">
                                <div class="grid grid-cols-2">
                                    <label for="bio" class="col-span-2 md:col-span-1 mb-1 md:mb-0">Biography</label>
                                    <div class="col-span-2 md:col-span-1 mb-1 md:mb-0">
                                        <textarea rows="6" placeholder="Introduce yourself..." wire:model.defer="bio"></textarea>
                                        @error('bio') <span class="text-red-600">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-left mb-2">
                                <div class="grid grid-cols-2 items-center">
                                    <label for="avatar" class="col-span-2 md:col-span-1 mb-1 md:mb-0">Your avatar</label>
                                    <div class="">
                                        <input type="file" wire:model="avatar" class="text-xs sm:text-sm">
                                        @error('bio') <span class="text-red-600">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <x-jet-button>Save</x-jet-button>
                            </div>
                        </form>

                        <div class="border-t my-6"></div>

                        <div class="p-4 bg-white rounded-lg shadow mb-8">
                            <button @click="expanded = ! expanded" class="border border-gray-400 px-2 py-1 text-xs rounded-lg text-gray-800 uppercase">Edit social media links</button>

                            <form wire:submit.prevent="saveSocialMedia" x-show="expanded" x-collapse.duration.1000ms x-cloak class="mt-4">
                                <div class="text-right mb-4">
                                    <x-jet-button type="submit">Save</x-jet-button>
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/tiktok.svg')}}" alt="tiktok icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($tiktok)])
                                                    >
                                        <input type="text" wire:model.defer="tiktok" placeholder="https://tiktok.com/...">
                                    </div>
                                    @error('tiktok') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/facebook.svg')}}" alt="facebook icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($facebook)])
                                                    >
                                        <input type="text" wire:model.defer="facebook" placeholder="https://facebook.com/...">
                                    </div>
                                    @error('facebook') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/messenger.svg')}}" alt="messenger icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($messenger)])
                                                    >
                                        <input type="text" wire:model.defer="messenger" placeholder="https://messenger.com/...">
                                    </div>
                                    @error('messenger') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/whatsapp.svg')}}" alt="whatsapp icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($whatsapp)])
                                                    >
                                        <input type="text" wire:model.defer="whatsapp" placeholder="https://whatsapp.com/...">
                                    </div>
                                    @error('whatsapp') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/instagram.svg')}}" alt="instagram icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($instagram)])
                                                    >
                                        <input type="text" wire:model.defer="instagram" placeholder="https://instagram.com/...">
                                    </div>
                                    @error('instagram') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/twitter.svg')}}" alt="twitter icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($twitter)])
                                                    >
                                        <input type="text" wire:model.defer="twitter" placeholder="https://twitter.com/...">
                                    </div>
                                    @error('twitter') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/onlyfans.svg')}}" alt="onlyfans icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($onlyfans)])
                                                    >
                                        <input type="text" wire:model.defer="onlyfans" placeholder="https://onlyfans.com/...">
                                    </div>
                                    @error('onlyfans') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/pinterest.svg')}}" alt="pinterest icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($pinterest)])
                                                    >
                                        <input type="text" wire:model.defer="pinterest" placeholder="https://pinterest.com/...">
                                    </div>
                                    @error('pinterest') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/etsy.svg')}}" alt="etsy icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($etsy)])
                                                    >
                                        <input type="text" wire:model.defer="etsy" placeholder="https://etsy.com/...">
                                    </div>
                                    @error('etsy') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/amazon.svg')}}" alt="amazon icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($amazon)])
                                                    >
                                        <input type="text" wire:model.defer="amazon" placeholder="https://amazon.com/...">
                                    </div>
                                    @error('amazon') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/ebay.svg')}}" alt="ebay icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($ebay)])
                                                    >
                                        <input type="text" wire:model.defer="ebay" placeholder="https://ebay.com/...">
                                    </div>
                                    @error('ebay') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/linkedin.svg')}}" alt="linkedin icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($linkedin)])
                                                    >
                                        <input type="text" wire:model.defer="linkedin" placeholder="https://linkedin.com/...">
                                    </div>
                                    @error('linkedin') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/indeed.svg')}}" alt="indeed icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($indeed)])
                                                    >
                                        <input type="text" wire:model.defer="indeed" placeholder="https://indeed.com/...">
                                    </div>
                                    @error('indeed') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/unsplash.svg')}}" alt="unsplash icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($unsplash)])
                                                    >
                                        <input type="text" wire:model.defer="unsplash" placeholder="https://unsplash.com/...">
                                    </div>
                                    @error('unsplash') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/pexels.svg')}}" alt="pexels icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($pexels)])
                                                    >
                                        <input type="text" wire:model.defer="pexels" placeholder="https://pexels.com/...">
                                    </div>
                                    @error('pexels') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/500px.svg')}}" alt="500px icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($_500px)])
                                                    >
                                        <input type="text" wire:model.defer="_500px" placeholder="https://500px.com/...">
                                    </div>
                                    @error('_500px') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/snapchat.svg')}}" alt="snapchat icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($snapchat)])
                                                    >
                                        <input type="text" wire:model.defer="snapchat" placeholder="https://snapchat.com/...">
                                    </div>
                                    @error('snapchat') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/youtube.svg')}}" alt="youtube icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($youtube)])
                                                    >
                                        <input type="text" wire:model.defer="youtube" placeholder="https://youtube.com/...">
                                    </div>
                                    @error('youtube') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/spotify.svg')}}" alt="spotify icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($spotify)])
                                                    >
                                        <input type="text" wire:model.defer="spotify" placeholder="https://spotify.com/...">
                                    </div>
                                    @error('spotify') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/medium.svg')}}" alt="medium icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($medium)])
                                                    >
                                        <input type="text" wire:model.defer="medium" placeholder="https://medium.com/...">
                                    </div>
                                    @error('medium') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                {{-- Vimeo --}}
                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/vimeo.svg')}}" alt="vimeo icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($vimeo)])
                                                    >
                                        <input type="text" wire:model.defer="vimeo" placeholder="https://vimeo.com/...">
                                    </div>
                                    @error('vimeo') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/tumblr.svg')}}" alt="tumblr icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($tumblr)])
                                                    >
                                        <input type="text" wire:model.defer="tumblr" placeholder="https://tumblr.com/...">
                                    </div>
                                    @error('tumblr') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/reddit.svg')}}" alt="reddit icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($reddit)])
                                                    >
                                        <input type="text" wire:model.defer="reddit" placeholder="https://reddit.com/...">
                                    </div>
                                    @error('reddit') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/applemusic.svg')}}" alt="applemusic icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($applemusic)])
                                                    >
                                        <input type="text" wire:model.defer="applemusic" placeholder="https://music.apple.com/...">
                                    </div>
                                    @error('applemusic') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-left mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/applepodcasts.svg')}}" alt="applepodcasts icon"
                                                @class([
                                                    'w-5',
                                                    'filter',
                                                    'opacity-30'=>is_null($applepodcasts)])
                                                    >
                                        <input type="text" wire:model.defer="applepodcasts" placeholder="https://podcasts.apple.com/...">
                                    </div>
                                    @error('applepodcasts') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <div class="text-right mt-4">
                                    <x-jet-button type="submit">Save</x-jet-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mobile Preview --}}
            <div class="px-4 w-full md:w-1/3">
                @livewire('link.index')
            </div>
        </div>
    </div>

    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
</div>
