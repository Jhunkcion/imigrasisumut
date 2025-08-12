document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("nav-toggle");
  const nav = document.getElementById("nav-menu");

  if (toggle && nav) {
      toggle.addEventListener("click", function () {
          nav.classList.toggle("show-menu");
          toggle.classList.toggle("show-icon");
      });
  }
});
