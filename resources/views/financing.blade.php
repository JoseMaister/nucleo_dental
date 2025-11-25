@extends('layouts.app')

@section('title', __('messages.page_titles.financing') . ' - ' . config('app.name'))

@section('content')
<main>
    <x-Financing.hero />
    <x-Financing.banner />
    <x-Financing.payment />
    <x-Financing.insurance />
    <x-contact-map /> 

</main>


@endsection