<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Pertirtaan Ngawonggo</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <style>
        @font-face {
            font-family: 'Jawa Palsu';
            src: url("{{ asset('fonts/JAWAPALSU.TTF') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
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
                        'decorative': ['"Cinzel Decorative"', 'serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="antialiased font-sans text-white min-h-screen bg-gradient-to-b from-[#65745A] via-[#56634C] to-[#424d38]">

    <header class="relative h-[80vh] w-full bg-cover bg-center" style="background-image: url('{{ asset('images/HeaderContact.jpeg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        
        <nav class="absolute top-0 left-0 w-full z-50 flex justify-between items-center px-8 py-6">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="bg-white/20 hover:bg-white/40 backdrop-blur-sm rounded-full w-7 h-7 flex items-center justify-center transition border-2 border-white">
                    <i class="fas fa-arrow-left text-white"></i>
                </a>
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-13 w-auto ml-4 opacity-90">
            </div>
            
            <div class="hidden md:flex space-x-8 text-sm font-light tracking-wide text-white">
                <a href="{{ url('/Home') }}" class="hover:text-gray-300">Home</a>
                <a href="{{ url('/Sejarah') }}" class="hover:text-gray-300">Sejarah</a>
                <a href="{{ url('/Gallery') }}" class="hover:text-gray-300">Gallery</a>
                <a href="{{ url('/Contact') }}" class="font-bold underline underline-offset-4">Contact</a>
            </div>
        </nav>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4 pt-10">
            <h1 class="font-jawa text-5xl md:text-7xl text-white tracking-widest drop-shadow-xl mb-2">
                Hubungi Kami
            </h1>
            <p class="font-serif italic text-lg opacity-90"></p>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-16 mt-8 relative z-20">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
            
            <div class="md:col-span-2 lg:col-span-1 bg-[#EBEED9] text-[#485741] p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition duration-500 group">
                <div class="w-14 h-14 bg-[#65745A] rounded-full flex items-center justify-center mb-6 group-hover:bg-[#485741] transition">
                    <i class="fas fa-phone-alt text-white text-2xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-4 uppercase tracking-wider">Telepon / WhatsApp</h3>
                <div class="space-y-2 font-medium">
                    <p class="flex items-center gap-3">
                    <span class="bg-white/50 px-2 py-1 rounded text-sm">Admin 1</span> 
                      {{ $setting->phone1 }}
                    </p>
                    <p class="flex items-center gap-3">
                    <span class="bg-white/50 px-2 py-1 rounded text-sm">Admin 2</span> 
                    {{ $setting->phone2 }}
                    </p>
                </div>
            </div>

            <div class="bg-[#485741] text-[#EBEED9] p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition duration-500 group relative overflow-hidden">
                <i class="far fa-clock absolute -bottom-4 -right-4 text-9xl opacity-10"></i>
                
                <div class="w-14 h-14 bg-[#EBEED9] rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-clock text-[#485741] text-2xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-4 uppercase tracking-wider">Jam Operasional</h3>
                <p class="font-serif text-lg leading-relaxed">
                 Buka Senin - Minggu<br>
                <span class="text-2xl font-bold">{{ $setting->opening_hours }}</span>
                </p>
                <p class="mt-2 text-sm text-red-300 font-bold bg-red-900/30 inline-block px-3 py-1 rounded-lg">
                    *Tutup Setiap Kamis
                </p>
            </div>

            <div class="bg-[#EBEED9] text-[#485741] p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition duration-500 group">
                <div class="w-14 h-14 bg-[#65745A] rounded-full flex items-center justify-center mb-6 group-hover:bg-[#485741] transition">
                    <i class="fas fa-envelope text-white text-2xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-4 uppercase tracking-wider">Email Resmi</h3>
                <p class="font-medium text-lg break-all">
                 {{ $setting->email }}
                </p>
                <a href="mailto:tomboanngawonggo@gmail.com" class="inline-block mt-6 text-sm font-bold border-b-2 border-[#485741] hover:text-[#65745A]">
                    Kirim Email Sekarang
                </a>
            </div>
        </div>
        <div class="bg-white p-4 rounded-[2rem] mt-5 shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 lg:gap-8">   
                <div class="p-6 lg:p-8 flex flex-col justify-center">
                    <div class="flex items-center gap-3 mb-4 text-[#485741]">
                        <i class="fas fa-map-marked-alt text-3xl"></i>
                        <h3 class="font-bold text-2xl">Lokasi Situs</h3>
                    </div>
                    <p class="text-gray-600 leading-loose mb-6">
                        Jln. Rabidin No.Dusun, RT.03 RW.04, Nanasan, Ngawonggo, Kec. Tajinan, Kabupaten Malang, Jawa Timur 65172
                    </p>
                    <a href="https://maps.app.goo.gl/7oBoA7ZaEENNptwVA" target="_blank" class="bg-[#485741] text-white text-center py-3 rounded-xl font-bold hover:bg-[#364132] transition shadow-lg">
                        Buka di Google Maps
                    </a>
                </div>
        <div class="lg:col-span-2 h-[300px] lg:h-[400px] rounded-2xl overflow-hidden shadow-inner border border-gray-200">
                    <iframe 
                        width="100%" 
                        height="100%" 
                        frameborder="0" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://maps.google.com/maps?q=Situs+Petirtaan+Ngawonggo,+Tajinan,+Malang&t=&z=15&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
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