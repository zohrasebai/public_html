@php
    $partners = [
        'partner1.jpg', 'partner2.png', 'partner3.jpg', 
        'partner4.jpg', 'partner5.jpg', 'partner6.png', 'partner7.png'
    ];
@endphp

<style>
    /* 1. Mise en page de la section */
    .ref-section { background-color: #f4f7f6; padding: 80px 0; overflow: hidden; }
    .ref-flex { display: flex; align-items: center; max-width: 1200px; margin: 0 auto; padding: 0 15px; flex-wrap: wrap; }
    
    .ref-text { flex: 0 0 40%; max-width: 40%; padding-right: 40px; }
    .ref-logos-area { flex: 0 0 60%; max-width: 60%; overflow: hidden; position: relative; }

    /* 2. Style des cartes logos */
    .logo-card {
        background: white;
        min-width: 200px;
        height: 120px;
        margin: 0 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        border: 1px solid #eee;
    }

    .logo-card img {
        max-width: 75%;
        max-height: 65%;
        object-fit: contain;
    }

    /* 3. L'animation Marquise (Défilement continu) */
    .marquee-track {
        display: flex;
        width: calc(220px * {{ count($partners) * 2 }}); /* Double pour la boucle infinie */
        animation: scroll-left 20s linear infinite;
    }

    .marquee-track:hover { animation-play-state: paused; }

    @keyframes scroll-left {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-220px * {{ count($partners) }})); }
    }

    /* Responsive mobile */
    @media (max-width: 991px) {
        .ref-text, .ref-logos-area { flex: 0 0 100%; max-width: 100%; }
        .ref-text { text-align: center; padding-right: 0; margin-bottom: 40px; }
    }
</style>

<section class="ref-section">
    <div class="ref-flex">
        
        <div class="ref-text">
            <span style="color: #006a4e; font-weight: 700; text-transform: uppercase; font-size: 13px;">ILS NOUS FONT CONFIANCE...</span>
            <h2 style="color: #002e5b; font-size: 34px; font-weight: 700; margin: 10px 0;">Nos Références</h2>
            <div style="width: 50px; height: 3px; background-color: #00aaff; margin-bottom: 20px;"></div>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">
                Nous collaborons avec des entreprises de divers secteurs pour bâtir des démarches d'amélioration continue.
            </p>
        </div>

        <div class="ref-logos-area">
            <div class="marquee-track">
                {{-- Premier set de logos --}}
                @foreach($partners as $file)
                    <div class="logo-card">
                        <img src="/assets/images/paternes/{{ $file }}" alt="Partenaire">
                    </div>
                @endforeach
                
                {{-- Deuxième set (pour l'effet de boucle infinie sans coupure) --}}
                @foreach($partners as $file)
                    <div class="logo-card">
                        <img src="/assets/images/paternes/{{ $file }}" alt="Partenaire">
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>