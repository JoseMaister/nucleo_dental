@extends('layouts.app')

@section('title', __('messages.el_paso_transport.hero.headline') . ' - ' . config('app.name'))

@section('content')
<main>
    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-20 md:pt-40 md:pb-28 overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/IMG_100225.webp') }}" 
                 alt="Dental clinic patient care" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/20 border border-blue-400/30 text-blue-300 font-semibold text-sm mb-6">
                    <i class="fas fa-map-marker-alt"></i> {{ __('messages.el_paso_transport.hero.subheadline') }}
                </div>
                
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    {{ __('messages.el_paso_transport.hero.headline') }}
                </h1>
                
                <p class="text-xl md:text-2xl text-slate-300 mb-8 max-w-2xl">
                    {{ __('messages.el_paso_transport.hero.intro') }}
                </p>

                <p class="text-lg text-slate-400 mb-10 max-w-2xl leading-relaxed">
                    {{ __('messages.el_paso_transport.hero.description') }}
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex justify-center items-center px-8 py-4 text-base font-bold rounded-full text-white bg-blue-600 hover:bg-blue-700 transition-all shadow-lg hover:shadow-blue-500/25">
                        {{ __('messages.el_paso_transport.cta.primary_btn') }} <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- TRANSPORTATION HIGHLIGHT -->
    <section class="py-16 bg-blue-600 text-white relative overflow-hidden">
        <div class="absolute right-0 top-0 opacity-10 transform translate-x-1/4 -translate-y-1/4">
            <i class="fas fa-car-side text-9xl" style="font-size: 20rem;"></i>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-5xl font-bold mb-4">
                        {{ __('messages.el_paso_transport.transportation.title') }}
                    </h2>
                    <p class="text-xl text-blue-200 font-semibold mb-6">
                        {{ __('messages.el_paso_transport.transportation.subtitle') }}
                    </p>
                    <p class="text-lg text-blue-50 mb-8">
                        {{ __('messages.el_paso_transport.transportation.description') }}
                    </p>
                </div>

                <div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                        <ul class="space-y-4">
                            @foreach(__('messages.el_paso_transport.transportation.features') as $feature)
                                <li class="flex items-start gap-4">
                                    <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center flex-shrink-0 mt-1">
                                        <i class="fas fa-check text-white text-sm"></i>
                                    </div>
                                    <span class="text-lg text-white font-medium">{!! $feature !!}</span>
                                </li>
                            @endforeach
                            <li class="flex items-center justify-center text-center">
                                <p class="text-xl text-white font-bold">{{ __('messages.el_paso_transport.transportation.footer') }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS (3 STEPS) -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">
                    {{ __('messages.el_paso_transport.how_it_works.title') }}
                </h2>
                <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 relative">
                <div class="hidden md:block absolute top-12 left-1/6 right-1/6 h-0.5 bg-slate-200 z-0"></div>

                @php
                    $icons = ['fa-calendar-alt', 'fa-map-marker-alt', 'fa-smile'];
                @endphp

                @foreach(__('messages.el_paso_transport.how_it_works.steps') as $index => $step)
                    <div class="relative z-10 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="w-24 h-24 mx-auto rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600 text-3xl mb-6 shadow-inner">
                            <i class="fas {{ $icons[$index] }}"></i>
                        </div>
                        <div class="w-8 h-8 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center mx-auto -mt-10 mb-6 border-4 border-white">
                            {{ $index + 1 }}
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">{{ $step['title'] }}</h3>
                        <p class="text-slate-600 leading-relaxed">{{ $step['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-8">
                        {{ __('messages.el_paso_transport.why_choose.title') }}
                    </h2>
                    
                    <div class="space-y-8">
                        @php
                            $whyIcons = ['fa-piggy-bank', 'fa-user-md', 'fa-map', 'fa-language', 'fa-clinic-medical'];
                        @endphp

                        @foreach(__('messages.el_paso_transport.why_choose.reasons') as $index => $reason)
                            <div class="flex gap-5">
                                <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 flex-shrink-0 text-xl">
                                    <i class="fas {{ $whyIcons[$index] }}"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $reason['title'] }}</h3>
                                    <p class="text-slate-600">{{ $reason['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="relative">
                    <img src="{{ asset('images/100318.webp') }}" 
                         alt="Clinic Team" class="rounded-3xl shadow-2xl z-10 relative">
                    
                    <!-- Safety Box overlaid on image -->
                    <div class="absolute -bottom-10 -left-10 right-10 bg-slate-900 text-white p-8 rounded-3xl shadow-2xl z-20 border border-slate-700">
                        <div class="flex items-center gap-3 mb-4 text-blue-400">
                            <i class="fas fa-shield-alt text-2xl"></i>
                            <h4 class="font-bold text-lg">{{ __('messages.el_paso_transport.safety.title') }}</h4>
                        </div>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            {{ __('messages.el_paso_transport.safety.description') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- LUXURY EXPERIENCE -->
<section class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">
            {{ __('messages.el_paso_transport.experience.title') }}
        </h2>

        <p class="text-xl text-slate-600 max-w-3xl mx-auto mb-12">
            {{ __('messages.el_paso_transport.experience.subtitle') }}
        </p>

        <div class="grid md:grid-cols-2 gap-8 text-left">
            @foreach(__('messages.el_paso_transport.experience.items') as $item)
                <div class="flex items-start gap-4 bg-slate-50 p-6 rounded-2xl shadow-sm">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-check text-blue-600"></i>
                    </div>
                    <p class="text-lg text-slate-700 font-medium">
                        {{ $item }}
                    </p>
                </div>
            @endforeach
        </div>

    </div>
</section>

    <!-- POPULAR TREATMENTS & PATIENTS LOVE -->
    <section class="py-20 bg-slate-50 mt-10 lg:mt-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Popular Treatments -->
                <div class="bg-white p-8 md:p-10 rounded-3xl shadow-sm border border-slate-100">
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">
                        {{ __('messages.el_paso_transport.popular_treatments.title') }}
                    </h3>
                    <ul class="space-y-4">
                        @foreach(__('messages.el_paso_transport.popular_treatments.items') as $item)
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <i class="fas fa-tooth text-blue-500"></i> {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Patients Love -->
                <div class="bg-blue-600 p-8 md:p-10 rounded-3xl shadow-lg text-white">
                    <h3 class="text-2xl font-bold mb-6">
                        {{ __('messages.el_paso_transport.patients_love.title') }}
                    </h3>
                    <ul class="space-y-4">
                        @foreach(__('messages.el_paso_transport.patients_love.items') as $item)
                            <li class="flex items-center gap-3 text-blue-100 font-medium text-lg">
                                <i class="fas fa-heart text-blue-300"></i> {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="py-20 bg-slate-900 text-white relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                {{ __('messages.el_paso_transport.cta.headline') }}
            </h2>
            <p class="text-xl text-slate-300 mb-10 max-w-2xl mx-auto">
                {{ __('messages.el_paso_transport.cta.subheadline') }}
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
                <a href="https://wa.me/526563674969" target="_blank" rel="noopener noreferrer" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-full font-bold text-lg transition-all shadow-lg hover:shadow-blue-500/25 inline-flex items-center justify-center text-center">
                    <i class="fab fa-whatsapp mr-2 hidden sm:inline-block"></i> {{ __('messages.el_paso_transport.cta.primary_btn') }}
                </a>
                <a href="https://wa.me/526563674969" target="_blank" rel="noopener noreferrer" class="px-8 py-4 bg-transparent border border-blue-400 hover:bg-blue-900/50 text-white rounded-full font-bold text-lg transition-all shadow-lg inline-flex items-center justify-center text-center">
                    <i class="fab fa-whatsapp mr-2 hidden sm:inline-block"></i> {{ __('messages.el_paso_transport.cta.secondary_btn') }}
                </a>
            </div>
            
            <p class="text-lg text-slate-400 italic font-medium">
                {{ __('messages.el_paso_transport.cta.footer') }}
            </p>
        </div>
    </section>

</main>
@endsection
