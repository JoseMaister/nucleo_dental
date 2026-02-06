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