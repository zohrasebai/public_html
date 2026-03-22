@php
    $phone = $global_settings['phone'] ?? "+213 699 75 80 30"; 
    $email = $global_settings['email'] ?? "qualiproplus16@gmail.com";
    $logo  = asset('assets/images/logo/logo.png'); 
    $home_link = route('home');
@endphp

<header id="header" class="header-4 nav-on-top">
    {{-- Barre de contact bleue actuelle --}}
    <div id="top" class="top-header bg-secondery color-white icon-primary d-md-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <ul>
                        <li><i class="fa fa-phone mr-10"></i>{{ $phone }}</li>
                        <li><i class="fa fa-envelope mr-10"></i>{{ $email }}</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-7 text-right">
                    {{-- Accès Admin invisible pour les clients --}}
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="color-white"><i class="fa fa-user mr-5"></i> Admin</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    {{-- Logo et Stats --}}
    <div class="logo-box py-30 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a class="navbar-brand" href="{{ $home_link }}">
                        <img src="{{ $logo }}" alt="QualiPro Plus">
                    </a>
                </div>
                <div class="col-md-9 text-right d-none d-md-block">
                    {{-- Vos statistiques actuelles (Satisfaction, etc.) --}}
                    <div class="fact-counter d-inline-flex">
                        @foreach($achievements as $ach)
                            <div class="px-3 border-right">
                                <h4 class="color-primary mb-0">{{ $ach->count }}</h4>
                                <small>{{ $ach->title }}</small>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Menu de Navigation Simple --}}
    <div class="nav-header bg-gray py-10">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light px-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainMenu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="#home">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Qui Sommes-Nous</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Nos Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#references">Nos Références</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
