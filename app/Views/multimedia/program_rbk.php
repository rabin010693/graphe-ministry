<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/img/hero-bg.jpg') ?>') center/cover no-repeat;">
    <div class="container text-center py-5 position-relative">
        <span class="badge bg-danger text-uppercase tracking-wider px-3 py-2 mb-3 fw-semibold" data-aos="fade-down" data-aos-duration="800">radio RBK</span>
        <h1 class="display-5 fw-bold text-white mb-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Program Radio Berita Klasik - AM 828</h1>
        <p class="lead text-light opacity-85 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Menyebarluaskan pengajaran Alkitab yang logis, akademis, dan mendalam melalui karya tulis rohani dan teologis berkualitas</p>
    </div>
</header>


<!-- Main Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        
        <!-- Header Informasi Jadwal -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="h3 fw-bold text-dark mb-3">Program Mingguan RBK</h2>
                <p class="text-muted mb-2"><i class="bi bi-clock me-1 text-primary"></i> Semua waktu dalam jadwal di bawah adalah <strong>WIB (GMT +7)</strong></p>
                <div class="alert alert-primary bg-white border-0 shadow-sm rounded-4 p-3 text-secondary small d-inline-block">
                    <i class="bi bi-info-circle-fill text-primary me-2"></i> Jadwal di bawah ini adalah untuk <strong>radio internet</strong>. Jadwal untuk radio biasa sama, kecuali dimulai pada pukul <strong>05:00 WIB hingga 23:00 WIB</strong>.
                </div>
            </div>
        </div>

        <!-- Tabel 1: Senin - Jumat -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white mb-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="card-header bg-danger text-white py-3 px-4">
                <h5 class="card-title mb-0 fw-bold"><i class="bi bi-calendar-week me-2"></i>Jadwal Program (Senin - Jumat)</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 text-center text-md-start border-light">
                    <thead class="table-light text-uppercase fs-7 text-secondary">
                        <tr>
                            <th class="py-3 px-4 text-center" style="width: 18%;">Waktu (WIB)</th>
                            <th class="py-3 px-3">Senin</th>
                            <th class="py-3 px-3">Selasa</th>
                            <th class="py-3 px-3">Rabu</th>
                            <th class="py-3 px-3">Kamis</th>
                            <th class="py-3 px-3">Jumat</th>
                        </tr>
                    </thead>
                    <tbody class="border-top-0 text-secondary small">
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">00:00 - 01:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Through the Bible</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">01:00 - 02:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Pembacaan Alkitab</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">02:00 - 03:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Lagu-lagu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">03:00 - 04:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Pembacaan Alkitab</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">04:00 - 05:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Mutiara Kebenaran</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">05:00 - 06:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Pembacaan Alkitab</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">06:00 - 07:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Through the Bible</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">07:00 - 08:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Sapa-Sapa Pagi</td>
                        </tr>

                        <!-- Sesi Kebenaran yang Memerdekakan Pagi -->
                        <tr class="table-primary bg-opacity-10">
                            <td rowspan="2" class="fw-bold text-primary text-center align-middle bg-white border-end">08:00 - 09:00</td>
                            <td colspan="5" class="fw-semibold text-center py-2 bg-primary-subtle text-primary">Kebenaran yang Memerdekakan</td>
                        </tr>
                        <tr>
                            <td class="fw-medium text-dark">Mengapa Saya Percaya Ada Allah</td>
                            <td class="fw-medium text-dark">Alkitab Satu-satunya Firman Allah</td>
                            <td class="fw-medium text-dark">Kepastian Keselamatan</td>
                            <td class="fw-medium text-dark">Bukti Orang yang Sudah Lahir Baru</td>
                            <td class="fw-medium text-dark">Mencari Gereja yang Alkitabiah</td>
                        </tr>

                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">09:00 - 10:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Lagu-Lagu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">10:00 - 11:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Mutiara Kebenaran</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">11:00 - 12:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Pembacaan Alkitab</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">12:00 - 13:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Lagu-Lagu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">13:00 - 14:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Through the Bible</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">14:00 - 16:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Lagu-Lagu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">16:00 - 17:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Mutiara Kebenaran</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">17:00 - 18:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Simfoni Senja</td>
                        </tr>

                        <!-- Sesi Kebenaran yang Memerdekakan Sore -->
                        <tr class="table-primary bg-opacity-10">
                            <td rowspan="2" class="fw-bold text-primary text-center align-middle bg-white border-end">18:00 - 19:00</td>
                            <td colspan="5" class="fw-semibold text-center py-2 bg-primary-subtle text-primary">Kebenaran yang Memerdekakan</td>
                        </tr>
                        <tr>
                            <td class="fw-medium text-dark">Mengapa Saya Percaya Ada Allah</td>
                            <td class="fw-medium text-dark">Alkitab Satu-satunya Firman Allah</td>
                            <td class="fw-medium text-dark">Kepastian Keselamatan</td>
                            <td class="fw-medium text-dark">Bukti Orang yang Sudah Lahir Baru</td>
                            <td class="fw-medium text-dark">Mencari Gereja yang Alkitabiah</td>
                        </tr>

                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">19:00 - 20:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Pembacaan Alkitab</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">20:00 - 21:00</td>
                            <td colspan="4" class="text-center text-muted fst-italic">Lagu-lagu</td>
                            <td class="fw-semibold text-primary text-center">Bible Answers</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">21:00 - 22:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Through the Bible</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">22:00 - 23:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Mutiara Kebenaran</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">23:00 - 24:00</td>
                            <td colspan="5" class="text-center text-muted fst-italic">Lagu-lagu</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tabel 2: Sabtu & Minggu -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white" data-aos="fade-up" data-aos-duration="1000">
            <div class="card-header bg-secondary text-white py-3 px-4">
                <h5 class="card-title mb-0 fw-bold"><i class="bi bi-calendar-weekend me-2"></i>Jadwal Program (Sabtu & Minggu)</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 text-center text-md-start border-light">
                    <thead class="table-light text-uppercase fs-7 text-secondary">
                        <tr>
                            <th class="py-3 px-4 text-center" style="width: 18%;">Waktu (WIB)</th>
                            <th class="py-3 px-3" style="width: 41%;">Sabtu</th>
                            <th class="py-3 px-3" style="width: 41%;">Minggu</th>
                        </tr>
                    </thead>
                    <tbody class="border-top-0 text-secondary small">
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">00:00 - 01:00</td>
                            <td colspan="2" class="text-center text-muted fst-italic">Lagu-lagu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">01:00 - 02:00</td>
                            <td colspan="2" class="text-center text-muted fst-italic">Pembacaan Alkitab</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">02:00 - 03:00</td>
                            <td colspan="2" class="text-center text-muted fst-italic">Lagu-lagu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">03:00 - 04:00</td>
                            <td colspan="2" class="text-center text-muted fst-italic">Pembacaan Alkitab</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">04:00 - 05:00</td>
                            <td colspan="2" class="text-center text-muted fst-italic">Lagu-lagu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">05:00 - 06:00</td>
                            <td colspan="2" class="text-center text-muted fst-italic">Pembacaan Alkitab</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">06:00 - 07:00</td>
                            <td colspan="2" class="text-center text-muted fst-italic">Khotbah I</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">07:00 - 08:00</td>
                            <td class="fw-medium text-dark">Sapa-Sapa Pagi</td>
                            <td class="fw-medium text-dark">Khotbah II</td>
                        </tr>

                        <!-- Bagian 08:00-09:00 -->
                        <tr class="table-primary bg-opacity-10">
                            <td rowspan="2" class="fw-bold text-primary text-center align-middle bg-white border-end">08:00 - 09:00</td>
                            <td colspan="2" class="fw-semibold text-center py-2 bg-primary-subtle text-primary">Kebenaran yang Memerdekakan</td>
                        </tr>
                        <tr>
                            <td class="fw-medium text-dark">Mendapat Kepastian masuk Surga</td>
                            <td class="fw-medium text-dark">Mendapat Kepastian masuk Surga</td>
                        </tr>

                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">09:00 - 10:00</td>
                            <td class="fw-medium text-dark">Lagu-Lagu</td>
                            <td class="fw-medium text-dark">Khotbah III</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">10:00 - 11:00</td>
                            <td class="fw-medium text-dark">Putar ulang khotbah I</td>
                            <td class="fw-medium text-dark">Lagu-lagu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">11:00 - 12:00</td>
                            <td colspan="2" class="text-center text-muted fst-italic">Pembacaan Alkitab</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">12:00 - 13:00</td>
                            <td class="fw-medium text-dark">Khotbah II</td>
                            <td class="fw-medium text-dark">Khotbah IV</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">13:00 - 14:00</td>
                            <td colspan="2" class="text-center text-muted fst-italic">Lagu-lagu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">14:00 - 15:00</td>
                            <td class="fw-medium text-dark">Khotbah III</td>
                            <td class="fw-medium text-dark">Lagu-lagu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">15:00 - 16:00</td>
                            <td colspan="2" class="text-center text-muted fst-italic">Lagu-lagu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">16:00 - 17:00</td>
                            <td class="fw-medium text-dark">Khotbah IV</td>
                            <td class="fw-medium text-dark">Putar ulang khotbah II</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">17:00 - 18:00</td>
                            <td class="fw-medium text-dark">Simfoni Senja</td>
                            <td class="fw-medium text-dark">Lagu-lagu</td>
                        </tr>

                        <!-- Bagian 18:00-19:00 -->
                        <tr class="table-primary bg-opacity-10">
                            <td rowspan="2" class="fw-bold text-primary text-center align-middle bg-white border-end">18:00 - 19:00</td>
                            <td colspan="2" class="fw-semibold text-center py-2 bg-primary-subtle text-primary">Kebenaran yang Memerdekakan</td>
                        </tr>
                        <tr>
                            <td class="fw-medium text-dark">Mendapat Kepastian masuk Surga</td>
                            <td class="fw-medium text-dark">Mendapat Kepastian masuk Surga</td>
                        </tr>

                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">19:00 - 20:00</td>
                            <td colspan="2" class="text-center text-muted fst-italic">Pembacaan Alkitab</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">20:00 - 21:00</td>
                            <td class="fw-medium text-dark">Lagu-lagu</td>
                            <td class="fw-medium text-dark">Putar ulang khotbah III</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">21:00 - 22:00</td>
                            <td class="fw-medium text-dark">Putar ulang khotbah II</td>
                            <td class="fw-medium text-dark">Lagu-lagu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center">22:00 - 23:00</td>
                            <td class="fw-medium text-dark">Lagu-lagu</td>
                            <td class="fw-medium text-dark">Putar ulang khotbah I</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark text-center bg-light">23:00 - 24:00</td>
                            <td colspan="2" class="text-center text-muted fst-italic">Lagu-lagu</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection('content') ?>