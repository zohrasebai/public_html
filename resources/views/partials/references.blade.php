@php
    $partners = [
        'partner1.jpg', 'partner2.png', 'partner3.jpg', 
        'partner4.jpg', 'partner5.jpg', 'partner6.png', 'partner7.png'
    ];
@endphp

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
    #section-references { background-color: #f4f7f6 !important; padding: 80px 0; }
    
    /* FORCE L'AFFICHAGE DES IMAGES */
    .owl-carousel { display: block !important; opacity: 1 !important; visibility: visible !important; }
    .owl-item { opacity: 1 !important; visibility: visible !important; }

    .partner-card {
        background: #fff;
        height: 130px;
        display: flex !important; /* Force le centrage */
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        border: 1px solid #eee;
        margin: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
    
    .partner-card img {
        max-width: 85% !important;
        max-height: 75% !important;
        width: auto !important; /* Empêche l'image de disparaître ou de s'étirer */
        display: block !important;
        margin: 0 auto;
    }

    .owl-dots { text-align: center; margin-top: 20px; display: block !important; }
    .owl-dot { height: 12px; width: 12px; background: #ccc !important; border-radius: 50%; display: inline-block; margin: 5px; border: none; }
    .owl-dot.active { background: #00aaff !important; }
</style>

<section id="section-references">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-5">
                <div class="title mb-4">
                    <span style="color: #006a4e; font-weight: 700; text-transform: uppercase; font-size: 13px;">ILS NOUS FONT CONFIANCE...</span>
                    <h2 class="fw-bold mb-2" style="color: #002e5b; font-size: 34px;">Nos Références</h2>
                    <div style="width: 50px; height: 3px; background-color: #00aaff; margin-bottom: 20px;"></div>
                    <p class="text-muted" style="font-size: 15px;">
                        Nous collaborons avec des entreprises de divers secteurs pour bâtir des démarches d'amélioration continue.
                    </p>
                </div>
            </div>

            <div class="col-lg-7">
                <div id="slider-references" class="owl-carousel owl-theme">
                    @foreach($partners as $file)
                        <div class="item">
                            <div class="partner-card">
                                <img src="/assets/images/paternes/{{ $file }}" alt="Client QualiPro+">
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
        var $owl = $('#slider-references');
        
        function initSlider() {
            $owl.owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2500,
                smartSpeed: 1000,
                dots: true,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 }
                }
            });
        }

        initSlider();
        
        // Relance après 500ms pour forcer l'affichage si le premier essai échoue
        setTimeout(function(){
            if (!$owl.hasClass('owl-loaded')) {
                initSlider();
            }
        }, 500);
    });
</script>