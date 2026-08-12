<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<!-- Alert Notifikasi Flashdata -->
<?php if (session()->getFlashdata('message')): ?>
  <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm mb-3" role="alert">
    <i class="bi bi-check-circle me-1"></i> <?= session()->getFlashdata('message') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<!-- Main Container Card -->
<div class="card border-0 shadow-sm rounded-3 overflow-hidden">
  
  <!-- Header Card (Responsif Mobile) -->
  <div class="card-header bg-white p-3 border-bottom">
    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
      <h6 class="m-0 fw-bold text-dark fs-6">Daftar Staf Pengurus & Pelayan Panti</h6>
      <button class="btn-church w-20 w-sm-auto text-center py-2 px-3 fw-semibold d-flex align-items-center justify-content-center" 
              data-bs-toggle="modal" 
              data-bs-target="#staffModal" 
              onclick="resetForm()">
        <i class="bi bi-plus-lg me-1"></i> Tambah Pengurus
      </button>
    </div>
  </div>

  <!-- Mode 1: Desktop Table (Hanya tampil di Tablet / Desktop) -->
  <div class="table-responsive d-none d-md-block">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th class="ps-4 text-center" style="width:70px;">Icon</th>
          <th>Jabatan / Peran</th>
          <th>Nama Pengurus / Pelayan</th>
          <th class="text-end pe-4">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($staffs)): ?>
          <?php foreach ($staffs as $s): ?>
            <tr>
              <td class="ps-4 text-center">
                <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center" style="width:40px; height:40px;">
                  <i class="bi <?= esc($s['icon']) ?> fs-5 text-primary"></i>
                </div>
              </td>
              <td class="text-muted small"><?= esc($s['role_title']) ?></td>
              <td class="fw-bold text-dark"><?= esc($s['name']) ?></td>
              <td class="text-end pe-4">
                <button class="btn btn-sm btn-outline-secondary me-1 py-1 px-2" 
                        onclick="editStaff(<?= htmlspecialchars(json_encode($s), ENT_QUOTES, 'UTF-8') ?>)"
                        title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <a href="<?= base_url('admin/panti-staff/delete/' . $s['id']) ?>" 
                   class="btn btn-sm btn-outline-danger py-1 px-2" 
                   onclick="return confirm('Hapus pengurus ini?')"
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

  <!-- Mode 2: Mobile Card List (Hanya tampil di Ponsel) -->
  <div class="d-block d-md-none p-3 bg-light-subtle">
    <?php if (!empty($staffs)): ?>
      <?php foreach ($staffs as $s): ?>
        <div class="card border-0 shadow-sm mb-3 rounded-3">
          <div class="card-body p-3">
            <div class="d-flex align-items-center gap-3 mb-2">
              <div class="rounded-circle bg-light d-flex align-items-center justify-content-center flex-shrink-0" style="width:44px; height:44px;">
                <i class="bi <?= esc($s['icon']) ?> fs-5 text-primary"></i>
              </div>
              <div class="overflow-hidden">
                <h6 class="fw-bold text-dark mb-0 text-truncate"><?= esc($s['name']) ?></h6>
                <span class="text-muted small"><?= esc($s['role_title']) ?></span>
              </div>
            </div>
            
            <div class="d-flex gap-2 justify-content-end pt-2 border-top mt-2">
              <button class="btn btn-sm btn-outline-secondary flex-fill py-2 fw-semibold" 
                      onclick="editStaff(<?= htmlspecialchars(json_encode($s), ENT_QUOTES, 'UTF-8') ?>)">
                <i class="bi bi-pencil me-1"></i>Edit
              </button>
              <a href="<?= base_url('admin/panti-staff/delete/' . $s['id']) ?>" 
                 class="btn btn-sm btn-outline-danger flex-fill py-2 fw-semibold text-center text-decoration-none" 
                 onclick="return confirm('Hapus pengurus ini?')">
                <i class="bi bi-trash me-1"></i>Hapus
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Empty State Jika Data Kosong -->
  <?php if (empty($staffs)): ?>
    <div class="text-center text-muted py-5 px-3">
      <i class="bi bi-inbox fs-1 d-block mb-2 text-secondary opacity-50"></i>
      <span>Belum ada data pengurus. Klik "Tambah Pengurus" untuk menambahkan.</span>
    </div>
  <?php endif; ?>

</div>

<!-- Modal Form (Dioptimalkan untuk Layar HP) -->
<div class="modal fade" id="staffModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content border-0 shadow">
      <form action="<?= base_url('admin/panti-staff/save') ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="modal-header border-bottom px-3 py-2 px-md-4 py-md-3">
          <h5 class="modal-title fw-bold fs-6 fs-md-5" id="modalTitle">Tambah Pengurus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body p-3 p-md-4">
          <input type="hidden" name="id" id="staffId">
          
          <div class="mb-3">
            <label class="form-label small fw-bold">Jabatan / Peran</label>
            <input type="text" class="form-control py-2" name="role_title" id="staffRole" placeholder="Contoh: Bapak Asuh" required>
          </div>
          
          <div class="mb-3">
            <label class="form-label small fw-bold">Nama Pengurus / Pelayan</label>
            <input type="text" class="form-control py-2" name="name" id="staffName" placeholder="Contoh: Bpk. Yunus" required>
          </div>
          
          <div class="mb-2">
            <label class="form-label small fw-bold">Class Icon (Bootstrap Icons)</label>
            <input type="text" class="form-control py-2" name="icon" id="staffIcon" placeholder="bi-person-fill">
            <div class="form-text small mt-1">
              Contoh icon: <code>bi-person-fill</code>, <code>bi-shield-fill</code>, <code>bi-cup-hot</code>, <code>bi-tools</code>
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
    document.getElementById('modalTitle').innerText = 'Tambah Pengurus';
    document.getElementById('staffId').value = '';
    document.getElementById('staffRole').value = '';
    document.getElementById('staffName').value = '';
    document.getElementById('staffIcon').value = 'bi-person-fill';
  }

  function editStaff(data) {
    document.getElementById('modalTitle').innerText = 'Edit Data Pengurus';
    document.getElementById('staffId').value = data.id;
    document.getElementById('staffRole').value = data.role_title;
    document.getElementById('staffName').value = data.name;
    document.getElementById('staffIcon').value = data.icon;

    var modal = new bootstrap.Modal(document.getElementById('staffModal'));
    modal.show();
  }
</script>
<?= $this->endSection() ?>