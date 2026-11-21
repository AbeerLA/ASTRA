<!DOCTYPE html>
<html lang="id">

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
    <header class="absolute top-0 left-0 right-0 z-50 bg-transparent border-b-0 shadow-none">
        <div
            class="h-20 max-w-[1440px] mx-auto px-margin-mobile lg:px-margin flex items-center justify-between gap-gutter">
            <div class="flex items-center gap-space-md shrink-0"><img alt="Astra Desa Digital Logo"
                    class="h-8 w-auto object-contain"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3ZK_mvSmoi2-59OJxj-jIen_hQ8V1OOoJgUnWYCx_HQCqNnuqnhWzHApPxP7AJJA3xKaO0KE09B38cBVkANPepdpIhCM_pHV4BIH5eQUwBMd4JgqMTGnNQ1_SEgVmv9J1_r2i7TNDYYHMPRpVQ4oEcqKRkV2EfFbOfltEnkvjloSdRo7_FznhTpy_ALPmXRgZF64LV1t51RU9FaNRgGPv0fLVWYkItS545BfqfaYtlZitftt0RKlA">
                <div class="flex flex-col"><span
                        class="font-title-md text-title-md text-white tracking-tight leading-none">Desa
                        Kepongpongan</span></div>
            </div>
            <nav class="hidden xl:flex items-center gap-1"
                data-active-classes="bg-white/15 text-white font-bold rounded-lg shadow-sm">

                <a aria-current="page"
                    class="px-3 py-2 transition-colors bg-white/15 text-white font-bold rounded-lg shadow-sm"
                    data-path="beranda" href="#">Beranda</a>

                <a class="font-label-lg text-label-lg text-white/90 px-3 py-2 rounded-lg hover:bg-white/15 hover:text-white transition-colors"
                    data-path="profil-desa" href="#">Profil Desa</a>

                <a class="font-label-lg text-label-lg text-white/90 px-3 py-2 rounded-lg hover:bg-white/15 hover:text-white transition-colors"
                    data-path="wisata-kampung" href="#">Progam</a>

                <a class="font-label-lg text-label-lg text-white/90 px-3 py-2 rounded-lg hover:bg-white/15 hover:text-white transition-colors"
                    data-path="program-desa" href="#">Wisata</a>

                <a class="font-label-lg text-label-lg text-white/90 px-3 py-2 rounded-lg hover:bg-white/15 hover:text-white transition-colors"
                    data-path="berita" href="#">Berita</a>

                <a class="font-label-lg text-label-lg text-white/90 px-3 py-2 rounded-lg hover:bg-white/15 hover:text-white transition-colors"
                    data-path="kontak" href="#">Kontak</a>
            </nav>
            <div class="flex items-center gap-space-sm sm:gap-space-md shrink-0"></div>
        </div>
    </header>
    <main class="w-full bg-surface">
        <div class="flex flex-col w-full">
            <!-- 1. FULL-WIDTH BACKGROUND HERO CAROUSEL -->
            <section aria-label="Hero Carousel"
                class="group relative w-full h-screen min-h-[100svh] flex items-center overflow-hidden">
                <!-- Slides Container -->
                <div class="absolute inset-0 z-0" id="hero-slider">

                    @php
                    $heroIcons = [
                    'verified',
                    'kayaking',
                    'storefront',
                    'diversity_3',
                    'laptop_chromebook',
                    ];
                    @endphp

                    @foreach($slides as $index => $slide)

                    @php
                    $imageUrl = \Illuminate\Support\Str::startsWith(
                    $slide->image_path,
                    ['http://', 'https://']
                    )
                    ? $slide->image_path
                    : asset('storage/' . $slide->image_path);
                    @endphp

                    <div class="hero-slide absolute inset-0 transition-opacity duration-700 ease-in-out
            {{ $index === 0 ? 'opacity-100 pointer-events-auto' : 'opacity-0 pointer-events-none' }}" data-hero-slide
                        data-slide-category="{{ $slide->category }}" data-slide-description="{{ $slide->description }}"
                        data-slide-icon="{{ $heroIcons[$index] ?? 'photo' }}" data-slide-index="{{ $index }}"
                        data-slide-title="{{ $slide->title }}">

                        <img alt="{{ $slide->title }}" class="w-full h-full object-cover object-center"
                            src="{{ $imageUrl }}">
                    </div>

                    @endforeach

                </div>
                <!-- Astra Gradient Overlays (No gold/teal: purely Astra Deep Navy palette) -->
                <div
                    class="absolute inset-0 z-10 pointer-events-none bg-gradient-to-r from-[#0e1140]/75 via-[#1b1e6d]/55 to-[#1b1e6d]/15">
                </div>
                <div
                    class="absolute inset-0 z-10 pointer-events-none bg-gradient-to-t from-[#0e1140]/55 via-transparent to-black/10">
                </div>
                <!-- Hero Content Layer -->
                <div
                    class="relative z-20 max-w-7xl mx-auto px-6 lg:px-8 w-full py-12 lg:py-16 flex flex-col justify-between">
                    <div class="max-w-2xl lg:max-w-3xl flex flex-col items-start">
                        <!-- Eyebrow Pill Badge -->
                        <div
                            class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white shadow-sm mb-5 transition-all duration-300">
                            <span class="material-symbols-outlined text-[16px] text-[#f16421]"
                                id="hero-badge-icon">diversity_3</span>
                            <span class="font-label-md text-label-md font-semibold tracking-wide text-white/95"
                                id="hero-badge-text" style="opacity: 1;">Kearifan Lokal • Kebersamaan Warga</span>
                        </div>
                        <!-- Main Headline -->
                        <h1 class="font-headline-lg font-bold text-white tracking-tight drop-shadow-md text-3xl sm:text-4xl lg:text-[46px] lg:leading-[54px] mb-4 transition-all duration-300"
                            id="hero-headline" style="opacity: 1;">Tradisi Gotong Royong Membangun Masa Depan Desa</h1>
                        <!-- Descriptive Subtitle -->
                        <p class="font-body-lg text-slate-200 text-sm sm:text-base lg:text-lg leading-relaxed mb-8 max-w-2xl transition-all duration-300"
                            id="hero-subtitle" style="opacity: 1;">Masyarakat rukun dan partisipatif dalam menjaga
                            kelestarian lingkungan ProKlim serta pengembangan fasilitas publik berbasis komunitas.</p>
                        <!-- CTA Buttons -->
                        <div class="flex flex-wrap items-center gap-4 mb-8 w-full sm:w-auto">


                        </div>
                        <!-- Overlapping Glassmorphism Metric Badge Card -->

                    </div>
                </div>
                <!-- Carousel Controls (Bottom Right) -->
                <div class="absolute bottom-6  lg:right-10 z-30 flex items-center gap-4">
                    <!-- Prev / Next Navigation Arrows -->
                    <!-- Hero Navigation Arrows -->
                    <button aria-label="Slide Sebelumnya"
                        class="absolute left-6 top-1/2 -translate-y-1/2 z-30 w-12 h-12 rounded-full bg-white/10 hover:bg-[#fc6c29] backdrop-blur-md border border-white/30 text-white flex items-center justify-center shadow-lg active:scale-95 cursor-pointer opacity-0 group-hover:opacity-100 focus-visible:opacity-100 transition-all duration-300"
                        id="hero-prev-btn" type="button">
                        <span class="material-symbols-outlined text-[28px]">chevron_left</span>
                    </button>

                    <button aria-label="Slide Selanjutnya"
                        class="absolute right-6 top-1/2 -translate-y-1/2 z-30 w-12 h-12 rounded-full bg-white/10 hover:bg-[#fc6c29] backdrop-blur-md border border-white/30 text-white flex items-center justify-center shadow-lg active:scale-95 cursor-pointer opacity-0 group-hover:opacity-100 focus-visible:opacity-100 transition-all duration-300"
                        id="hero-next-btn" type="button">
                        <span class="material-symbols-outlined text-[28px]">chevron_right</span>
                    </button>
                    <!-- Pagination Dots -->
                    <div class="flex items-center gap-1.5 ml-2" id="hero-dots">

                        @foreach($slides as $index => $slide)

                        <button aria-label="Buka slide {{ $index + 1 }}" class="h-2.5 rounded-full transition-all duration-300
            {{ $index === 0 ? 'w-8 bg-[#f16421]' : 'w-2.5 bg-white/40 hover:bg-white/70' }}"
                            data-dot-index="{{ $index }}" type="button">
                        </button>

                        @endforeach

                    </div>
                </div>
            </section>
            <!-- Carousel Interaction Script -->
            <script>
            (function initHeroCarousel() {
                const heroSection = document.getElementById('hero');
                const slides = document.querySelectorAll('[data-hero-slide]');
                const dots = document.querySelectorAll('[data-dot-index]');
                const headline = document.getElementById('hero-headline');
                const subtitle = document.getElementById('hero-subtitle');
                const badgeText = document.getElementById('hero-badge-text');
                const badgeIcon = document.getElementById('hero-badge-icon');
                const prevBtn = document.getElementById('hero-prev-btn');
                const nextBtn = document.getElementById('hero-next-btn');

                if (!slides.length) return;

                let currentIndex = 0;
                let timer = null;
                const totalSlides = slides.length;

                function renderSlide(index) {
                    currentIndex = (index + totalSlides) % totalSlides;
                    const activeSlide = slides[currentIndex];

                    // Update background images opacity
                    slides.forEach((slide, idx) => {
                        if (idx === currentIndex) {
                            slide.classList.remove('opacity-0', 'pointer-events-none');
                            slide.classList.add('opacity-100');
                        } else {
                            slide.classList.remove('opacity-100');
                            slide.classList.add('opacity-0', 'pointer-events-none');
                        }
                    });

                    // Update dots
                    dots.forEach((dot, idx) => {
                        if (idx === currentIndex) {
                            dot.className =
                                'h-2.5 rounded-full transition-all duration-300 w-8 bg-[#f16421]';
                        } else {
                            dot.className =
                                'h-2.5 rounded-full transition-all duration-300 w-2.5 bg-white/40 hover:bg-white/70';
                        }
                    });

                    // Smooth content transition
                    if (activeSlide && headline && subtitle && badgeText && badgeIcon) {
                        headline.style.opacity = '0';
                        subtitle.style.opacity = '0';
                        badgeText.style.opacity = '0';

                        setTimeout(() => {
                            headline.textContent = activeSlide.getAttribute('data-slide-title') || '';
                            subtitle.textContent = activeSlide.getAttribute('data-slide-description') || '';
                            badgeText.textContent = activeSlide.getAttribute('data-slide-category') || '';
                            badgeIcon.textContent = activeSlide.getAttribute('data-slide-icon') ||
                                'verified';

                            headline.style.opacity = '1';
                            subtitle.style.opacity = '1';
                            badgeText.style.opacity = '1';
                        }, 150);
                    }
                }

                function nextSlide() {
                    renderSlide(currentIndex + 1);
                }

                function prevSlide() {
                    renderSlide(currentIndex - 1);
                }

                function startTimer() {
                    stopTimer();
                    timer = setInterval(nextSlide, 6000);
                }

                function stopTimer() {
                    if (timer) clearInterval(timer);
                }

                if (prevBtn) prevBtn.addEventListener('click', () => {
                    prevSlide();
                    startTimer();
                });
                if (nextBtn) nextBtn.addEventListener('click', () => {
                    nextSlide();
                    startTimer();
                });

                dots.forEach(dot => {
                    dot.addEventListener('click', () => {
                        const targetIdx = parseInt(dot.getAttribute('data-dot-index'), 10);
                        renderSlide(targetIdx);
                        startTimer();
                    });
                });

                if (heroSection) {
                    heroSection.addEventListener('mouseenter', stopTimer);
                    heroSection.addEventListener('mouseleave', startTimer);

                    // Touch swipe support
                    let touchStartX = 0;
                    let touchEndX = 0;
                    heroSection.addEventListener('touchstart', (e) => {
                        touchStartX = e.changedTouches[0].screenX;
                    }, {
                        passive: true
                    });
                    heroSection.addEventListener('touchend', (e) => {
                        touchEndX = e.changedTouches[0].screenX;
                        if (touchStartX - touchEndX > 50) {
                            nextSlide();
                            startTimer();
                        } else if (touchEndX - touchStartX > 50) {
                            prevSlide();
                            startTimer();
                        }
                    }, {
                        passive: true
                    });
                }

                startTimer();
            })();
            </script>
            <!-- 2. DEDICATED ABOUT SECTION ("TENTANG KAMI / SEKILAS TENTANG DESA KEPONGPONGAN") -->
            <section class="w-full bg-[#FAFCFB] py-16 lg:py-24 border-b border-surface-variant/50" id="tentang-desa">
                <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                        <!-- Left Column: Featured Community Image with LPMI-style Floating Badge -->
                        <div class="lg:col-span-5 relative">
                            <div
                                class="relative rounded-2xl overflow-hidden shadow-lg border border-surface-variant bg-surface-container-lowest">
                                <img alt="Kebersamaan Warga dan Pengrajin Batik Balai Desa Kepongpongan Cirebon"
                                    class="w-full h-[420px] sm:h-[480px] object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJWzkm1ux4cEhnVNvBMX2jTbEtCaY0IZiqZHUlO-QvNqS_NchrRPCUcJ7CuQc7hjrkVdQEobviPstR5JuesXMOF7ARcw2DQcFB5gtP3vo6ML2RIChn9hOjp-vSWv7gIWNQAcr9cUfrRQxm-Wyo1g2Qvcsiz_pzQ3wNbdAgg9IHO480vszcwOcG_K3D-SOxD_cQxzF2G0WbCS_oXf1J_PEh_SAC8vMc9GoXg9gkQQ4">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent">
                                </div>
                                <!-- Top badge in photo -->
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#fc6c29] text-white font-label-sm text-label-sm font-bold shadow-md">
                                        <span class="material-symbols-outlined text-[15px]">verified</span>
                                        <span>Kemitraan Strategis Astra</span>
                                    </span>
                                </div>
                                <!-- Bottom floating counter card like LPMI 1500+ peserta -->
                                <div
                                    class="absolute bottom-5 left-5 right-5 bg-surface-container-lowest/95 backdrop-blur-md p-4 rounded-xl shadow-lg border border-white/60 flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-12 h-12 rounded-xl bg-primary-fixed text-primary flex items-center justify-center font-bold text-lg">
                                            <span class="material-symbols-outlined text-[26px]">eco</span>
                                        </div>
                                        <div>
                                            <span
                                                class="font-headline-sm text-lg font-bold text-primary block leading-none">100%
                                                Mandiri</span>
                                            <span class="text-xs text-on-surface-variant">Desa Berkelanjutan &amp;
                                                ProKlim</span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-2xl font-bold text-secondary-container">184 Ha</span>
                                        <span class="text-[11px] text-on-surface-variant block">Lahan Produktif</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Column: Editorial Narrative & Highlights (LPMI-style Structured Layout) -->
                        <div class="lg:col-span-7 flex flex-col">
                            <!-- Tagline / Pill Tag -->
                            <div
                                class="inline-flex items-center gap-1.5 text-secondary-container font-label-md text-label-md font-bold uppercase tracking-wider mb-2.5">
                                <span class="w-2 h-2 rounded-full bg-secondary-container"></span>
                                <span>TENTANG KAMI • MENGENAL KEPONGPONGAN</span>
                            </div>
                            <!-- Section Heading -->
                            <h2
                                class="font-headline-lg text-2xl sm:text-3xl lg:text-4xl text-primary font-bold mb-4 leading-snug">
                                Sekilas Tentang Desa Kepongpongan
                            </h2>
                            <!-- Narrative Description -->
                            <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed mb-6">
                                Terletak di lereng timur Gunung Ciremai, Kecamatan Talun, Kabupaten Cirebon, Desa
                                Kepongpongan merupakan salah satu desa agropolitan mandiri yang memadukan kekayaan
                                tradisi agraris, kerajinan batik tulis pewarna alami, serta kelestarian lingkungan
                                aliran Sungai Cipager. Bersama Inisiatif Astra Desa Digital, Kepongpongan
                                bertransformasi menjadi pusat percontohan tata kelola desa berbasis teknologi,
                                pemberdayaan ekonomi sirkular BUMDes, dan layanan publik presisi bagi 7.420 jiwa
                                warganya.
                            </p>
                            <!-- 2x2 Key Statistics & Badges Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 mb-6">
                                <div
                                    class="flex items-center gap-3 p-3 rounded-xl bg-surface-container-low border border-surface-variant/70">
                                    <span
                                        class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0">
                                        <span class="material-symbols-outlined text-[18px]">verified</span>
                                    </span>
                                    <div class="text-sm font-semibold text-on-surface">Desa Mandiri &amp; ProKlim
                                        Lestari</div>
                                </div>
                                <div
                                    class="flex items-center gap-3 p-3 rounded-xl bg-surface-container-low border border-surface-variant/70">
                                    <span
                                        class="w-8 h-8 rounded-lg bg-primary-fixed text-primary flex items-center justify-center shrink-0">
                                        <span class="material-symbols-outlined text-[18px]">groups</span>
                                    </span>
                                    <div class="text-sm font-semibold text-on-surface">7.420+ Jiwa Warga Terdata Presisi
                                    </div>
                                </div>
                                <div
                                    class="flex items-center gap-3 p-3 rounded-xl bg-surface-container-low border border-surface-variant/70">
                                    <span
                                        class="w-8 h-8 rounded-lg bg-amber-100 text-amber-800 flex items-center justify-center shrink-0">
                                        <span class="material-symbols-outlined text-[18px]">agriculture</span>
                                    </span>
                                    <div class="text-sm font-semibold text-on-surface">184 Ha Lahan Pertanian &amp;
                                        Wisata</div>
                                </div>
                                <div
                                    class="flex items-center gap-3 p-3 rounded-xl bg-surface-container-low border border-surface-variant/70">
                                    <span
                                        class="w-8 h-8 rounded-lg bg-orange-100 text-[#fc6c29] flex items-center justify-center shrink-0">
                                        <span class="material-symbols-outlined text-[18px]">handshake</span>
                                    </span>
                                    <div class="text-sm font-semibold text-on-surface">Binaan CSR PT Astra International
                                    </div>
                                </div>
                            </div>
                            <!-- Vision & Mission Compact Cards (Like LPMI Visi Misi Box) -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div
                                    class="p-4 rounded-xl bg-surface-container-lowest border-l-4 border-primary shadow-sm border border-surface-variant/60">
                                    <div class="flex items-center gap-2 text-primary font-bold text-sm mb-1.5">
                                        <span class="material-symbols-outlined text-[18px]">flag</span>
                                        <span class="uppercase tracking-wider">Visi Desa</span>
                                    </div>
                                    <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                                        "Menjadi desa digital agropolitan mandiri terdepan di Jawa Barat yang berakar
                                        pada kearifan lokal."
                                    </p>
                                </div>
                                <div
                                    class="p-4 rounded-xl bg-surface-container-lowest border-l-4 border-secondary-container shadow-sm border border-surface-variant/60">
                                    <div class="flex items-center gap-2 text-secondary font-bold text-sm mb-1.5">
                                        <span class="material-symbols-outlined text-[18px]">task_alt</span>
                                        <span class="uppercase tracking-wider">Misi Desa</span>
                                    </div>
                                    <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                                        "Mengakselerasi digitalisasi layanan publik, memperkuat kemandirian ekonomi
                                        BUMDes, dan memelihara kelestarian lingkungan."
                                    </p>
                                </div>
                            </div>
                            <!-- CTA Link -->
                            <div>
                                <a class="inline-flex items-center gap-2 px-5 py-3 rounded-lg bg-primary text-white font-label-md text-label-md font-bold hover:bg-primary-container transition-all shadow-sm group"
                                    href="#">
                                    <span>Pelajari Selengkapnya di Profil Desa</span>
                                    <span
                                        class="material-symbols-outlined text-[18px] transition-transform group-hover:translate-x-1">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 3. FEATURED SARANA KAMPUNG (INTERACTIVE GRID) -->
            <section class="w-full bg-surface-container-low py-16 my-8" id="sarana">
                <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
                        <div>
                            <div
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed text-primary font-label-sm text-label-sm mb-2">
                                <span class="material-symbols-outlined text-[14px]">corporate_fare</span>
                                <span>Infrastruktur Layanan Publik</span>
                            </div>
                            <h2 class="font-headline-lg text-headline-lg text-primary">Sarana Fasilitas Unggulan Warga
                            </h2>
                        </div>
                        <div class="flex items-center gap-2 mt-4 md:mt-0">
                            <button
                                class="px-4 py-2 rounded-lg bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm hover:bg-surface-container transition-colors">Semua
                                Kategori</button>
                            <button
                                class="px-4 py-2 rounded-lg bg-surface text-on-surface-variant font-label-md text-label-md hover:bg-surface-container-lowest transition-colors">Pemerintahan</button>
                            <button
                                class="px-4 py-2 rounded-lg bg-surface text-on-surface-variant font-label-md text-label-md hover:bg-surface-container-lowest transition-colors">Kesehatan</button>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
                        <!-- Sarana 1 -->
                        <div
                            class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">
                            <div class="h-44 w-full relative overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Interior of modern Balai Pertemuan Desa Kepongpongan and Astra Digital Community Center, equipped with sleek computer terminals, presentation screens, conference tables, clean minimalist wooden accents, warm lighting, villagers collaborating, modern civic architecture."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmtM7W4-7SSR0XF299XwjsHpM-nzxQ2oVQGbXpJQ1OksFCisP6d825U6HFQaY-642yjX9giri83oSKT9LFdylJdigQZyrR9RQefZaQkx-9y53OxDWQMitUKGEwaIqoz5MrV7zeKdj7DjXKlebUvmr60cuIU1G87DBS6kCiL9SV-zBLCVVsBrLsT1ruluUJ9gENjUbZy2YBMxmwzxu27CL4Ah8BnKvdeIQWUdPwtZY">
                                <div class="absolute top-3 left-3">
                                    <span
                                        class="px-2.5 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm font-semibold">Balai
                                        &amp; Digital Hub</span>
                                </div>
                                <div class="absolute top-3 right-3">
                                    <span
                                        class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm">
                                        <span class="w-2 h-2 rounded-full bg-secondary-container"></span>
                                        Sangat Baik
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between">
                                <div>
                                    <div
                                        class="flex items-center gap-1 text-on-surface-variant font-body-sm text-body-sm mb-1">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                        <span>Dusun 1 RT 02 / RW 01</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Balai Pertemuan
                                        &amp; Digital Center</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                        Fasilitas ruang pertemuan multifungsi berkapasitas 250 orang, co-working space,
                                        dan akses internet berkecepatan tinggi bantuan CSR Astra.
                                    </p>
                                </div>
                                <a class="inline-flex items-center justify-between pt-3 text-primary font-label-md text-label-md group-hover:text-secondary-container transition-colors"
                                    href="#">
                                    <span>Detail Fasilitas &amp; Jadwal</span>
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- Sarana 2 -->
                        <div
                            class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">
                            <div class="h-44 w-full relative overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Clean and welcoming community healthcare clinic Puskesmas Pembantu in Kepongpongan village, neat consultation desk, friendly Indonesian female nurse measuring health vitals of mother and child, spotless medical equipment, warm natural daylight through large glass windows."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-EOrVZN9CPgI-0ia1FOHj7GOqdReBgbO2qlI5V9wHgO35xdsbdYNd1KAI-eq8BEi_o5fXlEW3sSxfFtSb2qpNaZTf9EYPx52N6h95RlB4-yJrTMsorRQrm_LzOlBfv3k7bj7SnzAqCFZg7RlZvRvLWA2j2fPO7wc3B01eRxmw8KVFwdlYgRkrEIjjz25GHXr3jCWJ7-2F0E-zhSohTRJiCDTfc8w4_tkrIySsKrY">
                                <div class="absolute top-3 left-3">
                                    <span
                                        class="px-2.5 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm font-semibold">Kesehatan</span>
                                </div>
                                <div class="absolute top-3 right-3">
                                    <span
                                        class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm">
                                        <span class="w-2 h-2 rounded-full bg-secondary-container"></span>
                                        Beroperasi Penuh
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between">
                                <div>
                                    <div
                                        class="flex items-center gap-1 text-on-surface-variant font-body-sm text-body-sm mb-1">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                        <span>Kompleks Kantor Desa</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Pustu &amp; Posyandu
                                        Melati</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                        Pelayanan skrining kesehatan rutin, telemedicine dokter spesialis, serta
                                        pemantauan tumbuh kembang balita pencegahan stunting terintegrasi.
                                    </p>
                                </div>
                                <a class="inline-flex items-center justify-between pt-3 text-primary font-label-md text-label-md group-hover:text-secondary-container transition-colors"
                                    href="#">
                                    <span>Jadwal Dokter &amp; Posyandu</span>
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- Sarana 3 -->
                        <div
                            class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">
                            <div class="h-44 w-full relative overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Organized modern eco-waste bank facility Bank Sampah Berkah Mandiri in Kepongpongan village, neatly organized sorting bins for plastics, paper and organic compost, weighing scale, smiling villagers depositing sorted recyclables, sunny clean rural surroundings."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTWGLtm9YY6ef35Y2t5ZCoAr2v4AvWilPXOSaT9ORujaQZsUrqLg4Acv7RUTvcp-DiN2ZhxtehuOGbu7oW1b0M7mvr5Hm-sHYc0LHSSTXL4tBvGQukE5qirWPu8GYaKDTrOSjLRvn5cn_r0S1OWMbgy0X1jXLCNmoyb2jJnpuAhvvkJRS8IM7e5z1eGLCY2sQsK-8nQLbNhqPHtsXbbfVy7kEdCJgBMEHMH_2e8mI">
                                <div class="absolute top-3 left-3">
                                    <span
                                        class="px-2.5 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm font-semibold">Lingkungan
                                        Hidup</span>
                                </div>
                                <div class="absolute top-3 right-3">
                                    <span
                                        class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm">
                                        <span class="w-2 h-2 rounded-full bg-secondary-container"></span>
                                        Aktif
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between">
                                <div>
                                    <div
                                        class="flex items-center gap-1 text-on-surface-variant font-body-sm text-body-sm mb-1">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                        <span>Dusun 3 RW 05</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Sentra Bank Sampah
                                        Mandiri</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                        Unit pengolahan sampah anorganik terdigitalisasi dengan sistem tabungan emas
                                        pegadaian dan pembuatan pupuk kompos kasgot maggot bsf.
                                    </p>
                                </div>
                                <a class="inline-flex items-center justify-between pt-3 text-primary font-label-md text-label-md group-hover:text-secondary-container transition-colors"
                                    href="#">
                                    <span>Cek Saldo &amp; Harga Sampah</span>
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- Sarana 4 -->
                        <div
                            class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">
                            <div class="h-44 w-full relative overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Vibrant modern digital library and early childhood study center in Kepongpongan, colorful ergonomic low reading tables, tablets on secure stands for kids, shelves stacked with Indonesian children books and Astra educational kits, warm inspiring classroom atmosphere."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZpC23hPgR1ljdTKiqmBrbGhq1V8PNfjkwkNI0RQdavhIaL5wdbwZWdmBoEBA_FhufEmcT14zqXix6XdKM_06zpt8xojEW1ck4jJtbOPk_qf2_a1dJprRi_tUnu79ove_wLm1du0TgjvuozPhVFN0ifeBRkmPsogpVJZykbQNmmxNbcFR9MN12izHYEQ2TWrUfoRff-e-NCnNUp3HCedk-FyKaJHLFN_sfkE44lU4">
                                <div class="absolute top-3 left-3">
                                    <span
                                        class="px-2.5 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm font-semibold">Pendidikan</span>
                                </div>
                                <div class="absolute top-3 right-3">
                                    <span
                                        class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm">
                                        <span class="w-2 h-2 rounded-full bg-secondary-container"></span>
                                        Aktif
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between">
                                <div>
                                    <div
                                        class="flex items-center gap-1 text-on-surface-variant font-body-sm text-body-sm mb-1">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                        <span>Gedung Literasi RW 03</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Perpustakaan Digital
                                        PAUD</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                        Ruang belajar ramah anak dengan koleksi 1.500 buku fisik dan 5.000 e-book
                                        literasi sains, dilengkapi aplikasi belajar interaktif tablet pintar.
                                    </p>
                                </div>
                                <a class="inline-flex items-center justify-between pt-3 text-primary font-label-md text-label-md group-hover:text-secondary-container transition-colors"
                                    href="#">
                                    <span>Katalog Buku &amp; Jam Buka</span>
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 4. WISATA UNGGULAN PREVIEW & BOOKING BANNER -->
            <section class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin py-12 w-full" id="wisata">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-8">
                    <div>
                        <div
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm mb-2">
                            <span class="material-symbols-outlined text-[14px]">local_activity</span>
                            <span>Ekowisata Edukasi Berkelanjutan</span>
                        </div>
                        <h2 class="font-headline-lg text-headline-lg text-primary">Destinasi Wisata Desa Kepongpongan
                        </h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-md mt-2 md:mt-0">
                        Menghadirkan pengalaman autentik pedesaan Cirebon, kearifan lokal membatik, hingga petualangan
                        alam yang dikelola mandiri oleh BUMDes.
                    </p>
                </div>
                <!-- 3 Destinations Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter mb-8">
                    <!-- Wisata 1 -->
                    <div
                        class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">
                        <div class="h-60 relative overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Indonesian woman teaching tourists the traditional batik canting wax technique in open-air workshop pavilion in Kepongpongan village, backdrop of biofloc tilapia fish tanks with clear splashing water, rustic bamboo decor, warm afternoon sun, artisan crafts."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvRC1ya2oM9ZwZ8XHpWRAmIAb2nC8yJwxmrBCYnDh6XAd4D-pf3W6kX7qYrXdo60vpULs646ym89LSOmGTdFcQ0cK-DRDGX-4C_Um1NpuRiMdlXZl4FJxlsc76zpKWfhwcPuKfJHfwhLcFF_o02l0R09WKVCxslF_pXXWlUnoGQvZfcjbI2biCap3E8-QXxYXeCP2iGhwsNOyIASjMMSjf_yrv-doFKiR6nLe3aRQ">
                            <div
                                class="absolute bottom-3 left-3 bg-surface-container-lowest/95 backdrop-blur-md px-3 py-1 rounded-lg">
                                <span class="font-label-md text-label-md text-secondary-container font-bold">Mulai Rp
                                    35.000 / pax</span>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-2 mb-2">
                                    <span
                                        class="px-2 py-0.5 rounded bg-primary-fixed text-primary font-label-sm text-label-sm font-semibold">Edukasi
                                        Budaya &amp; Perikanan</span>
                                    <span class="flex items-center text-amber-500 font-label-sm text-label-sm"><span
                                            class="material-symbols-outlined text-[14px] mr-0.5"
                                            style="font-variation-settings: &quot;FILL&quot; 1;">star</span>4.9 (142
                                        ulasan)</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Kampoeng Edukasi Batik
                                    &amp; Nila Bioflok</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    Pengalaman langsung mencanting kain batik motif khas Mega Mendung modifikasi talun
                                    dan mempelajari teknologi budidaya bioflok nila modern.
                                </p>
                            </div>
                            <div class="flex items-center justify-between pt-4 border-t border-surface-variant/40">
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Buka Setiap Hari (08.00
                                    - 16.30)</span>
                                <span
                                    class="font-label-md text-label-md text-primary font-bold group-hover:underline">Reservasi</span>
                            </div>
                        </div>
                    </div>
                    <!-- Wisata 2 -->
                    <div
                        class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">
                        <div class="h-60 relative overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Exciting river tubing adventure on crystal clear Cipager river in Kepongpongan Cirebon, cheerful family riding large inflatable safety tubes with helmets and life jackets, surrounded by natural volcanic river stones and lush tropical green trees, dynamic water splash."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcR6_aoZpeMzDpEuRIiNVhGxh-172IUuexen_ubpl42sdPhrRNJmO0USGfAkFWxYyXau-h91Nemml9ToDcrbh_xa5_lCSLfnvw9GfDny8YzpXCBHdYeOrvIwwhsD_Si4VyXIrRsIJv8E5HFnY-WQY2v_9hywwYZBm_e64jG2g58EoRX564xmsmQzip_fQk36ULhspiu2XNW03JyzxLxg5bUG3xh7cz1BVWzbSlpKI">
                            <div
                                class="absolute bottom-3 left-3 bg-surface-container-lowest/95 backdrop-blur-md px-3 py-1 rounded-lg">
                                <span class="font-label-md text-label-md text-secondary-container font-bold">Mulai Rp
                                    45.000 / pax</span>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-2 mb-2">
                                    <span
                                        class="px-2 py-0.5 rounded bg-primary-fixed text-primary font-label-sm text-label-sm font-semibold">Petualangan
                                        &amp; Alam</span>
                                    <span class="flex items-center text-amber-500 font-label-sm text-label-sm"><span
                                            class="material-symbols-outlined text-[14px] mr-0.5"
                                            style="font-variation-settings: &quot;FILL&quot; 1;">star</span>4.8 (210
                                        ulasan)</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Wisata Tubing Sungai
                                    Cipager</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    Menyusuri riam sungai jernih berjarak 1,8 km dengan pemandu bersertifikasi,
                                    dilengkapi fasilitas pelampung standar, dokumentasi action camera, dan bilas air
                                    hangat.
                                </p>
                            </div>
                            <div class="flex items-center justify-between pt-4 border-t border-surface-variant/40">
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Jumat - Minggu (08.30 -
                                    15.00)</span>
                                <span
                                    class="font-label-md text-label-md text-primary font-bold group-hover:underline">Reservasi</span>
                            </div>
                        </div>
                    </div>
                    <!-- Wisata 3 -->
                    <div
                        class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">
                        <div class="h-60 relative overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Sunlit organic fruit orchard agrotourism park in Kepongpongan Cirebon, rows of Gedong Gincu mango trees laden with red-yellow ripe mangoes, wooden observation gazebo, families picking fruits with wicker baskets, scenic distant Ciremai mountain view."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjmveAzMFEYen3KRMIVVpzMTz82Ohn18OKIHkb9Bx8gswBtp_6vevyCoTHb5MxMqIQydo1bngqSFFAw5IlHLSZHjv9aWZCtWL5O17l51iH_PRn4PxiPqOEgmwc-0k-OpNvbdLThSZgGTYrCSCxSCGwqgWm5WR6m348yZkV3w_jbNk4nNNH5N5Opf8cIdeklj3Du29Ul0TzkcSgRSUkLUpqSgNeUbWAophpQArmc9I">
                            <div
                                class="absolute bottom-3 left-3 bg-surface-container-lowest/95 backdrop-blur-md px-3 py-1 rounded-lg">
                                <span class="font-label-md text-label-md text-secondary-container font-bold">Mulai Rp
                                    25.000 / pax</span>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-2 mb-2">
                                    <span
                                        class="px-2 py-0.5 rounded bg-primary-fixed text-primary font-label-sm text-label-sm font-semibold">Agrowisata
                                        Petik Buah</span>
                                    <span class="flex items-center text-amber-500 font-label-sm text-label-sm"><span
                                            class="material-symbols-outlined text-[14px] mr-0.5"
                                            style="font-variation-settings: &quot;FILL&quot; 1;">star</span>4.7 (98
                                        ulasan)</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Taman Agrowisata Buah
                                    &amp; Sayur</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    Kebun buah percontohan ramah lingkungan, sensasi petik langsung mangga gedong gincu
                                    dan melon hidroponik, lengkap dengan resto saung kuliner khas Cirebonan.
                                </p>
                            </div>
                            <div class="flex items-center justify-between pt-4 border-t border-surface-variant/40">
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Setiap Hari (07.00 -
                                    17.00)</span>
                                <span
                                    class="font-label-md text-label-md text-primary font-bold group-hover:underline">Reservasi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Booking Hook Banner -->

            </section>
            <!-- 5. EMPAT PILAR PROGRAM DESA ASTRA -->
            <section class="w-full bg-surface-container py-16">
                <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="text-center max-w-2xl mx-auto mb-12">
                        <div
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed text-primary font-label-sm text-label-sm mb-2">
                            <span class="material-symbols-outlined text-[14px]">handshake</span>
                            <span>Semangat Astra Terpadu Untuk (SATU) Indonesia</span>
                        </div>
                        <h2 class="font-headline-lg text-headline-lg text-primary">4 Pilar Keberlanjutan Astra Desa
                            Digital</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-2">
                            Program intervensi komprehensif dari hulu ke hilir untuk menciptakan kemandirian warga yang
                            berdaya tahan dan adaptif era digital.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
                        <!-- Pilar 1: Kewirausahaan -->
                        <div
                            class="bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div
                                    class="w-14 h-14 rounded-2xl bg-secondary-fixed flex items-center justify-center text-secondary mb-6">
                                    <span class="material-symbols-outlined text-[32px]">payments</span>
                                </div>
                                <span
                                    class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider block mb-1">Pilar
                                    01</span>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Kewirausahaan</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    Pengembangan peternakan ayam petelur Elba, budidaya nila sistem tertutup, dan
                                    digitalisasi pasar e-commerce untuk 48 UMKM kuliner keripik &amp; batik.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-surface-variant/50">
                                <span
                                    class="font-label-sm text-label-sm text-primary font-bold flex items-center gap-1">
                                    <span>Pendapatan UMKM +34%</span>
                                    <span
                                        class="material-symbols-outlined text-[16px] text-emerald-600">trending_up</span>
                                </span>
                            </div>
                        </div>
                        <!-- Pilar 2: Lingkungan -->
                        <div
                            class="bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary-fixed flex items-center justify-center text-primary mb-6">
                                    <span class="material-symbols-outlined text-[32px]">eco</span>
                                </div>
                                <span
                                    class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider block mb-1">Pilar
                                    02</span>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Lingkungan Hidup</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    Kampung Iklim (ProKlim), digitalisasi bank sampah dengan penukaran pulsa, penanaman
                                    2.000 bibit vetiver penguat tebing sungai, dan energi surya balai desa.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-surface-variant/50">
                                <span
                                    class="font-label-sm text-label-sm text-primary font-bold flex items-center gap-1">
                                    <span>Reduksi 14 Ton Sampah/Bulan</span>
                                    <span
                                        class="material-symbols-outlined text-[16px] text-emerald-600">recycling</span>
                                </span>
                            </div>
                        </div>
                        <!-- Pilar 3: Pendidikan -->
                        <div
                            class="bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div
                                    class="w-14 h-14 rounded-2xl bg-secondary-fixed flex items-center justify-center text-secondary mb-6">
                                    <span class="material-symbols-outlined text-[32px]">school</span>
                                </div>
                                <span
                                    class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider block mb-1">Pilar
                                    03</span>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Pendidikan &amp;
                                    Literasi</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    Beasiswa pendidikan generasi cerdas Astra untuk 65 pelajar berprestasi, kelas coding
                                    &amp; digital marketing pemuda karang taruna desa.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-surface-variant/50">
                                <span
                                    class="font-label-sm text-label-sm text-primary font-bold flex items-center gap-1">
                                    <span>120 Pemuda Bersertifikasi</span>
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary">verified_user</span>
                                </span>
                            </div>
                        </div>
                        <!-- Pilar 4: Kesehatan -->
                        <div
                            class="bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary-fixed flex items-center justify-center text-primary mb-6">
                                    <span class="material-symbols-outlined text-[32px]">health_and_safety</span>
                                </div>
                                <span
                                    class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider block mb-1">Pilar
                                    04</span>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Kesehatan Masyarakat
                                </h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    Akselerasi Desa Bebas Stunting, posyandu lansia terintegrasi, bantuan makanan
                                    tambahan (PMT) bergizi berbahan dasar olahan ikan nila lokal.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-surface-variant/50">
                                <span
                                    class="font-label-sm text-label-sm text-primary font-bold flex items-center gap-1">
                                    <span>Zero Stunting Baru 2024</span>
                                    <span
                                        class="material-symbols-outlined text-[16px] text-emerald-600">check_circle</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 6. BERITA & AGENDA WARGA TERKINI -->
            <section class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin py-16 w-full">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-8">
                    <div>
                        <div
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed text-primary font-label-sm text-label-sm mb-2">
                            <span class="material-symbols-outlined text-[14px]">newspaper</span>
                            <span>Transparansi Informasi Desa</span>
                        </div>
                        <h2 class="font-headline-lg text-headline-lg text-primary">Kabar &amp; Agenda Kepongpongan</h2>
                    </div>
                    <a class="inline-flex items-center gap-1 text-primary font-label-md text-label-md hover:text-secondary-container transition-colors mt-2 md:mt-0"
                        href="#">
                        <span>Lihat Semua Berita &amp; Siaran Pers</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                    <!-- News 1 -->
                    <article
                        class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">
                        <div class="h-48 relative overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Indonesian village head and Astra executives inaugurating the new solar-powered digital pavilion in Kepongpongan village, ribbon cutting ceremony with cheering local residents wearing traditional batiks, vibrant sunny morning event."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDH6EV6Le-9EI_CdlfuNfoCjUREgOo-kc_vMgwm7JkYJa5CeRuYl1cKa_Dyxe3EsOLTI4jR8r0sw_8NB_M-xMTnpBdYUC8uOPTnRK3lXj4O9h_xYUbQ1GECLgYM_hktYk3y0NhQJyrXyRio_sFB3vUeSNBdCYamOdE_Jc7H3Fb8LWFJMzpP_-xAXpEzvQkLEHZpgvihpF6IBgXmypEHR7S_hHphGQzvGk1aK4P97b4">
                            <span
                                class="absolute top-3 left-3 px-2.5 py-1 rounded bg-secondary-container text-on-secondary font-label-sm text-label-sm font-semibold">Transformasi
                                Digital</span>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <div
                                    class="flex items-center gap-3 font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    <span>24 Okt 2024</span>
                                    <span>•</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-[14px]">schedule</span> 3 menit
                                        baca</span>
                                </div>
                                <h3
                                    class="font-headline-sm text-headline-sm text-primary mb-2 group-hover:text-secondary transition-colors line-clamp-2">
                                    Peresmian Anjungan Surat Mandiri 24 Jam di Balai Desa Kepongpongan
                                </h3>
                                <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-4">
                                    Warga kini dapat mencetak Surat Keterangan Usaha dan Domisili secara mandiri dalam
                                    hitungan menit menggunakan KTP-el.
                                </p>
                            </div>
                            <span class="font-label-md text-label-md text-primary font-bold group-hover:underline">Baca
                                Selengkapnya</span>
                        </div>
                    </article>
                    <!-- News 2 -->
                    <article
                        class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">
                        <div class="h-48 relative overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Harvest festival in Kepongpongan village, fresh baskets full of organic rice grains and ripe golden mangoes displayed beautifully by joyful local farmers in conical straw hats, colorful banners celebrating Astra community empowerment, bright outdoors."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCBzWXJRqkxbrQhtBHu4eGSfO_93pmneoVuCDRYi6Gbih1-Hy_0OGY6rCuHKJi3SpPzMbtbWeOmv7PA9af52mrlMdmHl13HzF2AWSv7YmeizaK59nTx8EFHsrxCNUVipz2BGXQNlK5JjnV-lnYdrueH7aEdaKj8gK744YV3bycKl1OmaJnzUF8kI_s2zcWX4lMtDwo1RjNs8BLxyLwP4_x8hOZM15yolulTEnzhVQ">
                            <span
                                class="absolute top-3 left-3 px-2.5 py-1 rounded bg-primary text-on-primary font-label-sm text-label-sm font-semibold">Agrobisnis</span>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <div
                                    class="flex items-center gap-3 font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    <span>18 Okt 2024</span>
                                    <span>•</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-[14px]">schedule</span> 4 menit
                                        baca</span>
                                </div>
                                <h3
                                    class="font-headline-sm text-headline-sm text-primary mb-2 group-hover:text-secondary transition-colors line-clamp-2">
                                    Panen Raya Padi Organik Inpari 32 Bersama Kelompok Tani Mekar Asri
                                </h3>
                                <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-4">
                                    Hasil panen tahun ini melonjak 28% berkat penerapan sensor kelembaban tanah IoT dan
                                    pupuk hayati ramah lingkungan binaan Astra.
                                </p>
                            </div>
                            <span class="font-label-md text-label-md text-primary font-bold group-hover:underline">Baca
                                Selengkapnya</span>
                        </div>
                    </article>
                    <!-- News 3 -->
                    <article
                        class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">
                        <div class="h-48 relative overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Creative young Indonesian villagers participating in digital marketing and social media training inside an Astra village hub, using laptops, taking professional photos of batik products with softbox lights, engaging collaborative setting."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDRMhdyII7iVLqMpYSE1KXAQoEe3YCTdlyMFFyAIC1nqb8Ceb--bW568cHLMFdmu3i32mA_zroXKO6gVbGYhOLeYJjK7lN_siRHK96AldmkQYq7g7LCU77GFZQQIId2aPt1JC3ofsY7v3OIh5mBLL73ANIWSmHlSc5x1fNM2e8vVSA9RPr_5rWUnyt8FmFsnIXor7YJ6U3Q0wDlz_3RTozqfNEcA4XbsQ9CzVCQIo">
                            <span
                                class="absolute top-3 left-3 px-2.5 py-1 rounded bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">Pelatihan
                                Karang Taruna</span>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <div
                                    class="flex items-center gap-3 font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    <span>11 Okt 2024</span>
                                    <span>•</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-[14px]">schedule</span> 2 menit
                                        baca</span>
                                </div>
                                <h3
                                    class="font-headline-sm text-headline-sm text-primary mb-2 group-hover:text-secondary transition-colors line-clamp-2">
                                    35 Pemuda Kepongpongan Selesaikan Workshop Konten Kreatif Promosi Desa
                                </h3>
                                <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-4">
                                    Program inkubasi kreator lokal bertujuan memperluas jangkauan promosi destinasi
                                    wisata desa dan produk kerajinan batik via media sosial.
                                </p>
                            </div>
                            <span class="font-label-md text-label-md text-primary font-bold group-hover:underline">Baca
                                Selengkapnya</span>
                        </div>
                    </article>
                </div>
            </section>
            <!-- 7. INTERACTIVE LOCATION & SERVICE MAP PREVIEW -->
            <section class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin pb-16 w-full">
                <div
                    class="bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden grid grid-cols-1 lg:grid-cols-12">
                    <!-- Left: Service Hub Info -->
                    <!-- Right: Interactive Map Simulation -->
                    <div class="lg:col-span-7 relative min-h-[380px] lg:min-h-full">
                        <!-- Facility overlay badges -->
                        <div
                            class="absolute bottom-4 left-4 right-4 bg-surface-container-lowest/95 backdrop-blur-md p-3.5 rounded-xl shadow-lg flex flex-wrap items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                                <span class="font-label-sm text-label-sm text-primary font-bold">Titik Terhubung: Balai
                                    Desa • Pustu • Sentra Batik • Sungai Cipager</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary-container font-semibold">Akurasi GPS
                                ± 3m</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="w-full bg-[#FAFCFB] py-16 md:py-20 border-t border-surface-variant/40" id="faq">
                <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
                    <div class="text-center max-w-2xl mx-auto mb-10">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-headline-lg font-bold text-primary mb-3">Tanya
                            Jawab Seputar Layanan Desa</h2>
                        <p
                            class="font-body-md text-body-md text-on-surface-variant text-sm md:text-base leading-relaxed">
                            Jawaban resmi atas pertanyaan yang paling sering diajukan warga mengenai prosedur
                            administrasi dan fasilitas desa.</p>
                    </div>
                    <div class="max-w-3xl mx-auto flex flex-col gap-4">
                        <details
                            class="group bg-surface-container-lowest rounded-xl border border-surface-variant/70 shadow-sm transition-all">
                            <summary
                                class="flex justify-between items-center py-4 px-6 md:py-5 md:px-7 cursor-pointer list-none font-semibold text-on-surface hover:text-primary transition-colors text-base md:text-lg select-none">
                                <span class="pr-4">Bagaimana alur pembuatan surat keterangan usaha (SKU) secara
                                    online?</span><span
                                    class="material-symbols-outlined text-[24px] text-primary shrink-0 transition-transform duration-200 group-open:rotate-180">expand_more</span>
                            </summary>
                            <div
                                class="px-6 pb-5 pt-1 text-on-surface-variant text-body-md text-sm md:text-base leading-relaxed border-t border-surface-variant/30">
                                Warga cukup membuka menu 'Layanan Surat' di portal atau Anjungan Mandiri 24 Jam di Balai
                                Desa dengan memasukkan NIK e-KTP. Surat Keterangan Usaha (SKU) yang telah terverifikasi
                                akan langsung terbit dengan tanda tangan digital Kuwu dan QR Code resmi dalam hitungan
                                5-15 menit.</div>
                        </details>
                        <details
                            class="group bg-surface-container-lowest rounded-xl border border-surface-variant/70 shadow-sm transition-all">
                            <summary
                                class="flex justify-between items-center py-4 px-6 md:py-5 md:px-7 cursor-pointer list-none font-semibold text-on-surface hover:text-primary transition-colors text-base md:text-lg select-none">
                                <span class="pr-4">Berapa lama waktu verifikasi berkas oleh perangkat desa?</span><span
                                    class="material-symbols-outlined text-[24px] text-primary shrink-0 transition-transform duration-200 group-open:rotate-180">expand_more</span>
                            </summary>
                            <div
                                class="px-6 pb-5 pt-1 text-on-surface-variant text-body-md text-sm md:text-base leading-relaxed border-t border-surface-variant/30">
                                Untuk permohonan surat administrasi online terverifikasi rata-rata dalam 15-30 menit
                                pada jam kerja (Senin-Jumat, 08.00-15.30 WIB). Permohonan di luar jam kerja diproses
                                maksimal 1x24 jam.</div>
                        </details>
                        <details
                            class="group bg-surface-container-lowest rounded-xl border border-surface-variant/70 shadow-sm transition-all">
                            <summary
                                class="flex justify-between items-center py-4 px-6 md:py-5 md:px-7 cursor-pointer list-none font-semibold text-on-surface hover:text-primary transition-colors text-base md:text-lg select-none">
                                <span class="pr-4">Apakah fasilitas Pusat Belajar Digital Astra terbuka untuk
                                    umum?</span><span
                                    class="material-symbols-outlined text-[24px] text-primary shrink-0 transition-transform duration-200 group-open:rotate-180">expand_more</span>
                            </summary>
                            <div
                                class="px-6 pb-5 pt-1 text-on-surface-variant text-body-md text-sm md:text-base leading-relaxed border-t border-surface-variant/30">
                                Ya, fasilitas Pusat Belajar &amp; Pojok Literasi Digital Astra di Balai Desa terbuka
                                gratis untuk seluruh pelajar, pemuda Karang Taruna, dan warga umum Desa Kepongpongan
                                setiap hari kerja pukul 09.00 - 17.00 WIB.</div>
                        </details>
                        <details
                            class="group bg-surface-container-lowest rounded-xl border border-surface-variant/70 shadow-sm transition-all">
                            <summary
                                class="flex justify-between items-center py-4 px-6 md:py-5 md:px-7 cursor-pointer list-none font-semibold text-on-surface hover:text-primary transition-colors text-base md:text-lg select-none">
                                <span class="pr-4">Bagaimana cara pelaku usaha mikro bergabung ke program kemitraan
                                    BUMDes?</span><span
                                    class="material-symbols-outlined text-[24px] text-primary shrink-0 transition-transform duration-200 group-open:rotate-180">expand_more</span>
                            </summary>
                            <div
                                class="px-6 pb-5 pt-1 text-on-surface-variant text-body-md text-sm md:text-base leading-relaxed border-t border-surface-variant/30">
                                Pelaku UMKM desa dapat mendaftar langsung melalui Pokja Kewirausahaan BUMDes Mandiri
                                Sejahtera atau sekretariat Kantor Kuwu dengan membawa KTP dan sampel produk untuk kurasi
                                standarisasi, pelatihan kemasan, dan akses pasar binaan Astra.</div>
                        </details>
                    </div>
                </div>
            </section>
            <!-- 8. DOCKED AI CHATBOT GREETING BUBBLE -->
        </div>
        <script>
        function handlePrompt(btn) {
            const text = btn.innerText;
            alert("Membuka percakapan Asisten AI dengan topik: \"" + text + "\"");
        }
        </script>
    </main>
    <footer class="w-full bg-surface-container-lowest border-t border-surface-variant/80 pt-space-xl pb-space-lg">
        <div class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-gutter pb-space-xl">
                <div class="lg:col-span-2 flex flex-col gap-space-md">
                    <div class="flex items-center gap-space-md"><img alt="Astra Desa Digital Logo"
                            class="h-9 w-auto object-contain"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBoCrmtQbInFNe5RyORVtk56zVgRYk5Jy2g2mUE3x53DV89lNmA9f4rtKBULXiAW0ke_rKLPMniMLAaEvo_RtajLoTeNpeqz9wurgnsX0CMx1dsM0O2-KGnJggpYcc86Z23OeQDaMeJNxEgGcMQx2zYVJYdV7jl-lCqek7Wgw7r1zV9fMuJnMK22C7wiFUvml6n6Zor2hbHclRyUEaKcoqxkh5v9r9smUvhdrYHXDwoun5y5Tk7_2lc"><span
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