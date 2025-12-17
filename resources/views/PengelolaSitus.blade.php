<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelola Situs - Pertirtaan Ngawonggo</title>
    
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Rye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-green': '#65745A',
                        'dark-green': '#485741',
                        'accent-cream': '#F3F6E8',
                    },
                    fontFamily: {
                        'serif': ['"Playfair Display"', 'serif'],
                        'sans': ['"Poppins"', 'sans-serif'],
                        'decorative': ['"Cinzel Decorative"', 'serif'], /* Font judul */
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-primary-green text-white font-sans antialiased bg-gradient-to-b from-[#65745A] via-[#56634C] to-[#424d38]">

    <header class="relative h-[70vh] w-full bg-cover bg-center" style="background-image: url('{{ asset('images/HeaderPengelola.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        
        <nav class="absolute top-0 left-0 w-full z-50 flex justify-between items-center px-8 py-6">
            <div class="flex items-center">
                <a href="{{ url('/Sejarah') }}" class="bg-white/20 hover:bg-white/40 backdrop-blur-sm rounded-full w-7 h-7 flex items-center justify-center transition border-2 border-white">
                    <i class="fas fa-arrow-left text-white"></i>
                </a>
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-13 w-auto ml-4 opacity-100">
            </div>
            
            <div class="hidden md:flex space-x-8 text-sm font-light tracking-wide text-white">
                <a href="{{ url('/Home') }}" class="hover:text-gray-300">Home</a>
                <a href="{{ url('/Sejarah') }}" class="font-bold underline underline-offset-4">Sejarah</a>
                <a href="{{ url('/Gallery') }}" class="hover:text-gray-300">Gallery</a>
                <a href="#" class="hover:text-gray-300">Contact</a>
            </div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-16 space-y-16">

        <div class="text-center">
            <h1 class="text-4xl md:text-6xl text-accent-cream font-decorative tracking-wider drop-shadow-md">
                Pengelola Situs Petirtaan
            </h1>
        </div>

        <div class="flex flex-wrap justify-center gap-8 md:gap-10">

            <div class="w-full md:w-[22%] flex flex-col items-center group">
                <div class="rounded-3xl overflow-hidden w-full h-80 shadow-xl mb-4 relative">
                    <img src="{{ asset('images/CakHanafi.png') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="font-bold text-xl text-accent-cream">Cak Hanafi</h3>
                <p class="text-xs text-gray-300 uppercase tracking-widest mt-1">Pramu Wedhang</p>
            </div>

            <div class="w-full md:w-[22%] flex flex-col items-center group">
                <div class="rounded-3xl overflow-hidden w-full h-80 shadow-xl mb-4 relative">
                    <img src="{{ asset('images/BudheSri.png') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="font-bold text-xl text-accent-cream">Budhe Sri</h3>
                <p class="text-xs text-gray-300 uppercase tracking-widest mt-1">Pengampu Pawon</p>
            </div>

            <div class="w-full md:w-[22%] flex flex-col items-center group">
                <div class="rounded-3xl overflow-hidden w-full h-80 shadow-xl mb-4 relative">
                    <img src="{{ asset('images/BudheDewi.png') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="font-bold text-xl text-accent-cream">Budhe Dewi</h3>
                <p class="text-xs text-gray-300 uppercase tracking-widest mt-1">Pengampu Pawon</p>
            </div>

            <div class="w-full md:w-[22%] flex flex-col items-center group">
                <div class="rounded-3xl overflow-hidden w-full h-80 shadow-xl mb-4 relative">
                    <img src="{{ asset('images/MamahEti.png') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="font-bold text-xl text-accent-cream">Mamah Eti</h3>
                <p class="text-xs text-gray-300 uppercase tracking-widest mt-1">Pengampu Pawon</p>
            </div>

            <div class="w-full md:w-[28%] flex flex-col items-center group mt-8">
                <div class="rounded-3xl overflow-hidden w-full h-80 shadow-xl mb-4 relative">
                    <img src="{{ asset('images/PakdhePai.png') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="font-bold text-xl text-accent-cream">Pakde Pai</h3>
                <p class="text-xs text-gray-300 uppercase tracking-widest mt-1">Penasehat / Sesepuh</p>
            </div>

            <div class="w-full md:w-[28%] flex flex-col items-center group mt-8">
                <div class="rounded-3xl overflow-hidden w-full h-80 shadow-xl mb-4 relative">
                    <img src="{{ asset('images/CakYasin.png') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="font-bold text-xl text-accent-cream">Cak Yasin</h3>
                <p class="text-xs text-gray-300 uppercase tracking-widest mt-1">Juru Kunci</p>
            </div>

            <div class="w-full md:w-[28%] flex flex-col items-center group mt-8">
                <div class="rounded-3xl overflow-hidden w-full h-80 shadow-xl mb-4 relative">
                    <img src="{{ asset('images/CakHandoko.png') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="font-bold text-xl text-accent-cream">Cak Handoko</h3>
                <p class="text-xs text-gray-300 uppercase tracking-widest mt-1">Pramu Wedhang</p>
            </div>
        </div>
    </main>

    <footer class="bg-[#424d38]text-white pt-12 pb-8 border-t border-cream-600 mt-12">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center md:items-start gap-8">
            <div class="flex flex-col items-center md:items-start md:ml-12">
                 <img src="{{ asset('images/LogoFooter.png') }}" alt="Logo Footer" class="h-40 w-auto opacity-100">
            </div>
            <div class="text-sm font-light space-y-3 md:mr-40">
                <div class="flex items-center gap-3">
                    <i class="fas fa-phone"></i>
                    <span>+6285137101178</span>
                </div>
                <div class="flex items-center gap-3">
                    <a href="https://www.instagram.com/tomboan_?igsh=MWluMTRuMng1YnQ0NQ== "target="_blank" class="flex items-center gap-6 hover:opacity-75 transition">
                    <i class="fab fa-instagram"></i>
                    <span>tomboan_</span>
                    </a>
                </div>
                <div class="flex items-center gap-3">
                    <a href="http://127.0.0.1:8000/ "target="_blank" class="flex items-center gap-6 hover:opacity-75 transition">
                    <i class="fas fa-globe"></i>
                    <span>pertirtaantomboanngawonggo.id</span>
                  </a>
                </div>
                <div class="flex items-start gap-3 max-w-xs">
                    <a href="https://maps.app.goo.gl/udYmseRpBPvZAVQa8 "target="_blank" class="flex items-center gap-6 hover:opacity-75 transition">
                    <i class="fas fa-map-marker-alt mt-1"></i>
                    <span>Jln. Rabidin No.Dusun Rt 03 Rw 04, Nanasan, Ngawonggo, Kec Tajinan, Kab.Malang</span>
                   </a>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 mt-8">
            <div class="border-t border-cream border-opacity-80 pt-4 text-center">
                <p class="text-sm font-medium tracking-wide">
                    &copy; 2025 FV_UB – Situs Tomboan Ngawonggo
                </p>
            </div>
        </div>
    </footer>

</body>
</html>