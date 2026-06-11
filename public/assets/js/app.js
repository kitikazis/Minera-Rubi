// ============================================================
//  Minera MH — Planta El Rubí · Interacciones y animaciones
//  Mejora progresiva: el sitio funciona sin JS; esto lo realza.
// ============================================================
(function () {
  'use strict';

  // ---- 1) Nav: sólido al hacer scroll (solo en home con hero) ----
  var nav = document.getElementById('nav');
  if (nav && document.body.classList.contains('has-hero')) {
    var onScroll = function () {
      nav.classList.toggle('scrolled', window.scrollY > 60);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ---- 2) Menú móvil ----
  var burger = document.getElementById('hamburger');
  var mobile = document.getElementById('navMobile');
  if (burger && mobile) {
    burger.addEventListener('click', function () {
      mobile.classList.toggle('open');
    });
  }

  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // ---- 3) Aparición al entrar en viewport (fade-up) ----
  var revealSel = '.section-head,.stat,.explore-card,.service-card,.step,' +
    '.value-card,.news-card,.cert-badge,.about-grid>div,.map-wrap,' +
    '.dept-card,.info-row,.quote-inner,.cta-inner';
  var revealEls = Array.prototype.slice.call(document.querySelectorAll(revealSel));

  // Escalona los hijos de cada grupo (efecto cascada)
  ['.grid-2', '.grid-3', '.grid-4', '.grid-5', '.stats', '.process', '.certs', '.dept-list']
    .forEach(function (sel) {
      document.querySelectorAll(sel).forEach(function (group) {
        Array.prototype.forEach.call(group.children, function (child, i) {
          child.style.transitionDelay = (i * 0.09) + 's';
        });
      });
    });

  if (reduce || !('IntersectionObserver' in window)) {
    revealEls.forEach(function (el) { el.classList.add('in'); });
  } else {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); }
      });
    }, { threshold: 0.12 });
    revealEls.forEach(function (el) { io.observe(el); });
  }

  // ---- 4) Contador animado de estadísticas ----
  var statsBox = document.querySelector('.stats');
  if (statsBox) {
    var runCounters = function () {
      statsBox.querySelectorAll('.stat-val').forEach(function (el) {
        var m = el.textContent.trim().match(/^(\d+)(.*)$/);
        if (!m) return;
        var target = parseInt(m[1], 10), suffix = m[2];
        if (reduce) { el.textContent = target + suffix; return; }
        var dur = 1800, start = null;
        var step = function (ts) {
          if (!start) start = ts;
          var p = Math.min((ts - start) / dur, 1);
          var ease = 1 - Math.pow(1 - p, 3);
          el.textContent = Math.floor(ease * target) + suffix;
          if (p < 1) requestAnimationFrame(step);
          else el.textContent = target + suffix;
        };
        requestAnimationFrame(step);
      });
    };
    if (!('IntersectionObserver' in window)) {
      runCounters();
    } else {
      var cio = new IntersectionObserver(function (entries) {
        if (entries[0].isIntersecting) { runCounters(); cio.disconnect(); }
      }, { threshold: 0.4 });
      cio.observe(statsBox);
    }
  }

  // ---- 5) Partículas de polvo dorado en el hero ----
  var canvas = document.getElementById('heroCanvas');
  if (canvas && !reduce) {
    var ctx = canvas.getContext('2d');
    var dpr = window.devicePixelRatio || 1;
    var W = 0, H = 0, pts = [];

    var resize = function () {
      W = canvas.offsetWidth; H = canvas.offsetHeight;
      canvas.width = W * dpr; canvas.height = H * dpr;
      ctx.setTransform(1, 0, 0, 1, 0, 0); ctx.scale(dpr, dpr);
    };
    var init = function () {
      pts = [];
      for (var i = 0; i < 140; i++) {
        pts.push({
          x: Math.random() * W, y: Math.random() * H,
          r: Math.random() * 2.3 + 0.4,
          vy: Math.random() * 0.45 + 0.12,
          vx: (Math.random() - 0.5) * 0.22,
          phase: Math.random() * Math.PI * 2,
          spd: Math.random() * 0.02 + 0.007
        });
      }
    };
    var draw = function () {
      ctx.clearRect(0, 0, W, H);
      for (var i = 0; i < pts.length; i++) {
        var p = pts[i];
        p.y -= p.vy; p.x += p.vx; p.phase += p.spd;
        var a = (Math.sin(p.phase) * 0.38 + 0.62) * 0.72;
        if (p.y < -5) { p.y = H + 5; p.x = Math.random() * W; }
        if (p.x < -5) p.x = W + 5;
        if (p.x > W + 5) p.x = -5;
        ctx.save();
        ctx.globalAlpha = a;
        ctx.fillStyle = '#EBAF00';
        ctx.shadowColor = '#EBAF00';
        ctx.shadowBlur = p.r * 5;
        ctx.beginPath(); ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2); ctx.fill();
        ctx.restore();
      }
      requestAnimationFrame(draw);
    };
    resize(); init(); draw();
    window.addEventListener('resize', function () { resize(); init(); });
  }
})();
