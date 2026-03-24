<section class="core-value position-relative py-5">
    <div class="container">
        <div class="row align-items-center">
            {{-- En-tête (Titre global) --}}
            <div class="col-12 text-center mb-5">
                <span style="color: #269649; font-weight: bold;">{{ $coreSettings->subtitle_fr ?? '' }}</span>
                <h2 style="color: #002e5b; font-weight: 700;">{{ $coreSettings->title_fr ?? 'Nos Valeurs' }}</h2>
                <p class="text-muted">{{ $coreSettings->desc_fr ?? '' }}</p>
            </div>

            {{-- Bloc Bleu avec Cartes (Chevauchement -80px) --}}
            <div class="col-xl-7 col-lg-12">
                <div class="p-4 shadow-lg" style="background-color: #002e5b !important; border-radius: 15px; margin-right: -80px; position: relative; z-index: 10;">
                    <div class="row">
                        @foreach($coreItems as $item)
                        <div class="col-md-6 mb-4">
                            <div class="bg-white p-4 h-100 text-center shadow-sm" style="border-radius: 10px; border-bottom: 5px solid #269649;">
                                <h5 style="color: #002e5b; font-weight: bold;">{{ $item->title_fr }}</h5>
                                <p class="small text-muted mb-0">{{ $item->desc_fr }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Bloc Image (Derrière le bleu) --}}
            <div class="col-xl-5 col-lg-12">
                <div class="rounded overflow-hidden shadow">
                    <img src="{{ ($coreSettings && $coreSettings->image) ? asset($coreSettings->image) : 'https://via.placeholder.com/600x550' }}" 
                         class="w-100" style="height: 550px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>