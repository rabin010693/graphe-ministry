<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Gits.extension.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Gits.extension.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Gits.extension.hero_subtitle') ?></p>
    </div>
</header> -->


<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Gits.extension.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Gits.extension.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Gits.extension.hero_subtitle') ?></p>
    </div>
</header>


<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12">
                
                <!-- Main Info Card -->
                <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
                    <div class="card-body p-4 p-md-5">
                        
                        <h3 class="fw-bold text-dark mb-4 border-bottom pb-3">
                            <i class="fas fa-graduation-cap text-danger me-2"></i> <?= lang('Gits.extension.about_title') ?>
                        </h3>
                        
                        <p class="text-muted mb-3" data-aos="fade-up" data-aos-delay="100">
                            <?= lang('Gits.extension.about_p1') ?>
                        </p>
                        <p class="text-muted mb-4" data-aos="fade-up" data-aos-delay="150">
                            <?= lang('Gits.extension.about_p2') ?>
                        </p>

                        <!-- Highlight Solusi -->
                        <div class="p-4 bg-light rounded-3 border-start border-primary border-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <h5 class="fw-bold text-dark mb-2">
                                <i class="fas fa-video text-primary me-2"></i> <?= lang('Gits.extension.solution_title') ?>
                            </h5>
                            <p class="text-muted mb-0">
                                <?= lang('Gits.extension.solution_desc') ?>
                            </p>
                        </div>

                        <!-- Target Peserta -->
                        <h5 class="fw-bold text-dark mb-3" data-aos="fade-up" data-aos-delay="250"><?= lang('Gits.extension.target_title') ?></h5>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="p-3 bg-white border rounded-3 h-100 shadow-sm">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success fs-4 me-3"></i>
                                        <span class="text-dark small"><?= lang('Gits.extension.target_1') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="350">
                                <div class="p-3 bg-white border rounded-3 h-100 shadow-sm">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success fs-4 me-3"></i>
                                        <span class="text-dark small"><?= lang('Gits.extension.target_2') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ketentuan Akademis & Download PDF -->
                        <div class="alert alert-warning border-0 bg-opacity-10 text-dark p-4 rounded-4 mb-0" data-aos="fade-up" data-aos-delay="400">
                            <h6 class="fw-bold text-dark mb-2">
                                <i class="fas fa-exclamation-triangle text-warning me-2"></i> <?= lang('Gits.extension.academic_note_title') ?>
                            </h6>
                            <p class="small mb-3">
                                <?= lang('Gits.extension.academic_note_desc') ?>
                            </p>
                            <hr>
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
                                <span class="small text-muted"><?= lang('Gits.extension.download_info') ?></span>
                                <a href="#" class="btn btn-danger btn-sm px-4 py-2 rounded-pill shadow-sm">
                                    <i class="fas fa-file-pdf me-2"></i> <?= lang('Gits.extension.download_btn') ?>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Course List Card -->
                <div class="card border-0 shadow-sm rounded-4" data-aos="fade-up">
                    <div class="card-body p-4 p-md-5">
                        
                        <div class="d-flex align-items-center mb-4 border-bottom pb-3">
                            <i class="fas fa-book-open text-danger fs-3 me-3"></i>
                            <div>
                                <h3 class="fw-bold text-dark mb-1"><?= lang('Gits.extension.courses_title') ?></h3>
                                <p class="text-muted small mb-0"><?= lang('Gits.extension.courses_subtitle') ?></p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <!-- Item Course -->
                            <?php 
                            $courses = [
                                ["Soteriologi", "Dr. Suhento Liauw", "3 " . lang('Gits.extension.credits')],
                                ["Bibliologi", "Dr. Suhento Liauw", "3 " . lang('Gits.extension.credits')],
                                ["Ekklesiologi", "Dr. Suhento Liauw", "3 " . lang('Gits.extension.credits')],
                                ["Theologi Kontemporer", "Dr. Suhento Liauw", "2 " . lang('Gits.extension.credits')],
                                ["PAK 2", "Dr. Suhento Liauw", "2 " . lang('Gits.extension.credits')],
                                ["Eksegesis Kitab Keluaran", "Dr. Suhento Liauw", "3 " . lang('Gits.extension.credits')],
                                ["Eksegesis Kitab Kejadian", "Dr. Steven E. Liauw", "3 " . lang('Gits.extension.credits')],
                                ["Eksegesis Surat 1 Korintus", "Dr. Steven E. Liauw", "3 " . lang('Gits.extension.credits')],
                                ["Eksegesis Kitab Wahyu", "Dr. Steven E. Liauw", "3 " . lang('Gits.extension.credits')],
                                ["Bibliologi Tekstual", "Dr. Steven E. Liauw", "3 " . lang('Gits.extension.credits')],
                                ["Arkeologi 1", "Dr. Steven E. Liauw", "2 " . lang('Gits.extension.credits')],
                                ["Sejarah Baptis 1", "Kurnia Kristanto, S.Th.", "2 " . lang('Gits.extension.credits')],
                                ["Sejarah Baptis 2", "Kurnia Kristanto, S.Th.", "2 " . lang('Gits.extension.credits')],
                                ["Survey Doktrin", "Chandra Johan, M.B.S.", "3 " . lang('Gits.extension.credits')],
                            ];
                            
                            // Loop dengan memberikan delay bertingkat (misal: bertambah 50ms tiap item)
                            foreach($courses as $index => $course): 
                                $delay = ($index % 2 === 0) ? 100 : 150; // Mengatur delay dinamis agar tidak terlalu panjang
                            ?>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                                <div class="p-3 bg-light rounded-3 h-100 border d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="fw-bold text-dark mb-1"><?= $course[0] ?></h6>
                                        <small class="text-muted"><i class="fas fa-chalkboard-teacher me-1"></i> <?= $course[1] ?></small>
                                    </div>
                                    <span class="badge bg-warning bg-opacity-10 text-danger px-2 py-1 fw-semibold"><?= $course[2] ?></span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="text-center mt-4 pt-3 border-top" data-aos="fade-up">
                            <p class="text-muted small mb-0">
                                <i class="fas fa-info-circle me-1 text-danger"></i> <?= lang('Gits.extension.courses_footer') ?>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>