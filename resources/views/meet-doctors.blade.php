@extends('layouts.app')

@section('title', __('messages.page_titles.meet_doctors') . ' - ' . config('app.name'))

@section('content')
<main>

<!-- HERO -->
<div class="relative w-full h-[500px] bg-cover bg-center flex items-center justify-center"
     style="background-image: url('https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=2070&q=80');">

    <div class="absolute inset-0 bg-indigo-950/70"></div>

    <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-8 text-center text-white">
        <p class="uppercase tracking-[0.3em] text-sm md:text-base font-semibold text-indigo-200 mb-5">
            {{ __('messages.meet_doctors.page.overline') }}
        </p>

        <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold leading-tight mb-6">
            {{ __('messages.meet_doctors.page.title_line_1') }}
            <br>
            <span class="text-indigo-200 text-xl md:text-2xl font-medium">
                {{ __('messages.meet_doctors.page.title_line_2') }}
            </span>
        </h1>

        <p class="text-lg md:text-xl max-w-4xl mx-auto text-indigo-100">
            {{ __('messages.meet_doctors.page.subtitle') }}
        </p>
    </div>
</div>

<!-- HIGHER STANDARD -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6">
            {{ __('messages.meet_doctors.higher_standard.title') }}
        </h2>

        <p class="text-lg text-gray-600 mb-10">
            {{ __('messages.meet_doctors.higher_standard.content') }}
        </p>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="p-6 shadow rounded-xl">{{ __('messages.meet_doctors.higher_standard.point_1') }}</div>
            <div class="p-6 shadow rounded-xl">{{ __('messages.meet_doctors.higher_standard.point_2') }}</div>
            <div class="p-6 shadow rounded-xl">{{ __('messages.meet_doctors.higher_standard.point_3') }}</div>
            <div class="p-6 shadow rounded-xl">{{ __('messages.meet_doctors.higher_standard.point_4') }}</div>
        </div>

        <p class="mt-10 text-2xl font-bold text-indigo-700">
            {{ __('messages.meet_doctors.higher_standard.killer') }}
        </p>
    </div>
</section>

{{-- TUS DOCTORES AQUI --}}

<!-- WORKING TOGETHER -->
<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6">
            {{ __('messages.meet_doctors.working_together.title') }}
        </h2>

        <p class="text-lg text-gray-600">
            {{ __('messages.meet_doctors.working_together.content') }}
        </p>

        <p class="mt-8 text-2xl font-bold text-indigo-700">
            {{ __('messages.meet_doctors.working_together.killer') }}
        </p>
    </div>
</section>

<!-- TECHNOLOGY -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-10">
            {{ __('messages.meet_doctors.technology.title') }}
        </h2>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="p-6 shadow rounded-xl">{{ __('messages.meet_doctors.technology.item_1') }}</div>
            <div class="p-6 shadow rounded-xl">{{ __('messages.meet_doctors.technology.item_2') }}</div>
            <div class="p-6 shadow rounded-xl">{{ __('messages.meet_doctors.technology.item_3') }}</div>
            <div class="p-6 shadow rounded-xl">{{ __('messages.meet_doctors.technology.item_4') }}</div>
            <div class="p-6 shadow rounded-xl">{{ __('messages.meet_doctors.technology.item_5') }}</div>
            <div class="p-6 shadow rounded-xl">{{ __('messages.meet_doctors.technology.item_6') }}</div>
        </div>
    </div>
</section>
<!-- TRUST BUILDER -->
<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6">
            {{ __('messages.meet_doctors.trust.title') }}
        </h2>

        <p class="text-lg text-gray-600 max-w-4xl mx-auto">
            {{ __('messages.meet_doctors.trust.content') }}
        </p>
    </div>
</section>
<!-- CTA -->
<!-- CTA -->


    @php
// Ernesto
$ernestoName = __('messages.team.ernesto.name');
$ernestoSpecialties = [
    __('messages.specialties.chief_periodontist'),
    __('messages.specialties.implantologist')
];
$ernestoContent = __('messages.team.ernesto.content');
$ernestoSections = [
    [
        'title' => __('messages.team.ernesto.sections.authority.title'),
        'content' => __('messages.team.ernesto.sections.authority.content'),
    ],
    [
        'title' => __('messages.team.ernesto.sections.about.title'),
        'content' => __('messages.team.ernesto.sections.about.content'),
    ],
    [
        'title' => __('messages.team.ernesto.sections.education.title'),
        'content' => __('messages.team.ernesto.sections.education.content'),
    ],
    [
        'title' => __('messages.team.ernesto.sections.recognition.title'),
        'content' => __('messages.team.ernesto.sections.recognition.content'),
    ],
    [
        'title' => __('messages.team.ernesto.sections.expertise.title'),
        'content' => __('messages.team.ernesto.sections.expertise.content'),
    ],
    [
        'title' => __('messages.team.ernesto.sections.confidence.title'),
        'content' => __('messages.team.ernesto.sections.confidence.content'),
    ],
    [
        'title' => __('messages.team.ernesto.sections.cta.title'),
        'content' => __('messages.team.ernesto.sections.cta.content'),
    ],
];

// Julio
$julioName = __('messages.team.julio.name');
$julioSpecialties = [
    __('messages.specialties.prosthodontist'),
    __('messages.specialties.cosmetic_dentist'),
    __('messages.specialties.implantologist')
];
$julioContent = __('messages.team.julio.content');
$julioSections = [
    [
        'title' => __('messages.team.julio.sections.applied_studies.title'),
        'content' => __('messages.team.julio.sections.applied_studies.content')
    ],
    [
        'title' => __('messages.team.julio.sections.courses.title'),
        'content' => __('messages.team.julio.sections.courses.content')
    ]
];

