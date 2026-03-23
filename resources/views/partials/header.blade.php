<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

<header>
    <div class="top-header" style="background-color: #002e5b; color: #ffffff; padding: 8px 0; font-size: 13px;">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="header-contact d-flex gap-4">
                <span style="font-weight: 700;">
                    <i class="ri-phone-fill" style="color: #006a4e; margin-right: 5px; font-size: 16px;"></i> 
                    {{ $global_settings['phone'] ?? '+213 699 75 80 30 / +213 776 70 75 80' }}
                </span>
                <span style="font-weight: 650;">
                    <i class="ri-mail-fill" style="color: #006a4e; margin-right: 5px; font-size: 16px;"></i> 
                    {{ $global_settings['email'] ?? 'qualiproplus16@gmail.com' }}
                </span>
            </div>
            <div class="header-social d-flex gap-3 align-items-center">
                <span class="d-none d-md-inline opacity-75" style="font-weight: 900;">Nous rejoindre :</span>
                <a href="#" class="social-icon"><i class="ri-linkedin-box-fill"></i></a>
                <a href="#" class="social-icon"><i class="ri-facebook-box-fill"></i></a>
                <a href="#" class="social-icon"><i class="ri-instagram-fill"></i></a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm" style="padding: 11px 0;">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="QualiPro+" style="height: 70px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ms-auto align-items-center gap-4 fw-bold" style="font-size: 14px; text-transform: uppercase;">
                    
                    <li class="nav-item">
                        <a class="nav-link main-nav-link" href="#home">Accueil</a>
                    </li>

                    <li class="nav-item dropdown custom-dropdown">
                        <a class="nav-link dropdown-toggle main-nav-link" href="#" id="aboutDropdown" role="button">
                            Qui nous sommes
                        </a>
                        <ul class="dropdown-menu shadow border-0">
                            <li><a class="dropdown-item" href="#mission">Notre Mission</a></li>
                            <li><a class="dropdown-item" href="#valeurs">Nos Valeurs</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#equipe">Notre Équipe</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown custom-dropdown">
                        <a class="nav-link dropdown-toggle main-nav-link" href="#" id="servicesDropdown" role="button">
                            Nos Services
                        </a>
                        <ul class="dropdown-menu shadow border-0">
                            <li><a class="dropdown-item" href="#accompagnement">Accompagnement</a></li>
                            <li><a class="dropdown-item" href="#formation">Formation</a></li>
                            <li><a class="dropdown-item" href="#audit">Audit</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link main-nav-link" href="#references">Nos Références</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    /* Styles généraux du header */
    .social-icon { color: #006a4e; transition: 0.3s; font-size: 20px; text-decoration: none; }
    .social-icon:hover { color: #ffffff; opacity: 0.8; }

    /* Liens Principaux en ROUGE */
    .main-nav-link {
        color: #dd3513 !important;
        font-weight: 700 !important;
        transition: 0.3s ease;
    }

    /* Gestion de l'ouverture au survol (Desktop) */
    @media (min-width: 992px) {
        .custom-dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
            animation: slideUp 0.3s ease;
        }
    }

    /* Design du Menu Déroulant */
    .dropdown-menu {
        border-top: 4px solid #006a4e !important; /* Ligne verte supérieure */
        border-radius: 0 0 10px 10px;
        padding: 12px 0;
    }

    /* Sous-titres en VERT */
    .dropdown-item {
        color: #006a4e !important;
        text-transform: none; /* Plus propre pour les sous-menus */
        font-weight: 600;
        padding: 10px 25px;
        transition: all 0.3s ease;
    }

    /* Effet au survol des sous-titres */
    .dropdown-item:hover {
        background-color: #f0fdf4; /* Fond vert très clair */
        color: #dd3513 !important; /* Devient rouge au survol */
        padding-left: 32px;
    }

    /* Animation d'apparition */
    @keyframes slideUp {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>