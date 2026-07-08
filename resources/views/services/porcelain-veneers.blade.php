@extends('layouts.app')

@section('title', __('messages.services_detail.porcelain_veneers.title') . ' - ' . config('app.name'))

@section('content')
<main>
    <x-sections.service-pages.hero 
        :title="__('messages.services_detail.porcelain_veneers.title')"
        :subtitle="__('messages.services_detail.porcelain_veneers.description')"
        :killerLine="__('messages.services_detail.porcelain_veneers.killer_line')"
    />

    <!-- <x-sections.cta-bar text="Request Your Consultation" link="{{ route('contact') }}" /> -->

    <x-sections.service-pages.who-is-for 
        image="images/IMG_100208.webp"
        :items="__('messages.services_detail.porcelain_veneers.who_is_for')"
        :fullDescription="__('messages.services_detail.porcelain_veneers.full_description')"
    />

    <!-- <x-sections.cta-bar text="Send Us Your X-Rays" link="{{ route('contact') }}" /> -->

    <x-sections.service-pages.why-choose-us 
        :items="__('messages.services_detail.porcelain_veneers.why_choose_us')"
    />

    <!-- <x-sections.cta-bar text="Schedule Your Visit" link="{{ route('contact') }}" /> -->

    <x-sections.service-pages.what-to-expect />
    
    <!-- <x-sections.cta-bar text="Request Your Consultation" link="{{ route('contact') }}" /> -->

    <x-sections.service-pages.travel-experience />
    
    <!-- <x-sections.cta-bar text="Send Us Your X-Rays" link="{{ route('contact') }}" /> -->

    <x-sections.service-pages.why-patients-choose />
    
    <!-- <x-sections.cta-bar text="Schedule Your Visit" link="{{ route('contact') }}" /> -->

    <x-sections.service-pages.sedation-callout />
    
    <!-- <x-sections.cta-bar text="Request Your Consultation" link="{{ route('contact') }}" /> -->

    <x-sections.service-pages.plan-visit />

    <x-contact-map />
</main>
@endsection
