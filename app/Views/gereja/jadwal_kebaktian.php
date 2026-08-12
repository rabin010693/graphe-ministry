<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Church.schedule.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Church.schedule.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Church.schedule.hero_subtitle') ?></p>
    </div>
</header> -->

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Church.schedule.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Church.schedule.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Church.schedule.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Bagian Jadwal Kebaktian -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="text-danger fw-bold small text-uppercase tracking-wider"><?= lang('Church.schedule.section_subtitle') ?></span>
                    <h2 class="fw-bold text-dark display-6 mb-2"><?= lang('Church.schedule.section_title') ?></h2>
                    <div class="mx-auto bg-danger rounded" style="width: 60px; height: 3px;"></div>
                </div>

                <div class="row g-4">
                    
                    <!-- Hari Minggu -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card border-0 shadow-sm rounded-4 h-100 bg-white overflow-hidden border-top border-danger border-4">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                                        <i class="bi bi-calendar-check fs-5"></i>
                                    </div>
                                    <h3 class="fw-bold text-dark fs-4 mb-0"><?= lang('Church.schedule.days.sunday') ?></h3>
                                </div>
                                <hr class="text-muted opacity-25 mb-3">
                                <ul class="list-unstyled mb-0 text-secondary" style="line-height: 1.8;">
                                    <li class="mb-3">
                                        <span class="badge bg-light text-danger border border-danger fw-bold mb-1">08:00 – 08:45</span><br>
                                        <strong><?= lang('Church.schedule.sunday_items.choir') ?></strong>
                                    </li>
                                    <li class="mb-3">
                                        <span class="badge bg-light text-danger border border-danger fw-bold mb-1">09:00 – 10:00</span><br>
                                        <strong><?= lang('Church.schedule.sunday_items.sunday_school') ?></strong><br>
                                        <small class="text-muted"><?= lang('Church.schedule.sunday_items.for_all') ?></small>
                                    </li>
                                    <li class="mb-3">
                                        <span class="badge bg-light text-danger border border-danger fw-bold mb-1">10:00 – 11:30</span><br>
                                        <strong><?= lang('Church.schedule.sunday_items.morning') ?></strong>
                                    </li>
                                    <li>
                                        <span class="badge bg-light text-danger border border-danger fw-bold mb-1">17:00 – 18:30</span><br>
                                        <strong><?= lang('Church.schedule.sunday_items.evening') ?></strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Hari Rabu -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card border-0 shadow-sm rounded-4 h-100 bg-white overflow-hidden border-top border-danger border-4">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                                        <i class="bi bi-book fs-5"></i>
                                    </div>
                                    <h3 class="fw-bold text-dark fs-4 mb-0"><?= lang('Church.schedule.days.wednesday') ?></h3>
                                </div>
                                <hr class="text-muted opacity-25 mb-3">
                                <ul class="list-unstyled mb-0 text-secondary" style="line-height: 1.8;">
                                    <li>
                                        <span class="badge bg-light text-danger border border-danger fw-bold mb-1">19:00 – 20:30</span><br>
                                        <strong><?= lang('Church.schedule.wednesday_items.prayer') ?></strong><br>
                                        <small class="text-muted"><?= lang('Church.schedule.wednesday_items.desc') ?></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Hari Sabtu -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card border-0 shadow-sm rounded-4 h-100 bg-white overflow-hidden border-top border-danger border-4">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                                        <i class="bi bi-people fs-5"></i>
                                    </div>
                                    <h3 class="fw-bold text-dark fs-4 mb-0"><?= lang('Church.schedule.days.saturday') ?></h3>
                                </div>
                                <hr class="text-muted opacity-25 mb-3">
                                <ul class="list-unstyled mb-0 text-secondary" style="line-height: 1.8;">
                                    <li>
                                        <span class="badge bg-light text-danger border border-danger fw-bold mb-1">16:00 – 17:30</span><br>
                                        <strong><?= lang('Church.schedule.saturday_items.fellowship') ?></strong><br>
                                        <small class="text-muted"><?= lang('Church.schedule.saturday_items.desc') ?></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Info Tambahan Buletin -->
                <div class="mt-4 p-3 bg-white rounded-4 shadow-sm text-center border-start border-danger border-4" data-aos="fade-up" data-aos-delay="400">
                    <p class="mb-0 text-secondary small">
                        <i class="bi bi-info-circle-fill text-danger me-1"></i> <?= lang('Church.schedule.bulletin_info') ?>
                    </p>
                </div>

            </div>
        </div>

        <!-- Bagian Tempat Kebaktian & Lokasi -->
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    <div class="row align-items-center">
                        
                        <!-- Kolom Teks Informasi Lokasi -->
                        <div class="col-lg-7 mb-4 mb-lg-0">
                            <span class="text-danger fw-bold small text-uppercase tracking-wider"><?= lang('Church.schedule.location.badge') ?></span>
                            <h3 class="fw-bold text-dark mb-3"><?= lang('Church.schedule.location.title') ?></h3>
                            <p class="text-secondary mb-4" style="line-height: 1.8;">
                                <?= lang('Church.schedule.location.desc') ?>
                            </p>
                            <div class="d-flex align-items-start">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 40px; height: 40px; min-width: 40px;">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-dark mb-1"><?= lang('Church.schedule.location.name') ?></h6>
                                    <p class="text-muted mb-0 small" style="line-height: 1.6;">
                                        <?= lang('Church.schedule.location.address') ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Kolom Google Maps Embed -->
                        <div class="col-lg-5">
                            <div class="rounded-4 overflow-hidden shadow-sm" style="min-height: 300px; height: 100%;">
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6974244249337!2d106.853245!3d-6.13175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1f8101484b3f%3A0x8e8e7a8e8e8e8e8e!2sJl.%20Danau%20Agung%202%2C%20Sunter%20Agung%2C%20Kec.%20Kebayoran%20Baru%2C%20Kota%20Jkt%20Utara!5e0!3m2!1sid!2sid!4v1234567890!5m2!1sid!2sid" 
                                    width="100%" 
                                    height="100%" 
                                    style="border:0; min-height: 300px;" 
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

    </div>
</section>

<?= $this->endSection('content') ?>