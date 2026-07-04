@extends('layouts.app')

@section('title', __('messages.page_titles.meet_doctors') . ' - ' . config('app.name'))

@section('content')
<main>

<!-- HERO -->
<div class="relative w-full min-h-[540px] bg-cover bg-center flex items-center justify-center"
     style="background-image: url('https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=2070&q=80');">

    <div class="absolute inset-0 bg-indigo-950/75"></div>

    <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-8 text-center text-white py-24">
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

        <p class="text-lg md:text-xl max-w-4xl mx-auto text-indigo-100 mb-6">
            {{ __('messages.meet_doctors.page.subtitle') }}
        </p>

        <p class="text-base text-indigo-300 italic mb-8">
            {{ __('messages.meet_doctors.page.trust_line') }}
        </p>

        <a href="{{ route('contact') }}"
           class="inline-block bg-white text-indigo-900 font-bold px-8 py-4 rounded-xl hover:bg-indigo-50 transition-colors shadow-lg">
            {{ __('messages.meet_doctors.page.cta_button') }}
        </a>
    </div>
</div>

<!-- HIGHER STANDARD -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6">
            {{ __('messages.meet_doctors.higher_standard.title') }}
        </h2>

        <p class="text-lg text-gray-600 mb-4">
            {{ __('messages.meet_doctors.higher_standard.content') }}
        </p>

        <p class="text-lg text-gray-600 mb-4">
            {{ __('messages.meet_doctors.higher_standard.content_2') }}
        </p>

        <p class="text-base font-semibold text-gray-800 mb-6">
            {{ __('messages.meet_doctors.higher_standard.content_3') }}
        </p>

        <div class="grid md:grid-cols-2 gap-5 mb-10">
            @foreach(['point_1','point_2','point_3','point_4'] as $p)
                <div class="flex items-center gap-3 p-5 shadow-sm border border-gray-100 rounded-xl text-left">
                    <span class="w-7 h-7 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-check text-xs"></i>
                    </span>
                    <span class="text-gray-700 font-medium">{{ __("messages.meet_doctors.higher_standard.$p") }}</span>
                </div>
            @endforeach
        </div>

        <p class="text-2xl font-bold text-indigo-700">
            {{ __('messages.meet_doctors.higher_standard.killer') }}
        </p>
    </div>
</section>

<!-- DR. ERNESTO MORAN SPOTLIGHT -->
<section class="py-20 bg-white border-t border-gray-100">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-14 items-start">
            <!-- Image -->
            <div class="lg:w-5/12 flex-shrink-0">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl aspect-[4/5] w-full max-w-md mx-auto lg:mx-0">
                    <img src="{{ asset('images/IMG_100188.webp') }}" alt="Dr. Ernesto Moran"
                         class="w-full h-full object-cover object-top">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                    <div class="absolute top-6 left-6 right-6">
                        <span class="inline-block bg-white/20 backdrop-blur text-black text-sm font-semibold px-4 py-2 rounded-full border border-white/30">
                            {{ __('messages.meet_doctors.ernesto_spotlight.experience_tagline') }}
                        </span>
                    </div>

                    
                    <div class="absolute bottom-4 inset-x-0 flex justify-center z-50">
                        <button
                            type="button"
                            onclick="openDoctorVideo('moran-spotlight')"
                            class="flex items-center gap-2 px-5 py-3 rounded-full bg-white text-blue-700 font-medium shadow-lg"
                        >
                            <span class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-4 h-4 ml-0.5 fill-white">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </span>
                            <span>{{ __('messages.about.video') }}</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="lg:w-7/12">
                <div class="inline-flex items-center gap-2 text-indigo-600 text-xs font-bold uppercase tracking-widest mb-4">
                    <span class="w-8 h-px bg-indigo-400"></span>
                    Chief Periodontist • Implantologist
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4 leading-tight">
                    Dr. Ernesto Moran
                </h2>
                <p class="text-lg text-indigo-700 font-semibold mb-6">
                    {{ __('messages.meet_doctors.ernesto_spotlight.short_intro') }}
                </p>

                <div class="space-y-4 text-gray-600 text-base leading-relaxed mb-8">
                    <p>{{ __('messages.meet_doctors.ernesto_spotlight.bio_1') }}</p>
                    <p>{{ __('messages.meet_doctors.ernesto_spotlight.bio_2') }}</p>
                    <p>{{ __('messages.meet_doctors.ernesto_spotlight.bio_3') }}</p>
                    <p>{{ __('messages.meet_doctors.ernesto_spotlight.bio_4') }}</p>
                </div>

                <!-- Expertise -->
                <p class="text-sm font-bold uppercase tracking-widest text-slate-500 mb-3">
                    {{ __('messages.meet_doctors.ernesto_spotlight.expertise_title') }}
                </p>
                <ul class="space-y-2 mb-8">
                    @foreach(__('messages.meet_doctors.ernesto_spotlight.expertise_items') as $item)
                        <li class="flex items-center gap-3 text-slate-700 font-medium">
                            <span class="w-5 h-5 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center flex-shrink-0 text-xs">
                                <i class="fas fa-check"></i>
                            </span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

                <!-- Killer line -->
                <div class="border-l-4 border-indigo-500 pl-5">
                    <p class="text-xl font-bold text-slate-900 italic leading-snug">
                        "{{ __('messages.meet_doctors.ernesto_spotlight.killer') }}"
                    </p>
                </div>

                <div class="mt-6">
                    <a href="{{ route('dr-ernesto-moran') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold transition-all duration-300 transform hover:-translate-y-0.5 shadow-md shadow-blue-600/15">
                        {{ __('messages.global_sections.learn_more') }} <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Ernesto Moran Spotlight Video Modal --}}
