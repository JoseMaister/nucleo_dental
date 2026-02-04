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
        <button type="button" id="services-prev" class="absolute left-4 top-1/2 transform -translate-y-1/2 z-20 rounded-full bg-white w-12 h-12 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition-colors shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        
        <div class="services-slider max-w-6xl mx-auto overflow-hidden">
            <div class="services-track flex transition-transform duration-500 ease-in-out">
                <!-- Service 1 -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/implants.png') }}" alt="Dental Implants" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.dental_implants.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.dental_implants.description') }}</span>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64  max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/porcelain_veneers.png') }}" alt="Porcelain Veneers" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.porcelain_veneers.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.porcelain_veneers.description') }}</span>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <svg id="Capa_2" data-name="Capa 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205.11 143.4"
                            class="w-full h-full object-contain">
                                <defs>
                                    <style>
                                    .cls-1 {
                                        fill: #ffffff;
                                    }
                                    </style>
                                </defs>
                                <g id="Capa_1-2" data-name="Capa 1">
                                    <g id="tJd8e3.tif">
                                    <g>
                                        <path class="cls-1" d="M31.17,12.66c.42.43,2.11,1.1,2.75,1.09C83.44.56,138.33-.3,187.88,13.39c7.44,2.06,15.5,3.59,16.63,12.84,1.37,11.27-.85,24.93.01,36.46-1.48,6.75-7.68,11.61-14.69,10.69v10.92c6.51-.66,13.57,4.23,14.61,10.77.93,5.9.83,25.37.13,31.52-.85,7.57-6.79,10.5-13.45,11.65-33.29,5.77-73.68,5.73-107.43,4.45-16.71-.64-36.51-1.36-52.85-4.45-5.6-1.06-10.19-3.46-12.08-9.21-1.48-4.5-1.4-26.98-.77-32.41.92-7.94,7.37-12.87,15.22-12.34v-10.92c-8.28.82-14.46-4.6-15.28-12.83-.59-5.91,1.09-15.2-.26-20.48-.17-.64-4.44-8.75-4.8-9.11-1.84-1.84-9.3-4.05-11.46-6.13-2.41-2.31-1.45-4.38.73-6.25,2.57-2.2,8.88-4.08,10.73-5.92.97-.96,3.46-6.96,4.62-8.75,7.3-11.28,10.01,5.06,13.68,8.75ZM189.83,65.74c3.43.37,6.4-1.06,7.06-4.67-.86-10.47,1.27-23.06.05-33.27-.47-3.97-2.64-4.48-5.9-5.56-39.24-13.04-92.99-13.55-133.37-5.98-1.88.35-14.1,2.59-14.64,3.11-.17.17,1.39,2.43.04,4.67s-9.86,4.89-11.89,6.93c-.41.41-5.36,9.49-5.48,10.07-.62,3.01-.42,18.31.57,21.02,1.19,3.27,3.61,4.06,6.95,3.69v-10.64c0-.33,1.71-3.85,2.08-4.47,5.76-9.68,19.47-9.44,25.52-.18,6.33-4.5,14.57-4.61,20.15,1.09,6.14-8.49,17.73-10.9,26.43-4.59.96.7,3.18,3.62,4.06,3.47,8.3-9.43,22.89-9.51,30.1,1.14,6.27-5.56,13.83-5.73,20.7-1.06,6.37-10.73,22.58-8.74,26.61,2.85.19.55.97,3.13.97,3.39v9ZM22.29,31.9c1.27-5.4,4.83-7.55,9.27-10.09-4.82-2.4-7.66-4.93-9.54-10.1-2.22,5.13-4.78,8.08-10.1,10.1l6.29,3.53,4.07,6.56ZM55.58,73.38v-15.55c0-4.25-5.27-7.49-9.31-6.59-1.75.39-5.42,3.2-5.42,4.95v17.19h14.73ZM107.43,80.48v-21.01c0-1.02-2.38-4.6-3.31-5.42-5.13-4.58-13.76-3.66-17.12,2.46-.29.53-1.4,2.68-1.4,2.97v21.01h21.83ZM137.44,80.48v-19.92c0-.55-1.3-3.59-1.73-4.28-4.46-7.22-15.38-6.9-19.23.78-.27.53-1.42,3.76-1.42,4.04v19.37h22.37ZM182.19,73.38v-16.1c0-2.9-4.49-6.23-7.39-6.31-2.65-.07-7.34,3-7.34,5.76v16.64h14.73ZM77.96,80.48v-18.83c0-4.33-5.17-7.46-9.31-6.58-1.89.4-5.43,3.05-5.43,4.94v20.47h14.73ZM159.81,80.48v-19.37c0-2.57-4.16-6.12-6.83-6.31-2.98-.21-7.91,2.66-7.91,5.76v19.92h14.73ZM55.58,81.02h-14.73v16.64c0,.73,2.46,3.84,3.32,4.32,2.66,1.49,6.85,1.26,9.05-.96.71-.72,2.37-4.16,2.37-5v-15.01ZM182.19,81.02h-14.73v16.64c0,.16,1.34,2.4,1.63,2.74,2.74,3.19,8.4,3.48,11.16.22.37-.44,1.95-3.75,1.95-4.05v-15.55ZM63.22,88.12v17.19c0,1.89,3.54,4.54,5.43,4.94,4.14.88,9.31-2.25,9.31-6.58v-14.73c0-.06-.76-.82-.82-.82h-13.92ZM107.43,88.12h-21.83v17.74c0,.29,1.11,2.44,1.4,2.97,3.44,6.23,11.93,7.1,17.12,2.46.93-.83,3.31-4.41,3.31-5.42v-17.74ZM137.44,88.12h-22.37v16.64c0,4.8,6.56,9.59,11.19,9.59s11.19-4.79,11.19-9.59v-16.64ZM159.81,88.12h-14.73v16.64c0,3.25,4.9,5.98,7.91,5.76,2.67-.19,6.83-3.74,6.83-6.31v-16.1ZM33.21,91.94c-5.42-.31-7.23,2.3-7.66,7.35-.51,5.94-.66,19.82.16,25.53.59,4.08,1.89,4.96,5.73,5.73,16.12,3.25,36.8,3.84,53.36,4.49,32.61,1.27,73.13,1.35,105.23-4.42,3.26-.59,6.07-.85,6.77-4.69.75-4.16.78-25.06.1-29.31-.49-3.09-4.06-5.08-7.06-4.67,1.85,13.39-11.14,23.42-23.2,16.43-4.3,9.79-16.72,13.52-24.56,5.42h-.8c-2.43,5.12-10.01,8.37-15.57,8.21-6.02-.17-10.26-3.53-14.66-7.09-8.32,9.75-22.51,9.22-30.09-1.11-7.39,7.71-21.22,4.76-24.29-5.48-12.57,6.79-25.55-2.25-23.46-16.37Z"/>
                                        <path class="cls-1" d="M122.57,29.32c-4.13.56-16.3,5.85-12.66,11.29,2.96,4.42,7.31-1.34,10.41-2.62,3.62-1.5,7.4-1.64,11.1-.33,2.88,1.02,8.18,7.1,10.52,1.76,1.61-3.69-1.72-5.67-4.49-7.24-4.75-2.69-9.39-3.6-14.88-2.85Z"/>
                                        <path class="cls-1" d="M122.57,29.32c5.48-.75,10.13.16,14.88,2.85,2.77,1.57,6.1,3.55,4.49,7.24-2.33,5.34-7.64-.74-10.52-1.76-3.7-1.31-7.48-1.17-11.1.33-3.09,1.28-7.45,7.05-10.41,2.62-3.64-5.44,8.53-10.73,12.66-11.29Z"/>
                                    </g>
                                    </g>
                                </g>
                                </svg>
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.teeth_whitening.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.teeth_whitening.description') }}</span>
                    </div>
                </div>
                 
                <!-- Service 4 -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/porcelain_veneers.png') }}" alt="Porcelain Veneers" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.orthodontics.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.orthodontics.description') }}</span>
                    </div>
                </div>
                
                <!-- Duplicated slides for infinite loop effect -->
                <!-- Service 1 (duplicate) -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/implants.png') }}" alt="Dental Implants" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.dental_implants.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.dental_implants.description') }}</span>
                    </div>
                </div>
                
                <!-- Service 2 (duplicate) -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64  max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/porcelain_veneers.png') }}" alt="Porcelain Veneers" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.porcelain_veneers.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.porcelain_veneers.description') }}</span>
                    </div>
                </div>
                
                <!-- Service 3 (duplicate) -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <svg id="Capa_2" data-name="Capa 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205.11 143.4"
                            class="w-full h-full object-contain">
                                <defs>
                                    <style>
                                    .cls-1 {
                                        fill: #ffffff;
                                    }
                                    </style>
                                </defs>
                                <g id="Capa_1-2" data-name="Capa 1">
                                    <g id="tJd8e3.tif">
                                    <g>
                                        <path class="cls-1" d="M31.17,12.66c.42.43,2.11,1.1,2.75,1.09C83.44.56,138.33-.3,187.88,13.39c7.44,2.06,15.5,3.59,16.63,12.84,1.37,11.27-.85,24.93.01,36.46-1.48,6.75-7.68,11.61-14.69,10.69v10.92c6.51-.66,13.57,4.23,14.61,10.77.93,5.9.83,25.37.13,31.52-.85,7.57-6.79,10.5-13.45,11.65-33.29,5.77-73.68,5.73-107.43,4.45-16.71-.64-36.51-1.36-52.85-4.45-5.6-1.06-10.19-3.46-12.08-9.21-1.48-4.5-1.4-26.98-.77-32.41.92-7.94,7.37-12.87,15.22-12.34v-10.92c-8.28.82-14.46-4.6-15.28-12.83-.59-5.91,1.09-15.2-.26-20.48-.17-.64-4.44-8.75-4.8-9.11-1.84-1.84-9.3-4.05-11.46-6.13-2.41-2.31-1.45-4.38.73-6.25,2.57-2.2,8.88-4.08,10.73-5.92.97-.96,3.46-6.96,4.62-8.75,7.3-11.28,10.01,5.06,13.68,8.75Z"/>
                                        <path class="cls-1" d="M122.57,29.32c-4.13.56-16.3,5.85-12.66,11.29,2.96,4.42,7.31-1.34,10.41-2.62,3.62-1.5,7.4-1.64,11.1-.33,2.88,1.02,8.18,7.1,10.52,1.76,1.61-3.69-1.72-5.67-4.49-7.24-4.75-2.69-9.39-3.6-14.88-2.85Z"/>
                                        <path class="cls-1" d="M122.57,29.32c5.48-.75,10.13.16,14.88,2.85,2.77,1.57,6.1,3.55,4.49,7.24-2.33,5.34-7.64-.74-10.52-1.76-3.7-1.31-7.48-1.17-11.1.33-3.09,1.28-7.45,7.05-10.41,2.62-3.64-5.44,8.53-10.73,12.66-11.29Z"/>
                                    </g>
                                    </g>
                                </g>
                                </svg>
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.teeth_whitening.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.teeth_whitening.description') }}</span>
                    </div>
                </div>
                
                <!-- Service 4 (duplicate) -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/porcelain_veneers.png') }}" alt="Porcelain Veneers" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.orthodontics.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.orthodontics.description') }}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <button type="button" id="services-next" class="absolute right-4 top-1/2 transform -translate-y-1/2 z-20 rounded-full bg-white w-12 h-12 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition-colors shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
    
    <div class="flex justify-center mt-12">
        <a href="#" class="inline-block border-2 border-white px-8 py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors">
            {{ __('messages.services.learn_more') }}
        </a>
    </div>
