<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Tomboan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-green': '#65745A',
                        'accent-cream': '#F3F6E8',
                        'dark-green': '#485741',
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .leaves-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
            pointer-events: none;
        }

        .leaf {
            position: absolute;
            top: -10%;
            color: rgba(243, 246, 232, 0.2); 
            animation: fall linear infinite;
        }

        @keyframes fall {
            0% {
                transform: translateY(0) rotate(0deg) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            100% {
                transform: translateY(110vh) rotate(360deg) translateX(50px);
                opacity: 0;
            }
        }

        
        .leaf:nth-child(1) { left: 10%; animation-duration: 10s; font-size: 20px; animation-delay: 0s; }
        .leaf:nth-child(2) { left: 20%; animation-duration: 15s; font-size: 30px; animation-delay: 2s; }
        .leaf:nth-child(3) { left: 35%; animation-duration: 12s; font-size: 25px; animation-delay: 4s; }
        .leaf:nth-child(4) { left: 50%; animation-duration: 18s; font-size: 15px; animation-delay: 1s; }
        .leaf:nth-child(5) { left: 65%; animation-duration: 14s; font-size: 28px; animation-delay: 5s; }
        .leaf:nth-child(6) { left: 80%; animation-duration: 11s; font-size: 22px; animation-delay: 3s; }
        .leaf:nth-child(7) { left: 90%; animation-duration: 16s; font-size: 35px; animation-delay: 7s; }
    </style>
</head>
<body class="bg-primary-green flex items-center justify-center h-screen font-sans relative overflow-hidden">

    <div class="leaves-container">
        <i class="fas fa-leaf leaf"></i>
        <i class="fas fa-leaf leaf"></i>
        <i class="fas fa-leaf leaf"></i>
        <i class="fas fa-leaf leaf"></i>
        <i class="fas fa-leaf leaf"></i>
        <i class="fas fa-leaf leaf"></i>
        <i class="fas fa-leaf leaf"></i>
    </div>

    <div class="bg-accent-cream/95 backdrop-blur-sm p-8 md:p-10 rounded-3xl shadow-2xl w-full max-w-sm border border-white/20 relative overflow-hidden animate-fade-in-up z-10">
        
        <div class="absolute -top-10 -right-10 w-32 h-32 bg-[#65745A] opacity-10 rounded-full animate-float"></div>
        <div class="absolute -bottom-10 -left-10 w-24 h-24 bg-[#485741] opacity-10 rounded-full animate-float" style="animation-delay: 1s;"></div>

        <div class="text-center mb-8 relative z-10">
            <div class="inline-block p-3 rounded-full bg-primary-green/10 mb-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-auto opacity-80">
            </div>
            <h2 class="text-3xl font-bold text-dark-green mb-1 tracking-wide">Hi Admin Djadul</h2>
            <p class="text-gray-500 text-xs uppercase tracking-widest">Tomboan Ngawonggo</p>
        </div>

        <form action="{{ url('/admin/login') }}" method="POST" class="space-y-5 relative z-10">
            @csrf
            
            <div class="group">
                <label class="block text-xs font-bold text-dark-green mb-2 ml-1 uppercase">Email Address</label>
                <div class="relative transition-all duration-300 group-focus-within:scale-[1.02]">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-envelope text-gray-400 group-focus-within:text-dark-green transition-colors"></i>
                    </div>
                    <input type="email" name="email" required 
                        class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-dark-green focus:border-transparent transition shadow-sm outline-none text-gray-800 bg-white/50 focus:bg-white" 
                        placeholder="">
                </div>
            </div>

            <div class="group">
                <label class="block text-xs font-bold text-dark-green mb-2 ml-1 uppercase">Password</label>
                <div class="relative transition-all duration-300 group-focus-within:scale-[1.02]">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-lock text-gray-400 group-focus-within:text-dark-green transition-colors"></i>
                    </div>
                    <input type="password" name="password" id="passwordInput" required 
                        class="w-full pl-10 pr-10 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-dark-green focus:border-transparent transition shadow-sm outline-none text-gray-800 bg-white/50 focus:bg-white" 
                        placeholder="••••••••">
                    
                    <button type="button" onclick="togglePassword()" 
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-dark-green transition focus:outline-none">
                        <i class="fas fa-eye" id="eyeIcon"></i>
                    </button>
                </div>
            </div>
            
            @error('email')
                <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-2 text-xs" role="alert">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <button type="submit" class="w-full bg-dark-green text-white py-3 rounded-xl font-bold text-lg hover:bg-[#3a4635] transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg flex items-center justify-center gap-2 group">
                <span>LOGIN</span>
                <i class="fas text-sm group-hover:translate-x-1 transition-transform"></i>
            </button>
            <div class="text-center mt-4">
            <a href="{{ route('register') }}" class="text-xs text-gray-500 hover:text-[#65745A] transition">
                Belum punya akun? Daftar disini
           </a>
          </div>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('passwordInput');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>

</body>
</html>