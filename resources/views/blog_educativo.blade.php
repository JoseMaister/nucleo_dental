@extends('layouts.app')

@section('title', __('messages.blog_educativo.page_title'))

@section('content')
    <section class="relative bg-gradient-to-br from-indigo-600 via-indigo-700 to-indigo-900 text-white py-20 md:py-28 px-4 md:px-8 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full -mr-48 -mt-48"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-white rounded-full -ml-48 -mb-48"></div>
        </div>

        <div class="max-w-6xl mx-auto text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">{{ __('messages.blog_educativo.hero.title') }}</h1>
            <p class="text-xl md:text-2xl text-indigo-100 mb-5">{{ __('messages.blog_educativo.hero.subtitle') }}</p>
            <p class="text-lg md:text-xl text-indigo-100 max-w-3xl mx-auto">{{ __('messages.blog_educativo.hero.description') }}</p>
        </div>
    </section>

    <section class="py-16 md:py-24 px-4 md:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-indigo-800 mb-10 text-center">{{ __('messages.blog_educativo.treatments.title') }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $treatmentArticles = __('messages.blog_educativo.treatments.articles');
                @endphp

                @php
                    // Map procedure titles to Unsplash/illustrative images and (optionally) video/model URLs
                    $procedureMedia = [
                        'Dental Implants' => [
                            'img' => asset('images/100310.webp'),
                        ],
                        'Implantes Dentales' => [
                            'img' => asset('images/100310.webp'),
                        ],
                        'Porcelain Crowns' => [
                            'img' => asset('images/100311.webp'),
                        ],
                        'Coronas de Porcelana' => [
                            'img' => asset('images/100311.webp'),
                        ],
                        'Porcelain Veneers' => [
                            'img' => asset('images/100312.webp'),
                        ],
                        'Carillas de Porcelana' => [
                            'img' => asset('images/100312.webp'),
                        ],
                        'Root Canal Therapy' => [
                            'img' => asset('images/100313.webp'),
                        ],
                        'Endodoncia' => [
                            'img' => asset('images/100313.webp'),
                        ],
                        'Full Mouth Rehabilitation' => [
                            'img' => asset('images/100315.webp'),
                        ],
                        'Rehabilitación de Boca Completa' => [
                            'img' => asset('images/100315.webp'),
                        ],
                        'Dental Cleaning & Checkup' => [
                            'img' => asset('images/100316.webp'),
                        ],
                        'Limpieza y Revisión Dental' => [
                            'img' => asset('images/100316.webp'),
                        ],
                        'Orthodontics (Braces & Aligners)' => [
                            'img' => asset('images/100317.webp'),
                        ],
                        'Ortodoncia (Brackets y Alineadores)' => [
                            'img' => asset('images/100317.webp'),
                        ],
                        'Tooth Extractions' => [
                            'img' => asset('images/100318.webp'),
                        ],
                        'Extracciones Dentales' => [
                            'img' => asset('images/100318.webp'),
                        ],
                        'Periodontal (Gum) Treatment' => [
                            'img' => asset('images/100319.webp'),
                        ],
                        'Tratamiento Periodontal (Encías)' => [
                            'img' => asset('images/100319.webp'),
                        ],
                        'Teeth Whitening' => [
                            'img' => asset('images/100322.webp'),
                        ],
                        'Blanqueamiento Dental' => [
                            'img' => asset('images/100322.webp'),
                        ],
                        'Dental Prosthetics' => [
                            'img' => asset('images/100323.webp'),
                        ],
                        'Prótesis Dentales' => [
                            'img' => asset('images/100323.webp'),
                        ],
                        'Pediatric Dentistry' => [
                            'img' => asset('images/100324.webp'),
                        ],
                        'Odontopediatría' => [
                            'img' => asset('images/100324.webp'),
                        ],
                        'Maxillofacial Surgery' => [
                            'img' => asset('images/100325.webp'),
                        ],
                        'Cirugía Maxilofacial' => [
                            'img' => asset('images/100325.webp'),
                        ],
                        'Composite Fillings' => [
                            'img' => asset('images/100326.webp'),
                        ],
                        'Resinas y Restauraciones' => [
                            'img' => asset('images/100326.webp'),
                        ],
                        'Preventive Treatments' => [
                            'img' => asset('images/100327.webp'),
                        ],
                        'Tratamientos Preventivos' => [
                            'img' => asset('images/100327.webp'),
                        ],
                    ];
                @endphp
                @foreach($treatmentArticles as $article)
                            @php
                                // Try to find media for both English and Spanish titles
                                $media = $procedureMedia[$article['title']] ?? null;
                                // Fallback: try to match by lowercased title
                                if (!$media) {
                                    foreach ($procedureMedia as $key => $value) {
                                        if (strtolower($key) === strtolower($article['title'])) {
                                            $media = $value;
                                            break;
                                        }
                                    }
                                }
                                 // If image is missing or empty, use local asset
                                 $imgUrl = (!empty($media['img'])) ? $media['img'] : asset('images/100310.webp');
                            @endphp
                            {{-- DEBUG: Show article title and resolved image URL --}}
                            <div style="display:none">
                                <strong>DEBUG:</strong> {{ $article['title'] }}<br>
                                <strong>IMG:</strong> {{ $imgUrl }}
                            </div>
                        <article class="bg-gradient-to-br from-indigo-50 to-white border-2 border-indigo-200 rounded-xl p-7 hover:shadow-lg transition-all duration-300">
                                <img src="{{ $imgUrl }}" alt="{{ $article['title'] }}" class="rounded-lg mb-4 w-full h-40 object-cover">
                            <h3 class="text-xl font-bold text-indigo-800 mb-3">{{ $article['title'] }}</h3>
                            <ul class="text-gray-700 text-sm space-y-2">
                                <li><span class="font-semibold text-indigo-700">{{ __('messages.blog_educativo.treatments.labels.what') }}:</span> {{ $article['what'] ?? '' }}</li>
                                <li><span class="font-semibold text-indigo-700">{{ __('messages.blog_educativo.treatments.labels.how') }}:</span> {{ $article['how'] ?? '' }}</li>
                                <li><span class="font-semibold text-indigo-700">{{ __('messages.blog_educativo.treatments.labels.who') }}:</span> {{ $article['who'] ?? '' }}</li>
                                <li><span class="font-semibold text-indigo-700">{{ __('messages.blog_educativo.treatments.labels.benefits') }}:</span> {{ $article['benefits'] ?? '' }}</li>
                            </ul>
                            {{--
                            @if($media && !empty($media['video']))
                                <div class="mt-4 aspect-video">
                                    <iframe src="{{ $media['video'] }}" frameborder="0" allowfullscreen class="w-full h-full rounded-lg"></iframe>
                                </div>
                            @endif
                            --}}
                            {{--
                            // For future: Embed a 3D model (e.g. Sketchfab)
                            // <iframe src="https://sketchfab.com/models/MODEL_ID/embed" ...></iframe>
                            --}}
                        </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 px-4 md:px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-indigo-800 mb-10 text-center">{{ __('messages.blog_educativo.dental_tourism.title') }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $tourismArticles = __('messages.blog_educativo.dental_tourism.articles');
                @endphp

                @foreach($tourismArticles as $article)
                    <article class="bg-white border-2 border-indigo-200 rounded-xl p-7 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-xl font-bold text-indigo-800 mb-3">{{ $article['title'] }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $article['summary'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 px-4 md:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-indigo-800 mb-10 text-center">{{ __('messages.blog_educativo.differentiators.title') }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @php
                    $differentiators = __('messages.blog_educativo.differentiators.items');
                @endphp

                @foreach($differentiators as $item)
                    <div class="bg-gradient-to-br from-green-50 to-white border-l-4 border-green-500 p-8 rounded-xl hover:shadow-lg transition-all duration-300">
                        <h3 class="text-2xl font-bold text-indigo-800 mb-3">{{ $item['title'] }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $item['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 px-4 md:px-8 bg-gradient-to-br from-indigo-600 via-indigo-700 to-indigo-900 text-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">{{ __('messages.blog_educativo.cta.title') }}</h2>
            <p class="text-lg text-indigo-100 mb-8">{{ __('messages.blog_educativo.cta.description') }}</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-indigo-700 font-bold py-3 px-8 rounded-lg hover:bg-indigo-50 transition-colors duration-300">
                {{ __('messages.blog_educativo.cta.button') }}
            </a>
        </div>
    </section>
@endsection
