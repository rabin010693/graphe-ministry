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
      <h6 class="m-0 fw-bold text-dark fs-6">Daftar Audio Khotbah (MP3)</h6>
      <button class="btn-church w-20 w-sm-auto text-center py-2 px-3 fw-semibold d-flex align-items-center justify-content-center" 
              data-bs-toggle="modal" 
              data-bs-target="#audioModal" 
              onclick="resetForm()">
        <i class="bi bi-plus-lg me-1"></i> Tambah Audio Baru
      </button>
    </div>
  </div>

  <!-- Mode 1: Desktop Table (Hanya Tampil di Tablet & Desktop) -->
  <div class="table-responsive d-none d-md-block">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th class="ps-4">Judul Audio</th>
          <th>Pembicara</th>
          <th>Kategori</th>
          <th>Pemutar / Preview</th>
          <th class="text-end pe-4">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($audios)): ?>
          <?php foreach ($audios as $a): ?>
            <?php 
              $audioSrc = ($a['audio_type'] === 'file') 
                ? base_url('uploads/audio/' . $a['audio_file']) 
                : $a['audio_file'];
            ?>
            <tr>
              <td class="ps-4 fw-bold text-dark"><?= esc($a['title']) ?></td>
              <td><i class="bi bi-person me-1 text-muted"></i><?= esc($a['speaker']) ?></td>
              <td><span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle"><?= esc($a['category']) ?></span></td>
              <td style="width: 250px;">
                <audio controls style="height: 35px; width: 100%;">
                  <source src="<?= $audioSrc ?>" type="audio/mpeg">
                </audio>
              </td>
              <td class="text-end pe-4">
                <button class="btn btn-sm btn-outline-secondary me-1 py-1 px-2" 
                        onclick="editAudio(<?= htmlspecialchars(json_encode($a), ENT_QUOTES, 'UTF-8') ?>)"
                        title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <a href="<?= base_url('admin/audios/delete/' . $a['id']) ?>" 
                   class="btn btn-sm btn-outline-danger py-1 px-2" 
                   onclick="return confirm('Hapus audio khotbah ini?')"
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
    <?php if (!empty($audios)): ?>
      <?php foreach ($audios as $a): ?>
        <?php 
          $audioSrc = ($a['audio_type'] === 'file') 
            ? base_url('uploads/audio/' . $a['audio_file']) 
            : $a['audio_file'];
        ?>
        <div class="card border-0 shadow-sm mb-3 rounded-3">
          <div class="card-body p-3">
            <div class="d-flex justify-content-between align-items-center mb-2 gap-2">
              <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle"><?= esc($a['category']) ?></span>
              
            </div>
            
            <h6 class="fw-bold text-dark mb-2"><?= esc($a['title']) ?></h6>
            <span class="text-muted small text-truncate" style="max-width: 150px;"><i class="bi bi-person me-1"></i><?= esc($a['speaker']) ?></span>
            
            <!-- Player Audio Mobile dengan penyesuaian touch area -->
            <div class="mb-3 bg-light p-1 rounded-2">
              <audio controls preload="none" class="w-100" style="height: 36px;">
                <source src="<?= $audioSrc ?>" type="audio/mpeg">
              </audio>
            </div>
            
            <div class="d-flex gap-2 pt-2 border-top">
              <button class="btn btn-sm btn-outline-secondary flex-fill py-2 fw-semibold" 
                    onclick="editAudio(<?= htmlspecialchars(json_encode($a), ENT_QUOTES, 'UTF-8') ?>)">
                <i class="bi bi-pencil me-1"></i>Edit
              </button>
              <a href="<?= base_url('admin/audios/delete/' . $a['id']) ?>" 
                 class="btn btn-sm btn-outline-danger flex-fill py-2 fw-semibold text-center text-decoration-none" 
                 onclick="return confirm('Hapus audio khotbah ini?')">
                <i class="bi bi-trash me-1"></i>Hapus
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
</div>

  <!-- Empty State jika data kosong -->
  <?php if (empty($audios)): ?>
    <div class="text-center text-muted py-5 px-3">
      <i class="bi bi-music-note-beamed fs-1 d-block mb-2 text-secondary opacity-50"></i>
      <span>Belum ada data audio khotbah. Klik "Tambah Audio Baru" untuk menambahkan.</span>
    </div>
  <?php endif; ?>

