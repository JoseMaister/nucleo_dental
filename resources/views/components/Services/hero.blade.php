<div class="bg-gray-400 text-white">
    <div class="relative w-full h-[700px] bg-cover bg-center flex items-center justify-center " style="background-image: url('{{ asset('images/100318.webp') }}'); background-size: 160%; background-position: center center;">
        <!-- Blue overlay -->
        <div class="absolute inset-0 bg-[#2D3089] bg-opacity-90"></div>
        
        <!-- Content container -->
        <div class="relative z-10 max-w-6xl mx-auto text-center text-white">
            <h1 class="text-4xl md:text-5xl lg:text-6xl mb-6 text-left -pl-2"><span class="text-white font-bold">{!! str_replace(' ', ' <br> ', __('messages.services_hero.title')) !!}</span></h1>
            <p class="px-4 sm:px-6 lg:px-8 text-lg md:text-xl lg:text-2xl mb-8 text-justify leading-relaxed">
                {{ __('messages.services_hero.description') }}
            </p>
        </div>
    </div>
</div>
