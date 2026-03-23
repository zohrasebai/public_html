<section id="home" class="position-relative vh-100 d-flex align-items-center justify-content-center overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
        <video autoplay loop muted playsinline poster="{{ asset('assets/images/slider/bg-video-poster.jpg') }}" class="w-100 h-100 object-fit-cover">
            <source src="{{ asset('assets/videos/funfactSoul.mp4') }}" type="video/mp4">
            Votre navigateur ne supporte pas la lecture de vidéos.
        </video>
        {{-- Overlay pour assombrir et rendre le texte lisible --}}
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 46, 91, 0.5);"></div>
    </div>

    <div class="container text-center text-white z-1">
        <h1 class="display-3 fw-bold mb-4">
            QualiPro+ : Votre partenaire pour l'excellence.
        </h1>
        <div class="mt-5">
            <a href="#about" class="text-white">
                <i class="ri-arrow-down-s-line fs-1 animate-bounce"></i>
            </a>
        </div>
    </div>
</section>