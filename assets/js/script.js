// Scroll effect for the header

const header = document.getElementById("header");
const headerTitle = document.getElementById("header-title");

function scrollEffect() {
    if (window.pageYOffset > 0) {
      header.classList.add("header--dark");
      headerTitle.classList.add("header__title--white");
    } else {
      header.classList.remove("header--dark");
      headerTitle.classList.remove("header__title--white");
    }
}

window.onscroll = function() {
    scrollEffect()
};