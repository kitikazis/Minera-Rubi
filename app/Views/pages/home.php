<?php /** @var array $data */ $hero = $data['hero']; ?>

<!-- HERO -->
<section class="hero" style="background-image:linear-gradient(160deg, rgba(0,0,0,0.68) 0%, rgba(0,0,0,0.42) 55%, rgba(235,175,0,0.08) 100%), url('<?= e($hero['image']) ?>');">
  <canvas class="hero-canvas" id="heroCanvas"></canvas>
  <div class="hero-content">
    <p class="eyebrow eyebrow--gold"><?= e($hero['since']) ?></p>
    <h1 class="hero-title">
      <?= e($hero['headline'][0]) ?><br><span><?= e($hero['headline'][1]) ?></span>
    </h1>
    <p class="hero-sub"><?= e($hero['sub']) ?></p>
    <div class="hero-ctas">
      <a class="btn btn--primary" href="<?= url('servicios') ?>"><?= e($hero['cta1']) ?></a>
      <a class="btn btn--outline" href="<?= url('contacto') ?>"><?= e($hero['cta2']) ?></a>
    </div>
  </div>
  <a class="scroll-dot" href="#stats" aria-label="Ver más"><span class="dot-line"></span><span class="dot"></span></a>
</section>

<?php require BASE_PATH . '/app/Views/partials/stats.php'; ?>

<!-- EXPLORE -->
<section class="section section--gray">
  <div class="container">
    <div class="section-head">
      <p class="eyebrow">— NAVEGA —</p>
      <h2><?= e($data['exploreTitle']) ?></h2>
      <p class="section-sub"><?= e($data['exploreSub']) ?></p>
    </div>
    <div class="grid-4">
      <?php foreach ($data['explore'] as $i => $c): ?>
        <a class="explore-card" href="<?= url($c['route']) ?>">
          <div class="explore-num"><?= e(str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT)) ?></div>
          <h3><?= e($c['label']) ?></h3>
          <p><?= e($c['desc']) ?></p>
          <span class="explore-link">Ver →</span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require BASE_PATH . '/app/Views/partials/quote.php'; ?>
