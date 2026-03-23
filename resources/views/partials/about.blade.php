@php
    // Récupération des données dynamiques
    $aboutData = \App\Models\About::first();
    
    $aboutImg = ($aboutData && $aboutData->image) ? asset($aboutData->image) : asset('assets/images/background/consulting.jpg');
    $aboutTitle = $aboutData->title_fr ?? 'Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence.'; 
    $aboutText1 = $aboutData->text_1_fr ?? 'Nous sommes un cabinet spécialisé dans l’accompagnement des entreprises pour l’obtention de certifications...';
    $aboutText2 = $aboutData->text_2_fr ?? 'Notre mission : Accompagner les entreprises vers la certification...';
@endphp

<section id="mission" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="about-img shadow-sm wow fadeInLeft">
                    <img src="{{ filter_var($aboutImg, FILTER_VALIDATE_URL) ? $aboutImg : asset($aboutImg) }}" 
                         alt="Mission QualiPro+" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <div class="wow fadeInRight">
                    <h2 class="fw-bold color-secondery mb-3">{{ $aboutTitle }}</h2>
                    <p class="text-muted mb-4" style="line-height: 1.8;">{{ $aboutText1 }}</p>
                    
                    <div class="p-4 rounded text-white shadow-sm" style="background-color: #002e5b; border-left: 5px solid #006a4e;">
                        <p class="mb-0 fw-italic">{{ $aboutText2 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="valeurs" class="py-5 bg-white overflow-hidden">
    <div class="container">
        <div class="text-center mb-5 wow fadeInDown">
            <span class="fw-bold" style="color: #006a4e; font-size: 13px; letter-spacing: 2px;">POURQUOI NOUS ?</span>
            <h2 class="fw-bold display-6 mt-2 color-secondery">Nos Valeurs</h2>
            <div class="mx-auto mt-2" style="width: 45px; height: 3px; background-color: #00aaff;"></div>
        </div>

        <div class="row align-items-center g-0 position-relative">
            <div class="col-lg-8 position-relative" style="z-index: 2;">
                <div class="p-2 wow fadeInLeft" style="background-color: #002e5b; border-radius: 4px;">
                    <div class="row g-1">
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center card-valeur">
                                <h5 class="fw-bold mb-3 color-secondery">Excellence</h5>
                                <p class="small text-muted mb-0">Une connaissance approfondie des référentiels internationaux pour garantir une conformité sans faille.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center card-valeur">
                                <h5 class="fw-bold mb-3 color-secondery">Intégrité</h5>
                                <p class="small text-muted mb-0">Nous agissons avec transparence et éthique dans toutes nos missions d'audit et de conseil.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center card-valeur">
                                <h5 class="fw-bold mb-3 color-secondery">Innovation</h5>
                                <p class="small text-muted mb-0">Amélioration continue de nos processus pour mieux anticiper vos besoins futurs.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center card-valeur">
                                <h5 class="fw-bold mb-3 color-secondery">Engagement</h5>
                                <p class="small text-muted mb-0">Accompagnement personnalisé et disponibilité totale jusqu'à votre réussite finale.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-none d-lg-block">
                <div class="ms-n5 wow fadeInRight" style="margin-left: -80px !important;">
                    <img src="{{ asset('assets/images/about/values-side.jpg') }}" 
                         alt="Valeurs QualiPro" class="img-fluid rounded shadow-lg" 
                         style="width: 120%; height: 380px; object-fit: cover; z-index: 1;">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="equipe" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <h2 class="fw-bold color-secondery mb-2">Notre Equipe</h2>
                <div style="width: 75px; height: 4px; background-color: #8b4513; margin-bottom: 35px;"></div>
                
                <div class="team-text lead" style="color: #444; line-height: 1.8;">
                    <p class="mb-4">
                        Nos consultants et experts sont de haut niveau, une équipe pluridisciplinaire dotée d'expériences et de compétences confirmées dans le <strong>Management d'entreprise</strong> et la conduite du changement.
                    </p>
                    <p>
                        Notre équipe est composée de consultants certifiés et reconnus par les organismes de certification les plus réputés au niveau national et international.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .color-secondery { color: #002e5b !important; }
    
    /* Correction pour éviter les bugs visuels de chevauchement */
    section { clear: both; width: 100%; display: block; position: relative; }

    /* Design des cartes : coins droits pour l'effet compact */
    .card-valeur {
        border-radius: 0px; 
        transition: all 0.3s ease;
    }
    
    .card-valeur:hover {
        background-color: #f8f9fa !important;
        transform: scale(1.01);
    }

    @media (max-width: 991px) {
        .ms-n5 { margin-left: 0 !important; margin-top: 20px; }
    }
</style>