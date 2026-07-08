<!-- HERO -->
<div class="relative w-full h-[500px] bg-cover bg-center flex items-center justify-center"
     style="background-image: url('{{ asset('images/100313.webp') }}');">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-indigo-950/70"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-8 text-center text-white">

        <p class="uppercase tracking-[0.3em] text-sm md:text-base font-semibold text-indigo-200 mb-5">
            {{ __('messages.aboutus.page.overline') }}
        </p>

        <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold leading-tight mb-6">
    {{ __('messages.aboutus.page.title_line_1') }}
    <br>
    <span class="text-indigo-200 text-xl md:text-2xl font-medium">
        {{ __('messages.aboutus.page.title_line_2') }}
    </span>
</h1>

        <p class="text-lg md:text-xl leading-relaxed max-w-4xl mx-auto text-indigo-100">
            {{ __('messages.aboutus.page.subtitle') }}
        </p>

    </div>
</div>