</div>

<!-- Modal Form Add/Edit Audio (Optimasi Layar HP) -->
<div class="modal fade" id="audioModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content border-0 shadow">
      <form action="<?= base_url('admin/audios/save') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="modal-header border-bottom px-3 py-2 px-md-4 py-md-3">
          <h5 class="modal-title fw-bold fs-6 fs-md-5" id="modalTitle">Tambah Audio Khotbah</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body p-3 p-md-4">
          <input type="hidden" name="id" id="audioId">
          <input type="hidden" name="old_audio_file" id="oldAudioFile">

          <div class="mb-3">
            <label class="form-label small fw-bold">Judul Khotbah / Audio</label>
            <input type="text" class="form-control py-2" name="title" id="audioTitle" placeholder="Contoh: Mengapa Percaya Ada Allah" required>
          </div>

          <div class="row g-2 g-md-3 mb-3">
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Pembicara / Pengkhotbah</label>
              <input type="text" class="form-control py-2" name="speaker" id="audioSpeaker" placeholder="Contoh: Dr. Steven E. Liauw" required>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Kategori Halaman</label>
              <select class="form-select py-2" name="category" id="audioCategory" required>
                <option value="Kebenaran Memerdekakan">Kebenaran Memerdekakan</option>
                <option value="Through The Bible">Through The Bible</option>
                <option value="Mutiara Kebenaran">Mutiara Kebenaran</option>
                <option value="Khotbah Download">Khotbah Download</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-bold">Sumber File Audio</label>
            <div class="d-flex flex-column flex-sm-row gap-2 gap-sm-4 mt-1">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="audio_type" id="typeFile" value="file" checked onclick="toggleAudioInput('file')">
                <label class="form-check-label small" for="typeFile">Upload File MP3 (Lokal)</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="audio_type" id="typeUrl" value="url" onclick="toggleAudioInput('url')">
                <label class="form-check-label small" for="typeUrl">Link Direct URL / Cloud (HTTP/HTTPS)</label>
              </div>
            </div>
          </div>

          <!-- Input Upload File -->
          <div class="mb-3" id="wrapperFileUpload">
            <label class="form-label small fw-bold">Pilih File MP3</label>
            <input type="file" class="form-control py-2" name="audio_file_upload" id="audioFileUpload" accept=".mp3,audio/mpeg">
            <div class="form-text small">Maksimal ukuran sesuai batas PHP server (direkomendasikan < 20 MB).</div>
          </div>

          <!-- Input Direct Link -->
          <div class="mb-3 d-none" id="wrapperUrlInput">
            <label class="form-label small fw-bold">URL Langsung File MP3</label>
            <input type="url" class="form-control py-2" name="audio_url_external" id="audioUrlExternal" placeholder="https://domain.com/files/khotbah1.mp3">
          </div>

        </div>
        
        <div class="modal-footer border-top p-2 p-md-3 d-flex flex-column flex-sm-row gap-2">
          <button type="button" class="btn btn-light w-100 w-sm-auto order-2 order-sm-1" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn-church w-100 w-sm-auto order-1 order-sm-2 text-center" style="background-color:#0d1830; color:#fff;">Simpan Audio</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  function toggleAudioInput(type) {
    if (type === 'file') {
      document.getElementById('wrapperFileUpload').classList.remove('d-none');
      document.getElementById('wrapperUrlInput').classList.add('d-none');
    } else {
      document.getElementById('wrapperFileUpload').classList.add('d-none');
      document.getElementById('wrapperUrlInput').classList.remove('d-none');
    }
  }

  function resetForm() {
    document.getElementById('modalTitle').innerText = 'Tambah Audio Khotbah';
    document.getElementById('audioId').value = '';
    document.getElementById('oldAudioFile').value = '';
    document.getElementById('audioTitle').value = '';
    document.getElementById('audioSpeaker').value = '';
    document.getElementById('audioCategory').value = 'Kebenaran Memerdekakan';
    
    document.getElementById('typeFile').checked = true;
    toggleAudioInput('file');
    
    document.getElementById('audioFileUpload').value = '';
    document.getElementById('audioUrlExternal').value = '';
  }

  function editAudio(data) {
    document.getElementById('modalTitle').innerText = 'Edit Audio Khotbah';
    document.getElementById('audioId').value = data.id;
    document.getElementById('oldAudioFile').value = data.audio_file;
    document.getElementById('audioTitle').value = data.title;
    document.getElementById('audioSpeaker').value = data.speaker;
    document.getElementById('audioCategory').value = data.category;

    if (data.audio_type === 'file') {
      document.getElementById('typeFile').checked = true;
      toggleAudioInput('file');
    } else {
      document.getElementById('typeUrl').checked = true;
      toggleAudioInput('url');
      document.getElementById('audioUrlExternal').value = data.audio_file;
    }

    var modal = new bootstrap.Modal(document.getElementById('audioModal'));
    modal.show();
  }

  // --- IMPLEMENTASI AJAX, PREVENSI DOUBLE SUBMIT & SWEETALERT PROGRESS UPLOAD ---
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#audioModal form');
    const submitBtn = form.querySelector('button[type="submit"]');

    form.addEventListener('submit', function (e) {
      e.preventDefault(); // Mencegah submit form biasa

      // 1. Kunci tombol simpan agar tidak bisa diklik 2x
      submitBtn.disabled = true;
      const originalBtnText = submitBtn.innerHTML;
      submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Memproses...';

      // Helper function untuk mengaktifkan kembali tombol jika proses gagal/batal
      function restoreButton() {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnText;
      }

      const formData = new FormData(form);
      const xhr = new XMLHttpRequest();
      xhr.open('POST', form.action, true);

      // Tampilkan SweetAlert loading dengan progress bar
      Swal.fire({
        title: 'Sedang Mengunggah...',
        html: `
          <div class="progress" style="height: 20px;">
            <div id="upload-progress" class="progress-bar progress-bar-striped progress-bar-animated bg-primary" 
                 role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
          </div>
          <p class="text-muted small mt-2">Mohon tunggu, file audio sedang diunggah ke server.</p>
        `,
        allowOutsideClick: false,
        allowEscapeKey: false,
        showConfirmButton: false,
        didOpen: () => {
          Swal.showLoading();
        }
      });

      // Event listener untuk memantau progress upload
      xhr.upload.addEventListener('progress', function (e) {
        if (e.lengthComputable) {
          const percentComplete = Math.round((e.loaded / e.total) * 100);
          const progressBar = document.getElementById('upload-progress');
          if (progressBar) {
            progressBar.style.width = percentComplete + '%';
            progressBar.setAttribute('aria-valuenow', percentComplete);
            progressBar.innerText = percentComplete + '%';
          }
        }
      });

      // Ketika proses upload selesai dari server
      xhr.onload = function () {
        let response = {};
        try {
          response = JSON.parse(xhr.responseText);
        } catch (e) {
          response = { message: 'Terjadi kesalahan format respon dari server.' };
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
          // Jika gagal simpan/validasi, aktifkan kembali tombolnya
          restoreButton();
          Swal.fire({
            icon: 'error',
            title: 'Gagal Menyimpan!',
            text: response.message || 'Ukuran file mungkin melebihi batas maksimum server (upload_max_filesize).',
          });
        }
      };

      // Jika terjadi error jaringan
      xhr.onerror = function () {
        // Aktifkan kembali tombol jika koneksi bermasalah
        restoreButton();
        Swal.fire({
          icon: 'error',
          title: 'Koneksi Gagal',
          text: 'Periksa koneksi internet Anda.',
        });
      };

      // Kirim data form
      xhr.send(formData);
    });
  });
</script>
<?= $this->endSection() ?>
