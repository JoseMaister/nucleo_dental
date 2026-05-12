@props([
    'title' => __('messages.global_sections.what_to_expect.title'),
    'subtitle' => __('messages.global_sections.what_to_expect.subtitle'),
    'steps' => __('messages.global_sections.what_to_expect.steps')
])

<section class="py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">
                {{ $title }}
            </h2>
            <p class="text-xl text-slate-600 leading-relaxed">
                {{ $subtitle }}
            </p>
        </div>

        <div class="relative">
            <!-- Timeline Line (Desktop) -->
            <div class="hidden lg:block absolute top-1/2 left-0 w-full h-0.5 bg-slate-100 -translate-y-1/2">
                <div class="absolute top-0 left-0 h-full bg-blue-600 transition-all duration-1000" style="width: 0%" id="timeline-progress-global"></div>
            </div>

            <div class="grid lg:grid-cols-3 gap-12 relative z-10">
                @foreach($steps as $index => $step)
                    <div class="flex flex-col items-center text-center group">
                        <div class="relative mb-8">
                            <!-- Step Number -->
                            <div class="w-16 h-16 rounded-full bg-white border-2 border-slate-100 shadow-xl flex items-center justify-center text-2xl font-bold text-slate-400 group-hover:border-blue-600 group-hover:text-blue-600 transition-all duration-500 relative z-10 bg-white">
                                {{ $index + 1 }}
                            </div>
                            
                            <!-- Pulsing Effect -->
                            <div class="absolute inset-0 rounded-full bg-blue-400/20 scale-0 group-hover:scale-150 opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-4 group-hover:text-blue-600 transition-colors duration-300">
                            {{ $step['title'] }}
                        </h3>
                        <p class="text-slate-600 leading-relaxed">
                            {{ $step['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observerGlobal = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = document.getElementById('timeline-progress-global');
                    if(bar) bar.style.width = '100%';
                }
            });
        }, { threshold: 0.5 });

        const sectionGlobal = document.querySelector('#timeline-progress-global')?.closest('.relative');
        if (sectionGlobal) observerGlobal.observe(sectionGlobal);
    });
</script>
