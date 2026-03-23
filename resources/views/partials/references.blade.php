@php
    $partnersSubtitle = 'Clients qui nous font confiance...';
    $partnersTitle = 'Nos Partenaires & Clients';
    $partnersDesc = 'Nous collaborons avec des entreprises de divers secteurs pour bâtir des démarches d’amélioration continue.';

    // Liste EXACTE de vos fichiers selon votre capture d'écran VS Code
    $partners = [
        'partner1.jpg', 'partner2.png', 'partner3.jpg', 
        'partner4.jpg', 'partner5.jpg', 'partner6.png', 'partner7.png'
    ];
@endphp

<section id="references" class="py-80" style="background-color: #f4f7f6 !important;">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-5">
                <div class="title mb-30">
                    <span style="color: #006a4e; font-weight: 700; text-transform: uppercase; font-size: 13px;">
                        {{ $partnersSubtitle }}
                    </span>
                    <h2 class="fw-bold mb-2" style="color: #002e5b; font-size: 34px;">
                        {{ $partnersTitle }}
                    </h2>
                    <div style="width: 50px; height: 3px; background-color: #00aaff; margin-bottom: 20px;"></div>
                    <p class="text-muted" style="font-size: 15px;">{{ $partnersDesc }}</p>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="owl-carousel owl-theme partner-slider">
                    @foreach($partners as $file)
                        <div class="item">
                            <div class="bg-white shadow-sm d-flex align-items-center justify-content-center" 
                                 style="height: 120px; margin: 10px; border-radius: 8px; border: 1px solid #eee;">
                                <img src="{{ asset('assets/images/partners/' . $file) }}" 
                                     style="max-width: 85%; max-height: 70%; object-fit: contain;">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

@push('scripts')
<script>
    $(document).ready(function(){
        $(".partner-slider").owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2500,
            dots: true, {{-- Les points sous les logos --}}
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 } {{-- 3 logos à côté du texte --}}
            }
        });
    });
</script>
@endpush