<div id="contact" class=" text-indigo-700 ">
    <div class="w-full flex items-center p-6">
        <div class="flex-shrink-0">
            <img src="{{ asset('images/tooth2.png') }}" alt="Núcleo Dental" class="h-16">
        </div>
        <p class="text-5xl md:text-6xl p-6">
            {{ __('messages.footer.contact') }}
        </p>
    </div>
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-12">
            <!-- Logo Column -->
            <div class="w-full md:w-1/6 flex justify-center md:justify-start">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Núcleo Dental" class="h-24 w-auto object-contain">
            </div>
        <!-- Contact Information -->
        <div class="space-y-3 max-w-[300px]">

            
            <div class="space-y-2 text-left">

                <div class="flex items-start space-x-3">
                    <i class="fas fa-envelope mt-1 text-indigo-300"></i>
                    <div>
                        <h3 class="font-semibold">{{ __('messages.footer.email') }}</h3>
                        <p>citas@nucleodental.com</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <i class="fas fa-phone mt-1 text-indigo-300"></i>
                    <div>
                        <h3 class="font-semibold">USA</h3>
                        <p>+1 (915) 308 0101</p>
                        <h3 class="font-semibold">MEX</h3>
                        <p>+52 (656) 625 9250</p>
                    </div>
                </div>
                
                
                <div class="flex items-start space-x-3">
                    <i class="fas fa-map-marker-alt mt-1 text-indigo-300"></i>
                    <div>
                        <h3 class="font-semibold">{{ __('messages.footer.address2') }}</h3>
                        <p>Bulevar Tomas Fernandez #7803-2, Fracc. Los Parques, C.P. 32440, CD. Juárez, Chihuahua</p>
                    </div>
                </div>
                
                {{-- <div class="flex items-start space-x-3">
                    <i class="fas fa-clock mt-1 text-indigo-300"></i>
                    <div>
                        <h3 class="font-semibold">Working Hours</h3>
                        <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 2:00 PM</p>
                    </div>
                </div> --}}
            </div>
        
        </div>
        

            <!-- Map Column -->
            <div class="w-full md:w-1/2 h-80 md:h-96 rounded-lg overflow-hidden shadow-xl">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.437379847959!2d-106.41325482437999!3d31.73126047411811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75c7b195f8e21%3A0x3ea13c0504bd2836!2sN%C3%BAcleo%20Dental!5e0!3m2!1ses!2smx!4v1760252475462!5m2!1ses!2smx"                    width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
                title="Núcleo Dental Location"></iframe>
            </div>
        </div>
    </div>
</div>

