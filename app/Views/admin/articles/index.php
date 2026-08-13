<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<!-- Alert Flashdata -->
<?php if (session()->getFlashdata('message')): ?>
  <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm mb-3" role="alert">
    <i class="bi bi-check-circle me-1"></i> <?= session()->getFlashdata('message') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<!-- Container Card Utama -->
<div class="card border-0 shadow-sm rounded-3 overflow-hidden mb-4">
  
  <!-- Header Card (Responsif Mobile) -->
  <div class="card-header bg-white p-3 border-bottom">
    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
      <h6 class="m-0 fw-bold text-dark fs-6">Kelola Artikel & Literatur</h6>
      <!-- Tombol Tambah Literatur -->
      <button class="btn btn-church w-20 w-sm-auto text-center py-2 px-3 fw-semibold d-flex align-items-center justify-content-center" 
              data-bs-toggle="modal" 
              data-bs-target="#articleModal" 
              onclick="resetForm()">
        <i class="bi bi-plus-lg me-1"></i> Tambah Literatur
      </button>
    </div>
  </div>

  <!-- Mode 1: Desktop Table (Hanya Tampil di Tablet & Desktop) -->
  <div class="table-responsive d-none d-md-block">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th class="ps-4">Kategori</th>
          <th>Judul (ID)</th>
          <th>Status</th>
          <th>File PDF</th>
          <th class="text-end pe-4">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($articles)): ?>
          <?php foreach ($articles as $a): ?>
            <tr>
              <td class="ps-4">
                <?php 
                  $catColors = ['book' => 'primary', 'tract' => 'info', 'article' => 'warning'];
                  $catLabels = ['book' => 'Buku', 'tract' => 'Traktat', 'article' => 'Artikel'];
                  $color = $catColors[$a['category']] ?? 'secondary';
                  $label = $catLabels[$a['category']] ?? 'Lainnya';
                ?>
                <span class="badge bg-<?= $color ?>-subtle text-<?= $color ?> border border-<?= $color ?> fw-bold"><?= $label ?></span>
              </td>
              <td>
                <div class="fw-bold text-dark"><?= esc($a['title_id']) ?></div>
                <div class="text-muted small">/<?= esc($a['slug']) ?></div>
              </td>
              <td>
                <?php if($a['is_published'] == 1): ?>
                    <span class="badge bg-success"><i class="bi bi-globe me-1"></i>Publikasi</span>
                <?php else: ?>
                    <span class="badge bg-secondary"><i class="bi bi-eye-slash me-1"></i>Draft</span>
                <?php endif; ?>
              </td>
              <td>
                <?php if (!empty($a['pdf_file'])): ?>
                  <a href="<?= base_url('uploads/articles/' . $a['pdf_file']) ?>" target="_blank" class="btn btn-sm btn-outline-danger py-1 px-2 rounded-pill">
                    <i class="bi bi-file-earmark-pdf me-1"></i> PDF
                  </a>
                <?php else: ?>
                  <span class="text-muted small">Teks Only</span>
                <?php endif; ?>
              </td>
              <td class="text-end pe-4">
                <button class="btn btn-sm btn-outline-secondary me-1 py-1 px-2" 
                        onclick="editArticle(<?= htmlspecialchars(json_encode($a), ENT_QUOTES, 'UTF-8') ?>)"
                        title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <a href="<?= base_url('admin/articles/delete/' . $a['id']) ?>" 
                   class="btn btn-sm btn-outline-danger py-1 px-2" 
                   onclick="return confirm('Hapus literatur ini?')"
                   title="Hapus">
                  <i class="bi bi-trash"></i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <!-- Mode 2: Mobile Card List (Hanya Tampil di Ponsel) -->
  <div class="d-block d-md-none p-3 bg-light-subtle">
    <?php if (!empty($articles)): ?>
      <?php foreach ($articles as $a): ?>
        <?php 
          $catColors = ['book' => 'primary', 'tract' => 'info', 'article' => 'warning'];
          $catLabels = ['book' => 'Buku', 'tract' => 'Traktat', 'article' => 'Artikel'];
          $color = $catColors[$a['category']] ?? 'secondary';
          $label = $catLabels[$a['category']] ?? 'Lainnya';
        ?>
        <div class="card border-0 shadow-sm mb-3 rounded-3">
          <div class="card-body p-3">
            <div class="d-flex justify-content-between align-items-start mb-2 gap-2">
              <span class="badge bg-<?= $color ?>-subtle text-<?= $color ?> border border-<?= $color ?> fw-bold flex-shrink-0"><?= $label ?></span>
              <span>
                <?php if($a['is_published'] == 1): ?>
                    <span class="badge bg-success small"><i class="bi bi-globe me-1"></i>Publikasi</span>
                <?php else: ?>
                    <span class="badge bg-secondary small"><i class="bi bi-eye-slash me-1"></i>Draft</span>
                <?php endif; ?>
              </span>
            </div>
            
            <h6 class="fw-bold text-dark mb-1"><?= esc($a['title_id']) ?></h6>
            <div class="text-muted small mb-2">/<?= esc($a['slug']) ?></div>
            
            <div class="mb-3">
              <?php if (!empty($a['pdf_file'])): ?>
                <a href="<?= base_url('uploads/articles/' . $a['pdf_file']) ?>" target="_blank" class="btn btn-sm btn-outline-danger w-100">
                  <i class="bi bi-file-earmark-pdf me-1"></i> Buka File PDF
                </a>
              <?php else: ?>
                <span class="text-muted small fst-italic">Format: Teks Only</span>
              <?php endif; ?>
            </div>
            
            <div class="d-flex gap-2 justify-content-end pt-2 border-top">
              <button class="btn btn-sm btn-outline-secondary flex-fill py-2 fw-semibold" 
                      onclick="editArticle(<?= htmlspecialchars(json_encode($a), ENT_QUOTES, 'UTF-8') ?>)">
                <i class="bi bi-pencil me-1"></i>Edit
              </button>
              <a href="<?= base_url('admin/articles/delete/' . $a['id']) ?>" 
                 class="btn btn-sm btn-outline-danger flex-fill py-2 fw-semibold text-center text-decoration-none" 
                 onclick="return confirm('Hapus literatur ini?')">
                <i class="bi bi-trash me-1"></i>Hapus
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Empty State Jika Data Kosong -->
  <?php if (empty($articles)): ?>
    <div class="text-center text-muted py-5 px-3">
      <i class="bi bi-journal-x fs-1 d-block mb-2 text-secondary opacity-50"></i>
      <span>Belum ada literatur. Klik "Tambah Literatur" untuk menambahkan.</span>
    </div>
  <?php endif; ?>

