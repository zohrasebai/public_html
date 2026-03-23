<div class="top-header" style="background-color: #002e5b; color: #ffffff; padding: 8px 0; font-size: 13px;">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="header-contact d-flex gap-4">
           <<span><i class="ri-phone-fill" style="color: #ffcc00;"></i> {{ $global_settings['phone'] ?? '+213 699 75 80 30' }}</span>
           <span><i class="ri-mail-fill" style="color: #ffcc00;"></i> {{ $global_settings['email'] ?? 'contact@qualiproplus.com' }}</span>ontact@qualiproplus.com' }}</span>
        </div>
        <div class="header-social d-flex gap-3 align-items-center">
            <span class="d-none d-md-inline opacity-75">Nous rejoindre :</span>
            <a href="#" style="color: white; font-size: 16px;"><i class="ri-facebook-box-fill"></i></a>
            <a href="#" style="color: white; font-size: 16px;"><i class="ri-linkedin-box-fill"></i></a>
            <a href="#" style="color: white; font-size: 16px;"><i class="ri-instagram-fill"></i></a>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm" style="padding: 15px 0;">
    <div class="container">
        <a class="navbar-brand" href="{{ $home_link }}">
            <img src="{{ $logo }}" alt="QualiPro+" style="height: 50px;">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
            <i class="ri-menu-line"></i>
        </button>

        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ms-auto align-items-center gap-4 fw-bold" style="font-size: 14px; text-transform: uppercase;">
                <li class="nav-item"><a class="nav-link text-dark" href="#home">Accueil</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#about">Qui Sommes-Nous</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#causes">Nos Services</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#references">Nos references</a></li>
             
            </ul>
        </div>
    </div>
</nav>