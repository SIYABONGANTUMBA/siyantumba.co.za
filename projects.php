<?php
// projects.php: every project and demo. The cards come from includes/projects.php.
$pageTitle       = "Projects & demos | Siyabonga Ntumba";
$pageDescription = "Websites and applications I have built: SBWL Eats, the Siphosethu Co-op website, my portfolio and Host Real.";
$activePage      = "projects";   // highlights this page in the menu

require_once __DIR__ . "/includes/projects.php";
require __DIR__ . "/includes/header.php";
?>

<section class="page-top">
  <h2>Projects &amp; demos</h2>
  <p class="lead">Websites and applications I have built, and what I learnt from each one. Select a project to see an overview, what I did and what the interface looks like.</p>

  <?= project_cards($projects) ?>

  <p class="section-more"><a class="btn" href="/">Back to home</a></p>
</section>

<?php require __DIR__ . "/includes/footer.php";
