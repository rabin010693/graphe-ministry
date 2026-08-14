<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<!-- Flash Message -->
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
      <h6 class="m-0 fw-bold text-dark fs-6">Daftar Video & Multimedia</h6>
      <button class="btn-church w-20 w-sm-auto text-center py-2 px-3 fw-semibold d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#videoModal" onclick="resetVideoForm()">
        <i class="bi bi-plus-lg me-1"></i> Tambah Video Baru
      </button>
    </div>
  </div>

  <!-- Mode 1: Desktop Table (Hanya Tampil di Tablet & Desktop) -->
  <div class="table-responsive d-none d-md-block">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th class="ps-4">Preview & Judul Video</th>
          <th>Kategori</th>
          <th>Status Featured</th>
          <th>Tanggal Rilis</th>
          <th class="text-end pe-4">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($videos)): ?>
          <?php foreach ($videos as $v): ?>
            <tr>
              <td class="ps-4">
                <div class="d-flex align-items-center gap-3">
                  <!-- Thumbnail YouTube -->
                  <div class="position-relative rounded overflow-hidden flex-shrink-0" style="width: 100px; height: 56px; background-color: #000;">
                    <img src="https://img.youtube.com/vi/<?= esc($v['youtube_id']) ?>/mqdefault.jpg" class="w-100 h-100 object-fit-cover" alt="<?= esc($v['title']) ?>">
                    <a href="https://www.youtube.com/watch?v=<?= esc($v['youtube_id']) ?>" target="_blank" class="position-absolute top-50 start-50 translate-middle text-white fs-5 opacity-75">
                      <i class="bi bi-play-circle-fill"></i>
                    </a>
                  </div>
                  <div>
                    <div class="fw-bold text-dark mb-1"><?= esc($v['title']) ?></div>
                    <small class="text-muted text-truncate d-block" style="max-width: 250px;"><?= esc($v['description']) ?></small>
                  </div>
                </div>
              </td>
              <td>
                <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle text-uppercase"><?= esc($v['category']) ?></span>
              </td>
              <td>
                <?php if ($v['is_featured']): ?>
                  <span class="badge bg-danger-subtle text-danger border border-danger-subtle"><i class="bi bi-star-fill me-1"></i> Utama / Featured</span>
                <?php else: ?>
                  <span class="badge bg-light text-muted border">Standar</span>
                <?php endif; ?>
              </td>
              <td class="text-muted small">
                <?= esc($v['published_at'] ?? date('Y-m-d', strtotime($v['created_at']))) ?>
              </td>
              <td class="text-end pe-4">
                <button class="btn btn-sm btn-outline-secondary me-1 py-1 px-2" 
                        onclick="editVideo(<?= htmlspecialchars(json_encode($v), ENT_QUOTES, 'UTF-8') ?>)"
                        title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <a href="<?= base_url('admin/videos/delete/' . $v['id']) ?>" 
                   class="btn btn-sm btn-outline-danger py-1 px-2" 
                   onclick="return confirm('Apakah Anda yakin ingin menghapus video ini?')"
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
  <div class="d-block d-md-none p-2 bg-light-subtle">
    <?php if (!empty($videos)): ?>
      <?php foreach ($videos as $v): ?>
        <div class="card border-0 shadow-sm mb-3 rounded-3">
          <div class="card-body p-3">
            <div class="d-flex justify-content-between align-items-center mb-2 gap-2">
              <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle text-uppercase"><?= esc($v['category']) ?></span>
              <?php if ($v['is_featured']): ?>
                <span class="badge bg-danger-subtle text-danger border border-danger-subtle"><i class="bi bi-star-fill me-1"></i> Utama</span>
              <?php endif; ?>
            </div>
            
            <div class="ratio ratio-16x9 rounded overflow-hidden mb-2">
              <iframe src="https://www.youtube.com/embed/<?= esc($v['youtube_id']) ?>" title="<?= esc($v['title']) ?>" allowfullscreen loading="lazy"></iframe>
            </div>

            <h6 class="fw-bold text-dark mb-1"><?= esc($v['title']) ?></h6>
            <p class="text-muted small mb-2 text-truncate"><?= esc($v['description']) ?></p>
            
            <div class="d-flex gap-2 pt-2 border-top">
              <button class="btn btn-sm btn-outline-secondary flex-fill py-2 fw-semibold" 
                      onclick="editVideo(<?= htmlspecialchars(json_encode($v), ENT_QUOTES, 'UTF-8') ?>)">
                <i class="bi bi-pencil me-1"></i>Edit
              </button>
              <a href="<?= base_url('admin/videos/delete/' . $v['id']) ?>" 
                 class="btn btn-sm btn-outline-danger flex-fill py-2 fw-semibold text-center text-decoration-none" 
                 onclick="return confirm('Apakah Anda yakin ingin menghapus video ini?')">
                <i class="bi bi-trash me-1"></i>Hapus
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Empty State jika data kosong -->
  <?php if (empty($videos)): ?>
    <div class="text-center text-muted py-5 px-3">
      <i class="bi bi-youtube fs-1 d-block mb-2 text-secondary opacity-50"></i>
      <span>Belum ada data video. Klik "Tambah Video Baru" untuk menambahkan.</span>
    </div>
  <?php endif; ?>

