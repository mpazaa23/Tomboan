<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan Tradisional - Pertirtaan Ngawonggo</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap" rel="stylesheet">
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
                        'decorative': ['"Cinzel Decorative"', 'serif'],
                        'jawa': ['"Jawa Palsu"', 'serif'], 
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-primary-green text-white font-sans antialiased bg-gradient-to-b from-[#65745A] via-[#56634C] to-[#424d38]">

    <header class="relative h-[80vh] w-full bg-cover bg-center" style="background-image: url('{{ asset('images/HeaderMakanan.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        
        <nav class="absolute top-0 left-0 w-full z-50 flex justify-between items-center px-8 py-6">
            <div class="flex items-center">
                <a href="{{ url('/Sejarah') }}" class="bg-white/20 hover:bg-white/40 backdrop-blur-sm rounded-full w-7 h-7 flex items-center justify-center transition border-2 border-white">
                    <i class="fas fa-arrow-left text-white"></i>
                </a>
                
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-30 w-auto ml-4 opacity-90">
            </div>
            
            <div class="hidden md:flex space-x-8 text-sm font-light tracking-wide text-white">
                <a href="{{ url('/Home') }}" class="hover:text-gray-300">Home</a>
                <a href="{{ url('/Sejarah') }}" class="font-bold underline underline-offset-4">Sejarah</a>
                <a href="{{ url('/Gallery') }}" class="hover:text-gray-300">Gallery</a>
                <a href="{{ url('/Contact') }}" class="hover:text-gray-300">Contact</a>
            </div>
        </nav>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4 pt-10">
            <h1 class="font-jawa text-5xl md:text-7xl text-white mb-12 leading-tight text-shadow-md tracking-wider">
                Makanan Tradisional
            </h1>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-16 md:py-24">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            
            <div class="rounded-xl overflow-hidden shadow-2xl h-[350px] md:h-[450px]">
                <img src="{{ asset('images/SayurSambal.png') }}" alt="Sajian Makanan Tradisional" class="w-full h-full object-cover transform hover:scale-105 transition duration-700">
            </div>

            <div class="space-y-6">
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-accent-cream leading-tight">
                    Makanan Tradisional<br>
                    “Sayur dan Sambal”
                </h2>

                <p class="text-sm md:text-base font-light leading-loose text-justify text-gray-100">
                    Hidangan tradisional khas Jawa dengan sajian sayuran rebus seperti kacang panjang, labu, tahu, dan tempe goreng yang dipadukan dengan berbagai jenis sambal. Sambal pedas dan segar dihidangkan dalam cobek, menambah cita rasa otentik yang khas dari masakan pedesaan ngawonggo.
                </p>
            </div>
        </div>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start mt-24">
            
            <div class="space-y-8">
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-accent-cream leading-tight">
                    Makanan ala Desa Situs<br>
                    Pertirtaan Ngawonggo
                </h2>

                <p class="text-sm md:text-base font-light leading-loose text-justify text-gray-100">
                    Tersaji lengkap dengan nasi jagung, sayur hijau, sambal pedas, tumis sayuran, hingga lauk sederhana khas pedesaan. Semua disajikan dengan wadah alami dari daun pisang dan anyaman bambu, menambah nuansa tradisional yang ramah lingkungan sekaligus menggugah selera.
                </p>

                <div class="space-y-6 text-sm md:text-base font-light leading-relaxed text-justify text-gray-200">
                    
                    <div>
                        <strong class="text-white block mb-1">1. Nasi Jagung (Nasi Ampok):</strong>
                        <p>
                            Nasi jagung adalah simbol ketahanan pangan. Di masa lalu (dan di beberapa daerah hingga kini), Jagung adalah alternatif yang lebih murah, lebih mudah tumbuh di lahan kering, dan lebih "merakyat". Rasanya yang khas dan teksturnya yang mawur (terurai) adalah kenangan akan kesederhanaan.
                        </p>
                    </div>

                    <div>
                        <strong class="text-white block mb-1">2. Sambal:</strong>
                        <p>
                            Ini adalah jiwa dari seluruh hidangan. Makanan "ndeso" seringkali sederhana. Disajikan di cobek menandakan ini sambal dadak—dibuat segar, bukan sambal botolan. Pedasnya adalah "tamparan" penyemangat agar lahap makan, tak peduli lauknya sesederhana apa.
                        </p>
                    </div>

                    <div>
                        <strong class="text-white block mb-1">3. Sayur Lodeh (Kuah Kuning):</strong>
                        <p>
                            Ini adalah masakan "memanfaatkan apa yang ada". Isinya bisa apa saja: nangka muda, labu siam, terong, kacang panjang—apapun yang sedang panen di kebun belakang rumah. Kuah santannya memberi rasa gurih dan "lemak" yang mewah pada hidangan yang serba sederhana ini. Ini adalah comfort food yang membuat nasi jagung kering jadi lebih mudah dinikmati.
                        </p>
                    </div>

                    <div>
                        <strong class="text-white block mb-1">4. Lalapan Rebus (Daun Singkong):</strong>
                        <p>
                            Ini adalah "salad"-nya orang desa. Daun singkong tumbuh liar di mana-mana. Cukup direbus, diperas, lalu disajikan. Fungsinya adalah sebagai penyeimbang rasa pedas dari sambal dan rasa gurih dari lodeh.
                        </p>
                    </div>

                    <div>
                        <strong class="text-white block mb-1">5. Oseng & Gorengan:</strong>
                        <p>
                            Lauk tumis oseng tempe, oseng pepaya muda, atau oseng kikil—adalah cara tercepat mengubah bahan sederhana jadi lauk penuh bumbu.
                        </p>
                    </div>

                </div>
            </div>

            <div class="rounded-xl overflow-hidden shadow-2xl h-full min-h-[500px] md:min-h-[800px] sticky top-8">
                <img src="{{ asset('images/AlaDesa.png') }}" alt="Makanan Ala Desa Ngawonggo" class="w-full h-full object-cover">
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mt-24">
            
            <div class="flex justify-center">
                <div class="rounded-xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition duration-500 w-full max-w-md">
                    <img src="{{ asset('images/JajananTomboan.png') }}" alt="Menu Suguhan Tomboan" class="w-full h-auto object-cover">
                </div>
            </div>

            <div class="space-y-4">
                <div class="relative w-full pb-[56.25%] rounded-2xl overflow-hidden shadow-2xl border-4 border-white/20 bg-black">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/7BPNzzDXEec" 
                        title="Resep Wedhang Tomboan" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>

        <section class="mt-24 mb-12 text-center">
            
            <div class="max-w-5xl mx-auto px-4 space-y-8">
                
                <h2 class="font-serif text-3xl md:text-5xl font-bold text-accent-cream tracking-wide">
                    Sejarah awal Tomboan
                </h2>

                <p class="text-sm md:text-base font-light leading-loose text-justify text-gray-100">
                    Awal mula gagasan Tomboan Ngawonggo lahir pada 2019–2020, ketika warga Dusun Nanasan, Desa Ngawonggo, Kecamatan Tajinan, Malang, merasa perlu menghadirkan sebuah ruang jamuan yang ramah lingkungan bagi para pengunjung Situs Petirtaan Ngawonggo. Inisiatif ini dipelopori oleh Rahmad Yasin atau akrab disapa Cak Yasin, bersama komunitas warga dan relawan. Nama “Tomboan” diambil dari kata Jawa tombo (obat), yang mencerminkan sajian minuman herbal serta pangan lokal menyehatkan. Sejak awal, gagasan ini bukanlah sekadar usaha kuliner, tetapi lebih kepada wadah menjaga tradisi jamuan khas Jawa dengan nuansa alami dan penuh makna.
                </p>

                <p class="text-sm md:text-base font-light leading-loose text-justify text-gray-100">
                    Tomboan mulai resmi dijalankan pada tahun 2020 dengan konsep unik sebagai ruang jamuan, bukan warung komersial. Prinsip utamanya ialah ramah lingkungan dan berbasis kearifan lokal. Semua peralatan makan terbuat dari bambu, daun, atau bahan yang bisa dipakai ulang tanpa plastik sekali pakai. Hidangan yang disajikan bersumber dari hasil bumi desa, antara lain singkong, jagung, tiwul, getuk, bothok, urap, hingga nasi jagung. Untuk minumannya, tersedia berbagai wedang rempah seperti jahe, serai, kelor, rosella, wedang cempoko, wedang telang, wedang ngawonggo dan wedang tomboan abang.
                </p>

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