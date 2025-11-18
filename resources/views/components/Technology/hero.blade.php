<div class="bg-gray-400 text-white">
    <div class="relative w-full h-[500px] bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('images/IMG_100202.webp') }}'); background-size: 160%; background-position: top center;">
        <!-- Blue overlay -->
        <div class="absolute inset-0 bg-[#2D3089] bg-opacity-90"></div>
        
        <!-- Content container -->
        <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-4xl md:text-5xl lg:text-6xl mb-6">{!! __('messages.technology.hero.title') !!}</h1>
            <p class="text-lg md:text-xl lg:text-2xl mb-8 leading-relaxed">
                {{ __('messages.technology.hero.subtitle') }}
            </p>
            <div class="border-t border-white border-[2px] my-5 w-[90%] mx-auto"></div>
            <p class="text-lg md:text-xl lg:text-2xl mb-8 leading-relaxed">
                {{ __('messages.technology.hero.description') }}
            </p>
        </div>
    </div>
</div>

