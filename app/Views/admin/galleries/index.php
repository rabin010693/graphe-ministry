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
      <h6 class="m-0 fw-bold text-dark fs-6">Daftar Momen Galeri</h6>
      <!-- Tombol Tambah Tema Merah (btn-church) -->
      <button class="btn-church w-20 w-sm-auto text-center py-2 px-3 fw-semibold d-flex align-items-center justify-content-center" 
              data-bs-toggle="modal" 
              data-bs-target="#galleryModal" 
              onclick="resetForm()">
        <i class="bi bi-plus-lg me-1"></i> Tambah Momen
      </button>
    </div>
  </div>

  <!-- Mode 1: Desktop Table (Hanya Tampil di Tablet & Desktop) -->
  <div class="table-responsive d-none d-md-block">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th class="ps-4" style="width: 90px;">Foto</th>
          <th>Judul Momen</th>
          <th>Kategori</th>
          <th>Tanggal Momen</th>
          <th>Deskripsi</th>
          <th class="text-end pe-4">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($galleries)): ?>
          <?php foreach ($galleries as $g): ?>
            <tr>
              <td class="ps-4">
                <img src="<?= base_url('uploads/galeri/' . $g['image']) ?>" alt="Gallery" class="rounded shadow-sm" style="width: 60px; height: 60px; object-fit: cover;">
              </td>
              <td class="fw-bold text-dark"><?= esc($g['title']) ?></td>
              <td><span class="badge bg-info-subtle text-info-emphasis border border-info-subtle"><?= esc($g['category']) ?></span></td>
              <td><i class="bi bi-calendar3 me-1 text-muted"></i><?= date('d M Y', strtotime($g['event_date'])) ?></td>
              <td class="small text-muted text-wrap" style="max-width: 250px;"><?= esc($g['description']) ?></td>
              <td class="text-end pe-4">
                <button class="btn btn-sm btn-outline-secondary me-1 py-1 px-2" 
                        onclick="editGallery(<?= htmlspecialchars(json_encode($g), ENT_QUOTES, 'UTF-8') ?>)"
                        title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <a href="<?= base_url('admin/galleries/delete/' . $g['id']) ?>" 
                   class="btn btn-sm btn-outline-danger py-1 px-2" 
                   onclick="return confirm('Hapus momen galeri ini?')"
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
    <?php if (!empty($galleries)): ?>
      <?php foreach ($galleries as $g): ?>
        <div class="card border-0 shadow-sm mb-3 rounded-3 overflow-hidden">
          <!-- Thumbnail Foto Mobile -->
          <img src="<?= base_url('uploads/galeri/' . $g['image']) ?>" alt="Gallery" class="w-100" style="height: 180px; object-fit: cover;">
          
          <div class="card-body p-3">
            <div class="d-flex justify-content-between align-items-start mb-2 gap-2">
              <span class="badge bg-info-subtle text-info-emphasis border border-info-subtle flex-shrink-0"><?= esc($g['category']) ?></span>
              <span class="text-muted small"><i class="bi bi-calendar3 me-1"></i><?= date('d M Y', strtotime($g['event_date'])) ?></span>
            </div>
            
            <h6 class="fw-bold text-dark mb-2"><?= esc($g['title']) ?></h6>
            
            <?php if (!empty($g['description'])): ?>
              <p class="text-muted small mb-3 text-truncate-2" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                <?= esc($g['description']) ?>
              </p>
            <?php endif; ?>
            
            <div class="d-flex gap-2 justify-content-end pt-2 border-top">
              <button class="btn btn-sm btn-outline-secondary flex-fill py-2 fw-semibold" 
                      onclick="editGallery(<?= htmlspecialchars(json_encode($g), ENT_QUOTES, 'UTF-8') ?>)">
                <i class="bi bi-pencil me-1"></i>Edit
              </button>
              <a href="<?= base_url('admin/galleries/delete/' . $g['id']) ?>" 
                 class="btn btn-sm btn-outline-danger flex-fill py-2 fw-semibold text-center text-decoration-none" 
                 onclick="return confirm('Hapus momen galeri ini?')">
                <i class="bi bi-trash me-1"></i>Hapus
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Empty State Jika Data Kosong -->
  <?php if (empty($galleries)): ?>
    <div class="text-center text-muted py-5 px-3">
      <i class="bi bi-images fs-1 d-block mb-2 text-secondary opacity-50"></i>
      <span>Belum ada momen galeri. Klik "Tambah Momen" untuk menambahkan.</span>
    </div>
  <?php endif; ?>

