<div class="relative bg-gray-300 p-10 my-18 pb-[8rem]">

    <!-- TITULOS -->
    <div class="text-indigo-800 text-center text-3xl md:text-5xl font-thin">
        <strong>{{ __('messages.financing_payment.title1') }}</strong>
        {{ __('messages.financing_payment.title2') }}
    </div>

    <div class="border-t border-indigo-800 border-[2px] my-6"></div>

    <div class="text-indigo-800 text-center text-2xl md:text-4xl font-bold">
        {{ __('messages.financing_payment.subtitle') }}
    </div>

    <div class="text-gray-700 mb-12 text-center text-2xl font-light px-6 mt-12">
        {{ __('messages.financing_payment.description') }}
    </div>

    <!-- BLOQUE BLANCO -->
    <div class="bg-white rounded-[50px] flex flex-col md:flex-row items-center justify-center md:gap-12 gap-6 p-10">

        <div class="flex-1 max-w-[220px]">
            <!-- SVG -->
             <svg style="width: 100%; padding: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 166.23 197.81"><defs><style>.cls-1{fill:#1e3544;}.cls-2{fill:#387ebf;}</style></defs><title>TEETH MONEY</title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M127,86.38c2.25.21,5.56-1.5,6.45.11,1.13,2-1.2,4.67-2,7.07-.54,1.69-1.19,3.56-2.78,4.45-2.09,1.18-2,2.87-2,4.83,0,17.24-.62,34.43-3.5,51.47-1.55,9.18-3.39,18.3-6.56,27.07A40.72,40.72,0,0,1,109,194.54c-2,2.33-4.58,3.87-7.78,3.05s-3.54-3.7-4-6.35c-2.65-14.28-4.3-28.73-7.78-42.85a78.72,78.72,0,0,0-9.61-22c-5.6-9.19-14.62-9-20.29.21-8,13-11.63,27.33-13.77,42.21-1,7.31-2.24,14.6-3.45,21.89-.48,2.93-1.12,6-4.58,6.86-3.7,1-6-1.26-8-3.92-7.17-9.42-10-20.53-12.3-31.81-4-19.59-4.94-39.44-4.6-59.38,0-2-.1-3.57-2.38-4.5-2.09-.85-3.16-3-3.86-5C1.92,79.28-1.11,65.33.39,50.87,2.47,30.78,22.27,17,42,21.77c12.27,3,24.58,4.51,37.17,2.91,2.3-.3,2.75.22,2.22,2.64-6,27.41,9.9,52.12,37.32,58.07C121.41,86,124.25,86.06,127,86.38ZM14.91,55.46c-.09,1.95-.19,4.69,3.26,4.76,3.3.07,3-2.53,3.19-4.91.23-3.71,1-7.3,3.72-10.17,2.86-3,6.57-4.26,10.5-5,2.06-.38,4-1,3.58-3.44s-2.5-2.43-4.53-2.29A20.84,20.84,0,0,0,14.91,55.46Z"/><path class="cls-2" d="M89.2,38.47a38.52,38.52,0,1,1,77,.25,38.52,38.52,0,1,1-77-.25ZM127.33,7.21c-1.91-.44-3.15.17-2.81,2.53s-.68,3.13-2.86,3.55a12.89,12.89,0,0,0-7.79,4.53c-6,7.34-3.87,17.54,4.69,21.54,4.38,2,9,3.47,13.55,5.27a4.49,4.49,0,0,1,3.07,4.8,5.37,5.37,0,0,1-3.48,4.66c-4.57,2-10.1.22-12.07-4.28-1-2.39-2.29-2.68-4.41-2a24.76,24.76,0,0,1-4.45,1.11c-2.17.26-2,1.37-1.42,2.89,2.11,5.51,5.8,9.29,11.72,10.45,2.46.48,4,1.31,3.47,4.19-.46,2.44,1.13,2.59,3,2.59s3.73,0,3.26-2.73.87-3.45,3.2-4c8-1.86,12.23-6.49,12.76-13.68.47-6.45-3-11.15-10.52-14.25-3.78-1.55-7.63-2.9-11.42-4.41A4.22,4.22,0,0,1,122.1,25a4.74,4.74,0,0,1,4.15-4.36c3.7-.74,6.76.49,8.41,3.78,1.36,2.71,2.94,2.65,5.16,1.54a13.6,13.6,0,0,1,2.84-1.14c2.41-.58,2.21-1.89,1.3-3.68a14.56,14.56,0,0,0-10.6-8c-1.82-.37-2.83-1.06-2.53-3C131.27,7.42,129.85,6.77,127.33,7.21Z"/></g></g></svg>   
        </div>

        <div class="flex-1">
            <div class="text-4xl mb-6 font-bold text-indigo-800">
                {{ __('messages.financing_payment.accepted_methods') }}
            </div>
            <ul class="list-disc list-inside text-2xl text-gray-500">
                @foreach(__('messages.financing_payment.methods') as $method)
                    <li>{{ $method }}</li>
                @endforeach
            </ul>
        </div>

    </div>

    <!-- BLOQUE AYUDA -->
    <!-- MOBILE: NORMAL / DESKTOP: FLOTANTE IZQUIERDA -->
   <div
    class="
        mt-10
        w-[90%] max-w-4xl
        mx-auto
        flex flex-col md:flex-row
        bg-gray-400 rounded-[50px]
        px-6 md:px-12 py-6 gap-6
        z-10

        md:absolute
        md:-bottom-[8%]
        md:left-10
        md:translate-x-0
    "
>
    <div class="flex-1 text-left">
        <div class="text-2xl font-bold text-indigo-800">
            {{ __('messages.financing_payment.help_title') }}
        </div>
        <div class="font-light text-lg text-white">
            {{ __('messages.financing_payment.help_text') }}
        </div>
    </div>

    <div class="flex justify-center items-center">
        <a
            href="{{ route('contact') }}"
            class="border border-white border-[4px] px-20 py-3 rounded-full hover:bg-gray-200 font-bold text-white"
        >
            {{ __('messages.financing_payment.contact_us') }}
        </a>
    </div>
</div>

</div>
