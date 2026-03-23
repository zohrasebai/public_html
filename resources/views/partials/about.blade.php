@php
    // Section About
    $aboutData = \App\Models\About::first();
    $aboutImg = ($aboutData && $aboutData->image) ? asset($aboutData->image) : asset('assets/images/background/consulting.jpg');
    $aboutTitle = $aboutData->title_fr ?? 'Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence.';
    $aboutText1 = $aboutData->text_1_fr ?? 'Nous sommes un cabinet spécialisé...';
    $aboutText2 = $aboutData->text_2_fr ?? 'Notre mission : Accompagner les entreprises...';

    // Section Valeurs (Core Values)
    $coreSettings = \App\Models\CoreValueSetting::first();
    $coreItems = \App\Models\CoreValue::take(4)->get();
@endphp

<section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-12">
                <div class="about-img-2 wow animated slideInLeft">
                    <img src="{{ filter_var($aboutImg, FILTER_VALIDATE_URL) ? $aboutImg : asset($aboutImg) }}" alt="Mission" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-xl-7 col-lg-12 ps-xl-5">
                <h2 class="fw-bold mb-3" style="color: #002e5b;">{{ $aboutTitle }}</h2>
                <p class="text-muted mb-4">{{ $aboutText1 }}</p>
                <div class="p-4 rounded text-white shadow-sm" style="background-color: #002e5b; border-left: 5px solid #006a4e;">
                    <p class="mb-0" style="font-style: italic;">{{ $aboutText2 }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <span style="color: #006a4e; font-weight: bold; font-size: 13px; letter-spacing: 1px;">{{ $coreSettings->subtitle_fr ?? 'POURQUOI NOUS ?' }}</span>
            <h2 class="fw-bold display-6 mt-2" style="color: #002e5b;">{{ $coreSettings->title_fr ?? 'Nos Valeurs' }}</h2>
            <div class="mx-auto mt-2" style="width: 50px; height: 3px; background-color: #00aaff;"></div>
            <p class="text-muted mt-3">{{ $coreSettings->desc_fr ?? 'Excellence et Intégrité.' }}</p>
        </div>

        <div class="row align-items-center g-0">
            <div class="col-xl-7 col-lg-12">
                <div style="background-color: #002e5b; padding: 25px; border-radius: 4px;" class="wow animated slideInLeft">
                    <div class="row g-3">
                        @foreach($coreItems as $item)
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm" style="border-radius: 0px;">
                                <h5 class="fw-bold mb-3" style="color: #002e5b;">{{ $item->title_fr }}</h5>
                                <p class="small text-muted mb-0">{{ $item->desc_fr }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-12 d-none d-xl-block">
                <div style="margin-left: -50px;">
                    <img src="{{ $coreSettings->image ? asset($coreSettings->image) : 'https://cdn.bcs-express.ru/article-head/7180.jpg' }}" 
                         alt="Values" class="img-fluid rounded shadow-lg" style="height: 400px; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="equipe" class="py-5 bg-light text-center">
    <div class="container">
        <div class="mb-5">
            <h2 class="fw-bold display-6" style="color: #002e5b;">Notre Equipe</h2>
            <div class="mx-auto mt-2" style="width: 55px; height: 3px; background-color: #00aaff;"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="lead text-dark mb-4">
                    Nos consultants et experts sont de haut niveau, une équipe pluridisciplinaire dotée d'expériences confirmées..
                </p>
                <p class="lead text-dark">
                    Notre équipe est composée de consultants certifiés et reconnus par les organismes les plus réputés.
                </p>
            </div>
        </div>
    </div>
</section>

<style>
    /* Empêche le bug de chevauchement de errr.png */
    section { clear: both; position: relative; }
</style>