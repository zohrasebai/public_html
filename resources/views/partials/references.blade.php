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
    .partner-card {
        background: #fff;
        height: 130px;
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
        max-height: 70% !important;
        width: auto !important;
        object-fit: contain;
    }
    /* Style des points de navigation */
    .owl-dots { text-align: center; margin-top: 20px; display: block !important; }
    .owl-dot { height: 12px; width: 12px; background: #ccc !important; border-radius: 50%; display: inline-block; margin: 5px; border: none; }
    .owl-dot.active { background: #00aaff !important; }
</style>

<section id="section-references">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="title mb-4">
                    <span style="color: #006a4e; font-weight: 700; text-transform: uppercase; font-size: 13px;">Clients qui nous font confiance...</span>
                    <h2 class="fw-bold mb-2" style="color: #002e5b; font-size: 34px;">Nos Partenaires & Clients</h2>
                    <div style="width: 50px; height: 3px; background-color: #00aaff; margin-bottom: 20px;"></div>
                    <p class="text-muted" style="font-size: 15px;">Nous collaborons avec des entreprises de divers secteurs (agroalimentaire, pharmaceutique, cosmétique) pour bâtir des démarches d’amélioration continue et garantir leur conformité aux normes.</p>
                </div>
            </div>

            <div class="col-lg-7">
                <div id="slider-references" class="owl-carousel owl-theme">
                    @foreach($partners as $file)
                        <div class="item">
                            <div class="partner-card">
                                <img src="/assets/images/paternes/{{ $file }}" alt="Client">
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
        function startSlider() {
            var slider = $('#slider-references');
            if (slider.length && typeof $.fn.owlCarousel !== 'undefined') {
                slider.owlCarousel({
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                    smartSpeed: 1000,
                    nav: false,
                    dots: true,
                    responsive: {
                        0: { items: 1 },
                        600: { items: 2 },
                        1000: { items: 3 }
                    }
                });
            }
        }
        startSlider();
        setTimeout(startSlider, 1000); // Sécurité si chargement lent
    });
</script>