<?php

namespace App\Http\Livewire\Statistics;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Regions extends Component
{
    use WithPagination;

    public $totalsPerRegion, $country, $state, $city;

    public function mount()
    {
        $this->totalsPerRegion = DB::table('clickthrough')
                                    ->where('clickthrough.page_id', auth()->user()->page->id)
                                    ->join('links', 'links.uuid', '=', 'clickthrough.uuid')
                                    ->select('links.title', 'links.url', 'country', 'state', 'city', DB::raw("COUNT(*) as total"))
                                    ->groupBy('title')
                                    ->groupBy('url')
                                    ->groupBy('country')
                                    ->groupBy('state')
                                    ->groupBy('city')
                                    ->get();
    }

    public function render()
    {
        return view('livewire.statistics.regions');
    }
}
