@php
    $hideNav = true;
@endphp
@extends('layouts.app')

@section('title', __('messages.full_arch_implants.hero.headline') . ' - ' . config('app.name'))

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
                        {{ __('messages.full_arch_implants.hero.headline') }}
                    </h1>

                    <p class="text-lg md:text-xl text-indigo-100 max-w-2xl mx-auto lg:mx-0 mb-6 leading-relaxed">
                        {{ __('messages.full_arch_implants.hero.subheadline') }}
                    </p>

                    <!-- TRUST BAR -->
                    <div class="flex flex-wrap justify-center lg:justify-start gap-4 md:gap-6 text-sm text-indigo-100 mt-8">
                        <span class="bg-white/10 px-4 py-2 rounded-full backdrop-blur-sm border border-white/10 flex items-center gap-2">
                            <i class="fas fa-check text-indigo-400"></i> {{ __('messages.full_arch_implants.hero.trust_1') }}
                        </span>
                        <span class="bg-white/10 px-4 py-2 rounded-full backdrop-blur-sm border border-white/10 flex items-center gap-2">
                            <i class="fas fa-check text-indigo-400"></i> {{ __('messages.full_arch_implants.hero.trust_2') }}
                        </span>
                        <span class="bg-white/10 px-4 py-2 rounded-full backdrop-blur-sm border border-white/10 flex items-center gap-2">
                            <i class="fas fa-check text-indigo-400"></i> {{ __('messages.full_arch_implants.hero.trust_3') }}
                        </span>
                        <span class="bg-white/10 px-4 py-2 rounded-full backdrop-blur-sm border border-white/10 flex items-center gap-2">
                            <i class="fas fa-check text-indigo-400"></i> {{ __('messages.full_arch_implants.hero.trust_4') }}
                        </span>
                    </div>
                </div>

                <!-- Right Form Column (Lead Form above the fold) -->
                <div class="lg:col-span-5 flex justify-center">
                    <div class="bg-white/95 text-gray-800 rounded-3xl p-6 md:p-8 shadow-2xl max-w-md w-full border border-white/20 backdrop-blur-sm">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2 text-center">
                            {{ __('messages.full_arch_implants.hero.cta_primary') }}
                        </h3>
                        <p class="text-sm text-gray-500 mb-6 text-center">
                            {{ __('messages.full_arch_implants.final_text') }}
                        </p>
                        
                        @if(session('success'))
                            <div class="mb-4 p-4 bg-green-50 border-l-4 border-green-500 text-green-700 text-sm rounded">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                            @csrf
                            <input type="hidden" name="services[]" value="All-on-4 / Full Arch Implants">
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
                                {{ __('messages.full_arch_implants.hero.cta_primary') }}
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- PAIN -->
<section class="py-20 px-6 bg-white text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.full_arch_implants.pain_title') }}
    </h2>
    <p class="text-lg text-gray-700 max-w-4xl mx-auto">
        {{ __('messages.full_arch_implants.pain_text') }}
    </p>
</section>


<!-- SOLUTION -->
<section class="py-20 px-6 bg-gray-50 text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.full_arch_implants.solution_title') }}
    </h2>
    <p class="text-lg text-gray-700 max-w-4xl mx-auto">
        {{ __('messages.full_arch_implants.solution_text') }}
    </p>
</section>


<!-- COMPARISON -->
<section class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-5xl font-bold text-center text-indigo-800 mb-12">
            {{ __('messages.full_arch_implants.compare_title') }}
        </h2>

        <div class="grid md:grid-cols-2 gap-8">

            <div class="bg-gray-50 p-8 rounded-xl">
                <h3 class="font-bold mb-4">Dentures</h3>
                @for($i=1;$i<=4;$i++)
                    <p>• {{ __('messages.full_arch_implants.denture_'.$i) }}</p>
                @endfor
            </div>

            <div class="bg-indigo-50 p-8 rounded-xl">
                <h3 class="font-bold mb-4">All-on-4</h3>
                @for($i=1;$i<=4;$i++)
                    <p>• {{ __('messages.full_arch_implants.implant_'.$i) }}</p>
                @endfor
            </div>

        </div>
    </div>
</section>


<!-- WHY -->
<section class="py-20 px-6 bg-gray-50">
    <h2 class="text-3xl md:text-5xl text-center font-bold text-indigo-800 mb-12">
        {{ __('messages.full_arch_implants.why_title') }}
    </h2>

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-6">
        @for($i=1;$i<=7;$i++)
        <div class="bg-white p-6 rounded-xl shadow">
            ✔ {{ __('messages.full_arch_implants.why_'.$i) }}
        </div>
        @endfor
    </div>
