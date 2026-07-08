@extends('layouts.app')

@section('title', __('messages.safety.title') . ' - ' . config('app.name'))

@section('content')

<main>

<!-- HERO -->
<section class="relative bg-black text-white">
    <div class="relative w-full min-h-[650px] bg-cover bg-center flex items-center justify-center"
         style="background-image: url('{{ asset('images/IMG_100210.webp') }}');">

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


<!-- SECTIONS -->
<section class="py-16 px-6 bg-gray-50">
    <div class="max-w-6xl mx-auto space-y-16">

        <!-- LICENSED -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 transition duration-300 hover:shadow-md">
            <div class="max-w-4xl">
                <h2 class="text-2xl md:text-3xl font-bold text-indigo-900 mb-4">
                    {{ __('messages.safety.licensed_title') }}
                </h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    {{ __('messages.safety.licensed_desc') }}
                </p>

                <ul class="grid md:grid-cols-2 gap-4 mb-8">
                    @foreach(__('messages.safety.licensed_points') as $point)
                    <li class="flex items-start text-gray-700">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 text-lg flex-shrink-0"></i>
                        <span class="font-medium">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="bg-indigo-50/50 border-l-4 border-indigo-600 p-4 rounded-r-xl">
                    <p class="text-indigo-950 font-medium italic text-base">
                        {{ __('messages.safety.licensed_footer') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- STERILIZATION -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 transition duration-300 hover:shadow-md">
            <div class="max-w-4xl">
                <h2 class="text-2xl md:text-3xl font-bold text-indigo-900 mb-4">
                    {{ __('messages.safety.sterilization_title') }}
                </h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    {{ __('messages.safety.sterilization_desc') }}
                </p>

                <ul class="grid md:grid-cols-2 gap-4 mb-8">
                    @foreach(__('messages.safety.sterilization_points') as $point)
                    <li class="flex items-start text-gray-700">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 text-lg flex-shrink-0"></i>
                        <span class="font-medium">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="bg-indigo-50/50 border-l-4 border-indigo-600 p-4 rounded-r-xl">
                    <p class="text-indigo-950 font-medium italic text-base">
                        {{!! __('messages.safety.sterilization_footer') !!}}
                    </p>
                </div>
            </div>
        </div>

        <!-- TECHNOLOGY -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 transition duration-300 hover:shadow-md">
            <div class="max-w-4xl">
                <h2 class="text-2xl md:text-3xl font-bold text-indigo-900 mb-4">
                    {{ __('messages.safety.technology_title') }}
                </h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    {{ __('messages.safety.technology_desc') }}
                </p>

                <ul class="grid md:grid-cols-2 gap-4 mb-8">
                    @foreach(__('messages.safety.technology_points') as $point)
                    <li class="flex items-start text-gray-700">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 text-lg flex-shrink-0"></i>
                        <span class="font-medium">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="bg-indigo-50/50 border-l-4 border-indigo-600 p-4 rounded-r-xl">
                    <p class="text-indigo-950 font-medium italic text-base">
                        {{ __('messages.safety.technology_footer') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- IMPLANTS -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 transition duration-300 hover:shadow-md">
            <div class="max-w-4xl">
                <h2 class="text-2xl md:text-3xl font-bold text-indigo-900 mb-4">
                    {{ __('messages.safety.implant_title') }}
                </h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    {{ __('messages.safety.implant_desc') }}
                </p>

                <ul class="grid md:grid-cols-2 gap-4 mb-8">
                    @foreach(__('messages.safety.implant_points') as $point)
                    <li class="flex items-start text-gray-700">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 text-lg flex-shrink-0"></i>
                        <span class="font-medium">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="bg-indigo-50/50 border-l-4 border-indigo-600 p-4 rounded-r-xl">
                    <p class="text-indigo-950 font-medium italic text-base">
                        {{ __('messages.safety.implant_footer') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- RADIOGRAPHIC -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 transition duration-300 hover:shadow-md">
            <div class="max-w-4xl">
                <h2 class="text-2xl md:text-3xl font-bold text-indigo-900 mb-4">
                    {{ __('messages.safety.radiographic_title') }}
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-0">
                    {!! __('messages.safety.radiographic_desc') !!}
                </p>
            </div>
        </div>

        <!-- CROSS BORDER -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 transition duration-300 hover:shadow-md">
            <div class="max-w-4xl">
                <h2 class="text-2xl md:text-3xl font-bold text-indigo-900 mb-4">
                    {{ __('messages.safety.cross_border_title') }}
                </h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    {!! __('messages.safety.cross_border_desc') !!}
                </p>

                <ul class="grid md:grid-cols-2 gap-4 mb-8">
                    @foreach(__('messages.safety.cross_border_points') as $point)
                    <li class="flex items-start text-gray-700">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 text-lg flex-shrink-0"></i>
                        <span class="font-medium">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="bg-indigo-50/50 border-l-4 border-indigo-600 p-4 rounded-r-xl">
                    <p class="text-indigo-950 font-medium italic text-base">
                        {{ __('messages.safety.cross_border_footer') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- ETHICS -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 transition duration-300 hover:shadow-md">
            <div class="max-w-4xl">
                <h2 class="text-2xl md:text-3xl font-bold text-indigo-900 mb-4">
                    {{ __('messages.safety.ethics_title') }}
                </h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    {{ __('messages.safety.ethics_desc') }}
                </p>

                <ul class="grid md:grid-cols-2 gap-4 mb-8">
                    @foreach(__('messages.safety.ethics_points') as $point)
                    <li class="flex items-start text-gray-700">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 text-lg flex-shrink-0"></i>
                        <span class="font-medium">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="bg-indigo-50/50 border-l-4 border-indigo-600 p-4 rounded-r-xl">
                    <p class="text-indigo-950 font-medium italic text-base">
                        {{ __('messages.safety.ethics_footer') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- ENVIRONMENT -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 transition duration-300 hover:shadow-md">
            <div class="max-w-4xl">
                <h2 class="text-2xl md:text-3xl font-bold text-indigo-900 mb-4">
                    {{ __('messages.safety.environment_title') }}
                </h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    {{ __('messages.safety.environment_desc') }}
                </p>

                <ul class="grid md:grid-cols-2 gap-4 mb-8">
                    @foreach(__('messages.safety.environment_points') as $point)
                    <li class="flex items-start text-gray-700">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 text-lg flex-shrink-0"></i>
                        <span class="font-medium">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="bg-indigo-50/50 border-l-4 border-indigo-600 p-4 rounded-r-xl">
                    <p class="text-indigo-950 font-medium italic text-base">
                        {{ __('messages.safety.environment_footer') }}
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- FINAL CTA -->
<section class="py-20 px-6 bg-indigo-800 text-white text-center">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl md:text-5xl font-bold mb-6">
            {{ __('messages.safety.title') }}
        </h2>

        <p class="text-lg text-indigo-100 mb-8 max-w-2xl mx-auto">
            {{ __('messages.safety.intro_2') }}
        </p>

        <a href="{{ route('contact') }}" class="bg-white text-indigo-800 font-bold px-10 py-4 rounded-full hover:bg-gray-100 transition shadow-lg">
            {{ __('messages.full_arch_implants.hero.cta_primary') }}
        </a>
    </div>
</section>

<x-contact-map />

</main>

@endsection