(() => {
    "use strict";

    const DATA_URL = "./json/works-section.json";
    const viewer = document.getElementById("projectViewer");
    const grid = document.getElementById("projectGrid");
    if (!viewer || !grid) return;

    let projectsById = null;

    const loadProjects = () => {
        projectsById ??= fetch(DATA_URL, { credentials: "same-origin" })
            .then((r) => { if (!r.ok) throw new Error(r.status); return r.json(); })
            .then((data) => new Map(data.projects.map((p) => [p.id, p])))
            .catch((err) => { projectsById = null; throw err; });
        return projectsById;
    };

    // ---- tiny DOM helper: el("div", {class:"x"}, child, "text") ----
    const el = (tag, attrs = {}, ...children) => {
        const node = document.createElement(tag);
        for (const [k, v] of Object.entries(attrs)) {
            if (v === false || v == null) continue;
            node.setAttribute(k, v === true ? "" : v);
        }
        node.append(...children.filter((c) => c != null));
        return node;
    };

    // ---- media renderers (one per media.type) ----
    const renderImages = (items) => {
        const imgs = items.map((m, i) => el("img", {
            src: i === 0 ? m.src : null,
            "data-src": m.src,
            alt: m.alt, width: m.width, height: m.height,
            class: "w-100 project-slide", decoding: "async",
            hidden: i !== 0,
        }));
        const wrap = el("div", { class: "project-gallery position-relative" }, ...imgs);
        if (imgs.length > 1) {
            let index = 0;
            const counter = el("span", { class: "visually-hidden", "aria-live": "polite" });
            const go = (step) => {
                imgs[index].hidden = true;
                index = (index + step + imgs.length) % imgs.length;
                const next = imgs[index];
                if (!next.getAttribute("src")) next.src = next.dataset.src;
                next.hidden = false;
                counter.textContent = `Image ${index + 1} of ${imgs.length}`;
            };
            const btn = (cls, label, glyph, step) => {
                const b = el("button", { type: "button", class: `gallery-btn ${cls}`, "aria-label": label }, glyph);
                b.addEventListener("click", () => go(step));
                return b;
            };
            wrap.append(btn("gallery-prev", "Previous image", "❮", -1), btn("gallery-next", "Next image", "❯", 1), counter);
        }
        return wrap;
    };

    const renderEmbed = (m) => el("iframe", {
        src: m.src,
        title: m.title || "Project preview",
        class: "project-embed",
        style: `aspect-ratio:${m.ratio || "16/9"}`,
        loading: "lazy",
        referrerpolicy: "strict-origin-when-cross-origin",
        allow: "autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share",
        allowfullscreen: true,
    });

    const renderMedia = (p) => {
        const first = p.media[0];
        return first.type === "embed" ? renderEmbed(first) : renderImages(p.media);
    };

    const render = (p) => {
        const close = el("button", { type: "button", class: "project-close", "aria-label": "Close project details" });
        close.innerHTML = '<i class="bi bi-x-circle fs-3" aria-hidden="true"></i>';
        close.addEventListener("click", closeViewer);

        const row = (label, value) => el("div", {}, el("span", {}, label), value);

        return el("div", { class: "row bg-dark-custom single-project" },
            el("div", { class: "col-12 col-md-6 p-0" }, renderMedia(p)),
            el("div", { class: "col-12 col-md-6 py-3 text-light" },
                el("div", { class: "project-description" },
                    el("div", { class: "project-title clearfix" }, el("h4", {}, p.title), close),
                    el("div", { class: "project-info" }, row("Date", p.date), row("Skills", p.skills.join(", "))),
                    el("p", {}, p.description))));
    };

    // ---- open / close ----
    let lastTrigger = null;

    function closeViewer() {
        viewer.replaceChildren();          // also destroys any iframe, which stops playback
        viewer.hidden = true;
        lastTrigger?.focus({ preventScroll: true });
    }

    const reduceMotion = () => matchMedia("(prefers-reduced-motion: reduce)").matches;

    const openProject = async (id, trigger) => {
        try {
            const project = (await loadProjects()).get(id);
            if (!project) return;
            lastTrigger = trigger;
            viewer.replaceChildren(render(project));
            viewer.hidden = false;
            viewer.scrollIntoView({ behavior: reduceMotion() ? "auto" : "smooth", block: "start" });
            viewer.focus({ preventScroll: true });
        } catch (err) {
            console.warn("Could not load projects", err);
        }
    };

    grid.addEventListener("click", (event) => {
        const link = event.target.closest(".js-open-project");
        if (!link) return;
        event.preventDefault();
        openProject(link.dataset.project, link);
    });

    // Warm the cache once the user shows intent, so the click feels instant.
    grid.addEventListener("pointerover", () => loadProjects().catch(() => {}), { once: true });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && !viewer.hidden) closeViewer();
    });

    // ---- filters ----
    const buttons = document.querySelectorAll(".portfolio-filter-btn");
    buttons.forEach((btn) => btn.addEventListener("click", () => {
        const filter = btn.dataset.filter;
        buttons.forEach((b) => {
            const on = b === btn;
            b.classList.toggle("active", on);
            b.setAttribute("aria-pressed", String(on));
        });
        grid.querySelectorAll(".project-card").forEach((card) => {
            card.hidden = !(filter === "all" || card.dataset.category === filter);
        });
    }));
})();
