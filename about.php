<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Siyabonga Ntumba | Portfolio coming soon</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
<style>
  :root {
    --bg: #141a2e;
    --panel: #1b2340;
    --edge: #2c3862;
    --text: #e6ebfa;
    --muted: #8d98c0;
    --pink: #ff7a9c;
    --teal: #5fe3cf;
    --gold: #ffd479;
    --blue: #8fb4ff;
  }
  * { box-sizing: border-box; margin: 0; }
  html, body { min-height: 100%; }
  body {
    background: radial-gradient(900px 500px at 15% 0%, #222d57 0%, transparent 60%), var(--bg);
    color: var(--text);
    font-family: "Space Grotesk", system-ui, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    padding: 32px 20px;
  }
  main { width: 100%; max-width: 640px; }
  h1 {
    font-size: clamp(2.2rem, 7vw, 3.6rem);
    line-height: 1.05;
    font-weight: 700;
    letter-spacing: -0.02em;
  }
  .sub { color: var(--muted); margin: 14px 0 28px; font-size: 1.1rem; max-width: 46ch; line-height: 1.5; }

  .editor {
    background: var(--panel);
    border: 1px solid var(--edge);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 24px 60px rgba(0,0,0,.35);
  }
  .bar { display: flex; align-items: center; gap: 8px; padding: 12px 14px; border-bottom: 1px solid var(--edge); }
  .dot { width: 11px; height: 11px; border-radius: 50%; }
  .dot:nth-child(1) { background: var(--pink); }
  .dot:nth-child(2) { background: var(--gold); }
  .dot:nth-child(3) { background: var(--teal); }
  .file { margin-left: 8px; font-family: "Fira Code", monospace; font-size: .8rem; color: var(--muted); }

  pre#code {
    font-family: "Fira Code", ui-monospace, Consolas, monospace;
    font-size: clamp(.72rem, 2.6vw, .92rem);
    line-height: 1.75;
    padding: 18px 8px 18px 0;
    min-height: 19.2em;
    overflow-x: auto;
    counter-reset: ln;
  }
  .line { display: block; white-space: pre; padding-left: 3.2em; position: relative; }
  .line::before {
    counter-increment: ln;
    content: counter(ln);
    position: absolute; left: 0; width: 2.2em; text-align: right;
    color: #4a5686;
  }
  .k { color: var(--pink); } .v { color: var(--teal); } .f { color: var(--blue); }
  .s { color: var(--gold); } .o { color: var(--text); } .c { color: #6c789f; font-style: italic; }
  .cursor {
    display: inline-block; width: .6em; height: 1.1em; vertical-align: text-bottom;
    background: var(--teal); margin-left: 1px; animation: blink 1s steps(1) infinite;
  }
  @keyframes blink { 50% { opacity: 0; } }

  .status { padding: 12px 16px 16px; border-top: 1px solid var(--edge); }
  .status-row { display: flex; justify-content: space-between; font-family: "Fira Code", monospace; font-size: .8rem; color: var(--muted); margin-bottom: 8px; }
  .track { height: 6px; background: #10152a; border-radius: 99px; overflow: hidden; }
  #fill { height: 100%; width: 0; background: linear-gradient(90deg, var(--teal), var(--blue)); border-radius: 99px; transition: width .15s linear; }

  footer { margin-top: 22px; color: var(--muted); font-size: .9rem; }
  a { color: var(--teal); }
  a:focus-visible { outline: 2px solid var(--gold); outline-offset: 3px; }
  @media (prefers-reduced-motion: reduce) { .cursor { animation: none; } #fill { transition: none; } }
</style>
</head>
<body>
<main>
  <h1>About page</h1>
  <p class="sub">My full about page is currently under construction.</p>

  <div class="editor" role="img" aria-label="A code editor typing out the portfolio's setup code">
    <div class="bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="file">portfolio.php</span></div>
    <pre id="code" aria-hidden="true"></pre>
    <div class="status">
      <div class="status-row"><span id="msg">Building...</span><span id="pct">0%</span></div>
      <div class="track"><div id="fill"></div></div>
    </div>
  </div>

  <footer>siyantumba.co.za &middot; check back soon</footer>
</main>

<script>
(function () {
  var script = [
    [["k","<?php"]],
    [["c","// the portfolio, one piece at a time"]],
    [["v","$site"],["o"," = "],["k","new "],["f","Portfolio"],["o","("],["s","\"Siyabonga Ntumba\""],["o",");"]],
    [["v","$site"],["o","->"],["f","connect"],["o","("],["s","\"mysql\""],["o",");"]],
    [["v","$site"],["o","->"],["f","add"],["o","(["],["s","\"projects\""],["o",", "],["s","\"certificates\""],["o",", "],["s","\"blog\""],["o","]);"]],
    [["o",""]],
    [["k","if "],["o","("],["v","$site"],["o","->"],["f","isReady"],["o","()) {"]],
    [["o","    "],["v","$site"],["o","->"],["f","launch"],["o","();"]],
    [["o","} "],["k","else"],["o"," {"]],
    [["o","    "],["k","echo "],["s","\"Still building...\""],["o",";"]],
    [["o","}"]]
  ];
  var total = 0;
  script.forEach(function (l) { l.forEach(function (p) { total += p[1].length; }); });

  var code = document.getElementById("code");
  var fill = document.getElementById("fill");
  var pct = document.getElementById("pct");
  var msg = document.getElementById("msg");
  var reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  function setProgress(n) {
    var p = Math.round((n / total) * 100);
    fill.style.width = p + "%";
    pct.textContent = p + "%";
  }

  function run() {
    code.textContent = "";
    msg.textContent = "Building...";
    var typed = 0, li = 0, pi = 0, ci = 0, lineEl, spanEl;
    var cursor = document.createElement("span");
    cursor.className = "cursor";

    function newLine() {
      lineEl = document.createElement("span");
      lineEl.className = "line";
      code.appendChild(lineEl);
      pi = 0; ci = 0; spanEl = null;
    }
    newLine();

    function step() {
      var line = script[li];
      if (!line) {
        msg.textContent = "Almost there. Check back soon.";
        setTimeout(run, 4500);
        return;
      }
      var part = line[pi];
      if (!part) {
        li++;
        if (script[li]) newLine();
        setTimeout(step, 260);
        return;
      }
      if (!spanEl) {
        spanEl = document.createElement("span");
        spanEl.className = part[0];
        lineEl.appendChild(spanEl);
      }
      if (ci < part[1].length) {
        spanEl.textContent += part[1].charAt(ci);
        ci++; typed++;
        lineEl.appendChild(cursor);
        setProgress(typed);
        setTimeout(step, 28 + Math.random() * 45);
      } else {
        pi++; ci = 0; spanEl = null;
        step();
      }
    }
    step();
  }

  if (reduce) {
    script.forEach(function (l) {
      var el = document.createElement("span");
      el.className = "line";
      l.forEach(function (p) {
        var s = document.createElement("span");
        s.className = p[0]; s.textContent = p[1]; el.appendChild(s);
      });
      code.appendChild(el);
    });
    setProgress(total);
    msg.textContent = "Almost there. Check back soon.";
  } else {
    run();
  }
})();
</script>
</body>
</html>