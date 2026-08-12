<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Gits.visimisi.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Gits.visimisi.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Gits.visimisi.hero_subtitle') ?></p>
    </div>
</header> -->


<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Gits.visimisi.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Gits.visimisi.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Gits.visimisi.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Pengantar Utama / Visi Misi Card dengan Logo di Tengah Kolom Kiri -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white border-top border-danger border-4">
                    <div class="row g-0 align-items-center">
                        <!-- Kolom Gambar / Logo -->
                        <div class="col-lg-5 d-flex align-items-center justify-content-center p-4">
                            <div class="text-center">
                                <img src="<?= base_url('assets/img/Logo-GITS_HD.jpg') ?>" alt="Logo GITS" class="img-fluid" style="max-height: 220px; object-fit: contain;">
                            </div>
                        </div>
                        <!-- Kolom Teks -->
                        <div class="col-lg-7">
                            <div class="p-4 p-md-5">
                                <div class="mb-3">
                                    <span class="text-danger fw-bold small text-uppercase tracking-wider"><?= lang('Gits.visimisi.section_subtitle') ?></span>
                                    <h2 class="fw-bold text-dark mt-2 mb-3"><?= lang('Gits.visimisi.section_title') ?></h2>
                                    <div class="bg-danger rounded mb-4" style="width: 60px; height: 3px;"></div>
                                </div>
                                
                                <div class="text-secondary" style="line-height: 1.9; font-size: 1.05rem;">
                                    <p class="mb-3">
                                        <?= lang('Gits.visimisi.p1') ?>
                                    </p>
                                    <p class="mb-0">
                                        <?= lang('Gits.visimisi.p2') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Perlengkapan (Pillars / Cards Grid) -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12">
                <div class="text-center mb-4" data-aos="fade-up">
                    <h3 class="fw-bold text-dark fs-3"><?= lang('Gits.visimisi.equip_title') ?></h3>
                    <p class="text-muted small"><?= lang('Gits.visimisi.equip_subtitle') ?></p>
                </div>
                
                <div class="row g-4">
                    <!-- Item 1 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white border-start border-danger border-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                                    <i class="bi bi-book-fill fs-5"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold text-dark mb-2"><?= lang('Gits.visimisi.equip1_title') ?></h5>
                                    <p class="text-secondary small mb-0" style="line-height: 1.7;"><?= lang('Gits.visimisi.equip1_desc') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white border-start border-danger border-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                                    <i class="bi bi-people-fill fs-5"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold text-dark mb-2"><?= lang('Gits.visimisi.equip2_title') ?></h5>
                                    <p class="text-secondary small mb-0" style="line-height: 1.7;"><?= lang('Gits.visimisi.equip2_desc') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white border-start border-danger border-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                                    <i class="bi bi-award-fill fs-5"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold text-dark mb-2"><?= lang('Gits.visimisi.equip3_title') ?></h5>
                                    <p class="text-secondary small mb-0" style="line-height: 1.7;"><?= lang('Gits.visimisi.equip3_desc') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white border-start border-danger border-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                                    <i class="bi bi-compass-fill fs-5"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold text-dark mb-2"><?= lang('Gits.visimisi.equip4_title') ?></h5>
                                    <p class="text-secondary small mb-0" style="line-height: 1.7;"><?= lang('Gits.visimisi.equip4_desc') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Komitmen Doktrin & Keahlian Praktis -->
        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                            <i class="bi bi-shield-check fs-5"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-4 mb-0"><?= lang('Gits.visimisi.commit_title') ?></h3>
                    </div>
                    <hr class="text-muted opacity-25 mb-4">
                    <div class="text-secondary" style="line-height: 1.9; font-size: 1.05rem;">
                        <p class="mb-3"><?= lang('Gits.visimisi.commit_p1') ?></p>
                        <p class="mb-3"><?= lang('Gits.visimisi.commit_p2') ?></p>
                        <p class="mb-0 text-dark fst-italic"><?= lang('Gits.visimisi.commit_quote') ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action / Kontak -->
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-12 text-center">
                <div class="p-4 bg-white rounded-4 shadow-sm border-start border-danger border-4 d-inline-block w-100">
                    <p class="mb-3 text-secondary fw-semibold"><?= lang('Gits.visimisi.cta_text') ?></p>
                    <a href="<?= base_url('contact') ?>" class="btn btn-danger px-4 py-2 rounded-pill fw-bold shadow-sm">
                        <i class="bi bi-telephone-fill me-2"></i> <?= lang('Gits.visimisi.cta_btn') ?>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection() ?>