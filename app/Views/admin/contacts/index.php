<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<!-- Alert Flashdata -->
<?php if (session()->getFlashdata('message')): ?>
  <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm mb-3" role="alert">
    <i class="bi bi-check-circle me-1"></i> <?= session()->getFlashdata('message') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<!-- Header Card Status (Responsif Grid) -->
<div class="row g-2 g-md-3 mb-4">
  <div class="col-6 col-md-4">
    <div class="card stat-card p-2 p-md-3 d-flex flex-row align-items-center gap-2 gap-md-3 border-0 shadow-sm rounded-3 bg-white h-100">
      <div class="stat-icon p-2 p-md-3 rounded" style="background:rgba(13,110,253,.1); color:#0d6efd;">
        <i class="bi bi-envelope-open fs-5 fs-md-4"></i>
      </div>
      <div>
        <div class="fs-5 fs-md-4 fw-bold"><?= count($contacts) ?></div>
        <div class="text-muted small text-truncate">Total Pesan</div>
      </div>
    </div>
  </div>
  <div class="col-6 col-md-4">
    <div class="card stat-card p-2 p-md-3 d-flex flex-row align-items-center gap-2 gap-md-3 border-0 shadow-sm rounded-3 bg-white h-100">
      <div class="stat-icon p-2 p-md-3 rounded" style="background:rgba(220,53,69,.1); color:#dc3545;">
        <i class="bi bi-envelope-exclamation fs-5 fs-md-4"></i>
      </div>
      <div>
        <div class="fs-5 fs-md-4 fw-bold"><?= $unread_count ?></div>
        <div class="text-muted small text-truncate">Belum Dibaca</div>
      </div>
    </div>
  </div>
</div>

<!-- Main Container Card -->
<div class="card border-0 shadow-sm rounded-3 overflow-hidden mb-4">
  
  <div class="card-header bg-white p-3 border-bottom">
    <h6 class="m-0 fw-bold text-dark fs-6">Daftar Pesan Pengunjung</h6>
  </div>

  <!-- Mode 1: Desktop Table (Hanya Tampil di Tablet & Desktop) -->
  <div class="table-responsive d-none d-md-block">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th class="ps-4">Pengirim</th>
          <th>Subjek</th>
          <th>Tanggal</th>
          <th>Status</th>
          <th class="text-end pe-4">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($contacts)): ?>
          <?php foreach ($contacts as $c): ?>
            <tr class="<?= $c['is_read'] == 0 ? 'fw-bold bg-light' : '' ?>">
              <td class="ps-4">
                <div><?= esc($c['name']) ?></div>
                <div class="text-muted small fw-normal"><?= esc($c['email']) ?></div>
              </td>
              <td><?= esc($c['subject']) ?></td>
              <td class="small text-muted"><?= date('d M Y H:i', strtotime($c['created_at'])) ?></td>
              <td>
                <?php if ($c['is_read'] == 0): ?>
                  <span class="badge bg-danger">Baru</span>
                <?php else: ?>
                  <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle">Dibaca</span>
                <?php endif; ?>
              </td>
              <td class="text-end pe-4">
                <button class="btn btn-sm btn-outline-primary me-1 py-1 px-2" 
                        onclick="viewContact(<?= htmlspecialchars(json_encode($c), ENT_QUOTES, 'UTF-8') ?>, '<?= base_url('admin/contacts/read/' . $c['id']) ?>')" 
                        title="Baca & Balas Pesan">
                  <i class="bi bi-eye"></i>
                </button>
                <a href="<?= base_url('admin/contacts/delete/' . $c['id']) ?>" 
                   class="btn btn-sm btn-outline-danger py-1 px-2" 
                   onclick="return confirm('Hapus pesan ini?')" 
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
    <?php if (!empty($contacts)): ?>
      <?php foreach ($contacts as $c): ?>
        <div class="card border-0 shadow-sm mb-3 rounded-3 overflow-hidden <?= $c['is_read'] == 0 ? 'border-start border-4 border-danger' : '' ?>">
          <div class="card-body p-3">
            <div class="d-flex justify-content-between align-items-start mb-2 gap-2">
              <div class="overflow-hidden">
                <h6 class="fw-bold text-dark mb-0 text-truncate"><?= esc($c['name']) ?></h6>
                <div class="text-muted small text-truncate"><?= esc($c['email']) ?></div>
              </div>
              <?php if ($c['is_read'] == 0): ?>
                <span class="badge bg-danger flex-shrink-0">Baru</span>
              <?php else: ?>
                <span class="badge bg-dark-subtle text-secondary border border-secondary-subtle flex-shrink-0">Dibaca</span>
              <?php endif; ?>
            </div>

            <div class="bg-light p-2 rounded mb-2">
              <div class="fw-semibold text-dark small text-truncate"><i class="bi bi-chat-left-text me-1"></i><?= esc($c['subject']) ?></div>
            </div>

            <div class="d-flex justify-content-between align-items-center pt-2 border-top">
              <span class="text-muted small"><i class="bi bi-clock me-1"></i><?= date('d M Y H:i', strtotime($c['created_at'])) ?></span>
              <div class="d-flex gap-1">
                <button class="btn btn-sm btn-outline-primary py-1 px-2 fw-semibold" 
                        onclick="viewContact(<?= htmlspecialchars(json_encode($c), ENT_QUOTES, 'UTF-8') ?>, '<?= base_url('admin/contacts/read/' . $c['id']) ?>')">
                  <i class="bi bi-eye me-1"></i>Baca
                </button>
                <a href="<?= base_url('admin/contacts/delete/' . $c['id']) ?>" 
                   class="btn btn-sm btn-outline-danger py-1 px-2" 
                   onclick="return confirm('Hapus pesan ini?')">
                  <i class="bi bi-trash"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Empty State jika data kosong -->
  <?php if (empty($contacts)): ?>
    <div class="text-center text-muted py-5 px-3">
      <i class="bi bi-inbox fs-1 d-block mb-2 text-secondary opacity-50"></i>
      <span>Belum ada pesan masuk dari pengunjung.</span>
    </div>
  <?php endif; ?>

