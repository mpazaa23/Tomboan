<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relief & Ukiran - Pertirtaan Ngawonggo</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

     <style>
        @font-face {
            font-family: 'Jawa Palsu';
            src: url("{{ asset('fonts/JAWAPALSU.TTF') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        .text-shadow-md {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
        }
    </style>


    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-green': '#65745A',   /* Warna hijau background utama */
                        'dark-green': '#485741',      /* Warna footer */
                        'accent-cream': '#F3F6E8',
                    },
                    fontFamily: {
                        'serif': ['"Playfair Display"', 'serif'],
                        'sans': ['"Poppins"', 'sans-serif'],
                        'jawa': ['"Jawa Palsu"', 'serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-primary-green text-white font-sans antialiased bg-gradient-to-b from-[#65745A] via-[#56634C] to-[#424d38]">

    <header class="relative h-[70vh] w-full bg-cover bg-center" style="background-image: url('{{ asset('images/HeaderRelief.webp') }}');">
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

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4 pt-10">
            <h1 class="font-jawa text-5xl md:text-7xl text-white mb-12 leading-tight text-shadow-md tracking-wider">
                Relief & Ukiran
            </h1>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-16 md:py-24">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            
            <div class="rounded-xl overflow-hidden shadow-2xl h-[350px] md:h-[450px]">
                <img src="{{ asset('images/ArcaNandi.png') }}" alt="Arca Nandi dan Makara" class="w-full h-full object-cover transform hover:scale-105 transition duration-700">
            </div>

            <div class="space-y-6">
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-accent-cream leading-tight">
                    Arca Nandi dan Arca Makara.
                </h2>

                <ul class="space-y-4 text-sm md:text-base font-light leading-relaxed text-gray-100 list-disc pl-5 marker:text-accent-cream">
                    <li class="pl-2">
                        Arca di sebelah kiri (kepala hewan) <i class="fas fa-arrow-right text-xs mx-1"></i> sangat mirip dengan arca Nandi, yaitu lembu suci sebagai wahana (kendaraan) Dewa Siwa dalam tradisi Hindu. Nandi biasanya ditempatkan menghadap lingga atau area pemujaan Siwa.
                    </li>
                    <li class="pl-2">
                        Arca di sebelah kanan (wajah dengan mata menonjol) <i class="fas fa-arrow-right text-xs mx-1"></i> kemungkinan adalah arca Makara atau Kala.
                    </li>
                    <li class="pl-2">
                        <strong>Makara:</strong> makhluk mitologi penjaga gerbang, sering dipahat di sisi tangga atau pintu masuk candi.
                    </li>
                    <li class="pl-2">
                        <strong>Kala:</strong> sosok raksasa penolak bala yang biasanya dipahat di atas pintu candi.
                    </li>
                </ul>
            </div>
        </div>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start mt-24">
            
            <div class="rounded-xl overflow-hidden shadow-2xl h-[500px] md:h-[650px] sticky top-8">
                <img src="{{ asset('images/Pancuran.png') }}" alt="Pancuran Suci Petirtaan" class="w-full h-full object-cover transform hover:scale-105 transition duration-700">
            </div>
  
            <div class="space-y-8">
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-accent-cream leading-tight">
                    Pancuran Suci
                </h2>

                <div class="space-y-3">
                    <h3 class="text-lg font-semibold text-white border--4 border-accent-cream pl-3">Bentuk Ornamen</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm md:text-base font-light text-gray-200 marker:text-accent-cream text-justify">
                        <li>
                            Pada dinding batu terdapat pahatan motif sulur dan makara.
                        </li>
                        <li>
                            Pola spiral dan lengkungan tersebut khas ornamen Hindu-Buddha, melambangkan air suci (tirta amerta) sebagai sumber kehidupan.
                        </li>
                    </ul>
                </div>

                <div class="space-y-3">
                    <h3 class="text-lg font-semibold text-white border--4 border-accent-cream pl-3">Fungsi</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm md:text-base font-light text-gray-200 marker:text-accent-cream text-justify">
                        <li>
                            Situs ini merupakan petirtaan atau tempat pancuran air suci.
                        </li>
                        <li>
                            Dalam kepercayaan Hindu-Buddha Jawa, air dari petirtaan digunakan untuk ritual penyucian dan dianggap memiliki kekuatan spiritual.
                        </li>
                        <li>
                            Lokasinya biasanya dekat dengan mata air, tempat pertapaan, atau area sakral lain.
                        </li>
                    </ul>
                </div>

                <div class="space-y-3">
                    <h3 class="text-lg font-semibold text-white border--4 border-accent-cream pl-3">Konteks Sejarah</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm md:text-base font-light text-gray-200 marker:text-accent-cream text-justify">
                        <li>
                            Petirtaan Ngawonggo diduga peninggalan era Majapahit (abad 13–15 M), ketika tradisi petirtaan berkembang pesat di Jawa Timur.
                        </li>
                        <li>
                            Peninggalan serupa dapat ditemukan di Petirtaan Jolotundo (Mojokerto) dan Petirtaan Belahan.
                        </li>
                        <li>
                            Walaupun bentuknya sederhana, pahatan ini menegaskan peran penting air dalam spiritualitas masyarakat Jawa kuno.
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start mt-24 pb-12">
            
            <div class="space-y-6 sticky top-8">
                <div class="rounded-xl overflow-hidden shadow-2xl h-[300px] md:h-[350px]">
                    <img src="{{ asset('images/ArcaKala.png') }}" alt="Detail Arca Kala" class="w-full h-full object-cover transform hover:scale-105 transition duration-700">
                </div>
                <div class="rounded-xl overflow-hidden shadow-2xl h-[300px] md:h-[350px]">
                    <img src="{{ asset('images/ArcaKala2.png') }}" alt="Pemandangan Petirtaan" class="w-full h-full object-cover transform hover:scale-105 transition duration-700">
                </div>
            </div>

            <div class="space-y-8">
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-accent-cream leading-tight">
                    Arca Kala
                </h2>

                <div class="space-y-3">
                    <h3 class="text-lg font-semibold text-white border--4 border-accent-cream pl-3">Bentuk Ornamen</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm md:text-base font-light text-gray-200 marker:text-accent-cream text-justify">
                        <li>
                            Pahatan terlihat seperti wajah dengan rongga mata, hidung, dan mulut.
                        </li>
                        <li>
                            Ini kemungkinan adalah arca Kala (raksasa penolak bala) yang ditempatkan sebagai sumber air, atau makara sebagai penjaga pancuran.
                        </li>
                        <li>
                            Kehadiran lumut dan aliran air menambah kesan alami sekaligus sakral.
                        </li>
                    </ul>
                </div>

                <div class="space-y-3">
                    <h3 class="text-lg font-semibold text-white border--4 border-accent-cream pl-3">Fungsi</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm md:text-base font-light text-gray-200 marker:text-accent-cream text-justify">
                        <li>
                            Air yang keluar dari mulut atau bagian wajah arca dianggap tirta amerta (air kehidupan) dalam tradisi Hindu-Buddha.
                        </li>
                        <li>
                            Biasanya digunakan untuk ritual penyucian (mandi suci, membersihkan diri, atau upacara keagamaan).
                        </li>
                        <li>
                            Dalam kepercayaan lokal, air ini sering dianggap air suci yang membawa berkah dan keselamatan.
                        </li>
                    </ul>
                </div>

                <div class="space-y-3">
                    <h3 class="text-lg font-semibold text-white border--4 border-accent-cream pl-3">Konteks Sejarah</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm md:text-base font-light text-gray-200 marker:text-accent-cream text-justify">
                        <li>
                            Pahatan semacam ini sering ditemukan di petirtaan peninggalan Majapahit, misalnya di Jolotundo atau Belahan.
                        </li>
                        <li>
                            Arca Kala atau makara sebagai pancuran melambangkan bahwa air bukan hanya unsur alam, tetapi juga bagian dari kekuatan kosmis yang melindungi umat manusia.
                        </li>
                    </ul>
                </div>
            </div>
        </section>

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
                    <a href="http://127.0.0.1:8000/Home "target="_blank" class="flex items-center gap-6 hover:opacity-75 transition">
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