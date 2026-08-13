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

        /* Styling Khusus Input Group Password & Responsif Mobile */
        .input-group .form-control {
            border-right: none;
        }

        .input-group .btn-toggle-pwd {
            border: 1px solid #dee2e6;
            border-left: none;
            background-color: #fff;
            color: #6c757d;
        }

        .input-group .btn-toggle-pwd:hover,
        .input-group .btn-toggle-pwd:focus {
            background-color: #f8f9fa;
            color: #0d1830;
            box-shadow: none;
        }

        /* Optimalisasi Layar HP/Mobile (< 576px) */
        @media (max-width: 575.98px) {
            .login-card {
                padding: 1.75rem !important; /* Kurangi padding internal agar tidak sesak */
                border-radius: 12px;
            }

            .form-control {
                font-size: 0.95rem;
                padding-top: 0.6rem;
                padding-bottom: 0.6rem;
            }
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center py-4 px-3">

<div class="login-card bg-white p-4 p-sm-5 shadow-lg border-0">
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
            <i class="bi bi-exclamation-circle me-1"></i><?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <!-- Flashdata Success (CodeIgniter) -->
    <?php if (session()->getFlashdata('message')): ?>
        <div class="alert alert-success py-2 small mb-3">
            <i class="bi bi-check-circle me-1"></i><?= session()->getFlashdata('message') ?>
        </div>
    <?php endif; ?>

    <!-- Form Login dengan Method POST & CSRF CodeIgniter -->
    <form action="<?= base_url('login/process') ?>" method="post" id="loginForm">
        <?= csrf_field() ?>
        
        <div class="mb-3">
            <label for="username" class="form-label small fw-bold">Username / Email</label>
            <input type="text" id="username" name="username" class="form-control py-2" value="<?= old('username') ?>" placeholder="Masukkan username" required autofocus autocomplete="username">
        </div>

        <div class="mb-4">
            <label for="password" class="form-label small fw-bold">Password</label>
            <!-- Bootstrap Input Group untuk Icon Mata Toggle Password -->
            <div class="input-group">
                <input type="password" id="password" name="password" class="form-control py-2" placeholder="••••••••" required autocomplete="current-password">
                <button class="btn btn-toggle-pwd px-3" type="button" id="togglePassword" aria-label="Tampilkan Password">
                    <i class="bi bi-eye" id="toggleIcon"></i>
                </button>
            </div>
        </div>

        <button type="submit" id="submitLoginBtn" class="btn w-100 py-2 fw-semibold text-white" style="background-color:#0d1830;">
            Masuk
        </button>
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

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // 1. FITUR TOGGLE SHOW/HIDE PASSWORD
    const togglePasswordBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');

    if (togglePasswordBtn && passwordInput && toggleIcon) {
      togglePasswordBtn.addEventListener('click', function () {
        // Toggle tipe input antara 'password' dan 'text'
        const isPassword = passwordInput.getAttribute('type') === 'password';
        passwordInput.setAttribute('type', isPassword ? 'text' : 'password');

        // Ganti ikon mata Bootstrap
        toggleIcon.classList.toggle('bi-eye', !isPassword);
        toggleIcon.classList.toggle('bi-eye-slash', isPassword);
      });
    }

    // 2. FITUR PREVENSI DOUBLE SUBMIT ON LOGIN
    const loginForm = document.getElementById('loginForm');
    const submitBtn = document.getElementById('submitLoginBtn');

    if (loginForm && submitBtn) {
      loginForm.addEventListener('submit', function () {
        // Kunci tombol agar tidak diklik 2x
        submitBtn.disabled = true;
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Memproses...';

        // Pengaman (Timeout): Aktifkan kembali tombol jika proses tertahan > 8 detik
        setTimeout(function () {
          if (submitBtn.disabled) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;
          }
        }, 8000);
      });
    }
  });
</script>
</body>
</html>