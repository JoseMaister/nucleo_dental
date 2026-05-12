<div class="bg-gray-300 mx-4 md:mx-10 my-12 px-6 md:px-20 py-12 rounded-[50px]">

    <!-- TITULO -->
    <div class="text-center text-3xl md:text-5xl text-indigo-700 pt-6 md:px-28">
        <strong>{{ __('messages.cosmetic.title') }}</strong>
    </div>

    <!-- DESCRIPCIONES -->
    <div class="mt-6 space-y-4">
        <p class="text-lg md:text-2xl text-gray-500 text-justify">
            {{ __('messages.cosmetic.description1') }}
        </p>
        <p class="text-lg md:text-2xl text-gray-500 text-justify">
            {{ __('messages.cosmetic.description2') }}
        </p>
        <p class="text-lg md:text-2xl text-gray-500 text-justify">
            {{ __('messages.cosmetic.description3') }}
        </p>
    </div>

    <!-- SLIDER -->
    <div class="relative w-full overflow-hidden py-14">

        <!-- FLECHAS -->
        <button id="prevBtn"
            class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white p-3 rounded-full shadow">
            ◀
        </button>
        <button id="nextBtn"
            class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white p-3 rounded-full shadow">
            ▶
        </button>

        <!-- TRACK -->
        <div id="cosmetic-slider" class="flex gap-6 transition-transform duration-700 touch-pan-x">

            @php
                $services = [
                    ['img'=>'01.png','key'=>'veneers', 'route' => 'porcelain-veneers'],
                    ['img'=>'02.png','key'=>'whitening', 'route' => 'cosmetic-dentistry'],
                    ['img'=>'03.png','key'=>'fillings', 'route' => 'general-dentistry'],
                    ['img'=>'01.png','key'=>'cleanings', 'route' => 'general-dentistry'],
                    ['img'=>'02.png','key'=>'cosmetic_dentistry', 'route' => 'cosmetic-dentistry'],
                    ['img'=>'03.png','key'=>'dental_crowns', 'route' => 'crowns-bridges'],
                    ['img'=>'04.png','key'=>'dental_implants', 'route' => 'dental-implants'],
                    ['img'=>'05.png','key'=>'zygomatic_implants', 'route' => 'zygomatic-implants'],
                    ['img'=>'03.png','key'=>'full_mouth_restoration', 'route' => 'full-mouth-restoration'],
                    ['img'=>'06.png','key'=>'dentures', 'route' => 'dentures'],
                    ['img'=>'01.png','key'=>'snap_on_dentures', 'route' => 'snap-on-dentures'],
                    ['img'=>'07.png','key'=>'endodontics', 'route' => 'endodontics'],
                    ['img'=>'08.png','key'=>'extractions', 'route' => 'general-dentistry'],
                    ['img'=>'10.png','key'=>'orthodontics', 'route' => 'orthodontics'],
                    ['img'=>'11.png','key'=>'pediatric_dentistry', 'route' => 'pediatric-dentistry'],
                    ['img'=>'12.png','key'=>'periodontics', 'route' => 'periodontal-treatment'],
                    ['img'=>'02.png','key'=>'maxillofacial_surgery', 'route' => 'maxillofacial-surgery'],
                    ['img'=>'03.png','key'=>'bone_grafting', 'route' => 'bone-grafting'],
                    ['img'=>'04.png','key'=>'sedation_dentistry', 'route' => 'sedation-dentistry'],
                ];
            @endphp

            @foreach($services as $service)
                <a href="{{ route($service['route']) }}" class="relative border border-white border-[4px] pt-[120px] mt-[120px] p-6 md:p-8 rounded-[50px]
                             w-[260px] sm:w-[300px] md:w-[350px] flex-shrink-0 bg-gray-300 group hover:bg-white transition-all duration-500" style="padding-top: 120px !important;">
                    <div class="absolute -top-[100px] right-[50%] translate-x-1/2 bg-white p-3 rounded-full group-hover:scale-110 transition-transform duration-500 shadow-lg">
                        <img src="{{ asset('images/cosmetic/'.$service['img']) }}"
                             class="w-[140px] md:w-[160px] h-[140px] md:h-[160px] object-contain" alt="">
                    </div>

                    <div class="text-xl md:text-3xl font-bold text-[#293277] text-center group-hover:text-indigo-600 transition-colors">
                        {{ __('messages.cosmetic.services.'.$service['key'].'.title') }}
                    </div>

                    <div class="text-base md:text-xl text-gray-500 text-center mt-2 mb-6">
                        {{ __('messages.cosmetic.services.'.$service['key'].'.description') }}
                    </div>

                    <div class="text-center mt-auto">
                        <span class="text-indigo-600 font-bold flex items-center justify-center gap-2 group-hover:gap-4 transition-all">
                            {{ __('messages.global_sections.learn_more') ?? 'Learn More' }}
                            <i class="fas fa-arrow-right text-sm"></i>
                        </span>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
</div>

<!-- JS -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('cosmetic-slider');
    const prev = document.getElementById('prevBtn');
    const next = document.getElementById('nextBtn');

    const original = Array.from(slider.children);
    let index = 0;
    let interval;
    let startX = 0;

    function visibleCards() {
        const w = window.innerWidth;
        if (w < 640) return 1;
        if (w < 1024) return 2;
        return 3;
    }

    function cardWidth() {
        return slider.children[0].offsetWidth + 24;
    }

    function setup() {
        slider.innerHTML = '';
        original.forEach(c => slider.appendChild(c));
        original.slice(0, visibleCards()).forEach(c => {
            slider.appendChild(c.cloneNode(true));
        });
        index = 0;
        slider.style.transition = 'none';
        slider.style.transform = 'translateX(0)';
    }

    function move(dir = 1) {
        index += dir;
        slider.style.transition = 'transform 0.7s ease-in-out';
        slider.style.transform = `translateX(-${index * cardWidth()}px)`;

        if (index >= original.length) {
            setTimeout(() => {
                slider.style.transition = 'none';
                slider.style.transform = 'translateX(0)';
                index = 0;
            }, 700);
        }

        if (index < 0) {
            index = original.length - 1;
            slider.style.transition = 'none';
            slider.style.transform = `translateX(-${index * cardWidth()}px)`;
        }
    }

    function startAuto() {
        interval = setInterval(() => move(1), 4000);
    }

    function stopAuto() {
        clearInterval(interval);
    }

    /* Eventos */
    next.onclick = () => move(1);
    prev.onclick = () => move(-1);

    slider.addEventListener('mouseenter', stopAuto);
    slider.addEventListener('mouseleave', startAuto);

    slider.addEventListener('touchstart', e => {
        startX = e.touches[0].clientX;
    });

    slider.addEventListener('touchend', e => {
        const endX = e.changedTouches[0].clientX;
        if (startX - endX > 50) move(1);
        if (endX - startX > 50) move(-1);
    });

    window.addEventListener('resize', setup);

    setup();
    startAuto();
});
</script>
