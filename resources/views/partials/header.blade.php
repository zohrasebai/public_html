<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

<div class="top-header" style="background-color: #002e5b; color: #ffffff; padding: 8px 0; font-size: 13px;">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="header-contact d-flex gap-4">
            <span style="font-weight: 700;">
                <i class="ri-phone-fill" style="color: #006a4e; margin-right: 10px; margin-left: 8px; font-size: 16px;"></i> 
                {{ $global_settings['phone'] ?? ' +213 699 75 80 30 / +213 776 70 75 80' }}
            </span>
            <span style="font-weight: 650;">
                <i class="ri-mail-fill" style="color: #006a4e; margin-right: 10px; font-size: 16px; margin-left: 8px;"></i> 
                {{ $global_settings['email'] ?? ' qualiproplus16@gmail.com' }}
            </span>
        </div>
        <div class="header-social d-flex gap-3 align-items-center">
            <span class="d-none d-md-inline opacity-75 " style="font-weight: 900 !important;">Nous rejoindre :</span>
            <a href="#" style="color: #006a4e; transition: 0.5s; font-size: 20px;"><i class="ri-linkedin-box-fill"></i></a>
            <a href="#" style="color:#006a4e; transition: 0.5s; font-size: 20px;"><i class="ri-facebook-box-fill"></i></a>
            <a href="#" style="color: #006a4e; transition: 0.5s; font-size: 20px;"><i class="ri-instagram-fill"></i></a>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm" style="padding: 11px 0;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="QualiPro+" style="height: 70px;">
        </a>

        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ms-auto align-items-center gap-4 fw-bold" style="font-size: 14px; text-transform: uppercase;">
                
                <li class="nav-item">
                    <a class="nav-link" href="#home" style="color: #dd3513 !important; font-weight: 600 !important;">Accueil</a>
                </li>

                {{-- Menu : Qui nous sommes --}}
                <li class="nav-item dropdown custom-nav-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" style="color: #dd3513 !important; font-weight: 600 !important;">
                        Qui nous sommes
                    </a>
                    <ul class="dropdown-menu shadow border-0" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item" href="#mission">Notre Mission</a></li>
                        <li><a class="dropdown-item" href="#valeurs">Nos Valeurs</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#equipe">Notre Équipe</a></li>
                    </ul>
                </li>

                {{-- Menu : Nos Services --}}
                <li class="nav-item dropdown custom-nav-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" style="color: #dd3513 !important; font-weight: 600 !important;">
                        Nos Services
                    </a>
                    <ul class="dropdown-menu shadow border-0" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="#accompagnement">Accompagnement</a></li>
                        <li><a class="dropdown-item" href="#formation">Formation</a></li>
                        <li><a class="dropdown-item" href="#audit">Audit</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#references" style="color: #dd3513 !important; font-weight: 600 !important;">Nos Références</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Garde les sous-titres en VERT */
    .dropdown-item {
        color: #006a4e !important;
        text-transform: none; /* Plus propre pour les sous-menus */
        font-weight: 600;
        padding: 8px 20px;
    }

    .dropdown-item:hover {
        background-color: #f4f7f6;
        color: #dd3513 !important; /* Devient rouge au survol */
    }

    /* Ouverture au survol pour le design */
    @media (min-width: 992px) {
        .custom-nav-dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }
    }

    .dropdown-menu {
        border-top: 3px solid #006a4e !important; /* Rappel du vert */
    }
</style>