<div>
    <div class="mb-4">
        <div class="text-xl font-bold text-gray-800">Clicks by location</div>
        <small class="font-medium text-gray-600">See where are your visitors coming from.</small>
    </div>

    <div class="flex flex-col shadow-lg rounded-lg">
        <div class="overflow-x-auto">
            <div class="align-middle inline-block min-w-full">
                <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{__("Referrer")}}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{__("Location")}}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{__("Clicks")}}
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($totalsPerRegion as $link)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{$link->title}}</div>
                                        <div class="text-xs text-gray-500">{{$link->url}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{$link->city}}</div>
                                        <div class="text-xs text-gray-500">{{$link->state.', '.$link->country}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$link->total}}</td>
                                </tr>
                            @empty
                            @endforelse
                            {{-- {{$totalsPerRegion->links()}} --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
