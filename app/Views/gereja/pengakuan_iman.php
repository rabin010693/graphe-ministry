<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Church.faith.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Church.faith.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Church.faith.hero_subtitle') ?></p>
    </div>
</header> -->

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Church.faith.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Church.faith.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Church.faith.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Intro Card / Penjelasan Singkat Doktrin -->
        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white text-center border-top border-danger border-4">
                    <div class="mb-3">
                        <i class="bi bi-shield-check text-danger display-5"></i>
                    </div>
                    <h3 class="fw-bold text-dark mb-3"><?= lang('Church.faith.intro_title') ?></h3>
                    <p class="text-secondary mb-0 mx-auto" style="max-width: 800px; line-height: 1.8;">
                        <?= lang('Church.faith.intro_desc') ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- Daftar Pengakuan Iman (Grid Layout 2 Kolom Card) -->
        <div class="row g-4 justify-content-center">
            
            <?php 
            $faiths = lang('Church.faith.items');
            if (is_array($faiths)):
                $delay = 100; // Inisialisasi delay awal dalam milidetik
                foreach ($faiths as $num => $desc): 
            ?>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 bg-white transition-hover border-start border-danger border-3">
                    <div class="d-flex align-items-start">
                        <div class="badge bg-danger text-white rounded-pill px-3 py-2 me-3 fs-6 fw-bold shadow-sm">
                            <?= $num ?>
                        </div>
                        <div class="text-secondary" style="line-height: 1.7; font-size: 0.95rem;">
                            <?= $desc ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                    // Menambahkan delay secara bertahap (misal: 100ms, 200ms, 300ms, dst)
                    $delay += 100;
                endforeach; 
            endif;
            ?>

        </div>

    </div>
</section>

<?= $this->endSection('content') ?>