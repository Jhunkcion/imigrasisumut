/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

/*Carousel Card */
let currentIndex = 0;
let cardWidth = 0;
let carousel;
let cards;
let totalCards;

document.addEventListener('DOMContentLoaded', function () {
    console.log("DOMContentLoaded fired - carousel script running");
    carousel = document.getElementById("cardcar");
    cards = document.querySelectorAll("#cardcar .card");
    totalCards = cards.length;

    if (totalCards > 0) {
        cardWidth = cards[0].offsetWidth + 16; // 16 = gap-4 (1rem)

        // Clone first card and append to the end for smooth looping
        const firstCardClone = cards[0].cloneNode(true);
        carousel.appendChild(firstCardClone);
        totalCards += 1;
    }

    function updateCarousel(animate = true) {
        if (animate) {
            carousel.style.transition = "transform 0.3s ease-in-out";
        } else {
            carousel.style.transition = "none";
        }
        carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }

    window.nextCard = function () {
        console.log("nextCard called");
        if (currentIndex < totalCards - 1) {
            currentIndex++;
            updateCarousel();
        }
        if (currentIndex === totalCards - 1) {
            // After transition to cloned first card, reset to original first card instantly
            setTimeout(() => {
                carousel.style.transition = "none";
                currentIndex = 0;
                updateCarousel(false);
            }, 300); // match transition duration
        }
    };

    window.prevCard = function () {
        console.log("prevCard called");
        if (currentIndex === 0) {
            // Jump to cloned last card instantly
            carousel.style.transition = "none";
            currentIndex = totalCards - 1;
            updateCarousel(false);
            // Then move to previous card with animation
            setTimeout(() => {
                carousel.style.transition = "transform 0.3s ease-in-out";
                currentIndex--;
                updateCarousel();
            }, 20);
        } else {
            currentIndex--;
            updateCarousel();
        }
    };

    // Auto-play tiap 0.5 detik
    setInterval(() => {
        window.nextCard();
    }, 500);
});
