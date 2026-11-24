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
    id="hero-badge-text" style="opacity: 1;">
    {{ $slides->first()?->category ?? '' }}
</span>
                        </div>
                        <!-- Main Headline -->
                        <h1 class="font-headline-lg font-bold text-white tracking-tight drop-shadow-md text-3xl sm:text-4xl lg:text-[46px] lg:leading-[54px] mb-4 transition-all duration-300"
    id="hero-headline" style="opacity: 1;">
    {{ $slides->first()?->title ?? '' }}
</h1>
                        <!-- Descriptive Subtitle -->
                        <p class="font-body-lg text-slate-200 text-sm sm:text-base lg:text-lg leading-relaxed mb-8 max-w-2xl transition-all duration-300"
    id="hero-subtitle" style="opacity: 1;">
    {{ $slides->first()?->description ?? '' }}
</p>
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