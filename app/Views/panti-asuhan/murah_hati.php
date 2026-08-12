<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Orphanage.murah_hati.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Orphanage.murah_hati.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Orphanage.murah_hati.hero_subtitle') ?></p>
    </div>
</header> -->

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Orphanage.murah_hati.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Orphanage.murah_hati.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Orphanage.murah_hati.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Main Content Card -->
        <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                
                <div class="d-flex align-items-center mb-4 border-bottom pb-3" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-id-card text-primary fs-3 me-3"></i>
                    <div>
                        <h3 class="fw-bold text-dark mb-1"><?= lang('Orphanage.murah_hati.about_title') ?></h3>
                        <p class="text-muted small mb-0"><?= lang('Orphanage.murah_hati.about_sub') ?></p>
                    </div>
                </div>

                <p class="text-muted mb-4" data-aos="fade-up" data-aos-delay="150">
                    <?= lang('Orphanage.murah_hati.about_desc') ?>
                </p>

                <!-- Highlight Statistik & Pengurus -->
                <div class="row g-4 mb-4">
                    <!-- Statistik Anak Asuh -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="p-4 bg-light rounded-3 h-100 border-start border-primary border-4">
                            <h5 class="fw-bold text-dark mb-2">
                                <i class="fas fa-child text-primary me-2"></i> <?= lang('Orphanage.murah_hati.children_title') ?>
                            </h5>
                            <p class="text-muted mb-2 small">
                                <?= lang('Orphanage.murah_hati.children_desc') ?>
                            </p>
                            <div class="d-flex gap-2">
                                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 fw-semibold"><?= lang('Orphanage.murah_hati.total_children', [22]) ?></span>
                                <span class="badge bg-secondary bg-opacity-10 text-dark px-2 py-2"><?= lang('Orphanage.murah_hati.male_count', [13]) ?></span>
                                <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-2"><?= lang('Orphanage.murah_hati.female_count', [9]) ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Pengurus Panti -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="p-4 bg-light rounded-3 h-100 border-start border-success border-4">
                            <h5 class="fw-bold text-dark mb-2">
                                <i class="fas fa-user-shield text-success me-2"></i> <?= lang('Orphanage.murah_hati.parents_title') ?>
                            </h5>
                            <p class="text-muted mb-2 small">
                                <?= lang('Orphanage.murah_hati.parents_desc') ?>
                            </p>
                            <p class="fw-bold text-dark mb-0">
                                <i class="fas fa-user-tie text-success me-1"></i> <?= lang('Orphanage.murah_hati.parents_names') ?> <span class="text-muted fw-normal small"><?= lang('Orphanage.murah_hati.parents_role') ?></span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Lokasi / Kunjungi Kami -->
                <div class="p-4 bg-primary bg-opacity-10 rounded-3 border-0 text-dark" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="fw-bold text-primary mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i> <?= lang('Orphanage.murah_hati.visit_title') ?>
                    </h5>
                    <p class="text-muted small mb-0">
                        <?= lang('Orphanage.murah_hati.visit_desc') ?>
                        <br><strong><?= lang('Orphanage.murah_hati.address_full') ?></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>