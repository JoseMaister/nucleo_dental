@extends('layouts.app')

@section('title', __('messages.dental_tourism.page_title'))

@section('content')
    <!-- Hero Section with Background -->
    <section class="relative bg-gradient-to-br from-indigo-600 via-indigo-700 to-indigo-900 text-white py-20 md:py-32 px-4 md:px-8 overflow-hidden">
        <!-- Background decorative elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full -mr-48 -mt-48"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-white rounded-full -ml-48 -mb-48"></div>
        </div>

        <div class="max-w-6xl mx-auto text-center relative z-10">
            <div class="mb-8">
                <i class="fas fa-tooth text-6xl text-indigo-300 mb-6 inline-block"></i>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                {{ __('messages.dental_tourism.hero.title') }}
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-indigo-100">
                {{ __('messages.dental_tourism.hero.subtitle') }}
            </p>
            <p class="text-lg md:text-xl mb-10 text-indigo-100 max-w-3xl mx-auto">
                {{ __('messages.dental_tourism.hero.description') }}
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-indigo-700 font-bold py-3 px-8 rounded-lg hover:bg-indigo-50 transition-colors duration-300 text-lg">
                {{ __('messages.dental_tourism.cta.button') }}
            </a>
        </div>
    </section>

    <!-- What is Dental Tourism -->
    <section class="py-16 md:py-24 px-4 md:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
                {{ __('messages.dental_tourism.what_is.title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16 items-center">
                <div>
                    <img src="https://images.unsplash.com/photo-1631217315651-11a60111e5f0?w=500&h=500&fit=crop" alt="Dental Tourism" class="rounded-xl shadow-xl w-full">
                </div>
                <div>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        {{ __('messages.dental_tourism.what_is.description') }}
                    </p>
                    <p class="text-lg text-gray-700 mb-8 font-semibold">
                        {{ __('messages.dental_tourism.what_is.benefits_intro') }}
                    </p>
                </div>
            </div>

            <!-- Benefits Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-xl border-2 border-green-300 hover:shadow-lg transition-shadow">
                    <div class="text-5xl font-bold text-green-600 mb-4">💰</div>
                    <h3 class="text-2xl font-bold text-green-800 mb-3">{{ __('messages.dental_tourism.what_is.savings') }}</h3>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl border-2 border-blue-300 hover:shadow-lg transition-shadow">
                    <div class="text-5xl font-bold text-blue-600 mb-4">⭐</div>
                    <h3 class="text-2xl font-bold text-blue-800 mb-3">{{ __('messages.dental_tourism.what_is.quality') }}</h3>
                </div>
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-xl border-2 border-purple-300 hover:shadow-lg transition-shadow">
                    <div class="text-5xl font-bold text-purple-600 mb-4">⚡</div>
                    <h3 class="text-2xl font-bold text-purple-800 mb-3">{{ __('messages.dental_tourism.what_is.convenience') }}</h3>
                </div>
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-xl border-2 border-orange-300 hover:shadow-lg transition-shadow">
                    <div class="text-5xl font-bold text-orange-600 mb-4">🌴</div>
                    <h3 class="text-2xl font-bold text-orange-800 mb-3">{{ __('messages.dental_tourism.what_is.experience') }}</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Nucleo Dental -->
    <section class="py-16 md:py-24 px-4 md:px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
                {{ __('messages.dental_tourism.why_choose.title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

            <p class="text-lg text-gray-600 mb-16 text-center max-w-3xl mx-auto">
                {{ __('messages.dental_tourism.why_choose.intro') }}
            </p>

            <!-- Process Steps -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $steps = [
                        'consultation' => '📋',
                        'planning' => '🎫',
                        'treatment' => '🏥',
                        'recovery' => '😊'
                    ];
                @endphp

                @foreach($steps as $step => $icon)
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 text-center">
                        <div class="text-5xl mb-4 inline-block">{{ $icon }}</div>
                        <h3 class="text-2xl font-bold text-indigo-700 mb-4">
                            {{ __("messages.dental_tourism.why_choose.{$step}.title") }}
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            {{ __("messages.dental_tourism.why_choose.{$step}.description") }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services & Cost Comparison -->
    <section class="py-16 md:py-24 px-4 md:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
                {{ __('messages.dental_tourism.services_offered.title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

            <p class="text-lg text-gray-600 mb-12 text-center">
                {{ __('messages.dental_tourism.services_offered.description') }}
            </p>

            @php
                $services = [
                    'dental_implants' => '🦷',
                    'crowns' => '👑',
                    'veneers' => '✨',
                    'root_canal' => '⚕️',
                    'full_mouth' => '😁',
                    'cleanings' => '🧼'
                ];
            @endphp

                @foreach($services as $service => $icon)
                    <div class="bg-gradient-to-br from-indigo-50 to-white border-2 border-indigo-200 p-8 rounded-xl hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <div class="text-5xl mb-4">{{ $icon }}</div>
                        <h3 class="text-2xl font-bold text-indigo-800 mb-6">
                            {{ __("messages.dental_tourism.services_offered.{$service}.title") }}
                        </h3>
                        <div class="space-y-4 mb-6 border-t-2 border-indigo-200 pt-6">
                            <div>
                                <p class="text-gray-600 text-sm font-semibold mb-1">USA Cost:</p>
                                <p class="text-2xl font-bold text-red-600">
                                    {{ __("messages.dental_tourism.services_offered.{$service}.cost_us") }}
                                </p>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm font-semibold mb-1">Mexico Cost:</p>
                                <p class="text-2xl font-bold text-green-600">
                                    {{ __("messages.dental_tourism.services_offered.{$service}.cost_mexico") }}
                                </p>
                            </div>
                            <div class="bg-gradient-to-r from-indigo-700 to-indigo-9
                                <p class="text-gray-600 text-sm font-semibold mb-1">Mexico Cost:</p>
                                <p class="text-2xl font-bold text-green-600">
                                    {{ __("messages.dental_tourism.services_offered.{$service}.cost_mexico") }}
                                </p>
                            </div>
                            <div class="bg-indigo-700 text-white p-3 rounded-lg">
                                <p class="font-bold text-lg">
                                    {{ __("messages.dental_tourism.services_offered.{$service}.savings") }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- The Process -->
    <section class="py-16 md:py-24 px-4 md:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
                {{ __('messages.dental_tourism.process.title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

            <!-- Timeline -->
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-indigo-300" style="top: 40px; bottom: 0;"></div>

                <div class="space-y-12">
                    @php
                        $steps = [
                            'step_1' => '📋',
                            'step_2' => '🎫',
                            'step_3' => '🏥',
                            'step_4' => '😊',
                            'step_5' => '📞'
                        ];
                    @endphp

                    @foreach($steps as $index => $item)
                        @php $stepNum = $loop->iteration; @endphp
                        <div class="relative">
                            <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-indigo-700 border-4 border-white rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg" style="top: 0;">
                                {{ array_values($steps)[$loop->index - 1] ?? '' }}
                            </div>

                            <div class="{{ $stepNum % 2 == 1 ? 'md:ml-auto md:w-1/2 md:pr-16' : 'md:w-1/2 md:pl-16' }} w-full">
                                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border-2 border-indigo-200">
                                    <h3 class="text-2xl font-bold text-indigo-800 mb-3 flex items-center gap-2">
                                        {{ __("messages.dental_tourism.process.{$item}.title") }}
                                    </h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        {{ __("messages.dental_tourism.process.{$item}.description") }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 md:py-24 px-4 md:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
                {{ __('messages.dental_tourism.benefits.title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @php
                    $benefits = [
                        'quality_care' => '🏆',
                        'efficiency' => '⚡',
                        'affordability' => '💳',
                        'experience' => '🌍',
                        'support' => '🤝',
                    ];
                @endphp

                @foreach($benefits as $benefit => $icon)
                    <div class="bg-gradient-to-br from-indigo-50 to-white border-l-4 border-indigo-700 p-8 rounded-xl hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <div class="text-4xl mb-4">{{ $icon }}</div>
                        <h3 class="text-2xl font-bold text-indigo-800 mb-4">
                            {{ __("messages.dental_tourism.benefits.{$benefit}.title") }}
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            {{ __("messages.dental_tourism.benefits.{$benefit}.description") }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Risks & How We Prevent Them -->
    <section class="py-16 md:py-24 px-4 md:px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
                {{ __('messages.dental_tourism.risks_mitigation.title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

            <div class="grid grid-cols-1 lg:grid-cols-1 gap-8">
                @php
                    $mitigations = [
                        'verify_credentials' => '✅',
                        'hygiene_standards' => '🧼',
                        'clear_communication' => '💬',
                        'follow_up_care' => '📞',
                        'insurance_assistance' => '📋'
                    ];
                @endphp

                @foreach($mitigations as $mitigation => $icon)
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-green-500">
                        <div class="flex items-start gap-4">
                            <div class="text-4xl flex-shrink-0">{{ $icon }}</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-indigo-700 mb-3">
                                    {{ __("messages.dental_tourism.risks_mitigation.{$mitigation}.title") }}
                                </h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ __("messages.dental_tourism.risks_mitigation.{$mitigation}.description") }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Preparation Checklist -->
    <section class="py-16 md:py-24 px-4 md:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
                {{ __('messages.dental_tourism.preparation.title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Image -->
                <div class="hidden md:block">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06a0b504e5e?w=500&h=600&fit=crop" alt="Travel Preparation" class="rounded-xl shadow-xl w-full h-full object-cover">
                </div>

                <!-- Checklist -->
                <div class="bg-gradient-to-br from-indigo-50 to-white border-2 border-indigo-200 p-8 md:p-12 rounded-xl">
                    <ul class="space-y-4">
                        @php
                            $checklist = __('messages.dental_tourism.preparation.checklist');
                        @endphp

                        @foreach($checklist as $item)
                            <li class="flex items-start gap-4">
                                <div class="text-green-600 text-2xl flex-shrink-0 mt-1 font-bold">✓</div>
                                <span class="text-gray-700 text-lg leading-relaxed">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 md:py-24 px-4 md:px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
                {{ __('messages.faq.title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @php
                    $faqs = [
                        'q1' => '⏱️',
                        'q2' => '✈️',
                        'q3' => '🛡️',
                        'q4' => '📞',
                        'q5' => '⭐',
                        'q6' => '💬'
                    ];
                @endphp

                @foreach($faqs as $faq => $icon)
                    <div 
                        class="faq-item bg-gradient-to-br from-indigo-50 to-white border-2 border-indigo-200 rounded-xl p-6 md:p-8 hover:shadow-lg transition-all duration-300 cursor-pointer hover:scale-105"
                        onclick="toggleFaq(this)"
                    >
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex-1">
                                <h3 class="text-lg md:text-xl font-semibold text-indigo-900 text-left flex items-start gap-2">
                                    <span class="text-2xl flex-shrink-0">{{ $icon }}</span>
                                    <span>{{ __("messages.dental_tourism.faq_tourism.{$faq}.question") }}</span>
                                </h3>
                            </div>
                            <div class="faq-icon flex-shrink-0 text-indigo-700 text-2xl transition-transform duration-300">
                                <span class="inline-block">+</span>
                            </div>
                        </div>
                        <div class="faq-answer hidden mt-4 ml-10 text-gray-600 text-base leading-relaxed">
                            {{ __("messages.dental_tourism.faq_tourism.{$faq}.answer") }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 md:py-24 px-4 md:px-8 bg-gradient-to-br from-indigo-600 via-indigo-700 to-indigo-900 text-white relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full -mr-48 -mt-48"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-white rounded-full -ml-48 -mb-48"></div>
        </div>

        <div class="max-w-6xl mx-auto text-center relative z-10">
            <div class="mb-6">
                <i class="fas fa-smile text-6xl text-yellow-300 inline-block animate-bounce"></i>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                {{ __('messages.dental_tourism.cta.title') }}
            </h2>
            <p class="text-xl mb-8 text-indigo-100 max-w-3xl mx-auto">
                {{ __('messages.dental_tourism.cta.description') }}
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-indigo-700 font-bold py-4 px-10 rounded-lg hover:bg-indigo-50 transition-all duration-300 text-lg mb-4 hover:shadow-lg transform hover:scale-105">
                {{ __('messages.dental_tourism.cta.button') }}
            </a>
            <p class="text-indigo-100 text-lg">
                {{ __('messages.dental_tourism.cta.subtext') }}
            </p>
        </div>
    </section>

    <script>
        function toggleFaq(element) {
            const answer = element.querySelector('.faq-answer');
            const icon = element.querySelector('.faq-icon span');

            answer.classList.toggle('hidden');
            
            if (icon.textContent === '+') {
                icon.textContent = '−';
                icon.style.transform = 'rotate(180deg)';
            } else {
                icon.textContent = '+';
                icon.style.transform = 'rotate(0deg)';
            }

            element.classList.toggle('bg-indigo-100');
            element.classList.toggle('border-indigo-400');

            if (!answer.classList.contains('hidden')) {
                element.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        }
    </script>

    <style>
        .faq-icon {
            line-height: 1;
        }

        .faq-item {
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            transform: translateY(-2px);
        }
    </style>
@endsection
