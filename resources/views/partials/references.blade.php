<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
    #section-ref { background-color: #f4f7f6 !important; padding: 80px 0; overflow: hidden; }
    .ref-card { 
        background: #ffffff; 
        height: 130px; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        border-radius: 12px; 
        border: 1px solid #eee; 
        margin: 10px; 
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
    .ref-card img { max-width: 80% !important; max-height: 70% !important; width: auto !important; object-fit: contain; }
    .owl-dots { margin-top: 20px !important; }
</style>

<section id="section-ref">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-5">
                <div class="title mb-4">
                    <span style="color: #006a4e; font-weight: 700; text-transform: uppercase; font-size: 13px;">ILS NOUS FONT CONFIANCE...</span>
                    <h2 class="fw-bold mb-2" style="color: #002e5b; font-size: 34px;">Nos Références</h2>
                    <div style="width: 50px; height: 3px; background-color: #00aaff; margin-bottom: 20px;"></div>
                    <p class="text-muted" style="font-size: 15px; line-height: 1.7;">
                        Nous collaborons avec des entreprises de divers secteurs pour bâtir des démarches d’amélioration continue.
                    </p>
                </div>
            </div>

            <div class="col-lg-7">
                <div id="slider-paternes" class="owl-carousel owl-theme">
                    {{-- On écrit les chemins à la main pour être SÛR --}}
                    <div class="item"><div class="ref-card"><img src="/assets/images/paternes/partner1.jpg"></div></div>
                    <div class="item"><div class="ref-card"><img src="/assets/images/paternes/partner2.png"></div></div>
                    <div class="item"><div class="ref-card"><img src="/assets/images/paternes/partner3.jpg"></div></div>
                    <div class="item"><div class="ref-card"><img src="/assets/images/paternes/partner4.jpg"></div></div>
                    <div class="item"><div class="ref-card"><img src="/assets/images/paternes/partner5.jpg"></div></div>
                    <div class="item"><div class="ref-card"><img src="/assets/images/paternes/partner6.png"></div></div>
                    <div class="item"><div class="ref-card"><img src="/assets/images/paternes/partner7.png"></div></div>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        $('#slider-paternes').owlCarousel({
            loop: true,
            margin: 10,
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
    });
</script>