<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Church.other_churches.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Church.other_churches.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Church.other_churches.hero_subtitle') ?></p>
    </div>
</header>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">

                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12">
                        <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white" data-aos="fade-up">
                            <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                                <span class="text-danger fw-bold small text-uppercase tracking-wider"><?= lang('Church.other_churches.section_badge') ?></span>
                                <h2 class="fw-bold text-dark display-6 mb-2"><?= lang('Church.other_churches.section_title') ?></h2>
                                <div class="mx-auto bg-danger rounded mb-4" style="width: 60px; height: 3px;"></div>
                                <p class="text-secondary mx-auto" style="max-width: 800px; line-height: 1.8;">
                                    <?= lang('Church.other_churches.description') ?>
                                </p>
                            </div>

                            <?php if (!empty($churchesByRegion)): ?>
                                <?php foreach ($churchesByRegion as $region => $churches): ?>
                                
                                <!-- Header Wilayah -->
                                <div class="d-flex align-items-center gap-2 mb-3 mt-4 text-success fw-bold text-uppercase" data-aos="fade-up">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <span><?= esc($region) ?></span>
                                </div>

                                <!-- List Gereja di Wilayah Tersebut -->
                                <div class="card border-0 shadow-sm rounded-3 mb-4 overflow-hidden" data-aos="fade-up" data-aos-delay="150">
                                    <div class="list-group list-group-flush">
                                    <?php foreach ($churches as $c): ?>
                                        
                                        <?php 
                                        // Formatting WA Link
                                        $wa1 = preg_replace('/[^0-9]/', '', $c['phone']);
                                        if (substr($wa1, 0, 1) === '0') $wa1 = '62' . substr($wa1, 1);

                                        $wa2 = !empty($c['phone_2']) ? preg_replace('/[^0-9]/', '', $c['phone_2']) : '';
                                        if (!empty($wa2) && substr($wa2, 0, 1) === '0') $wa2 = '62' . substr($wa2, 1);
                                        ?>

                                        <div class="list-group-item p-3 p-md-4">
                                            <div class="row align-items-center g-3">
                                                <!-- Gembala -->
                                                <div class="col-md-2 fw-medium text-dark">
                                                    <?= esc($c['pastor_name']) ?>
                                                </div>
                                                
                                                <!-- Nama Gereja -->
                                                <div class="col-md-3 fw-bold text-danger fs-6">
                                                    <?= esc($c['church_name']) ?>
                                                </div>

                                                <!-- Alamat -->
                                                <div class="col-md-4 small text-secondary">
                                                    <?= esc($c['address']) ?>
                                                </div>

                                                <!-- Tombol Kontak -->
                                                <div class="col-md-3 text-md-end">
                                                    <a href="https://wa.me/<?= $wa1 ?>" target="_blank" class="btn btn-outline-success btn-sm rounded-pill px-3 mb-1">
                                                        <i class="bi bi-whatsapp me-1"></i><?= esc($c['phone']) ?>
                                                    </a>
                                                    <?php if (!empty($c['phone_2'])): ?>
                                                        <br>
                                                        <a href="https://wa.me/<?= $wa2 ?>" target="_blank" class="btn btn-outline-success btn-sm rounded-pill px-3">
                                                            <i class="bi bi-whatsapp me-1"></i><?= esc($c['phone_2']) ?>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endforeach; ?>
                                    </div>
                                </div>

                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="text-center text-muted py-5" data-aos="fade-up">
                                    <h5><?= lang('Church.other_churches.empty_data') ?></h5>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>