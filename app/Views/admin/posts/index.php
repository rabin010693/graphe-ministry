<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<!-- Alert Notifikasi Flashdata -->
<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm" role="alert">
        <i class="bi bi-check-circle me-1"></i> <?= session()->getFlashdata('message') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<!-- Stats Card Dinamis -->
<div class="row g-2 g-md-3 mb-4">
    <div class="col-6 col-md-4">
        <div class="card stat-card p-2 p-md-3 d-flex flex-row align-items-center gap-2 gap-md-3 border-0 shadow-sm rounded-3 bg-white h-100">
            <div class="stat-icon p-2 p-md-3 rounded" style="background:rgba(200,32,47,.1); color:#c8202f;">
                <i class="bi bi-file-earmark-text fs-5 fs-md-4"></i>
            </div>
            <div>
                <div class="fs-5 fs-md-4 fw-bold"><?= $stat_total ?></div>
                <div class="text-muted small text-truncate">Total Postingan</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="card stat-card p-2 p-md-3 d-flex flex-row align-items-center gap-2 gap-md-3 border-0 shadow-sm rounded-3 bg-white h-100">
            <div class="stat-icon p-2 p-md-3 rounded" style="background:rgba(25,135,84,.1); color:#198754;">
                <i class="bi bi-check-circle fs-5 fs-md-4"></i>
            </div>
            <div>
                <div class="fs-5 fs-md-4 fw-bold"><?= $stat_published ?></div>
                <div class="text-muted small text-truncate">Dipublikasikan</div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card stat-card p-2 p-md-3 d-flex flex-row align-items-center gap-2 gap-md-3 border-0 shadow-sm rounded-3 bg-white h-100">
            <div class="stat-icon p-2 p-md-3 rounded" style="background:rgba(255,193,7,.15); color:#c99a06;">
                <i class="bi bi-pencil-square fs-5 fs-md-4"></i>
            </div>
            <div>
                <div class="fs-5 fs-md-4 fw-bold"><?= $stat_draft ?></div>
                <div class="text-muted small text-truncate">Draft</div>
            </div>
        </div>
    </div>
</div>

<!-- Header Action & Search -->
<div class="card border-0 shadow-sm rounded-3 mb-4">
    <div class="card-body p-3">
        <div class="row g-2 align-items-center justify-content-between">
            <div class="col-12 col-md-auto order-2 order-md-1">
                <button class="btn-church w-100 w-md-auto py-2 px-3 fw-semibold d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#postModal" onclick="resetForm()">
                    <i class="bi bi-plus-lg me-1"></i>Postingan Baru
                </button>
            </div>
            <div class="col-12 col-md-4 order-1 order-md-2">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0 text-muted"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control border-start-0 ps-0" id="searchInput" placeholder="Cari postingan...">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Data Container -->
