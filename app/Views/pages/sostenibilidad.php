<?php /** @var array $data */ $banner = $data['banners']['sostenibilidad']; ?>

<?php require BASE_PATH . '/app/Views/partials/banner.php'; ?>

<section class="section">
  <div class="container container--narrow">
    <div class="section-head">
      <p class="eyebrow">— COMPROMISO —</p>
      <h2><?= e($data['certsTitle']) ?></h2>
      <p class="section-sub"><?= e($data['certsSub']) ?></p>
    </div>
    <div class="certs">
      <?php foreach ($data['certs'] as $c): ?>
        <div class="cert-badge">
          <div class="cert-dot"></div>
          <div><?= e($c) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require BASE_PATH . '/app/Views/partials/cta.php'; ?>
