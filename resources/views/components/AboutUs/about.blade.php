@php
//Ernesto
    $ernestoName = __('messages.team.ernesto.name');
    $ernestoSpecialties = [__('messages.specialties.chief_periodontist'), __('messages.specialties.implantologist')];

    // Doctor specialties and content
try {
    // Ernesto
    $ernestoContent = __('messages.team.ernesto.content');
    $ernestoSections = [];
    
    // Julio
    $julioName = __('messages.team.julio.name');
    $julioSpecialties = [__('messages.specialties.prosthodontist'), __('messages.specialties.cosmetic_dentist'), __('messages.specialties.implantologist')];
    $julioContent = __('messages.team.julio.content');
    $julioSections = [
        [
            'title' => __('messages.team.julio.sections.applied_studies.title'),
            'content' => __('messages.team.julio.sections.applied_studies.content')
        ],
        [
            'title' => __('messages.team.julio.sections.courses.title'),
            'content' => __('messages.team.julio.sections.courses.content')
        ]
    ];

    //jose
    $joseName = __('messages.team.jose.name');
    $joseSpecialties = [__('messages.specialties.maxillofacial_surgeon')];
    $joseContent = __('messages.team.jose.content');
    $joseSections = [];
    
    //sandra
    $sandraName = __('messages.team.sandra.name');
    $sandraSpecialties = [__('messages.specialties.pediatric_dentist')];
    $sandraContent = __('messages.team.sandra.content');
    $sandraSections = [];
    
    // Adriana Armendariz
    $adrianaArmendarizName = __('messages.team.adriana_armendariz.name');
    $adrianaArmendarizSpecialties = [__('messages.specialties.general_dentist')];
    $adrianaArmendarizContent = __('messages.team.adriana_armendariz.content');
    $adrianaArmendarizSections = [
        [
            'title' => __('messages.team.adriana_armendariz.sections.training.title'),
            'content' => __('messages.team.adriana_armendariz.sections.training.content')
        ]
    ];
    
    // Adriana Escalante
    $adrianaEscalanteName = __('messages.team.adriana_escalante.name');
    $adrianaEscalanteSpecialties = [__('messages.specialties.general_dentist')];
    $adrianaEscalanteContent = __('messages.team.adriana_escalante.content');
    $adrianaEscalanteSections = [
        [
            'title' => __('messages.team.adriana_escalante.sections.training.title'),
            'content' => __('messages.team.adriana_escalante.sections.training.content')
        ]
    ];
    
    // Mario
    $marioName = __('messages.team.mario.name');
    $marioSpecialties = [__('messages.specialties.endodontist')];
    $marioSections = [
        [
            'title' => __('messages.team.mario.sections.associations.title'),
            'content' => __('messages.team.mario.sections.associations.content')
        ],
        [
            'title' => __('messages.team.mario.sections.courses.title'),
            'content' => __('messages.team.mario.sections.courses.content')
        ]
    ];
    
    // Paloma
    $palomaName = __('messages.team.paloma.name');
    $palomaSpecialties = [__('messages.specialties.orthodontist')];
    $palomaContent = "";//__('messages.team.paloma.sections.applied_studies.content');
    $palomaSections = [
        [
            'title' => __('messages.team.paloma.sections.applied_studies.title'),
            'content' => __('messages.team.paloma.sections.applied_studies.content')
        ],
        [
            'title' => __('messages.team.paloma.sections.professional_experience.title'),
            'content' => __('messages.team.paloma.sections.professional_experience.content')
        ],
        [
            'title' => __('messages.team.paloma.sections.courses.title'),
            'content' => __('messages.team.paloma.sections.courses.content')
        ]
    ];
    
    
    // Monica
    
    $monicaName = __('messages.team.monica.name');
    $monicaSpecialties = [__('messages.specialties.pediatric_dentist')];
    $monicaContent = __('messages.team.monica.content');
    $monicaSections = [
        [
            'title' => __('messages.team.monica.sections.applied_studies.title'),
            'content' => __('messages.team.monica.sections.applied_studies.content')
        ]
    ];
    
    // Valeria
    $valeriaName = __('messages.team.valeria.name');
    $valeriaSpecialties = [
        __('messages.specialties.periodontist'),
        __('messages.specialties.implantologist')
    ];
    $valeriaContent = __('messages.team.valeria.content');
    $valeriaSections = [];

    // Hugo
    $hugoName = __('messages.team.hugo.name');
    $hugoSpecialties = [__('messages.specialties.informatic_responsible')];
    
    // Liliana
    $lilianaName = __('messages.team.liliana.name');
    $lilianaSpecialties = [__('messages.specialties.pediatric_dentist')];
    
    // Lori - Dental Concierge
    $loriName = __('messages.team.lori.name');
    $loriSpecialties = [__('messages.specialties.dental_concierge')];
    $loriContent = __('messages.team.lori.content');
    $loriSections = [];
    $lilianaContent = __('messages.team.liliana.content');
    $lilianaSections = [];
    
    

} catch (Exception $e) {
    // Fallback to default content if translation fails
    $ernestoContent = "Ejercicio en la prÃ¡ctica privada desde 1979, principalmente en Periodoncia e ImplantologÃ­a Oral en Cd. JuÃ¡rez.";
    $julioContent = "MÃ¡s de 25 aÃ±os de experiencia";
    $adrianaArmendarizContent = "Egresada de la Universidad AutÃ³noma de Ciudad JuÃ¡rez, Chihuahua y Diplomado en ImplantologÃ­a";
    $adrianaEscalanteContent = "Egresada de la Universidad AutÃ³noma de Ciudad JuÃ¡rez, Chihuahua";
    $palomaContent = "Especialista en Ortodoncia";
}
@endphp

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100188.webp')"
    :name="$ernestoName"   
    :specialties="$ernestoSpecialties"
    :content="$ernestoContent"
    :sections="$ernestoSections"
    :showVideo="true"
    :videos="[
        asset('images/videos/moran_ortodoncia.mp4'),
        asset('images/videos/moran_implantes.mp4'),
    ]"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100190.webp')"
    :name="__('messages.team.julio.name')"
    :specialties="$julioSpecialties"
    :content="$julioContent"
    :sections="$julioSections"
    :showVideo="true"
    :videos="[
        asset('images/videos/julio_cosmetics.mp4'),
        asset('images/videos/julio_implants.mp4'),
    ]"
