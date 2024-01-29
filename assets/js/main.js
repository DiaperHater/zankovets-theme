"use strict";

// document onscroll
(function () {

  let lastKnownScrollPosition = 0;
  let ticking = false;

  function narrowHeaderOnScroll(scrollPos) {

    const headerHeight = document.querySelector('header').offsetHeight;
    const header = document.querySelector('header');

    if (window.scrollY > headerHeight) {
      if (!header.classList.contains('narrow')) {
        header.classList.add('narrow');
      }
    } else {
      header.classList.remove('narrow');
    }
  }

  document.addEventListener("scroll", (event) => {
    lastKnownScrollPosition = window.scrollY;

    if (!ticking) {
      window.requestAnimationFrame(() => {
        narrowHeaderOnScroll(lastKnownScrollPosition);
        ticking = false;
      });

      ticking = true;
    }
  });
})();

function burgerOnClick() {

  toggleBurger();
  toggleMobileMenu();
}

function toggleBurger() {
  const burger = document.querySelector('.burger');
  burger.classList.toggle('active');
}

function toggleMobileMenu() {

  const menu = document.querySelector('.mobile-menu');
  menu.classList.toggle('left-full');
  menu.classList.toggle('left-0');
}