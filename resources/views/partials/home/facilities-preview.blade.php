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
                        <a class="inline-flex items-center gap-2 px-5 py-3 rounded-lg bg-primary text-white font-label-md text-label-md font-bold hover:bg-primary-container transition-all shadow-sm group"
                            href="{{ route('facilities') }}">
                            <span>Lihat Semua</span>
                            <span
                                class="material-symbols-outlined text-[18px] transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">

                        @forelse($facilities as $facility)

                        @php
                        $imageUrl = $facility->image_path
                        ? (\Illuminate\Support\Str::startsWith(
                        $facility->image_path,
                        ['http://', 'https://']
                        )
                        ? $facility->image_path
                        : asset('storage/' . $facility->image_path))
                        : 'https://placehold.co/600x400?text=Facility';
                        @endphp

                        <div
                            class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">

                            <div class="h-44 w-full relative overflow-hidden">

                                <img src="{{ $imageUrl }}" alt="{{ $facility->name }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                                <div class="absolute top-3 left-3">
                                    <span
                                        class="px-2.5 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm font-semibold">
                                        {{ $facility->category ?? 'Facility' }}
                                    </span>
                                </div>

                                <div class="absolute top-3 right-3">
                                    <span
                                        class="inline-flex items-center gap-2 px-2 py-1 rounded-full bg-surface-container-lowest/90 text-primary font-label-sm">
                                        <span class="w-2 h-2 rounded-full bg-secondary-container"></span>
                                        Aktif
                                    </span>
                                </div>

                            </div>

                            <div class="p-5 flex-1 flex flex-col justify-between">

                                <div>

                                    @if($facility->address)
                                    <div class="flex items-center gap-1 text-on-surface-variant font-body-sm mb-1">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                        <span>{{ $facility->address }}</span>
                                    </div>
                                    @endif

                                    <h3 class="font-headline-sm text-primary mb-2">
                                        {{ $facility->name }}
                                    </h3>

                                    <p class="font-body-md text-on-surface-variant mb-4">
                                        {{ $facility->short_description }}
                                    </p>

                                </div>

                                @if($facility->operating_hours)
                                <div class="text-sm text-on-surface-variant pt-3">
                                    Jam Operasional: {{ $facility->operating_hours }}
                                </div>
                                @endif

                            </div>

                        </div>

                        @empty

                        <div class="col-span-full text-center py-12 text-on-surface-variant">
                            Belum ada fasilitas yang tersedia.
                        </div>

                        @endforelse

                    </div>
                </div>
            </section>