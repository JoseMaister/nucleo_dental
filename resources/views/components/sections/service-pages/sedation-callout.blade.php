
<section class="py-24 bg-blue-600 relative overflow-hidden">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 -skew-x-12 translate-x-1/2"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="bg-white rounded-[40px] p-8 md:p-14 lg:p-16 shadow-2xl flex flex-col lg:flex-row items-start lg:items-center gap-10 lg:gap-14">

            <!-- Main Content -->
            <div class="w-full lg:w-2/3">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mb-6 leading-tight tracking-tight">
                    {{ __('messages.global_sections.sedation_callout.title') }}
                </h2>

                <div class="w-16 h-1 bg-blue-600 rounded-full mb-7"></div>

                <div class="text-lg md:text-xl text-slate-600 leading-relaxed space-y-4">
                    {!! __('messages.global_sections.sedation_callout.description') !!}
                </div>
            </div>

            <!-- Ideal For -->
            <div class="w-full lg:w-1/3 lg:border-l lg:border-slate-100 lg:pl-10">
                <div class="border-t border-slate-100 pt-6 lg:border-t-0 lg:pt-0">
                    <h4 class="font-bold text-slate-800 text-lg md:text-xl mb-6">
                        {{ __('messages.global_sections.sedation_callout.ideal_for') }}
                    </h4>

                    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4 text-slate-600">
                        @foreach(__('messages.global_sections.sedation_callout.points') as $point)
                            <li class="flex items-start gap-3 p-3 rounded-xl bg-slate-50 hover:bg-blue-50 transition-colors duration-300">
                                <span class="flex-shrink-0 mt-1 w-5 h-5 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                                    <i class="fas fa-check text-[10px]"></i>
                                </span>

                                <span class="font-medium leading-relaxed">
                                    {{ $point }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
