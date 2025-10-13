<div class="text-indigo-700 pt-10 pb-16">
    <div class="w-full">
        <p class="text-2xl flex items-center justify-center mb-8">
            Know our &nbsp; <strong> Customers Testimonials</strong>
        </p>
    </div>
    
    <!-- Swiper Container -->
    <div class="relative max-w-full w-full mx-auto px-16 pb-5" >
        <div class="testimonials-swiper swiper  h-[300px]">
            <div class="swiper-wrapper">
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="max-w-[400px] mx-auto p-6 shadow-2xl bg-white rounded-lg">
                        <div class="font-bold text-2xl text-left w-full mb-3">
                            Very impressive!
                        </div>
                        <div class="text-left text-gray-700">
                            <p>This is an addendum to the review I recently posted. On the same day the review was published (very helpful liaison with gringos) called and affirmed that they wanted to make me happy with the upper. She advised I could return for a full replacement.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="max-w-[400px] mx-auto p-6 shadow-2xl bg-white rounded-lg">
                        <div class="font-bold text-2xl text-left w-full mb-3">
                            Excellent Service!
                        </div>
                        <div class="text-left text-gray-700">
                            <p>The dental team was professional and caring. They made me feel comfortable throughout the entire procedure. I highly recommend their services to anyone looking for quality dental care.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="max-w-[400px] mx-auto p-6 shadow-2xl bg-white rounded-lg">
                        <div class="font-bold text-2xl text-left w-full mb-3">
                            Life Changing!
                        </div>
                        <div class="text-left text-gray-700">
                            <p>After years of being self-conscious about my smile, the team at Núcleo Dental gave me the confidence to smile again. The results were beyond my expectations!</p>
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
        // Debug: Check if pagination element exists
        const paginationEl = document.querySelector('.swiper-pagination');
        console.log('Pagination element:', paginationEl);
        
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
    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: #c7d2fe; /* Lighter indigo for inactive dots */
        border: 2px solid transparent;
        opacity: 0.7;
        margin: 0 6px !important;
        transition: all 0.3s ease;
        position: relative;
    }
    .swiper-pagination-bullet-active {
        background: #4f46e5;
        opacity: 1;
        transform: scale(1.2);
        box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.3);
    }
    </style>
{{-- <!-- Custom Styles -->
<style>
    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: #c7d2fe; /* Lighter indigo for inactive dots */
        border: 2px solid transparent;
        opacity: 0.7;
        margin: 0 6px !important;
        transition: all 0.3s ease;
        position: relative;
    }
    .swiper-pagination-bullet-active {
        background: #4f46e5;
        opacity: 1;
        transform: scale(1.2);
        box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.3);
    }
    .swiper-slide {
        width: 80%;
        max-width: 400px;
        opacity: 0.6;
        transition: all 0.3s ease;
        transform: scale(0.9);
        pointer-events: none;
    }
    .swiper-slide-active,
    .swiper-slide-prev,
    .swiper-slide-next {
        pointer-events: auto;
    }
    .swiper-slide-active {
        opacity: 1;
        transform: scale(1);
        z-index: 1;
    }
    @media (min-width: 640px) {
        .swiper-slide {
            width: 70%;
        }
    }
    @media (min-width: 1024px) {
        .swiper-slide {
            width: 60%;
        }
    }
</style> --}}

