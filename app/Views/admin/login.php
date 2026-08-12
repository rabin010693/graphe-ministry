<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Graphe Ministry</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS Vendors & Custom Styles -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    
    <style>
        body {
            background: linear-gradient(160deg, var(--navy-900, #0d1830), var(--navy-950, #070d1a));
            min-height: 100vh;
            font-family: 'Nunito Sans', sans-serif;
        }
        .login-card {
            max-width: 400px;
            width: 100%;
            border-radius: 14px;
        }
        h4, .navbar-brand {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center py-5">

<div class="login-card bg-white p-5 shadow-lg border-0">
    <!-- Header Logo & Title -->
    <div class="text-center mb-4">
        <a href="<?= base_url() ?>" class="navbar-brand text-decoration-none fw-bold" style="color:#0d1830; font-size:1.5rem;">
            GRAPHE <span class="text-danger">Admin</span>
        </a>
        <p class="text-muted small mt-2 mb-0">Masuk ke Panel Admin</p>
    </div>

    <!-- Flashdata Error (CodeIgniter) -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger py-2 small mb-3">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <!-- Flashdata Success (CodeIgniter) -->
    <?php if (session()->getFlashdata('message')): ?>
        <div class="alert alert-success py-2 small mb-3">
            <?= session()->getFlashdata('message') ?>
        </div>
    <?php endif; ?>

    <!-- Form Login dengan Method POST & CSRF CodeIgniter -->
    <form action="<?= base_url('login/process') ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="mb-3">
            <label for="username" class="form-label small fw-bold">Username / Email</label>
            <input type="text" id="username" name="username" class="form-control" value="<?= old('username') ?>" placeholder="Masukkan username" required autofocus>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label small fw-bold">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn w-100 py-2 fw-semibold text-white" style="background-color:#0d1830;">Masuk</button>
    </form>

    <!-- Tombol Kembali ke Website Utama -->
    <div class="text-center mt-4">
        <a href="<?= base_url() ?>" class="small text-muted text-decoration-none">
            <i class="bi bi-arrow-left me-1"></i>Kembali ke Website
        </a>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>