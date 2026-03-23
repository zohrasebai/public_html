@php
    $partnersSubtitle = 'Clients qui nous font confiance...';
    $partnersTitle = 'Nos Références';
    $partnersDesc = 'Nous collaborons avec des entreprises de divers secteurs (agroalimentaire, pharmaceutique, cosmétique) pour bâtir des démarches d’amélioration continue et garantir leur conformité aux normes.';

    // Liste précise selon votre capture d'écran (VS Code)
    $partners = [
        'partner1.jpg',
        'partner2.png',
        'partner3.jpg',
        'partner4.jpg',
        'partner5.jpg',
        'partner6.png',
        'partner7.png'
    ];
@endphp

<section id="references" class="py-80" style="background-color: #f4f7f6;"> {{-- Le même gris que demandé --}}
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-5 col-md-12">
                <div class="title mb-30 wow animated slideInLeft">
                    <span style="color: #006a4e; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">
                        {{ $partnersSubtitle }}
                    </span>
                    <h2 class="fw-bold mb-2" style="color: #002e5b; font-size: 34px;">
                        {{ $partnersTitle }}
                    </h2>
                    <div style="width: 50px; height: 3px; background-color: #00aaff; margin-bottom: 20px;"></div>
                    <p class="text-muted" style="font-size: 15px; line-height: 1.7;">
                        {{ $partnersDesc }}
                    </p>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="owl-carousel owl-theme partner-carousel">
                    @foreach($partners as $file)
                        <div class="item">
                            <div class="d-flex align-items-center justify-content-center bg-white shadow-sm" 
                                 style="height: 120px; margin: 10px; border-radius: 8px; border: 1px solid #eee;">
                                <img src="{{ asset('assets/images/partners/' . $file) }}" 
                                     alt="Client QualiPro+" 
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
        $(".partner-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true, {{-- Les petits points en bas comme sur wer.png --}}
            autoplay: true,
            autoplayTimeout: 2000,
            smartSpeed: 800,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 } {{-- 3 logos côte à côte sur PC --}}
            }
        });
    });
</script>
@endpush