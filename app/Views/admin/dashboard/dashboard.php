    <?= $this->extend('layouts/admin') ?>

    <?= $this->section('content') ?>


    <!-- Alert Notifikasi Flashdata -->
    <?php if (session()->getFlashdata('message')): ?>
        <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm" role="alert">
            <i class="bi bi-check-circle me-1"></i> <?= session()->getFlashdata('message') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>


    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Dashboard</h2>
            <p class="text-muted small mb-0">Ringkasan aktivitas dan data sistem Graphe Ministry</p>
        </div>
        <!-- Tambahkan d-none d-md-inline-block di sini -->
        <span class="badge bg-danger fs-6 px-3 py-2 d-none d-md-inline-block">
            <i class="bi bi-person-check-fill me-1"></i> Selamat datang, <?= session()->get('user_name') ?? 'Admin' ?>
        </span>
    </div>

    <!-- ================= 1. STAT CARDS (METRICS) ================= -->
    <div class="row g-3 mb-4">
        <!-- Postingan -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm p-3 bg-white h-100 border-start border-primary border-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted small text-uppercase fw-semibold mb-1">Total Postingan</h6>
                        <h3 class="fw-bold mb-0 text-dark"><?= $total_posts ?? 0 ?></h3>
                    </div>
                    <div class="p-3 bg-primary bg-opacity-10 rounded-3 text-primary">
                        <i class="bi bi-journal-text fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Artikel & Literatur -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm p-3 bg-white h-100 border-start border-success border-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted small text-uppercase fw-semibold mb-1">Artikel & Buku</h6>
                        <h3 class="fw-bold mb-0 text-dark"><?= $total_articles ?? 0 ?></h3>
                    </div>
                    <div class="p-3 bg-success bg-opacity-10 rounded-3 text-success">
                        <i class="bi bi-book fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Audio Khotbah -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm p-3 bg-white h-100 border-start border-warning border-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted small text-uppercase fw-semibold mb-1">Audio Khotbah</h6>
                        <h3 class="fw-bold mb-0 text-dark"><?= $total_audios ?? 0 ?></h3>
                    </div>
                    <div class="p-3 bg-warning bg-opacity-10 rounded-3 text-warning">
                        <i class="bi bi-music-note fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pesan Masuk -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm p-3 bg-white h-100 border-start border-danger border-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted small text-uppercase fw-semibold mb-1">Pesan Contact Us</h6>
                        <h3 class="fw-bold mb-0 text-dark"><?= $total_contacts ?? 0 ?></h3>
                    </div>
                    <div class="p-3 bg-danger bg-opacity-10 rounded-3 text-danger">
                        <i class="bi bi-envelope-exclamation fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= 2. RINGKASAN DATA PELAYANAN ================= -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 text-center bg-white">
                <i class="bi bi-building text-secondary fs-2 mb-1"></i>
                <h5 class="fw-bold mb-0"><?= $total_churches ?? 0 ?></h5>
                <small class="text-muted">Gereja GBIA</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 text-center bg-white">
                <i class="bi bi-people text-secondary fs-2 mb-1"></i>
                <h5 class="fw-bold mb-0"><?= $total_panti_staff ?? 0 ?></h5>
                <small class="text-muted">Pengurus Panti</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 text-center bg-white">
                <i class="bi bi-heart text-secondary fs-2 mb-1"></i>
                <h5 class="fw-bold mb-0"><?= $total_children ?? 0 ?></h5>
                <small class="text-muted">Anak Asuh Panti</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 text-center bg-white">
                <i class="bi bi-calendar-event text-secondary fs-2 mb-1"></i>
                <h5 class="fw-bold mb-0"><?= $total_events ?? 0 ?></h5>
                <small class="text-muted">Agenda / Event</small>
            </div>
        </div>
    </div>

    <!-- ================= 3. WIDGET AKTIVITAS TERBARU & AKSES CEPAT ================= -->
    <div class="row g-3">
        <!-- Pesan Masuk Terbaru -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm bg-white h-100">
                <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
                    <h6 class="fw-bold mb-0"><i class="bi bi-chat-left-text text-danger me-2"></i>Pesan Masuk Terbaru</h6>
                    <a href="<?= base_url('admin/contacts') ?>" class="btn btn-sm btn-outline-danger">Lihat Semua</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light small">
                                <tr>
                                    <th>Nama</th>
                                    <th>Subjek / Pesan</th>
                                    <th>Tanggal</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($latest_contacts)): ?>
                                    <?php foreach ($latest_contacts as $c): ?>
                                        <tr>
                                            <td class="fw-semibold"><?= esc($c['name']) ?></td>
                                            <td>
                                                <span class="d-inline-block text-truncate" style="max-width: 250px;">
                                                    <?= esc($c['subject'] ?? $c['message']) ?>
                                                </span>
                                            </td>
                                            <td class="small text-muted"><?= date('d M Y', strtotime($c['created_at'])) ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('admin/contacts/read/' . $c['id']) ?>" class="btn btn-sm btn-light">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4" class="text-center text-muted py-3">Belum ada pesan masuk.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions / Pintasan -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm bg-white h-100">
                <div class="card-header bg-white border-0 py-3">
                    <h6 class="fw-bold mb-0"><i class="bi bi-lightning-charge text-warning me-2"></i>Akses Cepat</h6>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="<?= base_url('admin/posts') ?>" class="btn btn-light text-start p-2.5 shadow-none border">
                            <i class="bi bi-plus-circle text-primary me-2"></i> Kelola Postingan
                        </a>
                        <a href="<?= base_url('admin/articles') ?>" class="btn btn-light text-start p-2.5 shadow-none border">
                            <i class="bi bi-file-earmark-plus text-success me-2"></i> Kelola Artikel / Buku
                        </a>
                        <a href="<?= base_url('admin/audios') ?>" class="btn btn-light text-start p-2.5 shadow-none border">
                            <i class="bi bi-cloud-upload text-warning me-2"></i> Upload Audio Khotbah
                        </a>
                        <a href="<?= base_url('admin/pedang-roh') ?>" class="btn btn-light text-start p-2.5 shadow-none border">
                            <i class="bi bi-shield-check text-info me-2"></i> Update Pedang Roh
                        </a>
                        <a href="<?= base_url('/') ?>" target="_blank" class="btn btn-outline-dark text-start p-2.5 mt-2">
                            <i class="bi bi-box-arrow-up-right me-2"></i> Lihat Halaman Depan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>