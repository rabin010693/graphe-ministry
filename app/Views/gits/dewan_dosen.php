<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down"><?= lang('Gits.faculty.badge') ?></span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-down" data-aos-delay="100"><?= lang('Gits.faculty.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200"><?= lang('Gits.faculty.hero_subtitle') ?></p>
    </div>
</header> -->

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3 text-uppercase" data-aos="fade-down" data-aos-duration="800"><?= lang('Gits.faculty.badge') ?></div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= lang('Gits.faculty.hero_title') ?></h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?= lang('Gits.faculty.hero_subtitle') ?></p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- PIMPINAN / REKTORAT SECTION -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold text-dark mb-2"><?= lang('Gits.faculty.leadership_title') ?></h2>
            <div class="divider mx-auto bg-danger mb-4" style="width: 50px; height: 3px;"></div>
        </div>

        <div class="row g-4 justify-content-center mb-5">
            <!-- Rektor -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">
                    <img src="<?= base_url('assets/img/dr_suhento_liauw.jpg') ?>" alt="Dr. Suhento Liauw" class="mx-auto mb-3 rounded-circle object-fit-cover shadow-sm" style="width: 90px; height: 90px;">
                    <span class="badge bg-danger bg-opacity-10 text-danger mb-2 px-3 py-1 rounded-pill align-self-center"><?= lang('Gits.faculty.rector') ?></span>
                    <h4 class="fw-bold text-dark mb-1">Dr. Suhento Liauw</h4>
                    <p class="text-muted small mb-0">Suhento Liauw, S. Th., M.R.E., D.R.E., Th. D.</p>
                </div>
            </div>

            <!-- Purek Akademis -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">
                    <img src="<?= base_url('assets/img/dr_steven.jpg') ?>" alt="Dr. Steven E. Liauw" class="mx-auto mb-3 rounded-circle object-fit-cover shadow-sm" style="width: 90px; height: 90px;">
                    <span class="badge bg-danger bg-opacity-10 text-danger mb-2 px-3 py-1 rounded-pill align-self-center"><?= lang('Gits.faculty.vice_rector_acad') ?></span>
                    <h4 class="fw-bold text-dark mb-1">Dr. Steven E. Liauw</h4>
                    <p class="text-muted small mb-0">Steven E. Liauw, S. Ked., M.D., M.Div., D.R.E., Th. D.</p>
                </div>
            </div>

            <!-- Purek Mahasiswa -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">
                    <img src="<?= base_url('assets/img/dr_andrew.jpg') ?>" alt="dr. Andrew M. Liauw" class="mx-auto mb-3 rounded-circle object-fit-cover shadow-sm" style="width: 90px; height: 90px;">
                    <span class="badge bg-danger bg-opacity-10 text-danger mb-2 px-3 py-1 rounded-pill align-self-center"><?= lang('Gits.faculty.vice_rector_stud') ?></span>
                    <h4 class="fw-bold text-dark mb-1">dr. Andrew M. Liauw, S. Ked</h4>
                    <p class="text-muted small mb-0">Andrew M. Liauw, S. Ked., M.D., M. Div., M.Th., Th. D.</p>
                </div>
            </div>
        </div>

        <!-- DEWAN DOSEN SECTION -->
        <div class="text-center mb-4" data-aos="fade-up">
            <h3 class="fw-bold text-dark mb-2"><?= lang('Gits.faculty.faculty_title') ?></h3>
            <p class="text-muted"><?= lang('Gits.faculty.faculty_subtitle') ?></p>
        </div>

        <div class="row g-3 mb-5">
            <?php 
            $dosenList = [
                "Andrew M. Liauw, S. Ked., M.D., M.Div., M. Th., Th. D.",
                "Anugerah Ndruru, B. Th., M.B.S.",
                "Arifan Kusuma, S.Th.",
                "Daisy Anwar, A. Mus, B. Mus.",
                "Darnus Laia, S. Th., M. Th.",
                "Imanuel Joshua Pungus, S. Th., Ma. Div.",
                "James Hatalaibessy, S.Th., M.A.",
                "Kurnia Kristanto, S.Th.",
                "Mitorya Atmaja, S.Th.",
                "Serfantius Religius Syah Putra Lase, Sc. B.S., Ma. Div.",
                "Steven E. Liauw, S. Ked., M.D., M. Div, D.R.E., Th. D.",
                "Suhento Liauw, S.Th., M.R.E., D.R.E., Th. D.",
                "T.J. Timotius, S.E.",
                "Villy Tuuk, B. Th., M.B.S."
            ];
            $delay = 100;
            foreach($dosenList as $dosen): 
            ?>
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                <div class="card border-0 shadow-sm rounded-3 p-3 h-100 bg-white d-flex flex-row align-items-center">
                    <div class="flex-shrink-0 text-danger me-3 fs-4">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold text-dark mb-0"><?= $dosen ?></h6>
                    </div>
                </div>
            </div>
            <?php 
                $delay = ($delay >= 400) ? 100 : $delay + 100; // Reset delay berulang agar tetap rapi
            endforeach; 
            ?>
        </div>

        <!-- PROFESSOR TAMU & STAF -->
        <div class="row g-4">
            <!-- Professor Tamu -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white">
                    <h4 class="fw-bold text-dark mb-3"><i class="bi bi-award-fill text-danger me-2"></i><?= lang('Gits.faculty.guest_prof_title') ?></h4>
                    <ul class="list-unstyled mb-0">
                        <li class="py-2 border-bottom border-light text-secondary">
                            <i class="bi bi-check-circle-fill text-success me-2"></i> <?= lang('Gits.faculty.guest_prof_1') ?>
                        </li>
                        <li class="py-2 text-secondary">
                            <i class="bi bi-check-circle-fill text-success me-2"></i> <?= lang('Gits.faculty.guest_prof_2') ?>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Staf -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white">
                    <h4 class="fw-bold text-dark mb-3"><i class="bi bi-briefcase-fill text-danger me-2"></i><?= lang('Gits.faculty.support_staff') ?></h4>
                    <div class="row g-2">
                        <?php 
                        $stafList = [
                            ["nama" => "Ev. Hamlek Salaijang", "bagian" => lang('Gits.staff_roles.male_dorm')],
                            ["nama" => "Ishak", "bagian" => lang('Gits.staff_roles.general')],
                            ["nama" => "Tjhai Nyuk Moi", "bagian" => lang('Gits.staff_roles.finance')],
                            ["nama" => "Yuliana", "bagian" => lang('Gits.staff_roles.administration')],
                            ["nama" => "Marlina Dady", "bagian" => lang('Gits.staff_roles.administration')],
                            ["nama" => "Yerli Wicke", "bagian" => lang('Gits.staff_roles.administration')]
                        ];
                        foreach($stafList as $staf):
                        ?>
                        <div class="col-sm-6">
                            <div class="p-2 border border-light rounded bg-light bg-opacity-50">
                                <span class="fw-bold text-dark d-block small"><?= $staf['nama'] ?></span>
                                <span class="text-danger small" style="font-size: 0.8rem;"><?= $staf['bagian'] ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection() ?>