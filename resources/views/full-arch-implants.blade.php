@php
    $hideNav = false;
@endphp
@extends('layouts.app')

@section('title', __('messages.full_arch_implants.hero.headline') . ' - ' . config('app.name'))

@section('content')

<main>

<!-- HERO -->
<section class="relative bg-black text-white">
    <div class="relative w-full min-h-[700px] bg-cover bg-center flex items-center justify-center py-12 md:py-20"
         style="background-image: url('{{ asset('images/100310.webp') }}');">

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
<section class="py-20 px-6 bg-white text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.full_arch_implants.pain_title') }}
    </h2>
    <p class="text-lg text-gray-700 max-w-4xl mx-auto">
        {{ __('messages.full_arch_implants.pain_text') }}
    </p>
    <br>
    <p class="text-lg text-gray-700 max-w-4xl mx-auto">
        {{ __('messages.full_arch_implants.pain_text_2') }}
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
    <div class="inline-block border-l-4 border-indigo-500 bg-indigo-50 px-6 py-3 rounded-r-xl">
        <p class="text-indigo-700 font-bold italic text-lg md:text-xl">
            "{!! __('messages.full_arch_implants.solution_text_2') !!}"
        </p>
    </div>
</section>


<!-- COMPARISON -->
<section class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-5xl font-bold text-center text-indigo-800 mb-12">
            {{ __('messages.full_arch_implants.compare_title') }}
        </h2>

        <div class="grid md:grid-cols-2 gap-8">

            <div class="bg-gray-50 p-8 rounded-xl">
                <h3 class="font-bold mb-4">{{ __('messages.full_arch_implants.compare_left_title') }}</h3>
                @for($i=1;$i<=4;$i++)
                    <p>• {{ __('messages.full_arch_implants.denture_'.$i) }}</p>
                @endfor
            </div>

            <div class="bg-indigo-50 p-8 rounded-xl">
                <h3 class="font-bold mb-4">{{ __('messages.full_arch_implants.compare_right_title') }}</h3>
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
                {{ $i }}. {{ __('messages.full_arch_implants.step_'.$i) }}
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
        {{!! __('messages.full_arch_implants.cost_text') !!}}
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
    <a href="{{ route('contact') }}" class="bg-white/10 px-10 py-4  hover:bg-white/20 text-white font-bold rounded-full transition-all duration-300 border border-white/10 text-lg">
        {{ __('messages.full_arch_implants.hero.cta_secondary') }}
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