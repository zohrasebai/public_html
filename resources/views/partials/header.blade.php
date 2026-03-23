<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

<div class="top-header" style="background-color: #002e5b; color: #ffffff; padding: 8px 0; font-size: 13px;">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="header-contact d-flex gap-4">
            <span><i class="ri-phone-fill" style="color: #ffcc00; margin-right: 5px;"></i> {{ $global_settings['phone'] ?? '+213 699 75 80 30' }}</span>
            <span><i class="ri-mail-fill" style="color: #ffcc00; margin-right: 5px;"></i> {{ $global_settings['email'] ?? 'contact@qualiproplus.com' }}</span>
        </div>
        <div class="header-social d-flex gap-3 align-items-center">
            <span class="d-none d-md-inline opacity-75">Nous rejoindre :</span>
            <a href="#" style="color: white; font-size: 18px;"><i class="ri-facebook-box-fill"></i></a>
            <a href="#" style="color: white; font-size: 18px;"><i class="ri-linkedin-box-fill"></i></a>
            <a href="#" style="color: white; font-size: 18px;"><i class="ri-instagram-fill"></i></a>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm" style="padding: 15px 0;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="QualiPro+" style="height: 50px;">
        </a>

        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ms-auto align-items-center gap-4 fw-bold" style="font-size: 14px; text-transform: uppercase;">
                {{-- Liens en Vert Foncé et Gras --}}
                <li class="nav-item"><a class="nav-link" href="#home" style="color: #004d40 !important; font-weight: 900 !important;">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#about" style="color: #004d40 !important; font-weight: 900 !important;">Qui Sommes-Nous</a></li>
                <li class="nav-item"><a class="nav-link" href="#causes" style="color: #004d40 !important; font-weight: 900 !important;">Nos Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#references" style="color: #004d40 !important; font-weight: 900 !important;">Nos Références</a></li>
            </ul>
        </div>
    </div>
</nav>