<section class="bg-indigo-700 py-12">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-center px-6 gap-6">
        <div class="text-center text-white md:text-left">
            <div class="md:text-6xl font-semibold text-5xl">
                {!! __('messages.banner2.title') !!}
            </div>
            <p class="mt-2 text-white text-xl">{{ __('messages.banner2.location') }}</p>
        </div>
        <div class="flex-shrink-0">
            <a href="{{ route('contact') }}" class="text-3xl font-bold border-[4px] text-white inline-block border border-white px-8 py-3 rounded-full hover:bg-gray-200 hover:text-gray-700">
                {{ __('messages.banner2.button') }}
            </a>
        </div>
    </div>
</section>