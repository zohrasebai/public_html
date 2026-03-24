@php
    // Récupération des réglages ou valeurs par défaut
    $section = \App\Models\SectionSetting::where('section_name', 'causes_section')->first();
    
    $causesSubtitle = $section->subtitle_fr ?? 'Expertise en Certification';
    $causesTitle = $section->title_fr ?? 'Nos Domaines d’Action';
    $causesDesc = $section->desc_fr ?? 'Nous accompagnons les entreprises vers l’excellence via le conseil, la formation et l’audit.';
@endphp

<section id="causes" class="bg-light py-5">
    <div class="container">
        {{-- En-tête de section --}}
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold" style="color: #269649; letter-spacing: 2px; font-size: 0.9rem;">
                {{ $causesSubtitle }}
            </span>
            <h2 class="display-6 fw-bold mt-2" style="color: #002e5b;">{{ $causesTitle }}</h2>
            <div class="mx-auto mt-2 mb-3" style="width: 50px; height: 3px; background-color: #269649;"></div>
            <p class="text-muted mx-auto" style="max-width: 800px;">{{ $causesDesc }}</p>
        </div>
        
        {{-- Grille des Services (3 Blocs) --}}
        <div class="row g-4 justify-content-center"> 
            @foreach($coreItems->take(3) as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box p-4 bg-white shadow-sm h-100 transition-all" 
                         style="border-radius: 15px; border-bottom: 5px solid #002e5b; transition: 0.3s ease;">
                        
                        {{-- Icône décorative --}}
                        <div class="mb-3">
                            <i class="fas fa-shield-alt fa-2x" style="color: #269649;"></i>
                        </div>

                        <div class="mb-2">
                            <h4 style="color: #002e5b; font-weight: 700; font-size: 1.25rem;">
                                {{ $item->title_fr ?? $item->title }}
                            </h4>
                        </div>
                        
                        <p class="text-muted" style="line-height: 1.6; font-size: 0.95rem;">
                            {{ Str::limit($item->desc_fr ?? $item->description, 140) }}
                        </p>

                        <a href="#" class="btn btn-link p-0 mt-3 text-decoration-none fw-bold" style="color: #269649;">
                            Détails <i class="fas fa-arrow-right ms-1" style="font-size: 0.8rem;"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    /* Animation au survol */
    .service-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
        border-bottom-color: #269649 !important; /* Devient vert au survol */
    }
</style>