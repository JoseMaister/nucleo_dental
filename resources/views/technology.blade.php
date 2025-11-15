@extends('layouts.app')

@section('title', 'About - Nucleo Dental')

@section('content')
<main>
    @include('components.Technology.hero')
    <div class="py-6 w-full">
        <div class="w-[90%] bg-[#D8D8D8] mx-auto px-14 py-14 flex flex-col items-center content-center leading-[6.2rem] mb-2 gap-16">
            <x-Technology.content 
                :imageUrl="asset('images/IMG_100203.webp')"
                name="ORTHOPANTOMOGRAPH™"
                subName="OP 3D Pro"
                title="High Quality 3D Images"
                content="<p class='text-lg text-gray-700 leading-relaxed text-left md:text-right'>
                                 High-Precision 3D Technology Our OP 
                                3D Pro CT scanner allows us to 
                                obtain high-quality 3D images with 
                                minimal radiation. Ideal for 
                                accurate diagnoses and safe 
                                treatments in implantology, 
                                endodontics, orthodontics, and 
                                more.
                            </p>"
            />
            <x-Technology.content 
                :imageUrl="asset('images/100321.webp')"
                name=" RAYFACE 3D"
                subName="Facial Scanner"
                title="Your Entire Smile in 3D"
                content="<p class='text-lg text-gray-700 leading-relaxed text-left md:text-right'>
                                With RayFace, we visualize your 
                                entire smile in 3D to offer you a
                                more natural, aesthetic, and 
                                personalized treatment, for more 
                                complete and aesthetic digital 
                                planning.
                            </p>"
            />
            <x-Technology.content 
                :imageUrl="asset('images/IMG_100202.webp')"
                name="CEREC"
                subName="Primescan"
                title="Advanced Dental Technology"
                content="<p class='text-lg text-gray-700 leading-relaxed text-left md:text-right'>
                                Experience cutting-edge dental care with our state-of-the-art CEREC technology. 
                                Our advanced systems provide precise, same-day restorations with exceptional accuracy and comfort.
                            </p><p class='text-lg text-gray-700 leading-relaxed text-left md:text-right'>
                                we scan your mouth with a 3D 
                                camera, design your piece on a 
                                computer, and shape it in minutes 
                                with millimeter precision.
                            </p>"
            />
        </div>
    </div>
    <x-Technology.banner-bottom />

    <x-banner-smile-1 />
    <x-contact-map /> 

</main>


@endsection