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
                <div class="about-img shadow wow fadeInLeft">
                    <img src="{{ filter_var($aboutImg, FILTER_VALIDATE_URL) ? $aboutImg : asset($aboutImg) }}" 
                         alt="Mission" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <h2 class="fw-bold color-secondery mb-3">{{ $aboutTitle }}</h2>
                <p class="text-muted mb-4">{{ $aboutText1 }}</p>
                <div class="p-4 rounded text-white" style="background-color: #002e5b; border-left: 5px solid #006a4e;">
                    <p class="mb-0 italic">{{ $aboutText2 }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="valeurs" class="py-5 bg-white overflow-hidden">
    <div class="container">
        <div class="text-center mb-5">
            <span class="fw-bold" style="color: #006a4e; font-size: 13px; letter-spacing: 2px;">POURQUOI NOUS ?</span>
            <h2 class="fw-bold display-6 mt-2 color-secondery">Nos Valeurs</h2>
            <div class="mx-auto mt-2" style="width: 45px; height: 3px; background-color: #00aaff;"></div>
        </div>

        <div class="row align-items-center g-0 position-relative">
            <div class="col-lg-8 position-relative" style="z-index: 2;">
                <div class="p-4 p-md-5 wow fadeInLeft" style="background-color: #002e5b; border-radius: 5px;">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm card-style">
                                <h5 class="fw-bold mb-3 color-secondery">Excellence</h5>
                                <p class="small text-muted mb-0">Une connaissance approfondie des référentiels internationaux pour garantir une conformité sans faille.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm card-style">
                                <h5 class="fw-bold mb-3 color-secondery">Intégrité</h5>
                                <p class="small text-muted mb-0">Nous agissons avec transparence et éthique dans toutes nos missions d'audit et de conseil.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm card-style">
                                <h5 class="fw-bold mb-3 color-secondery">Innovation</h5>
                                <p class="small text-muted mb-0">Amélioration continue de nos processus pour mieux anticiper vos besoins futurs.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm card-style">
                                <h5 class="fw-bold mb-3 color-secondery">Engagement</h5>
                                <p class="small text-muted mb-0">Accompagnement personnalisé et disponibilité totale jusqu'à votre réussite finale.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-none d-lg-block">
                <div class="ms-n5 wow fadeInRight" style="margin-left: -100px !important;">
                    <img src="{{ asset('assets/images/about/values-side.jpg') }}" 
                         alt="Valeurs" class="img-fluid rounded shadow-lg" 
                         style="width: 130%; height: 400px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="equipe" class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold color-secondery">Notre Equipe</h2>
        <div style="width: 70px; height: 4px; background-color: #8b4513; margin-bottom: 30px;"></div>
        <div class="team-text lead" style="color: #444;">
            <p class="mb-4">Nos consultants et experts sont de haut niveau, une équipe pluridisciplinaire dotée d'expériences confirmées.</p>
            <p>Notre équipe est composée de consultants certifiés par les organismes les plus réputés.</p>
        </div>
    </div>
</section>

<style>
    .color-secondery { color: #002e5b !important; }
    
    /* Force l'espacement et le design des cartes */
    .card-style {
        border-radius: 4px;
        transition: transform 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .card-style:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }

    /* Sécurité pour les autres fichiers */
    section { clear: both; width: 100%; display: block; }
</style>