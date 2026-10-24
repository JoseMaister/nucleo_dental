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
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card cursor-pointer hover:bg-opacity-20 transition-all duration-300" onclick="openServicePopup('dental_implants')">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/cosmetic/04.png') }}" alt="{{ __('messages.services_popup.dental_implants.title') }}" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.dental_implants.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.dental_implants.description') }}</span>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.dental_implants.killer') }}</span>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card cursor-pointer hover:bg-opacity-20 transition-all duration-300" onclick="openServicePopup('full_mouth_restoration')">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/cosmetic/03.png') }}" alt="{{ __('messages.services_popup.full_mouth_restoration.title') }}" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.full_mouth_restoration.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.full_mouth_restoration.description') }}</span>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.full_mouth_restoration.killer') }}</span>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card cursor-pointer hover:bg-opacity-20 transition-all duration-300" onclick="openServicePopup('zygomatic_implants')">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/cosmetic/05.png') }}" alt="{{ __('messages.services_popup.zygomatic_implants.title') }}" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.zygomatic_implants.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.zygomatic_implants.description') }}</span>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.zygomatic_implants.killer') }}</span>
                    </div>
                </div>
                 
                <!-- Service 4 -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card cursor-pointer hover:bg-opacity-20 transition-all duration-300" onclick="openServicePopup('cosmetic_dentistry')">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/cosmetic/02.png') }}" alt="{{ __('messages.services_popup.cosmetic_dentistry.title') }}" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.cosmetic_dentistry.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.cosmetic_dentistry.description') }}</span>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.cosmetic_dentistry.killer') }}</span>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card cursor-pointer hover:bg-opacity-20 transition-all duration-300" onclick="openServicePopup('sedation')">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/cosmetic/04.png') }}" alt="{{ __('messages.services_popup.sedation.title') }}" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.sedation.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.sedation.description') }}</span>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.sedation.killer') }}</span>
                    </div>
                </div>
                
                <!-- Duplicated slides for infinite loop effect -->
                <!-- Service 1 (duplicate) -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card cursor-pointer hover:bg-opacity-20 transition-all duration-300" onclick="openServicePopup('dental_implants')">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/cosmetic/04.png') }}" alt="{{ __('messages.services_popup.dental_implants.title') }}" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.dental_implants.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.dental_implants.description') }}</span>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.dental_implants.killer') }}</span>
                    </div>
                </div>
                
                <!-- Service 2 (duplicate) -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card cursor-pointer hover:bg-opacity-20 transition-all duration-300" onclick="openServicePopup('full_mouth_restoration')">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/cosmetic/03.png') }}" alt="{{ __('messages.services_popup.full_mouth_restoration.title') }}" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.full_mouth_restoration.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.full_mouth_restoration.description') }}</span>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.full_mouth_restoration.killer') }}</span>
                    </div>
                </div>
                
                <!-- Service 3 (duplicate) -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card cursor-pointer hover:bg-opacity-20 transition-all duration-300" onclick="openServicePopup('zygomatic_implants')">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/cosmetic/05.png') }}" alt="{{ __('messages.services_popup.zygomatic_implants.title') }}" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.zygomatic_implants.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.zygomatic_implants.description') }}</span>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.zygomatic_implants.killer') }}</span>
                    </div>
                </div>
                
                <!-- Service 4 (duplicate) -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card cursor-pointer hover:bg-opacity-20 transition-all duration-300" onclick="openServicePopup('cosmetic_dentistry')">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/cosmetic/02.png') }}" alt="{{ __('messages.services_popup.cosmetic_dentistry.title') }}" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.cosmetic_dentistry.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.cosmetic_dentistry.description') }}</span>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.cosmetic_dentistry.killer') }}</span>
                    </div>
                </div>
 
                <!-- Service 5 (duplicate) -->
                <div class="service-slide flex-shrink-0 w-full px-4">
                    <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 mx-auto border-l border-r border-b border-white rounded-b-[50px] pt-16 pb-6 px-6 bg-white bg-opacity-10 service-card cursor-pointer hover:bg-opacity-20 transition-all duration-300" onclick="openServicePopup('sedation')">
                        <div class="absolute -top-10 w-24 h-24 flex items-center justify-center p-2">
                            <img src="{{ asset('images/cosmetic/04.png') }}" alt="{{ __('messages.services_popup.sedation.title') }}" class="w-full h-full object-contain">
                        </div>
                        <p class="text-2xl font-bold mt-4 text-center">{{ __('messages.services.sedation.title') }}</p>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.sedation.description') }}</span>
                        <span class="text-sm text-center mt-2">{{ __('messages.services.sedation.killer') }}</span>
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
        <a href="{{ route('gallery') }}" class="inline-flex items-center gap-2 border-2 border-white px-10 py-4 rounded-full hover:bg-white hover:text-indigo-700 transition-all font-bold shadow-lg">
            <i class="fas fa-images"></i>
            {{ __('messages.services.view_gallery') }}
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
            totalSlides: 5, // Original slides count
            duplicatedSlides: 5, // Duplicated slides count
            actualTotalSlides: 10, // Total slides in DOM
            
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

        // Equalize all service card heights to the tallest one
        function equalizeCardHeights() {
            const cards = document.querySelectorAll('.service-card');
            // Reset to auto so we can measure natural height
            cards.forEach(card => card.style.height = 'auto');
            // Find the tallest
            let maxH = 0;
            cards.forEach(card => {
                const h = card.offsetHeight;
                if (h > maxH) maxH = h;
            });
            // Apply to all
            if (maxH > 0) {
                cards.forEach(card => card.style.height = maxH + 'px');
            }
        }

        equalizeCardHeights();
        window.addEventListener('resize', equalizeCardHeights);
        
        // Service popup functionality
        const serviceData = @json(__('messages.services_popup'));

        const serviceRoutes = {
            dental_implants: @json(route('dental-implants')),
            full_mouth_restoration: @json(route('full-mouth-restoration')),
            zygomatic_implants: @json(route('zygomatic-implants')),
            cosmetic_dentistry: @json(route('cosmetic-dentistry')),
            sedation: @json(route('sedation-dentistry')),
        };
        // Make function global
        window.openServicePopup = function(serviceType) {
            console.log('openServicePopup called with:', serviceType);
            const popup = document.getElementById('servicePopup');
            const content = document.getElementById('popupContent');
            const service = serviceData[serviceType];
            
            if (!service) {
                console.log('Service not found:', serviceType);
                return;
            }
            
            console.log('Service found:', service);
            
            content.innerHTML = `
                
                <div class="space-y-6">
                    <div>
                        <p class="text-gray-600 leading-relaxed">${service.description}</p>
                    </div>
                    
                    <div>
                        <ol class="space-y-2">
                            ${service.how_it_works.map((step, index) => `
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm mr-3 mt-0.5">${index + 1}</span>
                                    <span class="text-gray-600">${step}</span>
                                </li>
                            `).join('')}
                        </ol>
                    </div>
                    
                    <div>
                        <ul class="space-y-2">
                            ${service.benefits.map(benefit => `
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-600">${benefit}</span>
                                </li>
                            `).join('')}
                        </ul>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-4 border-t">
                        <div>
                            <p class="text-gray-600">${service.duration}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">${service.cost}</p>
                        </div>
                    </div>

                    ${serviceRoutes[serviceType] ? `
                    <div class="pt-6 text-center">
                        <a href="${serviceRoutes[serviceType]}" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-full font-bold hover:bg-blue-700 transition shadow-lg">
                            ${serviceData.view_full_details}
                        </a>
                    </div>
                    ` : ''}
                
                </div>
            `;
            
            popup.classList.remove('hidden');
            popup.classList.add('flex');
            document.body.style.overflow = 'hidden';
        };

        window.closeServicePopup = function() {
            const popup = document.getElementById('servicePopup');
            popup.classList.add('hidden');
            popup.classList.remove('flex');
            document.body.style.overflow = 'auto';
        };

        // Close popup when clicking outside
        document.getElementById('servicePopup').addEventListener('click', function(e) {
            if (e.target === this) {
                closeServicePopup();
            }
        });

        // Close popup with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeServicePopup();
            }
        });
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
        min-height: 280px;
        height: auto;
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

<!-- Service Popup Modal -->
<div id="servicePopup" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="relative">
            <!-- Close Button -->
            <button onclick="closeServicePopup()" class="absolute top-4 right-4 z-10 bg-white rounded-full p-2 shadow-lg hover:bg-gray-100 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <!-- Popup Content -->
            <div id="popupContent" class="p-8">
                <!-- Content will be dynamically inserted here -->
            </div>
        </div>

    </div>
</div>
