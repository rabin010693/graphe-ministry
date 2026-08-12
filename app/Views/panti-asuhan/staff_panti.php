<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Orphanage.staff.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Orphanage.staff.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Orphanage.staff.hero_subtitle') ?></p>
    </div>
</header> -->

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Orphanage.staff.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Orphanage.staff.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Orphanage.staff.hero_subtitle') ?></p>
    </div>
</header>


<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Section Staf Pengurus -->
        <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-4 border-bottom pb-3" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-users-cog text-danger fs-3 me-3 flex-shrink-0"></i>
                    <div>
                        <h3 class="fw-bold text-dark mb-1 fs-5 fs-md-4"><?= lang('Orphanage.staff.staff_title') ?></h3>
                        <p class="text-muted small mb-0"><?= lang('Orphanage.staff.staff_sub') ?></p>
                    </div>
                </div>

                <div class="row g-3">
                    <?php if (!empty($staffs)): ?>
                        <?php 
                        $delay = 150;
                        foreach ($staffs as $s): 
                        ?>
                            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                                <div class="card border border-light-subtle shadow-sm p-3 h-100 rounded-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
                                            <i class="bi <?= esc($s['icon']) ?> fs-4 text-danger"></i>
                                        </div>
                                        <div class="overflow-hidden">
                                            <div class="text-muted small mb-1"><?= esc($s['role_title']) ?></div>
                                            <h6 class="fw-bold mb-0 text-dark text-truncate"><?= esc($s['name']) ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php 
                            $delay += 50;
                        endforeach; 
                        ?>
                    <?php else: ?>
                        <div class="col-12 text-muted small" data-aos="fade-up" data-aos-delay="150"><?= lang('Orphanage.staff.no_staff') ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Section Data Anak-Anak -->
        <div class="card border-0 shadow-sm rounded-4" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                
                <!-- Header Card -->
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-child text-danger fs-3 me-3 flex-shrink-0"></i>
                        <div>
                            <h4 class="fw-bold mb-1 fs-5 fs-md-4"><?= lang('Orphanage.staff.children_title') ?></h4>
                            <p class="text-muted small mb-0"><?= lang('Orphanage.staff.children_sub') ?></p>
                        </div>
                    </div>
                    <div class="badge bg-warning bg-opacity-10 text-dark px-3 py-2 fw-semibold align-self-start align-self-lg-auto">
                        <i class="bi bi-info-circle me-1"></i> <?= lang('Orphanage.staff.total_summary', [$total, $totalFemale, $totalMale]) ?>
                    </div>
                </div>

                <!-- Tabel Responsif -->
                <div class="table-responsive" data-aos="fade-up" data-aos-delay="150">
                    <table class="table table-bordered align-middle mb-0">
                        <thead style="background-color: #fce8e8;">
                            <tr>
                                <th class="text-center text-nowrap" style="width: 50px;"><?= lang('Orphanage.staff.table_no') ?></th>
                                <th><?= lang('Orphanage.staff.table_name') ?></th>
                                <th class="text-nowrap" style="width: 130px;"><?= lang('Orphanage.staff.table_age') ?></th>
                                <th class="text-nowrap" style="width: 130px;"><?= lang('Orphanage.staff.table_gender') ?></th>
                                <th><?= lang('Orphanage.staff.table_edu') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($children)): ?>
                                <?php $no = 1; foreach ($children as $child): ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td class="fw-bold"><?= esc($child['full_name']) ?></td>
                                        <td><?= lang('Orphanage.staff.years_old', [$child['age']]) ?></td>
                                        <td>
                                            <?php if ($child['gender'] === 'Perempuan'): ?>
                                                <span class="badge bg-danger-subtle text-danger"><?= lang('Orphanage.staff.female') ?></span>
                                            <?php else: ?>
                                                <span class="badge bg-primary-subtle text-primary"><?= lang('Orphanage.staff.male') ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?= esc($child['education']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4"><?= lang('Orphanage.staff.no_children') ?></td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Footer Info / Update Date -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 mt-4 pt-3 border-top text-muted small text-center text-md-start" data-aos="fade-up" data-aos-delay="200">
                    <span>
                        <i class="fas fa-sync-alt me-1 text-primary"></i> 
                        <?= lang('Orphanage.staff.last_updated', [$last_updated]) ?>
                    </span>
                    <span><?= lang('Orphanage.staff.footer_org') ?></span>
                </div>

            </div>
        </div>

    </div>
</section>

<?= $this->endSection() ?>