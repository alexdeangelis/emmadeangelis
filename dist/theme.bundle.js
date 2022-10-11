/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
var hamburger = document.querySelector('.header__navbar__hamburger');
var hamburgerSpans = hamburger.getElementsByTagName("span");
hamburger.addEventListener('click', function (e) {
  this.classList.contains('open') ? this.classList.remove('open') : this.classList.add('open');
});
/******/ })()
;
//# sourceMappingURL=theme.bundle.js.map