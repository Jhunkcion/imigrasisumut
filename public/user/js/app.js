document.addEventListener('DOMContentLoaded', () => {
  const burger = document.getElementById('burger');
  const navMenu = document.getElementById('nav-links');
  const dropdowns = document.querySelectorAll('.dropdown');

  // Toggle menu utama burger
  burger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
  });

  // Toggle dropdown saat di mobile
  document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      e.preventDefault();
      const parent = toggle.parentElement;

      if (window.innerWidth <= 768) {
        // Tutup dropdown lain
        dropdowns.forEach(drop => {
          if (drop !== parent) {
            drop.classList.remove('open');
            drop.querySelector('.dropdown-content').classList.remove('active');
          }
        });

        // Toggle dropdown ini
        parent.classList.toggle('open');
        const content = toggle.nextElementSibling;
        if (content) {
          content.classList.toggle('active');
        }
      }
    });
  });

  // Klik di luar untuk menutup dropdown dan nav menu mobile
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.navbar')) {
      // Tutup semua dropdown
      dropdowns.forEach(drop => {
        drop.classList.remove('open');
        const content = drop.querySelector('.dropdown-content');
        if (content) content.classList.remove('active');
      });
      // Tutup nav menu mobile
      navMenu.classList.remove('active');
    }
  });

  // Tutup dropdown dan nav menu saat resize ke desktop
  window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
      dropdowns.forEach(drop => {
        drop.classList.remove('open');
        const content = drop.querySelector('.dropdown-content');
        if (content) content.classList.remove('active');
      });
      navMenu.classList.remove('active');
    }
  });
});