</div>

<!-- Custom Services Slider -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = {
            track: document.querySelector('.services-track'),
            slides: document.querySelectorAll('.service-slide'),
            prevBtn: document.getElementById('services-prev'),
            nextBtn: document.getElementById('services-next'),
            currentSlide: 0,
            slidesPerView: 1,
            totalSlides: 4, // Original slides count
            duplicatedSlides: 4, // Duplicated slides count
            actualTotalSlides: 8, // Total slides in DOM
            
            init() {
                this.updateSlidesPerView();
                this.updateSlider();
                this.bindEvents();
            },
            
            updateSlidesPerView() {
                const width = window.innerWidth;
                if (width >= 768) {
                    this.slidesPerView = 3;
                } else if (width >= 640) {
                    this.slidesPerView = 2;
                } else {
                    this.slidesPerView = 1;
                }
            },
            
            updateSlider() {
                const slideWidth = 100 / this.slidesPerView;
                const offset = this.currentSlide * slideWidth;
                this.track.style.transform = `translateX(-${offset}%)`;
                
                // Handle seamless infinite loop
                const maxOriginalSlide = this.totalSlides;
                
                // When we reach the duplicated slides, reset to original without animation
                if (this.currentSlide >= maxOriginalSlide) {
                    setTimeout(() => {
                        this.track.style.transition = 'none';
                        this.currentSlide = this.currentSlide - this.totalSlides;
                        const newOffset = this.currentSlide * slideWidth;
                        this.track.style.transform = `translateX(-${newOffset}%)`;
                        setTimeout(() => {
                            this.track.style.transition = 'transform 0.5s ease-in-out';
                        }, 50);
                    }, 500);
                }
                
                // When we go before the first slide, jump to duplicated section
                if (this.currentSlide < 0) {
                    setTimeout(() => {
                        this.track.style.transition = 'none';
                        this.currentSlide = this.currentSlide + this.totalSlides;
                        const newOffset = this.currentSlide * slideWidth;
                        this.track.style.transform = `translateX(-${newOffset}%)`;
                        setTimeout(() => {
                            this.track.style.transition = 'transform 0.5s ease-in-out';
                        }, 50);
                    }, 500);
                }
                
                this.updateButtons();
            },
            
            updateButtons() {
                // Always keep buttons enabled for continuous loop
                this.prevBtn.disabled = false;
                this.nextBtn.disabled = false;
                this.prevBtn.style.opacity = '1';
                this.nextBtn.style.opacity = '1';
            },
            
            next() {
                this.currentSlide++;
                this.updateSlider();
            },
            
            prev() {
                this.currentSlide--;
                this.updateSlider();
            },
            
            bindEvents() {
                this.nextBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    this.next();
                });
                
                this.prevBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    this.prev();
                });
                
                window.addEventListener('resize', () => {
                    this.updateSlidesPerView();
                    // Adjust current slide if needed
                    const maxSlide = Math.max(0, this.totalSlides - this.slidesPerView);
                    if (this.currentSlide > maxSlide) {
                        this.currentSlide = maxSlide;
                    }
                    this.updateSlider();
                });
            }
        };
        
        slider.init();
    });
</script>

<style>
    .services-slider {
        padding: 40px 0 60px;
        width: 100%;
        overflow: hidden;
    }
    
    .services-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
        will-change: transform;
    }
    
    .service-slide {
        flex: 0 0 auto;
        width: 100%;
        padding: 0 1rem;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
    }
    
    @media (min-width: 640px) {
        .service-slide {
            width: 50%;
        }
    }
    
    @media (min-width: 768px) {
        .service-slide {
            width: 33.333%;
        }
    }
    
    .service-card {
        width: 100%;
        max-width: 240px;
        height: 280px;
        position: relative;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    
    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    
    .service-card .absolute {
        position: absolute;
        top: -40px;
    }
</style>

