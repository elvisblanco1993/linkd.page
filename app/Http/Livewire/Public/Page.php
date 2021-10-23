<?php

namespace App\Http\Livewire\Public;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;
use App\Models\Link;

class Page extends Component
{
    public $page, $links, $socials;

    public $listeners = ['linkClicked' => 'linkCounter', 'socialClicked' => 'socialCounter'];

    public function linkCounter($uuid, $page_id)
    {
        if (Location::get( request()->ip() ) !== false) {
            $position = Location::get( request()->ip() );
            // Successfully retrieved position.
            $country = $position->countryName;
            $state = $position->regionName;
            $city = $position->cityName;
            $clickthrough = +1;

            DB::table('clickthrough')->insert([
                'uuid' => $uuid,
                'page_id' => $page_id,
                'country' => $country,
                'state' => $state,
                'city' => $city,
                'clickthrough' => $clickthrough,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }

    public function socialCounter($uuid, $page_id)
    {
        DB::table('social_media_links')
            ->where('uuid', $uuid)
            ->where('page_id', $page_id)
            ->increment('total_clicks', 1);
    }

    public function render()
    {
        $this->links = Link::where('page_id', $this->page->id)->orderBy('order')->get();
        $this->socials = DB::table('social_media_links')->where('page_id', $this->page->id)->get();

        return view('livewire.public.page');
    }
}