<div
    id="modal-moran-spotlight"
    class="fixed inset-0 bg-black/80 z-[999] hidden flex items-center justify-center p-2 sm:p-4 md:p-6"
>
    <div class="relative bg-black rounded-lg overflow-hidden w-full h-full sm:h-auto sm:w-[90%] md:w-[85%] lg:w-[80%] xl:max-w-5xl sm:aspect-video max-w-[95vw]">
        <button
            onclick="closeDoctorVideo('moran-spotlight')"
            class="absolute top-2 right-2 sm:top-3 sm:right-3 z-30 w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center rounded-full bg-black/70 text-white text-lg sm:text-xl"
        >✕</button>

        <div class="swiper h-full w-full" id="swiper-moran-spotlight">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex items-center justify-center bg-black">
                    <video class="w-full h-full object-contain max-w-full max-h-full" playsinline preload="auto" muted controls>
                        <source src="{{ asset('images/videos/moran_ortodoncia.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="swiper-slide flex items-center justify-center bg-black">
                    <video class="w-full h-full object-contain max-w-full max-h-full" playsinline preload="auto" muted controls>
                        <source src="{{ asset('images/videos/moran_implantes.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<!-- DR. JULIO NEVÁREZ SPOTLIGHT -->
<section class="py-20 bg-slate-50 border-t border-slate-100">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col lg:flex-row-reverse gap-14 items-start">
            <!-- Image -->
            <div class="lg:w-5/12 flex-shrink-0">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl aspect-[4/5] w-full max-w-md mx-auto lg:mx-0">
                    <img src="{{ asset('images/IMG_100190.webp') }}" alt="Dr. Julio Nevárez"
                         class="w-full h-full object-cover object-top">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                    <div class="absolute top-6 left-6 right-6">
                        <span class="inline-block bg-white/30 backdrop-blur text-black text-sm font-semibold px-4 py-2 rounded-full border border-white/30">
                            {{ __('messages.meet_doctors.julio_spotlight.experience_tagline') }}
                        </span>
                    </div>

                    <div class="absolute bottom-4 inset-x-0 flex justify-center z-50">
                        <button
                            type="button"
                            onclick="openDoctorVideo('julio-spotlight')"
                            class="flex items-center gap-2 px-5 py-3 rounded-full bg-white text-blue-700 font-medium shadow-lg"
                        >
                            <span class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-4 h-4 ml-0.5 fill-white">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </span>
                            <span>{{ __('messages.about.video') }}</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="lg:w-7/12">
                <div class="inline-flex items-center gap-2 text-indigo-600 text-xs font-bold uppercase tracking-widest mb-4">
                    <span class="w-8 h-px bg-indigo-400"></span>
                    Prosthodontist • Cosmetic Dentist • Implantologist
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4 leading-tight">
                    Dr. Julio Nevárez
                </h2>
                <p class="text-lg text-indigo-700 font-semibold mb-6">
                    {{ __('messages.meet_doctors.julio_spotlight.short_intro') }}
                </p>

                <div class="space-y-4 text-gray-600 text-base leading-relaxed mb-8">
                    <p>{{ __('messages.meet_doctors.julio_spotlight.bio_1') }}</p>
                    <p>{{ __('messages.meet_doctors.julio_spotlight.bio_2') }}</p>
                    <p>{{ __('messages.meet_doctors.julio_spotlight.bio_3') }}</p>
                    <p>{{ __('messages.meet_doctors.julio_spotlight.bio_4') }}</p>
                </div>

                <!-- Expertise -->
                <p class="text-sm font-bold uppercase tracking-widest text-slate-500 mb-3">
                    {{ __('messages.meet_doctors.julio_spotlight.expertise_title') }}
                </p>
                <ul class="space-y-2 mb-8">
                    @foreach(__('messages.meet_doctors.julio_spotlight.expertise_items') as $item)
                        <li class="flex items-center gap-3 text-slate-700 font-medium">
                            <span class="w-5 h-5 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center flex-shrink-0 text-xs">
                                <i class="fas fa-check"></i>
                            </span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

                <!-- Killer line -->
                <div class="border-l-4 border-indigo-500 pl-5">
                    <p class="text-xl font-bold text-slate-900 italic leading-snug">
                        "{{ __('messages.meet_doctors.julio_spotlight.killer') }}"
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Julio Nevárez Spotlight Video Modal --}}
<div
    id="modal-julio-spotlight"
    class="fixed inset-0 bg-black/80 z-[999] hidden flex items-center justify-center p-2 sm:p-4 md:p-6"
