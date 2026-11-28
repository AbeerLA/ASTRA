<header id="main-header"
    class="fixed top-0 left-0 right-0 z-50 bg-[#151747] border-b border-white/10 shadow-sm">   

        <div class="h-20 max-w-[1440px] mx-auto px-margin-mobile lg:px-margin flex items-center justify-between gap-gutter">
            <div class="flex items-center gap-2.5 shrink-0">
                <img alt="LOGO SERA"
                    class="h-7 w-auto object-contain shrink-0"
                    src="{{ !empty($siteSettings['header_logo']) ? asset('storage/' . $siteSettings['header_logo']) : asset('images/LOGO SERA.png') }}"">

                <div class="flex flex-col justify-center gap-0.5">
                    <span class="font-extrabold text-white text-[15px] tracking-tight leading-tight">
                        Desa Sejahtera Astra
                    </span>

                    <span class="text-[11px] text-white/80 font-medium leading-tight">
                        Kepongpongan
                    </span>
                </div>
            </div>
            <nav class="hidden xl:flex items-center gap-1"
                data-active-classes="bg-white/15 text-white font-bold rounded-lg shadow-sm">

                <a aria-current="page"
                    class="px-3 py-2 transition-colors bg-white/15 text-white font-bold rounded-lg shadow-sm"
                    data-path="beranda" href="{{ route('home') }}">Beranda</a>

                <a class="font-label-lg text-label-lg text-white/90 px-3 py-2 rounded-lg hover:bg-white/15 hover:text-white transition-colors"
                    data-path="profil-desa" href="{{ route('village-profile') }}">Profil Desa Sejahtera Astra</a>

                <a class="font-label-lg text-label-lg text-white/90 px-3 py-2 rounded-lg hover:bg-white/15 hover:text-white transition-colors"
                    data-path="wisata-kampung" href="{{ route('village-tourism') }}">Progam</a>

                <a class="font-label-lg text-label-lg text-white/90 px-3 py-2 rounded-lg hover:bg-white/15 hover:text-white transition-colors"
                    data-path="program-desa" href="{{ route('village-programs') }}">Wisata</a>

                <a class="font-label-lg text-label-lg text-white/90 px-3 py-2 rounded-lg hover:bg-white/15 hover:text-white transition-colors"
                    data-path="berita" href="{{ route('news') }}">Berita</a>

                <a class="font-label-lg text-label-lg text-white/90 px-3 py-2 rounded-lg hover:bg-white/15 hover:text-white transition-colors"
                    data-path="kontak" href="{{ route('contact') }}">Kontak</a>
            </nav>
            <div class="flex items-center gap-space-sm sm:gap-space-md shrink-0"></div>
        </div>
    </header>
    <script>
    const header = document.getElementById('main-header');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            // Scrolled: Astra Navy
            header.classList.remove(
                'bg-transparent',
                'border-transparent',
                'shadow-none'
            );

            header.classList.add(
                'bg-[#151747]/95',
                'backdrop-blur-md',
                'border-b',
                'border-white/10',
                'shadow-md'
            );
        } else {
            // Top: Transparent, blended with hero
            header.classList.remove(
                'bg-[#151747]/95',
                'backdrop-blur-md',
                'border-b',
                'border-white/10',
                'shadow-md'
            );

            header.classList.add(
                'bg-transparent',
                'border-transparent',
                'shadow-none'
            );
        }
    });
</script>