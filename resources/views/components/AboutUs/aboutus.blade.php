<section class="bg-white text-gray-900">

    


    <!-- INTRO BLOCK -->
    <div class="py-20 px-6">
        <div class="max-w-6xl mx-auto">

            <div class="bg-indigo-800 text-white text-center text-3xl md:text-5xl font-light rounded-[50px] py-6 px-10 md:px-20 mb-14">
                {!! __('messages.aboutus.page.intro_title') !!}
            </div>

            <div class="max-w-5xl mx-auto text-center space-y-7 text-lg md:text-xl text-gray-700 leading-relaxed">
                <p>{{ __('messages.aboutus.page.intro_text_1') }}</p>
                <p>{{ __('messages.aboutus.page.intro_text_2') }}</p>
                <p>{{ __('messages.aboutus.page.intro_text_3') }}</p>
                <p>{{ __('messages.aboutus.page.intro_text_4') }}</p>
            </div>

        </div>
    </div>


    <!-- WHY CHOOSE US -->
    <div class="bg-gray-50 py-20 px-6">
        <div class="max-w-7xl mx-auto">

            <div class="text-center mb-14">
                <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-4">
                    {{ __('messages.aboutus.page.why_title') }}
                </h2>

                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    {{ __('messages.aboutus.page.why_subtitle') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="bg-white rounded-3xl p-8 shadow-md">
                    <h3 class="text-2xl font-bold text-indigo-800 mb-4">
                        {{ __('messages.aboutus.page.card_1_title') }}
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        {{ __('messages.aboutus.page.card_1_text') }}
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-md">
                    <h3 class="text-2xl font-bold text-indigo-800 mb-4">
                        {{ __('messages.aboutus.page.card_2_title') }}
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        {{ __('messages.aboutus.page.card_2_text') }}
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-md">
                    <h3 class="text-2xl font-bold text-indigo-800 mb-4">
                        {{ __('messages.aboutus.page.card_3_title') }}
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        {{ __('messages.aboutus.page.card_3_text') }}
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-md">
                    <h3 class="text-2xl font-bold text-indigo-800 mb-4">
                        {{ __('messages.aboutus.page.card_4_title') }}
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        {{ __('messages.aboutus.page.card_4_text') }}
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-md">
                    <h3 class="text-2xl font-bold text-indigo-800 mb-4">
                        {{ __('messages.aboutus.page.card_5_title') }}
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        {{ __('messages.aboutus.page.card_5_text') }}
                    </p>
                </div>

                <div class="bg-indigo-800 rounded-3xl p-8 shadow-md text-white flex items-center">
                    <p class="text-xl leading-relaxed font-light">
                        {{ __('messages.aboutus.page.highlight_box') }}
                    </p>
                </div>

            </div>
        </div>
    </div>


    <!-- U.S. DENTAL TOURISM -->
    <div class="py-20 px-6 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-4">
                    {{ __('messages.aboutus.page.us_tourism_title') }}
                </h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    {{ __('messages.aboutus.page.us_tourism_subtitle') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                @foreach(__('messages.aboutus.page.us_tourism_points') as $point)
                <div class="flex items-start p-6 rounded-2xl bg-indigo-50/50 border border-indigo-100 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-full bg-indigo-800 text-white flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-{{ $point['icon'] }} text-lg"></i>
                    </div>
                    <p class="ml-4 text-gray-700 font-semibold leading-relaxed">
                        {{ $point['text'] }}
                    </p>
                </div>
                @endforeach
            </div>

            <div class="mt-12 text-center max-w-3xl mx-auto">
                <p class="text-lg md:text-xl text-gray-700 italic font-medium leading-relaxed bg-indigo-50 border-l-4 border-indigo-800 py-4 px-6 rounded-r-2xl">
                    "{{ __('messages.aboutus.page.us_tourism_footer') }}"
                </p>
            </div>
        </div>
    </div>


    <!-- MEXICAN PATIENTS -->
    <div class="py-20 px-6 bg-gray-50 border-t border-b border-gray-100">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-indigo-800 mb-6">
                {{ __('messages.aboutus.page.mx_patients_title') }}
            </h2>
            <div class="bg-white rounded-3xl p-8 shadow-md max-w-3xl mx-auto border border-gray-100">
                <p class="text-xl font-bold text-indigo-900 mb-4">
                    {{ __('messages.aboutus.page.mx_patients_body_1') }}
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    {{ __('messages.aboutus.page.mx_patients_body_2') }}
                </p>
            </div>
        </div>
    </div>


    <!-- PHILOSOPHY -->
    <div class="py-20 px-6">
        <div class="max-w-5xl mx-auto text-center">

            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-8">
                {{ __('messages.aboutus.page.philosophy_title') }}
            </h2>

            <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                {{ __('messages.aboutus.page.philosophy_text_1') }}
            </p>

            <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                {{ __('messages.aboutus.page.philosophy_text_2') }}
            </p>

            <p class="text-2xl md:text-3xl font-bold text-indigo-800 leading-relaxed">
                {{ __('messages.aboutus.page.philosophy_text_3') }}
            </p>

        </div>
    </div>


    <!-- CTA -->
    <div class="bg-indigo-800 py-20 px-6 text-center text-white">

        <div class="max-w-4xl mx-auto">

            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                {{ __('messages.aboutus.page.cta_title') }}
            </h2>

            <p class="text-xl text-indigo-100 leading-relaxed mb-8">
                {{ __('messages.aboutus.page.cta_text') }}
            </p>

            <a href="{{ route('contact') }}"
               class="inline-block bg-white text-indigo-800 font-bold text-lg px-12 py-4 rounded-[50px] hover:bg-indigo-100 transition">
                {{ __('messages.aboutus.page.cta_button') }}
            </a>

        </div>

    </div>

</section>