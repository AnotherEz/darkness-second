import './bootstrap';
// Menú deslizante
const menuButton = document.getElementById('menu-button');
const menu = document.getElementById('menu');
const mainContent = document.getElementById('main-content');

menuButton.addEventListener('click', () => {
    menu.classList.toggle('-translate-x-full');
    if (menu.classList.contains('-translate-x-full')) {
        mainContent.style.marginLeft = '0';
    } else {
        mainContent.style.marginLeft = '16rem'; // 64px * 4 (w-64)
    }
});

// Menú de usuario
const userButton = document.getElementById('user-button');
const userMenu = document.getElementById('user-menu');

userButton.addEventListener('click', () => {
    userMenu.classList.toggle('hidden');
});

// Cierra el menú de usuario si se hace clic fuera de él
window.addEventListener('click', (e) => {
    if (!userButton.contains(e.target) && !userMenu.contains(e.target)) {
        userMenu.classList.add('hidden');
    }
});