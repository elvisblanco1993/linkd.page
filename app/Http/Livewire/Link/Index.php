<?php

namespace App\Http\Livewire\Link;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public $links, $socials;
    public $bg, $bgvalue, $textcolor, $btnbg, $btnfg, $socpos, $soccolor;

    public function render()
    {
        $user = auth()->user();
        $this->links = $user->page->links;
        $this->socials = DB::table('social_media_links')->where('page_id', $user->page->id)->get();

        // Load styles for the preview
        $page = $user->page;
        // Background color or image
        if ($page->bgtype == 'color') {
            if (!is_null($page->bgvalue)) {
                $this->bg = 'background-color:' . $page->bgvalue . ';';
            } else {
                $this->bg = 'background-color:#ffffff;';
            }
        } else {
            $this->bgvbgalue = 'background-image:url(\'' . $page->bgvalue . '\');';
        }

        $this->textcolor = $page->textcolor ?? '#000000';
        $this->btnbg = $page->btnbg ?? '#000000';
        $this->btnfg = $page->btnfg ?? '$ffffff';
        $this->socpos = $page->socpos;
        $this->soccolor = $page->soccolor;

        return view('livewire.link.index');
    }
}
