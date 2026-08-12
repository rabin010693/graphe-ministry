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
      <h6 class="m-0 fw-bold text-dark fs-6">Daftar Jemaat GBIA Seluruh Indonesia</h6>
      <!-- Tombol Tambah Tema Merah (btn-church) -->
      <button class="btn-church w-20 w-sm-auto text-center py-2 px-3 fw-semibold d-flex align-items-center justify-content-center" 
              data-bs-toggle="modal" 
              data-bs-target="#churchModal" 
              onclick="resetForm()">
        <i class="bi bi-plus-lg me-1"></i> Tambah Gereja
      </button>
    </div>
  </div>

  <!-- Mode 1: Desktop Table (Hanya Tampil di Tablet & Desktop) -->
  <div class="table-responsive d-none d-md-block">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th class="ps-4">Wilayah</th>
          <th>Gembala / Ev.</th>
          <th>Nama Gereja</th>
          <th>Alamat</th>
          <th>Telepon / WA</th>
          <th class="text-end pe-4">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($churches)): ?>
          <?php foreach ($churches as $c): ?>
            <tr>
              <td class="ps-4"><span class="badge bg-success-subtle text-success border border-success fw-bold"><?= esc($c['region']) ?></span></td>
              <td class="fw-bold text-dark"><?= esc($c['pastor_name']) ?></td>
              <td class="fw-bold text-danger"><?= esc($c['church_name']) ?></td>
              <td class="small text-muted text-wrap" style="max-width: 250px;"><?= esc($c['address']) ?></td>
              <td>
                <span class="badge bg-light text-dark border"><i class="bi bi-whatsapp text-success me-1"></i><?= esc($c['phone']) ?></span>
                <?php if (!empty($c['phone_2'])): ?>
                  <br><span class="badge bg-light text-dark border mt-1"><i class="bi bi-whatsapp text-success me-1"></i><?= esc($c['phone_2']) ?></span>
                <?php endif; ?>
              </td>
              <td class="text-end pe-4">
                <button class="btn btn-sm btn-outline-secondary me-1 py-1 px-2" 
                        onclick="editChurch(<?= htmlspecialchars(json_encode($c), ENT_QUOTES, 'UTF-8') ?>)"
                        title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <a href="<?= base_url('admin/churches/delete/' . $c['id']) ?>" 
                   class="btn btn-sm btn-outline-danger py-1 px-2" 
                   onclick="return confirm('Hapus data gereja ini?')"
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
    <?php if (!empty($churches)): ?>
      <?php foreach ($churches as $c): ?>
        <div class="card border-0 shadow-sm mb-3 rounded-3">
          <div class="card-body p-3">
            <div class="d-flex justify-content-between align-items-start mb-2 gap-2">
              <span class="badge bg-success-subtle text-success border border-success fw-bold flex-shrink-0"><?= esc($c['region']) ?></span>
              <span class="text-muted small"><i class="bi bi-person me-1"></i><?= esc($c['pastor_name']) ?></span>
            </div>
            
            <h6 class="fw-bold text-danger mb-2"><?= esc($c['church_name']) ?></h6>
            
            <div class="text-muted small mb-2">
              <i class="bi bi-geo-alt me-1"></i><?= esc($c['address']) ?>
            </div>

            <div class="d-flex flex-wrap gap-1 mb-3">
              <span class="badge bg-light text-dark border"><i class="bi bi-whatsapp text-success me-1"></i><?= esc($c['phone']) ?></span>
              <?php if (!empty($c['phone_2'])): ?>
                <span class="badge bg-light text-dark border"><i class="bi bi-whatsapp text-success me-1"></i><?= esc($c['phone_2']) ?></span>
              <?php endif; ?>
            </div>
            
            <div class="d-flex gap-2 justify-content-end pt-2 border-top">
              <button class="btn btn-sm btn-outline-secondary flex-fill py-2 fw-semibold" 
                      onclick="editChurch(<?= htmlspecialchars(json_encode($c), ENT_QUOTES, 'UTF-8') ?>)">
                <i class="bi bi-pencil me-1"></i>Edit
              </button>
              <a href="<?= base_url('admin/churches/delete/' . $c['id']) ?>" 
                 class="btn btn-sm btn-outline-danger flex-fill py-2 fw-semibold text-center text-decoration-none" 
                 onclick="return confirm('Hapus data gereja ini?')">
                <i class="bi bi-trash me-1"></i>Hapus
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Empty State Jika Data Kosong -->
  <?php if (empty($churches)): ?>
    <div class="text-center text-muted py-5 px-3">
      <i class="bi bi-building-exclamation fs-1 d-block mb-2 text-secondary opacity-50"></i>
      <span>Belum ada data jemaat gereja. Klik "Tambah Gereja" untuk menambahkan.</span>
    </div>
  <?php endif; ?>