/>

<x-doctor-profile 
    :imageUrl="asset('images/SAM_0004_JPG.avif')"
    :name="__('messages.team.jose.name')"
    :specialties="$joseSpecialties"
    :content="$joseContent"
    :sections="$joseSections"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_1685.jpg')"
    :name="__('messages.team.sandra.name')"
    :specialties="$sandraSpecialties"
    :content="$sandraContent"
    :sections="$sandraSections"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100183.webp')"
    :name="$adrianaArmendarizName"
    :specialties="$adrianaArmendarizSpecialties"
    :content="$adrianaArmendarizContent"
    :sections="$adrianaArmendarizSections"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100187.webp')"
    :name="$loriName"
    :specialties="$loriSpecialties"
    :content="$loriContent"
    :sections="[]"
/>



<x-doctor-profile 
    :imageUrl="asset('images/IMG_100191.webp')"
    :name="$marioName"
    :specialties="$marioSpecialties"
    :sections="$marioSections"
    :showVideo="true"
    :videos="[
        asset('images/videos/mario_endodoncia.mp4')
    ]"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100184.webp')"
    :name="$monicaName"
    :specialties="$monicaSpecialties"
    :sections="$monicaSections"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100181.webp')"
    :name="$palomaName"
    :specialties="$palomaSpecialties"
    :content="$palomaContent"
    :sections="$palomaSections"
    :showVideo="true"
    :videos="[
        asset('images/videos/paloma_orthodontics.mp4')
    ]"
/>

<x-doctor-profile 
    :imageUrl="asset('images/valeria.webp')"
    :name="$valeriaName"
    :specialties="$valeriaSpecialties"
    :content="$valeriaContent"
    :sections="$valeriaSections"
/>


<x-doctor-profile 
    :imageUrl="asset('images/liliana.avif')"
    :name="$lilianaName"
    :specialties="$lilianaSpecialties"
    :content="$lilianaContent"
    :sections="$lilianaSections"
/>
