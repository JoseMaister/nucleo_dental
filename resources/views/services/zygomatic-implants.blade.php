@extends('layouts.app')

@section('title', __('messages.services_detail.zygomatic_implants.title') . ' - ' . config('app.name'))

@section('content')
<main>
    <x-sections.service-pages.hero 
        :title="__('messages.services_detail.zygomatic_implants.title')"
        :subtitle="__('messages.services_detail.zygomatic_implants.description')"
        :killerLine="__('messages.services_detail.zygomatic_implants.killer_line')"
    />

    <x-sections.service-pages.who-is-for 
        :items="__('messages.services_detail.zygomatic_implants.who_is_for')"
    />

    <x-sections.service-pages.why-choose-us 
        :items="__('messages.services_detail.zygomatic_implants.why_choose_us')"
    />

    <x-sections.service-pages.sedation-callout />

    <x-sections.service-pages.why-patients-choose />
    <x-sections.service-pages.what-to-expect />
    <x-sections.service-pages.travel-experience />
    <x-sections.service-pages.plan-visit />

    <x-contact-map />
</main>
@endsection
