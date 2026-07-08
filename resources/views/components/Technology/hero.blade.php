<div class="bg-gray-400 text-white">
    <div class="relative w-full min-h-[500px] py-16 md:py-24 bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('images/IMG_100202.webp') }}'); background-size: cover; background-position: top center;">
        <!-- Blue overlay -->
        <div class="absolute inset-0 bg-[#2D3089] bg-opacity-90"></div>
        
        <!-- Content container -->
        <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-4xl md:text-5xl lg:text-6xl mb-6">{!! __('messages.techno.hero.title') !!}</h1>
            <p class="text-lg md:text-xl lg:text-2xl mb-8 leading-relaxed">
                {{ __('messages.techno.hero.subtitle') }}
            </p>
            <div class="border-t border-white border-[2px] my-5 w-[90%] mx-auto"></div>
            <p class="text-lg md:text-xl lg:text-2xl mb-6 leading-relaxed">
                {{ __('messages.techno.hero.description_1') }}
            </p>
            <ul class="text-lg md:text-xl lg:text-2xl mb-6 leading-relaxed list-disc text-left max-w-2xl mx-auto space-y-2">
                @foreach(__('messages.techno.hero.description_list') as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
            <p class="text-lg md:text-xl lg:text-2xl mb-8 leading-relaxed font-bold">
                {{ __('messages.techno.hero.description_2') }}
            </p>
        </div>
    </div>
</div>

