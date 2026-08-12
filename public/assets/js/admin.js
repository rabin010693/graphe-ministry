document.addEventListener("DOMContentLoaded", function () {
  const tableBody = document.getElementById("postsTableBody");
  const emptyState = document.getElementById("emptyState");
  const searchInput = document.getElementById("searchInput");
  const postModalEl = document.getElementById("postModal");
  const postModal = new bootstrap.Modal(postModalEl);
  const deleteModal = new bootstrap.Modal(document.getElementById("deleteModal"));
  const postForm = document.getElementById("postForm");
  const postModalTitle = document.getElementById("postModalTitle");
  let deleteTargetId = null;

  function escapeHtml(str) {
    const div = document.createElement("div");
    div.textContent = str || "";
    return div.innerHTML;
  }
  function formatDate(str) {
    const d = new Date(str);
    if (isNaN(d)) return str;
    return d.toLocaleDateString("id-ID", { day: "numeric", month: "short", year: "numeric" });
  }
  function statusBadge(status) {
    const cls = status === "Published" ? "success" : "warning";
    return `<span class="badge bg-${cls}-subtle text-${cls}-emphasis border border-${cls}-subtle">${status}</span>`;
  }

  function render() {
    let posts = PostsStore.getAll();
    const q = (searchInput.value || "").toLowerCase().trim();
    if (q) {
      posts = posts.filter(
        (p) => p.title.toLowerCase().includes(q) || p.category.toLowerCase().includes(q)
      );
    }
    posts.sort((a, b) => new Date(b.date) - new Date(a.date));

    document.getElementById("stat-total").textContent = PostsStore.getAll().length;
    document.getElementById("stat-published").textContent = PostsStore.getAll().filter((p) => p.status === "Published").length;
    document.getElementById("stat-draft").textContent = PostsStore.getAll().filter((p) => p.status === "Draft").length;

    if (posts.length === 0) {
      tableBody.innerHTML = "";
      emptyState.classList.remove("d-none");
      return;
    }
    emptyState.classList.add("d-none");

    tableBody.innerHTML = posts
      .map(
        (p) => `
      <tr>
        <td class="ps-4">
          <div class="fw-bold">${escapeHtml(p.title)}</div>
          <div class="text-muted small">${escapeHtml((p.excerpt || "").slice(0, 60))}${p.excerpt && p.excerpt.length > 60 ? "…" : ""}</div>
        </td>
        <td>${escapeHtml(p.category)}</td>
        <td>${escapeHtml(p.author)}</td>
        <td>${formatDate(p.date)}</td>
        <td>${statusBadge(p.status)}</td>
        <td class="text-end pe-4">
          <a href="../blog-detail.html?id=${p.id}" target="_blank" class="btn btn-sm btn-light me-1" title="Lihat"><i class="bi bi-eye"></i></a>
          <button class="btn btn-sm btn-light me-1 btn-edit" data-id="${p.id}" title="Edit"><i class="bi bi-pencil"></i></button>
          <button class="btn btn-sm btn-light text-danger btn-delete" data-id="${p.id}" title="Hapus"><i class="bi bi-trash"></i></button>
        </td>
      </tr>`
      )
      .join("");

    document.querySelectorAll(".btn-edit").forEach((btn) =>
      btn.addEventListener("click", () => openEdit(btn.dataset.id))
    );
    document.querySelectorAll(".btn-delete").forEach((btn) =>
      btn.addEventListener("click", () => {
        deleteTargetId = btn.dataset.id;
        deleteModal.show();
      })
    );
  }

  function resetForm() {
    postForm.reset();
    document.getElementById("postId").value = "";
    document.getElementById("postDate").value = new Date().toISOString().slice(0, 10);
    postModalTitle.textContent = "Postingan Baru";
  }

  function openEdit(id) {
    const post = PostsStore.getById(id);
    if (!post) return;
    document.getElementById("postId").value = post.id;
    document.getElementById("postTitle").value = post.title;
    document.getElementById("postCategory").value = post.category;
    document.getElementById("postAuthor").value = post.author;
    document.getElementById("postDate").value = post.date;
    document.getElementById("postExcerpt").value = post.excerpt;
    document.getElementById("postContent").value = post.content;
    document.getElementById("postStatus").value = post.status;
    postModalTitle.textContent = "Edit Postingan";
    postModal.show();
  }

  document.getElementById("btnNewPost").addEventListener("click", resetForm);

  postForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const id = document.getElementById("postId").value;
    const post = {
      id: id ? Number(id) : null,
      title: document.getElementById("postTitle").value.trim(),
      category: document.getElementById("postCategory").value.trim(),
      author: document.getElementById("postAuthor").value.trim(),
      date: document.getElementById("postDate").value,
      excerpt: document.getElementById("postExcerpt").value.trim(),
      content: document.getElementById("postContent").value.trim(),
      status: document.getElementById("postStatus").value,
    };
    PostsStore.save(post);
    postModal.hide();
    render();
  });

  document.getElementById("confirmDeleteBtn").addEventListener("click", function () {
    if (deleteTargetId) {
      PostsStore.remove(deleteTargetId);
      deleteTargetId = null;
    }
    deleteModal.hide();
    render();
  });

  searchInput.addEventListener("input", render);

  document.getElementById("logoutBtn").addEventListener("click", function (e) {
    e.preventDefault();
    sessionStorage.removeItem("salvation_admin_auth");
    window.location.href = "login.html";
  });

  postModalEl.addEventListener("hidden.bs.modal", resetForm);

  render();
});
