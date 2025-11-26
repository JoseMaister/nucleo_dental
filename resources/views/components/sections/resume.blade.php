<div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center max-w-7xl mx-auto px-6 py-12">
    <div class="space-y-6">
        <div class="flex flex-wrap justify-center sm:justify-start gap-2 sm:gap-4">
            <img src="{{ asset('images/flags.png') }}" alt="Núcleo Dental" class="h-12 sm:h-14 md:h-16 w-auto">
            <img src="{{ asset('images/flags.png') }}" alt="Núcleo Dental" class="h-12 sm:h-14 md:h-16 w-auto">
            <img src="{{ asset('images/flags.png') }}" alt="Núcleo Dental" class="h-12 sm:h-14 md:h-16 w-auto">
        </div>
        <div class="text-2xl font-medium text-gray-800">
            {{ __('messages.resume.title') }}
        </div>
        <div class="text-gray-600 leading-relaxed">
            {{ __('messages.resume.description') }}
        </div>
    </div>
    <div class="relative w-[80%] md:w-[300px] h-[500px] max-w-md mx-auto bg-gray-200 rounded-lg overflow-hidden">
        <!-- Video Thumbnail/Placeholder -->
        <div class="absolute inset-0 flex items-center justify-center bg-black/20">
            <!-- Play Button -->
            {{-- <div class="w-16 h-16 md:w-20 md:h-20 bg-white/90 rounded-full flex items-center justify-center group hover:scale-110 transition-transform duration-200">
                <svg class="w-8 h-8 md:w-10 md:h-10 text-indigo-600 ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                </svg>
            </div> --}}
            <img src="{{ asset('images/100338.webp') }}" alt="Núcleo Dental" class="h-full w-full">
        </div>
    </div>
</div>