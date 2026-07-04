@props(['case'])

<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col h-full"
     x-data="{ hover: false }"
     @mouseenter="hover = true"
     @mouseleave="hover = false">
    
    <!-- Images Container -->
    <div class="relative aspect-[4/3] overflow-hidden bg-gray-200">
        <!-- Side by Side Layout -->
        <div class="flex h-full w-full">
            <div class="relative w-1/2 h-full overflow-hidden border-r border-white/20">
                <img src="{{ $case['before_image'] }}" alt="Before" loading="lazy" class="absolute inset-0 w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500">
                <div class="absolute bottom-2 left-2 bg-black/50 backdrop-blur-md text-white text-[10px] px-2 py-0.5 rounded uppercase tracking-wider font-bold">
                    {{ __('messages.gallery.case_detail.before_label') }}
                </div>
            </div>
            <div class="relative w-1/2 h-full overflow-hidden">
                <img src="{{ $case['after_image'] }}" alt="After" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute bottom-2 right-2 bg-indigo-600/90 backdrop-blur-md text-white text-[10px] px-2 py-0.5 rounded uppercase tracking-wider font-bold">
                    {{ __('messages.gallery.case_detail.after_label') }}
                </div>
            </div>
        </div>

        <!-- Overlay Category -->
        <div class="absolute top-4 left-4">
            <span class="bg-white/90 backdrop-blur-md text-indigo-700 text-xs font-bold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-wide">
                {{ __('messages.gallery.filters.labels.' . $case['category']) }}
            </span>
        </div>
    </div>

    <!-- Content -->
    <div class="p-6 flex flex-col flex-1">
        <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight group-hover:text-indigo-700 transition">
            {{ $case['title'][app()->getLocale()] }}
        </h3>
        
        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
            {{ $case['short_description'][app()->getLocale()] }}
        </p>

        @if(!empty($case['treatment'][app()->getLocale()]))
        <div class="flex flex-wrap gap-1.5 mb-4">
            @foreach(array_slice($case['treatment'][app()->getLocale()], 0, 3) as $t)
                <span class="bg-indigo-50 text-indigo-700 text-[10px] font-semibold px-2.5 py-1 rounded-full border border-indigo-100">
                    {{ $t }}
                </span>
            @endforeach
        </div>
        @endif

        <div class="mt-auto pt-4 border-t border-gray-50 flex items-center justify-between">
            <span class="text-xs font-medium text-gray-400 italic">
                {{ $case['killer_line'][app()->getLocale()] }}
            </span>
            <button @click="$dispatch('open-case-modal', { caseId: {{ $case['id'] }} })" 
                    class="text-indigo-600 font-bold text-sm hover:text-indigo-800 transition flex items-center gap-1 group/btn">
                {{ __('messages.gallery.full_grid.view_case') }}
                <i class="fas fa-arrow-right text-[10px] group-hover/btn:translate-x-1 transition-transform"></i>
            </button>
        </div>
    </div>
</div>
