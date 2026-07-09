@extends('layouts.app')

@section('title', __('messages.dental_tourism_new.hero.headline') . ' - ' . config('app.name'))

@section('content')
<main>
    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-20 md:pt-40 md:pb-28 overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0">
            <!-- You can change this image to a luxury clinic image -->
            <img src="{{ asset('images/IMG_100225.webp') }}" 
                 alt="Luxury Dental Care" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-500/20 border border-indigo-400/30 text-indigo-300 font-semibold text-sm mb-6">
                    <i class="fas fa-star"></i> {{ __('messages.dental_tourism_new.hero.subheadline') }}
                </div>
                
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    {{ __('messages.dental_tourism_new.hero.headline') }}
                </h1>
                
                <p class="text-xl md:text-2xl text-slate-300 mb-8 max-w-2xl font-light">
                    {{ __('messages.dental_tourism_new.hero.intro') }}
                </p>

                <div class="space-y-4 mb-10">
                    <p class="text-lg text-slate-400 max-w-2xl leading-relaxed">
                        {{ __('messages.dental_tourism_new.hero.description_1') }}
                    </p>
                    <p class="text-lg text-slate-400 max-w-2xl leading-relaxed">
                        {{ __('messages.dental_tourism_new.hero.description_2') }}
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- PATIENT JOURNEY TIMELINE -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">
                    {{ __('messages.dental_tourism_new.journey.title') }}
                </h2>
                <div class="w-24 h-1.5 bg-indigo-600 mx-auto rounded-full"></div>
            </div>

            <div class="relative">
                <!-- Vertical Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-indigo-200 hidden md:block"></div>

                <div class="space-y-16 md:space-y-24">
                    @php
                        $journeySteps = [
                            'step_1' => ['icon' => 'fa-laptop', 'side' => 'left'],
                            'step_2' => ['icon' => 'fa-calendar-check', 'side' => 'right'],
                            'step_3' => ['icon' => 'fa-plane-arrival', 'side' => 'left'],
                            'step_4' => ['icon' => 'fa-car', 'side' => 'right'],
                            'step_5' => ['icon' => 'fa-tooth', 'side' => 'left'],
                            'step_6' => ['icon' => 'fa-home', 'side' => 'right'],
                        ];
                        $stepCount = 1;
                    @endphp

                    @foreach($journeySteps as $key => $data)
    <div class="relative flex flex-col md:flex-row items-center">

        <!-- Left Side -->
        <div class="w-full md:w-5/12">
            @if($data['side'] === 'left')
                <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-100 hover:shadow-xl transition-all duration-300">
                    <div class="text-indigo-600 font-bold text-lg mb-2">
                        Step {{ $stepCount }} — {{ __("messages.dental_tourism_new.journey.steps.{$key}.title") }}
                    </div>
                    <div class="text-slate-600 leading-relaxed text-lg">
                        {!! __("messages.dental_tourism_new.journey.steps.{$key}.description") !!}
                    </div>
                </div>
            @endif
        </div>

        <!-- Center Icon -->
        <div class="hidden md:flex absolute left-1/2 -translate-x-1/2 w-16 h-16 rounded-full bg-indigo-600 border-4 border-slate-50 items-center justify-center text-white text-2xl shadow-lg z-10">
            <i class="fas {{ $data['icon'] }}"></i>
        </div>

        <!-- Right Side -->
        <div class="w-full md:w-5/12 md:ml-auto mt-8 md:mt-0">
            @if($data['side'] === 'right')
                <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-100 hover:shadow-xl transition-all duration-300">
                    <div class="text-indigo-600 font-bold text-lg mb-2">
                        Step {{ $stepCount }} — {{ __("messages.dental_tourism_new.journey.steps.{$key}.title") }}
                    </div>
                    <div class="text-slate-600 leading-relaxed text-lg">
                        {!! __("messages.dental_tourism_new.journey.steps.{$key}.description") !!}
                    </div>
                </div>
            @endif
        </div>

    </div>

    @php $stepCount++; @endphp
@endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- EXPANDED SERVICES SECTION -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">
                    {{ __('messages.dental_tourism_new.services.title') }}
                </h2>
                <p class="text-xl text-slate-600 leading-relaxed">
                    {{ __('messages.dental_tourism_new.services.intro') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $services = [
                        'advanced' => 'fa-teeth-open',
                        'cosmetic' => 'fa-smile-beam',
                        'general' => 'fa-tooth',
                        'orthodontics' => 'fa-align-center',
                        'pediatric' => 'fa-child',
                        'emergency' => 'fa-briefcase-medical'
                    ];
                @endphp

                @foreach($services as $key => $icon)
                    <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100 hover:bg-indigo-50 transition-colors group">
                        <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-indigo-600 text-3xl mb-6 shadow-sm group-hover:shadow-md transition-all">
                            <i class="fas {{ $icon }}"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">{{ __("messages.dental_tourism_new.services.items.{$key}.title") }}</h3>
                        <ul class="space-y-3">
                            @foreach(__('messages.dental_tourism_new.services.items.' . $key . '.list') as $listItem)
                            <li class="flex items-start text-slate-600">
                                <i class="fas fa-check text-indigo-500 mt-1 mr-3 flex-shrink-0"></i>
                                <span>{{ $listItem }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- LUXURY EXPERIENCE -->
    <section class="py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <img src="{{ asset('images/100318.webp') }}" alt="Background" class="w-full h-full object-cover">
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                        {{ __('messages.dental_tourism_new.luxury.title') }}
                    </h2>
                    <p class="text-xl text-indigo-300 font-medium mb-10">
                        {{ __('messages.dental_tourism_new.luxury.intro') }}
                    </p>
                    
                    <ul class="space-y-6 mb-10">
                        @foreach(__('messages.dental_tourism_new.luxury.items') as $item)
                            <li class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-indigo-500/20 flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-check text-indigo-400"></i>
                                </div>
                                <span class="text-lg text-slate-300 leading-relaxed">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="border-t border-slate-700 pt-8">
                        <p class="text-xl font-medium text-white mb-2">{{ __('messages.dental_tourism_new.luxury.footer_1') }}</p>
                        <p class="text-xl font-bold text-indigo-400">{{ __('messages.dental_tourism_new.luxury.footer_2') }}</p>
                    </div>
                </div>
            
            </div>
        </div>
    </section>

    <!-- CLOSING CTA -->
    <section class="py-20 bg-indigo-600 text-white text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                {{ __('messages.dental_tourism_new.cta.title') }}
            </h2>
            <p class="text-xl text-indigo-100 mb-10 max-w-2xl mx-auto">
                {{ __('messages.dental_tourism_new.cta.intro') }}
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 mb-12">
                <a href="https://wa.me/526563674969" target="_blank" class="px-8 py-4 bg-white text-indigo-700 hover:bg-slate-50 rounded-full font-bold text-lg transition-all shadow-lg flex items-center justify-center">
                    <i class="fas fa-phone-alt mr-3"></i> {{ __('messages.dental_tourism_new.cta.items.phone') }}
                </a>
                <a href="https://wa.me/526563674969" target="_blank" class="px-8 py-4 bg-transparent border-2 border-indigo-400 hover:bg-indigo-700 text-white rounded-full font-bold text-lg transition-all flex items-center justify-center">
                    <i class="fab fa-whatsapp mr-3"></i> {{ __('messages.dental_tourism_new.cta.items.whatsapp') }}
                </a>
            </div>
            <p class="text-lg font-medium text-indigo-200">
                {{ __('messages.dental_tourism_new.cta.footer') }}
            </p>
        </div>
    </section>

</main>
@endsection