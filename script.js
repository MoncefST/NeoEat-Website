document.addEventListener('DOMContentLoaded', function () {
    const menuIcon = document.getElementById('menu-icon');
    const navList = document.querySelector('nav ul');

    menuIcon.addEventListener('click', function () {
        navList.classList.toggle('show');
    });
});
