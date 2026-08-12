<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold"><?= lang('Orphanage.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2"><?= lang('Orphanage.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;"><?= lang('Orphanage.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Main Content Card -->
        <div class="card border-0 shadow-sm rounded-4 mb-4">
            <div class="card-body p-4 p-md-5">
                
                <div class="d-flex align-items-center mb-4 border-bottom pb-3">
                    <i class="fas fa-heart text-danger fs-3 me-3"></i>
                    <div>
                        <h3 class="fw-bold text-dark mb-1"><?= lang('Orphanage.section_title') ?></h3>
                        <p class="text-muted small mb-0"><?= lang('Orphanage.section_sub') ?></p>
                    </div>
                </div>
                
                <p class="text-muted mb-3">
                    <?= lang('Orphanage.p1') ?>
                </p>

                <p class="text-muted mb-4">
                    <?= lang('Orphanage.p2') ?>
                </p>

                <!-- Highlight: Prioritas Anak Yatim Piatu -->
                <div class="p-4 bg-light rounded-3 border-start border-danger border-4 mb-4">
                    <h5 class="fw-bold text-dark mb-2">
                        <i class="fas fa-child text-danger me-2"></i> <?= lang('Orphanage.priority_title') ?>
                    </h5>
                    <p class="text-muted mb-0">
                        <?= lang('Orphanage.priority_desc') ?>
                    </p>
                </div>

                <h4 class="fw-bold text-dark mb-3"><?= lang('Orphanage.foundation_title') ?></h4>
                <p class="text-muted mb-4">
                    <?= lang('Orphanage.foundation_desc') ?>
                </p>

                <!-- Call to Action / Ajak Ambil Bagian -->
                <div class="p-4 bg-primary bg-opacity-10 rounded-4 border-0 text-dark">
                    <div class="row align-items-center">
                        <div class="col-md-8 mb-3 mb-md-0">
                            <h5 class="fw-bold text-primary mb-2">
                                <i class="fas fa-hands-helping me-2"></i> <?= lang('Orphanage.cta_title') ?>
                            </h5>
                            <p class="text-muted small mb-0">
                                <?= lang('Orphanage.cta_desc') ?>
                            </p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="mailto:gits@graphe-ministry.org" class="btn btn-danger px-4 py-2 rounded-pill shadow-sm">
                                <i class="fas fa-envelope me-2"></i> <?= lang('Orphanage.cta_btn') ?>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>