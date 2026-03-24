<section class="core-value position-relative py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title mb-30 w-75 text-center mx-auto wow animated slideInUp">
                    <span class="color-primary">{{ $coreSettings->subtitle_fr ?? '' }}</span>
                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">{{ $coreSettings->title_fr ?? '' }}</h2>
                    <p>{{ $coreSettings->desc_fr ?? '' }}</p>
                </div>
            </div>

            {{-- Cartes à gauche --}}
            <div class="col-xl-7 col-lg-12">
                {{-- J'ai enlevé le -80px qui causait le bug --}}
                <div class="core-value-box bg-secondery p-30 z-index-1 position-relative shadow-sm" style="border-radius: 8px;">
                    <div class="row">
                        @if(isset($coreItems))
                            @foreach($coreItems as $i => $item)
                            <div class="col-md-6">
                                <div class="Valuable-item bg-light p-30 text-center h-100 mb-3 wow animated slideInUp" style="visibility: visible;">
                                    <h4 class="mb-15" style="color: #002e5b;">{{ $item->title_fr }}</h4>
                                    <p class="mb-0">{{ $item->desc_fr }}</p>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            {{-- Image à droite --}}
            <div class="col-xl-5 col-lg-12">
                <div class="core-images mt-30 wow animated slideInRight" style="visibility: visible;">
                    <img src="{{ ($coreSettings && $coreSettings->image) ? asset($coreSettings->image) : 'https://cdn.bcs-express.ru/article-head/7180.jpg' }}" alt="QualiPro" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>
</section>