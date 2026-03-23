<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QualiPro Plus | Bienvenue</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#002e5b] h-screen flex items-center justify-center text-white font-sans antialiased">

    <div class="text-center p-8 border border-white/10 rounded-3xl bg-white/5 shadow-2xl backdrop-blur-md">
        <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mx-auto mb-6 shadow-lg">
            <span class="text-[#002e5b] text-3xl font-black">Q</span>
        </div>
        <h1 class="text-3xl font-bold mb-2">QualiPro Plus</h1>
        <p class="text-blue-200 mb-8">Expertise & Certification Qualité</p>
        
        <a href="{{ route('home') }}" class="inline-block bg-white text-[#002e5b] px-10 py-3 rounded-full font-bold hover:scale-105 transition-transform">
            Entrer sur le site
        </a>
    </div>

</body>
</html>