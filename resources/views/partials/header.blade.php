<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

<header>
    <div class="top-header" style="background-color: #002e5b; color: #ffffff; padding: 8px 0; font-size: 13px;">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="header-contact d-flex gap-4">
                <span style="font-weight: 700;">
                    <i class="ri-phone-fill" style="color: #006a4e; margin-right: 5px;"></i> 
                    {{ $global_settings['phone'] ?? '+213 699 75 80 30' }}
                </span>
                <span style="font-weight: 650;">
                    <i class="ri-mail-fill" style="color: #006a4e; margin-right: 5px;"></i> 
                    {{ $global_settings['email'] ?? 'qualiproplus16@gmail.com' }}
                </span>
            </div>
            <div class="header-social d-flex gap-3 align-items-center">
                <span class="d-none d-md-inline opacity-75" style="font-weight: 900 !important;">Nous rejoindre :</span>
                <a href="#" style="color: #006a4e; font-size: 20px;"><i class="ri-linkedin-box-fill"></i></a>
                <a href="#" style="color: #006a4e; font-size: 20px;"><i class="ri-facebook-box-fill"></i></a>
            </div>
        </div>
    </div>

    <div style="height: 3px; background-color: #ffffff; width: 100%;"></div>

    <nav class="navbar navbar-expand-lg sticky-top shadow-sm custom-nav-bg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="QualiPro+" style="height: 70px;">
            </a>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ms-auto align-items-center gap-4 fw-bold" style="font-size: 14px; text-transform: uppercase;">
                    
                    <li class="nav-item">
                        <a class="nav-link main-link" href="#home">Accueil</a>
                    </li>

                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link dropdown-toggle main-link" href="#" id="aboutDropdown">Qui nous sommes</a>
                        <ul class="dropdown-menu shadow border-0">
                            <li><a class="dropdown-item sub-link" href="#mission">Notre Mission</a></li>
                            <li><a class="dropdown-item sub-link" href="#valeurs">Nos Valeurs</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item sub-link" href="#equipe">Notre Équipe</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link dropdown-toggle main-link" href="#" id="servicesDropdown">Nos Services</a>
                        <ul class="dropdown-menu shadow border-0">
                            <li><a class="dropdown-item sub-link" href="#accompagnement">Accompagnement</a></li>
                            <li><a class="dropdown-item sub-link" href="#formation">Formation</a></li>
                            <li><a class="dropdown-item sub-link" href="#audit">Audit</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link main-link" href="#references" style="color: #ffffff !important;">Nos Références</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    /* Utilisation de l'image nav.png selon votre chemin de dossier */
    .custom-nav-bg {
        background-image: url("{{ asset('assets/images/background/nav.png') }}") !important;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 11px 0;
        position: sticky !important;
        top: 0;
        z-index: 1050;
    }

    /* TITRES : VERT -> BLEU CLAIR */
    .main-link {
        color: #006a4e !important;
        font-weight: 700 !important;
        transition: 0.3s ease;
    }
    .main-link:hover, .hover-dropdown:hover .main-link {
        color: #00aaff !important;
    }

    /* SOUS-TITRES : VERT -> ROUGE AU CLIC */
    .sub-link {
        color: #006a4e !important;
        font-weight: 600;
        text-transform: none;
        padding: 10px 20px;
        transition: 0.3s;
    }
    .sub-link:hover, .sub-link:active {
        color: #dd3513 !important;
        background-color: #fdf2f2;
    }

    /* Menu déroulant au survol */
    @media (min-width: 992px) {
        .hover-dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
            border-top: 3px solid #00aaff;
        }
    }
</style>