<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold">Other Biblical Congregations</span>
        <h1 class="display-5 fw-bold text-white mb-2">Jemaat-Jemaat Alkitabiah Lainnya</h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;">Gereja Baptis Independen Alkitabiah (GBIA)</p>
    </div>
</header>

<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Bagian Jemaat-Jemaat Alkitabiah -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    <div class="text-center mb-5">
                        <span class="text-danger fw-bold small text-uppercase tracking-wider">REKOMENDASI JEMAAT</span>
                        <h2 class="fw-bold text-dark display-6 mb-2">Jemaat-Jemaat Alkitabiah Lainnya</h2>
                        <div class="mx-auto bg-danger rounded mb-4" style="width: 60px; height: 3px;"></div>
                        <p class="text-secondary mx-auto" style="max-width: 800px; line-height: 1.8;">
                            Jika Anda memerlukan sebuah gereja yang baik di sekitar Anda, kami dapat merekomendasikan jemaat-jemaat berikut. Jemaat-jemaat ini digembalakan oleh tamatan-tamatan <strong>Graphe International Theological Seminary</strong> yang berdiri teguh memegang kebenaran tanpa kompromi.
                        </p>
                    </div>

                    <!-- Tabel Jemaat (Tanpa Border Luar / Borderless Table) -->
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="table-responsive m-0">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light text-uppercase text-secondary small fw-bold">
                                    <tr>
                                        <th scope="col" class="py-3 ps-4">Gembala Sidang</th>
                                        <th scope="col" class="py-3">Jemaat</th>
                                        <th scope="col" class="py-3">Alamat</th>
                                        <th scope="col" class="py-3 pe-4 text-end">Kontak</th>
                                    </tr>
                                </thead>
                                <tbody class="text-secondary" style="font-size: 0.95rem; line-height: 1.6;">
                                    
                                    <!-- KATEGORI: Jabodetabek -->
                                    <tr class="bg-light">
                                        <td colspan="4" class="py-3 px-4 text-success fw-bold text-uppercase small tracking-wider border-0">
                                            <i class="bi bi-geo-alt-fill me-1"></i> Jabodetabek
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. Mitorya</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Depok</td>
                                        <td class="py-3 text-muted">Jl. Tole Iskandar No. 50, Depok 2 Tengah</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081355564242" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0813-55564242
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. Kurnia Kristanto</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Kebenaran</td>
                                        <td class="py-3 text-muted">Ruko Plaza Cut Mutia Blok A5 No. 1, Bekasi Timur</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081355564242" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 085215681395    
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. Kurnia Kristanto</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Kebenaran</td>
                                        <td class="py-3 text-muted">Ruko Plaza Cut Mutia Blok A5 No. 1, Bekasi Timur</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085215681395" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-15681395
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Derry</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Petra</td>
                                        <td class="py-3 text-muted">Jl. Nurul Huda Blok W No. 6, Karina Sayang, Rawa Buaya, Cengkareng, Jakarta Barat</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:089636410008" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0896-36410008
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Darnus Laia</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Kasih Karunia</td>
                                        <td class="py-3 text-muted">Vila Nusa Indah Blok A2 No. 16 BJ Kulur (Pondok Gede)</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085208452761" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-08452761
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Deni Simarmata</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Immanuel</td>
                                        <td class="py-3 text-muted">Jl. Markisa 1 Blok RF No. 12 A, Harapan Indah</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085282750311" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none d-block mb-1">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-82750311
                                            </a>
                                            <a href="tel:08567796770" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none d-block">
                                                <i class="bi bi-whatsapp me-1"></i> 0856-7796770
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- KATEGORI: Banten -->
                                    <tr class="bg-light">
                                        <td colspan="4" class="py-3 px-4 text-success fw-bold text-uppercase small tracking-wider border-0">
                                            <i class="bi bi-geo-alt-fill me-1"></i> Banten
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. Arifan Kusuma</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Grammata</td>
                                        <td class="py-3 text-muted">Jl. Kelapa Cengkir, Ruko Santa Monika, Blok A, No.3, Kelapa 2, Gading Serpong, Tangerang</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081808828502" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0818-08828502
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Tryaman Zandroto</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Rhemata</td>
                                        <td class="py-3 text-muted">Kedaung Barat, Kec. Sepatan, Tangerang, Banten</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085276858027" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-76858027
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Faozan Gulo</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Tanjung Burung</td>
                                        <td class="py-3 text-muted">Kp. Beting RT 061/008, Kel. Tj. Burung, Kec. Teluk Naga, Tangerang, Banten 15510</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085313833904" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0853-13833904
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- KATEGORI: Jawa Barat -->
                                    <tr class="bg-light">
                                        <td colspan="4" class="py-3 px-4 text-success fw-bold text-uppercase small tracking-wider border-0">
                                            <i class="bi bi-geo-alt-fill me-1"></i> Jawa Barat
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Eliyusu Zai</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Bogor</td>
                                        <td class="py-3 text-muted">Perumahan Taman Yasmin Sektor 1, Nomor 3 (Belakang GOR Bulutangkis Yasmin), Bogor</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085287671713" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-87671713
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Villy Tuuk</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Bandung</td>
                                        <td class="py-3 text-muted">Jl. Sudirman No. 509a Ruko Kalimas, Bandung, Jawa Barat</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081286400756" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0812-86400756
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Alex Meaga</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Eirene</td>
                                        <td class="py-3 text-muted">Perumahan Griya Pratama Blok B1, No. 23, Bekasi, Tambun Selatan</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:082112769637" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0821-12769637
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Anugerah Ndruru</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Karawang</td>
                                        <td class="py-3 text-muted">Jl. Tuparev No. 429b, Nagasari, Karawang Barat, Kab. Karawang (Gedung GBI Pemulihan), Jawa Barat 41314</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085373372803" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0853-73372803
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- KATEGORI: Jawa Tengah -->
                                    <tr class="bg-light">
                                        <td colspan="4" class="py-3 px-4 text-success fw-bold text-uppercase small tracking-wider border-0 bg-success">
                                            <i class="bi bi-geo-alt-fill me-1"></i> Jawa Tengah
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Nikolas</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Salatiga</td>
                                        <td class="py-3 text-muted">Jl. Yudistira Raya No. 12 Grogol Baru, Salatiga, Jawa Tengah</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085287565432" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-87565432
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Supriyanto</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Batu Karang</td>
                                        <td class="py-3 text-muted">Jl. Randu No. 1, Mejing Wetan, Gamping, Sleman, Yogyakarta</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:082254124845" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0822-54124845
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. Rian Basuki</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Semarang</td>
                                        <td class="py-3 text-muted">Jl. Banteng Raya Utara No. 19, Semarang</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081384633040" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0813-84633040
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Christian Victor Kai</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Teleion Surakarta</td>
                                        <td class="py-3 text-muted">Jl. Raya Baturan, Ruko Fajar Indah No. 16, Baturan, Colomadu, Karanganyar, Surakarta</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:08568683038" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0856-8683038
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- KATEGORI: Jawa Timur -->
                                    <tr class="bg-light">
                                        <td colspan="4" class="py-3 px-4 text-success fw-bold text-uppercase small tracking-wider border-0">
                                            <i class="bi bi-geo-alt-fill me-1"></i> Jawa Timur
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Aris Lase</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Surabaya</td>
                                        <td class="py-3 text-muted">Jl. Wisma Lidah Kulon B.69, RT 04/RW 04, Kec. Lakarsantri, Surabaya</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:08568683038" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 085210990280
                                        </td>
                                    </tr>

                                    <!-- KATEGORI: Lampung -->
                                    <tr class="bg-light">
                                        <td colspan="4" class="py-3 px-4 text-success fw-bold text-uppercase small tracking-wider border-0">
                                            <i class="bi bi-geo-alt-fill me-1"></i> Lampung
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. Firman Legowo</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Filadelfia</td>
                                        <td class="py-3 text-muted">Jl. Maleo H7, Perum Gading Jaya 2 Kotabaru, Tanjung Karang Timur, Bandar Lampung</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081386515583" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0813-86515583
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. Teguh Sujarwo</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Jaya Guna</td>
                                        <td class="py-3 text-muted">Lampung Timur, Desa Sukaraja Tiga, Lapangan Catur</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081398056419" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0813-98056419
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. Joko Hadi Rinekso</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Candipuro</td>
                                        <td class="py-3 text-muted">Desa Bumi Jaya, Desa Titiwangi, Desa Rawa Selapan, Kec. Candipuro, Kab. Lampung Selatan</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085273205782" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-73205782
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Albert Limbong</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Dipasena</td>
                                        <td class="py-3 text-muted">Jalur 8 No. 8 Blok 13, Kampung Bumi Dipasena Sejahtera, Kec. Rawajitu Timur, Kab. Tulang Bawang, Lampung</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081274785148" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0812-74785148
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- KATEGORI: Sumatera Utara -->
                                    <tr class="bg-light">
                                        <td colspan="4" class="py-3 px-4 text-success fw-bold text-uppercase small tracking-wider border-0">
                                            <i class="bi bi-geo-alt-fill me-1"></i> Sumatera Utara
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. Are Eli Laia</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Metanoia</td>
                                        <td class="py-3 text-muted">Jl. Saribudolok Sawah 3, Simpang Panei, Kec. Panombeian Panei, Kab. Simalungun, Pematangsiantar</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085275626160" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-75626160
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Aro Halawa</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Stulos</td>
                                        <td class="py-3 text-muted">Jl. Irigasi No. 5, Kel. Mangga, Medan Tuntungan</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085214958442" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-14958442
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Marudut Sianturi</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Munson-Lyman</td>
                                        <td class="py-3 text-muted">Jl. Dr. T.D. Pardede, Gg. Dame No. 788, Kel. Huta Toruan VII, Kec. Tarutung</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085360653391" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0853-60653391
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- KATEGORI: Sumatera Utara – Nias -->
                                    <tr class="bg-light">
                                        <td colspan="4" class="py-3 px-4 text-success fw-bold text-uppercase small tracking-wider border-0">
                                            <i class="bi bi-geo-alt-fill me-1"></i> Sumatera Utara - NIAS
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Rukun Harefa</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Sola Gracia</td>
                                        <td class="py-3 text-muted">Jl. Lahusa-Gomo Km 0.5 Desa Sobawagoli, Kec. Lahusa, Kab. Nias Selatan</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:082166044356" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0821-66044356
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Terserah Laia</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Sisarahili</td>
                                        <td class="py-3 text-muted">Desa Sisarahili Susua, Kec. Ulususua, Kab. Nias Selatan, Sumut</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085284573397" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-84573397
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Rukun Harefa</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Fundamental</td>
                                        <td class="py-3 text-muted">Jl. Saonigeho Km. 2, Kec. Teluk Dalam, Kab. Nias Selatan</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:082166044356" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0821-66044356
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Ikhtiar Jawa Waruwu</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Gido</td>
                                        <td class="py-3 text-muted">Jl. Pelud Binaka KM. 26 Simpang Duria, Desa Hilizoi, Kec. Gido, Kab. Nias</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:082253625251" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0822-53625251
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Hermanto Bago</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Berea</td>
                                        <td class="py-3 text-muted">Taman Rekreasi, Muara Indah Km 14,5, Gunung Sitoli</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081385392281" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0813-85392281
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- KATEGORI: Riau -->
                                    <tr class="bg-light">
                                        <td colspan="4" class="py-3 px-4 text-success fw-bold text-uppercase small tracking-wider border-0">
                                            <i class="bi bi-geo-alt-fill me-1"></i> RIAU
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Alur Lase</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Agape</td>
                                        <td class="py-3 text-muted">Jl. Pastoran - Palas, Pekanbaru</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081385392281" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 081299834805
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- KATEGORI: Kalimantan Barat -->
                                    <tr class="bg-light">
                                        <td colspan="4" class="py-3 px-4 text-success fw-bold text-uppercase small tracking-wider border-0">
                                            <i class="bi bi-geo-alt-fill me-1"></i> Kalimantan Barat
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. John Sung</td>
                                        <td class="py-3 text-danger fw-bold">GBIA John The Baptist</td>
                                        <td class="py-3 text-muted">Jl. Parit No. 2, Sei Raya, Ruko Rumah Baca Bhineka Tunggal Ika</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:08565000777" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0856-5000777
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Mulyono Ngui</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Agape</td>
                                        <td class="py-3 text-muted">Jl. Trans-Kalimantan, Km. 50, Desa Teluk Bakung, Kec. Sei Ambawang, Kab. Kubu Raya, Kalbar</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085215539480" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-15539480
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. Irwanto</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Anugerah</td>
                                        <td class="py-3 text-muted">Jl. Pahlawan Gg. Mandiri No. 4, Kel. Roban, Singkawang Tengah</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081345265994" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0813-45265994
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. Silwanus Tefbana</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Eben Haezer</td>
                                        <td class="py-3 text-muted">Jl. Y. C. Oevang Oeray, Baning Kota, Sintang, Kalimantan Barat</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081339471549" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0813-39471549
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Aji Sastro</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Logos</td>
                                        <td class="py-3 text-muted">Jl. Swadaya No. 401, Rt. 001/Rw. 001, Kel. Pasiran, Singkawang Barat</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085252300383" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-52300383
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Markus Bumbun</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Siloam</td>
                                        <td class="py-3 text-muted">Dusun Senunuk RT 02 Desa Agak, Kec. Sebangki, Kab. Landak, Kalbar 78356</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085245126752" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0852-45126752
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Suandi Rangking</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Betel</td>
                                        <td class="py-3 text-muted">SP 10, Desa Kumpang Bis, Kec. Belitang Hilir, Kab. Sekadau, Kalbar</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:082152486622" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none d-block mb-1">
                                                <i class="bi bi-whatsapp me-1"></i> 0821-52486622
                                            </a>
                                            <a href="tel:082154943451" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none d-block">
                                                <i class="bi bi-whatsapp me-1"></i> 0821-54943451
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Agus</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Anabaptis Pateh</td>
                                        <td class="py-3 text-muted">Jl. Pateh, Sungai Ayyak</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:085692265564" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0856-92265564
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Julmansef Zai</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Kasih</td>
                                        <td class="py-3 text-muted">Jl. Trans Kalimantan Km 45, Lintang Batang</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081398828479" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0813-98828479
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Simson</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Nanga Mau</td>
                                        <td class="py-3 text-muted">Nanga Mau, Kalimantan Barat</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:081350065209" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0813-50065209
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Tommy Samusi</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Pontianak</td>
                                        <td class="py-3 text-muted">Kantor Prudential, PRU Victory Agency, Jl. Nusa Indah 1 No. 59 Pontianak, Kalbar</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:082254134300" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0822-54134300
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Ev. Roy Torang Butar-Butar</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Samalantan</td>
                                        <td class="py-3 text-muted">Samalantan</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:082259512677" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 0822-59512677
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- KATEGORI: Kalimantan Timur -->
                                    <tr class="bg-light">
                                        <td colspan="4" class="py-3 px-4 text-success fw-bold text-uppercase small tracking-wider border-0">
                                            <i class="bi bi-geo-alt-fill me-1"></i> Kalimantan Timur
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-4 fw-semibold text-dark">Gbl. Supriadi</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Aletheia Balikpapan</td>
                                        <td class="py-3 text-muted">Ruko Balikpapan Regency Blok W6 No. 36, Balikpapan, Kaltim</td>
                                        <td class="py-3 pe-4 text-end text-nowrap">
                                            <a href="tel:082259512677" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-decoration-none">
                                                <i class="bi bi-whatsapp me-1"></i> 085691222436
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- KATEGORI: Sulawesi Utara -->
                                    <tr class="table-danger bg-opacity-10 fw-bold text-dark">
                                        <td colspan="4" class="py-2 px-3 text-danger text-uppercase small tracking-wider">Sulawesi Utara</td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-3 fw-semibold text-dark">Ev. Hamlek Salaijang</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Dikaiosune</td>
                                        <td class="py-3">Jl. A. A. Maramis No. 310 Mapanget, Paniki Bawah, Ling. 9, Manado, Sulut</td>
                                        <td class="py-3 pe-3 text-end text-nowrap"><a href="tel:081311286848" class="text-decoration-none text-secondary"><i class="bi bi-whatsapp text-success me-1"></i>0813-11286848</a></td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-3 fw-semibold text-dark">Ev. Johnny Tumakaka</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Bitung</td>
                                        <td class="py-3">Jl. Walanda Maramis No. 84 (Depan Kantor PLN Madidir), Kel. Madidir Ure, Kec. Madidir, Kota Bitung, Sulut 95515</td>
                                        <td class="py-3 pe-3 text-end text-nowrap"><a href="tel:085245163668" class="text-decoration-none text-secondary"><i class="bi bi-whatsapp text-success me-1"></i>0852-45163668</a></td>
                                    </tr>

                                    <!-- KATEGORI: Sulawesi Selatan -->
                                    <tr class="table-danger bg-opacity-10 fw-bold text-dark">
                                        <td colspan="4" class="py-2 px-3 text-danger text-uppercase small tracking-wider">Sulawesi Selatan</td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-3 fw-semibold text-dark">Ev. Marthen Malawa</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Soteria Makassar</td>
                                        <td class="py-3">Jl. Tuvolep II Lorong 3, No. 27, Pangkalan TNI Angkatan Udara (AURI), Kec. Mandai</td>
                                        <td class="py-3 pe-3 text-end text-nowrap"><a href="tel:081343892506" class="text-decoration-none text-secondary"><i class="bi bi-whatsapp text-success me-1"></i>0813-43892506</a></td>
                                    </tr>

                                    <!-- KATEGORI: Bali -->
                                    <tr class="table-danger bg-opacity-10 fw-bold text-dark">
                                        <td colspan="4" class="py-2 px-3 text-danger text-uppercase small tracking-wider">Bali</td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-3 fw-semibold text-dark">Ev. Meifel Kontra</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Denpasar</td>
                                        <td class="py-3">Jl. Tibung Sari No. C 12, Denpasar</td>
                                        <td class="py-3 pe-3 text-end text-nowrap"><a href="tel:087862244565" class="text-decoration-none text-secondary"><i class="bi bi-whatsapp text-success me-1"></i>0878-62244565</a></td>
                                    </tr>

                                    <!-- KATEGORI: Nusa Tenggara Timur -->
                                    <tr class="table-danger bg-opacity-10 fw-bold text-dark">
                                        <td colspan="4" class="py-2 px-3 text-danger text-uppercase small tracking-wider">Nusa Tenggara Timur</td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-3 fw-semibold text-dark">Gbl. Dance Suat</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Agape Kupang</td>
                                        <td class="py-3">Jl. Pluto IV Belakang Hotel Ledetadu, Kupang, NTT</td>
                                        <td class="py-3 pe-3 text-end text-nowrap">
                                            <a href="tel:082124198797" class="text-decoration-none text-secondary d-block"><i class="bi bi-whatsapp text-success me-1"></i>0821-24198797</a>
                                            <a href="mailto:dance1suyanto.suat@gmail.com" class="text-decoration-none text-muted small"><i class="bi bi-envelope me-1"></i>Email</a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-3 fw-semibold text-dark">Ev. Markus Rohi</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Amazing Grace</td>
                                        <td class="py-3">Jl. Ai Penawai Sabu, NTT</td>
                                        <td class="py-3 pe-3 text-end text-nowrap"><a href="tel:081294221947" class="text-decoration-none text-secondary"><i class="bi bi-whatsapp text-success me-1"></i>0812-94221947</a></td>
                                    </tr>

                                    <!-- KATEGORI: Papua -->
                                    <tr class="table-danger bg-opacity-10 fw-bold text-dark">
                                        <td colspan="4" class="py-2 px-3 text-danger text-uppercase small tracking-wider">Papua</td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-3 fw-semibold text-dark">Gbl. Tumbur Lumbanraja</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Abepura</td>
                                        <td class="py-3">Jl. Baru Pasar Youtefa (Blkng SMKN 5 Jayapura, RT/RW 004/06, Kel. Wai Mhorock, Kec. Abepura</td>
                                        <td class="py-3 pe-3 text-end text-nowrap"><a href="tel:08114811981" class="text-decoration-none text-secondary"><i class="bi bi-whatsapp text-success me-1"></i>0811-4811981</a></td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td class="py-3 ps-3 fw-semibold text-dark">Ev. Nanius Omu</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Wamena</td>
                                        <td class="py-3">Jl. Hom Hom Pikhe di belakang Kampus II Yapis, Wamena, Papua</td>
                                        <td class="py-3 pe-3 text-end text-nowrap"><a href="tel:082350667514" class="text-decoration-none text-secondary"><i class="bi bi-whatsapp text-success me-1"></i>0823-50667514</a></td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-3 fw-semibold text-dark">Ev. Bernabas Nubatonis</td>
                                        <td class="py-3 text-danger fw-bold">GBIA Sentani</td>
                                        <td class="py-3">Perumahan Dunlop – Hawai – Sentani</td>
                                        <td class="py-3 pe-3 text-end text-nowrap"><a href="tel:081288437150" class="text-decoration-none text-secondary"><i class="bi bi-whatsapp text-success me-1"></i>0812-88437150</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Footer Callout -->
                    <div class="mt-5 p-4 bg-light rounded-4 text-center border-start border-danger border-4">
                        <p class="mb-0 text-secondary">
                            <i class="bi bi-info-circle-fill text-danger me-1"></i> Klik di sini untuk melihat berbagai pelayanan pembukaan jemaat yang sedang didukung oleh GBIA Graphe.
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection('content') ?>