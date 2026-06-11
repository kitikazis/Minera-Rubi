<?php /** @var array $data */ $banner = $data['banners']['procesos']; ?>

<?php require BASE_PATH . '/app/Views/partials/banner.php'; ?>

<section class="section section--soft">
  <div class="container">
    <div class="section-head">
      <p class="eyebrow">— OPERACIONES —</p>
      <h2><?= e($data['processTitle']) ?></h2>
      <p class="section-sub"><?= e($data['processSub']) ?></p>
    </div>
    <div class="process">
      <div class="process-line"></div>
      <?php foreach ($data['process'] as $step): ?>
        <div class="step">
          <div class="step-num"><?= e($step['num']) ?></div>
          <h3><?= e($step['title']) ?></h3>
          <p><?= e($step['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require BASE_PATH . '/app/Views/partials/stats.php'; ?>
<?php require BASE_PATH . '/app/Views/partials/cta.php'; ?>
