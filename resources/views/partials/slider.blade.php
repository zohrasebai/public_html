<section id="home" class="relative w-full h-screen overflow-hidden">
    {{-- La Vidéo en arrière-plan --}}
    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover">
        <source src="{{ asset('assets/video/funfactSoul.mp4') }}" type="video/mp4">
        {{-- Image de secours si la vidéo ne charge pas --}}
        <img src="{{ asset('assets/images/slider/bg1.jpg') }}" alt="Equipe QualiPro">
    </video>

    {{-- Texte par-dessus la vidéo --}}
    <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-30">
        <div class="text-center text-white">
            <h1 class="display-3 font-weight-bold">QualiPro+</h1>
            <p class="lead">Votre partenaire pour l'excellence et la certification.</p>
        </div>
    </div>
</section>