// Jose
$joseName = __('messages.team.jose.name');
$joseSpecialties = [__('messages.specialties.maxillofacial_surgeon')];
$joseContent = __('messages.team.jose.content');
$joseSections = [];

// Sandra
$sandraName = __('messages.team.sandra.name');
$sandraSpecialties = [__('messages.specialties.pediatric_dentist')];
$sandraContent = __('messages.team.sandra.content');
$sandraSections = [];

// Adriana
$adrianaArmendarizName = __('messages.team.adriana_armendariz.name');
$adrianaArmendarizSpecialties = [__('messages.specialties.general_dentist')];
$adrianaArmendarizContent = __('messages.team.adriana_armendariz.content');
$adrianaArmendarizSections = [];

// Lori
$loriName = __('messages.team.lori.name');
$loriSpecialties = [__('messages.specialties.dental_concierge')];
$loriContent = __('messages.team.lori.content');

// Mario
$marioName = __('messages.team.mario.name');
$marioSpecialties = [__('messages.specialties.endodontist')];
$marioSections = [];

// Monica
$monicaName = __('messages.team.monica.name');
$monicaSpecialties = [__('messages.specialties.pediatric_dentist')];
$monicaSections = [];

// Paloma
$palomaName = __('messages.team.paloma.name');
$palomaSpecialties = [__('messages.specialties.orthodontist')];
$palomaContent = '';
$palomaSections = [];

// Valeria
$valeriaName = __('messages.team.valeria.name');
$valeriaSpecialties = [
    __('messages.specialties.periodontist'),
    __('messages.specialties.implantologist')
];
$valeriaContent = __('messages.team.valeria.content');
$valeriaSections = [];

// Liliana
$lilianaName = __('messages.team.liliana.name');
$lilianaSpecialties = [__('messages.specialties.pediatric_dentist')];
$lilianaContent = __('messages.team.liliana.content');
$lilianaSections = [];
@endphp

    <x-doctor-profile 
    :imageUrl="asset('images/IMG_100188.webp')"
    :name="$ernestoName"   
    :specialties="$ernestoSpecialties"
    :content="$ernestoContent"
    :sections="$ernestoSections"
    :showVideo="true"
    :videos="[
        asset('images/videos/moran_ortodoncia.mp4'),
        asset('images/videos/moran_implantes.mp4'),
    ]"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100190.webp')"
    :name="__('messages.team.julio.name')"
    :specialties="$julioSpecialties"
    :content="$julioContent"
    :sections="$julioSections"
    :showVideo="true"
    :videos="[
        asset('images/videos/julio_cosmetics.mp4'),
        asset('images/videos/julio_implants.mp4'),
    ]"
/>

<x-doctor-profile 
    :imageUrl="asset('images/SAM_0004_JPG.avif')"
    :name="__('messages.team.jose.name')"
    :specialties="$joseSpecialties"
    :content="$joseContent"
    :sections="$joseSections"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_1685.jpg')"
    :name="__('messages.team.sandra.name')"
    :specialties="$sandraSpecialties"
    :content="$sandraContent"
    :sections="$sandraSections"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100183.webp')"
    :name="$adrianaArmendarizName"
    :specialties="$adrianaArmendarizSpecialties"
    :content="$adrianaArmendarizContent"
    :sections="$adrianaArmendarizSections"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100187.webp')"
    :name="$loriName"
    :specialties="$loriSpecialties"
    :content="$loriContent"
    :sections="[]"
/>



<x-doctor-profile 
    :imageUrl="asset('images/IMG_100191.webp')"
    :name="$marioName"
    :specialties="$marioSpecialties"
    :sections="$marioSections"
    :showVideo="true"
    :videos="[
        asset('images/videos/mario_endodoncia.mp4')
    ]"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100184.webp')"
    :name="$monicaName"
    :specialties="$monicaSpecialties"
    :sections="$monicaSections"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100181.webp')"
    :name="$palomaName"
    :specialties="$palomaSpecialties"
    :content="$palomaContent"
    :sections="$palomaSections"
    :showVideo="true"
    :videos="[
        asset('images/videos/paloma_orthodontics.mp4')
    ]"
/>

<x-doctor-profile 
    :imageUrl="asset('images/valeria.webp')"
    :name="$valeriaName"
    :specialties="$valeriaSpecialties"
    :content="$valeriaContent"
    :sections="$valeriaSections"
/>


<x-doctor-profile 
    :imageUrl="asset('images/liliana.avif')"
    :name="$lilianaName"
    :specialties="$lilianaSpecialties"
    :content="$lilianaContent"
    :sections="$lilianaSections"
/>

<section class="py-24 bg-indigo-900 text-white text-center">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-5xl font-bold mb-6">
            {{ __('messages.meet_doctors.cta.title') }}
        </h2>

        <p class="text-xl mb-10">
            {{ __('messages.meet_doctors.cta.content') }}
        </p>

        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}"
               class="inline-block bg-white text-indigo-900 px-8 py-4 rounded-lg font-bold">
                {{ __('messages.meet_doctors.cta.button') }}
            </a>

            <a href="{{ route('contact') }}"
               class="inline-block border border-white px-8 py-4 rounded-lg font-bold">
                {{ __('messages.meet_doctors.cta.button_secondary') }}
            </a>
        </div>

        <p class="mt-6 text-indigo-200">
            {{ __('messages.meet_doctors.cta.reassurance') }}
        </p>
    </div>
</section>
<x-contact-map />

</main>
@endsection