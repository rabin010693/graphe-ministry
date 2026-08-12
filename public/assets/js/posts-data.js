/* =========================================================
   Simple client-side "database" for blog posts using
   localStorage. Shared by the public blog page and the
   admin dashboard. In a real deployment this would be
   replaced by calls to a backend API.
   ========================================================= */
const PostsStore = (function () {
  const KEY = "salvation_church_posts";

  const defaultPosts = [
    {
      id: 1,
      title: "Menemukan Kedamaian di Tengah Kesibukan",
      category: "Renungan",
      author: "Pdt. John Carter",
      date: "2026-07-02",
      excerpt: "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.",
      content: "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.\n\nA small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.",
      status: "Published",
      image: "img1"
    },
    {
      id: 2,
      title: "Pelayanan Komunitas Minggu Ini",
      category: "Kegiatan",
      author: "Tim Diakonia",
      date: "2026-06-24",
      excerpt: "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.",
      content: "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.",
      status: "Published",
      image: "img2"
    },
    {
      id: 3,
      title: "Ibadah Kebangunan Rohani Remaja",
      category: "Pemuda",
      author: "Pdt. Sarah Lee",
      date: "2026-06-10",
      excerpt: "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.",
      content: "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.",
      status: "Draft",
      image: "img3"
    }
  ];

  function seedIfEmpty() {
    if (!localStorage.getItem(KEY)) {
      localStorage.setItem(KEY, JSON.stringify(defaultPosts));
    }
  }

  function getAll() {
    seedIfEmpty();
    try {
      return JSON.parse(localStorage.getItem(KEY)) || [];
    } catch (e) {
      return [];
    }
  }

  function getById(id) {
    return getAll().find((p) => String(p.id) === String(id));
  }

  function save(post) {
    const posts = getAll();
    if (post.id) {
      const idx = posts.findIndex((p) => String(p.id) === String(post.id));
      if (idx > -1) {
        posts[idx] = { ...posts[idx], ...post };
      } else {
        posts.push(post);
      }
    } else {
      post.id = posts.length ? Math.max(...posts.map((p) => p.id)) + 1 : 1;
      posts.unshift(post);
    }
    localStorage.setItem(KEY, JSON.stringify(posts));
    return post;
  }

  function remove(id) {
    const posts = getAll().filter((p) => String(p.id) !== String(id));
    localStorage.setItem(KEY, JSON.stringify(posts));
  }

  function resetToDefault() {
    localStorage.setItem(KEY, JSON.stringify(defaultPosts));
  }

  return { getAll, getById, save, remove, resetToDefault };
})();
