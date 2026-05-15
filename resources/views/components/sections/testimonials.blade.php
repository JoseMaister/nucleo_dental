<div class="text-indigo-700 pt-10 pb-16">
    <div class="w-full">
        <p class="text-2xl flex items-center justify-center mb-8">
            {{ __('messages.testimonials.title') }} &nbsp; <strong>{{ __('messages.testimonials.highlighted_title') }}</strong>
        </p>
    </div>
    
    <!-- Swiper Container -->
    <div class="relative max-w-full w-full mx-auto px-16 pb-5" >
        <div class="testimonials-swiper swiper h-[460px]">
            <div class="swiper-wrapper">
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="max-w-[400px] mx-auto p-6 shadow-2xl bg-white rounded-lg">
                        <div class="flex text-yellow-400 mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="font-bold text-2xl text-left w-full mb-3">
                            {{ __('messages.testimonials.testimonial1.title') }}
                        </div>
                        <div class="text-left text-gray-700">
                            <p>{{ __('messages.testimonials.testimonial1.content') }}</p>
                        </div>
                        <div class="text-right text-gray-500 mt-3">
                            <p>{{ __('messages.testimonials.testimonial1.author') }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="max-w-[400px] mx-auto p-6 shadow-2xl bg-white rounded-lg">
                        <div class="flex text-yellow-400 mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="font-bold text-2xl text-left w-full mb-3">
                            {{ __('messages.testimonials.testimonial2.title') }}
                        </div>
                        <div class="text-left text-gray-700">
                            <p>{{ __('messages.testimonials.testimonial2.content') }}</p>
                        </div>
                        <div class="text-right text-gray-500 mt-3">
                            <p>{{ __('messages.testimonials.testimonial2.author') }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="max-w-[400px] mx-auto p-6 shadow-2xl bg-white rounded-lg">
                        <div class="flex text-yellow-400 mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="font-bold text-2xl text-left w-full mb-3">
                            {{ __('messages.testimonials.testimonial3.title') }}
                        </div>
                        <div class="text-left text-gray-700">
                            <p>{{ __('messages.testimonials.testimonial3.content') }}</p>
                        </div>
                        <div class="text-right text-gray-500 mt-3">
                            <p>{{ __('messages.testimonials.testimonial3.author') }}</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="max-w-[460px] mx-auto p-6 shadow-2xl bg-white rounded-lg">
                        <div class="flex text-yellow-400 mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="font-bold text-2xl text-left w-full mb-3">
                            {{ __('messages.testimonials.testimonial4.title') }}
                        </div>
                        <div class="text-left text-gray-700">
                            <p>{{ __('messages.testimonials.testimonial4.content') }}</p>
                        </div>
                        <div class="text-right text-gray-500 mt-3">
                            <p>{{ __('messages.testimonials.testimonial4.author') }}</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="max-w-[460px] mx-auto p-6 shadow-2xl bg-white rounded-lg">
                        <div class="flex text-yellow-400 mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="font-bold text-2xl text-left w-full mb-3">
                            {{ __('messages.testimonials.testimonial5.title') }}
                        </div>
                        <div class="text-left text-gray-700">
                            <p>{{ __('messages.testimonials.testimonial5.content') }}</p>
                        </div>
                        <div class="text-right text-gray-500 mt-3">
                            <p>{{ __('messages.testimonials.testimonial5.author') }}</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="max-w-[460px] mx-auto p-6 shadow-2xl bg-white rounded-lg">
                        <div class="flex text-yellow-400 mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="font-bold text-2xl text-left w-full mb-3">
                            {{ __('messages.testimonials.testimonial6.title') }}
                        </div>
                        <div class="text-left text-gray-700">
                            <p>{{ __('messages.testimonials.testimonial6.content') }}</p>
                        </div>
                        <div class="text-right text-gray-500 mt-3">
                            <p>{{ __('messages.testimonials.testimonial6.author') }}</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Custom Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Add Swiper CSS and JS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<style>
    .swiper-pagination {
        position: relative !important;
        margin-top: 20px;
        z-index: 10;
        display: flex !important;
        justify-content: center;
        gap: 8px;
    }
    .swiper-pagination-bullet {
        width: 12px !important;
        height: 12px !important;
        background: #4f46e5 !important;
        opacity: 0.3 !important;
        display: block !important;
    }
    .swiper-pagination-bullet-active {
        opacity: 1 !important;
    }
</style>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
         const swiper = new Swiper('.testimonials-swiper', {
            spaceBetween: 20,
            loop: false,
            slidesPerView: 1,
            initialSlide: 1,
            watchSlidesProgress: true,
            slideToClickedSlide: true,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                type: 'bullets',
                clickable: false,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '" style="background: #4f46e5; width: 12px; height: 12px; display: inline-block; border-radius: 50%; margin: 0 5px; opacity: 0.5; cursor: pointer;"></span>';
                },
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    });
</script>
<style>
    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: #c7d2fe;
        border: 2px solid transparent;
        opacity: 0.7;
        margin: 0 6px !important;
        transition: all 0.3s ease;
    }
    .swiper-pagination-bullet-active {
        background: #4f46e5;
        opacity: 1;
        transform: scale(1.2);
        box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.3);
    }
</style>
