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
      <h6 class="m-0 fw-bold text-dark fs-6">Kelola Buletin Pedang Roh</h6>
      <!-- Tombol Tambah Edisi Baru -->
      <button class="btn-church w-20 w-sm-auto text-center py-2 px-3 fw-semibold d-flex align-items-center justify-content-center" 
              data-bs-toggle="modal" 
              data-bs-target="#pedangRohModal" 
              onclick="resetForm()">
        <i class="bi bi-plus-lg me-1"></i> Tambah Edisi
      </button>
    </div>
  </div>

  <!-- Mode 1: Desktop Table (Hanya Tampil di Tablet & Desktop) --> 
  <div class="table-responsive d-none d-md-block">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th class="ps-4">Edisi</th>
          <th>Judul (ID)</th>
          <th>Judul (EN)</th>
          <th>Bulan / Tahun</th>
          <th>File PDF</th>
          <th class="text-end pe-4">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($periodicals)): ?>
          <?php foreach ($periodicals as $p): ?>
            <tr>
              <td class="ps-4">
                <span class="badge bg-danger-subtle text-danger border border-danger fw-bold">#<?= esc($p['edition_number']) ?></span>
              </td>
              <td class="fw-bold text-dark"><?= esc($p['title_id']) ?></td>
              <td class="text-muted small"><?= esc($p['title_en'] ?? '-') ?></td>
              <td><span class="badge bg-light text-dark border"><i class="bi bi-calendar3 me-1 text-primary"></i><?= esc($p['publish_month_year']) ?></span></td>
              <td>
                <?php if (!empty($p['pdf_file'])): ?>
                  <a href="<?= base_url('uploads/pedang_roh/' . $p['pdf_file']) ?>" target="_blank" class="btn btn-sm btn-outline-danger py-1 px-2 rounded-pill">
                    <i class="bi bi-file-earmark-pdf me-1"></i> Unduh / Lihat
                  </a>
                <?php else: ?>
                  <span class="text-muted small">-</span>
                <?php endif; ?>
              </td>
              <td class="text-end pe-4">
                <button class="btn btn-sm btn-outline-secondary me-1 py-1 px-2" 
                        onclick="editPedangRoh(<?= htmlspecialchars(json_encode($p), ENT_QUOTES, 'UTF-8') ?>)"
                        title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <a href="<?= base_url('admin/pedang-roh/delete/' . $p['id']) ?>" 
                   class="btn btn-sm btn-outline-danger py-1 px-2" 
                   onclick="return confirm('Apakah Anda yakin ingin menghapus edisi ini?')"
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
    <?php if (!empty($periodicals)): ?>
      <?php foreach ($periodicals as $p): ?>
        <div class="card border-0 shadow-sm mb-3 rounded-3">
          <div class="card-body p-3">
            <div class="d-flex justify-content-between align-items-start mb-2 gap-2">
              <span class="badge bg-danger-subtle text-danger border border-danger fw-bold flex-shrink-0">Edisi #<?= esc($p['edition_number']) ?></span>
              <span class="text-muted small"><i class="bi bi-calendar3 me-1"></i><?= esc($p['publish_month_year']) ?></span>
            </div>
            
            <h6 class="fw-bold text-dark mb-1"><?= esc($p['title_id']) ?></h6>
            <?php if (!empty($p['title_en'])): ?>
              <p class="text-muted small mb-2"><em><?= esc($p['title_en']) ?></em></p>
            <?php endif; ?>
            
            <div class="mb-3">
              <?php if (!empty($p['pdf_file'])): ?>
                <a href="<?= base_url('uploads/pedang_roh/' . $p['pdf_file']) ?>" target="_blank" class="btn btn-sm btn-outline-danger w-100">
                  <i class="bi bi-file-earmark-pdf me-1"></i> Buka File PDF
                </a>
              <?php endif; ?>
            </div>
            
            <div class="d-flex gap-2 justify-content-end pt-2 border-top">
              <button class="btn btn-sm btn-outline-secondary flex-fill py-2 fw-semibold" 
                      onclick="editPedangRoh(<?= htmlspecialchars(json_encode($p), ENT_QUOTES, 'UTF-8') ?>)">
                <i class="bi bi-pencil me-1"></i>Edit
              </button>
              <a href="<?= base_url('admin/pedang-roh/delete/' . $p['id']) ?>" 
                 class="btn btn-sm btn-outline-danger flex-fill py-2 fw-semibold text-center text-decoration-none" 
                 onclick="return confirm('Apakah Anda yakin ingin menghapus edisi ini?')">
                <i class="bi bi-trash me-1"></i>Hapus
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Empty State Jika Data Kosong -->
  <?php if (empty($periodicals)): ?>
    <div class="text-center text-muted py-5 px-3">
      <i class="bi bi-journal-x fs-1 d-block mb-2 text-secondary opacity-50"></i>
      <span>Belum ada edisi Pedang Roh. Klik "Tambah Edisi" untuk menambahkan.</span>
    </div>
  <?php endif; ?>