</section>


<!-- VALUE -->
<section class="py-20 px-6 bg-white">
    <h2 class="text-3xl md:text-5xl text-center font-bold text-indigo-800 mb-12">
        {{ __('messages.full_arch_implants.value_title') }}
    </h2>

    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-6">
        @for($i=1;$i<=6;$i++)
        <div class="bg-gray-50 p-6 rounded-xl">
            ✔ {{ __('messages.full_arch_implants.value_'.$i) }}
        </div>
        @endfor
    </div>
</section>


<!-- PROCESS -->
<section class="py-20 px-6 bg-gray-50">
    <h2 class="text-3xl md:text-5xl text-center font-bold text-indigo-800 mb-12">
        {{ __('messages.full_arch_implants.process_title') }}
    </h2>

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @for($i=1;$i<=6;$i++)
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-bold mb-2">
                {{ __('messages.full_arch_implants.step_'.$i) }}
            </h3>
            <p class="text-gray-600">
                {{ __('messages.full_arch_implants.step_'.$i.'_text') }}
            </p>
        </div>
        @endfor
    </div>
</section>


<!-- COST -->
<section class="py-20 px-6 bg-indigo-800 text-white text-center">
    <h2 class="text-3xl md:text-5xl font-bold mb-6">
        {{ __('messages.full_arch_implants.cost_title') }}
    </h2>
    <p class="mb-6">
        {{ __('messages.full_arch_implants.cost_text') }}
    </p>
    <div class="font-bold">
        {{ __('messages.full_arch_implants.cost_callout') }}
    </div>
</section>


<!-- TRAVEL -->
<section class="py-20 px-6 bg-white text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-10">
        {{ __('messages.full_arch_implants.travel_title') }}
    </h2>

    @for($i=1;$i<=5;$i++)
        <p>✔ {{ __('messages.full_arch_implants.travel_'.$i) }}</p>
    @endfor
</section>


