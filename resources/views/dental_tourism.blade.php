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
<img src="{{ asset('images/IMG_100216.webp') }}" 
     alt="Dental Tourism" 
     class="rounded-xl shadow-xl w-full">                </div>  
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

                    @foreach($steps as $stepKey => $icon)
                        @php $stepNum = $loop->iteration; @endphp
                        <div class="relative">
                            <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-indigo-700 border-4 border-white rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg" style="top: 0;">
                                {{ $icon }}
                            </div>

                            <div class="{{ $stepNum % 2 == 1 ? 'md:ml-auto md:w-1/2 md:pr-16' : 'md:w-1/2 md:pl-16' }} w-full">
                                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border-2 border-indigo-200">
                                    <h3 class="text-2xl font-bold text-indigo-800 mb-3 flex items-center gap-2">
                                        {{ __("messages.dental_tourism.process.{$stepKey}.title") }}
                                    </h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        {{ __("messages.dental_tourism.process.{$stepKey}.description") }}
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
                    <img src="{{ asset('images/IMG_100224.webp') }}" alt="Travel Preparation" class="rounded-xl shadow-xl w-full h-full object-cover">
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

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
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
                        class="faq-item bg-gradient-to-br from-indigo-50 to-white border-2 border-indigo-200 rounded-xl p-6 md:p-8 hover:shadow-lg transition-all duration-300 cursor-pointer hover:scale-105 overflow-hidden"
                        onclick="toggleTourismFaq(this)"
                        style="min-height: fit-content;"
                    >
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex-1">
                                <h3 class="text-lg md:text-xl font-semibold text-indigo-900 text-left flex items-start gap-2">
                                    <span class="text-2xl flex-shrink-0">{{ $icon }}</span>
                                    <span>{{ __("messages.dental_tourism.faq_tourism.{$faq}.question") }}</span>
                                </h3>
                            </div>
                            <div class="faq-icon flex-shrink-0 text-indigo-700 text-2xl transition-transform duration-300">
                                <span class="inline-block transition-transform duration-300">+</span>
                            </div>
                        </div>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <div class="mt-4 ml-10 text-gray-600 text-base leading-relaxed">
                                {{ __("messages.dental_tourism.faq_tourism.{$faq}.answer") }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        function toggleTourismFaq(element) {
            // Get the answer element and icon
            const answer = element.querySelector('.faq-answer');
            const icon = element.querySelector('.faq-icon span');
            const answerContent = answer.querySelector('div');
            
            // Check if currently open
            const isOpen = !answer.classList.contains('max-h-0');
            
            if (isOpen) {
                // Close the FAQ
                answer.style.maxHeight = '0px';
                answer.classList.remove('max-h-96', 'max-h-[500px]', 'lg:max-h-[400px]');
                answer.classList.add('max-h-0');
                
                // Rotate icon back
                icon.textContent = '+';
                icon.style.transform = 'rotate(0deg) scale(1)';
                
                // Remove active styling
                element.classList.remove('bg-indigo-100', 'border-indigo-400', 'shadow-xl');
                element.classList.add('border-indigo-200');
            } else {
                // Open the FAQ
                // Get the natural height of the content
                const contentHeight = answerContent.scrollHeight;
                answer.style.maxHeight = contentHeight + 'px';
                
                // Add responsive max-height classes for different screen sizes
                answer.classList.remove('max-h-0');
                answer.classList.add('max-h-96', 'lg:max-h-[400px]');
                
                // Rotate icon
                icon.textContent = '−';
                icon.style.transform = 'rotate(180deg) scale(1.1)';
                
                // Add active styling
                element.classList.add('bg-indigo-100', 'border-indigo-400', 'shadow-xl');
                element.classList.remove('border-indigo-200');
                
                // Smooth scroll into view if needed
                setTimeout(() => {
                    element.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 100);
            }
            
            // Add ripple effect
            addTourismRippleEffect(element);
        }

        // Add ripple effect for better visual feedback
        function addTourismRippleEffect(element) {
            const ripple = document.createElement('div');
            ripple.className = 'absolute inset-0 bg-indigo-200 opacity-30 rounded-xl pointer-events-none';
            ripple.style.animation = 'tourismRipple 0.6s ease-out';
            
            element.style.position = 'relative';
            element.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        }

        // Add CSS animation for ripple effect
        const tourismStyle = document.createElement('style');
        tourismStyle.textContent = `
            @keyframes tourismRipple {
                0% {
                    transform: scale(0.8);
                    opacity: 0.5;
                }
                100% {
                    transform: scale(1);
                    opacity: 0;
                }
            }
            
            .tourism-faq .faq-answer {
                transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1), 
                            padding 0.3s ease-in-out,
                            opacity 0.3s ease-in-out;
            }
            
            .tourism-faq .faq-answer.max-h-0 {
                opacity: 0;
                padding-top: 0;
                padding-bottom: 0;
            }
            
            .tourism-faq .faq-answer:not(.max-h-0) {
                opacity: 1;
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
            
            .tourism-faq .faq-icon span {
                transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                            scale 0.3s ease-in-out;
            }
            
            .tourism-faq .faq-item {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                align-self: start;
            }
            
            /* Fix grid alignment issues */
            .tourism-faq .grid {
                align-items: start;
            }
            
            /* Ensure each FAQ item maintains its own height */
            .tourism-faq .faq-item {
                height: auto !important;
                min-height: auto !important;
            }
        `;
        document.head.appendChild(tourismStyle);
    </script>

    <!-- Why Ciudad Juárez Section -->
    <section class="py-16 md:py-24 px-4 md:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
                {{ __('messages.dental_tourism.juarez_benefits.title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

            <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
                {{ __('messages.dental_tourism.juarez_benefits.description') }}
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $juarez = [
                        'proximity' => '🌍',
                        'affordability' => '💰',
                        'culture' => '🎭',
                        'climate' => '☀️',
                        'attractions' => '🎡'
                    ];
                @endphp

                @foreach($juarez as $benefit => $icon)
                    <div class="bg-gradient-to-br from-green-50 to-white border-2 border-green-300 p-8 rounded-xl hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <div class="text-5xl mb-4">{{ $icon }}</div>
                        <h3 class="text-2xl font-bold text-green-700 mb-3">
                            {{ __("messages.dental_tourism.juarez_benefits.{$benefit}.title") }}
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            {{ __("messages.dental_tourism.juarez_benefits.{$benefit}.description") }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Travel Essentials: Hotels & Transport -->
    <section class="py-16 md:py-24 px-4 md:px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
                {{ __('messages.dental_tourism.travel_essentials.title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Hotels Section -->
                <div class="bg-white p-8 md:p-12 rounded-xl shadow-lg">
                    <div class="flex items-center gap-3 mb-6">
                        <i class="fas fa-hotel text-4xl text-blue-600"></i>
                        <h3 class="text-3xl font-bold text-indigo-800">
                            {{ __('messages.dental_tourism.travel_essentials.hotels.title') }}
                        </h3>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ __('messages.dental_tourism.travel_essentials.hotels.description') }}
                    </p>
                    <ul class="space-y-3">
                        @php
                            $hotels = __('messages.dental_tourism.travel_essentials.hotels.list');
                        @endphp
                        @foreach($hotels as $hotel)
                            <li class="flex items-start gap-3 text-gray-700">
                                <span class="text-blue-600 font-bold text-lg flex-shrink-0 mt-0.5">★</span>
                                <span>{{ $hotel }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Transport Section -->
                <div class="bg-white p-8 md:p-12 rounded-xl shadow-lg">
                    <div class="flex items-center gap-3 mb-6">
                        <i class="fas fa-shuttle-van text-4xl text-orange-600"></i>
                        <h3 class="text-3xl font-bold text-indigo-800">
                            {{ __('messages.dental_tourism.travel_essentials.transport.title') }}
                        </h3>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ __('messages.dental_tourism.travel_essentials.transport.description') }}
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 text-gray-700 pb-3 border-b">
                            <span class="text-orange-600 font-bold text-lg flex-shrink-0">✈️</span>
                            <span>{{ __('messages.dental_tourism.travel_essentials.transport.airport') }}</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-700 pb-3 border-b">
                            <span class="text-orange-600 font-bold text-lg flex-shrink-0">🚕</span>
                            <span>{{ __('messages.dental_tourism.travel_essentials.transport.taxi') }}</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-700 pb-3 border-b">
                            <span class="text-orange-600 font-bold text-lg flex-shrink-0">🚗</span>
                            <span>{{ __('messages.dental_tourism.travel_essentials.transport.rental') }}</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-700 pb-3 border-b">
                            <span class="text-orange-600 font-bold text-lg flex-shrink-0">🚐</span>
                            <span>{{ __('messages.dental_tourism.travel_essentials.transport.shuttle') }}</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-700">
                            <span class="text-orange-600 font-bold text-lg flex-shrink-0">🚶</span>
                            <span>{{ __('messages.dental_tourism.travel_essentials.transport.local') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- External Resources -->
    <section class="py-16 md:py-24 px-4 md:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
                {{ __('messages.dental_tourism.external_resources.title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

            <p class="text-lg text-gray-600 mb-12 text-center max-w-3xl mx-auto">
                {{ __('messages.dental_tourism.external_resources.description') }}
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $resources = __('messages.dental_tourism.external_resources.resources');
                @endphp

                @foreach($resources as $resource)
                    <a href="{{ $resource['url'] }}" target="_blank" rel="noopener noreferrer" class="bg-gradient-to-br from-indigo-50 to-white border-2 border-indigo-200 p-8 rounded-xl hover:shadow-lg transition-all duration-300 hover:scale-105 hover:border-indigo-400">
                        <div class="flex items-start justify-between mb-4">
                            <h3 class="text-xl font-bold text-indigo-800 flex-1">
                                {{ $resource['name'] }}
                            </h3>
                            <i class="fas fa-external-link-alt text-indigo-600 text-lg ml-2 flex-shrink-0"></i>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            {{ $resource['description'] }}
                        </p>
                        <div class="mt-4 pt-4 border-t border-indigo-200 text-indigo-700 text-sm font-semibold">
                            Visitar Recurso →
                        </div>
                    </a>
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
