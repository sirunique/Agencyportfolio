"use strict";
// DOM
const headerPlaceholder = document.querySelector(".header-placeholder");
const header = document.querySelector(".header");
const navbar = document.querySelector(".navbar");
const toggleBtn = document.querySelector(".toggle__btn");
const navLinks = document.querySelector(".nav__links");
const menu = document.querySelector(".menu");
const close = document.querySelector(".close");
const allSections = document.querySelectorAll(".section");
const imgTarget = document.querySelectorAll("img[data-src]");
// DOM

// Mobile nav toggle
toggleBtn.addEventListener("click", () => {
  navLinks.classList.toggle("active");
  menu.classList.toggle("hide");
  close.classList.toggle("show");
});
// Mobile nav toggle

// Sticky navigation
const stickyNavigation = () => {
  const stickyNav = (entries) => {
    const [entry] = entries;

    return !entry.isIntersecting
      ? header.classList.add("sticky")
      : header.classList.remove("sticky");
  };

  const headerObserver = new IntersectionObserver(stickyNav, {
    root: null,
    threshold: 0,
  });

  headerObserver.observe(headerPlaceholder);
};
stickyNavigation();

document.addEventListener("DOMContentLoaded", () => {
  stickyNavigation();
});
// Reveal sections
const sectionReveal = () => {
  const revealSection = function (entries, observer) {
    const [entry] = entries;
    if (!entry.isIntersecting) return;
    entry.target.classList.remove("section--hidden");
    observer.unobserve(entry.target);
  };

  const sectionObserver = new IntersectionObserver(revealSection, {
    root: null,
    threshold: 0.15,
  });

  allSections.forEach((section) => {
    sectionObserver.observe(section);
    section.classList.add("section--hidden");
  });
};
sectionReveal();

// Lazy loading images
const lazyLoading = () => {
  const loadingImg = function (entries, observer) {
    const [entry] = entries;

    if (!entry.isIntersecting) return;

    // Replace src with data-src
    entry.target.src = entry.target.dataset.src;
    // Remove the blur effect
    entry.target.addEventListener("load", () =>
      entry.target.classList.remove("lazy-img")
    );

    observer.unobserve(entry.target);
  };

  const imgObserver = new IntersectionObserver(loadingImg, {
    root: null,
    threshold: 0,
  });

  imgTarget.forEach((img) => imgObserver.observe(img));
};
lazyLoading();
