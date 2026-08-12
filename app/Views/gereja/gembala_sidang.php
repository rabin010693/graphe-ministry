<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-4 py-md-5">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Church.pastor.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Church.pastor.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Church.pastor.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Row 1: Sambutan Gembala & Card Profil -->
        <div class="row g-4 align-items-center mb-5">
            <div class="col-lg-7" data-aos="fade-up">
                <div class="pe-lg-3">
                    <span class="text-danger fw-bold small text-uppercase tracking-wider"><?= lang('Church.pastor.section_subtitle') ?></span>
                    <h2 class="fw-bold mb-3 text-dark display-6"><?= lang('Church.pastor.welcome_title') ?></h2>
                    
                    <p class="text-muted text-justify" style="text-align: justify;">
                        <?= lang('Church.pastor.welcome_p1') ?>
                    </p>
                    
                    <p class="text-muted text-justify" style="text-align: justify;">
                        <?= lang('Church.pastor.welcome_p2') ?>
                    </p>

                    <div class="p-3 bg-white border-start border-danger border-4 shadow-sm rounded-end mb-4">
                        <p class="mb-0 fst-italic text-dark">
                            <?= lang('Church.pastor.quote') ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Profil Gembala Card -->
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="150">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white">
                    <div class="text-white py-5 position-relative" 
                        style="background: url('<?= base_url('assets/img/gembala_sidang.jpg') ?>') center/cover no-repeat; min-height: 220px;">
                    </div>
                    <div class="card-body p-4 text-start">
                        <ul class="list-unstyled mb-0 text-muted small">
                            <li class="mb-3 d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-danger me-2 fs-5"></i>
                                <span><?= lang('Church.pastor.founder') ?></span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-danger me-2 fs-5"></i>
                                <span><?= lang('Church.pastor.author') ?></span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-danger me-2 fs-5"></i>
                                <span><?= lang('Church.pastor.editor') ?></span>
                            </li>
                        </ul>
                    </div>   
                </div>
            </div>
        </div>

        <!-- Row 2: Biografi Lengkap -->
        <div class="row justify-content-center mb-5">
            <div class="col-12" data-aos="fade-up">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-danger text-white rounded-3 p-3 me-3">
                            <i class="bi bi-journal-text fs-4"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0 text-dark fs-4 fs-md-3"><?= lang('Church.pastor.bio_title') ?></h3>
                            <p class="text-muted small mb-0"><?= lang('Church.pastor.bio_subtitle') ?></p>
                        </div>
                    </div>
                    
                    <hr class="text-muted opacity-25 mb-4">

                    <div class="text-secondary biography-text" style="text-align: justify; font-size: 0.95rem;">
                        <p><?= lang('Church.pastor.bio_p1') ?></p>
                        <p><?= lang('Church.pastor.bio_p2') ?></p>
                        <p><?= lang('Church.pastor.bio_p3') ?></p>
                        <p><?= lang('Church.pastor.bio_p4') ?></p>
                        <p><?= lang('Church.pastor.bio_p5') ?></p>
                        <p><?= lang('Church.pastor.bio_p6') ?></p>
                        <p class="mb-0 fw-semibold text-dark"><?= lang('Church.pastor.bio_p7') ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 3: Visi, Misi, Nilai -->
        <div class="row g-4 text-center">
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
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
            
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
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
            
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="300">
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

<?= $this->endSection() ?>