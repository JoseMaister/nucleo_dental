@extends('layouts.app')

@section('title', __('messages.dental_implants.hero.headline') . ' - ' . config('app.name'))

@section('content')

<main>

    <!-- HERO -->
    <section class="relative bg-black text-white">

        <div class="relative w-full min-h-[650px] bg-cover bg-center flex items-center justify-center"
             style="background-image: url('https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=2070&q=80');">

            <div class="absolute inset-0 bg-indigo-950/70"></div>

            <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">

                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    {{ __('messages.dental_implants.hero.headline') }}
                </h1>

                <p class="text-lg md:text-2xl text-indigo-100 max-w-4xl mx-auto mb-6">
                    {{ __('messages.dental_implants.hero.subheadline') }}
                </p>

                <!-- PRICE ANCHOR -->
                <div class="text-xl md:text-2xl font-bold text-white mb-8">
                    {{ __('messages.dental_implants.hero.price') }}
                </div>

                <!-- CTA -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-10">

                    <a href="{{ route('contact') }}"
                       class="bg-white text-indigo-800 font-bold px-8 py-4 rounded-full hover:bg-gray-100 transition">
                        {{ __('messages.dental_implants.hero.cta_primary') }}
                    </a>

                    <a href="{{ route('contact') }}"
                       class="border border-white text-white font-bold px-8 py-4 rounded-full hover:bg-white hover:text-indigo-800 transition">
                        {{ __('messages.dental_implants.hero.cta_secondary') }}
                    </a>

                </div>

                <!-- TRUST BAR -->
                <div class="flex flex-wrap justify-center gap-6 text-sm text-indigo-200">

                    <span>✔ {{ __('messages.dental_implants.hero.trust_1') }}</span>
                    <span>✔ {{ __('messages.dental_implants.hero.trust_2') }}</span>
                    <span>✔ {{ __('messages.dental_implants.hero.trust_3') }}</span>
                    <span>✔ {{ __('messages.dental_implants.hero.trust_4') }}</span>

                </div>

            </div>
        </div>
    </section>


    <!-- PAIN -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-5xl mx-auto text-center">

            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
                {{ __('messages.dental_implants.pain_title') }}
            </h2>

            <p class="text-lg text-gray-700 leading-relaxed">
                {{ __('messages.dental_implants.pain_text') }}
            </p>

        </div>
    </section>


    <!-- SOLUTION -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-5xl mx-auto text-center">

            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
                {{ __('messages.dental_implants.solution_title') }}
            </h2>

            <p class="text-lg text-gray-700 leading-relaxed">
                {{ __('messages.dental_implants.solution_text') }}
            </p>

        </div>
    </section>


    <!-- WHY -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-6xl mx-auto">

            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 text-center mb-12">
                {{ __('messages.dental_implants.why_title') }}
            </h2>

            <div class="grid md:grid-cols-2 gap-6">

                @foreach([
                    'why_1','why_2','why_3','why_4','why_5','why_6','why_7'
                ] as $item)

                <div class="bg-gray-50 p-6 rounded-2xl shadow">
                    <p class="text-gray-700 font-medium">
                        ✔ {{ __('messages.dental_implants.' . $item) }}
                    </p>
                </div>

                @endforeach

            </div>
        </div>
    </section>


    <!-- VALUE STACK -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-5xl mx-auto text-center">

            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-10">
                {{ __('messages.dental_implants.value_title') }}
            </h2>

            <div class="grid md:grid-cols-2 gap-4 text-left">

                @foreach([
                    'value_1','value_2','value_3','value_4','value_5','value_6'
                ] as $item)

                <div class="bg-white p-6 rounded-2xl shadow">
                    ✔ {{ __('messages.dental_implants.' . $item) }}
                </div>

                @endforeach

            </div>

        </div>
    </section>


    <!-- PROCESS -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-6xl mx-auto text-center">

            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-12">
                {{ __('messages.dental_implants.process_title') }}
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 text-left">

                @for($i = 1; $i <= 6; $i++)

                <div class="bg-gray-50 p-6 rounded-2xl shadow">
                    <h3 class="font-bold text-indigo-800 mb-2">
                        {{ __('messages.dental_implants.step_'.$i) }}
                    </h3>
                    <p class="text-gray-600">
                        {{ __('messages.dental_implants.step_'.$i.'_text') }}
                    </p>
                </div>

                @endfor

            </div>
        </div>
    </section>


    <!-- COST -->
    <section class="py-20 px-6 bg-indigo-800 text-white text-center">

        <div class="max-w-4xl mx-auto">

            <h2 class="text-3xl md:text-5xl font-bold mb-6">
                {{ __('messages.dental_implants.cost_title') }}
            </h2>

            <p class="text-lg text-indigo-100 mb-6">
                {{ __('messages.dental_implants.cost_text') }}
            </p>

            <div class="text-xl font-bold">
                {{ __('messages.dental_implants.cost_callout') }}
            </div>

        </div>

    </section>


    <!-- TRAVEL -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-5xl mx-auto text-center">

            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-10">
                {{ __('messages.dental_implants.travel_title') }}
            </h2>

            <div class="space-y-3 text-gray-700">

                @for($i = 1; $i <= 5; $i++)
                    <p>✔ {{ __('messages.dental_implants.travel_'.$i) }}</p>
                @endfor

            </div>

        </div>
    </section>


    <!-- SEDATION -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-4xl mx-auto text-center">

            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
                {{ __('messages.dental_implants.sedation_title') }}
            </h2>

            <p class="text-gray-700 text-lg">
                {{ __('messages.dental_implants.sedation_text') }}
            </p>

        </div>
    </section>


    <!-- TRUST -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-4xl mx-auto text-center">

            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
                {{ __('messages.dental_implants.trust_title') }}
            </h2>

            <p class="text-gray-700 text-lg">
                {{ __('messages.dental_implants.trust_text') }}
            </p>

        </div>
    </section>


    <!-- FINAL CTA -->
    <section class="py-20 px-6 bg-indigo-800 text-white text-center">

        <div class="max-w-4xl mx-auto">

            <h2 class="text-3xl md:text-5xl font-bold mb-6">
                {{ __('messages.dental_implants.final_title') }}
            </h2>

            <p class="text-lg text-indigo-100 mb-8">
                {{ __('messages.dental_implants.final_text') }}
            </p>

            <a href="{{ route('contact') }}"
               class="bg-white text-indigo-800 font-bold px-10 py-4 rounded-full hover:bg-gray-100 transition">
                {{ __('messages.dental_implants.hero.cta_primary') }}
            </a>

        </div>

    </section>
<x-contact-map /> 
</main>

@endsection