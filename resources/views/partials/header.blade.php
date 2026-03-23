<div class="top-header-area bg-dark-blue py-2" style="background-color: #002e5b; color: #ffffff;">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="top-left-info d-flex gap-4 fs-13">
            <span><i class="ri-phone-fill me-1" style="color: #ffcc00;"></i> {{ $global_settings['phone'] ?? '+213 699 75 80 30' }}</span>
            <span class="d-none d-md-inline"><i class="ri-mail-fill me-1" style="color: #ffcc00;"></i> {{ $global_settings['email'] ?? 'contact@qualiproplus.com' }}</span>
        </div>
        <div class="top-right-social d-flex gap-3 align-items-center fs-14">
            <span class="d-none d-lg-inline opacity-75">Nous rejoindre :</span>
            <a href="{{ $global_settings['facebook'] ?? '#' }}" class="text-white hover-gold"><i class="ri-facebook-box-fill"></i></a>
            <a href="{{ $global_settings['linkedin'] ?? '#' }}" class="text-white hover-gold"><i class="ri-linkedin-box-fill"></i></a>
            <a href="{{ $global_settings['instagram'] ?? '#' }}" class="text-white hover-gold"><i class="ri-instagram-fill"></i></a>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="QualiPro Plus" style="height: 60px;">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <i class="ri-menu-3-line fs-24"></i>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto gap-4 fw-bold text-uppercase fs-12 tracking-wider">
                @foreach($nav_links as $item)
                    <li class="nav-item">
                        <a class="nav-link text-dark-blue p-0" href="{{ $item->url }}">{{ $item->title }}</a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <a class="btn btn-primary rounded-pill px-4 py-2 fs-12 fw-bold" href="{{ route('contact') }}" style="background-color: #002e5b; border: none;">
                        Demander Devis
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>