>
    <div class="relative bg-black rounded-lg overflow-hidden w-full h-full sm:h-auto sm:w-[90%] md:w-[85%] lg:w-[80%] xl:max-w-5xl sm:aspect-video max-w-[95vw]">
        <button
            onclick="closeDoctorVideo('julio-spotlight')"
            class="absolute top-2 right-2 sm:top-3 sm:right-3 z-30 w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center rounded-full bg-black/70 text-white text-lg sm:text-xl"
        >✕</button>

        <div class="swiper h-full w-full" id="swiper-julio-spotlight">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex items-center justify-center bg-black">
                    <video class="w-full h-full object-contain max-w-full max-h-full" playsinline preload="auto" muted controls>
                        <source src="{{ asset('images/videos/julio_cosmetics.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="swiper-slide flex items-center justify-center bg-black">
                    <video class="w-full h-full object-contain max-w-full max-h-full" playsinline preload="auto" muted controls>
                        <source src="{{ asset('images/videos/julio_implants.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<!-- WORKING TOGETHER -->
<section class="py-20 bg-indigo-950 text-white">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-8">
            {{ __('messages.meet_doctors.working_together.title') }}
        </h2>

        <div class="space-y-4 text-indigo-100 text-lg mb-10 max-w-3xl mx-auto">
            <p>{{ __('messages.meet_doctors.working_together.content_1') }}</p>
            <p>{{ __('messages.meet_doctors.working_together.content_2') }}</p>
            <p class="font-semibold text-white">{{ __('messages.meet_doctors.working_together.content_3') }}</p>
        </div>

        <div class="grid md:grid-cols-2 gap-5 mb-10 max-w-3xl mx-auto">
            @foreach(['item_1','item_2','item_3','item_4'] as $item)
                <div class="flex items-center gap-4 bg-white/10 border border-white/10 rounded-xl p-5 text-left">
                    <span class="w-7 h-7 rounded-full bg-indigo-400/30 text-indigo-200 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-check text-xs"></i>
                    </span>
                    <span class="text-indigo-100 font-medium">{{ __("messages.meet_doctors.working_together.$item") }}</span>
                </div>
            @endforeach
        </div>

        <p class="text-2xl font-bold text-indigo-200">
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
<script>
    function openDoctorVideo(id) {
    const modal = document.getElementById('modal-' + id);
    modal.classList.remove('hidden');

    if (!doctorSwipers[id]) {
        doctorSwipers[id] = new Swiper('#swiper-' + id, {
            loop: true,
            pagination: {
                el: '#swiper-' + id + ' .swiper-pagination',
                clickable: true,
            },
            on: {
                slideChangeTransitionEnd() {
                    playActiveVideo(id);
                }
            }
        });
    }

    setTimeout(() => {
        playActiveVideo(id);
    }, 200);
}
</script>
@endsection

