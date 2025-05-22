document.addEventListener("DOMContentLoaded", function () {
    // ==== BACK TO TOP ====
    const backToTopBtn = document.querySelector(".back-to-top");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 100) {
            backToTopBtn.style.display = "block";
        } else {
            backToTopBtn.style.display = "none";
        }
    });

    backToTopBtn.addEventListener("click", function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: "smooth" });
    });

    // ==== ACCORDION TOGGLE ====
    const accButtons = document.querySelectorAll(".accordion-btn");
    accButtons.forEach(button => {
        button.addEventListener("click", function () {
            this.classList.toggle("active");
            const content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    });

    // ==== SMOOTH SCROLL SIDEBAR ====
    document.querySelectorAll('.zi-menu a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 20,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ==== AUTO SCROLL HORIZONTAL CARD ====
    function autoScrollCarousel() {
        const wrapper = document.getElementById('carousel-wrapper');
        const cardWidth = wrapper.querySelector('.carousel-card').offsetWidth + 20;
        scrollInterval = setInterval(() => {
            wrapper.scrollBy({ left: cardWidth, behavior: 'smooth' });
        }, 3000);
    }

    autoScrollCarousel();

    // ==== AOS INIT ====
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
    });

    // ==== CAROUSEL UTAMA ====
    const carousel = document.getElementById("carousel");
    const prev = document.getElementById("prev");
    const next = document.getElementById("next");
    const items = document.querySelectorAll(".carousel-item");

    let currentIndex = 1;
    let interval;

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

    carousel.addEventListener("transitionend", () => {
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

    carousel.addEventListener("mouseenter", stopAutoSlide);
    carousel.addEventListener("mouseleave", startAutoSlide);

    updateCarousel();
    startAutoSlide();
});
