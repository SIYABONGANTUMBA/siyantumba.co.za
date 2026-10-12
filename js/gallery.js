// Screenshot viewer: opens a screenshot larger in a dialog. Without JavaScript the links just open the image.
(function () {
  var box = document.getElementById("lightbox");
  if (!box || typeof box.showModal !== "function") return;
  var img = document.getElementById("lb-img");
  var cap = document.getElementById("lb-cap");
  document.addEventListener("click", function (e) {
    var link = e.target.closest(".shot-link");
    if (link) {
      e.preventDefault();
      img.src = link.getAttribute("href");
      img.alt = link.getAttribute("data-caption") || "";
      cap.textContent = link.getAttribute("data-caption") || "";
      box.showModal();
      return;
    }
    // Close on the close button, or on a click outside the picture.
    if (e.target.closest(".lb-close") || e.target === box) box.close();
  });
  box.addEventListener("close", function () { img.removeAttribute("src"); });
})();
