<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budaya Situs Pertirtaan Ngawonggo</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
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
                        'primary-green': '#5F7156',   
                        'accent-cream': '#F3F6E8',   
                        'card-bg': '#EBEED9',        
                        'text-gold': 'rgba(244, 231, 189, 1)',     
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
    <style>
        
        .hero-title {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            letter-spacing: 2px;
        }
    </style>
</head>
<body class="antialiased font-sans text-white min-h-screen bg-gradient-to-b from-[#65745A] via-[#56634C] to-[#424d38]">

    <nav class="absolute top-0 left-0 w-full z-50 flex justify-between items-center px-8 py-6">
        <div class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-30 w-auto">
        </div>
        <div class="hidden md:flex space-x-8 text-sm font-light tracking-wide text-white">
            <a href="Home" class="{{ url('/Home') }}" class="hover:text-gray-300 underline underline-offset-4 transition">Home</a>
            <a href="Sejarah" class="{{ url('/Sejarah') }}" class="hover:text-gray-300 transition">Sejarah</a>
            <a href="Gallery" class="{{ url('/Gallery') }}" class="hover:text-gray-300">Gallery</a>
            <a href="Contact" class="{{ url('/Contact') }}" class="hover:text-gray-300">Contact</a>
        </div>
    </nav>

    <header class="relative h-screen w-full bg-cover bg-center " style="background-image: url('{{ asset('images/Header.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">
            <h1 class="font-jawa text-5xl md:text-7xl text-white mb-12 leading-tight text-shadow-md tracking-wider">
                BUDAYA SITUS<br>
                PERTIRTAAN NGAWONGGO
            </h1>
            <div class="absolute z-20 bottom-12 right-6 md:right-12 flex space-x-4">
             <button onclick="openModal()" class="bg-accent-cream text-primary-green font-semibold py-2 px-8 rounded-full hover:bg-white transition shadow-lg">
                Reservasi
         </button>
                <a href="https://forms.gle/Z4aHAZi6ut6bvgUD9" target="_blank" class="bg-gray-400 bg-opacity-50 border border-white text-white font-semibold py-2 px-8 rounded-full hover:bg-opacity-70 transition backdrop-blur-sm flex items-center justify-center">
                    Kritik dan Saran
                 </a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-16 space-y-24">
        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="rounded-xl overflow-hidden shadow-2xl">
                <img src="{{ asset('images/Menilik.png') }}" alt="Menilik Tomboan"
                 class="w-full h-full object-cover hover:scale-105 transition duration-700">
            </div>
            <div class="text-white space-y-6">
                <h2 class="font-serif text-4xl font-bold">Menilik Tomboan</h2>
                <div class="space-y-4 text-sm font-light leading-relaxed text-gray-100">
                    <p>
                        <strong class="font-semibold">Tomboan</strong> — Tempat singgah yang menghadirkan kehangatan tradisi.
                        Didirikan pada tahun 2020, Tomboan terinspirasi dari wedang herbal khas.
                    </p>
                    <p>
                        <strong class="font-semibold">Situs Pertirtaan Ngawonggo</strong><br>
                        Tomboan adalah ruang edukasi tentang budaya dan kehidupan yang bisa langsung dipraktikkan.
                    </p>
                    <p>
                        Dengan konsep "Kotak Asih", setiap pengunjung bisa menikmati sajian, mengajarkan arti berbagi, menyayangi, dan menghargai.
                    </p>
                </div>
            </div>
        </section>

       <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
            <div class="lg:col-span-7 flex flex-col justify-center space-y-8 py-6">
                <div class="space-y-6">
                    <h2 class="font-serif text-4xl md:text-5xl font-bold text-accent-cream">Tentang Tomboan</h2>
                    <p class="text-sm md:text-base font-light leading-loose text-justify text-gray-100">
                        Tomboan, dalam bahasa jawa berarti "obat", adalah sebuah sarana edukasi yang bertujuan menjadi obat lelah bagi pengunjung. Lebih dari sekedar tempat wisata, Tomboan adalah ruang pembelajaran tentang kehidupan, dimana tradisi dapat dipelajari dan dipraktekkan secara langsung. Menerapkan sistem "Kotak Asih", pengunjung tidak perlu mengkhawatirkan tarif. Tomboan hadir untuk mengajarkan bagaimana saling menyayangi dan mengasihi tanpa memandang angka, kembali menyatu dengan alam dan ciptaan Tuhan lainnya.
                    </p>
                </div>

                <div class="grid grid-cols-3 gap-4 md:gap-6">
                    <div class="bg-accent-cream text-primary-green p-4 md:p-6 rounded-2xl overflow-hidden text-center shadow-2xl items-center transform hover:scale-[1.10] transition duration-300">
                        <div class="mb-3">
                             <i class="fas fa-brain text-[#D9304D] text-3xl md:text-4xl"></i>
                        </div>
                        <h3 class="font-bold text-lg md:text-xl mb-2">Asah</h3>
                        <p class="text-[10px] md:text-xs leading-tight">Mengasah Kecerdasan dan Ketrampilan</p>
                    </div>

                    <div class="bg-accent-cream text-primary-green p-4 md:p-6 rounded-2xl overflow-hidden text-center shadow-2xl items-center transform hover:scale-[1.10] transition duration -300">
                        <div class="mb-3">
                            <i class="fas fa-heart text-[#D9304D] text-3xl md:text-4xl"></i>
                        </div>
                        <h3 class="font-bold text-lg md:text-xl mb-2">Asih</h3>
                        <p class="text-[10px] md:text-xs leading-tight">Memberikan Kasih sayang dan Perhatian</p>
                    </div>

                    <div class="bg-accent-cream text-primary-green p-4 md:p-6 rounded-2xl overflow-hidden text-center shadow-2xl items-center transform hover:scale-[1.10] transition duration-300">
                        <div class="mb-3">
                             <i class="fas fa-hand-holding-heart text-[#D9304D] text-3xl md:text-4xl"></i>
                        </div>
                        <h3 class="font-bold text-lg md:text-xl mb-2">Asuh</h3>
                        <p class="text-[10px] md:text-xs leading-tight">Membimbing pembentukan karakter</p>
                    </div>
                </div>

            </div>

            <div class="lg:col-span-5 h-full min-h-[400px]">
                <div class="rounded-xl overflow-hidden shadow-2xl h-full w-full">
                    <img src="{{ asset('images/Tentang.png') }}" alt="Gapura Tomboan" class="w-full h-full object-cover">
                </div>
            </div>

        </section>

        <section class="space-y-12">
            <div class="text-center space-y-4">
                <h2 class="font-serif text-4xl md:text-5xl font-bold text-accent-cream">
                    Situs Pertirtaan Ngawonggo
                </h2>
                <p class="text-sm md:text-base font-light text-gray-200 max-w-2xl mx-auto leading-relaxed">
                    Menyelami jejak sejarah dan kearifan lokal yang terpelihara selama berabad-abad.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <div class="group relative h-80 rounded-2xl overflow-hidden shadow-xl cursor-pointer">
                    <img src="{{ asset('images/Group 38.png') }}" alt="Makanan Tradisional" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 transition-opacity group-hover:bg-opacity-40"></div>
                    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6 space-y-3">
                        <h3 class="font-serif text-2xl font-bold text-white drop-shadow-md">Makanan Tradisional</h3>
                        <p class="text-xs md:text-sm text-gray-100 font-light leading-relaxed">
                            Jelajahi kekayaan kuliner tradisional yang menggugah selera, khas situs partirtaan Ngawonggo. Setiap gigitan menghadirkan cerita budaya yang tak terlupakan.
                        </p>
                    </div>
                </div>

                <div class="group relative h-80 rounded-2xl overflow-hidden shadow-xl cursor-pointer">
                    <img src="{{ asset('images/Group 36.png') }}" alt="Sejarah Petirtaan" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 transition-opacity group-hover:bg-opacity-40"></div>
                    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6 space-y-3">
                        <h3 class="font-serif text-2xl font-bold text-white drop-shadow-md">Sejarah Petirtaan</h3>
                        <p class="text-xs md:text-sm text-gray-100 font-light leading-relaxed">
                            Fungsi spiritual dan sosial petirtaan dalam kehidupan masyarakat jawa kuno.
                        </p>
                    </div>
                </div>

                <div class="group relative h-80 rounded-2xl overflow-hidden shadow-xl cursor-pointer">
                    <img src="{{ asset('images/Group 37.png') }}" alt="Relief & Ukiran" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 transition-opacity group-hover:bg-opacity-40"></div>
                    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6 space-y-3">
                        <h3 class="font-serif text-2xl font-bold text-white drop-shadow-md">Relief & Ukiran</h3>
                        <p class="text-xs md:text-sm text-gray-100 font-light leading-relaxed">
                            Makna simbolis dalam setiap ukiran yang menceritakan kehidupan dimasa lampau.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section class="space-y-8 md:space-y-12">
            
            <div class="text-center space-y-4">
                <h2 class="font-serif text-4xl md:text-5xl font-bold text-accent-cream">
                    Suguhan Tomboan
                </h2>
                <p class="text-sm md:text-base font-light text-gray-200 max-w-4xl mx-auto leading-relaxed px-4 text-justify md:text-center">
                    Tomboan menyediakan hidangan yang bahan-bahannya berasal dari hasil alam. Pengelola Tomboan memanfaatkan sumber daya alam yang ada, untuk memberikan suguhan yang tradisional dan tetap sehat, tanpa menggunakan bahan tambahan apapun, selayaknya hidangan tradisional. Di tengah kemudahan mendapatkan bahan-bahan pangan, bahkan dalam mempertahankan makanan secara cepat dan instan, Tomboan ada untuk menghadirkan kembali cita rasa nusantara dengan menumbuhkan kesederhanaan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-start">

                <div class="rounded-2xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition duration-500">
                    <img src="{{ asset('images/Suguhan.png') }}" alt="Kolase Makanan Tradisional" class="w-full h-auto object-cover">
                </div>

                <div class="rounded-2xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition duration-500">
                    <img src="{{ asset('images/SuguhanTomboan.png') }}" alt="Menu Suguhan Tomboan" class="w-full h-auto object-cover">
                </div>
            </div>
        </section>

        <section>
            <div class="bg-[#E1E8D5] rounded-[3rem] p-8 md:p-16 shadow-lg text-[#1a1a1a]">
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">

                    <div class="lg:col-span-2 space-y-6">
                        
                        <div class="flex items-center gap-4">
                            <i class="fas fa-leaf text-4xl text-black"></i>
                            <h2 class="font-serif text-3xl md:text-4xl font-bold">Zero Waste System</h2>
                        </div>

                        <div class="space-y-4 text-sm md:text-base font-medium leading-relaxed text-gray-800 text-justify md:text-left">
                            <p>
                                Ada larangan tegas bagi pengunjung untuk membawa makanan dan minuman dari luar, terutama yang berkemasan plastik, karena sistem zero waste yang dianut pihak setempat.
                            </p>
                            <p>
                                Hidangan yang mengandung daging hanya akan disediakan ketika hari-hari tertentu saja, sebagai bentuk kesederhanaan dan penghormatan terhadap alam.
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-8 pt-4">
                            <div class="flex items-center gap-3">
                                <div class="relative">
                                    <i class="fas fa-shopping-bag text-2xl text-gray-400"></i>
                                    <i class="fas fa-ban absolute -top-1 -left-1 text-3xl text-red-500 opacity-80"></i>
                                </div>
                                <span class="text-sm font-semibold text-gray-600">No Plastic</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <i class="fas fa-leaf text-2xl text-[#6aa84f]"></i>
                                <span class="text-sm font-semibold text-gray-600">Natural Ingredients</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <i class="fas fa-recycle text-2xl text-[#6aa84f]"></i>
                                <span class="text-sm font-semibold text-gray-600">Sustainable</span>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-1 h-full">
                        <div class="rounded-2xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition duration-500">
                        <div class="bg-[#B3BEA4] rounded-3xl p-10 h-full flex flex-col items-center justify-center text-center space-y-4 shadow-inner transform hover:scale-[1.13] transition duration-500">
                            <div class="border-2 border-[#8B5E3C] rounded-lg p-2 mb-2">
                                <i class="fas fa-utensils text-4xl text-[#8B5E3C]"></i>
                            </div>
                            
                            <h3 class="font-serif text-2xl font-bold text-[#8B5E3C]">Kotak Asih System</h3>
                            
                            <p class="text-sm text-[#5c4033] font-medium leading-relaxed">
                                Tidak ada tarif tetap - berikan sesuai kemampuan dan keikhlasan hati
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-16 items-center py-12">
            
            <div class="space-y-8">
                <div>
                    <h2 class="font-serif text-4xl md:text-5xl font-bold text-[#EBEED9] opacity-90">
                        Rencang Tomboan
                    </h2>
                    <h2 class="font-serif text-4xl md:text-5xl font-bold text-white mt-2 drop-shadow-md">
                        Rahmad Yasin
                    </h2>
                </div>

                <div class="space-y-6 text-sm md:text-base font-light leading-loose text-gray-100 text-justify">
                    <p>
                        adalah sosok yang jantungnya terpaut erat pada tanah kelahirannya. Lahir dan besar di Dusun Nanasan, Desa Ngawonggo, Kecamatan Tajinan, Kabupaten Malang, ia memilih mengabdikan diri untuk mengelola tomboan tanpa sedikit pun mengharapkan ketidakseimbangan.
                    </p>
                    <p>
                        Pernah merantau dan bekerja di Bali, namun panggilan jiwa untuk kembali ke desa begitu kuat. Baginya, melestarikan kearifan lokal dan menjaga situs bersejarah bukan sekadar tugas, melainkan wujud cinta yang tulus pada warisan leluhur.
                    </p>
                    <p>
                        Setiap sudut tomboan yang terawat rapi menjadi kebanggaan sekaligus kebahagiaan terdalam. Ia percaya, ringkasnya adalah harta yang sesungguhnya, dan nilai itu ia wariskan pada generasi muda serta pada masyarakat sekitar.
                    </p>
                </div>
            </div>

            <div class="flex justify-center lg:justify-end">
                <div class="rounded-3xl overflow-hidden shadow-2xl w-full max-w-md h-[500px] md:h-[600px]">
                    <img src="{{ asset('images/RencangTomboan.png') }}" alt="Rahmad Yasin Bermain Suling" 
                         class="w-full h-full object-cover hover:scale-105 transition duration-700">
                </div>
            </div>
        </section>

        <section class="bg-card-bg text-primary-green rounded-3xl p-8 md:p-12 shadow-xl">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <div class="rounded-lg overflow-hidden h-64 md:h-full">
                    <img src="{{ asset('images/Congklak.png') }}" alt="Congklak" class="w-full h-full object-cover">
                </div>
                <div class="flex flex-col items-center space-y-4">
                    <div class="bg-[#D6BC96] p-4 rounded shadow-inner w-full max-w-[300px] transform hover:scale-105 transition">
                         <img src="{{ asset('images/Mancala.png') }}" alt="Mancala Box" class="w-full rounded">
                    </div>
                    <a href="https://www.crazygames.co.id/game/mancala-classic" target="_blank" class="bg-[#4a4a3a] text-white px-8 py-3 rounded shadow hover:bg-black transition flex items-center gap-2 no-underline">
        <i class="fas fa-play"></i> 
        <span>Klik! Start Game</span>
    </a>
