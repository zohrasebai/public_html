@php
    // Récupération dynamique
    $tel = $global_settings['phone'] ?? '0699 75 80 30 / 0776 70 75 80';
    $email = $global_settings['email'] ?? 'qualiproplus16@gmail.com';
    $adresse = $global_settings['address'] ?? 'Alger, Algérie';
    
    $footerLogo = asset('assets/images/logo/logo.png');
    $footerText = "Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence. Nous accompagnons les entreprises vers la certification et la conformité réglementaire durable.";

    $footerLinks = [
        ['url' => '#causes', 'label' => 'Nos Domaines de Compétence'],
        ['url' => '#about', 'label' => 'Qui sommes-nous ?'],
        ['url' => '#references', 'label' => 'Nos Références'],
        ['url' => '#', 'label' => 'Audits et Diagnostics'],
        ['url' => '#', 'label' => 'Certification ISO'],
    ];

    // Couleur exacte du vert du logo
    $vertLogo = "#006a4e"; 
    $bleuClair = "#00aaff";
@endphp

<footer style="background-color: #002e5b; color: #ffffff; padding: 35px 0 15px 0; font-family: 'Nunito Sans', sans-serif;">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6">
                <img src="{{ $footerLogo }}" alt="QualiPro+" style="height: 45px; margin-bottom: 15px;">
                <p style="font-size: 14px; line-height: 1.8; color: rgba(255,255,255,0.7); font-weight: 400; font-style: italic; letter-spacing: 0.3px;">
                    {{ $footerText }}
                </p>
            </div>

            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold text-uppercase mb-1" style="font-size: 16px; color: #ffffff;">Liens utiles</h5>
                <div style="width: 35px; height: 3px; background-color: {{ $bleuClair }}; margin-bottom: 20px;"></div>
                
                <ul class="list-unstyled">
                    @foreach($footerLinks as $link)
                        <li class="mb-2">
                            <a href="{{ $link['url'] }}" class="text-white text-decoration-none small fw-bold footer-link-hover">
                                <i class="ri-arrow-right-s-line me-1" style="color: {{ $bleuClair }};"></i> {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold text-uppercase mb-1" style="font-size: 16px; color: #ffffff;">Contact</h5>
                <div style="width: 35px; height: 3px; background-color: {{ $bleuClair }}; margin-bottom: 20px;"></div>
                
                <ul class="list-unstyled mb-4">
                    {{-- Icônes en VERT LOGO --}}
                    <li class="d-flex align-items-center mb-3 small fw-bold">
                        <i class="ri-phone-fill me-3" style="font-size: 20px; color: {{ $vertLogo }};"></i> {{ $tel }}
                    </li>
                    <li class="d-flex align-items-center mb-3 small fw-bold">
                        <i class="ri-mail-fill me-3" style="font-size: 20px; color: {{ $vertLogo }};"></i> {{ $email }}
                    </li>
                    <li class="d-flex align-items-center mb-3 small fw-bold">
                        <i class="ri-map-pin-2-fill me-3" style="font-size: 20px; color: {{ $vertLogo }};"></i> {{ $adresse }}
                    </li>
                </ul>

                <div class="d-flex gap-3">
                    <a href="#" class="rs-icon-footer" style="color: {{ $vertLogo }};"><i class="ri-facebook-box-fill"></i></a>
                    <a href="#" class="rs-icon-footer" style="color: {{ $vertLogo }};"><i class="ri-linkedin-box-fill"></i></a>
                </div>
            </div>

        </div>

        <hr style="background-color: rgba(255,255,255,0.1); margin: 25px 0 15px 0;">

        <div class="text-center">
            <p class="mb-0 fw-bold" style="opacity: 0.5; font-size: 11px;">
                QualiPro Plus @ 2025. Tous droits réservés.
            </p>
        </div>
    </div>
</footer>

<style>
    .footer-link-hover:hover {
        color: {{ $vertLogo }} !important;
        padding-left: 5px;
        transition: all 0.3s ease;
    }
    .rs-icon-footer {
        font-size: 28px;
        transition: 0.3s;
    }
    .rs-icon-footer:hover {
        color: {{ $bleuClair }} !important;
        transform: translateY(-3px);
    }
</style>