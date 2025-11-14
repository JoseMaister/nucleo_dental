@php
$content = "
    <p class='text-gray-600 text-[16px] leading-tight'>
        Exercising in private practice since 1979, mainly doing 
        Periodontology and Oral Implantology in Cd. Juárez.
    </p>
    <p class='text-gray-600 text-[16px] leading-tight'>
        He was also Director of the School of Dentistry and Director of 
        the Institute of Biomedical Sciences of the Autonomous 
        University of Ciudad Juárez. He is currently a full-time professor 
        and holder of the Oral Implantology Course in the postgraduate 
        courses of: Prosthesis, Periodontics and Maxillofacial Surgery at 
        the U.A.C.J. He serves as coordinator and professor in the 
        Master of Oral Implantology at the Institute of Advanced 
        Technology (ITAV) in Monterey N.L
    </p>
    <p class='text-gray-600 text-[16px] leading-tight'>
        He is currently an Advisor to various Implant companies in the 
        State of Chihuahua. He is a lecturer on Oral Implantology in 
        National forums and abroad. He is a founding member of the 
        College of Periodontists of the State of Chihuahua and currently 
        an active member of different dental colleges and associations 
        such as: American Academy of Implantology, Fellow of the 
        International College of Oral Implantology, Academy of Bone 
        Integration, Mexican Association of Periodontology, College of 
        Periodontists of Chihuahua, and from the National College of 
        Dental Surgeons in the Ciudad Juárez section
    </p>";
$sectionsJulio = [
    [
        'title' => ' Applied Studies',
        'content' => "<p> 2002-2006 / Professional: UACJ Cd. Juárez Chihuahua</p>
<p> 2008-2010 / Degree: Master's Degree in Oral Implantology at ITAV 
Monterrey, Nuevo León</p>
<p> 2011-2013 / Specialty: Fixed and Removable Oral Prosthesis - 
UACJ Cd. Juárez, Chihuahua</p>",
    ],
    [
        'title' => ' Professional Update Courses',
        'content' => "<ul class='list-disc pl-5 space-y-0.5'><li class='text-gray-600 text-[15px] leading-snug'>I X NATIONAL AND INTERNATIONAL CONGRESS 2003</li>
<li class='text-gray-600 text-[15px] leading-snug'>IX NATIONAL AND INTERNATIONAL CONGRESS 2005</li>
<li class='text-gray-600 text-[15px] leading-snug'>XI IBEROAMERICAN CONGRESS OF DENTISTRY 2006</li>
<li class='text-gray-600 text-[15px] leading-snug'>CD BASIC SEMINAR ON ORAL IMPLANTOLOGY 2010</li>
<li class='text-gray-600 text-[15px] leading-snug'>THE 11TH ANNUAL SYMPOSIUM ON PROSTHETIC IMPLANTS</li>
<li class='text-gray-600 text-[15px] leading-snug'>XII ANNUAL SYMPOSIUM OF PROSTHETIC IMPLANTS 2009</li>
<li class='text-gray-600 text-[15px] leading-snug'>MINI RESIDENCE IN BONE GRAFTING AND IMPLANTS 2010</li>
<li class='text-gray-600 text-[15px] leading-snug'>CD INTERMEDIATE AND ADVANCED SEMINAR IN ORAL IMPLANTOLOGY 2011.</li>
<li class='text-gray-600 text-[15px] leading-snug'>XIX ALODYB DENTAL BIOMATERIALS CONGRESS 2010</li>
<li class='text-gray-600 text-[15px] leading-snug'>IMMEDIATE RESTORATION OF THE COMPLETE ARCH \"TECNICA DE ALL IN FOUR\" 2012</li></ul>",
    ]
];
$contentJulio = "<p> Over 25 years of experience</p>";

@endphp

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100188.jpg')"
    name="Dr. Ernesto Moran"
    :specialties="['Chief Periodontist', 'Implantologist']"
    :content="$content"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100190.jpg')"
    name="Dr. Julio Nevárez"
    :specialties="['Prosthodontist', 'Cosmetic Dentist', 'Implantologist']"
    :content="$contentJulio"
    :sections="$sectionsJulio"
/>

<x-doctor-profile 
    :imageUrl="asset('images/IMG_100183.jpg')"
    name="Dr. Julio Nevárez"
    :specialties="['Prosthodontist', 'Cosmetic Dentist', 'Implantologist']"
    :content="$contentJulio"
    :sections="$sectionsJulio"
/>
