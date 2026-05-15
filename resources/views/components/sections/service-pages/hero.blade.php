@props([
    'title',
    'subtitle',
    'killerLine',
    'image' => asset('images/hero-bg.jpg')
])

<section class="relative min-h-[70vh] flex items-center pt-20 overflow-hidden bg-slate-900">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ $image }}" class="w-full h-full object-cover opacity-40 scale-105 animate-slow-zoom" alt="{{ $title }}">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/80 to-transparent"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-600/20 border border-blue-400/30 text-blue-400 text-sm font-bold tracking-widest uppercase mb-8 animate-fade-in-up">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                </span>
                Premium Dental Care
            </div>

            <h1 class="text-4xl md:text-7xl font-bold text-white mb-8 leading-tight animate-fade-in-up" style="animation-delay: 200ms">
                {!! $title !!}
            </h1>

            <p class="text-xl text-slate-300 mb-10 leading-relaxed animate-fade-in-up" style="animation-delay: 400ms">
                {{ $subtitle }}
            </p>

            <div class="flex flex-wrap gap-6 items-center animate-fade-in-up" style="animation-delay: 600ms">
                <a href="#contact" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-blue-600/25">
                    {{ __('messages.hero.cta_primary') }}
                </a>
                <div class="flex flex-col">
                    <span class="text-slate-400 text-sm uppercase tracking-wider font-bold">Trusted Results</span>
                    <span class="text-white font-bold">{{ $killerLine }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes slow-zoom {
        from { transform: scale(1.05); }
        to { transform: scale(1.15); }
    }
    .animate-slow-zoom {
        animation: slow-zoom 20s linear infinite alternate;
    }
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
