<section class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between px-6 gap-6">
        <div class="flex-shrink-0">
            <img src="{{ asset('images/tooth.png') }}" alt="Núcleo Dental" class="h-16">
        </div>
        <div class="text-center md:text-left flex-1">
            <h3 class="text-2xl md:text-3xl font-semibold">
                {!! __('messages.financing.title', ['pay_later' => '<span class="text-indigo-700 font-bold">'.__('messages.financing.pay_later').'</span>']) !!}
            </h3>
            <p class="mt-2 text-gray-600">{!! __('messages.financing.subtitle') !!}</p>
        </div>
        <div class="flex-shrink-0">
            <a href="#" class="inline-block border border-gray-400 px-6 py-3 rounded-full hover:bg-gray-200">
                {!! __('messages.financing.cta') !!}
            </a>
        </div>
    </div>
</section>