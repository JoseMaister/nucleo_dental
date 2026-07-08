@extends('layouts.app')

@section('title', __('messages.page_titles.home'))

@section('content')
<main>
    @include('components.sections.hero')
    @include('components.sections.financing')
    @include('components.sections.banner')
    
    <!-- Technology Highlights Strip -->
    <div class="py-12 bg-indigo-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-indigo-900 text-center mb-8">{{ __('messages.techno.homepage_highlights.title') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(__('messages.techno.homepage_highlights.items') as $item)
                    <div class="flex items-start p-4 bg-white rounded-lg shadow-sm">
                        <span class="text-2xl mr-3 text-indigo-700">✔</span>
                        <span class="text-gray-700">{{ $item }}</span>
                    </div>
                @endforeach
            </div>
            <p class="text-xl text-indigo-900 text-center mt-8 font-semibold">{{ __('messages.techno.homepage_highlights.tagline') }}</p>
        </div>
    </div>
    
    @include('components.sections.resume')
    @include('components.sections.banner2')
    @include('components.sections.services')
    @include('components.sections.about')
    @include('components.sections.faq')
    @include('components.sections.testimonials')
    @include('components.sections.contact')

</main>


@endsection