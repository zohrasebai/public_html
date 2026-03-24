
{{-- ================= SECTION 1 : QUI SOMMES-NOUS (Image à Gauche / Texte à Droite) ================= --}}
<section id="about" class="about-us-3 position-relative bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            {{-- Image à gauche comme dans exm.png --}}
            <div class="col-md-12 col-lg-12 col-xl-5">
                <div class="about-img-2 wow animated slideInLeft">
                    <img src="{{ filter_var($aboutImg, FILTER_VALIDATE_URL) ? $aboutImg : asset($aboutImg) }}" alt="Qui Sommes Nous">
                </div>
            </div>
            {{-- Texte à droite --}}
            <div class="col-md-12 col-lg-12 col-xl-7">
                <div class="position-relative ps-xl-4">
                    <div class="inner-title mb-20">
                        <h2 class="color-secondery wow animated slideInUp">{{ $aboutTitle }}</h2>
                    </div>
                    <div class="text-area mb-20 wow animated slideInUp">
                        <p>{{ $aboutText1 }}</p>
                    </div>
                    <div class="about-area-2 bg-secondery d-flex color-white p-30 wow animated slideInUp">
                        <p class="mb-0">{{ $aboutText2 }}</p>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= SECTION 2 : NOS VALEURS (Texte en Haut / Cartes à Gauche / Image à Droite) ================= --}}
@include('partials.core')
{{-- ================= SECTION 3 : NOTRE ÉQUIPE ================= --}}
<section id="equipe" class="py-5 bg-light border-top">
    <div class="container text-center">
        <div class="mb-4 wow animated slideInUp">
            <h2 class="fw-bold display-6" style="color: #002e5b;">Notre Équipe</h2>
            <div class="mx-auto mt-2" style="width: 55px; height: 3px; background-color: #00aaff;"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 wow animated slideInUp">
                <p class="lead text-dark mb-0">Nos consultants et experts sont de haut niveau...</p>
            </div>
        </div>
    </div>
</section>