<div class="bg-gray-500 text-white pt-10 pb-16">
    <div class="w-full">
        <p class="text-5xl md:text-6xl pl-16">
            {!! __('messages.services.title') !!}
        </p>
    </div>
    <div class="ml-6 mr-6 mt-2">
        <p class="ml-16 mr-16">
            {!! __('messages.services.subtitle') !!}
        </p>
    </div>
    
    <!-- Services Slider -->
    <div class="relative mt-12 p-4">
        <!-- Navigation Buttons -->
        <button class="services-prev absolute left-4 top-1/2 transform -translate-y-1/2 z-10 rounded-full bg-white w-12 h-12 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        
        <div class="swiper services-swiper max-w-6xl mx-auto">
            <div class="swiper-wrapper items-center pt-20">
                <!-- Service 1 -->
                <div class="swiper-slide">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card">
                        <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/implants.png') }}" alt="Dental Implants" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">Dental Implants</p>
                        <span class="text-sm text-center mt-2">Dental implants are the best option for replacing missing teeth.</span>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="swiper-slide">
                    <div class="relative flex flex-col items-center justify-center min-h-64  max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card">
                        <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/porcelain_veneers.png') }}" alt="Porcelain Veneers" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">Porcelain Veneers</p>
                        <span class="text-sm text-center mt-2">Achieve a perfect smile with our custom porcelain veneers.</span>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="swiper-slide">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card">
                        <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/porcelain_veneers.png') }}" alt="Porcelain Veneers" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">Teeth Whitening</p>
                        <span class="text-sm text-center mt-2">Brighten your smile with our professional teeth whitening.</span>
                    </div>
                </div>
                
                <!-- Service 4 -->
                <div class="swiper-slide">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card">
                        <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 w-24 h-24  flex items-center justify-center p-2">
                            <img src="{{ asset('images/porcelain_veneers.png') }}" alt="Porcelain Veneers" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">Orthodontics</p>
                        <span class="text-sm text-center mt-2">Straighten your teeth with our orthodontic treatments.</span>
                    </div>
                </div>
            </div>
        </div>
        
        <button class="services-next absolute right-4 top-1/2 transform -translate-y-1/2 z-10 rounded-full bg-white w-12 h-12 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
    
    <div class="flex justify-center mt-12">
        <a href="#" class="inline-block border-2 border-white px-8 py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors">
            Learn more about our services
        </a>
    </div>
</div>

<!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.services-swiper', {
            slidesPerView: 1,
            spaceBetween: 10,

            loop: true,
            navigation: {
                nextEl: '.services-next',
                prevEl: '.services-prev',
                disabledClass: 'opacity-30 cursor-not-allowed',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
            },
            on: {
                init: function() {
                    this.navigation.update();
                },
                slideChange: function() {
                    this.navigation.update();
                }
            }
        });
    });
</script>

<style>
    .services-swiper {
        padding: 40px 0 60px;
        width: 100%;
    }
    .swiper-slide {
        opacity: 1;
        transition: all 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
    }
    .swiper-slide:not(.swiper-slide-active) {
        opacity: 0.9;
    }
    .swiper-slide-active {
        transform: translateY(-10px);
    }
    .swiper-pagination-bullet {
        background: rgba(255, 255, 255, 0.5);
        opacity: 1;
        width: 10px;
        height: 10px;
    }
    .swiper-pagination-bullet-active {
        background: white;
    }
    .service-card {
        position: relative;
        transition: all 0.3s ease;
    }
    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 30px;
        background: transparent;
        border-top: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 50% 50% 0 0 / 30px 30px 0 0;
    }
</style>

