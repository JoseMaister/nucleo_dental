<section class="relative">
    <img src="images/IMG_100199.webp" 
         class="w-full h-[600px] md:h-[500px] object-cover" 
         alt="Dental Clinic">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <div class="absolute top-[40px] left-6 md:left-10 transform text-white max-w-4xl">
    <h2 class="text-3xl md:text-5xl font-bold leading-tight">
        {!! __('messages.hero.title') !!}
    </h2>
    
    <p class="mt-4 text-lg md:text-xl font-light">
        {!! __('messages.hero.subtitle') !!}
    </p>
        
        <div class="mt-8 flex flex-wrap gap-4">
            <a href="#contact" class="inline-block bg-indigo-700 hover:bg-indigo-800 text-white px-8 py-4 rounded-full shadow-xl font-bold transition-all">
                {{ __('messages.hero.cta_primary') }}
            </a>
            <a href="#quote" class="inline-block bg-transparent border-2 border-white hover:bg-white hover:text-indigo-900 text-white px-8 py-4 rounded-full shadow-lg font-bold transition-all">
                {{ __('messages.hero.cta_secondary') }}
            </a>
        </div>

        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-3 max-w-sm">
    <div class="flex items-center p-3 rounded-xl bg-white bg-opacity-10 border border-white border-opacity-20">
        <i class="fa-solid fa-phone mr-3 opacity-70"></i>
        <div>
            <p class="text-[10px] uppercase tracking-widest opacity-60">United States</p>
            <p class="text-base font-semibold">{{ __('messages.hero.phone.us') }}</p>
        </div>
    </div>
    <div class="flex items-center p-3 rounded-xl bg-white bg-opacity-10 border border-white border-opacity-20">
        <i class="fa-solid fa-phone mr-3 opacity-70"></i>
        <div>
            <p class="text-[10px] uppercase tracking-widest opacity-60">México</p>
            <p class="text-base font-semibold">{{ __('messages.hero.phone.mx') }}</p>
        </div>
    </div>
</div>
    </div>
</section>

<div class="bg-gray-100 border-b">
    <div class="max-w-7xl mx-auto px-4 py-6">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center">
            @foreach(__('messages.trust_bar') as $item)
            <div class="flex flex-col items-center group">
                <i class="fa-solid fa-{{ $item['icon'] }} text-indigo-700 text-2xl mb-2 group-hover:scale-110 transition-transform"></i>
                <span class="text-xs md:text-sm font-bold text-gray-700 leading-tight">{{ $item['text'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                    {{ __('messages.why_choose.headline') }}
                </h2>
                <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                    {{ __('messages.why_choose.body') }}
                </p>
                <div class="mt-8 p-4 border-l-4 border-indigo-700 bg-indigo-50">
                    <p class="text-indigo-900 font-bold italic text-lg">
                        "{{ __('messages.why_choose.highlight') }}"
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6">
                @foreach(__('messages.why_choose.features') as $feature)
                <div class="flex items-start p-6 rounded-2xl bg-gray-50 hover:shadow-md transition-shadow">
                    <div class="flex-shrink-0 w-12 h-12 bg-indigo-700 rounded-full flex items-center justify-center text-white">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-xl font-bold text-gray-900">{{ $feature['title'] }}</h4>
                        <p class="text-gray-600">{{ $feature['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>