            <!-- 6. BERITA & AGENDA WARGA TERKINI -->
            <section id="berita" class="max-w-[1440px] mx-auto px-margin-mobile lg:px-margin py-16 w-full">
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
@forelse ($newsItems as $news)

    <article
        class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">

        <div class="h-48 relative overflow-hidden">

            @if ($news->featured_image)
                <img
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                    src="{{ asset('storage/' . $news->featured_image) }}"
                    alt="{{ $news->title }}">
            @else
                <div class="w-full h-full bg-surface-container flex items-center justify-center">
                    <span class="material-symbols-outlined text-5xl text-on-surface-variant">
                        newspaper
                    </span>
                </div>
            @endif

            @if ($news->category)
                <span class="absolute top-3 left-3 px-2.5 py-1 rounded bg-secondary-container text-on-secondary font-label-sm text-label-sm font-semibold">
                    {{ $news->category }}
                </span>
            @endif

        </div>

        <div class="p-5 flex-1 flex flex-col justify-between">

            <div>
                <div class="flex items-center gap-3 font-body-sm text-body-sm text-on-surface-variant mb-2">
                    <span>
                        {{ $news->published_at ? \Carbon\Carbon::parse($news->published_at)->translatedFormat('d M Y') : '' }}
                    </span>
                </div>

                <h3 class="font-headline-sm text-headline-sm text-primary mb-2 group-hover:text-secondary transition-colors line-clamp-2">
                    {{ $news->title }}
                </h3>

                <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-4">
                    {{ $news->excerpt }}
                </p>
            </div>

            <span class="font-label-md text-label-md text-primary font-bold group-hover:underline">
                Baca Selengkapnya
            </span>

        </div>
    </article>

@empty

    <div class="col-span-full text-center py-10">
        <p class="text-on-surface-variant">
            Belum ada berita yang tersedia.
        </p>
    </div>

@endforelse
                </div>
            </section>