@extends('layouts.app')

@section('title', __('messages.services_detail.orthodontics.title') . ' - ' . config('app.name'))

@section('content')
<main>
    <x-sections.service-pages.hero 
        :title="__('messages.services_detail.orthodontics.title')"
        :subtitle="__('messages.services_detail.orthodontics.description')"
        :killerLine="__('messages.services_detail.orthodontics.killer_line')"
    />

    <!-- <x-sections.cta-bar text="Request Your Consultation" link="{{ route('contact') }}" /> -->

    <x-sections.service-pages.who-is-for 
        image="images/100317.webp"
        :items="__('messages.services_detail.orthodontics.who_is_for')"
        :fullDescription="__('messages.services_detail.orthodontics.full_description')"
    />

    <!-- <x-sections.cta-bar text="Send Us Your X-Rays" link="{{ route('contact') }}" /> -->

    <x-sections.service-pages.why-choose-us 
        :items="__('messages.services_detail.orthodontics.why_choose_us')"
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
