const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId);

  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      nav.classList.toggle('show-menu');
      toggle.classList.toggle('show-icon');
    });
  }
};

// Panggil saat DOM siap
document.addEventListener("DOMContentLoaded", () => {
  showMenu('nav-toggle', 'nav-menu');
});
