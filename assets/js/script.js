document.addEventListener("DOMContentLoaded", function() {
    const mobileMenu = document.getElementById("mobile-menu");
    const navMenu = document.querySelector(".nav-header-ul");

    if (mobileMenu && navMenu) {
        mobileMenu.addEventListener("click", function() {
            navMenu.classList.toggle("active");
        });
    }
});



AOS.init();