</div>

<!-- Modal Form Galeri (Optimasi Layar HP) -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content border-0 shadow">
      <form action="<?= base_url('admin/galleries/save') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="modal-header border-bottom px-3 py-2 px-md-4 py-md-3">
          <h5 class="modal-title fw-bold fs-6 fs-md-5" id="modalTitle">Tambah Momen Galeri</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body p-3 p-md-4">
          <input type="hidden" name="id" id="galleryId">
          <input type="hidden" name="old_image" id="oldImage">

          <div class="mb-3">
            <label class="form-label small fw-bold">Judul Momen Kegiatan</label>
            <input type="text" class="form-control py-2" name="title" id="galleryTitle" placeholder="Contoh: Ibadah Minggu Pagi: Hidup dalam Kemenangan" required>
          </div>

          <div class="row g-2 g-md-3 mb-3">
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Kategori</label>
              <select class="form-select py-2" name="category" id="galleryCategory" required>
                <option value="Kebaktian Umum">Kebaktian Umum</option>
                <option value="Pemuda & Remaja">Pemuda & Remaja</option>
                <option value="Sekolah Minggu">Sekolah Minggu</option>
                <option value="Kegiatan Sosial">Kegiatan Sosial</option>
              </select>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label small fw-bold">Tanggal Kegiatan</label>
              <input type="date" class="form-control py-2" name="event_date" id="galleryEventDate" required>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-bold">Deskripsi / Keterangan Singkat</label>
            <textarea class="form-control" name="description" id="galleryDescription" rows="3" placeholder="Suasana khidmat ibadah minggu pagi yang dihadiri oleh jemaat..."></textarea>
          </div>

          <div class="mb-2">
            <label class="form-label small fw-bold">Upload Foto Momen</label>
            <input type="file" class="form-control py-2" name="image_file" id="galleryImageFile" accept="image/*">
            <div class="form-text small mt-1">Format JPG, PNG, atau WEBP. Maksimum 5 MB.</div>
          </div>

        </div>
        
        <div class="modal-footer border-top p-2 p-md-3 d-flex flex-column flex-sm-row gap-2">
          <button type="button" class="btn btn-light w-100 w-sm-auto order-2 order-sm-1" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn-church w-100 w-sm-auto order-1 order-sm-2 text-center" style="background-color:#0d1830; color:#fff;">Simpan Momen</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  function resetForm() {
    document.getElementById('modalTitle').innerText = 'Tambah Momen Galeri';
    document.getElementById('galleryId').value = '';
    document.getElementById('oldImage').value = '';
    document.getElementById('galleryTitle').value = '';
    document.getElementById('galleryCategory').value = 'Kebaktian Umum';
    document.getElementById('galleryEventDate').value = '<?= date('Y-m-d') ?>';
    document.getElementById('galleryDescription').value = '';
    document.getElementById('galleryImageFile').value = '';
  }

  function editGallery(data) {
    document.getElementById('modalTitle').innerText = 'Edit Momen Galeri';
    document.getElementById('galleryId').value = data.id;
    document.getElementById('oldImage').value = data.image;
    document.getElementById('galleryTitle').value = data.title;
    document.getElementById('galleryCategory').value = data.category;
    document.getElementById('galleryEventDate').value = data.event_date;
    document.getElementById('galleryDescription').value = data.description;

    var modal = new bootstrap.Modal(document.getElementById('galleryModal'));
    modal.show();
  }

  document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#galleryModal form');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const formData = new FormData(form);
      const xhr = new XMLHttpRequest();
      xhr.open('POST', form.action, true);
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

      Swal.fire({
        title: 'Sedang Mengunggah Gambar...',
        allowOutsideClick: false,
        showConfirmButton: false,
        didOpen: () => {
          Swal.showLoading();
        }
      });

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
            title: 'Gagal Upload!',
            text: response.message || 'Terjadi kesalahan.',
          });
        }
      };

      xhr.send(formData);
    });
  });
</script>
<?= $this->endSection() ?>