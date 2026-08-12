<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Postingan - Salvation Church</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-church">
  <div class="container">
    <a class="navbar-brand" href="index.html">Salvation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" style="border-color:rgba(255,255,255,.4)">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="mainNav">
      <ul class="navbar-nav align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="blog.html">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="py-5">
  <div class="container" style="max-width:760px;">
    <div id="post-content">
      <p class="text-muted">Memuat...</p>
    </div>
    <a href="blog.html" class="d-inline-block mt-4 text-red fw-bold small text-uppercase"><i class="bi bi-arrow-left me-1"></i>Kembali ke Blog</a>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="footer-bottom d-flex justify-content-between flex-wrap">
      <div>&copy; 2026 Salvation Church. All rights reserved.</div>
      <div>Dibangun dengan Bootstrap 5</div>
    </div>
  </div>
</footer>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/posts-data.js"></script>
<script>
function escapeHtml(str){ const d=document.createElement('div'); d.textContent=str; return d.innerHTML; }
function formatDate(str){ return new Date(str).toLocaleDateString('id-ID',{day:'numeric',month:'long',year:'numeric'}); }

const params = new URLSearchParams(window.location.search);
const id = params.get('id');
const post = PostsStore.getById(id);
const container = document.getElementById('post-content');

if(!post){
  container.innerHTML = '<p class="text-muted">Postingan tidak ditemukan.</p>';
} else {
  document.title = post.title + ' - Salvation Church';
  container.innerHTML = `
    <div class="section-eyebrow mb-2">${escapeHtml(post.category)}</div>
    <h1 class="section-title mb-3">${escapeHtml(post.title)}</h1>
    <div class="text-muted small mb-4"><i class="bi bi-person me-1"></i>${escapeHtml(post.author)} &nbsp; <i class="bi bi-calendar3 me-1"></i>${formatDate(post.date)}</div>
    <div class="card-thumb rounded mb-4" style="height:320px;"><i class="bi bi-image" style="color:rgba(255,255,255,.5);font-size:2.5rem;"></i></div>
    <div class="post-body" style="white-space:pre-line; line-height:1.9; color:#43495a;">${escapeHtml(post.content)}</div>
  `;
}
</script>
</body>
</html>
