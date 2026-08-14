<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin - Graphe Ministry' ?></title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- DataTables CSS (Bootstrap 5 Theme) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    
    <!-- CSS Vendor & Custom -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.min.css') ?>">
</head>

<body class="bg-light">

    <!-- Wrapper Utama Admin -->
    <div class="admin-wrapper">
        <!-- Overlay transparan untuk mobile saat sidebar terbuka -->
        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <!-- Sidebar -->
        <aside class="admin-sidebar p-3" id="adminSidebar">
            <div class="d-flex align-items-center justify-content-between brand px-2 py-2 mb-2 fw-bold">
                <div>GRAPHE <span class="text-danger">Admin</span></div>
                <!-- Tombol Tutup Sidebar (Hanya Muncul di Mobile) -->
                <button class="btn text-white d-lg-none p-0 fs-4" id="sidebarClose" aria-label="Tutup Sidebar">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <hr class="border border-danger border-2 opacity-75">
            
            <nav class="nav flex-column gap-1">
                <?php 
                    $uri = service('uri');
                    // Ambil segment ke-2 dari URL (misal: admin/dashboard -> 'dashboard')
                    $segment = $uri->getSegment(2);
                    $role = session()->get('role');
                ?>

                <!-- 1. Menu Dashboard (Baru) -->
                <a class="nav-link <?= ($segment == 'dashboard' || $segment == '') ? 'active' : '' ?>" href="<?= base_url('admin/dashboard') ?>">
                    <i class="bi bi-speedometer2 me-2"></i>Dashboard
                </a>

                <!-- 2. Menu Postingan (Diperbarui logika active-nya) -->
                <a class="nav-link <?= ($segment == 'posts') ? 'active' : '' ?>" href="<?= base_url('admin/posts') ?>">
                    <i class="bi bi-file-earmark-text me-2"></i>Postingan
                </a>

                <a class="nav-link <?= ($segment == 'churches') ? 'active' : '' ?>" href="<?= base_url('admin/churches') ?>">
                    <i class="bi bi-building me-2"></i>
                    <span>Daftar Gereja GBIA</span>
                </a>

                <a class="nav-link <?= ($segment == 'panti-staff') ? 'active' : '' ?>" href="<?= base_url('admin/panti-staff') ?>">
                    <i class="bi bi-person-workspace me-2"></i>Pengurus Panti
                </a>

                <a class="nav-link <?= ($segment == 'children') ? 'active' : '' ?>" href="<?= base_url('admin/children') ?>">
                    <i class="bi bi-person-heart me-2"></i>Anak Asuh Panti
                </a>
                    
                <!-- Menu upload Audio Khotbah -->
                <a class="nav-link <?= ($segment == 'audios') ? 'active' : '' ?>" href="<?= base_url('admin/audios') ?>">
                    <i class="bi bi-music-note-beamed me-2"></i>Audio Khotbah
                </a>

                <a class="nav-link <?= ($segment == 'pedang-roh' || $segment == 'periodicals') ? 'active' : '' ?>" href="<?= base_url('admin/pedang-roh') ?>">
                    <i class="bi bi-book me-2"></i>Pedang Roh
                </a>

                <a class="nav-link <?= ($segment == 'articles' || $segment == 'article') ? 'active' : '' ?>" href="<?= base_url('admin/articles') ?>">
                    <i class="bi bi-journal-bookmark me-2"></i>Artikel
                </a>
                
                <a class="nav-link <?= ($segment == 'galleries') ? 'active' : '' ?>" href="<?= base_url('admin/galleries') ?>">
                    <i class="bi bi-images me-2"></i>Galeri Foto
                </a>
               
                <a class="nav-link <?= ($segment == 'events') ? 'active' : '' ?>" href="<?= base_url('admin/events') ?>">
                    <i class="bi bi-calendar-event me-2"></i>
                    <span>Kalender Event</span>
                </a>

                <!-- Menu Pesan -->
                <a class="nav-link <?= ($segment == 'contacts') ? 'active' : '' ?>" href="<?= base_url('admin/contacts') ?>">
                    <i class="bi bi-envelope me-2"></i>Pesan Contact Us
                </a>
                
                <!-- Menu Lihat Website -->
                <a class="nav-link" href="<?= base_url('/') ?>" target="_blank">
                    <i class="bi bi-eye me-2"></i>Lihat Website
                </a>

                <hr class="border border-danger border-2 opacity-75 my-2">
                
                <!-- Menu Khusus Admin Utama -->
                <?php if ($role === 'admin'): ?>
                    <a class="nav-link <?= ($segment == 'users') ? 'active' : '' ?>" href="<?= base_url('admin/users') ?>">
                        <i class="bi bi-people me-2"></i>Kelola User
                    </a>
                <?php endif; ?>

                <!-- Menu Logout -->
                <a class="nav-link text-danger" href="<?= base_url('logout') ?>" id="logoutBtn">
                    <i class="bi bi-box-arrow-right me-2"></i>Keluar
                </a>
            </nav>
        </aside>

        <!-- Main Area -->
        <main class="admin-main-content">
            <!-- Topbar -->
            <header class="admin-topbar px-3 px-lg-4 py-3 d-flex justify-content-between align-items-center bg-white border-bottom">
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!-- Tombol Toggle Hamburger (Terlihat di Mobile/Tablet) -->
                    <button class="btn btn-outline-dark btn-sm d-lg-none" id="sidebarToggle" aria-label="Buka Menu">
                        <i class="bi bi-list fs-6"></i>
                    </button>
                    <h5 class="mb-0 fw-bold fs-6 fs-lg-5"><?= $header_title ?? 'Dashboard Admin' ?></h5>
                </div>
                
                <!-- User Info -->
                <div class="text-muted small d-flex align-items-center">
                    <i class="bi bi-person-circle me-1 fs-5 fs-lg-6"></i>
                    <span class="fw-semibold text-dark d-none d-sm-inline"><?= esc(session()->get('name') ?? 'Admin') ?></span> 
                    <span class="badge <?= $role === 'admin' ? 'bg-danger-subtle text-danger' : 'bg-primary-subtle text-primary' ?> ms-1">
                        <?= $role === 'admin' ? 'Admin Utama' : 'Penulis' ?>
                    </span>
                </div>
            </header>

            <!-- Content Section -->
            <div class="p-3 p-lg-4">
                <?= $this->renderSection('content') ?>
            </div>
        </main>
    </div>

    <!-- Vendor Scripts -->
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jQuery & DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <!-- Main Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // 1. Script Toggle Responsive Sidebar
            const sidebar = document.getElementById('adminSidebar');
            const overlay = document.getElementById('sidebarOverlay');
            const toggleBtn = document.getElementById('sidebarToggle');
            const closeBtn = document.getElementById('sidebarClose');

            function openSidebar() {
                sidebar.classList.add('show');
                overlay.classList.add('show');
                document.body.style.overflow = 'hidden';
            }

            function closeSidebar() {
                sidebar.classList.remove('show');
                overlay.classList.remove('show');
                document.body.style.overflow = '';
            }

            if (toggleBtn) toggleBtn.addEventListener('click', openSidebar);
            if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
            if (overlay) overlay.addEventListener('click', closeSidebar);

            window.addEventListener('resize', function () {
                if (window.innerWidth >= 992) {
                    closeSidebar();
                }
            });

            // 2. Script Inisialisasi DataTables Otomatis
            if (window.jQuery && $.fn.DataTable) {
                $('.table-responsive table, table.datatable').each(function () {
                    if (!$.fn.DataTable.isDataTable(this)) {
                        $(this).DataTable({
                            "language": {
                                "search": "Cari Data:",
                                "lengthMenu": "Tampilkan _MENU_ Data",
                                "zeroRecords": "Data tidak ditemukan",
                                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                                "infoEmpty": "Menampilkan 0 data",
                                "infoFiltered": "(disaring dari _MAX_ total data)",
                                "paginate": {
                                    "first": "Pertama",
                                    "last": "Terakhir",
                                    "next": "Selanjutnya",
                                    "previous": "Sebelumnya"
                                }
                            },
                            "pageLength": 10,
                            "responsive": true,
                            "autoWidth": false
                        });
                    }
                });
            }
        });
    </script>

    <?= $this->renderSection('scripts') ?>
</body>
</html>