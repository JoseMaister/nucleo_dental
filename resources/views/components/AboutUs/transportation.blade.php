<div class="bg-white p-10 w-full flex flex-col items-center justify-center">
    <div class="bg-indigo-800 text-white text-center text-3xl md:text-5xl font-light mx-auto rounded-[50px] py-6 px-10  md:px-20 mb-6">
        {!! __('messages.about.transportation.title') !!}
    </div>
    <div class="flex flex-wrap flex-row items-center justify-center gap-6">
        <div class="flex flex-col justify-center items-center">
            <div class="w-[290px] h-[290px] rounded-full overflow-hidden relative">  
                <img class="absolute w-full h-full object-cover" src="{{ asset('images/IMG_100192.webp') }}" alt="{{ __('messages.about.transportation.drivers.edgar') }}" style="transform: scale(1.5) translateY(16%) translateX(0%); object-position: 80% 20%;" >
            </div>
            <div class="mt-4 text-2xl font-bold text-indigo-800">{{ __('messages.about.transportation.drivers.edgar') }}</div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <div class="w-[290px] h-[290px] rounded-full overflow-hidden relative">
                <img class="absolute w-full h-full object-cover" src="{{ asset('images/IMG_100189.webp') }}" alt="{{ __('messages.about.transportation.drivers.martin') }}" style="transform: scale(1.8) translateY(20%); object-position: 50% 20%;" >
            </div>
            <div class="mt-4 text-2xl font-bold text-indigo-800">{{ __('messages.about.transportation.drivers.martin') }}</div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <div class="mt-4 text-2xl font-bold text-indigo-800">{!! __('messages.about.transportation.free_service') !!}</div>
            <div class="mt-4 text-lg font-normal text-indigo-800">{{ __('messages.about.transportation.location') }}</div>
            <a href="{{ route('contact') }}" class="border border-[4px] border-indigo-800 mt-6 bg-indigo-700 text-center text-lg font-bold text-white py-3 px-12 rounded-[50px] hover:bg-white hover:text-indigo-800 hover:border hover:border-[4px] hover:border-indigo-800">{{ __('messages.about.transportation.cta') }}</a>
        </div>
    </div>
</div>