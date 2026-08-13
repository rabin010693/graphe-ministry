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
      <h6 class="m-0 fw-bold text-dark fs-6">Kalender & Program Kegiatan Tahunan</h6>
      <!-- Tombol Tambah Tema Merah (btn-church) -->
      <button class="btn-church w-20 w-sm-auto text-center py-2 px-3 fw-semibold d-flex align-items-center justify-content-center" 
              data-bs-toggle="modal" 
              data-bs-target="#eventModal" 
              onclick="resetForm()">
        <i class="bi bi-plus-lg me-1"></i> Tambah Kegiatan
      </button>
    </div>
  </div>

  <!-- Mode 1: Desktop Table (Hanya Tampil di Tablet & Desktop) -->
  <div class="table-responsive d-none d-md-block">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th class="ps-4">Tanggal</th>
          <th>Nama Kegiatan</th>
          <th>Waktu</th>
          <th>Lokasi</th>
          <th class="text-end pe-4">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($events)): ?>
          <?php foreach ($events as $e): ?>
            <tr>
              <td class="ps-4 fw-bold text-primary">
                <i class="bi bi-calendar-event me-1"></i>
                <?= date('d M Y', strtotime($e['event_date'])) ?>
              </td>
              <td class="fw-bold text-dark"><?= esc($e['title']) ?></td>
              <td><?= esc($e['event_time']) ?></td>
              <td><span class="badge bg-light text-dark border"><?= esc($e['location']) ?></span></td>
              <td class="text-end pe-4">
                <button class="btn btn-sm btn-outline-secondary me-1 py-1 px-2" 
                        onclick="editEvent(<?= htmlspecialchars(json_encode($e), ENT_QUOTES, 'UTF-8') ?>)"
                        title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <a href="<?= base_url('admin/events/delete/' . $e['id']) ?>" 
                   class="btn btn-sm btn-outline-danger py-1 px-2" 
                   onclick="return confirm('Hapus kegiatan ini?')"
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
    <?php if (!empty($events)): ?>
      <?php foreach ($events as $e): ?>
        <div class="card border-0 shadow-sm mb-3 rounded-3">
          <div class="card-body p-3">
            <div class="d-flex justify-content-between align-items-start mb-2 gap-2">
              <span class="badge bg-primary-subtle text-primary border border-primary-subtle flex-shrink-0">
                <i class="bi bi-calendar-event me-1"></i><?= date('d M Y', strtotime($e['event_date'])) ?>
              </span>
              <span class="badge bg-light text-dark border flex-shrink-0"><i class="bi bi-geo-alt me-1"></i><?= esc($e['location']) ?></span>
            </div>
            
            <h6 class="fw-bold text-dark mb-2"><?= esc($e['title']) ?></h6>
            
            <div class="text-muted small mb-2">
              <i class="bi bi-clock me-1"></i> Waktu: <strong><?= esc($e['event_time']) ?></strong>
            </div>

            <?php if (!empty($e['description'])): ?>
              <p class="text-muted small mb-3 bg-light p-2 rounded">
                <?= esc($e['description']) ?>
              </p>
            <?php endif; ?>
            
            <div class="d-flex gap-2 justify-content-end pt-2 border-top mt-2">
              <button class="btn btn-sm btn-outline-secondary flex-fill py-2 fw-semibold" 
                      onclick="editEvent(<?= htmlspecialchars(json_encode($e), ENT_QUOTES, 'UTF-8') ?>)">
                <i class="bi bi-pencil me-1"></i>Edit
              </button>
              <a href="<?= base_url('admin/events/delete/' . $e['id']) ?>" 
                 class="btn btn-sm btn-outline-danger flex-fill py-2 fw-semibold text-center text-decoration-none" 
                 onclick="return confirm('Hapus kegiatan ini?')">
                <i class="bi bi-trash me-1"></i>Hapus
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Empty State Jika Data Kosong -->
  <?php if (empty($events)): ?>
    <div class="text-center text-muted py-5 px-3">
      <i class="bi bi-calendar-x fs-1 d-block mb-2 text-secondary opacity-50"></i>
      <span>Belum ada jadwal kegiatan. Klik "Tambah Kegiatan" untuk menambahkan.</span>
    </div>
  <?php endif; ?>

</div>

