@php
    $section = \App\Models\SectionSetting::where('section_name', 'causes_section')->first();
    
    // On définit nos 3 services clés
    $services = [
        ['id' => 'accompagnement', 'title' => 'Accompagnement', 'icon' => 'fa-hands-helping', 'desc' => 'Conseil et assistance technique pour vos projets.'],
        ['id' => 'audit', 'title' => 'Audit', 'icon' => 'fa-search', 'desc' => 'Diagnostic complet et vérification de conformité.'],
        ['id' => 'formation', 'title' => 'Formation', 'icon' => 'fa-graduation-cap', 'desc' => 'Renforcement des capacités et transfert de savoir.'],
    ];
@endphp

<section id="causes" class="bg-light py-5 overflow-hidden">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold" style="color: #269649; letter-spacing: 2px;">{{ $section->subtitle_fr ?? 'Expertise' }}</span>
            <h2 class="display-6 fw-bold mt-2" style="color: #002e5b;">{{ $section->title_fr ?? 'Nos Services' }}</h2>
            <div class="mx-auto mt-2" style="width: 50px; height: 3px; background-color: #269649;"></div>
        </div>

        {{-- Conteneur de Scroll Horizontal --}}
        <div class="row flex-nowrap overflow-auto pb-4 custom-scroll">
            @foreach($services as $service)
                <div id="{{ $service['id'] }}" class="col-10 col-md-6 col-lg-4 flex-shrink-0">
                    <div class="service-box p-4 bg-white shadow-sm h-100 mx-2" 
                         style="border-radius: 20px; border-bottom: 6px solid #002e5b; transition: 0.3s;">
                        
                        <div class="text-center mb-4 mt-2">
                            <div class="icon-circle mx-auto d-flex align-items-center justify-content-center" 
                                 style="width: 80px; height: 80px; background: rgba(38, 150, 73, 0.1); border-radius: 50%;">
                                <i class="fas {{ $service['icon'] }} fa-2x" style="color: #269649;"></i>
                            </div>
                        </div>

                        <h4 class="text-center fw-bold mb-3" style="color: #002e5b;">{{ $service['title'] }}</h4>
                        
                        <p class="text-muted text-center px-2">
                            {{ $service['desc'] }}
                        </p>
                        
                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-sm rounded-pill px-4" style="background-color: #002e5b; color: white;">Voir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    /* Style pour le défilement horizontal fluide */
    .custom-scroll {
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none;  /* IE/Edge */
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
    }
    .custom-scroll::-webkit-scrollbar {
        display: none; /* Chrome/Safari */
    }

    .service-box:hover {
        transform: translateY(-10px);
        border-bottom-color: #269649 !important;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
</style>