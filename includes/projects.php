<?php
// includes/projects.php: ONE place that holds every project.
// The home page cards, the projects page and each project's info page all read from this list,
// so to change a project you edit it here and everything follows.
//
//  slug      short name, used for the image names (assets/images/projects/<slug>-card.webp, -hero.webp, -1.webp ...)
//  page      the project's info page          demo   live site (leave "" if there is none)
//  banner    label across the top of the card  label  heading above the chips      items  the chips
//  summary   one sentence under the title      overview  paragraphs                 built  bullet list
//  shots     screenshots: [caption, ...] in order (files <slug>-1.webp, <slug>-2.webp ...)   cols = columns on desktop
$projects = [
    [
        "slug"     => "eats",
        "title"    => "SBWL Eats",
        "page"     => "/eats-page.php",
        "demo"     => "https://sbwleatsdemo.siyantumba.co.za",
        "banner"   => "Live work project",
        "label"    => "What I learnt",
        "items"    => ["HTML", "CSS", "JavaScript", "JSON", "PHP", "phpMyAdmin", "Google Cloud"],
        "alt"      => "SBWL Eats driver dashboard shown on a laptop",
        "summary"  => "A food delivery platform with separate experiences for customers, shops and drivers.",
        "role"     => "Web application and backend programming",
        "type"     => "Work project at Utopianex Technologies",
        "overview" => [
            "SBWL Eats is a food delivery platform that I work on as part of the team at Utopianex Technologies. Customers browse local shops and place orders, shops manage their menu and incoming orders, and drivers accept and deliver them.",
            "It works on the web and in mobile apps, so the same service runs on a phone or a computer. Because it is a work project, I describe my part in it here rather than share the code.",
        ],
        "built_title" => "What I worked on",
        "built"    => [
            "Pages and features for the customer, shop and driver sides of the web application",
            "The PHP backend and the API endpoints used by the web and mobile apps",
            "The MySQL database, managed with phpMyAdmin",
            "A light and dark theme across all three portals",
            "Document verification for shops and drivers, with upload and status badges",
            "Online payments and payouts, with Paystack and PayFast",
            "Driver tools such as online and offline status, a shift tracker and a map with the route to follow",
        ],
        "shots"    => [
            "Sign in or create an account, then choose how to use the app: as a customer, a merchant or a driver.",
            "Customer side: browse stores and special offers, open a shop to see its menu and opening hours, and manage your profile.",
            "A shop dashboard, checkout with delivery or collection, and the driver dashboard with an online status and performance cards.",
            "Verification documents, a checkout total and the driver map with the route to the customer.",
        ],
        "cols"     => 2,
    ],
    [
        "slug"     => "siphosethu",
        "title"    => "Siphosethu Co-op website",
        "page"     => "/siphosethu-page.php",
        "demo"     => "https://siphosethudemo.siyantumba.co.za",
        "banner"   => "Client website",
        "label"    => "What I learnt",
        "items"    => ["HTML", "CSS", "JavaScript", "Domains", "DNS"],
        "alt"      => "Siphosethu Co-op home page shown on a laptop",
        "summary"  => "A website for a South African consumer co-operative, with a solar calculator and a clean energy timeline.",
        "role"     => "Design, build and launch",
        "type"     => "Client website",
        "overview" => [
            "Siphosethu Consumers for Development is a South African consumer co-operative that advances informed decisions, fair treatment and sustainable community development. Their website explains who they are and helps visitors understand clean energy in a simple, practical way.",
            "I designed and built the site for them, and worked with the domain and DNS settings to put it online. It is a plain HTML, CSS and JavaScript website that works well on phones.",
        ],
        "built_title" => "What the site includes",
        "built"    => [
            "A home page with a clear headline, calls to action and a short introduction to the co-op",
            "A solar calculator that estimates the panels, battery and inverter a home might need",
            "An expandable clean energy timeline that visitors can tap through",
            "A benefits of clean energy section and a latest news section",
            "A contact page with a form",
            "The same header and footer on every page, and a layout that adapts to any screen",
        ],
        "shots"    => [
            "The home page and the About section on a phone: a clear headline, two calls to action and a short introduction.",
            "The solar calculator result for a home, followed by the start of the global clean energy timeline.",
            "The expandable Clean Energy: A Brief History timeline and the list of clean energy benefits.",
        ],
        "cols"     => 3,
    ],
    [
        "slug"     => "portfolio",
        "title"    => "My portfolio",
        "page"     => "/info.php",
        "demo"     => "",
        "banner"   => "Personal project",
        "label"    => "Built with",
        "items"    => ["HTML", "CSS", "JavaScript", "PHP", ".htaccess", "cPanel", "DNS"],
        "alt"      => "My portfolio home page shown on a laptop",
        "summary"  => "This website: built to show my skills and my work in one place.",
        "role"     => "Design, code, hosting and domain",
        "type"     => "Personal project",
        "overview" => [
            "The purpose of this site is to demonstrate my abilities and showcase my work in one place. It shows my skills as an IT Systems Technician and a full stack web developer, and gives employers and clients a way to see my projects, demos and experience for themselves.",
            "It is built with plain HTML, CSS, JavaScript and PHP, with no website builder and no ready-made page templates. The site also covers the parts around the code: domain and DNS setup, hosting, HTTPS, URL rewriting and search engine verification.",
        ],
        "built_title" => "What it shows",
        "built"    => [
            "A responsive design that works on phones, tablets and desktops",
            "Server-side PHP, with one shared header and footer used by every page",
            "Plain JavaScript, with no libraries, for the typed headline, the mobile menu and the welcome window",
            "Hosting and domain skills: cPanel, DNS records, SSL and subdomains",
        ],
        "groups"   => [
            "Front end" => ["HTML5", "CSS3 (Grid, Flexbox, custom properties)", "JavaScript (vanilla)", "Responsive layout", "SVG icons"],
            "Back end"  => ["PHP", "Reusable header and footer includes", "Page content built from PHP arrays and loops"],
            "Server and hosting" => ["cPanel shared hosting", "LiteSpeed web server", ".htaccess rewrite rules", "SSL/TLS (HTTPS)", "DNS records", "Subdomains"],
            "Tools"    => ["VS Code", "Git and GitHub", "Google Search Console", "Google Fonts (Manrope, JetBrains Mono)"],
        ],
        "planned"  => ["MySQL database behind the projects, certificates and blog", "A blog for tech posts and write-ups", "A contact form"],
        "shots"    => [
            "The home page: my roles, what I do and a way to see my projects.",
            "The About page: photo, certification badges, a short introduction and a mini CV.",
            "The Projects page: a card for each project, with links to its info page.",
        ],
        "cols"     => 3,
    ],
    [
        "slug"     => "hostreal",
        "title"    => "Host Real",
        "page"     => "/hostreal-page.php",
        "demo"     => "https://hostreal.siyantumba.co.za",
        "banner"   => "Business website",
        "label"    => "Built with",
        "items"    => ["HTML", "CSS", "JavaScript", "PHP", "cPanel", "DNS"],
        "alt"      => "Host Real home page shown on a laptop",
        "summary"  => "The website for my web services brand, with ready-made demo sites for different kinds of business.",
        "role"     => "Design, code, hosting and domain",
        "type"     => "Business website",
        "overview" => [
            "Host Real is my own web services brand. The website explains the offer in plain language: a free 5 page static website design, then R150 once for deployment and domain registration, and R40 a month to keep it running and updated.",
            "It lists the services (website design, web hosting, domain registration, SEO, branding and email-only hosting) and links to five live demo websites, so small businesses can see what theirs could look like before they decide.",
        ],
        "built_title" => "What I built",
        "built"    => [
            "The landing, services and contact pages, with a contact form that emails me",
            "Five ready-made demo websites: salon, food shop, trades, church and car wash",
            "One shared template engine for the demos, where each business only needs a small settings file",
            "An invoice template with a pay link and QR code",
            "A mobile menu, clear calls to action and a layout that works on any screen",
        ],
        "shots"    => [
            "The home page on a phone and a tablet: headline, the offer and a call to action.",
            "The home page and the Services page on a phone, where each service lists what is included, its price and an enquiry button.",
            "Live demo websites to choose from, and the contact form with a service drop-down.",
        ],
        "cols"     => 3,
    ],
];

