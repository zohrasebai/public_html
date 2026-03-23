@php
    $partners = [
        'partner1.jpg', 'partner2.png', 'partner3.jpg', 
        'partner4.jpg', 'partner5.jpg', 'partner6.png', 'partner7.png'
    ];
@endphp

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
    #section-references { background-color: #f4f7f6 !important; padding: 80px 0; overflow: hidden; }
    
    /* On force la visibilité du slider et des éléments internes */
    .owl-carousel { display: block !important; opacity: 1 !important; visibility: visible !important; }
    .owl-stage-outer { overflow: visible !important; }

    .partner-card {
        background: #fff;
        height: 140px;
        display: flex !important;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        border: 1px solid #eee;
        margin: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        transition: transform 0.3s ease;
    }
    
    .partner-card:hover { transform: translateY(-5px); }

    .partner-card img {
        max-width: 80% !important;
        max-height: 70% !important;
        width: auto !important; /* Empêche l'image d'être écrasée à 0px */
        display: block !important;
        margin: 0 auto;
        opacity: 1 !important;
    }

    /* Style des points de navigation en bas */
    .owl-dots { text-align: center; margin-top: 30px; display: block !important; }
    .owl-dot { height: 12px; width: 12px; background: #d1d1d1 !important; border-radius: 50%; display: inline-block; margin: 0 6px; border: none; padding: 0; }
    .owl-dot.active { background: #00aaff !important; width: 30px; border-radius: 10px; }
</style>

<section id="section-references">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-5">
                <div class="title mb-4">
                    <span style="color: #006a4e; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">ILS NOUS FONT CONFIANCE...</span>
                    <h2 class="fw-bold mb-2" style="color: #002e5b; font-size: 36px;">Nos Références</h2>
                    <div style="width: 60px; height: 4px; background-color: #00aaff; margin-bottom: 25px; border-radius: 2px;"></div>
                    <p class="text-muted" style="font-size: 16px; line-height: 1.8;">
                        Nous collaborons avec des entreprises de divers secteurs pour bâtir des démarches d'amélioration continue et garantir leur conformité aux normes.
                    </p>
                </div>
            </div>

            <div class="col-lg-7">
                <div id="slider-partners-final" class="owl-carousel owl-theme">
                    @foreach($partners as $file)
                        <div class="item">
                            <div class="partner-card">
                                <img src="/assets/images/paternes/{{ $file }}" alt="Logo Partenaire">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        var $carousel = $('#slider-partners-final');

        function launchOwl() {
            $carousel.owlCarousel({
                loop: true,
                margin: 15,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                smartSpeed: 1200,
                dots: true,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 }
                }
            });
        }

        // Premier essai
        launchOwl();

        // Deuxième essai de sécurité (si le DOM n'était pas totalement prêt)
        setTimeout(function() {
            if (!$carousel.hasClass('owl-loaded')) {
                launchOwl();
            }
        }, 1000);
    });
</script>