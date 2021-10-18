<div>
    <div class="flex justify-center sm:justify-end">
        <iframe src="{{config('app.url') . '/' . auth()->user()->page->handler}}" frameborder="0" scrolling="no" class="w-[320px] h-[580px] border-4 border-gray-800 rounded-3xl shadow-xl"></iframe>
    </div>
</div>
