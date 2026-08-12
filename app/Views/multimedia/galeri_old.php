<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section
<header class="hero text-white py-5 position-relative overflow-hidden shadow-sm" style="background: linear-gradient(135deg, rgba(13, 110, 253, 0.85), rgba(33, 37, 41, 0.9)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold rounded-pill shadow-sm">Dokumentasi & Momen</span>
        <h1 class="display-5 fw-bold text-white mb-2">Galeri Foto Gereja</h1>
        <p class="lead text-light opacity-90 mx-auto" style="max-width: 650px;">Merekam setiap langkah kebersamaan, ibadah, dan pelayanan kasih dalam persekutuan tubuh Kristus.</p>
    </div>
</header> -->

<!-- Hero Section -->
<header class="hero pb-5"><div class="container text-center pt-5 pb-5">
    <div class="eyebrow mb-3 text-uppercase">Documentation & Moments</div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;">Galeri Foto Gereja</h1>
        <p class="lead text-light opacity-90 mx-auto" style="max-width: 650px;">Merekam setiap langkah kebersamaan, ibadah, dan pelayanan kasih dalam persekutuan tubuh Kristus.</p>
    </div>
</header>

<!-- Main Gallery Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Filter Kategori Tombol -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <div class="btn-group flex-wrap gap-2 justify-content-center" role="group" aria-label="Filter Galeri">
                    <button type="button" class="btn btn-dark rounded-pill px-4 py-2 active shadow-sm" data-filter="all">Semua Momen</button>
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm" data-filter="ibadah">Ibadah Raya</button>
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm" data-filter="pemuda">Pemuda & Remaja</button>
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm" data-filter="sekolah-minggu">Sekolah Minggu</button>
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm" data-filter="kegiatan">Kegiatan Sosial</button>
                </div>
            </div>
        </div>

        <!-- Grid Foto Galeri -->
        <div class="row g-4 gallery-grid">
            
            <!-- Item 1 -->
            <div class="col-md-6 col-lg-4 gallery-item" data-category="ibadah">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 group-hover">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img src="<?= base_url('assets/img/gallery-1.jpg') ?>" class="w-100 h-100 object-fit-cover transition-transform" alt="Ibadah Minggu Raya">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2 shadow-sm">Ibadah Raya</span>
                    </div>
                    <div class="card-body p-4">
                        <small class="text-muted d-block mb-1"><i class="bi bi-calendar3 me-1"></i> 2 Agustus 2026</small>
                        <h5 class="fw-bold text-dark mb-2">Ibadah Minggu Pagi: Hidup dalam Kemenangan</h5>
                        <p class="text-secondary small mb-0">Suasana khidmat ibadah minggu pagi yang dihadiri oleh jemaat dengan penuh sukacita.</p>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-md-6 col-lg-4 gallery-item" data-category="pemuda">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 group-hover">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img src="<?= base_url('assets/img/gallery-2.jpg') ?>" class="w-100 h-100 object-fit-cover transition-transform" alt="Persekutuan Pemuda">
                        <span class="badge bg-success position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2 shadow-sm">Pemuda & Remaja</span>
                    </div>
                    <div class="card-body p-4">
                        <small class="text-muted d-block mb-1"><i class="bi bi-calendar3 me-1"></i> 28 Juli 2026</small>
                        <h5 class="fw-bold text-dark mb-2">Persekutuan Pemuda: Generasi Berakar di dalam Firman</h5>
                        <p class="text-secondary small mb-0">Keakraban dan pujian bersama pemuda-pemudi gereja dalam mendalami kebenaran Alkitab.</p>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-md-6 col-lg-4 gallery-item" data-category="sekolah-minggu">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 group-hover">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img src="<?= base_url('assets/img/gallery-3.jpg') ?>" class="w-100 h-100 object-fit-cover transition-transform" alt="Kelas Sekolah Minggu">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2 shadow-sm">Sekolah Minggu</span>
                    </div>
                    <div class="card-body p-4">
                        <small class="text-muted d-block mb-1"><i class="bi bi-calendar3 me-1"></i> 26 Juli 2026</small>
                        <h5 class="fw-bold text-dark mb-2">Aktivitas Ceria Anak-Anak Sekolah Minggu</h5>
                        <p class="text-secondary small mb-0">Mengenalkan kasih Tuhan kepada anak-anak melalui cerita Alkitab interaktif dan bernyanyi.</p>
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-md-6 col-lg-4 gallery-item" data-category="kegiatan">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 group-hover">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img src="<?= base_url('assets/img/gallery-4.jpg') ?>" class="w-100 h-100 object-fit-cover transition-transform" alt="Bakti Sosial">
                        <span class="badge bg-info text-dark position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2 shadow-sm">Kegiatan Sosial</span>
                    </div>
                    <div class="card-body p-4">
                        <small class="text-muted d-block mb-1"><i class="bi bi-calendar3 me-1"></i> 20 Juli 2026</small>
                        <h5 class="fw-bold text-dark mb-2">Bakti Sosial & Pelayanan Kasih Masyarakat</h5>
                        <p class="text-secondary small mb-0">Wujud nyata mengasihi sesama melalui pembagian sembako dan pengobatan gratis.</p>
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="col-md-6 col-lg-4 gallery-item" data-category="ibadah">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 group-hover">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img src="<?= base_url('assets/img/gallery-5.jpg') ?>" class="w-100 h-100 object-fit-cover transition-transform" alt="Paduan Suara">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2 shadow-sm">Ibadah Raya</span>
                    </div>
                    <div class="card-body p-4">
                        <small class="text-muted d-block mb-1"><i class="bi bi-calendar3 me-1"></i> 19 Juli 2026</small>
                        <h5 class="fw-bold text-dark mb-2">Pelayanan Paduan Suara & Ansambel Musik</h5>
                        <p class="text-secondary small mb-0">Melantunkan puji-pujian yang megah dan menyenangkan hati Tuhan dalam ibadah.</p>
                    </div>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="col-md-6 col-lg-4 gallery-item" data-category="pemuda">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 group-hover">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img src="<?= base_url('assets/img/gallery-6.jpg') ?>" class="w-100 h-100 object-fit-cover transition-transform" alt="Retret Pemuda">
                        <span class="badge bg-success position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2 shadow-sm">Pemuda & Remaja</span>
                    </div>
                    <div class="card-body p-4">
                        <small class="text-muted d-block mb-1"><i class="bi bi-calendar3 me-1"></i> 12 Juli 2026</small>
                        <h5 class="fw-bold text-dark mb-2">Retret Pemuda: Berdiri Teguh di Zaman Modern</h5>
                        <p class="text-secondary small mb-0">Momen kebersamaan, refleksi rohani, dan pembangunan karakter Kristiani yang kokoh.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Skrip Sederhana untuk Filter Kategori (Opsional) -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const filterButtons = document.querySelectorAll(".btn-group button");
        const galleryItems = document.querySelectorAll(".gallery-item");

        filterButtons.forEach(button => {
            button.addEventListener("click", function () {
                // Ubah status tombol aktif
                filterButtons.forEach(btn => {
                    btn.classList.remove("btn-dark", "active");
                    btn.classList.add("btn-outline-dark");
                });
                this.classList.remove("btn-outline-dark");
                this.classList.add("btn-dark", "active");

                const filterValue = this.getAttribute("data-filter");

                galleryItems.forEach(item => {
                    if (filterValue === "all" || item.getAttribute("data-category") === filterValue) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            });
        });
    });
</script>

<?= $this->endSection('content') ?>