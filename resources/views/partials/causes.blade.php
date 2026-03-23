@php
    // On récupère les réglages de section s'ils existent, sinon valeurs par défaut
    $section = \App\Models\SectionSetting::where('section_name', 'causes_section')->first();
    
    $causesSubtitle = $section->subtitle_fr ?? 'Expertise en Certification';
    $causesTitle = $section->title_fr ?? 'Nos Domaines d’Action';
    $causesDesc = $section->desc_fr ?? 'Nous accompagnons les entreprises vers l’excellence via le conseil, la formation et l’audit...';
@endphp

<section id="causes" class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title mb-30 w-75 text-center mx-auto wow animated slideInUp">
                    <span style="color: #ffcc00; font-weight: bold; text-transform: uppercase;">{{ $causesSubtitle }}</span>
                    <h2 class="pb-15 mb-20" style="color: #002e5b; font-weight: 800;">{{ $causesTitle }}</h2>
                    <p class="text-gray-600">{{ $causesDesc }}</p>
                </div>
            </div>
            
            {{-- On utilise la variable $services envoyée par le SiteController --}}
            @foreach($services as $item)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="service-4 p-30 mt-30 bg-white transition-5 shadow-sm hover:shadow-lg" 
                     style="min-height: 280px; border-radius: 12px; border-bottom: 4px solid #002e5b;">
                    
                    <div class="mb-15">
                        <h4 style="color: #002e5b; font-weight: 700; font-size: 1.25rem;">
                            {{-- Vérification : utilise title_fr s'il existe, sinon title --}}
                            {{ $item->title_fr ?? $item->title }}
                        </h4>
                    </div>
                    
                    <p class="text-muted" style="line-height: 1.6;">
                        {{-- Vérification : utilise desc_fr s'il existe, sinon description --}}
                        {{ Str::limit($item->desc_fr ?? $item->description, 150) }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>