<section class="relative">
    <img src="https://as1.ftcdn.net/v2/jpg/02/46/18/78/1000_F_246187812_D7A1GzXLISKxcKr24TpH095qPeumMv6Q.jpg" 
         class="w-full h-[500px] object-cover" 
         alt="Dental Clinic">
    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
    <div class="absolute top-3/4 left-6 md:left-10 transform -translate-y-1/2 text-white max-w-xl">
        <h2 class="text-4xl font-bold leading-tight">{!! __('messages.hero.title') !!}</h2>
        <p class="mt-4 text-lg">{!! __('messages.hero.subtitle') !!}</p>
        <a href="{{ route('services') }}" class="mt-6 inline-block bg-indigo-700 hover:bg-indigo-800 text-white px-6 py-3 rounded-full shadow-lg">
            {{ __('messages.hero.cta') }}
        </a>
        <div class="mt-6 inline-flex items-center rounded-full border border-white bg-white bg-opacity-10 px-5 py-2 text-white">
            <i class="fa-solid fa-phone mr-3 text-white text-lg"></i>
            <div class="flex flex-col leading-tight text-white">
                <span>{{ __('messages.hero.phone.us') }}</span>
                <span>{{ __('messages.hero.phone.mx') }}</span>
            </div>
        </div>
    </div>
</section>