<section class="core-value position-relative py-5" style="overflow: hidden;">
    <div class="container">
        <div class="row">
            {{-- En-tête de la section --}}
            <div class="col-md-12">
                <div class="title mb-50 w-75 text-center mx-auto wow animated slideInUp">
                    <span class="color-primary" style="color: #269649; font-weight: bold; display: block; margin-bottom: 10px;">
                        {{ $coreSettings->subtitle_fr ?? '' }}
                    </span>
                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20" style="color: #002e5b; font-weight: 700;">
                        {{ $coreSettings->title_fr ?? 'Nos Valeurs' }}
                    </h2>
                    <p class="text-muted">{{ $coreSettings->desc_fr ?? '' }}</p>
                </div>
            </div>

            {{-- Bloc des Cartes (Gauche) avec le fameux -80px --}}
            <div class="col-xl-7 col-lg-12 z-index-1">
                <div class="core-value-box bg-secondery p-40 shadow-lg" 
                     style="background-color: #002e5b !important; border-radius: 15px; margin: 50px -80px 50px 0; position: relative; z-index: 10;">
                    <div class="row">
                        @if(isset($coreItems))
                            @foreach($coreItems as $i => $item)
                            <div class="col-md-6 mb-4">
                                <div class="Valuable-item bg-light p-30 text-center h-100 wow animated slideInUp" 
                                     style="border-radius: 10px; border-bottom: 5px solid #269649; transition: 0.3s;">
                                    <h4 class="mb-15" style="color: #002e5b; font-weight: 600;">{{ $item->title_fr }}</h4>
                                    <p class="mb-0 text-muted" style="font-size: 0.95rem; line-height: 1.6;">
                                        {{ $item->desc_fr }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            {{-- Bloc Image (Droite) --}}
            <div class="col-xl-5 col-lg-12">
                <div class="core-images mt-30 wow animated slideInRight">
                    <img src="{{ ($coreSettings && $coreSettings->image) ? asset($coreSettings->image) : 'https://cdn.bcs-express.ru/article-head/7180.jpg' }}" 
                         alt="QualiPro Values" 
                         class="img-fluid rounded shadow" 
                         style="width: 100%; height: 550px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Ajustement pour mobile : on retire le -80px pour éviter que ça sorte de l'écran */
    @media (max-width: 1199px) {
        .core-value-box {
            margin: 30px 0 !important;
        }
    }
</style>