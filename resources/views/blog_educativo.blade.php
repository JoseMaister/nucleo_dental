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
                            'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?fit=crop&w=400&q=80',
                            'video' => '', // Example: 'https://www.youtube.com/embed/VIDEO_ID'
                        ],
                        'Implantes Dentales' => [
                            'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Porcelain Crowns' => [
                            'img' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Coronas de Porcelana' => [
                            'img' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Porcelain Veneers' => [
                            'img' => 'https://images.unsplash.com/photo-1510915228340-29c85a43dcfe?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Carillas de Porcelana' => [
                            'img' => 'https://images.unsplash.com/photo-1510915228340-29c85a43dcfe?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Root Canal Therapy' => [
                            'img' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Endodoncia' => [
                            'img' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Full Mouth Rehabilitation' => [
                            'img' => 'https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Rehabilitación de Boca Completa' => [
                            'img' => 'https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Dental Cleaning & Checkup' => [
                            'img' => 'https://images.unsplash.com/photo-1512070679279-c2f999098c01?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Limpieza y Revisión Dental' => [
                            'img' => 'https://images.unsplash.com/photo-1512070679279-c2f999098c01?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Orthodontics (Braces & Aligners)' => [
                            'img' => 'https://images.unsplash.com/photo-1519864600265-abb23847ef2c?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Ortodoncia (Brackets y Alineadores)' => [
                            'img' => 'https://images.unsplash.com/photo-1519864600265-abb23847ef2c?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Tooth Extractions' => [
                            'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Extracciones Dentales' => [
                            'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Periodontal (Gum) Treatment' => [
                            'img' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Tratamiento Periodontal (Encías)' => [
                            'img' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Teeth Whitening' => [
                            'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Blanqueamiento Dental' => [
                            'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Dental Prosthetics' => [
                            'img' => 'https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Prótesis Dentales' => [
                            'img' => 'https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Pediatric Dentistry' => [
                            'img' => 'https://images.unsplash.com/photo-1519864600265-abb23847ef2c?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Odontopediatría' => [
                            'img' => 'https://images.unsplash.com/photo-1519864600265-abb23847ef2c?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Maxillofacial Surgery' => [
                            'img' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Cirugía Maxilofacial' => [
                            'img' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Composite Fillings' => [
                            'img' => 'https://images.unsplash.com/photo-1512070679279-c2f999098c01?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Resinas y Restauraciones' => [
                            'img' => 'https://images.unsplash.com/photo-1512070679279-c2f999098c01?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Preventive Treatments' => [
                            'img' => 'https://images.unsplash.com/photo-1512070679279-c2f999098c01?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                        'Tratamientos Preventivos' => [
                            'img' => 'https://images.unsplash.com/photo-1512070679279-c2f999098c01?fit=crop&w=400&q=80',
                            'video' => '',
                        ],
                    ];
                @endphp
                @foreach($treatmentArticles as $article)
                    @php
                        $media = $procedureMedia[$article['title']] ?? null;
                    @endphp
                    <article class="bg-gradient-to-br from-indigo-50 to-white border-2 border-indigo-200 rounded-xl p-7 hover:shadow-lg transition-all duration-300">
                        @if($media && !empty($media['img']))
                            <img src="{{ $media['img'] }}" alt="{{ $article['title'] }}" class="rounded-lg mb-4 w-full h-40 object-cover">
                        @endif
                        <h3 class="text-xl font-bold text-indigo-800 mb-3">{{ $article['title'] }}</h3>
                        <ul class="text-gray-700 text-sm space-y-2">
                            <li><span class="font-semibold text-indigo-700">{{ __('¿Qué es?') }}:</span> {{ $article['what'] ?? '' }}</li>
                            <li><span class="font-semibold text-indigo-700">{{ __('¿Cómo funciona?') }}:</span> {{ $article['how'] ?? '' }}</li>
                            <li><span class="font-semibold text-indigo-700">{{ __('¿Para quién es?') }}:</span> {{ $article['who'] ?? '' }}</li>
                            <li><span class="font-semibold text-indigo-700">{{ __('Beneficios') }}:</span> {{ $article['benefits'] ?? '' }}</li>
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
