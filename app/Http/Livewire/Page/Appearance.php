<?php

namespace App\Http\Livewire\Page;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Appearance extends Component
{
    use WithFileUploads;

    public $btnfg, $btnbg, $socpos, $soccolor, $bgtype, $bgimage, $bgvalue, $textcolor;

    public function save()
    {

        if (!is_null($this->bgtype)) {
            $bgtype = $this->bgtype;
            if ($this->bgtype == 'image') {
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
            'socpos' => $this->socpos, // social buttons position
            'soccolor' => $this->soccolor, // social buttons position
        ]);

        return redirect()->route('linkd.appearance');
    }

    public function render()
    {
        $this->btnfg = auth()->user()->page->btnfg;
        $this->btnbg = auth()->user()->page->btnbg;
        $this->socpos = auth()->user()->page->socpos;
        $this->soccolor = auth()->user()->page->soccolor;
        // $this->bgtype = auth()->user()->page->bgtype;
        $this->bgvalue = auth()->user()->page->bgvalue;
        $this->textcolor = auth()->user()->page->textcolor;

        return view('livewire.page.appearance');
    }
}
