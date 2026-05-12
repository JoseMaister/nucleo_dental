@props([
    'title' => __('messages.global_sections.travel_experience.title'),
    'subtitle' => __('messages.global_sections.travel_experience.subtitle'),
    'sections' => __('messages.global_sections.travel_experience.sections')
])

<section class="py-24 bg-slate-900 text-white overflow-hidden relative">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(#3b82f6_1px,transparent_1px)] [background-size:40px_40px]"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mb-20 text-left">
            <h2 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                {{ $title }}
            </h2>
            <p class="text-xl text-slate-400 leading-relaxed">
                {{ $subtitle }}
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <div class="space-y-8">
                @foreach($sections as $key => $section)
                    <div class="bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-3xl hover:bg-white/10 transition-all duration-300">
                        <div class="flex items-start gap-5 text-left">
                            <div class="w-12 h-12 rounded-2xl bg-blue-600/20 flex items-center justify-center text-blue-400 flex-shrink-0">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-3">{{ $section['title'] }}</h3>
                                <p class="text-slate-400 mb-4">{{ $section['description'] }}</p>
                                @if(isset($section['list']))
                                    <ul class="space-y-2">
                                        @foreach($section['list'] as $item)
                                            <li class="flex items-center gap-3 text-sm text-slate-300">
                                                <i class="fas fa-check text-blue-500"></i>
                                                {{ $item }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="relative">
                <div class="sticky top-32 space-y-8">
                    <div class="bg-blue-600 p-10 rounded-3xl shadow-2xl relative overflow-hidden group text-left">
                        <div class="absolute bottom-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 group-hover:scale-150 transition-transform duration-700"></div>
                        <h3 class="text-2xl font-bold mb-6 relative z-10">Stress-Free Logistics</h3>
                        <p class="text-blue-100 text-lg mb-8 leading-relaxed relative z-10">
                            Our dedicated team handles the details of your arrival and transportation, so you can focus entirely on your treatment and recovery.
                        </p>
                        <div class="flex items-center gap-4 bg-white/10 p-4 rounded-xl relative z-10">
                            <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center text-blue-600">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <span class="block text-xs uppercase tracking-widest text-blue-200">Concierge Service</span>
                                <span class="font-bold">+1 (915) 308 - 0101</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
