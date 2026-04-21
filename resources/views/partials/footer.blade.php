@php
    // ================================
    //    
    //  (Mise à jour Finale QualiPro Plus)
    // ================================

    $footerLogo = asset('assets/images/logo/logo.png');

    // نص تعريفي يركز على المهمة والشراكة
    $footerText = 'Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence. Nous accompagnons les entreprises vers la certification et la conformité réglementaire durable.';

    $footerContacts = [
        ['icon' => 'fa fa-phone', 'text' => '0699 75 80 30 / 0776 70 75 80'],
        ['icon' => 'fa fa-envelope', 'text' => 'qualiproplus16@gmail.com'],
        ['icon' => 'fa fa-map-marker', 'text' => 'Alger, Algérie'], // الموقع بناءً على رمز الهاتف والبريد
    ];

    $footerNews = [
        ['url' => 'https://www.linkedin.com/posts/qualipro-plus_proc%C3%A9dure-vs-processus-activity-7400979297156370432-YxlU', 'title' => 'Comprendre la différence entre Procédure vs Processus.', 'date' => '12 Nov 2025'],
        ['url' => '#', 'title' => 'Comment réussir votre audit de certification ISO 22000.', 'date' => 'Nov 2025'],
        ['url' => '#', 'title' => 'Les avantages de la démarche HACCP en agroalimentaire.', 'date' => 'Oct 2025'],
    ];

    $footerLinks = [
        ['url' => '#services', 'label' => 'Nos Domaines de Compétence'],
        ['url' => '#about', 'label' => 'Qui sommes-nous ?'],
        ['url' => '#values', 'label' => 'Nos Valeurs'],
        ['url' => '#', 'label' => 'Formation et Coaching'],
        ['url' => '#', 'label' => 'Audits et Diagnostics'],
        ['url' => '#', 'label' => 'Certification ISO'],
        ['url' => '#', 'label' => 'Conseil Stratégique'],
        ['url' => '#', 'label' => 'HACCP & Sécurité Aliments'],
    ];

    $footerSubscribeText = 'Restez informé de nos dernières actualités et conseils sur les normes et la performance durable.';

    $footerSocial = [
        ['icon' => 'fa fa-facebook', 'url' => 'https://www.facebook.com/share/17Sx6r89As/'],
        ['icon' => 'fa fa-linkedin', 'url' => 'https://www.linkedin.com/company/qualipro-plus/'],
        ['icon' => 'fa fa-instagram', 'url' => 'https://www.instagram.com/quali_proplus'],
    ];

    $footerCopyright = 'QualiPro Plus @ 2025. Tous droits réservés.';

    $footerCopyrightLinks = [
        ['url' => '#', 'label' => 'Politique de Confidentialité'],
        ['url' => '#', 'label' => 'Conditions Générales'],
    ];
@endphp

<footer class="bg-secondery">
    <div class="container">
        <div class="row py-80">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="footer-widget sm-mt-0">
                    <div class="footer-logo mb-20">
                        <a href="#"><img src="{{ $footerLogo ?? '' }}" alt="images"></a>
                    </div>
                    <div class="text-area color-white">
                        <p>{{ $footerText ?? '' }}</p>
                    </div>
                    <ul class="widget-contact-info color-white icon-primary link-list-b-15 mt-30">
                        @foreach($footerContacts as $contact)
                        <li><span class="mr-20"><i class="{{ $contact['icon'] ?? '' }}" aria-hidden="true"></i></span> {{ $contact['text'] ?? '' }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title position-relative va-lb-line-w50-h2-primary pb-15 mb-20 color-white">Recent News</h3>
                    <ul class="hover-white-primary link-list-b-20">
                        @foreach($footerNews as $news)
                        <li>
                            <a href="{{ $news['url'] ?? '#' }}">{{ $news['title'] ?? '' }}</a>
                            <div class="post-meta color-light-gray f-12 mt-5">
                                <span class="d-inline-block">{{ $news['date'] ?? '' }}</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title position-relative va-lb-line-w50-h2-primary pb-15 mb-20 color-white">Links</h3>
                    <ul class="hover-white-primary link-list-b-15">
                        @foreach($footerLinks as $link)
                        <li><a href="{{ $link['url'] ?? '#' }}">{{ $link['label'] ?? '' }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-6">
                <div class="footer-widget color-white xl-mt-50">
                    <h3 class="footer-widget-title position-relative va-lb-line-w50-h2-primary pb-15 mb-20 color-white">Subscribe</h3>
                    <p>{{ $footerSubscribeText ?? '' }}</p>
                    <form class="mt-30">
                        <input class="form-control" name="subscribe" type="text" placeholder="Subscribe">
                        <button class="btn btn-primary mt-15">Subscribe</button>
                    </form>
                    <ul class="socal media-two d-inline-block color-secondery mt-30">
                        @foreach($footerSocial as $social)
                        <li><a href="{{ $social['url'] ?? '#' }}"><i class="{{ $social['icon'] ?? '' }}" aria-hidden="true"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr class="border-t-1-dark">
    <div class="copyright-2 bg-secondery">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <ul class="copyright-style-2 d-table w-100 hover-primary color-white py-15">
                        <li class="float-left">{{ $footerCopyright ?? '' }}</li>
                        <li class="float-right color-white-a">
                            @foreach($footerCopyrightLinks as $i => $link)
                                <a href="{{ $link['url'] ?? '#' }}">{{ $link['label'] ?? '' }}</a>@if($i == 0) | @endif
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>