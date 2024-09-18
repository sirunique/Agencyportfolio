"use strict";
const header = document.querySelector(".header");
const navbar = document.querySelector(".navbar");
const toggleBtn = document.querySelector(".toggle__btn");
const navLinks = document.querySelector(".nav__links");
const menu = document.querySelector(".menu");
const close = document.querySelector(".close");
const allSections = document.querySelectorAll(".section");

toggleBtn.addEventListener("click", () => {
  navLinks.classList.toggle("active");
  menu.classList.toggle("hide");
  close.classList.toggle("show");
});

// Reveal sections
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

// Lazy loading images
