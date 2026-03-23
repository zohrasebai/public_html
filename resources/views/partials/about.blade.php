@php
    $aboutData = \App\Models\About::first();
    $aboutImg = ($aboutData && $aboutData->image) ? asset($aboutData->image) : asset('assets/images/about/mission.jpg');
    $aboutTitle = $aboutData->title_fr ?? 'Qui Sommes-Nous'; 
    $aboutText1 = $aboutData->text_1_fr ?? 'Nous sommes un cabinet spécialisé dans l’accompagnement...';
    $aboutText2 = $aboutData->text_2_fr ?? 'Notre mission : Accompagner les entreprises...';
@endphp

<section id="mission" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img src="{{ $aboutImg }}" class="img-fluid rounded shadow" alt="Mission">
            </div>
            <div class="col-lg-7 ps-lg-5">
                <h2 class="fw-bold color-secondery mb-4">{{ $aboutTitle }}</h2>
                <p class="text-muted mb-4">{{ $aboutText1 }}</p>
                <div class="p-4 rounded shadow-sm text-white" style="background-color: #002e5b;">
                    <p class="mb-0 italic">{{ $aboutText2 }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="valeurs" class="py-5 bg-white overflow-hidden">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-success fw-bold small text-uppercase">Sous-titre (FR)</span>
            <h2 class="fw-bold color-secondery mt-2">Nos Valeurs</h2>
            <div class="mx-auto mt-2" style="width: 40px; height: 2px; background-color: #00aaff;"></div>
            <p class="text-muted mt-3">Excellence et Intégrité.</p>
        </div>

        <div class="row align-items-center position-relative">
            <div class="col-lg-7 z-index-2">
                <div class="p-4 p-md-5" style="background-color: #002e5b; border-radius: 5px;">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm">
                                <h6 class="fw-bold color-secondery mb-3">Excellence</h6>
                                <p class="small text-muted mb-0">Une connaissance approfondie des référentiels internationaux pour garantir une conformité sans faille.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm">
                                <h6 class="fw-bold color-secondery mb-3">Intégrité</h6>
                                <p class="small text-muted mb-0">Une connaissance approfondie des référentiels internationaux pour garantir une conformité sans faille.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm">
                                <h6 class="fw-bold color-secondery mb-3">Innovation</h6>
                                <p class="small text-muted mb-0">Une connaissance approfondie des référentiels internationaux pour garantir une conformité sans faille.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm">
                                <h6 class="fw-bold color-secondery mb-3">Engagement</h6>
                                <p class="small text-muted mb-0">Une connaissance approfondie des référentiels internationaux pour garantir une conformité sans faille.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 d-none d-lg-block position-absolute" style="right: -5%; top: 50%; transform: translateY(-50%);">
                <img src="{{ asset('assets/images/about/values-side.jpg') }}" 
                     class="img-fluid rounded shadow" 
                     style="max-width: 120%;" alt="Valeurs QualiPro">
            </div>
        </div>
    </div>
</section>

<section id="equipe" class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold color-secondery">Notre Equipe</h2>
        <div style="width: 60px; height: 3px; background-color: #8b4513; margin-top: 10px;"></div>
        <div class="mt-4 lead text-muted">
            <p>Nos consultants et experts sont de haut niveau, une équipe pluridisciplinaire...</p>
            <p>Notre équipe est composée de consultants certifiés et reconnus...</p>
        </div>
    </div>
</section>

<style>
    .color-secondery { color: #002e5b; }
    .z-index-2 { position: relative; z-index: 2; }
    
    /* Animation légère sur les cartes blanches */
    .bg-white.shadow-sm {
        transition: transform 0.3s ease;
    }
    .bg-white.shadow-sm:hover {
        transform: scale(1.03);
    }
</style>