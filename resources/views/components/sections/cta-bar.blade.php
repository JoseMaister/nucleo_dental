@props([
    'text' => 'Request Your Consultation',
    'link' => '/contact'
])

<section class="py-12 bg-indigo-50 border-y border-indigo-100">
    <div class="container mx-auto px-4 text-center">
        <a href="{{ $link }}" class="inline-flex items-center gap-3 px-8 py-4 bg-indigo-600 text-white font-bold rounded-full hover:bg-indigo-700 hover:scale-105 transition-all duration-300 shadow-xl shadow-indigo-200">
            {{ $text }}
            <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</section>