</div>

<!-- Modal Form Church (Optimasi Layar HP) -->
<div class="modal fade" id="churchModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content border-0 shadow">
      <form action="<?= base_url('admin/churches/save') ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="modal-header border-bottom px-3 py-2 px-md-4 py-md-3">
          <h5 class="modal-title fw-bold fs-6 fs-md-5" id="modalTitle">Tambah Data Gereja</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body p-3 p-md-4">
          <input type="hidden" name="id" id="churchId">

          <div class="row g-2 g-md-3 mb-3">
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Wilayah (Region)</label>
              <input type="text" class="form-control py-2" name="region" id="churchRegion" placeholder="Contoh: JABODETABEK, BANTEN, JAWA BARAT" required>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Nama Gembala / Penginjil</label>
              <input type="text" class="form-control py-2" name="pastor_name" id="pastorName" placeholder="Contoh: Gbl. Mitorya atau Ev. Derry" required>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-bold">Nama Gereja</label>
            <input type="text" class="form-control py-2" name="church_name" id="churchName" placeholder="Contoh: GBIA Depok" required>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-bold">Alamat Lengkap</label>
            <textarea class="form-control" name="address" id="churchAddress" rows="2" placeholder="Jl. Tole Iskandar No. 50, Depok 2 Tengah" required></textarea>
          </div>

          <div class="row g-2 g-md-3 mb-2">
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">No. Telepon / WA Utama</label>
              <input type="text" class="form-control py-2" name="phone" id="churchPhone" placeholder="0813-55564242" required>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">No. Telepon / WA Kedua (Opsional)</label>
              <input type="text" class="form-control py-2" name="phone_2" id="churchPhone2" placeholder="0852-15681395">
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
    document.getElementById('modalTitle').innerText = 'Tambah Data Gereja';
    document.getElementById('churchId').value = '';
    document.getElementById('churchRegion').value = 'JABODETABEK';
    document.getElementById('pastorName').value = '';
    document.getElementById('churchName').value = '';
    document.getElementById('churchAddress').value = '';
    document.getElementById('churchPhone').value = '';
    document.getElementById('churchPhone2').value = '';
  }

  function editChurch(data) {
    document.getElementById('modalTitle').innerText = 'Edit Data Gereja';
    document.getElementById('churchId').value = data.id;
    document.getElementById('churchRegion').value = data.region;
    document.getElementById('pastorName').value = data.pastor_name;
    document.getElementById('churchName').value = data.church_name;
    document.getElementById('churchAddress').value = data.address;
    document.getElementById('churchPhone').value = data.phone;
    document.getElementById('churchPhone2').value = data.phone_2 || '';

    var modal = new bootstrap.Modal(document.getElementById('churchModal'));
    modal.show();
  }

  document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#churchModal form');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const formData = new FormData(form);
      const xhr = new XMLHttpRequest();
      xhr.open('POST', form.action, true);
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

      xhr.onload = function () {
        let response = {};
        try {
          response = JSON.parse(xhr.responseText);
        } catch (e) {
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