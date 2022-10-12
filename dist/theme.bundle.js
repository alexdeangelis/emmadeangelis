/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
var hamburger = document.querySelector('.header__navbar__hamburger');
var hamburgerSpans = hamburger.getElementsByTagName("span");
var mobileMenu = document.querySelector('.header__mobile-menu');
hamburger.addEventListener('click', function (e) {
  this.classList.contains('open') ? this.classList.remove('open') : this.classList.add('open');
  mobileMenu.classList.contains('open') ? mobileMenu.classList.remove('open') : mobileMenu.classList.add('open');
});
/******/ })()
;
//# sourceMappingURL=theme.bundle.js.map