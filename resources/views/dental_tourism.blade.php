@extends('layouts.app')

@section('title', __('messages.dental_tourism.page_title'))

@section('content')

<!-- THE PROCESS -->
<section class="py-16 md:py-24 px-4 md:px-8 bg-white">
    <div class="max-w-6xl mx-auto">

        <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
            {{ __('messages.dental_tourism.process.title') }}
        </h2>

        <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

        <div class="relative">
            <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-indigo-300"
                 style="top: 40px; bottom: 0;"></div>

            <div class="space-y-12">

                @php
                    $steps = [
                        'step_1' => '📋',
                        'step_2' => '🎫',
                        'step_3' => '🏥',
                        'step_4' => '😊',
                        'step_5' => '📞'
                    ];
                @endphp

                @foreach($steps as $stepKey => $icon)
                    @php $stepNum = $loop->iteration; @endphp

                    <div class="relative">

                        <!-- CÍRCULO -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2
                                    w-16 h-16 bg-indigo-700 border-4 border-white rounded-full
                                    flex items-center justify-center text-white text-2xl font-bold shadow-lg"
                             style="top: 0;">
                            {{ $icon }}
                        </div>

                        <!-- CARD -->
                        <div class="{{ $stepNum % 2 == 1 ? 'md:ml-auto md:w-1/2 md:pr-16' : 'md:w-1/2 md:pl-16' }} w-full">

                            <div class="bg-white p-8 rounded-xl shadow-lg border-2 border-indigo-200 hover:shadow-xl transition">

                                <h3 class="text-2xl font-bold text-indigo-800 mb-3">
                                    {{ __("messages.dental_tourism.process.{$stepKey}.title") }}
                                </h3>

                                <p class="text-gray-600 leading-relaxed">
                                    {{ __("messages.dental_tourism.process.{$stepKey}.description") }}
                                </p>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="py-16 md:py-24 px-4 md:px-8 bg-white">
    <div class="max-w-6xl mx-auto">

        <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-6 text-center">
            {{ __('messages.dental_tourism.services_offered.title') }}
        </h2>

        <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mb-12"></div>

        @php
            $services = [
                'dental_implants' => '🦷',
                'crowns' => '👑',
                'veneers' => '✨',
                'root_canal' => '⚕️',
                'full_mouth' => '😁',
                'cleanings' => '🧼'
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($services as $service => $icon)
                <div class="bg-gradient-to-br from-indigo-50 to-white border-2 border-indigo-200 p-8 rounded-xl hover:shadow-lg transition">

                    <div class="text-5xl mb-4">{{ $icon }}</div>

                    <h3 class="text-2xl font-bold text-indigo-800 mb-6">
                        {{ __("messages.dental_tourism.services_offered.{$service}.title") }}
                    </h3>

                    <div class="space-y-4">

                        <div>
                            <p class="text-sm text-gray-600 font-semibold">USA Cost</p>
                            <p class="text-xl font-bold text-red-600">
                                {{ __("messages.dental_tourism.services_offered.{$service}.cost_us") }}
                            </p>
                        </div>

                        <div>
                            <p class="text-sm text-gray-600 font-semibold">Mexico Cost</p>
                            <p class="text-xl font-bold text-green-600">
                                {{ __("messages.dental_tourism.services_offered.{$service}.cost_mexico") }}
                            </p>
                        </div>

                        <div class="bg-indigo-700 text-white p-3 rounded-lg font-bold">
                            {{ __("messages.dental_tourism.services_offered.{$service}.savings") }}
                        </div>

                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>

@endsection