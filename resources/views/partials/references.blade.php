@php
    // ================================
    //    VARIABLES DE LA SECTION RÉFÉRENCES
    // ================================
    $partnersSubtitle = 'Ils nous font confiance...';
    $partnersTitle = 'Nos Références';
    $partnersDesc = 'Nous accompagnons les leaders des secteurs agroalimentaire, pharmaceutique et cosmétique dans leurs démarches de certification et de mise en conformité réglementaire.';

    // Liste des logos (remplacez par vos vrais chemins d'images dans public/assets/images/partners/)
    $partnerLogos = [
        ['img' => 'partner1.png', 'name' => 'Secteur Agro'],
        ['img' => 'partner2.png', 'name' => 'Secteur Pharma'],
        ['img' => 'partner3.png', 'name' => 'Secteur Cosmétique'],
        ['img' => 'partner4.png', 'name' => 'Industrie'],
    ];
@endphp

<section id="references" class="our-partners-two bg-light position-relative py-80" style="background-color: #fbfbfb;">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-md-12 col-lg-5">
                <div class="title mb-30 wow animated slideInLeft">
                    <span style="color: #008542; font-weight: 700; text-transform: uppercase; font-size: 14px; letter-spacing: 1px;">
                        {{ $partnersSubtitle }}
                    </span>
                    <h2 class="position-relative pb-15 mb-20 fw-bold" style="color: #002e5b; font-size: 36px;">
                        {{ $partnersTitle }}
                        <div style="width: 60px; height: 4px; background-color: #00aaff; margin-top: 10px;"></div>
                    </h2>
                    <p class="text-muted" style="line-height: 1.8; font-size: 16px;">
                        {{ $partnersDesc }}
                    </p>
                </div>
            </div>

            <div class="col-md-12 col-lg-7">
                <div class="owl-carousel owl-theme partner-slider wow animated fadeIn">
                    @foreach($partnerLogos as $logo)
                        <div class="item p-3">
                            <div class="bg-white shadow-sm d-flex align-items-center justify-content-center" 
                                 style="height: 120px; border-radius: 8px; border: 1px solid #eee; transition: 0.3s;"
                                 onmouseover="this.style.borderColor='#008542'; this.style.transform='translateY(-5px)'"
                                 onmouseout="this.style.borderColor='#eee'; this.style.transform='translateY(0)'">
                                
                                {{-- Si vous n'avez pas encore les images, on affiche le nom ou une icône --}}
                                <span class="fw-bold text-muted small text-center px-2">{{ $logo['name'] }}</span>
                                {{-- <img src="{{ asset('assets/images/partners/'.$logo['img']) }}" alt="{{ $logo['name'] }}" style="max-width: 80%; max-height: 80%; object-fit: contain;"> --}}
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
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: { items: 2 },
                600: { items: 3 },
                1000: { items: 4 }
            }
        });
    });
</script>
@endpush