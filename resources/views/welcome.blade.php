@extends('layouts.app')

@section('title', 'Home - Nucleo Dental')

@section('content')
<main>
    @include('components.sections.hero')
    @include('components.sections.financing')
    @include('components.sections.banner')
    @include('components.sections.resume')
    @include('components.sections.banner2')
    @include('components.sections.services')
    @include('components.sections.testimonials')
    @include('components.sections.about')
    @include('components.sections.contact')
</main>


@endsection