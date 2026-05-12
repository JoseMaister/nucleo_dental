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

<x-sections.service-pages.why-patients-choose />
<x-sections.service-pages.what-to-expect />
<x-sections.service-pages.travel-experience />
<x-sections.service-pages.plan-visit />

<x-contact-map />

</main>


@endsection