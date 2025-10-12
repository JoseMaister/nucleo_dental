<div class="bg-gray-400 text-white">
    <div class="w-full bg-white">
        <p class="text-4xl md:text-5xl lg:text-6xl text-gray-400 p-4 md:p-6">
            About Us
        </p>
    </div>
    
    <div class="container mx-auto px-4 md:px-8 py-8 md:py-12">
        <!-- Doctor's Image - Shows on top on mobile/tablet, right on desktop -->
        <div class="md:hidden mb-8 flex justify-center">
            <img src="{{ asset('images/doctor.png') }}" alt="Dr. Ernesto Moran" class="max-w-[250px] md:max-w-[300px] w-full h-auto">
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <!-- Text Content -->
            <div class="space-y-4 md:space-y-6">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold">Dr. Ernesto Moran</h2>
                <p class="text-left text-sm md:text-base lg:text-lg">
                    Practicing since 1979 in Periodontal and Oral Implantology, he is a professor and program coordinator at U.A.C.J. and ITAV. He advises implant companies, lectures nationally and internationally, and is an active member of major dental associations.
                </p>
                <div class="flex justify-center lg:justify-start pt-2">
                    <a href="#" class="inline-block border-2 border-white px-6 py-2 md:px-8 md:py-3 rounded-full hover:bg-white hover:text-gray-700 transition-colors duration-300 text-sm md:text-base">
                        Click for detailed information
                    </a>
                </div>
            </div>
            
            <!-- Doctor's Image - Hidden on mobile/tablet, shows on desktop -->
            <div class="hidden md:flex justify-center lg:justify-end items-end">
                <img src="{{ asset('images/doctor.png') }}" alt="Dr. Ernesto Moran" class="max-w-[250px] lg:max-w-[350px] w-full h-auto">
            </div>
        </div>
    </div>
</div>

