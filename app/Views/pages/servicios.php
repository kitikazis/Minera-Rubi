<?php /** @var array $data */ $banner = $data['banners']['servicios']; ?>

<?php require BASE_PATH . '/app/Views/partials/banner.php'; ?>

<section class="section">
  <div class="container container--narrow">
    <div class="section-head">
      <p class="eyebrow">— ¿POR QUÉ ELEGIRNOS? —</p>
      <h2><?= e($data['servicesTitle']) ?></h2>
      <p class="section-sub"><?= e($data['servicesSub']) ?></p>
    </div>
    <div class="grid-2">
      <?php foreach ($data['services'] as $i => $s): ?>
        <div class="service-card">
          <div class="service-head">
            <div class="service-num"><?= e(str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT)) ?></div>
            <h3><?= e($s['title']) ?></h3>
          </div>
          <p><?= e($s['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require BASE_PATH . '/app/Views/partials/cta.php'; ?>
