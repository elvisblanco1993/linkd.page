<div>
    <div class="w-full mb-6">
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
                            <span>{{$link->title}}</span>
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

                    <div x-cloak x-show="open" class="my-6 border rounded-lg p-4 bg-white shadow-xl">
                        @livewire('link.update', ['link' => $link], key(rand() * $link->id))
                    </div>
                </li>
            @empty
            @endforelse
        </ul>
    </div>

    <div x-data="{ open: false }">

        <button @click="open = ! open" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
            {{__("Add Link")}}
        </button>

        <div x-cloak x-show="open" class="my-6 border rounded-lg p-4 bg-white shadow-xl">
            <form wire:submit.prevent="save">
                <div class="text-left mb-2">
                    <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                    <input type="text" wire:model="title">
                    @error('title') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>

                <div class="text-left mb-4">
                    <label for="url" class="block font-medium text-sm text-gray-700">URL</label>
                    <input type="url" wire:model="url">
                    @error('url') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
                <x-jet-secondary-button @click="open = false" class="mr-2">Dismiss</x-jet-secondary-button>
                <x-jet-button type="submit">Save Link</x-jet-button>
            </form>
        </div>
    </div>
</div>
