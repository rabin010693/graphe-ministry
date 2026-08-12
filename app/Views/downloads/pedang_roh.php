<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Downloads.sword_of_spirit.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Downloads.sword_of_spirit.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Downloads.sword_of_spirit.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Intro Card -->
        <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-3 border-bottom pb-3" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-book-open text-danger fs-3 me-3"></i>
                    <div>
                        <h3 class="fw-bold text-dark mb-1"><?= lang('Downloads.sword_of_spirit.about_title') ?></h3>
                        <p class="text-muted small mb-0"><?= lang('Downloads.sword_of_spirit.about_sub') ?></p>
                    </div>
                </div>
                <p class="text-muted mb-0" data-aos="fade-up" data-aos-delay="150">
                    <?= lang('Downloads.sword_of_spirit.about_desc') ?>
                </p>
            </div>
        </div>

        <!-- Bulletin List Card -->
        <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                <h4 class="fw-bold text-dark mb-4" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-file-pdf text-danger me-2"></i> <?= lang('Downloads.sword_of_spirit.archive_title') ?>
                </h4>

                <?php
                // Simulasi Data Buletin
                $all_bulletins = [
                    ["edisi" => 49, "judul" => "Kongres ke-8", "link" => "#"],
                    ["edisi" => 48, "judul" => "Hebat Sekali Perempuan Itu", "link" => "#"],
                    ["edisi" => 47, "judul" => "Wabah Terdahsyat terhadap Kekristenan", "link" => "#"],
                    ["edisi" => 46, "judul" => "Tubuh Tuhan di Dunia", "link" => "#"],
                    ["edisi" => 45, "judul" => "Negara yang Diberkati dan Dikutuki Tuhan", "link" => "#"],
                    ["edisi" => 44, "judul" => "Mereka Menyesatkan dan Disesatkan", "link" => "#"],
                    ["edisi" => 43, "judul" => "Demo Tuhan dengan Doa?", "link" => "#"],
                    ["edisi" => 42, "judul" => "Iblis Ikutan Beritakan Injil", "link" => "#"],
                    ["edisi" => 41, "judul" => "Nyatakan Apa yang Salah", "link" => "#"],
                ];

                // Logika Pagination Sederhana (20 item per halaman)
                $perPage = 20;
                $totalItems = count($all_bulletins);
                $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $totalPages = ceil($totalItems / $perPage); if($totalPages < 1)$totalPages = 1;
                $offset = ($currentPage - 1) * $perPage;
                
                $currentBulletins = array_slice($all_bulletins, $offset, $perPage);
                ?>

                <div class="list-group list-group-flush border rounded-3 overflow-hidden shadow-sm" data-aos="fade-up" data-aos-delay="150">
                    <?php if(!empty($bulletins)): 
                        $delay = 200;
                        foreach($bulletins as $b): 
                            // Pilih judul sesuai locale aktif
                            $locale = service('request')->getLocale();
                            $judul  = ($locale === 'en' && !empty($b['title_en'])) ? $b['title_en'] : $b['title_id'];
                    ?>
                        <div class="list-group-item list-group-item-action p-3 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                            <div class="d-flex align-items-start">
                                <div class="bg-danger text-white rounded-circle p-2 me-3 text-center fw-bold small flex-shrink-0" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                                    #<?= $b['edition_number'] ?>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-dark mb-1"><?= lang('Downloads.sword_of_spirit.issue_prefix') ?><?= $b['edition_number'] ?></h6>
                                    <p class="text-muted small mb-0"><?= esc($judul) ?></p>
                                </div>
                            </div>
                            <div>
                                <a href="<?= base_url('uploads/pedang_roh/' . $b['pdf_file']) ?>" target="_blank" class="btn btn-outline-primary btn-sm px-3 rounded-pill fw-semibold">
                                    <i class="fas fa-download me-1"></i> <?= lang('Downloads.sword_of_spirit.download_btn') ?>
                                </a>
                            </div>
                        </div>
                    <?php 
                            if ($delay < 400) {
                                $delay += 25;
                            }
                        endforeach; 
                    else: ?>
                        <div class="p-4 text-center text-muted" data-aos="fade-up" data-aos-delay="200"><?= lang('Downloads.sword_of_spirit.empty') ?></div>
                    <?php endif; ?>
                </div>

                <!-- Pagination Bootstrap 5 -->
                <?php if($totalPages > 1): ?>
                <nav class="mt-4" aria-label="Page navigation" data-aos="fade-up">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item <?= ($currentPage <= 1) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $currentPage - 1 ?>" tabindex="-1"><?= lang('Downloads.sword_of_spirit.prev') ?></a>
                        </li>
                        <?php for($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?= ($currentPage == $i) ? 'active' : '' ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?= ($currentPage >= $totalPages) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $currentPage + 1 ?>"><?= lang('Downloads.sword_of_spirit.next') ?></a>
                        </li>
                    </ul>
                </nav>
                <?php endif; ?>

            </div>
        </div>

        <!-- Info Catatan Rekonstruksi Arsip -->
        <div class="alert alert-warning border-0 bg-opacity-10 text-dark p-4 rounded-4 shadow-sm mb-0" data-aos="fade-up">
            <div class="d-flex">
                <i class="fas fa-exclamation-triangle text-warning fs-4 me-3 mt-1" data-aos="fade-up" data-aos-delay="100"></i>
                <div>
                    <h6 class="fw-bold text-dark mb-2" data-aos="fade-up" data-aos-delay="150"><?= lang('Downloads.sword_of_spirit.notice_title') ?></h6>
                    <p class="small text-muted mb-0" data-aos="fade-up" data-aos-delay="200">
                        <?= lang('Downloads.sword_of_spirit.notice_desc') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>