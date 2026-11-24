<!DOCTYPE html>
<html lang="id" >

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_standard" name="shell-type">
    <title>Astra Desa Digital - Desa Kepongpongan Cirebon</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <style>
    @layer base {

        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            overscroll-behavior: none;
        }

        main>:first-child {
            margin-top: 0 !important;
        }

        main>:last-child {
            margin-bottom: 0 !important;
        }
    }

    ::-webkit-scrollbar {
        display: none;
    }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "background": "#fbf8ff",
                    "on-secondary-container": "#5a1c00",
                    "surface-tint": "#4f54b4",
                    "on-surface-variant": "#464652",
                    "inverse-surface": "#2f303b",
                    "on-primary": "#ffffff",
                    "tertiary": "#481900",
                    "tertiary-fixed": "#ffdbcc",
                    "tertiary-fixed-dim": "#ffb693",
                    "primary": "#14147c",
                    "on-error": "#ffffff",
                    "secondary-container": "#fc6c29",
                    "secondary-fixed-dim": "#ffb599",
                    "outline": "#777683",
                    "on-secondary-fixed-variant": "#7f2b00",
                    "error-container": "#ffdad6",
                    "secondary": "#a63b00",
                    "on-tertiary": "#ffffff",
                    "on-primary-fixed": "#04006d",
                    "surface-variant": "#e2e1f0",
                    "primary-container": "#2d3091",
                    "on-tertiary-container": "#f0905f",
                    "on-secondary-fixed": "#370e00",
                    "surface-container-low": "#f4f2ff",
                    "on-background": "#1a1b25",
                    "on-tertiary-fixed-variant": "#773207",
                    "error": "#ba1a1a",
                    "on-primary-container": "#9ca0ff",
                    "surface-bright": "#fbf8ff",
                    "on-error-container": "#93000a",
                    "secondary-fixed": "#ffdbce",
                    "surface-container-lowest": "#ffffff",
                    "primary-fixed": "#e1e0ff",
                    "surface-container-highest": "#e2e1f0",
                    "surface-container": "#eeecfc",
                    "surface-dim": "#dad8e8",
                    "inverse-on-surface": "#f1efff",
                    "on-tertiary-fixed": "#351000",
                    "on-secondary": "#ffffff",
                    "inverse-primary": "#c0c1ff",
                    "outline-variant": "#c7c5d4",
                    "surface-container-high": "#e8e7f6",
                    "primary-fixed-dim": "#c0c1ff",
                    "on-primary-fixed-variant": "#373a9b",
                    "tertiary-container": "#6b2900",
                    "surface": "#fbf8ff",
                    "on-surface": "#1a1b25"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "space-xs": "0.25rem",
                    "space-md": "1rem",
                    "space-sm": "0.5rem",
                    "space-xl": "2.5rem",
                    "space-lg": "1.5rem",
                    "margin-mobile": "1rem",
                    "gutter-mobile": "1rem",
                    "gutter": "1.5rem",
                    "margin": "2rem"
                },
                "fontFamily": {
                    "headline-lg": ["Plus Jakarta Sans"],
                    "title-md": ["Plus Jakarta Sans"],
                    "body-sm": ["Inter"],
                    "headline-sm": ["Plus Jakarta Sans"],
                    "label-md": ["Plus Jakarta Sans"],
                    "headline-lg-mobile": ["Plus Jakarta Sans"],
                    "body-lg": ["Inter"],
                    "headline-md": ["Plus Jakarta Sans"],
                    "label-sm": ["Plus Jakarta Sans"],
                    "label-lg": ["Plus Jakarta Sans"],
                    "display": ["Plus Jakarta Sans"],
                    "body-md": ["Inter"],
                    "display-mobile": ["Plus Jakarta Sans"]
                },
                "fontSize": {
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.015em",
                        "fontWeight": "700"
                    }],
                    "title-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "600"
                    }],
                    "body-sm": ["12px", {
                        "lineHeight": "18px",
                        "fontWeight": "400"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }],
                    "label-md": ["12px", {
                        "lineHeight": "16px",
                        "letterSpacing": "0.02em",
                        "fontWeight": "600"
                    }],
                    "headline-lg-mobile": ["26px", {
                        "lineHeight": "34px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "700"
                    }],
                    "body-lg": ["16px", {
                        "lineHeight": "26px",
                        "fontWeight": "400"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "label-sm": ["11px", {
                        "lineHeight": "14px",
                        "letterSpacing": "0.03em",
                        "fontWeight": "600"
                    }],
                    "label-lg": ["14px", {
                        "lineHeight": "20px",
                        "letterSpacing": "0.01em",
                        "fontWeight": "600"
                    }],
                    "display": ["44px", {
                        "lineHeight": "52px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "body-md": ["14px", {
                        "lineHeight": "22px",
                        "fontWeight": "400"
                    }],
                    "display-mobile": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.015em",
                        "fontWeight": "700"
                    }]
                }
            }
        }
    };
    </script>
</head>

