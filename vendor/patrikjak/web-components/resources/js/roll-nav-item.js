const navbar = document.querySelector('[class^=navbar-]');

if (navbar) {
    const rollableNavItems = navbar.querySelectorAll('.items-link');
    const burgerMenu = navbar.querySelector('.burger-menu');

    rollableNavItems.forEach(item => {
        item.addEventListener('click', () => {
            rollNavItem(item);
        });
    });

    burgerMenu.addEventListener('click', () => {
        toggleMenu();
    });
}

function rollNavItem(navItem) {
    const isActive = navItem.classList.contains('active');

    if (isActive) {
        navItem.classList.remove('active');
    } else {
        navItem.classList.add('active');
    }
}

function toggleMenu() {
    const isActive = navbar.classList.contains('active');

    if (isActive) {
        navbar.classList.remove('active');
    } else {
        navbar.classList.add('active');
    }
}