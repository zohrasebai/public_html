
<section id="causes" class="bg-light py-5">
    <div class="container">

        {{-- TITRE --}}
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="title mb-30 w-75 text-center mx-auto wow animated slideInUp">

                    <span class="color-primary" style="color: #ffcc00; font-weight: bold;">
                        {{ $causes['subtitle'] }}
                    </span>

                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">
                        {{ $causes['title'] }}
                    </h2>

                    <p>
                        {{ $causes['desc'] }}
                    </p>

                </div>
            </div>
        </div>

        {{-- CONTENU --}}
        <div class="row align-items-stretch">

            {{-- IMAGE --}}
            <div class="col-md-12 col-lg-5 mb-30">
                <div style="width: 100%; height: 100%; border-radius: 12px; overflow: hidden;">
                    <img src="{{ asset('assets/images/background/about.png') }}"
                         alt="Certifications"
                         style="width: 100%; height: 100%; object-fit: contain;">
                </div>
            </div>

            {{-- SERVICES --}}
            <div class="col-md-12 col-lg-7">
                <div>

                    @foreach($services as $item)
                        <div class="bg-white p-25 mb-20 shadow-smooth-black-01"
                             style="border-radius: 8px; border-left: 4px solid #1c2c52;">

                            <h4 style="color:#333; font-weight:600; font-size:18px;">
                                {{ $item->title_fr }}
                            </h4>

                            <p style="font-size:15px; line-height:1.7;">
                                {{ $item->desc_fr }}
                            </p>

                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</section>