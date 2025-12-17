<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Gallery - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans flex h-screen overflow-hidden">

    <aside class="w-64 bg-[#485741] text-white flex flex-col shadow-xl">
        <div class="h-20 flex items-center justify-center border-b border-[#5a6b52]">
            <h1 class="text-2xl font-bold tracking-widest">TOMBOAN</h1>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="{{ url('/admin/dashboard') }}" class="flex items-center px-4 py-3 hover:bg-[#65745A] rounded-lg transition opacity-70 hover:opacity-100">
                <i class="fas fa-home w-6"></i> Dashboard
            </a>
             <a href="{{ url('http://127.0.0.1:8000/Home') }}" target="_blank" class="flex items-center px-4 py-3 hover:bg-[#65745A] rounded-lg transition opacity-70 hover:opacity-100">
                <i class="fas fa-globe w-6"></i> Lihat Website
            </a>
            <a href="{{ route('admin.settings') }}" class="flex items-center px-4 py-3 hover:bg-[#65745A] rounded-lg transition opacity-70 hover:opacity-100">
                <i class="fas fa-cog w-6"></i> Pengaturan Contact
            </a>
            <a href="#" class="flex items-center px-4 py-3 bg-[#65745A] rounded-lg transition">
                <i class="fas fa-images w-6"></i> Kelola Gallery
            </a>
        </nav>
    </aside>

    <main class="flex-1 overflow-y-auto p-8">
        <h2 class="text-3xl font-bold text-[#485741] mb-8">Manajemen Gallery Foto</h2>

        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 flex justify-between">
            <span>{{ session('success') }}</span>
            <button onclick="this.parentElement.style.display='none'">&times;</button>
        </div>
        @endif

        <div class="bg-white rounded-xl shadow-lg p-6 mb-8 border-t-4 border-[#65745A]">
            <h3 class="font-bold text-gray-700 mb-4">Upload Foto Baru</h3>
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col md:flex-row gap-4 items-end">
                @csrf
                <div class="flex-1 w-full">
                    <label class="block text-sm font-bold text-gray-600 mb-1">Pilih Foto</label>
                    <input type="file" name="image" required class="w-full border rounded p-2 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#EBEED9] file:text-[#485741] hover:file:bg-[#d4dcb8]">
                </div>
                <div class="w-full md:w-1/4">
                <label class="block text-sm font-bold text-gray-600 mb-1">Ukuran/Orientasi</label>
                <select name="orientation" class="w-full border rounded p-2 focus:ring-2 focus:ring-[#65745A]">
                    <option value="square">Kotak (Biasa)</option>
                    <option value="landscape">Melebar (Landscape)</option>
                    <option value="portrait">Memanjang (Portrait)</option>
                </select>
                 </div>
                <div class="flex-1 w-full">
                    <label class="block text-sm font-bold text-gray-600 mb-1">Caption (Opsional)</label>
                    <input type="text" name="caption" placeholder="Contoh: Suasana Pagi" class="w-full border rounded p-2 focus:ring-2 focus:ring-[#65745A]">
                </div>
                <button type="submit" class="bg-[#485741] text-white font-bold py-2 px-6 rounded hover:bg-[#364132] transition h-10">
                    Upload
                </button>
            </form>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach($photos as $photo)
            <div class="bg-white rounded-xl shadow overflow-hidden group relative">
                <img src="{{ asset($photo->image_path) }}" class="w-full h-48 object-cover">
                
                @if($photo->caption)
                <div class="p-3 text-sm text-center text-gray-600 font-medium border-t">
                    {{ $photo->caption }}
                </div>
                @endif

                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <form action="{{ route('admin.gallery.destroy', $photo->id) }}" method="POST" onsubmit="return confirm('Hapus foto ini?')">
                        @csrf @method('DELETE')
                        <button class="bg-red-500 text-white p-2 rounded-full hover:bg-red-700 transition transform hover:scale-110" title="Hapus Foto">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

    </main>
</body>
</html>