@php
    $section = \App\Models\SectionSetting::where('section_name', 'causes_section')->first();
    
    // Configuration des 3 pôles vectoriels
    $services = [
        [
            'id' => 'accompagnement', 
            'title' => 'Accompagnement', 
            'icon' => '<circle cx="50" cy="50" r="40" fill="none" stroke="#269649" stroke-width="2"/><path d="M30 50h40M50 30v40" stroke="#269649" stroke-width="4"/>', // Exemple de tracé vectoriel simple
            'desc' => 'Conseil stratégique et assistance technique sur mesure.'
        ],
        [
            'id' => 'audit', 
            'title' => 'Audit', 
            'icon' => '<rect x="25" y="20" width="50" height="60" rx="5" fill="none" stroke="#002e5b" stroke-width="2"/><path d="M35 40h30M35 55h30" stroke="#002e5b" stroke-width="3"/>',
            'desc' => 'Diagnostics de conformité et audits de performance rigoureux.'
        ],
        [
            'id' => 'formation', 
            'title' => 'Formation', 
            'icon' => '<path d="M20 40l30-20 30 20v30H20z" fill="none" stroke="#269649" stroke-width="2"/><circle cx="50" cy="55" r="10" fill="#269649"/>',
            'desc' => 'Programmes de formation pour monter en compétences.'
        ],
    ];
@endphp

<section id="causes" class="vector-section py-5 position-relative" style="background: #f8f9fa;">
    {{-- Séparateur Vectoriel (Vague en haut) --}}
    <div class="vector-divider-top" style="position: absolute; top: 0; width: 100%; line-height: 0;">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="fill: #ffffff; width: 100%; height: 50px;">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>

    <div class="container mt-4">
        <div class="text-center mb-5">
            <span class="badge rounded-pill px-3 py-2 mb-2" style="background: rgba(38, 150, 73, 0.1); color: #269649; font-weight: 600;">{{ $causesSubtitle ?? 'Expertise' }}</span>
            <h2 class="fw-bold" style="color: #002e5b; font-size: 2.5rem;">{{ $causesTitle ?? 'Nos Services' }}</h2>
        </div>

        {{-- Scroll Horizontal Vectoriel --}}
        <div class="row flex-nowrap overflow-auto custom-scroll pb-5">
            @foreach($services as $service)
            <div id="{{ $service['id'] }}" class="col-10 col-md-6 col-lg-4 flex-shrink-0 px-3">
                <div class="vector-card h-100 p-4 shadow-sm text-center bg-white" style="border-radius: 25px; transition: 0.4s; border: 1px solid #eee;">
                    
                    {{-- Icône Vectorielle (SVG) --}}
                    <div class="vector-icon-wrapper mb-4 mx-auto" style="width: 100px; height: 100px;">
                        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            {!! $service['icon'] !!}
                        </svg>
                    </div>

                    <h4 class="fw-bold mb-3" style="color: #002e5b;">{{ $service['title'] }}</h4>
                    <p class="text-muted small mb-4">{{ $service['desc'] }}</p>

                    {{-- Bouton Voir Plus Vectoriel --}}
                    <a href="{{ url('/services/'.$service['id']) }}" class="btn-vector">
                        <span>Voir plus</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    /* Scroll Horizontal Propre */
    .custom-scroll {
        scrollbar-width: none;
        -ms-overflow-style: none;
        scroll-behavior: smooth;
    }
    .custom-scroll::-webkit-scrollbar { display: none; }

    /* Style des Cartes Vectorielles */
    .vector-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 20px 40px rgba(0, 46, 91, 0.1) !important;
        border-color: #269649 !important;
    }

    /* Style du bouton "Voir plus" */
    .btn-vector {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #002e5b;
        text-decoration: none;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 1px;
        transition: 0.3s;
    }
    .btn-vector:hover {
        color: #269649;
    }
    .btn-vector svg {
        transition: 0.3s;
    }
    .btn-vector:hover svg {
        transform: translateX(5px);
    }
</style>