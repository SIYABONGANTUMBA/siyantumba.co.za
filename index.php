<?php
// =====================================================================
// index.php: the baseline page. Every other page follows this pattern:
//   1. Set the page settings and data
//   2. require the header
//   3. Write the page content
//   4. require the footer
// =====================================================================

// ---- 1. Page settings (read by includes/header.php) ----
$pageTitle       = "Siyabonga Ntumba | IT Systems Technician & Full Stack Developer";
$intro           = "I am an aspiring IT Professional with a willingness to learn.";
$pageDescription = $intro;
$activePage      = "";                 // which menu link to highlight (the home page has none)
$pageScripts     = ["/js/typed.js", "/js/welcome.js"];   // extra scripts for this page only

// ---- Page data (later this will come from your MySQL database) ----
$roles  = ["IT Systems Technician", "Full stack web developer", "Junior Software dev"];
$skills = ["PHP", "MySQL", "JavaScript", "HTML & CSS", "Git", "Networking", "Hardware repair", "AI tools and simulation/testing"];

// "What I do" cards. "image" is a file inside /assets/images/.
$services = [
    ["title" => "Networking",
     "text"  => "Setting up and fixing networks, cabling and connections so people and devices stay online.",
     "image" => "networking-hero.jpg"],
    ["title" => "Hardware and IT support",
     "text"  => "Repairing, upgrading and troubleshooting computers and devices, from fault finding to replacing parts.",
     "image" => "hardware-hero.jpg"],
    ["title" => "Full stack development",
     "text"  => "Building websites and web applications with PHP, MySQL and JavaScript, from the database to the design.",
     "image" => "full-stack-dev-hero.jpg"],
    ["title" => "System administration",
     "text"  => "Using AI tools, version control and simulation to optimize workflow and productivity.",
     "image" => "ai-prompting-hero.jpg"],
];

// The projects live in includes/projects.php (one list used by the cards and by each info page).
require_once __DIR__ . "/includes/projects.php";

// ---- 2. Header (opens <html>, <body>, the navigation and <main>) ----
require __DIR__ . "/includes/header.php";
?>

<!-- ---- 3. Page content ---- -->

<header class="hero">
  <p class="eyebrow fade"><span aria-hidden="true">&gt; <span id="typed" data-words="<?= htmlspecialchars(json_encode($roles), ENT_QUOTES) ?>"><?= htmlspecialchars(implode(" · ", $roles)) ?></span></span><span class="sr-only"><?= htmlspecialchars(implode(", ", $roles)) ?></span></p>
  <h1 class="fade d2"><?= htmlspecialchars($siteName) ?></h1>
  <p class="intro fade d3"><?= htmlspecialchars($intro) ?></p>
  <div class="btns fade d4">
    <a class="btn primary" href="#projects">View projects</a>
    <a class="btn" href="#contact">Get in touch</a>
  </div>
  <div class="skills fade d4">
    <?php foreach ($skills as $skill): ?>
      <span class="chip"><?= htmlspecialchars($skill) ?></span>
    <?php endforeach; ?>
  </div>
</header>

<section id="services">
  <h2>What I do</h2>
  <p class="lead">Software, hardware and networks: I can build the application and look after what it runs on.</p>
  <div class="services">
    <?php foreach ($services as $svc): ?>
      <article class="svc">
        <img src="/assets/images/<?= htmlspecialchars($svc["image"]) ?>" alt="" width="1280" height="853" loading="lazy">
        <h3><?= htmlspecialchars($svc["title"]) ?></h3>
        <p><?= htmlspecialchars($svc["text"]) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
  <p class="section-more"><a class="btn more" href="<?= page_url("services") ?>">See all services <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></p>
</section>

<section id="about">
  <h2>About</h2>
  <p class="lead"> Learn more about my journey, skills, experiences and aspirations.</p>
  <p class="section-more"><a class="btn more" href="<?= page_url("about") ?>">Learn more. <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></p>
</section>

<section id="projects">
  <h2>Projects &amp; demos</h2>
  <p class="lead">A few things I've built, and what I learnt from each one.</p>
  <?= project_cards($projects) ?>
  <p class="section-more"><a class="btn more" href="<?= page_url("projects") ?>">See all projects &amp; demos <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></p>
</section>

<section id="contact">
  <h2>Contact</h2>
  <p class="lead">Want to work together or just say hi? You can reach me by phone, email or any of the links in the footer below.</p>
  <p class="section-more"><a class="btn more" href="<?= page_url("contact") ?>">Contact me <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></p>
</section>

<!-- Welcome pop-up. Hidden until js/welcome.js shows it, so visitors without JavaScript never see it. -->
<div class="welcome" id="welcome" role="dialog" aria-modal="true" aria-labelledby="welcome-title" hidden>
  <div class="welcome-window" tabindex="-1">
    <div class="welcome-bar">
      <div class="lights">
        <button type="button" class="light red" data-close aria-label="Close"></button>
        <span class="light yellow" aria-hidden="true"></span>
        <span class="light green" aria-hidden="true"></span>
      </div>
      <span class="welcome-name" aria-hidden="true">welcome</span>
    </div>
    <div class="welcome-body">
      <h2 id="welcome-title">Hi there, welcome to my portfolio</h2>
      <p>If you are a recruiter, you will find my resume in the About section.</p>
      <button type="button" class="btn primary" data-close>Close</button>
    </div>
  </div>
</div>

<?php
// ---- 4. Footer (closes <main>, shows the footer, loads $pageScripts) ----
require __DIR__ . "/includes/footer.php";
