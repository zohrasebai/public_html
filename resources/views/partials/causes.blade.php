@php
    $section = \App\Models\SectionSetting::where('section_name', 'causes_section')->first();
    
    // On définit les 3 services statiques ou dynamiques
    $services = [
        ['title' => 'Accompagnement', 'icon' => 'fa-hands-helping', 'desc' => 'Conseil stratégique et mise en œuvre de vos projets.'],
        ['title' => 'Audit', 'icon' => 'fa-clipboard-check', 'desc' => 'Évaluation rigoureuse de vos systèmes et processus.'],
        ['title' => 'Formation', 'icon' => 'fa-user-graduate', 'desc' => 'Développement des compétences de vos collaborateurs.'],
    ];
@endphp

<section id="causes" class="bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold" style="color: #269649; letter-spacing: 2px;">{{ $section->subtitle_fr ?? 'Expertise' }}</span>
            <h2 class="display-6 fw-bold mt-2" style="color: #002e5b;">{{ $section->title_fr ?? 'Nos Services' }}</h2>
            <div class="mx-auto mt-2 mb-3" style="width: 50px; height: 3px; background-color: #269649;"></div>
        </div>
        
        <div class="row g-4 justify-content-center"> 
            @foreach($services as $service)
                <div class="col-12 col-md-4">
                    {{-- Ancre ID pour lier avec la Nav Bar --}}
                    <div id="{{ Str::slug($service['title']) }}" class="service-box p-4 bg-white shadow-sm h-100" 
                         style="border-radius: 15px; border-bottom: 5px solid #002e5b; transition: 0.3s;">
                        
                        <div class="mb-3 text-center">
                            <i class="fas {{ $service['icon'] }} fa-3x" style="color: #269649;"></i>
                        </div>

                        <h4 class="text-center" style="color: #002e5b; font-weight: 700;">{{ $service['title'] }}</h4>
                        
                        <p class="text-muted text-center mt-3">
                            {{-- Ici tu peux soit garder le texte statique, soit appeler $item->desc_fr si tu utilises la DB --}}
                            {{ $service['desc'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .service-box:hover {
        transform: translateY(-10px);
        border-bottom-color: #269649 !important;
    }
</style>