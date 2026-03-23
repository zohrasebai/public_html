<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
    #section-references { 
        background-color: #f4f7f6 !important; 
        padding: 80px 0; 
    }
    /* On cache les logos au début pour éviter l'effet "liste verticale" moche */
    #slider-references:not(.owl-loaded) {
        display: flex !important;
        overflow: hidden;
    }
    #slider-references:not(.owl-loaded) .item {
        min-width: 33.33%;
    }
    .partner-card {
        background: #fff;
        height: 140px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        border: 1px solid #eee;
        margin: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
    .partner-card img {
        max-width: 80% !important;
        max-height: 75% !important;
        width: auto !important; /* Empeche l'image de s'etirer */
        object-fit: contain;
    }
</style>

<section id="section-references">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-5">
                <div class="title mb-4">
                    <span style="color: #006a4e; font-weight: 700; text-transform: uppercase; font-size: 13px;">ILS NOUS FONT CONFIANCE...</span>
                    <h2 class="fw-bold mb-2" style="color: #002e5b; font-size: 34px;">Nos Références</h2>
                    <div style="width: 50px; height: 3px; background-color: #00aaff; margin-bottom: 20px;"></div>
                    <p class="text-muted" style="font-size: 15px; line-height: 1.7;">
                        Nous collaborons avec des entreprises de divers secteurs pour bâtir des démarches d'amélioration continue.
                    </p>
                </div>
            </div>

            <div class="col-lg-7">
                <div id="slider-references" class="owl-carousel owl-theme">
                    <div class="item"><div class="partner-card"><img src="/assets/images/paternes/partner1.jpg"></div></div>
                    <div class="item"><div class="partner-card"><img src="/assets/images/paternes/partner2.png"></div></div>
                    <div class="item"><div class="partner-card"><img src="/assets/images/paternes/partner3.jpg"></div></div>
                    <div class="item"><div class="partner-card"><img src="/assets/images/paternes/partner4.jpg"></div></div>
                    <div class="item"><div class="partner-card"><img src="/assets/images/paternes/partner5.jpg"></div></div>
                    <div class="item"><div class="partner-card"><img src="/assets/images/paternes/partner6.png"></div></div>
                    <div class="item"><div class="partner-card"><img src="/assets/images/paternes/partner7.png"></div></div>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    // On utilise une fonction de secours pour être sûr que ça se lance
    function initPartnerSlider() {
        var $carousel = $('#slider-references');
        if ($carousel.length && typeof $.fn.owlCarousel !== 'undefined') {
            $carousel.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 2000,
                smartSpeed: 800,
                dots: true,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 }
                }
            });
            console.log("Slider Références initialisé !");
        }
    }

    // On essaie de le lancer immédiatement et après 500ms par sécurité
    $(document).ready(function() {
        initPartnerSlider();
        setTimeout(initPartnerSlider, 500);
    });
</script>