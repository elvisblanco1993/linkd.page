<x-app-layout>
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3 sm:col-span-1 bg-white grid grid-cols-7 grid-rows-5">
                @for ($i = 0; $i < 31; $i++)
                    <div class="w-full h-12 bg-green-400 border border-green-100 text-xs text-center flex items-center justify-center text-white">{{$i}}</div>
                @endfor
            </div>
        </div>
    </div>
</x-app-layout>
