<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold"><?= lang('Church.history.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2"><?= lang('Church.history.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;"><?= lang('Church.history.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Intro Header / Pengantar Sejarah -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12 text-center">
                <span class="text-danger fw-bold small text-uppercase tracking-wider"><?= lang('Church.history.section_badge') ?></span>
                <h2 class="fw-bold text-dark display-6 mb-3"><?= lang('Church.history.section_title') ?></h2>
                <div class="mx-auto bg-danger rounded mb-4" style="width: 60px; height: 3px;"></div>
                <p class="text-secondary lead mx-auto" style="max-width: 800px; line-height: 1.8; font-size: 1.05rem;">
                    <?= lang('Church.history.intro_desc') ?>
                </p>
            </div>
        </div>

        <!-- Timeline Section -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12">
                <div class="timeline-container position-relative ps-4 ps-md-5 border-start border-danger border-3 ms-md-4">
                    
                    <!-- Timeline Item 1: 1995 (Awal Berdiri) -->
                    <div class="timeline-item position-relative mb-5">
                        <div class="timeline-dot position-absolute bg-danger rounded-circle shadow" style="width: 20px; height: 20px; left: -31.5px; top: 5px; border: 3px solid #fff;"></div>
                        
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="row align-items-center">
                                <!-- Kolom Foto (Kiri) -->
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <div class="rounded-3 overflow-hidden bg-secondary bg-opacity-10 text-center position-relative h-100" style="min-height: 300px;">
                                        <img src="<?= base_url('assets/img/first_service1995.jpg') ?>" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" alt="Kebaktian Pertama">
                                        <div class="d-flex flex-column align-items-center justify-content-center h-100 text-muted p-3">
                                            <i class="bi bi-image fs-1 mb-2"></i>
                                            <span class="small fw-semibold"><?= lang('Church.history.timeline.item1_photo') ?></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Kolom Teks (Kanan) -->
                                <div class="col-md-6">
                                    <span class="badge bg-danger text-white rounded-pill px-3 py-1 mb-2 align-self-start fw-bold"><?= lang('Church.history.timeline.item1_date') ?></span>
                                    <h3 class="fw-bold text-dark fs-4 mb-3"><?= lang('Church.history.timeline.item1_title') ?></h3>
                                    <p class="text-secondary mb-0" style="line-height: 1.8;">
                                        <?= lang('Church.history.timeline.item1_desc') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 2: Masa-Masa Tantangan & Pindah Lokasi -->
                    <div class="timeline-item position-relative mb-5">
                        <div class="timeline-dot position-absolute bg-danger rounded-circle shadow" style="width: 20px; height: 20px; left: -31.5px; top: 5px; border: 3px solid #fff;"></div>
                        
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="row align-items-center">
                                <!-- Kolom Teks (Kiri) -->
                                <div class="col-md-6">
                                    <span class="badge bg-danger text-white rounded-pill px-3 py-1 mb-2 align-self-start fw-bold"><?= lang('Church.history.timeline.item2_date') ?></span>
                                    <h3 class="fw-bold text-dark fs-4 mb-3"><?= lang('Church.history.timeline.item2_title') ?></h3>
                                    <p class="text-secondary mb-0" style="line-height: 1.8;">
                                        <?= lang('Church.history.timeline.item2_desc') ?>
                                    </p>
                                </div>

                                 <div class="col-md-6 mb-3 mb-md-0">
                                    <div class="rounded-3 overflow-hidden bg-secondary bg-opacity-10 text-center position-relative h-100" style="min-height: 300px;">
                                        <img src="<?= base_url('assets/img/first_service1995.jpg') ?>" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" alt="Kebaktian Pertama">
                                        <div class="d-flex flex-column align-items-center justify-content-center h-100 text-muted p-3">
                                            <i class="bi bi-image fs-1 mb-2"></i>
                                            <span class="small fw-semibold"><?= lang('Church.history.timeline.item1_photo') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 3: Tahun 2000 (HUT ke-5) -->
                    <div class="timeline-item position-relative mb-5">
                        <div class="timeline-dot position-absolute bg-danger rounded-circle shadow" style="width: 20px; height: 20px; left: -31.5px; top: 5px; border: 3px solid #fff;"></div>
                        
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="row align-items-center">
                                <!-- Kolom Foto (Kiri) -->
                                <div class="col-md-5 mb-3 mb-md-0">
                                    <div class="rounded-3 overflow-hidden bg-secondary bg-opacity-10 text-center position-relative h-100" style="min-height: 250px;">
                                        <img src="<?= base_url('assets/img/service_2000.gif') ?>" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" alt="Gedung HUT ke-5">
                                        <div class="d-flex flex-column align-items-center justify-content-center h-100 text-muted p-3">
                                            <i class="bi bi-building fs-1 mb-2"></i>
                                            <span class="small fw-semibold"><?= lang('Church.history.timeline.item3_photo') ?></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Kolom Teks (Kanan) -->
                                <div class="col-md-7">
                                    <span class="badge bg-danger text-white rounded-pill px-3 py-1 mb-2 align-self-start fw-bold"><?= lang('Church.history.timeline.item3_date') ?></span>
                                    <h3 class="fw-bold text-dark fs-4 mb-3"><?= lang('Church.history.timeline.item3_title') ?></h3>
                                    <p class="text-secondary mb-0" style="line-height: 1.8;">
                                        <?= lang('Church.history.timeline.item3_desc') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 4: Masa Kini & Harapan ke Depan -->
                    <div class="timeline-item position-relative">
                        <div class="timeline-dot position-absolute bg-danger rounded-circle shadow" style="width: 20px; height: 20px; left: -31.5px; top: 5px; border: 3px solid #fff;"></div>
                        
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="row align-items-center">
                                <!-- Kolom Teks (Kiri) -->
                                <div class="col-md-7">
                                    <span class="badge bg-danger text-white rounded-pill px-3 py-1 mb-2 align-self-start fw-bold"><?= lang('Church.history.timeline.item4_date') ?></span>
                                    <h3 class="fw-bold text-dark fs-4 mb-3"><?= lang('Church.history.timeline.item4_title') ?></h3>
                                    <p class="text-secondary mb-3" style="line-height: 1.8;">
                                        <?= lang('Church.history.timeline.item4_desc') ?>
                                    </p>
                                    <p class="text-danger fw-bold fst-italic mb-0">
                                        Maranatha!
                                    </p>
                                </div>
                                
                                <!-- Kolom Foto (Kanan) -->
                                <div class="col-md-5 mb-3 mb-md-0">
                                    <div class="rounded-3 overflow-hidden bg-secondary bg-opacity-10 text-center position-relative h-100" style="min-height: 250px;">
                                        <img src="<?= base_url('assets/img/today_service2026.jpg') ?>" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" alt="Gedung Sekarang">
                                        <div class="d-flex flex-column align-items-center justify-content-center h-100 text-muted p-3">
                                            <i class="bi bi-house-heart fs-1 mb-2"></i>
                                            <span class="small fw-semibold"><?= lang('Church.history.timeline.item4_photo') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Row 3: Nilai / Core Values -->
        <div class="row g-4 text-center">
            <div class="col-12 col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-3 p-lg-4 bg-white">
                    <div class="card-body p-2">
                        <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-heart fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-2 text-dark fs-5"><?= lang('Church.pastor.val1_title') ?></h4>
                        <small class="text-danger"><?= lang('Church.pastor.val1_sub') ?></small>
                        <p class="text-muted small mb-0 mt-2"><?= lang('Church.pastor.val1_desc') ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-3 p-lg-4 bg-white">
                    <div class="card-body p-2">
                        <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-patch-check fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-2 text-dark fs-5"><?= lang('Church.pastor.val2_title') ?></h4>
                        <small class="text-danger"><?= lang('Church.pastor.val2_sub') ?></small>
                        <p class="text-muted small mb-0 mt-2"><?= lang('Church.pastor.val2_desc') ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-3 p-lg-4 bg-white">
                    <div class="card-body p-2">
                        <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-book fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-2 text-dark fs-5"><?= lang('Church.pastor.val3_title') ?></h4>
                        <small class="text-danger"><?= lang('Church.pastor.val3_sub') ?></small>
                        <p class="text-muted small mb-0 mt-2"><?= lang('Church.pastor.val3_desc') ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection('content') ?>