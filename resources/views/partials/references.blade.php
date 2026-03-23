<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        // Fonction d'initialisation
        function startSlider() {
            var slider = $('#slider-references');
            
            // On détruit s'il existe déjà pour éviter les bugs
            if (slider.hasClass('owl-loaded')) {
                slider.trigger('destroy.owl.carousel');
                slider.removeClass('owl-loaded');
            }

            slider.owlCarousel({
                loop: true,
                margin: 20,
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
            console.log("Le défilement a été activé !");
        }

        // Lancement automatique
        startSlider();

        // Sécurité : on relance après 1 seconde au cas où
        setTimeout(startSlider, 1000);
    });
</script>

<style>
    /* On s'assure que les points de navigation (dots) sont visibles */
    .owl-dots {
        text-align: center;
        margin-top: 20px;
        display: block !important;
    }
    .owl-dot {
        height: 12px;
        width: 12px;
        background: #ccc !important;
        border-radius: 50%;
        display: inline-block;
        margin: 5px;
    }
    .owl-dot.active {
        background: #00aaff !important;
    }
</style>