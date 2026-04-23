@php
    // On utilise les variables envoyées par le contrôleur ou des valeurs par défaut
    $partnersSubtitle = 'Ils Nous Font Confiance';
    $partnersTitle = 'Nos Partenaires & Clients';
    $partnersDesc = 'Nous collaborons avec des entreprises de divers secteurs...';
@endphp

<style>
    .our-partners-two { background-color: #f8f9fa; }
    .our-partners-two .item img {
        max-height: 70px; 
        width: auto; 
        object-fit: contain;
        display: inline-block !important;
        filter: grayscale(100%); /* Effet stylé noir et blanc */
        transition: 0.3s;
    }
    .our-partners-two .item img:hover {
        filter: grayscale(0%);
    }
</style>

<section id="partners" class="our-partners-two position-relative py-80">
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

            {{-- BLOC DROIT : CARROUSEL (DYNAMIQUE) --}}
            <div class="col-md-12 col-lg-7">
                <div class="owl-carousel partners-slider wow animated slideInRight">
                    
                    @forelse($partners as $partner)
                        <div class="item text-center p-20">
                            {{-- On suppose que la table 'partners' a une colonne 'image' ou 'logo' --}}
                            <img src="{{ asset($partner->image) }}" alt="{{ $partner->name ?? 'Partenaire' }}">
                        </div>
                    @empty
                        <div class="item text-center">
                            <p class="text-muted">Aucun partenaire ajouté via l'admin.</p>
                        </div>
                    @endforelse

                </div>
            </div>
            
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
    if (typeof jQuery !== 'undefined' && jQuery().owlCarousel) {
        jQuery('.partners-slider').owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 2000, 
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
@endpush