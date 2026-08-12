<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Multimedia.pearls_of_truth.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Multimedia.pearls_of_truth.hero_title') ?></h1>
        <p class="lead text-light opacity-90 mx-auto" style="max-width: 650px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Multimedia.pearls_of_truth.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Bagian Pengantar / Deskripsi Program -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="h3 fw-bold text-dark mb-4 pb-2 border-bottom"><?= lang('Multimedia.pearls_of_truth.about_title') ?></h2>
                    <div class="text-secondary lh-lg mb-4">
                        <p class="mb-3">
                            <?= lang('Multimedia.pearls_of_truth.p1') ?>
                        </p>
                        <p class="mb-3">
                            <?= lang('Multimedia.pearls_of_truth.p2') ?>
                        </p>
                    </div>

                    <!-- Informasi Jadwal & Pemesanan -->
                    <div class="row g-4 pt-3 border-top">
                        <div class="col-md-6" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                            <div class="p-3 bg-light rounded-3 h-100 border-start border-4 border-danger">
                                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-broadcast text-danger me-2"></i> <?= lang('Multimedia.pearls_of_truth.schedule_title') ?></h6>
                                <p class="text-secondary small mb-0">
                                    <?= lang('Multimedia.pearls_of_truth.schedule_desc') ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                            <div class="p-3 bg-light rounded-3 h-100 border-start border-4 border-primary">
                                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-disc text-primary me-2"></i> <?= lang('Multimedia.pearls_of_truth.cd_title') ?></h6>
                                <p class="text-secondary small mb-0">
                                    <?= lang('Multimedia.pearls_of_truth.cd_desc') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daftar Audio Khotbah Berdasarkan Kitab -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="text-secondary small mb-3" data-aos="fade-up" data-aos-duration="800">
                    <?= lang('Multimedia.pearls_of_truth.list_desc') ?>
                </p>
                <div class="d-flex align-items-center justify-content-between mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <h3 class="h4 fw-bold text-dark mb-0"><?= lang('Multimedia.pearls_of_truth.list_title') ?></h3>
                    <span class="badge bg-primary rounded-pill px-3 py-2"><?= lang('Multimedia.pearls_of_truth.list_badge') ?></span>
                </div>

                <!-- Bagian KITAB KEJADIAN -->
                <div class="mb-4">
                    <h5 class="fw-bold text-danger mb-3" data-aos="fade-right" data-aos-duration="800"><i class="bi bi-book-fill me-2"></i> <?= lang('Multimedia.pearls_of_truth.books.genesis') ?></h5>
                    <div class="vstack gap-3">
                        
                        <!-- Kejadian 1 -->
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">1</div>
                                        <div>
                                            <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.pearls_of_truth.chapters.gen_1') ?></h5>
                                            <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.pearls_of_truth.speaker_prefix') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                        <audio controls class="w-100" style="max-height: 40px;">
                                            <source src="<?= base_url('assets/audio/gen-1.mp3') ?>" type="audio/mpeg">
                                            <?= lang('Multimedia.pearls_of_truth.unsupported') ?>
                                        </audio>
                                        <a href="<?= base_url('assets/audio/gen-1.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                            <i class="bi bi-download me-1"></i> <?= lang('Multimedia.pearls_of_truth.download_btn') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kejadian 2 -->
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">2</div>
                                        <div>
                                            <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.pearls_of_truth.chapters.gen_2') ?></h5>
                                            <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.pearls_of_truth.speaker_prefix') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                        <audio controls class="w-100" style="max-height: 40px;">
                                            <source src="<?= base_url('assets/audio/gen-2.mp3') ?>" type="audio/mpeg">
                                            <?= lang('Multimedia.pearls_of_truth.unsupported') ?>
                                        </audio>
                                        <a href="<?= base_url('assets/audio/gen-2.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                            <i class="bi bi-download me-1"></i> <?= lang('Multimedia.pearls_of_truth.download_btn') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kejadian 3 -->
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">3</div>
                                        <div>
                                            <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.pearls_of_truth.chapters.gen_3') ?></h5>
                                            <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.pearls_of_truth.speaker_prefix') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                        <audio controls class="w-100" style="max-height: 40px;">
                                            <source src="<?= base_url('assets/audio/gen-3.mp3') ?>" type="audio/mpeg">
                                            <?= lang('Multimedia.pearls_of_truth.unsupported') ?>
                                        </audio>
                                        <a href="<?= base_url('assets/audio/gen-3.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                            <i class="bi bi-download me-1"></i> <?= lang('Multimedia.pearls_of_truth.download_btn') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Bagian KITAB KELUARAN -->
                <div class="mb-4">
                    <h5 class="fw-bold text-danger mb-3" data-aos="fade-right" data-aos-duration="800"><i class="bi bi-book-fill me-2"></i> <?= lang('Multimedia.pearls_of_truth.books.exodus') ?></h5>
                    <div class="vstack gap-3">
                        
                        <!-- Keluaran 7 -->
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">7</div>
                                        <div>
                                            <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.pearls_of_truth.chapters.ex_7') ?></h5>
                                            <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.pearls_of_truth.speaker_prefix') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                        <audio controls class="w-100" style="max-height: 40px;">
                                            <source src="<?= base_url('assets/audio/ex-7.mp3') ?>" type="audio/mpeg">
                                            <?= lang('Multimedia.pearls_of_truth.unsupported') ?>
                                        </audio>
                                        <a href="<?= base_url('assets/audio/ex-7.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                            <i class="bi bi-download me-1"></i> <?= lang('Multimedia.pearls_of_truth.download_btn') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Keluaran 8 -->
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">8</div>
                                        <div>
                                            <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.pearls_of_truth.chapters.ex_8') ?></h5>
                                            <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.pearls_of_truth.speaker_prefix') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                        <audio controls class="w-100" style="max-height: 40px;">
                                            <source src="<?= base_url('assets/audio/ex-8.mp3') ?>" type="audio/mpeg">
                                            <?= lang('Multimedia.pearls_of_truth.unsupported') ?>
                                        </audio>
                                        <a href="<?= base_url('assets/audio/ex-8.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                            <i class="bi bi-download me-1"></i> <?= lang('Multimedia.pearls_of_truth.download_btn') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Keluaran 9 -->
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">9</div>
                                        <div>
                                            <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.pearls_of_truth.chapters.ex_9') ?></h5>
                                            <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.pearls_of_truth.speaker_prefix') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                        <audio controls class="w-100" style="max-height: 40px;">
                                            <source src="<?= base_url('assets/audio/ex-9.mp3') ?>" type="audio/mpeg">
                                            <?= lang('Multimedia.pearls_of_truth.unsupported') ?>
                                        </audio>
                                        <a href="<?= base_url('assets/audio/ex-9.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                            <i class="bi bi-download me-1"></i> <?= lang('Multimedia.pearls_of_truth.download_btn') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Bagian KITAB IMAMAT -->
                <div class="mb-4">
                    <h5 class="fw-bold text-danger mb-3" data-aos="fade-right" data-aos-duration="800"><i class="bi bi-book-fill me-2"></i> <?= lang('Multimedia.pearls_of_truth.books.leviticus') ?></h5>
                    <div class="vstack gap-3">
                        
                        <!-- Imamat 1 -->
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">1</div>
                                        <div>
                                            <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.pearls_of_truth.chapters.lev_1') ?></h5>
                                            <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.pearls_of_truth.speaker_prefix') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                        <audio controls class="w-100" style="max-height: 40px;">
                                            <source src="<?= base_url('assets/audio/lev-1.mp3') ?>" type="audio/mpeg">
                                            <?= lang('Multimedia.pearls_of_truth.unsupported') ?>
                                        </audio>
                                        <a href="<?= base_url('assets/audio/lev-1.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                            <i class="bi bi-download me-1"></i> <?= lang('Multimedia.pearls_of_truth.download_btn') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Imamat 2-3 -->
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">2</div>
                                        <div>
                                            <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.pearls_of_truth.chapters.lev_2_3') ?></h5>
                                            <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.pearls_of_truth.speaker_prefix') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                        <audio controls class="w-100" style="max-height: 40px;">
                                            <source src="<?= base_url('assets/audio/lev-2-3.mp3') ?>" type="audio/mpeg">
                                            <?= lang('Multimedia.pearls_of_truth.unsupported') ?>
                                        </audio>
                                        <a href="<?= base_url('assets/audio/lev-2-3.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                            <i class="bi bi-download me-1"></i> <?= lang('Multimedia.pearls_of_truth.download_btn') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Imamat 4-5 -->
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white" data-aos="fade-up" data-aos-duration="800">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">4</div>
                                        <div>
                                            <h5 class="fw-bold text-dark mb-1 fs-6"><?= lang('Multimedia.pearls_of_truth.chapters.lev_4_5') ?></h5>
                                            <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> <?= lang('Multimedia.pearls_of_truth.speaker_prefix') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                        <audio controls class="w-100" style="max-height: 40px;">
                                            <source src="<?= base_url('assets/audio/lev-4-5.mp3') ?>" type="audio/mpeg">
                                            <?= lang('Multimedia.pearls_of_truth.unsupported') ?>
                                        </audio>
                                        <a href="<?= base_url('assets/audio/lev-4-5.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                            <i class="bi bi-download me-1"></i> <?= lang('Multimedia.pearls_of_truth.download_btn') ?>
                                        </a>
                                    </div>
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