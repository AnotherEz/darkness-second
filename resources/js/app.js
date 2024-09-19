import './bootstrap';
document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('menu-button');
    const closeButton = document.getElementById('close-menu');
    const mobileMenuContainer = document.getElementById('mobile-menu-container');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

    function openMenu() {
        mobileMenuContainer.classList.remove('hidden');
        setTimeout(() => {
            mobileMenu.classList.add('translate-y-0');
            mobileMenu.classList.remove('-translate-y-full');
        }, 10);
    }

    function closeMenu() {
        mobileMenu.classList.remove('translate-y-0');
        mobileMenu.classList.add('-translate-y-full');
        setTimeout(() => {
            mobileMenuContainer.classList.add('hidden');
        }, 300);
    }

    menuButton.addEventListener('click', openMenu);
    closeButton.addEventListener('click', closeMenu);
    mobileMenuOverlay.addEventListener('click', closeMenu);

    // Cierra el menú si se hace clic fuera de él
    document.addEventListener('click', function(event) {
        if (!mobileMenuContainer.classList.contains('hidden') &&
            !mobileMenu.contains(event.target) &&
            !menuButton.contains(event.target)) {
            closeMenu();
        }
    });
});