</div>

<!-- Modal Form Add/Edit Video (Optimasi Layar HP) -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content border-0 shadow">
      <form action="<?= base_url('admin/videos/save') ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="modal-header border-bottom px-3 py-2 px-md-4 py-md-3">
          <h5 class="modal-title fw-bold fs-6 fs-md-5" id="videoModalTitle">Tambah Video Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body p-3 p-md-4">
          <input type="hidden" name="id" id="videoId">

          <div class="mb-3">
            <label class="form-label small fw-bold">Judul Video</label>
            <input type="text" class="form-control py-2" name="title" id="videoTitle" placeholder="Contoh: Khotbah Minggu - Kebenaran Yang Memerdekakan" required>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-bold">Link URL YouTube</label>
            <input type="url" class="form-control py-2" name="youtube_url" id="videoYoutubeUrl" placeholder="https://www.youtube.com/watch?v=xxxxxx atau https://youtu.be/xxxxxx" required>
            <div class="form-text small">Cukup copy-paste link dari YouTube browser/aplikasi HP Anda.</div>
          </div>

          <div class="row g-2 g-md-3 mb-3">
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Kategori Video</label>
              <select class="form-select py-2" name="category" id="videoCategory" required>
                <option value="ibadah_umum">Kebaktian Umum Minggu</option>
                <option value="khotbah_rabu">Kebaktaian Doa Rabu Malam</option>
                <option value="seminar">Seminar - Seminar</option>
                <option value="podcast">Podcast</option>
              </select>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Tanggal Rilis / Khotbah</label>
              <input type="date" class="form-control py-2" name="published_at" id="videoPublishedAt">
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-bold">Keterangan / Deskripsi Singkat</label>
            <textarea class="form-control" name="description" id="videoDescription" rows="3" placeholder="Tambahkan deskripsi singkat mengenai isi video..."></textarea>
          </div>

          <div class="form-check form-switch bg-light p-3 rounded-3 border">
            <input class="form-check-input ms-0 me-2" type="checkbox" name="is_featured" value="1" id="videoIsFeatured">
            <label class="form-check-label small fw-bold text-dark" for="videoIsFeatured">
              Jadikan Video Utama / Featured Banner (Live Hero)
            </label>
            <div class="form-text small mb-0">Jika diaktifkan, video ini akan tampil paling atas di banner utama halaman Multimedia.</div>
          </div>

        </div>
        
        <div class="modal-footer border-top p-2 p-md-3 d-flex flex-column flex-sm-row gap-2">
          <button type="button" class="btn btn-light w-100 w-sm-auto order-2 order-sm-1" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn-church w-100 w-sm-auto order-1 order-sm-2 text-center" style="background-color:#0d1830; color:#fff;">Simpan Video</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  function resetVideoForm() {
    document.getElementById('videoModalTitle').innerText = 'Tambah Video Baru';
    document.getElementById('videoId').value = '';
    document.getElementById('videoTitle').value = '';
    document.getElementById('videoYoutubeUrl').value = '';
    document.getElementById('videoCategory').value = 'ibadah';
    document.getElementById('videoPublishedAt').value = new Date().toISOString().split('T')[0];
    document.getElementById('videoDescription').value = '';
    document.getElementById('videoIsFeatured').checked = false;
  }

  function editVideo(data) {
    document.getElementById('videoModalTitle').innerText = 'Edit Video';
    document.getElementById('videoId').value = data.id;
    document.getElementById('videoTitle').value = data.title;
    document.getElementById('videoYoutubeUrl').value = data.youtube_url;
    document.getElementById('videoCategory').value = data.category;
    document.getElementById('videoPublishedAt').value = data.published_at ? data.published_at : '';
    document.getElementById('videoDescription').value = data.description ? data.description : '';
    document.getElementById('videoIsFeatured').checked = (parseInt(data.is_featured) === 1);

    var modal = new bootstrap.Modal(document.getElementById('videoModal'));
    modal.show();
  }

  // --- IMPLEMENTASI AJAX & PREVENSI DOUBLE SUBMIT ---
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#videoModal form');
    const submitBtn = form.querySelector('button[type="submit"]');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      // 1. Kunci tombol simpan
      submitBtn.disabled = true;
      const originalBtnText = submitBtn.innerHTML;
      submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Memproses...';

      function restoreButton() {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnText;
      }

      const formData = new FormData(form);
      const xhr = new XMLHttpRequest();
      xhr.open('POST', form.action, true);

      // Loading Alert
      Swal.fire({
        title: 'Sedang Menyimpan Data...',
        text: 'Mohon tunggu sebentar.',
        allowOutsideClick: false,
        allowEscapeKey: false,
        showConfirmButton: false,
        didOpen: () => {
          Swal.showLoading();
        }
      });

      // Response Handler
      xhr.onload = function () {
        let response = {};
        try {
          response = JSON.parse(xhr.responseText);
        } catch (e) {
          response = { status: 'error', message: 'Terjadi kesalahan format respon dari server.' };
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
          restoreButton();
          Swal.fire({
            icon: 'error',
            title: 'Gagal Menyimpan!',
            text: response.message || 'Terjadi kesalahan pada sistem.',
          });
        }
      };

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