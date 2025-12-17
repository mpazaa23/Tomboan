<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Pertirtaan Ngawonggo</title>
    
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
        .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;  
        scrollbar-width: none;  
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

    <header class="relative h-[80vh] w-full bg-cover bg-center" style="background-image: url('{{ asset('images/pertirtaan.jpeg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        
        <nav class="absolute top-0 left-0 w-full z-50 flex justify-between items-center px-8 py-6">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="bg-white/20 hover:bg-white/40 backdrop-blur-sm rounded-full w-7 h-7 flex items-center justify-center transition border-2 border-white">
                    <i class="fas fa-arrow-left text-white"></i>
                </a>
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-13 w-auto ml-4 opacity-100">
            </div>
            
            <div class="hidden md:flex space-x-8 text-sm font-light tracking-wide text-white">
                <a href="{{ url('/Home') }}" class="hover:text-gray-300">Home</a>
                <a href="{{ url('/Sejarah') }}" class="hover:text-gray-300">Sejarah</a>
                <a href="{{ url('/Gallery') }}" class="font-bold underline underline-offset-4">Gallery</a>
                <a href="{{ url('/Contact') }}" class="hover:text-gray-300">Contact</a>
            </div>
        </nav>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4 pt-10">
            <h1 class="font-jawa text-5xl md:text-7xl text-white tracking-widest drop-shadow-xl mb-4">
                Complete Story Gallery
            </h1>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-12">

        <div class="mb-12">
            <p class="text-sm font-light italic opacity-90 ml-2">It's ours, it's our story</p>
            <h2 class="font-jawa text-4xl md:text-5xl text-accent-cream mt-2 tracking-wide">
                From Our Gallery
            </h2>
        </div>

        <div class="columns-2 md:columns-3 gap-4 space-y-4">
            
            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 1.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 2.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 4.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 16.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/pertirtaan.jpeg') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 6.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 7.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 8.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 9.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 10.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/Main Congklak.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 12.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 13.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 14.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/foto 15.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/Group 36.png') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/g-1.jpg') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group">
                <img src="{{ asset('images/g-14.jpg') }}" class="w-full h-auto transform group-hover:scale-110 transition duration-700">
            </div>

            @foreach($photos as $photo)
            <div class="break-inside-avoid rounded-xl overflow-hidden shadow-lg group relative mb-4">
                
                <div class="w-full aspect-[3/4] overflow-hidden relative">
                    <img src="{{ asset($photo->image_path) }}" 
                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                        onerror="this.style.display='none'; this.parentElement.style.display='none';">
                </div>
                
                @if($photo->caption)
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-60 text-white text-xs p-3 text-center opacity-0 group-hover:opacity-100 transition duration-300 translate-y-2 group-hover:translate-y-0 z-10">
                    <span class="font-serif italic tracking-wide">{{ $photo->caption }}</span>
                </div>
                @endif

            </div>
            @endforeach
        </div>

        </div>
        </div> <section class="max-w-7xl mx-auto px-6 mt-32 mb-16">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="space-y-6">
                <h2 class="font-jawa text-5xl md:text-6xl text-accent-cream leading-tight">
                    Yuk, Cerita<br>Pengalamanmu
                </h2>
                <p class="text-gray-200 text-lg font-light leading-relaxed">
                    Bagikan kenangan manis saat berkunjung ke situs kami. Ceritamu akan menjadi bagian dari sejarah digital Tomboan.
                </p>
            </div>

            <div class="bg-[#EBEED9] rounded-[2rem] p-8 shadow-2xl text-[#485741]">
                
                @if(session('success'))
                    <div id="success-alert" class="bg-green-100 text-green-800 p-4 rounded-xl mb-6 text-sm font-bold border border-green-300 flex items-center gap-2 transition-opacity duration-700 ease-out">
                        <i class="fas fa-sparkles text-yellow-600"></i> 
                        <span> ✨{{ session('success') }}</span> 
                    </div>
                @endif

                <form action="{{ route('experience.store') }}" method="POST" class="space-y-5">
                    @csrf
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider mb-1">Nama</label>
                            <input type="text" name="nama" required class="w-full rounded-xl border-none bg-white p-3 focus:ring-2 focus:ring-[#65745A]" placeholder="Nama Kamu">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider mb-1">Asal</label>
                            <input type="text" name="asal" required class="w-full rounded-xl border-none bg-white p-3 focus:ring-2 focus:ring-[#65745A]" placeholder="Kota Asal">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider mb-1">Tanggal Bertamu</label>
                        <input type="date" name="tanggal_bertamu" required class="w-full rounded-xl border-none bg-white p-3 focus:ring-2 focus:ring-[#65745A] text-gray-600">
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider mb-1">Cerita Pengalamanmu</label>
                        <textarea name="cerita" rows="3" required class="w-full rounded-xl border-none bg-white p-3 focus:ring-2 focus:ring-[#65745A]" placeholder="Tuliskan kesan dan pesanmu disini..."></textarea>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="bg-[#65745A] text-white font-bold py-2 px-6 rounded-full shadow-lg hover:bg-[#4d5a43] transition transform hover:scale-105 flex items-center gap-2 ml-auto">
                            <i class="fas fa-paper-plane"></i> Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <section class="max-w-7xl mx-auto px-6 mb-24">
        
        <div class="mb-8 border-b border-white/20 pb-4">
            <h3 class="font-jawa text-4xl text-accent-cream tracking-wide">
                Our Guest Stories
            </h3>
        </div>

       <div class="flex overflow-x-auto gap-6 pb-8 snap-x snap-mandatory scrollbar-hide px-4">
            
            @forelse($experiences as $item)
            <div class="snap-center shrink-0 w-[300px] md:w-[350px] bg-[#EBEED9] rounded-2xl p-6 shadow-xl flex flex-col justify-between h-[250px] relative group hover:-translate-y-2 transition duration-300">
            
            <button onclick="openEditModal(this)" 
                    data-id="{{ $item->id }}"
                    data-nama="{{ $item->nama }}"
                    data-asal="{{ $item->asal }}"
                    data-tanggal="{{ $item->tanggal_bertamu }}"
                    data-cerita="{{ $item->cerita }}"
                    class="absolute top-4 right-4 bg-white/80 p-2 rounded-full shadow-sm hover:bg-white hover:text-green-700 transition z-20 opacity-0 group-hover:opacity-100">
                    <i class="fas fa-pencil-alt text-xs text-gray-600"></i>
                </button>

                <div class="z-10 mb-2">
                    <h4 class="font-bold text-xl text-[#485741]">{{ $item->nama }}</h4>
                    <p class="text-xs text-[#65745A] uppercase tracking-widest mt-1">{{ $item->asal }}</p>
                </div>

                <div class="z-10 flex-1 relative min-h-0 my-2">
                    <div class="h-full overflow-y-auto scrollbar-hide text-sm font-serif text-[#2d3a26] leading-relaxed italic text-justify pr-1">
                        "{{ $item->cerita }}"
                  </div>
                <div class="absolute bottom-0 left-0 right-0 h-8 bg-gradient-to-t from-[#EBEED9] to-transparent pointer-events-none transition-opacity duration-300 group-hover:opacity-0"></div>
               </div>

               <div class="z-10 text-right mt-1">
                    <span class="text-[10px] text-gray-500 font-bold uppercase tracking-wide">
                        {{ \Carbon\Carbon::parse($item->tanggal_bertamu)->format('d M Y') }}
                    </span>
                </div>
            </div>
            
            @empty
            <div class="w-full text-center text-gray-300 py-10 italic">
                Belum ada cerita. Jadilah yang pertama bercerita di atas!
            </div>
            @endforelse

        </div>
    </section>
    </main>

    <div id="editModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-black bg-opacity-60 transition-opacity backdrop-blur-sm" onclick="closeEditModal()"></div>

        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-2xl bg-[#EBEED9] text-left shadow-2xl transition-all sm:w-full sm:max-w-lg border-4 border-[#65745A]">
                
                <div class="bg-[#65745A] px-4 py-3 flex justify-between items-center">
                    <h3 class="text-lg font-bold text-[#F3F6E8]">Edit Cerita Pengalaman Kamu Disini</h3>
                    <button type="button" onclick="closeEditModal()" class="text-white hover:text-red-200">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="p-6">
                    <form id="formEdit" method="POST" class="space-y-4">
                        @csrf
                        @method('PUT')
                         <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase mb-1 text-[#65745A] tracking-wider">Nama</label>
                                <input type="text" name="nama" id="edit_nama" required class="w-full rounded-lg border-none bg-white p-2 text-sm focus:ring-2 focus:ring-[#65745A] text-gray-900 font-medium" placeholder="Nama Kamu">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase mb-1 text-[#65745A] tracking-wider">Asal</label>
                                <input type="text" name="asal" id="edit_asal" required class="w-full rounded-lg border-none bg-white p-2 text-sm focus:ring-2 focus:ring-[#65745A] text-gray-900 font-medium">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase mb-1 text-[#65745A] tracking-wider">Tanggal Bertamu</label>
                            <input type="date" name="tanggal_bertamu" id="edit_tanggal" required class="w-full rounded-lg border-none bg-white p-2 text-sm focus:ring-2 focus:ring-[#65745A] text-gray-900 font-medium">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase mb-1 text-[#65745A] tracking-wider">Cerita Pengalamanmu</label>
                            <textarea name="cerita" id="edit_cerita" rows="4" required class="w-full rounded-lg border-none bg-white p-2 text-sm focus:ring-2 focus:ring-[#65745A] text-gray-900 font-medium"></textarea>
                        </div>

                        <div class="text-right pt-2">
                            <button type="submit" class="bg-[#65745A] text-white font-bold py-2 px-6 rounded-full hover:bg-[#4d5a43] transition shadow-lg">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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

<script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Ambil elemen notifikasi berdasarkan ID
            const alertBox = document.getElementById('success-alert');

            // 2. Jika notifikasi muncul
            if (alertBox) {
                // 3. Tunggu 4 detik (4000ms)
                setTimeout(function() {
                    
                    // A. Buat transparan perlahan (Fade Out)
                    alertBox.style.opacity = '0';

                    // B. Setelah transisi selesai (700ms sesuai class duration-700), hilangkan dari layar
                    setTimeout(function() {
                        alertBox.style.display = 'none';
                    }, 700);

                }, 6000); // Ubah 4000 jadi 3000 jika ingin 3 detik
            }
        });

        function openEditModal(button) {
        // 1. Ambil data dari tombol yang diklik (atribut data-...)
        const id = button.getAttribute('data-id');
        const nama = button.getAttribute('data-nama');
        const asal = button.getAttribute('data-asal');
        const tanggal = button.getAttribute('data-tanggal');
        const cerita = button.getAttribute('data-cerita');

        // 2. Isi form di dalam modal dengan data tersebut
        document.getElementById('edit_nama').value = nama;
        document.getElementById('edit_asal').value = asal;
        document.getElementById('edit_tanggal').value = tanggal;
        document.getElementById('edit_cerita').value = cerita;

        // 3. Ubah URL Action pada form agar mengarah ke ID yang benar
        // Hasilnya jadi: /experience/5 (misalnya)
        const form = document.getElementById('formEdit');
        form.action = "{{ url('/experience') }}/" + id;

        // 4. Tampilkan Modal
        document.getElementById('editModal').classList.remove('hidden');
    }

    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
    }
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        let allImages = document.querySelectorAll('img');

        allImages.forEach(img => {
            img.onerror = function() {
                this.style.display = 'none';
                
                if (this.parentElement) {
                    this.parentElement.style.display = 'none';
                }
                
                if (this.parentElement && this.parentElement.parentElement && this.parentElement.parentElement.classList.contains('break-inside-avoid')) {
                     this.parentElement.parentElement.style.display = 'none';
                }
            };
        
            if (img.complete && img.naturalHeight === 0) {
                img.onerror();
            }
        });
    });
</script>
</body>
</html>