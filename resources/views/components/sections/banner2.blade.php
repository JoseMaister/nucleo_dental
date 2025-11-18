<div class="grid grid-cols-1 md:grid-cols-2 bg-indigo-700 text-white text-center p-6 mt-auto items-center">
    <div class="space-y-8">
        <p class="text-3xl md:text-4xl">
            {!! __('messages.banner2.title', ['free' => '<span class="font-bold">'.__('messages.banner2.free').'</span>']) !!}
        </p>
        <small >
            {!! __('messages.banner2.location') !!}
        </small>
    </div>
    <div class="space-y-4">
        <a href="{{ route('contact') }}" class="inline-block border border-gray-400 px-6 py-3 rounded-full hover:bg-gray-200">
            {!! __('messages.banner2.button') !!}
        </a>
    </div>
</div>