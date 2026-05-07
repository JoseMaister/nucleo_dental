@extends('layouts.app')

@section('title', __('messages.safety.title') . ' - ' . config('app.name'))

@section('content')

<main>

<!-- HERO -->
<section class="relative bg-black text-white">
    <div class="relative w-full min-h-[650px] bg-cover bg-center flex items-center justify-center"
         style="background-image: url('https://images.unsplash.com/photo-1588776814546-ec7e6f4d6c3c?auto=format&fit=crop&w=2070&q=80');">

        <div class="absolute inset-0 bg-indigo-950/70"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">

            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-6">
                {{ __('messages.safety.title') }}
            </h1>

            <p class="text-lg md:text-2xl text-indigo-100 mb-6">
                {{ __('messages.safety.intro_1') }}
            </p>

            <p class="text-indigo-200 max-w-3xl mx-auto">
                {{ __('messages.safety.intro_2') }}
            </p>

        </div>
    </div>
</section>


<!-- LICENSED -->
<section class="py-20 px-6 bg-white text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.safety.licensed_title') }}
    </h2>
    <p class="text-lg text-gray-700 max-w-4xl mx-auto mb-10">
        {{ __('messages.safety.licensed_desc') }}
    </p>

    <div class="max-w-4xl mx-auto space-y-2 text-left">
        @for($i=1;$i<=5;$i++)
            <p>✔ {{ __('messages.safety.licensed_'.$i) }}</p>
        @endfor
    </div>
</section>


<!-- STERILIZATION -->
<section class="py-20 px-6 bg-gray-50 text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.safety.sterilization_title') }}
    </h2>

    <p class="text-lg text-gray-700 max-w-4xl mx-auto mb-10">
        {{ __('messages.safety.sterilization_desc') }}
    </p>

    <div class="max-w-4xl mx-auto space-y-2 text-left">
        @for($i=1;$i<=6;$i++)
            <p>✔ {{ __('messages.safety.sterilization_'.$i) }}</p>
        @endfor
    </div>
</section>


<!-- TECHNOLOGY -->
<section class="py-20 px-6 bg-white text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.safety.technology_title') }}
    </h2>

    <p class="text-lg text-gray-700 max-w-4xl mx-auto mb-10">
        {{ __('messages.safety.technology_desc') }}
    </p>

    <div class="max-w-4xl mx-auto space-y-2 text-left">
        @for($i=1;$i<=4;$i++)
            <p>✔ {{ __('messages.safety.technology_'.$i) }}</p>
        @endfor
    </div>
</section>


<!-- IMPLANTS -->
<section class="py-20 px-6 bg-gray-50 text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.safety.implant_title') }}
    </h2>

    <p class="text-lg text-gray-700 max-w-4xl mx-auto mb-10">
        {{ __('messages.safety.implant_desc') }}
    </p>

    <div class="max-w-4xl mx-auto space-y-2 text-left">
        @for($i=1;$i<=5;$i++)
            <p>✔ {{ __('messages.safety.implant_'.$i) }}</p>
        @endfor
    </div>
</section>


<!-- RADIOGRAPHIC -->
<section class="py-20 px-6 bg-white text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.safety.radiographic_title') }}
    </h2>

    <p class="text-lg text-gray-700 max-w-4xl mx-auto">
        {{ __('messages.safety.radiographic_desc') }}
    </p>
</section>


<!-- CROSS BORDER -->
<section class="py-20 px-6 bg-gray-50 text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.safety.cross_border_title') }}
    </h2>

    <p class="text-lg text-gray-700 max-w-4xl mx-auto mb-10">
        {{ __('messages.safety.cross_border_desc') }}
    </p>

    <div class="max-w-4xl mx-auto space-y-2 text-left">
        @for($i=1;$i<=5;$i++)
            <p>✔ {{ __('messages.safety.cross_'.$i) }}</p>
        @endfor
    </div>
</section>


<!-- ETHICS -->
<section class="py-20 px-6 bg-white text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.safety.ethics_title') }}
    </h2>

    <p class="text-lg text-gray-700 max-w-4xl mx-auto mb-10">
        {{ __('messages.safety.ethics_desc') }}
    </p>

    <div class="max-w-4xl mx-auto space-y-2 text-left">
        @for($i=1;$i<=5;$i++)
            <p>✔ {{ __('messages.safety.ethics_'.$i) }}</p>
        @endfor
    </div>
</section>


<!-- ENVIRONMENT -->
<section class="py-20 px-6 bg-gray-50 text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-indigo-800 mb-6">
        {{ __('messages.safety.environment_title') }}
    </h2>

    <p class="text-lg text-gray-700 max-w-4xl mx-auto mb-10">
        {{ __('messages.safety.environment_desc') }}
    </p>

    <div class="max-w-4xl mx-auto space-y-2 text-left">
        @for($i=1;$i<=5;$i++)
            <p>✔ {{ __('messages.safety.environment_'.$i) }}</p>
        @endfor
    </div>
</section>


<!-- CTA -->
<section class="py-20 px-6 bg-indigo-800 text-white text-center">
    <h2 class="text-3xl md:text-5xl font-bold mb-6">
        {{ __('messages.safety.title') }}
    </h2>

    <p class="mb-8">
        {{ __('messages.safety.intro_2') }}
    </p>

    <a href="{{ route('contact') }}" class="bg-white text-indigo-800 font-bold px-10 py-4 rounded-full">
        {{ __('messages.full_arch_implants.hero.cta_primary') }}
    </a>
</section>


<x-contact-map />

</main>

@endsection