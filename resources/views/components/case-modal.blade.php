@props(['cases'])

<div x-data="{ 
        open: false, 
        currentCase: null,
        loading: false,
        locale: '{{ app()->getLocale() }}',
        cases: {{ json_encode($cases) }},
        init() {
            window.addEventListener('open-case-modal', (event) => {
                this.loading = true;
                this.currentCase = this.cases.find(c => c.id === event.detail.caseId);
                this.open = true;
                document.body.classList.add('overflow-hidden');
                setTimeout(() => this.loading = false, 300);
            });
        },
        closeModal() {
            this.open = false;
            document.body.classList.remove('overflow-hidden');
        }
     }"
     x-show="open"
     x-cloak
     class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6"
     @keydown.escape.window="closeModal()">
    
    <!-- Backdrop -->
    <div x-show="open" 
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="absolute inset-0 bg-gray-900/90 backdrop-blur-sm"
         @click="closeModal()"></div>

    <!-- Modal Content -->
    <div x-show="open"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="relative bg-white w-full max-w-5xl max-h-[90vh] rounded-3xl shadow-2xl overflow-hidden flex flex-col">
        
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between sticky top-0 bg-white z-10">
            <template x-if="currentCase">
                <div class="flex items-center gap-3">
                    <span class="bg-indigo-100 text-indigo-700 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider" x-text="currentCase.category.replace('_', ' ')"></span>
                    <h2 class="text-lg font-bold text-gray-900 truncate max-w-[200px] sm:max-w-md" x-text="currentCase.title[locale]"></h2>
                </div>
            </template>
            <button @click="closeModal()" class="text-gray-400 hover:text-gray-600 transition p-2">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <!-- Body -->
        <div class="flex-1 overflow-y-auto p-6 sm:p-10">
            <template x-if="currentCase">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    
                    <!-- Left: Images -->
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 gap-4">
                            <div class="space-y-2">
                                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">
                                    {{ __('messages.gallery.case_detail.before_label') }}
                                </span>
                                <div class="rounded-2xl overflow-hidden shadow-md">
                                    <img :src="currentCase.before_image" class="w-full aspect-video object-cover grayscale-[0.2]">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <span class="text-xs font-bold text-indigo-600 uppercase tracking-widest">
                                    {{ __('messages.gallery.case_detail.after_label') }}
                                </span>
                                <div class="rounded-2xl overflow-hidden shadow-2xl border-2 border-indigo-50">
                                    <img :src="currentCase.after_image" class="w-full aspect-video object-cover">
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-indigo-50 p-6 rounded-2xl border border-indigo-100">
                            <p class="text-indigo-800 font-bold italic text-lg" x-text="'“' + currentCase.killer_line[locale] + '”'"></p>
                        </div>
                    </div>

                    <!-- Right: Details -->
                    <div class="space-y-8">
                        <div>
                            <p class="text-xs text-indigo-600 font-bold uppercase tracking-widest mb-2">{{ __('messages.gallery.case_detail.intro_summary') }}</p>
                            <p class="text-gray-600 leading-relaxed mb-4">{{ __('messages.gallery.case_detail.intro_summary_text') }}</p>
                            <p class="text-gray-600 leading-relaxed" x-text="currentCase.short_description[locale]"></p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 uppercase tracking-wide mb-3 flex items-center gap-2">
                                    <i class="fas fa-exclamation-circle text-indigo-500"></i>
                                    {{ __('messages.gallery.case_detail.concerns') }}
                                </h4>
                                <ul class="space-y-2">
                                    <template x-for="concern in currentCase.concerns[locale]" :key="concern">
                                        <li class="flex items-start gap-2 text-sm text-gray-600">
                                            <i class="fas fa-check text-[10px] text-gray-400 mt-1"></i>
                                            <span x-text="concern"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 uppercase tracking-wide mb-3 flex items-center gap-2">
                                    <i class="fas fa-clipboard-list text-indigo-500"></i>
                                    {{ __('messages.gallery.case_detail.plan') }}
                                </h4>
                                <ul class="space-y-2">
                                    <template x-for="step in currentCase.plan[locale]" :key="step">
                                        <li class="flex items-start gap-2 text-sm text-gray-600">
                                            <i class="fas fa-arrow-right text-[10px] text-indigo-400 mt-1"></i>
                                            <span x-text="step"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 pt-8">
                            <h4 class="text-sm font-bold text-gray-900 uppercase tracking-wide mb-3 flex items-center gap-2">
                                <i class="fas fa-star text-yellow-500"></i>
                                {{ __('messages.gallery.case_detail.result') }}
                            </h4>
                            <p class="text-gray-700 font-medium" x-text="currentCase.outcome[locale]"></p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 pt-4">
                            <a href="{{ route('contact') }}" class="flex-1 bg-indigo-700 text-white text-center py-4 rounded-xl font-bold hover:bg-indigo-800 transition shadow-lg shadow-indigo-200">
                                {{ __('messages.gallery.case_detail.cta_primary') }}
                            </a>
                            <a href="https://wa.me/526563674969" target="_blank" class="flex-1 bg-white border-2 border-gray-200 text-gray-900 text-center py-4 rounded-xl font-bold hover:border-indigo-600 hover:text-indigo-600 transition">
                                {{ __('messages.gallery.case_detail.cta_secondary') }}
                            </a>
                        </div>

                        <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl">
                            <div class="flex -space-x-2">
                                <img src="{{ asset('images/doctor.png') }}" class="w-10 h-10 rounded-full border-2 border-white object-cover">
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-indigo-100 flex items-center justify-center text-indigo-700 text-xs font-bold">+1</div>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ __('messages.gallery.case_detail.doctors') }}</p>
                                <p class="text-xs text-gray-600">{{ __('messages.gallery.case_detail.doctor_names') }}</p>
                            </div>
                        </div>
                        
                        <p class="text-[10px] text-gray-400 italic">
                            {{ __('messages.gallery.case_detail.disclaimer') }}
                        </p>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
