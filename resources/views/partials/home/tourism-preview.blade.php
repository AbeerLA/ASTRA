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
                    <div>
                        <a class="inline-flex items-center gap-2 px-5 py-3 rounded-lg bg-primary text-white font-label-md text-label-md font-bold hover:bg-primary-container transition-all shadow-sm group"
                            href="{{ route('wisata.index') }}">
                            <span>Lihat Semua</span>
                            <span
                                class="material-symbols-outlined text-[18px] transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <!-- Dynamic Destinations Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter mb-8">

                    @forelse ($destinations as $destination)

                    <div
                        class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col group">

                        <!-- Image -->
                        <div class="h-60 relative overflow-hidden">

                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="{{ $destination->cover_image
                        ? asset('storage/' . $destination->cover_image)
                        : 'https://placehold.co/800x450?text=Destination' }}" alt="{{ $destination->name }}">

                            <!-- Price -->
                            <div
                                class="absolute bottom-3 left-3 bg-surface-container-lowest/95 backdrop-blur-md px-3 py-1 rounded-lg">
                                <span class="font-label-md text-label-md text-secondary-container font-bold">
                                    Mulai Rp {{ number_format($destination->price_per_person, 0, ',', '.') }} / pax
                                </span>
                            </div>

                        </div>

                        <!-- Content -->
                        <div class="p-6 flex-1 flex flex-col justify-between">

                            <div>

                                @if ($destination->category)
                                <div class="flex items-center gap-2 mb-2">
                                    <span
                                        class="px-2 py-0.5 rounded bg-primary-fixed text-primary font-label-sm text-label-sm font-semibold">
                                        {{ $destination->category }}
                                    </span>
                                </div>
                                @endif

                                <h3 class="font-headline-sm text-headline-sm text-primary mb-2">
                                    {{ $destination->name }}
                                </h3>

                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    {{ $destination->short_description }}
                                </p>

                            </div>

                            <!-- Footer -->
                            <div class="flex items-center justify-between pt-4 border-t border-surface-variant/40">

                                <span class="font-body-sm text-body-sm text-on-surface-variant">
                                    {{ $destination->opening_hours ?: 'Jam operasional belum tersedia' }}
                                </span>

                                @if ($destination->booking_contact)
                                <a href="{{ $destination->booking_contact }}" target="_blank" rel="noopener noreferrer"
                                    class="font-label-md text-label-md font-bold px-4 py-2 rounded-lg
                                        bg-white text-[#F16421] border border-[#F16421]
                                        hover:bg-[#F16421] hover:text-white
                                        transition-all duration-300">
                                    Reservasi
                                </a>
                                @endif

                            </div>

                        </div>

                    </div>

                    @empty

                    <div class="col-span-full text-center py-12">
                        <p class="text-on-surface-variant">
                            Belum ada destinasi wisata tersedia.
                        </p>
                    </div>

                    @endforelse

                </div>
                <!-- Booking Hook Banner -->

            </section>