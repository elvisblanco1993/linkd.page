<?php

namespace App\Http\Livewire\Statistics;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Social extends Component
{

    public $socials;

    public function mount()
    {
        $this->socials = DB::table('social_media_links')->where('page_id', auth()->user()->page->id)->get();
    }

    public function render()
    {
        return view('livewire.statistics.social');
    }
}
