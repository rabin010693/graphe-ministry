<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Gits.seminar.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Gits.seminar.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Gits.seminar.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Intro Card -->
        <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                <h3 class="fw-bold text-dark mb-4 border-bottom pb-3">
                    <i class="fas fa-chalkboard-teacher text-danger me-2"></i> <?= lang('Gits.seminar.about_title') ?>
                </h3>
                
                <p class="text-muted mb-3">
                    <?= lang('Gits.seminar.about_p1') ?>
                </p>
                
                <p class="text-muted mb-3">
                    <?= lang('Gits.seminar.about_p2') ?>
                </p>

                <p class="text-muted mb-4">
                    <?= lang('Gits.seminar.about_p3') ?>
                </p>

                <!-- Call to Action Undangan Seminar -->
                <div class="p-4 bg-light rounded-3 border-start border-primary border-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="fw-bold text-dark mb-2">
                        <i class="fas fa-envelope-open-text text-primary me-2"></i> <?= lang('Gits.seminar.invite_title') ?>
                    </h5>
                    <p class="text-muted mb-3 small">
                        <?= lang('Gits.seminar.invite_desc') ?>
                    </p>
                    <a href="mailto:gits@graphe-ministry.org" class="btn btn-outline-primary btn-sm px-3 py-2 rounded-pill fw-semibold">
                        <i class="fas fa-paper-plane me-2"></i> gits@graphe-ministry.org
                    </a>
                </div>

                <!-- Topik Khusus Tahun Ini -->
                <h5 class="fw-bold text-dark mb-3" data-aos="fade-up" data-aos-delay="150"><?= lang('Gits.seminar.topics_title') ?></h5>
                <p class="text-muted mb-3" data-aos="fade-up" data-aos-delay="200">
                    <?= lang('Gits.seminar.topics_subtitle') ?>
                </p>
                <div class="row g-3 mb-0">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="p-3 bg-white border rounded-3 h-100 shadow-sm">
                            <h6 class="fw-bold text-danger mb-1"><i class="fas fa-book me-2"></i> <?= lang('Gits.seminar.topic_allah_title') ?></h6>
                            <p class="text-muted small mb-0"><?= lang('Gits.seminar.topic_allah_desc') ?></p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="p-3 bg-white border rounded-3 h-100 shadow-sm">
                            <h6 class="fw-bold text-danger mb-1"><i class="fas fa-music me-2"></i> <?= lang('Gits.seminar.topic_music_title') ?></h6>
                            <p class="text-muted small mb-0"><?= lang('Gits.seminar.topic_music_desc') ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Upcoming Schedule Table Card -->
        <div class="card border-0 shadow-sm rounded-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-4 border-bottom pb-3">
                    <i class="fas fa-calendar-alt text-danger fs-3 me-3"></i>
                    <div>
                        <h3 class="fw-bold text-dark mb-1"><?= lang('Gits.seminar.schedule_title') ?></h3>
                        <p class="text-muted small mb-0"><?= lang('Gits.seminar.schedule_subtitle') ?></p>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle border">
                        <thead class="table-danger text-dark">
                            <tr>
                                <th scope="col" class="py-3 px-3"><?= lang('Gits.seminar.col_topic') ?></th>
                                <th scope="col" class="py-3 px-3"><?= lang('Gits.seminar.col_time') ?></th>
                                <th scope="col" class="py-3 px-3"><?= lang('Gits.seminar.col_location') ?></th>
                                <th scope="col" class="py-3 px-3 text-center"><?= lang('Gits.seminar.col_status') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-3 py-3">
                                    <span class="fw-bold text-dark d-block"><?= lang('Gits.seminar.event1_title') ?></span>
                                    <small class="text-muted"><?= lang('Gits.seminar.event1_sub') ?></small>
                                </td>
                                <td class="px-3 py-3 text-nowrap">
                                    <i class="fas fa-clock text-success me-1"></i> <?= lang('Gits.seminar.event1_time') ?><br>
                                    <small class="text-muted"><?= lang('Gits.seminar.event1_hour') ?></small>
                                </td>
                                <td class="px-3 py-3">
                                    <i class="fas fa-map-marker-alt text-danger me-1"></i> <strong><?= lang('Gits.seminar.event1_venue') ?></strong><br>
                                    <small class="text-muted"><?= lang('Gits.seminar.event1_address') ?></small>
                                </td>
                                <td class="px-3 py-3 text-center">
                                    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 fw-semibold"><?= lang('Gits.seminar.event1_status') ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="alert alert-warning border-0 bg-opacity-10 text-dark p-3 rounded-3 mt-4 mb-0 small">
                    <i class="fas fa-info-circle text-danger me-2"></i> <?= lang('Gits.seminar.note_text') ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>