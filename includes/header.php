<?php
// includes/header.php: shared <head>, top navigation and the opening <main> tag.
// Every page sets $pageTitle and $pageDescription (and $activePage, to highlight its menu link)
// BEFORE requiring this file.
// "??" means: use the page's value if it set one, otherwise use the default.
$siteName        = "Siyabonga Ntumba";
$pageTitle       = $pageTitle ?? $siteName . " | Developer Portfolio";
$pageDescription = $pageDescription ?? "Portfolio of Siyabonga Ntumba, IT Systems Technician and full stack web developer.";

// Pages of the site, in menu order. Used by the top menu AND the footer links.
$navItems = [
    "services" => "Services",
    "about"    => "About",
    "projects" => "Projects",
    "blog"     => "Blog",
    "contact"  => "Contact",
];

// Every link to a page goes through here. When you add clean URLs later
// (e.g. /about instead of /about.php) you change this one line and every link follows.
function page_url(string $page): string {
    return "/" . $page . ".php";
}

// Adds ?v=<last-changed time> to a file so browsers fetch it fresh after every upload.
function asset(string $path): string {
    $file = dirname(__DIR__) . $path;
    return $path . (is_file($file) ? "?v=" . filemtime($file) : "");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($pageTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
<link rel="icon" href="<?= asset('/favicon.ico') ?>" sizes="48x48">
<link rel="icon" href="<?= asset('/favicon.svg') ?>" type="image/svg+xml" sizes="any">
<link rel="apple-touch-icon" href="<?= asset('/apple-touch-icon.png') ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<script>document.documentElement.classList.add("js");</script>
<link rel="stylesheet" href="<?= asset('/css/style.css') ?>">
<script src="<?= asset('/js/nav.js') ?>" defer></script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "Siyabonga Ntumba",
  "url": "https://siyantumba.co.za",
  "jobTitle": "IT Systems Technician & Full Stack Web Developer",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Midrand",
    "addressRegion": "Gauteng",
    "addressCountry": "ZA"
  },
  "sameAs": [
    "https://github.com/SIYABONGANTUMBA"
    "https://www.linkedin.com/in/s-ntumba"
  ]
  
  
}
</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<div class="wrap">

  <nav class="site-nav" aria-label="Main">
    <a class="logo" href="/">Siyabonga<span>.</span></a>
    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-menu" aria-label="Menu">
      <span class="bars" aria-hidden="true"><span></span><span></span><span></span></span>
    </button>
    <ul id="site-menu">
      <?php foreach ($navItems as $key => $label): ?>
        <li><a href="<?= page_url($key) ?>"<?= ($activePage ?? "") === $key ? ' aria-current="page"' : "" ?>><?= htmlspecialchars($label) ?></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>

  <main id="main">
