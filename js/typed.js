// js/typed.js: types out each role one after another, with the blinking cursor following the letters.
(function () {
  var el = document.getElementById("typed");
  if (!el) return;

  // Visitors who prefer reduced motion keep the plain text from the page.
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

  var words;
  try { words = JSON.parse(el.getAttribute("data-words")); } catch (e) { return; }
  if (!words || !words.length) return;

  var w = 0;            // which role we're on
  var i = 0;            // how many letters of it are showing
  var deleting = false;

  el.textContent = "";  // clear the plain text, then start typing

  function tick() {
    var word = words[w];

    if (!deleting) {
      i++;
      el.textContent = word.slice(0, i);
      if (i === word.length) {            // finished typing: hold, then start deleting
        deleting = true;
        return setTimeout(tick, 1800);
      }
      return setTimeout(tick, 70 + Math.random() * 60);
    }

    i--;
    el.textContent = word.slice(0, i);
    if (i === 0) {                        // finished deleting: next role
      deleting = false;
      w = (w + 1) % words.length;
      return setTimeout(tick, 350);
    }
    setTimeout(tick, 35);
  }

  setTimeout(tick, 400);
})();
