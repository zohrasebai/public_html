@php
    $partnersSubtitle = 'ILS NOUS FONT CONFIANCE...';
    $partnersTitle = 'Nos Références';
    $partnersDesc = 'Nous collaborons avec des entreprises de divers secteurs pour bâtir des démarches d’amélioration continue.';

    // Liste exacte de vos fichiers dans le dossier /paternes/
    $partners = [
        'partner1.jpg', 'partner2.png', 'partner3.jpg', 
        'partner4.jpg', 'partner5.jpg', 'partner6.png', 'partner7.png'
    ];
@endphp

<section id="references" class="py-80" style="background-color: #f4f7f6 !important; padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-5">
                <div class="title mb-4">
                    <span style="color: #006a4e; font-weight: 700; text-transform: uppercase; font-size: 13px;">
                        {{ $partnersSubtitle }}
                    </span>
                    <h2 class="fw-bold mb-2" style="color: #002e5b; font-size: 34px;">
                        {{ $partnersTitle }}
                    </h2>
                    <div style="width: 50px; height: 3px; background-color: #00aaff; margin-bottom: 20px;"></div>
                    <p class="text-muted" style="font-size: 15px; line-height: 1.7;">{{ $partnersDesc }}</p>
                </div>
            </div>

            <div class="col-lg-7">
                <div id="slider-ref-final" class="owl-carousel owl-theme">
                    @foreach($partners as $file)
                        <div class="item">
                            <div style="background: #ffffff; height: 130px; display: flex; align-items: center; justify-content: center; border-radius: 12px; border: 1px solid #eee; margin: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
                                <img src="{{ asset('assets/images/paternes/' . $file) }}" 
                                     alt="Client QualiPro+" 
                                     style="max-width: 80%; max-height: 70%; object-fit: contain; width: auto !important;">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // On vérifie toutes les 100ms si jQuery et Owl sont prêts
        var launchSlider = setInterval(function() {
            if (window.jQuery && jQuery.fn.owlCarousel) {
                clearInterval(launchSlider);
                jQuery('#slider-ref-final').owlCarousel({
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
                console.log("Slider Références (paternes) activé avec succès !");
            }
        }, 100);
    });
</script>

<style>
    /* Empêche Owl de cacher les images avant le chargement JS */
    #slider-ref-final { display: block !important; opacity: 1 !important; }
    .owl-item img { margin: 0 auto; }
</style>