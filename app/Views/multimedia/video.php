<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase"><?= lang('Multimedia.video.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;"><?= lang('Multimedia.video.hero_title') ?></h1>
        <p class="lead text-light opacity-90 mx-auto" style="max-width: 650px;"><?= lang('Multimedia.video.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Video Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <?php 
            // Formatter tanggal sesuai locale aktif ('id' / 'en')
            $currentLocale = service('request')->getLocale();
            $dateFormatter = new \IntlDateFormatter(
                $currentLocale,
                \IntlDateFormatter::LONG,
                \IntlDateFormatter::NONE
            );
        ?>

        <!-- Featured / Live Streaming Utama (Hero Video) -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white mb-5">
            <div class="row g-0 align-items-center">
                <div class="col-lg-7">
                    <!-- Responsive YouTube Embed -->
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/qnpxm8kNUhQ?start=13" title="Live Streaming Ibadah Raya" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-5 p-4 p-md-5">
                    <span class="badge bg-danger text-uppercase px-3 py-1 mb-2 rounded-pill"><i class="bi bi-broadcast me-1"></i> <?= lang('Multimedia.video.featured_badge') ?></span>
                    <h2 class="h4 fw-bold text-dark mb-3">Kebaktian Minggu Sore, 02 Agustus 2026</h2>
                    <p class="text-secondary small mb-4">Nikmati rekaman siaran langsung ibadah minggu ini bersama Pdt. Dr. Andrew M. Liauw. Mari bertumbuh bersama dalam kebenaran firman Tuhan yang alkitabiah.</p>
                    <div class="d-flex align-items-center text-muted small">
                        <i class="bi bi-calendar-event me-2 text-primary"></i> <?= $dateFormatter->format(strtotime('2026-08-02')) ?> &bull; 
                        <span class="ms-2"><i class="bi bi-eye me-1 text-primary"></i> <?= lang('Multimedia.video.views_count') ?></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter Kategori Tombol -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <div class="btn-group flex-wrap gap-2 justify-content-center" role="group" aria-label="Filter Video">
                    <button type="button" class="btn btn-dark rounded-pill px-4 py-2 active shadow-sm" data-filter="all"><?= lang('Multimedia.video.categories.all') ?></button>
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm" data-filter="ibadah"><?= lang('Multimedia.video.categories.ibadah') ?></button>
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm" data-filter="khotbah"><?= lang('Multimedia.video.categories.khotbah') ?></button>
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm" data-filter="pemuda"><?= lang('Multimedia.video.categories.pemuda') ?></button>
                </div>
            </div>
        </div>

        <!-- Grid Video Lainnya -->
        <div class="row g-4 video-grid">
            
            <!-- Item Video 1 -->
            <div class="col-md-6 col-lg-4 video-item" data-category="ibadah">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/Q9OnZlgXLdo?start=2" title="Video Khotbah" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="card-body p-4">
                        <small class="text-muted d-block mb-1"><i class="bi bi-calendar3 me-1"></i> <?= $dateFormatter->format(strtotime('2026-07-26')) ?></small>
                        <h5 class="fw-bold text-dark fs-6 mb-2">Kekuatan di Tengah Badai Kehidupan</h5>
                        <p class="text-secondary small mb-0">Pembahasan mendalam mengenai pemeliharaan Allah bagi orang percaya.</p>
                    </div>
                </div>
            </div>

            <!-- Item Video 2 -->
            <div class="col-md-6 col-lg-4 video-item" data-category="khotbah">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/zulrAIOVn6Y?start=3" title="Video Teologi" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="card-body p-4">
                        <small class="text-muted d-block mb-1"><i class="bi bi-calendar3 me-1"></i> <?= $dateFormatter->format(strtotime('2026-07-22')) ?></small>
                        <h5 class="fw-bold text-dark fs-6 mb-2">Doktrin Keselamatan Berdasarkan Alkitab</h5>
                        <p class="text-secondary small mb-0">Seri pengajaran teologi praktis dan akademis tanpa kompromi.</p>
                    </div>
                </div>
            </div>

            <!-- Item Video 3 -->
            <div class="col-md-6 col-lg-4 video-item" data-category="pemuda">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/qnpxm8kNUhQ?start=13" title="Video Pemuda" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="card-body p-4">
                        <small class="text-muted d-block mb-1"><i class="bi bi-calendar3 me-1"></i> <?= $dateFormatter->format(strtotime('2026-07-19')) ?></small>
                        <h5 class="fw-bold text-dark fs-6 mb-2">Youth Fellowship: Menjaga Kekudusan Masa Muda</h5>
                        <p class="text-secondary small mb-0">Sesi tanya jawab dan diskusi interaktif bersama kaum muda gereja.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Skrip Sederhana untuk Filter Kategori Video -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const filterButtons = document.querySelectorAll(".btn-group button");
        const videoItems = document.querySelectorAll(".video-item");

        filterButtons.forEach(button => {
            button.addEventListener("click", function () {
                filterButtons.forEach(btn => {
                    btn.classList.remove("btn-dark", "active");
                    btn.classList.add("btn-outline-dark");
                });
                this.classList.remove("btn-outline-dark");
                this.classList.add("btn-dark", "active");

                const filterValue = this.getAttribute("data-filter");

                videoItems.forEach(item => {
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

<?= $this->endSection() ?>