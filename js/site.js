(() => {
    "use strict";

    window.navigateToAnchor = (currentLink) => {
        const nav = document.querySelector(".js_NavbarMenu");
        const collapse = document.getElementById("navbarNav");

        if (!nav || !nav.contains(currentLink)) return;

        nav.querySelectorAll("a").forEach((link) => {
            link.classList.toggle("active", link === currentLink);
        });

        if (collapse?.classList.contains("show") && window.bootstrap) {
            window.bootstrap.Collapse.getOrCreateInstance(collapse).hide();
        }
    };

    // Meta Pixel "Contact" fires when someone actually clicks an email link (it used to fire on every page load).
    document.addEventListener("click", (event) => {
        if (event.target.closest('a[href^="mailto:"]') && typeof window.fbq === "function") {
            window.fbq("track", "Contact");
        }
    });

    window.scrollToTop = () => {
        const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
        window.scrollTo({ top: 0, behavior: reduceMotion ? "auto" : "smooth" });
    };

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
