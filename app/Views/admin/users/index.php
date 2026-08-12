<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<!-- Alert Flashdata -->
<?php if (session()->getFlashdata('message')): ?>
  <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm mb-3" role="alert">
    <i class="bi bi-check-circle me-1"></i> <?= session()->getFlashdata('message') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
  <div class="alert alert-danger alert-dismissible fade show rounded-3 shadow-sm mb-3" role="alert">
    <i class="bi bi-exclamation-circle me-1"></i> <?= session()->getFlashdata('error') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<!-- Container Card Utama -->
<div class="card border-0 shadow-sm rounded-3 overflow-hidden mb-4">
  
  <!-- Header Card (Responsif Mobile) -->
  <div class="card-header bg-white p-3 border-bottom">
    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
      <h6 class="m-0 fw-bold text-dark fs-6">Daftar Pengguna Panel Admin</h6>
      <!-- Tombol Tambah Tema Merah (btn-church) -->
      <button class="btn-church w-20 w-sm-auto text-center py-2 px-3 fw-semibold d-flex align-items-center justify-content-center" 
              data-bs-toggle="modal" 
              data-bs-target="#userModal" 
              onclick="resetUserForm()">
        <i class="bi bi-person-plus me-1"></i> Tambah User Baru
      </button>
    </div>
  </div>

  <!-- Mode 1: Desktop Table (Hanya Tampil di Tablet & Desktop) -->
  <div class="table-responsive d-none d-md-block">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th class="ps-4">Nama Lengkap</th>
          <th>Username</th>
          <th>Email</th>
          <th>Role / Hak Akses</th>
          <th class="text-end pe-4">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($users)): ?>
          <?php foreach ($users as $user): ?>
            <tr>
              <td class="ps-4 fw-semibold"><?= esc($user['name']) ?></td>
              <td><code><?= esc($user['username']) ?></code></td>
              <td><?= esc($user['email']) ?></td>
              <td>
                <?php if ($user['role'] === 'admin'): ?>
                  <span class="badge bg-danger-subtle text-danger border border-danger-subtle">Admin Utama</span>
                <?php else: ?>
                  <span class="badge bg-primary-subtle text-primary border border-primary-subtle">Penulis (Author)</span>
                <?php endif; ?>
              </td>
              <td class="text-end pe-4">
                <button class="btn btn-sm btn-outline-secondary me-1 py-1 px-2" 
                        onclick="editUser(<?= htmlspecialchars(json_encode($user), ENT_QUOTES, 'UTF-8') ?>)" 
                        title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <?php if ($user['id'] != session()->get('user_id')): ?>
                  <button class="btn btn-sm btn-outline-danger py-1 px-2" 
                          onclick="confirmDeleteUser('<?= base_url('admin/users/delete/' . $user['id']) ?>')" 
                          title="Hapus">
                    <i class="bi bi-trash"></i>
                  </button>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <!-- Mode 2: Mobile Card List (Hanya Tampil di Ponsel) -->
  <div class="d-block d-md-none p-3 bg-light-subtle">
    <?php if (!empty($users)): ?>
      <?php foreach ($users as $user): ?>
        <div class="card border-0 shadow-sm mb-3 rounded-3">
          <div class="card-body p-3">
            <div class="d-flex justify-content-between align-items-start mb-2 gap-2">
              <div>
                <h6 class="fw-bold text-dark mb-0"><?= esc($user['name']) ?></h6>
                <code class="small"><?= esc($user['username']) ?></code>
              </div>
              <?php if ($user['role'] === 'admin'): ?>
                <span class="badge bg-danger-subtle text-danger border border-danger-subtle flex-shrink-0">Admin Utama</span>
              <?php else: ?>
                <span class="badge bg-primary-subtle text-primary border border-primary-subtle flex-shrink-0">Penulis</span>
              <?php endif; ?>
            </div>

            <div class="text-muted small mb-3">
              <i class="bi bi-envelope me-1"></i><?= esc($user['email']) ?>
            </div>

            <div class="d-flex gap-2 justify-content-end pt-2 border-top">
              <button class="btn btn-sm btn-outline-secondary flex-fill py-2 fw-semibold" 
                      onclick="editUser(<?= htmlspecialchars(json_encode($user), ENT_QUOTES, 'UTF-8') ?>)">
                <i class="bi bi-pencil me-1"></i>Edit
              </button>
              <?php if ($user['id'] != session()->get('user_id')): ?>
                <button class="btn btn-sm btn-outline-danger flex-fill py-2 fw-semibold" 
                        onclick="confirmDeleteUser('<?= base_url('admin/users/delete/' . $user['id']) ?>')">
                  <i class="bi bi-trash me-1"></i>Hapus
                </button>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Empty State jika data kosong -->
  <?php if (empty($users)): ?>
    <div class="text-center text-muted py-5 px-3">
      <i class="bi bi-people fs-1 d-block mb-2 text-secondary opacity-50"></i>
      <span>Belum ada pengguna terdaftar.</span>
    </div>
  <?php endif; ?>

