<div class="">
    <div class="flex items-center justify-between mb-4">
        <div class="mb-4">
            <div class="text-xl font-bold text-gray-800">Monthly Links Overall Clicks</div>
            <small class="font-medium text-gray-600">This totals do not include social media clicks.</small>
        </div>
        <div class="">
            <select wire:model="year" wire:change="filterByYear">
                <option value="{{\Carbon\Carbon::now()->year}}">{{\Carbon\Carbon::now()->year}}</option>
                <option value="{{\Carbon\Carbon::now()->year - 1}}">{{\Carbon\Carbon::now()->year - 1}}</option>
                <option value="{{\Carbon\Carbon::now()->year - 2}}">{{\Carbon\Carbon::now()->year - 2}}</option>
            </select>
        </div>
    </div>

    @if (count($totals) > 0)
        <div id="chart" class="bg-white p-4 rounded-lg shadow"></div>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            var options = {
                    chart: {
                        type: 'area',
                        height: 400
                    },
                    series: [{
                        name: 'Monthly Clicks',
                        data: [
                            @forelse ($totals as $click)
                                {
                                    x: '{{$click->month_label}}',
                                    y: '{{$click->total}}'
                                },
                            @empty

                            @endforelse
                        ],
                    }],
                    xaxis: {
                        type: 'category'
                    },
                    theme: {
                        palette: 'palette4' // upto palette10
                    }
                }
                var chart = new ApexCharts(document.querySelector("#chart"), options);
                chart.render();
        </script>
    @else
        <div class="bg-white text-sm p-4 rounded-lg shadow text-center">There's no suficient information at this time.</div>
    @endif
</div>
