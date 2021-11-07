<div>
    <div class="w-full mb-6 p-4 bg-white rounded-lg shadow">
        <ul class="text-left" wire:sortable="updateLinksOrder">
            @forelse ($links as $key => $link)
                <li class="w-full border-b py-4" x-data="{ open: false }" wire:sortable.item="{{ $link->id }}" wire:key="link-{{ $link->id }}">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <button wire:sortable.handle class="text-gray-400 hover:text-gray-800 hover:cursor-pointer transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
                                </svg>
                            </button>
                            <span class="@if($link->expirates_at && \Carbon\Carbon::now() > $link->expirates_at) line-through text-gray-400 @endif">{{$link->title}}</span>
                            @if ($link->expirates_at)
                                <div class="flex items-center uppercase text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="@if($link->expirates_at && \Carbon\Carbon::now() > $link->expirates_at) line-through text-gray-400 @else text-indigo-500 @endif ml-4 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-xs ml-2">{{ date('M d, Y H:i:s', strtotime($link->expirates_at)) }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="flex items-center gap-4">
                            <button class="text-gray-500 hover:text-gray-600 transition" @click="open = ! open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div x-cloak x-show="open" class="my-6 border rounded-lg p-4 bg-white shadow">
                        @livewire('link.update', ['link' => $link], key(rand() * $link->id))
                    </div>
                </li>
            @empty
                <div class="text-center">
                    Add a link to get started.
                </div>
            @endforelse
        </ul>
    </div>

    <div x-data="{ open: false, timedLink: false }">

        <button @click="open = !open" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
            {{__("Add Link")}}
        </button>

        <div x-cloak x-show="open" x-transition @click.outside="open = !open" @keyup.escape="open = !open" class="w-full mx-auto my-6 border rounded-lg p-4 bg-white shadow">
            <form wire:submit.prevent="save">
                <div class="text-left grid grid-cols-6 items-center gap-2 mb-2">
                    <label for="title" class="col-span-1 font-medium text-sm text-gray-700">Title</label>
                    <input type="text" class="col-span-5 w-full text-sm placeholder-red-600" wire:model="title" @error('title') placeholder="Required field" @enderror>
                </div>

                <div class="text-left grid grid-cols-6 items-center gap-2 mb-4">
                    <label for="url" class="col-span-1 font-medium text-sm text-gray-700">URL</label>
                    <input type="url" class="col-span-5 text-sm placeholder-red-600" wire:model="url" @error('url') placeholder="Required field" @enderror>
                </div>

                <div class="grid grid-cols-6 items-center gap-2 mb-4">
                    <div class="col-span-6 sm:col-span-1">

                        <span class="cursor-pointer text-gray-500 hover:text-indigo-600 transition-all" @click="timedLink = !timedLink">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                    </div>
                    <div x-show="timedLink" x-transition class="my-2 col-span-6 sm:col-span-5 grid grid-cols-8 items-center justify-start gap-2">
                        <label class="col-span-2 text-left">Expire link on</label>
                        <input type="number" wire:model="expiration_year" minlength="4" maxlength="4" min="{{\Carbon\Carbon::now()->format('Y')}}" max="2999" placeholder="YYYY" class="col-span-2 text-sm">
                        <input type="number" wire:model="expiration_month" minlength="2" maxlength="2" min="1" max="12" placeholder="MM" class="col-span-2 sm:col-span-1 text-sm">
                        <input type="number" wire:model="expiration_day" minlength="2" maxlength="2" min="1" max="31" placeholder="DD" class="col-span-2 sm:col-span-1 text-sm">
                        <input type="number" wire:model="expiration_hour" min="0" max="23" step="1" placeholder="HH" class="col-span-2 sm:col-span-1 text-sm">
                        <input type="number" wire:model="expiration_minute" min="0" max="59" step="5" placeholder="MM" class="col-span-2 sm:col-span-1 text-sm">
                    </div>
                </div>
                <div class="flex items-center justify-end">
                    <x-jet-button type="submit">Save</x-jet-button>
                </div>
            </form>
        </div>
    </div>
</div>
