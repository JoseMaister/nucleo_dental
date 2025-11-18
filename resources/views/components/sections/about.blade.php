<div class="bg-gray-400 text-white">
    <div class="w-full bg-white">
        <p class="text-4xl md:text-5xl lg:text-6xl text-gray-400 p-4 md:p-6">
            {{ __('messages.about.title') }}
        </p>
    </div>
    
    <div class="w-full">
        <!-- Doctor's Image - Shows on top on mobile/tablet, right on desktop -->
        <div class="md:hidden mb-8 flex justify-center">
            <img src="{{ asset('images/doctor.png') }}" alt="Dr. Ernesto Moran" class="max-w-[250px] md:max-w-[300px] w-auto h-auto">
        </div>
        <div class="about-swiper swiper  md:h-[300px] h-auto p-10 py-0">
            <div class="swiper-wrapper  mx-auto pt-5 py-0 md:py-0">
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-0 items-center w-[100%] justify-center align-center h-[100%]">
                        <!-- Text Content -->
                        <div class="space-y-4 md:space-y-6 h-[100%] justify-center align-center w-[80%] m-auto">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center md:text-left">{{ __('messages.about.dr_name') }}</h2>
                            <p class="text-center md:text-left text-sm md:text-base lg:text-lg">
                                {{ __('messages.about.bio') }}
                            </p>
                            <div class="flex justify-center lg:justify-start pt-2">
                                <a href="#" class="inline-block border-2 border-white px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-300 text-sm md:text-base">
                                    {{ __('messages.about.cta') }}
                                </a>
                            </div>
                        </div>
                        
                        <!-- Doctor's Image - Hidden on mobile/tablet, shows on desktop -->
                        <div class="hidden md:flex justify-center lg:justify-end items-end">
                            <img src="{{ asset('images/doctor.png') }}" alt="Dr. Ernesto Moran" class="max-w-[250px] lg:max-w-[350px] w-[35vw] h-auto">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center w-[95%] justify-center">
                        <!-- Text Content -->
                        <div class="space-y-4 md:space-y-6">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold">{{ __('messages.about.dr_name') }}</h2>
                            <p class="text-left text-sm md:text-base lg:text-lg">
                                {{ __('messages.about.bio') }}
                            </p>
                            <div class="flex justify-center lg:justify-start pt-2">
                                <a href="#" class="inline-block border-2 border-white px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-300 text-sm md:text-base">
                                    {{ __('messages.about.cta') }}
                                </a>
                            </div>
                        </div>
                        
                        <!-- Doctor's Image - Hidden on mobile/tablet, shows on desktop -->
                        <div class="hidden md:flex justify-center lg:justify-end items-end">
                            <img src="{{ asset('images/doctor.png') }}" alt="Dr. Ernesto Moran" class="max-w-[250px] lg:max-w-[350px] w-full h-auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Debug: Check if pagination element exists
        const paginationEl = document.querySelector('.swiper-pagination');
        console.log('Pagination element:', paginationEl);
        
         const swiper = new Swiper('.about-swiper', {
            loop: false,
            slidesPerView: 1,
            spaceBetween: 10,
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
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
                    //     // Update pagination when slides change
        //     on: {
        //         init: function() {
        //             this.slides.css('opacity', '0.6').css('transform', 'scale(0.9)');
        //             this.slides.eq(this.activeIndex).css('opacity', '1').css('transform', 'scale(1)');
        //             this.slides.eq(this.activeIndex + 1).css('opacity', '0.8').css('transform', 'scale(0.95)');
        //             this.slides.eq(this.activeIndex - 1).css('opacity', '0.8').css('transform', 'scale(0.95)');
        //         },
        //         slideChange: function() {
        //             this.slides.css('opacity', '0.6').css('transform', 'scale(0.9)');
        //             this.slides.eq(this.activeIndex).css('opacity', '1').css('transform', 'scale(1)');
        //             this.slides.eq(this.activeIndex + 1).css('opacity', '0.8').css('transform', 'scale(0.95)');
        //             this.slides.eq(this.activeIndex - 1).css('opacity', '0.8').css('transform', 'scale(0.95)');
        //         }
        //     },
        });
        //     initialSlide: 1,  // Start with second slide (0-indexed)
        //     slidesPerView: 1,
        //     spaceBetween: 30,
        //     watchSlidesProgress: true,
        //     slideToClickedSlide: true,
        //     pagination: {
        //         el: '.swiper-pagination',
        //         clickable: true,
        //         renderBullet: function (index, className) {
        //             return '<span class="' + className + '" style="background: #4f46e5; width: 12px; height: 12px; display: inline-block; border-radius: 50%; margin: 0 5px; opacity: 0.5; cursor: pointer;"></span>';
        //         },
        //     },
        //     breakpoints: {
        //         640: {
        //             slidesPerView: 2,
        //             spaceBetween: 20,
        //         },
        //         1024: {
        //             slidesPerView: 3,
        //             spaceBetween: 30,
        //         },
        //     },
        //     // Update pagination when slides change
        //     on: {
        //         init: function() {
        //             this.slides.css('opacity', '0.6').css('transform', 'scale(0.9)');
        //             this.slides.eq(this.activeIndex).css('opacity', '1').css('transform', 'scale(1)');
        //             this.slides.eq(this.activeIndex + 1).css('opacity', '0.8').css('transform', 'scale(0.95)');
        //             this.slides.eq(this.activeIndex - 1).css('opacity', '0.8').css('transform', 'scale(0.95)');
        //         },
        //         slideChange: function() {
        //             this.slides.css('opacity', '0.6').css('transform', 'scale(0.9)');
        //             this.slides.eq(this.activeIndex).css('opacity', '1').css('transform', 'scale(1)');
        //             this.slides.eq(this.activeIndex + 1).css('opacity', '0.8').css('transform', 'scale(0.95)');
        //             this.slides.eq(this.activeIndex - 1).css('opacity', '0.8').css('transform', 'scale(0.95)');
        //         }
        //     },
        //     pagination: {
        //         el: '.swiper-pagination',
        //         clickable: true,
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