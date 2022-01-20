<div>
    <div class="my-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <ul class="shadow-sm rounded-lg">
                @forelse ($users as $customer)
                    <li @class([
                        'w-full',
                        'bg-white',
                        'py-4',
                        'border-b',
                        'rounded-t-lg' => $loop->first,
                        'rounded-b-lg' => $loop->last
                    ])>
                        <div class="flex items-center justify-between px-4">
                            <div class="">
                                <div class="text-sm font-semibold">{{$customer->name}}</div>
                                <div class="mt-1 text-xs text-gray-600 tracking-wide">
                                    <a href="{{config('app.url') . '/' . $customer->page->handler }}" class="flex items-center gap-1 hover:text-indigo-600">
                                        {{$customer->page}}
                                    </a>
                                </div>
                            </div>
                            <div class="">
                                <a href="" class="px-2 py-1 text-xs tracking-wide rounded-full border border-gray-400 hover:bg-gray-100">{{__("Details")}}</a>
                            </div>
                        </div>
                    </li>
                @empty

                @endforelse
            </ul>
        </div>
    </div>
</div>
