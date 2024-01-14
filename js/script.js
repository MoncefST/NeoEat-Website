// Menu burger
document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.querySelector('.burger-menu');
    const navLinks = document.querySelector('.nav-links');

    burgerMenu.addEventListener('click', function () {
        navLinks.classList.toggle('show');
    });
});

// Scroll jusqu'en au de la page
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Afficher ou masquer le bouton de scroll en fonction de la position dans la page
document.addEventListener('scroll', function () {
    const scrollTopBtn = document.getElementById('scrollTopBtn');
    if (window.scrollY > 200) {
        scrollTopBtn.style.display = 'block';
    } else {
        scrollTopBtn.style.display = 'none';
    }
});

