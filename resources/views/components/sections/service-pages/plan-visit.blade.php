@props([
    'title' => __('messages.global_sections.plan_visit.title'),
    'description' => __('messages.global_sections.plan_visit.description')
])

<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50 -skew-x-12 translate-x-1/2"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="bg-slate-900 rounded-[40px] p-12 md:p-20 shadow-2xl relative overflow-hidden group">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-blue-900/20 to-slate-900 opacity-50 group-hover:opacity-100 transition-opacity duration-1000"></div>
            <div class="max-w-4xl mx-auto text-center relative z-10">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-8">
                    {{ $title }}
                </h2>
                <p class="text-xl text-slate-400 mb-12 leading-relaxed">
                    {!! $description !!}
                </p>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#contact" class="px-10 py-5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-2xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl hover:shadow-blue-600/20 text-lg">
                        {{ __('messages.global_sections.plan_visit.cta_consultation') }}
                    </a>
                    <a href="#contact" class="px-10 py-5 bg-white/10 hover:bg-white/20 text-white font-bold rounded-2xl transition-all duration-300 backdrop-blur-sm border border-white/20 text-lg">
                        {{ __('messages.global_sections.plan_visit.cta_xrays') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
