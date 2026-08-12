<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Downloads.sermons.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Downloads.sermons.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Downloads.sermons.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Intro Card -->
        <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-3 border-bottom pb-3" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-headphones-alt text-primary fs-3 me-3"></i>
                    <div>
                        <h3 class="fw-bold text-dark mb-1"><?= lang('Downloads.sermons.archive_title') ?></h3>
                        <p class="text-muted small mb-0"><?= lang('Downloads.sermons.archive_sub') ?></p>
                    </div>
                </div>
                <p class="text-muted mb-0" data-aos="fade-up" data-aos-delay="150">
                    <?= lang('Downloads.sermons.archive_desc') ?>
                </p>
            </div>
        </div>

        <!-- Kebaktian Pagi Card -->
        <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-4 border-bottom pb-3" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-church text-danger fs-3 me-3"></i>
                    <div>
                        <h4 class="fw-bold text-dark mb-1"><?= lang('Downloads.sermons.morning_service_title') ?></h4>
                        <p class="text-muted small mb-0"><?= lang('Downloads.sermons.morning_service_sub') ?></p>
                    </div>
                </div>

                <div class="list-group list-group-flush border rounded-3 overflow-hidden shadow-sm" data-aos="fade-up" data-aos-delay="150">
                    <?php 
                    $khotbah_pagi = [
                        [lang('Downloads.sermons.items.church_positions'), "Dr. Suhento Liauw", "5 Juni 2011", "#"],
                        [lang('Downloads.sermons.items.abide_in_christ'), "Dr. Steven Liauw", "12 Juni 2011", "#"],
                        [lang('Downloads.sermons.items.pillar_of_truth'), "Dr. Suhento Liauw", "19 Juni 2011", "#"],
                        [lang('Downloads.sermons.items.paul_secrets'), "dr. Andrew", "3 Juli 2011", "#"],
                        [lang('Downloads.sermons.items.ephesus_letter'), "Dr. Steven Liauw", "10 Juli 2011", "#"],
                        [lang('Downloads.sermons.items.new_creation'), "Dr. Suhento Liauw", "17 Juli 2011", "#"],
                        [lang('Downloads.sermons.items.lords_steward'), "dr. Andrew Liauw", "24 Juli 2011", "#"],
                        [lang('Downloads.sermons.items.lovers_challenge'), "Dr. Steven Liauw", "31 Juli 2011", "#"],
                        [lang('Downloads.sermons.items.god_word_message'), "Dr. Suhento Liauw", "7 Agustus 2011", "#"],
                        [lang('Downloads.sermons.items.faithful_unto_death'), "Dr. Steven E. Liauw", "14 Agustus 2011", "#"],
                        [lang('Downloads.sermons.items.god_word_message'), "Pastor Roger Tooley", "21 Agustus 2011", "#"],
                        [lang('Downloads.sermons.items.god_word_message'), "Dr. Suhento Liauw", "28 Agustus 2011", "#"],
                        [lang('Downloads.sermons.items.god_word_message'), "dr. Andrew Liauw", "4 September 2011", "#"],
                        [lang('Downloads.sermons.items.god_word_message'), "Dr. Suhento Liauw", "11 September 2011", "#"],
                        [lang('Downloads.sermons.items.different_perspective'), "Dr. Steven E. Liauw", "18 September 2011", "#"],
                        [lang('Downloads.sermons.items.god_word_message'), "Bpk. James Hatalaibessy", "25 September 2011", "#"]
                    ];

                    $delay = 200;
                    foreach($khotbah_pagi as $k): 
                    ?>
                    <div class="list-group-item list-group-item-action p-3 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="d-flex align-items-start">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-2 me-3 text-center fw-bold small flex-shrink-0" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-file-audio"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-danger mb-1"><?= $k[0] ?></h6>
                                <p class="text-muted small mb-0">
                                    <i class="fas fa-user-tie me-1"></i> <?= $k[1] ?> &bull; <i class="far fa-calendar-alt ms-1 me-1"></i> <?= $k[2] ?>
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="<?= $k[3] ?>" class="btn btn-outline-primary btn-sm px-3 rounded-pill fw-semibold text-nowrap">
                                <i class="fas fa-download me-1"></i> <?= lang('Downloads.sermons.download_mp3') ?>
                            </a>
                        </div>
                    </div>
                    <?php 
                        if ($delay < 400) {
                            $delay += 25;
                        }
                    endforeach; 
                    ?>
                </div>

            </div>
        </div>

        <!-- Info Catatan Kualitas Audio -->
        <div class="alert alert-warning border-0 bg-opacity-10 text-dark p-4 rounded-4 shadow-sm mb-0" data-aos="fade-up">
            <div class="d-flex">
                <i class="fas fa-info-circle text-warning fs-4 me-3 mt-1" data-aos="fade-up" data-aos-delay="100"></i>
                <div>
                    <h6 class="fw-bold text-dark mb-2" data-aos="fade-up" data-aos-delay="150"><?= lang('Downloads.sermons.audio_info_title') ?></h6>
                    <p class="small text-muted mb-0" data-aos="fade-up" data-aos-delay="200">
                        <?= lang('Downloads.sermons.audio_info_desc') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>