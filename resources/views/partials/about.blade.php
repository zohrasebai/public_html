@php
    // 1. Données pour la Mission (About)
    $aboutData = \App\Models\About::first();
    $aboutImg = ($aboutData && $aboutData->image) ? asset($aboutData->image) : 'https://moodle.cfuv.ru/pluginfile.php/238972/course/overviewfiles/consulting.jpg';
    $aboutTitle = $aboutData->title_fr ?? 'Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence.'; 
    $aboutText1 = $aboutData->text_1_fr ?? 'Nous sommes un cabinet spécialisé dans l’accompagnement des entreprises pour l’obtention de certifications...';
    $aboutText2 = $aboutData->text_2_fr ?? 'Notre mission : Accompagner les entreprises vers la certification...';
    $aboutReadMoreUrl = $aboutData->button_url ?? 'contact';
    $aboutReadMoreText = $aboutData->button_text_fr ?? 'Demander Devis';

    // 2. Données pour les Valeurs (Core Values)
    $coreSettings = \App\Models\CoreValueSetting::first();
    $coreItems = \App\Models\CoreValue::take(4)->get();
@endphp

<section id="about" class="about-us-3 position-relative bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-12 col-xl-5">
                <div class="about-img-2 wow animated slideInLeft">
                    <img src="{{ filter_var($aboutImg, FILTER_VALIDATE_URL) ? $aboutImg : asset($aboutImg) }}" alt="Notre Mission" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-7">
                <div class="position-relative ps-xl-4">
                    <div class="inner-title mb-30">
                        <h2 class="color-secondery xl-mt-30 wow animated slideInUp">{{ $aboutTitle }}</h2>
                    </div>
                    <div class="text-area mb-30 wow animated slideInUp">
                        <p class="mb-15">{{ $aboutText1 }}</p>
                    </div>
                    <div class="about-area-2 bg-secondery d-flex color-white p-40 wow animated slideInUp shadow-sm" style="background-color: #002e5b; border-left: 5px solid #006a4e;">
                        <p class="mb-0" style="font-style: italic;">{{ $aboutText2 }}</p>
                    </div>
                    <a class="btn btn-primary mt-30 wow animated fadeInUp" href="{{ $aboutReadMoreUrl }}">{{ $aboutReadMoreText }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="core-value position-relative py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title mb-50 w-75 text-center mx-auto wow animated slideInUp">
                    <span class="color-primary fw-bold">{{ $coreSettings->subtitle_fr ?? 'POURQUOI NOUS ?' }}</span>
                    <h2 class="position-relative pb-15 mb-20 color-secondery">{{ $coreSettings->title_fr ?? 'Nos Valeurs' }}</h2>
                    <div class="mx-auto" style="width: 50px; height: 3px; background-color: #00aaff; margin-top: -15px; mb-20"></div>
                    <p class="mt-3 text-muted">{{ $coreSettings->desc_fr ?? '' }}</p>
                </div>
            </div>

            <div class="col-xl-7 col-lg-12">
                <div class="core-value-box bg-secondery p-20 z-index-1 position-relative shadow-lg" style="background-color: #002e5b; border-radius: 4px;">
                    <div class="row g-3"> @foreach($coreItems as $i => $item)
                        <div class="col-md-6">
                            <div class="Valuable-item bg-light p-30 text-center h-100 wow animated slideInUp">
                                <h4 class="mb-15 color-secondery">{{ $item->title_fr }}</h4>
                                <p class="small mb-0">{{ $item->desc_fr }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-12 d-none d-xl-block">
                <div class="core-images ps-xl-5">
                    <img src="{{ $coreSettings->image ? asset($coreSettings->image) : 'https://cdn.bcs-express.ru/article-head/7180.jpg' }}" 
                         alt="QualiPro Values" class="img-fluid rounded shadow" style="height: 420px; width: 100%; object-fit: cover; margin-left: -40px;">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="equipe" class="py-5 bg-light">
    <div class="container text-center">
        <div class="mb-5 wow animated slideInUp">
            <h2 class="fw-bold display-6 color-secondery">Notre Equipe</h2>
            <div class="mx-auto mt-2" style="width: 55px; height: 3px; background-color: #00aaff;"></div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10 wow animated slideInUp">
                <p class="lead text-dark mb-4" style="line-height: 1.8;">
                    Nos consultants et experts sont de haut niveau, une équipe pluridisciplinaire dotée d'expériences et de compétences confirmées dans le <strong>Management d'entreprise</strong> et la conduite du changement.
                </p>
                <p class="lead text-dark">
                    Notre équipe est composée de consultants certifiés et reconnus par les organismes de certification les plus réputés au niveau national et international.
                </p>
            </div>
        </div>
    </div>
</section>

<style>
    /* Correction pour éviter les bugs de superposition */
    section { clear: both; width: 100%; display: block; position: relative; }
    .color-secondery { color: #002e5b !important; }
    .bg-secondery { background-color: #002e5b !important; }
    .p-40 { padding: 40px !important; }
    .p-20 { padding: 20px !important; }
</style>