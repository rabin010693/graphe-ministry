document.addEventListener("DOMContentLoaded", function () {
  // Sticky navbar shrink on scroll
  const navbar = document.querySelector(".navbar-church");
  if (navbar) {
    window.addEventListener("scroll", function () {
      if (window.scrollY > 40) {
        navbar.classList.add("shadow-sm");
      } else {
        navbar.classList.remove("shadow-sm");
      }
    });
  }

  // Render latest posts (blog preview) on homepage if container exists
  const blogPreview = document.getElementById("blog-preview");
  if (blogPreview && typeof PostsStore !== "undefined") {
    const posts = PostsStore.getAll()
      .filter((p) => p.status === "Published")
      .slice(0, 3);
    blogPreview.innerHTML = posts
      .map(
        (p) => `
      <div class="col-md-4">
        <div class="card church-card h-100">
          <div class="card-thumb"><i class="bi bi-image"></i></div>
          <div class="card-body">
            <div class="card-meta mb-2">${p.category} &bull; ${formatDate(p.date)}</div>
            <h3 class="card-title">${escapeHtml(p.title)}</h3>
            <p class="text-muted small">${escapeHtml(p.excerpt)}</p>
            <a href="blog-detail.html?id=${p.id}" class="fw-bold text-red small text-uppercase">Baca Selengkapnya &rarr;</a>
          </div>
        </div>
      </div>`
      )
      .join("");
  }

  function formatDate(str) {
    const d = new Date(str);
    return d.toLocaleDateString("id-ID", { day: "numeric", month: "short", year: "numeric" });
  }
  function escapeHtml(str) {
    const div = document.createElement("div");
    div.textContent = str;
    return div.innerHTML;
  }
});
