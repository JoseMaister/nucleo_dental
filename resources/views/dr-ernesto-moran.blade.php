@extends('layouts.app')

@section('title', __('messages.meet_dr_moran.meta_title') . ' - ' . config('app.name'))

@section('content')
<main class="bg-slate-50 min-h-screen">
    <!-- Hero Section -->
    <section class="relative bg-slate-900 overflow-hidden py-24 md:py-32">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/90 to-slate-950 z-10"></div>
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-900/20 via-transparent to-transparent z-10"></div>
        </div>

        <div class="container mx-auto px-4 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image Container with Premium Frames -->
                <div class="w-full lg:w-4/12 flex justify-center">
                    <div class="relative w-72 h-96 md:w-80 md:h-[450px]">
                        <!-- Decorative back elements -->
                        <div class="absolute -inset-4 rounded-3xl bg-gradient-to-tr from-blue-600 to-indigo-600 opacity-20 blur-lg animate-pulse"></div>
                        <div class="absolute inset-0 rounded-3xl border border-blue-500/30 -rotate-3 scale-102"></div>
                        <div class="absolute inset-0 rounded-3xl border border-indigo-500/20 rotate-3 scale-102"></div>
                        
                        <!-- Main Portrait Frame -->
                        <div class="w-full h-full rounded-3xl overflow-hidden shadow-2xl border border-slate-700/50 relative group">
                            <img src="{{ asset('images/IMG_100188.webp') }}" alt="Dr. Ernesto Moran" class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-80"></div>
                        </div>
                    </div>
                </div>

                <!-- Text & Main CTA -->
                <div class="w-full lg:w-8/12 text-white">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-600/20 border border-blue-500/30 text-blue-400 text-sm font-bold uppercase tracking-wider mb-6">
                        <i class="fas fa-award"></i> Chief Specialist
                    </div>
                    
                    <h1 class="text-4xl md:text-6xl font-bold tracking-tight leading-none mb-4 text-white">
                        {{ __('messages.meet_dr_moran.headline') }}
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-blue-300 font-medium mb-4 whitespace-pre-line leading-snug">
                        {{ __('messages.meet_dr_moran.subheadline') }}
                    </p>
                    
                    <p class="text-lg text-slate-400 mb-8 max-w-2xl border-l-4 border-blue-600 pl-4 italic">
                        "{{ __('messages.meet_dr_moran.trust_line') }}"
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="#contact" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl transition-all duration-300 transform hover:-translate-y-0.5 shadow-lg shadow-blue-600/20">
                            {{ __('messages.meet_dr_moran.cta_consultation') }}
                        </a>
                        <button onclick="openDoctorVideo('moran-videos')" class="px-8 py-4 bg-slate-800 hover:bg-slate-700 text-white font-bold rounded-xl transition-all duration-300 transform hover:-translate-y-0.5 border border-slate-700 flex items-center gap-3">
                            <span class="w-6 h-6 rounded-full bg-blue-600 flex items-center justify-center text-xs">
                                <i class="fas fa-play ml-0.5"></i>
                            </span>
                            {{ __('messages.meet_dr_moran.cta_video') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Authority Snapshot Section -->
    <section class="py-20 -mt-10 relative z-30">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-slate-100 max-w-5xl mx-auto">
                <h2 class="text-3xl font-bold text-slate-900 mb-10 text-center">
                    {{ __('messages.meet_dr_moran.authority_snapshot_title') }}
                </h2>
                
                <div class="grid md:grid-cols-2 gap-6 mb-10">
                    @foreach(__('messages.meet_dr_moran.authority_snapshot_items') as $item)
                        <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-slate-50 transition-colors">
                            <span class="w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 flex-shrink-0 mt-0.5">
                                <i class="fas fa-check text-xs"></i>
                            </span>
                            <p class="text-slate-700 font-medium">{{ $item }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="border-t border-slate-100 pt-8 text-center">
                    <p class="text-xl md:text-2xl font-bold text-blue-800 italic">
                        "{{ __('messages.meet_dr_moran.authority_snapshot_killer_line') }}"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Dr. Moran Section -->
    <section class="py-20 bg-slate-900 text-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <div class="lg:w-1/3">
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white mb-6 sticky top-24">
                        {{ __('messages.meet_dr_moran.about_title') }}
                    </h2>
                </div>
                <div class="lg:w-2/3 space-y-6 text-slate-300 text-lg leading-relaxed">
                    @foreach(__('messages.meet_dr_moran.about_paragraphs') as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Education, Leadership & Affiliations Grid -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-16 text-center">
                {{ __('messages.meet_dr_moran.education_title') }}
            </h2>

            <div class="grid md:grid-cols-2 gap-8 mb-16">
                <!-- Left Panel: Experience & Leadership -->
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xs uppercase tracking-widest text-blue-600 font-bold mb-6">
                            {{ __('messages.meet_dr_moran.education_experience_label') }}
                        </h3>
                        <div class="flex items-center gap-4 mb-8">
                            <span class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center text-xl flex-shrink-0">
                                <i class="fas fa-history"></i>
                            </span>
                            <p class="text-lg font-bold text-slate-800">{{ __('messages.meet_dr_moran.education_experience_val') }}</p>
                        </div>

                        <h3 class="text-xs uppercase tracking-widest text-blue-600 font-bold mb-6">
                            {{ __('messages.meet_dr_moran.education_leadership_label') }}
                        </h3>
                        <ul class="space-y-4">
                            @foreach(__('messages.meet_dr_moran.education_leadership_items') as $item)
                                <li class="flex items-start gap-3 text-slate-700">
                                    <span class="text-blue-500 mt-1"><i class="fas fa-university"></i></span>
                                    <span class="font-medium">{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Right Panel: Academic Contributions -->
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xs uppercase tracking-widest text-blue-600 font-bold mb-6">
                            {{ __('messages.meet_dr_moran.education_academic_label') }}
                        </h3>
                        <ul class="space-y-6">
                            @foreach(__('messages.meet_dr_moran.education_academic_items') as $item)
                                <li class="flex items-start gap-4">
                                    <span class="w-10 h-10 rounded-xl bg-blue-100/50 text-blue-600 flex items-center justify-center text-lg flex-shrink-0 mt-0.5">
                                        <i class="fas fa-graduation-cap"></i>
                                    </span>
                                    <p class="text-slate-700 font-medium leading-snug">{{ $item }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Professional Recognition -->
            <div class="bg-slate-900 rounded-3xl p-8 md:p-12 text-white shadow-2xl relative overflow-hidden">
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-blue-600/10 rounded-full blur-3xl"></div>
                
                <h3 class="text-2xl font-bold mb-8 text-center text-white">
                    {{ __('messages.meet_dr_moran.recognition_title') }}
                </h3>
                
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach(__('messages.meet_dr_moran.recognition_items') as $item)
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-slate-800/40 border border-slate-800 hover:border-slate-700 transition-colors">
                            <span class="w-8 h-8 rounded-xl bg-blue-600/20 text-blue-400 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-certificate"></i>
                            </span>
                            <p class="text-slate-300 font-medium">{{ $item }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Clinical Expertise Section -->
    <section class="py-24 bg-slate-50 border-t border-slate-100">
        <div class="container mx-auto px-4 max-w-5xl">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-16 text-center">
                {{ __('messages.meet_dr_moran.expertise_title') }}
            </h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach(__('messages.meet_dr_moran.expertise_items') as $item)
                    <div class="bg-white p-8 rounded-3xl border border-slate-200/60 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-850 mb-2">{{ $item }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Patient Confidence Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-8 leading-tight">
                        {{ __('messages.meet_dr_moran.confidence_title') }}
                    </h2>
                    
                    <div class="space-y-6 text-slate-650 text-lg leading-relaxed">
                        @foreach(__('messages.meet_dr_moran.confidence_paragraphs') as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="lg:w-1/2 relative w-full">
                    <!-- Image collage/frame -->
                    <div class="absolute inset-0 bg-blue-600/5 rounded-[40px] rotate-3 scale-98  "></div>
                    <img src="{{ asset('images/100338.webp') }}" class="rounded-[40px] shadow-2xl relative z-10 w-full object-cover aspect-video object-position-top" alt="Patient Trust">
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-20 bg-slate-900 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/65 to-slate-950 z-10"></div>
        </div>
        
        <div class="container mx-auto px-4 max-w-4xl text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">
                {{ __('messages.meet_dr_moran.final_cta_title') }}
            </h2>
            <p class="text-xl text-slate-400 mb-12 leading-relaxed max-w-2xl mx-auto">
                {{ __('messages.meet_dr_moran.final_cta_body') }}
            </p>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="#contact" class="px-10 py-5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-2xl transition-all duration-300 transform hover:-translate-y-1 shadow-lg shadow-blue-600/25 text-lg">
                    {{ __('messages.meet_dr_moran.final_cta_primary') }}
                </a>
                <a href="#contact" class="px-10 py-5 bg-white/10 hover:bg-white/20 text-white font-bold rounded-2xl transition-all duration-300 border border-white/10 text-lg">
                    {{ __('messages.meet_dr_moran.final_cta_secondary') }}
                </a>
            </div>
        </div>
    </section>

    <x-contact-map />
</main>

<!-- Video Swiper Modal -->
<div id="moran-videos" class="fixed inset-0 bg-black/90 z-[999] hidden flex items-center justify-center p-4">
    <div class="relative bg-black rounded-3xl overflow-hidden w-full max-w-4xl aspect-video shadow-2xl">
        <button onclick="closeDoctorVideo('moran-videos')" class="absolute top-4 right-4 z-50 w-10 h-10 flex items-center justify-center rounded-full bg-slate-900/80 text-white hover:bg-slate-800 transition-colors text-lg font-bold">
            ✕
        </button>

        <div class="swiper h-full w-full" id="swiper-moran-videos">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex items-center justify-center bg-black">
                    <video class="w-full h-full object-contain" controls preload="auto">
                        <source src="{{ asset('images/videos/moran_ortodoncia.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="swiper-slide flex items-center justify-center bg-black">
                    <video class="w-full h-full object-contain" controls preload="auto">
                        <source src="{{ asset('images/videos/moran_implantes.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
let pageSwiper = null;

function openDoctorVideo(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.remove('hidden');
    
    if (!pageSwiper) {
        pageSwiper = new Swiper('#swiper-moran-videos', {
            loop: true,
            pagination: {
                el: '#swiper-moran-videos .swiper-pagination',
                clickable: true,
            },
            on: {
                slideChange() {
                    pauseAllVideos();
                }
            }
        });
    }
}

function pauseAllVideos() {
    const container = document.getElementById('swiper-moran-videos');
    container.querySelectorAll('video').forEach(v => {
        v.pause();
    });
}

function closeDoctorVideo(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.add('hidden');
    pauseAllVideos();
}
</script>
@endsection
