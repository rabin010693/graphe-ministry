<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold"><?= lang('Gits.facilities.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2"><?= lang('Gits.facilities.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;"><?= lang('Gits.facilities.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Intro Card -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white text-center">
                    <h3 class="fw-bold text-danger mb-3"><?= lang('Gits.facilities.intro_title') ?></h3>
                    <p class="text-secondary mb-0" style="line-height: 1.8;">
                        <?= lang('Gits.facilities.intro_desc') ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- Facilities Grid Section -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12">
                <div class="row g-4">

                    <!-- 1. Dosen Berkualitas -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
                                    <i class="fas fa-chalkboard-teacher fa-lg"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0"><?= lang('Gits.facilities.lecturers_title') ?></h5>
                            </div>
                            <p class="text-secondary small mb-0">
                                <?= lang('Gits.facilities.lecturers_desc') ?>
                            </p>
                        </div>
                    </div>

                    <!-- 2. Gedung Kampus & Ruang Kelas -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
                                    <i class="fas fa-building fa-lg"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0"><?= lang('Gits.facilities.building_title') ?></h5>
                            </div>
                            <p class="text-secondary small mb-0">
                                <?= lang('Gits.facilities.building_desc') ?>
                            </p>
                        </div>
                    </div>

                    <!-- 3. Perpustakaan -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
                                    <i class="fas fa-book-reader fa-lg"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0"><?= lang('Gits.facilities.library_title') ?></h5>
                            </div>
                            <p class="text-secondary small mb-0">
                                <?= lang('Gits.facilities.library_desc') ?>
                            </p>
                        </div>
                    </div>

                    <!-- 4. Komputer & Internet -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
                                    <i class="fas fa-desktop fa-lg"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0"><?= lang('Gits.facilities.internet_title') ?></h5>
                            </div>
                            <p class="text-secondary small mb-0">
                                <?= lang('Gits.facilities.internet_desc') ?>
                            </p>
                        </div>
                    </div>

                    <!-- 5. Dapur & Ruang Makan -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
                                    <i class="fas fa-utensils fa-lg"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0"><?= lang('Gits.facilities.dining_title') ?></h5>
                            </div>
                            <p class="text-secondary small mb-0">
                                <?= lang('Gits.facilities.dining_desc') ?>
                            </p>
                        </div>
                    </div>

                    <!-- 6. Stasiun Radio RBK -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
                                    <i class="fas fa-broadcast-tower fa-lg"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0"><?= lang('Gits.facilities.radio_title') ?></h5>
                            </div>
                            <p class="text-secondary small mb-0">
                                <?= lang('Gits.facilities.radio_desc') ?>
                            </p>
                        </div>
                    </div>

                    <!-- 7. Asrama Mahasiswa (Full Width) -->
                    <div class="col-12">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-dark text-white">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 50px; height: 50px;">
                                            <i class="fas fa-bed fa-lg"></i>
                                        </div>
                                        <h5 class="fw-bold text-warning mb-0"><?= lang('Gits.facilities.dorm_title') ?></h5>
                                    </div>
                                    <p class="text-light opacity-85 small mb-0">
                                        <?= lang('Gits.facilities.dorm_desc') ?>
                                    </p>
                                </div>
                                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                    <span class="badge bg-light text-dark px-3 py-2 fw-semibold"><?= lang('Gits.facilities.dorm_badge') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>