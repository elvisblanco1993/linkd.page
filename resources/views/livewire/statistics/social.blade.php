<div>
    <div class="mb-4">
        <div class="flex items-center justify-between">
            <div class="">
                <div class="text-xl font-bold text-gray-800">Social Media All-Time Clicks</div>
                <small class="font-medium text-gray-600">These counters help you keep an eye on your social media clicks through your linkd page.</small>
            </div>
            <div class="text-xl font-bold">
                Total: <span class="text-indigo-600">{{$socials->count()}}</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
        @forelse ($socials as $social)
            <div class="h-44 bg-white p-4 rounded-lg shadow-lg flex flex-col items-center justify-center">
                <img src="{{asset("assets/$social->type.svg")}}" alt="tiktok icon" class="w-6 h-6 opacity-80 mb-3"/>
                <div class="text-3xl font-bold text-indigo-600">{{$social->total_clicks ?? 0}}</div>
                <div class="text-xs font-medium text-gray-600">{{$social->type}}</div>
            </div>
        @empty

        @endforelse
    </div>
</div>
