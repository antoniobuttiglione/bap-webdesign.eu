<main id="main">
<!-- Scroll to top -->
<div class="position-fixed fixed-bottom mb-5">
    <div class="d-flex justify-content-end mb-5 me-2">
        <button type="button" onclick="scrollToTop()" class="text-dark rounded-circle border-0 js_goTop" aria-label="Scroll to top">
            <i class="bi bi-arrow-up-circle-fill fs-1 p-1" aria-hidden="true"></i>
        </button>
    </div>
</div>

<!-- Hero Section -->
<?php include_once("./php/partials/hero-section.php"); ?>

<!-- Customers -->
<?php include_once("./php/partials/clients.php"); ?>

<!-- Skills -->
<?php include_once("./php/partials/services.php"); ?>   

<!-- Works Portfolio -->
<?php include_once("./php/partials/works-section.php"); ?> 


<!-- About Me -->
<?php include_once("./php/partials/about.php"); ?> 


<!-- Pricing -->
<?php include_once("./php/partials/pricing.php"); ?> 


<!-- Contacts -->
<?php include_once("./php/partials/contacts.php"); ?>
</main>
