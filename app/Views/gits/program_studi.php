<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Gits.programs.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Gits.programs.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Gits.programs.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">

        <!-- Intro Card -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10" data-aos="fade-up">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    <h3 class="fw-bold mb-3"><?= lang('Gits.programs.intro_title') ?></h3>
                    <p class="text-secondary mb-3" style="line-height: 1.8;">
                        <?= lang('Gits.programs.intro_desc') ?>
                    </p>
                    <div class="alert alert-info border-0 rounded-3 mb-0 text-secondary small">
                        <i class="fas fa-info-circle me-2"></i> <?= lang('Gits.programs.intro_alert') ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Program Foundation Section -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="d-flex align-items-center mb-4" data-aos="fade-up">
                    <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 50px; height: 50px;">
                        <i class="fas fa-seedling fa-lg"></i>
                    </div>
                    <div>
                        <h2 class="fw-bold text-dark mb-0"><?= lang('Gits.programs.foundation_title') ?></h2>
                        <p class="text-muted small mb-0"><?= lang('Gits.programs.foundation_subtitle') ?></p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Item 1 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold text-info mb-0"><?= lang('Gits.programs.f1_title') ?></h5>
                                <span class="badge bg-light text-info border fw-semibold"><?= lang('Gits.programs.f1_credits') ?></span>
                            </div>
                            <p class="text-muted small mb-2"><?= lang('Gits.programs.f1_duration') ?></p>
                            <p class="text-secondary small mb-0"><?= lang('Gits.programs.f1_desc') ?></p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold text-info mb-0"><?= lang('Gits.programs.f2_title') ?></h5>
                                <span class="badge bg-light text-info border fw-semibold"><?= lang('Gits.programs.f2_credits') ?></span>
                            </div>
                            <p class="text-muted small mb-2"><?= lang('Gits.programs.f2_duration') ?></p>
                            <p class="text-secondary small mb-0"><?= lang('Gits.programs.f2_desc') ?></p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold text-info mb-0"><?= lang('Gits.programs.f3_title') ?></h5>
                                <span class="badge bg-light text-info border fw-semibold"><?= lang('Gits.programs.f3_credits') ?></span>
                            </div>
                            <p class="text-muted small mb-2"><?= lang('Gits.programs.f3_duration') ?></p>
                            <p class="text-secondary small mb-0"><?= lang('Gits.programs.f3_desc') ?></p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold text-info mb-0"><?= lang('Gits.programs.f4_title') ?></h5>
                                <span class="badge bg-light text-info border fw-semibold"><?= lang('Gits.programs.f4_credits') ?></span>
                            </div>
                            <p class="text-muted small mb-2"><?= lang('Gits.programs.f4_duration') ?></p>
                            <p class="text-secondary small mb-0"><?= lang('Gits.programs.f4_desc') ?></p>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold text-info mb-0"><?= lang('Gits.programs.f5_title') ?></h5>
                                <span class="badge bg-light text-info border fw-semibold"><?= lang('Gits.programs.f5_credits') ?></span>
                            </div>
                            <p class="text-muted small mb-2"><?= lang('Gits.programs.f5_duration') ?></p>
                            <p class="text-secondary small mb-0"><?= lang('Gits.programs.f5_desc') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Program Advanced Section -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="d-flex align-items-center mb-4" data-aos="fade-up">
                    <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 50px; height: 50px;">
                        <i class="fas fa-graduation-cap fa-lg"></i>
                    </div>
                    <div>
                        <h2 class="fw-bold text-dark mb-0"><?= lang('Gits.programs.advanced_title') ?></h2>
                        <p class="text-muted small mb-0"><?= lang('Gits.programs.advanced_subtitle') ?></p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Item 1 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold text-dark mb-0"><?= lang('Gits.programs.a1_title') ?></h5>
                                <span class="badge bg-light text-dark border fw-semibold"><?= lang('Gits.programs.a1_credits') ?></span>
                            </div>
                            <p class="text-secondary small mb-0"><?= lang('Gits.programs.a1_desc') ?></p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold text-dark mb-0"><?= lang('Gits.programs.a2_title') ?></h5>
                                <span class="badge bg-light text-dark border fw-semibold"><?= lang('Gits.programs.a2_credits') ?></span>
                            </div>
                            <p class="text-secondary small mb-0"><?= lang('Gits.programs.a2_desc') ?></p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold text-dark mb-0"><?= lang('Gits.programs.a3_title') ?></h5>
                                <span class="badge bg-light text-dark border fw-semibold"><?= lang('Gits.programs.a3_credits') ?></span>
                            </div>
                            <p class="text-secondary small mb-0"><?= lang('Gits.programs.a3_desc') ?></p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold text-dark mb-0"><?= lang('Gits.programs.a4_title') ?></h5>
                                <span class="badge bg-light text-dark border fw-semibold"><?= lang('Gits.programs.a4_credits') ?></span>
                            </div>
                            <p class="text-secondary small mb-0"><?= lang('Gits.programs.a4_desc') ?></p>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover bg-dark text-white">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold text-warning mb-0"><?= lang('Gits.programs.a5_title') ?></h5>
                                <span class="badge bg-warning text-dark fw-semibold"><?= lang('Gits.programs.a5_credits') ?></span>
                            </div>
                            <p class="text-light opacity-85 small mb-0"><?= lang('Gits.programs.a5_desc') ?></p>
                        </div>
                    </div>
                </div>

                <!-- Catatan SKS Advanced -->
                <p class="text-muted small mt-3 fst-italic" data-aos="fade-up">
                    <?= lang('Gits.programs.advanced_note') ?>
                </p>
            </div>
        </div>

        <!-- Call to Action Footer -->
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-10 text-center">
                <div class="p-4 bg-white rounded-4 shadow-sm border">
                    <p class="mb-3 text-secondary"><?= lang('Gits.programs.cta_text') ?></p>
                    <a href="<?= base_url('gits/syarat_kelulusan') ?>" class="btn btn-danger px-4 py-2 rounded-pill fw-semibold shadow-sm">
                        <i class="fas fa-file-alt me-2"></i> <?= lang('Gits.programs.cta_btn') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>