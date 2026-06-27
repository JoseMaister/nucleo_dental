<!-- Main Container -->
<div class="bg-gray-400 text-white py-12">
    <!-- Title Section -->
    <div class="w-full bg-white mb-12">
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-gray-400 p-4 md:p-6 max-w-7xl mx-auto">
            {{ __('messages.about.title') }}
        </h1>
    </div>

    <!-- Swiper Container -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center px-4">
                        <div class="text-center lg:text-left">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">{{ __('messages.about.dr_name') }}</h2>
                            <p class="text-base md:text-lg lg:text-xl mb-6">
                                {{ __('messages.about.bio') }}
                            </p>
                            <a href="{{ route('about') }}" class="inline-block border-2 border-white px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-300 text-base md:text-lg font-medium">
                                {{ __('messages.about.cta') }}
                            </a>
                        </div>
                        <div class="flex justify-center">
                            <img src="{{ asset('images/IMG_100188-removebg.png') }}" alt="Dr. Ernesto Moran" class="max-h-[400px] w-auto object-contain">
                        </div>
                    </div>
                </div>

                <!-- Dr. Julio Nevárez -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center px-4">
                        <div class="text-center lg:text-left">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">{{ __('messages.team.julio.name') }}</h2>
                            <p class="text-base md:text-lg lg:text-xl mb-6 whitespace-pre-line">
                                {{ __('messages.team.julio.julio_summary') }}
                            </p>
                            <a href="{{ route('about') }}" class="inline-block border-2 border-white px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-300 text-base md:text-lg font-medium">
                                {{ __('messages.about.cta') }}
                            </a>
                        </div>
                        <div class="flex justify-center">
                            <img src="{{ asset('images/IMG_100190-removebg.png') }}" alt="Dr. Julio Nevárez" class="max-h-[400px] w-auto object-contain">
                        </div>
                    </div>
                </div>

                <!-- Dra. Adriana Armendáriz -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center px-4">
                        <div class="text-center lg:text-left">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">{{ __('messages.team.adriana_armendariz.name') }}</h2>
                            <p class="text-base md:text-lg lg:text-xl mb-6 whitespace-pre-line">
                                {{ __('messages.team.adriana_armendariz.adriana_armendariz_summary') }}
                            </p>
                            <a href="{{ route('about') }}" class="inline-block border-2 border-white px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-300 text-base md:text-lg font-medium">
                                {{ __('messages.about.cta') }}
                            </a>
                        </div>
                        <div class="flex justify-center">
                            <img src="{{ asset('images/IMG_100183-removebg.png') }}" alt="Dra. Adriana Armendáriz" class="max-h-[400px] w-auto object-contain">
                        </div>
                    </div>
                </div>

                <!-- Dra. Adriana Escalante -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center px-4">
                        <div class="text-center lg:text-left">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">{{ __('messages.team.adriana_escalante.name') }}</h2>
                            <p class="text-base md:text-lg lg:text-xl mb-6 whitespace-pre-line">
                                {{ __('messages.team.adriana_escalante.adriana_escalante_summary') }}
                            </p>
                            <a href="{{ route('about') }}" class="inline-block border-2 border-white px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-300 text-base md:text-lg font-medium">
                                {{ __('messages.about.cta') }}
                            </a>
                        </div>
                        <div class="flex justify-center">
                            <img src="{{ asset('images/IMG_100198-removebg.png') }}" alt="Dra. Adriana Escalante" class="max-h-[400px] w-auto object-contain">
                        </div>
                    </div>
                </div>

                <!-- Dr. Mario Torres -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center px-4">
                        <div class="text-center lg:text-left">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">{{ __('messages.team.mario.name') }}</h2>
                            <p class="text-base md:text-lg lg:text-xl mb-6 whitespace-pre-line">
                                {{ __('messages.team.mario.mario_summary') }}
                            </p>
                            <a href="{{ route('about') }}" class="inline-block border-2 border-white px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-300 text-base md:text-lg font-medium">
                                {{ __('messages.about.cta') }}
                            </a>
                        </div>
                        <div class="flex justify-center">
                            <img src="{{ asset('images/IMG_100191-removebg.png') }}" alt="Dr. Mario Torres" class="max-h-[400px] w-auto object-contain">
                        </div>
                    </div>
                </div>

                <!-- Dra. monica -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center px-4">
                        <div class="text-center lg:text-left">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">{{ __('messages.team.monica.name') }}</h2>
                            <p class="text-base md:text-lg lg:text-xl mb-6 whitespace-pre-line">
                                {{ __('messages.team.monica.monica_summary') }}
                            </p>
                            <a href="{{ route('about') }}" class="inline-block border-2 border-white px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-300 text-base md:text-lg font-medium">
                                {{ __('messages.about.cta') }}
                            </a>
                        </div>
                        <div class="flex justify-center">
                            <img src="{{ asset('images/IMG_100184-removebg.png') }}" alt="Dra. Monica Limas" class="max-h-[400px] w-auto object-contain">
                        </div>
                    </div>
                </div>

                <!-- Dra. Paloma -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center px-4">
                        <div class="text-center lg:text-left">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">{{ __('messages.team.paloma.name') }}</h2>
                            <p class="text-base md:text-lg lg:text-xl mb-6 whitespace-pre-line">
                                {{ __('messages.team.paloma.paloma_summary') }}
                            </p>
                            <a href="{{ route('about') }}" class="inline-block border-2 border-white px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-300 text-base md:text-lg font-medium">
                                {{ __('messages.about.cta') }}
                            </a>
                        </div>
                        <div class="flex justify-center">
                            <img src="{{ asset('images/IMG_100181-removebg.png') }}" alt="Dra. Paloma" class="max-h-[400px] w-auto object-contain">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
            {{-- <!-- Pagination -->
            <div class="swiper-pagination mt-8"></div> --}}
        </div>
    </div>
