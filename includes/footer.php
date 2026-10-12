<?php
// includes/footer.php: closes <main>, shows the shared footer, loads page scripts,
// and closes the tags that header.php opened.
// All the contact details live in these arrays, so you only edit them here.

$socials = [
    ["label" => "LinkedIn", "url" => "https://www.linkedin.com/in/s-ntumba",
     "icon" => '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>'],
    ["label" => "Facebook", "url" => "https://www.facebook.com/profile.php?id=100090755975915",
     "icon" => '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12z"/></svg>'],
    ["label" => "GitHub", "url" => "https://github.com/SIYABONGANTUMBA",
     "icon" => '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>'],
];

$iconPhone = '<svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>';
$iconMail  = '<svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>';
$iconPin   = '<svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>';
?>
  </main>

  <footer class="site-footer">
    <div class="foot-grid">

      <div>
        <a class="logo" href="/">Siyabonga<span>.</span></a>
        <p class="foot-about">IT Systems Technician and full stack web developer based in Midrand, Gauteng.</p>
        <div class="social">
          <?php foreach ($socials as $s): ?>
            <a href="<?= htmlspecialchars($s["url"]) ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= htmlspecialchars($s["label"]) ?>" title="<?= htmlspecialchars($s["label"]) ?>"><?= $s["icon"] ?></a>
          <?php endforeach; ?>
        </div>
      </div>

      <nav aria-label="Footer">
        <h4>Quick links</h4>
        <ul>
          <li><a href="/">Home</a></li>
          <?php foreach ($navItems as $key => $label): ?>
            <li><a href="<?= page_url($key) ?>"><?= htmlspecialchars($label) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <div>
        <h4>Contact</h4>
        <ul class="contact-list">
          <li><?= $iconPhone ?><a href="tel:+27718658849">+27 71 865 8849</a></li>
          <li><?= $iconMail ?><a href="mailto:contact@siyantumba.co.za">contact@siyantumba.co.za</a></li>
          <li><?= $iconMail ?><a href="mailto:siyabongantumba8@gmail.com">siyabongantumba8@gmail.com</a></li>
          <li><?= $iconPin ?><span>Midrand, Gauteng</span></li>
        </ul>
      </div>

    </div>
    <p class="copy">&copy; <?= date("Y") ?> <?= htmlspecialchars($siteName) ?> &middot; siyantumba.co.za</p>
  </footer>
</div>

<?php
// A page can ask for extra scripts, e.g. $pageScripts = ["/js/typed.js"]; before requiring this file.
foreach (($pageScripts ?? []) as $script): ?>
<script src="<?= asset($script) ?>" defer></script>
<?php endforeach; ?>
</body>
</html>
