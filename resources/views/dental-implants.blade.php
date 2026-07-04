@php
    $hideNav = true;
@endphp
@extends('layouts.app')

@section('title', __('messages.dental_implants.hero.headline') . ' - ' . config('app.name'))

@section('content')

<main>

    <!-- HERO -->
    <section class="relative bg-black text-white">

        <div class="relative w-full min-h-[700px] bg-cover bg-center flex items-center justify-center py-12 md:py-20"
             style="background-image: url('https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=2070&q=80');">

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