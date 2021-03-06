<?php

namespace App\Http\Livewire\Page;

use App\Models\Theme;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Appearance extends Component
{
    use WithFileUploads;

    public $btnfg, $btnbg, $btnstyle, $socpos, $soccolor, $bgtype, $bgimage, $bgvalue, $textcolor;

    /**
     * Save theme
     */
    public function saveTheme($args)
    {
        $theme = Theme::where('page_id', auth()->user()->page->id)->first();
        if (isset($theme)) {
            $theme->update([
                'args' => $args,
            ]);
        } else {
            Theme::create([
                'page_id' => auth()->user()->page->id,
                'args' => $args,
            ]);
        }
        return redirect()->route('linkd.appearance');
    }

    public function save()
    {
        if (!is_null($this->bgtype)) {
            $bgtype = $this->bgtype;
            if ($this->bgtype == 'image') {
                $this->validate([
                    'bgimage' => 'required|max:2048|mimes:png,jpg,jpeg'
                ]);
                // Delete current background image if any.
                if (auth()->user()->page->bgvalue) {
                    Storage::delete('public/backgrounds/'. auth()->user()->page->bgvalue);
                }
                // Store new background image.
                $this->bgimage->storeAs('public/backgrounds', $this->bgimage->getClientOriginalName());
                $bgvalue = $this->bgimage->getClientOriginalName();
            }
            if ($this->bgtype == 'color') {
                $bgvalue = $this->bgvalue;
            }
        } else {
            // If the form bgtype is null, leave things as is.
            $bgtype = auth()->user()->page->bgtype;
            $bgvalue = auth()->user()->page->bgvalue;
        }

        auth()->user()->page->update([
            'bgtype' => $bgtype,
            'bgvalue' => $bgvalue,
            'textcolor' => $this->textcolor,
            'btnfg' => $this->btnfg,
            'btnbg' => $this->btnbg,
            'btnstyle' => $this->btnstyle,
            'socpos' => $this->socpos, // social buttons position
            'soccolor' => $this->soccolor, // social buttons position
        ]);

        return redirect()->route('linkd.appearance');
    }

    public function render()
    {
        $this->btnfg = auth()->user()->page->btnfg;
        $this->btnbg = auth()->user()->page->btnbg;
        $this->btnstyle = auth()->user()->page->btnstyle;
        $this->socpos = auth()->user()->page->socpos;
        $this->soccolor = auth()->user()->page->soccolor;
        $this->bgvalue = auth()->user()->page->bgvalue;
        $this->textcolor = auth()->user()->page->textcolor;
        // $this->bgtype = auth()->user()->page->bgtype;

        return view('livewire.page.appearance');
    }
}
