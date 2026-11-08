<?php
require_once __DIR__ . '/../lib/works.php';

$works      = load_works(__DIR__ . '/../../json/works-section.json');
$categories = $works['categories'];
$projects   = $works['projects'];
?>
<section id="portfolioSection" class="bg-alternate anchor-section pb-5" aria-labelledby="portfolioTitle">
    <div class="container">
        <div class="row my-3">
            <div class="col-12 border-bottom-line-dark">
                <h2 id="portfolioTitle" class="text-center">
                    Work that solves problems, not just fills portfolios.
                </h2>
                <h3 class="text-center heading-subtitle">
                    A selection of websites, digital products, identities and visual projects built for real people, real businesses and real goals.
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills nav-fill portfolio-nav-pills" aria-label="Filter portfolio projects">
                    <li class="nav-item">
                        <button type="button" class="nav-link button active portfolio-filter-btn"
                            data-filter="all" aria-pressed="true">All</button>
                    </li>
                    <?php foreach ($categories as $cat): ?>
                        <li class="nav-item">
                            <button type="button" class="nav-link button portfolio-filter-btn"
                                data-filter="<?= e($cat['id']) ?>" aria-pressed="false"><?= e($cat['label']) ?></button>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- One viewer for every project: JS fills it from json/works-section.json on click. -->
        <div id="projectViewer" class="anchor-section" tabindex="-1" aria-live="polite" hidden></div>

        <!-- Thumbnails are the only per-project markup rendered on the server. -->
        <div class="row my-4 gy-5" id="projectGrid">
            <?php foreach ($projects as $i => $p):
                $t        = $p['thumbnail'];
                $featured = !empty($p['featured']);
                $external = preg_match('#^https?://#', $t['src']) === 1;
                // The first row of cards is not "below the fold" on desktop; everything else is lazy.
                $lazy     = $i > 2;
            ?>
                <div class="<?= $featured ? 'col-12' : 'col-12 col-md-4' ?> position-relative project-card"
                     data-category="<?= e($p['category']) ?>">
                    <?php if ($featured): ?>
                        <div class="featured-work-badge position-absolute top-0 start-50 translate-middle badge rounded-pill bg-primary text-uppercase">
                            ★ Featured Work
                        </div>
                    <?php endif; ?>

                    <div class="position-relative overlay-animation h-100">
                        <div class="plus position-absolute text-center">
                            <a href="#projectViewer" class="js-open-project" data-project="<?= e($p['id']) ?>"
                               aria-controls="projectViewer"
                               aria-label="Open project: <?= e($p['title']) ?> – <?= e($t['subtitle']) ?>">
                                <i class="bi bi-plus-circle text-light" aria-hidden="true"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100"
                                     src="<?= e($t['src']) ?>"
                                     <?php if (!empty($t['srcLarge']) && $featured): ?>
                                     srcset="<?= e($t['src']) ?> <?= (int) $t['width'] ?>w, <?= e($t['srcLarge']) ?> <?= (int) $t['widthLarge'] ?>w"
                                     sizes="(min-width: 1200px) 1140px, 100vw"
                                     <?php endif; ?>
                                     alt="<?= e($t['alt']) ?>"
                                     width="<?= (int) $t['width'] ?>" height="<?= (int) $t['height'] ?>"
                                     <?= $lazy ? 'loading="lazy"' : '' ?> decoding="async"
                                     <?= $external ? 'referrerpolicy="no-referrer"' : '' ?>>
                            </div>
                            <figcaption class="bg-dark-custom text-center p-1">
                                <p class="text-light m-0"><?= e($t['title']) ?></p>
                                <p class="color-turquoise"><?= e($t['subtitle']) ?></p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black" aria-hidden="true">&nbsp;</div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if (!$projects): ?>
            <p class="text-center">Projects are temporarily unavailable.</p>
        <?php endif; ?>
    </div>
</section>
