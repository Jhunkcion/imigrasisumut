// Menangani klik dropdown
const toggles = document.querySelectorAll('.dropdown-toggle');

toggles.forEach(toggle => {
  toggle.addEventListener('click', function (e) {
    const parent = this.parentElement;

    // Tutup dropdown lain
    document.querySelectorAll('.dropdown').forEach(drop => {
      if (drop !== parent) {
        drop.classList.remove('open');
      }
    });

    // Toggle dropdown ini
    parent.classList.toggle('open');
  });
});

// Klik di luar untuk menutup semua dropdown
document.addEventListener('click', function (e) {
  if (!e.target.closest('.dropdown')) {
    document.querySelectorAll('.dropdown').forEach(drop => {
      drop.classList.remove('open');
    });
  }
});