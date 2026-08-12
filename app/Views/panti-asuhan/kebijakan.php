<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Orphanage.policy.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Orphanage.policy.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Orphanage.policy.hero_subtitle') ?></p>
    </div>
</header> -->

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Orphanage.policy.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Orphanage.policy.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Orphanage.policy.hero_subtitle') ?></p>
    </div>
</header>


<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Card Pengantar Kebijakan -->
        <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-4 border-bottom pb-3" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-file-contract text-danger fs-3 me-3"></i>
                    <div>
                        <h3 class="fw-bold text-dark mb-1"><?= lang('Orphanage.policy.admission_title') ?></h3>
                        <p class="text-muted small mb-0"><?= lang('Orphanage.policy.admission_sub') ?></p>
                    </div>
                </div>

                <p class="text-muted mb-4" data-aos="fade-up" data-aos-delay="150">
                    <?= lang('Orphanage.policy.admission_intro') ?>
                </p>

                <p class="text-muted mb-3" data-aos="fade-up" data-aos-delay="200">
                    <?= lang('Orphanage.policy.admission_prio') ?>
                </p>

                <!-- Daftar Prioritas dalam Bentuk List Modern -->
                <div class="row g-3 mb-4">
                    <?php 
                    $policies = [
                        ["1", lang('Orphanage.policy.p1')],
                        ["2", lang('Orphanage.policy.p2')],
                        ["3", lang('Orphanage.policy.p3')],
                        ["4", lang('Orphanage.policy.p4')],
                        ["5", lang('Orphanage.policy.p5')],
                        ["6", lang('Orphanage.policy.p6')]
                    ];
                    $delay = 250;
                    foreach($policies as $p):
                    ?>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="p-3 bg-light rounded-3 h-100 border d-flex align-items-start">
                            <div class="bg-danger text-white rounded-circle fw-bold me-3 text-center flex-shrink-0" style="width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; font-size: 0.9rem;">
                                <?= $p[0] ?>
                            </div>
                            <div>
                                <p class="text-dark small mb-0 fw-semibold"><?= $p[1] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $delay += 50;
                    endforeach; 
                    ?>
                </div>

            </div>
        </div>

        <!-- Card Visi & Buah Pelayanan -->
        <div class="card border-0 shadow-sm rounded-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-4 border-bottom pb-3" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-heart text-danger fs-3 me-3"></i>
                    <div>
                        <h3 class="fw-bold text-dark mb-1"><?= lang('Orphanage.policy.fruit_title') ?></h3>
                        <p class="text-muted small mb-0"><?= lang('Orphanage.policy.fruit_sub') ?></p>
                    </div>
                </div>

                <p class="text-muted mb-3" data-aos="fade-up" data-aos-delay="150">
                    <?= lang('Orphanage.policy.fruit_desc') ?>
                </p>

                <div class="p-4 bg-primary bg-opacity-10 rounded-3 border-0 text-dark mb-4" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="fw-bold text-primary mb-2">
                        <i class="fas fa-cross me-2"></i> <?= lang('Orphanage.policy.goal_title') ?>
                    </h5>
                    <p class="text-muted small mb-0">
                        <?= lang('Orphanage.policy.goal_desc') ?>
                    </p>
                </div>

                <p class="text-muted mb-0" data-aos="fade-up" data-aos-delay="250">
                    <?= lang('Orphanage.policy.gratitude_desc') ?>
                </p>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>