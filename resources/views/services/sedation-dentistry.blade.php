@extends('layouts.app')

@section('title', __('messages.services_detail.sedation_dentistry.title') . ' - ' . config('app.name'))

@section('content')
<main>
    <x-sections.service-pages.hero 
        :title="__('messages.services_detail.sedation_dentistry.title')"
        :subtitle="__('messages.services_detail.sedation_dentistry.description')"
        :killerLine="__('messages.services_detail.sedation_dentistry.killer_line')"
    />

    <x-sections.service-pages.who-is-for 
        :items="__('messages.services_detail.sedation_dentistry.who_is_for')"
        :fullDescription="__('messages.services_detail.sedation_dentistry.full_description')"
    />

    <x-sections.service-pages.why-choose-us 
        :items="__('messages.services_detail.sedation_dentistry.why_choose_us')"
    />

    <x-sections.service-pages.sedation-callout />

    <x-sections.service-pages.why-patients-choose />
    <x-sections.service-pages.what-to-expect />
    <x-sections.service-pages.travel-experience />
    <x-sections.service-pages.plan-visit />

    <x-contact-map />
</main>
@endsection
