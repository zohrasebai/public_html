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

<nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm" style="padding: 11px 0; position: sticky; top: 0; z-index: 1050;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="QualiPro+" style="height: 70px;">
        </a>

        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ms-auto align-items-center gap-4 fw-bold" style="font-size: 14px; text-transform: uppercase;">
                
                <li class="nav-item">
                    <a class="nav-link custom-link" href="#home">Accueil</a>
                </li>

                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link dropdown-toggle custom-link" href="#about" id="aboutDropdown" role="button">
                        Qui nous sommes
                    </a>
                    <ul class="dropdown-menu shadow border-0" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item sub-link" href="#valeurs">Nos Valeurs</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item sub-link" href="#equipe">Notre Équipe</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link dropdown-toggle custom-link" href="#causes" id="servicesDropdown" role="button">
                        Nos Services
                    </a>
                    <ul class="dropdown-menu">
                     {{-- Lien direct vers le bloc Accompagnement --}}
                        <li><a class="dropdown-item" href="#accompagnement">Accompagnement</a></li>
        
                     {{-- Lien direct vers le bloc Audit --}}
                      <li><a class="dropdown-item" href="#audit">Audit</a></li>
        
                     {{-- Lien direct vers le bloc Formation --}}
                        <li><a class="dropdown-item" href="#formation">Formation</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link custom-link" href="#references">Nos Références</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* TITRES NAVBAR : VERT -> BLEU CLAIR */
    .custom-link {
        color: #006a4e !important;
        font-weight: 700 !important;
        transition: all 0.3s ease;
    }
    .custom-link:hover, .hover-dropdown:hover .custom-link {
        color: #00aaff !important;
    }

    /* SOUS-TITRES DROPDOWN : VERT -> ROUGE */
    .sub-link {
        color: #006a4e !important; /* Vert par défaut */
        text-transform: none;
        font-weight: 600;
        padding: 10px 20px;
        transition: 0.3s ease;
    }
    .sub-link:hover, .sub-link:active, .sub-link:focus {
        color: #dd3513 !important; /* Rouge au clic/survol */
        background-color: #fdf2f2; /* Fond rouge très léger */
        padding-left: 25px;
    }

    /* DESIGN DU MENU DROPDOWN */
    @media (min-width: 992px) {
        .hover-dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
            border-top: 3px solid #dd3513; /* Ligne rouge en haut du menu */
        }
    }
    
    .dropdown-menu {
        border-radius: 0 0 8px 8px;
    }
</style>