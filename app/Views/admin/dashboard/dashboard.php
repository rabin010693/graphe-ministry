<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Dashboard</h2>
    <span class="badge bg-primary">Selamat datang, Admin</span>
</div>

<div class="row g-3">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3 bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted">Total Postingan</h6>
                    <h3 class="fw-bold mb-0">12</h3>
                </div>
                <i class="bi bi-journal-text text-primary fs-1"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3 bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted">Pesan Baru</h6>
                    <h3 class="fw-bold mb-0">5</h3>
                </div>
                <i class="bi bi-envelope text-danger fs-1"></i>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>