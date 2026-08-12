<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold"><?= lang('Downloads.articles.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2"><?= lang('Downloads.articles.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;"><?= lang('Downloads.articles.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Intro Card -->
        <div class="card border-0 shadow-sm rounded-4 mb-4">
            <div class="card-body p-4 p-md-5 text-center">
                <h3 class="fw-bold text-dark mb-2 fs-5 fs-md-4"><?= lang('Downloads.articles.library_title') ?></h3>
                <p class="text-muted mb-0 small">
                    <?= lang('Downloads.articles.library_desc') ?>
                </p>
            </div>
        </div>

        <!-- Bagian 1: Buku Online -->
        <div class="card border-0 shadow-sm rounded-4 mb-4">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-4 border-bottom pb-3">
                    <i class="fas fa-book text-primary fs-3 me-3 flex-shrink-0"></i>
                    <div>
                        <h4 class="fw-bold text-dark mb-1 fs-5 fs-md-4"><?= lang('Downloads.articles.section_books.title') ?></h4>
                        <p class="text-muted small mb-0"><?= lang('Downloads.articles.section_books.sub') ?></p>
                    </div>
                </div>

                <div class="list-group list-group-flush border rounded-3 overflow-hidden shadow-sm">
                    <?php 
                    $buku = [
                        [lang('Downloads.articles.section_books.items.whenever_die'), "#"],
                        [lang('Downloads.articles.section_books.items.sacrificial_lamb'), "#"]
                    ];
                    foreach($buku as $item): 
                    ?>
                    <div class="list-group-item list-group-item-action p-3 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                        <span class="fw-semibold text-dark">
                            <i class="fas fa-book-open text-primary me-2"></i> <?= $item[0] ?>
                        </span>
                        <a href="<?= $item[1] ?>" class="btn btn-outline-primary btn-sm px-3 rounded-pill fw-semibold text-nowrap align-self-start align-self-md-auto">
                            <i class="fas fa-download me-1"></i> <?= lang('Downloads.articles.download_pdf') ?>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Bagian 2: Traktat Online -->
        <div class="card border-0 shadow-sm rounded-4 mb-4">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-4 border-bottom pb-3">
                    <i class="fas fa-file-alt text-success fs-3 me-3 flex-shrink-0"></i>
                    <div>
                        <h4 class="fw-bold text-dark mb-1 fs-5 fs-md-4"><?= lang('Downloads.articles.section_tracts.title') ?></h4>
                        <p class="text-muted small mb-0"><?= lang('Downloads.articles.section_tracts.sub') ?></p>
                    </div>
                </div>

                <div class="list-group list-group-flush border rounded-3 overflow-hidden shadow-sm">
                    <?php 
                    $traktat = [
                        [lang('Downloads.articles.section_tracts.items.five_steps'), "#"],
                        [lang('Downloads.articles.section_tracts.items.i_have_told'), "#"],
                        [lang('Downloads.articles.section_tracts.items.religious_man'), "#"]
                    ];
                    foreach($traktat as $item): 
                    ?>
                    <div class="list-group-item list-group-item-action p-3 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                        <span class="fw-semibold text-dark">
                            <i class="fas fa-file-invoice text-success me-2"></i> <?= $item[0] ?>
                        </span>
                        <a href="<?= $item[1] ?>" class="btn btn-outline-success btn-sm px-3 rounded-pill fw-semibold text-nowrap align-self-start align-self-md-auto">
                            <i class="fas fa-download me-1"></i> <?= lang('Downloads.articles.download_pdf') ?>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Bagian 3: Artikel Online -->
        <div class="card border-0 shadow-sm rounded-4 mb-4">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-4 border-bottom pb-3">
                    <i class="fas fa-newspaper text-danger fs-3 me-3"></i>
                    <div>
                        <h4 class="fw-bold text-dark mb-1"><?= lang('Downloads.articles.section_articles.title') ?></h4>
                        <p class="text-muted small mb-0"><?= lang('Downloads.articles.section_articles.sub') ?></p>
                    </div>
                </div>

                <div class="list-group list-group-flush border rounded-3 overflow-hidden shadow-sm">
                    <?php 
                    $artikel = [
                        lang('Downloads.articles.section_articles.items.fundamentalist'),
                        lang('Downloads.articles.section_articles.items.discounted_gospel'),
                        lang('Downloads.articles.section_articles.items.devil_preaching'),
                        lang('Downloads.articles.section_articles.items.divine_truth'),
                        lang('Downloads.articles.section_articles.items.roadmap_eternal'),
                        lang('Downloads.articles.section_articles.items.calvinist_vs_non'),
                        lang('Downloads.articles.section_articles.items.faith_gift_responsibility'),
                        lang('Downloads.articles.section_articles.items.unlimited_atonement'),
                        lang('Downloads.articles.section_articles.items.god_sovereignty'),
                        lang('Downloads.articles.section_articles.items.eternal_security'),
                        lang('Downloads.articles.section_articles.items.allah_debate'),
                        lang('Downloads.articles.section_articles.items.book_of_life'),
                        lang('Downloads.articles.section_articles.items.jehovah_witness'),
                        lang('Downloads.articles.section_articles.items.judging'),
                        lang('Downloads.articles.section_articles.items.christian_unity'),
                        lang('Downloads.articles.section_articles.items.pork'),
                        lang('Downloads.articles.section_articles.items.birth_of_christ'),
                        lang('Downloads.articles.section_articles.items.death_of_christ'),
                        lang('Downloads.articles.section_articles.items.baptism_method'),
                        lang('Downloads.articles.section_articles.items.infant_baptism'),
                        lang('Downloads.articles.section_articles.items.protestant_persecution'),
                        lang('Downloads.articles.section_articles.items.exegesis_cor'),
                        lang('Downloads.articles.section_articles.items.acts_explanation'),
                        lang('Downloads.articles.section_articles.items.romans_explanation'),
                        lang('Downloads.articles.section_articles.items.music_principles'),
                        lang('Downloads.articles.section_articles.items.rock_music')
                    ];
                    foreach($artikel as $art): 
                    ?>
                    <div class="list-group-item list-group-item-action p-3 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                        <span class="fw-semibold text-dark">
                            <i class="fas fa-bookmark text-danger me-2"></i> <?= $art ?>
                        </span>
                        <div>
                            <a href="#" class="btn btn-outline-danger btn-sm px-3 rounded-pill fw-semibold text-nowrap">
                                <i class="fas fa-download me-1"></i> <?= lang('Downloads.articles.download_pdf') ?>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Info Call to Action Blog -->
        <div class="alert alert-primary border-0 bg-opacity-10 text-dark p-4 rounded-4 shadow-sm text-center mb-0">
            <i class="fas fa-blog text-primary fs-3 mb-2"></i>
            <h5 class="fw-bold text-dark mb-2"><?= lang('Downloads.articles.cta_title') ?></h5>
            <p class="text-muted small mb-3">
                <?= lang('Downloads.articles.cta_desc') ?>
            </p>
            <a href="https://graphe-ministry.org/articles/" target="_blank" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm fw-semibold">
                <i class="fas fa-external-link-alt me-2"></i> <?= lang('Downloads.articles.cta_btn') ?>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>