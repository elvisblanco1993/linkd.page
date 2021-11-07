<?php

namespace App\Http\Livewire\Link;

use App\Models\Link;
use Carbon\Carbon;
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

    public $expiration_year;
    public $expiration_month;
    public $expiration_day;
    public $expiration_hour;
    public $expiration_minute;

    public function save()
    {

        $this->validate([
            'title' => 'required',
            'url' => 'required|url',
        ]);

        $expiration_date = Carbon::create(
                                $this->expiration_year,
                                $this->expiration_month,
                                $this->expiration_day,
                                $this->expiration_hour,
                                $this->expiration_minute,
                                0
                            )->format('Y-m-d H:i:s') ?? null;

        try {
            Link::create([
                'page_id' => auth()->user()->page->id,
                'type' => 'link',
                'title' => $this->title,
                'url' => $this->url,
                'uuid' => Str::uuid()->toString(),
                'expirates_at' => $expiration_date
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