</div>

<!-- Modal Baca & Balas Pesan (Optimasi Layar HP) -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content border-0 shadow">
      <form action="<?= base_url('admin/contacts/reply') ?>" method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="id" id="modalId">
        <input type="hidden" name="email" id="modalEmailInput">
        <input type="hidden" name="subject" id="modalSubjectInput">

        <div class="modal-header border-bottom px-3 py-2 px-md-4 py-md-3">
          <h5 class="modal-title fw-bold fs-6 fs-md-5" id="modalSubjectTitle">Detail Pesan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body p-3 p-md-4">
          <div class="mb-2">
            <small class="text-muted d-block">Dari:</small>
            <span class="fw-bold text-dark" id="modalName"></span> (<span id="modalEmail" class="text-primary text-break"></span>)
          </div>
          
          <div class="mb-3">
            <small class="text-muted d-block">Isi Pesan Masuk:</small>
            <div class="p-3 bg-light rounded small text-dark mt-1" id="modalMessage" style="white-space: pre-wrap; max-height: 200px; overflow-y: auto;"></div>
          </div>
          
          <hr class="my-3">
          
          <div class="mb-2">
            <label class="form-label small fw-bold text-dark"><i class="bi bi-reply-fill me-1"></i>Tulis Pesan Balasan:</label>
            <textarea name="reply_message" class="form-control py-2" rows="4" placeholder="Ketikkan balasan email Anda di sini..." required></textarea>
          </div>
        </div>
        
        <div class="modal-footer border-top p-2 p-md-3 d-flex flex-column flex-sm-row gap-2">
          <button type="button" class="btn btn-light w-100 w-sm-auto order-2 order-sm-1" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn-church w-100 w-sm-auto order-1 order-sm-2 text-center" style="background-color:#0d1830; color:#fff;">
            <i class="bi bi-send me-1"></i> Kirim Balasan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  function viewContact(data, readUrl) {
    // Mengisi input hidden untuk form balasan
    document.getElementById('modalId').value = data.id;
    document.getElementById('modalEmailInput').value = data.email;
    document.getElementById('modalSubjectInput').value = data.subject;
    
    // Mengisi teks tampilan detail pesan di modal
    document.getElementById('modalSubjectTitle').innerText = data.subject;
    document.getElementById('modalName').innerText = data.name;
    document.getElementById('modalEmail').innerText = data.email;
    document.getElementById('modalMessage').innerText = data.message;

    // Memunculkan Modal Bootstrap
    var modal = new bootstrap.Modal(document.getElementById('contactModal'));
    modal.show();

    // Jika pesan belum dibaca, tandai sudah dibaca di background via AJAX
    if (data.is_read == 0) {
      fetch(readUrl).then(() => {
        // Tandai terbaca jika diperlukan
      });
    }
  }

  // --- PREVENSI DOUBLE SUBMIT PADA BALAS PESAN ---
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#contactModal form');
    if (!form) return;

    const submitBtn = form.querySelector('button[type="submit"]');

    form.addEventListener('submit', function () {
      // 1. Kunci tombol balasan agar tidak bisa diklik 2x
      submitBtn.disabled = true;

      // 2. Ubah indikator teks tombol menjadi status pengiriman
      const originalBtnText = submitBtn.innerHTML;
      submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Mengirim Balasan...';

      // 3. Pengaman (Safety Timeout) jika terjadi kendala pengiriman email / jaringan tertahan
      setTimeout(function () {
        if (submitBtn.disabled) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnText;
        }
      }, 10000); // Otomatis pulih dalam 10 detik jika tidak ada reload halaman
    });
  });
</script>
<?= $this->endSection() ?>