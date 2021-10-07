<div>
    <form wire:submit.prevent="update">
        <div class="text-left mb-2">
            <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
            <input type="text" wire:model.defer="title">
            @error('title') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="text-left mb-4">
            <label for="url" class="block font-medium text-sm text-gray-700">URL</label>
            <input type="url" wire:model.defer="url">
            @error('url') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-between">
            <button class="text-red-400 hover:text-red-600 transition" wire:click.prevent="delete">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </button>
            <x-jet-button type="submit">Update Link</x-jet-button>
        </div>
    </form>
</div>
