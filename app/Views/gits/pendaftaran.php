<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Gits.registration.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Gits.registration.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Gits.registration.hero_subtitle') ?></p>
    </div>
</header> -->

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Gits.registration.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Gits.registration.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Gits.registration.hero_subtitle') ?></p>
    </div>
</header>


<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12">
                
                <!-- Informasi Pendaftaran & Biaya -->
                <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="fw-bold text-dark mb-4 border-bottom pb-3">
                            <i class="fas fa-info-circle text-danger me-2"></i> <?= lang('Gits.registration.section_title') ?>
                        </h3>
                        
                        <div class="row g-4 mb-4">
                            <!-- Periode Pendaftaran -->
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="p-3 bg-light rounded-3 h-100 border-start border-primary border-4">
                                    <h5 class="fw-bold text-dark mb-2">
                                        <i class="fas fa-calendar-alt text-primary me-2"></i> <?= lang('Gits.registration.period_title') ?>
                                    </h5>
                                    <p class="text-muted mb-0 small">
                                        <?= lang('Gits.registration.period_desc') ?>
                                    </p>
                                </div>
                            </div>

                            <!-- Standar Internasional -->
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="p-3 bg-light rounded-3 h-100 border-start border-danger border-4">
                                    <h5 class="fw-bold text-dark mb-2">
                                        <i class="fas fa-globe text-danger me-2"></i> <?= lang('Gits.registration.quality_title') ?>
                                    </h5>
                                    <p class="text-muted mb-0 small">
                                        <?= lang('Gits.registration.quality_desc') ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Rincian Biaya & Beasiswa -->
                        <div class="alert alert-primary border-0 bg-opacity-10 text-dark p-4 rounded-4 mb-4" data-aos="fade-up" data-aos-delay="250">
                            <h5 class="fw-bold text-primary mb-3">
                                <i class="fas fa-calculator me-2"></i> <?= lang('Gits.registration.fee_title') ?>
                            </h5>
                            <p class="mb-3">
                                <?= lang('Gits.registration.fee_desc') ?>
                            </p>
                            <div class="row text-center g-3">
                                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="bg-white p-3 rounded-3 shadow-sm border">
                                        <span class="text-muted small d-block"><?= lang('Gits.registration.fee_bachelor') ?></span>
                                        <h4 class="fw-bold text-danger mb-0">Rp 30.000 <small class="fs-6 text-muted"><?= lang('Gits.registration.per_credit') ?></small></h4>
                                    </div>
                                </div>
                                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="350">
                                    <div class="bg-white p-3 rounded-3 shadow-sm border">
                                        <span class="text-muted small d-block"><?= lang('Gits.registration.fee_master') ?></span>
                                        <h4 class="fw-bold text-danger mb-0">Rp 60.000 <small class="fs-6 text-muted"><?= lang('Gits.registration.per_credit') ?></small></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="text-muted mb-0" data-aos="fade-up" data-aos-delay="400">
                            <?= lang('Gits.registration.scholarship_desc') ?>
                        </p>
                    </div>
                </div>

                <!-- Kontak Card -->
                <div class="card border-0 shadow-sm rounded-4 bg-white" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-body p-4 p-md-5 text-center">
                        <h4 class="fw-bold text-dark mb-3"><?= lang('Gits.registration.contact_title') ?></h4>
                        <p class="text-muted mb-4">
                            <?= lang('Gits.registration.contact_subtitle') ?>
                        </p>
                        
                        <div class="row justify-content-center text-start">
                            <div class="col-md-8 bg-light p-4 rounded-3 border">
                                <p class="mb-2">
                                    <i class="fas fa-map-marker-alt text-danger me-2 fa-fw"></i> 
                                    <strong><?= lang('Gits.registration.address_title') ?></strong><br>
                                    <span class="ms-4 text-muted"><?= lang('Gits.registration.address_sub') ?></span>
                                </p>
                                <p class="mb-0">
                                    <i class="fas fa-phone-alt text-danger me-2 fa-fw"></i> 
                                    <strong><?= lang('Gits.registration.phone_label') ?></strong> (62)-(21)-6471-4156
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>