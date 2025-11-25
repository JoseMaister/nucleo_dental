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
<x-contact-map /> 

</main>


@endsection