<!-- Modal Form Event (Optimasi Layar HP) -->
<div class="modal fade" id="eventModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content border-0 shadow">
      <form action="<?= base_url('admin/events/save') ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="modal-header border-bottom px-3 py-2 px-md-4 py-md-3">
          <h5 class="modal-title fw-bold fs-6 fs-md-5" id="modalTitle">Tambah Kegiatan Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body p-3 p-md-4">
          <input type="hidden" name="id" id="eventId">

          <div class="mb-3">
            <label class="form-label small fw-bold">Nama / Judul Kegiatan</label>
            <input type="text" class="form-control py-2" name="title" id="eventTitle" placeholder="Contoh: Ibadah Kebangunan Rohani" required>
          </div>

          <div class="row g-2 g-md-3 mb-3">
            <div class="col-12 col-md-4">
              <label class="form-label small fw-bold">Tanggal Kegiatan</label>
              <input type="date" class="form-control py-2" name="event_date" id="eventDate" required>
            </div>
            <div class="col-12 col-md-4">
              <label class="form-label small fw-bold">Waktu (Jam)</label>
              <input type="text" class="form-control py-2" name="event_time" id="eventTime" placeholder="18:00 - 20:00" required>
            </div>
            <div class="col-12 col-md-4">
              <label class="form-label small fw-bold">Lokasi Tempat</label>
              <input type="text" class="form-control py-2" name="location" id="eventLocation" placeholder="Auditorium Utama" required>
            </div>
          </div>

          <div class="mb-2">
            <label class="form-label small fw-bold">Deskripsi / Keterangan Tambahan (Opsional)</label>
            <textarea class="form-control" name="description" id="eventDescription" rows="3" placeholder="Informasi singkat seputar kegiatan..."></textarea>
          </div>

        </div>
        
        <div class="modal-footer border-top p-2 p-md-3 d-flex flex-column flex-sm-row gap-2">
          <button type="button" class="btn btn-light w-100 w-sm-auto order-2 order-sm-1" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn-church w-100 w-sm-auto order-1 order-sm-2 text-center" style="background-color:#0d1830; color:#fff;">Simpan Kegiatan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  function resetForm() {
    document.getElementById('modalTitle').innerText = 'Tambah Kegiatan Baru';
    document.getElementById('eventId').value = '';
    document.getElementById('eventTitle').value = '';
    document.getElementById('eventDate').value = '<?= date('Y-m-d') ?>';
    document.getElementById('eventTime').value = '';
    document.getElementById('eventLocation').value = '';
    document.getElementById('eventDescription').value = '';
  }

  function editEvent(data) {
    document.getElementById('modalTitle').innerText = 'Edit Jadwal Kegiatan';
    document.getElementById('eventId').value = data.id;
    document.getElementById('eventTitle').value = data.title;
    document.getElementById('eventDate').value = data.event_date;
    document.getElementById('eventTime').value = data.event_time;
    document.getElementById('eventLocation').value = data.location;
    document.getElementById('eventDescription').value = data.description;

    var modal = new bootstrap.Modal(document.getElementById('eventModal'));
    modal.show();
  }

  // --- PREVENSI DOUBLE SUBMIT & AJAX SUBMISSION ---
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#eventModal form');
    const submitBtn = form.querySelector('button[type="submit"]');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      // 1. Kunci tombol simpan agar tidak bisa diklik 2x & ubah tampilannya
      submitBtn.disabled = true;
      const originalBtnText = submitBtn.innerHTML;
      submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Menyimpan...';

      // Helper function untuk mengembalikan tombol jika penyimpanan gagal
      function restoreButton() {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnText;
      }

      const formData = new FormData(form);
      const xhr = new XMLHttpRequest();
      xhr.open('POST', form.action, true);
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

      xhr.onload = function () {
        let response = {};
        try {
          response = JSON.parse(xhr.responseText);
        } catch (e) {
          restoreButton(); // Pulihkan tombol jika format respon JSON gagal diparse
          Swal.fire({
            icon: 'error',
            title: 'Gagal Menyimpan!',
            html: `<pre class="text-start bg-light p-2 border small">${xhr.responseText.replace(/</g, "&lt;")}</pre>`
          });
          return;
        }

        // Perbarui CSRF Token jika dikirimkan oleh server
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
          restoreButton(); // Pulihkan tombol jika simpan/validasi gagal
          Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: response.message || 'Terjadi kesalahan.',
          });
        }
      };

      // Pulihkan tombol jika terjadi kendala koneksi jaringan
      xhr.onerror = function () {
        restoreButton();
        Swal.fire({
          icon: 'error',
          title: 'Koneksi Gagal',
          text: 'Periksa koneksi internet Anda.',
        });
      };

      xhr.send(formData);
    });
  });
</script>
<?= $this->endSection() ?>