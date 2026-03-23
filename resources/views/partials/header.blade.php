<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

<header class="main-header">
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
                <a href="#" class="social-link"><i class="ri-linkedin-box-fill"></i></a>
                <a href="#" class="social-link"><i class="ri-facebook-box-fill"></i></a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white shadow-sm custom-sticky-nav">
        <div class="container position-relative">
            
            <div class="nav-triangle-decor"></div>

            <a class="navbar-brand" href="/" style="z-index: 10; margin-left: 20px;">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="QualiPro+" style="height: 60px;">
            </a>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ms-auto align-items-center gap-4 fw-bold">
                    
                    <li class="nav-item">
                        <a class="nav-link main-link" href="#home">Accueil</a>
                    </li>

                    <li class="nav-item dropdown custom-dropdown">
                        <a class="nav-link dropdown-toggle main-link" href="#">Qui nous sommes</a>
                        <ul class="dropdown-menu border-0 shadow">
                            <li><a class="dropdown-item" href="#mission">Notre Mission</a></li>
                            <li><a class="dropdown-item" href="#valeurs">Nos Valeurs</a></li>
                            <li><a class="dropdown-item" href="#equipe">Notre Équipe</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown custom-dropdown">
                        <a class="nav-link dropdown-toggle main-link" href="#">Nos Services</a>
                        <ul class="dropdown-menu border-0 shadow">
                            <li><a class="dropdown-item" href="#accompagnement">Accompagnement</a></li>
                            <li><a class="dropdown-item" href="#formation">Formation</a></li>
                            <li><a class="dropdown-item" href="#audit">Audit</a></li>
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
    /* 1. FORCER LE STICKY (Reste au top) */
    .custom-sticky-nav {
        position: sticky !important;
        top: 0;
        z-index: 1000;
        background-color: white !important;
        padding: 10px 0;
    }

    /* 2. LE DÉCOR TRIANGLE (Généré en CSS) */
    .nav-triangle-decor {
        position: absolute;
        left: -15px;
        top: 0;
        height: 100%;
        width: 40px;
        z-index: 1;
    }

    /* Partie Bleue du triangle */
    .nav-triangle-decor::before {
        content: "";
        position: absolute;
        top: 0; left: 0;
        border-style: solid;
        border-width: 35px 35px 0 0;
        border-color: #002e5b transparent transparent transparent;
    }

    /* Partie Rouge du triangle */
    .nav-triangle-decor::after {
        content: "";
        position: absolute;
        top: 0; left: 0;
        border-style: solid;
        border-width: 15px 15px 0 0;
        border-color: #dd3513 transparent transparent transparent;
    }

    /* 3. COULEURS ET MENUS */
    .main-link {
        color: #dd3513 !important; /* ROUGE */
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 14px;
    }

    .dropdown-item {
        color: #006a4e !important; /* VERT */
        font-weight: 600;
        padding: 10px 20px;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
        color: #dd3513 !important;
        padding-left: 25px;
    }

    /* Desktop Hover */
    @media (min-width: 992px) {
        .custom-dropdown:hover .dropdown-menu { display: block; margin-top: 0; animation: fadeIn 0.3s; }
    }

    @keyframes fadeIn { from { opacity: 0; transform: translateY(5px); } to { opacity: 1; transform: translateY(0); } }

    .social-link { color: #006a4e; font-size: 18px; }
</style>