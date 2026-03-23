@php
    $partnersSubtitle = 'ILS NOUS FONT CONFIANCE...';
    $partnersTitle = 'Nos Références';
    $partnersDesc = 'Nous collaborons avec des entreprises de divers secteurs (agroalimentaire, pharmaceutique, cosmétique) pour bâtir des démarches d’amélioration continue et garantir leur conformité aux normes.';
@endphp

<section id="references" class="py-80" style="background-color: #f4f7f6;"> {{-- Gris clair uni --}}
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-5 col-md-12">
                <div class="title mb-30 wow animated fadeInLeft">
                    <span style="color: #006a4e; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">
                        {{ $partnersSubtitle }}
                    </span>
                    <h2 class="fw-bold mb-2" style="color: #002e5b; font-size: 34px;">
                        {{ $partnersTitle }}
                    </h2>
                    <div style="width: 60px; height: 3px; background-color: #00aaff; margin-bottom: 20px;"></div>
                    <p class="text-muted" style="font-size: 16px; line-height: 1.7; max-width: 420px;">
                        {{ $partnersDesc }}
                    </p>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="owl-carousel owl-theme partner-carousel wow animated fadeInRight">
                    {{-- Boucle automatique pour partner1.png jusqu'à partner7.png --}}
                    @for ($i = 1; $i <= 7; $i++)
                        <div class="item">
                            <div class="d-flex align-items-center justify-content-center bg-white shadow-sm" 
                                 style="height: 130px; margin: 10px; border-radius: 12px; border: 1px solid #eee; transition: 0.4s; overflow: hidden;">
                                <img src="{{ asset('assets/images/partners/partner' . $i . '.png') }}" 
                                     alt="Partenaire QualiPro+ {{ $i }}" 
                                     style="max-width: 85%; max-height: 75%; object-fit: contain; filter: grayscale(100%); opacity: 0.6; transition: 0.4s;"
                                     onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1'"
                                     onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.6'">
                            </div>
                        </div>
                    @endfor
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
            margin: 15,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000, {{-- Temps d'arrêt sur chaque logo --}}
            smartSpeed: 1200,      {{-- Vitesse du glissement fluide --}}
            autoplayHoverPause: true,
            responsive: {
                0: { items: 1 },    {{-- Mobile --}}
                768: { items: 2 },  {{-- Tablette --}}
                1024: { items: 3 }  {{-- PC : Exactement 3 logos --}}
            }
        });
    });
</script>
@endpush