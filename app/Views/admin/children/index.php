<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<!-- Alert Notifikasi Flashdata -->
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
      <h6 class="m-0 fw-bold text-dark fs-6">Daftar Anak Asuh (Total: <?= $total_children ?? count($children ?? []) ?> Anak)</h6>
      <button class="btn-church w-20 w-sm-auto text-center py-2 px-3 fw-semibold d-flex align-items-center justify-content-center" 
              data-bs-toggle="modal" 
              data-bs-target="#childModal" 
              onclick="resetForm()">
        <i class="bi bi-plus-lg me-1"></i> Tambah Anak Asuh
      </button>
    </div>
  </div>

  <!-- Mode 1: Desktop Table (Hanya Tampil di Tablet & Desktop) -->
  <div class="table-responsive d-none d-md-block">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th class="ps-4" style="width: 60px;">No</th>
          <th>Nama Lengkap</th>
          <th>Usia</th>
          <th>Jenis Kelamin</th>
          <th>Pendidikan</th>
          <th class="text-end pe-4">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($children)): ?>
          <?php $no = 1; foreach ($children as $c): ?>
            <tr>
              <td class="ps-4 text-muted small"><?= $no++ ?></td>
              <td class="fw-bold text-dark"><?= esc($c['full_name']) ?></td>
              <td><?= $c['age'] ?> tahun</td>
              <td>
                <?php if ($c['gender'] === 'Perempuan'): ?>
                  <span class="badge bg-danger-subtle text-danger border border-danger-subtle">Perempuan</span>
                <?php else: ?>
                  <span class="badge bg-primary-subtle text-primary border border-primary-subtle">Laki-laki</span>
                <?php endif; ?>
              </td>
              <td><?= esc($c['education']) ?></td>
              <td class="text-end pe-4">
                <button class="btn btn-sm btn-outline-secondary me-1 py-1 px-2" 
                        onclick="editChild(<?= htmlspecialchars(json_encode($c), ENT_QUOTES, 'UTF-8') ?>)"
                        title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <a href="<?= base_url('admin/children/delete/' . $c['id']) ?>" 
                   class="btn btn-sm btn-outline-danger py-1 px-2" 
                   onclick="return confirm('Hapus data ini?')"
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
    <?php if (!empty($children)): ?>
      <?php foreach ($children as $c): ?>
        <div class="card border-0 shadow-sm mb-3 rounded-3">
          <div class="card-body p-3">
            <div class="d-flex justify-content-between align-items-start mb-2 gap-2">
              <h6 class="fw-bold text-dark mb-0 text-truncate"><?= esc($c['full_name']) ?></h6>
              <?php if ($c['gender'] === 'Perempuan'): ?>
                <span class="badge bg-danger-subtle text-danger border border-danger-subtle flex-shrink-0">Perempuan</span>
              <?php else: ?>
                <span class="badge bg-primary-subtle text-primary border border-primary-subtle flex-shrink-0">Laki-laki</span>
              <?php endif; ?>
            </div>
            
            <div class="text-muted small mb-3">
              <div class="mb-1"><i class="bi bi-cake2 me-1"></i> Usia: <strong><?= $c['age'] ?> tahun</strong></div>
              <div><i class="bi bi-book me-1"></i> Pendidikan: <strong><?= esc($c['education']) ?></strong></div>
            </div>
            
            <div class="d-flex gap-2 justify-content-end pt-2 border-top">
              <button class="btn btn-sm btn-outline-secondary flex-fill py-2 fw-semibold" 
                      onclick="editChild(<?= htmlspecialchars(json_encode($c), ENT_QUOTES, 'UTF-8') ?>)">
                <i class="bi bi-pencil me-1"></i>Edit
              </button>
              <a href="<?= base_url('admin/children/delete/' . $c['id']) ?>" 
                 class="btn btn-sm btn-outline-danger flex-fill py-2 fw-semibold text-center text-decoration-none" 
                 onclick="return confirm('Hapus data ini?')">
                <i class="bi bi-trash me-1"></i>Hapus
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Empty State jika data kosong -->
  <?php if (empty($children)): ?>
    <div class="text-center text-muted py-5 px-3">
      <i class="bi bi-inbox fs-1 d-block mb-2 text-secondary opacity-50"></i>
      <span>Belum ada data anak asuh. Klik "Tambah Anak Asuh" untuk menambahkan.</span>
    </div>
  <?php endif; ?>

</div>

<!-- Modal Form (Optimasi Layar HP) -->
<div class="modal fade" id="childModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content border-0 shadow">
      <form action="<?= base_url('admin/children/save') ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="modal-header border-bottom px-3 py-2 px-md-4 py-md-3">
          <h5 class="modal-title fw-bold fs-6 fs-md-5" id="modalTitle">Tambah Anak Asuh</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body p-3 p-md-4">
          <input type="hidden" name="id" id="childId">
          
          <div class="mb-3">
            <label class="form-label small fw-bold">Nama Lengkap</label>
            <input type="text" class="form-control py-2" name="full_name" id="childName" placeholder="Masukkan nama lengkap" required>
          </div>
          
          <div class="row g-2 g-md-3 mb-3">
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Usia (Tahun)</label>
              <input type="number" class="form-control py-2" name="age" id="childAge" min="0" placeholder="Contoh: 10" required>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Jenis Kelamin</label>
              <select class="form-select py-2" name="gender" id="childGender" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>
          
          <div class="mb-2">
            <label class="form-label small fw-bold">Pendidikan</label>
            <input type="text" class="form-control py-2" name="education" id="childEducation" placeholder="Contoh: SMA-1, SD-6, atau -">
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
    document.getElementById('modalTitle').innerText = 'Tambah Anak Asuh';
    document.getElementById('childId').value = '';
    document.getElementById('childName').value = '';
    document.getElementById('childAge').value = '';
    document.getElementById('childGender').value = 'Laki-laki';
    document.getElementById('childEducation').value = '';
  }

  function editChild(data) {
    document.getElementById('modalTitle').innerText = 'Edit Data Anak Asuh';
    document.getElementById('childId').value = data.id;
    document.getElementById('childName').value = data.full_name;
    document.getElementById('childAge').value = data.age;
    document.getElementById('childGender').value = data.gender;
    document.getElementById('childEducation').value = data.education;

    var modal = new bootstrap.Modal(document.getElementById('childModal'));
    modal.show();
  }

  // --- PREVENSI DOUBLE SUBMIT ---
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#childModal form');
    const submitBtn = form.querySelector('button[type="submit"]');

    form.addEventListener('submit', function () {
      // 1. Matikan tombol agar tidak bisa diklik ulang
      submitBtn.disabled = true;

      // 2. Tampilkan indikator loading pada tombol
      const originalBtnText = submitBtn.innerHTML;
      submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Menyimpan...';

      // Safety timeout: kembalikan tombol jika pengiriman tertahan lebih dari 10 detik
      setTimeout(function() {
        if (submitBtn.disabled) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnText;
        }
      }, 10000);
    });
  });
</script>
<?= $this->endSection() ?>