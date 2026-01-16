<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<style>
    .swiper-pagination-bullet {
    width: 32px;
    height: 4px;
    border-radius: 2px;
    background: rgba(255,255,255,0.4);
    opacity: 1;
}

.swiper-pagination-bullet-active {
    background: white;
}

</style>
@props([
    'imageUrl' => '',
    'name' => '',
    'specialties' => [],
    'content' => '',
    'sections' => [],
    'showVideo' => false,
    'videos' => []
])

@php
    $uid = uniqid('doctor_video_');
@endphp


<div class="pt-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-start">

            <!-- IMAGEN -->
            <div class="lg:w-4/12 mb-12 lg:mb-0 overflow-hidden">
                <div class="relative w-[80%] h-180 mx-auto">

                    <div class="bg-blue-100 absolute -top-6 -right-6 w-full h-full -z-10 rounded-sm"></div>

                    <div class="relative z-10 w-[120%] h-[120%] -ml-[10%] -mt-[10%] overflow-hidden">
                        <img
                            src="{{ $imageUrl }}"
                            alt="{{ $name }}"
                            class="w-full h-full object-cover rounded-sm shadow-lg"
                        >
                    </div>

                    @if($showVideo && count($videos))

                        <div class="absolute bottom-4 inset-x-0 flex justify-center z-50">
                            <button
                                type="button"
                                onclick="openDoctorVideo('{{ $uid }}')"
                                class="flex items-center gap-2 px-5 py-3 rounded-full bg-white text-blue-700 font-medium shadow-lg"
                            >
                                <span class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         class="w-4 h-4 ml-0.5 fill-white">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </span>
                                <span>{{ __('messages.about.video') }}</span>
                            </button>
                        </div>
                    @endif

                </div>
            </div>

            <!-- TEXTO -->
            <div class="lg:w-8/12 lg:pl-10">
                <div class="max-w-3xl">
                    <h2 class="text-2xl font-bold text-blue-800">{{ $name }}</h2>

                    <div class="flex items-start mt-2">
                        <div class="flex-shrink-0 mr-4 mt-1">
                            <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>

                        <div class="flex-1">
                            @if(count($specialties))
                                <p class="text-gray-400 font-semibold text-2xl">
                                    {{ implode(' / ', $specialties) }}
                                </p>
                            @endif

                            {!! $content !!}
                        </div>
                    </div>

                    @foreach($sections as $section)
                        <div class="max-w-3xl mt-4">
                            @if(isset($section['title']))
                                <p class="text-2xl font-bold text-gray-800">
                                    {{ $section['title'] }}
                                </p>
                            @endif

                            <div class="flex items-start">
                                <div class="flex-shrink-0 mr-4 mt-1">
                                    {!! $section['icon'] ?? '' !!}
                                </div>
                                <div class="flex-1">
                                    {!! $section['content'] ?? '' !!}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-gray-800 my-5 w-[90%] mx-auto"></div>
</div>

<div
    id="modal-{{ $uid }}"
    class="fixed inset-0 bg-black/80 z-[999] hidden flex items-center justify-center p-2 sm:p-4 md:p-6"
>
    <div class="relative bg-black rounded-lg overflow-hidden w-full h-full sm:h-auto sm:w-[90%] md:w-[85%] lg:w-[80%] xl:max-w-5xl sm:aspect-video max-w-[95vw]">

        <button
            onclick="closeDoctorVideo('{{ $uid }}')"
            class="absolute top-2 right-2 sm:top-3 sm:right-3 z-30 w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center rounded-full bg-black/70 text-white text-lg sm:text-xl"
        >✕</button>

        <div class="swiper h-full w-full" id="swiper-{{ $uid }}">
            <div class="swiper-wrapper">
                @foreach($videos as $video)
                    <div class="swiper-slide flex items-center justify-center bg-black">
                        <video
                            class="w-full h-full object-contain max-w-full max-h-full"
                            playsinline
                            preload="auto"
                            muted
                            controls
                        >
                            <source src="{{ $video }}" type="video/mp4">
                        </video>

                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>


<script>
let doctorSwipers = {};

function openDoctorVideo(id) {
    const modal = document.getElementById('modal-' + id);
    modal.classList.remove('hidden');

    if (!doctorSwipers[id]) {
        doctorSwipers[id] = new Swiper('#swiper-' + id, {
            loop: true,
            pagination: {
                el: '#swiper-' + id + ' .swiper-pagination',
                clickable: true,
            },
            on: {
                slideChangeTransitionEnd() {
                    playActiveVideo(id);
                }
            }
        });
    }

    setTimeout(() => {
        playActiveVideo(id);
    }, 200);
}

function playActiveVideo(id) {
    const container = document.getElementById('swiper-' + id);

    container.querySelectorAll('video').forEach(v => {
        v.pause();
        v.currentTime = 0;
        v.muted = true;
    });

    const activeVideo = container.querySelector('.swiper-slide-active video');
    if (activeVideo) {
        activeVideo.muted = false;
        activeVideo.volume = 1;
        activeVideo.play().catch(() => {});
    }
}

function closeDoctorVideo(id) {
    const modal = document.getElementById('modal-' + id);
    modal.classList.add('hidden');

    modal.querySelectorAll('video').forEach(video => {
        video.pause();
        video.currentTime = 0;
        video.muted = true;
    });
}
</script>


