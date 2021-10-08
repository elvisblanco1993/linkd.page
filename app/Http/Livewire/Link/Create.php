<?php

namespace App\Http\Livewire\Link;

use App\Models\Link;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $spring_id;
    public $type;
    public $title;
    public $url;
    public $bgcolor;
    public $textcolor;

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'url' => 'required|url',
        ]);

        try {
            Link::create([
                'page_id' => auth()->user()->page->id,
                'type' => 'link',
                'title' => $this->title,
                'url' => $this->url,
                'uuid' => Str::uuid()->toString(),
            ]);

            // Update the preview
            return redirect()->route('linkd.links');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateLinksOrder($list)
    {
        foreach($list as $item) {
            Link::find($item['value'])->update(['order' => (string) $item['order']]);
        }

        return redirect()->route('linkd.links');
    }

    public function render()
    {
        $this->links = Link::where('page_id', auth()->user()->page->id)->orderBy('order')->get();
        return view('livewire.link.create');
    }
}
