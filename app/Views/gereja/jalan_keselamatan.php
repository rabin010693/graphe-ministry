<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Church.salvation.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Church.salvation.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Church.salvation.hero_subtitle') ?></p>
    </div>
</header> -->

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Church.salvation.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Church.salvation.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Church.salvation.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Intro Card / Pengantar Utama -->
        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white border-top border-danger border-4">
                    <div class="text-center mb-4">
                        <i class="bi bi-book-half text-danger display-5"></i>
                        <h2 class="fw-bold text-dark mt-3 mb-2"><?= lang('Church.salvation.hero_title') ?></h2>
                        <div class="mx-auto bg-danger rounded" style="width: 60px; height: 3px;"></div>
                    </div>
                    
                    <div class="text-secondary" style="line-height: 1.9; font-size: 1.05rem;">
                        <p class="mb-3"><?= lang('Church.salvation.intro.p1') ?></p>
                        <p class="mb-3"><?= lang('Church.salvation.intro.p2') ?></p>
                        <p class="mb-3"><?= lang('Church.salvation.intro.p3') ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Section with Cards -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12">
                
                <!-- Poin 1 -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-4 mb-4 bg-white" data-aos="fade-up" data-aos-delay="100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                            <i class="bi bi-globe fs-5"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-4 mb-0"><?= lang('Church.salvation.points.point1_title') ?></h3>
                    </div>
                    <div class="text-secondary ps-0 ps-md-5" style="line-height: 1.8;">
                        <p class="mb-3"><?= lang('Church.salvation.points.point1_p1') ?></p>
                        <p class="mb-0"><?= lang('Church.salvation.points.point1_p2') ?></p>
                    </div>
                </div>

                <!-- Poin 2 -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-4 mb-4 bg-white" data-aos="fade-up" data-aos-delay="150">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                            <i class="bi bi-shield-exclamation fs-5"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-4 mb-0"><?= lang('Church.salvation.points.point2_title') ?></h3>
                    </div>
                    <div class="text-secondary ps-0 ps-md-5" style="line-height: 1.8;">
                        <p class="mb-3"><?= lang('Church.salvation.points.point2_p1') ?></p>
                        <p class="mb-0"><?= lang('Church.salvation.points.point2_p2') ?></p>
                    </div>
                </div>

                <!-- Poin 3 -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-4 mb-4 bg-white" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                            <i class="bi bi-person-exclamation fs-5"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-4 mb-0"><?= lang('Church.salvation.points.point3_title') ?></h3>
                    </div>
                    <div class="text-secondary ps-0 ps-md-5" style="line-height: 1.8;">
                        <p class="mb-0"><?= lang('Church.salvation.points.point3_p1') ?></p>
                    </div>
                </div>

                <!-- Poin 4 -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-4 mb-4 bg-white" data-aos="fade-up" data-aos-delay="250">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                            <i class="bi bi-lightbulb fs-5"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-4 mb-0"><?= lang('Church.salvation.points.point4_title') ?></h3>
                    </div>
                    <div class="text-secondary ps-0 ps-md-5" style="line-height: 1.8;">
                        <p class="mb-3"><?= lang('Church.salvation.points.point4_p1') ?></p>
                        <p class="mb-3"><?= lang('Church.salvation.points.point4_p2') ?></p>
                        <p class="mb-3"><?= lang('Church.salvation.points.point4_p3') ?></p>
                        <p class="mb-3"><?= lang('Church.salvation.points.point4_p4') ?></p>
                        <p class="mb-0"><?= lang('Church.salvation.points.point4_p5') ?></p>
                    </div>
                </div>

                <!-- Poin 5 -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-4 mb-4 bg-white" data-aos="fade-up" data-aos-delay="300">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                            <i class="bi bi-heart-fill fs-5"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-4 mb-0"><?= lang('Church.salvation.points.point5_title') ?></h3>
                    </div>
                    <div class="text-secondary ps-0 ps-md-5" style="line-height: 1.8;">
                        <p class="mb-3"><?= lang('Church.salvation.points.point5_p1') ?></p>
                        <p class="mb-0"><?= lang('Church.salvation.points.point5_p2') ?></p>
                    </div>
                </div>

                <!-- Poin 6 / Call to Action -->
                <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5 bg-white border-start border-danger border-5" data-aos="fade-up" data-aos-delay="350">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 45px; height: 45px; min-width: 45px;">
                            <i class="bi bi-flag-fill fs-5"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-4 mb-0"><?= lang('Church.salvation.points.point6_title') ?></h3>
                    </div>
                    <div class="text-secondary ps-0 ps-md-5" style="line-height: 1.8;">
                        <p class="mb-0"><?= lang('Church.salvation.points.point6_p1') ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content') ?>