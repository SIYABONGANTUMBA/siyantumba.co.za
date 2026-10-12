// js/welcome.js: shows the welcome pop-up when the home page loads.
(function () {
  var box = document.getElementById("welcome");
  if (!box) return;

  var SHOW_DELAY = 600;   // milliseconds to wait after the page loads
  var closeBtns  = box.querySelectorAll("[data-close]");
  var win        = box.querySelector(".welcome-window");

  function open() {
    box.hidden = false;
    document.body.classList.add("modal-open");
    // wait one frame so the fade-in animation can start
    requestAnimationFrame(function () {
      box.classList.add("is-visible");
      win.focus();   // focus the window itself, so screen readers announce it without a focus ring on a button
    });
  }

  function close() {
    box.classList.remove("is-visible");
    document.body.classList.remove("modal-open");
    setTimeout(function () { box.hidden = true; }, 300);
  }

  Array.prototype.forEach.call(closeBtns, function (b) { b.addEventListener("click", close); });

  // Click on the blurred background closes it too
  box.addEventListener("click", function (e) { if (e.target === box) close(); });

  document.addEventListener("keydown", function (e) {
    if (box.hidden) return;
    if (e.key === "Escape") { close(); return; }
    // keep Tab inside the pop-up while it is open
    if (e.key === "Tab") {
      var items = box.querySelectorAll("button");
      var first = items[0], last = items[items.length - 1];
      var active = document.activeElement;
      if (e.shiftKey && (active === first || active === win)) { e.preventDefault(); last.focus(); }
      else if (!e.shiftKey && active === last) { e.preventDefault(); first.focus(); }
    }
  });

  setTimeout(open, SHOW_DELAY);
})();
