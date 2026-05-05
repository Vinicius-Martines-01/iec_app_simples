/**
 * Welcome Page JavaScript
 * Gerencia interações e animações da página de boas-vindas.
 *
 * @package IEC_Welcome
 */

(function () {
    'use strict';

    // ===================== HEADER SCROLL EFFECT =====================
    const header = document.getElementById('site-header');

    if (header) {
        const handleScroll = () => {
            if (window.scrollY > 20) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        };

        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll(); // run on load
    }

    // ===================== SMOOTH SCROLL PARA ANCHORS =====================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href').slice(1);
            const target = document.getElementById(targetId);

            if (target) {
                e.preventDefault();
                const offset = 80; // altura do header fixo
                const top = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

    // ===================== ANIMATE ON SCROLL (Intersection Observer) =====================
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -40px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Elementos para animar
    const animatableSelectors = [
        '.feature-card',
        '.stat',
        '.hero-badge',
        '.section-tag',
    ];

    animatableSelectors.forEach(selector => {
        document.querySelectorAll(selector).forEach((el, i) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(28px)';
            el.style.transition = `opacity 0.55s ease ${i * 0.1}s, transform 0.55s ease ${i * 0.1}s`;
            observer.observe(el);
        });
    });

    // ===================== COUNTER ANIMATION =====================
    const animateCounter = (el, target, duration = 1800) => {
        const isDecimal = target.includes('.');
        const isText = isNaN(parseFloat(target));

        if (isText) return; // não animar strings como "CI/CD", "24/7"

        const end = parseFloat(target.replace(/[^0-9.]/g, ''));
        const suffix = target.replace(/[0-9.]/g, '');
        const start = 0;
        const startTime = performance.now();

        const update = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3); // ease out cubic
            const current = start + (end - start) * eased;
            el.textContent = (isDecimal ? current.toFixed(1) : Math.round(current)) + suffix;

            if (progress < 1) requestAnimationFrame(update);
        };

        requestAnimationFrame(update);
    };

    // Observar stat numbers
    const statObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                animateCounter(el, el.dataset.target || el.textContent.trim());
                statObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.stat-number').forEach(el => {
        el.dataset.target = el.textContent.trim();
        statObserver.observe(el);
    });

})();
