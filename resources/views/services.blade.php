@extends('layouts.app')

@section('title', __('messages.page_titles.services') . ' - ' . config('app.name'))

@section('content')
<main>

<x-Services.hero />
<x-card />
<x-Services.banner />
<x-Services.cosmetic />
<x-Services.preventive />
<x-Services.orthodontics />
<x-banner-smile-2 />

<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4 md:px-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">
                {{ __('messages.services_banner.specialized_title') }}
            </h2>
            <div class="w-24 h-1.5 bg-indigo-600 mx-auto rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $specialized = [
                    ['key' => 'all_on_4', 'route' => 'full-arch-implants', 'icon' => 'teeth-open'],
                    ['key' => 'zygomatic_implants', 'route' => 'zygomatic-implants', 'icon' => 'skull'],
                    ['key' => 'full_mouth_restoration', 'route' => 'full-mouth-restoration', 'icon' => 'hands-holding-medical'],
                    ['key' => 'snap_on_dentures', 'route' => 'snap-on-dentures', 'icon' => 'smile'],
                    ['key' => 'endodontics', 'route' => 'endodontics', 'icon' => 'tooth'],
                    ['key' => 'periodontics', 'route' => 'periodontal-treatment', 'icon' => 'shield-virus'],
                    ['key' => 'maxillofacial_surgery', 'route' => 'maxillofacial-surgery', 'icon' => 'user-md'],
                    ['key' => 'bone_grafting', 'route' => 'bone-grafting', 'icon' => 'bone'],
                    ['key' => 'sedation_dentistry', 'route' => 'sedation-dentistry', 'icon' => 'bed'],
                    ['key' => 'pediatric_dentistry', 'route' => 'pediatric-dentistry', 'icon' => 'child'],
                ];
            @endphp

            @foreach($specialized as $item)
                <div class="bg-white p-8 rounded-[35px] shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600 mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-{{ $item['icon'] }} text-lg"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">
                            {{ __('messages.cosmetic.services.'.$item['key'].'.title') }}
                        </h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">
                            {{ __('messages.cosmetic.services.'.$item['key'].'.description') }}
                        </p>
                    </div>
                    <a href="{{ route($item['route']) }}" class="text-indigo-600 font-bold flex items-center gap-2 hover:gap-3 transition-all mt-auto pt-4">
                        {{ __('messages.global_sections.learn_more') ?? 'Learn More' }}
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<x-sections.service-pages.why-patients-choose />
<x-sections.service-pages.what-to-expect />
<x-sections.service-pages.travel-experience />
<x-sections.service-pages.plan-visit />

<x-contact-map />

</main>


@endsection