// Back to top saat scroll 100px
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

// Carousel utama dengan looping
const carousel = document.getElementById("carousel");
const prev = document.getElementById("prev");
const next = document.getElementById("next");
const items = document.querySelectorAll(".carousel-item");
let currentIndex = 1;
let interval;

// Clone first dan last
const firstClone = items[0].cloneNode(true);
const lastClone = items[items.length - 1].cloneNode(true);
firstClone.classList.add("clone-first");
lastClone.classList.add("clone-last");

carousel.appendChild(firstClone);
carousel.insertBefore(lastClone, items[0]);

const allItems = document.querySelectorAll(".carousel-item, .clone-first, .clone-last");

function updateCarousel() {
    carousel.style.transition = "transform 0.5s ease-in-out";
    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
}

function showNextSlide() {
    currentIndex++;
    updateCarousel();
}

function showPrevSlide() {
    currentIndex--;
    updateCarousel();
}

carousel.addEventListener("transitionend", () => {
    const clones = document.querySelectorAll(".clone-first, .clone-last");
    if (allItems[currentIndex].classList.contains("clone-first")) {
        carousel.style.transition = "none";
        currentIndex = 1;
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    } else if (allItems[currentIndex].classList.contains("clone-last")) {
        carousel.style.transition = "none";
        currentIndex = allItems.length - 2;
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
});

next.addEventListener("click", () => {
    showNextSlide();
    resetInterval();
});

prev.addEventListener("click", () => {
    showPrevSlide();
    resetInterval();
});

function startAutoSlide() {
    interval = setInterval(showNextSlide, 4000);
}

function stopAutoSlide() {
    clearInterval(interval);
}

function resetInterval() {
    stopAutoSlide();
    startAutoSlide();
}

carousel.addEventListener("mouseenter", stopAutoSlide);
carousel.addEventListener("mouseleave", startAutoSlide);

// Inisialisasi posisi awal (setelah insert clone)
updateCarousel();
startAutoSlide();

// Autoscroll horizontal card
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

showMenu('nav-toggle', 'nav-menu');

document.addEventListener('DOMContentLoaded', function () {
  AOS.init({
    duration: 1000,
    once: true,
    offset: 100,
  });
});
