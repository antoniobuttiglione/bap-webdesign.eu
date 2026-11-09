(() => {
    "use strict";

    // ------------------------------------------------------------------
    // Animated scroll + navbar highlight (scroll-spy)
    // ------------------------------------------------------------------
    const prefersReducedMotion = () => window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    const easeInOutCubic = (t) => (t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2);

    const navbar = document.querySelector(".navbar");
    const nav = document.querySelector(".js_NavbarMenu");
    const collapse = document.getElementById("navbarNav");
    const navLinks = nav ? [...nav.querySelectorAll('a[href^="#"]')] : [];

    // Each nav link -> the section it points to, in page order.
    const spyItems = navLinks
        .map((link) => ({ link, section: document.getElementById(link.getAttribute("href").slice(1)) }))
        .filter((item) => item.section)
        .sort((a, b) => a.section.offsetTop - b.section.offsetTop);

    let animationFrame = null;
    let isAnimating = false;

    /** Smoothly scrolls the window to `targetY` (px). Any user scroll input cancels it. */
    const animateScrollTo = (targetY, duration = 700) => {
        cancelAnimationFrame(animationFrame);

        const startY = window.scrollY;
        const maxY = document.documentElement.scrollHeight - window.innerHeight;
        const endY = Math.max(0, Math.min(targetY, maxY));
        const distance = endY - startY;

        if (prefersReducedMotion() || Math.abs(distance) < 2) {
            window.scrollTo(0, endY);
            isAnimating = false;
            updateActiveLink();
            return;
        }

        isAnimating = true;
        const startTime = performance.now();
        // Longer trips take a little longer, but never more than 1.2 s.
        const time = Math.min(1200, Math.max(duration, Math.abs(distance) / 4));

        const cancel = () => {
            cancelAnimationFrame(animationFrame);
            isAnimating = false;
            cleanup();
        };
        const cleanup = () => {
            window.removeEventListener("wheel", cancel);
            window.removeEventListener("touchstart", cancel);
            window.removeEventListener("keydown", cancel);
        };
        window.addEventListener("wheel", cancel, { passive: true, once: true });
        window.addEventListener("touchstart", cancel, { passive: true, once: true });
        window.addEventListener("keydown", cancel, { once: true });

        const step = (now) => {
            const progress = Math.min(1, (now - startTime) / time);
            window.scrollTo(0, startY + distance * easeInOutCubic(progress));
            if (progress < 1) {
                animationFrame = requestAnimationFrame(step);
            } else {
                isAnimating = false;
                cleanup();
                updateActiveLink();
            }
        };
        animationFrame = requestAnimationFrame(step);
    };

    const setActiveLink = (activeLink) => {
        navLinks.forEach((link) => {
            const on = link === activeLink;
            link.classList.toggle("active", on);
            if (on) link.setAttribute("aria-current", "true");
            else link.removeAttribute("aria-current");
        });
    };

    /** Marks the nav link of the section the reader is currently looking at (none above the first section). */
    function updateActiveLink() {
        if (!spyItems.length) return;

        const navHeight = navbar ? navbar.offsetHeight : 0;
        const probe = window.scrollY + navHeight + window.innerHeight * 0.3;
        const atBottom = window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 2;

        let current = null;
        if (atBottom) {
            current = spyItems[spyItems.length - 1];
        } else {
            for (const item of spyItems) {
                if (item.section.offsetTop <= probe) current = item;
            }
        }

        // A section that the nav does not list (e.g. Clients) ends the previous one's range.
        if (current) {
            const sectionEnd = current.section.offsetTop + current.section.offsetHeight;
            if (!atBottom && probe > sectionEnd) current = null;
        }
        setActiveLink(current ? current.link : null);
    }

    // Click on a navbar link or a hero button that points to an on-page section.
    document.addEventListener("click", (event) => {
        const link = event.target.closest("a.js_NavbarMenuItem");
        if (!link || !link.hash || event.defaultPrevented) return;
        if (event.metaKey || event.ctrlKey || event.shiftKey || event.button !== 0) return;

        const target = document.getElementById(link.hash.slice(1));
        if (!target) return;

        event.preventDefault();

        const spyLink = spyItems.find((item) => item.link === link);
        if (spyLink) setActiveLink(link);   // react instantly, don't wait for the animation

        if (collapse?.classList.contains("show") && window.bootstrap) {
            window.bootstrap.Collapse.getOrCreateInstance(collapse).hide();
        }

        // Same landing point as a native #anchor jump (the .anchor-section padding clears the sticky navbar).
        animateScrollTo(target.getBoundingClientRect().top + window.scrollY);
        history.pushState(null, "", link.hash);

        // Keep keyboard / screen-reader position in sync with the scroll.
        if (!target.hasAttribute("tabindex")) target.setAttribute("tabindex", "-1");
        target.focus({ preventScroll: true });
    });

    // Scroll listener, throttled to one update per frame.
    let spyTicking = false;
    window.addEventListener("scroll", () => {
        if (isAnimating || spyTicking) return;
        spyTicking = true;
        requestAnimationFrame(() => {
            updateActiveLink();
            spyTicking = false;
        });
    }, { passive: true });
    window.addEventListener("resize", updateActiveLink, { passive: true });
    window.addEventListener("load", updateActiveLink);

    // Meta Pixel "Contact" fires when someone actually clicks an email link (it used to fire on every page load).
    document.addEventListener("click", (event) => {
        if (event.target.closest('a[href^="mailto:"]') && typeof window.fbq === "function") {
            window.fbq("track", "Contact");
        }
    });

    window.scrollToTop = () => animateScrollTo(0);

    document.addEventListener("DOMContentLoaded", () => {
        const ageNode = document.getElementById("age");
        if (ageNode) {
            const birthDate = new Date(1989, 5, 30);
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const birthdayHasPassed =
                today.getMonth() > birthDate.getMonth() ||
                (today.getMonth() === birthDate.getMonth() && today.getDate() >= birthDate.getDate());
            if (!birthdayHasPassed) age -= 1;
            ageNode.textContent = String(age);
        }
    });
})();
