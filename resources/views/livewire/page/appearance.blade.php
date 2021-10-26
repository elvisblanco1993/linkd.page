<div>
    <div class="py-12 max-w-7xl mx-auto px-4">
        <div class="md:flex gap-8 space-y-8 sm:space-y-0">
            <div class="w-full md:w-2/3 xl:col-span-5">
                <div class="w-full">
                    <div class="px-4">
                        <div class="mb-4">
                            <div class="text-lg">Quick styles</div>
                            <div class="text-sm text-gray-600">Apply a quick theme to your linkd.</div>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-8">
                            <div class="flex items-center justify-center gap-2 w-full h-36 shadow rounded-xl bg-gradient-to-tr from-pink-500 to-yellow-500">
                                <button class="px-3 py-1 bg-white rounded bg-opacity-80 text-sm font-medium text-gray-600 shadow" wire:click="saveTheme('bg-gradient-to-tr from-pink-500 to-yellow-500')">
                                    Apply
                                </button>
                            </div>
                            <div class="flex items-center justify-center gap-2 w-full h-36 shadow rounded-xl bg-gradient-to-tr from-green-300 to-indigo-400">
                                <button class="px-3 py-1 bg-white rounded bg-opacity-80 text-sm font-medium text-gray-600 shadow" wire:click="saveTheme('bg-gradient-to-tr from-green-300 to-indigo-400')">
                                    Apply
                                </button>
                            </div>
                            <div class="flex items-center justify-center gap-2 w-full h-36 shadow rounded-xl bg-gradient-to-tr from-green-300 to-yellow-400">
                                <button class="px-3 py-1 bg-white rounded bg-opacity-80 text-sm font-medium text-gray-600 shadow" wire:click="saveTheme('bg-gradient-to-tr from-green-300 to-yellow-400')">
                                    Apply
                                </button>
                            </div>
                            <div class="flex items-center justify-center gap-2 w-full h-36 shadow rounded-xl bg-gradient-to-tr from-blue-500 to-red-300">
                                <button class="px-3 py-1 bg-white rounded bg-opacity-80 text-sm font-medium text-gray-600 shadow" wire:click="saveTheme('bg-gradient-to-tr from-blue-500 to-red-300')">
                                    Apply
                                </button>
                            </div>
                            <div class="flex items-center justify-center gap-2 w-full h-36 shadow rounded-xl bg-gradient-to-tr from-pink-500 to-blue-200">
                                <button class="px-3 py-1 bg-white rounded bg-opacity-80 text-sm font-medium text-gray-600 shadow" wire:click="saveTheme('bg-gradient-to-tr from-pink-500 to-blue-200')">
                                    Apply
                                </button>
                            </div>
                            <div class="flex items-center justify-center gap-2 w-full h-36 shadow rounded-xl bg-gradient-to-tr from-gray-800 to-gray-600">
                                <button class="px-3 py-1 bg-white rounded bg-opacity-80 text-sm font-medium text-gray-600 shadow" wire:click="saveTheme('bg-gradient-to-tr from-gray-800 to-gray-600')">
                                    Apply
                                </button>
                            </div>
                            <div class="flex items-center justify-center gap-2 w-full h-36 shadow rounded-xl bg-gradient-to-tr from-gray-600 to-gray-400">
                                <button class="px-3 py-1 bg-white rounded bg-opacity-80 text-sm font-medium text-gray-600 shadow" wire:click="saveTheme('bg-gradient-to-tr from-gray-600 to-gray-400')">
                                    Apply
                                </button>
                            </div>
                            <div class="flex items-center justify-center gap-2 w-full h-36 shadow rounded-xl bg-gradient-to-tr from-gray-400 to-gray-200">
                                <button class="px-3 py-1 bg-white rounded bg-opacity-80 text-sm font-medium text-gray-600 shadow" wire:click="saveTheme('bg-gradient-to-tr from-gray-400 to-gray-200')">
                                    Apply
                                </button>
                            </div>
                        </div>
                        <div class="my-4 border-t"></div>
                        <div class="mb-4">
                            <div class="text-lg">Fine tunning</div>
                            <div class="text-sm text-gray-600">Make your brand pop with custom styles.</div>
                        </div>
                        <form wire:submit.prevent="save" class="p-4 bg-white rounded-lg shadow">
                            <div class="grid grid-cols-2 gap-4">
                                {{-- Page Background --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="bgtype" class="col-span-2 md:col-span-1 mb-1 md:mb-0">Page background</label>
                                        <div class="">
                                            <div class="col-span-2 sm:col-span-1 flex items-center gap-4">
                                                <div class="flex items-center gap-4 px-4 py-2 border rounded-md">
                                                    <input type="radio" wire:model="bgtype" name="bgtype" id="color" value="color" @click="open = false">
                                                    <label for="color">Color</label>
                                                </div>
                                                <div class="flex items-center gap-4 px-4 py-2 border rounded-md">
                                                    <input type="radio" wire:model="bgtype" name="bgtype" id="image" value="image" @click="open = true">
                                                    <label for="image">Image</label>
                                                </div>
                                            </div>

                                            <div class="mt-4">
                                                @if ($bgtype == 'image')
                                                    <input type="file" id="bgimage" wire:model.defer="bgimage" class="text-xs sm:text-sm">
                                                @endif
                                                @if ($bgtype == 'color')
                                                    <input type="color" id="bgvalue" class="w-10 h-10 rounded-lg" wire:model.defer="bgvalue">
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-2 border-t"></div>
                                {{-- Page Text --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="textcolor" class="col-span-2 md:col-span-1 mb-1 md:mb-0">Page text color</label>
                                        <input type="color" id="textcolor" class="w-10 h-10" wire:model.defer="textcolor" placeholder="#000000">
                                    </div>
                                </div>

                                <div class="col-span-2 border-t"></div>
                                {{-- Button Style --}}
                                <div class="col-span-2 grid grid-cols-2 items-center">
                                    <div class="col-span-2 md:col-span-1 mb-1 md:mb-0">
                                        <label>Button corners</label>
                                    </div>
                                    <div class="col-span-2 md:col-span-1 mb-1 md:mb-0">
                                        <div class="grid grid-cols-3 gap-4">
                                            <div>
                                                <input class="hidden" id="radio_1" type="radio" wire:model.defer="btnstyle" value="rounded-none" name="btnradio" checked>
                                                <label class="text-center border p-2 border-gray-300 cursor-pointer text-xs sm:text-sm" for="radio_1">
                                                    Sharp
                                                </label>
                                            </div>

                                            <div>
                                                <input class="hidden" id="radio_2" type="radio" wire:model.defer="btnstyle" value="rounded-lg" name="btnradio">
                                                <label class="text-center border p-2 rounded-lg border-gray-300 cursor-pointer text-xs sm:text-sm" for="radio_2">
                                                    Rounded
                                                </label>
                                            </div>

                                            <div>
                                                <input class="hidden" id="radio_3" type="radio" wire:model.defer="btnstyle" value="rounded-full" name="btnradio">
                                                <label class="text-center border p-2 rounded-full border-gray-300 cursor-pointer text-xs sm:text-sm" for="radio_3">
                                                    Rounded Full
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Button Background --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="btnbg" class="col-span-2 md:col-span-1 mb-1 md:mb-0">Button background color</label>
                                        <input type="color" id="btnbg" class="w-10 h-10" wire:model.defer="btnbg" placeholder="#FFFFFF">
                                    </div>
                                </div>

                                {{-- Button text --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="btnfg" class="col-span-2 md:col-span-1 mb-1 md:mb-0">Button text color</label>
                                        <input type="color" id="btnfg" class="w-10 h-10" wire:model.defer="btnfg" placeholder="#000000">
                                    </div>
                                </div>

                                <div class="col-span-2 border-t"></div>

                                {{-- Social Media Buttons Position --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="socpos" class="col-span-2 md:col-span-1 mb-1 md:mb-0">Social media position</label>
                                        <select wire:model.defer="socpos" id="socpos" class="w-full">
                                            <option value=""></option>
                                            <option value="top">Top</option>
                                            <option value="bottom">Bottom</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- Social Media Buttons Color --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="soccolor" class="col-span-2 md:col-span-1 mb-1 md:mb-0">Social media color</label>
                                        <select wire:model.defer="soccolor" id="soccolor" class="w-full">
                                            <option value=""></option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 text-right">
                                <x-jet-button>{{__("Save")}}</x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Mobile Preview --}}
            <div class="px-4 w-full md:w-1/3">
                @livewire('link.index')
            </div>
        </div>
    </div>
</div>