</div>
                <div class="space-y-4">
                    <h2 class="font-serif text-3xl font-bold">Game Tradisional<br>“Congklak”</h2>
                    <p class="text-sm leading-relaxed text-gray-700 text-justify">
                        Congklak adalah suatu permainan tradisional yang dikenal dengan berbagai macam nama di seluruh Indonesia. Biasanya dalam permainan, sejenis cangkang kerang digunakan sebagai biji congklak dan jika tidak ada, kadang kala digunakan juga biji-bijian dari tumbuh-tumbuhan dan batu-batu kecil.
                    </p>
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

    <div id="reservationModal" class="fixed inset-0 z-[100] hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        
        <div class="fixed inset-0 bg-black bg-opacity-70 transition-opacity backdrop-blur-sm" onclick="closeModal()"></div>

        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            
            <div class="relative transform overflow-hidden rounded-2xl bg-[#F3F6E8] text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border-4 border-[#65745A]">
                
                <div class="bg-[#65745A] px-4 py-4 sm:px-6 flex justify-between items-center">
                    <h3 class="text-lg font-serif font-bold text-[#F3F6E8] tracking-wide" id="modal-title">
                        Pilih Metode Reservasi
                    </h3>
                    <button type="button" onclick="closeModal()" class="text-[#F3F6E8] hover:text-white focus:outline-none">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>

                <div class="px-6 py-6">
                    
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="h-px bg-gray-400 flex-1"></div>
                            <span class="px-3 text-sm text-gray-500 font-semibold">Isi Form Langsung</span>
                            <div class="h-px bg-gray-400 flex-1"></div>
                        </div>

                        <form action="{{ route('reservasi.store') }}" method="POST" class="space-y-4">

                            @csrf 
                            
                            <div>
                                <label for="name" class="block text-sm font-medium text-[#485741]">Nama Lengkap</label>
                                <input type="text" name="nama" id="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#65745A] focus:ring focus:ring-[#65745A] focus:ring-opacity-50 p-2 text-black">
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="visit_date" class="block text-sm font-medium text-[#485741]">Tanggal</label>
                                    <input type="date" name="tanggal_reservasi" id="tanggal_reservasi" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#65745A] focus:ring focus:ring-[#65745A] focus:ring-opacity-50 p-2 text-black">
                                </div>
                                <div>
                                    <label for="pax" class="block text-sm font-medium text-[#485741]">Jumlah Orang</label>
                                    <input type="number" name="jumlah_pengunjung" id="jumlah_pengunjung" min="1" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#65745A] focus:ring focus:ring-[#65745A] focus:ring-opacity-50 p-2 text-black">
                                </div>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-[#485741]">No. WhatsApp</label>
                                <input type="text" name="no_tlpn" id="no_tlpn" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#65745A] focus:ring focus:ring-[#65745A] focus:ring-opacity-50 p-2 text-black">
                            </div>

                            <button type="submit" class="w-full bg-[#65745A] text-white font-bold py-2 px-4 rounded-lg hover:bg-[#485741] transition duration-300 shadow-md">
                                Kirim Reservasi
                            </button>
                        </form>
                    </div>

                    <div class="relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center">
                            <span class="bg-[#F3F6E8] px-2 text-sm text-gray-500">Atau tanya dulu via WhatsApp</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="https://wa.me/6285856833187?text=Halo%20Tomboan,%20saya%20ingin%20reservasi." target="_blank" class="flex items-center justify-center w-full border-2 border-green-600 text-green-700 bg-white font-bold py-2 px-4 rounded-lg hover:bg-green-50 transition duration-300">
                            <i class="fab fa-whatsapp text-xl mr-2"></i> Chat WhatsApp
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div id="successAlert" class="fixed top-5 right-5 bg-green-100 border text-green-700 px-4 py-3 rounded shadow-lg z-[110] transition-opacity duration-500" role="alert">
        <strong class="font-bold">Reservasi Berhasil!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif

    <script>
        function openModal() {
            document.getElementById('reservationModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('reservationModal').classList.add('hidden');
        }
        const alertBox = document.getElementById('successAlert');
         if (alertBox) {
            setTimeout(function() {

                alertBox.style.opacity = '0';

                setTimeout(function() {
                    alertBox.style.display = 'none';
                }, 500);

            }, 5000);
        }
    </script>
</body>
</html>