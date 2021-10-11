<?php

namespace App\Http\Livewire\Statistics;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Links extends Component
{
    public $month, $totalsPerLink;

    public function mount()
    {
        $this->totalsPerLink = DB::table('clickthrough')
                                ->where('clickthrough.page_id', auth()->user()->page->id)
                                ->whereMonth('clickthrough.created_at', '=', Carbon::now()->month)
                                ->join('links', 'links.uuid', '=', 'clickthrough.uuid')
                                ->select('links.title', DB::raw("COUNT(*) as total"))
                                ->groupBy('title')
                                ->get();
    }

    public function filterByMonth()
    {
        $this->totalsPerLink = DB::table('clickthrough')
                                ->where('clickthrough.page_id', auth()->user()->page->id)
                                ->whereMonth('clickthrough.created_at', '=', (int) $this->month)
                                ->join('links', 'links.uuid', '=', 'clickthrough.uuid')
                                ->select('links.title', DB::raw("COUNT(*) as total"))
                                ->groupBy('title')
                                ->get();
    }

    public function render()
    {
        return view('livewire.statistics.links');
    }
}
