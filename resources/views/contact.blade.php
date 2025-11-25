@extends('layouts.app')

@section('title', __('messages.page_titles.contact') . ' - ' . config('app.name'))

@section('content')
<main>
    <x-Contact.ContactForm />
    <x-contact-map /> 
</main>


@endsection