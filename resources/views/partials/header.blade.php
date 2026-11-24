<header class="absolute top-0 left-0 right-0 z-50 bg-transparent border-b-0 shadow-none">
        <div
            class="h-20 max-w-[1440px] mx-auto px-margin-mobile lg:px-margin flex items-center justify-between gap-gutter">
            <div class="flex items-center gap-space-md shrink-0">
                <img alt="LOGO SERA"
                    class="h-8 w-auto object-contain"
                    src="{{ asset('images/LOGO SERA.png') }}">
                <div class="flex flex-col"><span
                        class="font-title-md text-title-md text-white tracking-tight leading-none">Desa Sejahtera Astra<br><br>
                        Kepongpongan</span></div>
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