// ---- Helpers ----
function proj_img(array $p, string $kind): string {          // $kind: card, hero, or a number for a screenshot
    return "/assets/images/projects/" . $p["slug"] . "-" . $kind . ".webp";
}

// Draws the grid of project cards (used on the home page and the projects page).
function project_cards(array $projects): string {
    $arrow = '<svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>';
    $out = '<div class="projects">';
    foreach ($projects as $p) {
        $img = proj_img($p, "card");
        $out .= '<article class="proj">'
            . '<img class="proj-img" src="' . asset($img) . '" alt="' . htmlspecialchars($p["alt"]) . '" width="900" height="545" loading="lazy">'
            . '<p class="banner"><span class="dot" aria-hidden="true"></span>' . htmlspecialchars($p["banner"]) . '</p>'
            . '<div class="proj-body">'
            . '<h3><a class="proj-link" href="' . htmlspecialchars($p["page"]) . '">' . htmlspecialchars($p["title"]) . '</a></h3>'
            . '<p class="proj-label">' . htmlspecialchars($p["label"]) . '</p><ul class="chips">';
        foreach ($p["items"] as $item) $out .= '<li>' . htmlspecialchars($item) . '</li>';
        $out .= '<li class="more">and more</li></ul>'
            . '<p class="proj-cta">View project ' . $arrow . '</p></div></article>';
    }
    return $out . '</div>';
}
