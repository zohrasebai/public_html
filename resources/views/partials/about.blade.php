@php
    $aboutData = \App\Models\About::first();
    $aboutImg = ($aboutData && $aboutData->image) ? asset($aboutData->image) : 'https://moodle.cfuv.ru/pluginfile.php/238972/course/overviewfiles/consulting.jpg';
    $aboutTitle = $aboutData->title_fr ?? 'Qui Sommes-Nous'; 
    $aboutText1 = $aboutData->text_1_fr ?? 'Nous sommes...';
    $aboutText2 = $aboutData->text_2_fr ?? 'Notre mission : Accompagner les entreprises...';

    $coreSettings = \App\Models\CoreValue::first();
@endphp

{{-- ================= SECTION 1 : QUI SOMMES-NOUS (Image à Gauche / Texte à Droite) ================= --}}
<section id="about" class="about-us-3 position-relative bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            {{-- Image à gauche comme dans exm.png --}}
            <div class="col-md-12 col-lg-12 col-xl-5">
                <div class="about-img-2 wow animated slideInLeft">
                    <img src="{{ filter_var($aboutImg, FILTER_VALIDATE_URL) ? $aboutImg : asset($aboutImg) }}" alt="Qui Sommes Nous">
                </div>
            </div>
            {{-- Texte à droite --}}
            <div class="col-md-12 col-lg-12 col-xl-7">
                <div class="position-relative ps-xl-4">
                    <div class="inner-title mb-20">
                        <h2 class="color-secondery wow animated slideInUp">{{ $aboutTitle }}</h2>
                    </div>
                    <div class="text-area mb-20 wow animated slideInUp">
                        <p>{{ $aboutText1 }}</p>
                    </div>
                    <div class="about-area-2 bg-secondery d-flex color-white p-30 wow animated slideInUp">
                        <p class="mb-0">{{ $aboutText2 }}</p>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= SECTION 2 : NOS VALEURS (Texte en Haut / Cartes à Gauche / Image à Droite) ================= --}}
<section class="core-value position-relative py-5">
    <div class="container">
        <div class="row">
            {{-- Titre centré en haut --}}
            <div class="col-md-12 text-center mb-50">
                <div class="title wow animated slideInUp">
                    <span class="color-primary d-block mb-10">{{ $coreSettings->subtitle_fr ?? 'Pour quoi nous' }}</span>
                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">{{ $coreSettings->title_fr ?? 'Nos Valeurs' }}</h2>
                    <p>{{ $coreSettings->desc_fr ?? 'Excellence et Intégrité.' }}</p>
                </div>
            </div>

            {{-- Cartes à gauche (xl-7) --}}
            <div class="col-xl-7 col-lg-12">
                <div class="core-value-box bg-secondery p-30 z-index-1 position-relative" style="margin-right: -50px;">
                    <div class="row">
                        @if(isset($coreItems))
                            @foreach($coreItems as $i => $item)
                            <div class="col-md-6 mb-30">
                                <div class="Valuable-item bg-light p-30 text-center h-100 wow animated slideInUp">
                                    <h4 class="mb-15">{{ $item->title_fr }}</h4>
                                    <p class="mb-0 text-muted">{{ $item->desc_fr }}</p>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            {{-- Image à droite (xl-5) comme dans exm.png --}}
            <div class="col-xl-5 col-lg-12">
                <div class="core-images wow animated slideInRight">
                    <img src="{{ ($coreSettings && $coreSettings->image) ? asset($coreSettings->image) : 'https://cdn.bcs-express.ru/article-head/7180.jpg' }}" alt="Valeurs" class="img-fluid shadow">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= SECTION 3 : NOTRE ÉQUIPE ================= --}}
<section id="equipe" class="py-5 bg-light border-top">
    <div class="container text-center">
        <div class="mb-4 wow animated slideInUp">
            <h2 class="fw-bold display-6" style="color: #002e5b;">Notre Équipe</h2>
            <div class="mx-auto mt-2" style="width: 55px; height: 3px; background-color: #00aaff;"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 wow animated slideInUp">
                <p class="lead text-dark mb-0">Nos consultants et experts sont de haut niveau...</p>
            </div>
        </div>
    </div>
</section>