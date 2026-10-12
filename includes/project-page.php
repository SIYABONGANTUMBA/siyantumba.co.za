<?php
// includes/project-page.php: the shared layout for every project's info page.
// A project page only needs to say which project it is:   $slug = "eats";  require __DIR__ . "/includes/project-page.php";
require_once __DIR__ . "/projects.php";

$index = null;
foreach ($projects as $i => $candidate) { if ($candidate["slug"] === ($slug ?? "")) { $index = $i; break; } }
if ($index === null) { http_response_code(404); exit("Project not found."); }
$p = $projects[$index];
$prev = $projects[($index + count($projects) - 1) % count($projects)];
$next = $projects[($index + 1) % count($projects)];

$pageTitle       = $p["title"] . " | Siyabonga Ntumba";
$pageDescription = $p["summary"];
$activePage      = "projects";
$pageScripts     = ["/js/gallery.js"];

$arrowRight   = '<svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>';
$arrowOutward = '<svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M8 7h9v9"/></svg>';

require __DIR__ . "/header.php";
?>

<section class="page-top project-page">
  <p class="crumbs"><a href="<?= page_url("projects") ?>">Projects &amp; demos</a> <span aria-hidden="true">/</span> <span><?= htmlspecialchars($p["title"]) ?></span></p>
  <p class="proj-tag"><span class="dot" aria-hidden="true"></span><?= htmlspecialchars($p["banner"]) ?></p>
  <h2><?= htmlspecialchars($p["title"]) ?></h2>
  <p class="lead"><?= htmlspecialchars($p["summary"]) ?></p>

  <?php if ($p["demo"] !== ""): ?>
    <p class="btns"><a class="btn primary more" href="<?= htmlspecialchars($p["demo"]) ?>" target="_blank" rel="noopener noreferrer">Visit live demo <?= $arrowOutward ?><span class="sr-only">(opens in a new tab)</span></a></p>
  <?php endif; ?>

  <figure class="proj-hero">
    <img src="<?= asset(proj_img($p, "hero")) ?>" alt="<?= htmlspecialchars($p["alt"]) ?>" width="1600" height="977">
  </figure>

  <dl class="facts">
    <div><dt>Type</dt><dd><?= htmlspecialchars($p["type"]) ?></dd></div>
    <div><dt>My role</dt><dd><?= htmlspecialchars($p["role"]) ?></dd></div>
    <div><dt><?= htmlspecialchars($p["label"]) ?></dt><dd><?= htmlspecialchars(implode(", ", array_slice($p["items"], 0, 4))) ?> and more</dd></div>
  </dl>

  <h3 class="sub">Overview</h3>
  <div class="prose">
    <?php foreach ($p["overview"] as $para): ?><p><?= htmlspecialchars($para) ?></p><?php endforeach; ?>
  </div>

  <h3 class="sub"><?= htmlspecialchars($p["built_title"]) ?></h3>
  <div class="prose">
    <ul>
      <?php foreach ($p["built"] as $item): ?><li><?= htmlspecialchars($item) ?></li><?php endforeach; ?>
    </ul>
  </div>

  <?php if (!empty($p["groups"])): ?>
    <h3 class="sub">Technologies used</h3>
    <div class="tech-grid">
      <?php foreach ($p["groups"] as $group => $items): ?>
        <article class="card">
          <h3><?= htmlspecialchars($group) ?></h3>
          <ul class="chips"><?php foreach ($items as $item): ?><li><?= htmlspecialchars($item) ?></li><?php endforeach; ?></ul>
        </article>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <h3 class="sub"><?= htmlspecialchars($p["label"]) ?></h3>
    <ul class="chips"><?php foreach ($p["items"] as $item): ?><li><?= htmlspecialchars($item) ?></li><?php endforeach; ?><li class="more">and more</li></ul>
  <?php endif; ?>

  <h3 class="sub">The interface</h3>
  <p class="lead">Select a screenshot to enlarge it.</p>
  <ul class="gallery cols-<?= (int)$p["cols"] ?>">
    <?php foreach ($p["shots"] as $n => $caption): $file = proj_img($p, $n + 1); [$iw, $ih] = @getimagesize(dirname(__DIR__) . $file) ?: [1500, 1000]; ?>
      <li>
        <figure class="shot">
          <a class="shot-link" href="<?= asset($file) ?>" data-caption="<?= htmlspecialchars($caption) ?>">
            <img src="<?= asset($file) ?>" alt="<?= htmlspecialchars($caption) ?>" loading="lazy" width="<?= $iw ?>" height="<?= $ih ?>">
          </a>
          <figcaption><?= htmlspecialchars($caption) ?></figcaption>
        </figure>
      </li>
    <?php endforeach; ?>
  </ul>

  <?php if (!empty($p["planned"])): ?>
    <h3 class="sub">Still to come</h3>
    <div class="prose"><ul><?php foreach ($p["planned"] as $item): ?><li><?= htmlspecialchars($item) ?></li><?php endforeach; ?></ul></div>
  <?php endif; ?>

  <nav class="proj-nav" aria-label="More projects">
    <a href="<?= htmlspecialchars($prev["page"]) ?>"><span>Previous project</span><b><?= htmlspecialchars($prev["title"]) ?></b></a>
    <a class="next" href="<?= htmlspecialchars($next["page"]) ?>"><span>Next project</span><b><?= htmlspecialchars($next["title"]) ?></b></a>
  </nav>
  <p class="section-more"><a class="btn" href="<?= page_url("projects") ?>">Back to all projects &amp; demos</a></p>
</section>

<dialog class="lightbox" id="lightbox" aria-label="Screenshot viewer">
  <button class="lb-close" type="button" aria-label="Close">&times;</button>
  <img id="lb-img" src="" alt="">
  <p id="lb-cap"></p>
</dialog>

<?php require __DIR__ . "/footer.php";