</div>

<!-- Modal Form Pedang Roh (Optimasi Layar HP) -->
<div class="modal fade" id="pedangRohModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content border-0 shadow">
      <!-- Wajib enctype="multipart/form-data" untuk upload file PDF -->
      <form action="<?= base_url('admin/pedang-roh/save') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="modal-header border-bottom px-3 py-2 px-md-4 py-md-3">
          <h5 class="modal-title fw-bold fs-6 fs-md-5" id="modalTitle">Tambah Edisi Pedang Roh</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body p-3 p-md-4">
          <input type="hidden" name="id" id="pedangRohId">

          <div class="row g-2 g-md-3 mb-3">
            <div class="col-12 col-md-4">
              <label class="form-label small fw-bold">Nomor Edisi</label>
              <input type="number" class="form-control py-2" name="edition_number" id="editionNumber" placeholder="Contoh: 150" required>
            </div>
            <div class="col-12 col-md-8">
              <label class="form-label small fw-bold">Bulan / Tahun Terbit</label>
              <input type="text" class="form-control py-2" name="publish_month_year" id="publishMonthYear" placeholder="Contoh: Januari - Februari 2026" required>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-bold">Judul Bahasa Indonesia</label>
            <input type="text" class="form-control py-2" name="title_id" id="titleId" placeholder="Contoh: Menjaga Kemurnian Iman" required>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-bold">Judul Bahasa Inggris (Opsional)</label>
            <input type="text" class="form-control py-2" name="title_en" id="titleEn" placeholder="Contoh: Maintaining Purity of Faith">
          </div>

          <div class="mb-3">
            <label class="form-label small fw-bold">File PDF Buletin</label>
            <input type="file" class="form-control py-2" name="pdf_file" id="pdfFile" accept=".pdf">
            <div class="form-text small" id="pdfFileHelp">Format file harus .pdf (Maksimal 10MB). Biarkan kosong jika tidak ingin mengubah file saat edit.</div>
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
    document.getElementById('modalTitle').innerText = 'Tambah Edisi Pedang Roh';
    document.getElementById('pedangRohId').value = '';
    document.getElementById('editionNumber').value = '';
    document.getElementById('publishMonthYear').value = '';
    document.getElementById('titleId').value = '';
    document.getElementById('titleEn').value = '';
    document.getElementById('pdfFile').value = '';
    document.getElementById('pdfFileHelp').innerText = 'Format file harus .pdf (Maksimal 10MB).';
  }

  function editPedangRoh(data) {
    document.getElementById('modalTitle').innerText = 'Edit Edisi Pedang Roh';
    document.getElementById('pedangRohId').value = data.id;
    document.getElementById('editionNumber').value = data.edition_number;
    document.getElementById('publishMonthYear').value = data.publish_month_year;
    document.getElementById('titleId').value = data.title_id;
    document.getElementById('titleEn').value = data.title_en || '';
    document.getElementById('pdfFile').value = '';
    document.getElementById('pdfFileHelp').innerText = 'File saat ini: ' + (data.pdf_file || '-') + '. Biarkan kosong jika tidak ingin mengganti file.';

    var modal = new bootstrap.Modal(document.getElementById('pedangRohModal'));
    modal.show();
  }

  document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#pedangRohModal form');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      // Gunakan FormData untuk mendukung upload file
      const formData = new FormData(form);
      const xhr = new XMLHttpRequest();
      xhr.open('POST', form.action, true);
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

      xhr.onload = function () {
        let response = {};
        try {
          response = JSON.parse(xhr.responseText);
        } catch (err) {
          Swal.fire({
            icon: 'error',
            title: 'Gagal Menyimpan!',
            html: `<pre class="text-start bg-light p-2 border small">${xhr.responseText.replace(/</g, "&lt;")}</pre>`
          });
          return;
        }

        // Update token CSRF
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
          }).then(() => {
            location.reload();
          });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: response.message || 'Terjadi kesalahan.',
          });
        }
      };

      xhr.send(formData);
    });
  });
</script>
<?= $this->endSection() ?>