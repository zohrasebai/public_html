@php
    $aboutData = \App\Models\About::first();
    $aboutImg = ($aboutData && $aboutData->image) ? asset($aboutData->image) : asset('assets/images/background/consulting.jpg');
    $aboutTitle = $aboutData->title_fr ?? 'Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence.'; 
    $aboutText1 = $aboutData->text_1_fr ?? 'Nous sommes un cabinet spécialisé dans l’accompagnement...';
    $aboutText2 = $aboutData->text_2_fr ?? 'Notre mission : Accompagner les entreprises...';
@endphp

<section id="mission" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="{{ $aboutImg }}" class="img-fluid rounded shadow" alt="Mission">
            </div>
            <div class="col-lg-7 ps-lg-5">
                <h2 class="fw-bold mb-4" style="color: #002e5b;">{{ $aboutTitle }}</h2>
                <p class="text-muted mb-4">{{ $aboutText1 }}</p>
                <div class="p-4 rounded text-white" style="background-color: #002e5b; border-left: 5px solid #006a4e;">
                    <p class="mb-0 italic">{{ $aboutText2 }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="valeurs" class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <span class="fw-bold" style="color: #006a4e; font-size: 13px; letter-spacing: 2px;">POURQUOI NOUS ?</span>
            <h2 class="fw-bold display-6 mt-2" style="color: #002e5b;">Nos Valeurs</h2>
            <div class="mx-auto mt-2" style="width: 45px; height: 3px; background-color: #00aaff;"></div>
        </div>

        <div class="row g-0 align-items-center justify-content-center">
            <div class="col-lg-10">
                <div style="background-color: #002e5b; padding: 20px; border-radius: 5px;">
                    <div class="row g-3"> <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm">
                                <h5 class="fw-bold mb-3" style="color: #002e5b;">Excellence</h5>
                                <p class="small text-muted mb-0">Une connaissance approfondie des référentiels internationaux pour garantir une conformité sans faille.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm">
                                <h5 class="fw-bold mb-3" style="color: #002e5b;">Intégrité</h5>
                                <p class="small text-muted mb-0">Nous agissons avec transparence et éthique dans toutes nos missions d'audit et de conseil.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm">
                                <h5 class="fw-bold mb-3" style="color: #002e5b;">Innovation</h5>
                                <p class="small text-muted mb-0">Amélioration continue de nos processus pour mieux anticiper vos besoins futurs.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm">
                                <h5 class="fw-bold mb-3" style="color: #002e5b;">Engagement</h5>
                                <p class="small text-muted mb-0">Accompagnement personnalisé et disponibilité totale jusqu'à votre réussite finale.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="equipe" class="py-5 bg-light">
    <div class="container text-center">
        <div class="mb-5">
            <h2 class="fw-bold display-6" style="color: #002e5b;">Notre Equipe</h2>
            <div class="mx-auto mt-2" style="width: 55px; height: 3px; background-color: #00aaff;"></div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <p class="lead text-dark mb-4" style="line-height: 1.8;">
                    Nos consultants et experts sont de haut niveau, une équipe pluridisciplinaire dotée d'expériences et de compétences confirmées dans le <strong>Management d'entreprise</strong> et la conduite du changement.
                </p>
                <p class="lead text-dark" style="line-height: 1.8;">
                    Notre équipe est composée de consultants certifiés et reconnus par les organismes de certification les plus réputés au niveau national et international.
                </p>
            </div>
        </div>
    </div>
</section>

<style>
    .color-secondery { color: #002e5b !important; }
    
    section {
        position: relative;
        display: block;
        width: 100%;
        clear: both;
    }

    /* Optionnel : effet au survol des cartes */
    .bg-white.shadow-sm:hover {
        background-color: #fcfcfc !important;
        transform: translateY(-3px);
        transition: 0.3s ease;
    }
</style>