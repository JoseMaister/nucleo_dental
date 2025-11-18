<section class="bg-indigo-700 py-12">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-center px-6 gap-6">
        <div class="flex-shrink-0">
            <img src="{{ asset('images/tooth.png') }}" alt="Núcleo Dental" class="h-24">
        </div>
        <div class="text-center text-white md:text-left">
            <div class="md:text-3xl font-semibold text-5xl">
                {!! __('messages.financing.title', ['pay_later' => '<span class="text-white font-bold text-inherit">'.__('messages.financing.pay_later').'</span>']) !!}
            </div>
            <p class="mt-2 text-white text-lg">{!! __('messages.financing.subtitle') !!}</p>
        </div>
        <div class="flex-shrink-0">
            <a href="#contact" class=" text-gray-300 inline-block border border-gray-400 px-8 py-3 rounded-full hover:bg-gray-200 hover:text-gray-700">
                {!! __('messages.financing.cta') !!}
            </a>
        </div>
    </div>
</section>