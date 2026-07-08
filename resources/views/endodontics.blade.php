@extends('layouts.app')

@section('title', __('messages.root_canal.hero.page_title') . ' - ' . config('app.name'))

@section('content')

<main>

    <!-- HERO -->
    <section class="relative bg-black text-white">

        <div class="relative w-full min-h-[650px] bg-cover bg-center flex items-center justify-center"
             style="background-image: url('{{ asset('images/100311.webp') }}');">

            <div class="absolute inset-0 bg-indigo-950/70"></div>

            <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">

                <span class="block text-indigo-300 font-bold tracking-widest uppercase mb-4 text-sm md:text-base">
                    {{ __('messages.root_canal.hero.page_title') }}
                </span>

                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    {{ __('messages.root_canal.hero.headline') }}
                </h1>

                <p class="text-lg md:text-2xl text-indigo-100 max-w-4xl mx-auto mb-6">
                    {{ __('messages.root_canal.hero.subheadline') }}
                </p>

                <!-- CTA -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-10">

                    <a href="{{ route('contact') }}"
                       class="bg-white text-indigo-800 font-bold px-8 py-4 rounded-full hover:bg-gray-100 transition shadow-lg">
                        {{ __('messages.root_canal.hero.cta_primary') }}
                    </a>

                    <a href="{{ route('contact') }}"
                       class="border border-white text-white font-bold px-8 py-4 rounded-full hover:bg-white hover:text-indigo-800 transition shadow-lg">
                        {{ __('messages.root_canal.hero.cta_secondary') }}
                    </a>

                </div>

                <!-- SUPPORTING LINE -->
                <div class="text-lg font-medium text-indigo-200">
                    ✔ {{ __('messages.root_canal.hero.supporting_line') }}
                </div>

            </div>
        </div>
    </section>


    <!-- TRUST BUILDER -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-5xl mx-auto text-center">

            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-8">
                {{ __('messages.root_canal.trust.title') }}
            </h2>

            <div class="space-y-6 text-lg text-gray-700 leading-relaxed max-w-4xl mx-auto">
                <p>
                    {{ __('messages.root_canal.trust.content_1') }}
                </p>
                <p>
                    {{ __('messages.root_canal.trust.content_2') }}
                </p>
            </div>

        </div>
    </section>


    <!-- WHAT IS A ROOT CANAL -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
                        {{ __('messages.root_canal.what_is.title') }}
                    </h2>

                    <div class="space-y-4 text-lg text-gray-700 leading-relaxed">
                        <p>{{ __('messages.root_canal.what_is.content_1') }}</p>
                        <p>{{ __('messages.root_canal.what_is.content_2') }}</p>
                    </div>

                    <div class="mt-8 p-6 bg-indigo-800 text-white rounded-2xl shadow-xl">
                        <p class="text-xl font-bold italic">
                            "{{ __('messages.root_canal.what_is.killer') }}"
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/100313.webp') }}" 
                         alt="Root Canal Procedure" 
                         class="rounded-3xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-2xl shadow-lg hidden md:block">
                        <p class="text-indigo-800 font-bold">Advanced Technology</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SIGNS YOU MAY NEED A ROOT CANAL -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-6xl mx-auto">

            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 text-center mb-12">
                {{ __('messages.root_canal.signs.title') }}
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                @php
                    $symptomIcons = ['tooth', 'snowflake', 'face-frown', 'utensils', 'circle', 'droplet'];
                @endphp

                @foreach(__('messages.root_canal.signs.items') as $index => $item)

                <div class="bg-gray-50 p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition group">
                    <div class="w-14 h-14 bg-indigo-100 text-indigo-700 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-indigo-700 group-hover:text-white transition">
                        <i class="fa-solid fa-{{ $symptomIcons[$index] ?? 'check' }} text-2xl"></i>
                    </div>
                    <p class="text-gray-800 font-bold text-lg leading-snug">
                        {{ $item }}
                    </p>
                </div>

                @endforeach

            </div>

            <div class="mt-12 text-center text-gray-600 text-lg">
                <p>{{ __('messages.root_canal.signs.supporting') }}</p>
            </div>
        </div>
    </section>


    <!-- THE PROCESS -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-6xl mx-auto">

            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 text-center mb-12">
                {{ __('messages.root_canal.process.title') }}
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-6">

                @php
                    $stepIcons = ['magnifying-glass', 'scissors', 'sparkles', 'lock', 'crown'];
                @endphp

                @foreach(__('messages.root_canal.process.steps') as $index => $step)

                <div class="relative flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-white text-indigo-800 rounded-full shadow-md flex items-center justify-center mb-4 z-10">
                        <i class="fa-solid fa-{{ $stepIcons[$index] ?? 'check' }} text-xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Step {{ $index + 1 }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {{ $step }}
                    </p>
                    
                    @if($index < 4)
                    <div class="hidden lg:block absolute top-8 left-[60%] w-full h-[2px] bg-indigo-100 -z-0"></div>
                    @endif
                </div>

                @endforeach

            </div>

            <div class="mt-12 text-center">
                <p class="inline-block bg-indigo-100 text-indigo-800 px-6 py-3 rounded-full font-bold">
                    {{ __('messages.root_canal.process.supporting') }}
                </p>
            </div>
        </div>
    </section>


    <!-- WHY CHOOSE NUCLEO DENTAL -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="bg-indigo-800 rounded-[50px] p-10 md:p-20 text-white shadow-2xl relative overflow-hidden">
                
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -mr-32 -mt-32"></div>
                
                <h2 class="text-3xl md:text-5xl font-bold mb-12 text-center">
                    {{ __('messages.root_canal.why.title') }}
                </h2>

                <div class="grid md:grid-cols-2 gap-8">

                    @foreach(__('messages.root_canal.why.items') as $item)

                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-8 h-8 bg-white/20 rounded-full flex items-center justify-center mr-4">
                            <i class="fa-solid fa-check text-white"></i>
                        </div>
                        <p class="text-xl font-medium">
                            {{ $item }}
                        </p>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <!-- DENTAL TOURISM -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <img src="{{ asset('images/100336.webp') }}" 
                         alt="Travel to Mexico" 
                         class="rounded-[50px] shadow-2xl">
                </div>
                <div class="order-1 md:order-2">
                    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
                        {{ __('messages.root_canal.tourism.title') }}
                    </h2>
                    
                    <p class="text-lg text-gray-700 mb-8">
                        {{ __('messages.root_canal.tourism.content') }}
                    </p>

                    <div class="space-y-4">
                        @foreach(__('messages.root_canal.tourism.steps') as $step)
                        <div class="flex items-center p-4 bg-white rounded-2xl shadow-sm border border-gray-100">
                            <i class="fa-solid fa-circle-check text-indigo-600 mr-3"></i>
                            <span class="text-gray-800 font-medium">{{ $step }}</span>
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-8 text-2xl font-bold text-indigo-800">
                        {{ __('messages.root_canal.tourism.supporting') }}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- MEET YOUR ENDODONTIST -->
    <section class="py-20 px-6 bg-white border-b">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-4">
                    {{ __('messages.root_canal.doctor.title') }}
                </h2>
                <div class="w-20 h-1.5 bg-indigo-600 mx-auto rounded-full"></div>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-center gap-10 max-w-5xl mx-auto">
                <div class="flex-shrink-0">
                    <img src="{{ asset('images/IMG_100191.webp') }}" alt="Dr. Mario Torres" class="w-48 h-48 md:w-64 md:h-64 rounded-full object-cover shadow-2xl border-4 border-indigo-50">
                </div>
                
                <div class="text-center md:text-left">
                    <p class="text-lg text-gray-700 leading-relaxed mb-8">
                        {{ __('messages.root_canal.doctor.content') }}
                    </p>

                    <a href="{{ route('meet-doctors') }}#dr-mario-torres" class="inline-block bg-indigo-800 text-white px-10 py-4 rounded-full font-bold hover:bg-indigo-900 transition shadow-xl">
                        {{ __('messages.root_canal.doctor.cta') }}
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- PRICING / VALUE POSITIONING -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-5xl mx-auto text-center">

            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-8">
                {{ __('messages.root_canal.pricing.title') }}
            </h2>

            <div class="space-y-6 text-lg text-gray-700 leading-relaxed max-w-4xl mx-auto">
                <p>{{ __('messages.root_canal.pricing.content_1') }}</p>
                <p>{{ __('messages.root_canal.pricing.content_2') }}</p>
            </div>

            <div class="mt-12 flex flex-wrap justify-center gap-4">
                <div class="bg-white p-6 rounded-3xl shadow-md border border-indigo-100 flex items-center">
                    <i class="fa-solid fa-tag text-indigo-600 text-2xl mr-4"></i>
                    <span class="text-gray-800 font-bold">Up to 70% Less Than U.S. Prices</span>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-md border border-indigo-100 flex items-center">
                    <i class="fa-solid fa-shield-halved text-indigo-600 text-2xl mr-4"></i>
                    <span class="text-gray-800 font-bold">Premium Materials & Warranty</span>
                </div>
            </div>

        </div>
    </section>


    <!-- FINAL CTA -->
    <section class="py-20 px-6 bg-indigo-800 text-white text-center">

        <div class="max-w-4xl mx-auto">

            <h2 class="text-3xl md:text-5xl font-bold mb-6">
                {{ __('messages.root_canal.final_cta.headline') }}
            </h2>

            <p class="text-lg text-indigo-100 mb-10 leading-relaxed">
                {{ __('messages.root_canal.final_cta.content') }}
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}"
                   class="bg-white text-indigo-800 font-bold px-10 py-4 rounded-full hover:bg-gray-100 transition shadow-2xl">
                    {{ __('messages.root_canal.final_cta.cta_primary') }}
                </a>
                
                <a href="{{ route('contact') }}"
                   class="bg-indigo-600 border border-white/30 text-white font-bold px-10 py-4 rounded-full hover:bg-indigo-700 transition shadow-2xl">
                    {{ __('messages.root_canal.final_cta.cta_secondary') }}
                </a>
            </div>

        </div>

    </section>


    <!-- FAQ SECTION -->
    <x-sections.faq 
        faqFile="data/root-canal-faq.json" 
        :title="__('messages.root_canal.faq.title')"
        :intro="__('messages.root_canal.faq.intro')"
    />

    <!-- FINAL FAQ CTA -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
                {{ __('messages.root_canal.faq_cta.headline') }}
            </h2>
            <p class="text-lg text-gray-700 mb-10 leading-relaxed">
                {{ __('messages.root_canal.faq_cta.description') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}"
                   class="bg-white text-indigo-800 font-bold px-10 py-4 rounded-full hover:bg-gray-100 transition shadow-2xl border-2 border-indigo-800">
                    {{ __('messages.root_canal.faq_cta.cta_primary') }}
                </a>
                <a href="{{ route('contact') }}"
                   class="bg-indigo-800 text-white font-bold px-10 py-4 rounded-full hover:bg-indigo-900 transition shadow-2xl">
                    {{ __('messages.root_canal.faq_cta.cta_secondary') }}
                </a>
            </div>
        </div>
    </section>

    <x-contact-map /> 

</main>

@endsection
