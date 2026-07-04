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
                            <img src="{{ asset('images/cosmetic/04.png') }}" alt="Dental Implants" class="w-full h-full object-contain">
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
                            <img src="{{ asset('images/cosmetic/03.png') }}" alt="Full Mouth Restoration" class="w-full h-full object-contain">
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
                            <img src="{{ asset('images/cosmetic/05.png') }}" alt="Zygomatic Implants" class="w-full h-full object-contain">
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
                            <img src="{{ asset('images/cosmetic/02.png') }}" alt="Cosmetic Dentistry" class="w-full h-full object-contain">
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
                            <img src="{{ asset('images/cosmetic/04.png') }}" alt="Sedation Dentistry" class="w-full h-full object-contain">
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
                            <img src="{{ asset('images/cosmetic/04.png') }}" alt="Dental Implants" class="w-full h-full object-contain">
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
                            <img src="{{ asset('images/cosmetic/03.png') }}" alt="Full Mouth Restoration" class="w-full h-full object-contain">
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
                            <img src="{{ asset('images/cosmetic/05.png') }}" alt="Zygomatic Implants" class="w-full h-full object-contain">
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
                            <img src="{{ asset('images/cosmetic/02.png') }}" alt="Cosmetic Dentistry" class="w-full h-full object-contain">
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
                            <img src="{{ asset('images/cosmetic/04.png') }}" alt="Sedation Dentistry" class="w-full h-full object-contain">
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
        const serviceData = {
            dental_implants: {
                title: {
                    en: 'Dental Implants',
                    es: 'Implantes Dentales'
                },
                description: {
                    en: 'Dental implants are titanium posts surgically positioned into the jawbone beneath your gums. They serve as a permanent, strong, and natural-looking replacement for missing teeth.',
                    es: 'Los implantes dentales son postes de titanio colocados quirúrgicamente en el hueso maxilar debajo de las encías. Sirven como un reemplazo permanente, fuerte y de aspecto natural para los dientes perdidos.'
                },
                howItWorks: {
                    en: [
                        'Consultation and planning with 3D CT imaging',
                        'Surgical placement of titanium implant',
                        'Healing period (3-6 months) for osseointegration',
                        'Abutment placement and final crown attachment'
                    ],
                    es: [
                        'Consulta y planificación con tomografía 3D',
                        'Colocación quirúrgica del implante de titanio',
                        'Período de curación (3-6 meses) para oseointegración',
                        'Colocación del pilar y fijación de la corona final'
                    ]
                },
                benefits: {
                    en: [
                        'Permanent solution for missing teeth',
                        'Natural look and feel',
                        'Preserves jawbone and facial structure',
                        'No impact on adjacent teeth',
                        '95-98% success rate'
                    ],
                    es: [
                        'Solución permanente para dientes perdidos',
                        'Apariencia y sensación natural',
                        'Preserva el hueso maxilar y la estructura facial',
                        'No afecta los dientes adyacentes',
                        'Tasa de éxito del 95-98%'
                    ]
                },
                duration: {
                    en: '3-6 months for complete restoration',
                    es: '3-6 meses para restauración completa'
                },
                cost: {
                    en: 'Starting from $650 per implant',
                    es: 'A partir de $650 por implante'
                },
                link: '{{ route("dental-implants") }}'
            },
            full_mouth_restoration: {
                title: {
                    en: 'Full Mouth Restoration',
                    es: 'Rehabilitación Oral Completa'
                },
                description: {
                    en: 'Complete smile reconstruction designed for patients with extensive dental needs, combining implants, crowns, and advanced treatment planning to restore function and aesthetics.',
                    es: 'Reconstrucción total de sonrisa para pacientes con necesidades dentales extensas, combinando implantes, coronas y planeación avanzada para restaurar la función y la estética.'
                },
                howItWorks: {
                    en: [
                        'Comprehensive dental analysis and 3D diagnostics',
                        'Customized multi-disciplinary treatment design',
                        'Surgical placement of implants and preparatory work',
                        'Fabrication and placement of final crowns or bridges'
                    ],
                    es: [
                        'Análisis dental completo y diagnóstico 3D',
                        'Diseño personalizado de tratamiento multidisciplinario',
                        'Colocación quirúrgica de implantes y fase preparatoria',
                        'Fabricación y colocación de coronas o puentes finales'
                    ]
                },
                benefits: {
                    en: [
                        'Restores complete chewing function and bite alignment',
                        'Complete smile transformation',
                        'Premium materials for natural, long-lasting results',
                        'Coordinated care under one roof'
                    ],
                    es: [
                        'Restaura la función masticatoria completa y la mordida',
                        'Transformación completa de la sonrisa',
                        'Materiales premium para resultados naturales y duraderos',
                        'Atención coordinada bajo un mismo techo'
                    ]
                },
                duration: {
                    en: '2-4 weeks active treatment',
                    es: '2-4 semanas de tratamiento activo'
                },
                cost: {
                    en: 'Request a personalized treatment plan',
                    es: 'Solicite un plan de tratamiento personalizado'
                },
                link: '{{ route("full-mouth-restoration") }}'
            },
            zygomatic_implants: {
                title: {
                    en: 'Zygomatic Implants',
                    es: 'Implantes Cigomáticos'
                },
                description: {
                    en: 'A highly advanced solution for patients with severe bone loss in the upper jaw, anchoring implants directly in the cheekbone (zygoma) to avoid complex bone grafting.',
                    es: 'Una solución muy avanzada para pacientes con pérdida ósea severa en el maxilar superior, anclando los implantes en el hueso del pómulo (cigoma) para evitar injertos óseos complejos.'
                },
                howItWorks: {
                    en: [
                        'Advanced 3D CBCT imaging for surgical mapping',
                        'Precise guided implant placement in zygomatic bone',
                        'Immediate temporary prosthesis attachment',
                        'Healing phase followed by final permanent restoration'
                    ],
                    es: [
                        'Imágenes CBCT 3D avanzadas para mapeo quirúrgico',
                        'Colocación guiada precisa en el hueso cigomático',
                        'Colocación inmediata de prótesis temporal',
                        'Fase de curación seguida de la restauración permanente'
                    ]
                },
                benefits: {
                    en: [
                        'Eliminates the need for long bone graft procedures',
                        'Provides solutions when others have said no',
                        'Faster overall recovery and teeth-in-a-day option',
                        'Highly predictable outcomes for severe bone loss'
                    ],
                    es: [
                        'Elimina la necesidad de largos injertos de hueso',
                        'Ofrece soluciones cuando otros dicen no',
                        'Recuperación general más rápida con opción de dientes en un día',
                        'Resultados predecibles en pérdida ósea severa'
                    ]
                },
                duration: {
                    en: '1-3 sessions (varies per patient)',
                    es: '1-3 sesiones (varía por paciente)'
                },
                cost: {
                    en: 'Contact us for a detailed evaluation',
                    es: 'Contáctenos para una evaluación detallada'
                },
                link: '{{ route("zygomatic-implants") }}'
            },
            cosmetic_dentistry: {
                title: {
                    en: 'Cosmetic Dentistry',
                    es: 'Odontología Cosmética'
                },
                description: {
                    en: 'Enhance the beauty of your smile with veneers, crowns, and aesthetic treatments custom-designed for natural, beautiful, and confident results.',
                    es: 'Mejore la belleza de su sonrisa con carillas, coronas y tratamientos estéticos diseñados a la medida para resultados naturales y hermosos.'
                },
                howItWorks: {
                    en: [
                        'Smile analysis and personalized design planning',
                        'Preparation of teeth for veneers/crowns (if needed)',
                        'Digital impressions and lab fabrication',
                        'Bonding, placement, and bite refinement'
                    ],
                    es: [
                        'Análisis de sonrisa y planificación de diseño personalizado',
                        'Preparación de dientes para carillas/coronas (si aplica)',
                        'Impresiones digitales y fabricación en laboratorio',
                        'Adhesión, colocación y refinamiento de mordida'
                    ]
                },
                benefits: {
                    en: [
                        'Corrects chips, gaps, and severe discoloration',
                        'Refined, natural look made to look effortless',
                        'Boosts self-esteem and smile confidence',
                        'Long-lasting durable restorations'
                    ],
                    es: [
                        'Corrige astillas, espacios y decoloración severa',
                        'Aspecto refinado y natural sin esfuerzo visible',
                        'Mejora la autoestima y la confianza al sonreír',
                        'Restauraciones duraderas y resistentes'
                    ]
                },
                duration: {
                    en: '1-2 weeks',
                    es: '1-2 semanas'
                },
                cost: {
                    en: 'Starting from $250 per tooth',
                    es: 'A partir de $250 por diente'
                },
                link: '{{ route("cosmetic-dentistry") }}'
            },
            sedation: {
                title: {
                    en: 'Sedation Dentistry',
                    es: 'Odontología con Sedación'
                },
                description: {
                    en: 'Relaxed, comfortable treatment options for patients who want a stress-free experience. Administered by a certified anesthesiologist for maximum safety.',
                    es: 'Opciones cómodas y relajadas para pacientes que desean una experiencia sin estrés. Administrada por un anestesiólogo certificado para máxima seguridad.'
                },
                howItWorks: {
                    en: [
                        'Medical history evaluation and consultation',
                        'Administration of conscious or IV sedation',
                        'Continuous monitoring of vital signs during treatment',
                        'Safe recovery phase under professional supervision'
                    ],
                    es: [
                        'Evaluación de historial médico y consulta',
                        'Administración de sedación consciente o intravenosa',
                        'Monitoreo continuo de signos vitales durante el tratamiento',
                        'Fase de recuperación segura bajo supervisión profesional'
                    ]
                },
                benefits: {
                    en: [
                        'Completely eliminates dental anxiety and fear',
                        'Allows complex treatments to be finished in fewer visits',
                        'No memory of the sounds or discomfort of the procedure',
                        'Highly safe and supervised by specialists'
                    ],
                    es: [
                        'Elimina por completo la ansiedad y el miedo dental',
                        'Permite completar tratamientos complejos en menos visitas',
                        'Sin recuerdos de ruidos ni molestias del procedimiento',
                        'Altamente seguro y supervisado por especialistas'
                    ]
                },
                duration: {
                    en: 'Coincides with procedure duration',
                    es: 'Coincide con la duración del procedimiento'
                },
                cost: {
                    en: 'Varies based on session length',
                    es: 'Varía según la duración de la sesión'
                },
                link: '{{ route("sedation-dentistry") }}'
            }
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
            
            // Detect current language
            const currentLang = document.documentElement.lang || 'en';
            const lang = currentLang.startsWith('es') ? 'es' : 'en';
            
            content.innerHTML = `
                
                <div class="space-y-6">
                    <div>
                        <p class="text-gray-600 leading-relaxed">${service.description[lang]}</p>
                    </div>
                    
                    <div>
                        <ol class="space-y-2">
                            ${service.howItWorks[lang].map((step, index) => `
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm mr-3 mt-0.5">${index + 1}</span>
                                    <span class="text-gray-600">${step}</span>
                                </li>
                            `).join('')}
                        </ol>
                    </div>
                    
                    <div>
                        <ul class="space-y-2">
                            ${service.benefits[lang].map(benefit => `
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
                            <p class="text-gray-600">${service.duration[lang]}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">${service.cost[lang]}</p>
                        </div>
                    </div>

                    ${service.link ? `
                    <div class="pt-6 text-center">
                        <a href="${service.link}" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-full font-bold hover:bg-blue-700 transition shadow-lg">
                            ${lang === 'es' ? 'Ver Detalles Completos' : 'View Full Details'}
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

