<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Orphanage.donation.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Orphanage.donation.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Orphanage.donation.hero_subtitle') ?></p>
    </div>
</header> -->


<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Orphanage.donation.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Orphanage.donation.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Orphanage.donation.hero_subtitle') ?></p>
    </div>
</header>


<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Card Pengantar & Cara Membantu -->
        <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-4 border-bottom pb-3" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-hand-holding-heart text-danger fs-3 me-3"></i>
                    <div>
                        <h3 class="fw-bold text-dark mb-1"><?= lang('Orphanage.donation.support_title') ?></h3>
                        <p class="text-muted small mb-0"><?= lang('Orphanage.donation.support_sub') ?></p>
                    </div>
                </div>

                <p class="text-muted mb-4" data-aos="fade-up" data-aos-delay="150">
                    <?= lang('Orphanage.donation.support_desc') ?>
                </p>

                <h5 class="fw-bold text-dark mb-3" data-aos="fade-up" data-aos-delay="200"><?= lang('Orphanage.donation.ways_title') ?></h5>
                <div class="row g-3 mb-4">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="p-3 bg-light rounded-3 h-100 border-start border-primary border-4">
                            <h6 class="fw-bold text-dark mb-1"><i class="fas fa-pray text-primary me-2"></i> <?= lang('Orphanage.donation.way_pray_title') ?></h6>
                            <p class="text-muted small mb-0"><?= lang('Orphanage.donation.way_pray_desc') ?></p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="p-3 bg-light rounded-3 h-100 border-start border-success border-4">
                            <h6 class="fw-bold text-dark mb-1"><i class="fas fa-hands-helping text-success me-2"></i> <?= lang('Orphanage.donation.way_visit_title') ?></h6>
                            <p class="text-muted small mb-0"><?= lang('Orphanage.donation.way_visit_desc') ?></p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="p-3 bg-light rounded-3 h-100 border-start border-warning border-4">
                            <h6 class="fw-bold text-dark mb-1"><i class="fas fa-box-open text-warning me-2"></i> <?= lang('Orphanage.donation.way_items_title') ?></h6>
                            <p class="text-muted small mb-0"><?= lang('Orphanage.donation.way_items_desc') ?></p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="p-3 bg-light rounded-3 h-100 border-start border-danger border-4">
                            <h6 class="fw-bold text-dark mb-1"><i class="fas fa-donate text-danger me-2"></i> <?= lang('Orphanage.donation.way_funds_title') ?></h6>
                            <p class="text-muted small mb-0"><?= lang('Orphanage.donation.way_funds_desc') ?></p>
                        </div>
                    </div>
                </div>

                <div class="alert alert-primary border-0 bg-opacity-10 text-dark p-3 rounded-3 mb-0 small" data-aos="fade-up" data-aos-delay="450">
                    <i class="fas fa-info-circle text-primary me-2"></i> <?= lang('Orphanage.donation.appreciation') ?>
                </div>
            </div>
        </div>

        <!-- Card Informasi Rekening Bank -->
        <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-4 border-bottom pb-3" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-university text-danger fs-3 me-3"></i>
                    <div>
                        <h3 class="fw-bold text-dark mb-1"><?= lang('Orphanage.donation.bank_title') ?></h3>
                        <p class="text-muted small mb-0"><?= lang('Orphanage.donation.bank_sub') ?></p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Bank BCA -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="p-4 bg-white rounded-3 border shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3">
                                <div class="text-white fw-bold px-3 py-1 rounded-pill small" style="background-color:#0066AE;">BCA</div>
                            </div>
                            <h4 class="fw-bold text-dark mb-1">007 36 3131 6</h4>
                            <p class="text-muted small mb-2"><strong><?= lang('Orphanage.donation.account_owner') ?></strong> Yayasan PEKA (PEKA Foundation)</p>
                            <hr class="my-2">
                            <p class="text-muted small mb-1"><strong>Swift Code:</strong> CENAIDJA</p>
                            <p class="text-muted small mb-0"><strong><?= lang('Orphanage.donation.branch_office') ?></strong> BCA Sunter Mall (Jl. Danau Sunter Utara Blok G-7 III No. 1-2, Jakarta 14350)</p>
                        </div>
                    </div>

                    <!-- Bank Mandiri -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="p-4 bg-white rounded-3 border shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3">
                                <div class="text-white fw-bold px-3 py-1 rounded-pill small" style="background-color:#EA7200;">Mandiri</div>
                            </div>
                            <h4 class="fw-bold text-dark mb-1">120 009 80 80 786</h4>
                            <p class="text-muted small mb-2"><strong><?= lang('Orphanage.donation.account_owner') ?></strong> Yayasan PEKA (PEKA Foundation)</p>
                            <hr class="my-2">
                            <p class="text-muted small mb-1"><strong>Swift Code:</strong> BEIIIDJA</p>
                            <p class="text-muted small mb-0"><strong><?= lang('Orphanage.donation.branch_office') ?></strong> Sunter Paradis</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Card Kunjungi Kami -->
        <div class="card border-0 shadow-sm rounded-4 bg-dark text-warning overflow-hidden" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                <div class="row align-items-center g-4">
                    
                    <!-- Kolom Kiri: Alamat & Kontak -->
                    <div class="col-lg-6 text-center text-lg-start" data-aos="fade-right" data-aos-delay="150">
                        <span class="badge bg-warning text-dark px-3 py-2 mb-3 fw-semibold">
                            <i class="fas fa-map-marker-alt me-1"></i> <?= lang('Orphanage.donation.visit_badge') ?>
                        </span>
                        <h3 class="fw-bold mb-3 text-white"><?= lang('Orphanage.donation.visit_title') ?></h3>
                        <p class="text-white-50 mb-4" style="max-width: 450px;">
                            <strong class="text-warning"><?= lang('Orphanage.donation.address_name') ?></strong><br>
                            <?= lang('Orphanage.donation.address_full') ?>
                        </p>
                        <div>
                            <div class="d-inline-flex align-items-center bg-white text-dark px-4 py-2 rounded-pill shadow-sm fw-semibold">
                                <i class="fas fa-phone-alt text-danger me-2"></i> <?= lang('Orphanage.donation.phone_label') ?> (021)-6471-4540
                            </div>
                        </div>
                    </div>

                    <!-- Kolom Kanan: Google Maps -->
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                        <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-sm border border-secondary border-opacity-25">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666333907293!2d106.877846!3d-6.134887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1fa23b6b14f7%3A0x8e8312e4f07a71a!2sJl.%20Danau%20Agung%202%20No.7%2C%20RT.10%2FRW.11%2C%20Sunter%20Agung%2C%20Kec.%20Tj.%20Priok%2C%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2014350!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>