<div class="card border-0 shadow-sm rounded-3 overflow-hidden">
    
    <!-- Mode 1: Desktop Table (Tersembunyi di Ponsel) -->
    <div class="table-responsive d-none d-md-block">
        <table class="table table-hover align-middle mb-0 custom-admin-table">
            <thead class="table-light">
                <tr>
                    <th class="ps-4 text-secondary text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Judul</th>
                    <th class="text-secondary text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Kategori</th>
                    <th class="text-secondary text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Penulis</th>
                    <th class="text-secondary text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Tanggal</th>
                    <th class="text-secondary text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Status</th>
                    <th class="text-end pe-4 text-secondary text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($posts)): ?>
                    <?php foreach ($posts as $post): ?>
                        <tr class="post-item">
                            <td class="ps-4">
                                <div class="fw-bold text-dark text-truncate" style="max-width: 280px; font-size: 0.9rem;" title="<?= esc($post['title']) ?>">
                                    <?= esc($post['title']) ?>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-light text-dark border px-2 py-1 font-monospace" style="font-weight: 500;">
                                    <i class="bi bi-tag me-1 text-muted"></i><?= esc($post['category']) ?>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-danger-subtle text-danger d-inline-flex align-items-center justify-content-center me-2" style="width: 26px; height: 26px; font-size: 0.75rem; font-weight: 700;">
                                        <?= strtoupper(substr($post['author'] ?? 'A', 0, 1)) ?>
                                    </div>
                                    <span class="text-dark small font-weight-medium"><?= esc($post['author']) ?></span>
                                </div>
                            </td>
                            <td class="small text-muted">
                                <i class="bi bi-calendar3 me-1 opacity-75"></i><?= date('d M Y', strtotime($post['date'])) ?>
                            </td>
                            <td>
                                <?php if ($post['status'] === 'Published'): ?>
                                    <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2 py-1">
                                        <i class="bi bi-check-circle-fill me-1"></i>Published
                                    </span>
                                <?php else: ?>
                                    <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle rounded-pill px-2 py-1">
                                        <i class="bi bi-pencil-fill me-1"></i>Draft
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="text-end pe-4">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-light border text-secondary me-1 py-1 px-2 rounded-2" 
                                            onclick="editPost(<?= htmlspecialchars(json_encode($post), ENT_QUOTES, 'UTF-8') ?>)" 
                                            title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light border text-danger py-1 px-2 rounded-2" 
                                            onclick="confirmDelete('<?= base_url('admin/posts/delete/' . $post['id']) ?>')" 
                                            title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Mode 2: Mobile Card List (Hanya tampil di Ponsel) -->
    <div class="d-block d-md-none p-3 bg-light-subtle" id="postsMobileList">
        <?php if (!empty($posts)): ?>
            <?php foreach ($posts as $post): ?>
                <div class="card border-0 shadow-sm mb-3 rounded-3 post-item">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-start mb-2 gap-2">
                            <span class="badge bg-light text-dark border"><?= esc($post['category']) ?></span>
                            <?php if ($post['status'] === 'Published'): ?>
                                <span class="badge bg-success-subtle text-success border border-success-subtle">Published</span>
                            <?php else: ?>
                                <span class="badge bg-warning-subtle text-warning border border-warning-subtle">Draft</span>
                            <?php endif; ?>
                        </div>
                        
                        <h6 class="fw-bold text-dark mb-2"><?= esc($post['title']) ?></h6>
                        
                        <div class="text-muted small mb-3">
                            <div><i class="bi bi-person me-1"></i> <?= esc($post['author']) ?></div>
                            <div><i class="bi bi-calendar3 me-1"></i> <?= date('d M Y', strtotime($post['date'])) ?></div>
                        </div>
                        
                        <div class="d-flex gap-2 justify-content-end pt-2 border-top">
                            <button class="btn btn-sm btn-outline-secondary flex-fill py-2" 
                                    onclick="editPost(<?= htmlspecialchars(json_encode($post), ENT_QUOTES, 'UTF-8') ?>)">
                                <i class="bi bi-pencil me-1"></i>Edit
                            </button>
                            <button class="btn btn-sm btn-outline-danger flex-fill py-2" 
                                    onclick="confirmDelete('<?= base_url('admin/posts/delete/' . $post['id']) ?>')">
                                <i class="bi bi-trash me-1"></i>Hapus
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Empty State -->
    <?php if (empty($posts)): ?>
        <div class="text-center text-muted py-5">
            <i class="bi bi-inbox fs-1 d-block mb-2"></i>Belum ada postingan. Klik "Postingan Baru" untuk menambahkan.
        </div>
    <?php endif; ?>
</div>

