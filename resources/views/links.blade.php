<x-app-layout>
    <div class="py-12 max-w-7xl mx-auto px-4">
        <div class="md:flex gap-8 space-y-8 sm:space-y-0">
            <div class="w-full md:w-2/3 xl:col-span-5">
                <div class="w-full">
                    <div class="px-4 text-center">
                        @livewire('link.create')
                    </div>
                </div>
            </div>

            {{-- Mobile Preview --}}
            <div class="px-4 w-full md:w-1/3">
                @livewire('link.index')
            </div>
        </div>
    </div>
</x-app-layout>
