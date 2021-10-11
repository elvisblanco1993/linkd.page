<?php

namespace App\Http\Livewire\Statistics;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Overview extends Component
{
    public $totals, $year;

    public function mount()
    {
        $this->totals = DB::table('clickthrough')
                                ->where('page_id', auth()->user()->page->id)
                                ->whereYear('clickthrough.created_at', '=', Carbon::now()->year)
                                ->select(DB::raw("COUNT(*) as total, DATE_FORMAT(created_at, '%m') as month, DATE_FORMAT(created_at, '%M') as month_label"))
                                ->groupBy('month')
                                ->groupBy('month_label')
                                ->orderBy('month', 'asc')
                                ->get()
                                ->toArray();
    }

    public function filterByYear()
    {
        $this->totals = DB::table('clickthrough')
                                ->where('page_id', auth()->user()->page->id)
                                ->whereYear('clickthrough.created_at', '=', (int) $this->year)
                                ->select(DB::raw("COUNT(*) as total, DATE_FORMAT(created_at, '%m') as month, DATE_FORMAT(created_at, '%M') as month_label"))
                                ->groupBy('month')
                                ->groupBy('month_label')
                                ->orderBy('month', 'asc')
                                ->get()
                                ->toArray();
    }

    public function render()
    {
        return view('livewire.statistics.overview');
    }
}
