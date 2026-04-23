paterns.blade.php:@php
    // ================================
    //    VARIABLES DE LA SECTION PARTENAIRES
    // ================================

    $partnersSubtitle = 'Ils Nous Font Confiance';
    $partnersTitle = 'Nos Partenaires & Clients';
    $partnersDesc = 'Nous collaborons avec des entreprises de divers secteurs (agroalimentaire, pharmaceutique, cosmétique) pour bâtir des démarches d’amélioration continue et garantir leur conformité aux normes.';

    // LE CODE MAGIQUE : On scanne directement le dossier pour trouver les images
    $directoryPath = public_path('assets/images/partners');
    $partnerImages = [];
    
    if (file_exists($directoryPath)) {
        // On récupère tous les fichiers .jpg, .jpeg, .png et .webp du dossier
        $partnerImages = glob($directoryPath . '/*.{jpg,jpeg,png,webp,PNG,JPG}', GLOB_BRACE);
    }
@endphp

<style>
    /* 1. On supprime le texte 1920x400 du template */
    .our-partners-two::before, 
    .our-partners-two::after {
        background-image: none !important;
        content: none !important;
    }
    
    /* 2. On applique ton fond gris uni */
    .our-partners-two {
        background-image: none !important;
        
    }

    /* 3. On harmonise la taille des logos */
    .our-partners-two .item img {
        max-height: 70px; 
        width: auto; 
        object-fit: contain;
        display: inline-block !important;
    }
</style>
<section id="partners"
<div class="our-partners-two position-relative py-80">
    <div class="container">
        <div class="row align-items-center">
            
            {{-- BLOC GAUCHE : TEXTES --}}
            <div class="col-md-12 col-lg-5">
                <div class="title mb-30 wow animated slideInLeft">
                    <span class="color-primary">{{ $partnersSubtitle }}</span>
                    <h2 class="position-relative va-lb-line-w50-h2-primary pb-15 mb-20">{{ $partnersTitle }}</h2>
                    <p>{{ $partnersDesc }}</p>
                </div>
            </div>

            {{-- BLOC DROIT : LE CARROUSEL DE LOGOS --}}
            <div class="col-md-12 col-lg-7">
                <div class="owl-carousel partners-slider wow animated slideInRight">
                    
                    @forelse($partnerImages as $path)
                        @php
                            // On extrait juste le nom du fichier
                            $filename = basename($path);
                            $finalSrc = asset('assets/images/partners/' . $filename);
                        @endphp
                        
                        <div class="item text-center p-20">
                            <img src="{{ $finalSrc }}" alt="Partenaire">
                        </div>
                    @empty
                        {{-- Message de secours si le dossier est vide --}}
                        <div class="item text-center">
                            <p class="text-muted">Aucun logo trouvé dans assets/images/partners/</p>
                        </div>
                    @endforelse

                </div>
            </div>
            
        </div>
    </div>
</div>
</section>
{{-- Script d'activation du Owl Carousel --}}
<script>
document.addEventListener("DOMContentLoaded", function() {
    if (typeof jQuery !== 'undefined' && jQuery().owlCarousel) {
        jQuery('.partners-slider').owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 2000, 
            autoplaySpeed: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: { items: 2 },
                600: { items: 3 },
                1000: { items: 4 }
            }
        });
    }
});
</script>