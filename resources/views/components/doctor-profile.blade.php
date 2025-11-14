@props([
    'imageUrl' => '',
    'name' => '',
    'specialties' => [],
    'content' => '',
    'sections' => [] // New prop for dynamic sections
])

<div class="pt-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-start">
            <!-- Doctor's Image -->
            <div class="lg:w-4/12 mb-12 lg:mb-0 overflow-hidden">
                <div class="relative w-[80%] h-180 mx-auto">
                    <div class="bg-blue-100 absolute -top-6 -right-6 w-full h-full -z-10 rounded-sm"></div>
                    <div class="relative z-10 w-[120%] h-[120%] -ml-[10%] -mt-[10%] overflow-hidden">
                        <img src="{{ $imageUrl }}" alt="{{ $name }}" class="w-full h-full object-cover rounded-sm shadow-lg">
                    </div>
                </div>
            </div>
            
            <!-- Text Content -->
            <div class="lg:w-8/12 lg:pl-10">
                <div class="max-w-3xl">
                    <h2 class="text-2xl md:text-2xl font-bold text-blue-800 mb-0">{{ $name }}</h2>
                    
                    <div class="flex items-start">
                        <!-- Icon Column -->
                        <div class="flex-shrink-0 mr-4 mt-1">
                            <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        
                        <!-- Text Column -->
                        <div class="flex-1">
                            @if(count($specialties) > 0)
                                <p class="text-gray-400 font-semibold text-2xl leading-2">
                                    {{ implode(' / ', $specialties) }}
                                </p>
                            @endif
                            
                            {!! $content !!}

                        </div>
                        
                    </div>
                    {{-- DYNAMIC SECTIONS --}}
                    @foreach($sections as $index => $section)

                        <div class="max-w-3xl">
                            @if(isset($section['title']))
                            <p class="text-2xl md:text-2xl font-bold text-gray-800 mb-0">
                                {{ $section['title'] }}
                            </p>
                            @endif
                            
                            <div class="flex items-start">
                                
                                <div class="flex-shrink-0 mr-4 mt-1">
                                    @if(isset($section['icon']))
                                        {!! $section['icon'] !!}
                                    @endif
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