<!-- SEDATION -->
<section class="py-20 px-6 bg-gray-50 text-center">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
            {{ __('messages.full_arch_implants.sedation_title') }}
        </h2>
        <p class="text-gray-700 text-lg leading-relaxed mb-8">
            {{ __('messages.full_arch_implants.sedation_text') }}
        </p>

        <div class="max-w-md mx-auto text-left bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
            <h4 class="font-bold text-indigo-900 mb-4 text-center sm:text-left">
                {{ __('messages.full_arch_implants.sedation_ideal') }}
            </h4>
            <ul class="space-y-3">
                @foreach(__('messages.full_arch_implants.sedation_points') as $point)
                <li class="flex items-center text-gray-700">
                    <i class="fas fa-check-circle text-green-500 mr-3 text-lg"></i>
                    <span class="font-semibold">{{ $point }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>


<!-- RESULT -->
<section class="py-20 px-6 bg-white text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.full_arch_implants.result_title') }}
    </h2>
    <p>{{ __('messages.full_arch_implants.result_text') }}</p>
</section>


<!-- FINAL CTA -->
<section class="py-20 px-6 bg-indigo-800 text-white text-center">
    <h2 class="text-3xl md:text-5xl font-bold mb-6">
        {{ __('messages.full_arch_implants.final_title') }}
    </h2>
    <p class="mb-8">
        {{ __('messages.full_arch_implants.final_text') }}
    </p>

    <a href="{{ route('contact') }}" class="bg-white text-indigo-800 font-bold px-10 py-4 rounded-full">
        {{ __('messages.full_arch_implants.hero.cta_primary') }}
    </a>
</section>


<!-- FAQ SECTION -->
<section class="relative bg-white py-16 px-4 md:px-8 border-t border-gray-100">
    <div class="max-w-4xl mx-auto">
        <!-- Section Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-4">
                {{ __('messages.full_arch_implants.faq_title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded"></div>
        </div>

        <!-- FAQ List -->
        <div class="space-y-6">
            @foreach(__('messages.full_arch_implants.faq_items') as $index => $item)
            <div class="faq-item bg-gradient-to-br from-indigo-50 to-white border-2 border-indigo-200 rounded-xl p-6 md:p-8 hover:shadow-lg transition-all duration-300 cursor-pointer overflow-hidden" onclick="toggleFaqExclusive(this)">
                <div class="flex items-start justify-between gap-4">
                    <h3 class="text-lg md:text-xl font-semibold text-indigo-900 text-left flex-1">
                        {{ $item['question'] }}
                    </h3>
                    <div class="faq-icon flex-shrink-0 text-indigo-700 text-2xl transition-all duration-300">
                        <span class="inline-block transition-transform">+</span>
                    </div>
                </div>

                <div class="faq-answer max-h-0 transition-all duration-500 ease-in-out">
                    <div class="mt-4 text-gray-600 text-base leading-relaxed">
                        {{ $item['answer'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    function toggleFaq(element) {
        const answer = element.querySelector('.faq-answer');
        const icon = element.querySelector('.faq-icon span');
        const answerContent = answer.querySelector('div');
        const isOpen = !answer.classList.contains('max-h-0');
        
        if (isOpen) {
            answer.style.maxHeight = '0px';
            answer.classList.remove('max-h-96', 'max-h-[500px]', 'lg:max-h-[400px]');
            answer.classList.add('max-h-0');
            icon.textContent = '+';
            icon.style.transform = 'rotate(0deg) scale(1)';
            element.classList.remove('bg-indigo-100', 'border-indigo-400', 'shadow-xl');
            element.classList.add('border-indigo-200');
        } else {
            const contentHeight = answerContent.scrollHeight;
            answer.style.maxHeight = contentHeight + 'px';
            answer.classList.remove('max-h-0');
            answer.classList.add('max-h-96', 'lg:max-h-[400px]');
            icon.textContent = '−';
            icon.style.transform = 'rotate(180deg) scale(1.1)';
            element.classList.add('bg-indigo-100', 'border-indigo-400', 'shadow-xl');
            element.classList.remove('border-indigo-200');
            setTimeout(() => {
                element.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }, 100);
        }
        addRippleEffect(element);
    }

    function toggleFaqExclusive(element) {
        const allFaqItems = document.querySelectorAll('.faq-item');
        allFaqItems.forEach(item => {
            if (item !== element) {
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('.faq-icon span');
                answer.style.maxHeight = '0px';
                answer.classList.remove('max-h-96', 'max-h-[500px]', 'lg:max-h-[400px]');
                answer.classList.add('max-h-0');
                icon.textContent = '+';
                icon.style.transform = 'rotate(0deg) scale(1)';
                item.classList.remove('bg-indigo-100', 'border-indigo-400', 'shadow-xl');
                item.classList.add('border-indigo-200');
            }
        });
        toggleFaq(element);
    }

    function addRippleEffect(element) {
        const ripple = document.createElement('div');
        ripple.className = 'absolute inset-0 bg-indigo-200 opacity-30 rounded-xl pointer-events-none';
        ripple.style.animation = 'ripple 0.6s ease-out';
        element.style.position = 'relative';
        element.appendChild(ripple);
        setTimeout(() => {
            ripple.remove();
        }, 600);
    }

    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            0% { transform: scale(0.8); opacity: 0.5; }
            100% { transform: scale(1); opacity: 0; }
        }
        .faq-answer {
            transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1), padding 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }
        .faq-answer.max-h-0 { opacity: 0; padding-top: 0; padding-bottom: 0; }
        .faq-answer:not(.max-h-0) { opacity: 1; padding-top: 1rem; padding-bottom: 1rem; }
        .faq-icon span { transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), scale 0.3s ease-in-out; }
        .faq-item { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .faq-item:hover { transform: translateY(-2px); }
    `;
    document.head.appendChild(style);
</script>

<!-- Sticky Mobile CTA -->
<div class="fixed bottom-0 left-0 right-0 z-40 bg-white border-t border-gray-200 p-4 shadow-[0_-4px_10px_rgba(0,0,0,0.05)] flex items-center justify-between sm:hidden text-gray-800">
    <div class="flex flex-col">
        <span class="text-xs text-gray-500 uppercase font-semibold tracking-wider">Consultation</span>
        <span class="text-sm font-bold text-indigo-800">Free Assessment</span>
    </div>
    <a href="#hero_name" class="bg-indigo-700 hover:bg-indigo-800 text-white font-bold px-6 py-2.5 rounded-full text-sm transition">
        {{ __('messages.full_arch_implants.hero.cta_primary') }}
    </a>
</div>

<x-contact-map />
</main>

@endsection