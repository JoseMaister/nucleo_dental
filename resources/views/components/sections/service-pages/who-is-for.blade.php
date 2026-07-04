@props([
    'title' => 'Who This Is For',
    'items' => [],
    'fullDescription' => null
])

<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-1/2">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">
                    {{ $title }}
                </h2>
                
                @if($fullDescription)
                    <p class="text-lg md:text-xl text-slate-600 mb-8 leading-relaxed">
                        {{ $fullDescription }}
                    </p>
                @endif
                <div class="space-y-6">
                    @foreach($items as $item)
                        <div class="flex items-start gap-5 group">
                            <div class="mt-1 w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-check text-xs"></i>
                            </div>
                            <p class="text-xl text-slate-700 leading-snug">
                                {{ $item }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="lg:w-1/2 relative">
                <div class="absolute inset-0 bg-blue-600 rounded-[40px] rotate-3 scale-95 opacity-10"></div>
                <img src="{{ asset('images/banner-smile-1.webp') }}" class="relative z-10 rounded-[40px] shadow-2xl w-full object-cover aspect-video" alt="Patient Care">
                <!-- Trust Badge -->
                <div class="absolute -bottom-10 -right-10 z-20 bg-white p-8 rounded-3xl shadow-2xl max-w-[240px] hidden md:block border border-slate-100">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="flex text-orange-400">
                            @for($i=0; $i<5; $i++) <i class="fas fa-star text-xs"></i> @endfor
                        </div>
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Verified Results</span>
                    </div>
                    <p class="text-slate-900 font-bold leading-tight">"The quality of care exceeded my expectations."</p>
                </div>
            </div>
        </div>
    </div>
</section>
