<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero text-white py-5">
    <div class="container text-center py-4">
        <div class="eyebrow mb-2 text-uppercase fw-bold small opacity-75" data-aos="fade-down"><?= lang('Multimedia.gallery.badge') ?></div>
        <h1 class="mx-auto fw-bold mb-3" style="max-width: 760px; font-size: clamp(1.8rem, 4vw, 2.4rem);" data-aos="fade-down" data-aos-delay="100"><?= lang('Multimedia.gallery.hero_title') ?></h1>
        <p class="lead opacity-90 mx-auto fs-6" style="max-width: 650px;" data-aos="fade-down" data-aos-delay="200">
            <?= lang('Multimedia.gallery.hero_subtitle') ?>
        </p>
    </div>
</header>

<!-- Main Gallery Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Filter Kategori Tombol Pill -->
        <div class="d-flex justify-content-center flex-wrap gap-2 mb-5" data-aos="fade-up">
            <button class="btn btn-dark rounded-pill px-4 filter-btn active" onclick="filterGallery('all', this)"><?= lang('Multimedia.gallery.categories.all') ?></button>
            <button class="btn btn-outline-dark rounded-pill px-4 filter-btn" onclick="filterGallery('Kebaktian Umum', this)"><?= lang('Multimedia.gallery.categories.general') ?></button>
            <button class="btn btn-outline-dark rounded-pill px-4 filter-btn" onclick="filterGallery('Pemuda & Remaja', this)"><?= lang('Multimedia.gallery.categories.youth') ?></button>
            <button class="btn btn-outline-dark rounded-pill px-4 filter-btn" onclick="filterGallery('Sekolah Minggu', this)"><?= lang('Multimedia.gallery.categories.sunday_school') ?></button>
            <button class="btn btn-outline-dark rounded-pill px-4 filter-btn" onclick="filterGallery('Kegiatan Sosial', this)"><?= lang('Multimedia.gallery.categories.social') ?></button>
        </div>

        <!-- Card Grid Galeri -->
        <div class="row g-4" id="galleryContainer">
            <?php if (!empty($galleries)): ?>
                <?php 
                    // Formatter tanggal sesuai locale aktif ('id' / 'en')
                    $currentLocale = service('request')->getLocale();
                    $dateFormatter = new \IntlDateFormatter(
                        $currentLocale,
                        \IntlDateFormatter::LONG,
                        \IntlDateFormatter::NONE
                    );
                ?>
                <?php 
                $delay = 100;
                foreach ($galleries as $item): 
                    $time = strtotime($item['event_date']);
                    $formattedDate = $dateFormatter->format($time);

                    // Pilihan Warna Badge Kategori & Label Terjemahan Badge
                    $badgeColor = 'bg-primary';
                    $categoryLabel = $item['category'];

                    if ($item['category'] === 'Kebaktian Umum') {
                        $badgeColor = 'bg-primary';
                        $categoryLabel = lang('Multimedia.gallery.categories.general');
                    } elseif ($item['category'] === 'Pemuda & Remaja') {
                        $badgeColor = 'bg-success';
                        $categoryLabel = lang('Multimedia.gallery.categories.youth');
                    } elseif ($item['category'] === 'Sekolah Minggu') {
                        $badgeColor = 'bg-warning text-dark';
                        $categoryLabel = lang('Multimedia.gallery.categories.sunday_school');
                    } elseif ($item['category'] === 'Kegiatan Sosial') {
                        $badgeColor = 'bg-info text-white';
                        $categoryLabel = lang('Multimedia.gallery.categories.social');
                    }
                ?>
                    <div class="col-12 col-md-4 gallery-card-item" data-category="<?= esc($item['category']) ?>" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative">
                            <!-- Badge Kategori -->
                            <span class="position-absolute top-0 end-0 m-3 badge rounded-pill <?= $badgeColor ?> px-3 py-2 z-1">
                                <?= esc($categoryLabel) ?>
                            </span>

                            <!-- Gambar Momen -->
                            <img src="<?= base_url('uploads/galeri/' . $item['image']) ?>" 
                                 class="card-img-top object-fit-cover" 
                                 alt="<?= esc($item['title']) ?>" 
                                 style="height: 240px;">

                            <!-- Isi Konten Card -->
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="text-muted small mb-2">
                                    <i class="bi bi-calendar-event me-1"></i><?= $formattedDate ?>
                                </div>
                                <h5 class="card-title fw-bold text-dark mb-2 fs-6"><?= esc($item['title']) ?></h5>
                                <p class="card-text text-muted small flex-grow-1 mb-0"><?= esc($item['description']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php 
                    if ($delay < 400) {
                        $delay += 50;
                    }
                endforeach; 
                ?>
            <?php else: ?>
                <div class="col-12 text-center text-muted py-5" data-aos="fade-up">
                    <i class="bi bi-images fs-1 mb-2 d-block opacity-50"></i>
                    <h5><?= lang('Multimedia.gallery.empty') ?></h5>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<!-- Filter Script -->
<script>
function filterGallery(category, btn) {
    // Ubah status tombol aktif
    document.querySelectorAll('.filter-btn').forEach(b => {
        b.classList.remove('btn-dark', 'active');
        b.classList.add('btn-outline-dark');
    });
    btn.classList.remove('btn-outline-dark');
    btn.classList.add('btn-dark', 'active');

    // Filter elemen card
    const items = document.querySelectorAll('.gallery-card-item');
    items.forEach(item => {
        if (category === 'all' || item.getAttribute('data-category') === category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>

<?= $this->endSection() ?>