<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah - Situs Pertirtaan Ngawonggo</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">

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
                        'primary-green': '#65745A',   
                        'dark-green': '#485741',      
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

    <header class="relative h-[80vh] w-full bg-cover bg-center" style="background-image: url('{{ asset('images/HeaderSejarah.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-40 line-center"></div>
        
        <nav class="absolute top-0 left-0 w-full z-50 flex justify-between items-center px-8 py-6">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="bg-white/20 hover:bg-white/40 backdrop-blur-sm rounded-full w-7 h-7 flex items-center justify-center transition border-2 border-white">
                    <i class="fas fa-arrow-left text-white"></i>
                </a>
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-13 w-auto ml-4 opacity-100">
            </div>
            
            <div class="hidden md:flex space-x-8 text-sm font-light tracking-wide text-white">
                <a href="{{ url('/Home') }}" class="hover:text-gray-300 transition ">Home</a>
                <a href="{{ url('/Sejarah') }}" class="font-bold underline underline-offset-4">Sejarah</a>
                <a href="{{ url('/Gallery') }}" class="hover:text-gray-300">Gallery</a>
                <a href="{{ url('/Contact') }}" class="hover:text-gray-300">Contact</a>
            </div>
        </nav>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">
            <h1 class="font-jawa text-5xl md:text-7xl text-white mb-12 leading-tight text-shadow-md tracking-wider">
                Tentang<br>
                Situs Pertirtaan Ngawonggo
            </h1>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-16 space-y-24">

        <section class="grid grid-cols-1 md:grid-cols-3 gap-12 text-gray-100">
            
            <div class="space-y-4">
                <h2 class="font-serif text-3xl font-bold border-b-2 border-white/30 pb-2 inline-block transform hover:scale-[1.30] transition duration-500">Visi</h2>
                <p class="text-sm font-light leading-relaxed text-justify">
                    Melestarikan warisan budaya, baik benda maupun tak benda, sebagai identitas dan kekuatan masyarakat Ngawonggo.
                </p>
            </div>

            <div class="space-y-4">
                <h2 class="font-serif text-3xl font-bold border-b-2 border-white/30 pb-2 inline-block transform hover:scale-[1.30] transition duration-500">Misi</h2>
                <p class="text-sm font-light leading-relaxed text-justify">
                    Menjaga dan mempertahankan keaslian budaya lokal, mengelola situs sejarah, serta memperkenalkan tradisi melalui pemberdayaan ekonomi masyarakat.
                </p>
            </div>

            <div class="space-y-4">
                <h2 class="font-serif text-3xl font-bold border-b-2 border-white/30 pb-2 inline-block transform hover:scale-[1.30] transition duration-500">Tujuan</h2>
                <p class="text-sm font-light leading-relaxed text-justify">
                    Menggali, melestarikan, dan mengembangkan untuk memperkuat identitas, memperkokoh persatuan, serta menjadikan budaya sebagai tatanan kehidupan masyarakat. Selain itu, mendorong lahirnya kegiatan seni, pariwisata berbasis budaya, dan kerja sama dengan berbagai pihak demi kemajuan Desa Ngawonggo.
                </p>
            </div>

        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            
            <div class="rounded-xl overflow-hidden shadow-2xl h-[400px]">
                <img src="{{ asset('images/NilaiKebudayaan.png') }}" alt="Papan Cagar Budaya" class="w-full h-full object-cover">
            </div>

            <div class="space-y-8">
                <h2 class="font-serif text-4xl md:text-5xl font-bold">Nilai Kebudayaan</h2>
                <p class="text-sm md:text-base font-light leading-loose text-justify text-gray-100">
                    Situs ini tidak hanya warisan arkeologis, tetapi juga ruang ekowisata edukatif, di mana pengunjung bisa belajar mengenai sistem air kuno, ritual tradisional, dan nilai pelestarian rasa hormat terhadap lingkungan dan budaya. Peranan aktif masyarakat lokal dalam merawat dan menjaga situs membuktikan upaya pelestarian berbasis komunitas yang mampu berlangsung tanpa dominasi komersial.
                </p>
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            
            <div class="space-y-6">
                <h2 class="font-serif text-4xl md:text-5xl font-bold text-accent-cream">Definisi Tomboan</h2>
                
                <div class="text-sm md:text-base font-light leading-loose text-justify text-gray-100 space-y-6">
                    <p>
                        Tomboan Ngawonggo muncul sebagai ruang jamuan yang dibangun secara swadaya oleh masyarakat sekitar, bertujuan menjamu pengunjung situs peninggalan sejarah—Situs Petirtaan Ngawonggo—sebagaimana “ ruang tamu ”, sedangkan situs itu sendiri adalah “ orang orang tua ”.
                    </p>
                    <p>
                        Istilah Tomboan berasal dari bahasa Jawa yang berarti “ obat ”, mengacu pada wedang (minuman herbal) dari tumbuhan lokal yang berfungsi sebagai penyegar bagi jiwa dan raga.
                    </p>
                </div>

                <div class="pt-4">
                    <a href="{{ url('/MakananTradisional') }}" class="bg-[#F3F6E8] text-[#485741] font-bold py-3 px-8 rounded-full shadow-lg hover:bg-white hover:scale-105 transition duration-300 flex items-center gap-3 w-fit no-underline">
                          <i class="fas fa-eye text-lg"></i>
                        <span>Selanjutnya</span>
                  </a>
                </div>
            </div>

            <div class="rounded-xl overflow-hidden shadow-2xl h-[350px] md:h-[450px]">
                <img src="{{ asset('images/DefinisiTomboan.png') }}" alt="Wedang Tomboan" class="w-full h-full object-cover">
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            
            <div class="rounded-xl overflow-hidden shadow-2xl h-[450px] md:h-[550px]">
                <img src="{{ asset('images/ReliefUkiran.png') }}" alt="Relief dan Ukiran" class="w-full h-full object-cover">
            </div>

            <div class="space-y-8">
                <h2 class="font-serif text-4xl md:text-5xl font-bold text-accent-cream">Relief & Ukiran</h2>
                
                <div class="space-y-6 text-sm md:text-base font-light text-gray-100">
                    
                    <div class="space-y-2">
                        <h3 class="font-bold text-white text-lg">Keindahan yang Menyentuh Jiwa</h3>
                        <p class="leading-relaxed text-justify opacity-90">
                            Setiap sudut menyimpan pesona yang memikat mata dan hati. Perpaduan alam, sejarah, dan seni menghadirkan harmoni yang sekaligus menenangkan mengagumkan.
                        </p>
                    </div>

                    <div class="space-y-2">
                        <h3 class="font-bold text-white text-lg">Relief yang Bercerita</h3>
                        <p class="leading-relaxed text-justify opacity-90">
                            Pahatan di dinding batu bukan sekedar hiasan, melainkan kisah abadi tentang kehidupan, kepercayaan, dan budaya masa lampau. Setiap relief adalah jendela menuju peradaban yang pernah berjaya.
                        </p>
                    </div>

                    <div class="space-y-2">
                        <h3 class="font-bold text-white text-lg">Ukiran yang Sarat Makna</h3>
                        <p class="leading-relaxed text-justify opacity-90">
                            Motif-motif indah pada kayu, batu menggambarkan filosofi kehidupan dan kearifan lokal. Kehalusan detailnya menjadi bukti ketekunan serta warisan seni yang patut dilestarikan.
                        </p>
                    </div>

                </div>

                <div class="pt-2">
                    <a href="{{ url('/ReliefUkiran') }}" class="bg-[#F3F6E8] text-[#485741] font-bold py-3 px-8 rounded-full shadow-lg hover:bg-white hover:scale-105 transition duration-300 flex items-center gap-3 w-fit no-underline">
                        <i class="fas fa-eye text-lg"></i>
                        <span>Selanjutnya</span>
                  </a>
                </div>
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            
            <div class="space-y-8">
                <h2 class="font-serif text-4xl md:text-5xl font-bold text-accent-cream">Pengelola Situs</h2>
                
                <p class="text-sm md:text-base font-light leading-loose text-justify text-gray-100">
                    "Pengelola Situs" untuk tempat keramat seperti Pertirtaan Ngawonggo itu perannya jauh lebih vital dari sekadar penjaga tiket. Mereka adalah juru rawat sekaligus penerjemah warisan. Tujuan utama mereka adalah menjaga keseimbangan: secara fisik, mereka merawat batu-batu andesit agar tidak hancur oleh lumut atau dirusak oleh pengunjung; namun secara kultural, mereka adalah juru cerita. Merekalah yang memegang knowledge management lokal—sejarah, makna, dan fungsi ritual yang mengubah tumpukan batu bisu itu menjadi kisah yang hidup.
                </p>

                <div class="pt-2">
                    <a href="{{ url('/PengelolaSitus') }}" class="bg-[#F3F6E8] text-[#485741] font-bold py-3 px-8 rounded-full shadow-lg hover:bg-white hover:scale-105 transition duration-300 flex items-center gap-3 w-fit no-underline">
                        <i class="fas fa-eye text-lg"></i>
                        <span>Selanjutnya</span>
                    </a>
                </div>
            </div>

            <div class="rounded-xl overflow-hidden shadow-2xl h-[350px] md:h-[450px]">
                <img src="{{ asset('images/Pengelola.png') }}" alt="Pengelola Situs Ngawonggo" class="w-full h-full object-cover">
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