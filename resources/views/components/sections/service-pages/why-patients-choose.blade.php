@props([
    'title' => __('messages.global_sections.why_choose_global.title'),
    'subtitle' => __('messages.global_sections.why_choose_global.subtitle'),
    'items' => __('messages.global_sections.why_choose_global.items')
])

<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                {{ $title }}
            </h2>
            @if($subtitle)
                <p class="text-lg text-slate-600 mb-6 max-w-2xl mx-auto leading-relaxed">
                    {{ $subtitle }}
                </p>
            @endif
            <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($items as $item)
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 group flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-check text-sm"></i>
                    </div>
                    <p class="text-lg text-slate-700 font-semibold leading-snug">
                        {{ $item }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
