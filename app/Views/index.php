<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php 
    // Formatter tanggal sesuai locale aktif ('id' / 'en')
    $currentLocale = service('request')->getLocale();
    
    $monthDateFormatter = new \IntlDateFormatter(
        $currentLocale,
        \IntlDateFormatter::NONE,
        \IntlDateFormatter::NONE,
        null,
        null,
        'MMM'
    );

    $cardDateFormatter = new \IntlDateFormatter(
        $currentLocale,
        \IntlDateFormatter::MEDIUM,
        \IntlDateFormatter::NONE
    );
?>

<!-- Hero Section -->
<header class="hero" style="padding-top: 80px;">
    <div class="container text-center pt-4 pb-4">
        <div class="eyebrow mb-3" data-aos="fade-down"><?= lang('Home.hero.welcome') ?></div>
        <h1 class="mx-auto" style="max-width: 760px;" data-aos="fade-down" data-aos-delay="100"><?= lang('Home.hero.verse_text') ?></h1>
        <p class="lead mx-auto mt-3" data-aos="fade-down" data-aos-delay="200"><?= lang('Home.hero.verse_ref') ?></p>
        <div data-aos="fade-down" data-aos-delay="300">
            <a href="<?= base_url('gereja/jadwal_kebaktian') ?>" class="btn-church mt-3"><?= lang('Home.hero.cta_button') ?></a>
        </div>
    </div>

    <div class="hero-figure text-center my-3" style="max-width: 240px; margin: 0 auto;" data-aos="zoom-in" data-aos-delay="400">
        <svg viewBox="0 0 400 340" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-100 h-auto">
            <defs>
                <linearGradient id="handGrad" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="#a9b4c6"/>
                    <stop offset="100%" stop-color="#5b6579"/>
                </linearGradient>
            </defs>
            <path d="M185 340 L188 210 C188 200 182 195 178 190 L165 150 C163 144 168 138 174 140 C178 141 180 145 181 149 L190 180 L192 100 C192 93 198 88 204 88 C210 88 216 93 216 100 L217 175 L222 95 C222 88 228 83 234 83 C240 83 246 88 246 95 L248 178 L253 120 C254 113 260 109 266 111 C271 113 274 119 273 125 L262 200 C260 215 255 225 250 235 L246 340 Z" fill="url(#handGrad)"/>
        </svg>
    </div>

    <div class="hero-dots text-center pb-2" data-aos="fade-up" data-aos-delay="500">
        <span class="active d-inline-block rounded-circle bg-secondary mx-1" style="width: 6px; height: 6px;"></span>
        <span class="d-inline-block rounded-circle bg-secondary mx-1" style="width: 6px; height: 6px; opacity: 0.5;"></span> 
    </div>
</header> 

<!-- Feature Icons & Highlight Box -->
<section class="bg-white py-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-9">
                <div class="row g-4">
                    <!-- Blok 1: Jadwal & Tempat Kebaktian -->
                    <div class="col-12 col-md-4 feature-block" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-wrap"><i class="bi bi-bank2"></i></div>
                        <h5><?= lang('Home.features.schedule_title') ?></h5>
                        <div class="feature-tag"><?= lang('Home.features.schedule_tag') ?></div>
                        <hr>
                        <p class="text-muted text-justify" style="text-align: justify;"><?= lang('Home.features.schedule_desc') ?></p>
                    </div>

                    <!-- Blok 2: GITS Seminari -->
                    <div class="col-md-4 feature-block" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-wrap"><i class="bi bi-people"></i></div>
                        <h5><?= lang('Home.features.gits_title') ?></h5>
                        <div class="feature-tag"><?= lang('Home.features.gits_tag') ?></div>
                        <hr>
                        <p class="text-muted text-justify" style="text-align: justify;"><?= lang('Home.features.gits_desc') ?></p>
                    </div>

                    <!-- Blok 3: Artikel Gratis -->
                    <div class="col-md-4 feature-block" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-wrap"><i class="bi bi-file-earmark-text"></i></div>
                        <h5><?= lang('Home.features.articles_title') ?></h5>
                        <div class="feature-tag"><?= lang('Home.features.articles_tag') ?></div>
                        <hr>
                        <p class="text-muted text-justify" style="text-align: justify;"><?= lang('Home.features.articles_desc') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3" data-aos="fade-left" data-aos-delay="400">
                <div class="highlight-box">
                    <h3><?= lang('Home.features.highlight_quote') ?></h3>
                    <p class="mt-3"><?= lang('Home.features.highlight_sub') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="about-preview py-4">
    <div class="container">
        <div class="row align-items-center g-4">
            <!-- Bagian Kiri: Ilustrasi Gereja -->
            <div class="col-lg-6 text-center" data-aos="fade-right">
                <div class="church-illustration rounded overflow-hidden shadow-sm">
                    <img src="<?= base_url('assets/img/suhento_home.jpg') ?>" alt="Gereja Baptis Independen Alkitabiah GRAPHE" class="img-fluid rounded w-100 object-fit-cover" style="max-height: 450px;">
                </div>
            </div>

            <!-- Bagian Kanan: Konten Teks Sambutan -->
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="section-title mb-3"><?= lang('Home.about.title') ?></h2>
                
                <p class="text-muted text-justify" style="text-align: justify;">
                    <?= lang('Home.about.p1') ?>
                </p>
                
                <p class="text-muted text-justify" style="text-align: justify;">
                    <?= lang('Home.about.p2') ?>
                </p>

                <p class="text-muted text-justify" style="text-align: justify;">
                    <?= lang('Home.about.p3') ?>
                </p>
                
                <a href="<?= base_url('gereja/gembala_sidang') ?>" class="btn btn-church mt-2 text-white" style="background-color: #0d1830; padding: 10px 24px; border-radius: 8px; text-decoration: none; display: inline-block;"><?= lang('Home.about.button') ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Sermons Section -->
