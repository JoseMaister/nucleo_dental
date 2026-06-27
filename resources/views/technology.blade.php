@extends('layouts.app')

@section('title', __('messages.page_titles.technology') . ' - ' . config('app.name')) 

@section('content')
<main>
    @include('components.Technology.hero')
    <div class="py-6 w-full">
        <div class="w-[90%] bg-[#D8D8D8] mx-auto px-14 py-14 flex flex-col items-center content-center leading-[6.2rem] mb-2 gap-16">
            <x-Technology.content 
                :imageUrl="asset('images/IMG_100203.webp')"
                :name="__('messages.techno.op3d_pro.name')"
                :subName="__('messages.techno.op3d_pro.subname')"
                :title="__('messages.techno.op3d_pro.title')"
                :content="'<p class=\'text-lg text-gray-700 leading-relaxed text-left md:text-right\'>'.__('messages.techno.op3d_pro.description').'</p>'"
            />
            <x-Technology.content 
                :imageUrl="asset('images/100321.webp')"
                :name="__('messages.techno.rayface.name')"
                :subName="__('messages.techno.rayface.subname')"
                :title="__('messages.techno.rayface.title')"
                :content="'<p class=\'text-lg text-gray-700 leading-relaxed text-left md:text-right\'>'.__('messages.techno.rayface.description').'</p>'"
            />
            <x-Technology.content 
                :imageUrl="asset('images/IMG_100202.webp')"
                :name="__('messages.techno.cerec.name')"
                :subName="__('messages.techno.cerec.subname')"
                :title="__('messages.techno.cerec.title')"
                :content="'<p class=\'text-lg text-gray-700 leading-relaxed text-left md:text-right\'>'.__('messages.techno.cerec.description').'</p>'"
                :style="'object-top'"
            />
        </div>
    </div>
    <x-Technology.banner-bottom />

    <x-banner-smile-1 />
    <x-contact-map /> 
</main>
@endsection