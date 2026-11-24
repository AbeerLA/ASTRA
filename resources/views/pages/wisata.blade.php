<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <title>Desa Sejahtera Astra Digital - Desa Kepongpongan Cirebon</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
            <div class="flex items-center gap-space-md shrink-0"><img alt="Desa Sejahtera Astra Digital Logo"
                    class="h-8 w-auto object-contain"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBT_R3MjQDHJaiLFFLnIXOPPucuqJDcwFZAPhpDT3Vcz9GY56n_iWrHguSshv31etpBCU-ofD9Z5-MeBwW1sQnk9ummE68kjFkFIFwzktu7eBMHt4tBdyuIXzH-7NhqdWoZw_6eHlIvh-oZDzJ59HxAWPAkVRikID6kg-vRSZ_LlsXHXvbzi62DSDk60gZ65DTdzLYZSYMdEHgqea2ZTBOWEUDfNxWdD8gVhj9uGUseBwCFagbg7psU" />
                <div class="flex flex-col"><span
                        class="font-title-md text-title-md text-primary tracking-tight leading-none">Desa Sejahtera Astra Digital</span><span
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
                    data-path="sarana-kampung" href="#">Program</a><a aria-current="page"
                    class="px-3 py-2 transition-colors bg-surface-container text-primary font-bold rounded-lg shadow-sm"
                    data-path="wisata-kampung" href="#">Wisata</a><a
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
            <!-- Immersive Destination Intro & Ambient Filter -->
            <section class="relative w-full bg-surface-container-low overflow-hidden pb-16 pt-8">
                <div
                    class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-secondary-container/10 blur-3xl pointer-events-none">
                </div>
                <div
                    class="absolute bottom-0 -left-20 w-80 h-80 rounded-full bg-primary-container/10 blur-3xl pointer-events-none">
                </div>
                <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin relative z-10">
                    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-10">
                        <div class="max-w-3xl">
                            <div
                                class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary-fixed text-primary font-label-md text-label-md mb-4 shadow-sm">
                                <span class="material-symbols-outlined text-[16px] text-secondary">eco</span>
                                <span>Ekowisata Binaan PT Astra International Tbk</span>
                            </div>
                            <h1 class="font-display text-display text-primary tracking-tight">Wisata Kampung Desa
                                Kepongpongan</h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mt-3 max-w-2xl">
                                Rasakan keasrian pedesaan Cirebon, petualangan alam Cipager, serta warisan batik dan
                                agrowisata berbasis komunitas binaan Astra.
                            </p>
                        </div>
                        <!-- Live Quick Stats Strip -->
                    </div>
                    <!-- Category Filter Pills -->
                </div>
            </section>
            <!-- Featured Destinations Grid (3 Flagship Experiences) -->
            <section class="w-full py-16 bg-surface">
                <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase tracking-widest block font-bold">Destinasi
                                Unggulan Komunitas</span>
                            <h2 class="font-headline-lg text-headline-lg text-primary mt-1">Jelajahi Paket Wisata
                                Populer</h2>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                        <!-- Destination 1: Batik -->
                        <article
                            class="destination-card flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group"
                            data-type="budaya edukasi">
                            <div class="relative h-64 overflow-hidden">
                                <img alt="Kampung Edukasi Batik &amp; Sentra Seni Tradisional"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="https://lh3.googleusercontent.com/aida/ALJJyrBm1lb4eJ-Jq0pkwv8Z2I5niUIqMoJSYB3NrzzMjaok6SvwCbPe0xxK8rEiFBt9i62UVNc51qa6f6R4bcPwr2fC0o8Ds0hv1wnfbacNaQvg6yfa9Nl8NJjIVZHLHHR2LppCSi0p8GRziuU-D3xDSNNws7v53Fn13WmleNsQj_T6xr_4cMe_pqSO8t92IrQOtygubKNy5eJlIr-KUbBHwyE0UJP2nwnKUwlPeHXrH7mS" />
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-3 py-1 rounded-full font-label-sm text-label-sm bg-surface-container-lowest/90 backdrop-blur text-primary font-bold shadow-sm">Wisata
                                        Budaya</span>
                                </div>
                                <div
                                    class="absolute bottom-4 right-4 bg-primary/80 backdrop-blur px-3 py-1 rounded-full text-on-primary font-label-sm text-label-sm flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[16px] text-secondary-container"
                                        style='font-variation-settings: "FILL" 1;'>star</span>
                                    <span>4.9</span>
                                    <span class="text-on-primary-container">(128)</span>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-1 justify-between">
                                <div>
                                    <div
                                        class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm mb-2">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">schedule</span>
                                        <span>Durasi 2.5 Jam</span>
                                        <span class="text-outline-variant">•</span>
                                        <span class="material-symbols-outlined text-[16px] text-secondary">groups</span>
                                        <span>Maks. 25 Org/Sesi</span>
                                    </div>
                                    <h3
                                        class="font-headline-sm text-headline-sm text-primary mb-2 group-hover:text-secondary-container transition-colors">
                                        Kampung Edukasi Batik &amp; Sentra Seni Tradisional</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-4">
                                        Pelajari filosofi motif Megamendung khas Cirebon langsung dari maestro lokal,
                                        praktik canting malam, dan bawa pulang kain karya sendiri.
                                    </p>
                                    <div class="bg-surface-container-low p-3 rounded-lg flex flex-col gap-1.5 mb-6">
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Set canting, wajan malam, kain mori 50x50 cm</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Instruktur pembimbing lokal berpengalaman</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Welcome drink jahe hangat &amp; serabi lokal</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between pt-4 bg-surface-container-lowest border-t border-surface-variant/70">
                                    <div>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant block">Mulai
                                            dari</span>
                                        <span class="font-title-md text-title-md text-primary font-bold">Rp 35.000 <span
                                                class="font-body-sm text-body-sm font-normal text-on-surface-variant">/org</span></span>
                                    </div>
                                    <button
                                        class="px-4 py-2 rounded-lg bg-primary-fixed text-primary hover:bg-primary hover:text-on-primary transition-all duration-200 font-label-md text-label-md flex items-center gap-1.5"
                                        onclick="selectDestination('Kampung Edukasi Batik', 35000)" type="button">
                                        <span>Pilih Paket</span>
                                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Destination 2: River Tubing -->
                        <article
                            class="destination-card flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group"
                            data-type="alam">
                            <div class="relative h-64 overflow-hidden">
                                <img alt="Wisata Susur Tubing Sungai Cipager Asri"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="https://lh3.googleusercontent.com/aida/ALJJyrCEqqBTUmz61SSwPWBEOdTzeaQbS9UoLpDNgNI02vZFtoXQpiJnhUfmZRW7Ud8ZVOdMLf_FdUA_-6EnFXpG-AWWBYQSh1MTS573gIBH715nzafSmRfDCjwF7aQQTBWZ7LHVW5DlS_P0nB9EBoocOmq_hVBKnetLx9MvDpllEZpSkmGcDfgKauWa4up5j9D2n5eYizSt_xvLHGndcY6plSnUtJwnBikTs_3JPVhVPOs" />
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-3 py-1 rounded-full font-label-sm text-label-sm bg-secondary-container text-on-secondary font-bold shadow-sm">Favorit
                                        Wisatawan</span>
                                </div>
                                <div
                                    class="absolute bottom-4 right-4 bg-primary/80 backdrop-blur px-3 py-1 rounded-full text-on-primary font-label-sm text-label-sm flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[16px] text-secondary-container"
                                        style='font-variation-settings: "FILL" 1;'>star</span>
                                    <span>4.8</span>
                                    <span class="text-on-primary-container">(210)</span>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-1 justify-between">
                                <div>
                                    <div
                                        class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm mb-2">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">schedule</span>
                                        <span>Durasi 2.0 Jam</span>
                                        <span class="text-outline-variant">•</span>
                                        <span class="material-symbols-outlined text-[16px] text-secondary">hiking</span>
                                        <span>Jalur 1.8 Km</span>
                                    </div>
                                    <h3
                                        class="font-headline-sm text-headline-sm text-primary mb-2 group-hover:text-secondary-container transition-colors">
                                        Wisata Susur Tubing Sungai Cipager Asri</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-4">
                                        Petualangan air menyusuri jeram Sungai Cipager yang bersih dan rindang di bawah
                                        kanopi bambu alami dengan standar keselamatan bersertifikat.
                                    </p>
                                    <div class="bg-surface-container-low p-3 rounded-lg flex flex-col gap-1.5 mb-6">
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Pelampung standar CE, helm pengaman, ban tubing</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>2 Pemandu penyelamat &amp; asuransi keselamatan</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Dokumentasi aksi foto digital resolusi tinggi</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between pt-4 bg-surface-container-lowest border-t border-surface-variant/70">
                                    <div>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant block">Mulai
                                            dari</span>
                                        <span class="font-title-md text-title-md text-primary font-bold">Rp 50.000 <span
                                                class="font-body-sm text-body-sm font-normal text-on-surface-variant">/org</span></span>
                                    </div>
                                    <button
                                        class="px-4 py-2 rounded-lg bg-secondary-container text-on-secondary hover:bg-secondary transition-all duration-200 font-label-md text-label-md flex items-center gap-1.5 shadow-sm"
                                        onclick="selectDestination('Wisata Susur Tubing Cipager', 50000)" type="button">
                                        <span>Pilih Paket</span>
                                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Destination 3: Agrowisata Bioflok -->
                        <article
                            class="destination-card flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group"
                            data-type="agro edukasi">
                            <div class="relative h-64 overflow-hidden">
                                <img alt="Agrowisata Nila Bioflok &amp; Petik Mangga Gincu"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="https://lh3.googleusercontent.com/aida/ALJJyrD1QQk-s2IQ81kWxqok5a2I_cB5AYK_gsVdDOz4VhzWtN8rH4EQg_iiiLD1sQ8Exuu2c8uVrieG1X_qTmNlr7vvyTcP8KBo3LlFTbBMdiFYrEaqCOd0Pvs4AQrUZTI8AtIFk8yG0rr2Zu6ySkC3tZnEUthg2XZr5tILEpQ1-s7gcaAu9X6wpJphdwLoO1L6s4mDXyHHNwEEg-kxvdcS1IUPFk-a6B2iOosBn7Oyqiy6" />
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-3 py-1 rounded-full font-label-sm text-label-sm bg-surface-container-lowest/90 backdrop-blur text-primary font-bold shadow-sm">Agrowisata
                                        Terpadu</span>
                                </div>
                                <div
                                    class="absolute bottom-4 right-4 bg-primary/80 backdrop-blur px-3 py-1 rounded-full text-on-primary font-label-sm text-label-sm flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[16px] text-secondary-container"
                                        style='font-variation-settings: "FILL" 1;'>star</span>
                                    <span>4.9</span>
                                    <span class="text-on-primary-container">(95)</span>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-1 justify-between">
                                <div>
                                    <div
                                        class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm mb-2">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">schedule</span>
                                        <span>Durasi 1.5 Jam</span>
                                        <span class="text-outline-variant">•</span>
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">psychology</span>
                                        <span>Ramah Keluarga &amp; Anak</span>
                                    </div>
                                    <h3
                                        class="font-headline-sm text-headline-sm text-primary mb-2 group-hover:text-secondary-container transition-colors">
                                        Agrowisata Nila Bioflok &amp; Petik Mangga Gincu</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-4">
                                        Sains perikanan sirkular ramah lingkungan binaan CSR Astra, dipadukan kelezatan
                                        panen buah mangga Gedong Gincu langsung dari dahan kebun.
                                    </p>
                                    <div class="bg-surface-container-low p-3 rounded-lg flex flex-col gap-1.5 mb-6">
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Edukasi formulasi pakan bioflok &amp; mikroba</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Aktivitas panen ikan &amp; icip mangga manis</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Souvenir benih tanaman hidroponik rumahan</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between pt-4 bg-surface-container-lowest border-t border-surface-variant/70">
                                    <div>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant block">Mulai
                                            dari</span>
                                        <span class="font-title-md text-title-md text-primary font-bold">Rp 25.000 <span
                                                class="font-body-sm text-body-sm font-normal text-on-surface-variant">/org</span></span>
                                    </div>
                                    <button
                                        class="px-4 py-2 rounded-lg bg-primary-fixed text-primary hover:bg-primary hover:text-on-primary transition-all duration-200 font-label-md text-label-md flex items-center gap-1.5"
                                        onclick="selectDestination('Agrowisata Nila &amp; Mangga', 25000)"
                                        type="button">
                                        <span>Pilih Paket</span>
                                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Destination 4: Edukasi Lingkungan & Bank Sampah -->
                        <article
                            class="destination-card flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group"
                            data-type="lingkungan edukasi">
                            <div class="relative h-64 overflow-hidden">
                                <img alt="Paket Edukasi ProKlim &amp; Bank Sampah Mandiri"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="https://lh3.googleusercontent.com/aida/ALJJyrCfogfnD7hSI_iXBgivChbLO_8dxODhlTlIptS6syzVGkEG0pYJjIqJcP9O5lskxBk4hpo-KB4efkAvMSkrR9Ogiq1RGPkKi8Y_DJcXO-TrQUTGfaTTYlDMSROJ9jx6kuqvqMc3wQmt6QuN_gg4hric3Prx8jPwVRq4oNHb3azfNjVsY0MqMY1xDgY0UdJLHebLcP5mjwdtpc14sWaQgvZ-U9RYV416h6SVl7abVTI" />
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-3 py-1 rounded-full font-label-sm text-label-sm bg-surface-container-lowest/90 backdrop-blur text-primary font-bold shadow-sm">Edukasi
                                        Lingkungan</span>
                                </div>
                                <div
                                    class="absolute bottom-4 right-4 bg-primary/80 backdrop-blur px-3 py-1 rounded-full text-on-primary font-label-sm text-label-sm flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[16px] text-secondary-container"
                                        style='font-variation-settings: "FILL" 1;'>star</span>
                                    <span>4.9</span>
                                    <span class="text-on-primary-container">(84)</span>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-1 justify-between">
                                <div>
                                    <div
                                        class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm mb-2">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">schedule</span>
                                        <span>Durasi 3.0 Jam</span>
                                        <span class="text-outline-variant">•</span>
                                        <span class="material-symbols-outlined text-[16px] text-secondary">groups</span>
                                        <span>Min. 10 Orang</span>
                                    </div>
                                    <h3
                                        class="font-headline-sm text-headline-sm text-primary mb-2 group-hover:text-secondary-container transition-colors">
                                        Paket Edukasi ProKlim &amp; Bank Sampah Mandiri</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-4">
                                        Belajar pengelolaan sampah sirkular, budidaya maggot BSF, dan pembuatan pupuk
                                        kompos organik bersama instruktur warga terlatih.
                                    </p>
                                    <div class="bg-surface-container-low p-3 rounded-lg flex flex-col gap-1.5 mb-6">
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Modul daur ulang &amp; kit komposter mini</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Praktik langsung pemilahan anorganik</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Sertifikat partisipasi &amp; suvenir pupuk</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between pt-4 bg-surface-container-lowest border-t border-surface-variant/70">
                                    <div>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant block">Mulai
                                            dari</span>
                                        <span class="font-title-md text-title-md text-primary font-bold">Rp 30.000 <span
                                                class="font-body-sm text-body-sm font-normal text-on-surface-variant">/org</span></span>
                                    </div>
                                    <button
                                        class="px-4 py-2 rounded-lg bg-primary-fixed text-primary hover:bg-primary hover:text-on-primary transition-all duration-200 font-label-md text-label-md flex items-center gap-1.5"
                                        onclick="selectDestination('Paket Edukasi ProKlim', 30000)" type="button">
                                        <span>Pilih Paket</span>
                                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Destination 5: Kuliner Jamblang -->
                        <article
                            class="destination-card flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group"
                            data-type="kuliner">
                            <div class="relative h-64 overflow-hidden">
                                <img alt="Jelajah Kuliner Nasi Jamblang Daun Jati"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="https://lh3.googleusercontent.com/aida/ALJJyrD7oM1GPRCYR9pw7efEnB-tRkkcCkkBv98RImOUADO0R40IANE2XzO42H8i19V-pXjXMH0UH5flLhEcaWiZjCVFbCVwPT-VLoQ91DyIdDyB6yaD-Xn_VI2iScyjgPQLLHVCPDq0GFUJru6-oKSjQQ3pk-aSiNkCLsQZxrLdL0XuhtzK8edxMUt8TwaSXDoVvB4HB7MrfljGcK34Fx61Hv5xpf8m3A7zieZB_ckRE4Y" />
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-3 py-1 rounded-full font-label-sm text-label-sm bg-surface-container-lowest/90 backdrop-blur text-primary font-bold shadow-sm">Kuliner
                                        Tradisional</span>
                                </div>
                                <div
                                    class="absolute bottom-4 right-4 bg-primary/80 backdrop-blur px-3 py-1 rounded-full text-on-primary font-label-sm text-label-sm flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[16px] text-secondary-container"
                                        style='font-variation-settings: "FILL" 1;'>star</span>
                                    <span>4.9</span>
                                    <span class="text-on-primary-container">(142)</span>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-1 justify-between">
                                <div>
                                    <div
                                        class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm mb-2">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">schedule</span>
                                        <span>Durasi 2.0 Jam</span>
                                        <span class="text-outline-variant">•</span>
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">restaurant</span>
                                        <span>Sesi Makan Siang &amp; Sore</span>
                                    </div>
                                    <h3
                                        class="font-headline-sm text-headline-sm text-primary mb-2 group-hover:text-secondary-container transition-colors">
                                        Jelajah Kuliner Nasi Jamblang Daun Jati</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-4">
                                        Cita rasa autentik hidangan khas Cirebon beralas daun jati segar dipadukan
                                        dengan aneka lauk tradisional dan sambal khas buatan ibu PKK desa.
                                    </p>
                                    <div class="bg-surface-container-low p-3 rounded-lg flex flex-col gap-1.5 mb-6">
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Prasmanan 12 varian lauk khas Jamblang</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Edukasi sejarah kuliner &amp; bumbu rempah</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Free flow wedang jahe &amp; serabi kinca</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between pt-4 bg-surface-container-lowest border-t border-surface-variant/70">
                                    <div>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant block">Mulai
                                            dari</span>
                                        <span class="font-title-md text-title-md text-primary font-bold">Rp 40.000 <span
                                                class="font-body-sm text-body-sm font-normal text-on-surface-variant">/org</span></span>
                                    </div>
                                    <button
                                        class="px-4 py-2 rounded-lg bg-primary-fixed text-primary hover:bg-primary hover:text-on-primary transition-all duration-200 font-label-md text-label-md flex items-center gap-1.5"
                                        onclick="selectDestination('Jelajah Kuliner Nasi Jamblang', 40000)"
                                        type="button">
                                        <span>Pilih Paket</span>
                                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <!-- Destination 6: Camping & Api Unggun -->
                        <article
                            class="destination-card flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group"
                            data-type="alam petualangan">
                            <div class="relative h-64 overflow-hidden">
                                <img alt="Kemah Edukasi Tepian Sungai &amp; Api Unggun"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="https://lh3.googleusercontent.com/aida/ALJJyrCEqqBTUmz61SSwPWBEOdTzeaQbS9UoLpDNgNI02vZFtoXQpiJnhUfmZRW7Ud8ZVOdMLf_FdUA_-6EnFXpG-AWWBYQSh1MTS573gIBH715nzafSmRfDCjwF7aQQTBWZ7LHVW5DlS_P0nB9EBoocOmq_hVBKnetLx9MvDpllEZpSkmGcDfgKauWa4up5j9D2n5eYizSt_xvLHGndcY6plSnUtJwnBikTs_3JPVhVPOs" />
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-3 py-1 rounded-full font-label-sm text-label-sm bg-surface-container-lowest/90 backdrop-blur text-primary font-bold shadow-sm">Eksplorasi
                                        Malam &amp; Camping</span>
                                </div>
                                <div
                                    class="absolute bottom-4 right-4 bg-primary/80 backdrop-blur px-3 py-1 rounded-full text-on-primary font-label-sm text-label-sm flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[16px] text-secondary-container"
                                        style='font-variation-settings: "FILL" 1;'>star</span>
                                    <span>4.8</span>
                                    <span class="text-on-primary-container">(76)</span>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-1 justify-between">
                                <div>
                                    <div
                                        class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm mb-2">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">schedule</span>
                                        <span>2 Hari 1 Malam</span>
                                        <span class="text-outline-variant">•</span>
                                        <span class="material-symbols-outlined text-[16px] text-secondary">camp</span>
                                        <span>Tenda &amp; Perlengkapan Lengkap</span>
                                    </div>
                                    <h3
                                        class="font-headline-sm text-headline-sm text-primary mb-2 group-hover:text-secondary-container transition-colors">
                                        Kemah Edukasi Tepian Sungai &amp; Api Unggun</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-4">
                                        Pengalaman bermalam di bantaran Sungai Cipager dengan tenda dome nyaman, suasana
                                        sejuk pedesaan, dan barbecue jagung manis panen lokal.
                                    </p>
                                    <div class="bg-surface-container-low p-3 rounded-lg flex flex-col gap-1.5 mb-6">
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Tenda kapasitas 4 orang &amp; sleeping bag</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Api unggun &amp; santap malam tradisi</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                            <span>Pemandu keamanan &amp; fasilitas MCK bersih</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between pt-4 bg-surface-container-lowest border-t border-surface-variant/70">
                                    <div>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant block">Mulai
                                            dari</span>
                                        <span class="font-title-md text-title-md text-primary font-bold">Rp 75.000 <span
                                                class="font-body-sm text-body-sm font-normal text-on-surface-variant">/org</span></span>
                                    </div>
                                    <button
                                        class="px-4 py-2 rounded-lg bg-primary-fixed text-primary hover:bg-primary hover:text-on-primary transition-all duration-200 font-label-md text-label-md flex items-center gap-1.5"
                                        onclick="selectDestination('Kemah Edukasi Tepian Sungai', 75000)" type="button">
                                        <span>Pilih Paket</span>
                                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!-- Complete Integrated Booking System Widget -->
            <!-- Visitor Guidelines & ProKlim Eco-Rules -->
            <!-- Banner Paket Terpadu Rombongan (Matching IMAGE_3) -->
            <section class="w-full py-10 bg-surface">
                <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
                    <div
                        class="w-full rounded-2xl bg-[#1d2273] text-on-primary p-8 md:p-10 lg:p-12 shadow-xl flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                        <div class="flex-1 max-w-3xl">
                            <div
                                class="inline-block px-3.5 py-1 rounded-full bg-secondary-container text-on-primary font-bold text-xs uppercase tracking-wide mb-4">
                                PAKET TERPADU ROMBONGAN
                            </div>
                            <h2
                                class="text-2xl md:text-3xl lg:text-[34px] font-bold text-white leading-tight tracking-tight mb-3 font-display">
                                Dapatkan Paket Eksplorasi Komplit Desa Kepongpongan
                            </h2>
                            <p class="text-white/80 font-body-md text-sm md:text-base leading-relaxed max-w-2xl">
                                Nikmati kunjungan studi banding, tubing seru, makan siang nasi jamblang daun jati, dan
                                suvenir batik binaan Astra. Harga transparan mulai dari <span
                                    class="font-bold text-white">Rp 25.000 / orang</span> tanpa biaya tersembunyi.
                            </p>
                        </div>
                        <div class="shrink-0 self-start md:self-center">
                            <a class="inline-flex items-center gap-2.5 px-6 py-3.5 rounded-xl bg-secondary-container hover:bg-secondary text-white font-bold text-sm md:text-base transition-colors duration-200 shadow-md"
                                href="#">
                                <span class="material-symbols-outlined text-[20px]">calendar_today</span>
                                <span>Ayo kesini</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Interactive Logic & Micro-interactions Script -->
            <script>
            let currentAdult = 2;
            let currentChild = 1;

            function selectDestination(name, price) {
                const select = document.getElementById('destinationSelect');
                for (let i = 0; i < select.options.length; i++) {
                    if (select.options[i].text.includes(name)) {
                        select.selectedIndex = i;
                        break;
                    }
                }
                calculateTotal();
                document.getElementById('reservasiSection').scrollIntoView({
                    behavior: 'smooth'
                });
            }

            function adjustCount(type, delta) {
                if (type === 'adult') {
                    currentAdult = Math.max(1, currentAdult + delta);
                    document.getElementById('adultCount').innerText = currentAdult;
                    document.getElementById('txtAdultCount').innerText = currentAdult;
                } else {
                    currentChild = Math.max(0, currentChild + delta);
                    document.getElementById('childCount').innerText = currentChild;
                    document.getElementById('txtChildCount').innerText = currentChild;
                }
                calculateTotal();
            }

            function calculateTotal() {
                const select = document.getElementById('destinationSelect');
                const selectedOption = select.options[select.selectedIndex];
                const basePrice = parseInt(selectedOption.getAttribute('data-price') || 50000);

                const adultTotal = currentAdult * basePrice;
                const childTotal = currentChild * (basePrice * 0.5);
                const subtotal = adultTotal + childTotal;
                const kasDesa = subtotal * 0.10;
                const grandTotal = subtotal + kasDesa;

                // Update text values
                document.getElementById('summaryDest').innerText = selectedOption.value;
                document.getElementById('costAdult').innerText = 'Rp ' + adultTotal.toLocaleString('id-ID');
                document.getElementById('costChild').innerText = 'Rp ' + childTotal.toLocaleString('id-ID');
                document.getElementById('costKas').innerText = 'Rp ' + kasDesa.toLocaleString('id-ID');
                document.getElementById('costTotal').innerText = 'Rp ' + grandTotal.toLocaleString('id-ID');

                updateSummary();
            }

            function updateSummary() {
                const dateVal = document.getElementById('visitDate').value || '18 Mei 2025';
                const slotVal = document.querySelector('input[name="timeslot"]:checked')?.value || 'Sesi Pagi';
                document.getElementById('summaryTime').innerText = `${dateVal} • ${slotVal.split(' ')[1] || slotVal}`;
                document.getElementById('summaryVisitors').innerText = `${currentAdult} Dewasa, ${currentChild} Anak`;
            }

            function submitReservation() {
                const name = document.getElementById('custName').value;
                if (!name) {
                    alert('Mohon lengkapi Nama Pemesan.');
                    return;
                }
                alert(
                    `Terima kasih Bapak/Ibu ${name}! Pengajuan reservasi Anda berhasil dicatat dengan kode #ASTRA-KPG-2025-0842. Rincian e-tiket telah diteruskan ke WhatsApp & Email Anda.`);
            }

            // Category Filter Pills Toggle
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.filter-btn').forEach(b => {
                        b.classList.remove('bg-primary', 'text-on-primary');
                        b.classList.add('bg-surface-container-lowest',
                            'text-on-surface-variant');
                    });
                    this.classList.add('bg-primary', 'text-on-primary');
                    this.classList.remove('bg-surface-container-lowest', 'text-on-surface-variant');

                    const cat = this.getAttribute('data-cat');
                    document.querySelectorAll('.destination-card').forEach(card => {
                        if (cat === 'all' || card.getAttribute('data-type').includes(cat)) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });

            // Run initial calc
            calculateTotal();
            </script>
        </div>
    </main>
    <footer class="w-full bg-surface-container-lowest border-t border-surface-variant/80 pt-space-xl pb-space-lg">
        <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-gutter pb-space-xl">
                <div class="lg:col-span-2 flex flex-col gap-space-md">
                    <div class="flex items-center gap-space-md"><img alt="Astra Desa Digital Logo"
                            class="h-9 w-auto object-contain"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3SWWN_mr8MACCnuDU6p1t5GJORYcsrqN_Ou4LnjzIKup7AslRstdfIPCC2kjWsTp2ysDlQwHR_3U2SpJdUskLmsxX5FEs-eQa7l-lsHfNiNyA6bhUryWGBacW6sEdIbjy2Sx6RnL8jGHw1kcVb85HrluNuAZV5-qPHvoJYo1s4AolOiszvirOhNt4hrpvi5QiDeHoxJW2no37A9aDSJ49yWoWf1Hs8Sq0pCrgChbknL_LI9Fq6zfJ" /><span
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