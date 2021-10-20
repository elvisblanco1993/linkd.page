<div>
    <div class="flex justify-end p-4">
        <button class="text-white hover:text-indigo-400 transition" wire:click="$toggle('qrModal')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
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
            <div class="px-4 py-2 rounded-full bg-white border text-center">
                {{$linkdQr}}
            </div>
        </x-slot>
    </x-jet-dialog-modal>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
        new QRCode(document.getElementById("qrcode"), {
            text: "{{ $linkdQr }}",
            colorDark : "#000",
	        colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });
    </script>
</div>
