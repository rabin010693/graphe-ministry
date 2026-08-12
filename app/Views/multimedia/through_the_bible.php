<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero pb-5 bg-primary text-white position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center pt-5 pb-5 position-relative">
        <div class="eyebrow mb-3 text-uppercase fw-semibold tracking-wider text-danger" data-aos="fade-down" data-aos-duration="800"><?= lang('Multimedia.through_the_bible.badge') ?></div>
        <h1 class="mx-auto text-white fw-bold" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Multimedia.through_the_bible.hero_title') ?></h1>
        <p class="lead text-light opacity-90 mx-auto" style="max-width: 650px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Multimedia.through_the_bible.hero_subtitle') ?></p>
    </div>
</header> -->

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Multimedia.through_the_bible.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Multimedia.through_the_bible.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Multimedia.through_the_bible.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    
    <div class="container">
        
        <!-- Bagian Pengantar / Deskripsi Program -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    <h2 class="h3 fw-bold text-dark mb-4 pb-2 border-bottom"><?= lang('Multimedia.through_the_bible.about_title') ?></h2>
                    <div class="text-secondary lh-lg mb-4">
                        <p class="mb-3">
                            <?= lang('Multimedia.through_the_bible.p1') ?>
                        </p>
                        <p class="mb-3">
                            <?= lang('Multimedia.through_the_bible.p2') ?>
                        </p>
                    </div>

                    <!-- Informasi Siaran Radio -->
                    <div class="p-3 bg-light rounded-3 border-start border-4 border-primary mt-3" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
                        <h6 class="fw-bold text-dark mb-2"><i class="bi bi-broadcast text-primary me-2"></i> <?= lang('Multimedia.through_the_bible.schedule_title') ?></h6>
                        <p class="text-secondary small mb-0">
                            <?= lang('Multimedia.through_the_bible.schedule_desc') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daftar Audio Khotbah & Download MP3 -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <!-- Deskripsi Singkat di Atas -->
                <p class="text-secondary small mb-3" data-aos="fade-up" data-aos-duration="800">
                    <?= lang('Multimedia.through_the_bible.list_desc') ?>
                </p>

                <!-- Header Judul & Badge -->
                <div class="d-flex align-items-center justify-content-between mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <h3 class="h4 fw-bold text-dark mb-0">
                        <?= lang('Multimedia.through_the_bible.list_title') ?>
                    </h3>
                    <span class="badge bg-primary rounded-pill px-3 py-2">
                        <?= lang('Multimedia.through_the_bible.list_badge') ?>
                    </span>
                </div>

                <div class="vstack gap-3">
            
                    <!-- Item 1 -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">1</div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.through_the_bible.items.matt_1') ?></h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.through_the_bible.speaker_prefix') ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                    <audio controls class="w-100" style="max-height: 40px;">
                                        <source src="<?= base_url('assets/audio/matt-1.mp3') ?>" type="audio/mpeg">
                                        <?= lang('Multimedia.through_the_bible.unsupported') ?>
                                    </audio>
                                    <a href="<?= base_url('assets/audio/matt-1.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                        <i class="bi bi-download me-1"></i> <?= lang('Multimedia.through_the_bible.download_btn') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">2</div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.through_the_bible.items.matt_2') ?></h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.through_the_bible.speaker_prefix') ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                    <audio controls class="w-100" style="max-height: 40px;">
                                        <source src="<?= base_url('assets/audio/matt-2.mp3') ?>" type="audio/mpeg">
                                        <?= lang('Multimedia.through_the_bible.unsupported') ?>
                                    </audio>
                                    <a href="<?= base_url('assets/audio/matt-2.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                        <i class="bi bi-download me-1"></i> <?= lang('Multimedia.through_the_bible.download_btn') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">3</div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.through_the_bible.items.john_1') ?></h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.through_the_bible.speaker_prefix') ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                    <audio controls class="w-100" style="max-height: 40px;">
                                        <source src="<?= base_url('assets/audio/john-1.mp3') ?>" type="audio/mpeg">
                                        <?= lang('Multimedia.through_the_bible.unsupported') ?>
                                    </audio>
                                    <a href="<?= base_url('assets/audio/john-1.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                        <i class="bi bi-download me-1"></i> <?= lang('Multimedia.through_the_bible.download_btn') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">4</div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.through_the_bible.items.rev_1') ?></h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.through_the_bible.speaker_prefix') ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                    <audio controls class="w-100" style="max-height: 40px;">
                                        <source src="<?= base_url('assets/audio/rev-1.mp3') ?>" type="audio/mpeg">
                                        <?= lang('Multimedia.through_the_bible.unsupported') ?>
                                    </audio>
                                    <a href="<?= base_url('assets/audio/rev-1.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                        <i class="bi bi-download me-1"></i> <?= lang('Multimedia.through_the_bible.download_btn') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Kotak Informasi Pemesanan CD -->
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="zoom-in" data-aos-duration="900">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-dark text-white">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-8">
                            <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold rounded-pill"><?= lang('Multimedia.through_the_bible.full_set_badge') ?></span>
                            <h4 class="fw-bold mb-3"><?= lang('Multimedia.through_the_bible.full_set_title') ?></h4>
                            <p class="text-light opacity-85 mb-0">
                                <?= lang('Multimedia.through_the_bible.full_set_desc') ?>
                            </p>
                        </div>
                        <div class="col-lg-4 border-start-lg border-secondary ps-lg-4">
                            <h5 class="fw-bold text-warning mb-2"><?= lang('Multimedia.through_the_bible.store_name') ?></h5>
                            <p class="small text-light opacity-85 mb-2">
                                <?= lang('Multimedia.through_the_bible.store_address') ?>
                            </p>
                            <p class="small text-light opacity-85 mb-0">
                                <i class="bi bi-telephone-fill text-warning me-2"></i> <?= lang('Multimedia.through_the_bible.store_phone') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection() ?>