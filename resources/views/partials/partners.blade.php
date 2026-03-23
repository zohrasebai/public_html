@php
    // ================================
    //    VARIABLES DE LA SECTION PARTENAIRES
    //      (Mise à jour QualiPro Plus)
    // ================================

    // 27 caractères (Max)
    $partnersSubtitle = 'Clients qui nous font confiance…
';

    // 24 caractères (Max)
    $partnersTitle = 'Nos Références';

    // 200 caractères (Max)
    $partnersDesc = 'Nous collaborons avec des entreprises de divers secteurs (agroalimentaire, pharmaceutique, cosmétique) pour bâtir des démarches d’amélioration continue et garantir leur conformité aux normes.';

    // أيقونات تمثل القطاعات التي تخدمونها بدلاً من أيقونات تقنية عامة
    $partnersIcons = [
        'flaticon-industrial',     // القطاع الصناعي
        'flaticon-laboratory',     // القطاع الصيدلاني والطبي
        'flaticon-safety',         // قطاع الصحة والسلامة
        'flaticon-ecology',        // قطاع البيئة
        'flaticon-hospitality',    // قطاع التغذية والخدمات
    ];
@endphp

<div class="our-partners-two bg-gray position-relative py-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-5">
                <div class="title mb-30 wow animated slideInLeft animated">
                    <span class="color-primary">{{ $partnersSubtitle ?? '' }}</span>
                    <h2 class="position-relative va-lb-line-w50-h2-primary pb-15 mb-20">{{ $partnersTitle ?? '' }}</h2>
                    <p>{{ $partnersDesc ?? '' }}</p>
                </div>
            </div>
            
        </div>
    </div>
</div>