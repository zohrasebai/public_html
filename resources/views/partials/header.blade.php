<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

<header class="main-header">
    <div class="top-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="header-contact d-flex gap-4">
                <span><i class="ri-phone-fill"></i> {{ $global_settings['phone'] ?? '+213 699 75 80 30' }}</span>
                <span><i class="ri-mail-fill"></i> {{ $global_settings['email'] ?? 'qualiproplus16@gmail.com' }}</span>
            </div>
            <div class="header-social d-flex gap-3 align-items-center">
                <span class="d-none d-md-inline">Nous rejoindre :</span>
                <a href="#"><i class="ri-linkedin-box-fill"></i></a>
                <a href="#"><i class="ri-facebook-box-fill"></i></a>
                <a href="#"><i class="ri-instagram-fill"></i></a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg sticky-top shadow-sm custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="QualiPro+" style="height: 65px;">
            </a>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ms-auto align-items-center gap-4 fw-bold">
                    <li class="nav-item"><a class="nav-link main-link" href="#home">Accueil</a></li>
                    
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link dropdown-toggle main-link" href="#">Qui Nous Sommes</a>
                        <ul class="dropdown-menu border-0 shadow">
                            <li><a class="dropdown-item sub-link" href="#mission">Notre Mission</a></li>
                            <li><a class="dropdown-item sub-link" href="#valeurs">Nos Valeurs</a></li>
                            <li><a class="dropdown-item sub-link" href="#equipe">Notre Équipe</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link dropdown-toggle main-link" href="#">Nos Services</a>
                        <ul class="dropdown-item-container dropdown-menu border-0 shadow">
                            <li><a class="dropdown-item sub-link" href="#accompagnement">Accompagnement</a></li>
                            <li><a class="dropdown-item sub-link" href="#formation">Formation</a></li>
                            <li><a class="dropdown-item sub-link" href="#audit">Audit</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link main-link link-white" href="#references">Nos Références</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    /* TOP HEADER */
    .top-header {
        background-color: #002e5b;
        color: #ffffff;
        padding: 8px 0;
        font-size: 13px;
    }
    .top-header i { color: #006a4e; margin-right: 5px; font-size: 15px; }
    .header-social a { color: #006a4e; font-size: 18px; transition: 0.3s; }
    .header-social a:hover { color: #ffffff; }

    /* NAVBAR BICOLORE (Effet m.png sans image moche) */
    .custom-navbar {
        background: linear-gradient(105deg, #f2f4f7 72%, #002e5b 72.2%) !important;
        padding: 10px 0;
        position: sticky !important;
        top: 0;
        z-index: 1000;
        border-bottom: 2px solid #e0e0e0;
    }

    /* LIENS PRINCIPAUX (VERT) */
    .main-link {
        color: #006a4e !important;
        text-transform: uppercase;
        font-size: 14px;
        transition: 0.3s;
    }
    .main-link:hover { color: #00aaff !important; }

    /* LIEN SUR FOND FONCÉ (BLANC) */
    .link-white {
        color: #ffffff !important;
    }

    /* SOUS-TITRES (DROPDOWN) */
    .sub-link {
        color: #006a4e !important;
        font-weight: 600;
        text-transform: none;
        padding: 10px 20px;
        transition: 0.3s;
    }
    .sub-link:hover {
        color: #dd3513 !important; /* ROUGE AU CLIC */
        background-color: #f8f9fa;
        padding-left: 25px;
    }

    /* HOVER DROPDOWN */
    @media (min-width: 992px) {
        .hover-dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
            border-top: 3px solid #00aaff;
        }
    }
</style>