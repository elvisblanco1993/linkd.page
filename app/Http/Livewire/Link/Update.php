<?php

namespace App\Http\Livewire\Link;

use Livewire\Component;
use App\Models\Link;

class Update extends Component
{
    public $link, $title, $url, $bgcolor, $textcolor;

    public function delete()
    {
        $this->link->delete();
        return redirect()->route('linkd.links');
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'url' => 'required|url',
        ]);

        try {
            $this->link->update([
                'title' => $this->title,
                'url' => $this->url,
            ]);

            // Update the preview
            return redirect()->route('linkd.links');

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function render()
    {
        $this->title = $this->link->title;
        $this->url = $this->link->url;
        $this->bgcolor = $this->link->bgcolor;
        $this->textcolor = $this->link->textcolor;

        return view('livewire.link.update');
    }
}