<body
    class="bg-surface font-body-md text-body-md text-on-surface antialiased selection:bg-secondary-fixed selection:text-on-secondary-fixed">
    <header
        class="fixed top-0 left-0 right-0 z-50 bg-surface-container-lowest/95 backdrop-blur-md shadow-[0_2px_8px_-2px_rgba(45,48,145,0.06),0_1px_3px_0_rgba(37,38,49,0.03)] border-b border-surface-variant/70">
        <div
            class="h-20 max-w-[1440px] mx-auto px-margin-mobile lg:px-margin flex items-center justify-between gap-gutter">
            <div class="flex items-center gap-space-md shrink-0"><img alt="Astra Desa Digital Logo"
                    class="h-8 w-auto object-contain"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkX_1CoJVhj7scmo1HEosqxOp5uoD1oOi1pqghml1oOCoAHPjpJCSZzhamOWoKrcgCLA3O_PK3mPZtgHI-NZtqc65wUgMDaSaVPzoJ67RfUyEuuji2pdPILVb-zAMXsH-GKbd0OUmKCkWGDo1G_Vmt4h-6V_K6y3lAOX47ZMRIe0Ek5tXwd0-jjkrVDvH16fNTabPCuw79j8vnHCBq1Op_pqf6CHHvu0gFvFqWZBIpo3jvLo9b_JDL">
                <div class="flex flex-col"><span
                        class="font-title-md text-title-md text-primary tracking-tight leading-none">Astra Desa
                        Digital</span><span
                        class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Kepongpongan, Cirebon</span>
                </div>
            </div>
            <nav class="hidden xl:flex items-center gap-1"
                data-active-classes="bg-surface-container text-primary font-bold rounded-lg shadow-sm"><a
                    class="font-label-lg text-label-lg text-on-surface-variant px-3 py-2 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors"
                    data-path="beranda" href="#">Beranda</a><a
                    class="font-label-lg text-label-lg text-on-surface-variant px-3 py-2 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors"
                    data-path="profil-desa" href="#">Profil Desa</a><a
                    class="font-label-lg text-label-lg text-on-surface-variant px-3 py-2 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors"
                    data-path="wisata-kampung" href="#">Program</a><a
                    class="font-label-lg text-label-lg text-on-surface-variant px-3 py-2 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors"
                    data-path="program-desa" href="#">Wisata</a><a
                    class="font-label-lg text-label-lg text-on-surface-variant px-3 py-2 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors"
                    data-path="berita" href="#">Berita</a><a
                    class="font-label-lg text-label-lg text-on-surface-variant px-3 py-2 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors"
                    data-path="kontak" href="#">Kontak</a></nav>
            <div class="flex items-center gap-space-sm sm:gap-space-md shrink-0">
                <div class="pl-1 border-l border-outline-variant/60"></div>
            </div>
        </div>
    </header>
    <main class="w-full pt-20 bg-surface min-h-[calc(100vh-20rem)]">
        <div class="flex flex-col w-full">
            <!-- Top Utility & Breadcrumb Bar -->
            <section class="w-full bg-surface-container-low py-6">
                <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
                    <!-- Breadcrumbs -->
                    <nav aria-label="Breadcrumb"
                        class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md mb-4">
                        <a class="hover:text-primary transition-colors flex items-center gap-1" data-path="beranda"
                            href="#">
                            <span class="material-symbols-outlined text-[16px]">home</span>
                            Beranda
                        </a>
                        <span class="material-symbols-outlined text-[14px] text-outline">chevron_right</span>
                        <span class="text-on-surface font-semibold">Sarana Kampung</span>
                        <span class="material-symbols-outlined text-[14px] text-outline">chevron_right</span>
                        <span class="text-secondary font-semibold">Direktori Pemetaan Infrastruktur</span>
                    </nav>
                    <!-- Page Header & Overview Metrics -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-end">
                        <div class="lg:col-span-8 flex flex-col gap-2">
                            <div
                                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed w-fit font-label-sm text-label-sm">
                                <span class="w-2 h-2 rounded-full bg-secondary-container animate-ping"></span>
                                Database Infrastruktur Pemdes Kepongpongan Terverifikasi
                            </div>
                            <h1 class="font-headline-lg text-headline-lg text-primary tracking-tight"></h1>
                            <h2 class="font-headline-lg text-headline-lg text-primary"
                                style="--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; --tw-text-opacity: 1; color: rgb(20, 20, 124); user-select: text !important; outline: none !important; box-shadow: none !important;">
                                Sarana Fasilitas Unggulan Warga</h2>
                            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">
                                Transparansi dan pemetaan infrastruktur publik, fasilitas kesehatan, pendidikan, serta
                                ruang terbuka komunitas Desa Kepongpongan berbasis pemantauan berkala dan partisipasi
                                warga.
                            </p>
                        </div>
                        <!-- Quick Summary Stats Bento Widget -->
                        <div class="lg:col-span-4 grid grid-cols-3 gap-3">



                        </div>
                    </div>
                </div>
            </section>
            <!-- Interactive Controls: Live Search, RW Selection, & Map/List Toggle -->
            <section class="w-full bg-surface-container-lowest shadow-sm sticky top-20 z-30">
                <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin py-4">
                    <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
                        <!-- Search Input -->
                        <div class="relative flex-1 max-w-2xl">
                            <div
                                class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-outline">
                                <span class="material-symbols-outlined text-[20px]">search</span>
                            </div>
                            <input
                                class="w-full pl-10 pr-10 py-2.5 rounded-lg bg-surface-container-low text-on-surface placeholder:text-outline font-body-md text-body-md focus:outline-none focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary-container transition-all"
                                id="facilitySearch" placeholder="Cari nama sarana, lokasi, atau fasilitas..."
                                type="text">
                            <button
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-outline hover:text-on-surface hidden"
                                id="clearSearchBtn">
                                <span class="material-symbols-outlined text-[18px]">cancel</span>
                            </button>
                        </div>
                        <!-- Secondary Controls: RW Filter & View Toggles -->
                        <div class="flex items-center gap-3 shrink-0">
                            <!-- RW Filter Dropdown -->
                            <div class="relative">
                                <select
                                    class="appearance-none bg-surface-container-low text-on-surface font-label-md text-label-md py-2.5 pl-3.5 pr-9 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-container cursor-pointer"
                                    id="rwFilter">
                                    <option value="all">Semua Wilayah RW</option>
                                    <option value="RW 01">RW 01 - Dusun Krajan</option>
                                    <option value="RW 02">RW 02 - Dusun Cantilan</option>
                                    <option value="RW 03">RW 03 - Dusun Kidul</option>
                                    <option value="RW 04">RW 04 - Dusun Cirebon Girang</option>
                                    <option value="RW 05">RW 05 - Dusun Kebon Baru</option>
                                    <option value="RW 06">RW 06 - Dusun Sariwangi</option>
                                    <option value="RW 07">RW 07 - Dusun Rancagede</option>
                                    <option value="RW 08">RW 08 - Dusun Kertaharja</option>
                                </select>
                                <div
                                    class="absolute inset-y-0 right-0 pr-2.5 flex items-center pointer-events-none text-outline">
                                    <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
                                </div>
                            </div>
                            <!-- View Mode Toggle -->

                        </div>
                    </div>
                </div>
            </section>
            <!-- Category Pills Filter Bar -->
            <section class="w-full bg-surface py-5">
                <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="flex items-center gap-2 overflow-x-auto pb-2 scrollbar-none"
                        id="categoryFilterContainer">
                        <button
                            class="category-pill active flex items-center gap-2 px-4 py-2 rounded-full font-label-md text-label-md shrink-0 bg-primary-container text-on-primary transition-all shadow-sm"
                            data-cat="all">
                            <span>Semua Fasilitas</span>
                            <span
                                class="bg-surface-container-lowest/20 px-2 py-0.5 rounded-full text-label-sm font-bold">28</span>
                        </button>
                        <button
                            class="category-pill flex items-center gap-2 px-4 py-2 rounded-full font-label-md text-label-md shrink-0 bg-surface-container text-on-surface-variant hover:bg-surface-container-high transition-all"
                            data-cat="pemerintahan">
                            <span>Publik &amp; Pemerintahan</span>
                            <span
                                class="bg-surface-container-lowest px-2 py-0.5 rounded-full text-label-sm font-semibold text-primary">6</span>
                        </button>
                        <button
                            class="category-pill flex items-center gap-2 px-4 py-2 rounded-full font-label-md text-label-md shrink-0 bg-surface-container text-on-surface-variant hover:bg-surface-container-high transition-all"
                            data-cat="pendidikan">
                            <span>Pendidikan &amp; Literasi</span>
                            <span
                                class="bg-surface-container-lowest px-2 py-0.5 rounded-full text-label-sm font-semibold text-primary">5</span>
                        </button>
                        <button
                            class="category-pill flex items-center gap-2 px-4 py-2 rounded-full font-label-md text-label-md shrink-0 bg-surface-container text-on-surface-variant hover:bg-surface-container-high transition-all"
                            data-cat="kesehatan">
                            <span>Kesehatan &amp; Posyandu</span>
                            <span
                                class="bg-surface-container-lowest px-2 py-0.5 rounded-full text-label-sm font-semibold text-primary">7</span>
                        </button>
                        <button
                            class="category-pill flex items-center gap-2 px-4 py-2 rounded-full font-label-md text-label-md shrink-0 bg-surface-container text-on-surface-variant hover:bg-surface-container-high transition-all"
                            data-cat="infrastruktur">
                            <span>Infrastruktur &amp; Sanitasi</span>
                            <span
                                class="bg-surface-container-lowest px-2 py-0.5 rounded-full text-label-sm font-semibold text-primary">5</span>
                        </button>
                        <button
                            class="category-pill flex items-center gap-2 px-4 py-2 rounded-full font-label-md text-label-md shrink-0 bg-surface-container text-on-surface-variant hover:bg-surface-container-high transition-all"
                            data-cat="lingkungan">
                            <span>Lingkungan &amp; Bank Sampah</span>
                            <span
                                class="bg-surface-container-lowest px-2 py-0.5 rounded-full text-label-sm font-semibold text-primary">3</span>
                        </button>
                        <button
                            class="category-pill flex items-center gap-2 px-4 py-2 rounded-full font-label-md text-label-md shrink-0 bg-surface-container text-on-surface-variant hover:bg-surface-container-high transition-all"
                            data-cat="darurat">
                            <span>Tanggap Darurat &amp; Evakuasi</span>
                            <span
                                class="bg-surface-container-lowest px-2 py-0.5 rounded-full text-label-sm font-semibold text-primary">2</span>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Interactive Map Canvas Section (Toggleable or Featured Companion) -->
            <section class="w-full pb-8" id="mapSection">

            </section>
            <!-- Facility Cards Grid Section -->
            <section class="w-full pb-16">
                <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
                    <!-- Section Title & Counter Results -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-2">
                            <h2 class="font-headline-sm text-headline-sm text-primary">Daftar Inventaris Sarana Desa
                            </h2>
                            <span
                                class="px-2.5 py-0.5 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm"
                                id="resultCountBadge">Menampilkan 6 dari 28</span>
                        </div>
                        <div class="text-on-surface-variant font-body-sm text-body-sm hidden sm:block">
                            Terakhir diperbarui: <span class="font-semibold text-on-surface">14 Februari 2025</span>
                        </div>
                    </div>
                    <!-- Grid Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter" id="facilityGrid">
                        <!-- Card 1: Kantor Kuwu & Balai Desa Digital -->
                        <div class="facility-card bg-surface-container-lowest rounded-2xl p-5 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                            data-category="pemerintahan" data-name="Kantor Kuwu Balai Desa Digital Kepongpongan"
                            data-rw="RW 02">
                            <div>
                                <!-- Card Image Media -->
                                <div class="relative w-full h-48 rounded-xl overflow-hidden mb-4">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        data-alt="Modern Indonesian village hall office building at Kepongpongan Talun Cirebon with clean paved front yard, Indonesian national flag, modern digital service kiosk signage, bright daylight, welcoming civic atmosphere in photorealistic style."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD0l4PjXKBglGinUiN5svan7SxZvVUjYVzj7xfFGQDrwDnHwzct4OFw7B9JufVIgP5_IkBLbPeik-rE-iIZDOiJBOHvWDS1t7rAU8BBc5z34XhOSS25Qnk5ZMoVenWVOise9bjNXsosS7zqXE7Nb3T9O9EqvmR-a_jCXXOSPH8NIF169AtCK1CTp4lYrD9SmnMwPSSiEcAq4wcW8FdyVmHMEgIg5IZF35qC499lyA8">
                                    <div class="absolute top-3 left-3 flex gap-2">
                                        <span
                                            class="px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold bg-surface-container-lowest/95 backdrop-blur-sm text-primary shadow-sm">
                                            Pemerintahan
                                        </span>
                                        <span
                                            class="px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold bg-emerald-500/15 text-emerald-800 backdrop-blur-sm">
                                            Sangat Baik
                                        </span>
                                    </div>
                                    <div
                                        class="absolute bottom-3 right-3 px-2.5 py-1 rounded-lg bg-surface-container-lowest/90 backdrop-blur-sm font-label-sm text-label-sm font-bold text-on-surface flex items-center gap-1 shadow-sm">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
                                        RW 02
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="flex flex-col gap-1.5">
                                    <div
                                        class="flex items-center gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                                        <span class="material-symbols-outlined text-[16px] text-primary">schedule</span>
                                        Jam Layanan: 08:00 - 15:30 WIB
                                    </div>
                                    <h3
                                        class="font-title-md text-title-md text-primary font-bold line-clamp-1 group-hover:text-secondary-container transition-colors">
                                        Kantor Kuwu &amp; Balai Desa Digital Kepongpongan
                                    </h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
                                        Pusat administrasi kependudukan desa terpadu, aula musyawarah rencana
                                        pembangunan (Musrenbang), dan layanan anjungan mandiri surat desa online Astra
                                        Digital.
                                    </p>
                                </div>
                                <!-- Specifications Bento Badges -->
                                <div
                                    class="mt-4 pt-3 bg-surface-container-low rounded-xl p-3 grid grid-cols-2 gap-2 text-on-surface font-body-sm text-body-sm">
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px] text-primary">wifi</span>
                                        <span>Wifi 100 Mbps</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px] text-primary">groups</span>
                                        <span>Kapasitas 150 Org</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Action Button -->
                            <div class="mt-5 pt-3 flex items-center justify-between">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">PJ: Sekdes &amp; Kaur
                                    Umum</span>

                            </div>
                        </div>
                        <!-- Card 2: Posyandu Dahlia Terpadu -->
                        <div class="facility-card bg-surface-container-lowest rounded-2xl p-5 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                            data-category="kesehatan" data-name="Posyandu Dahlia Terpadu Layanan Lansia"
                            data-rw="RW 04">
                            <div>
                                <!-- Card Image Media -->
                                <div class="relative w-full h-48 rounded-xl overflow-hidden mb-4">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        data-alt="Community health center posyandu in clean village setting with measuring equipment, digital baby scale, educational nutritional posters, village health cadres in uniform, bright warm morning daylight, friendly welcoming atmosphere."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpSomsDkXtNQ3_fbua47zZaDH5R4RcaYz6NqAF2nkGMpIeBet9oiNeMKlCc13Hwoi1T-0Mf6_WMHAr3ufTIjfXO_DwmKZEqjIt6YVmvtVXh3D5-2ATCU3oPUTLtJK5iTpC3mNyOk1ATv3GIcTLT9roamqIvxr7Bn7pPB1p2K2wjrPKyrQZUlK4CkA6nalmnntYiyP21IHKBCINnMsVpGXGiwaCsoenmnX9V21_y7M">
                                    <div class="absolute top-3 left-3 flex gap-2">
                                        <span
                                            class="px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold bg-surface-container-lowest/95 backdrop-blur-sm text-primary shadow-sm">
                                            Kesehatan
                                        </span>
                                        <span
                                            class="px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold bg-emerald-500/15 text-emerald-800 backdrop-blur-sm">
                                            Beroperasi Baik
                                        </span>
                                    </div>
                                    <div
                                        class="absolute bottom-3 right-3 px-2.5 py-1 rounded-lg bg-surface-container-lowest/90 backdrop-blur-sm font-label-sm text-label-sm font-bold text-on-surface flex items-center gap-1 shadow-sm">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
                                        RW 04
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="flex flex-col gap-1.5">
                                    <div
                                        class="flex items-center gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary-container">event_available</span>
                                        Jadwal: Selasa Pekan ke-2 &amp; ke-4
                                    </div>
                                    <h3
                                        class="font-title-md text-title-md text-primary font-bold line-clamp-1 group-hover:text-secondary-container transition-colors">
                                        Posyandu Dahlia Terpadu &amp; Layanan Lansia
                                    </h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
                                        Fasilitas pemantauan tumbuh kembang balita stunting-free, imunisasi dasar
                                        lengkap, konsultasi gizi keluarga, serta cek tensi dan gula darah gratis bagi
                                        lansia.
                                    </p>
                                </div>
                                <!-- Specifications Bento Badges -->
                                <div
                                    class="mt-4 pt-3 bg-surface-container-low rounded-xl p-3 grid grid-cols-2 gap-2 text-on-surface font-body-sm text-body-sm">
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px] text-primary">scale</span>
                                        <span>Antropometri Digital</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-primary">vital_signs</span>
                                        <span>Bidan Desa Siaga</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Action Button -->
                            <div class="mt-5 pt-3 flex items-center justify-between">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">PJ: Bidan Desa &amp;
                                    PKK</span>

                            </div>
                        </div>
                        <!-- Card 3: Sentra Pengolahan Sampah & Bank Sampah -->
                        <div class="facility-card bg-surface-container-lowest rounded-2xl p-5 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                            data-category="lingkungan" data-name="Sentra Pengolahan Sampah Organik Bank Sampah Bersih"
                            data-rw="RW 06">
                            <div>
                                <!-- Card Image Media -->
                                <div class="relative w-full h-48 rounded-xl overflow-hidden mb-4">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        data-alt="Community organic waste composting shed with labeled sorting bins, compost bins, bio-fertilizer drums, organized neat recycling depot at village fringe surrounded by trees, daytime natural light, clean sustainable sanitation facility."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0bDUPLDgAwNipO7HfFUdKEUBd-CGd5NpCu2z8N6nbQ-t3w7QOPKtfTw0lcbUUACRPkocmRMqvGpNydGY03Bl_LATvcXczv86Y1rPtEyx0J-Li2wxi-RU2xt8w5TKDevGExzZEgZRx1Win9oODBME49bIDJnecA5K3JDS0hfv-Dc5_3WAGqfORw3Z2nfWZW9ID2i62dEP2e1dnxd0e8UUszfJIz412noEM371BvjU">
                                    <div class="absolute top-3 left-3 flex gap-2">
                                        <span
                                            class="px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold bg-surface-container-lowest/95 backdrop-blur-sm text-primary shadow-sm">
                                            Lingkungan
                                        </span>
                                        <span
                                            class="px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold bg-amber-500/15 text-amber-800 backdrop-blur-sm">
                                            Dalam Pengembangan
                                        </span>
                                    </div>
                                    <div
                                        class="absolute bottom-3 right-3 px-2.5 py-1 rounded-lg bg-surface-container-lowest/90 backdrop-blur-sm font-label-sm text-label-sm font-bold text-on-surface flex items-center gap-1 shadow-sm">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
                                        RW 06
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="flex flex-col gap-1.5">
                                    <div
                                        class="flex items-center gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">compost</span>
                                        Kapasitas: 850 Kg Pupuk / Bulan
                                    </div>
                                    <h3
                                        class="font-title-md text-title-md text-primary font-bold line-clamp-1 group-hover:text-secondary-container transition-colors">
                                        Sentra Pengolahan Sampah &amp; Bank Sampah Bersih
                                    </h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
                                        Program ekonomi sirkular desa: unit pencacah organik maggot Black Soldier Fly
                                        (BSF), konversi sampah botol plastik menjadi saldo tabungan warga.
                                    </p>
                                </div>
                                <!-- Specifications Bento Badges -->
                                <div
                                    class="mt-4 pt-3 bg-surface-container-low rounded-xl p-3 grid grid-cols-2 gap-2 text-on-surface font-body-sm text-body-sm">
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px] text-primary">balance</span>
                                        <span>Timbangan Digital</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px] text-primary">eco</span>
                                        <span>Dukungan CSR Astra</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Action Button -->
                            <div class="mt-5 pt-3 flex items-center justify-between">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">PJ: KSM Mandiri
                                    Bersih</span>

                            </div>
                        </div>
                        <!-- Card 4: PAUD Mawar Ceria & Pojok Baca Digital Astra -->
                        <div class="facility-card bg-surface-container-lowest rounded-2xl p-5 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                            data-category="pendidikan" data-name="PAUD Mawar Ceria Pojok Baca Digital Astra"
                            data-rw="RW 03">
                            <div>
                                <!-- Card Image Media -->
                                <div class="relative w-full h-48 rounded-xl overflow-hidden mb-4">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        data-alt="Vibrant colorful village early childhood education center and modern digital reading room with computer terminals, book racks, low reading tables with children's mats, cheerful bright interior, natural morning sunlight streaming through windows."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEX_VaffioGc8SkfcAH23xIFg-qlTTH0MUjJB_njvcwXcvwQ8w6pEo2kzkYf471JOsBQVcSIaZWs7KsUqVgYBOApjnLb87M4qzHCzQQdqq7bEOJPwAZy4OZkjKeWxn0gEnCFlQsijAMiyqMtNEgAGHKaM6SG89LBf5eDJEWbBTrjY5YQzi5beJ4RffROLUpF49ltnlfqMjEY-BT-Z9kijWVYsxrkrKgLAj2T-kYik">
                                    <div class="absolute top-3 left-3 flex gap-2">
                                        <span
                                            class="px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold bg-surface-container-lowest/95 backdrop-blur-sm text-primary shadow-sm">
                                            Pendidikan
                                        </span>
                                        <span
                                            class="px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold bg-emerald-500/15 text-emerald-800 backdrop-blur-sm">
                                            Sangat Baik
                                        </span>
                                    </div>
                                    <div
                                        class="absolute bottom-3 right-3 px-2.5 py-1 rounded-lg bg-surface-container-lowest/90 backdrop-blur-sm font-label-sm text-label-sm font-bold text-on-surface flex items-center gap-1 shadow-sm">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
                                        RW 03
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="flex flex-col gap-1.5">
                                    <div
                                        class="flex items-center gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-primary">local_library</span>
                                        Koleksi: 1.200 Judul &amp; E-Book
                                    </div>
                                    <h3
                                        class="font-title-md text-title-md text-primary font-bold line-clamp-1 group-hover:text-secondary-container transition-colors">
                                        PAUD Mawar Ceria &amp; Pojok Baca Digital Astra
                                    </h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
                                        Ruang belajar interaktif usia dini dan perpustakaan digital warga desa.
                                        Dilengkapi 12 unit komputer riset anak sekolah serta akses Wi-Fi Desa Cerdas
                                        gratis.
                                    </p>
                                </div>
                                <!-- Specifications Bento Badges -->
                                <div
                                    class="mt-4 pt-3 bg-surface-container-low rounded-xl p-3 grid grid-cols-2 gap-2 text-on-surface font-body-sm text-body-sm">
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px] text-primary">devices</span>
                                        <span>12 Unit Komputer</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-primary">auto_stories</span>
                                        <span>Akses Perpusnas</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Action Button -->
                            <div class="mt-5 pt-3 flex items-center justify-between">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">PJ: Bunda PAUD
                                    Desa</span>

                            </div>
                        </div>
                        <!-- Card 5: Jembatan Penghubung & Irigasi Tersier -->
                        <div class="facility-card bg-surface-container-lowest rounded-2xl p-5 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                            data-category="infrastruktur" data-name="Jembatan Penghubung Dusun Saluran Irigasi Tersier"
                            data-rw="RW 07">
                            <div>
                                <!-- Card Image Media -->
                                <div class="relative w-full h-48 rounded-xl overflow-hidden mb-4">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        data-alt="Concrete village bridge crossing irrigation canal stream between lush green rice paddy fields in rural Cirebon with solar street lamps on posts, motorcyclists crossing safely, clear daytime agricultural scenery."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXscOLu0fOs8eGklitTgceXjLNgDMxVgEeQP5kFNTQSIkvG3A-MSac16DDVs7-K6l1-VDVoAhF1ncC-8lnumOC1oB2p1Yd3MNG_M_EJTolXjwcpzKxm9KYfUXAQ-wBk30r0bGl6R9qUVy4SUXv_fZlmjwemUE2Wb-qxssl2BnqZBP7YGkMHdon9i8STqV40iF-_SUhxh8HUlr396DHt9tOJ7Vmjg7vE6QQxngtOjk">
                                    <div class="absolute top-3 left-3 flex gap-2">
                                        <span
                                            class="px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold bg-surface-container-lowest/95 backdrop-blur-sm text-primary shadow-sm">
                                            Infrastruktur
                                        </span>
                                        <span
                                            class="px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold bg-yellow-500/20 text-yellow-800 backdrop-blur-sm">
                                            Perlu Pemeliharaan
                                        </span>
                                    </div>
                                    <div
                                        class="absolute bottom-3 right-3 px-2.5 py-1 rounded-lg bg-surface-container-lowest/90 backdrop-blur-sm font-label-sm text-label-sm font-bold text-on-surface flex items-center gap-1 shadow-sm">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
                                        RW 07
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="flex flex-col gap-1.5">
                                    <div
                                        class="flex items-center gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">straighten</span>
                                        Bentang Jembatan: 45 Meter
                                    </div>
                                    <h3
                                        class="font-title-md text-title-md text-primary font-bold line-clamp-1 group-hover:text-secondary-container transition-colors">
                                        Jembatan Dusun &amp; Irigasi Pertanian Tersier
                                    </h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
                                        Urat nadi mobilitas hasil panen mangga gedong gincu dan padi. Saluran irigasi
                                        mengairi 140 hektar sawah kelompok tani Kepongpongan.
                                    </p>
                                </div>
                                <!-- Specifications Bento Badges -->
                                <div
                                    class="mt-4 pt-3 bg-surface-container-low rounded-xl p-3 grid grid-cols-2 gap-2 text-on-surface font-body-sm text-body-sm">
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px] text-primary">water</span>
                                        <span>Debit Air 1.8 m³/s</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px] text-primary">warning</span>
                                        <span>Agenda Perbaikan Q2</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Action Button -->
                            <div class="mt-5 pt-3 flex items-center justify-between">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">PJ: Kaur Kesra &amp;
                                    Gapoktan</span>

                            </div>
                        </div>
                        <!-- Card 6: Titik Kumpul Evakuasi & Posko Siaga Bencana -->
                        <div class="facility-card bg-surface-container-lowest rounded-2xl p-5 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                            data-category="darurat" data-name="Titik Kumpul Evakuasi Utama Posko Siaga Bencana"
                            data-rw="RW 01">
                            <div>
                                <!-- Card Image Media -->
                                <div class="relative w-full h-48 rounded-xl overflow-hidden mb-4">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        data-alt="Expansive village community sports field in Cirebon with green emergency assembly point signage, solar emergency siren tower, disaster preparedness equipment tent, clear blue skies, organized open civil safety zone."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBV9dd_ZZfr6YANTjWtC-I3qgNZVw1Z9hyRjsjHEdZpRYDJLS5hMSicaWzkia7OKLtZY-IqYlSBbFlrQjNAmeXwYnpPkDFBXAAZS5ywlN1hPDmw8rzmUsEOxMonfXDmbW8KpkWrYizx0mZLT2suzpMJER_EF_AHNI1_QjHhzn0puxoIQPZ_HB0RPk56fqqzc1kw2EAPEh3wf30zysL2nXoxaX1NXAmXoNFsA4IYfUA">
                                    <div class="absolute top-3 left-3 flex gap-2">
                                        <span
                                            class="px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold bg-surface-container-lowest/95 backdrop-blur-sm text-primary shadow-sm">
                                            Tanggap Darurat
                                        </span>
                                        <span
                                            class="px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold bg-sky-500/15 text-sky-800 backdrop-blur-sm">
                                            Siaga Siap
                                        </span>
                                    </div>
                                    <div
                                        class="absolute bottom-3 right-3 px-2.5 py-1 rounded-lg bg-surface-container-lowest/90 backdrop-blur-sm font-label-sm text-label-sm font-bold text-on-surface flex items-center gap-1 shadow-sm">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
                                        RW 01 (Lapangan Desa)
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="flex flex-col gap-1.5">
                                    <div
                                        class="flex items-center gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                                        <span class="material-symbols-outlined text-[16px] text-primary">groups</span>
                                        Kapasitas: 500 Jiwa Pengungsi
                                    </div>
                                    <h3
                                        class="font-title-md text-title-md text-primary font-bold line-clamp-1 group-hover:text-secondary-container transition-colors">
                                        Titik Kumpul Evakuasi Utama &amp; Posko Siaga Bencana
                                    </h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
                                        Lokasi terstandarisasi BPBD Kabupaten Cirebon dan Tim Tanggap Bencana Astra
                                        untuk mitigasi banjir luapan dan angin puting beliung musiman.
                                    </p>
                                </div>
                                <!-- Specifications Bento Badges -->
                                <div
                                    class="mt-4 pt-3 bg-surface-container-low rounded-xl p-3 grid grid-cols-2 gap-2 text-on-surface font-body-sm text-body-sm">
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px] text-primary">campaign</span>
                                        <span>Sirine Early Warning</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-primary">medical_services</span>
                                        <span>Gudang Tenda Medis</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Action Button -->
                            <div class="mt-5 pt-3 flex items-center justify-between">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">PJ: Satgas Linmas
                                    Desa</span>

                            </div>
                        </div>
                    </div>
                    <!-- Empty State Container (Hidden by default) -->
                    <div class="hidden py-16 text-center bg-surface-container-lowest rounded-2xl p-8 mt-4 shadow-sm"
                        id="noResultsState">
                        <div
                            class="w-16 h-16 rounded-full bg-surface-container-high text-outline mx-auto flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-[32px]">manage_search</span>
                        </div>
                        <h3 class="font-title-md text-title-md text-primary font-bold">Fasilitas Tidak Ditemukan</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-md mx-auto mt-1">
                            Tidak ada sarana kampung yang cocok dengan kata kunci atau filter yang Anda pilih. Coba
                            sesuaikan pilihan RW atau kata kunci pencarian.
                        </p>
                        <button
                            class="mt-4 px-4 py-2 rounded-lg bg-primary-fixed text-primary font-label-md text-label-md hover:bg-primary hover:text-on-primary transition-all"
                            id="resetFiltersBtn" type="button">
                            Reset Filter &amp; Tampilkan Semua
                        </button>
                    </div>
                </div>
            </section>
            <!-- Interactive Quick Reporting Banner (Layanan Pengaduan Sarana) -->
            <section class="w-full pb-20">
                <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
                    <div
                        class="relative bg-gradient-to-r from-primary via-primary-container to-primary text-on-primary rounded-3xl p-6 sm:p-10 shadow-xl overflow-hidden">
                        <!-- Subtle Ambient Background Illumination -->
                        <div
                            class="absolute -right-20 -top-20 w-80 h-80 rounded-full bg-secondary-container/20 blur-3xl pointer-events-none">
                        </div>
                        <div
                            class="absolute left-1/3 -bottom-20 w-64 h-64 rounded-full bg-surface-tint/20 blur-2xl pointer-events-none">
                        </div>
                        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                            <div class="lg:col-span-8 flex flex-col gap-3">
                                <div class="flex items-center gap-2 text-secondary-fixed font-label-md text-label-md">
                                    <span
                                        class="material-symbols-outlined text-[20px] text-secondary-container">report_problem</span>
                                    <span>Layanan Tanggap Sarana Warga Desa Kepongpongan</span>
                                </div>
                                <h2 class="font-headline-lg text-headline-lg text-on-primary tracking-tight">
                                    Menemukan Sarana Rusak atau Butuh Perbaikan Cepat?
                                </h2>
                                <p class="font-body-lg text-body-lg text-primary-fixed max-w-2xl leading-relaxed">
                                    Laporkan kerusakan lampu jalan, saluran air tersumbat, fasilitas posyandu, atau
                                    jembatan melalui formulir aduan masyarakat terintegrasi. Anda juga dapat
                                    berkonsultasi langsung secara interaktif dengan Asisten AI Desa untuk pelacakan
                                    status tiket.
                                </p>
                                <!-- Quick Service Metrics -->
                                <div class="flex flex-wrap items-center gap-6 pt-2">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-secondary-container text-[20px]">timer</span>
                                        <span class="font-label-md text-label-md text-surface-bright">Respon Satgas &lt;
                                            24 Jam</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-secondary-container text-[20px]">mark_email_read</span>
                                        <span class="font-label-md text-label-md text-surface-bright">Terintegrasi
                                            SP4N-LAPOR</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-secondary-container text-[20px]">verified_user</span>
                                        <span class="font-label-md text-label-md text-surface-bright">Kerahasiaan
                                            Pelapor Terjamin</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Action CTA Group -->
                            <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3 justify-center">
                                <a class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl font-label-lg text-label-lg text-on-secondary bg-secondary-container hover:bg-secondary transition-all shadow-md"
                                    data-path="kontak" href="#">
                                    <span class="material-symbols-outlined text-[20px]">campaign</span>
                                    <span>Kirim Laporan Kerusakan</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Embedded Interactive Scripts for Filter, Search & View Controls -->
        <script>
        (function initSaranaKampungInteractions() {
            const searchInput = document.getElementById('facilitySearch');
            const clearBtn = document.getElementById('clearSearchBtn');
            const rwFilter = document.getElementById('rwFilter');
            const categoryButtons = document.querySelectorAll('.category-pill');
            const cards = document.querySelectorAll('.facility-card');
            const resultCount = document.getElementById('resultCountBadge');
            const emptyState = document.getElementById('noResultsState');
            const resetFiltersBtn = document.getElementById('resetFiltersBtn');
            const mapSection = document.getElementById('mapSection');
            const viewGridBtn = document.getElementById('viewGridBtn');
            const viewMapBtn = document.getElementById('viewMapBtn');
            const toggleExpandMapBtn = document.getElementById('toggleExpandMap');

            let currentCategory = 'all';
            let currentRW = 'all';
            let searchQuery = '';

            function filterCards() {
                let visibleCount = 0;

                cards.forEach(card => {
                    const cardCat = card.getAttribute('data-category') || '';
                    const cardRw = card.getAttribute('data-rw') || '';
                    const cardName = (card.getAttribute('data-name') || '').toLowerCase();
                    const cardText = card.innerText.toLowerCase();

                    const matchCat = (currentCategory === 'all') || (cardCat === currentCategory);
                    const matchRw = (currentRW === 'all') || cardRw.includes(currentRW);
                    const matchQuery = !searchQuery || cardName.includes(searchQuery) || cardText.includes(
                        searchQuery);

                    if (matchCat && matchRw && matchQuery) {
                        card.style.display = 'flex';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Update Result Counter Badge
                if (resultCount) {
                    resultCount.textContent = `Menampilkan ${visibleCount} dari 28`;
                }

                // Empty state handler
                if (emptyState) {
                    if (visibleCount === 0) {
                        emptyState.classList.remove('hidden');
                    } else {
                        emptyState.classList.add('hidden');
                    }
                }
            }

            // Category Tabs Event
            categoryButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    categoryButtons.forEach(b => {
                        b.classList.remove('bg-primary-container', 'text-on-primary',
                            'shadow-sm');
                        b.classList.add('bg-surface-container', 'text-on-surface-variant');
                    });
                    btn.classList.add('bg-primary-container', 'text-on-primary', 'shadow-sm');
                    btn.classList.remove('bg-surface-container', 'text-on-surface-variant');

                    currentCategory = btn.getAttribute('data-cat') || 'all';
                    filterCards();
                });
            });

            // Search Input Event
            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    searchQuery = e.target.value.trim().toLowerCase();
                    if (clearBtn) {
                        if (searchQuery.length > 0) {
                            clearBtn.classList.remove('hidden');
                        } else {
                            clearBtn.classList.add('hidden');
                        }
                    }
                    filterCards();
                });
            }

            if (clearBtn) {
                clearBtn.addEventListener('click', () => {
                    if (searchInput) searchInput.value = '';
                    searchQuery = '';
                    clearBtn.classList.add('hidden');
                    filterCards();
                });
            }

            // RW Filter Event
            if (rwFilter) {
                rwFilter.addEventListener('change', (e) => {
                    currentRW = e.target.value;
                    filterCards();
                });
            }

            // Reset Filter Button
            if (resetFiltersBtn) {
                resetFiltersBtn.addEventListener('click', () => {
                    if (searchInput) searchInput.value = '';
                    if (rwFilter) rwFilter.value = 'all';
                    searchQuery = '';
                    currentRW = 'all';
                    currentCategory = 'all';

                    categoryButtons.forEach(b => {
                        const isAll = b.getAttribute('data-cat') === 'all';
                        b.classList.toggle('bg-primary-container', isAll);
                        b.classList.toggle('text-on-primary', isAll);
                        b.classList.toggle('bg-surface-container', !isAll);
                        b.classList.toggle('text-on-surface-variant', !isAll);
                    });

                    if (clearBtn) clearBtn.classList.add('hidden');
                    filterCards();
                });
            }

            // View Switch Controls (List vs Map Focus)
            if (viewGridBtn && viewMapBtn && mapSection) {
                viewGridBtn.addEventListener('click', () => {
                    viewGridBtn.classList.add('bg-surface-container-lowest', 'text-primary', 'shadow-sm');
                    viewGridBtn.classList.remove('text-on-surface-variant');
                    viewMapBtn.classList.remove('bg-surface-container-lowest', 'text-primary', 'shadow-sm');
                    viewMapBtn.classList.add('text-on-surface-variant');

                    const gridSection = document.getElementById('facilityGrid');
                    if (gridSection) {
                        gridSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });

                viewMapBtn.addEventListener('click', () => {
                    viewMapBtn.classList.add('bg-surface-container-lowest', 'text-primary', 'shadow-sm');
                    viewMapBtn.classList.remove('text-on-surface-variant');
                    viewGridBtn.classList.remove('bg-surface-container-lowest', 'text-primary',
                    'shadow-sm');
                    viewGridBtn.classList.add('text-on-surface-variant');

                    mapSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                });
            }

            // Map Expand Toggle Button
            if (toggleExpandMapBtn && mapSection) {
                toggleExpandMapBtn.addEventListener('click', () => {
                    mapSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            }
        })();
        </script>
    </main>
    <footer class="w-full bg-surface-container-lowest border-t border-surface-variant/80 pt-space-xl pb-space-lg">
        <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-gutter pb-space-xl">
                <div class="lg:col-span-2 flex flex-col gap-space-md">
                    <div class="flex items-center gap-space-md"><img alt="Astra Desa Digital Logo"
                            class="h-9 w-auto object-contain"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDF_96WFU1FjqHWKci-IC053XwDhMD-bDWzFxT7XSgRGqQU9sBCR8Rf7tfIHczSgHbQ-xxib1_Zk2IKoW6DA8UPzE2fVPzbVfEiOek0bFEM2C3r8o7-o-yRwgz2Zq2MAgA6pKu-8XMk0safGVvKqHHRUEna36izUfdPCeGK3uAx2l1P6ZeOZ7Bi8CU7o1sTolTO2LsEiLUsrfnW7o23ZjMRkNGphgBVVch1Id-q1g0iwgtvaklIdQeh"><span
                            class="font-title-md text-title-md text-primary font-bold">Astra Desa Digital</span></div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-md">Inisiatif transformasi digital
                        kolaboratif PT Astra International Tbk bersama Pemerintah Desa Kepongpongan, Kecamatan Talun,
                        Kabupaten Cirebon untuk mewujudkan tata kelola desa modern, pariwisata berdaya saing, dan
                        kemandirian ekonomi masyarakat.</p>
                    <div class="flex items-center gap-space-sm pt-space-xs"><span
                            class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-surface-container text-primary hover:bg-primary hover:text-on-primary transition-colors cursor-pointer"><span
                                class="material-symbols-outlined text-[18px]">public</span></span><span
                            class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-surface-container text-primary hover:bg-primary hover:text-on-primary transition-colors cursor-pointer"><span
                                class="material-symbols-outlined text-[18px]">share</span></span><span
                            class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-surface-container text-primary hover:bg-primary hover:text-on-primary transition-colors cursor-pointer"><span
                                class="material-symbols-outlined text-[18px]">mail</span></span></div>
                </div>
                <div class="flex flex-col gap-space-sm">
                    <h4 class="font-title-md text-title-md text-primary font-bold mb-space-xs">Navigasi Cepat</h4><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
                        data-path="beranda" href="#">Beranda Utama</a><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
                        data-path="profil-desa" href="#">Profil &amp; Geografis</a><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
                        data-path="sarana-kampung" href="#">Fasilitas &amp; Sarana</a><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
                        data-path="wisata-kampung" href="#">Destinasi Wisata</a><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
                        data-path="program-desa" href="#">Program Kerja &amp; CSR</a>
                </div>
                <div class="flex flex-col gap-space-sm">
                    <h4 class="font-title-md text-title-md text-primary font-bold mb-space-xs">Layanan Warga</h4><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
                        data-path="portal-masuk" href="#">Sistem Informasi Desa</a><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
                        data-path="berita" href="#">Kabar &amp; Agenda Warga</a><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
                        data-path="kontak" href="#">Pengaduan &amp; Aspirasi</a><span
                        class="font-body-md text-body-md text-on-surface-variant">Permohonan Surat
                        Keterangan</span><span class="font-body-md text-body-md text-on-surface-variant">Transparansi
                        Anggaran Desa</span>
                </div>
                <div class="flex flex-col gap-space-sm">
                    <h4 class="font-title-md text-title-md text-primary font-bold mb-space-xs">Kantor Kuwu Desa</h4>
                    <div class="flex items-start gap-space-xs text-on-surface-variant font-body-sm text-body-sm"><span
                            class="material-symbols-outlined text-[18px] text-secondary mt-0.5">location_on</span><span>Jl.
                            Nyi Ageng Serang No. 12, Kepongpongan, Talun, Cirebon, Jawa Barat 45171</span></div>
                    <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm"><span
                            class="material-symbols-outlined text-[18px] text-secondary">call</span><span>+62 (231)
                            833-2190</span></div>
                    <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm"><span
                            class="material-symbols-outlined text-[18px] text-secondary">mail</span><span>pemdes@kepongpongan.desa.id</span>
                    </div>
                    <div
                        class="mt-space-xs p-3 rounded-lg bg-surface-container-low border border-outline-variant/60 flex items-center gap-space-xs">
                        <span class="material-symbols-outlined text-secondary text-[20px]">verified</span><span
                            class="font-label-sm text-label-sm text-primary font-bold">Desa Binaan Astra Cirebon</span>
                    </div>
                </div>
            </div>
            <div
                class="pt-space-md border-t border-surface-variant/70 flex flex-col sm:flex-row items-center justify-between gap-space-sm text-center sm:text-left">
                <p class="font-body-sm text-body-sm text-on-surface-variant">© 2025 Astra Desa Digital &amp; Pemerintah
                    Desa Kepongpongan. Didukung penuh oleh Semangat Astra Terpadu Untuk (SATU) Indonesia Awards.</p>
                <div class="flex items-center gap-space-md font-label-sm text-label-sm text-on-surface-variant"><span
                        class="hover:text-primary cursor-pointer">Kebijakan Privasi</span><span
                        class="hover:text-primary cursor-pointer">Ketentuan Layanan</span><span
                        class="hover:text-primary cursor-pointer">Peta Situs</span></div>
            </div>
        </div>
    </footer>











</body>

</html>