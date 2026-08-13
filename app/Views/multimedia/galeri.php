<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


<!-- Hero Section -->
<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Multimedia.gallery.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Multimedia.gallery.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Multimedia.gallery.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Gallery Section -->
<section class="ftco-section ftco-no-pb py-5">
    <div class="container-fluid px-md-0">
        
        <!-- Filter Kategori Tombol Pill -->
        <div class="d-flex justify-content-center flex-wrap gap-2 mb-5 px-3" data-aos="fade-up">
            <button class="btn btn-dark rounded-pill px-4 filter-btn active" onclick="filterGallery('all', this)"><?= lang('Multimedia.gallery.categories.all') ?></button>
            <button class="btn btn-outline-dark rounded-pill px-4 filter-btn" onclick="filterGallery('Kebaktian Umum', this)"><?= lang('Multimedia.gallery.categories.general') ?></button>
            <button class="btn btn-outline-dark rounded-pill px-4 filter-btn" onclick="filterGallery('Pemuda & Remaja', this)"><?= lang('Multimedia.gallery.categories.youth') ?></button>
            <button class="btn btn-outline-dark rounded-pill px-4 filter-btn" onclick="filterGallery('Sekolah Minggu', this)"><?= lang('Multimedia.gallery.categories.sunday_school') ?></button>
            <button class="btn btn-outline-dark rounded-pill px-4 filter-btn" onclick="filterGallery('Kegiatan Sosial', this)"><?= lang('Multimedia.gallery.categories.social') ?></button>
        </div>

        <!-- Gallery Grid (Murni Gambar & Overlay seperti Expected) -->
        <div class="row g-0" id="galleryContainer">
            <?php if (!empty($galleries)): ?>
                <?php 
                $delay = 100;
                foreach ($galleries as $item): 
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
                    <div class="col-md-3 col-sm-6 col-12 gallery-card-item" data-category="<?= esc($item['category']) ?>">
                        <a href="<?= base_url('uploads/galeri/' . $item['image']) ?>" 
                           class="glightbox img gallery position-relative d-block overflow-hidden" 
                           data-gallery="gallery" 
                           data-aos="fade-up" 
                           data-aos-delay="<?= $delay ?>"
                           style="height: 300px; background: url('<?= base_url('uploads/galeri/' . $item['image']) ?>') center/cover no-repeat;">
                            
                            <!-- Badge Kategori di dalam Item Gallery -->
                            <span class="position-absolute top-0 end-0 m-3 badge rounded-pill <?= $badgeColor ?> px-3 py-2 z-2 shadow">
                                <?= esc($categoryLabel) ?>
                            </span>

                            <!-- Overlay Gelap saat kursor diarahkan (Hover) -->
                            <span class="overlay"></span>

                            <!-- Judul Foto saat Hover -->
                            <div class="gallery-title-overlay position-absolute bottom-0 start-0 w-100 p-3 text-white z-2">
                                <h6 class="fw-bold mb-0 text-truncate"><?= esc($item['title']) ?></h6>
                            </div>
                        </a>
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

<!-- CSS Pendukung untuk Efek Hover & Overlay -->
<style>
.gallery {
    position: relative;
    transition: all 0.3s ease;
}
.gallery .overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0, 0, 0, 0.4);
    opacity: 0;
    transition: opacity 0.3s ease;
}
.gallery:hover .overlay {
    opacity: 1;
}
.gallery .gallery-title-overlay {
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    opacity: 0;
    transform: translateY(10px);
    transition: all 0.3s ease;
}
.gallery:hover .gallery-title-overlay {
    opacity: 1;
    transform: translateY(0);
}
</style>

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