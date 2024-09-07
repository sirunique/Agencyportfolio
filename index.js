"use strict";

const toggleBtn = document.querySelector(".toggle__btn");
const navLinks = document.querySelector(".nav__links");
const menu = document.querySelector(".menu");
const close = document.querySelector(".close");

toggleBtn.addEventListener("click", () => {
  navLinks.classList.toggle("active");
  menu.classList.toggle("hide");
  close.classList.toggle("show");
});
