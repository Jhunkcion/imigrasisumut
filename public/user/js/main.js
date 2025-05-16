// Saat user scroll 100px dari atas halaman, tampilkan tombol
window.onscroll = function () {
    const btn = document.querySelector(".back-to-top");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
};

// Smooth scroll to top
document.querySelector(".back-to-top").addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});

const carousel = document.getElementById("carousel");
const prev = document.getElementById("prev");
const next = document.getElementById("next");
const items = document.querySelectorAll(".carousel-item");
let currentIndex = 0;
let interval;

function updateCarousel() {
    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    items.forEach((item, index) => {
        item.classList.toggle("active", index === currentIndex);
    });
}

function showNextSlide() {
    currentIndex = (currentIndex + 1) % items.length;
    updateCarousel();
}

function showPrevSlide() {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    updateCarousel();
}

next.addEventListener("click", () => {
    showNextSlide();
    resetInterval();
});

prev.addEventListener("click", () => {
    showPrevSlide();
    resetInterval();
});

function startAutoSlide() {
    interval = setInterval(showNextSlide, 4000); // 4 detik per slide
}

function stopAutoSlide() {
    clearInterval(interval);
}

function resetInterval() {
    stopAutoSlide();
    startAutoSlide();
}

// Mulai otomatis
startAutoSlide();

// Berhenti saat hover
carousel.addEventListener("mouseenter", stopAutoSlide);
carousel.addEventListener("mouseleave", startAutoSlide);

// Inisialisasi
updateCarousel();

//Tautan Slide
  let scrollInterval;

  function scrollCarousel(direction) {
    const wrapper = document.getElementById('carousel-wrapper');
    const cardWidth = wrapper.querySelector('.carousel-card').offsetWidth + 20;
    wrapper.scrollBy({ left: cardWidth * direction, behavior: 'smooth' });
  }

  function autoScrollCarousel() {
    scrollInterval = setInterval(() => scrollCarousel(1), 3000);
  }

  function stopAutoScroll() {
    clearInterval(scrollInterval);
  }

  document.addEventListener('DOMContentLoaded', () => {
    autoScrollCarousel();
  });

