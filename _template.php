<?php
// _template.php: copy this file to start a new page.
// Then add the page to $navItems in includes/header.php if it should appear in the menu.
$pageTitle       = "Page name | Siyabonga Ntumba";
$pageDescription = "One sentence about this page.";
$activePage      = "";   // must match the key in $navItems, e.g. "about"
// $pageScripts  = ["/js/something.js"];   // only if this page needs its own script

require __DIR__ . "/includes/header.php";
?>

<section class="page-top">
  <h2>Page heading</h2>
  <p class="lead">Page content goes here.</p>
</section>

<?php require __DIR__ . "/includes/footer.php";
