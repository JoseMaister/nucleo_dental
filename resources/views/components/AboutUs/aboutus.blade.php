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