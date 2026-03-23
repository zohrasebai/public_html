@php
    $aboutData = \App\Models\About::first();
    $aboutImg = ($aboutData && $aboutData->image) ? asset($aboutData->image) : 'https://moodle.cfuv.ru/pluginfile.php/238972/course/overviewfiles/consulting.jpg';
    $aboutTitle = $aboutData->title_fr ?? 'Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence.';
    $aboutText1 = $aboutData->text_1_fr ?? 'Nous sommes un cabinet spécialisé dans l’accompagnement des entreprises pour l’obtention de certifications...';
    $aboutText2 = $aboutData->text_2_fr ?? 'Notre mission : Accompagner les entreprises vers la certification...';

    // Données pour les Valeurs
    $coreSettings = \App\Models\CoreValueSetting::first();
    $coreItems = \App\Models\CoreValue::take(4)->get();
@endphp

<section id="about" class="about-us-3 position-relative bg-light py-5">
    <div class="container">
        
        <div class="row align-items-center mb-5">
            <div class="col-md-12 col-lg-12 col-xl-5">
                <div class="about-img-2 wow animated slideInLeft">
                    <img src="{{ filter_var($aboutImg, FILTER_VALIDATE_URL) ? $aboutImg : asset($aboutImg) }}" 
                         alt="Mission" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-7 ps-xl-5">
                <h2 class="fw-bold mb-3" style="color: #002e5b;">{{ $aboutTitle }}</h2>
                <p class="text-muted mb-4">{{ $aboutText1 }}</p>
                <div class="p-4 rounded text-white shadow-sm" style="background-color: #002e5b; border-left: 5px solid #006a4e;">
                    <p class="mb-0 italic">{{ $aboutText2 }}</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 mb-5">
            <span class="fw-bold" style="color: #006a4e; font-size: 13px; letter-spacing: 2px;">{{ $coreSettings->subtitle_fr ?? 'POURQUOI NOUS ?' }}</span>
            <h2 class="fw-bold display-6 mt-2" style="color: #002e5b;">{{ $coreSettings->title_fr ?? 'Nos Valeurs' }}</h2>
            <div class="mx-auto mt-2" style="width: 45px; height: 3px; background-color: #00aaff;"></div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-xl-10">
                <div style="background-color: #002e5b; padding: 20px; border-radius: 4px;" class="shadow-lg">
                    <div class="row g-3"> @foreach($coreItems as $item)
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center" style="border-radius: 0px;">
                                <h5 class="fw-bold mb-3" style="color: #002e5b;">{{ $item->title_fr }}</h5>
                                <p class="small text-muted mb-0">{{ $item->desc_fr }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 pt-4">
            <div class="mb-4">
                <h2 class="fw-bold display-6" style="color: #002e5b;">Notre Equipe</h2>
                <div class="mx-auto mt-2" style="width: 55px; height: 3px; background-color: #00aaff;"></div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="lead text-dark mb-4" style="line-height: 1.8;">
                        Nos consultants et experts sont de haut niveau, une équipe pluridisciplinaire dotée d'expériences et de compétences confirmées dans le <strong>Management d'entreprise</strong> et la conduite du changement.
                    </p>
                    <p class="lead text-dark">
                        Notre équipe est composée de consultants certifiés et reconnus par les organismes de certification les plus réputés au niveau national et international.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    /* Empêche le chevauchement des sections (Correction errr.png) */
    section { clear: both; display: block; position: relative; }
    .italic { font-style: italic; }
</style>