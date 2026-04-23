 // جلب البيانات من قاعدة البيانات
    // نستخدم الـ Fallback (القيم الافتراضية) في حال لم يتم إدخال بيانات بعد
     $aboutImg = $aboutData->image ?? 'assets/images/background/consulting.jpg';

    $aboutTitle = $aboutData->title_fr ?? 'Qui Sommes-Nous';

    $aboutText1 = $aboutData->text_1_fr ?? '';

    $aboutText2 = $aboutData->text_2_fr ?? '';

    $aboutReadMoreUrl = $aboutData->button_url ?? 'contact';

    $aboutReadMoreText = $aboutData->button_text_fr ?? 'Demander Devis';
@endphp
<section id="about" class="about-us-3 position-relative bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-5">
                <div class="about-img-2 wow animated slideInRight animated">
                    {{-- طريقة ذكية لعرض الصورة سواء كانت رابط خارجي أو ملف مرفوع --}}
                    <img src="{{ filter_var($aboutImg, FILTER_VALIDATE_URL) ? $aboutImg : asset($aboutImg) }}" alt="Notre Équipe de Consultants">
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
                </div>
            </div>
        </div>
    </div>
</section>
slider.blade.php:@php
    // Récupération des sliders actifs
    $activeSliders = \App\Models\Slider::orderBy('order', 'asc')->get();
    
    // Chemin direct vers votre vidéo locale dans Codespace
    $videoPath = asset('assets/videos/vd.mp4');

    // Fallbacks pour les images décoratives
    $k1 = asset('assets/images/slider/k1.png');
    $k2 = asset('assets/images/slider/k2.png');
    $k3 = asset('assets/images/slider/k3.png');
    $f1 = asset('assets/images/slider/f1.png');
    $f2 = asset('assets/images/slider/f2.png');
@endphp

<div class="full-row p-0 overflow-hidden">
    <div id="slider" style="width:1920px; height:850px; margin:0 auto; margin-bottom: 0px;">
        
        @foreach($activeSliders as $index => $item)

            {{-- --- SLIDE 1 : VOTRE VIDÉO VD.MP4 (AUTOPLAY TOTAL, SANS BOUTON) --- --}}
            @if($index == 0)
                {{-- Nous augmentons la durée du slide (duration:15000) pour laisser le temps à la vidéo de tourner --}}
                <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:15000; transition2d:5;">
                    
                    {{-- Image de fond (Poster) pour un chargement propre --}}
                    <img width="1920" height="1281" src="{{ asset($item->image) }}" class="ls-bg" alt="QualiPro Background"/>

                    {{-- LE LECTEUR VIDÉO : Configuré pour lire tout seul en boucle et muet --}}
                    <div class="ls-l" style="top:0; left:0; width:100%; height:100%;" data-ls="offsetxin:0; offsetyin:0; durationin:0; showuntil:0;">
                        <video 
                            autoplay 
                            muted 
                            loop 
                            playsinline 
                            preload="auto"
                            {{-- object-fit:cover remplit tout l'espace, pointer-events:none désactive le clic/pause --}}
                            style="width:100%; height:100%; object-fit:cover; pointer-events:none;">
                            <source src="{{ $videoPath }}" type="video/mp4">
                            Votre navigateur ne supporte pas la vidéo.
                        </video>
                    </div>

                    {{-- LE BOUTON PLAY A ÉTÉ SUPPRIMÉ ICI POUR UN DESIGN ÉPURÉ --}}
                </div>

            {{-- --- SLIDE 2 : ANIMATIONS --- --}}
            @elseif($index == 1)
                <div class="ls-slide" data-ls="bgsize:auto; bgposition:50% 100%; duration:2700; transition2d:5; kenburnsscale:1.2;">
                    <img width="1920" height="1281" src="{{ asset($item->image) }}" class="ls-bg" alt="" />
                    <img width="706" height="579" src="{{ asset($item->k1_img ?? $k1) }}" class="ls-l" style="top:79px; left:-19px;" data-ls="offsetxin:left; durationin:1250; rotatein:-60;">
                    <img width="439" height="564" src="{{ asset($item->k2_img ?? $k2) }}" class="ls-l" style="top:95px; left:1219px;" data-ls="offsetxin:500; durationin:1250; delayin:250; rotatein:60;">
                    <img width="439" height="581" src="{{ asset($item->k3_img ?? $k3) }}" class="ls-l" style="top:69px; left:868px;" data-ls="offsetyin:-680; durationin:1250; delayin:500; rotatein:60;">
                    
                    @if(!empty($item->title_fr))
                        <p style="top:50%; left:50%; text-align:center; font-weight:700; font-size:60px;" class="ls-l color-white" data-ls="durationin:1000;">{{ $item->title_fr }}</p>
                    @endif
                </div>

            {{-- --- AUTRES SLIDES --- --}}
            @else
                <div class="ls-slide" data-ls="bgsize:auto; bgposition:50% 100%; duration:7500; transitionorigami:true;">
                    <img width="1920" height="1281" src="{{ asset($item->image) }}" class="ls-bg" alt="" />
                    <p style="top:235px; left:330px; text-align:center; font-weight:700; font-size:50px; width:60%;" class="ls-l color-primary">{{ $item->title_fr }}</p>
                </div>
            @endif

        @endforeach
    </div>
</div>