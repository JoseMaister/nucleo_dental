<div class="bg-gray-500 text-white pt-10 pb-10">
    <div class="w-full ml-6">
        <p class="text-5xl md:text-6xl ml-16">
            {!! __('messages.services.title') !!}
        </p>
    </div>
    <div class="ml-6 mr-6 mt-2">
        <p class=" ml-16 mr-16">
            {!! __('messages.services.subtitle') !!}
        </p>
    </div>
    <div class="grid grid-cols-4  text-white text-center p-6 pt-14 mt-auto items-center">
        <div class="space-y-2 flex items-center justify-center">
            <div class="rounded-full bg-white w-12 h-12 flex items-center justify-center text-gray-500"><</div>
        </div>
        <div class="space-y-4">
            
            <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 border border-white rounded-[50px] p-6">
                <img src="{{ asset('images/implants.png') }}" alt="" class="absolute top-[-18%] left-50">
                <p class="text-2xl font-bold">Dental Implants</p>
                <span class="text-sm">Dental implantes are the best option for replacing missing teeth.</span>
            </div>
        </div>
        <div class="space-y-4">
            
            <div class="relative flex flex-col items-center justify-center min-h-64 max-w-60 border border-white rounded-[50px] p-6">
                <img src="{{ asset('images/porcelain_veneers.png') }}" alt="" class="absolute top-[-18%] left-50">
                <p class="text-2xl font-bold">Porcelain Veneers</p>
                <span class="text-sm">Porcelain veneers are the best option for replacing missing teeth.</span>
            </div>
        </div>
        <div class="space-y-2 flex items-center justify-center">
            <div class="rounded-full bg-white w-12 h-12 flex items-center justify-center text-gray-500">></div>
        </div>
    </div>
    <div class="flex justify-center">
        <a href="#" class="inline-block border border-gray-400 px-6 py-3 rounded-full hover:bg-gray-200">
            Learn more of our services
        </a>
    </div>
</div>

