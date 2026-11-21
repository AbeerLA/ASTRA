    <!-- =========================================================
     MODAL POP-UP DIALOG: TAMBAH KONTEN / SLIDE BARU
     ========================================================= -->
    <div aria-labelledby="modal-slide-title" aria-modal="true"
        class="fixed inset-0 z-50 hidden items-center justify-center p-4 sm:p-6 overflow-y-auto" id="modal-add-slide"
        role="dialog">
        <!-- Backdrop Blur Semi-transparan -->
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity duration-300" id="modal-backdrop"
            onclick="closeCreateModal()"></div>
        <!-- Modal Dialog Container Card -->
        <div
            class="relative w-full max-w-2xl bg-white rounded-2xl shadow-2xl border border-surface-border overflow-hidden z-10 flex flex-col my-auto transform transition-all duration-300 animate-[fadeInView_0.25s_ease-out]">
            <!-- Modal Header -->
            <div
                class="px-6 py-5 border-b border-surface-border bg-gradient-to-r from-surface-muted to-white flex items-start justify-between">
                <div class="flex items-center gap-3">
                    <div
                        class="w-11 h-11 rounded-xl bg-brand-navy text-white flex items-center justify-center shadow-md shadow-brand-navy/20 shrink-0">
                        <span class="material-symbols-outlined text-[24px]">view_carousel</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-brand-navy tracking-tight"
                                id="modal-slide-title">
                                Tambah Konten Baru - Slide Hero Beranda
                            </h3>
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider bg-brand-orange-light text-brand-orange px-2 py-0.5 rounded">Carousel</span>
                        </div>
                        <p class="text-xs text-slate-500 font-body mt-0.5">
                            Publikasikan banner sorotan baru ke carousel beranda portal publik Desa Kepongpongan.
                        </p>
                    </div>
                </div>
                <!-- Tombol Tutup X -->
                <button aria-label="Tutup modal"
                    class="p-1.5 text-slate-400 hover:text-slate-700 hover:bg-slate-100 rounded-lg transition-colors cursor-pointer shrink-0 ml-2"
                    onclick="closeCreateModal()" type="button">
                    <span class="material-symbols-outlined text-[22px]">close</span>
                </button>
            </div>
            <!-- Modal Form Body -->
            <form action="{{ route('admin.hero-slides.store') }}" method="POST" enctype="multipart/form-data"
                class="p-6 overflow-y-auto max-h-[calc(85vh-140px)] flex flex-col gap-5 text-xs font-body"
                id="form-hero-slide">
                @csrf
                <!-- 1. Kategori / Eyebrow Badge Pill Selector -->
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-2">
                        Kategori / Sub-judul Eyebrow <span class="text-rose-500">*</span>
                    </label>
                    <div class="flex flex-wrap gap-2" id="category-pill-group">
                        <button
                            class="cat-pill px-3 py-1.5 rounded-full border border-brand-navy bg-brand-navy text-white font-semibold transition-all cursor-pointer"
                            data-cat="Inisiatif Astra" onclick="selectCategory('Inisiatif Astra', this)" type="button">
                            ★ Inisiatif Astra
                        </button>
                        <button
                            class="cat-pill px-3 py-1.5 rounded-full border border-surface-border bg-surface-muted hover:border-brand-navy/40 text-slate-700 font-medium transition-all cursor-pointer"
                            data-cat="Pariwisata &amp; Alam" onclick="selectCategory('Pariwisata &amp; Alam', this)"
                            type="button">
                            Pariwisata &amp; Alam
                        </button>
                        <button
                            class="cat-pill px-3 py-1.5 rounded-full border border-surface-border bg-surface-muted hover:border-brand-navy/40 text-slate-700 font-medium transition-all cursor-pointer"
                            data-cat="Ekonomi Kreatif UMKM" onclick="selectCategory('Ekonomi Kreatif UMKM', this)"
                            type="button">
                            Ekonomi Kreatif UMKM
                        </button>
                        <button
                            class="cat-pill px-3 py-1.5 rounded-full border border-surface-border bg-surface-muted hover:border-brand-navy/40 text-slate-700 font-medium transition-all cursor-pointer"
                            data-cat="Pertanian &amp; Agrobisnis"
                            onclick="selectCategory('Pertanian &amp; Agrobisnis', this)" type="button">
                            Pertanian &amp; Agrobisnis
                        </button>
                        <button
                            class="cat-pill px-3 py-1.5 rounded-full border border-surface-border bg-surface-muted hover:border-brand-navy/40 text-slate-700 font-medium transition-all cursor-pointer"
                            data-cat="Literasi &amp; Budaya" onclick="selectCategory('Literasi &amp; Budaya', this)"
                            type="button">
                            Literasi &amp; Budaya
                        </button>
                    </div>
                    <input id="input-slide-category" name="category" type="hidden" value="Inisiatif Astra">
                </div>
                <!-- 2. Judul Slide Utama (Headline Banner) -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label class="block text-xs font-bold text-brand-navy" for="input-slide-title">
                            Judul Slide Utama (Headline Banner) <span class="text-rose-500">*</span>
                        </label>
                        <span class="text-[11px] text-slate-400 font-mono" id="title-char-counter">0/120</span>
                    </div>
                    <input
                        class="w-full px-3.5 py-2.5 rounded-xl border border-surface-border text-xs font-sans font-bold text-slate-800 placeholder-slate-400 focus:outline-none focus:border-brand-navy focus:ring-1 focus:ring-brand-navy bg-white transition-all shadow-xs"
                        id="input-slide-title" maxlength="120" name="title" oninput="updateCharCount(this)"
                        placeholder="Misal: Desa Wisata &amp; Inovasi Berkelanjutan Astra Cirebon" required=""
                        type="text">
                </div>
                <!-- 3. Deskripsi Ringkas -->
                <div>
                    <label class="block text-xs font-bold text-brand-navy mb-1.5" for="input-slide-desc">
                        Deskripsi Ringkas Narasi Pendukung
                    </label>
                    <textarea
                        class="w-full px-3.5 py-2.5 rounded-xl border border-surface-border text-xs font-body text-slate-700 placeholder-slate-400 focus:outline-none focus:border-brand-navy focus:ring-1 focus:ring-brand-navy bg-white transition-all shadow-xs resize-none"
                        id="input-slide-desc" name="description"
                        placeholder="Jelaskan secara ringkas sorotan program, keindahan alam, atau kegiatan BUMDes untuk menarik perhatian warga &amp; wisatawan..."
                        rows="3"></textarea>
                </div>
                <!-- 4. Upload Foto / Gambar Slide (Drag & Drop + Realistic Preview) -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label class="block text-xs font-bold text-brand-navy">
                            Foto / Banner Slide Resolusi Tinggi <span class="text-rose-500">*</span>
                        </label>
                        <span class="text-[11px] text-slate-400">Rasio 16:9 atau 2:1 (Maks. 2MB)</span>
                    </div>
                    <div class="relative border-2 border-dashed border-slate-300 hover:border-brand-navy/60 rounded-xl p-4 bg-surface-muted/40 transition-colors flex flex-col items-center justify-center text-center cursor-pointer group"
                        id="drop-zone" onclick="document.getElementById('input-file-banner').click()">
                        <input
    accept="image/png, image/jpeg, image/webp"
    class="hidden"
    id="input-file-banner"
    name="image"
    onchange="previewImageBanner(event)"
    type="file"
    required
