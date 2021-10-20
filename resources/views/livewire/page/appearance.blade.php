<div>
    <div class="py-12 max-w-7xl mx-auto px-4">
        <div class="md:flex gap-8 space-y-8 sm:space-y-0">
            <div class="w-full md:w-2/3 xl:col-span-5">
                <div class="w-full">
                    <div class="px-4">
                        <form wire:submit.prevent="save" class="p-4 bg-white rounded-lg shadow">
                            <div class="grid grid-cols-2 gap-4">

                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                {{-- Page Background --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="bgtype">Page background</label>
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
                                        <label for="textcolor">Page text color</label>
                                        <input type="color" id="textcolor" class="w-10 h-10" wire:model.defer="textcolor" placeholder="#000000">
                                    </div>
                                </div>

                                <div class="col-span-2 border-t"></div>
                                {{-- Button Style --}}
                                <div class="col-span-2 flex itens-center justify-between">
                                    <div class="w-1/2">
                                        <label>Button corners</label>
                                    </div>
                                    <div class="w-1/2">
                                        <div class="grid grid-cols-3 gap-4">
                                            <div>
                                                <input class="hidden" id="radio_1" type="radio" wire:model.defer="btnstyle" value="rounded-none" name="btnradio" checked>
                                                <label class="text-center border p-2 border-gray-300 cursor-pointer" for="radio_1">
                                                    Sharp
                                                </label>
                                            </div>

                                            <div>
                                                <input class="hidden" id="radio_2" type="radio" wire:model.defer="btnstyle" value="rounded-lg" name="btnradio">
                                                <label class="text-center border p-2 rounded-lg border-gray-300 cursor-pointer" for="radio_2">
                                                    Rounded
                                                </label>
                                            </div>

                                            <div>
                                                <input class="hidden" id="radio_3" type="radio" wire:model.defer="btnstyle" value="rounded-full" name="btnradio">
                                                <label class="text-center border p-2 rounded-full border-gray-300 cursor-pointer" for="radio_3">
                                                    Rounded Full
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Button Background --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="btnbg">Button background color</label>
                                        <input type="color" id="btnbg" class="w-10 h-10" wire:model.defer="btnbg" placeholder="#FFFFFF">
                                    </div>
                                </div>

                                {{-- Button text --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="btnfg">Button text color</label>
                                        <input type="color" id="btnfg" class="w-10 h-10" wire:model.defer="btnfg" placeholder="#000000">
                                    </div>
                                </div>

                                <div class="col-span-2 border-t"></div>

                                {{-- Social Media Buttons Position --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="socpos">Social media position</label>
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
                                        <label for="soccolor">Social media color</label>
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
