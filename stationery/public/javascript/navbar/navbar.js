document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("toggle-btn");
  const navbarLinks = document.getElementById("navbar-links");

  toggleBtn.addEventListener("click", function () {
    navbarLinks.classList.toggle("show");
  });
});