<section class="py-4">
    <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
            <div class="section-eyebrow"><?= lang('Home.sermons.eyebrow') ?></div>
            <h2 class="section-title"><?= lang('Home.sermons.title') ?></h2>
        </div>
        <div class="row g-4">
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card church-card h-100">
                    <div class="card-thumb"><i class="bi bi-mic"></i></div>
                    <div class="card-body">
                        <div class="card-meta mb-2"><?= lang('Home.sermons.badge') ?> &bull; <?= $cardDateFormatter->format(strtotime('2026-07-02')) ?></div>
                        <h3 class="card-title"><?= lang('Home.sermons.cards.sermon_1_title') ?></h3>
                        <p class="text-muted small"><?= lang('Home.sermons.cards.sermon_1_desc') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card church-card h-100">
                    <div class="card-thumb"><i class="bi bi-mic"></i></div>
                    <div class="card-body">
                        <div class="card-meta mb-2"><?= lang('Home.sermons.badge') ?> &bull; <?= $cardDateFormatter->format(strtotime('2026-06-24')) ?></div>
                        <h3 class="card-title"><?= lang('Home.sermons.cards.sermon_2_title') ?></h3>
                        <p class="text-muted small"><?= lang('Home.sermons.cards.sermon_2_desc') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card church-card h-100">
                    <div class="card-thumb"><i class="bi bi-mic"></i></div>
                    <div class="card-body">
                        <div class="card-meta mb-2"><?= lang('Home.sermons.badge') ?> &bull; <?= $cardDateFormatter->format(strtotime('2026-06-10')) ?></div>
                        <h3 class="card-title"><?= lang('Home.sermons.cards.sermon_3_title') ?></h3>
                        <p class="text-muted small"><?= lang('Home.sermons.cards.sermon_3_desc') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row g-4 align-items-start">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="section-eyebrow"><?= lang('Home.events.eyebrow') ?></div>
                <h2 class="section-title mb-4"><?= lang('Home.events.title') ?></h2>
                
                <?php if (!empty($events)): ?>
                    <?php foreach ($events as $item): ?>
                        <?php 
                            $time  = strtotime($item['event_date']);
                            $day   = date('d', $time);
                            $month = strtoupper($monthDateFormatter->format($time));
                        ?>
                        <div class="event-item d-flex align-items-center gap-3 mb-3">
                            <div class="event-date">
                                <span class="day"><?= $day ?></span>
                                <span class="mon"><?= $month ?></span>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1"><?= esc($item['title']) ?></h6>
                                <div class="text-muted small">
                                    <i class="bi bi-clock me-1"></i><?= esc($item['event_time']) ?>, <?= esc($item['location']) ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-muted"><?= lang('Home.events.empty') ?></p>
                <?php endif; ?>

            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-eyebrow"><?= lang('Home.blog.eyebrow') ?></div>
                <h2 class="section-title mb-4"><?= lang('Home.blog.title') ?></h2>
                <div class="row g-4" id="blog-preview">
                    <!-- Populated by JS from PostsStore -->
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>