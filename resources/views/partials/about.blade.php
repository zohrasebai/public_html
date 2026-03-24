{{-- Section 1 : Qui Sommes-Nous --}}
<section id="about" class="about-us-3 position-relative bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            {{-- Image à gauche --}}
            <div class="col-lg-5 col-md-12">
                <div class="about-img-2 shadow-lg rounded overflow-hidden wow animated slideInLeft">
                    <img src="{{ ($about && $about->image) ? asset($about->image) : 'https://via.placeholder.com/500x400' }}" 
                         alt="Qui Sommes Nous" class="img-fluid w-100" style="object-fit: cover; min-height: 400px;">
                </div>
            </div>

            {{-- Texte à droite --}}
            <div class="col-lg-7 col-md-12">
                <div class="ps-lg-5 mt-4 mt-lg-0">
                    <div class="inner-title mb-30">
                        <span class="text-uppercase fw-bold" style="color: #269649; letter-spacing: 1px;">Présentation</span>
                        <h2 class="fw-bold mt-2" style="color: #002e5b; font-size: 2.5rem;">{{ $about->title_fr ?? 'Qui Sommes-Nous' }}</h2>
                        <div style="width: 50px; height: 3px; background-color: #269649;" class="mt-2"></div>
                    </div>
                    
                    <div class="text-area mb-30">
                        <p class="text-muted" style="line-height: 1.8; font-size: 1.05rem;">{{ $about->text_1_fr ?? '' }}</p>
                    </div>

                    {{-- Bloc Mission (Bleu) --}}
                    <div class="p-4 shadow-sm wow animated slideInUp" 
                         style="background-color: #002e5b; border-radius: 10px; border-left: 5px solid #269649;">
                        <p class="mb-0 text-white" style="font-style: italic; line-height: 1.6;">
                            "{{ $about->text_2_fr ?? '' }}"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 2 : Nos Valeurs --}}
@include('partials.core')

{{-- Section 3 : Notre Équipe --}}
<section id="equipe" class="py-5 bg-white border-top">
    <div class="container text-center">
        <div class="mb-5 wow animated slideInUp">
            <h2 class="fw-bold display-6" style="color: #002e5b;">Notre Équipe</h2>
            <div class="mx-auto mt-2" style="width: 55px; height: 3px; background-color: #269649;"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="lead text-muted">Nos consultants et experts sont de haut niveau, alliant compétences techniques et écoute client.</p>
            </div>
        </div>
    </div>
</section>