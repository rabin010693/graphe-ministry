<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<header class="hero pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="eyebrow mb-3">OUR BLOG</div>
        <h1 class="mx-auto" style="max-width: 760px; font-size: 2.2rem;">Berita &amp; Renungan Terbaru</h1>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="row g-4" id="blog-list"></div>
    </div>
</section>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/posts-data.js"></script>
<script>
    function escapeHtml(str) {
        const d = document.createElement('div');
        d.textContent = str;
        return d.innerHTML;
    }

    function formatDate(str) {
        return new Date(str).toLocaleDateString('id-ID', {
            day: 'numeric',
            month: 'short',
            year: 'numeric'
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const list = document.getElementById('blog-list');
        const posts = PostsStore.getAll().filter(p => p.status === 'Published');
        
        if (posts.length === 0) {
            list.innerHTML = '<div class="col-12 text-center text-muted py-5">Belum ada postingan.</div>';
            return;
        }

        list.innerHTML = posts.map(p => `
            <div class="col-md-4">
                <div class="card church-card h-100">
                    <div class="card-thumb"><i class="bi bi-image"></i></div>
                    <div class="card-body">
                        <div class="card-meta mb-2">${escapeHtml(p.category)} &bull; ${formatDate(p.date)}</div>
                        <h3 class="card-title">${escapeHtml(p.title)}</h3>
                        <p class="text-muted small">${escapeHtml(p.excerpt)}</p>
                        <a href="blog-detail.html?id=${p.id}" class="fw-bold text-red small text-uppercase">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        `).join('');
    });
</script>

<?= $this->endSection() ?>