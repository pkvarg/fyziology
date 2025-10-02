import './bootstrap';
import Form from "./vendor/pjutils/form/Form.ts";

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

    if (!isActive) {
        setTimeout(() => {
            bindClosingNavItems(navItem);
        });

        navItem.classList.add('active');
    }
}

function bindClosingNavItems(navItem) {
    document.addEventListener('click', function close(event) {
        const target = event.target;

        if (target.closest('.items-link') !== null
            && !target.closest('.items-link').classList.contains('active')
        ) {
            return;
        }

        navItem.classList.remove('active');
        document.removeEventListener('click', close);
    });
}

function toggleMenu() {
    const isActive = navbar.classList.contains('active');

    if (isActive) {
        navbar.classList.remove('active');
    } else {
        navbar.classList.add('active');
    }
}

const contactForm = document.querySelector('.contact form');

if (contactForm) {
    const form = new Form(contactForm);

    form.bindSubmit();
}