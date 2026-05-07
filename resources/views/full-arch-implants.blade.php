@extends('layouts.app')

@section('title', __('messages.full_arch_implants.hero.headline') . ' - ' . config('app.name'))

@section('content')

<main>

<!-- HERO -->
<section class="relative bg-black text-white">
    <div class="relative w-full min-h-[650px] bg-cover bg-center flex items-center justify-center"
         style="background-image: url('https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=2070&q=80');">

        <div class="absolute inset-0 bg-indigo-950/70"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">

            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-6">
                {{ __('messages.full_arch_implants.hero.headline') }}
            </h1>

            <p class="text-lg md:text-2xl text-indigo-100 mb-6">
                {{ __('messages.full_arch_implants.hero.subheadline') }}
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-10">
                <a href="{{ route('contact') }}" class="bg-white text-indigo-800 font-bold px-8 py-4 rounded-full">
                    {{ __('messages.full_arch_implants.hero.cta_primary') }}
                </a>

                <a href="{{ route('contact') }}" class="border border-white px-8 py-4 rounded-full">
                    {{ __('messages.full_arch_implants.hero.cta_secondary') }}
                </a>
            </div>

            <div class="flex flex-wrap justify-center gap-6 text-sm text-indigo-200">
                <span>✔ {{ __('messages.full_arch_implants.hero.trust_1') }}</span>
                <span>✔ {{ __('messages.full_arch_implants.hero.trust_2') }}</span>
                <span>✔ {{ __('messages.full_arch_implants.hero.trust_3') }}</span>
                <span>✔ {{ __('messages.full_arch_implants.hero.trust_4') }}</span>
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
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.full_arch_implants.sedation_title') }}
    </h2>
    <p>{{ __('messages.full_arch_implants.sedation_text') }}</p>
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


<x-contact-map />

</main>

@endsection