<!-- Add/Edit Modal (Responsif Mobile) -->
<div class="modal fade" id="postModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="max-height: 95vh; height: 95vh;">
        <div class="modal-content border-0 shadow" style="height: 100%; display: flex; flex-direction: column;">
            
            <form action="<?= base_url('admin/posts/save') ?>" method="post" style="display: flex; flex-direction: column; height: 100%; overflow: hidden;">
                <?= csrf_field() ?>
                
                <!-- Header -->
                <div class="modal-header border-bottom px-3 py-2 px-md-4 py-md-3" style="flex-shrink: 0;">
                    <h5 class="modal-title fw-bold fs-6 fs-md-5" id="postModalTitle">Postingan Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <!-- Body -->
                <div class="modal-body p-3 p-md-4" style="overflow-y: auto; flex-grow: 1;">
                    <input type="hidden" name="id" id="postId">
                    
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Judul Postingan</label>
                        <input type="text" class="form-control py-2" name="title" id="postTitle" required placeholder="Masukkan judul...">
                    </div>
                    
                    <div class="row g-2 g-md-3 mb-3">
                        <div class="col-12 col-md-4">
                            <label class="form-label small fw-bold">Kategori</label>
                            <input type="text" class="form-control py-2" name="category" id="postCategory" placeholder="Renungan" required>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label small fw-bold">Penulis</label>
                            <input type="text" class="form-control py-2" name="author" id="postAuthor" required placeholder="Nama Penulis">
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label small fw-bold">Tanggal</label>
                            <input type="date" class="form-control py-2" name="date" id="postDate" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Ringkasan Singkat</label>
                        <textarea class="form-control" name="excerpt" id="postExcerpt" rows="2" required placeholder="Ringkasan isi postingan..."></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Isi Lengkap</label>
                        <textarea class="form-control" name="content" id="postContent" rows="5" required placeholder="Tuliskan isi postingan selengkapnya..."></textarea>
                    </div>
                    
                    <div class="mb-1">
                        <label class="form-label small fw-bold">Status Publikasi</label>
                        <select class="form-select py-2" name="status" id="postStatus">
                            <option value="Published">Published</option>
                            <option value="Draft">Draft</option>
                        </select>
                    </div>
                </div>
                
                <!-- Footer -->
                <div class="modal-footer border-top p-2 p-md-3 d-flex flex-column flex-sm-row gap-2 bg-white" style="flex-shrink: 0;">
                    <button type="button" class="btn btn-light w-100 w-sm-auto order-2 order-sm-1" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" id="submitPostBtn" class="btn-church w-100 w-sm-auto order-1 order-sm-2 text-center" style="background-color:#0d1830; color: #fff;">Simpan Postingan</button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- Delete Confirm Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-body p-4 text-center">
                <i class="bi bi-exclamation-triangle text-danger fs-1 mb-3 d-block"></i>
                <h5 class="fw-bold">Hapus postingan ini?</h5>
                <p class="text-muted small">Tindakan ini tidak dapat dibatalkan.</p>
                <div class="d-flex flex-column flex-sm-row justify-content-center gap-2 mt-4">
                    <button class="btn btn-light w-100 w-sm-auto order-2 order-sm-1" data-bs-dismiss="modal">Batal</button>
                    <a href="#" class="btn btn-danger w-100 w-sm-auto order-1 order-sm-2 px-4 py-2" id="btnConfirmDelete">Ya, Hapus</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    function resetForm() {
        document.getElementById('postModalTitle').innerText = 'Postingan Baru';
        document.getElementById('postId').value = '';
        document.getElementById('postTitle').value = '';
        document.getElementById('postCategory').value = '';
        document.getElementById('postAuthor').value = '';
        document.getElementById('postDate').value = new Date().toISOString().split('T')[0];
        document.getElementById('postExcerpt').value = '';
        document.getElementById('postContent').value = '';
        document.getElementById('postStatus').value = 'Published';

        const submitBtn = document.getElementById('submitPostBtn');
        if (submitBtn) {
            submitBtn.innerHTML = 'Simpan Postingan';
        }
    }

    function editPost(data) {
        document.getElementById('postModalTitle').innerText = 'Edit Postingan';
        document.getElementById('postId').value = data.id;
        document.getElementById('postTitle').value = data.title;
        document.getElementById('postCategory').value = data.category;
        document.getElementById('postAuthor').value = data.author;
        document.getElementById('postDate').value = data.date;
        document.getElementById('postExcerpt').value = data.excerpt;
        document.getElementById('postContent').value = data.content;
        document.getElementById('postStatus').value = data.status;

        const submitBtn = document.getElementById('submitPostBtn');
        if (submitBtn) {
            submitBtn.innerHTML = '<i class="bi bi-check-lg me-1"></i> Simpan Perubahan';
        }

        var modal = new bootstrap.Modal(document.getElementById('postModal'));
        modal.show();
    }

    function confirmDelete(url) {
        document.getElementById('btnConfirmDelete').setAttribute('href', url);
        var modal = new bootstrap.Modal(document.getElementById('deleteModal'));
        modal.show();
    }

    // --- PREVENSI DOUBLE SUBMIT FORM POSTINGAN ---
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('#postModal form');
        if (!form) return;

        const submitBtn = document.getElementById('submitPostBtn') || form.querySelector('button[type="submit"]');

        form.addEventListener('submit', function () {
            submitBtn.disabled = true;

            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Memproses...';

            setTimeout(function () {
                if (submitBtn.disabled) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                }
            }, 10000);
        });
    });

    // Filter pencarian live
    document.getElementById('searchInput').addEventListener('keyup', function () {
        let filter = this.value.toLowerCase();
        let items = document.querySelectorAll('.post-item');

        items.forEach(item => {
            let text = item.innerText.toLowerCase();
            item.style.display = text.includes(filter) ? '' : 'none';
        });
    });
</script>
<?= $this->endSection() ?>