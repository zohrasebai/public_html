{{-- Supprime tout bloc @php manuel ici, le contrôleur s'en occupe --}}

{{-- ================= SECTION 1 : QUI SOMMES-NOUS ================= --}}
<section id="about" class="about-us-3 position-relative bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            {{-- Image à gauche --}}
            <div class="col-md-12 col-lg-12 col-xl-5">
                <div class="about-img-2 wow animated slideInLeft">
                    {{-- Sécurité : si l'image est vide, on met un placeholder --}}
                    <img src="{{ ($about && $about->image) ? asset($about->image) : 'https://via.placeholder.com/500x400' }}" alt="Qui Sommes Nous" class="img-fluid">
                </div>
            </div>

            {{-- Texte à droite --}}
            <div class="col-md-12 col-lg-12 col-xl-7">
                <div class="position-relative ps-xl-4">
                    <div class="inner-title mb-20">
                        {{-- On utilise directement l'objet $about envoyé par le contrôleur --}}
                        <h2 class="color-secondery wow animated slideInUp">{{ $about->title_fr ?? 'Qui Sommes-Nous' }}</h2>
                    </div>
                    <div class="text-area mb-20 wow animated slideInUp">
                        <p>{{ $about->text_1_fr ?? '' }}</p>
                    </div>
                    <div class="about-area-2 bg-secondery d-flex color-white p-30 wow animated slideInUp" style="background-color: #002e5b !important;">
                        <p class="mb-0">{{ $about->text_2_fr ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= SECTION 2 : NOS VALEURS ================= --}}
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