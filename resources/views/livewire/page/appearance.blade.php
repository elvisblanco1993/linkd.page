<div>
    <div class="py-12 max-w-7xl mx-auto px-4">
        <div class="md:flex gap-8 space-y-8 sm:space-y-0">
            <div class="w-full md:w-2/3 xl:col-span-5">
                <div class="w-full">
                    <div class="px-4">
                        <form wire:submit.prevent="save" class="p-4 bg-white rounded-lg shadow-lg">
                            <div class="grid grid-cols-2 gap-4">
                                {{-- Page Background --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="bgtype">Page background type</label>
                                        <select wire:model="bgtype" id="bgtype" class="w-full">
                                            <option value=""></option>
                                            <option value="color">Color</option>
                                            <option value="image">Image</option>
                                        </select>
                                    </div>
                                </div>

                                @if ($bgtype == 'image')
                                    <div class="col-span-2 ml-4">
                                        <div class="grid grid-cols-2 items-center">
                                            <label for="bgimage">Background image</label>
                                            <input type="file" id="bgimage" wire:model="bgimage">
                                        </div>
                                    </div>
                                @endif
                                @if ($bgtype == 'color')
                                    <div class="col-span-2 ml-4">
                                        <div class="grid grid-cols-2 items-center">
                                            <label for="bgvalue">Background color</label>
                                            <input type="color" id="bgvalue" class="w-full" wire:model.defer="bgvalue">
                                        </div>
                                    </div>
                                @endif

                                {{-- Page Text --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="textcolor">Page text color</label>
                                        <input type="color" id="textcolor" class="w-full" wire:model.defer="textcolor" placeholder="#000000">
                                    </div>
                                </div>

                                <div class="col-span-2 border-t"></div>

                                {{-- Button Background --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="btnbg">Button background color</label>
                                        <input type="color" id="btnbg" class="w-full" wire:model.defer="btnbg" placeholder="#FFFFFF">
                                    </div>
                                </div>

                                {{-- Button text --}}
                                <div class="col-span-2">
                                    <div class="grid grid-cols-2 items-center">
                                        <label for="btnfg">Button text color</label>
                                        <input type="color" id="btnfg" class="w-full" wire:model.defer="btnfg" placeholder="#000000">
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
