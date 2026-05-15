@props([
    'title' => 'Why Choose Núcleo Dental',
    'items' => []
])

<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">
                {{ $title }}
            </h2>
            <p class="text-xl text-slate-600">
                Experience, technology, and patient-centered care come together for your results.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($items as $item)
                <div class="bg-white p-10 rounded-[40px] shadow-sm border border-slate-100 hover:shadow-2xl hover:shadow-blue-900/10 transition-all duration-500 group flex flex-col h-full">
                    <div class="w-14 h-14 rounded-2xl bg-slate-50 flex items-center justify-center text-slate-400 mb-8 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-shield-alt text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-blue-600 transition-colors">
                        {{ $item }}
                    </h3>
                </div>
            @endforeach
        </div>
    </div>
</section>
