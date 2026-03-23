<header id="header" class="fixed w-full z-50 transition-all duration-300">
    <div class="bg-[#002e5b] text-white py-2 hidden md:block border-b border-white/10">
        <div class="container mx-auto px-6 flex justify-between items-center text-sm font-medium">
            <div class="flex gap-6">
                <span><i class="fa fa-phone mr-2 text-[#ffcc00]"></i> +213 699 75 80 30</span>
                <span><i class="fa fa-envelope mr-2 text-[#ffcc00]"></i> contact@qualiproplus.com</span>
            </div>
            <div class="flex gap-4 items-center">
                <span class="mr-2 opacity-80">Nous rejoindre :</span>
                <a href="#" class="hover:text-[#ffcc00] transition"><i class="fa fa-facebook"></i></a>
                <a href="#" class="hover:text-[#ffcc00] transition"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="hover:text-[#ffcc00] transition"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <nav class="bg-white/95 backdrop-blur-sm shadow-lg border-b border-gray-100">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-12 h-12 bg-[#002e5b] rounded-lg flex items-center justify-center text-white font-black text-2xl shadow-md group-hover:bg-[#003d7a] transition">
                    Q
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-black text-[#002e5b] leading-none">QualiPro+</span>
                    <span class="text-[10px] uppercase tracking-[2px] text-gray-500 font-bold">Expertise & Conseil</span>
                </div>
            </a>

            <ul class="hidden md:flex gap-8 font-bold text-[#002e5b] uppercase text-xs tracking-widest">
                <li><a href="#home" class="hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 py-2 transition-all">Accueil</a></li>
                <li><a href="#about" class="hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 py-2 transition-all">Qui Sommes-Nous</a></li>
                <li><a href="#causes" class="hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 py-2 transition-all">Nos Services</a></li>
                <li><a href="#references" class="hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 py-2 transition-all">Références</a></li>
                <li><a href="#contact" class="bg-[#002e5b] text-white px-5 py-2 rounded-full hover:bg-blue-700 transition shadow-md">Contact</a></li>
            </ul>

            <button class="md:hidden text-[#002e5b] text-2xl"><i class="fa fa-bars"></i></button>
        </div>
    </nav>
</header>