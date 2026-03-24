@php
    // Récupération des données About
    $aboutData = \App\Models\About::first();
    $aboutImg = ($aboutData && $aboutData->image) ? asset($aboutData->image) : 'https://moodle.cfuv.ru/pluginfile.php/238972/course/overviewfiles/consulting.jpg';
    $aboutTitle = $aboutData->title_fr ?? 'Qui Sommes-Nous'; 
    $aboutText1 = $aboutData->text_1_fr ?? 'Nous sommes un cabinet spécialisé...';
    $aboutText2 = $aboutData->text_2_fr ?? 'Notre mission : Accompagner les entreprises...';

    // Récupération des données Valeurs (Variables du CoreValueController)
    $coreSettings = \App\Models\CoreValue::first() ?? new \App\Models\CoreValue();
    // $coreItems est passé par le AboutController@index
@endphp

{{-- ================= SECTION 1 : QUI SOMMES-NOUS (Style exm.png) ================= --}}
<section id="about" class="about-us-3 position-relative bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            {{-- Image à GAUCHE --}}
            <div class="col-xl-5 col-lg-6">
                <div class="about-img-2 wow animated slideInLeft">
                    <img src="{{ filter_var($aboutImg, FILTER_VALIDATE_URL) ? $aboutImg : asset($aboutImg) }}" alt="About" class="img-fluid">
                </div>
            </div>
            {{-- Texte à DROITE --}}
            <div class="col-xl-7 col-lg-6">
                <div class="ps-xl-5">
                    <h2 class="color-secondery mb-20 wow animated slideInUp">{{ $aboutTitle }}</h2>
                    <p class="mb-20 wow animated slideInUp">{{ $aboutText1 }}</p>
                    <div class="about-area-2 bg-secondery p-40 color-white mb-30 wow animated slideInUp">
                        <p class="mb-0">{{ $aboutText2 }}</p>
                    </div>
                    <a class="btn btn-primary" href="contact">Demander Devis</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= SECTION 2 : NOS VALEURS (Style exm.png) ================= --}}
<section class="core-value position-relative py-5">
    <div class="container">
        {{-- Titre de la section --}}
        <div class="row text-center mb-50">
            <div class="col-md-12">
                <div class="title wow animated slideInUp">
                    <span class="color-primary d-block mb-2">{{ $coreSettings->subtitle_fr }}</span>
                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">{{ $coreSettings->title_fr }}</h2>
                    <p>{{ $coreSettings->desc_fr }}</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            {{-- Cartes à GAUCHE (xl-7) --}}
            <div class="col-xl-7 col-lg-12">
                {{-- Suppression de la marge négative qui causait le bug "ojk" --}}
                <div class="core-value-box bg-secondery p-4 z-index-1 position-relative shadow">
                    <div class="row g-4">
                        @if(isset($coreItems))
                            @foreach($coreItems as $i => $item)
                            <div class="col-md-6">
                                <div class="Valuable-item bg-light p-30 text-center h-100 wow animated slideInUp">
                                    <h4 class="mb-15" style="color: #002e5b;">{{ $item->title_fr }}</h4>
                                    <p class="mb-0 text-muted">{{ $item->desc_fr }}</p>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            {{-- Image à DROITE (xl-5) --}}
            <div class="col-xl-5 col-lg-12">
                <div class="core-images wow animated slideInRight mt-4 mt-xl-0">
                    <img src="{{ $coreSettings->image ? asset($coreSettings->image) : 'https://cdn.bcs-express.ru/article-head/7180.jpg' }}" alt="Valeurs" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= SECTION 3 : NOTRE ÉQUIPE ================= --}}
<section id="equipe" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-3" style="color: #002e5b;">Notre Équipe</h2>
        <div class="mx-auto mb-4" style="width: 50px; height: 3px; background-color: #00aaff;"></div>
        <p class="lead text-dark">Nos consultants et experts sont de haut niveau, une équipe pluridisciplinaire...</p>
    </div>
</section>