const hamburger = document.querySelector('.header__navbar__hamburger')
const hamburgerSpans = hamburger.getElementsByTagName("span");

hamburger.addEventListener('click', function(e) {
    (this.classList.contains('open')) ? this.classList.remove('open') : this.classList.add('open')
});