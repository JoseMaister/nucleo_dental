<div class="bg-gray-400 text-white">
    <div class="w-full bg-white mb-8">
        <p class="text-4xl md:text-5xl lg:text-6xl text-gray-400 p-4 md:p-6">
            {{ __('messages.about.title') }}
        </p>
    </div>
    
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="about-swiper swiper relative">
            <div class="swiper-wrapper pb-0">
                <!-- Slide 1 -->
                <div class="swiper-slide px-16">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <!-- Left Column - Text Content -->
                        <div class="flex flex-col justify-center ">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold">{{ __('messages.about.dr_name') }}</h2>
                            <p class="text-base md:text-lg lg:text-xl leading-relaxed">
                                {{ __('messages.about.bio') }}
                            </p>
                            <div class="pt-2">
                                <a href="{{ route('about') }}" class="inline-block border-2 border-white px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-300 text-base md:text-lg font-medium">
                                    {{ __('messages.about.cta') }}
                                </a>
                            </div>
                        </div>
                        
                        <!-- Right Column - Image -->
                        <div class="flex items-center justify-center lg:justify-end">
                            <img src="{{ asset('images/doctor.png') }}" alt="Dr. Ernesto Moran" class="max-h-[400px] w-auto object-contain lg:max-h-[500px] lg:pr-8">
                        </div>
                    </div>
                </div>

                <!-- Slide 2 - Example of a different layout if needed -->
                <div class="swiper-slide px-4">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <!-- Left Column - Text Content -->
                        <div class="flex flex-col justify-center
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold">Our Mission</h2>
                            <p class="text-base md:text-lg lg:text-xl leading-relaxed">
                                At Nucleo Dental, we're committed to providing exceptional dental care with a personal touch. Our state-of-the-art facility and experienced team ensure you receive the best possible treatment in a comfortable environment.
                            </p>
                            <div class="pt-2">
                                <a href="#" class="inline-block border-2 border-white px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-300 text-base md:text-lg font-medium">
                                    Learn More About Us
                                </a>
                            </div>
                        </div>
                        
                        <!-- Right Column - Image -->
                        <div class="h-full flex items-center justify-center lg:justify-end">
                            <img src="{{ asset('images/clinic.jpg') }}" alt="Nucleo Dental Clinic" class="max-h-[400px] w-auto object-cover rounded-lg shadow-xl lg:max-h-[500px] lg:pr-8 pb-0 mb-0">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Buttons -->
            <div class="swiper-button-next text-white hover:text-indigo-200 transition-colors duration-300 right-4 md:right-8" style="top: 50%; transform: translateY(-50%);"></div>
            <div class="swiper-button-prev text-white hover:text-indigo-200 transition-colors duration-300 left-4 md:left-8" style="top: 50%; transform: translateY(-50%);"></div>
            
            <!-- Pagination -->
            <div class="swiper-pagination mt-8"></div>
        </div>
    </div>
</div>

<style>
    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 1.5rem;
        font-weight: bold;
    }
    
    @media (min-width: 768px) {
        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 2rem;
        }
    }
    
    .swiper-button-next,
    .swiper-button-prev {
        background: rgba(0, 0, 0, 0.2);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        position: absolute;
        top: 50%;
        margin-top: -20px; /* Half of the button height */
        z-index: 10;
    }
    
    .swiper-button-next {
        right: 20px;
    }
    
    .swiper-button-prev {
        left: 20px;
    }
    
    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background: rgba(0, 0, 0, 0.4);
    }
    
    @media (max-width: 767px) {
        .swiper-button-next,
        .swiper-button-prev {
            width: 32px;
            height: 32px;
            margin-top: -16px; /* Half of the button height */
        }
        
        .swiper-button-next {
            right: 10px;
        }
        
        .swiper-button-prev {
            left: 10px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.about-swiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 8000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + ' inline-block w-3 h-3 mx-1 rounded-full bg-white opacity-40 hover:opacity-100 transition-opacity duration-300 cursor-pointer"></span>';
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    spaceBetween: 40,
                },
                1024: {
                    spaceBetween: 60,
                },
            },
            // Optional: Add slide transition effects
            on: {
                init: function() {
                    // Add any initialization code here
                },
                slideChange: function() {
                    // Handle any slide change events here
                }
            },
        });         clickable: true,
        //         type: 'bullets',
        //         bulletClass: 'swiper-pagination-bullet',
        //         bulletActiveClass: 'swiper-pagination-bullet-active',
        //         dynamicBullets: true,
        //     },
        //     breakpoints: {
        //         // when window width is >= 640px
        //         640: {
        //             slidesPerView: 3,
        //             spaceBetween: 40,
        //         },
        //         // when window width is >= 1024px
        //         1024: {
        //             slidesPerView:3,
        //             spaceBetween: 50,
        //         },
        //     },
        // });
    });
</script>

<style>
    .swiper-button-next,
    .swiper-button-prev {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 1);
        border-radius: 50%;
        color:rgb(164, 164, 164);
        font-size: 15px;
        

    }
    .swiper-button-next svg,
    .swiper-button-prev svg{
        height: 60%;
        width: 60%;
        fill:rgb(170, 170, 171);
    }
    
    .swiper-button-next {
        right: 20px;
    }
    
    .swiper-button-prev {
        left: 20px;
    }
    
    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 15px;
        font-weight: bold;
    }
</style>