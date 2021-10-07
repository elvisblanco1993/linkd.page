<div>
    <div class="w-full h-[667px] bg-black rounded-3xl py-4 px-3 relative">
        <div class="absolute w-20 h-2 bg-black rounded-b-xl left-1/2 transform -translate-x-1/2"></div>
        <iframe src="{{config('app.url') . '/' . auth()->user()->page->handler}}" frameborder="0" class="w-full h-full rounded-2xl"></iframe>
    </div>
</div>