</div>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            {{-- Left Side --}}
            <div>
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-indigo-700">
                    {{ __('messages.us_patients.label') }}
                </p>

                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                    {{ __('messages.us_patients.title') }}
                </h2>

                <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                    {{ __('messages.us_patients.description_1') }}
                </p>

                <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                    {{ __('messages.us_patients.description_2') }}
                </p>

                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">

                    @foreach(__('messages.us_patients.points') as $point)
                    <div class="flex items-start p-5 rounded-2xl bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 rounded-full bg-indigo-700 text-white flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-{{ $point['icon'] }}"></i>
                        </div>

                        <p class="ml-4 text-gray-700 font-semibold leading-snug">
                            {{ $point['text'] }}
                        </p>
                    </div>
                    @endforeach

                </div>

                <div class="mt-8 p-4 border-l-4 border-indigo-700 bg-indigo-50">
                    <p class="text-indigo-900 font-bold italic text-lg">
                        "{{ __('messages.us_patients.killer') }}"
                    </p>
                </div>

                
            </div>

            {{-- Right Side --}}
            <div class="relative">
                <img src="{{ asset(__('messages.us_patients.image')) }}"
                     alt="{{ __('messages.us_patients.image_alt') }}"
                     class="w-full rounded-3xl shadow-2xl object-cover h-[500px]">

                <div class="absolute bottom-6 left-6 right-6 bg-white rounded-2xl shadow-xl p-6">
                    <p class="text-sm uppercase tracking-widest text-gray-400 mb-2">
                        {{ __('messages.us_patients.card_label') }}
                    </p>

                    <p class="text-2xl font-bold text-gray-900 leading-tight">
                        {{ __('messages.us_patients.card_text') }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- Image -->
            <div class="order-2 md:order-1">
                <img src="{{ asset(__('messages.technology.image')) }}"
                     alt="{{ __('messages.technology.title') }}"
                     class="w-full h-[500px] object-cover rounded-3xl shadow-2xl">
            </div>

            <!-- Content -->
            <div class="order-1 md:order-2">
                <p class="text-sm font-semibold tracking-[0.25em] uppercase text-indigo-700">
                    {{ __('messages.technology.label') }}
                </p>

                <h2 class="mt-4 text-3xl md:text-5xl font-bold text-gray-900 leading-tight">
                    {{ __('messages.technology.title') }}
                </h2>

                <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                    {{ __('messages.technology.description_1') }}
                </p>

                <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                    {{ __('messages.technology.description_2') }}
                </p>

                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-check text-indigo-700 mt-1"></i>
                        <span class="text-gray-700">{{ __('messages.technology.point_1') }}</span>
                    </div>

                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-check text-indigo-700 mt-1"></i>
                        <span class="text-gray-700">{{ __('messages.technology.point_2') }}</span>
                    </div>

                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-check text-indigo-700 mt-1"></i>
                        <span class="text-gray-700">{{ __('messages.technology.point_3') }}</span>
                    </div>

                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-check text-indigo-700 mt-1"></i>
                        <span class="text-gray-700">{{ __('messages.technology.point_4') }}</span>
                    </div>
                </div>

                <div class="mt-8 p-5 rounded-2xl bg-indigo-50 border-l-4 border-indigo-700">
                    <p class="text-lg font-bold italic text-indigo-900">
                        "{{ __('messages.technology.killer') }}"
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <div>
                <img src="{{ __('messages.social_proof.image') }}"
                     alt="Trusted Patients"
                     class="w-full h-[520px] object-cover rounded-3xl shadow-xl">
            </div>

            <div>
                <p class="text-sm font-bold uppercase tracking-widest text-indigo-700">
                    {{ __('messages.social_proof.label') }}
                </p>

                <h2 class="mt-3 text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                    {{ __('messages.social_proof.title') }}
                </h2>

                <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                    {{ __('messages.social_proof.description_1') }}
                </p>

                <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                    {{ __('messages.social_proof.description_2') }}
                </p>

                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start p-4 rounded-2xl bg-gray-50">
                        <i class="fa-solid fa-check text-indigo-700 mt-1"></i>
                        <p class="ml-3 text-gray-700 font-medium">
                            {{ __('messages.social_proof.point_1') }}
                        </p>
                    </div>

                    <div class="flex items-start p-4 rounded-2xl bg-gray-50">
                        <i class="fa-solid fa-check text-indigo-700 mt-1"></i>
                        <p class="ml-3 text-gray-700 font-medium">
                            {{ __('messages.social_proof.point_2') }}
                        </p>
                    </div>

                    <div class="flex items-start p-4 rounded-2xl bg-gray-50">
                        <i class="fa-solid fa-check text-indigo-700 mt-1"></i>
                        <p class="ml-3 text-gray-700 font-medium">
                            {{ __('messages.social_proof.point_3') }}
                        </p>
                    </div>

                    <div class="flex items-start p-4 rounded-2xl bg-gray-50">
                        <i class="fa-solid fa-check text-indigo-700 mt-1"></i>
                        <p class="ml-3 text-gray-700 font-medium">
                            {{ __('messages.social_proof.point_4') }}
                        </p>
                    </div>
                </div>

                <div class="mt-8 p-4 border-l-4 border-indigo-700 bg-indigo-50 rounded-r-xl">
                    <p class="text-indigo-900 font-bold italic text-lg">
                        "{{ __('messages.social_proof.killer') }}"
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="relative overflow-hidden rounded-3xl bg-indigo-900">

            <div class="absolute inset-0">
                <img src="{{ __('messages.cta_final.image') }}"
                     class="w-full h-full object-cover opacity-20"
                     alt="Dental Consultation">
            </div>

            <div class="relative grid grid-cols-1 lg:grid-cols-2 gap-10 items-center p-10 md:p-16">

                <div>
                    <p class="text-sm font-bold uppercase tracking-widest text-indigo-200">
                        {{ __('messages.cta_final.label') }}
                    </p>

                    <h2 class="mt-4 text-4xl md:text-5xl font-bold text-white leading-tight">
                        {{ __('messages.cta_final.title') }}
                    </h2>

                    <p class="mt-6 text-lg text-indigo-100 leading-relaxed max-w-2xl">
                        {{ __('messages.cta_final.description') }}
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row lg:flex-col gap-4 lg:items-end">
                    <a href="#contact"
                       class="inline-block bg-white hover:bg-gray-100 text-indigo-900 px-8 py-4 rounded-full shadow-xl font-bold transition-all text-center">
                        {{ __('messages.cta_final.cta_primary') }}
                    </a>

                    <a href="https://wa.me/526563674969?text=Hola%20Nucleo%20Dental,%20me%20gustaría%20agendar%20una%20cita"
                       target="_blank"
                       class="inline-block border-2 border-white hover:bg-white hover:text-indigo-900 text-white px-8 py-4 rounded-full font-bold transition-all text-center">
                        {{ __('messages.cta_final.cta_secondary') }}
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Simple Swiper initialization
        const swiper = new Swiper('.swiper-container', {
            // Optional parameters
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            speed: 800,
            
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            
            // Pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                // renderBullet: function (index, className) {
                //     return '<span class="' + className + ' inline-block w-3 h-3 mx-1 rounded-full bg-white opacity-40 hover:opacity-100 transition-opacity duration-300 cursor-pointer"></span>';
                // },
            },
        });
        
        // Make swiper available globally for debugging
        window.aboutSwiper = swiper;
    });
