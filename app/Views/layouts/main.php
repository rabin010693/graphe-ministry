<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Graphe Ministry &#8211; A Christian ministry for Indonesia and the world.' ?></title>
    <meta name="description" content="Graphe Ministry – Pelayanan Kristen untuk Indonesia dan dunia.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CDN Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.min.css') ?>">

</head>
<body style="overflow-x: hidden; width: 100%;">

    <!-- Topbar -->
    <div class="topbar">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <div><i class="bi bi-geo-alt-fill me-1"></i><small> Jl. Danau Agung 2 No. 5-7 Sunter Agung, Jakarta Utara 14350 Indonesia </small></div>
            <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-spotify"></i></a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-church sticky-top fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">
                <img src="<?= base_url('assets/img/Graphe-Ministry-logo-white.png') ?>" alt="Salvation Church Logo" height="30">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" style="border-color: rgba(255,255,255,0.4);">
                <span class="navbar-toggler-icon" style="filter: invert(1) grayscale(100%) brightness(200%);"></span>
            </button>

            <!-- Bagian yang akan melipat di layar kecil & muncul saat ikon garis tiga diklik -->
            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav align-items-lg-center">
                    <?php $uri = service('uri'); ?>
                    
                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link <?= ($uri->getSegment(1) == '') ? 'active' : '' ?>" href="<?= base_url() ?>"><?= lang('App.nav.home') ?></a>
                    </li>

                    <!-- Dropdown: Gereja -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= ($uri->getSegment(1) == 'gereja') ? 'active' : '' ?>" href="#" id="gerejaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= lang('App.nav.church') ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="gerejaDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('gereja/gembala_sidang') ?>"><?= lang('App.church_menu.pastor') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('gereja/pengakuan_iman') ?>"><?= lang('App.church_menu.faith_statement') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('gereja/jalan_keselamatan') ?>"><?= lang('App.church_menu.salvation') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('gereja/sejarah_gbia') ?>"><?= lang('App.church_menu.history') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('gereja/jadwal_kebaktian') ?>"><?= lang('App.church_menu.schedule') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('gereja/gereja_lainnya') ?>"><?= lang('App.church_menu.all_churches') ?></a></li>
                        </ul>
                    </li>

                    <!-- Dropdown: GITS -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= ($uri->getSegment(1) == 'gits') ? 'active' : '' ?>" href="#" id="gitsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= lang('App.nav.gits') ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="gitsDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('gits/visi_misi') ?>"><?= lang('App.gits_menu.seminary') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('gits/program_studi') ?>"><?= lang('App.gits_menu.study_prog') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('gits/dewan_dosen') ?>"><?= lang('App.gits_menu.lecturers') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('gits/fasilitas') ?>"><?= lang('App.gits_menu.facilities') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('gits/pendaftaran') ?>"><?= lang('App.gits_menu.registration') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('gits/program_extension') ?>"><?= lang('App.gits_menu.extension') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('gits/info_seminar') ?>"><?= lang('App.gits_menu.seminar') ?></a></li>
                        </ul>
                    </li>

                    <!-- Dropdown: Panti Asuhan -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= ($uri->getSegment(1) == 'panti-asuhan') ? 'active' : '' ?>" href="#" id="pantiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= lang('App.nav.orphanage') ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pantiDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('panti-asuhan/karena_kasih') ?>"><?= lang('App.orphanage_menu.because_love') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('panti-asuhan/staff_panti') ?>"><?= lang('App.orphanage_menu.staff_kids') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('panti-asuhan/kebijakan') ?>"><?= lang('App.orphanage_menu.policy') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('panti-asuhan/donasi') ?>"><?= lang('App.orphanage_menu.donation') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('panti-asuhan/murah_hati') ?>"><?= lang('App.orphanage_menu.generous') ?></a></li>
                        </ul>
                    </li>

                    <!-- Dropdown: Multi Media -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= ($uri->getSegment(1) == 'multimedia') ? 'active' : '' ?>" href="#" id="mediaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= lang('App.nav.multimedia') ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="mediaDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('multimedia/penerbit_graphe') ?>"><?= lang('App.multimedia_menu.publisher') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('multimedia/radio') ?>"><?= lang('App.multimedia_menu.radio') ?></a></li> 
                            <li><a class="dropdown-item" href="<?= base_url('multimedia/kebenaran_memerdekakan') ?>"><?= lang('App.multimedia_menu.truth') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('multimedia/through_the_bible') ?>"><?= lang('App.multimedia_menu.bible') ?></a></li> 
                            <li><a class="dropdown-item" href="<?= base_url('multimedia/mutiara_kebenaran') ?>"><?= lang('App.multimedia_menu.pearls') ?></a></li>    
                            <li><a class="dropdown-item" href="<?= base_url('multimedia/galeri') ?>"><?= lang('App.multimedia_menu.gallery') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('multimedia/video') ?>"><?= lang('App.multimedia_menu.video') ?></a></li>
                        </ul>
                    </li>

                    <!-- Single Links -->
                    <li class="nav-item">
                        <a class="nav-link <?= ($uri->getSegment(1) == 'events') ? 'active' : '' ?>" href="<?= base_url('events') ?>"><?= lang('App.nav.events') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($uri->getSegment(1) == 'blog') ? 'active' : '' ?>" href="https://graphe-ministry.org/articles/"><?= lang('App.nav.blog') ?></a>
                    </li>

                    <!-- Dropdown: Downloads -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= ($uri->getSegment(1) == 'downloads') ? 'active' : '' ?>" href="#" id="downloadsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= lang('App.nav.downloads') ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="downloadsDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('downloads/pedang_roh') ?>"><?= lang('App.downloads_menu.sword') ?></a></li>    
                            <li><a class="dropdown-item" href="<?= base_url('downloads/artikel') ?>"><?= lang('App.downloads_menu.articles') ?></a></li>
                            <li><a class="dropdown-item" href="<?= base_url('downloads/khotbah') ?>"><?= lang('App.downloads_menu.sermons') ?></a></li>
                        </ul>
                    </li>
                </ul>

                <?php $currentLang = session()->get('lang') ?? 'id'; ?>

                <div class="dropdown ms-lg-3 mt-3 mt-lg-0">
                    <button class="btn btn-sm btn-outline-light dropdown-toggle text-uppercase" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <i class="bi bi-globe me-1"></i> <?= $currentLang ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end shadow">
                        <li>
                            <a class="dropdown-item <?= ($currentLang == 'id') ? 'active fw-bold' : '' ?>" href="<?= base_url('lang/id') ?>">Indonesia (ID)</a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= ($currentLang == 'en') ? 'active fw-bold' : '' ?>" href="<?= base_url('lang/en') ?>">English (EN)</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <!-- Main Content -->
    <main style="overflow-x: hidden; width: 100%;">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <!-- Link Footer ke Home -->
                    <a href="<?= base_url('/') ?>" class="navbar-brand text-white mb-3 d-inline-block">Graphe Ministry</a>
                    <p class="small"><?= lang('App.footer.about_text') ?></p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-spotify"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <h6><?= lang('App.footer.ministry_head') ?></h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="<?= base_url('gereja/sejarah_gbia') ?>"><?= lang('App.nav.church') ?></a></li>
                        <li class="mb-2"><a href="<?= base_url('gits/visi_misi') ?>"><?= lang('App.nav.gits') ?></a></li>
                        <li class="mb-2"><a href="<?= base_url('panti-asuhan/karena_kasih') ?>"><?= lang('App.nav.orphanage') ?></a></li>
                        <li class="mb-2"><a href="<?= base_url('events') ?>"><?= lang('App.nav.events') ?></a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <h6><?= lang('App.footer.about_head') ?></h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="<?= base_url('gereja/gembala_sidang') ?>"><?= lang('App.church_menu.pastor') ?></a></li>
                        <li class="mb-2"><a href="<?= base_url('gereja/pengakuan_iman') ?>"><?= lang('App.church_menu.faith_statement') ?></a></li>
                        <li class="mb-2"><a href="https://graphe-ministry.org/articles/"><?= lang('App.nav.blog') ?></a></li>
                        <li class="mb-2"><a href="<?= base_url('contact') ?>"><?= lang('App.contact.title') ?></a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6><?= lang('App.footer.contact_head') ?></h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2">
                            <i class="bi bi-geo-alt-fill me-2"></i>
                            Jl. Danau Agung 2 No. 5 - 7
                            Sunter Agung, 
                            Jakarta Utara 14350
                            Indonesia
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-envelope-fill me-2"></i>
                            church@graphe-ministry.org
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-telephone-fill me-2"></i>
                            (021) 6471-4156
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom d-flex justify-content-between flex-wrap">
                <div>&copy; <?= date('Y') ?> Graphe Ministry. <?= lang('App.footer.rights') ?></div>
                <div><?= lang('App.footer.built_with') ?></div>
            </div>
        </div>
    </footer>

    <!-- JavaScript Bundle -->
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/posts-data.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.min.js') ?>"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 800, // Durasi animasi dalam milidetik (0.8 detik)
        once: false,    // Animasi hanya berjalan sekali saat di-scroll ke bawah
    });
    </script>
</body>
</html>