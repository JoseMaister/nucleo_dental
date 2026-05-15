<section class="py-24 bg-blue-600 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 -skew-x-12 translate-x-1/2"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="bg-white rounded-[40px] p-12 md:p-20 shadow-2xl flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-2/3">
                <div class="inline-flex items-center gap-2 px-4 py-1 rounded-full bg-blue-50 text-blue-600 text-xs font-bold tracking-widest uppercase mb-6">
                    Comfort First
                </div>
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">
                    {{ __('messages.global_sections.sedation_callout.title') }}
                </h2>
                <p class="text-xl text-slate-600 leading-relaxed">
                    {{ __('messages.global_sections.sedation_callout.description') }}
                </p>
            </div>
            <div class="lg:w-1/3 w-full">
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-2xl bg-blue-600 flex items-center justify-center text-white mb-6 shadow-lg shadow-blue-600/20">
                        <i class="fas fa-user-md text-2xl"></i>
                    </div>
                    <span class="text-slate-400 text-xs uppercase tracking-widest font-bold mb-2">Administered By</span>
                    <span class="text-slate-900 font-bold text-lg leading-tight">Licensed Anesthesiologists</span>
                </div>
            </div>
        </div>
    </div>
</section>
