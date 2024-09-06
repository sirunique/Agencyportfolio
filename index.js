"use strict";

const mobileToggle = document.querySelector("i");

mobileToggle.addEventListener(
  "click",
  () => (document.querySelector(".nav__links").style.display = "block")
);