</script>

<!-- Custom Styles -->
<style>
    /* Prevent horizontal scroll */
    html, body {
        max-width: 100%;
        overflow-x: hidden;
    }
    
    /* Swiper Container */
    .swiper-container {
        width: 100%;
        height: 100%;
        padding: 20px 0;
        overflow: hidden;
    }
    
    /* Slide styles */
    .swiper-slide {
        width: 100%;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.5s ease, visibility 0.5s;
        transform: translate3d(0,0,0);
        backface-visibility: hidden;
    }
    
    /* Show only active slide */
    .swiper-slide.swiper-slide-active,
    .swiper-slide.swiper-slide-next,
    .swiper-slide.swiper-slide-prev {
        opacity: 1;
        visibility: visible;
    }
    
    /* Navigation Buttons */
    .swiper-button-next,
    .swiper-button-prev {
        color: #4f46e5;
        background: rgba(255, 255, 255, 0.9);
        width: 44px;
        height: 44px;
        padding: 10px;
        border-radius: 50%;
        transition: all 0.3s ease;
    }
    
    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background: #4f46e5;
        color: white;
    }
    
    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 1.5rem;
        font-weight: bold;
    }
    
    /* Pagination */
    .swiper-pagination-bullet-active {
        background: white;
        opacity: 1;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .swiper-button-next,
        .swiper-button-prev {
            width: 36px;
            height: 36px;
        }
        
        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 1.2rem;
        }
    }
</style>