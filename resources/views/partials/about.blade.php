@php
    // Récupération des données dynamiques
    $aboutData = \App\Models\About::first();
    
    $aboutImg = ($aboutData && $aboutData->image) ? asset($aboutData->image) : 'https://moodle.cfuv.ru/pluginfile.php/238972/course/overviewfiles/consulting.jpg';
    $aboutTitle = $aboutData->title_fr ?? 'Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence.'; 
    $aboutText1 = $aboutData->text_1_fr ?? 'Nous sommes un cabinet spécialisé dans l’accompagnement des entreprises pour l’obtention de certifications...';
    $aboutText2 = $aboutData->text_2_fr ?? 'Notre mission : Accompagner les entreprises vers la certification...';
@endphp

<section id="mission" class="about-us-3 position-relative bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-5 col-xl-5">
                <div class="about-img-2 wow animated slideInLeft">
                    <img src="{{ filter_var($aboutImg, FILTER_VALIDATE_URL) ? $aboutImg : asset($aboutImg) }}" 
                         alt="Notre Mission" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-md-12 col-lg-7 col-xl-7">
                <div class="position-relative ps-lg-4">
                    <div class="inner-title mb-30">
                        <h2 class="color-secondery xl-mt-30 wow animated slideInUp fw-bold">{{ $aboutTitle }}</h2>
                    </div>
                    <div class="text-area mb-30 wow animated slideInUp">
                        <p class="mb-15 text-muted" style="font-size: 1.1rem; line-height: 1.8;">{{ $aboutText1 }}</p>
                    </div>
                    <div class="about-area-2 bg-secondery d-flex color-white p-4 wow animated slideInUp rounded shadow-sm" style="background-color: #002e5b; color: white;">
                        <p class="mb-0 italic" style="font-size: 1.1rem; border-left: 4px solid #006a4e; padding-left: 15px;">
                            {{ $aboutText2 }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="m-0" style="opacity: 0.1;">

<section id="valeurs" class="values-section py-5 bg-white">
    <div class="container text-center">
        <div class="mb-5">
            <h6 class="text-uppercase fw-bold" style="color: #006a4e; letter-spacing: 2px;">Pourquoi nous choisir ?</h6>
            <h2 class="display-5 fw-bold color-secondery">Nos Valeurs</h2>
            <div class="mx-auto" style="width: 60px; height: 4px; background-color: #00aaff; margin-top: 10px;"></div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="value-card p-4 h-100 border rounded shadow-sm">
                    <div class="mb-3"><i class="ri-medal-line" style="font-size: 2.5rem; color: #006a4e;"></i></div>
                    <h5 class="fw-bold">Excellence</h5>
                    <p class="small text-muted">La rigueur technique au service de votre conformité internationale.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="value-card p-4 h-100 border rounded shadow-sm">
                    <div class="mb-3"><i class="ri-shield-check-line" style="font-size: 2.5rem; color: #006a4e;"></i></div>
                    <h5 class="fw-bold">Intégrité</h5>
                    <p class="small text-muted">Éthique et transparence totale dans chacune de nos interventions.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="value-card p-4 h-100 border rounded shadow-sm">
                    <div class="mb-3"><i class="ri-lightbulb-line" style="font-size: 2.5rem; color: #006a4e;"></i></div>
                    <h5 class="fw-bold">Innovation</h5>
                    <p class="small text-muted">Adaptation constante aux nouvelles normes et outils technologiques.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="value-card p-4 h-100 border rounded shadow-sm">
                    <div class="mb-3"><i class="ri-hand-heart-line" style="font-size: 2.5rem; color: #006a4e;"></i></div>
                    <h5 class="fw-bold">Engagement</h5>
                    <p class="small text-muted">Partenaire de votre succès, de l'audit initial à la certification.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="equipe" class="team-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center text-lg-start">
                <h2 class="fw-bold display-6 mb-3 color-secondery">Notre Équipe</h2>
                <div style="width: 80px; height: 4px; background-color: #8b4513; margin-bottom: 30px;"></div>
                
                <div class="lead" style="font-size: 1.2rem; color: #444;">
                    <p class="mb-4">
                        Nos consultants et experts sont de haut niveau, formant une équipe pluridisciplinaire dotée d'expériences et de compétences confirmées dans le <strong>Management d'entreprise</strong> et la conduite du changement.
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
    /* Classes de couleurs globales */
    .color-secondery { color: #002e5b; }
    .bg-secondery { background-color: #002e5b; }

    /* Animation des cartes de valeurs */
    .value-card {
        transition: all 0.3s ease;
        background: white;
        border-top: 4px solid transparent !important;
    }
    .value-card:hover {
        transform: translateY(-10px);