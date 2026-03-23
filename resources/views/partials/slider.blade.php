<section id="home" class="relative h-screen min-h-[600px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <video autoplay loop muted playsinline class="w-full h-full object-cover scale-105">
            <source src="{{ asset('assets/videos/funfactSoul.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-r from-[#002e5b]/90 to-black/40"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl animate-fade-in-up">
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight mb-6">
                QualiPro+ : Votre partenaire pour <span class="text-[#ffcc00]">l'excellence.</span>
            </h1>
            <p class="text-gray-200 text-lg md:text-xl mb-10 max-w-2xl leading-relaxed border-l-4 border-[#ffcc00] pl-6">
                Nous sommes un cabinet spécialisé dans l'accompagnement des entreprises pour l'obtention de certifications internationales et l'optimisation de la performance.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#contact" class="bg-[#ffcc00] text-[#002e5b] px-10 py-4 rounded-full font-black uppercase text-sm hover:bg-white transition-all shadow-xl">
                    Demander un Audit
                </a>
                <a href="#about" class="bg-white/10 backdrop-blur-md text-white border border-white/30 px-10 py-4 rounded-full font-black uppercase text-sm hover:bg-white/20 transition-all">
                    Découvrir l'équipe
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 animate-bounce">
        <a href="#about" class="text-white opacity-50 hover:opacity-100 transition">
            <i class="fa fa-angle-down text-3xl"></i>
        </a>
    </div>
</section>