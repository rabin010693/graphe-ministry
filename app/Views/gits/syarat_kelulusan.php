<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Gits.graduation.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Gits.graduation.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Gits.graduation.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Pengantar Card -->
        <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5 text-center">
                <i class="fas fa-graduation-cap text-primary fs-2 mb-3" data-aos="fade-up" data-aos-delay="100"></i>
                <h3 class="fw-bold text-dark mb-2" data-aos="fade-up" data-aos-delay="150"><?= lang('Gits.graduation.intro_title') ?></h3>
                <p class="text-muted mb-0 mx-auto" style="max-width: 700px;" data-aos="fade-up" data-aos-delay="200">
                    <?= lang('Gits.graduation.intro_desc') ?>
                </p>
            </div>
        </div>

        <!-- Bagian 1: Program Foundation -->
        <div class="mb-5">
            <div class="d-flex align-items-center mb-4" data-aos="fade-up">
                <div class="bg-primary text-white rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="fas fa-seedling"></i>
                </div>
                <div>
                    <h3 class="fw-bold text-dark mb-0"><?= lang('Gits.graduation.foundation_title') ?></h3>
                    <p class="text-muted small mb-0"><?= lang('Gits.graduation.foundation_sub') ?></p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Certificate of Theology -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <span class="badge bg-secondary bg-opacity-10 text-dark mb-2 px-3 py-1 fw-semibold">36 SKS</span>
                            <h4 class="fw-bold text-dark mb-3"><?= lang('Gits.graduation.cert_title') ?></h4>
                            <h6 class="fw-semibold text-primary mb-2 small text-uppercase tracking-wider"><?= lang('Gits.graduation.mandatory_title') ?></h6>
                            <ul class="list-unstyled text-muted small mb-0">
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> TH199 Doktrin Dasar (4 sks)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Associate of Theology -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <span class="badge bg-secondary bg-opacity-10 text-dark mb-2 px-3 py-1 fw-semibold">72 SKS</span>
                            <h4 class="fw-bold text-dark mb-3"><?= lang('Gits.graduation.assoc_title') ?></h4>
                            <h6 class="fw-semibold text-primary mb-2 small text-uppercase tracking-wider"><?= lang('Gits.graduation.mandatory_title') ?></h6>
                            <ul class="list-unstyled text-muted small mb-0">
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> TH199 Doktrin Dasar (4 sks)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Disciple of Theology -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <span class="badge bg-secondary bg-opacity-10 text-dark mb-2 px-3 py-1 fw-semibold">108 SKS</span>
                            <h4 class="fw-bold text-dark mb-3"><?= lang('Gits.graduation.disc_title') ?></h4>
                            <h6 class="fw-semibold text-primary mb-2 small text-uppercase tracking-wider"><?= lang('Gits.graduation.mandatory_title') ?></h6>
                            <ul class="list-unstyled text-muted small mb-0">
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> TH101 Soteriologi (3 sks)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> TH102 Bibliologi (3 sks)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> TH103 Ekklesiologi (3 sks)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> HT101 Sejarah Baptis 1 (2 sks)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> HT102 Sejarah Baptis 2 (2 sks)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Scholar of Biblical Study -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-secondary bg-opacity-10 text-dark px-3 py-1 fw-semibold">136 SKS</span>
                                <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1 small"><?= lang('Gits.graduation.gpa_min') ?> 2,30</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-3"><?= lang('Gits.graduation.scbs_title') ?></h4>
                            <h6 class="fw-semibold text-primary mb-2 small text-uppercase tracking-wider"><?= lang('Gits.graduation.mandatory_req_title') ?></h6>
                            <ul class="list-unstyled text-muted small mb-0">
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> TH101, TH102, TH103 (9 sks)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> HT101, HT102 Sejarah Baptis (4 sks)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Minimal 12 sks Biblical Study (BS)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Minimal 9 sks Eksegesis PL (PL)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Minimal 9 sks Eksegesis PB (PB)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Minimal 4 sks Musik (MS)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Minimal 8 sks Praktikal (PT - incl. 2 sks Penginjilan)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Minimal 15 sks Theologi (TH)*</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Scholar of Biblical Theology -->
                <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-secondary bg-opacity-10 text-dark px-3 py-1 fw-semibold">136 SKS</span>
                                <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1 small"><?= lang('Gits.graduation.gpa_min') ?> 2,30</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-3"><?= lang('Gits.graduation.scbt_title') ?></h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="fw-semibold text-primary mb-2 small text-uppercase tracking-wider"><?= lang('Gits.graduation.mandatory_title') ?></h6>
                                    <ul class="list-unstyled text-muted small mb-0">
                                        <li class="mb-1"><i class="fas fa-check text-success me-2"></i> TH101 Soteriologi, TH102 Bibliologi, TH103 Ekklesiologi (9 sks)</li>
                                        <li class="mb-1"><i class="fas fa-check text-success me-2"></i> HT101 Sejarah Baptis 1 & HT102 Sejarah Baptis 2 (4 sks)</li>
                                        <li class="mb-1"><i class="fas fa-check text-success me-2"></i> BL201 Yunani 1 & BL202 Yunani 2 (6 sks)</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <h6 class="fw-semibold text-primary mb-2 small text-uppercase tracking-wider"><?= lang('Gits.graduation.additional_req_title') ?></h6>
                                    <ul class="list-unstyled text-muted small mb-0">
                                        <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Minimal 12 sks Biblical Study (BS)</li>
                                        <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Minimal 9 sks Eksegesis PL & 12 sks PB</li>
                                        <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Minimal 4 sks Musik (MS) & 8 sks Praktikal (PT)*</li>
                                        <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Minimal 15 sks Theologi (TH)*</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian 2: Program Advanced -->
        <div class="mb-4">
            <div class="d-flex align-items-center mb-4" data-aos="fade-up">
                <div class="bg-success text-white rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="fas fa-graduation-cap fa-lg"></i>
                </div>
                <div>
                    <h3 class="fw-bold text-dark mb-0"><?= lang('Gits.graduation.advanced_title') ?></h3>
                    <p class="text-muted small mb-0"><?= lang('Gits.graduation.advanced_sub') ?></p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Maestro of Ministry -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-secondary bg-opacity-10 text-dark px-3 py-1 fw-semibold">36 - 60 SKS</span>
                                <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1 small"><?= lang('Gits.graduation.gpa_min') ?> 2,50</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-2"><?= lang('Gits.graduation.mamin_title') ?></h4>
                            <p class="text-muted small mb-3">
                                <strong><?= lang('Gits.graduation.credit_load') ?></strong> <?= lang('Gits.graduation.mamin_credits_note') ?><br>
                                <strong><?= lang('Gits.graduation.thesis_req') ?></strong> Thesis min. 100 <?= lang('Gits.graduation.page_min') ?>
                            </p>
                            <h6 class="fw-semibold text-primary mb-2 small text-uppercase tracking-wider"><?= lang('Gits.graduation.mandatory_title') ?></h6>
                            <ul class="list-unstyled text-muted small mb-0">
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> TH101, TH102, TH103 (9 sks)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> HT101, HT102 Sejarah Baptis (4 sks)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Min. 8 sks PT/MS* & 15 sks TH/PL/PB*</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Maestro of Biblical Study -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-secondary bg-opacity-10 text-dark px-3 py-1 fw-semibold">36 - 60 SKS</span>
                                <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1 small"><?= lang('Gits.graduation.gpa_min') ?> 2,50</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-2"><?= lang('Gits.graduation.mabs_title') ?></h4>
                            <p class="text-muted small mb-3">
                                <strong><?= lang('Gits.graduation.credit_load') ?></strong> <?= lang('Gits.graduation.mabs_credits_note') ?><br>
                                <strong><?= lang('Gits.graduation.thesis_req') ?></strong> Thesis min. 100 <?= lang('Gits.graduation.page_min') ?>
                            </p>
                            <h6 class="fw-semibold text-primary mb-2 small text-uppercase tracking-wider"><?= lang('Gits.graduation.mandatory_title') ?></h6>
                            <ul class="list-unstyled text-muted small mb-0">
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> TH101, TH102, TH103 & HT101, HT102</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> BL201 Yunani 1 & BL202 Yunani 2 (6 sks)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Pilihan Eksegesis PL & PB (Kejadian / Daniel / Ibrani / Roma)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Maestro of Divinity -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-secondary bg-opacity-10 text-dark px-3 py-1 fw-semibold">96 - 108 SKS</span>
                                <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1 small"><?= lang('Gits.graduation.gpa_min') ?> 2,50</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-2"><?= lang('Gits.graduation.mdiv_title') ?></h4>
                            <p class="text-muted small mb-3">
                                <strong><?= lang('Gits.graduation.credit_load') ?></strong> <?= lang('Gits.graduation.mdiv_credits_note') ?><br>
                                <strong><?= lang('Gits.graduation.thesis_req') ?></strong> Thesis min. 150 <?= lang('Gits.graduation.page_min') ?>
                            </p>
                            <h6 class="fw-semibold text-primary mb-2 small text-uppercase tracking-wider"><?= lang('Gits.graduation.mandatory_title') ?></h6>
                            <ul class="list-unstyled text-muted small mb-0">
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Soteriologi, Bibliologi, Ekklesiologi, Pneumatologi, Kalvinisme</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Sejarah Baptis 1 & 2</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Bahasa Asli: Yunani 1-2 & Ibrani 1-2</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Eksegesis: Kejadian, Ibrani, Roma, Matius</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Maestro of Theology -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-secondary bg-opacity-10 text-dark px-3 py-1 fw-semibold">110 - 134 SKS</span>
                                <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1 small"><?= lang('Gits.graduation.gpa_min') ?> 2,75</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-2"><?= lang('Gits.graduation.math_title') ?></h4>
                            <p class="text-muted small mb-3">
                                <strong><?= lang('Gits.graduation.credit_load') ?></strong> <?= lang('Gits.graduation.math_credits_note') ?><br>
                                <strong><?= lang('Gits.graduation.thesis_req') ?></strong> Thesis min. 200 <?= lang('Gits.graduation.page_min') ?>
                            </p>
                            <h6 class="fw-semibold text-primary mb-2 small text-uppercase tracking-wider"><?= lang('Gits.graduation.mandatory_title') ?></h6>
                            <ul class="list-unstyled text-muted small mb-0">
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Teologi Lengkap (Soteriologi, Eskatologi, dll)</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Bahasa Asli Lanjutan: Yunani Syntax 1-2 & Ibrani 1-2</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i> Eksegesis Mendalam (Kejadian, Ibrani, Roma, Matius) + Min. 6 sks Eksegesis Bahasa Asli</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Didaskalos of Ministry -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-secondary bg-opacity-10 text-dark px-3 py-1 fw-semibold">132+ SKS</span>
                                <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1 small"><?= lang('Gits.graduation.gpa_min') ?> 2,75</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-2"><?= lang('Gits.graduation.dmin_title') ?></h4>
                            <p class="text-muted small mb-3">
                                <strong><?= lang('Gits.graduation.credit_load') ?></strong> <?= lang('Gits.graduation.dmin_credits_note') ?><br>
                                <strong><?= lang('Gits.graduation.thesis_req') ?></strong> <?= lang('Gits.graduation.dissertation_req') ?> 250 <?= lang('Gits.graduation.page_min') ?>
                            </p>
                            <h6 class="fw-semibold text-primary mb-2 small text-uppercase tracking-wider"><?= lang('Gits.graduation.mandatory_title') ?></h6>
                            <p class="text-muted small mb-0"><?= lang('Gits.graduation.dmin_mandatory') ?></p>
                        </div>
                    </div>
                </div>

                <!-- Didaskalos of Theology -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-secondary bg-opacity-10 text-dark px-3 py-1 fw-semibold">140+ SKS</span>
                                <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1 small"><?= lang('Gits.graduation.gpa_min') ?> 2,75</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-2"><?= lang('Gits.graduation.dth_title') ?></h4>
                            <p class="text-muted small mb-3">
                                <strong><?= lang('Gits.graduation.credit_load') ?></strong> <?= lang('Gits.graduation.dth_credits_note') ?><br>
                                <strong><?= lang('Gits.graduation.thesis_req') ?></strong> <?= lang('Gits.graduation.dissertation_req') ?> 300 <?= lang('Gits.graduation.page_min') ?> <?= lang('Gits.graduation.exam_lang') ?>
                            </p>
                            <h6 class="fw-semibold text-primary mb-2 small text-uppercase tracking-wider"><?= lang('Gits.graduation.mandatory_title') ?></h6>
                            <p class="text-muted small mb-0"><?= lang('Gits.graduation.dth_mandatory') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Catatan Kaki -->
        <div class="alert alert-warning border-0 bg-opacity-10 text-dark p-3 rounded-3 small mb-5 text-center" data-aos="fade-up">
            <i class="fas fa-info-circle text-warning me-2"></i> <em><?= lang('Gits.graduation.footnote') ?></em>
        </div>

        <!-- Call to Action Footer -->
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-10 text-center">
                <div class="p-4 bg-white rounded-4 shadow-sm border">
                    <p class="mb-3 text-secondary"><?= lang('Gits.graduation.cta_text') ?></p>
                    <a href="<?= base_url('gits/mata_kuliah') ?>" class="btn btn-danger px-4 py-2 rounded-pill fw-semibold shadow-sm">
                        <i class="fas fa-file-alt me-2"></i> <?= lang('Gits.graduation.cta_btn') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>