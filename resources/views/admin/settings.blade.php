<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Situs - Admin</title>
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
            <a href="#" class="flex items-center px-4 py-3 bg-[#65745A] rounded-lg transition">
                <i class="fas fa-cog w-6"></i> Pengaturan Contact
            </a>
               <a href="{{ route('admin.gallery') }}" class="flex items-center px-4 py-3 hover:bg-[#65745A] rounded-lg transition opacity-70 hover:opacity-100">
            <i class="fas fa-images w-6"></i> Kelola Gallery
            </a>
        </nav>
    </aside>

    <main class="flex-1 overflow-y-auto p-8">
        <h2 class="text-3xl font-bold text-[#485741] mb-8">Pengaturan Kontak Situs</h2>

        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
        @endif

        <div class="bg-white rounded-xl shadow-lg p-8 max-w-4xl">
            <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">No. Admin 1</label>
                        <input type="text" name="phone1" value="{{ $setting->phone1 }}" class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-[#65745A]">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">No. Admin 2</label>
                        <input type="text" name="phone2" value="{{ $setting->phone2 }}" class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-[#65745A]">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Email Resmi</label>
                    <input type="email" name="email" value="{{ $setting->email }}" class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-[#65745A]">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Jam Operasional</label>
                    <input type="text" name="opening_hours" value="{{ $setting->opening_hours }}" class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-[#65745A]">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Alamat Lengkap</label>
                    <textarea name="address" rows="3" class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-[#65745A]">{{ $setting->address }}</textarea>
                </div>

                <div class="text-right">
                    <button type="submit" class="bg-[#485741] text-white font-bold py-3 px-8 rounded-lg hover:bg-[#364132] transition shadow-lg">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>