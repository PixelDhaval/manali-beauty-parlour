// Page loader
const loader = document.getElementById('page-loader');

if (loader) {
    document.body.classList.add('is-loading');

    const hideLoader = () => {
        loader.classList.add('is-loaded');
        document.body.classList.remove('is-loading');
    };

    if (document.readyState === 'complete') {
        hideLoader();
    } else {
        window.addEventListener('load', () => setTimeout(hideLoader, 250));
    }
}

// Mobile navigation toggle
const navToggle = document.getElementById('nav-toggle');
const mobileNav = document.getElementById('mobile-nav');

if (navToggle && mobileNav) {
    navToggle.addEventListener('click', () => {
        const isOpen = mobileNav.classList.toggle('is-open');
        navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        document.body.classList.toggle('overflow-hidden', isOpen);
    });

    mobileNav.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            mobileNav.classList.remove('is-open');
            navToggle.setAttribute('aria-expanded', 'false');
            document.body.classList.remove('overflow-hidden');
        });
    });
}

// Sticky header shadow on scroll
const siteHeader = document.getElementById('site-header');

if (siteHeader) {
    const toggleHeaderShadow = () => {
        siteHeader.classList.toggle('is-scrolled', window.scrollY > 12);
    };

    toggleHeaderShadow();
    window.addEventListener('scroll', toggleHeaderShadow, { passive: true });
}

// Reveal-on-scroll animations
const revealTargets = document.querySelectorAll('[data-reveal]');

if (revealTargets.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
    );

    revealTargets.forEach((target) => observer.observe(target));
} else {
    revealTargets.forEach((target) => target.classList.add('is-visible'));
}

// FAQ accordions
document.querySelectorAll('[data-faq]').forEach((faq) => {
    const buttons = faq.querySelectorAll('[data-faq-trigger]');

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            const item = button.closest('[data-faq-item]');
            const isOpen = item.classList.contains('is-open');

            faq.querySelectorAll('[data-faq-item]').forEach((el) => el.classList.remove('is-open'));

            if (!isOpen) {
                item.classList.add('is-open');
            }
        });
    });
});
