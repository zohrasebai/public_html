<section class="core-values-section py-5 bg-light">
    <div class="container">
        {{-- En-tête --}}
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold" style="color: #269649; letter-spacing: 2px;">{{ $coreSettings->subtitle_fr ?? 'Valeurs' }}</span>
            <h2 class="fw-bold mt-2" style="color: #002e5b;">{{ $coreSettings->title_fr ?? 'Nos Valeurs Fondamentales' }}</h2>
            <p class="text-muted mx-auto w-75">{{ $coreSettings->desc_fr ?? '' }}</p>
        </div>

        {{-- Le Bloc Combiné (Cartes + Image) --}}
        <div class="row g-0 shadow-lg" style="border-radius: 15px; overflow: hidden;">
            
            {{-- Partie Gauche : Fond Bleu + Cartes Blanches --}}
            <div class="col-xl-7 col-lg-7" style="background-color: #002e5b; padding: 50px;">
                <div class="row g-4">
                    @if(isset($coreItems) && $coreItems->count() > 0)
                        @foreach($coreItems as $item)
                        <div class="col-md-6">
                            <div class="bg-white p-4 h-100 text-center shadow-sm" style="border-radius: 12px; border-bottom: 4px solid #269649;">
                                <h5 class="fw-bold mb-3" style="color: #002e5b;">{{ $item->title_fr }}</h5>
                                <p class="small text-muted mb-0" style="line-height: 1.5;">{{ $item->desc_fr }}</p>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <p class="text-white text-center">Aucune valeur configurée.</p>
                    @endif
                </div>
            </div>

            {{-- Partie Droite : Image --}}
            <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                <div class="h-100">
                    <img src="{{ ($coreSettings && $coreSettings->image) ? asset($coreSettings->image) : 'https://via.placeholder.com/600x800' }}" 
                         alt="QualiPro Values" class="w-100 h-100" style="object-fit: cover; min-height: 450px;">
                </div>
            </div>

        </div>
    </div>
</section>