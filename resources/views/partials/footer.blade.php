@php
    $footerLogo = asset('assets/images/logo/logo.png');
    $footerText = 'Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence. Nous accompagnons les entreprises vers la certification et la conformité réglementaire durable.';

    $footerContacts = [
        ['icon' => 'ri-phone-fill', 'text' => '0699 75 80 30 / 0776 70 75 80'],
        ['icon' => 'ri-mail-fill', 'text' => 'qualiproplus16@gmail.com'],
        ['icon' => 'ri-map-pin-fill', 'text' => 'Alger, Algérie'],
    ];

    $footerLinks = [
        ['url' => '#causes', 'label' => 'Nos Domaines de Compétence'],
        ['url' => '#about', 'label' => 'Qui sommes-nous ?'],
        ['url' => '#references', 'label' => 'Nos Références'],
        ['url' => '#', 'label' => 'Audits et Diagnostics'],
        ['url' => '#', 'label' => 'Certification ISO'],
    ];

    $footerCopyright = 'QualiPro Plus @ 2025. Tous droits réservés.';
@endphp

<footer class="bg-white pt-5" style="border-top: 2px solid #004d40;">
    <div class="container pb-4">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6">
                <img src="{{ $footerLogo }}" alt="Logo QualiPro+" style="height: 60px;" class="mb-3">
                <p class="text-muted small" style="line-height: 1.8;">
                    {{ $footerText }}
                </p>
            </div>

            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold mb-4 text-uppercase" style="font-size: 16px; color: #004d40;">Navigation</h5>
                <ul class="list-unstyled">
                    @foreach($footerLinks as $link)
                        <li class="mb-2">
                            <a href="{{ $link['url'] }}" class="text-muted text-decoration-none hover-green small">
                                <i class="ri-arrow-right-s-line me-1" style="color: #004d40;"></i> {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold mb-4 text-uppercase" style="font-size: 16px; color: #004d40;">Contact</h5>
                <ul class="list-unstyled mb-4">
                    @foreach($footerContacts as $contact)
                        <li class="d-flex align-items-start mb-3 small">
                            {{-- Icônes en Vert Foncé --}}
                            <i class="{{ $contact['icon'] }} me-3 mt-1" style="color: #004d40; font-size: 18px;"></i>
                            {{-- Texte (Tel/Email) en Vert Foncé et Gras --}}
                            <span style="color: #004d40; font-weight: 700;">{{ $contact['text'] }}</span>
                        </li>
                    @endforeach
                </ul>

                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-outline-success btn-sm rounded-circle d-flex align-items-center justify-content-center" 
                       style="width: 35px; height: 35px; color: #004d40; border-color: #004d40;">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <a href="#" class="btn btn-outline-success btn-sm rounded-circle d-flex align-items-center justify-content-center" 
                       style="width: 35px; height: 35px; color: #004d40; border-color: #004d40;">
                        <i class="ri-linkedin-fill"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="py-3" style="background: #f8f9fa; border-top: 1px solid #eee;">
        <div class="container text-center">
            <p class="mb-0 text-muted small">
                {{ $footerCopyright }}
            </p>
        </div>
    </div>
</footer>

<style>
    .hover-green:hover {
        color: #004d40 !important;
        font-weight: bold;
        transition: all 0.3s ease;
    }
    .btn-outline-success:hover {
        background-color: #004d40 !important;
        color: white !important;
    }
</style>