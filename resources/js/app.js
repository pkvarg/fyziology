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

// Cookie Consent
function initCookieConsent() {
    const cookieConsent = document.getElementById('cookieConsent');
    const acceptButton = document.getElementById('acceptCookies');
    const declineButton = document.getElementById('declineCookies');

    // Check if user already made a choice
    const cookieChoice = localStorage.getItem('cookieConsent');

    if (!cookieChoice) {
        // Show cookie consent banner
        cookieConsent.classList.remove('hidden');
    } else if (cookieChoice === 'accepted') {
        // Load analytics script if accepted
        loadAnalyticsScript();
    }

    // Accept button handler
    acceptButton.addEventListener('click', () => {
        localStorage.setItem('cookieConsent', 'accepted');
        cookieConsent.classList.add('hidden');
        loadAnalyticsScript();
    });

    // Decline button handler
    declineButton.addEventListener('click', () => {
        localStorage.setItem('cookieConsent', 'declined');
        cookieConsent.classList.add('hidden');
    });
}

function loadAnalyticsScript() {
    // Create and append Umami analytics script
    const script = document.createElement('script');
    script.defer = true;
    script.src = 'https://umami-p00gs00gwcwo00s4k4c4kgg8.pictusweb.com/script.js';
    script.setAttribute('data-website-id', 'a55cfc40-a200-46ca-a68f-a3bedb6d6282');
    document.head.appendChild(script);
}

// Initialize cookie consent when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCookieConsent);
} else {
    initCookieConsent();
}