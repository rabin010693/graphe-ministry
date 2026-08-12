<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<!-- <header class="hero text-white py-5 position-relative overflow-hidden shadow-sm" style="background: linear-gradient(135deg, rgba(13, 110, 253, 0.85), rgba(33, 37, 41, 0.9)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold rounded-pill shadow-sm">The Truth Will Set You Free</span>
        <h1 class="display-5 fw-bold text-white mb-2" style="max-width: 760px; margin-left: auto; margin-right: auto;">Kebenaran Yang Memerdekakan</h1>
        <p class="lead text-light opacity-90 mx-auto" style="max-width: 650px;">Mendengar, merenungkan, dan membagikan kebenaran firman Tuhan yang logis, akademis, dan alkitabiah.</p>
    </div>
</header> -->


<!-- Hero Section -->
<header class="hero pb-5"><div class="container text-center pt-5 pb-5">
    <div class="eyebrow mb-3 text-uppercase">The Truth Will Set You Free</div>
        <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;">Kebenaran Yang Memerdekakan</h1>
        <p class="lead text-light opacity-90 mx-auto" style="max-width: 650px;">Mendengar, merenungkan, dan membagikan kebenaran firman Tuhan yang logis, akademis, dan alkitabiah.</p>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Bagian Pengantar / Deskripsi Program -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    <h2 class="h3 fw-bold text-dark mb-4 pb-2 border-bottom">Tentang Program Khotbah</h2>
                    <div class="text-secondary lh-lg mb-4">
                        <p class="mb-3">
                            Program <strong>“Kebenaran yang Memerdekakan”</strong> adalah serangkaian khotbah yang diputar di Radio Berita Klasik, AM 828 kHz, setiap harinya satu khotbah. Khotbah-khotbah ini membahas kebenaran yang teramat penting bagi semua manusia, sesuai dengan tahapan-tahapan yang logis. Khotbah pertama adalah mengenai ada atau tidaknya Allah, setelah itu dilanjutkan dengan khotbah mengenai Alkitab sebagai Firman Allah, untuk menuju kepada pemberitaan tentang jalan keselamatan.
                        </p>
                        <p class="mb-3">
                            Bagi mereka yang telah selamat, ada khotbah tentang bukti kelahiran kembali, dan memilih jemaat yang benar. Khotbah-khotbah ini sudah menjadi berkat bagi banyak sekali orang, baik yang belum percaya Tuhan, maupun yang sudah. Karena diberikan dalam bentuk uraian yang argumentatif, maka kebenaran di dalamnya mengajak setiap pendengar untuk berpikir dan merenungkan aspek-aspek terdalam kehidupan manusia. Anda pasti akan mendapat berkat dari program ini, dan bahkan ingin membagikannya kepada sebanyak mungkin orang.
                        </p>
                    </div>

                    <!-- Informasi Siaran & CD -->
                    <div class="row g-4 pt-3 border-top">
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded-3 h-100 border-start border-4 border-danger">
                                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-broadcast text-danger me-2"></i> Jadwal Siaran Radio</h6>
                                <p class="text-secondary small mb-0">
                                    Nikmati melalui <strong>Radio Berita Klasik, AM 828 kHz</strong> setiap hari pukul <strong>10:00 WIB</strong> dan <strong>18:00 WIB</strong>.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded-3 h-100 border-start border-4 border-primary">
                                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-disc text-primary me-2"></i> Pemesanan CD MP3</h6>
                                <p class="text-secondary small mb-0">
                                    Tersedia dalam bentuk CD (Format MP3) seharga <strong>Rp 25.000</strong> (ongkos produksi). Silakan hubungi toko buku Graphe.
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
                    <h3 class="h4 fw-bold text-dark mb-0">Daftar Audio Khotbah</h3>
                    <span class="badge bg-primary rounded-pill px-3 py-2">Format MP3 Tersedia</span>
                </div>

                <div class="vstack gap-3">
                    
                    <!-- Item Khotbah 1 -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white transition-all">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">1</div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-1 fs-6">Mengapa Percaya Ada Allah</h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> Dr. Steven E. Liauw</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                    <audio controls class="w-100" style="max-height: 40px;">
                                        <source src="<?= base_url('assets/audio/mengapa-percaya-ada-allah.mp3') ?>" type="audio/mpeg">
                                        Browser Anda tidak mendukung pemutar audio.
                                    </audio>
                                    <a href="<?= base_url('assets/audio/mengapa-percaya-ada-allah.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                        <i class="bi bi-download me-1"></i> Unduh MP3
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item Khotbah 2 -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white transition-all">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">2</div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-1 fs-6">Alkitab Satu-Satunya Firman Allah</h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> Dr. Suhento Liauw</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                    <audio controls class="w-100" style="max-height: 40px;">
                                        <source src="<?= base_url('assets/audio/alkitab-satu-satunya-firman-allah.mp3') ?>" type="audio/mpeg">
                                        Browser Anda tidak mendukung pemutar audio.
                                    </audio>
                                    <a href="<?= base_url('assets/audio/alkitab-satu-satunya-firman-allah.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                        <i class="bi bi-download me-1"></i> Unduh MP3
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item Khotbah 3 -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white transition-all">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">3</div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-1 fs-6">Alkitab Firman Tuhan</h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> Dr. Suhento Liauw</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                    <audio controls class="w-100" style="max-height: 40px;">
                                        <source src="<?= base_url('assets/audio/alkitab-firman-tuhan.mp3') ?>" type="audio/mpeg">
                                        Browser Anda tidak mendukung pemutar audio.
                                    </audio>
                                    <a href="<?= base_url('assets/audio/alkitab-firman-tuhan.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                        <i class="bi bi-download me-1"></i> Unduh MP3
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item Khotbah 4 -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white transition-all">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">4</div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-1 fs-6">Bagaimana Mendapat Kepastian Masuk Surga</h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> Dr. Suhento Liauw</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                    <audio controls class="w-100" style="max-height: 40px;">
                                        <source src="<?= base_url('assets/audio/kepastian-masuk-surga.mp3') ?>" type="audio/mpeg">
                                        Browser Anda tidak mendukung pemutar audio.
                                    </audio>
                                    <a href="<?= base_url('assets/audio/kepastian-masuk-surga.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                        <i class="bi bi-download me-1"></i> Unduh MP3
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item Khotbah 5 -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white transition-all">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">5</div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-1 fs-6">Kepastian Keselamatan</h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> Dr. Suhento Liauw</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                    <audio controls class="w-100" style="max-height: 40px;">
                                        <source src="<?= base_url('assets/audio/kepastian-keselamatan.mp3') ?>" type="audio/mpeg">
                                        Browser Anda tidak mendukung pemutar audio.
                                    </audio>
                                    <a href="<?= base_url('assets/audio/kepastian-keselamatan.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                        <i class="bi bi-download me-1"></i> Unduh MP3
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item Khotbah 6 -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white transition-all">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">6</div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-1 fs-6">Bukti Lahir Baru</h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> Dr. Suhento Liauw</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                    <audio controls class="w-100" style="max-height: 40px;">
                                        <source src="<?= base_url('assets/audio/bukti-lahir-baru.mp3') ?>" type="audio/mpeg">
                                        Browser Anda tidak mendukung pemutar audio.
                                    </audio>
                                    <a href="<?= base_url('assets/audio/bukti-lahir-baru.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                        <i class="bi bi-download me-1"></i> Unduh MP3
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item Khotbah 7 -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white transition-all">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">7</div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-1 fs-6">Mencari Gereja yang Alkitabiah</h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> Dr. Suhento Liauw</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                    <audio controls class="w-100" style="max-height: 40px;">
                                        <source src="<?= base_url('assets/audio/mencari-gereja-alkitabiah.mp3') ?>" type="audio/mpeg">
                                        Browser Anda tidak mendukung pemutar audio.
                                    </audio>
                                    <a href="<?= base_url('assets/audio/mencari-gereja-alkitabiah.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                        <i class="bi bi-download me-1"></i> Unduh MP3
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item Khotbah 8 -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white transition-all">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fw-bold fs-5 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">8</div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-1 fs-6">Membahas tentang Kalvinisme</h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-person-fill text-primary me-1"></i> Dr. Suhento Liauw</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 justify-content-lg-end">
                                    <audio controls class="w-100" style="max-height: 40px;">
                                        <source src="<?= base_url('assets/audio/membahas-kalvinisme.mp3') ?>" type="audio/mpeg">
                                        Browser Anda tidak mendukung pemutar audio.
                                    </audio>
                                    <a href="<?= base_url('assets/audio/membahas-kalvinisme.mp3') ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 text-nowrap shadow-sm" download>
                                        <i class="bi bi-download me-1"></i> Unduh MP3
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection('content') ?>