{{-- 
    DESIGN PRÉSERVÉ - HEADER DYNAMIQUE 
    Aucune modification visuelle, seule la source des données change.
--}}
@php
    // Fallbacks au cas où la BDD est vide
    $logoPath = $global_settings['logo'] ?? 'assets/images/logo/Image1.png';
    $sitePhone = $global_settings['phone'] ?? '0699 75 80 30';
    $siteEmail = $global_settings['email'] ?? 'qualiproplus16@gmail.com';
@endphp

<style>
    /* --- STYLE HEADER FIXE (TON CODE ORIGINAL) --- */
    .header-4 {
        position: fixed !important; 
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        z-index: 9999 !important;
        background-color: #ffffff !important; 
    }

    .top-header {
        position: relative; 
        z-index: 9999 !important;
    }
    
    .nav-header {
        position: relative !important; 
        overflow: visible !important;
    }
    
    .nav-header::after {
        bottom: 0 !important; 
        height: 100% !important; 
    }

    .navbar-nav .nav-link {
         text-transform: uppercase !important;
        font-size: 13px !important;
        font-weight: 800 !important;
        letter-spacing: 0.5px !important;
        color: #176363 !important; 
        padding: 15px 12px !important; 
        transition: all 0.3s ease !important;
    }
    
    .navbar-nav .nav-link:hover {
        color: #00bcd4 !important; 
    }

    /* --- STYLE DU MENU DÉROULANT --- */
    .dropdown:hover .dropdown-menu {
        display: block !important;
        position: absolute !important;
        background-color: #ffffff !important;
        border: 1px solid #e0e0e0 !important;
        box-shadow: 0px 5px 15px rgba(0,0,0,0.1) !important;
        padding: 10px 0 !important;
        min-width: 160px;
        z-index: 9999 !important;
        top: 100% !important; 
        left: 0 !important;
    }

    .dropdown-item {
        display: block !important;
        width: 100% !important;
        padding: 8px 20px !important;
        color: #176363 !important;
        font-size: 13px !important;
        font-weight: 800 !important;
        text-decoration: none !important;
        transition: all 0.3s ease !important;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa !important;
        color: #00bcd4 !important; 
        padding-left: 25px !important;
    }
</style>

<header id="header" class="header-4 nav-on-top">

    {{-- TOP HEADER (Téléphone, Email, Réseaux sociaux) --}}
    <div id="top" class="top-header bg-secondery color-white icon-primary d-md-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <ul>
                        <li><i class="fa fa-phone mr-10"></i>{{ $sitePhone }}</li>
                        <li><i class="fa fa-envelope mr-10"></i>{{ $siteEmail }}</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-7">
                    <ul class="color-white-a hover-primary float-right">
                        <li class="list-inline-item mr-10">
                            <span class="d-none d-md-inline opacity-75" style="font-weight: 900 !important;">Nous contacter :</span>
                        </li>
                        {{-- Réseaux sociaux dynamiques --}}
                        @if(!empty($global_settings['facebook_url']))
                        <li class="list-inline-item">
                            <a href="{{ $global_settings['facebook_url'] }}"><i class="fa fa-facebook"></i></a>
                        </li>
                        @endif
                        @if(!empty($global_settings['linkedin_url']))
                        <li class="list-inline-item">
                            <a href="{{ $global_settings['linkedin_url'] }}"><i class="fa fa-linkedin"></i></a>
                        </li>
                        @endif
                        @if(!empty($global_settings['instagram_url']))
                        <li class="list-inline-item">
                            <a href="{{ $global_settings['instagram_url'] }}"><i class="fa fa-instagram"></i></a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- LOGO & INFOS (Accompagnement, Formation, Audit) --}}
    <div class="logo-box py-30 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-md-3">
                    <a class="navbar-brand mt-1" href="{{ $home_link }}">
                        {{-- LOGO DYNAMIQUE --}}
                        <img src="{{ asset($logoPath) }}" alt="QualiPro Plus" style="max-height: 70px;">
                    </a>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-10">
                    <div class="d-flex justify-content-end align-items-center h-100">
                        {{-- BOÎTES "ACCOMPAGNEMENT, FORMATION, AUDIT" DYNAMIQUES --}}
                        @forelse($achievements as $ach)
                            <div class="d-flex align-items-center px-4 {{ !$loop->last ? 'border-right' : '' }}" style="border-color: #e0e0e0 !important;">
                                
                                <div class="icon-circle d-flex align-items-center justify-content-center mr-3" 
                                     style="width: 42px; height: 42px; border-radius: 50%; background-color: rgba(0, 102, 102, 0.05);">
                                    <i class="{{ $ach->icon ?? 'fa fa-star' }}" style="font-size: 18px; color: #176363;"></i>
                                </div>
                                
                                <div class="text-left">
                                    <h6 class="mb-0" style="font-weight: 900; color: #176363; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">
                                        {{ $ach->title ?? 'Titre' }}
                                    </h6>
                                    <p class="mb-0" style="font-size: 11px; color: #ff0000; line-height: 1.2;">
                                        {{ $ach->subtitle ?? 'Description' }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            {{-- Fallback si l'admin n'a rien ajouté dans la table achievements --}}
                            <div class="text-muted small">Aucune info disponible</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- NAVBAR (Menu Principal) --}}
    <div class="nav-header bg-gray py-10 position-relative">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light px-0">
                
                <button class="toggle-btn" data-toggle="collapse" data-target="#mainMenu">
                    <span></span><span></span><span></span>
                </button>

                <div class="collapse navbar-collapse" id="mainMenu">
                    <ul class="navbar-nav mr-auto">
                        
                        {{-- 1. Accueil --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $home_link }}">Accueil</a>
                        </li>

                        {{-- 2. Qui nous sommes --}}
                       <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link" href="#about">
                                Qui nous sommes <i class="fa fa-angle-down ml-1" style="font-size: 12px;"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#core">Nos Valeurs</a>
                                <a class="dropdown-item" href="#team">Notre Équipe</a>
                            </div>
                        </li>

                        {{-- 3. Compétences --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#causes">Nos Compétences</a>
                        </li>

                        {{-- 4. Clients --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#partners">Clients Nous Font Confiance</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>