>
                        <!-- Default Upload State -->
                        <div class="flex flex-col items-center gap-1.5 py-3" id="upload-placeholder-state">
                            <div
                                class="w-12 h-12 rounded-full bg-white border border-surface-border shadow-xs flex items-center justify-center text-brand-navy group-hover:scale-105 transition-transform">
                                <span class="material-symbols-outlined text-[26px]">add_photo_alternate</span>
                            </div>
                            <div class="text-xs font-bold text-brand-navy mt-1">
                                Klik untuk unggah atau seret foto ke area ini
                            </div>
                            <p class="text-[11px] text-slate-400 font-normal">
                                Format WebP, JPG, PNG resolusi minimal 1920 × 960 px
                            </p>
                        </div>
                        <!-- Preview State (Hidden by default) -->
                        <div class="w-full hidden items-center justify-between gap-4 p-2 bg-white rounded-lg border border-surface-border text-left"
                            id="upload-preview-state">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-16 h-12 rounded-md bg-slate-100 overflow-hidden relative border border-slate-200 shrink-0">
                                    <img alt="Preview" class="w-full h-full object-cover" id="preview-image-element"
                                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='60' viewBox='0 0 100 60'%3E%3Crect width='100' height='60' fill='%23eee'/%3E%3C/svg%3E">
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-bold text-xs text-brand-navy truncate max-w-xs"
                                        id="preview-file-name">banner_selected.jpg</span>
                                    <span class="text-[10px] text-emerald-600 font-medium flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[13px]">check_circle</span>
                                        Siap diunggah (Gambar valid)
                                    </span>
                                </div>
                            </div>
                            <button
                                class="px-2.5 py-1 text-[11px] font-semibold text-rose-600 hover:bg-rose-50 rounded transition-colors cursor-pointer"
                                onclick="removeImageBanner(event)" type="button">
                                Ganti Foto
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 5. Field Pengaturan CTA (Call-to-Action) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1.5" for="input-cta-text">
                            Teks Tombol CTA
                        </label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-2.5 text-[18px] text-slate-400">smart_button</span>
                            <input
                                class="w-full pl-9 pr-3 py-2 rounded-xl border border-surface-border text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-brand-navy focus:ring-1 focus:ring-brand-navy bg-white shadow-xs"
                                id="input-cta-text" name="cta_text" placeholder="Misal: Jelajahi Destinasi" type="text"
                                value="Jelajahi Wisata">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1.5" for="input-cta-link">
                            Tautan / URL Target CTA
                        </label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-2.5 text-[18px] text-slate-400">link</span>
                            <input
                                class="w-full pl-9 pr-3 py-2 rounded-xl border border-surface-border text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-brand-navy focus:ring-1 focus:ring-brand-navy bg-white shadow-xs"
                                id="input-cta-link" name="cta_link"
                                placeholder="Misal: #tourism-destinations atau /wisata" type="text"
                                value="#tourism-destinations">
                        </div>
                    </div>
                </div>
                <!-- 6. Pengaturan Urutan Tampil & Status Penerbitan -->
                <div
                    class="p-3.5 rounded-xl bg-surface-muted/70 border border-surface-border grid grid-cols-1 sm:grid-cols-2 gap-4 items-center">
                    <!-- Sort Order -->
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1" for="input-slide-order">
                            Urutan Posisi Slide
                        </label>
                        <div class="flex items-center gap-2">
                            <input
                                class="w-20 px-3 py-1.5 rounded-lg border border-surface-border text-xs font-bold text-brand-navy focus:outline-none focus:border-brand-navy bg-white"
                                id="input-slide-order" min="1" name="sort_order" type="number" value="4">
                            <span class="text-[11px] text-slate-500">Akan tampil setelah Slide #3</span>
                        </div>
                    </div>
                    <!-- Status Publikasi -->
                    <div>
                        <label class="block text-xs font-bold text-brand-navy mb-1">
                            Status Penerbitan
                        </label>
                        <div class="flex items-center gap-4">
                            <label class="flex items-center gap-1.5 cursor-pointer">
                                <input checked="" class="text-brand-orange focus:ring-brand-orange"
                                    name="is_active" type="radio" value="1">
                                <span
                                    class="font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded text-[11px]">Tayang
                                    Langsung</span>
                            </label>
                            <label class="flex items-center gap-1.5 cursor-pointer">
                                <input class="text-slate-500 focus:ring-slate-400" name="is_active" type="radio"
                                    value="0">
                                <span class="text-slate-600 font-medium text-[11px]">Draf Dulu</span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Modal Footer Action Buttons -->
                <div class="pt-4 border-t border-surface-border flex items-center justify-between gap-3">
                    <span class="text-[11px] text-slate-400 flex items-center gap-1">
                        <span class="material-symbols-outlined text-[15px] text-slate-400">lock</span>
                        Data tervalidasi &amp; aman di server
                    </span>
                    <div class="flex items-center gap-2.5">
                        <button
                            class="px-4 py-2.5 rounded-xl border border-surface-border text-xs font-semibold text-slate-600 hover:bg-slate-100 hover:text-slate-800 transition-colors cursor-pointer"
                            onclick="closeCreateModal()" type="button">
                            Batal
                        </button>
                        <button
                            class="px-5 py-2.5 rounded-xl bg-brand-navy hover:bg-brand-navy-dark text-white text-xs font-bold shadow-md shadow-brand-navy/20 hover:shadow-brand-navy/30 transition-all flex items-center gap-2 cursor-pointer"
                            id="btn-submit-slide" type="submit">
                            <span class="material-symbols-outlined text-[18px]">publish</span>
                            <span>Simpan &amp; Publikasikan Slide</span>
                        </button>
                    </div>
                </div>
                </form>
        </div>
    </div>