</div>

<!-- Modal Add/Edit User (Optimasi Layar HP) -->
<div class="modal fade" id="userModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content border-0 shadow">
      <form action="<?= base_url('admin/users/save') ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="modal-header border-bottom px-3 py-2 px-md-4 py-md-3">
          <h5 class="modal-title fw-bold fs-6 fs-md-5" id="userModalTitle">Tambah User Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body p-3 p-md-4">
          <input type="hidden" name="id" id="userId">

          <div class="mb-3">
            <label class="form-label small fw-bold">Nama Lengkap</label>
            <input type="text" class="form-control py-2" name="name" id="userName" placeholder="Masukkan nama lengkap" required>
          </div>
          
          <div class="mb-3">
            <label class="form-label small fw-bold">Username</label>
            <input type="text" class="form-control py-2" name="username" id="userUsername" placeholder="Masukkan username" required>
          </div>
          
          <div class="mb-3">
            <label class="form-label small fw-bold">Email</label>
            <input type="email" class="form-control py-2" name="email" id="userEmail" placeholder="nama@email.com" required>
          </div>
          
          <div class="mb-3">
            <label class="form-label small fw-bold">Password <span class="text-muted fw-normal" id="pwdHelp">(Wajib diisi)</span></label>
            <input type="password" class="form-control py-2" name="password" id="userPassword" placeholder="••••••••">
          </div>
          
          <div class="mb-2">
            <label class="form-label small fw-bold">Role / Peran</label>
            <select class="form-select py-2" name="role" id="userRole" required>
              <option value="author">Penulis (Author)</option>
              <option value="admin">Admin Utama</option>
            </select>
          </div>
        </div>
        
        <div class="modal-footer border-top p-2 p-md-3 d-flex flex-column flex-sm-row gap-2">
          <button type="button" class="btn btn-light w-100 w-sm-auto order-2 order-sm-1" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn-church w-100 w-sm-auto order-1 order-sm-2 text-center" style="background-color:#0d1830; color:#fff;">Simpan User</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Delete Confirm (Optimasi Layar HP) -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow">
      <div class="modal-body p-4 text-center">
        <i class="bi bi-exclamation-triangle text-danger fs-1 mb-3 d-block"></i>
        <h5 class="fw-bold">Hapus Pengguna ini?</h5>
        <p class="text-muted small">User tidak akan dapat login lagi ke dalam sistem.</p>
        <div class="d-flex flex-column flex-sm-row justify-content-center gap-2 mt-4">
          <button class="btn btn-light w-100 w-sm-auto order-2 order-sm-1" data-bs-dismiss="modal">Batal</button>
          <a href="#" class="btn btn-danger w-100 w-sm-auto order-1 order-sm-2 px-4 py-2" id="btnConfirmDeleteUser">Ya, Hapus</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  function resetUserForm() {
    document.getElementById('userModalTitle').innerText = 'Tambah User Baru';
    document.getElementById('userId').value = '';
    document.getElementById('userName').value = '';
    document.getElementById('userUsername').value = '';
    document.getElementById('userEmail').value = '';
    document.getElementById('userPassword').value = '';
    document.getElementById('userPassword').required = true;
    document.getElementById('pwdHelp').innerText = '(Wajib diisi)';
    document.getElementById('userRole').value = 'author';
  }

  function editUser(data) {
    document.getElementById('userModalTitle').innerText = 'Edit User';
    document.getElementById('userId').value = data.id;
    document.getElementById('userName').value = data.name;
    document.getElementById('userUsername').value = data.username;
    document.getElementById('userEmail').value = data.email;
    document.getElementById('userPassword').value = '';
    document.getElementById('userPassword').required = false;
    document.getElementById('pwdHelp').innerText = '(Kosongkan jika tidak ingin mengubah password)';
    document.getElementById('userRole').value = data.role;

    var modal = new bootstrap.Modal(document.getElementById('userModal'));
    modal.show();
  }

  function confirmDeleteUser(url) {
    document.getElementById('btnConfirmDeleteUser').setAttribute('href', url);
    var modal = new bootstrap.Modal(document.getElementById('deleteUserModal'));
    modal.show();
  }
</script>
<?= $this->endSection() ?>