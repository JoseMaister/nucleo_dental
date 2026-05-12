@extends('layouts.app')

@section('title', __('messages.gallery.seo.meta_title'))

@section('content')
    <!-- JSON Data Loading -->
    @php
        $casesData = json_decode(file_get_contents(resource_path('data/cases.json')), true);
        $featuredCases = array_filter($casesData, fn($c) => $c['featured']);
    @endphp

    <div x-data="{ 
        activeFilter: 'all',
        cases: {{ json_encode($casesData) }},
        filterLabels: {{ json_encode(__('messages.gallery.filters.labels')) }}
    }">

        <!-- HERO SECTION -->
        <section class="relative bg-gray-900 pt-32 pb-24 overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=2000" class="w-full h-full object-cover opacity-20 scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-gray-900"></div>
            </div>

            <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
                <span class="inline-block px-4 py-1.5 bg-indigo-500/20 backdrop-blur-md border border-indigo-400/30 text-indigo-300 text-xs font-bold rounded-full mb-6 uppercase tracking-[0.2em]">
                    {{ __('messages.gallery.hero.page_title') }}
                </span>
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white mb-8 leading-[1.1]">
                    {{ __('messages.gallery.hero.headline') }}
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10 leading-relaxed">
                    {{ __('messages.gallery.hero.subheadline') }}
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto bg-indigo-600 text-white px-10 py-5 rounded-full font-bold hover:bg-indigo-700 transition shadow-xl shadow-indigo-900/40">
                        {{ __('messages.gallery.hero.cta_primary') }}
                    </a>
                    <a href="#photo-submission" class="w-full sm:w-auto bg-white/10 backdrop-blur-md text-white border border-white/20 px-10 py-5 rounded-full font-bold hover:bg-white/20 transition">
                        {{ __('messages.gallery.hero.cta_secondary') }}
                    </a>
                </div>

                <div class="flex items-center justify-center gap-3 text-sm text-gray-400">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 rounded-full border-2 border-gray-900 bg-gray-800 flex items-center justify-center"><i class="fas fa-user-md text-[10px]"></i></div>
                        <div class="w-8 h-8 rounded-full border-2 border-gray-900 bg-gray-800 flex items-center justify-center"><i class="fas fa-check text-[10px] text-green-400"></i></div>
                    </div>
                    <p>{{ __('messages.gallery.hero.trust_line') }}</p>
                </div>
            </div>
        </section>

        <!-- INTRO SECTION -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-8 leading-tight">
                            {{ __('messages.gallery.intro.title') }}
                        </h2>
                        <div class="space-y-6 text-lg text-gray-600 leading-relaxed">
                            <p>{{ __('messages.gallery.intro.content') }}</p>
                        </div>
                        
                        <div class="mt-10 p-8 bg-gray-50 rounded-3xl border border-gray-100 italic text-gray-700">
                            <p class="text-xl font-medium">"{{ __('messages.gallery.intro.quote') }}"</p>
                            <p class="mt-4 font-bold text-indigo-700 text-sm uppercase tracking-widest">— {{ __('messages.gallery.intro.quote_author') }}</p>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1593059075122-728248df9bd2?q=80&w=1200" class="w-full h-full object-cover">
                        </div>
                        <!-- Floating Badge -->
                        <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-2xl border border-gray-50 flex items-center gap-4 max-w-xs">
                            <div class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center shrink-0">
                                <i class="fas fa-shield-alt text-xl"></i>
                            </div>
                            <p class="text-sm font-bold text-gray-900 leading-snug">
                                {{ __('messages.gallery.intro.experience_badge') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FILTERS & GRID -->
        <section class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">{{ __('messages.gallery.filters.title') }}</h2>
                    
                    <!-- Filter Pills -->
                    <div class="flex flex-wrap justify-center gap-3 mt-10">
                        @foreach(__('messages.gallery.filters.labels') as $key => $label)
                        <button @click="activeFilter = '{{ $key }}'" 
                                :class="activeFilter === '{{ $key }}' ? 'bg-indigo-700 text-white shadow-lg shadow-indigo-200' : 'bg-white text-gray-600 hover:bg-gray-100'"
                                class="px-6 py-3 rounded-full text-sm font-bold transition-all duration-300 border border-transparent">
                            {{ $label }}
                        </button>
                        @endforeach
                    </div>
                </div>

                <!-- Featured Section (Only when filter is 'all') -->
                <div x-show="activeFilter === 'all'" x-transition:enter="duration-500 ease-out">
                    <div class="flex items-center justify-between mb-10">
                        <h3 class="text-2xl font-bold text-gray-900 flex items-center gap-3">
                            <span class="w-8 h-[2px] bg-indigo-600"></span>
                            {{ __('messages.gallery.featured.title') }}
                        </h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                        @foreach($featuredCases as $case)
                            <x-gallery-card :case="$case" />
                        @endforeach
                    </div>
                </div>

                <!-- Full Gallery Grid -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-10 flex items-center gap-3" x-show="activeFilter !== 'all'">
                        <span class="w-8 h-[2px] bg-indigo-600"></span>
                        <span x-text="activeFilter === 'all' ? '{{ __('messages.gallery.full_grid.title') }}' : '{{ __('messages.gallery.full_grid.results_for') }}' + filterLabels[activeFilter]"></span>
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($casesData as $case)
                            <div x-show="(activeFilter === 'all' && !{{ $case['featured'] ? 'true' : 'false' }}) || (activeFilter !== 'all' && activeFilter === '{{ $case['category'] }}')"
                                 x-transition:enter="duration-300 ease-out"
                                 x-transition:enter-start="opacity-0 scale-95"
                                 x-transition:enter-end="opacity-100 scale-100">
                                <x-gallery-card :case="$case" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- TRUST SECTION -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="bg-gray-900 rounded-[3rem] p-10 md:p-20 relative overflow-hidden shadow-3xl">
                    <div class="absolute top-0 right-0 w-1/2 h-full opacity-10">
                        <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=1000" class="w-full h-full object-cover">
                    </div>
                    
                    <div class="relative z-10">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                            <div>
                                <h2 class="text-3xl md:text-5xl font-bold text-white mb-8 leading-tight">
                                    {{ __('messages.gallery.trust.title') }}
                                </h2>
                                <div class="space-y-6 text-gray-400 text-lg">
                                    <p>{{ __('messages.gallery.trust.content_1') }}</p>
                                    <p>{{ __('messages.gallery.trust.content_2') }}</p>
                                </div>
                                
                                <div class="mt-10 space-y-4">
                                    @foreach(__('messages.gallery.trust.highlights') as $highlight)
                                    <div class="flex items-center gap-4 text-white">
                                        <div class="w-6 h-6 bg-indigo-600 rounded-full flex items-center justify-center shrink-0">
                                            <i class="fas fa-check text-[10px]"></i>
                                        </div>
                                        <span class="font-medium">{{ $highlight }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-10 rounded-[2rem] text-center">
                                <i class="fas fa-quote-left text-4xl text-indigo-500 mb-6"></i>
                                <p class="text-2xl text-white font-bold leading-relaxed mb-8">
                                    {{ __('messages.gallery.trust.killer') }}
                                </p>
                                <a href="{{ route('contact') }}" class="inline-block bg-white text-gray-900 px-10 py-5 rounded-full font-bold hover:bg-gray-100 transition">
                                    {{ __('messages.gallery.hero.cta_primary') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TRAVEL SUPPORT SECTION -->
        <section class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="aspect-video rounded-3xl overflow-hidden shadow-2xl relative group">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1200" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                            <div class="absolute inset-0 bg-indigo-900/20 group-hover:bg-transparent transition duration-500"></div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <span class="text-indigo-600 font-bold uppercase tracking-widest text-sm mb-4 block">{{ __('messages.gallery.tourism.badge') }}</span>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-8 leading-tight">
                            {{ __('messages.gallery.tourism.title') }}
                        </h2>
                        <div class="space-y-6 text-lg text-gray-600 leading-relaxed mb-10">
                            <p>{{ __('messages.gallery.tourism.content') }}</p>
                            <p>{{ __('messages.gallery.tourism.supporting') }}</p>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ route('dental-tourism') }}" class="bg-white border-2 border-gray-200 text-gray-900 px-8 py-4 rounded-full font-bold hover:border-indigo-600 hover:text-indigo-600 transition text-center">
                                {{ __('messages.gallery.tourism.cta_primary') }}
                            </a>
                            <a href="{{ route('contact') }}" class="bg-indigo-700 text-white px-8 py-4 rounded-full font-bold hover:bg-indigo-800 transition text-center">
                                {{ __('messages.gallery.tourism.cta_secondary') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PHOTO SUBMISSION -->
        <section id="photo-submission" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="bg-gradient-to-br from-indigo-700 to-indigo-900 rounded-[3rem] p-10 md:p-20 text-center relative overflow-hidden">
                    <div class="relative z-10 max-w-3xl mx-auto">
                        <div class="w-20 h-20 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center mx-auto mb-10 border border-white/20">
                            <i class="fas fa-camera text-3xl text-white"></i>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-white mb-8">
                            {{ __('messages.gallery.photo_submission.title') }}
                        </h2>
                        <p class="text-xl text-indigo-100 mb-12 leading-relaxed">
                            {{ __('messages.gallery.photo_submission.content') }}
                        </p>
                        
                        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-8">
                            <a href="{{ route('contact') }}" class="bg-white text-indigo-700 px-10 py-5 rounded-full font-bold hover:bg-gray-100 transition shadow-xl">
                                {{ __('messages.gallery.photo_submission.cta_primary') }}
                            </a>
                            <a href="{{ route('contact') }}" class="bg-indigo-500/30 text-white border border-white/20 px-10 py-5 rounded-full font-bold hover:bg-indigo-500/50 transition">
                                {{ __('messages.gallery.photo_submission.cta_secondary') }}
                            </a>
                        </div>
                        
                        <p class="text-indigo-200 text-sm font-medium">
                            <i class="fas fa-lock mr-2 opacity-50"></i>
                            {{ __('messages.gallery.photo_submission.reassurance') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-6xl font-bold text-gray-900 mb-8 leading-tight">
                    {{ __('messages.gallery.final_cta.headline') }}
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-12">
                    {{ __('messages.gallery.final_cta.content') }}
                </p>
                
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('contact') }}" class="bg-indigo-700 text-white px-12 py-6 rounded-full font-bold hover:bg-indigo-800 transition shadow-2xl shadow-indigo-200">
                        {{ __('messages.gallery.final_cta.cta_primary') }}
                    </a>
                    <a href="{{ route('contact') }}" class="bg-white border-2 border-gray-200 text-gray-900 px-12 py-6 rounded-full font-bold hover:border-indigo-600 hover:text-indigo-600 transition">
                        {{ __('messages.gallery.final_cta.cta_secondary') }}
                    </a>
                </div>
            </div>
        </section>

        <!-- SEO Footer -->
        <section class="py-12 bg-gray-100">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <p class="text-gray-400 text-xs leading-relaxed max-w-4xl mx-auto italic">
                    {{ __('messages.gallery.seo.copy') }}
                </p>
            </div>
        </section>

        <!-- Case Modal -->
        <x-case-modal :cases="$casesData" />

    </div>
@endsection
