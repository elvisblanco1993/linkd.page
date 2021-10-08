<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;

class Page extends Component
{
    public $page, $links, $socials;

    public $listeners = ['linkClicked' => 'linkCounter'];

    public function linkCounter($uuid)
    {
        if ($position = Location::get()) {
            // Successfully retrieved position.
            $country = $position->countryName;
            $state = $position->regionName;
            $city = $position->cityName;
            $clickthrough = +1;
        } else {
            // Failed retrieving position.
            $country = "";
            $state = "";
            $city = "";
            $clickthrough = "";
        }

        DB::table('clickthrough')->insert([
            'uuid' => $uuid,
            'country' => $country,
            'state' => $state,
            'city' => $city,
            'clickthrough' => $clickthrough,
        ]);
    }

    public function render()
    {
        return view('livewire.public.page');
    }
}
