
@props([
    'imageUrl' => '',
    'name' => '',
    'subName' => '',
    'title' => [],
    'subtitle' => '',
    'content' => '',
    'style' => '',
    'whyMatters' => null,
    'idealFor' => null,
    'benefits' => null,
    'howItWorks' => null,
    'closing' => ''
])

<div class="relative w-full flex-1 mb-12 lg:mb-0 mt-8 border-indigo-800 border border-[4px] my-16">
<div class="absolute -top-10 left-[50%] translate-x-[-50%] bg-[#D8D8D8] border border-[4px] text-xl sm:text-3xl lg:text-4xl border-indigo-800 py-2 sm:py-3 lg:py-4 px-4 sm:px-6 lg:px-10 text-indigo-800 md:whitespace-nowrap min-w-[200px] text-center">
    <span class="font-bold">{{ $name }}</span> {{ $subName }}
</div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center py-8">
        <!-- Left Column - Text Content -->
        <div class="space-y-3 pt-14 md:pl-14 pl-4">
            @if($subtitle)
                <p class="text-lg font-semibold text-indigo-700 text-center md:text-right">{{ $subtitle }}</p>
            @endif
            <h2 class="text-4xl font-bold text-indigo-900 text-center md:text-right">{{ $title }}</h2>
            @if($content)
                <div class="text-lg text-gray-700 leading-relaxed text-center md:text-right">{!! $content !!}</div>
            @endif
            
            @if($whyMatters)
                <div class="mt-4">
                    <h3 class="text-xl font-bold text-indigo-900 text-center md:text-right">{{ $whyMatters['title'] }}</h3>
                    <ul class="list-disc pl-5 mt-2 text-gray-700 text-lg text-center md:text-right">
                        @foreach($whyMatters['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @if($idealFor)
                <div class="mt-4">
                    <h3 class="text-xl font-bold text-indigo-900 text-center md:text-right">{{ $idealFor['title'] }}</h3>
                    <ul class="list-disc pl-5 mt-2 text-gray-700 text-lg text-center md:text-right">
                        @foreach($idealFor['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @if($howItWorks)
                <div class="mt-4">
                    <h3 class="text-xl font-bold text-indigo-900 text-center md:text-right">{{ $howItWorks['title'] }}</h3>
                    <ul class="list-disc pl-5 mt-2 text-gray-700 text-lg text-center md:text-right">
                        @foreach($howItWorks['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @if($benefits)
                <div class="mt-4">
                    <h3 class="text-xl font-bold text-indigo-900 text-center md:text-right">{{ $benefits['title'] }}</h3>
                    <ul class="list-disc pl-5 mt-2 text-gray-700 text-lg text-center md:text-right">
                        @foreach($benefits['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @if($closing)
                <p class="mt-4 text-gray-600 italic text-center md:text-right">{{ $closing }}</p>
            @endif
        </div>

        <!-- Right Column - Overlapping Image -->
        <div class="relative mt-14">
            <div class="relative z-5 w-full md:w-[105%] h-64 lg:h-80 bg-gray-200 ">
                <img 
                    src="{{ $imageUrl }}" 
                    alt="Dental Technology"
                    class="w-full h-full object-cover {{ $style }}"
                >
            </div>
        </div>
    </div>
</div>