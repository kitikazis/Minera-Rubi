<?php /** @var array $data */ $banner = $data['banners']['empresa']; $about = $data['about']; ?>

<?php require BASE_PATH . '/app/Views/partials/banner.php'; ?>

<!-- HISTORIA + MISIÓN/VISIÓN -->
<section class="section">
  <div class="container about-grid">
    <div>
      <p class="eyebrow">— TRAYECTORIA —</p>
      <h2><?= e($about['historyTitle']) ?></h2>
      <?php foreach ($about['history'] as $p): ?>
        <p class="about-text"><?= e($p) ?></p>
      <?php endforeach; ?>
    </div>
    <div class="mv-stack">
      <div class="mv-card mv-card--dark">
        <h3><?= e($about['misionLabel']) ?></h3>
        <p><?= e($about['mision']) ?></p>
      </div>
      <div class="mv-card mv-card--light">
        <h3><?= e($about['visionLabel']) ?></h3>
        <p><?= e($about['vision']) ?></p>
      </div>
    </div>
  </div>
</section>

<!-- VALORES -->
<section class="section section--dark">
  <div class="container">
    <div class="section-head">
      <p class="eyebrow">— IDENTIDAD —</p>
      <h2 class="on-dark"><?= e($data['valuesTitle']) ?></h2>
    </div>
    <div class="grid-5">
      <?php foreach ($data['values'] as $v): ?>
        <div class="value-card">
          <div class="value-dot"></div>
          <h3><?= e($v['title']) ?></h3>
          <p><?= e($v['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require BASE_PATH . '/app/Views/partials/stats.php'; ?>

<!-- NOTICIAS -->
<section class="section section--gray">
  <div class="container">
    <div class="section-head">
      <p class="eyebrow">— ACTUALIDAD —</p>
      <h2><?= e($data['newsTitle']) ?></h2>
      <p class="section-sub"><?= e($data['newsSub']) ?></p>
    </div>
    <div class="grid-3">
      <?php foreach ($data['news'] as $n): ?>
        <div class="news-card">
          <div class="news-bar"></div>
          <div class="news-body">
            <span class="news-date"><?= e($n['date']) ?></span>
            <h3><?= e($n['title']) ?></h3>
            <p><?= e($n['desc']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require BASE_PATH . '/app/Views/partials/cta.php'; ?>
