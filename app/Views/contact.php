<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<header class="hero pb-5">
  <div class="container text-center pt-5 pb-5">
    <div class="eyebrow mb-3"><?= lang('App.contact.eyebrow') ?></div>
    <h1 class="mx-auto" style="max-width:760px; font-size:2.2rem;"><?= lang('App.contact.title') ?></h1>
  </div>
</header>

<section class="py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-5">
        <h5 class="fw-bold mb-4"><?= lang('App.contact.info_title') ?></h5>
        <div class="d-flex mb-3">
          <i class="bi bi-geo-alt-fill text-red me-3 fs-5"></i>
          <div>Jalan Danau Agung 2 No. 5- 7 Sunter Agung, Jakarta Utara <br> 14350, Indonesia</div>
        </div>
        <div class="d-flex mb-3"><i class="bi bi-envelope-fill text-red me-3 fs-5"></i><div>church@graphe-ministry.org</div></div>
        <div class="d-flex mb-3"><i class="bi bi-telephone-fill text-red me-3 fs-5"></i><div>021 6471-4156</div></div>
      </div>

      <div class="col-lg-7">
        
        <!-- Notifikasi jika pesan berhasil terkirim -->
        <?php if (session()->getFlashdata('message')): ?>
          <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            <i class="bi bi-check-circle me-2"></i><?= session()->getFlashdata('message') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

        <!-- Form dikirim ke route 'contact/send' dengan method POST -->
        <form action="<?= base_url('contact/send') ?>" method="post">
          <?= csrf_field() ?>
          
          <div class="row g-3">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="<?= lang('App.contact.placeholder.name') ?>" required>
            </div>
            <div class="col-md-6">
              <input type="email" name="email" class="form-control" placeholder="<?= lang('App.contact.placeholder.email') ?>" required>
            </div>
            <div class="col-12">
              <input type="text" name="subject" class="form-control" placeholder="<?= lang('App.contact.placeholder.subject') ?>" required>
            </div>
            <div class="col-12">
              <textarea name="message" class="form-control" rows="5" placeholder="<?= lang('App.contact.placeholder.message') ?>" required></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn-church" style="background-color:#0d1830; color:#fff; border:none; padding: 10px 24px; border-radius: 4px;"><?= lang('App.contact.btn_send') ?></button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>

<?= $this->endSection('content') ?>