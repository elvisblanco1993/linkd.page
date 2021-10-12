<div>
    {{-- Links click through section --}}
    <div class="flex items-center justify-between mb-4">
        <div class="">
            <div class="text-xl font-bold text-gray-800">Links click-through</div>
            <small class="font-medium text-gray-600">View your links performance up to 3 months back.</small>
        </div>
        <div class="">
            <select wire:model="month" wire:change="filterByMonth">
                <option value="{{\Carbon\Carbon::now()->month}}">{{\Carbon\Carbon::now()->format('F')}}</option>
                <option value="{{\Carbon\Carbon::now()->subMonth()->month}}">{{\Carbon\Carbon::now()->subMonth()->format('F')}}</option>
                <option value="{{\Carbon\Carbon::now()->subMonth()->subMonth()->month}}">{{\Carbon\Carbon::now()->subMonth()->subMonth()->format('F')}}</option>
            </select>
        </div>
    </div>
    <div class="bg-white p-4 rounded-lg shadow-lg">
        <ul class="mx-4">
            {{-- Implement Forelse here --}}
            @forelse ($totalsPerLink as $link)
                <li class="flex items-center justify-between py-2 border-b">
                    <span>{{$link->title}}</span>
                    <span>{{$link->total}}</span>
                </li>
            @empty
                <div class="text-center">There's no suficient information at this time.</div>
            @endforelse
        </ul>
    </div>
</div>
