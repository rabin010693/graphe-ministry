// Guards admin pages: redirects to login if not authenticated.
// Demo-only client-side check (see login.html note).
(function () {
  if (sessionStorage.getItem("salvation_admin_auth") !== "1") {
    window.location.href = "login.html";
  }
})();
