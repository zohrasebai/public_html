<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

<header>
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
                <span class="d-none d-md-inline opacity-75" style="font-weight: 900 !important;">Nous rejoindre :</span>
                <a href="#" style="color: #006a4e; font-size: 20px;"><i class="ri-linkedin-box-fill"></i></a>
                <a href="#" style="color:#006a4e; font-size: 20px;"><i class="ri-facebook-box-fill"></i></a>
                <a href="#" style="color: #006a4e; font-size: 20px;"><i class="ri-instagram-fill"></i></a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg sticky-top shadow-sm custom-nav-bicolor">
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
                        <a class="nav-link dropdown-toggle main-link" href="#" id="aboutDropdown">
                            Qui nous sommes
                        </a>
                        <ul class="dropdown-menu shadow border-0">
                            <li><a class="dropdown-item sub-link" href="#mission">Notre Mission</a></li>
                            <li><a class="dropdown-item sub-link" href="#valeurs">Nos Valeurs</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item sub-link" href="#equipe">Notre Équipe</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link dropdown-toggle main-link" href="#" id="servicesDropdown">
                            Nos Services
                        </a>
                        <ul class="dropdown-menu shadow border-0">
                            <li><a class="dropdown-item sub-link" href="#accompagnement">Accompagnement</a></li>
                            <li><a class="dropdown-item sub-link" href="#formation">Formation</a></li>
                            <li><a class="dropdown-item sub-link" href="#audit">Audit</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link main-link" href="#references">Nos Références</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    /* --- DESIGN DU FOND BICOLORE (Comme votre image nav.png) --- */
    .custom-nav-bicolor {
        /* Gris clair à gauche (80%) et Bleu Marine à droite avec coupure en biais */
        background: linear-gradient(110deg, #f2f4f7 78%, #002e5b 78.2%) !important;
        padding: 11px 0;
        position: sticky !important;
        top: 0;
        z-index: 1000;
        border-bottom: 1px solid #e0e0e0;
    }

    /* --- TITRES NAVBAR : VERT -> BLEU CLAIR --- */
    .main-link {
        color: #006a4e !important; /* Vert foncé par défaut */
        font-weight: 700 !important;
        transition: all 0.3s ease;
    }
    
    /* Changement au survol ou si le menu est ouvert */
    .main-link:hover, 
    .hover-dropdown:hover .main-link {
        color: #00aaff !important; /* Bleu clair */
    }

    /* Cas particulier : si le dernier lien tombe sur le fond bleu foncé, on le met en blanc */
    .nav-item:last-child .main-link {
        color: #ffffff !important; 
    }
    .nav-item:last-child .main-link:hover {
        color: #00aaff !important;
    }

    /* --- SOUS-TITRES DROPDOWN : VERT -> ROUGE --- */
    .sub-link {
        color: #006a4e !important; /* Vert */
        text-transform: none;
        font-weight: 600;
        padding: 10px 20px;
        transition: 0.3s ease;
    }

    .sub-link:hover, .sub-link:active {
        color: #dd3513 !important; /* Rouge au clic/survol */
        background-color: #fdf2f2;
        padding-left: 25px;
    }

    /* --- COMPORTEMENT DROPDOWN --- */
    @media (min-width: 992px) {
        .hover-dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
            border-top: 3px solid #00aaff;
        }
    }

    .dropdown-menu {
        border-radius: 0 0 8px 8px;
    }
</style>