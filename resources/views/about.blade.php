@extends('layouts.app')

@section('title', 'About - Nucleo Dental')

@section('content')
<main>
    @include('components.AboutUs.hero')
    <x-AboutUs.banner />
    @include('components.AboutUs.about')
    <x-AboutUs.transportation />
    <x-banner-smile-1 />
    <x-contact-map />   
</main>


@endsection