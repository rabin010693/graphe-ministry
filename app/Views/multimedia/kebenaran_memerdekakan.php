<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase"><?= lang('Multimedia.truth_sets_free.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;"><?= lang('Multimedia.truth_sets_free.hero_title') ?></h1>
        <p class="lead text-light opacity-90 mx-auto" style="max-width: 650px;"><?= lang('Multimedia.truth_sets_free.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Bagian Pengantar / Deskripsi Program -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    <h2 class="h3 fw-bold text-dark mb-4 pb-2 border-bottom"><?= lang('Multimedia.truth_sets_free.about_title') ?></h2>
                    <div class="text-secondary lh-lg mb-4">
                        <p class="mb-3">
                            <?= lang('Multimedia.truth_sets_free.p1') ?>
                        </p>
                        <p class="mb-3">
                            <?= lang('Multimedia.truth_sets_free.p2') ?>
                        </p>
                    </div>

                    <!-- Informasi Siaran & CD -->
                    <div class="row g-4 pt-3 border-top">
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded-3 h-100 border-start border-4 border-danger">
                                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-broadcast text-danger me-2"></i> <?= lang('Multimedia.truth_sets_free.schedule_title') ?></h6>
                                <p class="text-secondary small mb-0">
                                    <?= lang('Multimedia.truth_sets_free.schedule_desc') ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded-3 h-100 border-start border-4 border-primary">
                                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-disc text-primary me-2"></i> <?= lang('Multimedia.truth_sets_free.cd_title') ?></h6>
                                <p class="text-secondary small mb-0">
                                    <?= lang('Multimedia.truth_sets_free.cd_desc') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daftar Khotbah & Download MP3 -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h3 class="h4 fw-bold text-dark mb-0"><?= lang('Multimedia.truth_sets_free.audio_list_title') ?></h3>
                    <span class="badge bg-primary rounded-pill px-3 py-2"><?= lang('Multimedia.truth_sets_free.audio_badge') ?></span>
                </div>
                <?php if (!empty($audios)): ?>
                    <?php $no = 1; foreach ($audios as $audio): ?>
                        <?php 
                            // Menentukan URL file audio (Lokal vs Eksternal)
                            $audioSrc = ($audio['audio_type'] === 'file') 
                            ? base_url('uploads/audio/' . $audio['audio_file']) 
                            : $audio['audio_file'];
                        ?>
                        <div class="card border border-light-subtle shadow-sm p-3 rounded-3 mb-3">
                            <div class="row align-items-center g-3">
                                <div class="col-auto">
                                    <div class="rounded-circle bg-primary-subtle text-primary fw-bold d-flex align-items-center justify-content-center" style="width:40px; height:40px;">
                                        <?= $no++ ?>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6 class="fw-bold mb-1 text-dark"><?= esc($audio['title']) ?></h6>
                                    <div class="text-muted small"><i class="bi bi-person me-1"></i><?= esc($audio['speaker']) ?></div>
                                </div>
                                <div class="col-md-5">
                                    <!-- Audio Player Native HTML5 -->
                                    <audio controls style="width: 100%;">
                                        <source src="<?= $audioSrc ?>" type="audio/mpeg">
                                        <?= lang('Multimedia.truth_sets_free.unsupported') ?>
                                    </audio>
                                </div>
                                <div class="col-auto">
                                    <!-- Tombol Unduh MP3 -->
                                    <a href="<?= $audioSrc ?>" download="<?= esc($audio['title']) ?>.mp3" class="btn btn-outline-primary rounded-pill btn-sm px-3">
                                        <i class="bi bi-download me-1"></i> <?= lang('Multimedia.truth_sets_free.download_btn') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <p class="h4 fw-bold text-dark mb-0"><?= lang('Multimedia.truth_sets_free.empty_audios') ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection() ?>