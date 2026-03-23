@php
    // Récupération des données globales pour la synchronisation avec l'Admin
    $tel = $global_settings['phone'] ?? '0699 75 80 30 / 0776 70 75 80';
    $email = $global_settings['email'] ?? 'qualiproplus16@gmail.com';
    $adresse = $global_settings['address'] ?? 'Alger, Algérie';
    
    $footerLogo = asset('assets/images/logo/logo.png');
    $footerText = 'Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence. Nous accompagnons les entreprises vers la certification et la conformité réglementaire durable.';

    $footerLinks = [
        ['url' => '#causes', 'label' => 'Nos Domaines de Compétence'],
        ['url' => '#about', 'label' => 'Qui sommes-nous ?'],
        ['url' => '#references', 'label' => 'Nos Références'],
        ['url' => '#', 'label' => 'Audits et Diagnostics'],
        ['url' => '#', 'label' => 'Certification ISO'],
    ];
@endphp

<footer style="background-color: #002e5b; color: #ffffff; padding: 35px 0 15px 0; font-family: 'Nunito Sans', sans-serif;">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6">
                {{-- Logo inversé en blanc pour ressortir sur le bleu --}}
                <img src="{{ $footerLogo }}" alt="QualiPro+" style="height: 45px; margin-bottom: 15px; filter: brightness(0) invert(1);">
                <p class="small fw-bold" style="line-height: 1.5; opacity: 0.9;">
                    {{ $footerText }}
                </p>
            </div>

            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold text-uppercase mb-1" style="font-size: 15px; letter-spacing: 1px;">Liens utiles</h5>
                <div style="width: 40px; height: 3px; background-color: #00aaff; margin-bottom: 15px;"></div>
                
                <ul class="list-unstyled">
                    @foreach($footerLinks as $link)
                        <li class="mb-1">
                            <a href="{{ $link['url'] }}" class="text-white text-decoration-none small fw-bold" style="transition: 0.3s; opacity: 0.8;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">
                                <i class="ri-arrow-right-s-line me-1" style="color: #00aaff;"></i> {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold text-uppercase mb-1" style="font-size: 15px; letter-spacing: 1px;">Contact</h5>
                <div style="width: 40px; height: 3px; background-color: #00aaff; margin-bottom: 15px;"></div>
                
                <ul class="list-unstyled mb-3">
                    <li class="d-flex align-items-center mb-2 small fw-bold">
                        <i class="ri-phone-fill me-2" style="font-size: 18px; color: #00aaff;"></i> {{ $tel }}
                    </li>
                    <li class="d-flex align-items-center mb-2 small fw-bold">
                        <i class="ri-mail-fill me-2" style="font-size: 18px; color: #00aaff;"></i> {{ $email }}
                    </li>
                    <li class="d-flex align-items-center mb-2 small fw-bold">
                        <i class="ri-map-pin-2-fill me-2" style="font-size: 18px; color: #00aaff;"></i> {{ $adresse }}
                    </li>
                </ul>

                <div class="d-flex gap-3 mt-3">
                    <a href="#" style="color: #ffffff; font-size: 22px; transition: 0.3s;" onmouseover="this.style.color='#00aaff'" onmouseout="this.style.color='#ffffff'">
                        <i class="ri-facebook-box-fill"></i>
                    </a>
                    <a href="#" style="color: #ffffff; font-size: 22px; transition: 0.3s;" onmouseover="this.style.color='#00aaff'" onmouseout="this.style.color='#ffffff'">
                        <i class="ri-linkedin-box-fill"></i>
                    </a>
                </div>
            </div>

        </div>

        <hr style="background-color: rgba(255,255,255,0.1); margin: 25px 0 15px 0;">

        <div class="text-center">
            <p class="mb-0 fw-bold" style="font-size: 12px; opacity: 0.6;">
                QualiPro Plus @ 2025. Tous droits réservés.
            </p>
        </div>
    </div>
</footer>