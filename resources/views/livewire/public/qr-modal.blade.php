<div>
    <div class="flex justify-end p-4">
        <button class="text-gray-800 hover:text-gray-700 transition" wire:click="$toggle('qrModal')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
            </svg>
        </button>
    </div>

    <x-jet-dialog-modal wire:model="qrModal">
        <x-slot name="title"></x-slot>
        <x-slot name="content">
            <div class="flex flex-col items-center justify-center">
                <div id="qrcode"></div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="px-4 py-2 rounded-full bg-white text-gray-800 border text-center text-xs sm:text-sm">
                {{$linkdQr}}
            </div>
        </x-slot>
    </x-jet-dialog-modal>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
        new QRCode(document.getElementById("qrcode"), {
            text: "{{ $linkdQr }}",
            colorDark : "#212b39",
	        colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });
    </script>
</div>
