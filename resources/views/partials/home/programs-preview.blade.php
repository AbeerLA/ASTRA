            <!-- 5. EMPAT PILAR PROGRAM DESA ASTRA -->
            <section id="program-desa" class="w-full bg-surface-container py-16">
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
@forelse ($pillars as $index => $pillar)

    <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">

        <div>
            <div class="w-14 h-14 rounded-2xl {{ $index % 2 === 0 ? 'bg-secondary-fixed text-secondary' : 'bg-primary-fixed text-primary' }} flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-[32px]">
                    {{ $pillar->icon ?: 'verified' }}
                </span>
            </div>

            <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider block mb-1">
                Pilar {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
            </span>

            <h3 class="font-headline-sm text-headline-sm text-primary mb-3">
                {{ $pillar->name }}
            </h3>

            <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                {{ $pillar->short_description }}
            </p>
        </div>

        @if ($pillar->achievements)
            <div class="pt-4 border-t border-surface-variant/50">
                <span class="font-label-sm text-label-sm text-primary font-bold flex items-center gap-1">
                    <span>{{ $pillar->achievements }}</span>
                    <span class="material-symbols-outlined text-[16px] text-emerald-600">
                        verified
                    </span>
                </span>
            </div>
        @endif

    </div>

@empty

    <div class="col-span-full text-center py-10">
        <p class="text-on-surface-variant">
            Belum ada program pilar yang tersedia.
        </p>
    </div>

@endforelse
                    </div>
                </div>
        </section>