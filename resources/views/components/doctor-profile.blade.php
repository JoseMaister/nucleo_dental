@props([
    'imageUrl' => '',
    'name' => '',
    'specialties' => [],
    'content' => '',
    'sections' => [],
    'showVideo' => false,
    'videoUrl' => ''
])

@php
    use Illuminate\Support\Str;

    $uid = uniqid('doctor_video_');
    $isMp4 = Str::endsWith($videoUrl, '.mp4');
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

                    @if($showVideo && $videoUrl)
                        <div class="absolute bottom-4 inset-x-0 flex justify-center z-50">
                            <button
                                type="button"
                                onclick="openDoctorVideo('{{ $uid }}', '{{ $videoUrl }}', {{ $isMp4 ? 'true' : 'false' }})"
                                class="flex items-center gap-2 px-5 py-3 rounded-full bg-white text-blue-700 font-medium shadow-lg"
                            >
                                <span class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         class="w-4 h-4 ml-0.5 fill-white">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </span>
                                <span>{{ __('messages.about.hero.video') }}</span>
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

{{-- MODAL --}}
@if($showVideo && $videoUrl)
<div
    id="modal-{{ $uid }}"
    class="fixed inset-0 bg-black/80 z-[999] hidden flex items-center justify-center p-3 sm:p-6"
>
    <div
        class="
            relative bg-black rounded-lg overflow-hidden
            w-full h-full
            sm:h-auto sm:w-[90vw]
            md:w-[80vw]
            lg:max-w-5xl
            sm:aspect-video
        "
    >

        <!-- BOTÓN CERRAR -->
        <button
            onclick="closeDoctorVideo('{{ $uid }}')"
            class="
                absolute top-3 right-3
                z-30
                w-10 h-10
                flex items-center justify-center
                rounded-full
                bg-black/70 text-white
                hover:bg-black
                text-xl
            "
        >
            ✕
        </button>

        @if($isMp4)
            <video
                id="video-{{ $uid }}"
                class="w-full h-full object-contain"
                controls
                playsinline
            ></video>
        @else
            <iframe
                id="iframe-{{ $uid }}"
                class="w-full h-full"
                frameborder="0"
                allow="autoplay; fullscreen"
                allowfullscreen
            ></iframe>
        @endif

    </div>
</div>
@endif


<script>
function openDoctorVideo(id, url, isMp4) {
    const modal = document.getElementById('modal-' + id);
    modal.classList.remove('hidden');

    if (isMp4) {
        const video = document.getElementById('video-' + id);
        video.src = url;
        video.currentTime = 0;
        video.play();
    } else {
        document.getElementById('iframe-' + id).src = url;
    }
}

function closeDoctorVideo(id) {
    const modal = document.getElementById('modal-' + id);
    modal.classList.add('hidden');

    const video = document.getElementById('video-' + id);
    const iframe = document.getElementById('iframe-' + id);

    if (video) {
        video.pause();
        video.src = '';
    }

    if (iframe) {
        iframe.src = '';
    }
}
</script>
