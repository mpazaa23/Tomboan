<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin - Tomboan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-[#65745A] flex items-center justify-center min-h-screen">

    <div class="bg-[#F3F6E8] p-10 rounded-[2rem] shadow-2xl w-full max-w-md relative overflow-hidden">
        
        <div class="absolute -top-10 -right-10 w-32 h-32 bg-[#EBEED9] rounded-full opacity-50"></div>
        <div class="absolute -bottom-10 -left-10 w-24 h-24 bg-[#EBEED9] rounded-full opacity-50"></div>

        <div class="text-center mb-8 relative z-10">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 mx-auto mb-4 drop-shadow-md">
            <h2 class="text-2xl font-bold text-[#485741]">Daftar Admin Baru</h2>
            <p class="text-gray-500 text-sm tracking-widest">TOMBOAN NGAWONGGO</p>
        </div>

        <form action="{{ route('register.process') }}" method="POST" class="space-y-5 relative z-10">
            @csrf

            <div>
                <label class="block text-xs font-bold text-[#485741] uppercase mb-1 ml-1">Nama Lengkap</label>
                <input type="text" name="name" required placeholder="Nama Admin"
                    class="w-full bg-[#EBEED9] border-none rounded-xl px-4 py-3 text-gray-700 focus:ring-2 focus:ring-[#65745A] outline-none transition placeholder-gray-400">
            </div>

            <div>
                <label class="block text-xs font-bold text-[#485741] uppercase mb-1 ml-1">Email Address</label>
                <input type="email" name="email" required placeholder="email@contoh.com"
                    class="w-full bg-[#EBEED9] border-none rounded-xl px-4 py-3 text-gray-700 focus:ring-2 focus:ring-[#65745A] outline-none transition placeholder-gray-400">
            </div>

            <div>
                <label class="block text-xs font-bold text-[#485741] uppercase mb-1 ml-1">Password</label>
                <input type="password" name="password" required placeholder="Minimal 6 karakter"
                    class="w-full bg-[#EBEED9] border-none rounded-xl px-4 py-3 text-gray-700 focus:ring-2 focus:ring-[#65745A] outline-none transition placeholder-gray-400">
            </div>

            <div>
                <label class="block text-xs font-bold text-[#485741] uppercase mb-1 ml-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required placeholder="Ulangi Password"
                    class="w-full bg-[#EBEED9] border-none rounded-xl px-4 py-3 text-gray-700 focus:ring-2 focus:ring-[#65745A] outline-none transition placeholder-gray-400">
            </div>

            <button type="submit" class="w-full bg-[#485741] text-white font-bold py-3 rounded-xl hover:bg-[#3a4634] transition shadow-lg transform active:scale-95">
                REGISTER
            </button>
        </form>

        <div class="text-center mt-6 relative z-10">
            <p class="text-sm text-gray-500">Sudah punya akun? 
                <a href="{{ route('login') }}" class="text-[#65745A] font-bold hover:underline">Login disini</a>
            </p>
        </div>

    </div>

</body>
</html>