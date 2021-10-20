<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class QrModal extends Component
{
    public $qrModal, $handler, $linkdQr;

    public function render()
    {
        $this->linkdQr = config('app.url') . '/' . $this->handler;
        return view('livewire.public.qr-modal');
    }
}