</div>

<!-- Modal Form (Menggunakan modal-xl agar form lebar & responsif) -->
<div class="modal fade" id="articleModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content border-0 shadow">
      <form action="<?= base_url('admin/articles/save') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="modal-header border-bottom px-3 py-2 px-md-4 py-md-3">
          <h5 class="modal-title fw-bold fs-6 fs-md-5" id="modalTitle">Tambah Literatur</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body p-3 p-md-4">
          <input type="hidden" name="id" id="articleId">

          <div class="row g-2 g-md-3 mb-3">
            <div class="col-12 col-md-4">
              <label class="form-label small fw-bold">Kategori</label>
              <select class="form-select py-2" name="category" id="category" required>
                <option value="article">Artikel</option>
                <option value="book">Buku</option>
                <option value="tract">Traktat</option>
              </select>
            </div>
            <div class="col-12 col-md-4">
              <label class="form-label small fw-bold">Status Publikasi</label>
              <select class="form-select py-2" name="is_published" id="isPublished" required>
                <option value="1">Publikasi (Live)</option>
                <option value="0">Draft (Sembunyikan)</option>
              </select>
            </div>
            <div class="col-12 col-md-4">
              <label class="form-label small fw-bold">Lampiran File PDF (Opsional)</label>
              <input type="file" class="form-control py-2" name="pdf_file" id="pdfFile" accept=".pdf">
              <div class="form-text small" id="pdfFileHelp">Biarkan kosong jika hanya artikel web.</div>
            </div>
          </div>

          <div class="row g-2 g-md-3 mb-3">
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Judul Bahasa Indonesia</label>
              <input type="text" class="form-control py-2" name="title_id" id="titleId" required>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Judul Bahasa Inggris (Opsional)</label>
              <input type="text" class="form-control py-2" name="title_en" id="titleEn">
            </div>
          </div>

          <div class="row g-2 g-md-3">
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Isi Artikel / Ringkasan (ID)</label>
              <textarea class="form-control" name="content_id" id="contentId" rows="6" placeholder="Tulis konten di sini..."></textarea>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Isi Artikel / Ringkasan (EN) - Opsional</label>
              <textarea class="form-control" name="content_en" id="contentEn" rows="6" placeholder="Write content here..."></textarea>
            </div>
          </div>

        </div>
        
        <div class="modal-footer border-top p-2 p-md-3 d-flex flex-column flex-sm-row gap-2">
          <button type="button" class="btn btn-light w-100 w-sm-auto order-2 order-sm-1" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn-church w-100 w-sm-auto order-1 order-sm-2 text-center" style="background-color:#0d1830; color:#fff;">Simpan Data</button>
        </div>
      </form> 
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  function resetForm() {
    document.getElementById('modalTitle').innerText = 'Tambah Literatur';
    document.getElementById('articleId').value = '';
    document.getElementById('category').value = 'article';
    document.getElementById('isPublished').value = '1';
    document.getElementById('titleId').value = '';
    document.getElementById('titleEn').value = '';
    document.getElementById('contentId').value = '';
    document.getElementById('contentEn').value = '';
    document.getElementById('pdfFile').value = '';
    document.getElementById('pdfFileHelp').innerText = 'Format .pdf. Kosongkan jika tidak ada file.';
  }

  function editArticle(data) {
    document.getElementById('modalTitle').innerText = 'Edit Literatur';
    document.getElementById('articleId').value = data.id;
    document.getElementById('category').value = data.category;
    document.getElementById('isPublished').value = data.is_published;
    document.getElementById('titleId').value = data.title_id;
    document.getElementById('titleEn').value = data.title_en || '';
    document.getElementById('contentId').value = data.content_id || '';
    document.getElementById('contentEn').value = data.content_en || '';
    document.getElementById('pdfFile').value = '';
    document.getElementById('pdfFileHelp').innerText = 'File saat ini: ' + (data.pdf_file || 'Tidak ada') + '. Biarkan kosong jika tidak ganti file.';

    var modal = new bootstrap.Modal(document.getElementById('articleModal'));
    modal.show();
  }

  document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('#articleModal form');
  
  // 1. Ambil referensi ke tombol simpan
  const submitBtn = form.querySelector('button[type="submit"]');

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    // 2. Disable tombol simpan & beri indikator Loading agar tidak bisa diklik 2x
    submitBtn.disabled = true;
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Menyimpan...';

    const formData = new FormData(form);
    const xhr = new XMLHttpRequest();
    xhr.open('POST', form.action, true);
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    // Buat helper function untuk mengembalikan tombol ke keadaan semula jika gagal
    function restoreButton() {
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalText;
    }

    xhr.onload = function () {
      let response = {};
      try { 
        response = JSON.parse(xhr.responseText); 
      } catch (err) {
        restoreButton(); // Kembalikan tombol jika parse error
        Swal.fire({
          icon: 'error',
          title: 'Gagal Menyimpan!',
          html: `<pre class="text-start bg-light p-2 border small">${xhr.responseText.replace(/</g, "&lt;")}</pre>`
        });
        return;
      }

      if (response.tokenName && response.tokenHash) {
        const csrfInput = form.querySelector(`input[name="${response.tokenName}"]`);
        if (csrfInput) csrfInput.value = response.tokenHash;
      }

      if (xhr.status === 200 && response.status === 'success') {
        Swal.fire({ 
          icon: 'success', 
          title: 'Berhasil!', 
          text: response.message, 
          timer: 1500, 
          showConfirmButton: false 
        }).then(() => location.reload());
      } else {
        restoreButton(); // Kembalikan tombol jika response dari server gagal/validasi gagal
        Swal.fire({ 
          icon: 'error', 
          title: 'Gagal!', 
          text: response.message || 'Terjadi kesalahan.' 
        });
      }
    };

    // Kembalikan tombol jika terjadi error jaringan
    xhr.onerror = function() {
      restoreButton();
      Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: 'Terjadi kesalahan koneksi jaringan.'
      });
    };

    xhr.send(formData);
  });
});
</script>
<?= $this->endSection() ?>