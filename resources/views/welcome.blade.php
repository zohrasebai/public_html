<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> QualiPro Plus </title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root {
            --primary-blue: #002e5b;
        }
        body { font-family: 'Figtree', sans-serif; scroll-behavior: smooth; }
        
        .video-docker video {
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            object-fit: cover;
            position: absolute;
            height: 100%; width: 100%;
        }
        .video-docker::after {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 46, 91, 0.7); /* Overlay Bleu Marine */
        }
        .section-title::after {
            content: "";
            display: block;
            width: 50px;
            height: 3px;
            background: var(--primary-blue);
            margin: 10px auto;
        }
    </style>
</head>
<body class="antialiased bg-white text-gray-800">

    <nav class="fixed w-full z-50 bg-white/95 backdrop-blur-sm shadow-sm">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-[#002e5b] rounded flex items-center justify-center">
                        <span class="text-white font-bold text-xl">Q</span>
                    </div>
                    <span class="text-2xl font-bold text-[#002e5b] tracking-tight">QualiPro Plus</span>
                </div>

                <div class="hidden md:flex items-center gap-10">
                    <a href="#" class="text-[#002e5b] font-semibold">Accueil</a>
                    <a href="#services" class="hover:text-[#002e5b] transition font-medium">Services</a>
                    <a href="#about" class="hover:text-[#002e5b] transition font-medium">À Propos</a>
                    <a href="#contact" class="hover:text-[#002e5b] transition font-medium">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="relative h-screen flex items-center justify-center overflow-hidden video-docker">
        <video autoplay muted loop playsinline class="min-w-full min-h-full">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-business-people-shaking-hands-in-a-meeting-30043-large.mp4" type="video/mp4">
        </video>
        
        <div class="relative z-10 text-center px-6">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 drop-shadow-lg">
                منصة QualiPro Plus الرقمية
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto mb-10 leading-relaxed">
                Expertise en conseil et accompagnement pour la mise en place des systèmes de management de la qualité.
            </p>
            <a href="#services" class="inline-block bg-white text-[#002e5b] px-10 py-4 rounded-full font-bold text-lg hover:scale-105 transition-transform shadow-xl">
                Explorer nos services
            </a>
        </div>
    </section>

    <section id="services" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-[#002e5b] mb-16 section-title">Nos Services</h2>
            
            <div class="grid md:grid-cols-3 gap-12">
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="shield-check" class="text-[#002e5b] w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Certification ISO</h3>
                    <p class="text-gray-600">Accompagnement complet vers les normes ISO 9001, 14001, 45001.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="users" class="text-[#002e5b] w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Formation</h3>
                    <p class="text-gray-600">Programmes personnalisés pour monter en compétence vos équipes.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="trending-up" class="text-[#002e5b] w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Audit & Conseil</h3>
                    <p class="text-gray-600">Diagnostics précis et stratégies d'amélioration continue.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-24 bg-[#002e5b] text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">Contactez-nous</h2>
            <p class="text-xl text-blue-100 mb-12">Prêt à transformer votre entreprise ? Parlons de votre projet.</p>
            
            <div class="flex flex-wrap justify-center gap-10 text-lg">
                <div class="flex items-center gap-3">
                    <i data-lucide="mail" class="w-6 h-6"></i>
                    <span>contact@qualiproplus.com</span>
                </div>
                <div class="flex items-center gap-3">
                    <i data-lucide="phone" class="w-6 h-6"></i>
                    <span>+213 (0) XX XX XX XX</span>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-10 text-center text-gray-400 text-sm border-t border-gray-100">
        <p>© 2026 QualiPro Plus. Plateforme numérique d'excellence.</p>
    </footer>

    <script>
        // Initialiser les icônes Lucide
        lucide.createIcons();
    </script>

</body>
</html>
