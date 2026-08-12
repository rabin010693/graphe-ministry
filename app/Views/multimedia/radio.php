<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase"><?= lang('Multimedia.radio.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;"><?= lang('Multimedia.radio.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;"><?= lang('Multimedia.radio.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <!-- Kolom Kiri: Deskripsi & Visi Misi Radio Berita Klasik -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 h-100 bg-white">
                    
                    <!-- Header Profil Radio -->
                    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 pb-3 border-bottom">
                        <div>
                            <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill fw-bold mb-2">
                                <i class="fas fa-broadcast-tower me-1"></i> <?= lang('Multimedia.radio.station_freq') ?>
                            </span>
                            <h2 class="h3 fw-bold text-dark mb-0"><?= lang('Multimedia.radio.about_title') ?></h2>
                        </div>
                    </div>
                    
                    <!-- Paragraf Deskripsi & Latar Belakang -->
                    <div class="text-secondary lh-lg mb-4">
                        <p class="mb-3">
                            <?= lang('Multimedia.radio.p1') ?>
                        </p>
                        <p class="mb-3">
                            <?= lang('Multimedia.radio.p2') ?>
                        </p>
                        <p class="mb-3">
                            <?= lang('Multimedia.radio.p3') ?>
                        </p>
                    </div>

                    <!-- Box Informasi Jangkauan -->
                    <div class="p-4 bg-light rounded-4 border-start border-4 border-danger mb-4 shadow-sm">
                        <h5 class="fw-bold text-dark mb-2">
                            <i class="fas fa-satellite-dish me-2 text-danger"></i><?= lang('Multimedia.radio.coverage_title') ?>
                        </h5>
                        <p class="text-secondary mb-0">
                            <?= lang('Multimedia.radio.coverage_desc') ?>
                        </p>
                    </div>
                    
                    <!-- Call to Action (CTA) Program Radio -->
                    <div class="p-4 bg-danger-subtle rounded-4 border border-danger-subtle text-center text-md-start d-md-flex justify-content-between align-items-center mt-4">
                        <div class="mb-3 mb-md-0">
                            <h6 class="fw-bold text-dark mb-1"><?= lang('Multimedia.radio.cta_title') ?></h6>
                            <p class="text-secondary small mb-0"><?= lang('Multimedia.radio.cta_desc') ?></p>
                        </div>
                        <a href="<?= base_url('multimedia/program_rbk') ?>" class="btn btn-danger px-4 py-2 rounded-pill fw-semibold shadow-sm text-nowrap">
                            <i class="fas fa-headphones-alt me-2"></i> <?= lang('Multimedia.radio.cta_btn') ?>
                        </a>
                    </div>

                </div>
            </div>
        
            <!-- Kolom Kanan: Informasi & Kontak (Sidebar) -->
            <div class="col-lg-4">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white mb-4">
                    <img src="<?= base_url('assets/img/radio_station.png') ?>" class="card-img-top object-fit-cover" style="height: 400px;" alt="Informasi Stasiun Radio RBK">
                </div>

                <div class="card border-0 shadow-sm rounded-4 p-4 bg-white mb-4">
                    <h4 class="h5 fw-bold text-dark mb-3 pb-2 border-bottom"><?= lang('Multimedia.radio.info_title') ?></h4>
                    <ul class="list-unstyled text-secondary mb-0 small">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-tag-fill text-primary me-3 fs-5"></i>
                            <div>
                                <span class="d-block fw-semibold text-dark"><?= lang('Multimedia.radio.info_station') ?></span>
                                <?= lang('Multimedia.radio.info_station_val') ?>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-calendar-check-fill text-primary me-3 fs-5"></i>
                            <div>
                                <span class="d-block fw-semibold text-dark"><?= lang('Multimedia.radio.info_established') ?></span>
                                <?= lang('Multimedia.radio.info_established_val') ?>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-geo-alt-fill text-primary me-3 fs-5"></i>
                            <div>
                                <span class="d-block fw-semibold text-dark"><?= lang('Multimedia.radio.info_address') ?></span>
                                <?= lang('Multimedia.radio.info_address_val') ?>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Kartu Kontak & Marketing -->
                <div class="card border-0 shadow-sm rounded-4 p-4 bg-danger text-white">
                    <h4 class="h5 fw-bold mb-3 pb-2 border-bottom border-light opacity-75"><?= lang('Multimedia.radio.contact_title') ?></h4>
                    <ul class="list-unstyled mb-0 small">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-telephone-fill me-3 fs-5 text-warning"></i>
                            <div>
                                <span class="d-block opacity-75"><?= lang('Multimedia.radio.phone') ?></span>
                                <span class="fw-semibold">(021) 6471-7433</span>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-envelope-fill me-3 fs-5 text-warning"></i>
                            <div>
                                <span class="d-block opacity-75"><?= lang('Multimedia.radio.email') ?></span>
                                <span class="fw-semibold">rbk@graphe-ministry.org</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="bi bi-whatsapp me-3 fs-5 text-warning"></i>
                            <div>
                                <span class="d-block opacity-75"><?= lang('Multimedia.radio.marketing') ?></span>
                                <span class="fw-semibold">0856-751-6052 <br><small class="opacity-75">(dr. Andrew M. Liauw, S.Ked.)</small></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>