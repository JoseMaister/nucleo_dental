<div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center max-w-7xl mx-auto px-6 py-12">
    <div class="space-y-6">
        <div class="flex flex-wrap justify-center sm:justify-start gap-2 sm:gap-4">
            <img src="{{ asset('images/flags.png') }}" alt="Núcleo Dental" class="h-12 sm:h-14 md:h-16 w-auto">
            <img src="{{ asset('images/flags.png') }}" alt="Núcleo Dental" class="h-12 sm:h-14 md:h-16 w-auto">
            <img src="{{ asset('images/flags.png') }}" alt="Núcleo Dental" class="h-12 sm:h-14 md:h-16 w-auto">
        </div>
        <div class="text-2xl font-medium text-gray-800">
            {{ __('messages.resume.title') }}
        </div>
        <div class="text-gray-600 leading-relaxed">
            {{ __('messages.resume.description') }}
        </div>
    </div>
    <div class="relative w-[80%] md:w-[300px] h-[500px] max-w-md mx-auto bg-gray-200 rounded-lg overflow-hidden group">
        <!-- Video -->
        <video 
            id="dentalVideo" 
            src="{{ asset('videos/dashboard.mp4') }}" 
            class="h-full w-full object-cover"
            loop
            muted
            playsinline
        ></video>
        
        <!-- Play/Pause Overlay -->
        <div class="absolute inset-0 flex items-center justify-center bg-black/20 opacity-100 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer" id="videoControl">
            <div class="w-16 h-16 md:w-20 md:h-20 bg-white/90 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                <svg id="playIcon" class="w-8 h-8 md:w-10 md:h-10 text-indigo-600 ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                </svg>
                <svg id="pauseIcon" class="w-8 h-8 md:w-10 md:h-10 text-indigo-600 hidden" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
                </svg>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('dentalVideo');
        const videoControl = document.getElementById('videoControl');
        const playIcon = document.getElementById('playIcon');
        const pauseIcon = document.getElementById('pauseIcon');
        let isPlaying = false;
 
        // Toggle play/pause
        function togglePlay() {
            if (video.paused) {
                video.play();
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
                isPlaying = true;
            } else {
                video.pause();
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
                isPlaying = false;
            }
        }
 
        // Toggle play/pause when clicking the control
        videoControl.addEventListener('click', togglePlay);
 
        // Update play/pause icon when video ends
        video.addEventListener('ended', function() {
            playIcon.classList.remove('hidden');
            pauseIcon.classList.add('hidden');
            isPlaying = false;
        });
 
        // Hide controls when video is playing, show on hover
        video.addEventListener('play', function() {
            videoControl.style.opacity = '0';
            videoControl.style.pointerEvents = 'none';
        });
 
        video.addEventListener('pause', function() {
            if (!video.ended) {
                videoControl.style.opacity = '1';
                videoControl.style.pointerEvents = 'auto';
            }
        });
 
        // Show controls on hover
        const videoContainer = videoControl.parentElement;
        videoContainer.addEventListener('mouseenter', function() {
            if (isPlaying) {
                videoControl.style.opacity = '1';
                videoControl.style.pointerEvents = 'auto';
            }
        });
 
        videoContainer.addEventListener('mouseleave', function() {
            if (isPlaying) {
                videoControl.style.opacity = '0';
                videoControl.style.pointerEvents = 'none';
            }
        });
    });
</script>