@extends('layouts.app')

@section('title', __('messages.services_detail.porcelain_veneers.title') . ' - ' . config('app.name'))

@section('content')
<main>
    <x-sections.service-pages.hero 
        :title="__('messages.services_detail.porcelain_veneers.title')"
        :subtitle="__('messages.services_detail.porcelain_veneers.description')"
        :killerLine="__('messages.services_detail.porcelain_veneers.killer_line')"
    />

    <x-sections.service-pages.who-is-for 
        :items="__('messages.services_detail.porcelain_veneers.who_is_for')"
        :fullDescription="__('messages.services_detail.porcelain_veneers.full_description')"
    />

    <x-sections.service-pages.why-choose-us 
        :items="__('messages.services_detail.porcelain_veneers.why_choose_us')"
    />

    <x-sections.service-pages.why-patients-choose />
    <x-sections.service-pages.what-to-expect />
    <x-sections.service-pages.travel-experience />
    <x-sections.service-pages.plan-visit />

    <x-contact-map />
</main>
@endsection
