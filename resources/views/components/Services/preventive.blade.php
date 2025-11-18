<div class="bg-white border border-indigo-800 border-[4px] mx-10 my-12 md:px-[6rem] px-[3rem] flex flex-col items-center justify-center py-12 rounded-[50px] gap-6">
    <div class="flex-1 w-full text-left text-3xl md:text-4xl text-indigo-800 font-semibold pt-6 rounded-[50px]">
        {{ __('messages.preventive.title') }}
    </div>
    <div class="flex flex-col md:flex-row items-center justify-center md:gap-16 gap-6">
        <div class="max-w-[380px] w-full h-[340px] overflow-hidden">
            <img src="{{ asset('images/100317.webp') }}" alt="Núcleo Dental" class="w-full h-full object-cover" style="transform: scale(1.8) translateY(10%); object-position: 50% 20%;">
        </div>
        <div class="max-w-[380px] w-full flex flex-col items-center justify-center gap-6">
            <div>
                <div class="text-3xl text-indigo-800 font-semibold">{{ __('messages.preventive.cleanings.title') }}</div>
                <p class="text-2xl font-thin text-gray-400 text-justify md:text-left">
                    {{ __('messages.preventive.cleanings.description') }}
                </p>
            </div>
            <div>
                <div class="text-3xl text-indigo-800 font-semibold">{{ __('messages.preventive.xrays.title') }}</div>
                <p class="text-2xl font-thin text-gray-400 text-justify md:text-left">
                    {{ __('messages.preventive.xrays.description') }}
                </p>
            </div>
        </div>
    </div>
</div>

