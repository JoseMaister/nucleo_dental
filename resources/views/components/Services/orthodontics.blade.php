<div class="bg-indigo-800 mx-10 my-12 md:px-[8rem] px-[4rem] flex flex-col items-center justify-center py-12 rounded-[50px] gap-6">
    <div class="flex-1 text-center text-3xl md:text-5xl text-white font-bold pt-6 px-28 rounded-[50px]">
        {{ __('messages.orthodontics.title') }}
    </div>
    <div class="flex-shrink-0 w-full rounded-[50px] h-[30%] max-h-[300px] overflow-hidden">
        <img src="{{ asset('images/IMG_100209.webp') }}" alt="Núcleo Dental" class="w-[120%] h-[120%]">
    </div>
    
    <!-- Aesthetic Braces -->
    <div class="flex flex-col md:flex-row items-center justify-center mb-4">
        <div class="min-w-[250px]">
            <p class="text-3xl text-gray-400 text-left">
                {{ __('messages.orthodontics.treatments.aesthetic_braces.title') }}
            </p>
        </div>
        <div>
            <p class="text-2xl font-thin text-white text-justify md:text-left">
                {{ __('messages.orthodontics.treatments.aesthetic_braces.description') }}
            </p>
        </div>
    </div>
    
    <!-- Metallic Braces -->
    <div class="flex flex-col md:flex-row items-center justify-center mb-4">
        <div class="min-w-[250px]">
            <p class="text-3xl text-gray-400 text-left">
                {{ __('messages.orthodontics.treatments.metallic_braces.title') }}
            </p>
        </div>
        <div>
            <p class="text-2xl font-thin text-white text-justify md:text-left">
                {{ __('messages.orthodontics.treatments.metallic_braces.description') }}
            </p>
        </div>
    </div>
    
    <!-- Orthognathic Surgery -->
    <div class="flex flex-col md:flex-row items-center justify-center mb-4">
        <div class="min-w-[250px]">
            <p class="text-3xl text-gray-400 text-left">
                {{ __('messages.orthodontics.treatments.orthognathic_surgery.title') }}
            </p>
        </div>
        <div>
            <p class="text-2xl font-thin text-white text-justify md:text-left">
                {{ __('messages.orthodontics.treatments.orthognathic_surgery.description') }}
            </p>
        </div>
    </div>
</div>
