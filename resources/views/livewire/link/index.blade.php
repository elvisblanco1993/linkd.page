<div>
    <div class="w-full h-[667px] border-8 border-black rounded-2xl relative">
        <div class="absolute w-20 h-2 bg-black rounded-b-xl left-1/2 transform -translate-x-1/2"></div>
        <iframe src="{{config('app.url') . '/' . auth()->user()->page->handler}}" frameborder="0" scrolling="no" class="w-full h-full rounded-xl bg-white"></iframe>
    </div>
</div>
