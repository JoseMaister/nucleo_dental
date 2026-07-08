@php
    $hideNav = false;
@endphp
@extends('layouts.app')

@section('title', __('messages.dental_implants.hero.headline') . ' - ' . config('app.name'))

@section('content')

<main>

    <!-- HERO -->
    <section class="relative bg-black text-white">

        <div class="relative w-full min-h-[700px] bg-cover bg-center flex items-center justify-center py-12 md:py-20"
             style="background-image: url('{{ asset('images/100312.webp') }}');">

            <div class="absolute inset-0 bg-indigo-950/75"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Left Content Column -->
                    <div class="lg:col-span-7 text-center lg:text-left">
                        <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6 text-white drop-shadow-md">
                            {{ __('messages.dental_implants.hero.headline') }}
                        </h1>

                        <p class="text-lg md:text-xl text-indigo-100 max-w-2xl mx-auto lg:mx-0 mb-6 leading-relaxed">
                            {{ __('messages.dental_implants.hero.subheadline') }}
                        </p>

                        <!-- PRICE ANCHOR -->
                        <div class="text-2xl md:text-3xl font-extrabold text-indigo-300 mb-8 tracking-wide drop-shadow-sm">
                            {{ __('messages.dental_implants.hero.price') }}
                        </div>

                        <!-- TRUST BAR -->
                        <div class="flex flex-wrap justify-center lg:justify-start gap-4 md:gap-6 text-sm text-indigo-100 mt-8">
                            <span class="bg-white/10 px-4 py-2 rounded-full backdrop-blur-sm border border-white/10 flex items-center gap-2">
                                <i class="fas fa-check text-indigo-400"></i> {{ __('messages.dental_implants.hero.trust_1') }}
                            </span>
                            <span class="bg-white/10 px-4 py-2 rounded-full backdrop-blur-sm border border-white/10 flex items-center gap-2">
                                <i class="fas fa-check text-indigo-400"></i> {{ __('messages.dental_implants.hero.trust_2') }}
                            </span>
                            <span class="bg-white/10 px-4 py-2 rounded-full backdrop-blur-sm border border-white/10 flex items-center gap-2">
                                <i class="fas fa-check text-indigo-400"></i> {{ __('messages.dental_implants.hero.trust_3') }}
                            </span>
                            <span class="bg-white/10 px-4 py-2 rounded-full backdrop-blur-sm border border-white/10 flex items-center gap-2">
                                <i class="fas fa-check text-indigo-400"></i> {{ __('messages.dental_implants.hero.trust_4') }}
                            </span>
                        </div>
                    </div>

                    <!-- Right Form Column (Lead Form above the fold) -->
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="bg-white/95 text-gray-800 rounded-3xl p-6 md:p-8 shadow-2xl max-w-md w-full border border-white/20 backdrop-blur-sm">
                            <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2 text-center">
                                {{ __('messages.dental_implants.hero.cta_primary') }}
                            </h3>
                            <p class="text-sm text-gray-500 mb-6 text-center">
                                {{ __('messages.dental_implants.final_text') }}
                            </p>
                            
                            @if(session('success'))
                                <div class="mb-4 p-4 bg-green-50 border-l-4 border-green-500 text-green-700 text-sm rounded">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                                @csrf
                                <input type="hidden" name="services[]" value="Dental Implants">
                                <input type="hidden" name="best_time[]" value="Morning">
                                
                                <div>
                                    <label for="hero_name" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">
                                        {{ __('messages.contact.form.name') }} <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="hero_name" name="name" required 
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-900">
                                </div>
                                
                                <div>
                                    <label for="hero_email" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">
                                        {{ __('messages.contact.form.email') }} <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" id="hero_email" name="email" required 
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-900">
                                </div>
                                
                                <div>
                                    <label for="hero_phone" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">
                                        {{ __('messages.contact.form.phone') }} <span class="text-red-500">*</span>
                                    </label>
                                    <input type="tel" id="hero_phone" name="phone" required 
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-900">
                                </div>
                                
                                <button type="submit" class="w-full bg-indigo-700 hover:bg-indigo-800 text-white font-bold py-3.5 rounded-lg transition shadow-md hover:shadow-lg mt-6">
                                    {{ __('messages.dental_implants.hero.cta_primary') }}
                                </button>


                                <a href="https://wa.me/526563674969" target="_blank" rel="noopener" class="block text-center w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3.5 rounded-lg transition shadow-md hover:shadow-lg mt-2 flex items-center justify-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-white flex-shrink-0" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                    {{ __('messages.dental_implants.hero.cta_secondary') }}
                                </a>
                            </form>
                        </div>
                    </div>

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
                {!! __('messages.dental_implants.pain_text') !!}
            </p>
            <br>
            <p class="text-lg text-gray-700 leading-relaxed">
                {!! __('messages.dental_implants.pain_text_2') !!}
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
                {!! __('messages.dental_implants.solution_text') !!}
            </p>
            <br>
            <p class="text-lg text-gray-700 leading-relaxed">
                {!! __('messages.dental_implants.solution_text_2') !!}
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

            <br>
            <div class="inline-block border-l-4 border-indigo-500 bg-indigo-50 px-6 py-3 rounded-r-xl">
                <p class="text-indigo-700 font-bold italic text-lg md:text-xl">
                    "{{ __('messages.dental_implants.process_final_text') }}"
                </p>
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
                {{!! __('messages.dental_implants.cost_text') !!}}
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

            <p class="text-gray-700 text-lg leading-relaxed mb-8">
                {{ __('messages.dental_implants.sedation_text') }}
            </p>

            <div class="max-w-md mx-auto text-left bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h4 class="font-bold text-indigo-900 mb-4 text-center sm:text-left">
                    {{ __('messages.dental_implants.sedation_ideal') }}
                </h4>
                <ul class="space-y-3">
                    @foreach(__('messages.dental_implants.sedation_points') as $point)
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-check-circle text-green-500 mr-3 text-lg"></i>
                        <span class="font-semibold">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

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

            <div class="inline-block border-l-4 border-indigo-500 bg-indigo-50 px-6 py-3 rounded-r-xl">
                <p class="text-indigo-700 font-bold italic text-lg md:text-xl">
                    "{{ __('messages.dental_implants.trust_text_2') }}"
                </p>
            </div>

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

            <a href="{{ route('contact') }}" class="bg-white/10 px-10 py-4  hover:bg-white/20 text-white font-bold rounded-full transition-all duration-300 border border-white/10 text-lg">
                {{ __('messages.meet_dr_moran.final_cta_secondary') }}
            </a>

        </div>

    </section>
    
    <!-- Sticky Mobile CTA -->
    <div class="fixed bottom-0 left-0 right-0 z-40 bg-white border-t border-gray-200 p-4 shadow-[0_-4px_10px_rgba(0,0,0,0.05)] flex items-center justify-between sm:hidden">
        <div class="flex flex-col">
            <span class="text-xs text-gray-500 uppercase font-semibold tracking-wider">Consultation</span>
            <span class="text-sm font-bold text-indigo-800">Free Assessment</span>
        </div>
        <a href="#hero_name" class="bg-indigo-700 hover:bg-indigo-800 text-white font-bold px-6 py-2.5 rounded-full text-sm transition">
            {{ __('messages.dental_implants.hero.cta_primary') }}
        </a>
    </div>

<x-contact-map /> 
</main>

@endsection