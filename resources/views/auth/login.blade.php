<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Login | Astra Desa Digital</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1"
        rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#14147C',
                        navy: '#2D3091',
                        orange: '#F16421',
                        background: '#FBF8FF',
                        surface: '#FFFFFF',
                        muted: '#777683',
                        border: '#E2E1F0',
                    },
                    fontFamily: {
                        headline: ['Plus Jakarta Sans'],
                        body: ['Inter'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1, h2, h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-background text-gray-900 min-h-screen flex flex-col">

    <!-- HEADER -->
    <header class="fixed top-0 left-0 w-full z-50 bg-white/90 backdrop-blur-xl shadow-sm">

        <div class="h-20 max-w-[1440px] mx-auto px-4 md:px-8 flex items-center justify-between">

            <!-- BRAND -->
            <div class="flex items-center gap-3">

                <div class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center shadow-sm">
                    <span class="material-symbols-outlined text-white text-2xl">
                        account_balance
                    </span>
                </div>

                <div class="flex flex-col">

                    <div class="flex items-center gap-2">

                        <span class="font-headline font-bold text-primary tracking-tight">
                            Astra Desa Digital
                        </span>

                        <span class="px-2 py-0.5 rounded-full bg-orange/10 text-orange text-[10px] font-bold uppercase">
                            Kepongpongan
                        </span>

                    </div>

                    <span class="text-xs text-gray-500">
                        Sistem Informasi & Tata Kelola Digital Warga
                    </span>

                </div>

            </div>

            <!-- NAVIGATION -->
            <nav class="flex items-center gap-4">

                <a href="{{ route('home') }}"
                    class="text-sm font-semibold text-gray-500 hover:text-primary transition-colors flex items-center gap-2">

                    <span class="material-symbols-outlined text-lg">
                        arrow_back
                    </span>

                    <span class="hidden sm:inline">
                        Kembali ke Beranda
                    </span>

                </a>

                <div class="h-5 w-px bg-border hidden sm:block"></div>

                <div class="w-9 h-9 rounded-full bg-primary flex items-center justify-center">

                    <span class="material-symbols-outlined text-white">
                        person
                    </span>

                </div>

            </nav>

        </div>

    </header>


    <!-- MAIN -->
    <main class="flex-1 flex items-center justify-center pt-24 pb-12 px-4">

        <div class="w-full max-w-md mx-auto">

            <!-- LOGIN CARD -->
            <div class="bg-white rounded-xl shadow-md p-6 sm:p-10 relative overflow-hidden">

                <!-- Decorative Background -->
                <div class="absolute -top-24 -right-24 w-48 h-48 rounded-full bg-primary/5 blur-2xl pointer-events-none"></div>

                <!-- TITLE -->
                <div class="mb-8 relative">

                    <div class="flex items-center justify-between gap-3">

                        <div>

                            <h1 class="text-2xl sm:text-[28px] font-bold text-primary tracking-tight">
                                Masuk Sistem Desa
                            </h1>

                            <p class="text-sm text-gray-500 mt-2 leading-relaxed">
                                Selamat datang kembali. Silakan masuk untuk mengakses panel administrasi Desa Kepongpongan.
                            </p>

                        </div>

                        <div class="hidden sm:flex items-center gap-1.5 px-3 py-2 rounded-lg bg-gray-50 text-primary">

                            <span class="material-symbols-outlined text-lg">
                                verified
                            </span>

                            <span class="text-[10px] font-bold whitespace-nowrap">
                                ADMIN ONLY
                            </span>

                        </div>

                    </div>

                </div>


                <!-- ERROR MESSAGE -->
                @if ($errors->any())

                    <div class="mb-5 p-3 rounded-lg bg-red-50 border border-red-200">

                        <div class="flex items-center gap-2 text-red-700">

                            <span class="material-symbols-outlined text-xl">
                                error
                            </span>

                            <span class="text-sm font-semibold">
                                Gagal masuk!
                            </span>

                        </div>

                        @foreach ($errors->all() as $error)

                            <p class="text-sm text-red-600 mt-1">
                                {{ $error }}
                            </p>

                        @endforeach

                    </div>

                @endif


                <!-- LOGIN FORM -->
                <form action="{{ route('login') }}" method="POST" class="space-y-5">

                    @csrf

                    <!-- EMAIL -->
                    <div>

                        <label for="email"
                            class="block text-sm font-semibold text-gray-800 mb-2">

                            Email Administrator

                        </label>

                        <div class="relative flex items-center">

                            <span class="material-symbols-outlined absolute left-3.5 text-gray-400 text-xl pointer-events-none">
                                mail
                            </span>

                            <input
                                type="email"
                                name="email"
                                id="email"
                                value="{{ old('email') }}"
                                placeholder="admin@kepongpongan.desa.id"
                                required
                                autofocus
                                autocomplete="username"

                                class="w-full h-12 pl-11 pr-4 rounded-lg border border-border bg-white text-sm text-gray-900 shadow-sm transition-all focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary placeholder:text-gray-400"
                            >

                        </div>

                    </div>


                    <!-- PASSWORD -->
                    <div>

                        <div class="flex items-center justify-between mb-2">

                            <label for="password"
                                class="text-sm font-semibold text-gray-800">

                                Kata Sandi

                            </label>

                        </div>

                        <div class="relative flex items-center">

                            <span class="material-symbols-outlined absolute left-3.5 text-gray-400 text-xl pointer-events-none">
                                lock
                            </span>

                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Masukkan kata sandi..."
                                required
                                autocomplete="current-password"

                                class="w-full h-12 pl-11 pr-12 rounded-lg border border-border bg-white text-sm text-gray-900 shadow-sm transition-all focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary placeholder:text-gray-400"
                            >

                            <button
                                type="button"
                                onclick="togglePasswordVisibility()"
                                class="absolute right-3 text-gray-400 hover:text-primary transition-colors p-1"
                                aria-label="Tampilkan kata sandi"
                            >

                                <span class="material-symbols-outlined text-xl" id="passwordIcon">
                                    visibility
                                </span>

                            </button>

                        </div>

                    </div>


                    <!-- REMEMBER ME -->
                    <div class="flex items-center pt-1">

                        <label class="flex items-center gap-2 cursor-pointer select-none">

                            <input
                                type="checkbox"
                                name="remember"
                                value="1"
                                class="w-4 h-4 rounded accent-primary cursor-pointer"
                            >

                            <span class="text-sm text-gray-500">
                                Ingat saya di perangkat ini
                            </span>

                        </label>

                    </div>


                    <!-- SUBMIT BUTTON -->
                    <button
                        type="submit"

                        class="w-full h-12 rounded-lg bg-primary hover:bg-navy text-white font-semibold text-sm shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2 group mt-6"
                    >

                        <span>
                            Masuk ke Panel Admin
                        </span>

                        <span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform">
                            arrow_forward
                        </span>

                    </button>

                </form>


                <!-- SECURITY INFO -->
                <div class="mt-7 pt-5 border-t border-border">

                    <div class="flex items-center justify-center gap-2 text-gray-400">

                        <span class="material-symbols-outlined text-lg text-orange">
                            shield_lock
                        </span>

                        <span class="text-xs">
                            Akses terbatas untuk administrator resmi.
                        </span>

                    </div>

                </div>

            </div>


            <!-- BOTTOM INFO -->
            <div class="text-center mt-6">

                <p class="text-xs text-gray-400">
                    Sistem Administrasi Desa Sejahtera Astra
                </p>

                <p class="text-xs text-gray-400 mt-1">
                    Kepongpongan, Cirebon
                </p>

            </div>

        </div>

    </main>


    <!-- FOOTER -->
    <footer class="w-full bg-white shadow-sm">

        <div class="max-w-[1440px] mx-auto px-4 md:px-8 py-6 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-gray-500">

            <div class="flex flex-wrap items-center justify-center gap-2">

                <span>
                    © {{ date('Y') }} Pemerintah Desa Kepongpongan & PT Astra International Tbk.
                </span>

                <span class="hidden md:inline">•</span>

                <span>
                    Semangat Astra Terpadu Untuk (SATU) Indonesia
                </span>

            </div>

            <div class="flex items-center gap-5">

                <div class="flex items-center gap-1.5">

                    <span class="material-symbols-outlined text-base text-orange">
                        lock
                    </span>

                    <span class="font-semibold">
                        Secure Admin Portal
                    </span>

                </div>

                <div class="flex items-center gap-1.5">

                    <span class="material-symbols-outlined text-base text-primary">
                        verified_user
                    </span>

                    <span>
                        Protected Access
                    </span>

                </div>

            </div>

        </div>

    </footer>


    <!-- JAVASCRIPT -->
    <script>

        function togglePasswordVisibility() {

            const password = document.getElementById('password');

            const icon = document.getElementById('passwordIcon');

            if (password.type === 'password') {

                password.type = 'text';

                icon.textContent = 'visibility_off';

            } else {

                password.type = 'password';

                icon.textContent = 'visibility';

            }

        }

    </script>

</body>
</html>