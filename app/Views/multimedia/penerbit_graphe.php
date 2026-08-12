<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase"><?= lang('Multimedia.publisher.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;"><?= lang('Multimedia.publisher.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;"><?= lang('Multimedia.publisher.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Card Utama Penerbit -->
        <div class="card border-0 shadow-sm rounded-4 mb-4">
            <div class="card-body p-4 p-md-5">
                
                <div class="d-flex align-items-center mb-4 border-bottom pb-3">
                    <i class="fas fa-book-reader text-danger fs-3 me-3"></i>
                    <div>
                        <h3 class="fw-bold text-dark mb-1"><?= lang('Multimedia.publisher.section_title') ?></h3>
                        <p class="text-muted small mb-0"><?= lang('Multimedia.publisher.section_sub') ?></p>
                    </div>
                </div>

                <p class="text-muted mb-3">
                    <?= lang('Multimedia.publisher.p1') ?>
                </p>

                <p class="text-muted mb-4">
                    <?= lang('Multimedia.publisher.p2') ?>
                </p>

                <!-- Poin Keunggulan / Peran Penerbit -->
                <h5 class="fw-bold text-dark mb-3"><?= lang('Multimedia.publisher.roles_title') ?></h5>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 h-100 border-start border-primary border-4">
                            <h6 class="fw-bold text-dark mb-1"><i class="fas fa-globe text-primary me-2"></i> <?= lang('Multimedia.publisher.role1_title') ?></h6>
                            <p class="text-muted small mb-0"><?= lang('Multimedia.publisher.role1_desc') ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 h-100 border-start border-success border-4">
                            <h6 class="fw-bold text-dark mb-1"><i class="fas fa-lightbulb text-success me-2"></i> <?= lang('Multimedia.publisher.role2_title') ?></h6>
                            <p class="text-muted small mb-0"><?= lang('Multimedia.publisher.role2_desc') ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 h-100 border-start border-warning border-4">
                            <h6 class="fw-bold text-dark mb-1"><i class="fas fa-language text-warning me-2"></i> <?= lang('Multimedia.publisher.role3_title') ?></h6>
                            <p class="text-muted small mb-0"><?= lang('Multimedia.publisher.role3_desc') ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 h-100 border-start border-danger border-4">
                            <h6 class="fw-bold text-dark mb-1"><i class="fas fa-graduation-cap text-danger me-2"></i> <?= lang('Multimedia.publisher.role4_title') ?></h6>
                            <p class="text-muted small mb-0"><?= lang('Multimedia.publisher.role4_desc') ?></p>
                        </div>
                    </div>
                </div>

                <!-- Ajakan Membaca & Kontak -->
                <div class="p-4 bg-primary bg-opacity-10 rounded-3 border-0 text-dark">
                    <div class="row align-items-center">
                        <div class="col-md-8 mb-3 mb-md-0">
                            <h5 class="fw-bold text-primary mb-2">
                                <i class="fas fa-book-open me-2"></i> <?= lang('Multimedia.publisher.cta_title') ?>
                            </h5>
                            <p class="text-muted small mb-0">
                                <?= lang('Multimedia.publisher.cta_desc') ?>
                            </p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="mailto:gits@graphe-ministry.org" class="btn btn-danger px-4 py-2 rounded-pill shadow-sm">
                                <i class="fas fa-envelope me-2"></i> <?= lang('Multimedia.publisher.cta_btn') ?>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>