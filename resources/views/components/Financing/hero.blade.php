<div class="bg-gray-400 text-white">
<div class="relative w-full h-[600px] bg-cover bg-center flex items-center justify-center" style="background-image: linear-gradient(rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4)), url('{{ asset('images/02.webp') }}'); background-size: fit-content; background-position: center center;">
        <!-- Content container -->
        <div class="relative flex w-full h-full  justify-between p-8 flex-col md:flex-row z-10 max-w-6xl mx-auto md:gap-6">
            <div class="flex-1 md:max-w-[400px] text-indigo-800 text-4xl md:text-5xl lg:text-7xl text-center md:text-left"> 
                <div class="font-thin">
                    {{ __('messages.financing_hero.title1') }}
                </div>
                <div class="font-bold">
                    {{ __('messages.financing_hero.title2') }}
                </div>
                <div class="font-bold">
                    {{ __('messages.financing_hero.title3') }}
                </div>
            </div>
            <div class="flex-1 flex w-full md:w-auto flex-col text-center md:text-right md:max-w-[500px] gap-4 md:gap-8 lg:gap-8">
                <p class="text-2xl md:text-3xl lg:text-4xl font-semibold text-indigo-800 leading-tight">
                    {!! __('messages.financing_hero.subtitle') !!}
                </p>
                <p class="text-lg md:text-xl lg:text-2xl font-regular text-gray-700 md:text-right leading-tight">
                    {!! __('messages.financing_hero.description1') !!}
                </p>
                <p class="text-lg md:text-xl lg:text-2xl font-regular text-gray-700 md:text-right leading-tight">
                    {!! __('messages.financing_hero.description2') !!}
                </p>
                <p class="text-lg md:text-xl lg:text-2xl font-regular text-gray-700 md:text-right leading-tight">
                    {!! __('messages.financing_hero.description3') !!}
                </p>
            </div>
        </div>
    </div>
</div>
