// js/nav.js: opens and closes the dropdown menu on small screens.
(function () {
  var nav    = document.querySelector(".site-nav");
  var button = nav && nav.querySelector(".nav-toggle");
  if (!button) return;

  function setOpen(open) {
    nav.classList.toggle("is-open", open);
    button.setAttribute("aria-expanded", open ? "true" : "false");
    button.setAttribute("aria-label", open ? "Close menu" : "Menu");
  }

  button.addEventListener("click", function () {
    setOpen(!nav.classList.contains("is-open"));
  });

  // Close after choosing a link
  nav.addEventListener("click", function (e) {
    if (e.target.closest("#site-menu a")) setOpen(false);
  });

  // Close when tapping anywhere outside the menu
  document.addEventListener("click", function (e) {
    if (!nav.contains(e.target)) setOpen(false);
  });

  // Close with Escape and put focus back on the button
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && nav.classList.contains("is-open")) {
      setOpen(false);
      button.focus();
    }
  });

  // If the screen grows to desktop width, reset
  window.matchMedia("(min-width: 721px)").addEventListener("change", function (e) {
    if (e.matches) setOpen(false);
  });
})();
