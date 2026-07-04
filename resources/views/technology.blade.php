@extends('layouts.app')

@section('title', __('messages.page_titles.technology') . ' - ' . config('app.name')) 

@section('content')
<main>
    @include('components.Technology.hero')
    <div class="py-6 w-full">
        <div class="w-[90%] bg-[#D8D8D8] mx-auto px-14 py-14 flex flex-col items-center content-center leading-[6.2rem] mb-2 gap-16">
            <x-Technology.content 
                :imageUrl="asset('images/IMG_100203.webp')"
                :name="__('messages.techno.op3d_pro.name')"
                :subName="__('messages.techno.op3d_pro.subname')"
                :subtitle="__('messages.techno.op3d_pro.subtitle')"
                :title="__('messages.techno.op3d_pro.title')"
                :content="__('messages.techno.op3d_pro.description')"
                :whyMatters="__('messages.techno.op3d_pro.why_matters')"
                :idealFor="__('messages.techno.op3d_pro.ideal_for')"
            />
            <x-Technology.content 
                :imageUrl="asset('images/100321.webp')"
                :name="__('messages.techno.rayface.name')"
                :subName="__('messages.techno.rayface.subname')"
                :subtitle="__('messages.techno.rayface.subtitle')"
                :title="__('messages.techno.rayface.title')"
                :content="__('messages.techno.rayface.description')"
                :benefits="__('messages.techno.rayface.benefits')"
                :closing="__('messages.techno.rayface.closing')"
            />
            <x-Technology.content 
                :imageUrl="asset('images/IMG_100202.webp')"
                :name="__('messages.techno.cerec.name')"
                :subName="__('messages.techno.cerec.subname')"
                :subtitle="__('messages.techno.cerec.subtitle')"
                :title="__('messages.techno.cerec.title')"
                :content="__('messages.techno.cerec.description')"
                :howItWorks="__('messages.techno.cerec.how_it_works')"
                :benefits="__('messages.techno.cerec.benefits')"
                :style="'object-top'"
            />
        </div>
    </div>
    
    <!-- Why Advanced Technology Matters Section -->
    <div class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-indigo-900 text-center mb-8">{{ __('messages.techno.why_advanced_tech.title') }}</h2>
            <p class="text-xl text-gray-700 text-center mb-8">{{ __('messages.techno.why_advanced_tech.intro') }}</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                @foreach(__('messages.techno.why_advanced_tech.benefits') as $benefit)
                    <div class="flex items-center p-4 bg-indigo-50 rounded-lg">
                        <span class="text-2xl mr-4">✔</span>
                        <span class="text-lg text-gray-800">{{ $benefit }}</span>
                    </div>
                @endforeach
            </div>
            <p class="text-xl text-gray-700 text-center mt-8 italic">{{ __('messages.techno.why_advanced_tech.closing') }}</p>
        </div>
    </div>
    
    <!-- Before vs Digital Planning Section -->
    <div class="py-16 bg-gray-100">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-indigo-900 text-center mb-12">{{ __('messages.techno.before_vs_digital.title') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Traditional Dentistry -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold text-gray-700 mb-6">{{ __('messages.techno.before_vs_digital.traditional.title') }}</h3>
                    <ul class="space-y-4">
                        @foreach(__('messages.techno.before_vs_digital.traditional.items') as $item)
                            <li class="flex items-start">
                                <span class="text-red-500 mr-3 text-xl">✗</span>
                                <span class="text-gray-600">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Núcleo Dental -->
                <div class="bg-indigo-900 p-8 rounded-lg shadow-md text-white">
                    <h3 class="text-2xl font-bold mb-6">{{ __('messages.techno.before_vs_digital.nucleo.title') }}</h3>
                    <ul class="space-y-4">
                        @foreach(__('messages.techno.before_vs_digital.nucleo.items') as $item)
                            <li class="flex items-start">
                                <span class="text-green-400 mr-3 text-xl">✓</span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <p class="text-xl text-gray-700 text-center mt-8 italic">{{ __('messages.techno.before_vs_digital.closing') }}</p>
        </div>
    </div>
    
    <!-- CTA Section -->
    <div class="py-16 bg-indigo-700 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6">{{ __('messages.techno.cta_section.title') }}</h2>
            <p class="text-xl mb-8">{{ __('messages.techno.cta_section.subtitle') }}</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="tel:+19153080101" class="inline-block bg-white text-indigo-900 px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-colors">
                    {{ __('messages.techno.cta_section.phone_cta') }}
                </a>
                <a href="#contact" class="inline-block bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-indigo-900 transition-colors">
                    {{ __('messages.techno.cta_section.xrays_cta') }}
                </a>
            </div>
        </div>
    </div>
    
    <x-Technology.banner-bottom />

    <x-banner-smile-1 />
    <x-contact-map /> 
</main>
@endsection