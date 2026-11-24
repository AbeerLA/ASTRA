<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin Terpadu - Desa Sejahtera Astra Kepongpongan</title>
    <!-- Google Fonts & Material Symbols -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    brand: {
                        navy: '#2D3091',
                        'navy-dark': '#14147C',
                        'navy-light': '#3B3FB6',
                        orange: '#F16421',
                        'orange-hover': '#D94F0E',
                        'orange-light': '#FFF1EB',
                        accent: '#E65100'
                    },
                    surface: {
                        main: '#FBF8FF',
                        card: '#FFFFFF',
                        muted: '#F4F2FF',
                        hover: '#EEECFC',
                        border: '#E2E8F0'
                    }
                },
                fontFamily: {
                    sans: ['Plus Jakarta Sans', 'sans-serif'],
                    body: ['Inter', 'sans-serif']
                }
            }
        }
    };
    </script>
    <style>
    @layer base {

        html,
        body {
            margin: 0;
            padding: 0;
        }
    }

    ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f5f9;
    }

    ::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 9999px;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'500, 'GRAD'0, 'opsz'22;
    }

    .material-symbols-outlined.fill-1 {
        font-variation-settings: 'FILL'1, 'wght'500, 'GRAD'0, 'opsz'22;
    }

    .view-content {
        animation: fadeIn 0.25s ease-out forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(4px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>
</head>

<body class="bg-surface-main text-slate-800 font-sans antialiased flex min-h-screen">

    <!-- ================= SIDEBAR NAVIGATION ================= -->
    <aside
        class="fixed left-0 top-0 h-full w-72 bg-white border-r border-surface-border z-40 flex flex-col justify-between overflow-y-auto">
        <div class="flex flex-col">
            <!-- Astra Branding Header -->
            <div class="p-5 border-b border-surface-border">
                <div class="flex items-center gap-2.5">

                    <img src="{{ asset('images/LOGO SERA.png') }}" alt="LOGO SERA"
                        class="h-7 w-auto object-contain shrink-0">

                    <div class="flex flex-col justify-center gap-0.5">

                        <div class="flex items-center gap-1.5">
                            <span class="font-extrabold text-brand-navy text-[15px] tracking-tight leading-tight">
                                Desa Sejahtera Astra
                            </span>
                        </div>

                        <span class="text-[11px] text-slate-500 font-medium leading-tight">
                            Panel Kendali Terpadu
                        </span>

                    </div>
                </div>
                <div
                    class="mt-4 p-2.5 rounded-lg bg-surface-muted border border-surface-border flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-brand-orange animate-pulse"></span>
                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-brand-navy leading-none">Desa Sejahtera Astra <br>
                                Kepongpongan</span>
                            <span class="text-[11px] text-slate-500 font-medium mt-0.5">Kec. Talun • Kab. Cirebon</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="px-4 pt-4 pb-2">
                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400">Modul Manajemen
                    Publik</span>
            </div>
            <nav class="flex flex-col gap-1 px-3" id="admin-nav">
                <button onclick="switchView('view-dashboard')"
                    class="nav-item w-full flex items-center justify-between px-3 py-2.5 rounded-lg bg-brand-navy text-white font-semibold text-sm transition-all"
                    data-target="view-dashboard">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[20px]">space_dashboard</span>
                        <span>Ringkasan Dashboard</span>
                    </div>
                </button>
                <button onclick="switchView('view-hero')"
                    class="nav-item w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-600 hover:bg-surface-hover hover:text-brand-navy font-medium text-sm transition-all"
                    data-target="view-hero">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[20px]">view_carousel</span>
                        <span>Hero &amp; Slider Beranda</span>
                    </div>
                    <span class="text-[11px] font-mono text-slate-400" id="badge-hero-count">3 Slide</span>
                </button>
                <button onclick="switchView('view-facilities')"
                    class="nav-item w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-600 hover:bg-surface-hover hover:text-brand-navy font-medium text-sm transition-all"
                    data-target="view-facilities">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[20px]">apartment</span>
                        <span>Sarana &amp; Fasilitas</span>
                    </div>
                    <span class="text-[10px] font-bold bg-slate-100 text-slate-600 px-2 py-0.5 rounded-full"
                        id="badge-fac-count">3</span>
                </button>
                <button onclick="switchView('view-tourism')"
                    class="nav-item w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-600 hover:bg-surface-hover hover:text-brand-navy font-medium text-sm transition-all"
                    data-target="view-tourism">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[20px]">explore</span>
                        <span>Wisata &amp; Reservasi</span>
                    </div>
                    <span class="text-[10px] font-bold bg-brand-orange-light text-brand-orange px-2 py-0.5 rounded-full"
                        id="badge-tour-count">3 Paket</span>
                </button>

                <button onclick="switchView('view-pillars')"
                    class="nav-item w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-600 hover:bg-surface-hover hover:text-brand-navy font-medium text-sm transition-all"
                    data-target="view-pillars">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[20px]">verified</span>
                        <span>4 Pilar Astra</span>
                    </div>
                    <span class="text-[10px] font-bold bg-blue-50 text-brand-navy px-2 py-0.5 rounded-full">100%</span>
                </button>
                <button onclick="switchView('view-news')"
                    class="nav-item w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-600 hover:bg-surface-hover hover:text-brand-navy font-medium text-sm transition-all"
                    data-target="view-news">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[20px]">newspaper</span>
                        <span>Kabar &amp; Agenda</span>
                    </div>
                    <span class="text-[10px] font-bold bg-slate-100 text-slate-600 px-2 py-0.5 rounded-full"
                        id="badge-news-count">3</span>
                </button>
                <button onclick="switchView('view-faq')"
                    class="nav-item w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-600 hover:bg-surface-hover hover:text-brand-navy font-medium text-sm transition-all"
                    data-target="view-faq">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[20px]">help_outline</span>
                        <span>Tanya Jawab (FAQ)</span>
                    </div>
                    <span class="text-[10px] font-bold bg-rose-50 text-rose-600 px-2 py-0.5 rounded-full"
                        id="badge-faq-count">2 Antre</span>
                </button>
            </nav>
        </div>

        <!-- Status Bar -->
        <div class="p-3 border-t border-surface-border bg-slate-50/70">
            <div
                class="flex items-center justify-between p-2.5 rounded-lg bg-white border border-surface-border text-xs">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    <span class="text-slate-600 font-medium">Server Online v2.4</span>
                </div>
                <span class="font-bold text-brand-navy">Kepongpongan</span>
            </div>
        </div>
    </aside>

    <!-- ================= MAIN CONTENT WRAPPER ================= -->
    <div class="pl-72 flex flex-col min-h-screen w-full">
        <!-- Top Admin Header Bar -->
        <header
            class="fixed top-0 left-72 right-0 h-16 bg-white/95 backdrop-blur-md border-b border-surface-border z-30 flex items-center justify-between px-8">
            <div class="flex items-center gap-4 flex-1 max-w-xl">
                <div class="text-xs text-slate-400 font-medium flex items-center gap-1.5">
                    <span>Admin Desa Sejahtera Astra</span>
                    <span>/</span>
                    <span class="font-bold text-brand-navy" id="breadcrumb-title">Ringkasan Dashboard</span>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button onclick="openAddModal('slide')"
                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-brand-navy hover:bg-brand-navy-dark text-white text-xs font-bold transition-all shadow-sm">
                    <span class="material-symbols-outlined text-[16px]">add</span>
                    <span> Tambah Konten Baru</span>
                </button>
                <div class="h-6 w-px bg-slate-200"></div>
                <div class="flex items-center gap-3">
                    <div class="text-right">
                        <span class="text-xs font-bold text-brand-navy block leading-none">Budi Santoso</span>
                        <span class="text-[10px] text-slate-400 font-medium">Admin Utama Desa</span>
                    </div>
                    <div
                        class="w-9 h-9 rounded-xl bg-brand-navy text-white flex items-center justify-center font-bold text-sm shadow-sm">
                        BS</div>
                </div>
            </div>
        </header>

        <!-- Main Workspace -->
        <main class="w-full pt-20 px-8 pb-16 flex-1 flex flex-col gap-6 max-w-7xl mx-auto">

            <!-- ================= VIEW 1: DASHBOARD OVERVIEW ================= -->
            <div id="view-dashboard" class="module-view view-content flex flex-col gap-6">
                <div
                    class="p-6 rounded-2xl bg-white border border-surface-border shadow-sm flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                    <div class="max-w-2xl">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            <span class="text-xs font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">Portal
                                Publik Terhubung</span>
                        </div>
                        <h1 class="text-2xl font-extrabold text-brand-navy">Selamat Datang di Panel Kendali Desa
                            Sejahtera Astra
                            Kepongpongan</h1>
                        <p class="text-xs text-slate-600 mt-1 leading-relaxed">Kelola dan perbarui seluruh konten
                            beranda desa: banner carousel hero, direktori fasilitas warga, destinasi wisata, serta tanya
                            jawab warga secara interaktif.</p>
                    </div>
                    <div class="flex items-center gap-3 shrink-0">
                        <button onclick="openAddModal('slide')"
                            class="px-4 py-2.5 rounded-xl bg-brand-orange hover:bg-brand-orange-hover text-white text-xs font-bold shadow-md shadow-brand-orange/20 flex items-center gap-1.5 transition-all">
                            <span class="material-symbols-outlined text-[18px]">add_photo_alternate</span>
                            <span> Tambah Slide Hero</span>
                        </button>
                    </div>
                </div>

                <!-- Metric Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="p-4 rounded-xl bg-white border border-surface-border hover:shadow-md transition-all cursor-pointer"
                        onclick="switchView('view-hero')">
                        <div class="flex items-center justify-between text-xs text-slate-500 font-bold uppercase">
                            <span>Hero Slider</span>
                            <span class="material-symbols-outlined text-brand-navy">view_carousel</span>
                        </div>
                        <div class="my-2"><span class="text-2xl font-extrabold text-brand-navy"
                                id="kpi-hero-count">3</span><span class="text-xs text-slate-400 ml-1">Slide</span></div>
                        <span class="text-[11px] text-emerald-600 font-semibold">Semua Tayang</span>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-surface-border hover:shadow-md transition-all cursor-pointer"
                        onclick="switchView('view-facilities')">
                        <div class="flex items-center justify-between text-xs text-slate-500 font-bold uppercase">
                            <span>Sarana Publik</span>
                            <span class="material-symbols-outlined text-brand-navy">apartment</span>
                        </div>
                        <div class="my-2"><span class="text-2xl font-extrabold text-brand-navy"
                                id="kpi-fac-count">3</span><span class="text-xs text-slate-400 ml-1">Lokasi</span></div>
                        <span class="text-[11px] text-slate-500 font-semibold">Kondisi Sangat Baik</span>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-surface-border hover:shadow-md transition-all cursor-pointer"
                        onclick="switchView('view-tourism')">
                        <div class="flex items-center justify-between text-xs text-slate-500 font-bold uppercase">
                            <span>Wisata Desa Sejahtera Astra</span>
                            <span class="material-symbols-outlined text-brand-orange">explore</span>
                        </div>
                        <div class="my-2"><span class="text-2xl font-extrabold text-brand-navy"
                                id="kpi-tour-count">3</span><span class="text-xs text-slate-400 ml-1">Destinasi</span>
                        </div>
                        <span class="text-[11px] text-brand-orange font-semibold">Reservasi Aktif</span>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-surface-border hover:shadow-md transition-all cursor-pointer"
                        onclick="switchView('view-faq')">
                        <div class="flex items-center justify-between text-xs text-slate-500 font-bold uppercase">
                            <span>Moderasi FAQ</span>
                            <span class="material-symbols-outlined text-rose-500">help_outline</span>
                        </div>
                        <div class="my-2"><span class="text-2xl font-extrabold text-brand-navy"
                                id="kpi-faq-count">2</span><span class="text-xs text-slate-400 ml-1">Antrean</span>
                        </div>
                        <span class="text-[11px] text-rose-600 font-semibold">Perlu Tanggapan</span>
                    </div>
                </div>
            </div>

            <!-- ================= VIEW 2: HERO CAROUSEL MANAGER ================= -->
            <div id="view-hero" class="module-view view-content hidden flex-col gap-6">
                <div class="bg-white rounded-xl border border-surface-border p-6 shadow-sm">
                    <div
                        class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6 pb-4 border-b border-surface-border">
                        <div>
                            <div class="flex items-center gap-2">
                                <h2 class="text-lg font-bold text-brand-navy">Hero Carousel &amp; Slides Manager</h2>
                                <span
                                    class="text-[10px] font-mono font-bold bg-slate-100 text-slate-600 px-2 py-0.5 rounded">Endpoint:
                                    /admin/hero-slides</span>
                            </div>
                            <p class="text-xs text-slate-500 mt-0.5">Kelola foto hero, judul banner, narasi, status
                                tayang (Aktif / Nonaktif), dan aksi Edit/Hapus.</p>
                        </div>
                        <button onclick="openAddModal('slide')"
                            class="px-4 py-2 rounded-lg bg-brand-navy hover:bg-brand-navy-dark text-white text-xs font-bold transition-all shadow-sm flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[18px]">add_photo_alternate</span>
                            <span> Tambah Slide Baru</span>
                        </button>
                    </div>

                    <!-- Hero Slides Container (Dynamic Rendering) -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5" id="hero-slides-grid">
                        <!-- Dynamically populated via JS -->
                    </div>
                </div>
            </div>

            <!-- ================= VIEW 3: SARANA & FASILITAS ================= -->
            <div id="view-facilities" class="module-view view-content hidden flex-col gap-6">
                <div class="bg-white rounded-xl border border-surface-border p-6 shadow-sm">
                    <div
                        class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-5 pb-4 border-b border-surface-border">
                        <div>
                            <h2 class="text-lg font-bold text-brand-navy">Sarana &amp; Fasilitas Unggulan Warga</h2>
                            <p class="text-xs text-slate-500 mt-0.5">Daftar sarana publik, status kelaikan fisik, jam
                                layanan, dan pengelola.</p>
                        </div>
                        <button onclick="openAddModal('facility')"
                            class="px-4 py-2 rounded-lg bg-brand-navy hover:bg-brand-navy-dark text-white text-xs font-bold transition-all shadow-sm flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[18px]">add_business</span>
                            <span> Tambah Fasilitas</span>
                        </button>
                    </div>

                    <!-- Facilities List -->
                    <div class="flex flex-col gap-3 font-body" id="facilities-list-container">
                        <!-- Dynamically populated via JS -->
                    </div>
                </div>
            </div>

            <!-- ================= VIEW 4: DESTINASI WISATA ================= -->
            <div id="view-tourism" class="module-view view-content hidden flex-col gap-6">
                <div class="bg-white rounded-xl border border-surface-border p-6 shadow-sm">
                    <div
                        class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-5 pb-4 border-b border-surface-border">
                        <div>
                            <h2 class="text-lg font-bold text-brand-navy">Destinasi Wisata Desa Sejahtera Astra &amp;
                                Reservasi Tiket
                            </h2>
                            <p class="text-xs text-slate-500 mt-0.5">Kelola wahana BUMDes, tarif tiket, kuota harian,
                                serta tombol aktif/nonaktifkan.</p>
                        </div>
                        <button onclick="openAddModal('tourism')"
                            class="px-4 py-2 rounded-lg bg-brand-orange hover:bg-brand-orange-hover text-white text-xs font-bold transition-all shadow-sm flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[18px]">add_location_alt</span>
                            <span> Tambah Paket Wisata</span>
                        </button>
                    </div>

                    <!-- Tourism Cards Container -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5" id="tourism-cards-container">
                        <!-- Dynamically populated via JS -->
                    </div>
                </div>
            </div>

            <!-- ================= VIEW 5: PAKET ROMBONGAN ================= -->

            <!-- ================= VIEW 6: 4 PILAR ASTRA ================= -->
            <div id="view-pillars" class="module-view view-content hidden flex-col gap-6">
                <div class="bg-white rounded-xl border border-surface-border p-6 shadow-sm">
                    <h2 class="text-lg font-bold text-brand-navy mb-1">4 Pilar Keberlanjutan Desa Sejahtera Astra
                        Digital</h2>
                    <p class="text-xs text-slate-500 mb-6">Indikator kinerja utama binaan CSR Astra International.</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="pillars-container">
                        <!-- Pillars populated via JS -->
                    </div>
                </div>
            </div>

            <!-- ================= VIEW 7: KABAR & AGENDA ================= -->
            <div id="view-news" class="module-view view-content hidden flex-col gap-6">
                <div class="bg-white rounded-xl border border-surface-border p-6 shadow-sm">
                    <div class="flex items-center justify-between mb-5 pb-4 border-b border-surface-border">
                        <div>
                            <h2 class="text-lg font-bold text-brand-navy">Kabar &amp; Agenda Kepongpongan</h2>
                            <p class="text-xs text-slate-500">Artikel kegiatan, musrenbang desa, dan siaran pers kuwu.
                            </p>
                        </div>
                        <button onclick="openAddModal('news')"
                            class="px-4 py-2 rounded-lg bg-brand-navy hover:bg-brand-navy-dark text-white text-xs font-bold flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[18px]">edit_note</span>
                            <span> Tulis Berita</span>
                        </button>
                    </div>
                    <div class="flex flex-col divide-y divide-surface-border" id="news-container">
                        <!-- Populated via JS -->
                    </div>
                </div>
            </div>

            <!-- ================= VIEW 8: FAQ & MODERASI ================= -->
            <div id="view-faq" class="module-view view-content hidden flex-col gap-6">
                <div class="bg-white rounded-xl border border-surface-border p-6 shadow-sm">
                    <div class="flex items-center justify-between mb-5 pb-4 border-b border-surface-border">
                        <div>
                            <h2 class="text-lg font-bold text-brand-navy">Moderasi Tanya Jawab (FAQ Warga)</h2>
                            <p class="text-xs text-slate-500">Pertanyaan masuk dari warga seputar beasiswa, KTP, dan
                                layanan desa.</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4" id="faq-container">
                        <!-- FAQ items populated via JS -->
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- ====================================================================
       MODAL 1: TAMBAH KONTEN / SLIDE HERO BARU (DENGAN PHOTO PREVIEW & UPLOAD)
       ==================================================================== -->
    <div id="modal-add-item" class="fixed inset-0 z-50 items-center justify-center p-4 sm:p-6 overflow-y-auto hidden">
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" onclick="closeAllModals()"></div>
        <div
            class="relative w-full max-w-2xl bg-white rounded-2xl shadow-2xl border border-surface-border overflow-hidden z-10 flex flex-col my-auto">
            <!-- Header -->
            <div
                class="px-6 py-5 border-b border-surface-border bg-gradient-to-r from-surface-muted to-white flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div
                        class="w-10 h-10 rounded-xl bg-brand-navy text-white flex items-center justify-center shadow-md shrink-0">
                        <span class="material-symbols-outlined text-[22px]">add_photo_alternate</span>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-brand-navy" id="modal-add-title">Tambah Konten Baru - Slide
                            Hero</h3>
                        <p class="text-xs text-slate-500">Unggah foto dan isi deskripsi konten yang akan ditampilkan.
                        </p>
                    </div>
                </div>
                <button onclick="closeAllModals()" class="p-1.5 text-slate-400 hover:text-slate-700 rounded-lg">
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>
            </div>

            <!-- Form Body -->
            <form class="p-6 overflow-y-auto max-h-[calc(85vh-130px)] flex flex-col gap-4 text-xs font-body"
                id="form-add-item" action="{{ route('admin.hero-slides.store') }}" method="POST"
                enctype="multipart/form-data">

                @csrf
                <!-- Photo Preview & Upload Box -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label class="block text-xs font-bold text-brand-navy">Foto / Gambar Pratinjau <span
                                class="text-rose-500">*</span></label>
                        <span class="text-[11px] text-slate-400">Rasio 16:9 • Resolusi Optimal</span>
                    </div>
                    <div
                        class="relative w-full h-44 rounded-xl border-2 border-dashed border-brand-navy/30 bg-surface-muted overflow-hidden group">
                        <img id="add-img-preview"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJWzkm1ux4cEhnVNvBMX2jTbEtCaY0IZiqZHUlO-QvNqS_NchrRPCUcJ7CuQc7hjrkVdQEobviPstR5JuesXMOF7ARcw2DQcFB5gtP3vo6ML2RIChn9hOjp-vSWv7gIWNQAcr9cUfrRQxm-Wyo1g2Qvcsiz_pzQ3wNbdAgg9IHO480vszcwOcG_K3D-SOxD_cQxzF2G0WbCS_oXf1J_PEh_SAC8vMc9GoXg9gkQQ4"
                            alt="Preview Gambar" class="w-full h-full object-cover">
                        <!-- Hover Controls -->
                        <div
                            class="absolute inset-0 bg-slate-900/50 backdrop-blur-[2px] opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-3">
                            <label
                                class="px-3.5 py-2 bg-white hover:bg-slate-100 text-brand-navy font-bold text-xs rounded-lg shadow-sm cursor-pointer flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px]">photo_camera</span>
                                <span>Pilih Foto Baru</span>
                                <input type="file" name="image" accept="image/*" class="hidden"
                                    onchange="previewFile(event, 'add-img-preview', 'add-img-url')">
                            </label>
                            <button type="button" onclick="resetImage('add-img-preview', 'add-img-url')"
                                class="px-3 py-2 bg-rose-600 hover:bg-rose-700 text-white font-semibold text-xs rounded-lg shadow-sm flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px]">delete</span>
                                <span>Hapus</span>
                            </button>
                        </div>
                        <div
                            class="absolute bottom-2 left-2 bg-slate-900/70 text-white px-2 py-0.5 rounded text-[10px] font-mono flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span>Preview Terpasang</span>
                        </div>
                    </div>
                    <!-- URL Fallback Input -->
                    <div class="mt-2 flex items-center gap-2">
                        <span class="text-slate-400 text-[11px]">URL Foto:</span>
                        <input type="url" id="add-img-url" name="image_url"
                            class="flex-1 px-3 py-1.5 bg-white border border-surface-border rounded-lg text-xs"
                            placeholder="https://example.com/image.jpg"
                            onchange="updatePreviewFromUrl(this.value, 'add-img-preview')">
                    </div>
                </div>

                <!-- Title -->
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5" for="add-title">Judul Utama <span
                            class="text-rose-500">*</span></label>
                    <input type="text" id="add-title" name="title" required
                        placeholder="Contoh: Pesona Wisata &amp; Budaya Desa Kepongpongan"
                        class="w-full px-3.5 py-2.5 rounded-xl border border-surface-border text-xs font-bold text-slate-800 focus:outline-none focus:border-brand-navy">
                </div>

                <!-- Category & Status -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1.5" for="add-category">Kategori /
                            Eyebrow</label>
                        <input type="text" id="add-category" name="category" list="facility-categories"
                            placeholder="Contoh: Pemerintahan, Kesehatan, Pendidikan..."
                            class="w-full px-3 py-2 rounded-xl border border-surface-border text-xs font-semibold text-slate-800">

                        <datalist id="facility-categories">
                            <option value="Pemerintahan">
                            <option value="Kesehatan">
                            <option value="Pendidikan">
                            <option value="Lingkungan">
                            <option value="Ekonomi & UMKM">
                            <option value="Olahraga">
                            <option value="Keagamaan">
                            <option value="Sosial & Budaya">
                        </datalist>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1.5" for="add-status">Status
                            Penayangan</label>
                        <select id="add-status" name="is_active"
                            class="w-full px-3 py-2 rounded-xl border border-surface-border text-xs font-bold text-slate-800">
                            <option value="1">Aktif</option>
                            <option value="0">Nonaktif</option>
                        </select>
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5" for="add-desc">Deskripsi
                        Singkat</label>
                    <textarea id="add-desc" name="description" maxlength="255" rows="2"
                        placeholder="Uraikan penjelasan ringkas slide atau fasilitas..."
                        class="w-full px-3.5 py-2.5 rounded-xl border border-surface-border text-xs text-slate-700 resize-none">Sinergi kemitraan terpadu membina potensi desa dan memperkuat kemandirian warga.</textarea>
                </div>

                <!-- Footer Actions -->
                <div class="pt-4 border-t border-surface-border flex items-center justify-end gap-2.5">
                    <button type="button" onclick="closeAllModals()"
                        class="px-4 py-2 rounded-xl border border-surface-border text-xs font-semibold text-slate-600 hover:bg-slate-100">Batal</button>
                    <button type="submit"
                        class="px-5 py-2 rounded-xl bg-brand-navy hover:bg-brand-navy-dark text-white text-xs font-bold shadow-md flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px]">cloud_upload</span>
                        <span>Simpan &amp; Publikasikan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- ====================================================================
       MODAL 2: EDIT ITEM UNIVERSAL (INTERAKTIF GANTI FOTO, JUDUL, STATUS)
       ==================================================================== -->
    <div id="modal-edit-item" class="fixed inset-0 z-50 items-center justify-center p-4 sm:p-6 overflow-y-auto hidden">
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" onclick="closeAllModals()"></div>
        <div
            class="relative w-full max-w-2xl bg-white rounded-2xl shadow-2xl border border-surface-border overflow-hidden z-10 flex flex-col my-auto">
            <!-- Header -->
            <div
                class="px-6 py-5 border-b border-surface-border bg-gradient-to-r from-surface-muted to-white flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div
                        class="w-10 h-10 rounded-xl bg-brand-orange text-white flex items-center justify-center shadow-md shrink-0">
                        <span class="material-symbols-outlined text-[22px]">edit</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <h3 class="text-base font-bold text-brand-navy">Edit Konten Item</h3>
                            <span id="edit-badge-type"
                                class="text-[10px] font-bold uppercase tracking-wider bg-brand-orange-light text-brand-orange px-2 py-0.5 rounded">Hero
                                Slide</span>
                        </div>
                        <p class="text-xs text-slate-500">Perbarui rincian, foto pratinjau, atau ubah status tayang.</p>
                    </div>
                </div>
                <button onclick="closeAllModals()" class="p-1.5 text-slate-400 hover:text-slate-700 rounded-lg">
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>
            </div>

            <!-- Edit Form Body -->
            <form class="p-6 overflow-y-auto max-h-[calc(85vh-130px)] flex flex-col gap-4 text-xs font-body"
                id="form-edit-item" method="POST" onsubmit="handleEditFormSubmit(event)" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <input type="hidden" name="id" id="edit-item-id">
                <input type="hidden" id="edit-item-module">
                <!-- Photo Edit Section -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label class="block text-xs font-bold text-brand-navy">Foto Konten</label>
                        <span class="text-[11px] text-slate-400">Klik 'Ganti Foto' untuk memperbarui</span>
                    </div>
                    <div
                        class="relative w-full h-44 rounded-xl border border-surface-border bg-slate-100 overflow-hidden group">
                        <img id="edit-img-preview" src="" alt="Foto Konten" class="w-full h-full object-cover">
                        <!-- Edit Overlay Controls -->
                        <div
                            class="absolute inset-0 bg-slate-900/50 backdrop-blur-[2px] opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-3">
                            <label
                                class="px-3.5 py-2 bg-white hover:bg-slate-100 text-brand-navy font-bold text-xs rounded-lg shadow-sm cursor-pointer flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px]">photo_camera</span>
                                <span>Ganti Foto</span>
                                <input type="file" name="image" accept="image/*" class="hidden"
                                    onchange="previewFile(event, 'edit-img-preview', 'edit-img-url')">
                            </label>
                        </div>
                        <div
                            class="absolute bottom-2 left-2 bg-slate-900/70 text-white px-2 py-0.5 rounded text-[10px] font-mono">
                            <span>Foto Aktif</span>
                        </div>
                    </div>
                    <!-- URL Input for Editing -->
                    <div class="mt-2 flex items-center gap-2">
                        <span class="text-slate-400 text-[11px]">URL Foto:</span>
                        <input type="url" id="edit-img-url"
                            class="flex-1 px-3 py-1.5 bg-white border border-surface-border rounded-lg text-xs"
                            onchange="updatePreviewFromUrl(this.value, 'edit-img-preview')">
                    </div>
                </div>

                <!-- Title -->
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5" for="edit-title">Judul Item <span
                            class="text-rose-500">*</span></label>
                    <input type="text" id="edit-title" name="name" required
                        class="w-full px-3.5 py-2.5 rounded-xl border border-surface-border text-xs font-bold text-slate-800 focus:outline-none focus:border-brand-navy">
                </div>

                <!-- Category & Status -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1.5" for="edit-category">Kategori /
                            Sub-judul</label>
                        <input type="text" id="edit-category" name="category"
                            class="w-full px-3 py-2 rounded-xl border border-surface-border text-xs text-slate-800 focus:outline-none focus:border-brand-navy">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1.5" for="edit-status">Status Publikasi
                            (Enable / Disable)</label>
                        <select id="edit-status" name="is_active"
                            class="w-full px-3 py-2 rounded-xl border border-surface-border text-xs font-bold text-slate-800">
                            <option value="1">Aktif (Tampil di Website)</option>
                            <option value="0">Nonaktif (Disembunyikan)</option>
                        </select>
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5" for="edit-desc">Uraian /
                        Keterangan</label>
                    <textarea id="edit-desc" name="short_description" rows="3"
                        class="w-full px-3.5 py-2 rounded-xl border border-surface-border text-xs text-slate-700 resize-none"></textarea>
                </div>

                <!-- Footer Actions -->
                <div class="pt-4 border-t border-surface-border flex items-center justify-end gap-2.5">
                    <button type="button" onclick="closeAllModals()"
                        class="px-4 py-2 rounded-xl border border-surface-border text-xs font-semibold text-slate-600 hover:bg-slate-100">Batal</button>
                    <button type="submit"
                        class="px-5 py-2 rounded-xl bg-brand-orange hover:bg-brand-orange-hover text-white text-xs font-bold shadow-md flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px]">save</span>
                        <span>Simpan Perubahan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- ====================================================================
       MODAL 3: KONFIRMASI HAPUS INTERAKTIF (DELETE DIALOG)
       ==================================================================== -->
    <div id="modal-delete-confirm"
        class="fixed inset-0 z-50 items-center justify-center p-4 sm:p-6 overflow-y-auto hidden">
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" onclick="closeAllModals()"></div>
        <div
            class="relative w-full max-w-md bg-white rounded-2xl shadow-2xl border border-surface-border overflow-hidden z-10 flex flex-col my-auto p-6 text-center">
            <div
                class="w-14 h-14 rounded-2xl bg-rose-50 text-rose-600 flex items-center justify-center mx-auto mb-3 shadow-sm border border-rose-100">
                <span class="material-symbols-outlined text-[32px]">delete_forever</span>
            </div>
            <h3 class="text-base font-bold text-slate-900" id="del-confirm-title">Hapus Konten Ini?</h3>
            <p class="text-xs text-slate-500 mt-2 leading-relaxed" id="del-confirm-desc">Item ini akan dihapus secara
                permanen dari daftar dan tidak akan tampil lagi di website portal desa.</p>

            <div class="mt-6 flex items-center gap-3 w-full">
                <button type="button" onclick="closeAllModals()"
                    class="flex-1 py-2.5 rounded-xl border border-surface-border text-xs font-semibold text-slate-700 hover:bg-slate-100">Batal</button>
                <button type="button" id="btn-do-delete"
                    class="flex-1 py-2.5 rounded-xl bg-rose-600 hover:bg-rose-700 text-white text-xs font-bold shadow-md transition-colors">Ya,
                    Hapus Sekarang</button>
            </div>
        </div>
    </div>

    <!-- ================= TOAST NOTIFICATION CONTAINER ================= -->
    <div id="toast-container" class="fixed bottom-6 right-6 z-50 flex flex-col gap-2 pointer-events-none"></div>

    <!-- ================= JAVASCRIPT LOGIC (CRUD, MODAL, DISABLE/ENABLE, EDIT, PREVIEW) ================= -->
    <script>
    // Initial State Data
    const state = {
        heroSlides: {
            {
                Illuminate\ Support\ Js::from($heroSlides)
            }
        },

        facilities: {
            {
                Illuminate\ Support\ Js::from($facilitiesData)
            }
        },


        tourism: [{
                id: 1,
                title: "Wisata Tubing Sungai Cipager",
                category: "Petualangan & Alam",
                description: "Menyusuri riam sungai jernih 1,8 km dengan pemandu bersertifikasi dan bilas air hangat.",
                price: "Rp 45.000 / pax",
                image: "https://lh3.googleusercontent.com/aida-public/AB6AXuBTWGLtm9YY6ef35Y2t5ZCoAr2v4AvWilPXOSaT9ORujaQZsUrqLg4Acv7RUTvcp-DiN2ZhxtehuOGbu7oW1b0M7mvr5Hm-sHYc0LHSSTXL4tBvGQukE5qirWPu8GYaKDTrOSjLRvn5cn_r0S1OWMbgy0X1jXLCNmoyb2jJnpuAhvvkJRS8IM7e5z1eGLCY2sQsK-8nQLbNhqPHtsXbbfVy7kEdCJgBMEHMH_2e8mI",
                status: "Aktif"
            },
            {
                id: 2,
                title: "Kampoeng Edukasi Batik & Nila",
                category: "Edukasi & Budaya",
                description: "Pengalaman langsung mencanting kain batik mori pewarna alami ramah lingkungan.",
                price: "Rp 35.000 / pax",
                image: "https://lh3.googleusercontent.com/aida-public/AB6AXuAJWzkm1ux4cEhnVNvBMX2jTbEtCaY0IZiqZHUlO-QvNqS_NchrRPCUcJ7CuQc7hjrkVdQEobviPstR5JuesXMOF7ARcw2DQcFB5gtP3vo6ML2RIChn9hOjp-vSWv7gIWNQAcr9cUfrRQxm-Wyo1g2Qvcsiz_pzQ3wNbdAgg9IHO480vszcwOcG_K3D-SOxD_cQxzF2G0WbCS_oXf1J_PEh_SAC8vMc9GoXg9gkQQ4",
                status: "Aktif"
            },
            {
                id: 3,
                title: "Taman Agrowisata Buah & Sayur",
                category: "Agrowisata",
                description: "Sensasi petik langsung mangga gedong gincu dan melon hidroponik di saung kuliner.",
                price: "Rp 25.000 / pax",
                image: "https://lh3.googleusercontent.com/aida-public/AB6AXuBmtM7W4-7SSR0XF299XwjsHpM-nzxQ2oVQGbXpJQ1OksFCisP6d825U6HFQaY-642yjX9giri83oSKT9LFdylJdigQZyrR9RQefZaQkx-9y53OxDWQMitUKGEwaIqoz5MrV7zeKdj7DjXKlebUvmr60cuIU1G87DBS6kCiL9SV-zBLCVVsBrLsT1ruluUJ9gENjUbZy2YBMxmwzxu27CL4Ah8BnKvdeIQWUdPwtZY",
                status: "Aktif"
            }
        ]
    };

    let itemToDelete = null;

    // Toast Notification helper
    function showToast(message, type = 'success') {
        const container = document.getElementById('toast-container');
        const toast = document.createElement('div');
        toast.className = `p-3 px-4 rounded-xl shadow-lg border text-xs font-semibold flex items-center gap-2 transition-all transform duration-300 translate-y-2 pointer-events-auto ${
        type === 'success' ? 'bg-emerald-900/90 text-white border-emerald-700' :
        type === 'warning' ? 'bg-amber-900/90 text-white border-amber-700' :
        'bg-slate-900/90 text-white border-slate-700'
      }`;
        toast.innerHTML = `
        <span class="material-symbols-outlined text-[18px] text-emerald-400">check_circle</span>
        <span>${message}</span>
      `;
        container.appendChild(toast);
        setTimeout(() => {
            toast.classList.remove('translate-y-2');
        }, 10);
        setTimeout(() => {
            toast.classList.add('opacity-0', 'translate-y-2');
            setTimeout(() => toast.remove(), 300);
        }, 3500);
    }

    // Modal Control
    function closeAllModals() {
        document.getElementById('modal-add-item').classList.add('hidden');
        document.getElementById('modal-add-item').classList.remove('flex');
        document.getElementById('modal-edit-item').classList.add('hidden');
        document.getElementById('modal-edit-item').classList.remove('flex');
        document.getElementById('modal-delete-confirm').classList.add('hidden');
        document.getElementById('modal-delete-confirm').classList.remove('flex');
    }

    function openAddModal(type) {
        const modal = document.getElementById('modal-add-item');
        const form = document.getElementById('form-add-item');

        modal.classList.remove('hidden');
        modal.classList.add('flex');

        document.getElementById('add-title').value = '';
        document.getElementById('add-desc').value = '';
        document.getElementById('add-category').value = '';
        document.getElementById('add-status').value = '1';

        if (type === 'facility') {
            form.action = "{{ route('admin.facilities.store') }}";

            document.getElementById('add-title').name = 'name';
            document.getElementById('add-desc').name = 'short_description';

            document.getElementById('modal-add-title').textContent =
                'Tambah Fasilitas Baru';

        } else if (type === 'slide') {
            form.action = "{{ route('admin.hero-slides.store') }}";

            document.getElementById('add-title').name = 'title';
            document.getElementById('add-desc').name = 'description';

            document.getElementById('modal-add-title').textContent =
                'Tambah Konten Baru - Slide Hero';
        }

    }

    // Image preview from file upload
    function previewFile(event, previewId, urlInputId) {
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById(previewId).src = e.target.result;

                // Clear URL because a local file was selected
                if (urlInputId) {
                    document.getElementById(urlInputId).value = '';
                }

                showToast(`Foto '${file.name}' siap diunggah!`);
            };

            reader.readAsDataURL(file);
        }
    }

    function updatePreviewFromUrl(url, previewId) {
        if (url) {
            document.getElementById(previewId).src = url;
            showToast('Gambar pratinjau diperbarui dari URL!');
        }
    }

    function resetImage(previewId, urlInputId) {
        document.getElementById(previewId).src =
            "https://images.unsplash.com/photo-1518780664697-55e3ad937233?auto=format&fit=crop&w=800&q=80";
        if (urlInputId) document.getElementById(urlInputId).value = "";
        showToast('Foto dikembalikan ke default.', 'warning');
    }

    // Render Hero Slides
    function renderHeroSlides() {
        const container = document.getElementById('hero-slides-grid');
        container.innerHTML = '';
        state.heroSlides.forEach((slide) => {
            const isActive = slide.status === 'Aktif';
            const card = document.createElement('div');
            card.className =
                `rounded-xl border ${isActive ? 'border-surface-border bg-white' : 'border-dashed border-slate-300 bg-slate-50/70'} overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col`;
            card.id = `hero-slide-${slide.id}`;
            card.innerHTML = `
          <div class="relative h-40 w-full overflow-hidden bg-slate-100">
            <img src="${slide.image}" alt="${slide.title}" class="w-full h-full object-cover ${!isActive ? 'grayscale opacity-75' : ''}">
            <div class="absolute top-2.5 left-2.5">
              <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded shadow-sm ${isActive ? 'bg-brand-orange text-white' : 'bg-slate-200 text-slate-700'}">
                Slide #${slide.id}
              </span>
            </div>
            <!-- Interactive Disable/Enable Toggle Badge -->
            <div class="absolute top-2.5 right-2.5">
              <button type="button" onclick="toggleStatus('heroSlides', ${slide.id})" class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold shadow-sm transition-all cursor-pointer ${
                isActive 
                  ? 'bg-emerald-500 hover:bg-emerald-600 text-white' 
                  : 'bg-slate-600 hover:bg-slate-700 text-white'
              }" title="Klik untuk mengaktifkan / menonaktifkan">
                <span class="w-1.5 h-1.5 rounded-full ${isActive ? 'bg-white animate-pulse' : 'bg-slate-400'}"></span>
                <span>${slide.status}</span>
              </button>
            </div>
          </div>
          <div class="p-4 flex-1 flex flex-col justify-between">
            <div>
              <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">${slide.category}</span>
              <h3 class="font-bold text-xs text-brand-navy mt-1 line-clamp-2">${slide.title}</h3>
              <p class="text-[11px] text-slate-500 mt-1 line-clamp-2">${slide.description}</p>
            </div>
            <!-- Action Buttons: Edit, Delete, Toggle -->
            <div class="mt-4 pt-3 border-t border-surface-border flex items-center justify-between">
              <button type="button" onclick="toggleStatus('heroSlides', ${slide.id})" class="text-xs font-semibold ${isActive ? 'text-slate-500 hover:text-slate-700' : 'text-emerald-600 hover:text-emerald-700'} flex items-center gap-1">
                <span class="material-symbols-outlined text-[16px]">${isActive ? 'visibility_off' : 'visibility'}</span>
                <span>${isActive ? 'Nonaktifkan' : 'Aktifkan'}</span>
              </button>
              <div class="flex items-center gap-1">
                <button type="button" onclick="openEditModal('heroSlides', ${slide.id})" class="p-1.5 text-brand-navy hover:bg-surface-hover rounded-lg transition-colors" title="Edit Slide">
                  <span class="material-symbols-outlined text-[18px]">edit</span>
                </button>
                <button type="button" onclick="confirmDelete('heroSlides', ${slide.id}, '${slide.title}')" class="p-1.5 text-rose-500 hover:bg-rose-50 rounded-lg transition-colors" title="Hapus Slide">
                  <span class="material-symbols-outlined text-[18px]">delete</span>
                </button>
              </div>
            </div>
          </div>
        `;
            container.appendChild(card);
        });
        document.getElementById('badge-hero-count').textContent = `${state.heroSlides.length} Slide`;
        document.getElementById('kpi-hero-count').textContent = state.heroSlides.length;
    }

    // Render Facilities
    function renderFacilities() {
        const container = document.getElementById('facilities-list-container');
        container.innerHTML = '';
        state.facilities.forEach((fac) => {
            const isActive = fac.status === 'Aktif';
            const item = document.createElement('div');
            item.className =
                `p-4 rounded-xl border ${isActive ? 'border-surface-border bg-white' : 'border-dashed border-slate-300 bg-slate-50'} shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-4`;
            item.id = `facility-item-${fac.id}`;
            item.innerHTML = `
          <div class="flex items-center gap-3">
            <img src="${fac.image}" alt="${fac.title}" class="w-16 h-12 object-cover rounded-lg shrink-0 ${!isActive ? 'grayscale' : ''}">
            <div>
              <div class="flex items-center gap-2">
                <h3 class="font-bold text-xs text-brand-navy">${fac.title}</h3>
                <span class="text-[10px] font-bold bg-slate-100 text-slate-600 px-2 py-0.5 rounded">${fac.category}</span>
              </div>
              <p class="text-[11px] text-slate-500 mt-0.5">${fac.description}</p>
            </div>
          </div>
          <div class="flex items-center gap-2 shrink-0 self-end sm:self-center">
            <button type="button" onclick="toggleStatus('facilities', ${fac.id})" class="px-2.5 py-1 rounded-full text-[11px] font-bold ${isActive ? 'bg-emerald-100 text-emerald-800' : 'bg-slate-200 text-slate-600'}">
              ${fac.status}
            </button>
            <button type="button" onclick="openEditModal('facilities', ${fac.id})" class="p-1.5 text-brand-navy hover:bg-surface-hover rounded-lg">
              <span class="material-symbols-outlined text-[18px]">edit</span>
            </button>
            <button type="button" onclick="confirmDelete('facilities', ${fac.id}, '${fac.title}')" class="p-1.5 text-rose-500 hover:bg-rose-50 rounded-lg">
              <span class="material-symbols-outlined text-[18px]">delete</span>
            </button>
          </div>
        `;
            container.appendChild(item);
        });
        document.getElementById('badge-fac-count').textContent = state.facilities.length;
        document.getElementById('kpi-fac-count').textContent = state.facilities.length;
    }

    // Render Tourism
    function renderTourism() {
        const container = document.getElementById('tourism-cards-container');
        container.innerHTML = '';
        state.tourism.forEach((tour) => {
            const isActive = tour.status === 'Aktif';
            const card = document.createElement('div');
            card.className =
                `p-4 rounded-xl border ${isActive ? 'border-surface-border bg-white' : 'border-dashed border-slate-300 bg-slate-50'} shadow-sm flex flex-col justify-between`;
            card.id = `tour-item-${tour.id}`;
            card.innerHTML = `
          <div>
            <div class="relative h-32 w-full rounded-lg overflow-hidden mb-3">
              <img src="${tour.image}" alt="${tour.title}" class="w-full h-full object-cover ${!isActive ? 'grayscale' : ''}">
              <span class="absolute top-2 right-2 text-[10px] font-bold bg-white/90 backdrop-blur-sm px-2 py-0.5 rounded text-brand-navy">
                ${tour.price}
              </span>
            </div>
            <span class="text-[10px] font-bold text-brand-orange uppercase">${tour.category}</span>
            <h3 class="font-bold text-xs text-brand-navy mt-0.5">${tour.title}</h3>
            <p class="text-[11px] text-slate-500 mt-1">${tour.description}</p>
          </div>
          <div class="mt-4 pt-3 border-t border-surface-border flex items-center justify-between">
            <button type="button" onclick="toggleStatus('tourism', ${tour.id})" class="text-xs font-bold ${isActive ? 'text-emerald-700' : 'text-slate-500'}">
              ● ${tour.status}
            </button>
            <div class="flex items-center gap-1">
              <button type="button" onclick="openEditModal('tourism', ${tour.id})" class="p-1.5 text-brand-navy hover:bg-surface-hover rounded-lg">
                <span class="material-symbols-outlined text-[18px]">edit</span>
              </button>
              <button type="button" onclick="confirmDelete('tourism', ${tour.id}, '${tour.title}')" class="p-1.5 text-rose-500 hover:bg-rose-50 rounded-lg">
                <span class="material-symbols-outlined text-[18px]">delete</span>
              </button>
            </div>
          </div>
        `;
            container.appendChild(card);
        });
        document.getElementById('badge-tour-count').textContent = `${state.tourism.length} Paket`;
        document.getElementById('kpi-tour-count').textContent = state.tourism.length;
    }

    // Toggle Status (Enable / Disable)
    function toggleStatus(module, id) {
        const item = state[module].find(x => x.id === id);
        if (item) {
            item.status = item.status === 'Aktif' ? 'Nonaktif' : 'Aktif';
            showToast(`'${item.title}' kini berstatus: ${item.status}!`);
            if (module === 'heroSlides') renderHeroSlides();
            if (module === 'facilities') renderFacilities();
            if (module === 'tourism') renderTourism();
        }
    }

    // Open Edit Modal
    function openEditModal(module, id) {
        const item = state[module].find(x => x.id === id);
        if (!item) return;

        document.getElementById('edit-item-id').value = item.id;
        document.getElementById('edit-item-module').value = module;
        // Set update URL and field names based on module
        const form = document.getElementById('form-edit-item');

        if (module === 'facilities') {
            form.action = "{{ route('admin.facilities.update', ':id') }}"
                .replace(':id', id);

            document.getElementById('edit-title').name = 'name';
            document.getElementById('edit-desc').name = 'short_description';

        } else if (module === 'heroSlides') {
            form.action = "{{ route('admin.hero-slides.update', ':id') }}"
                .replace(':id', id);

            document.getElementById('edit-title').name = 'title';
            document.getElementById('edit-desc').name = 'description';
        }
        document.getElementById('edit-title').value = item.title;
        document.getElementById('edit-category').value = item.category || '';
        document.getElementById('edit-desc').value = item.description || '';
        document.getElementById('edit-status').value =
            item.status === 'Aktif' ? '1' : '0';
        document.getElementById('edit-img-preview').src = item.image;
        document.getElementById('edit-img-url').value = item.image;
        document.getElementById('edit-badge-type').textContent = module === 'heroSlides' ? 'Hero Slide' : module ===
            'facilities' ? 'Fasilitas' : 'Wisata';

        const modal = document.getElementById('modal-edit-item');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    // Handle Edit Submit
    function handleEditFormSubmit(e) {
        e.preventDefault();

        const module = document.getElementById('edit-item-module').value;

        // Save Facilities changes to database
        if (module === 'facilities' || module === 'heroSlides') {
            HTMLFormElement.prototype.submit.call(e.target);
            return;
        }

        // Keep the existing frontend behavior for other modules
        const id = parseInt(document.getElementById('edit-item-id').value, 10);
        const item = state[module].find(x => x.id === id);

        if (item) {
            item.title = document.getElementById('edit-title').value;
            item.category = document.getElementById('edit-category').value;
            item.description = document.getElementById('edit-desc').value;
            item.status = document.getElementById('edit-status').value;
            item.image = document.getElementById('edit-img-preview').src;

            closeAllModals();
            showToast(`Perubahan '${item.title}' berhasil disimpan!`);

            if (module === 'heroSlides') renderHeroSlides();
            if (module === 'facilities') renderFacilities();
            if (module === 'tourism') renderTourism();
        }
    }


    // Delete Confirmation & Execution
    function confirmDelete(module, id, title) {
        itemToDelete = {
            module,
            id,
            title
        };
        document.getElementById('del-confirm-title').textContent = `Hapus '${title}'?`;
        const modal = document.getElementById('modal-delete-confirm');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    document.getElementById('btn-do-delete').addEventListener('click', function() {
        if (!itemToDelete) return;

        const {
            module,
            id,
            title
        } = itemToDelete;

        const deleteRoutes = {
            heroSlides: "{{ route('admin.hero-slides.destroy', ':id') }}",
            facilities: "{{ route('admin.facilities.destroy', ':id') }}"
        };

        // Delete real database records
        if (deleteRoutes[module]) {
            const form = document.createElement('form');

            form.method = 'POST';
            form.action = deleteRoutes[module].replace(':id', id);

            const token = document.querySelector(
                '#form-add-item input[name="_token"]'
            ).value;

            const csrf = document.createElement('input');
            csrf.type = 'hidden';
            csrf.name = '_token';
            csrf.value = token;

            const method = document.createElement('input');
            method.type = 'hidden';
            method.name = '_method';
            method.value = 'DELETE';

            form.appendChild(csrf);
            form.appendChild(method);

            document.body.appendChild(form);
            form.submit();

            return;
        }

        // Temporary behavior for modules not connected to database yet
        state[module] = state[module].filter(x => x.id !== id);

        closeAllModals();
        showToast(`'${title}' telah dihapus!`, 'warning');

        if (module === 'heroSlides') renderHeroSlides();
        if (module === 'facilities') renderFacilities();
        if (module === 'tourism') renderTourism();

        itemToDelete = null;
    });

    // Modular View Switching
    function switchView(viewId) {
        document.querySelectorAll('.module-view').forEach(view => {
            view.classList.add('hidden');
            view.classList.remove('flex');
        });
        const target = document.getElementById(viewId);
        if (target) {
            target.classList.remove('hidden');
            target.classList.add('flex');
        }

        // Update sidebar nav active styling
        document.querySelectorAll('#admin-nav button').forEach(btn => {
            if (btn.getAttribute('data-target') === viewId) {
                btn.className =
                    "nav-item w-full flex items-center justify-between px-3 py-2.5 rounded-lg bg-brand-navy text-white font-semibold text-sm transition-all";
            } else {
                btn.className =
                    "nav-item w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-600 hover:bg-surface-hover hover:text-brand-navy font-medium text-sm transition-all";
            }
        });

        // Update Breadcrumb
        const names = {
            'view-dashboard': 'Ringkasan Dashboard',
            'view-hero': 'Hero & Slider Beranda',
            'view-facilities': 'Sarana & Fasilitas',
            'view-tourism': 'Wisata & Reservasi',
            'view-pillars': '4 Pilar Astra',
            'view-news': 'Kabar & Agenda',
            'view-faq': 'Tanya Jawab (FAQ)'
        };
        document.getElementById('breadcrumb-title').textContent = names[viewId] || 'Admin';
    }

    // Initial render on load
    window.addEventListener('DOMContentLoaded', () => {
        renderHeroSlides();
        renderFacilities();
        renderTourism();
    });
    </script>
</body>

</html>