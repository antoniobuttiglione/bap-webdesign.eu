<!-- Bootstrap is pinned to the current stable v5.3.8 release. -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous" defer></script>
<script src="./js/site.js" defer></script>
<script src="./js/works.js" defer></script>

<!-- Iubenda embed loader for policy links -->
<script>
    (function (w, d) {
        var loader = function () {
            var s = d.createElement("script");
            var tag = d.getElementsByTagName("script")[0];
            s.src = "https://cdn.iubenda.com/iubenda.js";
            tag.parentNode.insertBefore(s, tag);
        };
        if (w.addEventListener) {
            w.addEventListener("load", loader, false);
        } else if (w.attachEvent) {
            w.attachEvent("onload", loader);
        } else {
            w.onload = loader;
        }
    })(window, document);
</script>

<!-- Iubenda Cookie Solution configuration -->
<script>
    var _iub = window._iub || [];
    _iub.csConfiguration = {
        "askConsentAtCookiePolicyUpdate": true,
        "countryDetection": true,
        "enableLgpd": true,
        "enableUspr": true,
        "floatingPreferencesButtonDisplay": "bottom-right",
        "lang": "en",
        "lgpdAppliesGlobally": false,
        "perPurposeConsent": true,
        "siteId": 666049,
        "whitelabel": false,
        "cookiePolicyId": 7970663,
        "banner": {
            "acceptButtonDisplay": true,
            "closeButtonDisplay": false,
            "customizeButtonDisplay": true,
            "explicitWithdrawal": true,
            "listPurposes": true,
            "position": "float-bottom-center",
            "rejectButtonDisplay": true,
            "showPurposesToggles": true
        }
    };
</script>
<script src="//cs.iubenda.com/sync/666049.js"></script>
<script src="//cdn.iubenda.com/cs/gpp/stub.js"></script>
<script src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
