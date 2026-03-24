@php
    $aboutData = \App\Models\About::first();
    $aboutImg = ($aboutData && $aboutData->image) ? asset($aboutData->image) : 'https://moodle.cfuv.ru/pluginfile.php/238972/course/overviewfiles/consulting.jpg';
    $aboutTitle = $aboutData->title_fr ?? 'Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence.'; 
    $aboutText1 = $aboutData->text_1_fr ?? 'Nous sommes un cabinet spécialisé dans l’accompagnement des entreprises pour l’obtention de certifications...';
    $aboutText2 = $aboutData->text_2_fr ?? 'Notre mission : Accompagner les entreprises vers la certification...';

    // On garde l'image des valeurs
    $coreSettings = \App\Models\CoreValue::first();
@endphp

{{-- ================= SECTION 1 : QUI SOMMES-NOUS ================= --}}
<section id="about" class="about-us-3 position-relative bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-5">
                <div class="about-img-2 wow animated slideInRight animated">
                    <img src="{{ filter_var($aboutImg, FILTER_VALIDATE_URL) ? $aboutImg : asset($aboutImg) }}" alt="Notre Équipe">
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-7">
                <div class="position-relative">
                    <div class="inner-title mb-30">
                        <h2 class="color-secondery xl-mt-30 wow animated slideInUp animated">{{ $aboutTitle }}</h2>
                    </div>
                    <div class="text-area mb-30 wow animated slideInUp animated">
                        <p class="mb-15">{{ $aboutText1 }}</p>
                    </div>
                    <div class="about-area-2 bg-secondery d-flex color-white p-40 wow animated slideInUp animated">
                        <p>{{ $aboutText2 }}</p>
                    </div>
                    {{-- Le bouton Demander Devis a été supprimé ici --}}
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= SECTION 2 : IMAGE DES VALEURS SEULE ================= --}}
<section class="core-value position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="title mb-30 w-75 text-center mx-auto wow animated slideInUp animated">
                    {{-- عرض العنوان الفرعي والرئيسي والوصف من جدول الإعدادات --}}
                    <span class="color-primary">{{ $coreSettings->subtitle_fr }}</span>
                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">{{ $coreSettings->title_fr }}</h2>
                    <p>{{ $coreSettings->desc_fr }}</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12">
                <div class="core-value-box bg-secondery p-30 z-index-1 position-relative" style="margin: 80px -80px 50px 0">
                    <div class="row">
                        {{-- عرض العناصر الأربعة من قاعدة البيانات --}}
                        @foreach($coreItems as $i => $item)
                        <div class="col-xl-6 col-lg-6">
                            <div class="Valuable-item bg-light p-30 text-center{{ $i > 1 ? ' mt-30' : ($i == 1 ? ' lg-mt-30' : '') }} wow animated slideInUp animated">
                                <h4 class="mb-15">{{ $item->title_fr }}</h4>
                                <p>{{ $item->desc_fr }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-12">
                <div class="core-images mt-30">
                    {{-- عرض الصورة من قاعدة البيانات أو صورة افتراضية --}}
                    <img src="{{ $coreSettings->image ? asset($coreSettings->image) : 'https://cdn.bcs-express.ru/article-head/7180.jpg' }}" alt="QualiPro Values">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= SECTION 3 : NOTRE ÉQUIPE ================= --}}
<section id="equipe" class="py-5 bg-light">
    <div class="container text-center">
        <div class="mb-5 wow animated slideInUp animated">
            <h2 class="fw-bold display-6" style="color: #002e5b;">Notre Équipe</h2>
            <div class="mx-auto mt-2" style="width: 55px; height: 3px; background-color: #00aaff;"></div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10 wow animated slideInUp animated">
                <p class="lead text-dark mb-4" style="line-height: 1.8;">
                    Nos consultants et experts sont de haut niveau, une équipe pluridisciplinaire dotée d'expériences et de compétences confirmées dans le <strong>Management d'entreprise</strong>.
                </p>
                <p class="lead text-dark">
                    Notre équipe est composée de consultants certifiés et reconnus au niveau national et international.
                </p>
            </div>
        </div>
    </div>
</section>