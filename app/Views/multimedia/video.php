<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Multimedia.video.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Multimedia.video.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Multimedia.video.hero_subtitle') ?></p>
    </div>  
</header>

<section class="py-5 bg-light">
    <div class="container">
        
        <?php 
            $currentLocale = service('request')->getLocale();
            $dateFormatter = new \IntlDateFormatter(
                $currentLocale,
                \IntlDateFormatter::LONG,
                \IntlDateFormatter::NONE
            );
        ?>

        <!-- ================= 1. FEATURED / HERO VIDEO ================= -->
        <?php if (!empty($featured_video)): ?>
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white mb-5" data-aos="fade-up" data-aos-duration="1000">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-7">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/<?= esc($featured_video['youtube_id']) ?>" title="<?= esc($featured_video['title']) ?>" allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-5 p-4 p-md-5">
                        <span class="badge bg-danger text-uppercase px-3 py-1 mb-2 rounded-pill">
                            <i class="bi bi-broadcast me-1"></i> <?= lang('Multimedia.video.featured_badge') ?>
                        </span>
                        <h2 class="h4 fw-bold text-dark mb-3"><?= esc($featured_video['title']) ?></h2>
                        <p class="text-secondary small mb-4"><?= esc($featured_video['description']) ?></p>
                        <div class="d-flex align-items-center text-muted small">
                            <i class="bi bi-calendar-event me-2 text-primary"></i> 
                            <?= $dateFormatter->format(strtotime($featured_video['published_at'] ?? $featured_video['created_at'])) ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

       <!-- ================= 2. TOMBOL FILTER KATEGORI ================= -->
        <div class="row justify-content-center mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <div class="col-lg-10 text-center">
                <div class="btn-group flex-wrap gap-2 justify-content-center" role="group" aria-label="Filter Video">
                    <button type="button" class="btn btn-dark rounded-pill px-4 py-2 active shadow-sm" data-filter="all">
                        <?= lang('Multimedia.video.categories.all') ?>
                    </button>
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm" data-filter="ibadah_umum">
                        <?= lang('Multimedia.video.categories.ibadah_umum') ?>
                    </button>
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm" data-filter="khotbah_rabu">
                        <?= lang('Multimedia.video.categories.khotbah_rabu') ?>
                    </button>
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm" data-filter="seminar">
                        <?= lang('Multimedia.video.categories.seminar') ?>
                    </button>
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm" data-filter="podcast">
                        <?= lang('Multimedia.video.categories.podcast') ?>
                    </button>
                </div>
            </div>
        </div>

        <!-- ================= 3. GRID VIDEO DINAMIS ================= -->
        <div class="row g-4 video-grid">
            <?php if (!empty($videos)): ?>
                <?php foreach ($videos as $v): ?>
                    <div class="col-md-6 col-lg-4 video-item" data-category="<?= esc($v['category']) ?>" data-aos="fade-up" data-aos-duration="800">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/<?= esc($v['youtube_id']) ?>" title="<?= esc($v['title']) ?>" allowfullscreen loading="lazy"></iframe>
                            </div>
                            <div class="card-body p-4">
                                <small class="text-muted d-block mb-1">
                                    <i class="bi bi-calendar3 me-1"></i> <?= $dateFormatter->format(strtotime($v['published_at'] ?? $v['created_at'])) ?>
                                </small>
                                <h5 class="fw-bold text-dark fs-6 mb-2"><?= esc($v['title']) ?></h5>
                                <p class="text-secondary small mb-0"><?= esc($v['description']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <p class="text-muted">Belum ada video lain yang tersedia.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<!-- Filter Script -->
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